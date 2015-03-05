<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/03/04
 * Time: 11:22
 */
class Etag extends AppModel{
	public $useTable = "etags";
<<<<<<< HEAD
	public $hasAndBelongsToMany = array(
		"Event"=>array(
			"className"=>"Event",
			"join_table"=>"etags_events",
			"foreignKey"=>"etag_id",
			"associationForeignKey"=>"event_id",
		),
	);



=======
	public $hasAndBelongsToMany = 'Event';
>>>>>>> 3c592db655e42a047732dbf4fe2a9308af64c5bb
}
