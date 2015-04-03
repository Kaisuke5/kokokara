<? $this->Html->css('index-style', null, array('inline' => false)) ?>
<div class="container home-cntr-top">
	<div class="top-bgi">
		<div class="row">
			<div class="col-md-12 top-welcome">
				<h1>新しい何かを始めよう</h1>
			</div>
			<div class="form-group">
				<div class="col-sm-6 col-sm-offset-1 gal-pad-elim col-xs-10 col-xs-offset-1">
					<input type="text" class="input-medium search-query">
				</div>
				<div class="col-sm-2 col-xs-6 col-sm-offset-0 col-xs-offset-1 gal-pad-elim">
					<select class="form-control">
						<option>カテゴリーで絞る </option>
						<option>長期インターン</option>
						<option>短期インターン</option>
						<option>海外インターン</option>
						<option>海外留学</option>
						<option>習い事</option>
						<option>おもしろい</option>
						<option>合宿</option>
						<option>学生団体</option>
					</select>
				</div>
				<div class="col-sm-2 col-xs-4 gal-pad-elim">
					<button type="button" class="btn btn-default" style="width:100% !important;">
						<i class="glyphicon glyphicon-play"></i>　クラス検索
					</button>
				</div>
			</div>
		</div>
		<div class="row top-signin">
			<div class="col-xs-12">
				<p style="font-size:20px; padding: 15px 0;color:#303030;">入学してkokokara学生証を手に入れよう</p>
			</div>
			<div class="col-sm-3 col-sm-offset-3 col-xs-5 col-xs-offset-1 top-signin-btns" style="padding-right:10px; !important">
				<div class="top-signin-internal">
					<?php
					echo $this->Html->link('', array('action' => 'signup'));
					?>
					<p><i class="glyphicon glyphicon-play"></i> 入学はこちらから</p>
				</div>
			</div>
			<div class="col-sm-3 col-xs-5 top-signin-btns"style="padding-left:10px !important;">
				<div class="top-signin-fb">
					<?php
					echo $this->Html->link('', array("controller" => "fbconnect", "action" => "facebook"));
					?>
					<p class="text-fit"><i class="fa fa-facebook-square"></i> facebookで入学する</p>
				</div>
			</div>
			
			<div class="col-xs-12">
				<a href="#">kokokara学生証とは？>></a>
			</div>
		</div>
	</div>
</div>
<div class="container home-cntr">
	<div class="row" style="border-bottom:1px solid #efefef;">
	  <h2>いま人気のクラス</h2>
		  	<div class="col-md-12">
		  		<div class="row">
			  	 	<?
					$i = 0;
					$kiji = 6;
					shuffle ( $events );
					foreach ($events as $event){ 
					if($i >= $kiji){
					break;
					}else{ ?>
					<a href="/kokokara/events?id=<?echo $event['Event']['id']?>">
			  			<div class="col-md-4 col-sm-6 col-xs-12 pop-lg">
			  				<div class="link_box">
			  				 	<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][0]['dir'] . '/' . $event['Image'][0]['attachment'], array('class' => 'img-obfit img-responsive'))?>
							</div>
							<div class="pop-lg-infobox">
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
									echo '<p class="event-pg-sb-cat" style="background:#6e6bd1;">学生団体</p>';
									}	
									?>
								<h1><?echo $event['Event']['title']?></h1>
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
		 <div class="col-md-12">
		  	<p class="p-center"><a href="#">ギャラリーを見る>></a></p>
		 </div>
	</div>

<div class="container home-cntr">
	<div class="row">
	  <h2>kokokaraの、様々な学びの形</h2>
	  <div class="col-md-12">
	  	<div class="row">
		  <div class="col-sm-3 col-xs-6 col-gal">
		  	<div style="height:190px; background:#d16b9a;"><?php echo $this->Html->link('長期インターン', array('controller' => 'events', 'action' => 'category', 1)); ?>
		  	</div>	
		  </div>
		  <div class="col-sm-3 col-xs-6 col-gal">  
		  	<div style="height:190px; background:#d1a16b;"><?php echo $this->Html->link('短期インターン', array('controller' => 'events', 'action' => 'category', 2)); ?>
		  	</div>		
		  </div>
		  <div class="col-sm-3 col-xs-6 col-gal">
		  	<div style="height:190px; background:#ced16b;"><?php echo $this->Html->link('海外インターン', array('controller' => 'events', 'action' => 'category', 3)); ?>
		  	</div>	  	
		  </div>
		  <div class="col-sm-3 col-xs-6 col-gal">
		  	<div style="height:190px; background:#9ad16b;"><?php echo $this->Html->link('留学', array('controller' => 'events', 'action' => 'category', 5)); ?>
		  	</div>	  	
		  </div>
		  <div class="col-sm-3 col-xs-6 col-gal">  	
		  	<div style="height:190px; background:#6bd16e;"><?php echo $this->Html->link('合宿', array('controller' => 'events', 'action' => 'category', 6)); ?>
		  	</div>	 
		  </div>
		  <div class="col-sm-3 col-xs-6 col-gal">  
		  	<div style="height:190px; background:#6bd1a1;"><?php echo $this->Html->link('習い事', array('controller' => 'events', 'action' => 'category', 7)); ?>
		  	</div>		
		  </div>
		  <div class="col-sm-3 col-xs-6 col-gal">  
		  	<div style="height:190px; background:#6bcad1;"><?php echo $this->Html->link('おもしろイベント', array('controller' => 'events', 'action' => 'category', 8)); ?>
		  	</div>		
		  </div>
		  <div class="col-sm-3 col-xs-6 col-gal">  	
		  	<div style="height:190px; background:#6e6bd1;"><?php echo $this->Html->link('学生団体', array('controller' => 'events', 'action' => 'category', 9)); ?>
		  	</div>
		  </div>
		</div>
　	　</div>
	</div>
</div>
<div class="container home-cntr">
	<div class="row">
		<h2>新着サービス</h2>
	</div>
	<div class="row" >
		<div class="col-sm-4 hidden-xs" style="margin-top:35px;border-right:1px solid #ededed; padding-bottom:20px;">
			<? echo $this->element('event-pg-sidebar')?>
		</div>
		<div class="col-sm-8">
		<?
			$i = 0;
			$kiji = 4;
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
		<div class="col-sm-4 hidden-sm hidden-md hidden-lg" style="margin-top:35px;border-right:1px solid #ededed; padding-bottom:20px;">
			<? echo $this->element('event-pg-sidebar')?>
		</div>
		<div class="col-md-12">
		  	<p class="p-center"><a href="#">もっと見る>></a></p>
		</div>
	</div>
</div>

<div style="width:100%; height:800px">
	<!-- just a space -->
</div>

<?debug($event)?>

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
	<li>
		<?php echo $this->Html->link('新着イベント', array('controller' => 'events', 'action' => 'news')); ?>
	</li>
</ul>
