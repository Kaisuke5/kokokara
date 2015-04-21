<? $this->Html->css('index-style', null, array('inline' => false)) ?>
<div class="container home-cntr-top" style="margin-top:90px;">		
	<div class="top-bgi">
		<div class="row" style="padding-top:60px;padding-bottom:60px;">
			<div class="col-sm-6 top-welcome hidden-xs" style="text-align:right;">
				 <? echo $this->Html->image("start.png", array("alt" => "新しい何かを始めよう")); ?>
			</div>
			<div class="col-sm-6 top-welcome-right hidden-xs" style="text-align:left;">
				<? echo $this->Html->image("kokokara_logo.gif", array("alt" => "ロゴ")); ?>
			</div>
			<div class="col-xs-12 top-welcome hidden-sm hidden-md hidden-lg" style="text-align:center;">
				 <? echo $this->Html->image("start.png", array("alt" => "新しい何かを始めよう")); ?>
			</div>
			<div class="col-xs-12 top-welcome-right hidden-sm hidden-md hidden-lg" style="text-align:center;">
				<? echo $this->Html->image("kokokara_logo.gif", array("alt" => "ロゴ")); ?>
			</div>
			<!--
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
			-->
		</div>
		<div class="row top-signin">
			<div class="col-sm-6 col-sm-offset-1 top-signin-left">
				<p style="color:#c0c0c0;">入学してkokokara学生証を手に入れよう <i class="fa fa-question-circle"></i></p>
			</div>
			<div class="col-sm-3 col-xs-12 top-signin-fb">
				<?php
					echo $this->Html->link('', array("controller" => "fbconnect", "action" => "facebook"));
				?>
				<p class="text-fit" style="color:#c0c0c0;"><i class="fa fa-facebook-square"></i> facebookで入学する</p>
			</div>
		</div>
		<!--
		<div class="row top-signin">
			<div class="col-xs-12">
				<p style="font-size:20px; padding:15px 0;color:#ffffff;">入学してkokokara学生証を手に入れよう</p>

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
		-->
	</div>	
