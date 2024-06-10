$(document).on("click", ".modifier-btn", function() {
    var equipementId = $(this).data("id");
    var equipementType = $(this).data("type");
    $.ajax({
        url: "modif.php",
        method: "POST",
        data: { id: equipementId, type: equipementType },
        success: function(response) {
            $("#modal-body").html(response);
            $("#myModal").modal("show");
        }
    });
});

$(document).on("click", ".supprimer-btn", function() {
    var equipementId = $(this).data("id");
    var equipementType = $(this).data("type");
    $.ajax({
        url: "suppr.php",
        method: "POST",
        data: { id: equipementId, type: equipementType },
        success: function(response) {
            alert(response);
            location.reload();
        }
    });
});

$(document).on("submit", "#modifForm", function(event) {
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
        url: "modif.php",
        method: "POST",
        data: formData,
        success: function(response) {
            $("#myModal").modal("hide");
            location.reload();
        }
    });
});
