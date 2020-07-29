
// Chargement du DOM avant le lancement de la page
window.addEventListener('DOMContentLoaded', function(){
    // fonction click sur le bouton start
    document.querySelector('#shooterpage').addEventListener('click', function(e){
        e.preventDefault();
        // ouverture de la modale de funtir
        var myModal = new bootstrap.Modal(document.getElementById('shooterModal'), 'show');
        console.log(myModal);
        myModal.show()
});
});

// Chargement du DOM avant le lancement de la page
window.addEventListener('DOMContentLoaded', function(){
    // fonction click sur le bouton event
    document.querySelector('#eventspage').addEventListener('click', function(e){
        e.preventDefault();
        // ouverture de la modale d'event
        var myModal = new bootstrap.Modal(document.getElementById('eventModal'), 'show');
        console.log(myModal);
        myModal.show()
});
});

// Chargement du DOM avant le lancement de la page
//window.addEventListener('DOMContentLoaded', function(){
//    // fonction click sur le bouton membres
//    document.querySelector('#memberslist').addEventListener('click', function(e){
//        e.preventDefault();
//        // ouverture de la modale de membres
//        var myModal = new bootstrap.Modal(document.getElementById('membersListModal'), 'show');
//        console.log(myModal);
//        myModal.show()
//});
//});

// Chargement du DOM avant le lancement de la modal
window.addEventListener('DOMContentLoaded', function(){
    // fonction click sur le bouton connexion
    document.querySelector('#connectBtn').addEventListener('click', function(e){
        e.preventDefault();
        // ouverture de la modale de connexion
        var myModal = new bootstrap.Modal(document.getElementById('connectModal'), 'show');
        console.log(myModal);
        myModal.show()
});
});

// Chargement du DOM avant le lancement de la modal
window.addEventListener('DOMContentLoaded', function(){
    // fonction click sur le bouton inscription
    document.querySelector('#signupBtn').addEventListener('click', function(e){
        e.preventDefault();
        // ouverture de la modale de inscription
        var myModal = new bootstrap.Modal(document.getElementById('signupModal'), 'show');
        console.log(myModal);
        myModal.show()
});
});

// Chargement du DOM avant le lancement de la modal
window.addEventListener('DOMContentLoaded', function(){
    // fonction click sur le bouton confirmation du nombre de cibles
    document.querySelector('#targetList').addEventListener('click', function(e){
        e.preventDefault();
        // ouverture de la modale de confirmation du nombre de cibles
        var myModal = new bootstrap.Modal(document.getElementById('targetListModal'), 'show');
        console.log(myModal);
        myModal.show()
});
});


