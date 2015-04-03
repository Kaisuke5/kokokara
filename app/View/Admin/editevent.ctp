


<?echo $this->Html->script("jquery-1.11.2.js");?>
<?echo $this->Html->css("kai.css");?>








<div id="event_form1" class="event_original_form">
	<?

		echo $this->Form->create('Event',
    		array('type' => 'file','url' =>
        		array('controller' => 'admin', 'action' => 'goEditEvent')));
		echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
		echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
		echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
		echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
		echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
		echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));


		echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
		echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
		echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
		echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
		echo $this->Form->input("date",array("value"=>$event["Event"]["date"],"label"=>"日時"));
		echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));
		echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));

		
		echo $this->Form->input("Intern.target",array("value"=>$event["Intern"]["target"],"label"=>"対象"));
		echo $this->Form->input("Intern.limit_num",array("value"=>$event["Intern"]["limit_num"],"label"=>'募集人数'));
		echo $this->Form->input("Intern.skill",array("value"=>$event["Intern"]["skill"],"label"=>"身に付くスキル"));
		echo $this->Form->input("Intern.payment",array("value"=>$event["Intern"]["payment"],"label"=>"給与"));
		echo $this->Form->input("Intern.conditions",array("value"=>$event["Intern"]["conditions"],"label"=>"応募条件"));
		echo $this->Form->input("Intern.treatment",array("value"=>$event["Intern"]["treatment"],"label"=>"待遇"));

		echo $this->Form->input("Intern.id",array("value"=>$event["Intern"]["id"],"type"=>"hidden"));
		
	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>



</div>


<div id="event_form5" class="event_original_form">
	<?
		echo $this->Form->create('Event',
		    array('type' => 'file','url' =>
		        array('controller' => 'admin', 'action' => 'goEditEvent')));
		echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
		echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
		echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
		echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
		echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
		echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));
		echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));


		echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
		echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
		echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
		echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
		echo $this->Form->input("id",array("value"=>$event["Event"]["date"],"label"=>"日時"));
		
		echo $this->Form->input("StudyAbroad.class",array("value"=>$event["StudyAbroad"]["class"],"label"=>'時間割サンプル'));
		echo $this->Form->input("StudyAbroad.stay_type",array("label"=>"滞在の種類"));
		echo $this->Form->input("StudyAbroad.cost",array("value"=>$event["StudyAbroad"]["cost"],"label"=>"費用"));
		echo $this->Form->input("StudyAbroad.conditions",array("value"=>$event["StudyAbroad"]["conditions"],"label"=>"応募条件"));
		echo $this->Form->input("StudyAbroad.environment",array("value"=>$event["StudyAbroad"]["environment"],"label"=>"環境"));
		echo $this->Form->input("StudyAbroad.deadline",array("value"=>$event["StudyAbroad"]["deadline"],"label"=>"締め切り"));
		echo $this->Form->input("StudyAbroad.id",array("value"=>$event["StudyAbroad"]["id"],"type"=>"hidden"));

	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>

</div>







<div id="event_form6" class="event_original_form">

<?

		echo $this->Form->create('Event',
		    array('type' => 'file','url' =>
		        array('controller' => 'admin', 'action' => 'goEditEvent')));
		echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
		echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
		echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
		echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
		echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
		echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));



		echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
		echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
		echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
		echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
		echo $this->Form->input("date",array("value"=>$event["Event"]["date"],"label"=>"日時"));
		echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));
		echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));
				
		echo $this->Form->input("Camp.fromwhere",array("value"=>$event["Camp"]["fromwhere"],"label"=>"発着地"));
		echo $this->Form->input("Camp.limit_num",array("value"=>$event["Camp"]["limit_num"],"label"=>'募集人数'));
		echo $this->Form->input("Camp.stay_type",array("value"=>$event["Camp"]["stay_type"],"label"=>"滞在の種類"));
		echo $this->Form->input("Camp.cost",array("value"=>$event["Camp"]["cost"],"label"=>"費用"));
		echo $this->Form->input("Camp.shedule",array("value"=>$event["Camp"]["schedule"],"label"=>"スケジュール"));
		echo $this->Form->input("Camp.withmen",array("value"=>$event["Camp"]["withmen"],"label"=>"添乗員"));
		echo $this->Form->input("Camp.tuition",array("value"=>$event["Camp"]["tuition"],"label"=>"授業料"));
		echo $this->Form->input("Camp.food",array("value"=>$event["Camp"]["food"],"label"=>"滞在中の食事"));
		echo $this->Form->input("Camp.id",array("value"=>$event["Camp"]["id"],"type"=>"hidden"));
		
	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>



