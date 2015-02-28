
<?foreach($events as $event):?>
	<a href="/kokokara/events?id=<?echo $event['Event']['id']?>"><?echo $event['Event']['title']?></a>
	</br>
<?endforeach;?>





<?php
echo $this->Html->link('ログアウト', array('action' => 'logout'));
?>
