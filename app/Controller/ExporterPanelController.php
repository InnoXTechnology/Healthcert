<?php
/**
* 
*/
class ExporterPanelController extends AppController
{
	public $uses = array('User','Exporter');
	
	public function beforeFilter()
	{
		$user = $this->Exporter->findById($this->Auth->user('id'));
		$first_name = $user['Exporter']['firstname'];
		$this->set(compact('first_name'));
	}
	
	public function index()
	{

	}

	public function requestApp()
	{

	}

	public function manual()
	{

	}
}
?>