
<?php
	include_once('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>ON SPOT  DESK</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>


	<h1>ON SPOT</h1>

	<form id="myform">
	EVent Name &nbsp;<select name="event" id ="event">
							<option value="" selected="selected">--- Please select ---</option>
                            
                            <option id="R4" value="Restless Rush">Restless Rush</option> 
                            <option id="C3" value="Code De Forza">Code De Forza</option>
                            <option id="E2" value="Electroblitz">Electroblitz</option>
                            <option id="GE1" value="Pubg">Pubg</option>
                            <option id="GE2" value="8 Ball Pool">8 Ball Pool</option>
                            <option id="GE3" value="Mini Militia">Mini Militia</option>
                            <option id="GE4" value="Darts">Darts</option> 

                            
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
                        url :'spotcrd.php',
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
            var event=$('#event').val();
            $.ajax({
                        url :'play.php',
                        type:'POST',
                        dataType:'html',
                        data :{
                            'action':'play',
                            'tid':tid,
                            'event':event
                            
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


























