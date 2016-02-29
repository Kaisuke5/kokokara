<? $this->Html->css('event-list', null, array('inline' => false)); ?>
<?php 
  $list_image = $this->Html->webroot.IMAGES_URL . "urban.jpg";
  $list_thumb = $this->Html->webroot.IMAGES_URL . "face-sample.jpeg";
?>
<style>
.list-box-img{
	background-image:url('<? echo $list_image ?>');
}
.list-box-circle{
  background-image:url('<? echo $list_thumb ?>');
}	
</style>
    <div id="main">
      <div id="lists-container">
        <div id="lists-search">
          <div class="container-fluid nopadding">
            <div class="raw">
              <div class="col-xs-12 lists-search-area">
                
              </div>
            </div>
          </div>
        </div>
        <div id="event-lists">
          <div class="container sp-nopadding lg-nopadding">
            <div class="raw">
              <div class="col-md-3 col-lg-2 hidden-xs hidden-sm list-sidebar"></div>
              <div class="col-md-9 col-lg-10 col-xs-12 list-main nopadding">
                <div class="raw">
                  <?php
                    $i = 1;
                    while ($i <= 10) {
                        echo $this->element('lists/event_inlist');
                        $i++;
                    }
                  ?>  
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>