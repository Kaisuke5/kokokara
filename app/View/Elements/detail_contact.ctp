						<div style="width:100%; background:#ffffff; height:40px;">
							<h2 style="padding-top:10px;font-size:18px;font-weight:bold;"><span class="glyphicon glyphicon-phone"></span> お問い合わせ</h2>
						</div>
						<table>
							<tr class="detail-contact-tr">
								<td class="detail-contact-td">Eメール</td>
								<td><?echo $event['Event']['e-mail']?></td>
							</tr>
							<tr class="detail-contact-tr">
								<td class="detail-contact-td">電話番号</td>
								<td><?echo $event['Event']['phone']?></td>
							</tr>
							<tr class="detail-contact-tr">
								<td class="detail-contact-td">関連URL</td>
								<td><?echo $event['Event']['related-url']?></td>
							</tr>
							<tr class="detail-contact-tr">
								<td class="detail-contact-td">SNS</td>
								<td>
									<?php if($event['Event']['sns-facebook'] == null){
										echo '<a style="display:none;"></a>';
										}else{
										echo '<a href="'?> <? echo $event['Event']['sns-facebook']?> <?echo'"><i class="fa fa-facebook" style="font-size:32px; padding-right:40px;"></i></a>';
										}
									?>
									<?php if($event['Event']['sns-twitter'] == null){
										echo '<a style="display:none;"></a>';
										}else{
										echo '<a href="'?><? echo $event['Event']['sns-twitter']?><? echo'"><i class="fa fa-twitter" style="font-size:32px;"></i></a>';
										}
									?>
								</td>
							</tr>
						</table>
