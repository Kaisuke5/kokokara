
<?echo $this->Html->script("jquery-1.11.2.js");?>
<?echo $this->Html->css("kai.css");?>


<h2>イベント作成</h2>

<h3>共通要素</h3>

<?php

echo $this->Form->create('Event',
    array('type' => 'file','url' =>
        array('controller' => 'admin', 'action' => 'addEvent')));
echo $this->Form->input("title",array());
echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));

echo $this->Form->input("title",array("class"=>"",'div'=>"aaa"));
echo $this->Form->input("body",array("class"=>"",'div'=>"aaa","label"=>"概要"));
echo $this->Form->input("detail",array("class"=>"",'div'=>"aaa","label"=>"詳細"));
echo $this->Form->input("period",array("class"=>"",'div'=>"aaa","label"=>"期間"));
echo $this->Form->input("location",array("class"=>"",'div'=>"aaa","label"=>"場所"));
echo $this->Form->input("date",array("class"=>"",'div'=>"aaa","label"=>"日時"));
?>


<h3>オリジナル要素</h3>

<?


echo $this->Form->select('state', array(
	"1"=>"長期インターン","2"=>"短期インターン","3"=>"海外インターン","4"=>"有給バイト",
	"5"=>"留学","6"=>"合宿","7"=>"習い事","8"=>"面白い","9"=>"学生団体"

	));

?>




<?
echo $this->Form->submit("送信");
echo $this->Form->end();
?>











