<?php
/**
 * Created by PhpStorm.
 * User: kaishunsuke
 * Date: 2015/02/28
 * Time: 13:35
 */

class Event extends AppModel{
    public $useTable="events";


    public function loadModel($model_name) {
        App::uses($model_name,'Model');
        $this->{$model_name} = new $model_name();
    }

    public function getOriginal($id){
        $this->loadModel("EventOriginal1");
        $this->loadModel("EventOriginal2");


        $event=$this->find("first",array("conditions"=>array("id"=>$id)));
        if($event==null) return null;

        $state=$event["Event"]["state"];

        switch ($state){
            case 1:
                $original=$this->EventOriginal1->find("first",array("conditions"=>array("eventid",$id)));
                break;

            case 2:
                $original=$this->EventOriginal2->find("first",array("conditions"=>array("eventid",$id)));
                break;


        }

        //debug($original);
        $compevent=$event+$original;
        $this->id=null;
        return $compevent;


    }

}


