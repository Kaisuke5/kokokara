<div class="row hidden-xs">
	<div class="col-sm-12">
		<h1 style="font-size:18px;font-weight:bold;">お申し込み</h1>
	</div>
	<div class="col-sm-12" style="padding:10px 20px;">
		<?php 
		if($event['Event']['state'] == 1){
			echo '<a href="#event-apply"class="btn btn-large btn-block sb-apply-btn1" type="button">このクラスに出席</a>';
			}elseif($event['Event']['state'] == 2){
			echo '<a href="#event-apply"class="btn btn-large btn-block sb-apply-btn2" type="button">このクラスに出席</a>';
			}elseif($event['Event']['state'] == 3){
			echo '<a href="#event-apply"class="btn btn-large btn-block sb-apply-btn3" type="button">このクラスに出席</a>';
			}elseif($event['Event']['state'] == 5){		
			echo '<a href="#event-apply"class="btn btn-large btn-block sb-apply-btn5" type="button">このクラスに出席</a>';
			}elseif($event['Event']['state'] == 6){
			echo '<a href="#event-apply"class="btn btn-large btn-block sb-apply-btn6" type="button">このクラスに出席</a>';
			}elseif($event['Event']['state'] == 7){
			echo '<a href="#event-apply"class="btn btn-large btn-block sb-apply-btn7" type="button">このクラスに出席</a>';
			}elseif($event['Event']['state'] == 8){
			echo '<a href="#event-apply"class="btn btn-large btn-block sb-apply-btn8" type="button">このクラスに出席</a>';
			}elseif($event['Event']['state'] == 9){
			echo '<a href="#event-apply"class="btn btn-large btn-block sb-apply-btn9" type="button">このクラスに出席</a>';
			}elseif($event['Event']['state'] == 4){
			echo '<a href="#event-apply"class="btn btn-large btn-block sb-apply-btn4" type="button">このクラスに出席</a>';
			}	
		?>
		<p class="p-center"><a href="ins-apply">クラスに出席すると？>></a></p>
	</div>
</div>