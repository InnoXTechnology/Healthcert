<?php 
/**
* 
*/
class DOAHeadPanelController extends AppController
{
	public $uses = array('User','Exporter','Packer','PackingHouse','Request','Exportdetail','Attachment','Analysis', 'Sample');
	
	public function beforeFilter()
	{
		if ($this->Auth->user('type') == 'E') {
			$this->redirect(array('controller' => 'ExporterPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'D') {
			$this->redirect(array('controller' => 'DOAStaffPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'F') {
			$this->redirect(array('controller' => 'DOAStaff2Panel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'H') {
			$this->redirect(array('controller' => 'LabAdminPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'T') {
			$this->redirect(array('controller' => 'LabStaffPanel', 'action' => 'sample'));
		}

		$first_name = $this->Auth->user('username');
		$this->set(compact('first_name'));
	}

	public function index()
	{
		//Find
		$requests = $this->Request->findAllByStatusAndStatusFinal('อนุมัติ','');
		$this->set(compact('requests'));
	}

	public function view_lab_report($id)
	{
		if (isset($id)) {
			$request = $this->Request->findById($id);
			$analyses = $this->Analysis->findAllBySampleId($request['Sample'][0]['id']);
			$this->set(compact('request', 'analyses'));
		}
		else {
			$this->redirect(array('action' => 'index'));
			$this->Session->setFlash('Access denied');
		}
		
	}

	public function view_report_pk11($id = null)
	{
		if ($this->request->is('post')) {
			$this->redirect(array('action' => 'index'));
		}
		if (isset($id)) {
			$data = $this->Request->findById($id);
			$this->request->data = $data;

		} else {
			$this->redirect(array('action' => 'index'));
			$this->Session->setFlash('Access denied');
		}
	}

	public function apply_status($id = null, $status = null) {
		if (isset($id) && isset($status)) {
			$data = $this->Request->findById($id);
			if ($status == 'pass') {
				$stat = 'อนุมัติ';
			} else if ($status == 'fail') {
				$stat = 'ไม่อนุมัติ';
			} else {
				$this->redirect(array('action' => 'index'));
				$this->Session->setFlash('Access denied');
				return;
			}
			$this->Request->query("UPDATE requests
				SET status_final='".$stat."'
				WHERE requests.id=".$data['Request']['id']);
			$this->Session->setFlash('Operation success');
			$this->redirect(array('action' => 'index'));
		} else {
			$this->redirect(array('action' => 'index'));
			$this->Session->setFlash('Access denied');
		}
	}

}
?>