</div>
<div class="container home-cntr">
	<div class="row cnts-top-bar-row">
		<div class="col-xs-2 cnts-top-bar" style="background:#d16b9a;border-radius: 9px 0px 0px 0px;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#d1a16b;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#9ad16b;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#6bd1a1;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#6bcad1;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#6e6bd1;border-radius: 0px 9px 0px 0px;">
		</div>
	</div>
	<div class="row">
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
									}elseif($event['Event']['state'] == 4){
									echo '<p class="event-pg-sb-cat" style="background:#6e6bd1;">学生団体</p>';
									}elseif($event['Event']['state'] == 9){
									echo '<p class="event-pg-sb-cat" style="background:#6e6bd1;">学生イベント</p>';
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
	<div class="row cnts-top-bar-row">
		<div class="col-xs-2 cnts-top-bar" style="background:#d16b9a;border-radius: 9px 0px 0px 0px;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#d1a16b;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#9ad16b;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#6bd1a1;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#6bcad1;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#6e6bd1;border-radius: 0px 9px 0px 0px;">
		</div>
	</div>
	<div class="row" style="padding-bottom:60px;">
	  <h2>なにを始めよう</h2>
	  <div class="col-md-12">
	  	<div class="row">
	  		<div class="col-md-4 col-sm-6 col-xs-12 col-cat">
	  			<?php echo $this->Html->link('', array('controller' => 'events', 'action' => 'category', 1)); ?>
	  			<div class="col-cat-in col-cat-in1">
	  				<div class="col-cat-in-logo" style="background:#d16b9a;"></div>
	  				<div>
	  					<h3 class="hidden-md" style="color:#d16b9a;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>長期インターン</h3>
	  					<h4 class="hidden-xs hidden-sm hidden-lg"style="color:#d16b9a;"><font style="font-size:13px; font-weight:lighter;">いまから</font><br>長期インターン</h4>
	  				</div>
	  			</div>

	  		</div>
	  		<div class="col-md-4 col-sm-6 col-xs-12 col-cat">
	  			<?php echo $this->Html->link('', array('controller' => 'events', 'action' => 'category', 2)); ?>
	  			<div class="col-cat-in col-cat-in2">
	  				<div class="col-cat-in-logo" style="background:#d1a16b;"></div>
		  			<div>
		  				<h3 class="hidden-md" style="color:#d1a16b;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>短期インターン</h3>
		  				<h4 class="hidden-xs hidden-sm hidden-lg"style="color:#d1a16b;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>短期インターン</h4>
		  			</div>
		  		</div>
	  		</div>
	  		<div class="col-md-4 col-sm-6 col-xs-12 col-cat">
	  			<?php echo $this->Html->link('', array('controller' => 'events', 'action' => 'category', 3)); ?>
	  			<div class="col-cat-in col-cat-in3">
	  				<div class="col-cat-in-logo" style="background:#ced16b;"></div>
		  			<div>
		  				<h3 class="hidden-md" style="color:#ced16b;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>海外インターン</h3>
		  				<h4 class="hidden-xs hidden-sm hidden-lg"style="color:#ced16b;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>海外インターン</h4>
		  			</div>
	  			</div>
	  		</div>
	  		<div class="col-md-4 col-sm-6 col-xs-12 col-cat">
	  			<?php echo $this->Html->link('', array('controller' => 'events', 'action' => 'category', 5)); ?>
	  			<div class="col-cat-in col-cat-in5">
	  				<div class="col-cat-in-logo" style="background:#9ad16b;"></div>
	  				<div>
		  				<h3 class="hidden-md" style="color:#9ad16b;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>海外留学</h3>
		  				<h4 class="hidden-xs hidden-sm hidden-lg"style="color:#9ad16b;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>海外留学</h4>
		  			</div>
	  			</div>
	  		</div>
	  		<div class="col-md-4 col-sm-6 col-xs-12 col-cat">
	  			<?php echo $this->Html->link('', array('controller' => 'events', 'action' => 'category', 6)); ?>
	  			<div class="col-cat-in col-cat-in6">
	  				<!--　サイトオープン時、グレイアウト用
	  				<div class="col-cat-in-logo" style="background:#c0c0c0;"></div>
	  				<div>
		  				<h3 class="hidden-md" style="color:#c0c0c0;"><font style="font-size:13px;font-weight:lighter;">合宿</font><br>只今建設中</h3>
		  				<h4 class="hidden-xs hidden-sm hidden-lg"style="color:#c0c0c0;"><font style="font-size:13px;font-weight:lighter;">合宿</font><br>只今建設中</h4>
		  			</div>
		  			-->
		  			<div class="col-cat-in-logo" style="background:#6bd16e;"></div>
	  				<div>
		  				<h3 class="hidden-md" style="color:#6bd16e;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>合宿</h3>
		  				<h4 class="hidden-xs hidden-sm hidden-lg"style="color:#6bd16e;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>合宿</h4>
		  			</div>
	  			</div>
	  		</div>
	  		<div class="col-md-4 col-sm-6 col-xs-12 col-cat">
	  			<?php echo $this->Html->link('', array('controller' => 'events', 'action' => 'category', 7)); ?>
	  			<div class="col-cat-in col-cat-in7">
	  				<!--　サイトオープン時、グレイアウト用
	  				<div class="col-cat-in-logo" style="background:#c0c0c0;"></div>
	  				<div>
		  				<h3 class="hidden-md" style="color:#c0c0c0;"><font style="font-size:13px;font-weight:lighter;">習い事</font><br>只今建設中</h3>
		  				<h4 class="hidden-xs hidden-sm hidden-lg"style="color:#c0c0c0;"><font style="font-size:13px;font-weight:lighter;">習い事</font><br>只今建設中</h4>
		  			</div>
		  			-->
	  				<div class="col-cat-in-logo" style="background:#6bd1a1;"></div>
	  				<div>
		  				<h3 class="hidden-md" style="color:#6bd1a1;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>習い事</h3>
		  				<h4 class="hidden-xs hidden-sm hidden-lg"style="color:#6bd1a1;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>習い事</h4>
		  			</div>
	  			</div>
	  		</div>
	  		<div class="col-md-4 col-sm-6 col-xs-12 col-cat">
	  			<?php echo $this->Html->link('', array('controller' => 'events', 'action' => 'category', 8)); ?>
	  			<div class="col-cat-in col-cat-in8">
	  				<div class="col-cat-in-logo" style="background:#6bcad1;"></div>
	  				<div>
		  				<h3 class="hidden-md" style="color:#6bcad1;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>おもしろい事</h3>
		  				<h4 class="hidden-xs hidden-sm hidden-lg"style="color:#6bcad1;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>おもしろい事</h4>
		  			</div>
	  			</div>
	  		</div>
	  		<div class="col-md-4 col-sm-6 col-xs-12 col-cat">
	  			<?php echo $this->Html->link('', array('controller' => 'events', 'action' => 'category', 4)); ?>
	  			<div class="col-cat-in col-cat-in4">
	  				<div class="col-cat-in-logo" style="background:#6b97d1;"></div>
	  				<div>
		  				<h3 class="hidden-md" style="color:#6b97d1;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>学生団体</h3>
		  				<h4 class="hidden-xs hidden-sm hidden-lg"style="color:#6b97d1;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>学生団体</h4>
		  			</div>
	  			</div>
	  		</div>
	  		<div class="col-md-4 col-sm-6 col-xs-12 col-cat">
	  			<?php echo $this->Html->link('', array('controller' => 'events', 'action' => 'category', 9)); ?>
	  			<div class="col-cat-in col-cat-in9">
	  				<div class="col-cat-in-logo" style="background:#6e6bd1;"></div>
	  				<div>
		  				<h3 class="hidden-md" style="color:#6e6bd1;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>学生イベント</h3>
		  				<h4 class="hidden-xs hidden-sm hidden-lg"style="color:#6e6bd1;"><font style="font-size:13px;font-weight:lighter;">いまから</font><br>学生イベント</h4>
		  			</div>
	  			</div>
	  		</div>
	  	</div>
	  	<!--
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
		-->
　	　</div>
	</div>
</div>
<div class="container home-cntr">
	<div class="row cnts-top-bar-row">
		<div class="col-xs-2 cnts-top-bar" style="background:#d16b9a;border-radius: 9px 0px 0px 0px;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#d1a16b;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#9ad16b;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#6bd1a1;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#6bcad1;">
		</div>
		<div class="col-xs-2 cnts-top-bar" style="background:#6e6bd1;border-radius: 0px 9px 0px 0px;">
		</div>
	</div>
	<div class="row">
		<h2 style="margin-bottom:15px;">新しいできたクラス</h2>
	</div>
	<div class="row" >
		<div class="col-sm-4 hidden-xs" style="margin-top:35px;border-right:1px solid #ededed; padding-bottom:20px;">
			<? echo $this->element('top-pg-sidebar')?>
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
				<div class="col-sm-2 ctg-row-comp-thumb" style="padding-right:0;">
					<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][3]['dir'] . '/' . $event['Image'][3]['attachment'])?>
				</div>
				<div class="col-sm-10 art-list-comp">
					<h2><?echo $event['Event']['company_name']?></h2>
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
		  	<p class="p-center"><?php echo $this->Html->link('もっと見る>>', array('controller' => 'events', 'action' => 'news')); ?></p>
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





