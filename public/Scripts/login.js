$(document).on('submit', '#login-form', function (event) {
    event.preventDefault();
    $.ajax({
        url: '/login-validate',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function () {
            $('.loading-gear').html('<br><div class="loading"><img src="images/large-ajax-loader.gif" alt="loading" /><br/>Validando</div>');
        }
    })
        .done(function (respuesta) {
            debugger;
            if (!respuesta.validation) {
                if (respuesta.tipo == 'Administrador') {
                    $('.loading').fadeIn(3000).html(respuesta);
                    location.href = '/inicio';
                } else {
                    if (respuesta.tipo == '');
                    location.href = '/login';
                }
            } else {
                $('.error').slideDown('slow');
                setTimeout(function () {
                    $('.loading-gear').fadeIn(3000).html(respuesta);
                    $('.error').slideUp('slow');
                }, 3000);
                $('.login').val('Iniciar sesión');
                $('.loading-gear').fadeOut(3000).html(respuesta);
            }
        })
        .fail(function (resp) {
            console.log(resp.responseText);
        })
        .always(function () {
            console.log("complete");
        });
});