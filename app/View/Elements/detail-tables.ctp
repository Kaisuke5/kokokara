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
							echo $this->element( 'student_union_event' );
						}
						
					?>
				</div>
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
					<p class="p-center"><a href="../pages/about">クラスに出席すると？>></a></p>
				</div>