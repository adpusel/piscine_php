

// il faut require le fs
const fs = require("fs")

// quand la route modal est match en method post, met celle de ton bouton
server.post("/modal", (req, res) =>
{
  let fetch = 1; // ici tu fais ta request sql et get un tab

  /*

  fs est le systeme de file de node, le chemin est en relatif

  * */
  fs.writeFileSync("data_save.json", JSON.stringify(fetch))
  // le fichier est replacer s'il existe deja

}