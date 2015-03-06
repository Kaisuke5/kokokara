<?php
/**
 * Created by PhpStorm.
 * User: kaishunsuke
 * Date: 2015/02/28
 * Time: 13:35
 */

class Event extends AppModel{
    public $useTable="events";
    //イベントタグアソ
    public $hasAndBelongsToMany = array(
        'Etag',
        'Apply' => array(
            'className'              => 'Student',
            'joinTable'              => 'applies_events',
            'foreignKey'             => 'event_id',
            'associationForeignKey'  => 'student_id',
            'unique'                 => false,
            'conditions'             => '',
            'fields'                 => '',
            'order'                  => '',
            'limit'                  => '',
            'offset'                 => '',
            'finderQuery'            => '',
            'deleteQuery'            => '',
            'insertQuery'            => ''
        ),
        'Log' => array(
            'className'              => 'Student',
            'joinTable'              => 'events_logs',
            'foreignKey'             => 'event_id',
            'associationForeignKey'  => 'student_id',
            'unique'                 => false,
            'conditions'             => '',
            'fields'                 => '',
            'order'                  => '',
            'limit'                  => '',
            'offset'                 => '',
            'finderQuery'            => '',
            'deleteQuery'            => '',
            'insertQuery'            => ''
        )
    );




    public function loadModel($model_name) {
        App::uses($model_name,'Model');
        $this->{$model_name} = new $model_name();
    }

    public function getOriginal($id){

        $event=$this->find("first",array("conditions"=>array("id"=>$id)));
        if($event==null) return null;

        $state=$event["Event"]["state"];
        $original=array();

        if($state<4){
            $this->loadModel("Intern");
            $original=$this->Intern->find("first",array("conditions"=>array("event_id",$id)));
        }else{

            switch ($state){
                case 5:
                    $this->loadModel("StudyAbroad");
                    $original=$this->Intern->find("first",array("conditions"=>array("event_id",$id)));
                    break;

                case 6:
                    $this->loadModel("Camp");
                    $original=$this->Camp->find("first",array("conditions"=>array("event_id",$id)));
                    break;

                case 7:
                    $this->loadModel("Lesson");
                    $original=$this->Lesson->find("first",array("conditions"=>array("event_id",$id)));
                    break;

                case 8:
                    $this->loadModel("FunnyEvent");
                    $original=$this->FunnyEvent->find("first",array("conditions"=>array("event_id",$id)));
                    break;

                case 9:
                    $this->loadModel("StudyGroup");
                    $original=$this->StudyGroup->find("first",array("conditions"=>array("event_id",$id)));
                    break;


            }
        }


        //debug($original);
        $compevent=$event+$original;
        $this->id=null;
        return $compevent;


    }


    public $hasMany=array(
        "Image"=>array(
            "className"=>"Attachment",
            'foreignKey' => 'foreign_key',
            'conditions' => array(
                'Image.model' => 'Event',
            ),

        )
    );


    public function createWithAttachments($data){
        $images = array();
        //debug($data["Image"]);
        if (!empty($data['Image'][0])) {
            foreach ($data['Image'] as $i => $image) {

                if (is_array($data['Image'][$i])) {
                    // Force setting the `model` field to this model
                    //debug($data["Image"][$i]);
                    if($data["Image"][$i]["attachment"]["name"]==""){
                        continue;
                    }
                    $image['model'] = 'Event';

                    // Unset the foreign_key if the user tries to specify it
                    if (isset($image['foreign_key'])) {
                        unset($image['foreign_key']);
                    }

                    $images[] = $image;
                }
            }
        }
        $data['Image'] = $images;

        // Try to save the data using Model::saveAll()
        $this->create();
        $p=$this->saveAll($data);

        if ($p) {
            return true;
        }

        // Throw an exception for the controller
        throw new Exception(__("This post could not be saved. Please try again"));
    }

    public function nafind(){
        $this->unbindModel(
            array('hasMany' => array('Image'),"hasAndBelongsToMany"=>"Etag")
        );
        $events=$this->find("all");
        return $events;
    }



}


