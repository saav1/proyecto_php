@extends('layout')

@section('title', 'Algoritmos')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Principal</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Algoritmos</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="principal-section">

    @include('algoritmos.sidebar')

        <div class="container-info">
            <h1 class="stylish-heading">Análisis y Diseño de Algoritmos</h1>
            <p>Una definición para <strong>Algoritmo</strong> podria ser: Un conjunto ordenado 
            y finito de operaciones que nos permiten hallar la solución a un problema. En el campo 
            de la computación un algoritmo funciona correctamente cuando termina en un tiempo determinado 
            (no se cuelga) y devuelve un resultado correcto.
            <br><br>
            Hay dos maneras de plantear la solución a un problema mediante algoritmos: 
            <br>&nbsp;&nbsp; <b>- Fuerza bruta</b>. Cuando los algoritmos solo nos solucionan un problema y no se 
            pueden generalizar, es decir, que no nos sirven para resolver otros problemas.
            <br>&nbsp;&nbsp; <b>- Paradigmas</b>. Es la manera correcta para diseñar algoritmos. Se utiliza metodologías,
            esquemas, estrategias, etc. Esto nos permite reutilizar los algoritmos, adaptarlos a diferentes problemas,
            y por cada instanciación de un esquema general se obtiene un algoritmo diferente.  A la larga, nos va ahorrar
            trabajo y problemas.
            <p><br><b>¿Por qué es importante estudiar y analizar los algoritmos?</b> Hay muchas cosas 
            a tener en cuenta a la hora de programar, como la interfaz (lo que va a ver el usuario), 
            la seguridad, el mantenimiento y la eficiencia. En la <strong>enficiencia</strong> es 
            donde tener algoritmos bien diseñados y pensados nos van a ser necesarios. Diseñar los algoritmos, antes de ponerse a escribir
            código, hará que el código sea más claro, esté mejor estructurado, sea fácil de usar y sobretodo que sea más eficiente.
            <br><br><b>¿Por qué preocuparse por la eficiencia?</b> Sobretodo por que hará que nuestro
            programa (app, web, videojuego, etc.) vaya mucho mas rápido. A nadie le gusta esperar. Imaginemos
            por un momento una página web que tarda en cargar las páginas, un editor de imágenes que tarda mucho 
            en aplicar filtros o un videojuego que en cargar la partida tarda demasiado, los tres ejemplos cumplen
            con su objetivo. Pero si no lo hacen con el suficiente rendimiento que esperan los usuarios NO sirven.
            <br><br><b>¿Como saber que algoritmo es más eficiente?</b> Entendemos por eficiencia de un algoritmo 
            la cantidad de <b>recursos</b> de cómputo que requiere, es decir, cuál es su <b>tiempo de ejecución</b> y qué
            <b>cantidad de memoria utiliza</b>. 
            <br>&nbsp; &nbsp; <b>-</b> El tiempo que tarda un algoritmo en resolver un problema se le llama: <b> coste en tiempo</b>. 
            <br>&nbsp; &nbsp; <b>-</b> A la cantidad de memoria que un algoritmo utiliza se le llama: <b> coste espacial </b>. 
            <br>Por lo tanto, el algoritmo más eficiente será el que tarde menos en ejecutarse y el que utilize menos memoria.
            

            </p>

            <div class="centralbar">
                @include('algoritmos.centralbar_1')
                @include('algoritmos.centralbar_2')


            </div>


        </div>

    @include('algoritmos.sidebar')

    </div>


@endsection