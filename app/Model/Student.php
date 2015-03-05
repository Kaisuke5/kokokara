<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/02/26
 * Time: 9:38
 */
App::uses('Security', 'Utility');

class Student extends AppModel{
	//タグアソシエーション
	public $hasAndBelongsToMany = array(
		/*
		'Apply' => array(
			'className'              => 'Event',
			'joinTable'              => 'applies_events',
			'foreignKey'             => 'student_id',
			'associationForeignKey'  => 'event_id',
			'unique'                 => false,
			'conditions'             => '',
			'fields'                 => '',
			'order'                  => '',
			'limit'                  => '',
			'offset'                 => '',
			'finderQuery'            => '',
			'deleteQuery'            => '',
			'insertQuery'            => ''
		),
		'Log' => array(
			'className'              => 'Event',
			'joinTable'              => 'events_logs',
			'foreignKey'             => 'student_id',
			'associationForeignKey'  => 'event_id',
			'unique'                 => false,
			'conditions'             => '',
			'fields'                 => '',
			'order'                  => '',
			'limit'                  => '',
			'offset'                 => '',
			'finderQuery'            => '',
			'deleteQuery'            => '',
			'insertQuery'            => ''
		)*/
	);

	//FBアソシエーション
	public $hasOne = array(
		"FacebookUser" => array(
			'className' => 'FacebookUser',
			'foreignKey' => 'student_id'
		)
	);



	public function loadModel($model_name) {
		App::uses($model_name,'Model');
		$this->{$model_name} = new $model_name();
	}



	#パスワードハッシュ化
	public function beforeSave($options = array()){
		if(isset($this->data['Student']['password'])){
			$this->data['Student']['password'] = Security::hash($this->data['Student']['password'], 'sha1', true);
		}
		return true;
	}

}

