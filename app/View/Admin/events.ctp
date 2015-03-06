<?$this->Html->link("イベント追加",array("action"=>"eventAdd"))?>

<?foreach($events as $event):?>
	<?echo $this->Html->link($event["Event"]["title"],
	array("controller"=>"Events","?"=>array("id"=>$event["Event"]["id"])))?>

	<?echo "閲覧数 ".$event["logs"];?>
	<?echo "申し込み数 ".$event["applies"];?>
	<?echo "by ".$event["Event"]["company_info"];?>

	
	</br>
<?endforeach;?>

