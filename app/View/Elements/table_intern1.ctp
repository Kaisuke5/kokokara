						<table>
							<tr>
								<td>講師</td>
								<td><?echo $event['Event']['comp_name']?></td>
							</tr>
							<tr>
								<td>期間</td>
								<td><?echo $event['Event']['period']?></td>
							</tr>
							<tr>
								<td>場所</td>
								<td><?echo $event['Event']['location']?></td>
							</tr>
							<tr>
								<td>身につくスキル</td>
								<td><?echo $event['Intern']['skill']?></td>
							</tr>
							<tr>
								<td>給与</td>
								<td><?echo $event['Intern']['payment']?></td>
							</tr>
							<tr>
								<td>その他待遇</td>
								<td><?echo $event['Intern']['treatment']?></td>
							</tr>
							<tr>
								<td>対象</td>
								<td><?echo $event['Intern']['target']?>名</td>
							</tr>
							<tr>
								<td>募集人数</td>
								<td><?echo $event['Intern']['limit_num']?>名</td>
							</tr>
							<tr>
								<td>申し込み期限</td>
								<td><?echo $event['Event']['date']?></td>
							</tr>
						</table>	