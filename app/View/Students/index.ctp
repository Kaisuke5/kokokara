<? $this->Html->css('index-style', null, array('inline' => false)) ?>
<div class="container home-cntr">
	<div class="top-bgi">
		<div class="row">
			<div class="col-md-12 top-welcome">
				<h1>新しい何かを始めよう</h1>
			</div>
			<div class="form-group">
				<div class="col-sm-6 col-sm-offset-1 gal-pad-elim">
					<input type="text" class="input-medium search-query">
				</div>
				<div class="col-sm-2 gal-pad-elim">
					<select class="form-control">
						<option> - </option>
						<option>長期インターン</option>
						<option>短期インターン</option>
						<option>海外インターン</option>
						<option>海外留学</option>
						<option>習い事</option>
						<option>おもしろい</option>
						<option>合宿</option>
						<option>学生団体</option>
					</select>
				</div>
				<div class="col-sm-2 gal-pad-elim">
					<button type="button" class="btn btn-default">
						<i class="glyphicon glyphicon-play"></i>　クラスを探す
					</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="height:200px; border-bottom:1px solid #efefef;">
				<!-- Startボタン -->
			</div>	
		</div>
	</div>
</div>
<div class="container home-cntr">
	<div class="row" style="border-bottom:1px solid #efefef;">
	  <h2>いま人気のクラス</h2>
	  <div class="col-md-12">
	  	<div class="row">
	  		<div class="col-md-6 pop-lg hidden-sm hidden-xs" style="height:100%;">
				<div class="link_box">
   			 	<? echo $this->Html->image('mushroom.jpg', array('alt' => 'mushroom', 'class' => 'img-responsive'));?>
    			<a href="#">リンク</a>
				</div>
		 	</div>
		  	<div class="col-md-6"><div class="row">
	  			<div class="col-md-6 col-sm-6 pop-lg">
	  				<div class="link_box">
  				 	<? echo $this->Html->image('mushroom.jpg', array('alt' => 'mushroom', 'class' => 'img-responsive'));?>
	   				<a href="#">リンク</a>
					</div>
	  			</div>
	  			<div class="col-md-6 col-sm-6 pop-lg">
	  				<div class="link_box">
   				 	<? echo $this->Html->image('mushroom.jpg', array('alt' => 'mushroom', 'class' => 'img-responsive'));?>
    				<a href="#">リンク</a>
					</div>
	  			</div>
	  			<div class="col-md-6 col-sm-6 pop-lg">
	  				<div class="link_box">
   				 	<? echo $this->Html->image('mushroom.jpg', array('alt' => 'mushroom', 'class' => 'img-responsive'));?>
    				<a href="#">リンク</a>
					</div>
	  			</div>
	  			<div class="col-md-6 col-sm-6 pop-lg">
	  				<div class="link_box">
   				 	<? echo $this->Html->image('mushroom.jpg', array('alt' => 'mushroom', 'class' => 'img-responsive'));?>
    				<a href="#">リンク</a>
					</div>
	  			</div>
	  		</div></div>
  		</div>
	  </div>
	  <div class="col-md-12 hidden-xs">	
  		<div class="row">
  			<div class="col-md-6"><div class="row">
	  			<div class="col-md-6 col-sm-6 pop-lg">
	  				<div class="link_box">
   				 	<? echo $this->Html->image('rabbit.jpg', array('alt' => 'mushroom', 'class' => 'img-responsive'));?>
    				<a href="#">リンク</a>
					</div>
	  			</div>
	  			<div class="col-md-6 col-sm-6 pop-lg">
	  				<div class="link_box">
   				 	<? echo $this->Html->image('rabbit.jpg', array('alt' => 'mushroom', 'class' => 'img-responsive'));?>
    				<a href="#">リンク</a>
					</div>
	  			</div>
	  			<div class="col-md-6 col-sm-6 pop-lg">
	  				<div class="link_box">
   				 	<? echo $this->Html->image('rabbit.jpg', array('alt' => 'mushroom', 'class' => 'img-responsive'));?>
    				<a href="#">リンク</a>
					</div>
	  			</div>
	  			<div class="col-md-6 col-sm-6 pop-lg">
	  				<div class="link_box">
   				 	<? echo $this->Html->image('rabbit.jpg', array('alt' => 'mushroom', 'class' => 'img-responsive'));?>
    				<a href="#">リンク</a>
					</div>
	  			</div>
  			</div></div>
  			<div class="col-md-6 hidden-sm hidden-xs">
	  			<div class="link_box">
	   			<? echo $this->Html->image('rabbit.jpg', array('alt' => 'mushroom', 'class' => 'img-responsive'));?>
	    		<a href="#">リンク</a>
				</div>
			</div>	
		</div>	
	  </div>
	  <div class="col-md-12">
	  	<p class="p-center"><a href="#">ギャラリーを見る>></a></p>
	  </div>
	</div>
