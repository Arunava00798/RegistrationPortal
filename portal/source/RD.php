<?php
include_once('connect.php');
?>





<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>RD</title>
        <script type="text/javascript" src="js/jquery.min.js"></script>

</head>

<body>
<div class="login">
    <h1>Registration Desk</h1>
    
   
    
</div>
<form id="myform" >
	
    Check General ID: &nbsp;<input type="text" name="idchk" id="idchk" >
    <button type="button" name="check1" onclick="checkgid()">check for GID</button><br><br>



    Domain Name: &nbsp; <select name="domain" id="domain">
                            <option value="" selected="selected">--- Please select ---</option>
                            <option value="Robotics">Robotics</option>
                            <option value="Coding">Coding</option>
                            <option value="Gaming">Gaming</option>
                            <option value="Electrical">Electrical</option>
                            <option value="Civil">Civil</option>
                            <option value="General Events">General</option>
<!--                             <option value="Combo">Combo Offers</option>
                            <option value="OnSpot">OnSpot</option>
 -->
                        </select>


    <input type="button" name="submit" class="button" value="CHECK FOR TEAMS" onclick="checktid()"><br>

    <br>
	
    General ID 1: &nbsp;<input type="text" name="id1" id="id1" ><br><br>

    General ID 2: &nbsp;<input type="text" name="id2" id="id2" ><br><br>
    
    General ID 3: &nbsp;<input type="text" name="id3" id="id3" ><br><br>


    General ID 4: &nbsp;<input type="text" name="id4" id="id4" ><br><br>

    General ID 5: &nbsp;<input type="text" name="id5" id="id5" ><br><br>


    


    Team Name: &nbsp; <input type="text" name="tname" id="tname"><br><br>

    

    <input type="button" name="submit" class="button" value="CHECK EVENT LIST" onclick="validate()">

    Event Name: &nbsp; <select name="event" id ="event">
                            
                            <!-- ROBOTICS -->

                            <option value="" selected="selected">--- Please select ---</option>
                            <option id="R1" value="Infinity War">Infinity War</option>
                            <option id="R2" value="Terrestrial Terrain">Terrestrial Terrain</option>
                            <option id="R3" value="Robo Rugby">Robo Rugby</option>
                             <option id="R4" value="Sputnik">Sputnik</option> 
                            <option id="RC" value="Robo Combo">Robo Combo</option>
                            
                            <!-- CODING -->

                            <option id="C1" value="Code Nova">Code Nova</option>
                            <option id="C2" value="Code Xtreme">Code Xtreme</option>
                            <option id="C4" value="Code Red">Code Red</option>
                            <option id="C5" value="Web-o-Philia">Web-o-Philia</option>
                            <option id="C6" value="Design-O-Static">Design-O-Static</option>
                            <option id="CC" value="Coding Combo">Coding Combo</option>


                            <!-- GAMING -->

                            <option id="G1" value="COD MW 4">COD MW 4</option>
                            <option id="G2" value="CS 1.6">CS 1.6</option>
                            <option id="G3" value="FIFA 11">FIFA 11</option>
                            <option id="G4" value="NFS MW">NFS MW</option>
                            <option id="GC" value="Gaming Combo">Gaming Combo</option>
                            

                            <!-- Electrical -->

                            <option id="E1" value="Circuitrix">Circuitrix</option>
                            <!-- <option id="E2" value="Electroblitz">Electroblitz</option> --> 

                            
                            <!-- CIVIL -->
                            
                            <option id="CE1" value="Setu Bandhan">Setu Bandhan</option>
                            <option id="CE2" value="Mega Arch">Mega Arch</option>
                            <option id="CE3" value="Track O Treasure">Track O Treasure</option>
                            <option id="CEC" value="Civil Combo">Civil Combo</option>

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
                            <option id="GEC" value="Photography+Videography Combo">Photography+Videography Combo</option>


                        



                        </select><br><br>

        </form>	

    <form>
    Amount: &nbsp;<input type="text" name="amt" id="amt">
    <button type="button" name="teamid" id="teamid" onclick="generate()">Register and Generate Team ID</button><br><br>
    

    <!-- Display through ajax -->
   
    <div id="data"></div> 


   




