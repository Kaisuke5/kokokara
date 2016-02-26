<!-- Hello! -->

<?echo $this->Html->script("user.js");?>
<?echo $this->Html->script("jquery-1.11.2.js");?>
<? $this->Html->css('event-style', null, array('inline' => false)) ?>
<div class="container home-cntr koko-box-shadow" style="margin-top:15px;margin-bottom:40px;">
	
	<div class="row">
		<!-- カルーセルのサンプル
	    ================================================== -->
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <!-- インジケータ(カルーセル下部の三つ表示されているスライド枚数を示す丸いアイコン) -->
	      <ol class="carousel-indicators">
	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li>
	      </ol>
	　　　 <!-- カルーセルのスライドするコンテンツ部分 -->
	      	<div class="carousel-inner">
	        <div class="item active">
	         <?echo $this->Html->image('../files/image/attachment/'. $event['Image'][0]['dir'] . '/' . $event['Image'][0]['attachment'], array('class' => 'event-top-img img-responsive'))?>
	          <!--
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>一つ目のイメージ</h1>
	              <p>一つ目のイメージの説明文</p>
	              <p><a class="btn btn-lg btn-primary" href="#" role="button">ボタンも置けます</a></p>
	            </div>
	          </div>
	     	 -->
	        </div>
	        <div class="item">
	         	<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][1]['dir'] . '/' . $event['Image'][1]['attachment'], array('class' => 'event-top-img img-responsive'))?>
	          <!--
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>2枚目のタイトル</h1>
	              <p>一定時間が経過すると自動的にスライドし2枚目が表示されます。</p>
	            </div>
	          </div>
	      		-->
	        </div>
	        <div class="item">
	          	<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][2]['dir'] . '/' . $event['Image'][2]['attachment'], array('class' => 'event-top-img img-responsive'))?>
	          <!-- キャプションが不要な場合は記述する必要はありません。
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>画像だけ見せたい場合は、</h1>
	              <p>キャプションは必要ありません。</p>
	            </div>
	          </div>
	            -->
	        </div>
	      </div>
	      <!-- カルーセルの[次へ][前へ]を操作するコントロールボタン -->
	      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	    </div><!-- /.carousel -->
	</div>
	<!--
	<div class="row">
		<div class="col-md-12 img-obfit" style=" background:#e6e6e6;border-radius: 9px 9px 0px 0px;">

			<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][0]['dir'] . '/' . $event['Image'][0]['attachment'], array('class' => 'event-top-img img-responsive'))?>
		</div>
	</div>
	-->
	<div class="row">
		<div class="col-sm-6 event-info-top">
			<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][3]['dir'] . '/' . $event['Image'][3]['attachment'])?>
			<p>
				<? if($event['Event']['state'] == 9 and $event['Event']['state'] == 4){
							echo '<font style="font-size:12px;">学生団体</font>';
						}else{
							echo '<font style="font-size:12px;">講師</font>';
						} 
				?>
				<br><?echo ($event['Event']['company_name']);?>
			</p>
		</div>
		<div class="col-sm-2 event-info-top" style="text-align:center;">
		<!--
			<div class="event-info-top-fav">
			 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			</div>
			<div class="event-info-top-fav2">
				<p>おぼえておく！</p>
			</div>
		-->
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
		<div class="col-sm-12 hidden-xs art-title">
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
					}elseif($event['Event']['state'] == 4){
					echo '<p class="event-pg-top-cat" style="background:#6b97d1;">学生団体</p>';
					}elseif($event['Event']['state'] == 9){
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
					echo '<h2 style="border-bottom:3px solid #6b97d1;">'?><?echo $event['Event']['title']?><?'</h2>';
				}
			?>
		</div>
		<div class="col-xs-12 hidden-sm hidden-md hidden-lg art-title-xs">
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
					}elseif($event['Event']['state'] == 4){
					echo '<p class="event-pg-top-cat" style="background:#6b97d1;">学生団体</p>';
					}elseif($event['Event']['state'] == 9){
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
					echo '<h2 style="border-bottom:3px solid #6b97d1;">'?><?echo $event['Event']['title']?><?'</h2>';
				}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8 hidden-xs">
			<? echo $this->element('event-cnts-sm')?>
		</div>
		<div class="col-sm-8 hidden-sm hidden-md hidden-lg">
			<? echo $this->element('event-cnts-xs')?>		
		</div>
		<div class="col-sm-4" style="border-left:1px solid #ededed;">
			<? echo $this->element('sb-apply')?>
			<? echo $this->element('event-pg-sidebar')?>
		</div>
		
	</div>