</div>
<div class="container home-cntr">
	<div class="row">
	  <h2>様々な学びの形で体験する</h2>
	  <div class="col-md-12">
	  	<div class="row">
		  <div class="col-md-3 col-xs-6 col-gal">
		  	<div style="height:190px; background:#d16b9a;"><?php echo $this->Html->link('長期インターン', array('controller' => 'events', 'action' => 'category', 1)); ?>
		  	</div>	
		  </div>
		  <div class="col-md-3 col-xs-6 col-gal">  
		  	<div style="height:190px; background:#d1a16b;"><?php echo $this->Html->link('短期インターン', array('controller' => 'events', 'action' => 'category', 2)); ?>
		  	</div>		
		  </div>
		  <div class="col-md-3 col-xs-6 col-gal">
		  	<div style="height:190px; background:#ced16b;"><?php echo $this->Html->link('海外インターン', array('controller' => 'events', 'action' => 'category', 3)); ?>
		  	</div>	  	
		  </div>
		  <div class="col-md-3 col-xs-6 col-gal">
		  	<div style="height:190px; background:#9ad16b;"><?php echo $this->Html->link('留学', array('controller' => 'events', 'action' => 'category', 5)); ?>
		  	</div>	  	
		  </div>
		  <div class="col-md-3 col-xs-6 col-gal">  	
		  	<div style="height:190px; background:#6bd16e;"><?php echo $this->Html->link('合宿', array('controller' => 'events', 'action' => 'category', 6)); ?>
		  	</div>	 
		  </div>
		  <div class="col-md-3 col-xs-6 col-gal">  
		  	<div style="height:190px; background:#6bd1a1;"><?php echo $this->Html->link('習い事', array('controller' => 'events', 'action' => 'category', 7)); ?>
		  	</div>		
		  </div>
		  <div class="col-md-3 col-xs-6 col-gal">  
		  	<div style="height:190px; background:#6bcad1;"><?php echo $this->Html->link('おもしろイベント', array('controller' => 'events', 'action' => 'category', 8)); ?>
		  	</div>		
		  </div>
		  <div class="col-md-3 col-xs-6 col-gal">  	
		  	<div style="height:190px; background:#6bcad1;"><?php echo $this->Html->link('学生団体', array('controller' => 'events', 'action' => 'category', 9)); ?>
		  	</div>
		  </div>
		</div>
　	　</div>
	</div>
</div>

<div style="width:100%; height:800px">
	<!-- just a space -->
</div>

<?debug($event)?>
<?php
if(!$myData){
	echo $this->Html->link('ログイン', array('action' => 'login'));
}else{
	echo $this->Html->link('ログアウト', array('action' => 'logout'));
	debug($myData);
}
?>


<h2>記事一覧</h2>
<?foreach($events as $event):?>
	<a href="/kokokara/events?id=<?echo $event['Event']['id']?>"><?echo $event['Event']['title']?></a>
	</br>
<?endforeach;?>

<h2>カテゴリー一覧</h2>
<ul>
	<li>
		
	</li>
	<li>
		<?php echo $this->Html->link('短期インターン', array('controller' => 'events', 'action' => 'category', 2)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('海外インターン', array('controller' => 'events', 'action' => 'category', 3)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('有給バイト', array('controller' => 'events', 'action' => 'category', 4)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('留学', array('controller' => 'events', 'action' => 'category', 5)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('合宿', array('controller' => 'events', 'action' => 'category', 6)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('習い事', array('controller' => 'events', 'action' => 'category', 7)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('おもしろイベント', array('controller' => 'events', 'action' => 'category', 8)); ?>
	</li>
	<li>
		<?php echo $this->Html->link('学生団体', array('controller' => 'events', 'action' => 'category', 9)); ?>
	</li>
</ul>
