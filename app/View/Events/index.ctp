<?echo $this->Html->script("user.js");?>
<?echo $this->Html->script("jquery-1.11.2.js");?>
<? $this->Html->css('event-style', null, array('inline' => false)) ?>
<div class="container"  style="background:none;">
	<div class="row">
		<div class="col-md-12">
			<p style="color:#efefef;">aaaaa > aaaaa > aaaaaaaaaaaaa</p>
		</div>
	</div>
</div>
<div class="container home-cntr koko-box-shadow">
	<div class="row" >
		<div class="col-md-12 img-obfit">
			<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][0]['dir'] . '/' . $event['Image'][0]['attachment'], array('class' => 'event-top-img img-responsive'))?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 event-info-top">
			<div style="float:left; width:50px; height:50px; margin:10px; background:#ededed;"></div>
			<p>
				<? if($event['Event']['state'] == 9){
							echo '<font style="font-size:12px;">学生団体</font>';
						}else{
							echo '<font style="font-size:12px;">講師</font>';
						} 
				?>
				<br>株式会社kokokara Group
			</p>
		</div>
		<div class="col-sm-2 event-info-top" style="text-align:center;">
			<div class="event-info-top-fav">
			 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			</div>
			<div class="event-info-top-fav2">
				<p>おぼえておく！</p>
			</div>
		</div>
		<div class="col-sm-4 event-info-top">
			<div class="row">
				<div class="col-xs-6 event-info-top-fb">
					<a href="http://www.facebook.com/share.php?u=http://kokokara-univ.com/events?id=<?echo $event['Event']['id']?>" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"><i class="fa fa-facebook-square" style="font-size:32px;padding-bottom:5px;"></i><br>facebookでシェア</a>
				</div>
				<div class="col-xs-6 event-info-top-tw">
					<a href="http://twitter.com/share?url=http://kokokara-univ.com/events?id=<?echo $event['Event']['id']?>&text=<?echo $event['Event']['title']?>&via=kokokara&related="><i class="fa fa-twitter" style="font-size:32px;padding-bottom:5px;"></i><br>Twitterでツイート</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 art-title">
			<h2><?echo $event['Event']['title']?></h2>
		</div>
	</div>
	<div class="row" >
		<div class="col-sm-8">
			<div class="row">
				<div class="col-sm-12" style="margin:36px 15px;">
					<? if($event['Event']['state'] == 9){
							echo '<h2>団体紹介</h2>';
						}else{
							echo '<h2>クラス紹介</h2>';
						} 
					?>
					<p><?echo $event['Event']['body']?></p>
				</div>
				<div class="col-sm-12 img-obfit-incnts">
					<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][1]['dir'] . '/' . $event['Image'][1]['attachment'])?>
				</div>
				<div class="col-sm-12" style="margin-top:36px; 15px">
					<? if($event['Event']['state'] == 9){
							echo '<h2>団体詳細</h2>';
						}else{
							echo '<h2>クラス詳細</h2>';
						} 
					?>
					<p><?echo nl2br($event['Event']['detail']);?></p>
				</div>
				<div class="col-sm-12 detail-info-table" style="margin-top:36px; 15px">
					<?php
					if($event['Event']['state'] == 1){
							echo $this->element( 'table_intern1' );
						}
						elseif($event['Event']['state'] == 2){
							echo $this->element( 'table_intern2' );
						}
						elseif($event['Event']['state'] == 3){
							echo $this->element( 'table_intern3' );
						}
						elseif($event['Event']['state'] == 5){
							echo $this->element( 'table_abroad' );
						}
						elseif($event['Event']['state'] == 6){
							echo $this->element( 'table_camp' );
						}
						elseif($event['Event']['state'] == 7){
							echo $this->element( 'table_lesson' );
						}
						elseif($event['Event']['state'] == 8){
							echo $this->element( 'table_funnyEvent' );
						}
						elseif($event['Event']['state'] == 9){
							echo $this->element( '' );
						}
					?>
				</div>
				<div class="col-xs-12 apply-btn">
					<button type="button" class="btn btn-primary btn-lg" onclick="eventapply()">このクラスに出席</button>
					<p class="p-center"><a href="#">クラスに出席すると？>></a></p>
				</div>
			</div>	
		</div>
		<div class="col-sm-4" style="border-left:1px solid #ededed;">
			<? echo $this->element('sb-apply')?>
			<? echo $this->element('event-pg-sidebar')?>
		</div>
	</div>
</div>
<h2>イベント</h2>

<?debug($event)?>

<!-- id送信-->
<input type="hidden" class="setid" value="<?echo $event['Event']['id']?>">

<?debug($event["Image"][0])?>

<button onclick="eventapply()">申し込み</button>
