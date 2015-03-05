<?$this->Html->link("イベント追加",array("action"=>"eventAdd"))?>

<?foreach($events as $event):?>
	<?echo $this->Html->link($event["Event"]["title"],array("action"=>'event?id='.$event["Event"]["id"]))?>

<?endforeach;?>

