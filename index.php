<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-color: WhiteSmoke;
  color: #13314f;
}

h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

/* The grid container */
.grid-container {
  display: grid;
  grid-template-areas: 
    'left left right right';
    grid-column-gap: 1px;
} 

/*
.left,
.right {
  padding: 500px;
  width: 50%;
  height: 800px;  Should be removed. Only for demonstration 
}
*/

/* Style the left column */
.left {
  grid-area: left;
  margin: auto;
  border: 3px solid #13314f;
  padding: 10px;
}

/* Style the right column */
.right {
  grid-area: right;
  margin: auto;
  border: 3px solid #13314f;
  padding: 10px;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .grid-container  {
    grid-template-areas:  
      'left left left left left left' 
      'right right right right right right';
  }
}

input[type=submit] {
  background-color: #13314f;
  border: center;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 4px;
  cursor: pointer;
}

.form-submit-button {
     background: #b9DFF3;
     color: #fff;
     padding: 16px 32px;
     border: 1px solid #eee;
     border-radius: 50px;
     box-shadow: 5px 5px 5px #eee;
     text-shadow:none;
}
.form-submit-button:hover {
     background: #13314f;
     color: #fff;
     padding: 16px 32px;
     border: 1px solid #eee;
     border-radius: 50px;
     box-shadow: 5px 5px 5px #eee;
     text-shadow:none;
}

.slidecontainer {
  width: 80%;
}
.center {
  margin: auto;
  width: 50%;
  border: 3px solid #13314f;
  padding: 10px;
}
input[type="range"] {
  display: block;
  -webkit-appearance: none;
  background-color: #bdc3c7;
  width: 300px;
  height: 5px;
  border-radius: 5px;
  margin: 2 ;
  outline: 0;
}

input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  background-color: #b691d2;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 2px solid white;
  cursor: pointer;
  transition: .3s ease-in-out;
}

  input[type="range"]::-webkit-slider-thumb:hover {
    background-color: white;
    border: 2px solid #e74c3c;
  }
  
  input[type="range"]::-webkit-slider-thumb:active {
    transform: scale(0.6);
  }

</style>
</head>
<body>

<h1>Control Panel</h1>

<form method="get">
<div class="grid-container">
<div class="left">
  <h2>Robot Arm</h2>
  <p><b>Base:</b></p>
  <input type="range" min="0" max="180" value="<?php if(isset($_GET['myRange1'])){ echo htmlentities ($_GET['myRange1']); }?>" class="slider" id="myRange1" name="myRange1" oninput="demo1.value = this.value">
  <p>Value: <output id="demo1" name="demo1" for="myRange1"></output></p>
  <br>

  <p><b>Shoulder:</b></p>
  <input type="range" min="0" max="180" value="<?php if(isset($_GET['myRange2'])){ echo htmlentities ($_GET['myRange2']); }?>" class="slider" id="myRange2" name="myRange2" oninput="demo2.value = this.value">
  <p>Value:<output id="demo2" name="demo2" for="myRange2"></output></p>
  <br>

  <p><b>Elbow:</b></p>
  <input type="range" min="0" max="180" value="<?php if(isset($_GET['myRange3'])){ echo htmlentities ($_GET['myRange3']); }?>" class="slider" id="myRange3" name="myRange3" oninput="demo3.value = this.value">
  <p>Value: <output id="demo3" name="demo3" for="myRange3"></output></p>
  <br>

  <p><b>Wrist:</b></p>
  <input type="range" min="0" max="180" value="<?php if(isset($_GET['myRange4'])){ echo htmlentities ($_GET['myRange4']); }?>" class="slider" id="myRange4" name="myRange4" oninput="demo4.value = this.value">
  <p>Value: <output id="demo4" name="demo4" for="myRange4"></output></p>
  <br>

  <p><b>Gripper:</b></p>
  <input type="range" min="0" max="180" value="<?php if(isset($_GET['myRange5'])){ echo htmlentities ($_GET['myRange5']); }?>" class="slider" id="myRange5" name="myRange5" oninput="demo5.value = this.value">
  <p>Value: <output id="demo5" name="demo5" for="myRange5"></output></p>
  <br>

  <input type="submit" name="save" value="Save">
  <input type="submit" name="play" value="Play">

</div>

<div class="right">
<h2>Robot Base</h2>
<h2>     <input type="submit" name="FORWARD" value="FORWARD" class="form-submit-button"></h2>
<h2> <input type="submit" name="LEFT" value="LEFT" class="form-submit-button">
<input type="submit" name="STOP" value="STOP" class="form-submit-button">
<input type="submit" name="RIGHT" value="RIGHT" class="form-submit-button"></h2>
<h2>     <input type="submit" name="BACKWARD" value="BACKWARD" class="form-submit-button"></h2>

</div>

</div>
</form>



<script>


var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
  
  }
  
  var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
  
  }
  
  var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;
  
  }
  
  var slider4 = document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
  output4.innerHTML = this.value;
  
  }
  
  var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
  output5.innerHTML = this.value;
  
  }

</script>

<script>
  window.watsonAssistantChatOptions = {
      integrationID: "396b1adf-9c55-4fdd-97d5-918760760f95", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "694564f6-529f-4e2c-88b5-34c83223ceab", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>


<?php
$con = mysqli_connect('localhost', 'root', 'mrmsnh1419','robots_control');

if(isset($_GET['save']))
{

$base = (int) $_GET["myRange1"];
$shoulder = (int) $_GET["myRange2"];
$elbow = (int) $_GET["myRange3"];
$wrist = (int) $_GET["myRange4"];
$gripper = (int) $_GET["myRange5"];


$sql = "INSERT INTO arm_control ( base, shoulder, elbow, wrist, gripper) VALUES ( $base, $shoulder, $elbow, $wrist, $gripper)";

$rs = mysqli_query($con, $sql);

$sql1 = "UPDATE arm_play_status SET play='0' WHERE id=1";
$rs1 = mysqli_query($con, $sql1);

}

if(isset($_GET['play']))
{
$sql2 = "UPDATE arm_play_status SET play='1' WHERE id=1";
$rs2 = mysqli_query($con, $sql2);
}

if(isset($_GET['FORWARD']))
{
$sql2 = "UPDATE base_control SET base_status='F' WHERE id=1";
$rs2 = mysqli_query($con, $sql2);
}

if(isset($_GET['LEFT']))
{
$sql2 = "UPDATE base_control SET base_status='L' WHERE id=1";
$rs2 = mysqli_query($con, $sql2);
}

if(isset($_GET['STOP']))
{
$sql2 = "UPDATE base_control SET base_status='S' WHERE id=1";
$rs2 = mysqli_query($con, $sql2);
}

if(isset($_GET['RIGHT']))
{
$sql2 = "UPDATE base_control SET base_status='R' WHERE id=1";
$rs2 = mysqli_query($con, $sql2);
}

if(isset($_GET['BACKWARD']))
{
$sql2 = "UPDATE base_control SET base_status='B' WHERE id=1";
$rs2 = mysqli_query($con, $sql2);
}

mysqli_close($con);
?>

</body>

</html>