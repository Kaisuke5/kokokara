<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/03/04
 * Time: 11:04
 */
class EventsLog extends AppModel{
	public $useTable = "events_logs";
	public $belongsTo = array(
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'student_id',
		),
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
		)
	);
}
