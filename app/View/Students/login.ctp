<h2>ログイン</h2>
<div class="row" style="margin-top:40px;">
	<div class="col-sm-6 login-fb">
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3 login-fb-btn">
				<?php
				echo $this->Html->link('', array("controller" => "fbconnect", "action" => "facebook"));
				?>
				<h1><i class="fa fa-facebook-square"></i><br><font style="font-size:14px;">Facebookで簡単ログイン！</font></h1>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<h4>お持ちのアカウント情報を入力する事でもログインできます</h4>
		<?php
		echo $this->Form->create('Student');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->end('ログインする');
		?>

		<?php
		echo $this->Html->link('パスワードをお忘れの場合', array('action' => 'passwordForgot'));
		?>
	</div>
</div>

<h3 style="margin-top:80px;">アカウント（学生証）を持っていない方は</h3>
<?php
echo $this->Html->link('Facebookで簡単入学！', array('action' => 'signup'));
?>

<h2>管理者画面</h2>
<?php
echo $this->Html->link('管理者画面', array('controller' => 'admin', 'index'));


