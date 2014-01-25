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
         <?php echo $error;?>

<?php echo form_open_multipart(base_url().'do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>
        </div>
      </div>
    </div>
  </div>
  
</div>
