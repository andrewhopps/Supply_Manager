<html>
    
<head>
    <h1>Organized Supply Ordering 0.0.1</h1>
    <script src="mFunctions.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'CCB')">CANDY / COFFEE / BULK</button>
  <button class="tablinks" onclick="openCity(event, 'B&W')">BEER & WINE</button>
  <button class="tablinks" onclick="openCity(event, 'UNI')">UNIFORMS</button>
  <button class="tablinks" onclick="openCity(event, 'KNI')">KNIVES</button>
  <button class="tablinks" onclick="openCity(event, 'SIH')">SIGN HOLDERS</button>
  <button class="tablinks" onclick="openCity(event, 'DEL')">DELI</button>
  <button class="tablinks" onclick="openCity(event, 'G/F')">GIFT / FLORAL</button>
  <button class="tablinks" onclick="openCity(event, 'GEN')">GENERAL STORE</button>
  <button class="tablinks" onclick="openCity(event, 'GLO')">GLOVES</button>
  <button class="tablinks" onclick="openCity(event, 'BAK')">BAKERY</button>
  <button class="tablinks" onclick="openCity(event, 'CLE')">CLEANING</button>
  <button class="tablinks" onclick="openCity(event, 'MON')">MONARCH LABELS</button>
  <button class="tablinks" onclick="openCity(event, 'MUL')">MULTIPLE</button>
  <button class="tablinks" onclick="openCity(event, 'FRO')">FRONT-END</button>
  <button class="tablinks" onclick="openCity(event, 'M&S')">MEAT & SEAFOOD</button>
  <button class="tablinks" onclick="openCity(event, 'SMA')">SMALLWARES</button>
  <button class="tablinks" onclick="openCity(event, 'PRO')">PRODUCE</button>
  <button class="tablinks" onclick="openCity(event, 'TOT')">|TOTALS|</button>
  </div>
  
  <div id="CCB" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
  </div>

  <div id="B&W" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
  </div>

  <div id="UNI" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="KNI" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="SIH" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="DEL" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="G/F" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="GEN" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="GLO" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="BAK" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="CLE" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="MON" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="MUL" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="FRO" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="M&S" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="SMA" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="PRO" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
  
    <div id="TOT" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  </div>
    
<br>    
<div>
<?php

$host = "localhost";
$username = "root";
$user_pass = "AhR3DSTON3";
$database_in_use = "supply_management";
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n<br>";

$sql = "SELECT SKU, Description FROM order_guide";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<span>" . "SKU: " . $row["SKU"] . " - Description: " . $row["Description"] . "</span><br>";
        
    }
}
else {
    echo "0 results";
}
$mysqli->close();



?>

</div>
</body>