<a href="#modal">Modal Window for Logging-in</a>
<div class="remodal" data-remodal-id="modal">
    <h1>おかえりなさい！</h1>
    <div class="row hidden-xs">
	    <div class="col-sm-5">
	    	<h3>会員情報から登校</h3>
	   	</div>
	   	<div class="col-sm-2"><h3>OR</h3></div>
	   	<div class="col-sm-5">
	    	<h3>Facebookから登校</h3>	
	   	</div>
 	</div>
    <div class="row">
    	<div class="col-sm-5">
    		<h3 class="hidden-md hidden-sm hidden-lg">会員情報から登校</h3>
    		<?php
			echo $this->Form->create('Student');
			echo $this->Form->input('email');
			echo $this->Form->input('password');
			echo $this->Form->end('登校する', array('class' => 'remodal-confirm'));
			?>
			<div class="forget-pass">
				<?php
				echo $this->Html->link('パスワードをお忘れの場合', array('action' => 'passwordForgot'));
				?>
			</div>
    	</div>
    	<div class="col-sm-2"></div>
    	<div class="col-sm-5 top-signin top-signin-fb" style="margin-top:30px;">
    		<?php
			echo $this->Html->link('', array("controller" => "fbconnect", "action" => "facebook"));
			?>
			<p class="text-fit"><i class="fa fa-facebook-square"></i> facebookで入学する</p>
    	</div>
    </div>
    <br>
    <a class="remodal-cancel" href="#">閉じる</a>
</div>