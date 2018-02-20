window.addEventListener("load", function() {
  $(document.body).on("click", "#admin_menu a", function(evt) {

    //Retire la classe "active" du dernier menu actif
    $("#admin_menu").find("a.active").removeClass("active");

    //Mets le menu actif en bleu
    $(this).addClass("active");

    switch($(this).attr("id")) {
      case "usagers" :
        $.ajax({
          url: "usagers",
          method: "POST",
          success: function(reponse) {
            console.log(reponse);
          }
        });
      break;

      case "annonces" :
        $.ajax({
          url: "annonces",
          method: "POST",
          success: function(reponse) {
            console.log(reponse);
          }
        });
      break;

      case "statistiques" :
        $.ajax({
          url: "statistiques",
          method: "POST",
          success: function(reponse) {
            console.log(reponse);
          }
        });
      break;

      case "arrondissements" :
        $.ajax({
          url: "arrondissements",
          method: "POST",
          success: function(reponse) {
            console.log(reponse);
          }
        });
      break;

      case "moyensDePaiements" :
        $.ajax({
          url: "moyensDePaiements",
          method: "POST",
          success: function(reponse) {
            console.log(reponse);
          }
        });
      break;
    }
  });
});