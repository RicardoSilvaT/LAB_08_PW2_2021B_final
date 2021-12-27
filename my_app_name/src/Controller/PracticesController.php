<?php
namespace App\Controller;

use App\Controller\AppController;

class PracticesController extends AppController
{

    public function index()
    {
	$session = $this->getRequest()->getSession();
	$session->write('Config.language', 'es');

	/**/
	$session->write('PW2.teacher.name', 'Richart Escobedo');
	$session->write('PW2.teacher.email', 'richarteq@gmail.com');
	/**/
	$session->write('IVG', '0.10');
    }
	
	public function leer(){
		$session = $this->getRequest()->getSession();
		$this->Flash->success( $session->read('PW2.teacher.email'));
	}
}