</div>


<div id="event_form7" class="event_original_form">
<?

			echo $this->Form->create('Event',
		    array('type' => 'file','url' =>
		        array('controller' => 'admin', 'action' => 'goEditEvent')));
		echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
		echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
		echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
		echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
		echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
		echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));


		echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
		echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
		echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
		echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
		echo $this->Form->input("date",array("value"=>$event["Event"]["date"],"label"=>"日時"));
		echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));
		echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));
		
		
		echo $this->Form->input("Lesson.skill",array("value"=>$event["Lesson"]["skill"],"label"=>"学べること"));
		echo $this->Form->input("Lesson.cost",array("value"=>$event["Lesson"]["cost"],"label"=>"費用"));
		echo $this->Form->input("Lesson.id",array("value"=>$event["Lesson"]["id"],"type"=>"hidden"));

	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>


</div>



<div id="event_form8" class="event_original_form">
	<?

			echo $this->Form->create('Event',
		    array('type' => 'file','url' =>
		        array('controller' => 'admin', 'action' => 'goEditEvent')));
		echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
		echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
		echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
		echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
		echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
		echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));


		echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
		echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
		echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
		echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
		echo $this->Form->input("date",array("value"=>$event["Event"]["date"],"label"=>"日時"));
		echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));
		echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));


		echo $this->Form->input("FunnyEvent.limit_num",array("value"=>$event["FunnyEvent"]["limit_num"],"label"=>"募集人数"));
		echo $this->Form->input("FunnyEvent.limit_min",array("value"=>$event["FunnyEvent"]["limit_min"],"label"=>"最小人数"));
		echo $this->Form->input("FunnyEvent.deadline",array("value"=>$event["FunnyEvent"]["deadline"],"label"=>"締め切り日時"));
		echo $this->Form->input("FunnyEvent.cost",array("value"=>$event["FunnyEvent"]["cost"],"label"=>"費用"));
		echo $this->Form->input("FunnyEvent.schedule",array("value"=>$event["FunnyEvent"]["schedule"],"label"=>"スケジュール"));
		echo $this->Form->input("FunnyEvent.id",array("value"=>$event["FunnyEvent"]["id"],"type"=>"hidden"));

	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>


</div>


<div id="event_form9" class="event_original_form">
	<?


			echo $this->Form->create('Event',
		    array('type' => 'file','url' =>
		        array('controller' => 'admin', 'action' => 'goEditEvent')));
		echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
		echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
		echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
		echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
		echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
		echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));


		echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
		echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
		echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
		echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
		echo $this->Form->input("date",array("value"=>$event["Event"]["date"],"label"=>"日時"));
		echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));

		echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));
				
		echo $this->Form->input("StudentGroup.limit_num",array("value"=>$event["StudentGroup"]["limit_num"],"label"=>"募集人数"));
		
		echo $this->Form->input("StudentGroup.cost",array("value"=>$event["StudentGroup"]["cost"],"label"=>"費用"));
		echo $this->Form->input("StudentGroup.id",array("value"=>$event["StudentGroup"]["id"],"type"=>"hidden"));
		


	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>


</div>




<script type>
	var state=<?echo $state?>;
	s="#event_form";
	for(i=1;i<10;i++){
		if(state<4){
			i=4;
			continue;
		}
		if(i==state) continue;
    	$(s+i).remove();
    }
   	console.log($(s+state));

    if(state>4){
    	console.log($(s+state));
    	$(s+state).css("display", "block");
    }else{
    	$(s+1).css("display", "block");
    }
    



</script>


