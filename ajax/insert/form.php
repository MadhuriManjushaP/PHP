<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
	$("#name").click(function(){
		$(".success_msg").hide();
	});
	$("#submit").click(function(){
		$.post(
			'myform.php',
				{
				name:$("#name").val(),address:$("#address").val(),phone:$("#phone").val(),
				dept:$("#dept").val(),salary:$("#salary").val()},
				function(data){
				alert(data);
				$('#employee_form')[0].reset();
				$(".success_msg").append(data);
				$(".success_msg").show();
			})
		});
	});

</script>
</head>

<body>
<form method="" action= "myform.php" id="employee_form">
	<input type="text" name="fullname" id="name" placeholder="Enter firstname">
	<input type="text" name="address" id="address" placeholder="Enter Address">
    <input type="text" name="phone" id="phone" placeholder="Enter phone">
        <input type="text" name="dept" id="dept" placeholder="Enter dept">

	<input type="text" name="salary" id="salary" placeholder="Enter salary">
	<input type="button" name="submit_data" id="submit" value="submit_data">
	<div class="alert alert-success success_msg" style="display:none;width:30%;">
		Success...:);
	</div>

</form>

</body>
</html>
