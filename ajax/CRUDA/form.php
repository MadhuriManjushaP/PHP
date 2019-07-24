<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" />
<script>
 $( document ).ready(function() {
	 $("#name").click(function(){
		$(".success_msg") .hide();
	 });
	 
   $("#submit").click(function(){
	    
	  
	  $.post( 
       'myform.php',
	  {fullname: $("#name").val(),address:$("#address").val(),phone:$("#phone").val(),
	   dept:$("#dept").val(),salary:$("#salary").val()},
	   function(data){
		  // alert(data);
		  $('#employee_form')[0].reset();
		   $(".success_msg").append(data);
		   $(".success_msg").show();
		   console.log(data);
		   
		}
	   );

		 });   
	   
 
   });
	
 
</script>
</head>

<body>
<form id="employee_form">
   <input type="text" name="fullname" id="name" placeholder="Enter Firstname">
   <input type="text" name="address" id="address" placeholder="Enter address">
   <input type="text" name="phone" id="phone" placeholder="Enter Phone">
    <input type="text" name="dept" id="dept" placeholder="Enter dept">
     <input type="text" name="salary" id="salary" placeholder="Enter salary">
     
     
    <input type="button" name="submit_data" id="submit" value="submit data">
  <div class="alert alert-success success_msg" style="display:none;width:30%;">
    
</div>
 </form>
 
 
</body>
</html>