</div>
<!-- 0427 追加木内 -->
		<div class="remodal" data-remodal-id="event-apply">
		    <h1 style="margin-bottom:40px;">このクラスに出席しますか？</h1>
		    <p>このボタンを押すと、このクラスへの出席を申請します。申請するとおおよそ3日以内にkokokaraから確認メールが届きます。</p>
		    <div class="col-xs-12 apply-btn">
					<?php 
					if($event['Event']['state'] == 1){
						echo '<button class="btn btn-primary btn-lg btn-lg1" type="button" onclick="eventapply()">このクラスに出席</button>';
						}elseif($event['Event']['state'] == 2){
						echo '<button class="btn btn-primary btn-lg btn-lg2" type="button" onclick="eventapply()">このクラスに出席</button>';
						}elseif($event['Event']['state'] == 3){
						echo '<button class="btn btn-primary btn-lg btn-lg3" type="button" onclick="eventapply()">このクラスに出席</button>';
						}elseif($event['Event']['state'] == 5){		
						echo '<button class="btn btn-primary btn-lg btn-lg5" type="button" onclick="eventapply()">このクラスに出席</button>';
						}elseif($event['Event']['state'] == 6){
						echo '<button class="btn btn-primary btn-lg btn-lg6" type="button" onclick="eventapply()">このクラスに出席</button>';
						}elseif($event['Event']['state'] == 7){
						echo '<button class="btn btn-primary btn-lg btn-lg7" type="button" onclick="eventapply()">このクラスに出席</button>';
						}elseif($event['Event']['state'] == 8){
						echo '<button class="btn btn-primary btn-lg btn-lg8" type="button" onclick="eventapply()">このクラスに出席</button>';
						}elseif($event['Event']['state'] == 9){
						echo '<button class="btn btn-primary btn-lg btn-lg9" type="button" onclick="eventapply()">このクラスに出席</button>';
						}elseif($event['Event']['state'] == 4){
						echo '<button class="btn btn-primary btn-lg btn-lg4" type="button" onclick="eventapply()">このクラスに出席</button>';
						}	
					?>
				</div>
				<p class="p-center"><a href="#ins-apply">クラスに出席すると？>></a></p>
		    <br>
		    <a class="remodal-cancel" href="#">閉じる</a>
		</div>
<!--以上追加分 -->

<div class="remodal" data-remodal-id="ins-apply">
    <h1 style="margin-bottom:40px;">クラスに出席すると？</h1>
    <div class="row">
    	<div class="col-sm-6">
    		<p style="font-size:14px;text-align:left;">
    		kokokaraはたくさんの組織・個人の協力によって、多彩なサービスを提供しております。<br>
    		それらのサービスは全てkokokaraが目指す学習に繋がる事から私達はそれを「クラス」と呼んでいます。<br>
    		つまり「クラスに出席する」とは、kokokaraを通じて彼らのサービスへ簡単にお申し込み頂けるという事です。<br><br>

	    	お申し込み頂くと、クラスを実際に提供している組織・個人から皆様に詳細をお伝えするメールが届きます。
    		</p>
    		<?php
			echo $this->Html->link('facebookで入学する', array("controller" => "fbconnect", "action" => "facebook"));
			?>
			<br>
    	</div>
    	<div class="col-sm-6">
    		<p style="font-size:124px;padding-top:60px;"><i class="fa fa-play"></i></p>
    	</div>
	</div>
	<br>
    <a class="remodal-cancel" href="#">閉じる</a>
