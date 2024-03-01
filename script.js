$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
 });

function validateForm() {
    var Mdepasse = document.getElementById("psw").value;
    var email = document.getElementById("email").value;
    // Ajoutez d'autres champs et leur validation ici

    if (Mdepasse == "" || email == "") {
        alert("Veuillez remplir tous les champs du formulaire.");
        return false;
    }
    // Ajoutez d'autres conditions de validation au besoin

    return true;
}