<!-- Register Button On Click -->
<script>

    function checkgid()
    {
        var str="";

        
        var idchk = $('#idchk').val();
        $.ajax({

            url:'checkgid.php',
            type:'POST',
            dataType:'html',
            data :{
                    'action':'checkgid',
                    'idchk':idchk,
                    
            },
            success:function(data){
                        if(str==data){
                            $('#data').html(data);
                            // $('#myform')[0].reset();
                        }
                        else{
                            $('#data').html(data);
                            // $('#myform')[0].reset();
                            }
                        }

        });

    }
	function checktid()
	{
		var str = "";
		var idchk = $('#idchk').val();
		var domain = $('#domain').val();
		$.ajax({

			url:'checktid.php',
			type:'POST',
			dataType:'html',
			data :{
					'action':'checktid',
					'idchk':idchk,
					'domain':domain
			},
			success:function(data){
                        if(str==data){
                            $('#data').html(data);
                            // $('#myform')[0].reset();
                        }
                        else{
                            $('#data').html(data);
                            // $('#myform')[0].reset();
                            }
                        }

		});
	}
    
    function generate()
    {
        var str = "All fields are not properly entered";
        var tname = $("#tname").val();
       var domain = $("#domain").val();
        var event = $("#event").val();

        //fees
        if(event === "Infinity War")
        {
            document.getElementById('amt').value = 60;
        }
        else if(event === "Terrestrial Terrain")
        {
            document.getElementById('amt').value = 60;
        }
        else if(event === "Robo Rugby")
        {
            document.getElementById('amt').value = 60;
        }
        else if(event === "Sputnik")
        {
            document.getElementById('amt').value = 50;
        }
        else if(event === "Robo Combo")
        {
            document.getElementById('amt').value = 200;
        }




        else if(event === "Code Xtreme")
        {
            document.getElementById('amt').value = 50;
        }else if(event === "Code Nova")
        {
            document.getElementById('amt').value = 50;
        }else if(event === "Web-o-Philia")
        {
            document.getElementById('amt').value = 50;
        }else if(event === "Design-O-Static")
        {
            document.getElementById('amt').value = 30;
        }else if(event === "Code Red")
        {
            document.getElementById('amt').value = 30;
        }else if(event === "Coding Combo")
        {
            document.getElementById('amt').value = 120;
        }


        else if(event === "Circuitrix")
        {
            document.getElementById('amt').value = 40;
        }


        else if(event === "NFS MW")
        {
            document.getElementById('amt').value = 50;
        }else if(event === "COD MW 4")
        {
            document.getElementById('amt').value = 250;
        }else if(event === "CS 1.6")
        {
            document.getElementById('amt').value = 250;
        }else if(event === "FIFA 11")
        {
            document.getElementById('amt').value = 60;
        }else if(event === "Gaming Combo")
        {
            document.getElementById('amt').value = 100;
        }



        else if(event === "Setu Bandhan")
        {
            document.getElementById('amt').value = 90;
        }
        else if(event === "Track O Treasure")
        {
            document.getElementById('amt').value = 70;
        }
        else if(event === "Mega Arch")
        {
            document.getElementById('amt').value = 150;
        }
        else if(event === "Civil Combo")
        {
            document.getElementById('amt').value = 150;
        }




        else if(event === "Carrom")
        {
            document.getElementById('amt').value = 40;
        }else if(event === "Chess")
        {
            document.getElementById('amt').value = 30;
        }else if(event === "Table Tennis")
        {
            document.getElementById('amt').value = 70;
        }else if(event === "Photography")
        {
            document.getElementById('amt').value = 40;
        }else if(event === "Videography")
        {
            document.getElementById('amt').value = 40;
        }else if(event === "Darts")
        {
            document.getElementById('amt').value = 20;
        }else if(event === "B-Plan")
        {
            document.getElementById('amt').value = 50;
        }else if(event === "Photography+Videography Combo")
        {
            document.getElementById('amt').value = 70;
        }




        


        var amt = $("#amt").val();

        var id1 = $('#id1').val();
        var id2 = $('#id2').val();
        var id3 = $('#id3').val();
        var id4 = $('#id4').val();
        var id5 = $('#id5').val();



        $.ajax({
                        url :'myrd.php',
                        type:'POST',
                        dataType:'html',
                        data :{
                            'action':'generate',
                            'tname':tname,
                            'domain':domain,
                            'event':event,
                            'amt':amt,
                            
                            'id1':id1,
                            'id2':id2,
                            'id3':id3,
                            'id4':id4,
                            'id5':id5
                           
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




 //<!-- Event Disabling Function on domain selection -->
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
        $('#event option[id=R4]').removeAttr("disabled", "disabled");
        $('#event option[id=RC]').removeAttr("disabled", "disabled");



        $('#event option[id=C1]').attr("disabled", "disabled");
        $('#event option[id=C2]').attr("disabled", "disabled");
        $('#event option[id=C4]').attr("disabled", "disabled");
        $('#event option[id=C5]').attr("disabled", "disabled");
        $('#event option[id=C6]').attr("disabled", "disabled");
        $('#event option[id=CC]').attr("disabled", "disabled");

        $('#event option[id=G1]').attr("disabled", "disabled");
        $('#event option[id=G2]').attr("disabled", "disabled");
        $('#event option[id=G3]').attr("disabled", "disabled");
        $('#event option[id=G4]').attr("disabled", "disabled");
        $('#event option[id=GC]').attr("disabled", "disabled");

        $('#event option[id=E1]').attr("disabled", "disabled");

        $('#event option[id=CE1]').attr("disabled", "disabled");
        $('#event option[id=CE2]').attr("disabled", "disabled");
        $('#event option[id=CE3]').attr("disabled", "disabled");
        $('#event option[id=CEC]').attr("disabled", "disabled");

        $('#event option[id=GE5]').attr("disabled", "disabled");
        $('#event option[id=GE6]').attr("disabled", "disabled");
        $('#event option[id=GE7]').attr("disabled", "disabled");
        $('#event option[id=GE8]').attr("disabled", "disabled");
        $('#event option[id=GE9]').attr("disabled", "disabled");
        $('#event option[id=GE10]').attr("disabled", "disabled");

        $('#event option[id=GE1]').attr("disabled", "disabled");
        $('#event option[id=GE2]').attr("disabled", "disabled");
        $('#event option[id=GE3]').attr("disabled", "disabled");
        $('#event option[id=GE4]').attr("disabled", "disabled");
        // $('#event option[id=R4]').attr("disabled", "disabled");
        // $('#event option[id=C3]').attr("disabled", "disabled");
        // $('#event option[id=E2]').attr("disabled", "disabled");



    }

    else if(domainDropValue === "Coding")
    {
        $('#event option[id=R1]').attr("disabled", "disabled");
        $('#event option[id=R2]').attr("disabled", "disabled");
        $('#event option[id=R3]').attr("disabled", "disabled");
        $('#event option[id=R4]').attr("disabled", "disabled");
        $('#event option[id=RC]').attr("disabled", "disabled");
        
        $('#event option[id=C1]').removeAttr("disabled", "disabled");
        $('#event option[id=C2]').removeAttr("disabled", "disabled");
        $('#event option[id=C4]').removeAttr("disabled", "disabled");
        $('#event option[id=C5]').removeAttr("disabled", "disabled");
        $('#event option[id=C6]').removeAttr("disabled", "disabled");
        $('#event option[id=CC]').removeAttr("disabled", "disabled");	

        $('#event option[id=G1]').attr("disabled", "disabled");
        $('#event option[id=G2]').attr("disabled", "disabled");
        $('#event option[id=G3]').attr("disabled", "disabled");
        $('#event option[id=G4]').attr("disabled", "disabled");
        $('#event option[id=GC]').attr("disabled", "disabled");

        $('#event option[id=E1]').attr("disabled", "disabled");

        $('#event option[id=CE1]').attr("disabled", "disabled");
        $('#event option[id=CE2]').attr("disabled", "disabled");
        $('#event option[id=CE3]').attr("disabled", "disabled");
        $('#event option[id=CEC]').attr("disabled", "disabled");

        $('#event option[id=GE5]').attr("disabled", "disabled");
        $('#event option[id=GE6]').attr("disabled", "disabled");
        $('#event option[id=GE7]').attr("disabled", "disabled");
        $('#event option[id=GE8]').attr("disabled", "disabled");
        $('#event option[id=GE9]').attr("disabled", "disabled");
        $('#event option[id=GE10]').attr("disabled", "disabled");
        $('#event option[id=GEC]').attr("disabled", "disabled");

        // $('#event option[id=GE1]').attr("disabled", "disabled");
        // $('#event option[id=GE2]').attr("disabled", "disabled");
        // $('#event option[id=GE3]').attr("disabled", "disabled");
        // $('#event option[id=GE4]').attr("disabled", "disabled");
        // $('#event option[id=R4]').attr("disabled", "disabled");
        // $('#event option[id=C3]').attr("disabled", "disabled");
        // $('#event option[id=E2]').attr("disabled", "disabled");



    }

    else if(domainDropValue === "Gaming")
    {
        $('#event option[id=C1]').attr("disabled", "disabled");
        $('#event option[id=C2]').attr("disabled", "disabled");
        $('#event option[id=C4]').attr("disabled", "disabled");
        $('#event option[id=C5]').attr("disabled", "disabled");
        $('#event option[id=C6]').attr("disabled", "disabled");
        $('#event option[id=CC]').attr("disabled", "disabled");

        $('#event option[id=R1]').attr("disabled", "disabled");
        $('#event option[id=R2]').attr("disabled", "disabled");
        $('#event option[id=R3]').attr("disabled", "disabled");
        $('#event option[id=R4]').attr("disabled", "disabled");
        $('#event option[id=RC]').attr("disabled", "disabled");

        

       	$('#event option[id=G1]').removeAttr("disabled", "disabled");
        $('#event option[id=G2]').removeAttr("disabled", "disabled");
        $('#event option[id=G3]').removeAttr("disabled", "disabled");
        $('#event option[id=G4]').removeAttr("disabled", "disabled");
        $('#event option[id=GC]').removeAttr("disabled", "disabled");


        $('#event option[id=E1]').attr("disabled", "disabled");

        $('#event option[id=CE1]').attr("disabled", "disabled");
        $('#event option[id=CE2]').attr("disabled", "disabled");
        $('#event option[id=CE3]').attr("disabled", "disabled");
        $('#event option[id=CEC]').attr("disabled", "disabled");

        $('#event option[id=GE5]').attr("disabled", "disabled");
        $('#event option[id=GE6]').attr("disabled", "disabled");
        $('#event option[id=GE7]').attr("disabled", "disabled");
        $('#event option[id=GE8]').attr("disabled", "disabled");
        $('#event option[id=GE9]').attr("disabled", "disabled");
        $('#event option[id=GE10]').attr("disabled", "disabled");
        $('#event option[id=GEC]').attr("disabled", "disabled");

        // $('#event option[id=GE1]').attr("disabled", "disabled");
        // $('#event option[id=GE2]').attr("disabled", "disabled");
        // $('#event option[id=GE3]').attr("disabled", "disabled");
        // $('#event option[id=GE4]').attr("disabled", "disabled");
        // $('#event option[id=R4]').attr("disabled", "disabled");
        // $('#event option[id=C3]').attr("disabled", "disabled");
        // $('#event option[id=E2]').attr("disabled", "disabled");



    }
    else if(domainDropValue === "Electrical")
    {
        $('#event option[id=C1]').attr("disabled", "disabled");
        $('#event option[id=C2]').attr("disabled", "disabled");
        $('#event option[id=C4]').attr("disabled", "disabled");
        $('#event option[id=C5]').attr("disabled", "disabled");
        $('#event option[id=C6]').attr("disabled", "disabled");
        $('#event option[id=CC]').attr("disabled", "disabled");

        $('#event option[id=G1]').attr("disabled", "disabled");
        $('#event option[id=G2]').attr("disabled", "disabled");
        $('#event option[id=G3]').attr("disabled", "disabled");
        $('#event option[id=G4]').attr("disabled", "disabled");
        $('#event option[id=GC]').attr("disabled", "disabled");

        $('#event option[id=R1]').attr("disabled", "disabled");
        $('#event option[id=R2]').attr("disabled", "disabled");
        $('#event option[id=R3]').attr("disabled", "disabled");
        $('#event option[id=R4]').attr("disabled", "disabled");
        $('#event option[id=RC]').attr("disabled", "disabled");

        $('#event option[id=E1]').removeAttr("disabled", "disabled");

        $('#event option[id=CE1]').attr("disabled", "disabled");
        $('#event option[id=CE2]').attr("disabled", "disabled");
        $('#event option[id=CE3]').attr("disabled", "disabled");
        $('#event option[id=CEC]').attr("disabled", "disabled");

        $('#event option[id=GE5]').attr("disabled", "disabled");
        $('#event option[id=GE6]').attr("disabled", "disabled");
        $('#event option[id=GE7]').attr("disabled", "disabled");
        $('#event option[id=GE8]').attr("disabled", "disabled");
        $('#event option[id=GE9]').attr("disabled", "disabled");
        $('#event option[id=GE10]').attr("disabled", "disabled");
        $('#event option[id=GEC]').attr("disabled", "disabled");

        // $('#event option[id=GE1]').attr("disabled", "disabled");
        // $('#event option[id=GE2]').attr("disabled", "disabled");
        // $('#event option[id=GE3]').attr("disabled", "disabled");
        // $('#event option[id=GE4]').attr("disabled", "disabled");
        // // $('#event option[id=R4]').attr("disabled", "disabled");
        // $('#event option[id=C3]').attr("disabled", "disabled");
        // $('#event option[id=E2]').attr("disabled", "disabled");



    }
    else if(domainDropValue === "Civil")
    {
        $('#event option[id=C1]').attr("disabled", "disabled");
        $('#event option[id=C2]').attr("disabled", "disabled");
        $('#event option[id=C4]').attr("disabled", "disabled");
        $('#event option[id=C5]').attr("disabled", "disabled");
        $('#event option[id=C6]').attr("disabled", "disabled");
        $('#event option[id=CC]').attr("disabled", "disabled");

        $('#event option[id=G1]').attr("disabled", "disabled");
        $('#event option[id=G2]').attr("disabled", "disabled");
        $('#event option[id=G3]').attr("disabled", "disabled");
        $('#event option[id=G4]').attr("disabled", "disabled");
        $('#event option[id=GC]').attr("disabled", "disabled");

        $('#event option[id=R1]').attr("disabled", "disabled");
        $('#event option[id=R2]').attr("disabled", "disabled");
        $('#event option[id=R3]').attr("disabled", "disabled");
        $('#event option[id=R4]').attr("disabled", "disabled");
        $('#event option[id=RC]').attr("disabled", "disabled");

      	 $('#event option[id=E1]').attr("disabled", "disabled");

        $('#event option[id=CE1]').removeAttr("disabled", "disabled");
        $('#event option[id=CE2]').removeAttr("disabled", "disabled");
        $('#event option[id=CE3]').removeAttr("disabled", "disabled");
        $('#event option[id=CEC]').removeAttr("disabled", "disabled");


        $('#event option[id=GE5]').attr("disabled", "disabled");
        $('#event option[id=GE6]').attr("disabled", "disabled");
        $('#event option[id=GE7]').attr("disabled", "disabled");
        $('#event option[id=GE8]').attr("disabled", "disabled");
        $('#event option[id=GE9]').attr("disabled", "disabled");
        $('#event option[id=GE10]').attr("disabled", "disabled");
        $('#event option[id=GEC]').attr("disabled", "disabled");

        // $('#event option[id=GE1]').attr("disabled", "disabled");
        // $('#event option[id=GE2]').attr("disabled", "disabled");
        // $('#event option[id=GE3]').attr("disabled", "disabled");
        // $('#event option[id=GE4]').attr("disabled", "disabled");
        // $('#event option[id=R4]').attr("disabled", "disabled");
        // $('#event option[id=C3]').attr("disabled", "disabled");
        // $('#event option[id=E2]').attr("disabled", "disabled");



    }

    else if(domainDropValue === "General Events")
    {
        $('#event option[id=C1]').attr("disabled", "disabled");
        $('#event option[id=C2]').attr("disabled", "disabled");
        $('#event option[id=C4]').attr("disabled", "disabled");
        $('#event option[id=C5]').attr("disabled", "disabled");
        $('#event option[id=C6]').attr("disabled", "disabled");
        $('#event option[id=CC]').attr("disabled", "disabled");

        $('#event option[id=G1]').attr("disabled", "disabled");
        $('#event option[id=G2]').attr("disabled", "disabled");
        $('#event option[id=G3]').attr("disabled", "disabled");
        $('#event option[id=G4]').attr("disabled", "disabled");
        $('#event option[id=GC]').attr("disabled", "disabled");

        $('#event option[id=R1]').attr("disabled", "disabled");
        $('#event option[id=R2]').attr("disabled", "disabled");
        $('#event option[id=R4]').attr("disabled", "disabled");
        $('#event option[id=R3]').attr("disabled", "disabled");
        $('#event option[id=RC]').attr("disabled", "disabled");

       $('#event option[id=E1]').attr("disabled", "disabled");

       
        $('#event option[id=CE1]').attr("disabled", "disabled");
        $('#event option[id=CE2]').attr("disabled", "disabled");
        $('#event option[id=CE3]').attr("disabled", "disabled");
        $('#event option[id=CEC]').attr("disabled", "disabled");
       
        $('#event option[id=GE5]').removeAttr("disabled", "disabled");
        $('#event option[id=GE6]').removeAttr("disabled", "disabled");
        $('#event option[id=GE7]').removeAttr("disabled", "disabled");
        $('#event option[id=GE8]').removeAttr("disabled", "disabled");
        $('#event option[id=GE9]').removeAttr("disabled", "disabled");
        $('#event option[id=GE10]').removeAttr("disabled", "disabled");
        $('#event option[id=GEC]').removeAttr("disabled", "disabled");

        // $('#event option[id=GE1]').attr("disabled", "disabled");
        // $('#event option[id=GE2]').attr("disabled", "disabled");
        // $('#event option[id=GE3]').attr("disabled", "disabled");
        // $('#event option[id=GE4]').attr("disabled", "disabled");
        // $('#event option[id=R4]').attr("disabled", "disabled");
        // $('#event option[id=C3]').attr("disabled", "disabled");
        // $('#event option[id=E2]').attr("disabled", "disabled");
    }


    // else if(domainDropValue === "Combo")
    // {
    //     $('#event option[id=C1]').attr("disabled", "disabled");
    //     $('#event option[id=C2]').attr("disabled", "disabled");
    //     $('#event option[id=C4]').attr("disabled", "disabled");
    //     $('#event option[id=C5]').attr("disabled", "disabled");
    //     $('#event option[id=C6]').attr("disabled", "disabled");
    //     $('#event option[id=CC]').removeAttr("disabled", "disabled");

    //     $('#event option[id=G1]').attr("disabled", "disabled");
    //     $('#event option[id=G2]').attr("disabled", "disabled");
    //     $('#event option[id=G3]').attr("disabled", "disabled");
    //     $('#event option[id=G4]').attr("disabled", "disabled");

    //     $('#event option[id=R1]').attr("disabled", "disabled");
    //     $('#event option[id=R2]').attr("disabled", "disabled");
    //     $('#event option[id=R3]').attr("disabled", "disabled");
    //     $('#event option[id=RC]').removeAttr("disabled", "disabled");

    //    $('#event option[id=E1]').attr("disabled", "disabled");

       
    //     $('#event option[id=CE1]').attr("disabled", "disabled");
    //     $('#event option[id=CE2]').attr("disabled", "disabled");
    //     $('#event option[id=CE3]').attr("disabled", "disabled");

  		// $('#event option[id=GE5]').attr("disabled", "disabled");
    //     $('#event option[id=GE6]').attr("disabled", "disabled");
    //     $('#event option[id=GE7]').attr("disabled", "disabled");
    //     $('#event option[id=GE8]').attr("disabled", "disabled");
    //     $('#event option[id=GE9]').attr("disabled", "disabled");
    //     $('#event option[id=GE10]').attr("disabled", "disabled");

    //     $('#event option[id=GE1]').attr("disabled", "disabled");
    //     $('#event option[id=GE2]').attr("disabled", "disabled");
    //     $('#event option[id=GE3]').attr("disabled", "disabled");
    //     $('#event option[id=GE4]').attr("disabled", "disabled");
    //     $('#event option[id=R4]').attr("disabled", "disabled");
    //     $('#event option[id=C3]').attr("disabled", "disabled");
    //     $('#event option[id=E2]').attr("disabled", "disabled");
    // }


    // else if(domainDropValue === "OnSpot")
    // {
    //     $('#event option[id=C1]').attr("disabled", "disabled");
    //     $('#event option[id=C2]').attr("disabled", "disabled");
    //     $('#event option[id=C4]').attr("disabled", "disabled");
    //     $('#event option[id=C5]').attr("disabled", "disabled");
    //     $('#event option[id=C6]').attr("disabled", "disabled");
    //     $('#event option[id=CC]').attr("disabled", "disabled");

    //     $('#event option[id=G1]').attr("disabled", "disabled");
    //     $('#event option[id=G2]').attr("disabled", "disabled");
    //     $('#event option[id=G3]').attr("disabled", "disabled");
    //     $('#event option[id=G4]').attr("disabled", "disabled");

    //     $('#event option[id=R1]').attr("disabled", "disabled");
    //     $('#event option[id=R2]').attr("disabled", "disabled");
    //     $('#event option[id=R3]').attr("disabled", "disabled");
    //     $('#event option[id=RC]').attr("disabled", "disabled");

    //    $('#event option[id=E1]').attr("disabled", "disabled");

       
    //     $('#event option[id=CE1]').attr("disabled", "disabled");
    //     $('#event option[id=CE2]').attr("disabled", "disabled");
    //     $('#event option[id=CE3]').attr("disabled", "disabled");

  		// $('#event option[id=GE5]').attr("disabled", "disabled");
    //     $('#event option[id=GE6]').attr("disabled", "disabled");
    //     $('#event option[id=GE7]').attr("disabled", "disabled");
    //     $('#event option[id=GE8]').attr("disabled", "disabled");
    //     $('#event option[id=GE9]').attr("disabled", "disabled");
    //     $('#event option[id=GE10]').attr("disabled", "disabled");



    //     $('#event option[id=GE1]').removeAttr("disabled", "disabled");
    //     $('#event option[id=GE2]').removeAttr("disabled", "disabled");
    //     $('#event option[id=GE3]').removeAttr("disabled", "disabled");
    //     $('#event option[id=GE4]').removeAttr("disabled", "disabled");
    //     $('#event option[id=R4]').removeAttr("disabled", "disabled");
    //     $('#event option[id=C3]').removeAttr("disabled", "disabled");
    //     $('#event option[id=E2]').removeAttr("disabled", "disabled");



    // }



        

}
</script>



</body>
</html>
	