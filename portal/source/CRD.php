
<?php
	include_once('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>ROBOTICS DESK</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>


	<h1>ROBOTICS</h1>

	<form id="myform">
	EVent Name &nbsp;<select name="event" id ="event">
							<option value="" selected="selected">--- Please select ---</option>
                            
                            <option id="R1" value="Infinity War">Infinity War</option>
                            <option id="R2" value="Terrestrial Terrain">Terrestrial Terrain</option>
                            <option id="R3" value="Robo Rugby">Robo Rugby</option>
                            
		</select>


		 <input type="button" name="submit" class="button" value="CHECK TEAM REGISTERED" onclick="check()"><br><br>
		
		<div id="data"></div>	<br>

	</form>
	<form id="play">	
	
		 Team ID: &nbsp; <input type="text" name="tid" id="tid"><br><br>
		 <input type="button" name="submit" class="button" value="PLAYED" onclick="play()">
		
		<div id="dataplay"></div>
		 
	</form>

	<script>
		function check()
		{
			var str="SOMETHING IS WRONG";
			var event=$("#event").val();

			 $.ajax({
                        url :'mycrd.php',
                        type:'POST',
                        dataType:'html',
                        data :{
                            'action':'generate',
                            'event':event
                            
                        },
                        success:function(data){
                        if(str==data){
                            $('#data').html(data);
                            //$('#myform')[0].reset();
                        }
                        else{
                            $('#data').html(data);
                            //$('#myform')[0].reset();
                            }
                        }
                    });
		}


		function play()
		{
			var str="";
			var tid=$('#tid').val();
			$.ajax({
                        url :'play.php',
                        type:'POST',
                        dataType:'html',
                        data :{
                            'action':'play',
                            'tid':tid
                            
                        },
                        success:function(data){
                        if(str==data){
                            $('#dataplay').html(data);
                            $('#play')[0].reset();
                        }
                        else{
                            $('#dataplay').html(data);
                            $('#play')[0].reset();
                            }
                        }
                    });

		}
	</script>
</body>
</html>