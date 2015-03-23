<?php
/**
 * Created by PhpStorm.
 * User: kaishunsuke
 * Date: 2015/02/28
 * Time: 13:34
 */

class EventsController extends AppController{
    public $uses=array("Event");
    public $helpers = array('Html', 'Form');


    public function beforeFilter(){
        //最終ログイン処理
        $myData=$this->Session->read("myData");
        if($myData!=null){
            $this->loadModel('Student');
            $id = $myData['Student']['id'];
            $this->Student->updateLogin($id);
        }
    }



    public function updateLogin(){
        if($this->Session->read('myData')){
            $id=$this->Session->read("myData")['Student']['id'];
            $this->Student->updateLogin($id);
        }
        return;
    }

    public function index(){

        $this->loadModel('EventsLog');
        $this->loadModel('Student');

        $myData=$this->Session->read("myData");
        $this->updateLogin();
        /*if($myData==null){
            $this->redirect(array("controller"=>"Student","action"=>"login"));
        }*/
        $id=$this->request->query["id"];

        //ログ
        $this->EventsLog->goEventsLog($myData['Student']['id'], $id);
        $event=$this->Event->getOriginal($id);

        //もし不正なidなら404
        /*
        if($event==null){

        }
        */
        if($event==null){
            throw new NotFoundException();
        }

        //sessionのmyData更新
        /*
        $myData=$this->Student->find("first",array("conditions"=>array("Student.id"=>$myData['Student']['id'])));
        $this->Session->write('myData', $myData);
        */
        //event取得
        //ジャンルごとのイベント情報を追加したものをcomeventに入れる



        //$comevent=$this->Event->getOriginal($id);
        $this->set("myData",$myData);
        $this->set("event",$event);
        $this->render();


    }



    public function apply(){



    }


    public function goapply(){
        $this->loadModel("AppliesEvent");
        $this->loadModel("Student");

        //requestのgetのパラメーターをeventのidに
        $id=$this->request->query("id");
        //セッション
        $myData=$this->Session->read("myData");
        if(!$myData){
            $this->Session->setFlash('ログインしてください');
            //このページにリダイレクトする処理
            $this->Session->write('apply', $id);
            $this->redirect(array('controller' => 'students', 'action' => 'login'));
        }

        $before=$this->AppliesEvent->find("first",array("conditions"=>array("student_id"=>$myData['Student']['id'],"event_id"=>$id)));

        if($before!=null){
            $this->Session->setFlash("既に申し込んでいます");
            $this->redirect(array("controller"=>"Students","action"=>"index"));
        }

        $this->AppliesEvent->set(array("student_id"=>$myData['Student']['id'],"event_id"=>$id));
        $apply=$this->AppliesEvent->save();

        //sessionのmyData更新
        $myData=$this->Student->find("first",array("conditions"=>array("Student.id"=>$myData['Student']['id'])));
        $this->Session->write('myData', $myData);


        if($apply==false){
            $this->Session->setFlash("申し訳ございません。もう一度やりなおしてください");
            $this->redirect("index");
        }

        //ここにメール関数を書く
        App::uses( 'CakeEmail', 'Network/Email');
        $email = new CakeEmail('gmail');
        $email->from( array( 'mark.sato1111@gmail.com' => 'mark.sato1111@gmail.com'));  // 送信元
        $email->to('aprile.charlotte@gmail.com');                      // 送信先
        $email->subject('メールタイトル');                      // メールタイトル
        // メール送信
        $email->send('メール本文');
        //debug($res);


        $this->Session->setFlash("申し込み完了");
        $this->redirect(array("controller"=>"Students","action"=>"index"));

    }

    //カテゴリー別event取得 by mark
    public function category($state){
        $events = $this->Event->getEventsByState($state, 20);
        if($events==null){
            throw new NotFoundException();
        }
        $this->set('events', $events);
    }

}