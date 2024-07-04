
<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Google Ads Consumer')</title>
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
                $("#Loader").hide()
                let valor = $("#tituloFormulario").text()
                $("#tituloFormulario").text(valor + response.mensaje)
                let respuestas = JSON.parse(response.respuesta);
                let valor_mayor = 0 
                respuestas.forEach((respuesta, index) => {
                    if (index != 0) {
                        if (valor_mayor < respuesta.approximately){
                            valor_mayor = respuesta.approximately
                        }
                    }
            
                });
                $("#busqueda_mensual").text(respuestas[0].approximate_monthly_searches)
                $("#Nivel").text(respuestas[0].competition_level)
                $("#Indice").text(respuestas[0].competition_index)
                $("#RangoBajo").text(respuestas[0].low_range_micros)
                $("#RangoAlto").text(respuestas[0].high_range_micros)

                respuestas.forEach((respuesta, index) => {
                    index === 0 ? null : $("#datos_analisis").append($(`<x-estadistica tamanio_barra=${(respuesta.approximately/valor_mayor)*100} conteo_busqueda=${respuesta.approximately} mes_busqueda=${respuesta.month} anio_busqueda=${respuesta.year}></x-estadistica>`));
            
                });
               
            },
            error: function(xhr, status, error) {
                $("#Loader").hide()
            }
        });
        })
    </script>




    <div class="bloque_resultados_view">
        <x-header DescripcionFormulario="Resultado para la palabra "> </x-header>
<br>
<br>
        <div id="datos_analisis">
           
        </div>

        <div id="Loader" class="div_loader" style="display: block, width : 100vw;  height: 100vh">
            <x-loader informacion_proceso="Consultando Estadisticas..."></x-loader>

        </div>
        <br>
        <br>
        <div class="caja_descripciones_varias">
            <div class="busquedas_mensuales">
                <p class="titulo_descripciones_varias">
                    Búsquedas mensuales aproximadas
                </p>
                <p id="busqueda_mensual" class="mensual_busqueda_valor">
                    
                </p>
            </div>
            <div class="box">
                <div class="informacion_varia_generica">
                    <p class="titulo_descripciones_varias">
                        Nivel de competición
                    </p>
                    <p id="Nivel" class="valor_descripcion_varia">
                        0
                    </p>
                </div>
                <div class="informacion_varia_generica">
                    <p class="titulo_descripciones_varias">
                        Índice de competencia
                    </p>
                    <p  id="Indice"  class="valor_descripcion_varia">
                        0
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="informacion_varia_generica">
                    <p class="titulo_descripciones_varias">
                        Rango bajo de oferta
                    </p>
                    <p id="RangoBajo"  class="valor_descripcion_varia">
                        0
                    </p>
                </div>
                <div class="informacion_varia_generica">
                    <p class="titulo_descripciones_varias">
                        Rango alto de oferta
                    </p>
                    <p id="RangoAlto"  class="valor_descripcion_varia">
                        0
                    </p>
                </div>
            </div>

        </div>

    </div>
</body>
</html>