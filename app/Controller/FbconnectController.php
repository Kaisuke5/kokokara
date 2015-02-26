<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/02/26
 * Time: 9:41
 */
class Fbconnects extends AppController{
	#フォームヘルパー
	public $helpers = array('Html', 'Form');

	#共通スクリプト
	public function beforeFilter(){
		#ページタイトル設定
		$this->set('title_for_layout', 'kokokara');

	}

	#ユーザーインデックス
	public function index(){

	}

	#新規登録処理
	public function add(){

	}

	#ログイン処理
	public function login(){

	}

	#ログアウト処理
	public function logout(){

	}

}