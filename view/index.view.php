<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
    <title>OOP Praktika</title>
    <link rel="stylesheet" href="view/css/bootstrap.min.css"
</head>

<body>
<div class="container mt-5">
<?php

use Vehicle\Vehicle;
use Vehicle\Car;
use Vehicle\Bicycle;
use Vehicle\Motorcycle;

$vehicle = new Vehicle("Audi", "Q7");
//print_r($vehicle);

$car = new Car("Ford", "Mondeo", "Diesel");
$car->addData(15000, "2t", "Yes", "2.0", "220 km/h", "Audi is made in Germany", 5);
$bicycle = new Bicycle("Corratec", "Allroad", "City");
$bicycle->addData(500, "10kg", "No", "No", "50 km/h", "Made in Italy", 1);
$motorcycle = new Motorcycle("Honda", "CBR500R ABS", "2 wheels");
$motorcycle->addData(5000, "500kg", "Yes", "1.7", "180 km/h", "Made in Japan", 2);

echo "<table class='table'> 
<tr>
<th>Brand</th>
<th>Type</th>
<th>Price</th>
<th>Weight</th>
<th>Engine</th>
<th>Power</th>
<th>Max Speed</th>
<th>Description</th>
<th>Passenger</th>
<th>Specific property</th>
</tr>
<tr></tr>";
foreach ($vehicle->getData() as $value){
    echo "<td>$value</td>";
}
echo "<tr></tr>";
foreach ($car->getData() as $value){
    echo "<td>$value</td>";
}
echo "<tr></tr>";
foreach ($bicycle->getData() as $value){
    echo "<td>$value</td>";
}
echo "<tr></tr>";
foreach ($motorcycle->getData() as $value){
    echo "<td>$value</td>";
}
echo "</table>";
?>

</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>
</html>