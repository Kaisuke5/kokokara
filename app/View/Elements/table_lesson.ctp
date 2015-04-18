						<table>
							<tr>
								<td class="detail-info-table-bold">講師</td>
								<td><?echo $event['Event']['company_name']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">日時</td>
								<td><?echo $event['Event']['date']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">期間</td>
								<td><?echo $event['Event']['period']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">場所</td>
								<td><?echo $event['Event']['location']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">身につくこと事</td>
								<td><?echo nl2br($event['lesson']['skill'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">費用</td>
								<td><?echo $event['lesson']['cost']?></td>
							</tr>
							
						</table>	
						