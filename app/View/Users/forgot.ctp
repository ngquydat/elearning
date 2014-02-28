<?php

echo $this->Form->create('User', array('controller' => 'users','action' => 'forgot'));
echo $this->Form->input('email', array('label' => 'Enter your email'));
echo $this->Form->end('Reset Password');


?>