// Get the modal
/*var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}*/




function toggleSplitburger() {
    var element = document.getElementById('myModal');
    var btn = document.getElementById('myBtn');
    var modal = document.getElementById('myModal')
        element.style.display = "block";
        element.style.flexDirection = "column";
        btn.style.display = "none";
        modal.style.display = "block";
        modal.style.flexDirection = "column";
            element.classList.toggle("modal-menu");
            btn.classList.toggle("modal-menu");
                console.log(element);
                console.log(btn);

    console.log(element);
    console.log(btn);
}

function closeModal() {
  var element = document.getElementById('myModal');
  var btn = document.getElementById('myBtn');
  var modal = document.getElementById('myModal')
      element.style.display = "block";
      element.style.flexDirection = "column";
      btn.style.display = "flex";
      modal.style.display = "block";
      modal.style.flexDirection = "column";




  var close = document.getElementById('myModal')
      close.style.display = "none";
          console.log(close)
}

console.log(close)
console.log(toggleSplitburger)