</div>
<div class="remodal" data-remodal-id="ins-apply-intern-abroad-sm">
    <div class="hidden-xs">
	    <h1 style="margin-bottom:20px;">海外インターンに出発！</h1>
	    <p style="font-size:13px;margin-bottom:20px;">クラスに出席（お申込み）されますと、後日皆様に詳細をお伝えするEメールをお送り致します。<br>Eメールが届いた後、海外インターンクラスの場合は以下が基本の流れとなります。<br><br></p>
	    <p style="font-size:20px;">出席（お申込み）から海外インターンへの流れ</p>
	    <div class="row ins-intern-abroad-row">
			<div class="col-sm-5">
				<div class="ins-intern-abroad">
	    			<h4 style="padding-top:40px;padding-bottom:10px;">STEP 1</h4>
	    			<p><i class="fa fa-weixin" style="font-size:64px;"></i></p>
	    		</div>
			</div>
			<div class="col-sm-7">
				<h3 style="padding-top:40px;">kokokaraスタッフと面接、相談</h3>
				<div style="height:5px; background:#d1bb6b; margin-left:-80px;"></div>
			</div>
		</div>
		<div class="row ins-intern-abroad-row">
			<div class="col-sm-5">
				<div class="ins-intern-abroad">
	    			<h4 style="padding-top:40px;padding-bottom:10px;">STEP 2</h4>
	    			<p><i class="fa fa-skype" style="font-size:64px;"></i></p>
	    		</div>
			</div>
			<div class="col-sm-7">
				<h3 style="padding-top:40px;">インターン先企業とSkype面談</h3>
				<div style="height:5px; background:#d1bb6b; margin-left:-80px;"></div>
			</div>
		</div>
		<div class="row ins-intern-abroad-row">
			<div class="col-sm-5">
				<div class="ins-intern-abroad">
	    			<h4 style="padding-top:40px;padding-bottom:20px;">STEP 3</h4>
	    			<p><i class="fa fa-pencil-square-o" style="font-size:64px;"></i></p>
	    		</div>
			</div>
			<div class="col-sm-7">
				<h3 style="padding-top:40px;">申し込み書などの書類記入</h3>
	    		<div style="height:5px; background:#d1bb6b; margin-left:-80px;"></div>
			</div>
		</div>
		<div class="row ins-intern-abroad-row">
	    	<div class="col-sm-5">
	    		<div class="ins-intern-abroad">
	    			<h4 style="padding-top:20px;padding-bottom:10px;">STEP 4</h4>
	    			<p><i class="fa fa-money" style="font-size:48px;"></i></p>
	    			<p>サポート費の<br>ご入金</p>
	    		</div>
	    	</div>
	    	<div class="col-sm-2">
	    		<h2 style="padding-top:60px;">AND</h2>
	    	</div>
	    	<div class="col-sm-5">
	    		<div class="ins-intern-abroad">
	    			<h4 style="padding-top:30px;padding-bottom:10px;">STEP 5</h4>
	    			<p><i class="fa fa-plane" style="font-size:48px;"></i></p>
	    			<p style="font-size:20px;">出発!</p>
	    		</div>
	    	</div>
		</div>
	</div>
	<br>
	<div class="hidden-sm hidden-md hidden-lg">
		 <h1 style="margin-bottom:20px;">海外インターンに出発！</h1>
		 <p style="font-size:16px;">小画面用表示に切り替え致します。</p>
		 <p style="font-size:13px;margin-bottom:20px;">お手数ですが、一度この画面を閉じてもう一度お開き下さい。</p>
	</div>
	<a class="remodal-cancel" href="#">閉じる</a>
</div>
<div class="remodal" data-remodal-id="ins-apply-intern-abroad-xs">
    <h1 style="margin-bottom:20px;">海外インターンに<br>出発！</h1>
	<p style="font-size:13px;margin-bottom:20px;">クラスに出席（お申込み）されますと、後日皆様に詳細をお伝えするEメールをお送り致します。<br>Eメールが届いた後、海外インターンクラスの場合は以下が基本の流れとなります。<br><br></p>
	<p style="font-size:20px;">出席（お申込み）から<br>海外インターンへの流れ</p>
    <div class="row ins-intern-abroad-row">
	    <div class="col-sm-12">
	    	<div class="ins-intern-abroad">
	    		<h4 style="padding-top:20px;padding-bottom:10px;">STEP 1</h4>
	    		<p><i class="fa fa-weixin" style="font-size:48px;"></i></p>
	    		<p>kokokaraスタッフと<br>面接、相談</p>
	    	</div>
	    </div>
	</div>
	<div class="row ins-intern-abroad-row">
	    <div class="col-sm-12">
	    	<div class="ins-intern-abroad">
	    		<h4 style="padding-top:20px;padding-bottom:10px;">STEP 2</h4>
	    		<p><i class="fa fa-skype" style="font-size:48px;"></i></p>
	    		<p>インターン先企業と<br>Skype面談</p>
	    	</div>
	    </div>
	</div>
	<div class="row ins-intern-abroad-row">
	    <div class="col-sm-12">
	    	<div class="ins-intern-abroad">
	    		<h4 style="padding-top:20px;padding-bottom:10px;">STEP 3</h4>
	    		<p><i class="fa fa-pencil-square-o" style="font-size:48px;"></i></p>
	    		<p>申し込み書などの<br>書類記入</p>
	    	</div>
	    </div>
	</div>
	<div class="row ins-intern-abroad-row">
	    <div class="col-sm-12">
	    	<div class="ins-intern-abroad">
	    		<h4 style="padding-top:20px;padding-bottom:10px;">STEP 4</h4>
	    		<p><i class="fa fa-money" style="font-size:48px;"></i></p>
	    		<p>サポート費の<br>ご入金</p>
	    	</div>
	    </div>
	</div>
	<div class="row ins-intern-abroad-row">
	    <div class="col-sm-12">
	    	<div class="ins-intern-abroad">
	    		<h4 style="padding-top:30px;padding-bottom:10px;">STEP 5</h4>
	    		<p><i class="fa fa-plane" style="font-size:48px;"></i></p>
	    		<p style="font-size:20px;">出発!</p>
	    	</div>
	    </div>
	</div>
	<br>
    <a class="remodal-cancel" href="#">閉じる</a>
</div>