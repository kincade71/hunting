<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
      <div class="span4">

      </div>
      <div class="span4">

      </div>
      <div class="span4">
        
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span12">
      <div class="span12">
        <div class="span12">
<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<p><?php echo anchor('welcome', 'Upload Another File!'); ?></p>

        </div>
      </div>
    </div>
  </div>
  
</div>