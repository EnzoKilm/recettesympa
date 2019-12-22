var liste_ingredients = [];
var liste_etapes = [];

function recupElem() {
  var nom = document.getElementById('nom').value;
  var difficulte = document.getElementById('difficulte').value;
  var prix = document.getElementById('prix').value;
  var temps = document.getElementById('temps').value;
  var nombre_personnes = document.getElementById('nombre_personnes').value;

  var valeurs = [
    {nom:nom, difficulte:difficulte, prix:prix, temps:temps, nombre_personnes:nombre_personnes}
  ];

  // AFFICHAGE DES CARACTERISTIQUES DE LA RECETTE
  for (var i = 0; i < valeurs.length; i++) {
    console.log(valeurs[i].nom,valeurs[i].difficulte,valeurs[i].prix,valeurs[i].temps,valeurs[i].nombre_personnes);
  }
}

function nouvelAliment() {
  var nom_ingredient = document.getElementById('nom_ingredient').value;
  var quantite_ingredient = document.getElementById('quantite_ingredient').value;

  liste_ingredients.push({nom_ingredient:nom_ingredient, quantite_ingredient:quantite_ingredient});

  console.log(liste_ingredients);

  document.getElementById("nom_ingredient").value = "";
  document.getElementById("quantite_ingredient").value = "";

  var nouvel_ingredient = document.createElement("LI");                 // Create a <li> node
  var texte_ingredient = document.createTextNode(nom_ingredient+" : "+quantite_ingredient);         // Create a text node
  nouvel_ingredient.appendChild(texte_ingredient);                              // Append the text to <li>
  document.getElementById("log_ingredients").appendChild(nouvel_ingredient);     // Append <li> to <ul> with id="myList"
}

function nouvelleEtape() {
  var description_etape = document.getElementById('description_etape').value;

  liste_etapes.push({description_etape:description_etape});

  console.log(liste_etapes);

  document.getElementById("description_etape").value = "";

  var nouvelle_etape = document.createElement("LI");                 // Create a <li> node
  var texte_etape = document.createTextNode(description_etape);         // Create a text node
  nouvelle_etape.appendChild(texte_etape);                              // Append the text to <li>
  document.getElementById("log_etapes").appendChild(nouvelle_etape);     // Append <li> to <ul> with id="myList"
}

function creationPage() {
  var doc = document.implementation.createHTMLDocument('');

  doc.open();
  doc.write("<html><head><title>MyTitle</title></head><body>test</body></html>");
  doc.close();

  doc.download = "download.html";

  console.log(doc);

  //var w = window.open("test.html", "test");
  //w.document.write("<html><head><title>MyTitle</title></head><body>test</body></html>");
}
