//
// navbarre_scripts
//

/*function navBarre() {
    let x = document.getElementById("burger");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
console.log(navBarre)*/

/* Sélection des éléments HTML */
let link = document.getElementById('link')
let burger = document.getElementById('burger')
let nav = document.querySelector('nav')
//let ul = document.querySelector('ul')

/* gestionnaire d'événement sur le a#link pour venir changer l'attribution de la classe .open à la ul et au span#burger */
/*link.addEventListener('click', function(e) {
    e.preventDefault()
    burger.classList.toggle('open')
    nav.classList.toggle('open')
    //ul.classList.toggle('open')
})*/



//let spanburger = document.getElementsByClassName('span-burger');

//create burger togle?
/*<ul class="nav-list" id="nav-list">
  <img id="hamburger" src="icon-hamburger.svg" alt="HAMBURGER" aria-hidden="true" />

  <li class="nav-item"><a href="#">Home</a></li>
  <li class="nav-item"><a href="#">Highlights</a></li>
  <li class="nav-item"><a href="#">Portfolio</a></li>
  <li class="nav-item"><a href="#">Bio</a></li>
  <li class="nav-item"><a href="#">Blog</a></li>
  <li class="nav-item"><a href="#">Contact</a></li>
</ul>*/


//const hamburger =  document.getElementsById('burger');
const hamburger =  document.getElementsByClassName('burger');
const navItems =  Array.from(document.querySelectorAll('.nav-item'));

hamburger.addEventListener('click', () => {
    console.log(navItems); // you can see your nav items in console everytime you click the button
    navItems.forEach(navItem => navItem.classList.toggle('show'))
});


/*function burger() {
    var spanElementBurger = document.body;
    spanElementBurger.classList.toggle("span-burger");
}*/