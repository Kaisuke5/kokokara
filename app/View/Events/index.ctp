<?echo $this->Html->script("user.js");?>
<?echo $this->Html->script("jquery-1.11.2.js");?>

<h2>イベント</h2>
<h2><?echo $event['Event']['title']?></h2>
<?debug($event)?>

<!-- id送信-->
<input type="hidden" class="setid" value="<?echo $event['Event']['id']?>">

<?debug($event["Image"][0])?>
<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][0]['dir'] . '/' . $event['Image'][0]['attachment'])?>
<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][1]['dir'] . '/' . $event['Image'][1]['attachment'])?>

<button onclick="eventapply()">申し込み</button>
