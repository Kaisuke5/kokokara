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
								<td><?echo $event['Event']['sns-account']?></td>
							</tr>
						</table>
