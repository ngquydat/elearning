<?php
class Message extends AppModel{
	public $primaryKey = 'id';
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'userid'
			),
		'Thread' => array(
			'className' => 'Thread',
			'foreignKey' => 'threadid'
			)
		);
}