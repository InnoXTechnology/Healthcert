<?php
	/**
	* 
	*/
	class DOA2StaffPanelController extends AppController
	{

		public $uses = array('User','Exporter','Packer','PackingHouse','Request','Exportdetail','Attachment','Analysis');
		public $components = array('RequestHandler');
		
		public function index()
		{
			$analyses = $this->Analysis->find('all');
			$this->set(compact('analyses'));
		}
	}
?>