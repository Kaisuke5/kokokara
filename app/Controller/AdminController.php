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


        $this->redirect(array("controller"=>"Admin","action"=>"events"));
    }



    public function editevent(){
        $this->loadModel("Event");
        $id=$this->request->query["id"];
        $event=$this->Event->getOriginal($id);
        $state=$event["Event"]["state"];
        $this->set("event",$event);
        $this->set("state",$state);
    }

    public function deleteevent(){
        $this->loadModel("Event");
        $this->autoRender = false;
        // Ajax以外の通信の場合
        if(!$this->request->is('ajax')) {
            throw new BadRequestException();
        }
        /*  ここでDBアクセスなど何かの処理をする */
        $id=$this->data["id"];
        $this->Event->deleteOriginal($id);

        if($this->Event->delete($id,true)){
            $result=["title"=>$id,"status"=>1];
        }else{
            $result=["status"=>-1];
        }


        // JSON形式で返却。errorが定義されていない場合はstatusとresultの配列になる。
        return json_encode($result);
    }









    public function goEditevent(){
        $this->loadModel("Event");
        $state=$this->data["Event"]["state"];
        $id=$this->data["Event"]["id"];


        $this->Event->id=$id;
        $this->Event->save($this->data);


        if($state<4){
            $this->loadModel("Intern");
            $original_id=$this->data["Intern"]["id"];
            $this->Intern->$id=$original_id;
            $this->Intern->save($this->data);

        }else{

            switch ($state){
                case 5:
                    $this->loadModel("StudyAbroad");
                    $original_id=$this->data["StudyAbroad"]["id"];
                    $this->StudyAbroad->$id=$original_id;
                    $this->StudyAbroad->save($this->data);
                    break;
                case 6:
                    $this->loadModel("Camp");
                    $original_id=$this->data["Camp"]["id"];
                    $this->Camp->$id=$original_id;
                    $this->Camp->save($this->data);
                    break;
                case 7:
                    $this->loadModel("Lesson");
                    $original_id=$this->data["Lesson"]["id"];
                    $this->Lesson->$id=$original_id;
                    $this->Lesson->save($this->data);
                    break;
                case 8:
                    $this->loadModel("FunnyEvent");
                    $original_id=$this->data["FunnyEvent"]["id"];
                    $this->FunnyEvent->$id=$original_id;
                    $this->FunnyEvent->save($this->data);
                    break;
                case 9:
                    $this->loadModel("StudentGroup");
                    $original_id=$this->data["StudentGroup"]["id"];
                    $this->StudentGroup->$id=$original_id;
                    $this->StudentGroup->save($this->data);
                    $this->Session->setFlash("作成完了");
                    break;

            }
            $this->Session->setFlash("編集完了");
            $this->redirect("events");
        }




    }






    //user情報一覧
    //アソシはall外しでlogとapplyのカウントだけ取得
    public function students(){
        $this->loadModel("Student");
        $students=$this->Student->adminfind();
        $this->set("students",$students);

    }


    //event情報一覧
    public function events(){

        $this->loadModel("Event");
        $events=$this->Event->adminfind();
        $this->set("events",$events);


    }

    public function event(){
        $this->loadModel("Event");
        $id=$this->request->query("id");
        $event=$this->Event->getOriginal($id);
        $data=["","Intern","Intern","Intern","Intern",
            "StudyAbroad","Camp","Lesson","FunnyEvent","StudentGroup"];
        $type=$data[$event["Event"]["state"]];
        $this->set("event",$event);
        $this->set("event",$type);
    }


}