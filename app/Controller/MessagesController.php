<?php
//Import controller

class MessagesController extends AppController{
	

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow(array('addMessage','index'));
	}
	
	public function index($userid2= null, $threadid = null){
		// //get Messages
		// //$this->set('messages', $this->Message->find('all'));
		// $this->set('Session', $this->Auth->user());
		// if(isset($userid2) && isset($threadid)){
		// 	$messages = $this->Message->find('first', array('conditions'=> array('Message.threadid' => $threadid)));
		// 	// print_r($messages);die();
		// 	$this->redirect(array('controler'=>'users', 'action' => 'index', $userid2))
		// }
	}

	public function addMessage(){
		if($this->request->is('post')){
			// pr($this->request->data);die();
			$this->Message->create();
			if($this->Message->save($this->data)){
				//$this->Session->setFlash('Your message has been sent');
				//$this->redirect(array('action' => 'add'));
				//sau khi submit thi se redirect ngay tai do
				$this->redirect(array('controller' => 'users', 'action' => 'index'));
			}
			else{
				$this->Session->setFlash('Your message could not be sent. Please, try again');
			}
		}
	}
}