// Sélectionnez tous les boutons "See More"
const moreInfoButtons = document.querySelectorAll('.btn-link.more');

// Ajoutez un gestionnaire d'événements à chaque bouton
moreInfoButtons.forEach(button => {
  button.addEventListener('click', function(event) {
    event.stopPropagation(); // Empêche la propagation du clic vers le document

    // Récupérez l'ID de la description associée à partir des attributs de données
    const descriptionId = this.getAttribute('data-description');
    const descriptionOverlay = document.getElementById(`description-${descriptionId}`);

    // Basculez les classes d'animation
    if (!descriptionOverlay.classList.contains('fade-in')) {
      descriptionOverlay.classList.add('fade-in');
      descriptionOverlay.classList.remove('fade-out');
    } else {
      descriptionOverlay.classList.remove('fade-in');
      descriptionOverlay.classList.add('fade-out');
    }
  });
});

// Ajoutez un gestionnaire d'événements au document pour fermer la description lors du clic en dehors
document.addEventListener('click', function(event) {
  const descriptions = document.querySelectorAll('.descriptionoverlay');
  descriptions.forEach(description => {
    if (description.classList.contains('fade-in') &&
        !description.contains(event.target)) {
      description.classList.remove('fade-in');
      description.classList.add('fade-out');
    }
  });
});
