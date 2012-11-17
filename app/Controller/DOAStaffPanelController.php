<?php
/**
* 
*/
class DOAStaffPanelController extends AppController
{
	public $uses = array('User','Exporter','Packer','PackingHouse','ExporterRequest','ExportDetail','Attachment');
	public $components = array('RequestHandler');
	
	public function beforeFilter()
	{
		if ($this->Auth->user('type') == 'E') {
			$this->redirect(array('controller' => 'ExporterPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'H') {
			$this->redirect(array('controller' => 'LabAdminPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'T') {
			$this->redirect(array('controller' => 'LabStaffPanel', 'action' => 'index'));
		}
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