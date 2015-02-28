<?php
/**
 * Created by PhpStorm.
 * User: kaishunsuke
 * Date: 2015/02/28
 * Time: 23:56
 */

class Log1 extends AppModel{
    public $useTable="user_event_log";

    public function loadModel($model_name) {
        App::uses($model_name,'Model');
        $this->{$model_name} = new $model_name();
    }



    public function write($userid,$eventid){
        $log=$this->find("first",array("conditions"=>
            array("student_id"=>$userid,"event_id"=>$eventid)));

        //もしそのページのlogがなければ作成
        if($log==null){

            $this->set(array(
                "student_id"=>$userid,"event_id"=>$eventid,"counter"=>0));
            $log=$this->save();
            return $log;
        }

        //もしそのページのlogがあればcounter++
        $this->id=$log["Log1"]["id"];
        $counter=$log["Log1"]["counter"]+1;
        $log=$this->save(array("counter"=>$counter));
        return $log;
    }

    //useridがみたeventの情報
    public function getInfoByuserId($id){
        $this->loadModel("Student");
        $this->loadModel("Event");

        $log=$this->find("first",array("conditions"=>array("id"=>$id)));
        $userid=$log["Log1"]["user_id"];
        $eventid=$log["Log1"]["event_id"];

        $user=$this->Student->find("first",array("conditions"=>array("id"=>$userid)));
        $event=$this->Student->find("first",array("conditions"=>array("id"=>$eventid)));

        return $user+$event;
    }


}