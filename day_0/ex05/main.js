let curr_action = "rien"

// quand je fais un click

function display_action()
{
  // init les valeur
  var para = document.createElement("p");
  para.classList.add("selected_objet")

  // creer et ajoutele texte
  var node = document.createTextNode("This is a new paraasdfasdfasfdasfasfdasfasdfasdfasdfasdfasdfgraph.");
  para.appendChild(node);

  // l'ajoute a la page
  var element = document.body.appendChild(para)

  document.getElementById('anchorID').onclick=function(){/* some code */}

}



display_action()