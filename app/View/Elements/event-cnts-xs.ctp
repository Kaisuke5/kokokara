			<div class="row">
				<div class="col-sm-12">
					<? if($event['Event']['state'] == 9 and $event['Event']['state'] == 4){
							echo '<h2 class="in-cnts-h2-xs"><i class="glyphicon glyphicon-play"></i> 団体紹介</h2>';
						}else{
							echo '<h2 class="in-cnts-h2-xs"><i class="glyphicon glyphicon-play"></i> クラス紹介</h2>';
						} 
					?>
					<p><?echo $event['Event']['body']?></p>
				</div>
				<div class="col-xs-10 col-xs-offset-1 comp-intro">
					<div class="row">
						<div class="col-xs-3 comp-intro-top" style="padding-right:0;">
							<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][3]['dir'] . '/' . $event['Image'][3]['attachment'])?>
						</div>
						<div class="col-xs-9 comp-intro-top" style="padding-left:0;">
							<h3><? echo $event['Event']['company_name'] ?></h3>
						</div>
						<div class="col-xs-12">
							<p><? echo nl2br($event['Event']['company_info']) ?></p>
						</div>
					</div>
				</div>
				<div class="col-sm-12" style="margin-top:36px; 15px">
					<? if($event['Event']['state'] == 9 and $event['Event']['state'] == 4){
							echo '<h2 class="in-cnts-h2-xs"><i class="glyphicon glyphicon-play"></i> 団体詳細</h2>';
						}else{
							echo '<h2 class="in-cnts-h2-xs"><i class="glyphicon glyphicon-play"></i> クラス詳細</h2>';
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
				<?if($event['Event']['state'] == 5){
						echo'<div class="col-sm-8 col-sm-offset-2">
								<blockquote style="border:1px solid #c0c0c0; margin:20px 0 0;">
									<p class="apply-notice">kokokara2015参加者で1ヶ月以上の留学を検討し、留学体験記を書いてくれる方には1万円キャッシュバック!</p>
								</blockquote>
							</div>';
					}
				?>
				<?if($event['Event']['state'] == 3){
						echo'<div class="col-sm-8 col-sm-offset-2">
								<blockquote style="border:1px solid #c0c0c0; margin:20px 0 0;">
									
									<p class="apply-notice">先着20名につき海外インターンのサポート費が3万円から1万円に！<br><br><font style="color:#FE2E2E;text-align:center;font-weight:bold;">残り16人！</font></p>
								</blockquote>
							</div>';
					}
				?>
				<div class="col-xs-12 apply-btn" style="z-index:1;">
					<?php 
					if($event['Event']['state'] == 1){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg1" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 2){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg2" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 3){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg3" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 5){		
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg5" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 6){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg6" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 7){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg7" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 8){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg8" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 9){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg9" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 4){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg4" type="button">このクラスに出席</a>';
						}	
					?>
					<p class="p-center"><a href="#ins-apply">クラスに出席すると？>></a></p>
				</div>
				<div class="col-sm-12 detail-info-table">
					<h2 class="in-cnts-h2-xs"><i class="glyphicon glyphicon-play"></i> もっと知る</h2>
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
							echo $this->element( 'student_union_event' );
						}
						elseif($event['Event']['state'] == 4){
							echo $this->element( 'student_union' );
						}
					?>
				</div>
				<?if($event['Event']['state'] == 5){
						echo'<div class="col-sm-8 col-sm-offset-2">
								<blockquote style="border:1px solid #c0c0c0; margin:20px 0 0;">
									
									<p class="apply-notice">kokokara2015参加者で1ヶ月以上の留学を検討し、留学体験記を書いてくれる方には1万円キャッシュバック!</p>
								</blockquote>
							</div>';
					}
				?>
				<?if($event['Event']['state'] == 3){
						echo'<div class="col-sm-8 col-sm-offset-2">
								<blockquote style="border:1px solid #c0c0c0; margin:20px 0 0;">
									
									<p class="apply-notice">先着20名につき海外インターンのサポート費が3万円から1万円に！<br><br><font style="color:#FE2E2E;text-align:center;font-weight:bold;">残り16人！</font></p>
								</blockquote>
							</div>';
					}
				?>
				<div class="col-xs-12 apply-btn">
					<?php 
					if($event['Event']['state'] == 1){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg1" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 2){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg2" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 3){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg3" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 5){		
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg5" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 6){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg6" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 7){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg7" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 8){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg8" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 9){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg9" type="button">このクラスに出席</a>';
						}elseif($event['Event']['state'] == 4){
						echo '<a href="#event-apply"class="btn btn-primary btn-lg btn-lg4" type="button">このクラスに出席</a>';
						}	
					?>
					<p class="p-center"><a href="#ins-apply">クラスに出席すると？>></a></p>
				</div>
			</div>