<?php
echo $this->Html->link('ログアウト', array('action' => 'logout'));
?>

<?php
debug($myData);
if(!$myData['Student']['name'] || !$myData['Student']['email']){
	echo $this->Form->create('Student', array('action' => 'edit'));
	echo $this->Form->input('id', array('type' => 'hidden', 'value' => $myData['Student']['id']));
	echo $this->Form->input('name');
	echo $this->Form->input('email');
	echo $this->Form->end('登録する');
} else{
	debug('Welcome!!');
}
?>
