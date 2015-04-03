						<table>
							<tr>
								<td>講師</td>
								<td><?echo $event['Event']['comp_name']?></td>
							</tr>
							<tr>
								<td>場所</td>
								<td><?echo $event['Event']['location']?></td>
							</tr>
							<tr>
								<td>スケジュール</td>
								<td><?echo $event['Camp']['schedule']?></td>
							</tr>
							<tr>
								<td>滞在先</td>
								<td><?echo $event['Camp']['stay_type']?></td>
							</tr>
							<tr>
								<td>食事</td>
								<td><?echo $event['Camp']['food']?></td>
							</tr>
							<tr>
								<td>添乗員</td>
								<td><?echo $event['Camp']['withmen']?></td>
							</tr>
							<tr>
								<td>集合場所</td>
								<td><?echo $event['Camp']['fromwhere']?></td>
							</tr>
							<tr>
								<td>費用</td>
								<td><?echo $event['Camp']['cost']?></td>
							</tr>
							<tr>
								<td>募集人数</td>
								<td><?echo $event['Camp']['limit_num']?></td>
							</tr>
							<tr>
								<td>応募締め切り</td>
								<td><?echo $event['Event']['date']?></td>
							</tr>
						</table>	