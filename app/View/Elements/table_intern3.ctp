						<table>
							<tr>
								<td class="detail-info-table-bold">講師</td>
								<td><?echo $event['Event']['company_name']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">募集人数</td>
								<td><?echo $event['Intern']['limit_num']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">期間</td>
								<td><?echo $event['Event']['period']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">身につくスキル</td>
								<td><?echo nl2br($event['Intern']['skill'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">給与</td>
								<td><?echo $event['Intern']['payment']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">募集対象</td>
								<td><?echo nl2br($event['Intern']['conditions'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">その他待遇</td>
								<td><?echo nl2br($event['Intern']['treatment'])?></td>
							</tr>
							
						</table>	