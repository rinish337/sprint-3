<!DOCTYPE HTML>
<head>
<title>Vuurwerk</title>
<link rel="stylesheet" href="styles.css">

</head>

<body>
<div class="header">

<span style="font-size:35px;cursor:pointer"onclick="openNav()" class="left">&#9776;</span>

<span style="font-size:35px;cursor:pointer"onclick="openSearch()" class="right">&#128269;</span>

<a href="vuurwerkshophome.php"><img src="https://cdn.discordapp.com/attachments/646651183989260322/653933483776802827/Firework_Rocket.png" width="80" height="80" class="center"> </a>

</div>
<div id="sidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" class="right">&times;</a>

  <a href="knalvuurwerk.php">Knalvuurwerk</a>

  <a href="siervuurwerk.php">Siervuurwerk</a>

  <a href="compleetassortiment.php">Compleet assortiment</a>

  <a href="#">extra vuurwerk</a>

</div> 
</body>
<script>
  function openNav() {

document.getElementById("sidenav").style.width = "250px";

document.getElementById("main").style.marginLeft = "250px";

}



function closeNav() {

document.getElementById("sidenav").style.width = "0";

document.getElementById("main").style.marginLeft= "0";



}
  </script>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
    }
catch(PDOException $e)
    {
    echo "Connected failed: " . $e->getMessage();
    }
    function Extravuurwerk($conn) {

        $select = "SELECT * FROM product WHERE categorie = 'knalvuurwerk';";
        $result = $conn -> query($select);
        $databs = $result -> fetchAll(PDO::FETCH_ASSOC);
    
        echo "<div class='container' align='center'>";
        foreach($databs as $row) {
            echo "<div id=''>";
            echo "<h1>$row[naam]</h1>";
            echo "<img src='$row[url_img]'>";
            echo "Vooraad: $row[aantal]<br>";
            echo "$row[prijs]";
            echo "<button>Add to Cart</button></div>";
        }
        echo "</div>";
    }
    Extravuurwerk($conn);
    
?>
