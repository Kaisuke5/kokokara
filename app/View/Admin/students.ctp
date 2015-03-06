</h2>ユーザー一覧</h2>

<?foreach($students as $student):?>
	<?echo $this->Html->link($student["Student"]["name"],
	array("controller"=>"Students","?"=>array("id"=>$student["Student"]["id"])))?>

	<?echo "pv数 ".$student["logs"];?>
	<?echo "参加数 ".$student["applies"];?>
	<?echo "last login ".$student["Student"]["modified"];?>
	<a href="<?echo $student['FacebookUser']['link']?>">FBlink</a>
	

	
	</br>
<?endforeach;?>

