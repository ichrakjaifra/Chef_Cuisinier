// Récupération des éléments
const openModal = document.getElementById("openModal");
const modal = document.getElementById("modal");
const closeModal = document.getElementById("closeModal");

// Ouvrir la modale
openModal.addEventListener("click", function(event) {
  event.preventDefault(); // Empêche le lien par défaut
  modal.style.display = "block";
});

// Fermer la modale
closeModal.addEventListener("click", function() {
  modal.style.display = "none";
});

// Fermer la modale en cliquant en dehors
window.addEventListener("click", function(event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});
