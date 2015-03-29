<? $this->Html->css('index-style', null, array('inline' => false)) ?>
<div class="container">
	<div class="row">
			<div class="col-xs-12 incnts-belt">
				<h1>cat_title</h1>
			</div>
	</div>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-8">
		<?
			$i = 0;
			$kiji = 10;
			foreach ($events as $event){ 
			if($i >= $kiji){
			break;
		}else{ ?>
		<a href="/kokokara/events?id=<?echo $event['Event']['id']?>">
			<div class="row ctg-row">
				<div class="col-sm-2" style="padding-right:0;">
					<div style="float:left; clear:both; background:#ededed; width:70px; height:70px; margin-right:20px;"></div>
				</div>
				<div class="col-sm-10 art-list-comp">
					<h2>株式会社kokokara Group</h2>
					<h1><?echo $event['Event']['title']?></h1>
					<p class="text-overflow"><?echo $event['Event']['body']?></p>
					<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][0]['dir'] . '/' . $event['Image'][0]['attachment'], array('class' => 'art-list-thumb img-obfit-list'))?>
				</div>
			</div>
		</a>
		<?
		$i++;
		}
		}
		?>
		</div>
	</div>
</div>

<?php
debug($events);
?>
