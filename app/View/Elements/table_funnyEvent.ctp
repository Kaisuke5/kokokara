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
								<td class="detail-info-table-bold">場所</td>
								<td><?echo $event['Event']['location']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">スケジュール</td>
								<td><?echo nl2br($event['FunnyEvent']['schedule'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">費用</td>
								<td><?echo $event['FunnyEvent']['cost']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">募集人数</td>
								<td><?echo $event['FunnyEvent']['limit_num']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">応募締め切り</td>
								<td><?echo $event['FunnyEvent']['deadline']?></td>
							</tr>
						</table>