<?php
/**
* 
*/
class UsersController extends AppController
{
	public $helpers = array('Html', 'Form');
	
	function index()
	{
		$this->redirect(array('action' => 'login'));
		//$this->Session->setFlash('Test');
		//debug($this->request->data);
	}

	function export_regis()
	{
		//$this->Session->setFlash('export_regis');
	}

	function login()
	{

	}

}
?>