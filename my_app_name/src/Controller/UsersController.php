<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect("/");
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
    }
    public function isAuthorized($user)
    {
        // if ($this->request->session()->read('Auth.User.role') == 'admin') {
            return true;
        // }
        // return false;
    }

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout', 'login', 'add']);
    }

    public function logout()
    {
        $this->Flash->success('You are now logged out.');
        $this->Auth->logout();
        return $this->redirect("/");
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                $email = new Email();
                $email->transport('default');

                $email->from(['laurencio3000@gmail.com' => 'Registro exitoso'])
                    ->to($this->request->getData('email'))
                    ->subject('Registro exitoso');
                $email->send('Usted ha sido registrado exitosamente');

                return $this->redirect("/");
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                // return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function enviar()
    {
        $email = new Email();
        $email->transport('default');

        $email->from(['laurencio3000@gmail.com' => 'Registro exitoso'])
            ->to('veyito30000@gmail.com')
            ->subject('Registro exitoso');
        $email->send('Usted ha sido registrado exitosamente');
    }

    public function profile($id = null)
    {

        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $this->set('aaaa', 'hola');

            $fileTmpPath = $_FILES['submittedfile']['tmp_name'];
            $fileName = $_FILES['submittedfile']['name'];
            $fileSize = $_FILES['submittedfile']['size'];
            $fileType = $_FILES['submittedfile']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            $allowedfileExtensions = array('jpg', 'gif', 'png');


            $nuevo_path = "imagenes/" . $id.'.'. $fileExtension;

            move_uploaded_file($fileTmpPath, $nuevo_path);

            $user->profile_picture = $id . '.' . $fileExtension;
            $session = $this->request->session();
            $session->write('Auth.User.profile_picture', $id . '.' . $fileExtension);

            if ($this->Users->save($user)) {

                // return $this->redirect(['action' => 'index']);
            }



            // $user->profile_picture = $dir;
            $this->set('fileName', $fileName);
            $this->set('fileSize', $fileSize);
            $this->set('fileType', $fileType);
            $this->set('fileExtension', $fileExtension);

            $this->set('hola',$nuevo_path);

            $this->set('eeeeeee', 'hola');

            // $this->Flash->error(__('The user could not be saved.' . $fileName . ' Please, try again.'));
            return $this->redirect("/");
        }
        $this->set('fffff', 'hola');
        $this->set(compact('user'));
        
    }
}
