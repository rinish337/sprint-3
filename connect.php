<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Connected failed: " . $e->getMessage();
    }

function CompleetAssortiment($conn) {
    $select = "SELECT * FROM product;";
    $result = $conn -> query($select);
    $databs = $result -> fetchAll(PDO::FETCH_ASSOC);

    echo "<div class='container' align='center'>";
    foreach($databs as $row) {
        echo "<div id='product'>";
        echo "<h1>$row[naam]</h1>";
        echo "<img src='$row[url_img]'>";
        echo "Vooraad: $row[aantal]<br>";
        echo "$row[prijs]";
        echo "<button>Add to Cart</button></div>";
    }
    echo "</div>";
}

function Knalvuurwerk() {

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

function Siervuurwerk() {
    $select = "SELECT * FROM product WHERE categorie = 'siervuurwerk';";
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

function Extravuurwerk() {
    $select = "SELECT * FROM product WHERE categorie = 'extravuurwerk';";
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

CompleetAssortiment($conn);
?>