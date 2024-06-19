$(document).ready(function() {
    $(document).on("click", ".modifier-btn", function() {
        var equipementId = $(this).data("id");
        var equipementType = $(this).data("type");

        console.log("Modifier bouton cliqué : ID =", equipementId, ", Type =", equipementType);

        $.ajax({
            url: "modif.php",
            method: "GET",
            data: { id: equipementId, type: equipementType },
            success: function(response) {
                console.log("Réponse du serveur :", response);
                $("#modal-body").html(response);
                $("#myModal").modal("show");
            },
            error: function(xhr, status, error) {
                console.error("Erreur lors de la requête AJAX :", status, error);
            }
        });
    });

    $(document).on("submit", "#modifForm", function(event) {
        event.preventDefault();
        var formData = $(this).serialize();

        console.log("Formulaire de modification soumis avec les données :", formData);

        $.ajax({
            url: "modif.php",
            method: "POST",
            data: formData,
            success: function(response) {
                console.log("Réponse du serveur après soumission du formulaire :", response);
                $("#myModal").modal("hide");
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error("Erreur lors de la soumission du formulaire :", status, error);
            }
        });
    });

    $(document).on("click", ".supprimer-btn", function() {
        var equipementId = $(this).data("id");
        var equipementType = $(this).data("type");

        console.log("Supprimer bouton cliqué : ID =", equipementId, ", Type =", equipementType);

        if (confirm("Êtes-vous sûr de vouloir supprimer cet équipement ?")) {
            $.ajax({
                url: "suppr.php",
                method: "POST",
                data: { id: equipementId, type: equipementType },
                success: function(response) {
                    console.log("Réponse du serveur après suppression :", response);
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error("Erreur lors de la requête AJAX de suppression :", status, error);
                }
            });
        }
    });
});
