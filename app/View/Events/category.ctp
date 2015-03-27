<?php
debug($events);
?>

<?php
if($events[0]['Event']['state'] == 5){
	echo nl2br($events[0]['Event']['body']);
}