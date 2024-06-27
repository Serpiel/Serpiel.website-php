"use strict";
const Valhalla = {
  city: 'Angleterre',
  year: "IXe siècle",
}
const Assassin = {
    name: "Eivor",
    weapon: "Lame secrète",
    weapon2: "épée",
    weapon3: "Arc",
    faction: 'Vikings',
    isHidden: "botte de foin",
    skills: ['Parkour', 'Furtivité', 'Combat'],
    VisionAigle: "Vision d'Odin",
    allies: "Bassim",
    enemies: ['Rodrigo Borgia', 'Cesare Borgia', 'Templiers'],
  }

const Templier = {
    name: 'Mujer Anglosajona',
    weapon: 'Epée',
    faction: 'Ordre des Anciens',
    isHidden: false,
    skills: ['Intelligence', 'Combat'],
    VisionAigle: false,
    allies: ['Ordre des Anciens'],
    enemies: ['Vikings', 'Assassins'],
  }

document.write("Bienvenue en " + Valhalla.city +" durant le " + Valhalla.year + "<br>")
document.write("Le nom du personnage principal est " + Assassin.name + " de la faction " + Assassin.faction + "<br>");
document.write(Assassin.name + " détecte " + Templier.name + " en utilisant la "+ Assassin.VisionAigle +"<br>");
document.write(Assassin.name + " attaque " + Templier.name + "<br>");
document.write(Assassin.name + " utilise " + Assassin.weapon2 + "<br>")
document.write("Execution du membre de "+ Templier.faction + "<br>");