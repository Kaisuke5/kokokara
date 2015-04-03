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


