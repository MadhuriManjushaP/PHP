<?php
	 include("connect_db.php");
				$sql = "SELECT * FROM Info";
				$employee_result = $conn->query($sql);
				
				
				?>
				 
<html>
	<head>
		<style>
			.nav{
				background-color: #C5797A;
				height:200px;
				width:100%;
			}
			.left-content{
				width:50%;
				float:left;
				
			}
		.right-content{
				width:50%;
				float:left;
				
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
		  $( document ).ready(function() {
			   $('#employee_data').on('click', '.row', function(e) {
				 //$(".row").click(function(){
			  		var row_id = $(this).attr('id');
					//alert(row_id);
				$.post( 
				   'delete.php',
				  {id: row_id },
				   function(result){
					   $("#employee_data").html(""); //refresh html page
					   $("#employee_data").append(result); // delete result is added
					}
				   );
						  // alert(row_id);
			  
			   });
	 	  });
	 
  
	     
		
		
		
		</script>
	</head>
	
	<body>
		<div class="nav">
			
		</div>
		<div class="left-content">
				<p>Information is the resolution of uncertainty; it is that which answers the question of "what an entity is" and is thus that which specifies the nature of that entity, as well as the essentiality of its properties. Information is associated with data and knowledge, as data is meaningful information and represents the values attributed to parameters, and knowledge signifies understanding of an abstract or concrete concept.[1] The existence of information is uncoupled with an observer, which refers to that which accesses information to discern that which it specifies; information exists beyond an event horizon for example, and in the case of knowledge, the information itself requires a cognitive observer to be accessed.

In terms of communication, information is expressed either as the content of a message or through direct or indirect observation. That which is perceived can be construed as a message in its own right, and in that sense, information is always conveyed as the content of a message. </p>
				
			</div>
			<div class="right-content">
		 	 
			 	<table border=1 id="employee_data">
					<thead id="table_content"> <tr><td>SNO</td><td>firstname</td> <td>lastname</td> <td>email</td><td>phone</td><td>Edit</td><td>Delete</td></tr></thead>
			 		<?php
					$i= 1;
					  while($row = $employee_result->fetch_assoc()) {
        				 
						  echo "<tr>
						  <td>$i</td>
						  <td>".$row["firstname"]."</td>
						  <td>".$row["lastname"]."</td>
						  <td>".$row["email"] ."</td>
						  <td>". $row["phone"]."</td>
						  <td><a href=edit.php?id=".$row["id"].">Edit</a></td>
						  <td><input type=button class='row' value=delete id =".$row["id"]."></td> </tr>";
						  $i++;
					  }
					
					
					
					?>
				</table>
			 		
			 		
			 		
			 		
			 	</table>
				
			</div>
		
	</body>
	
</html>



