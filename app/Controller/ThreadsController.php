<?php

class ThreadsController extends AppController {


	
	public function addThread($userid2){
		// print_r($userid2);die();
		//Tao moi thread trong database
		$data['Thread'] = array(
			'threadname' => $this->Auth->user()['username'].$userid2,
			'userid1' => $this->Auth->user()['id'],
			'userid2' => $userid2
			);
		//check exists
		$result = $this->Thread->find('first',array('conditions' => array('Thread.threadname' => $data['threadname'])));
		if(!$result){
			$this->Thread->create();
			if($this->Thread->save($data)){
				$threadid = $this->Thread->find('first', array('conditions' => array('Thread.threadname' => $this->Auth->user()['username'].$userid2)))['Thread']['id'];
			// print_r($threadid);die();
			//send userid2 tới messages/index.php để tìm kiếm user2
				$this->redirect(array('controller' => 'users', 'action' => 'index', $userid2, $threadid));
			}
		}
	}
}