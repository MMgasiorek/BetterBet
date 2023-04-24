// Pobierz przycisk
var myButton = document.getElementById("myButton");

// Pobierz modal
var myModal = document.getElementById("myModal");

// Pobierz element "zamknij"
var span = document.getElementsByClassName("close")[0];

// Kiedy użytkownik kliknie przycisk, otwórz modal
myButton.onclick = function() {
  myModal.style.display = "block";
}

// Kiedy użytkownik kliknie na "zamknij", zamknij modal
span.onclick = function() {
  myModal.style.display = "none";
}

// Kiedy użytkownik kliknie poza modalem, zamknij go
window.onclick = function(event) {
  if (event.target == myModal) {
    myModal.style.display = "none";
  }
}