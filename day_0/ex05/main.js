let cur_action = "rien"
let cur_obj = "rien"


/*------------------------------------*\
    set les click sur les colomne
\*------------------------------------*/
function set_action(name)
{
  cur_action = name
  document.getElementById("selected_action").innerHTML = name
  console.log(name)
  return (1);
}

function set_obj(name)
{
  cur_obj = name
  document.getElementById("selected_object").innerHTML = name
  console.log(name)
  return (1);
}

// set le click sur les obj et action
function set_click_colomne()
{
  // je set tout les objets avec la bonne valeurs
  document.getElementById("avancer").onclick = function ()
  {
	set_action("avancer")
  }

  document.getElementById("prendre").onclick = function ()
  {
	set_action("prendre")
  }

  document.getElementById("regarder").onclick = function ()
  {
	set_action("regarder")
  }

  document.getElementById("utiliser").onclick = function ()
  {
	set_action("utiliser")
  }

  document.getElementById("parler").onclick = function ()
  {
	set_action("parler")
  }

  document.getElementById("book").onclick = function ()
  {
	set_obj("book")
  }

  document.getElementById("towel").onclick = function ()
  {
	set_obj("towel")
  }

  document.getElementById("brick").onclick = function ()
  {
	set_obj("brick")
  }
}

// si j'ai la serviette et que je clique sur la dame elle me parle


function display_action()
{
  // // init les valeur
  // var para = document.createElement("p")
  // para.classList.add("selected_object")
  //
  // // creer et ajoutele texte
  // var node = document.createTextNode("This is a new paraasdfasdfasfdasfasfdasfasdfasdfasdfasdfasdfgraph.")
  // para.appendChild(node)
  //
  // // l'ajoute a la page
  // var element = document.body.appendChild(para)
}

display_action()

// load
set_click_colomne()
