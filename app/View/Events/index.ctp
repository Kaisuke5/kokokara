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
		<div class="col-sm-5 event-info-top">
			<div style="float:left; width:50px; height:50px; margin:10px; background:#ededed;"></div>
			<p><font style="font-size:12px;">講師</font><br>株式会社kokokara Group</p>
		</div>
		<div class="col-sm-3 event-info-top" style="text-align:center;">
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

				</div>
				<div class="col-xs-6 event-info-top-tw">
					
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
					<h2>クラス紹介</h2>
					<p><?echo $event['Event']['body']?></p>
				</div>
				<div class="col-sm-12 img-obfit-incnts">
					<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][1]['dir'] . '/' . $event['Image'][1]['attachment'])?>
				</div>
				<div class="col-sm-12" style="margin-top:36px; 15px">
					<h2>クラス詳細</h2>
					<p><?echo $event['Event']['detail']?></p>
				</div>
			</div>	
		</div>
		<div class="col-sm-4 event-pg-sb">
			
		</div>
	</div>
</div>
<h2>イベント</h2>

<?debug($event)?>

<!-- id送信-->
<input type="hidden" class="setid" value="<?echo $event['Event']['id']?>">

<?debug($event["Image"][0])?>

<button onclick="eventapply()">申し込み</button>
