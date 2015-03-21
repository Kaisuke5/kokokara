<?php

if(!$myData){
	echo $this->Html->link('ログイン', array('action' => 'login'));
}else{
	echo $this->Html->link('ログアウト', array('action' => 'logout'));
	debug($myData);
}

?>

<h2>記事一覧</h2>

<?foreach($events as $event):?>
	<a href="/kokokara/events?id=<?echo $event['Event']['id']?>"><?echo $event['Event']['title']?></a>
	</br>
<?endforeach;?>

<h2>カテゴリー一覧</h2>
<ul>
	<li>
		<?php echo $this->Html->link('長期インターン', array('controller' => 'events', 'action' => 'category', 1)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('短期インターン', array('controller' => 'events', 'action' => 'category', 2)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('海外インターン', array('controller' => 'events', 'action' => 'category', 3)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('有給バイト', array('controller' => 'events', 'action' => 'category', 4)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('留学', array('controller' => 'events', 'action' => 'category', 5)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('合宿', array('controller' => 'events', 'action' => 'category', 6)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('習い事', array('controller' => 'events', 'action' => 'category', 7)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('おもしろイベント', array('controller' => 'events', 'action' => 'category', 8)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('学生団体', array('controller' => 'events', 'action' => 'category', 9)); ?>
	</li>
</ul>
