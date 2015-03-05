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
        $myData=$this->Session->read("myData");
        if($myData==null){
            $this->redirect(array("controller"=>"Student","action"=>"login"));
        }

    }


    public function index(){


        $myData=$this->Session->read("myData");
        /*if($myData==null){
            $this->redirect(array("controller"=>"Student","action"=>"login"));
        }*/

        $id=$this->request->query["id"];
        $event=$this->Event->find("first",array("conditions"=>array("id"=>$id)));

        //もし不正なidなら404
        if($event==null){

        }


        //$this->Log1->set(array("student_id"=>$myData['Student']['id'],"event_id"=>$id));

        //$this->Log1->save();


        //event取得
        //ジャンルごとのイベント情報を追加したものをcomeventに入れる

        $this->set("myData",$myData);
        $this->set("event",$event);
        $this->render();


    }



    public function apply(){



    }


    public function goapply(){
        $this->loadModel("Apply1");

        //セッション
        $myData=$myData=$this->Session->read("myData");
        //requestのgetのパラメーターをeventのidに
        $id=$this->request->query("id");

        $before=$this->Apply1->find("first",array("condirion"=>array("student_id"=>$myData['Student']['id'],"event_id"=>$id)));

        if($before!=null){
            $this->Session->setFlash("既に申し込んでいます");
            $this->redirect(array("controller"=>"Students","action"=>"index"));
        }



        $this->Apply1->set(array("student_id"=>$myData['Student']['id'],"event_id"=>$id));
        $apply=$this->Apply1->save();



        if($apply==false){
            $this->Session->setFlash("申し訳ございません。もう一度やりなおしてください");
            $this->redirect("index");
        }
        //ここにメール関数を書く


        $this->Session->setFlash("申し込み完了");
        $this->redirect(array("controller"=>"Students","action"=>"index"));



    }




}