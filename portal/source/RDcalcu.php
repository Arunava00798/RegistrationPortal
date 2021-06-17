<?php
	include_once('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Maal A Maal</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>


	<h1>APUN HI BHAGWAN HAI</h1>

	<form id="myform">
	
	Domain Name: &nbsp; <select name="domain" id="domain">
                            <option value="" selected="selected">--- Please select ---</option>
                            <option value="Robotics">Robotics</option>
                            <option value="Coding">Coding</option>
                            <option value="Gaming">Gaming</option>
                            <option value="Electrical">Electrical</option>
                            <option value="Civil">Civil</option>
                            <option value="General Events">General</option>
                            <option value="Combo">Combo Offers</option>

                        </select><br><br>

                        <input type="button" name="submit" class="button" value="CHECK EVENT LIST" onclick="validate()"><br>

    Event Name: &nbsp; <select name="event" id ="event">
                            
                            <!-- ROBOTICS -->

                            <option value="" selected="selected">--- Please select ---</option>
                            <option id="R1" value="Infinity War">Infinity War</option>
                            <option id="R2" value="Terrestrial Terrain">Terrestrial Terrain</option>
                            <option id="R3" value="Robo Rugby">Robo Rugby</option>
                            <!-- <option id="R4" value="Restless Rush">Restless Rush</option> -->
                            <option id="RC" value="Robo Combo">Robo Combo</option>
                            
                            <!-- CODING -->

                            <option id="C1" value="Code Nova">Code Nova</option>
                            <option id="C2" value="Code Xtreme">Code Xtreme</option>
                            <!-- <option id="C3" value="Code De Forza">H</option> -->
                            <option id="C4" value="Code Red">Code Red</option>
                            <option id="C5" value="Web-o-Philia">Web-o-Philia</option>
                            <option id="C6" value="Design-O-Static">Design-O-Static</option>
                            <option id="CC" value="Coding Combo">Coding Combo</option>


                            <!-- GAMING -->

                            <option id="G1" value="COD MW 4">COD MW 4</option>
                            <option id="G2" value="CS 1.6">CS 1.6</option>
                            <option id="G3" value="FIFA 11">FIFA 11</option>
                            <option id="G4" value="NFS MW">NFS MW</option>
                            

                            <!-- Electrical -->

                            <option id="E1" value="Circuitrix">Circuitrix</option>
                            <!-- <option id="E2" value="Electroblitz">Electroblitz</option> -->

                            
                            <!-- CIVIL -->
                            
                            <option id="CE1" value="Setu Bandhan">Setu Bandhan</option>
                            <option id="CE2" value="Mega Arch">Mega Arch</option>
                            <option id="CE3" value="Track O Treasure">Track O Treasure</option>

                            <!-- GENERAL -->
                            
                            <!-- <option id="GE1" value="Pubg">Pubg</option>
                            <option id="GE2" value="8 Ball Pool">8 Ball Pool</option>
                            <option id="GE3" value="Mini Militia">Mini Militia</option>
                            <option id="GE4" value="Darts">Darts</option> -->
                            <option id="GE5" value="Carrom">Carrom</option>
                            <option id="GE6" value="Chess">Chess</option>
                            <option id="GE7" value="B-Plan">B-Plan</option>
                            <option id="GE8" value="Table Tennis">Table Tennis</option>
                            <option id="GE9" value="Photography">Photography</option>
                            <option id="GE10" value="Videography">Videography</option>


                        



                        </select><br><br>


                            
		</select>


		<input type="button" name="submit" class="button" value="MAAL KITNA HUA" onclick="check()"><br>

	</form>
	<div id="data"></div> 
<script>
//Event Disabling Function on domain selection -->

function check()
{
	var event = $('#event').val();
	var str="";
	$.ajax({

			 			url :'calcu.php',
                        type:'POST',
                        dataType:'html',
                        data :{
                            'action':'check',
                            
                            'event':event,
                            
                        },
                        success:function(data){
                        if(str==data){
                            $('#data').html(data);
                            $('#myform')[0].reset();
                        }
                        else{
                            $('#data').html(data);
                            $('#myform')[0].reset();
                            }
                        }

		});
}


function validate()
{
    var domainDropValue = $("#domain").val();

    if (domainDropValue === "")
    {
        $("#domain").focus();
    }
    else if(domainDropValue === "Robotics")
    {
        
    	$('#event option[id=R1]').removeAttr("disabled", "disabled");
        $('#event option[id=R2]').removeAttr("disabled", "disabled");
        $('#event option[id=R3]').removeAttr("disabled", "disabled");
        $('#event option[id=RC]').attr("disabled", "disabled");



        $('#event option[id=C1]').attr("disabled", "disabled");
        $('#event option[id=C2]').attr("disabled", "disabled");
        $('#event option[id=C4]').attr("disabled", "disabled");
        $('#event option[id=C5]').attr("disabled", "disabled");
        $('#event option[id=C6]').attr("disabled", "disabled");
        $('#event option[id=C7]').attr("disabled", "disabled");

        $('#event option[id=G1]').attr("disabled", "disabled");
        $('#event option[id=G2]').attr("disabled", "disabled");
        $('#event option[id=G3]').attr("disabled", "disabled");
        $('#event option[id=G4]').attr("disabled", "disabled");

        $('#event option[id=E1]').attr("disabled", "disabled");

        $('#event option[id=CE1]').attr("disabled", "disabled");
        $('#event option[id=CE2]').attr("disabled", "disabled");
        $('#event option[id=CE3]').attr("disabled", "disabled");

        $('#event option[id=GE5]').attr("disabled", "disabled");
        $('#event option[id=GE6]').attr("disabled", "disabled");
        $('#event option[id=GE7]').attr("disabled", "disabled");
        $('#event option[id=GE8]').attr("disabled", "disabled");
        $('#event option[id=GE9]').attr("disabled", "disabled");
        $('#event option[id=GE10]').attr("disabled", "disabled");



    }

    else if(domainDropValue === "Coding")
    {
        $('#event option[id=R1]').attr("disabled", "disabled");
        $('#event option[id=R2]').attr("disabled", "disabled");
        $('#event option[id=R3]').attr("disabled", "disabled");
        $('#event option[id=RC]').attr("disabled", "disabled");
        
        $('#event option[id=C1]').removeAttr("disabled", "disabled");
        $('#event option[id=C2]').removeAttr("disabled", "disabled");
        $('#event option[id=C4]').removeAttr("disabled", "disabled");
        $('#event option[id=C5]').removeAttr("disabled", "disabled");
        $('#event option[id=C6]').removeAttr("disabled", "disabled");
        $('#event option[id=C7]').attr("disabled", "disabled");	

        $('#event option[id=G1]').attr("disabled", "disabled");
        $('#event option[id=G2]').attr("disabled", "disabled");
        $('#event option[id=G3]').attr("disabled", "disabled");
        $('#event option[id=G4]').attr("disabled", "disabled");

        $('#event option[id=E1]').attr("disabled", "disabled");

        $('#event option[id=CE1]').attr("disabled", "disabled");
        $('#event option[id=CE2]').attr("disabled", "disabled");
        $('#event option[id=CE3]').attr("disabled", "disabled");

        $('#event option[id=GE5]').attr("disabled", "disabled");
        $('#event option[id=GE6]').attr("disabled", "disabled");
        $('#event option[id=GE7]').attr("disabled", "disabled");
        $('#event option[id=GE8]').attr("disabled", "disabled");
        $('#event option[id=GE9]').attr("disabled", "disabled");
        $('#event option[id=GE10]').attr("disabled", "disabled");



    }

    else if(domainDropValue === "Gaming")
    {
        $('#event option[id=C1]').attr("disabled", "disabled");
        $('#event option[id=C2]').attr("disabled", "disabled");
        $('#event option[id=C4]').attr("disabled", "disabled");
        $('#event option[id=C5]').attr("disabled", "disabled");
        $('#event option[id=C6]').attr("disabled", "disabled");
        $('#event option[id=C7]').attr("disabled", "disabled");

        $('#event option[id=R1]').attr("disabled", "disabled");
        $('#event option[id=R2]').attr("disabled", "disabled");
        $('#event option[id=R3]').attr("disabled", "disabled");
        $('#event option[id=RC]').attr("disabled", "disabled");

        

       	$('#event option[id=G1]').removeAttr("disabled", "disabled");
        $('#event option[id=G2]').removeAttr("disabled", "disabled");
        $('#event option[id=G3]').removeAttr("disabled", "disabled");
        $('#event option[id=G4]').removeAttr("disabled", "disabled");


        $('#event option[id=E1]').attr("disabled", "disabled");

        $('#event option[id=CE1]').attr("disabled", "disabled");
        $('#event option[id=CE2]').attr("disabled", "disabled");
        $('#event option[id=CE3]').attr("disabled", "disabled");

        $('#event option[id=GE5]').attr("disabled", "disabled");
        $('#event option[id=GE6]').attr("disabled", "disabled");
        $('#event option[id=GE7]').attr("disabled", "disabled");
        $('#event option[id=GE8]').attr("disabled", "disabled");
        $('#event option[id=GE9]').attr("disabled", "disabled");
        $('#event option[id=GE10]').attr("disabled", "disabled");



    }
    else if(domainDropValue === "Electrical")
    {
        $('#event option[id=C1]').attr("disabled", "disabled");
        $('#event option[id=C2]').attr("disabled", "disabled");
        $('#event option[id=C4]').attr("disabled", "disabled");
        $('#event option[id=C5]').attr("disabled", "disabled");
        $('#event option[id=C6]').attr("disabled", "disabled");
        $('#event option[id=C7]').attr("disabled", "disabled");

        $('#event option[id=G1]').attr("disabled", "disabled");
        $('#event option[id=G2]').attr("disabled", "disabled");
        $('#event option[id=G3]').attr("disabled", "disabled");
        $('#event option[id=G4]').attr("disabled", "disabled");

        $('#event option[id=R1]').attr("disabled", "disabled");
        $('#event option[id=R2]').attr("disabled", "disabled");
        $('#event option[id=R3]').attr("disabled", "disabled");
        $('#event option[id=RC]').attr("disabled", "disabled");

        $('#event option[id=E1]').removeAttr("disabled", "disabled");

        $('#event option[id=CE1]').attr("disabled", "disabled");
        $('#event option[id=CE2]').attr("disabled", "disabled");
        $('#event option[id=CE3]').attr("disabled", "disabled");

        $('#event option[id=GE5]').attr("disabled", "disabled");
        $('#event option[id=GE6]').attr("disabled", "disabled");
        $('#event option[id=GE7]').attr("disabled", "disabled");
        $('#event option[id=GE8]').attr("disabled", "disabled");
        $('#event option[id=GE9]').attr("disabled", "disabled");
        $('#event option[id=GE10]').attr("disabled", "disabled");



    }
    else if(domainDropValue === "Civil")
    {
        $('#event option[id=C1]').attr("disabled", "disabled");
        $('#event option[id=C2]').attr("disabled", "disabled");
        $('#event option[id=C4]').attr("disabled", "disabled");
        $('#event option[id=C5]').attr("disabled", "disabled");
        $('#event option[id=C6]').attr("disabled", "disabled");
        $('#event option[id=C7]').attr("disabled", "disabled");

        $('#event option[id=G1]').attr("disabled", "disabled");
        $('#event option[id=G2]').attr("disabled", "disabled");
        $('#event option[id=G3]').attr("disabled", "disabled");
        $('#event option[id=G4]').attr("disabled", "disabled");

        $('#event option[id=R1]').attr("disabled", "disabled");
        $('#event option[id=R2]').attr("disabled", "disabled");
        $('#event option[id=R3]').attr("disabled", "disabled");
        $('#event option[id=RC]').attr("disabled", "disabled");

      	 $('#event option[id=E1]').attr("disabled", "disabled");

        $('#event option[id=CE1]').removeAttr("disabled", "disabled");
        $('#event option[id=CE2]').removeAttr("disabled", "disabled");
        $('#event option[id=CE3]').removeAttr("disabled", "disabled");


        $('#event option[id=GE5]').attr("disabled", "disabled");
        $('#event option[id=GE6]').attr("disabled", "disabled");
        $('#event option[id=GE7]').attr("disabled", "disabled");
        $('#event option[id=GE8]').attr("disabled", "disabled");
        $('#event option[id=GE9]').attr("disabled", "disabled");
        $('#event option[id=GE10]').attr("disabled", "disabled");



    }

    else if(domainDropValue === "General Events")
    {
        $('#event option[id=C1]').attr("disabled", "disabled");
        $('#event option[id=C2]').attr("disabled", "disabled");
        $('#event option[id=C4]').attr("disabled", "disabled");
        $('#event option[id=C5]').attr("disabled", "disabled");
        $('#event option[id=C6]').attr("disabled", "disabled");
        $('#event option[id=C7]').attr("disabled", "disabled");

        $('#event option[id=G1]').attr("disabled", "disabled");
        $('#event option[id=G2]').attr("disabled", "disabled");
        $('#event option[id=G3]').attr("disabled", "disabled");
        $('#event option[id=G4]').attr("disabled", "disabled");

        $('#event option[id=R1]').attr("disabled", "disabled");
        $('#event option[id=R2]').attr("disabled", "disabled");
        $('#event option[id=R3]').attr("disabled", "disabled");
        $('#event option[id=RC]').attr("disabled", "disabled");

       $('#event option[id=E1]').attr("disabled", "disabled");

       
        $('#event option[id=CE1]').attr("disabled", "disabled");
        $('#event option[id=CE2]').attr("disabled", "disabled");
        $('#event option[id=CE3]').attr("disabled", "disabled");

       
        $('#event option[id=GE5]').removeAttr("disabled", "disabled");
        $('#event option[id=GE6]').removeAttr("disabled", "disabled");
        $('#event option[id=GE7]').removeAttr("disabled", "disabled");
        $('#event option[id=GE8]').removeAttr("disabled", "disabled");
        $('#event option[id=GE9]').removeAttr("disabled", "disabled");
        $('#event option[id=GE10]').removeAttr("disabled", "disabled");
    }


    


        

}
</script>






</body>
</html>