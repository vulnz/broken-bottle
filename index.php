<?php
include 'tmpl/tmpl.tpl';

?> 
	<main class="content">
		<strong></strong> 
 <body>
  <div class="container">
   <br />
   <div class="form-group">
   <input type="text"  size="133" name="search_text" id="search_text" placeholder="Search " value="">
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>



<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
	</main><!-- .content -->

</div><!-- .wrapper -->

<footer class="footer">
	<strong></strong> 
</footer><!-- .footer -->

</body>
</html>