<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Výsledek vyhledávání</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-center bg-secondary text-light">
<?php
require 'dbconfig.php';
$prijmeni = addslashes($_POST["prijmeni"]);
$jmeno = addslashes($_POST["jmeno"]);
$nazev = addslashes($_POST["nazev"]);
$isbn = addslashes($_POST["isbn"]);
$con = mysqli_connect($host, $user, $password, $db);
if (!$con)
{
	die("Nelze se připojit do databáze<body></html>");
}
mysqli_query($con,"SET NAMES 'utf8'");

$query = "SELECT prijmeni, jmeno, nazev, isbn, popis FROM evidence WHERE prijmeni = '$prijmeni' || jmeno = '$jmeno' || nazev = '$nazev' || isbn = '$isbn'";
if (!($result = mysqli_query($con, $query)))
{
  die("Nelze provést dotaz.</body></html>");
}
?>
<div class="container p-5" id="kontejner">
        <h2 class="my-5">Výsledek vyhledávání</h2>
        <table class="table table-striped table-bordered mb-5 table-light">

            <tr>
                <th scope="col">ISBN</th>
                <th scope="col">Příjmení</th>
                <th scope="col">Jméno</th>
                <th scope="col">Název</th>
            </tr>
            <tr>
                <th colspan="4">Popis</th>
            </tr>


            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td>" . htmlspecialchars($row["isbn"]) . "</td><td>" . htmlspecialchars($row["prijmeni"]) . "</td><td>" . htmlspecialchars($row["jmeno"]) . "</td><td>" . htmlspecialchars($row["nazev"]) . "</td></tr>";
                echo "<tr><td colspan=\"4\">" . htmlspecialchars($row["popis"]) . "</td></tr>";
            }
            mysqli_free_result($result);
            mysqli_close($con);
            ?>

        </table>
        <ul class="list-group">
            <a href="index.html" class="list-group-item list-group-item-action list-group-item-light">Domů</a>
            <a href="prehledKnih.php" class="list-group-item list-group-item-action list-group-item-light">Přehled
                knih</a>
            <a href="vyhledavaniKnihForm.php" class="list-group-item list-group-item-action list-group-item-light">Vyhledávání knih</a>
            <a href="zadaniKnihForm.php" class="list-group-item list-group-item-action list-group-item-light">Zadavání
                knih do databáze</a>  
        </ul>
        <p class="mt-5 mb-3">&copy;veetek 2021</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
