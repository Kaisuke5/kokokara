<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/02/26
 * Time: 9:38
 */
class Student extends AppModel{
	public $hasOne = array("FacebookUser" => array(
		'className' => 'FacebookUser',
		'foreignKey' => 'student_id'
	));

}

