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
  var div = $(`<div>${value}</div>`);

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
  task = JSON.parse(task)
  for (var i = 0; i < task.length; i++)
  {
	list.append(create_el(task[i]))
  }
}

function save_list()
{
  let arr = []
  list.find('*').each(function(){
    arr.push(this.textContent)
  });

  arr = JSON.stringify(arr)
  document.cookie = "list=" + arr + ";expires=Thu, 18 Dec 2400 12:00:00 UTC\""
}

/*------------------------------------*\
    lauch app
\*------------------------------------*/
document.getElementById("btn").addEventListener("click", function ()
{
  let value = prompt("")

  if (value !== "")
  {

  }
  list.append(create_el(value))
  save_list()
})


let list = $("#ft_list")
let i = 0

init()



