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


    public function addEvent(){
        $this->loadModel("Event");
        $state=$this->data["Event"]["state"];
        if($this->request->is('post')){
            try {
                $this->Event->createWithAttachments($this->request->data);
                $id=$this->Event->id;
                $this->Session->setFlash(__('The message has been saved'));
                $this->redirect(array("action"=>"addoriginal",$state,$id));
            } catch (Exception $e) {
                $this->Session->setFlash($e->getMessage());
            }
        }




    }


    public function addoriginal($state,$id){
        $this->set("state",$state);
        $this->set("id",$id);
    }

    public function goaddoriginal(){
       $state=$this->data["State"]["state"];
        if($state<4){

        }else{
            $this->loadModel("Intern");
            $this->Intern->save($this->data);
            if($state<4){
                $this->loadModel("Intern");
                $this->Intern->save($this->data);

            }else{

                switch ($state){
                    case 5:
                        $this->loadModel("StudyAbroad");
                        $this->StudyAbroad->save($this->data);
                        break;
                    case 6:
                        $this->loadModel("Camp");
                        $this->Camp->save($this->data);
                        break;
                    case 7:
                        $this->loadModel("Lesson");
                        $this->Lesson->save($this->data);
                        break;
                    case 8:
                        $this->loadModel("FunnyEvent");
                        $this->FunnyEvent->save($this->data);
                        break;
                    case 9:
                        $this->loadModel("StudentGroup");
                        $this->StudentGroup->save($this->data);
                        $this->Session->setFlash("作成完了");
                        break;

                }
            }

        }
        $this->redirect(array("controller"=>"Admin","action"=>"events"));
    }


    //user情報一覧
    public function students(){
        $this->loadModel("Student");
        $students=$this->Student->nafind();



        //各ユーザーにログを足す
        for($i=0;$i<count($students);$i++){
            $id=$students[$i]["Student"]["id"];
            $log=$this->Student->getLog($id);
            $applies=$this->Student->getApply($id);
            $students[$i]+=$log+$applies;
        }
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
        /*
        $events=$this->Event->find("all");
        for($i=0;$i<count($events);$i++){
            $events[$i]=$this->Event->getOriginal($events[$i]["Event"]["id"]);
        }*/
        $events=$this->Event->nafind();
        $this->set("events",$events);


    }

    public function event(){
        $this->loadModel("Event");
        $id=$this->request->query("id");
        $event=$this->Event->getOriginal($id);
        $this->set("event",$event);
    }


}