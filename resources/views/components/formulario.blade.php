
<link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
<div class="caja_principal">
    <form  id="Formulario">
        <x-header DescripcionFormulario="¡Bienvenido! Si deseas observar las métricas históricas de una palabra, Inserta tu palabra y presiona buscar"> 

        </x-header>
        <div class="div_main_buscador">
            <div class="buscador">
                <input required  placeholder="Inserta la palabra" class="entrada_formulario" type="text" id="palabra_formulario" >
                <button id="buscar" type="submit" class="btn_buscar">Buscar</button>
            </div>
          
        </div>
    </form>
    <div id="Loader" class="div_loader" style="display: none">
        <x-loader informacion_proceso="Consultando Estadisticas..."></x-loader>
    </div>
</div>
<script>
    $("#Formulario").submit(
        function(event) {
            event.preventDefault();
            // Peticion 
        
            var palabra = $('#palabra_formulario').val();
            $("#Loader").show()

            // Petición AJAX
            $.ajax({
                url: '/api/procesar-estadistica',
                type: 'POST',
                data: {
                    palabra_formulario: palabra,
                    _token: '{{ csrf_token() }}' 
                },
            
                success: function(response) {
                    
                    $("#Loader").hide()
                    window.location.href = "/resultado"

                },
                error: function(xhr, status, error) {
                    $("#Loader").css("background-color", "red")
                
                    
                }
            });
        }

    )
</script>