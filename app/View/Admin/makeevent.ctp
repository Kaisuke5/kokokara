
<?echo $this->Html->script("jquery-1.11.2.js");?>
<?echo $this->Html->css("kai.css");?>


<h2>イベント作成</h2>

<h3>共通要素</h3>

<?php

echo $this->Form->create('Event',
    array('type' => 'file','url' =>
        array('controller' => 'admin', 'action' => 'addEvent')));
echo $this->Form->input("title");
echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));

echo $this->Form->input("comp_name",array("class"=>"",'div'=>"aaa","label"=>"企業・団体名"));
echo $this->Form->input("body",array("class"=>"",'div'=>"aaa","label"=>"概要"));
echo $this->Form->input("detail",array("class"=>"",'div'=>"aaa","label"=>"詳細"));
echo $this->Form->input("period",array("class"=>"",'div'=>"aaa","label"=>"期間"));

echo $this->Form->input("e-mail",array("class"=>"",'div'=>"aaa","label"=>"メールアドレス"));
echo $this->Form->input("phone",array("class"=>"",'div'=>"aaa","label"=>"お電話番号"));
echo $this->Form->input("related-url",array("class"=>"",'div'=>"aaa","label"=>"メールアドレス","type"=>"text"));
echo $this->Form->input("sns-acount",array("class"=>"",'div'=>"aaa","label"=>"SNSアカウント","type"=>"text"));


/**
echo $this->Form->input("pref",array("class"=>"",'div'=>"aaa","label"=>"場所","type"==>"select",
	"options" =>array('北海道','青森県','岩手県','宮城県','秋田県','山形県', '福島県', '茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県')
	));
echo $this->Form->input("location",array("class"=>"",'div'=>"aaa","label"=>"場所"));
echo $this->Form->input("date",array("class"=>"",'div'=>"aaa","label"=>"日時"));
**/
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











