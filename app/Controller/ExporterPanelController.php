<?php
/**
* 
*/
class ExporterPanelController extends AppController
{
	public $uses = array('User','Exporter','Packer','PackingHouse','ExporterRequest','ExportDetail','Attachment');
	public $components = array('RequestHandler');
	
	public function beforeFilter()
	{
		if($this->Auth->user('type') == 'D') {
			$this->redirect(array('controller' => 'DOAStaffPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'A') {
			$this->redirect(array('controller' => 'LabAdminPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'L') {
			$this->redirect(array('controller' => 'LabStaffPanel', 'action' => 'index'));
		}
		$user = $this->Exporter->findByUserId($this->Auth->user('id'));
		$first_name = $user['Exporter']['name'];
		$this->set(compact('first_name'));
	}
	
	public function index()
	{
		$requests = $this->ExporterRequest->findAllByExporterId($this->Auth->user('id'));
		//debug($requests);
		$this->set(compact('requests'));
	}

	public function requestApp()
	{
		if($this->request->is('post')) {
			$data = $this->request->data;
			if($this->PackingHouse->validates() && $this->ExportDetail->validates()) {
				$packingHouse = $data['PackingHouse'];
				$packingHouse['packer_id'] = $data['Packer']['id'];

				if ($this->PackingHouse->save($packingHouse) && $this->ExportDetail->save($this->request->data)) {

					$request = $data['ExporterRequest'];
					$lastUser = $this->PackingHouse->findByCode($data['PackingHouse']['code']);

					$request['exporter_id'] = $this->Auth->user('id');
					$request['packer_id'] = $data['Packer']['id'];
					$request['packingHouse_id'] = $lastUser['PackingHouse']['id'];
					
					if ($this->ExporterRequest->save($request)) {
						$this->Session->setFlash('The request has been saved.');
						$this->redirect(array('action' => 'index'));
					}
					else $this->Session->setFlash('The request could not be saved. Please try again.');
				}
				else $this->Session->setFlash('The request could not be saved. Please try again.');
			}
			else $this->Session->setFlash('The request could not be saved. Please try again.');
		}
	}

	public function manual()
	{

	}


	public function view_report_pk11($id = null)
	{
		if ($this->request->is('post')) {
			$this->redirect(array('action' => 'index'));
		}
		if (isset($id)) {
			$data = $this->ExporterRequest->findById($id);
			if ($data['ExporterRequest']['exporter_id'] === $this->Auth->user('id')) {
				$this->request->data = $data;
				//debug($this->request->data);
			} else {
				$this->redirect(array('action' => 'index'));
				$this->Session->setFlash('Access denied');
			}

		} else {
			$this->redirect(array('action' => 'index'));
			$this->Session->setFlash('Access denied');
		}
	}

	public function delete_by_id($id = null)
	{
		if (isset($id)) {
			$data = $this->ExporterRequest->findById($id);
			if ($data['ExporterRequest']['exporter_id'] === $this->Auth->user('id')) {
				if ($this->ExporterRequest->delete($id) && $this->ExporterRequest->delete($data['ExporterRequest']['packingHouse_id'])) {
					$this->redirect(array('action' => 'index'));
					$this->Session->setFlash('This requests was cancel.');
				}
				else {
					$this->redirect(array('action' => 'index'));
					$this->Session->setFlash('Cannot Delete Request. Plases contect  ');
				}
			} else {
				$this->redirect(array('action' => 'index'));
				$this->Session->setFlash('Access denied');
			}
		} else {
			$this->redirect(array('action' => 'index'));
			$this->Session->setFlash('Access denied');
		}
	}
}
?>