<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/02/26
 * Time: 9:41
 */
App::uses('Security', 'Utility');

class StudentsController extends AppController{
	#フォームヘルパー
	public $helpers = array('Html', 'Form');

	#共通スクリプト
	public function beforeFilter(){
		#ページタイトル設定
		$this->set('title_for_layout', 'kokokara');
	}

	#ユーザーインデックス
	public function index(){
		$this->loadModel("Event");
		$this->set('events', $this->Event->find("all"));
		//Session が空じゃなかったら
		if($this->Session->read('myData')){
			//$id=$this->Session->read("myData")['Student']['id'];
			$this->set('myData', $this->Session->read('myData'));
		}
	}

	//ログイン時間update
	public function updateLogin(){
		if($this->Session->read('myData')){
			$id=$this->Session->read("myData")['Student']['id'];
			$this->Student->updateLogin($id);
		}
		return;
	}


	#新規登録処理
	public function signup(){
		//Session が入っていたら
		if($this->Session->read('myData')){
			$this->set('myData', $this->Session->read('myData'));
		}else{
			$this->set('myData', null);
		}
		//フォーム情報受信
		if($this->request->is('post')){
			//debug($this->request->data);
			//emailがユニークかどうか
			$user = $this->Student->find('first', array(
				'conditions' => array('Student.email' => $this->request->data['Student']['email'])
			));
			if(!$user){ //新規ユーザだったら
				if($this->Student->save($this->request->data)){
					$this->Session->setFlash('ユーザ登録に成功しました');
					$this->Session->write('myData', $this->Student->findById($this->request->data['Student']['id']));
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('ユーザ登録に失敗しました');
				}
			} else{ //既存のユーザがいたら
				$this->Session->setFlash('このメールアドレスは既に登録されています');
			}
		}
	}

	#ログイン処理
	public function login(){
		if($this->request->is('post')){
			//password ハッシュ化
			$password = Security::hash($this->request->data['Student']['password'], 'sha1', true);
			//ログイン処理
			$student = $this->Student->find('first', array(
				'conditions' => array('Student.email' => $this->request->data['Student']['email'], 'Student.password' => $password),
				'limit' => 1
			));
			if($student){
				$this->Session->setFlash('ログイン完了です');
				$this->Session->write('myData', $student);
				$this->redirect(array('action' => 'index'));
			} else{
				$this->Session->setFlash('ユーザ名かパスワードが違います');
			}
		}

	}

	#ログアウト処理
	public function logout(){
		$this->Session->delete('myData');
		$this->redirect(array('action' => 'index'));
	}

	#更新処理
	public function edit(){
		if($this->request->is('post')){
			if($this->Student->save($this->request->data)){
				$this->Session->setFlash('更新完了！');
				$this->Session->write('myData', $this->Student->findById($this->request->data['Student']['id']));
				$this->redirect(array('controller' => 'students', 'action' => 'index'));
			}else{
				$this->Session->setFlash('更新失敗！');
			}
		}
	}

}
