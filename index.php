<?php



$json  = file_get_contents("https://jidelnicek.utb.cz/webkredit/Api/Ordering/Menu?Dates=2021-10-19T22%3A00%3A00.000Z&CanteenId=3");
echo $json;
/*
$data = json_decode($json);



echo "Polívečka <br>";

foreach ($data->groups[0]->rows as $obed) {
    $obed = $obed->item;
    //print_r($obed);
    echo $obed->mealName . " -:- " . $obed->price . " Kč   " . $obed->state ;
    if ($obed->state == 0) {
        echo "Dostupne";
    } else {
        echo "Ne";
    }
    echo "<br><br>";
}

echo "Oběd <br>";

foreach ($data->groups[1]->rows as $obed) {
    $obed = $obed->item;
    //print_r($obed);

    Item($obed->mealName, 43, true);

    echo $obed->mealName . " -:- " . $obed->price . " Kč   " . $obed->state ;
    if ($obed->state == 0) {
        echo "Dostupne";
    } else {
        echo "Ne";
    }
    echo "<br><br>";
}

echo "Minutka <br>";

foreach ($data->groups[2]->rows as $obed) {
    $obed = $obed->item;
    //print_r($obed);
    echo $obed->mealName . " -:- " . $obed->price . " Kč   " . $obed->state ;
    if ($obed->state == 0) {
        echo "Dostupne";
    } else {
        echo "Ne";
    }
    echo "<br><br>";
}

echo "Pizza <br>";

foreach ($data->groups[3]->rows as $obed) {
    $obed = $obed->item;
    //print_r($obed);
    echo $obed->mealName . " -:- " . $obed->price . " Kč   " . $obed->state ;
    if ($obed->state == 0) {
        echo "Dostupne";
    } else {
        echo "Ne";
    }
    echo "<br><br>";
}


?>


</body>
</html>
