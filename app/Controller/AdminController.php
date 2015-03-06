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
    //アソシはall外しでlogとapplyのカウントだけ取得
    public function students(){
        $this->loadModel("Student");
        $students=$this->Student->adminfind();
        $this->set("students",$students);
    }

    //student情報 by mark
    public function student($id){
        if($this->request->is('get')){ //GET送信防止
            throw new MethodNotAllowedException();
        }
        $this->loadModel("Student");
        $student = $this->Student->findById($id);
        $this->set("student",$student);
    }

    //student_tag by mark
    public function student_tag(){
        if($this->request->is('post')){
            $this->loadModel("Stag");
            $this->loadModel("StagsStudent");
            $tagsArray = explode(',', $this->request->data['Stag']['name']);
            foreach($tagsArray as $tag){
                /*既に存在するかどうか*/
                $sameTag = $this->Stag->find('first', array(
                    'conditions' => array('Stag.name' => $tag)
                ));
                if($sameTag){
                    //StagsStudentが既に存在するかどうか
                    $stags_student = $this->StagsStudent->find('first', array(
                        'conditions' => array(
                            'stag_id' => $sameTag['Stag']['id'],
                            'student_id' => $this->request->data['StagsStudent']['student_id']
                        )
                    ));
                    //存在しなかったらインサート
                    if(!$stags_student){
                        $this->StagsStudent->set(array(
                            'stag_id' => $sameTag['Stag']['id'],
                            'student_id' => $this->$this->request->data['StagsStudent']['student_id']
                        ));
                        $this->StagsStudent->id = false;     //リセット処理
                        $this->StagsStudent->save();     //StagsStudent インサート
                    }
                } else{
                    $this->Stag->set(array(
                        'name' => $tag
                    ));
                    $this->Stag->id = false;    //リセット処理
                    if($this->Stag->save()){
                        $this->StagsStudent->set(array(
                            'stag_id' => $this->Stag->getLastInsertID(),
                            'student_id' => $this->request->data['StagsStudent']['student_id']
                        ));
                        $this->StagsStudent->id = false;     //リセット処理
                        $this->StagsStudent->save();     //StagsStudent インサート
                    }
                }
            }
            $this->Session->setFlash('Upload Success!');
            $this->redirect('students');
        }
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
        $this->set("event",$event);
    }


}