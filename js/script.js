

document.addEventListener('DOMContentLoaded', () => {
    
    const deleteCheckButtons = document.querySelectorAll('.deleteCheck');
    console.log(deleteCheckButtons);
    
    // 2. Parcourir chaque bouton trouvé
    deleteCheckButtons.forEach(button => {
        // La div parente qui contient la vérification (classe 'admin')
        const adminDiv = button.closest('.admin'); 
        
        // 3. Masquer initialement la vérification (sauf le bouton deleteCheck lui-même)
        // On sélectionne tous les éléments SAUF le lien .deleteCheck
        const confirmationElements = adminDiv.querySelectorAll(':scope > *:not(.deleteCheck)');
        
        // On ajoute une classe pour masquer l'ensemble de la vérification
        // C'est plus propre de le faire via CSS (voir section CSS)
        adminDiv.classList.add('hidden-confirmation'); 

        // 4. Ajouter l'écouteur d'événement au clic sur 'Supprimer le commentaire'
        button.addEventListener('click', (event) => {
            event.preventDefault(); // Empêche l'action par défaut du lien (le '#')
            
            // Basculer l'affichage : enlever la classe 'hidden-confirmation'
            adminDiv.classList.remove('hidden-confirmation');
            
            // Masquer le bouton initial de suppression (deleteCheck)
            // On le fait disparaître pour éviter un nouveau clic/bug
            button.style.display = 'none';
        });
        
        // 5. Gérer le bouton "Non" (Annuler)
        const stopButton = adminDiv.querySelector('.stop');
        if (stopButton) {
            stopButton.addEventListener('click', (event) => {
                event.preventDefault(); // Empêche l'action par défaut du lien
                
                // Masquer à nouveau la vérification
                adminDiv.classList.add('hidden-confirmation');
                
                // Afficher à nouveau le bouton initial
                button.style.display = ''; // Rétablit l'affichage par défaut
            });
        }
    });

    // 6. Vérification générale : s'assurer qu'il y a des éléments .admin sur la page
    if (deleteCheckButtons.length === 0) {
        // console.log("Aucune div .admin ou lien .deleteCheck trouvée sur la page.");
        // Pas d'action si rien n'est trouvé.
    }
});