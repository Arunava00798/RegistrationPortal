
<?php
	include_once('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>GAMING DESK</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>


	<h1>GAMING</h1>

	<form id="myform">
	EVent Name &nbsp;<select name="event" id ="event">
							<option value="" selected="selected">--- Please select ---</option>
                            
                            <option id="G1" value="COD MW 4">COD MW 4</option>
                            <option id="G2" value="CS 1.6">CS 1.6</option>
                            <option id="G3" value="FIFA 11">FIFA 11</option>
                            <option id="G4" value="NFS MW">NFS MW</option>

                            
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