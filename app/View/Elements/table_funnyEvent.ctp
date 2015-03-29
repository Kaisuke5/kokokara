						<table>
							<tr>
								<td>講師</td>
								<td><?echo $event['Event']['company_info']?></td>
							</tr>
							<tr>
								<td>日時</td>
								<td><?echo $event['Event']['date']?></td>
							</tr>
							<tr>
								<td>場所</td>
								<td><?echo $event['Event']['location']?></td>
							</tr>
							<tr>
								<td>スケジュール</td>
								<td><?echo $event['FunnyEvent']['schedule']?></td>
							</tr>
							<tr>
								<td>費用</td>
								<td><?echo $event['FunnyEvent']['cost']?></td>
							</tr>
							<tr>
								<td>募集人数</td>
								<td><?echo $event['FunnyEvent']['limit_num']?></td>
							</tr>
							<tr>
								<td>応募締め切り</td>
								<td><?echo $event['FunnyEvent']['deadline']?></td>
							</tr>
						</table>	