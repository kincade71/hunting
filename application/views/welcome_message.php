<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
      <div class="span4">
         <?php echo $error['error'];?>

<?php echo form_open_multipart(base_url().'do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>
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
          <?php foreach ($pics as $images) {?>
            <img src="<?= base_url().'uploads/'.$images ?>" class="img-rounded span2">
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  
</div>
