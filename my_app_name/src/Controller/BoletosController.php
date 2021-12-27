<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Boletos Controller
 *
 * @property \App\Model\Table\BoletosTable $Boletos
 *
 * @method \App\Model\Entity\Boleto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BoletosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $boletos = $this->paginate($this->Boletos);

        $this->set(compact('boletos'));
    }

    /**
     * View method
     *
     * @param string|null $id Boleto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $boleto = $this->Boletos->get($id, [
            'contain' => [],
        ]);

        $this->set('boleto', $boleto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
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

    /**
     * Edit method
     *
     * @param string|null $id Boleto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $boleto = $this->Boletos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $boleto = $this->Boletos->patchEntity($boleto, $this->request->getData());
            if ($this->Boletos->save($boleto)) {
                $this->Flash->success(__('The boleto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The boleto could not be saved. Please, try again.'));
        }
        $this->set(compact('boleto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Boleto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $boleto = $this->Boletos->get($id);
        if ($this->Boletos->delete($boleto)) {
            $this->Flash->success(__('The boleto has been deleted.'));
        } else {
            $this->Flash->error(__('The boleto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function checkout()
    {
        $boleto = $this->Boletos->newEntity();
        if ($this->request->is('post')) {
            $datos =$this->request;
            $this->set('comp', $datos);

            // $boleto = $this->Boletos->patchEntity($boleto, $this->request->getData());

            $boleto->lastName = $datos->getData('lastName');
            $boleto->firsName = $datos->getData('firsName');
            $boleto->username = $datos->getData('username');
            $boleto->email = $datos->getData('email');
            $boleto->adress = $datos->getData('adress');
            $boleto->adress2 = $datos->getData('adress2');
            
            if ($this->Boletos->save($boleto)) {
                $this->Flash->success(__('The boleto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The boleto could not be saved. Please, try again.'));
            $this->set('nn', $boleto);
            $this->set('gg', $this->request->getData('firsName'));
        }

        $this->set(compact('boleto'));

        
    }
//     $datos =$this->request->getdata();
// $this->set('gg', "hola");
// $this->set('nn', "n");
// $this->set('comp', $datos);
}
