<? $this->Html->css('index-style', null, array('inline' => false)) ?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-8">
		<?foreach($events as $event):?>
			<a href="/kokokara/events?id=<?echo $event['Event']['id']?>">
				<div class="row ctg-row">
					<div class="col-sm-2">
						<div style="float:left; clear:both; background:#ededed; width:70px; height:70px; margin-right:20px;"></div>
					</div>
					<div class="col-sm-10 art-list-comp">
						<h2>株式会社kokokara Group</h2>
						<h1><?echo $event['Event']['title']?></h1>
						<p class="text-overflow"><?echo $event['Event']['body']?></p>
						<div style="width:100%; background:#ededed; height:150px"></div>
					</div>
				</div>
			</a>
		<?endforeach;?>
		</div>
	</div>
</div>
<!--
				<?foreach($events as $event):?>
					<div class="row ctg-row">
						<a href="/kokokara/events?id=<?echo $event['Event']['id']?>"></a>
						<div class="col-sm-4 art-list-thumb img-obfit">
							<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][0]['dir'] . '/' . $event['Image'][0]['attachment'], array('class' => 'event-top-img img-obfit-incnts img-responsive'))?>
						</div>
						<div class="col-sm-8">
							<h2><?echo $event['Event']['title']?></h2>
						</div>
					</div>
				<?endforeach;?>
-->
<?php
debug($events);
?>
