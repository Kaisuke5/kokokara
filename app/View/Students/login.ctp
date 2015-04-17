<h2>ログイン</h2>

<?php
echo $this->Html->link('Facebookログイン', array("controller" => "fbconnect", "action" => "facebook"));
?>

<?php
echo $this->Form->create('Student');
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->end('ログインする');
?>

<?php
echo $this->Html->link('パスワードをお忘れの場合', array('action' => 'passwordForgot'));
?>

<?php
echo $this->Html->link('新規登録する', array('action' => 'signup'));
?>

<h2>管理者画面</h2>
<?php
echo $this->Html->link('管理者画面', array('controller' => 'admin', 'index'));


