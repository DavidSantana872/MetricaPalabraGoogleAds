
<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Proyecto Laravel')</title>
    <!-- Agrega tus enlaces a CSS aquí -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <script>
        $(document).ready(() => {
            $.ajax({
            url: '/api/resultado',
            type: 'GET',
            success: function(response) {
                let valor = $("#tituloFormulario").text()
                $("#tituloFormulario").text(valor + response.mensaje)
                var respuestas = JSON.parse(response.respuesta);

                respuestas.forEach((respuesta, index) => {
                    index === 0 ? null : $("#datos_analisis").append($(`<x-estadistica conteo_busqueda=${respuesta.approximately} mes_busqueda=${respuesta.month} anio_busqueda=${respuesta.year}></x-estadistica>`));
                });
                $("#Loader").hide()
            },
            error: function(xhr, status, error) {
                $("#Loader").hide()
            }
        });
        })
    </script>




    <div class="caja_principal">
        <x-header DescripcionFormulario="Resultado para "> </x-header>

        <div id="datos_analisis">
            <x-estadistica conteo_busqueda=13234 mes_busqueda="MAYO" anio_busqueda="2024"></x-estadistica>
        </div>

        <div id="Loader" class="div_loader" style="display: block">
            <x-loader informacion_proceso="Consultando Estadisticas..."></x-loader>
        </div>

    </div>
</body>
</html>