<h2>ユーザー一覧</h2>


<table>
		<tr>
			<th>名前</th>
			<th>PV数</th>
			<th>参加数</th>
			<th>最終ログイン</th>
			<th>Fb</th>
		</tr>


	<?foreach($students as $student):?>
		<tr>
		<td><?echo $this->Html->link($student["Student"]["name"],
		array("controller"=>"Students","?"=>array("id"=>$student["Student"]["id"])))?></td>
		<td><?echo $student["logs"]."pv";?></td>
		<td><?echo $student["applies"]."回";?></td>
		<td><?echo $student["Student"]["modified"];?></td>
		<td><a href="<?echo $student['FacebookUser']['link']?>">FBlink</a></td>
		
		</tr>
		
	<?endforeach;?>
</table>



