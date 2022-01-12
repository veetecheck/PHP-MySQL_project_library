<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadani knih do db</title>
</head>
<body>
    <?php
    require 'dbconfig.php';
    if (!($con = mysqli_connect($host, $user, $password, $db)))
    {
        die("Nelze se připojit k databázovému serveru!</body></html>");
    }
    mysqli_query($con, "SET NAMES 'utf8'");
    if (mysqli_query($con,
    "INSERT INTO evidence(isbn, prijmeni, jmeno, nazev, popis) VALUES('" . 
    addslashes($_POST["isbn"]) . "', '" . 
    addslashes($_POST["prijmeni"]) . "', '" . 
    addslashes($_POST["jmeno"]) . "', '" . 
    addslashes($_POST["nazev"]) . "', '" . 
    addslashes($_POST["popis"]) . "')"
    ))
    {
      echo "Úspěšně vloženo.";
    }
    else
    {
      echo "Nelze provést dotaz. " . mysqli_error($con);
    }
    mysqli_close($con);
    ?>
    </body>
    </html>