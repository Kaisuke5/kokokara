<?echo $this->Html->script("user.js");?>
<?echo $this->Html->script("jquery-1.11.2.js");?>
<? $this->Html->css('event-style', null, array('inline' => false)) ?>
<div class="container home-cntr koko-box-shadow">
	<div class="row" >
		<div class="col-md-12 img-obfit">
			<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][0]['dir'] . '/' . $event['Image'][0]['attachment'], array('class' => 'event-top-img img-responsive'))?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 event-info-top">
			<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][3]['dir'] . '/' . $event['Image'][3]['attachment'])?>
			<p>
				<? if($event['Event']['state'] == 9){
							echo '<font style="font-size:12px;">学生団体</font>';
						}else{
							echo '<font style="font-size:12px;">講師</font>';
						} 
				?>
				<br><?echo ($event['Event']['comp_name']);?>
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
			<?php 
				if($event['Event']['state'] == 1){
					echo '<p class="event-pg-top-cat" style="background:#d16b9a;">長期インターン</p>';
					}elseif($event['Event']['state'] == 2){
					echo '<p class="event-pg-top-cat" style="background:#d1a16b;">短期インターン</p>';
					}elseif($event['Event']['state'] == 3){
					echo '<p class="event-pg-top-cat" style="background:#ced16b;">海外インターン</p>';
					}elseif($event['Event']['state'] == 5){		
					echo '<p class="event-pg-top-cat" style="background:#9ad16b;">留学</p>';
					}elseif($event['Event']['state'] == 6){
					echo '<p class="event-pg-top-cat" style="background:#6bd16e;">合宿</p>';
					}elseif($event['Event']['state'] == 7){
					echo '<p class="event-pg-top-cat" style="background:#6bd1a1;">習い事</p>';
					}elseif($event['Event']['state'] == 8){
					echo '<p class="event-pg-top-cat" style="background:#6bcad1;">おもしろイベント</p>';
					}elseif($event['Event']['state'] == 9){
					echo '<p class="event-pg-top-cat" style="background:#6e6bd1;">学生団体</p>';
					}elseif($event['Event']['state'] == 4){
					echo '<p class="event-pg-top-cat" style="background:#6e6bd1;">学生イベント</p>';
					}	
			?>
			<? if($event['Event']['state'] == 1){
					echo '<h2 style="border-bottom:3px solid #d16b9a;">'?><?echo $event['Event']['title']?><?'</h2>';
				}elseif($event['Event']['state'] == 2){
					echo '<h2 style="border-bottom:3px solid #d1a16b;">'?><?echo $event['Event']['title']?><?'</h2>';
				}elseif($event['Event']['state'] == 3){
					echo '<h2 style="border-bottom:3px solid #ced16b;">'?><?echo $event['Event']['title']?><?'</h2>';
				}elseif($event['Event']['state'] == 5){
					echo '<h2 style="border-bottom:3px solid #9ad16b;">'?><?echo $event['Event']['title']?><?'</h2>';
				}elseif($event['Event']['state'] == 6){
					echo '<h2 style="border-bottom:3px solid #6bd16b;">'?><?echo $event['Event']['title']?><?'</h2>';
				}elseif($event['Event']['state'] == 7){
					echo '<h2 style="border-bottom:3px solid #6bd1a1;">'?><?echo $event['Event']['title']?><?'</h2>';
				}elseif($event['Event']['state'] == 8){
					echo '<h2 style="border-bottom:3px solid #6bcad1;">'?><?echo $event['Event']['title']?><?'</h2>';
				}elseif($event['Event']['state'] == 9){
					echo '<h2 style="border-bottom:3px solid #6e6bd1;">'?><?echo $event['Event']['title']?><?'</h2>';
				}elseif($event['Event']['state'] == 4){
					echo '<h2 style="border-bottom:3px solid #6e6bd1;">'?><?echo $event['Event']['title']?><?'</h2>';
				}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8">
			<div class="row" style="padding-left:20px; padding-right:20px;">
				<div class="col-sm-12">
					<? if($event['Event']['state'] == 9){
							echo '<h2 class="in-cnts-h2"><i class="glyphicon glyphicon-play"></i> 団体紹介</h2>';
						}else{
							echo '<h2 class="in-cnts-h2"><i class="glyphicon glyphicon-play"></i> クラス紹介</h2>';
						} 
					?>
					<p><?echo $event['Event']['body']?></p>
				</div>
				<div class="col-xs-10 col-xs-offset-1 comp-intro">
					<div class="row hidden-xs">
						<div class="col-xs-12 comp-intro-top">
							<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][3]['dir'] . '/' . $event['Image'][3]['attachment'])?>
							<h3><? echo $event['Event']['comp_name'] ?></h3>
						</div>
						<div class="col-xs-12">
							<p><? echo nl2br($event['Event']['company_info']) ?></p>
						</div>
					</div>
					<div class="row hidden-sm hidden-md hidden-lg">
						<div class="col-xs-3 comp-intro-top" style="padding-right:0;">
							<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][3]['dir'] . '/' . $event['Image'][3]['attachment'])?>
						</div>
						<div class="col-xs-9 comp-intro-top"style="padding-left:0;">
							<h3><? echo $event['Event']['comp_name'] ?></h3>
						</div>
						<div class="col-xs-12">
							<p><? echo nl2br($event['Event']['company_info']) ?></p>
						</div>
					</div>
				</div>
				<div class="col-sm-12" style="margin-top:36px; 15px">
					<? if($event['Event']['state'] == 9){
							echo '<h2 class="in-cnts-h2"><i class="glyphicon glyphicon-play"></i> 団体詳細</h2>';
						}else{
							echo '<h2 class="in-cnts-h2"><i class="glyphicon glyphicon-play"></i> クラス詳細</h2>';
						} 
					?>
				</div>
				<div class="col-sm-6 img-obfit-incnts">
					<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][1]['dir'] . '/' . $event['Image'][1]['attachment'])?>
				</div>
				<div class="col-sm-6 img-obfit-incnts">
					<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][2]['dir'] . '/' . $event['Image'][2]['attachment'])?>
				</div>
				<div class="col-sm-12" style="margin-top:36px; 15px">
					<p><?echo nl2br($event['Event']['detail']);?></p>
				</div>
				<div class="col-xs-12 apply-btn">
					<button type="button" class="btn btn-primary btn-lg" onclick="eventapply()">このクラスに出席</button>
					<p class="p-center"><a href="#">クラスに出席すると？>></a></p>
				</div>
				<div class="col-sm-12 detail-info-table">
					<h2 class="in-cnts-h2"><i class="glyphicon glyphicon-play"></i> もっと知る</h2>
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
							echo $this->element( 'student_union' );
						}
						elseif($event['Event']['state'] == 4){
							echo $this->element( 'student_union_event' );
						}
					?>
					<? echo $this->element('detail_contact'); ?>
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
