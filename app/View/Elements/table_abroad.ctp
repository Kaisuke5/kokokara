						<table>
							<tr>
								<td class="detail-info-table-bold">講師</td>
								<td><? echo $event['Event']['company_name']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">おすすめコース</td>
								<td><?echo nl2br($event['StudyAbroad']['class'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">おすすめコース費用</td>
								<td><?echo $event['StudyAbroad']['cost']?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">滞在先の環境</td>
								<td><?echo nl2br($event['StudyAbroad']['environment'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">滞在の種類</td>
								<td><?echo nl2br($event['StudyAbroad']['stay_type'])?></td>
							</tr>
							<tr>
								<td class="detail-info-table-bold">応募条件</td>
								<td><?echo nl2br($event['StudyAbroad']['conditions'])?></td>
							</tr>
						</table>	
						