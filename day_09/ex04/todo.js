/*
*
* je dois tout faire en ajax,
* la form des todo est : *id;i am a todo’
*   faire test bon output // faire ca juste avec des cookies
*
*   charge les fichiers depuit select.php >> je refait une request
*   send new file to insert. php          >> je resend tout
*   le fichier delete suprime les todo    >> je resend tout || notion d'id dans la class du todo?
*
*
*   apage pour delete les cookie
*
*   // mettre dans le ajax toute les actions ? i don't understand.
*
*
* */


/*------------------------------------*\
    funciton el
\*------------------------------------*/
// la function qui destroy les list,
function delete_el(el)
{
  if (confirm(" demander si oui ou non vous souhaitez supprimer ce to do"))
  {
	el.remove()
	save_list()
  }

}

function create_el(value)
{
  var div = $(`<div>${value}</div>`)

  $(div).click(function ()
  {
	delete_el($(div))
  })
  return div
}


/*------------------------------------*\
    save et init
\*------------------------------------*/
function getCookie(name)
{
  var value = "; " + document.cookie
  var parts = value.split("; " + name + "=")
  if (parts.length == 2) return parts.pop().split(";").shift()
}

function init()
{
  let task = getCookie("list")
  if (task)
  {
	task = JSON.parse(task)
  }
  for (var i = 0; i < task.length; i++)
  {
	list.prepend(create_el(task[i]))
  }
}

function save_list()
{
  let arr = []
  list.find("*").each(function ()
  {
	arr.push(this.textContent)
  })

  arr = JSON.stringify(arr)
  document.cookie = "list=" + arr + ";expires=Thu, 18 Dec 2400 12:00:00 UTC\""
}

function delete_el()
{

}


/*------------------------------------*\
    lauch app
\*------------------------------------*/
document.getElementById("btn").addEventListener("click", function ()
{
  let value = prompt("")

  if (value !== "" && value !== null)
  {
	list.prepend(create_el(value))

  }
  save_list()
})


let list = $("#ft_list")
let i = 0

init()



