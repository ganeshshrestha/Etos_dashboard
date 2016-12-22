</div>
</div>
<footer>
  <div class="cont-wrap">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"> <span class="copy-rights">&copy; 2016, Olive Media. All Rights Reserved </span> </div>
      
    </div>
    </div>

</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/vmenu.js"></script>
 
<!-- choosen --> 
<script src="js/chosen.jquery.js" type="text/javascript"></script> 
<script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script> 

<!-- datepicker -->
<link href="css/datepicker.css" rel="stylesheet">
<script src="js/datepicker.js"></script> 
<script type="text/javascript">
$(document).ready(function(e) {
	$('#date').datepicker();

});
</script> 

</body>
</html>