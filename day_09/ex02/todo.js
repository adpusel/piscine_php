/*
* les consignes
*
* input qui fait pout push dans la listr
* sur chaque el de la liste, je get juste le premier el de la liste
* comment je le suprime ? les list on des id, comme ca je sais ce que je suprime :)
*
*
*
* // une fonction add_to_list
* // une fonction compte list
* //
*
*
* */


/*------------------------------------*\
    funciton el
\*------------------------------------*/

// la function qui destroy les list,
function delete_el()
{
  if (confirm(" demander si oui ou non vous souhaitez supprimer ce to do"))
  {
	this.parentElement.removeChild(this)
	save_list()

  }

}

function create_el(value)
{
  var div = document.createElement("div")

  div.innerHTML += value
  div.id = i++
  div.addEventListener("click", delete_el)
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
	list.appendChild(create_el(task[i]))
  }
}

function save_list()
{
  let arr = []
  for (var i = 0; i < list.children.length; i++)
  {
	arr.push(list.children[i].textContent)
  }
  arr = JSON.stringify(arr)
  document.cookie = "list=" + arr + ";expires=Thu, 18 Dec 2400 12:00:00 UTC\""
}

/*------------------------------------*\
    lauch app
\*------------------------------------*/
document.getElementById("btn").addEventListener("click", function ()
{
  let value = prompt("")

  if (value !== "" && value !== null)
  {
	list.insertBefore(create_el(value), list.firstChild)
  }
  save_list()
})


let list = document.getElementById("ft_list")
let i = 0

init()



