<?php
/**
 * Created by PhpStorm.
 * User: kaishunsuke
 * Date: 2015/02/28
 * Time: 23:27
 */

class AdminController extends AppController{

    public function index(){

    }


    //event作成
    public function makeevent(){

    }


    //user情報一覧
    public function students(){
        /*$this->loadModel("Log1");
        $this->loadModel("Apply1");
        $this->loadModel("Event");
        $this->loadModel("Student");
        */
        $this->loadModel("Student");
        $students=$this->Student->adminfindAll();
        $this->set("students",$students);

    }


    //event情報一覧
    public function events(){
        /*$this->loadModel("Log1");
        $this->loadModel("Apply1");
        $this->loadModel("Event");
        $this->loadModel("Student");
        */
        $this->loadModel("Event");
        $events=$this->Event->adminfindAll();
        $this->set("events",$events);


    }




}