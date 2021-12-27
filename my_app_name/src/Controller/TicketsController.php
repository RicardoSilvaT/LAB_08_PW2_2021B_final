<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

/**
 * Tickets Controller
 *
 * @property \App\Model\Table\TicketsTable $Tickets
 *
 * @method \App\Model\Entity\Ticket[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TicketsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */

    public function isAuthorized($user)
    {
        return true;
    }
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['checkout']);
    }
    public function index()
    {
        $tickets = $this->paginate($this->Tickets);

        $this->set(compact('tickets'));
    }

    /**
     * View method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => [],
        ]);

        $this->set('ticket', $ticket);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticket = $this->Tickets->newEntity();
        if ($this->request->is('post')) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }
        $this->set(compact('ticket'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }
        $this->set(compact('ticket'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticket = $this->Tickets->get($id);
        if ($this->Tickets->delete($ticket)) {
            $this->Flash->success(__('The ticket has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function checkout()
    {
        $ticket = $this->Tickets->newEntity();
        if ($this->request->is('post')) {


            $email = new Email();
            $email->transport('default');

            $email->from(['laurencio3000@gmail.com' => 'Compra exitosa'])
            ->to($this->request->getData('email'))
                ->subject('Compra exitosa');
            $email->send("La compra se ha realizado de forma exitosa\n\nIca\nS/.40\n7 Horas De Viaje\n".
            "\nDNI: ". $this->request->getData('dni').
            "\nNombres: ". $this->request->getData('Names').
            "\nApellidos: ". $this->request->getData('Surnames').
            "\nOrigen: ". $this->request->getData('origen').
            "\nDestino: ". $this->request->getData('destination')
        );

            // $email2 = new Email();
            // $email2->transport('default');


            // $email2->from(['laurencio3000@gmail.com' => 'Compra exitosa'])
            // ->to($this->request->session()->read('Auth.User.email'))
            //     ->subject('Compra exitosa');

            // $email2->send("La compra se ha realizado de forma exitosa\n\nIca\nS/.40\n7 Horas De Viaje\n" .
            // "\nDNI: " . $this->request->getData('dni') .
            // "\nNombres: " . $this->request->getData('Names') .
            // "\nApellidos: " . $this->request->getData('Surnames'));

            return $this->redirect("/");
                }
        $this->set(compact('ticket'));
    }
}
