<?php
//SESSION START	
session_start();

//ERRORS DISPLAY
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//GET FUNCTION TO GET DB DETAILS FROM FAR FILE//OUTPUT 00
include "php/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Test</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
<script src="https://kit.fontawesome.com/541602f357.js" crossorigin="anonymous"></script>
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: 'Raleway', sans-serif;
    }

    .w3-third img {
        margin-bottom: -6px;
        opacity: 0.8;
        cursor: pointer;
    }

    .w3-third img:hover {
        opacity: 1;
    }

</style>
<link rel="stylesheet" href="css/searchBox.css" />
<link rel="stylesheet" href="css/switch.css" />
</head>
<body class="w3-light-grey w3-content" style="max-width: 1600px">
    <!-- Sidebar/menu -->
    <nav class="
				w3-sidebar
				w3-bar-block
				w3-white
				w3-animate-left
				w3-text-grey
				w3-collapse
				w3-top
				w3-center
			" style="z-index: 3; width: 300px; font-weight: bold" id="mySidebar">
        <br />
        <h3 class="w3-padding-64 w3-center">
            <b>HOME<br />TEST</b>
        </h3>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
        <a href="#" onclick="w3_close()" class="w3-bar-item w3-button"><?php echo  $check_mark . ' DB connection';
                                                                        ?></a>
        
			<a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button"
				>
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label></a
			>
		<!--<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button"
				>CONTACT</a
			>-->
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
        <span class="w3-left w3-padding">HOME TEST</span>
        <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor: pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left: 300px">
        <!-- Push down content on small screens -->
        <div class="w3-hide-large" style="margin-top: 83px"></div>
        <div class="w3-padding-16">
            <div class="w3-card">
                <div id="myDIV" class="header">
                    <h2 style="margin: 5px">Results</h2>
                    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search..." />
                </div>
                <div id="livesearch"></div>
                <ul id="myMenu"></ul>
            </div>
            <br />
        </div>

        <div class="w3-black w3-center w3-padding-24">
            Powered by
            <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a>
        </div>

        <!-- End page content -->
    </div>
    <!-- Search box -->
    <script>
         function addLi(dataFromDb){
            //discarding current content
            document.getElementById("myMenu").innerHTML = '';
            
            const fragment = document.createDocumentFragment();  
            
            for (let i = 0; i < dataFromDb.length; i++) {
                const newElement = document.createElement('li');
                newElement.innerText = dataFromDb[i];

                fragment.appendChild(newElement);
            }

            let dataList = document.querySelector('#myMenu');
            dataList.appendChild(fragment); 
         }
        
        
        
        function myFunction() {
            document.getElementById("myMenu").innerHTML = '';
            
            let input, filter, ul, li, a, i, dev;
            input = document.getElementById('mySearch');
            filter = input.value.toLowerCase();
            dev = 0;
            
            if (input.value !== ''){
            //sending AJAX request
            const xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    let topFiveArray = JSON.parse(xmlhttp.responseText); 
                    console.log(topFiveArray);
                    addLi(topFiveArray);
                }
            }
           
              xmlhttp.open("GET","livesearch.php?q="+input.value+"&dev="+dev,true);
                xmlhttp.send();
            } else {
                document.getElementById("myMenu").innerHTML = '';
                document.getElementById("myMenu").innerHTML = '<li>No results found.</li>';}
        }
    </script>
   
	<script src="js/sideBar.js"></script>
</body>

</html>