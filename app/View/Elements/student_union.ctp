						<table>
							<tr>
								<td class="detail-info-table-bold">団体名</td>
								<td><? echo $event['Event']['company_name']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">活動頻度</td>
								<td><?echo ($event['StudentGroupInfo']['activities'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">参加大学</td>
								<td><?echo ($event['StudentGroupInfo']['universities'])?></td>
							</tr>
						</table>
						