document.getElementById('categorie').addEventListener('change', function() {
    // Récupérer la valeur sélectionnée
    var selectedOption = this.options[this.selectedIndex];
    // Récupérer la classe de l'option sélectionnée
    var selectedZoneClass = selectedOption.className;

    // Supprimer toutes les classes de surbrillance de l'image
    document.getElementById('stade-image').classList.remove('highlight');

    // Ajouter la classe de surbrillance correspondante à l'image
    document.getElementById('stade-image').classList.add(selectedZoneClass);
});
