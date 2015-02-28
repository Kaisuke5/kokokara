<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/02/26
 * Time: 9:41
 */

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

		//Session が空だったら
		if(!$this->Session->read('myData')){
			$this->redirect(array('controller' => 'students', 'action' => 'login'));
		}else{
			$id=$this->Session->read("myData")['Student']['id'];

			$this->set('myData', $this->Session->read('myData'));
			$this->set('events', $this->Event->find("all"));
		}
	}

	#新規登録処理
	public function add(){

	}

	#ログイン処理
	public function login(){

	}

	#ログアウト処理
	public function logout(){
		$this->Session->delete('myData');
		$this->redirect(array('action' => 'login'));
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
