
<?php
	include_once('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>GENERAL EVENTS DESK</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>


	<h1>GENERAL EVENTS</h1>

	<form id="myform">
	EVent Name &nbsp;<select name="event" id ="event">
							<option value="" selected="selected">--- Please select ---</option>
                            
                            <option id="GE5" value="Carrom">Carrom</option>
                            <option id="GE6" value="Chess">Chess</option>
                            <option id="GE7" value="B-Plan">B-Plan</option>
                            <option id="GE8" value="Table Tennis">Table Tennis</option>
                            <option id="GE9" value="Photography">Photography</option>
                            <option id="GE10" value="Videography">Videography</option>

                            
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