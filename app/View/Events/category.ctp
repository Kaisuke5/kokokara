<? $this->Html->css('index-style', null, array('inline' => false)) ?>
<div class="container">
	<div class="row"><!--
			<div class="col-xs-12 incnts-belt">
				<h1>
					<?php
					if($this->here == '/kokokara/events/category/1'){
						echo '長期インターン';
					}elseif($this->here == '/kokokara/events/category/2'){
						echo '短期インターン';
					}elseif($this->here == '/kokokara/events/category/3'){
						echo '海外インターン';
					}elseif($this->here == '/kokokara/events/category/5'){
						echo '留学';
					}elseif($this->here == '/kokokara/events/category/6'){
						echo '合宿';
					}elseif($this->here == '/kokokara/events/category/7'){
						echo '習い事';
					}elseif($this->here == '/kokokara/events/category/8'){
						echo 'おもしろい';
					}elseif($this->here == '/kokokara/events/category/9'){
						echo '学生団体';
					}
					?>
				</h1>
			</div>
		-->
			<?php 
			if($this->here == '/kokokara/events/category/1'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#d16b9a;"><h1>長期インターン</h1></div>';
			}elseif($this->here == '/kokokara/events/category/2'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#d1a16b;"><h1>短期インターン</h1></div>';
			}elseif($this->here == '/kokokara/events/category/3'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#ced16b;"><h1>海外インターン</h1></div>';
			}elseif($this->here == '/kokokara/events/category/5'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#9ad16b;"><h1>留学</h1></div>';
			}elseif($this->here == '/kokokara/events/category/6'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#6bd16e;"><h1>合宿</h1></div>';
			}elseif($this->here == '/kokokara/events/category/7'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#6bd1a1;"><h1>習い事</h1></div>';
			}elseif($this->here == '/kokokara/events/category/8'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#6bcad1;"><h1>おもしろイベント</h1></div>';
			}elseif($this->here == '/kokokara/events/category/9'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#6e6bd1;"><h1>学生団体</h1></div>';
			}	
			?>
			<!--
				<h1>
					<?php
					if($this->here == '/kokokara/events/category/1'){
						echo '長期インターン';
					}elseif($this->here == '/kokokara/events/category/2'){
						echo '短期インターン';
					}elseif($this->here == '/kokokara/events/category/3'){
						echo '海外インターン';
					}elseif($this->here == '/kokokara/events/category/5'){
						echo '留学';
					}elseif($this->here == '/kokokara/events/category/6'){
						echo '合宿';
					}elseif($this->here == '/kokokara/events/category/7'){
						echo '習い事';
					}elseif($this->here == '/kokokara/events/category/8'){
						echo 'おもしろい';
					}elseif($this->here == '/kokokara/events/category/9'){
						echo '学生団体';
					}
					?>
				</h1>
			-->
		
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
					<div style="float:left;clear:both; background:#ededed; width:70px; height:70px; margin-right:20px;"></div>
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
