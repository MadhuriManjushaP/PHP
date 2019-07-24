<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>





<body>
<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="insert_into.php" method="POST">
    <div class="form-group">
     <label >firstname</label>
      <input type="text" class="form-control"  placeholder="Enter Firstname" name="firstname">
    </div>
    <div class="form-group">
      <label >lastname:</label>
      <input type="text" class="form-control"  placeholder="Enter Lastname" name="lastname">
	  </div>
         <div class="form-group">
      <label >Email:</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label >Phone</label>
      <input type="text" class="form-control"  placeholder="Enter Number" name="phone">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<a href="select.php">Database</a>
</body>
</html>