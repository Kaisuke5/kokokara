<?php
debug($myData);
echo $this->Html->link('ログアウト', array('action' => 'logout'));
?>

<h2>記事一覧</h2>
<?foreach($events as $event):?>
	<a href="/kokokara/events?id=<?echo $event['Event']['id']?>"><?echo $event['Event']['title']?></a>
	</br>
<?endforeach;?>
