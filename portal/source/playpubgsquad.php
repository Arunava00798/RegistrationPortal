<?php
include_once('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
		<script type="text/javascript" src="js/jquery.min.js"></script>

	<title>PLAY PUBG</title>
</head>
<body>
	<form id="myform" >
		Set Winners Prize Money: &nbsp;<input type="text" name="pubgchicken" id="pubgchicken">
		<!-- <input type="button" name="chicken" value="START GAME" onclick="play()">
 -->
		Winner ID: <input type="text" name="pubg1" id="pubg1">
		<input type="button" name="pubg1but" value="WINNER" onclick="winner()">
	</form>
	<div id="data"></div>


	<script>
		// function play()
		// {
		// 	var str="";
		// 	var pubgchicken=$('#pubgchicken').val();
		// 	$.ajax({
		// 		url:'mypubgplay.php',
		// 		type:'POST',
		// 		dataType:'html',
		// 		data:{
		// 			'action':'pubgplay',
		// 			'pubgchicken':pubgchicken
		// 		},
		// 		success:function(data){
		// 		if(str == data)
		// 		{
		// 			$('#data').html(data);
		// 		}
		// 		else
		// 		{
		// 			$('#data').html(data);
		// 		}
		// 	}
		// 	});
		// } 


		function winner()
		{
			var str="Field is empty";
			var pubg1 = $('#pubg1').val();
			var pubgchicken = $('#pubgchicken').val();

		$.ajax({
			url:'pubg1squad.php',
			type:'POST',
			dataType:'html',
			data:{
				'action':'pubg1',
				'pubg1':pubg1,
				'pubgchicken':pubgchicken
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