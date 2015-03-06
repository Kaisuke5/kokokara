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
        'WhoApplies' => array(
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
        'WhoLog' => array(
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
    /*
    public $hasAndBelongsToMany = array(
        "Etag"=>array(
            "className"=>"Etag",
            "join_table"=>"etags_events",
            "foreignKey"=>"event_id",
            "associationForeignKey"=>"etag_id"
        ),
    );
    */



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

        }else{

            switch ($state){
                case 1:
                    $this->loadModel("StudyAbroad");
                    $original=$this->Intern->find("first",array("conditions"=>array("event_id",$id)));
                    break;

                case 2:
                    $this->loadModel("Camp");
                    $original=$this->EventOriginal2->find("first",array("conditions"=>array("event_id",$id)));
                    break;

                case 3:
                    $this->loadModel("Lesson");
                    $original=$this->EventOriginal2->find("first",array("conditions"=>array("event_id",$id)));
                    break;

                case 3:
                    $this->loadModel("StudyGroup");
                    $original=$this->EventOriginal2->find("first",array("conditions"=>array("event_id",$id)));
                    break;


            }
        }


        //debug($original);
        $compevent=$event+$original;
        $this->id=null;
        return $compevent;


    }

}


