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