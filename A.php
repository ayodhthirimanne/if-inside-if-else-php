<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type"  content="text/plain; charset=utf-8" />
    <meta http-equiv="refresh" content=; url="<?php echo $_SERVER['PHP_SELF']; ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<body>
<table  border=1 bordercolor=black width="100px" style="border: 1px solid black;   overflow-y:hidden background-color:black;">
<?php
$conn = mysqli_connect("localhost","root","","1");
if ($conn-> connect_error) {
die("connection failed:".$conn-> connect_error);
}
$sql = 'SELECT * FROM train';
$result = mysqli_query($conn,$sql);
$day_number = date('N');
echo $day_number;
while($row = mysqli_fetch_assoc($result)) {




    if ($day_number ==1) {
        $Monday = $row["Monday"];
        if ($Monday ==1) {echo "<tr><td >". $row["Id"] ."</td><td>". $row["name"]  ."</td></tr>" ; }

} else if ($day_number == 2) {
        $Tuesday = $row["Tuesday"];
        if ($Tuesday ==1) {echo "<tr><td >". $row["Id"] ."</td><td>". $row["name"]  ."</td></tr>" ; }

    } else if ($day_number == 3) {
        $Wednesday = $row["Wednesday"];
        if ($Wednesday ==1) {echo "<tr><td >". $row["Id"] ."</td><td>". $row["name"]  ."</td></tr>" ; }

    } else if ($day_number == 4) {
        $Thursday = $row["Thursday"];
        if ($Thursday ==1) {echo "<tr><td >". $row["Id"] ."</td><td>". $row["name"]  ."</td></tr>" ; }

    } else if ($day_number == 5) {
        $Friday = $row["Monday"];
        if ($Friday ==1) {echo "<tr><td >". $row["Id"] ."</td><td>". $row["name"]  ."</td></tr>" ; }

    } else if ($day_number == 6) {
        $Saturday = $row["Saturday"];
        if ($Saturday ==1) {echo "<tr><td >". $row["Id"] ."</td><td>". $row["name"]  ."</td></tr>" ; }

    } else {
        $Sunday = $row["Sunday"];
        if ($Sunday  ==1) {echo "<tr><td >". $row["Id"] ."</td><td>". $row["name"]  ."</td></tr>" ; }

    }

}


?>
</table>
</body>
</html>