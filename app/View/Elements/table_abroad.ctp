						<table>
							<tr>
								<td class="detail-info-table-bold">講師</td>
								<td><? echo $event['Event']['company_name']?></td>
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
								<td class="detail-info-table-bold">学べる事</td>
								<td><?echo nl2br($event['StudyAbroad']['skill'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">取れるコース</td>
								<td><?echo nl2br($event['StudyAbroad']['class'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">滞在先の環境</td>
								<td><?echo nl2br($event['StudyAbroad']['environment'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">費用</td>
								<td><?echo $event['StudyAbroad']['cost']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">滞在の種類</td>
								<td><?echo nl2br($event['StudyAbroad']['stay_type'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">応募条件</td>
								<td><?echo nl2br($event['StudyAbroad']['conditions'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">申し込み締め切り</td>
								<td><?echo $event['StudyAbroad']['deadline']?></td>
							</tr>
						</table>	
						