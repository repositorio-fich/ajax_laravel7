<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <h2>Laravel 7</h2>

    <form method="POST" action="#">
        @csrf
        <div class="row">
            <div class="col s6">
                <input type="hidden" name="id_usuario" id="id_usuario" value="" required>
                <div class="input-field col s12 m7">
                    <label for="buscar">Buscar C.I.:</label>
                    <input type="text" name="buscar" id="buscar">
                </div>
                <div class="input-field col s12 m12">
                    <input style="text-align: center" type="text" name="usuario" id="usuario" disabled>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script>
        $(function (){
            $('#buscar').keyup( function(e){
                let ticket=$('#buscar').val();
                /*
                if($('#buscar_te').val()) {   //verifica que el el campo no esté vacío
                    e.preventDefault();
                    let nombre = $('#buscar_te').val();
                    $('#nombre_te').val('');
                    $.ajax({
                        url: '/encomienda/buscar/',
                        type: 'GET',
                        async: true,
                        data: {
                            id: nombre,
                            _token: $('input[name="_token"]').val()
                        },
                        success: function (response){
                            if(response==0){
                                console.log('No llego nada');
                            }else{
                                var datas = JSON.parse(response);
                                datas.forEach(data => {
                                    let nombre_encomienda = "Encomienda: "+data.nombre+" "+data.precio_unit;
                                    $('#id_tipo_encomienda').val(data.id);
                                    $('#nombre_te').val(nombre_encomienda);
                                    $('#total').val(data.precio_unit);
                                })
                            }
                        },
                        error: function (error){
                        },
                    })
                }
                 */
            })
        });

    </script>
</body>
</html>
