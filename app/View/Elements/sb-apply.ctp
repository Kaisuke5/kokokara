<div class="row hidden-xs">
	<div class="col-sm-12">
		<h1 style="font-size:18px;font-weight:bold;">お申し込み</h1>
	</div>
	<div class="col-sm-12" style="padding:10px 20px;">
		<?php 
		if($event['Event']['state'] == 1){
			echo '<button class="btn btn-large btn-block sb-apply-btn1" type="button" onclick="eventapply()">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 2){
			echo '<button class="btn btn-large btn-block sb-apply-btn2" type="button" onclick="eventapply()">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 3){
			echo '<button class="btn btn-large btn-block sb-apply-btn3" type="button" onclick="eventapply()">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 5){		
			echo '<button class="btn btn-large btn-block sb-apply-btn5" type="button" onclick="eventapply()">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 6){
			echo '<button class="btn btn-large btn-block sb-apply-btn6" type="button" onclick="eventapply()">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 7){
			echo '<button class="btn btn-large btn-block sb-apply-btn7" type="button" onclick="eventapply()">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 8){
			echo '<button class="btn btn-large btn-block sb-apply-btn8" type="button" onclick="eventapply()">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 9){
			echo '<button class="btn btn-large btn-block sb-apply-btn9" type="button" onclick="eventapply()">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 4){
			echo '<button class="btn btn-large btn-block sb-apply-btn4" type="button" onclick="eventapply()">このクラスに出席</button>';
			}	
		?>
		<p class="p-center"><a href="#">クラスに出席すると？>></a></p>
	</div>
</div>