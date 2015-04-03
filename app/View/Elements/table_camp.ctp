						<table>
							<tr>
								<td class="detail-info-table-bold">講師</td>
								<td><?echo $event['Event']['comp_name']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">場所</td>
								<td><?echo $event['Event']['location']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">スケジュール</td>
								<td><?echo nl2br($event['Camp']['schedule'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">滞在先</td>
								<td><?echo $event['Camp']['stay_type']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">食事</td>
								<td><?echo nl2br($event['Camp']['food'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">添乗員</td>
								<td><?echo nl2br($event['Camp']['withmen'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">集合場所</td>
								<td><?echo nl2br($event['Camp']['fromwhere'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">費用</td>
								<td><?echo $event['Camp']['cost']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">募集人数</td>
								<td><?echo $event['Camp']['limit_num']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">応募締め切り</td>
								<td><?echo $event['Event']['date']?></td>
							</tr>
						</table>	
						