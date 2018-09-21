let cur_action = "rien"
let cur_obj = "rien"
let woman_diag = "rien"
let player_diag = "rien"
let dragon_diag = "rien"


/*------------------------------------*\
    set les click sur les colomne
\*------------------------------------*/
function set_action(name)
{
  cur_action = name
  document.getElementById("selected_action").innerHTML = name
  console.log(name)
  return (1)
}

function set_obj(name)
{
  if (cur_action === "prendre")
  {
	cur_obj = name
	document.getElementById("selected_object").innerHTML = name
	console.log(name)
  }
  return (1)
}

function set_dialogue(value)
{
  document.getElementById("dialogue").value = value
}

function set_description(name)
{
  cur_obj = name
  document.getElementById("description").innerHTML = name
}

// set le click sur les obj et action
function set_all_click()
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

  /*------------------------------------*\
      page 42
  \*------------------------------------*/
  if (document.getElementById("woman"))
  {
	document.getElementById("woman").onclick = function ()
	{
	  if (cur_obj === "towel" && cur_action === "parler")
	  {
		set_dialogue("hey j'ai besion d'aide")
		woman_diag = "ok"
	  }
	}
  }

  if (document.getElementById("man"))
  {
	document.getElementById("man").onclick = function ()
	{
	  set_dialogue("fiche moi la paix")
	}
  }


  /*------------------------------------*\
      page player
  \*------------------------------------*/
  if (document.getElementById("joueur"))
  {
	document.getElementById("joueur").onclick = function ()
	{
	  if (cur_obj === "book" && cur_action === "regarder")
	  {
		set_dialogue("merci je ne l'avais pas celui la")
		player_diag === "ok"
	  }
	}
  }

  /*------------------------------------*\
      dragon
  \*------------------------------------*/
  if (document.getElementById("dragon"))
  {
	document.getElementById("dragon").onclick = function ()
	{
	  if (cur_obj === "brick" && cur_action === "utiliser")
	  {
		set_dialogue("dis 42")
		dragon_diag = "ok"
	  }
	}
  }


  /*------------------------------------*\
	  dialogue
  \*------------------------------------*/
  document.getElementById("btn").onclick = function ()
  {
	if (document.getElementById("dialogue").value === "towel" &&
	  woman_diag === "ok")
	{
	  set_dialogue("demande au bon joueur")
	}

	if (document.getElementById("dialogue").value === "book" &&
	  player_diag === "ok")
	{
	  set_dialogue("va voir le dragon_diag")
	}

	if ((document.getElementById("dialogue").value === "42" ||
	  document.getElementById("dialogue").value === 42) &&
	  dragon_diag === "ok")
	{
	  console.log("")
	  set_dialogue("tu as gagner bravo")
	}
  }

}


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
set_all_click()

