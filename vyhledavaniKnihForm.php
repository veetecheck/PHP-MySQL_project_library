<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Vyhledání knih z databáze</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body class="text-center bg-secondary text-light">
  <div class="container p-5" id="kontejner">
    <h2 class="my-5">Formulář vyhledání knih z databáze</h2>
    <form action="vyhledavaniKnih.php" class="text-left" id="formular" name="formular" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="isbn" placeholder="978-80-7203-884-8">
        <label for="isbn">ISBN <span class="text-white-50">(příklad pro ISBN-10: 80-204-0105-9 a ISBN-13: 978-80-7203-884-8)</span></label>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="prijmeni" placeholder="Novák">
        <label for="prijmeni">Příjmení autora</label>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="jmeno" placeholder="Jan">
        <label for="jmeno">Jméno autora</label>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="nazev" placeholder="Čítanka pro děti">
        <label for="nazev">Název knihy</label>
      </div> 
    </form>
    <button class="btn btn-outline-light btn-large mt-1" onclick="vyhledat();">Odešli data</button>
    <button class="btn btn-outline-light btn-large mt-1" onclick="resetuj();">Resetuj formulář</button>
    <ul class="list-group mt-5">
      <a href="index.html" class="list-group-item list-group-item-action list-group-item-light">Domů</a>
      <a href="prehledKnih.php" class="list-group-item list-group-item-action list-group-item-light">Přehled
        knih</a>
      <a href="zadaniKnihForm.php" class="list-group-item list-group-item-action list-group-item-light">Zadavání
        knih do databáze</a>

    </ul>
    <p class="mt-5 mb-3">&copy;veetek 2021</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>