<div class="row">
	<div class="col-sm-12">
		<h1 style="font-size:18px;font-weight:bold;">おすすめのクラス</h1>
	</div>
	<?
		$i = 0;
		$kiji = 4;
		shuffle ( $events );
		foreach ($events as $event){ 
		if($i >= $kiji){
		break;
	}else{ ?>
		<a href="/events?id=<?echo $event['Event']['id']?>" target="_blank">
			<div class="col-sm-12 event-pg-sb">
				<div>
					<?php 
					if($event['Event']['state'] == 1){
					echo '<p class="event-pg-sb-cat" style="background:#d16b9a;">長期インターン</p>';
					}elseif($event['Event']['state'] == 2){
					echo '<p class="event-pg-sb-cat" style="background:#d1a16b;">短期インターン</p>';
					}elseif($event['Event']['state'] == 3){
					echo '<p class="event-pg-sb-cat" style="background:#ced16b;">海外インターン</p>';
					}elseif($event['Event']['state'] == 5){
					echo '<p class="event-pg-sb-cat" style="background:#9ad16b;">留学</p>';
					}elseif($event['Event']['state'] == 6){
					echo '<p class="event-pg-sb-cat" style="background:#6bd16e;">合宿</p>';
					}elseif($event['Event']['state'] == 7){
					echo '<p class="event-pg-sb-cat" style="background:#6bd1a1;">習い事</p>';
					}elseif($event['Event']['state'] == 8){
					echo '<p class="event-pg-sb-cat" style="background:#6bcad1;">おもしろイベント</p>';
					}elseif($event['Event']['state'] == 9){
					echo '<p class="event-pg-sb-cat" style="background:#6e6bd1;">学生イベント</p>';
					}elseif($event['Event']['state'] == 4){
					echo '<p class="event-pg-sb-cat" style="background:#6b97d1;">学生団体</p>';
					}	
					?>
					<p class="event-pg-sb-title">株式会社kokokara Group</p>
				</div>
				<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][0]['dir'] . '/' . $event['Image'][0]['attachment'])?>
				<div>
					<h1><?echo $event['Event']['title']?></h1>
					<p class="top-pg-sidebar"><?echo $event['Event']['body']?></p>
				</div>
			</div>
		</a>
		<?
		$i++;
		}
		}
		?>
	<endforeach>
</div>