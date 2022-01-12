function odeslat() {

  let isbn = document.formular.isbn.value;
  let prijmeni = document.formular.prijmeni.value;
  let jmeno = document.formular.jmeno.value;
  let nazev = document.formular.nazev.value;
  let popis = document.formular.popis.value;

  if (isbn.trim().length > 1 && prijmeni.trim().length > 1 && jmeno.trim().length > 1 && nazev.trim().length > 1 && popis.trim().length > 1) {

    document.getElementById('formular').submit();
    alert("Data byla odeslána");
    document.getElementById('isbn').value = "";
    document.getElementById('prijmeni').value = "";
    document.getElementById('jmeno').value = "";
    document.getElementById('nazev').value = "";
    document.getElementById('popis').value = "";

  } else {
    alert("Vyplňte prosím všechny údaje");
  }
}

function vyhledat() {
  let isbn = document.formular.isbn.value;
  let prijmeni = document.formular.prijmeni.value;
  let jmeno = document.formular.jmeno.value;
  let nazev = document.formular.nazev.value;

  if (isbn.trim().length > 1 || prijmeni.trim().length > 1 || jmeno.trim().length > 1 || nazev.trim().length > 1) {
    document.getElementById('formular').submit();
  }
  else {
    alert("Vyplňte prosím alespoň jeden údaj");
  }
}

function resetuj() {
  document.getElementById('formular').reset();
}