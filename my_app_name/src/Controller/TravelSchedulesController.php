<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TravelSchedules Controller
 *
 * @property \App\Model\Table\TravelSchedulesTable $TravelSchedules
 *
 * @method \App\Model\Entity\TravelSchedule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TravelSchedulesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $travelSchedules = $this->paginate($this->TravelSchedules);
        
        $this->set(compact('travelSchedules'));
    }

    /**
     * View method
     *
     * @param string|null $id Travel Schedule id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $travelSchedule = $this->TravelSchedules->get($id, [
            'contain' => [],
        ]);

        $this->set('travelSchedule', $travelSchedule);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $travelSchedule = $this->TravelSchedules->newEntity();
        if ($this->request->is('post')) {
            $travelSchedule = $this->TravelSchedules->patchEntity($travelSchedule, $this->request->getData());
            if ($this->TravelSchedules->save($travelSchedule)) {
                $this->Flash->success(__('The travel schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The travel schedule could not be saved. Please, try again.'));
        }
        $this->set(compact('travelSchedule'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Travel Schedule id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $travelSchedule = $this->TravelSchedules->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $travelSchedule = $this->TravelSchedules->patchEntity($travelSchedule, $this->request->getData());
            if ($this->TravelSchedules->save($travelSchedule)) {
                $this->Flash->success(__('The travel schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The travel schedule could not be saved. Please, try again.'));
        }
        $this->set(compact('travelSchedule'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Travel Schedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $travelSchedule = $this->TravelSchedules->get($id);
        if ($this->TravelSchedules->delete($travelSchedule)) {
            $this->Flash->success(__('The travel schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The travel schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



    public function eliminar()
    {
        $this->viewBuilder()->setLayout('ajax');
        $this->autoRender = false;
        $id = $this->request->getData('Travel_ID');
        $comp = $this->TravelSchedules->get($id);
        $mensaje = '';
        // $name = $comp->Company_Name;
        if ($this->TravelSchedules->delete($comp)) {
            $mensaje = 'The Travel Schedules fue eliminada.';
        } else {
            $mensaje = 'The Travel Schedules no fue eliminada';
        }
        echo json_encode($mensaje);
    }
    public function ver()
    {
        $this->viewBuilder()->setLayout('ajax');
        $this->autoRender = false;

        $id = $this->request->getData('id');
        $comp = $this->TravelSchedules->get($id);


        echo json_encode($comp);
    }
    public function editar()
    {
        if ($this->request->is('ajax')) {
            $id = $this->request->getData('Travel_ID');
            $datos = $this->request;
            $travel = $this->TravelSchedules->get($id, [
                'contain' => [],
            ]);

            //deberia usarse patchEntity pero me da error, asi que cambio los valores uno por unoTravel_ID
            $travel->Travel_Schedules_Date = $datos->getdata('Date');
            $travel->Travel_Schedules_Hour = $datos->getdata('Hour');
            $travel->Travel_Schedules_Transport_Code = $datos->getdata('Vehicle_ID');
            $travel->Travel_Schedules_Code_Route = $datos->getdata('Route_ID');
            // $travel->Travel_Schedules_Registration_Status = $datos->getdata('Registration_Status');

            if ($datos->getdata('Registration_Status') == 'false') {
                $travel->Travel_Schedules_Registration_Status = false;
            } else if ($datos->getdata('Registration_Status') == 'true') {
                $travel->Travel_Schedules_Registration_Status = false;
            }

            if ($this->TravelSchedules->save($travel)) {
                echo json_encode(array(
                    "status" => 1,
                    "boolean" => true,
                    "message" => "El horario de viajes fue actualizada",
                    "Company_id" => $id,
                ));
                exit;
            }
            echo json_encode(array(
                "status" => 0,
                "boolean" => false,
                "message" => "El horario de viajes NO fue actualizada"
            ));

            exit;
        }
    }
    public function crear()
    {
        if ($this->request->is('ajax')) {

            $datos = $this->request;

            $travel = $this->TravelSchedules->newEntity();
            $travel->Travel_Schedules_Date = $datos->getdata('Date');
            $travel->Travel_Schedules_Hour = $datos->getdata('Hour');
            $travel->Travel_Schedules_Transport_Code = $datos->getdata('Vehicle_ID');
            $travel->Travel_Schedules_Code_Route = $datos->getdata('Route_ID');
            // $travel->Company_Web_Site = $datos->getdata('Company_Web_Site');

            if ($datos->getdata('Registration_Status') == 'false') {
                $travel->Travel_Schedules_Registration_Status = false;
            } else if ($datos->getdata('Registration_Status') == 'true') {
                $travel->Travel_Schedules_Registration_Status = false;
            }
            if ($this->TravelSchedules->save($travel)) {
                echo json_encode(array(
                    "status" => 1,
                    "boolean" => true,
                    "message" => "El horario de viajesLa Compania fue guardada",
                    "Company_id" => $travel->Company_id
                ));
                exit;
            }
            echo json_encode(array(
                "status" => 0,
                "boolean" => false,
                "message" => "El horario de viajes fue guardada"
            ));
            exit;
        }
    }
}
