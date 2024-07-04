@props(['conteo_busqueda', 'mes_busqueda', 'anio_busqueda', "tamanio_barra"])
<div class="bloque_barra">
    <p>{{$conteo_busqueda}}</p>
    <div class="barra" style="height: calc({{ $tamanio_barra }}px *2)"></div>
    <p class="Linea">{{$mes_busqueda}}</p>
    <p>{{$anio_busqueda}}</p>
</div>