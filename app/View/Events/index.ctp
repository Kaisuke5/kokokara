<?echo $this->Html->script("user.js");?>
<?echo $this->Html->script("jquery-1.11.2.js");?>

<h2>イベント</h2>
<h2><?echo $event['Event']['title']?></h2>


<!-- id送信-->
<input type="hidden" class="setid" value="<?echo $event['Event']['id']?>">



<button onclick="eventapply()">申し込み</button>
<?echo $this->Form->button("申し込み")?>