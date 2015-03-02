<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/02/26
 * Time: 9:38
 */
App::uses('Security', 'Utility');

class Student extends AppModel{
	public $hasOne = array("FacebookUser" => array(
		'className' => 'FacebookUser',
		'foreignKey' => 'student_id'
	));

	public function getApply1($id){
		$this->loadModel("Apply1");
		$applys=$this->Apply1->find("all",array("conditions"=>array("student_id"=>$id)));
		return $applys;

	}

	public function getLog1($id){
		$this->loadModel("Log1");
		$logs=$this->Log1->find("all",array("conditions"=>array("student_id"=>$id)));
		return $logs;

	}


	public function loadModel($model_name) {
		App::uses($model_name,'Model');
		$this->{$model_name} = new $model_name();
	}


	public function adminfindAll(){
		$students=$this->find("all");

		$i=0;
		foreach($students as $student){
			$id=$student['Student']['id'];
			$events=array();
			$events["Apply1"]=$this->getApply1($id);
			$events["Log1"]=$this->getLog1($id);
			$students[$i]+=$events;
			$i++;
		}

		return $students;
	}

	#パスワードハッシュ化
	public function beforeSave($options = array()){
		if(isset($this->data['Student']['password'])){
			$this->data['Student']['password'] = Security::hash($this->data['Student']['password'], 'sha1', true);
		}
		return true;
	}

}

