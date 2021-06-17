<?php
include_once('connect.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>PUBG SOLO REGISTRATION</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<h1>PUBG SOLO RD</h1>
	<form id="myform" method="post">
		 General ID: &nbsp;<input type="text" name="pubgid" id="pubgid" >
    	<input type="button" name="pubg" value="REGISTER FOR A TEAM" onclick="checkpubgid()"><br><br>



    	Team Number: &nbsp;<input type="text" name="teamname" id="teamname">
		<input type="button"  value="REGISTER YOUR TEAM" onclick="team()"><br><br>    	

    	<input type="button" name="play" value="Lets Play" onclick="window.location.href='playpubgsolo.php'"><br><br>

    	
    	CALCULATE TOTAL PAISA: &nbsp;<input type="button" value="MAAL DIKHAO" onclick="maal()"><br>

		<div id="data"></div>
	</form>
	

	<script>
		function team()
		{
			var str="Register For Your Team";
			var teamname=$('#teamname').val();
			$.ajax({
				url:'pubgsoloteam.php',
				type:'POST',
				dataType:'html',
				data:{
					'action':'pubgteam',
					'teamname':teamname
				},
				success:function(data){
				if(str == data)
				{
					$('#data').html(data);
				}
				else
				{
					$('#data').html(data);
				}
			}
			});
		}


		function maal()
		{
			var str="";
			$.ajax({
				url:'pubgcalcu.php',
				type:'POST',
				dataType:'html',
				data:{
					'action':'pubgcalcu'
				},
				success:function(data){
				if(str == data)
				{
					$('#data').html(data);
				}
				else
				{
					$('#data').html(data);
				}
			}
			});
		}
		function checkpubgid()
		{
			var str="Field is empty";
			var pubgid = $('#pubgid').val();
			

		$.ajax({
			url:'pubgsoloid.php',
			type:'POST',
			dataType:'html',
			data:{
				'action':'pubgid',
				'pubgid':pubgid,
				
			},
			success:function(data){
				if(str == data)
				{
				   $('#data').html(data);
                   //$('#myform')[0].reset();
                }
                else
                {

                    $('#data').html(data);
                    //$('#myform')[0].reset();
           	    }
            }

		});
		}

		
		

	</script>
</body>
</html>