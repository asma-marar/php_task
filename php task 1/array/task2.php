<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    $cities= array( 
        "Italy"=>"Rome", 
        "Luxembourg"=>"Luxembourg", 
        "Belgium"=> "Brussels",
        "Denmark"=>"Copenhagen", 
        "Finland"=>"Helsinki", 
        "France" => "Paris", 
        "Slovakia"=>"Bratislava",
        "Slovenia"=>"Ljubljana", 
        "Germany" => "Berlin", 
        "Greece" => "Athens", 
        "Ireland"=>"Dublin",
        "Netherlands"=>"Amsterdam", 
        "Portugal"=>"Lisbon", 
        "Spain"=>"Madrid" );
        
        asort($cities);

  foreach( $cities as $city => $name ) {
    echo "The capital of $city is $name <br>";
  }
    ?>
</body>

</html>