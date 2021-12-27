<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Company Controller
 *
 * @property \App\Model\Table\CompanyTable $Company
 *
 * @method \App\Model\Entity\Company[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
/**
 * Boletos Controller
 *
 * @property \App\Model\Table\BoletosTable $Boletos
 *
 * @method \App\Model\Entity\Boleto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompanyController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $company = $this->paginate($this->Company);

        $this->set(compact('company'));
    }
    public function isAuthorized($user)
    {
        return true;
    }
    /**
     * View method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $company = $this->Company->get($id, [
            'contain' => [],
        ]);

        $this->set('company', $company);
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $company = $this->Company->newEntity();
        if ($this->request->is('post')) {
            $company = $this->Company->patchEntity($company, $this->request->getData());
            if ($this->Company->save($company)) {
                $this->Flash->success(__('The company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company could not be saved. Please, try again.'));
        }
        $this->set(compact('company'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $company = $this->Company->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $company = $this->Company->patchEntity($company, $this->request->getData());
            if ($this->Company->save($company)) {
                $this->Flash->success(__('The company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company could not be saved. Please, try again.'));
        }
        $this->set(compact('company'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $company = $this->Company->get($id);
        if ($this->Company->delete($company)) {
            $this->Flash->success(__('The company has been deleted.'));
        } else {
            $this->Flash->error(__('The company could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function eliminar(){
        $this->viewBuilder()->setLayout('ajax');
        $this->autoRender = false;
        $id = $this->request->getData('id');
        $comp = $this->Company->get($id);
        $mensaje = '';
        $name = $comp->Company_Name;
        if($this->Company->delete($comp)){
            $mensaje = 'The company ' .$name. 'fue eliminada.';
        }
        else{
            $mensaje = 'The company ' .$name. 'no fue eliminada';
        }
        echo json_encode($mensaje);
    }
    public function ver()
    {
        $this->viewBuilder()->setLayout('ajax');
        $this->autoRender = false;

        $id = $this->request->getData('id');
        $comp = $this->Company->get($id);

        
        echo json_encode($comp);
    }
    public function editar()
    {
        if ($this->request->is('ajax')) {
            $id = $this->request->getData('Company_id');
            $datos =$this->request;
            $company = $this->Company->get($id, [
                'contain' => [],
            ]);

            //deberia usarse patchEntity pero me da error, asi que cambio los valores uno por uno
            $company->Company_Name = $datos->getdata('Company_Name');
            $company->Company_Adress_Code = $datos->getdata('Company_Adress_Code');
            $company->Company_Transport_Number = $datos->getdata('Company_Transport_Number');
            $company->Company_Mail = $datos->getdata('Company_Mail');
            $company->Company_Web_Site = $datos->getdata('Company_Web_Site');

            if($datos->getdata('Company_Registration_Status') == 'false'){
                $company->Company_Registration_Status = false;
            }else if($datos->getdata('Company_Registration_Status') == 'true'){
                $company->Company_Registration_Status = false;
            }

            if ($this->Company->save($company)) {    
                echo json_encode(array(
                    "status" => 1,
                    "boolean" => true,
                    "message" => "La Compania fue actualizada",
                    "Company_id" => $id,
                    )); 
                exit;
            }
            echo json_encode(array(
                "status" => 0,
                "boolean" => false,
                "message" => "La Compania NO fue actualizada"
            )); 
    
            exit;
        }
    
    }
    public function crear()
    {
        if ($this->request->is('ajax')) {

            $datos =$this->request;

            $company = $this->Company->newEntity();
            $company->Company_Name = $datos->getdata('Company_Name');
            $company->Company_Adress_Code = $datos->getdata('Company_Adress_Code');
            $company->Company_Transport_Number = $datos->getdata('Company_Transport_Number');
            $company->Company_Mail = $datos->getdata('Company_Mail');
            $company->Company_Web_Site = $datos->getdata('Company_Web_Site');

            if($datos->getdata('Company_Registration_Status') == 'false'){
                $company->Company_Registration_Status = false;
            }else if($datos->getdata('Company_Registration_Status') == 'true'){
                $company->Company_Registration_Status = false;
            }
            if ($this->Company->save($company)) {
                echo json_encode(array(
                    "status" => 1,
                    "boolean" => true,
                    "message" => "La Compania fue guardada",
                    "Company_id" => $company->Company_id
                )); 
                exit;
            }
            echo json_encode(array(
                "status" => 0,
                "boolean" => false,
                "message" => "La Compania NO fue guardada"
            )); 
            exit;
        }
    }
    public function checkout()
    {
        $boleto = $this->Boletos->newEntity();
        if ($this->request->is('post')) {
            $boleto = $this->Boletos->patchEntity($boleto, $this->request->getData());
            if ($this->Boletos->save($boleto)) {
                $this->Flash->success(__('The boleto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The boleto could not be saved. Please, try again.'));
        }
        $this->set(compact('boleto'));
    }
    // public function crearboleta()
    // {
        // // $boleto = $this->Boletos->newEntity();
        // if ($this->request->is('post')) {

        //     $datos =$this->request->getdata();

        //     // $company = $this->Company->newEntity();
        //     // $company->Company_Name = $datos->getdata('Company_Name');
        //     // $company->Company_Adress_Code = $datos->getdata('Company_Adress_Code');
        //     // $company->Company_Transport_Number = $datos->getdata('Company_Transport_Number');
        //     // $company->Company_Mail = $datos->getdata('Company_Mail');
        //     // $company->Company_Web_Site = $datos->getdata('Company_Web_Site');



        //     // $boleto = $this->Boletos->patchEntity($boleto, $this->request->getData());
        //     // if ($this->Boletos->save($boleto)) {
        //     //     $this->Flash->success(__('The boleto has been saved.'));

        //     //     return $this->redirect(['action' => 'index']);
        //     // }
        //     // $this->Flash->error(__('The boleto could not be saved. Please, try again.'));
        //     $this->set('gg', "hola");
        // }
        // $this->set('nn', "n");
        // // $this->set(compact('boleto'));
        // $this->set('comp', $datos);
        // return $this->redirect(['action' => 'index']);
    // }
}
