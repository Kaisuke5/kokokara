<h2>新規登録</h2>

<?php
echo $this->Html->link('Facebookログイン', array("controller" => "fbconnect", "action" => "facebook"));
?>

<?php
debug($myData);
echo $this->Form->create('Student');
//Student ID
if($myData['Student']['id']){
	echo $this->Form->input('id', array('type' => 'hidden', 'value' => $myData['Student']['id']));
}
//名前
if($myData['FacebookUser']['name']){
	echo $this->Form->input('name', array('value' => $myData['FacebookUser']['name']));
}else{
	echo $this->Form->input('name');
}
//性別
$gender = array(
	'male' => '男性',
	'female' => '女性',
);
if($myData['FacebookUser']['gender']){
	if($myData['FacebookUser']['gender'] == '男性'){
		$gender_default = 'male';
	}
	elseif($myData['FacebookUser']['gender'] == '女性'){
		$gender_default = 'female';
	}
	echo $this->Form->input('gender', array('type' => 'radio', 'options' => $gender, 'value' => $gender_default));
}else{
	echo $this->Form->input('gender', array('type' => 'radio', 'options' => $gender));
}
//誕生日
if($myData['FacebookUser']['birthday']){
	$array_birthday = explode('/', $myData['FacebookUser']['birthday']);
	//debug($array_birthday);
	echo $this->Form->input('birthday',  array('dateFormat' => 'YMD', 'maxYear' => date('Y'), 'minYear' => date('Y')-100, 'monthNames' => false, 'label' => array('text' => '誕生日'), 'default' => array('day' => $array_birthday[0], 'month' => $array_birthday[1], 'year' => $array_birthday[2])));
} else{
	echo $this->Form->input('birthday',  array('dateFormat' => 'YMD', 'maxYear' => date('Y'), 'minYear' => date('Y')-100, 'monthNames' => false, 'label' => array('text' => '誕生日')));
}
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->input('email_accept', array('type' => 'checkbox', 'value' => 1));
echo $this->Form->end('新規登録する');

