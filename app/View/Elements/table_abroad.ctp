						<table>
							<tr>
								<td>講師</td>
								<td><?echo $event['Event']['company_info']?></td>
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
								<td>学べる事</td>
								<td><?echo $event['StudyAbroad']['skill']?></td>
							</tr>
							<tr>
								<td>取れるコース</td>
								<td><?echo $event['StudyAbroad']['class']?></td>
							</tr>
							<tr>
								<td>滞在先の環境</td>
								<td><?echo $event['StudyAbroad']['environment']?></td>
							</tr>
							<tr>
								<td>費用</td>
								<td><?echo $event['StudyAbroad']['cost']?></td>
							</tr>
							<tr>
								<td>滞在の種類</td>
								<td><?echo $event['StudyAbroad']['stay_type']?></td>
							</tr>
							<tr>
								<td>応募条件</td>
								<td><?echo $event['StudyAbroad']['conditions']?></td>
							</tr>
							<tr>
								<td>申し込み締め切り</td>
								<td><?echo $event['StudyAbroad']['deadline']?></td>
							</tr>
						</table>	