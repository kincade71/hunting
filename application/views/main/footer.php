<hr>
<div class="container-fluid">
  <footer>
    <div class="row-fluid">
      <div class="span4">
        <p>&copy;
          <?= $title ?>
          <?= date('Y'); ?>
        </p>
      </div>
      <div class="span4">
      </div>
      <div class="span4">
        <p class="pull-right"><a href="<?= base_url() ?>user_guide/"><i class="fa fa-fire"></i> Framework UG</a> | </p>
      </div>
    </div>
  </footer>
</div>
<!-- javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="<?= base_url()?>datepicker/development-bundle/ui/jquery.ui.core.js"></script> 
<script src="<?= base_url()?>datepicker/development-bundle/ui/jquery.ui.widget.js"></script> 
<script src="<?= base_url()?>datepicker/development-bundle/ui/jquery.ui.datepicker.js"></script> 
<script src="<?= base_url()?>/js/bootstrap.js"></script> 
<script>
  $(function() {
    $( "#datepicker" ).datepicker();
   
      $( "#datepicker" ).datepicker( "option", "dateFormat", "dd-mm-yy" );

  });
  </script> 
<script>
$(document).ready(function(){
    $('.tipping').tooltip();
});
</script> 
<script>
$(document).ready(function(){
    $('.pop').popover();
});
</script> 
<script>
  $(function() {
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: false,
      numberOfMonths: 1,
      dateFormat: "dd-mm-yy",
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: false,
      numberOfMonths: 2,
      dateFormat: "dd-mm-yy",
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
  </script>
</body></html>