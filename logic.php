<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Eingabemaske | Stephan Zauner</title>
</head>


<body style="overflow:hidden">
    <h1 id="output" style="margin-top:-1500px"> 


    <?php


$required = array("menge1","name1","preisEZ1","preisGSM1",
        "menge2","name2","preisEZ2","preisGSM2",
        "menge3","name3","preisEZ3","preisGSM3",
        "menge4","name4","preisEZ4","preisGSM4",
        "menge5","name5","preisEZ5","preisGSM5",
        "menge6","name6","preisEZ6","preisGSM6",
        "menge7","name7","preisEZ7","preisGSM7",
        "menge8","name8","preisEZ8","preisGSM8",
        "menge9","name9","preisEZ9","preisGSM9",
        "menge10","name10","preisEZ10","preisGSM10");

        $error = false;

        foreach ($required as $field) {
            if (empty($_POST[$field]) or ctype_space($_POST[$field])) {
                $error = true;
            }
            if(strpos($field,"menge") !== false){
                try {
                    $meng = (int)$_POST[$field];
                    if ($meng >= 1){
                        $error = false;
                    }
                    else{
                        $error = true;
                    }
                } catch (\Throwable $th) {
                    $error = true;
                }
            }
            else{
                $error = true;
            }

            echo "<br>";

            if(strpos($field,"name") !== false){
                try {
                    if (strlen($_POST[$field]) <= 128){
                        $error = false;
                    }
                    else {
                        $error = true;
                    }
                } catch (\Throwable $th) {
                    $error = true;
                }
            }
            else{
                $error = true;
            }

            echo "<br>";

            if(strpos($field,"preisEZ") !== false){
                try {
                    $meng = (float)$_POST[$field];
                    if ($meng >= 1){
                        $error = false;
                    }
                    else{
                        $error = true;
                    }
                } catch (\Throwable $th) {
                    $error = true;
                }
            }
            else{
                $error = true;
            }
            echo "<br>";
            if(strpos($field,"preisGSM") !== false){
                $gesam = (float)$_POST[$field]*(int)$_POST[$field];
                $error = false;
            }
            else{
                $error = true;
            }
            echo "<br>";
        }

        if ($error) {
            $test = "<h1 style='color:red'>" . "No" . "</h1>";
            echo $test ;
        } else {
            $test = "<h1 style='color:green'>" . "Yes" . " " . "</h1>"; 
            echo $test;
        }
        ?>
        
    </h1> 
</body>

</html>