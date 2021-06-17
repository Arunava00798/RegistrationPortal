<?php
include_once('connect.php');
?>



<!DOCTYPE html>
<html>
<head>
	<title>Main Registration Desk</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>

</head>
<body>

	<h1>Main Registration Desk</h1>


	<form id="myform" >
		
		Name:&nbsp;<input type="text" name="name" id="name"><br><br>
    	
    	Contact:&nbsp;<input type="text" name="contact" id="contact"><br><br>
   		
    	Email ID:&nbsp;<input type="email" name="email" id="email"><br><br>

   		Year:&nbsp;<input type="number" name="year" id="year"><br><br>

   		DOB:&nbsp;<input type="date" name="dob" id="dob"><br><br>

   		<td>Sex:&nbsp;<input type="radio" name="sex" id="sex" value="Male">Male</td>  &nbsp; <td><input type="radio" name="sex" id="sex" value="Female">Female</td><br><br>

   		General ID:&nbsp;<input type="button" name="gid" id="gid" value="Generate ID" onclick="generate()"></td><br><br>

   		<input type="button" id="btn_save" value="REGISTER AND Generate ID" onclick="save_data()">

      <div id="my_data"></div>
		
	</form>


  

	 <script>
             	function save_data(){
             		var str = "Duplicate Entry";
             		var name=$('#name').val();
             		var contact=$('#contact').val();
             		var email=$('#email').val();
             		var year=$('#year').val();
             		var dob=$('#dob').val();
             		var sex=$('#sex').val();
             		


             		$.ajax({
						url :'user.php',
            			type:'POST',
            			dataType:'html',
				        data :{
				            'action':'save',
				            'name':name,
				            'contact':contact,
				            'email':email,
				            'year':year,
				            'dob':dob,
				            'sex':sex,
				           
				        },
				        success:function(data){
		                if(str==data){
		                    $('#my_data').html(data);
		                    $('#myform')[0].reset();
		                }
                		else{
		                    $('#my_data').html(data);
		                    $('#myform')[0].reset();
                			}
            			}
             		});
             	}   
    </script>

</body>
</html>