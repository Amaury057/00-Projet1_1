
function SuppChaussons() {
    var selectBox = document.getElementById("types");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    var taillesChaussons = document.getElementById("tailles_chaussons");
    var OptionChaussonsSupp = document.getElementById("OptionChaussonsSupp");

    if (selectedValue === "chaussons") {
        taillesChaussons.style.display = "block";
        OptionChaussonsSupp.style.display = "block";
    } else {
        taillesChaussons.style.display = "none";
        OptionChaussonsSupp.style.display = "none";
    }
}

function SuppCordes() {
    var selectBox = document.getElementById("types");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    var taillesCordes = document.getElementById("tailles_cordes");
    var OptionCordesSupp = document.getElementById("OptionCordesSupp");

    if (selectedValue === "cordes") {
        taillesCordes.style.display = "block";
        OptionCordesSupp.style.display = "block";
    } else {
        taillesCordes.style.display = "none";
        OptionCordesSupp.style.display = "none";
    }

}

function SupppCordes() {
    var selectBox = document.getElementById("types");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    var diametreCordes = document.getElementById("diametre_cordes");
    var OptionCordesSuppp = document.getElementById("OptionCordesSuppp");

    if (selectedValue === "cordes") {
        diametreCordes.style.display = "block";
        OptionCordesSuppp.style.display = "block";
    } else {
        diametreCordes.style.display = "none";
        OptionCordesSuppp.style.display = "none";
    }

}

function SuppPrix() {
    var selectBox = document.getElementById("types");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    var prixInput = document.getElementById("prix");
    var OptionPrixSupp = document.getElementById("OptionPrixSupp");

    if (selectedValue === "chaussons" || selectedValue === "cordes") {
        prixInput.style.display = "block";
        OptionPrixSupp.style.display = "block";
    } else {
        prixInput.style.display = "none";
        OptionPrixSupp.style.display = "none";
    }
}

// Récupérer le lien "Ajouté un équipement" par son ID
var ajoutEquipementLink = document.getElementById("ajoutEquipement");

// Fonction pour afficher le formulaire
function showForm() {
    // Sélectionner le formulaire par son ID
    var formEquipement = document.getElementById("formEquipement");
    // Afficher le formulaire
    formEquipement.style.display = "block";
}

// Ajouter un événement onclick au lien pour appeler la fonction showForm
ajoutEquipementLink.addEventListener("click", showForm);

$(document).ready(function() {
    // Lorsque le document est prêt
    $("#ajoutEquipement").click(function(event) {
        event.preventDefault(); // Empêche le comportement par défaut du lien
        $(".inventaire_section").load("addequip.php"); // Charge dynamiquement le contenu de addequip.php dans la section inventaire
    });
});
