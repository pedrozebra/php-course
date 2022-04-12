<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Store</title>
</head>
<body>
    <?php
        $name = "PHP Store";
        $credit = 1000;
        echo "<h1>Welcome to ".$name."!</h1>";
        echo "<h2>You have $".$credit." in your wallet.</h2>";

        $products['Computer']=750;
        $products['Car']=15000;
        $products['iPhone']=1000;
        $products['Toaster']=75;

        foreach($products as $key => $value) {
            echo "<p>The ".$key." costs ".$value."</p>";
        }
    ?>
</body>
</html>