$(document).ready(function(){
    $("#formulario").on('submit', function (event) {
        if (parseInt($('#precio_publico').val()) <= parseInt($('#precio_interno').val())) {
            MENSAJE = "El precio publico no puede ser menor al precio interno verifique los datos";
            $("#cost").html(MENSAJE);
            $("#cost_message").modal('show');
        } else if (parseInt($('#precio_publico').val()) > 1000000) { //Validamos que no se exceda el precio en ambos valores publico e interno
            alert("Esta excediendo el precio que es de 1.000.000");
        } else if ((parseInt($('#precio_interno').val()) > 1000000)) {
            alert("Esta excediendo el precio que es de 1.000.000");
        } else {
            //Enviamos los datos a la basde de Datos
            debugger;
            $.ajax({
                url: '/insert_libros',
                type: 'POST',
                dataType: 'json',
                data: {
                    codigo: $('#codigo').val(),
                    autor: $('#autor').val(),
                    nombre_libro: $('#nombre_libro').val(),
                    fecha_expedicion: $('#fecha_expedicion').val(),
                    disponibilidad: $('#disponibilidad').val(),
                    precio_publico: $('#precio_publico').val(),
                    precio_interno: $('#precio_interno').val(),
                    reservado: $('#reservado').val(),
                    cantidad: $('#cantidad').val(),
                    id_categoria: $('#id_categoria').val()
                },
                //Traemos la respuesta de retorno en caso de que los datos se guarden correctamente en formato json
                success: function (response) {
                    if (response.success == true) {
                        MENSAJE = response.message;
                        $("#message").html(MENSAJE);
                        $("#success_message").modal('show');
                        //Invocar funcion limpiar
                        limpiar();
                    }
                },
                error: function () {
                    debugger;
                    alert("Verifique el codigo del libro e intente de nuevo");
                }
            });
        }
        // return false;
        event.preventDefault();
    
    
        function limpiar() {
    
            $('#codigo').val('');
            $('#autor').val('');
            $('#nombre_libro').val('');
            $('#fecha_expedicion').val('');
            $('#disponibilidad').prop('selectedIndex', 0);
            $('#precio_publico').val('');
            $('#precio_interno').val('');
            $('#reservado').val('');
            $('#cantidad').val('');
        }
    
    });
});