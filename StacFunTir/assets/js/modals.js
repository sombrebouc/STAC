
// Chargement du DOM avant le lancement de la page
window.addEventListener('DOMContentLoaded', function(){
    // fonction click sur le bouton start
    document.querySelector('#shooterpage').addEventListener('click', function(e){
        e.preventDefault();
        // ouverture de la modale de connection
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
        // ouverture de la modale de connection
        var myModal = new bootstrap.Modal(document.getElementById('eventModal'), 'show');
        console.log(myModal);
        myModal.show()
});
});

// Chargement du DOM avant le lancement de la page
window.addEventListener('DOMContentLoaded', function(){
    // fonction click sur le bouton event
    document.querySelector('#memberslist').addEventListener('click', function(e){
        e.preventDefault();
        // ouverture de la modale de connection
        var myModal = new bootstrap.Modal(document.getElementById('membersListModal'), 'show');
        console.log(myModal);
        myModal.show()
});
});

// Chargement du DOM avant le lancement de la modal
window.addEventListener('DOMContentLoaded', function(){
    // fonction click sur le bouton connection
    document.querySelector('#connectBtn').addEventListener('click', function(e){
        e.preventDefault();
        // ouverture de la modale de connection
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
        // ouverture de la modale de connection
        var myModal = new bootstrap.Modal(document.getElementById('signupModal'), 'show');
        console.log(myModal);
        myModal.show()
});
});
