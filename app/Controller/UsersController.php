<?php
/**
* 
*/
class UsersController extends AppController
{
	public $uses = array('User','Exporter', 'Packer');

	public function beforeFilter()
	{
		$this->Auth->allow('export_regis', 'forget_pass', 'packer_regis','adminregis');
	}

	public function forget_pass()
	{
		if ($this->request->is('post'))
		{
			
		}
	}

	public function login()
	{

		if ($this->Auth->user('type') == 'E') {
			$this->redirect(array('controller' => 'ExporterPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'D') {
			$this->redirect(array('controller' => 'DOAStaffPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'H') {
			$this->redirect(array('controller' => 'LabAdminPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'T') {
			$this->redirect(array('controller' => 'LabStaffPanel', 'action' => 'index'));
		}

		if ($this->request->is('post'))
		{
			if ($this->Auth->login())
			{
				if ($this->Auth->user('type') == 'E') {
					$this->redirect(array('controller' => 'ExporterPanel', 'action' => 'index'));
				}
				else if($this->Auth->user('type') == 'D') {
					$this->redirect(array('controller' => 'DOAStaffPanel', 'action' => 'index'));
				}
				else if($this->Auth->user('type') == 'H') {
					$this->redirect(array('controller' => 'LabAdminPanel', 'action' => 'index'));
				}
				else if($this->Auth->user('type') == 'T') {
					$this->redirect(array('controller' => 'LabStaffPanel', 'action' => 'index'));
				}
			}
			else
			{
				$this->Session->setFlash('Invalid username or password, try again');
			}
		}
	}

	public function logout() {
		$this->Auth->logout();
		$this->redirect(array('action' => 'login'));
	}

	public function export_regis() {
		if ($this->request->is('post'))
		{
			if (empty($this->request->data['User']['password']) || $this->request->data['User']['password'] != $this->request->data['User']['repassword'])
			{
				$this->request->data['User']['password'] = '';
				$this->request->data['User']['repassword'] = '';
				$this->Session->setFlash('Password doesn\'t match.');
				return;
			}

			
			$this->Exporter->set($this->request->data);

			if (!$this->Exporter->validates()) {
				$this->Session->setFlash('Please fill all fleid.');
				return;
			}

			$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
			
			if ($this->User->save($this->request->data))
			{
				$data = $this->request->data;
				$exporter = $data['Exporter'];
				$lastUser = $this->User->findByUsername($data['User']['username']);
				$exporter['user_id'] = $lastUser['User']['id'];
				if ($this->Exporter->save($exporter)) {
					$this->Session->setFlash('The user has been saved.');
					$this->redirect(array('action' => 'login'));
				}
			}
			else
			{
				$this->request->data['User']['password'] = '';
				$this->request->data['User']['repassword'] = '';
				$this->Session->setFlash('The user could not be saved. Please try again.');
			}
			
		}
	}

	public function adminregis($value = null)
	{
		if (isset($value) && $value == 'health_cert_ad') {
			if ($this->request->is('post')) {
				if (empty($this->request->data['User']['password']) || $this->request->data['User']['password'] != $this->request->data['User']['repassword'])
				{
					$this->request->data['User']['password'] = '';
					$this->request->data['User']['repassword'] = '';
					$this->Session->setFlash('Password doesn\'t match.');
					return;
				}

				$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);

				if ($this->User->save($this->request->data))
				{
					$this->Session->setFlash('The user has been saved.');
					$this->redirect(array('action' => 'login'));
				}
				else
				{
					$this->request->data['User']['password'] = '';
					$this->request->data['User']['repassword'] = '';
					$this->Session->setFlash('The user could not be saved. Please try again.');
				}
			
			}
		} else {
			$this->Session->setFlash('Access denied');
			$this->redirect(array('action' => 'index'));
		}
	}
}
?>