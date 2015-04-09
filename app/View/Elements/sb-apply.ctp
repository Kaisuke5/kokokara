<div class="row hidden-xs">
	<div class="col-sm-12">
		<h1 style="font-size:18px;font-weight:bold;">お申し込み</h1>
	</div>
	<div class="col-sm-12" style="padding:10px 20px;">
		<?php 
		if($event['Event']['state'] == 1){
			echo '<button class="btn btn-large btn-block sb-apply-btn" type="button" onclick="eventapply()" style="background:#d16b9a;">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 2){
			echo '<button class="btn btn-large btn-block sb-apply-btn" type="button" onclick="eventapply()" style="background:#d1a6b;">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 3){
			echo '<button class="btn btn-large btn-block sb-apply-btn" type="button" onclick="eventapply()" style="background:#ced16b;">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 5){		
			echo '<button class="btn btn-large btn-block sb-apply-btn" type="button" onclick="eventapply()" style="background:#9ad16b;">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 6){
			echo '<button class="btn btn-large btn-block sb-apply-btn" type="button" onclick="eventapply()" style="background:#6bd16e;">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 7){
			echo '<button class="btn btn-large btn-block sb-apply-btn" type="button" onclick="eventapply()" style="background:#6bd1a1;">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 8){
			echo '<button class="btn btn-large btn-block sb-apply-btn" type="button" onclick="eventapply()" style="background:#6bcad1;">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 9){
			echo '<button class="btn btn-large btn-block sb-apply-btn" type="button" onclick="eventapply()" style="background:#6e6bd1;">このクラスに出席</button>';
			}elseif($event['Event']['state'] == 4){
			echo '<button class="btn btn-large btn-block sb-apply-btn" type="button" onclick="eventapply()" style="background:#6e6bd1;">このクラスに出席</button>';
			}	
		?>
		<p class="p-center"><a href="#">クラスに出席すると？>></a></p>
	</div>
</div>