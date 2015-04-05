<?echo $this->Html->script("jquery-1.11.2.js");?>
<?echo $this->Html->css("kai.css");?>

<?debug($state)?>


<div id="event_form1" class="event_original_form">
	<?
		echo $this->Form->create('Intern',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
		echo $this->Form->input("target",array("label"=>"対象"));
		echo $this->Form->input("limit_num",array("label"=>'募集人数'));
		echo $this->Form->input("skill",array("label"=>"身に付くスキル"));
		echo $this->Form->input("payment",array("label"=>"給与"));
		echo $this->Form->input("conditions",array("label"=>"応募条件"));
		echo $this->Form->input("treatment",array("label"=>"待遇"));
		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>



</div>


<div id="event_form5" class="event_original_form">
	<?
		echo $this->Form->create('StudyAbroad',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
		echo $this->Form->input("cost",array("label"=>"費用"));
		echo $this->Form->input("class",array("label"=>'時間割サンプル'));
		echo $this->Form->input("stay_type",array("label"=>"滞在の種類"));
		echo $this->Form->input("cost",array("label"=>"費用"));
		echo $this->Form->input("conditions",array("label"=>"応募条件"));
		echo $this->Form->input("environment",array("label"=>"環境"));
		echo $this->Form->input("deadline",array("label"=>"締め切り"));
		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));
	?>
	
		<h2>授業コース</h2>
		<p>*応募者が受けられる<font style="font-weight:bold;">一番人気の</font>授業をご記入下さい</p>
	<table>
		<tr>
			<td style="background:#c0c0c0;"></td>
			<td style="background:#ededed;"><?echo $this->Form->input("value_title_a1",array("label"=>"期間など"));?></td>
			<td style="background:#ededed;"><?echo $this->Form->input("value_title_a2",array("label"=>"期間など"));?></td>
			<td style="background:#ededed;"><?echo $this->Form->input("value_title_a3",array("label"=>"期間など"));?></td>
			<td style="background:#ededed;"><?echo $this->Form->input("value_title_a4",array("label"=>"期間など"));?></td>
			<td style="background:#ededed;"><?echo $this->Form->input("value_title_a5",array("label"=>"期間など"));?></td>
		</tr>
		<tr>
			<td style="background:#ededed;"><?echo $this->Form->input("value_title_b1",array("label"=>"部屋タイプなど"));?></td>
			<td><?echo $this->Form->input("value_1-1",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_1-2",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_1-3",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_1-4",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_1-5",array("label"=>"お値段"));?></td>
		</tr>
		<tr>
			<td style="background:#ededed;"><?echo $this->Form->input("value_title_b2",array("label"=>"部屋タイプなど"));?></td>
			<td><?echo $this->Form->input("value_2-1",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_2-2",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_2-3",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_2-4",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_2-5",array("label"=>"お値段"));?></td>
		</tr>
		<tr>
			<td style="background:#ededed;"><?echo $this->Form->input("value_title_b3",array("label"=>"部屋タイプなど"));?></td>
			<td><?echo $this->Form->input("value_3-1",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_3-2",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_3-3",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_3-4",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_3-5",array("label"=>"お値段"));?></td>
		</tr>
		<tr>
			<td style="background:#ededed;"><?echo $this->Form->input("value_title_b4",array("label"=>"部屋タイプなど"));?></td>
			<td><?echo $this->Form->input("value_4-1",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_4-2",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_4-3",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_4-4",array("label"=>"お値段"));?></td>
			<td><?echo $this->Form->input("value_4-5",array("label"=>"お値段"));?></td>
		</tr>
	</table>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>

</div>







<div id="event_form6" class="event_original_form">

<?
		echo $this->Form->create('Camp',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
		echo $this->Form->input("fromwhere",array("label"=>"発着地"));
		echo $this->Form->input("limit_num",array("label"=>'募集人数'));
		echo $this->Form->input("stay_type",array("label"=>"滞在の種類"));
		echo $this->Form->input("cost",array("label"=>"費用"));
		echo $this->Form->input("shedule",array("label"=>"スケジュール"));
		echo $this->Form->input("withmen",array("label"=>"添乗員"));
		echo $this->Form->input("tuition",array("label"=>"授業料"));
		echo $this->Form->input("food",array("label"=>"滞在中の食事"));
		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>



</div>


<div id="event_form7" class="event_original_form">
<?
		echo $this->Form->create('Lesson',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
		
		echo $this->Form->input("skill",array("label"=>"学べること"));
		echo $this->Form->input("cost",array("label"=>"費用"));
		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>


</div>



<div id="event_form8" class="event_original_form">
	<?
		echo $this->Form->create('FunnyEvent',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
		
		echo $this->Form->input("limit_num",array("label"=>"募集人数"));
		echo $this->Form->input("limit_min",array("label"=>"最小人数"));
		echo $this->Form->input("deadline",array("label"=>"締め切り日時"));
		echo $this->Form->input("cost",array("label"=>"費用"));
		echo $this->Form->input("schedule",array("label"=>"スケジュール"));


		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>


</div>


<div id="event_form9" class="event_original_form">
	<?
		echo $this->Form->create('StudentGroup',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
		
		echo $this->Form->input("represent",array("label"=>"団体代表者名"));
		echo $this->Form->input("foundation",array("label"=>"設立年"));
		echo $this->Form->input("num_students",array("label"=>"活動人数"));
		echo $this->Form->input("gender",array("label"=>"男女比"));
		echo $this->Form->input("frequency",array("label"=>"活動頻度"));
		echo $this->Form->input("major_univ",array("class"=>"",'div'=>"aaa","label"=>"主要大学"));
		echo $this->Form->input("total_univ",array("class"=>"",'div'=>"aaa","label"=>"参加大学"));



		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>


</div>

<div id="event_form4" class="event_original_form">
	<?
		echo $this->Form->create('Student_Event',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
		
		echo $this->Form->input("limit_num",array("label"=>"募集人数"));
		
		echo $this->Form->input("cost",array("label"=>"費用"));
		

		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>


</div>




<script type>
	var state=<?echo $state?>;
	s="#event_form";
	for(i=1;i<10;i++){
    	$(s+i).css("display", "none");
    }
   	console.log($(s+state));

    if(state>4){
    	console.log($(s+state));
    	$(s+state).css("display", "block");
    }else{
    	$(s+1).css("display", "block");
    }
    



</script>


