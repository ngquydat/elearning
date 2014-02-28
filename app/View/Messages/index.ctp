<?php
if($Session['id']== $userid2){
			//Hien thi Chat Frame

	echo "<h1>ChatBox</h1>";
	foreach($messages as $message): 
		echo $message['Message']['username'].": ". $message['Message']['content'] . "   (" . $message['Message']['created'] . ')<br>';
	endforeach;
	unset ($message);



	echo $this->Form->create('Message', array('controller' => 'messages', 'action' => 'addMessage')); 
	echo "<fieldset>";
	echo "<legend>Send Message</legend>";

	echo $this->Form->input('username', array('type' => 'hidden', 'readonly' => true,'value'=>$Session['username']));
	echo $this->Form->input('userid', array('type' => 'hidden', 'readonly' => true, 'value'=>$Session['id']));
	echo $this->Form->input('content', array('type' => 'text','label' => 'Chat'));

	echo "</fieldset>";
	echo $this->Form->end("Submit");
}
?>
