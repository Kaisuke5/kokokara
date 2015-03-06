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
		'Stag',
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
		)
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


	public function nafind(){
		$this->unbindModel(
			array('hasOne' => array('FacebookUser'),
				"hasAndBelongsToMany"=>array("Stag","Apply","Log"))
		);

		$students=$this->find("all");
		return $students;
	}


	//ユーザーのログの総数を返す 使い方はAdminController/studentsにある
	public function getLog($id){
		$this->unbindModel(
			array('hasMany' => array('Image'),
				"hasAndBelongsToMany"=>array("Stag","Apply","Log"))
		);
		$this->loadModel("EventsLog");
		$logs=$this->EventsLog->find("all",
			array( "fields" => array("sum(counter) AS `logs`"),
			"conditions"=>array("student_id"=>$id)));
		if($logs[0][0]["logs"]==null){
			$logs[0][0]["logs"]=0;
		}

		return $logs[0][0];
	}


	public function getApply($id){
		$this->unbindModel(
			array('hasMany' => array('Image'),
				"hasAndBelongsToMany"=>array("Stag","Apply","Log"))
		);
		$this->loadModel("AppliesEvent");
		$applies=$this->AppliesEvent->find("all",
			array( "fields" => array("count(event_id) AS `applies`"),
				"conditions"=>array("student_id"=>$id)));
		if($applies[0][0]["applies"]==null){
			$applies[0][0]["applies"]=0;
		}

		return $applies[0][0];
	}



}

