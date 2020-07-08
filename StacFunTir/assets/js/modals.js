// Chargement du DOM avant le lancement de la modal
window.addEventListener('DOMContentLoaded', function(){

    document.querySelector('#connectBtn').addEventListener('click', function(e){
        e.preventDefault();

        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), 'show');
        console.log(myModal);
        myModal.show()
});
});

