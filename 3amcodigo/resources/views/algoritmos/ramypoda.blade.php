@extends('layout')

@section('title', 'Algoritmos')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Principal</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <a href="/algoritmos">Algoritmos</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <a href="/algoritmos/estrategia">Estrategias</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Ramificación y Poda</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="principal-section">

    @include('algoritmos.sidebar')

        <div class="container-info">
            <h1 class="stylish-heading">Estrategia Ramificación y Poda</h1>
            <p>
            Es una variante de la estrategia <b> Vuelta Atrás </b>. 
            <br>
            <b>Ramificación y Poda</b> realiza una enumeración parcial del espacio de soluciones mediante la generación de un 
            árbol de expansión. La gran diferencia es que también usa <b> cotas para podar </b> las ramas que no son de interés.
            <br>
            Un <b> nodo vivo </b> es aquel nodo con posibilidades de ser ramificado (visitado pero no expandido).
            Los nodos vivos se almacenan en estructuras que faciliten su recorrido y eficiencia de la búsqueda: 
            <br> &nbsp; - Una Pila. LIFO.
            <br> &nbsp; - Una Cola. FIFO.
            <br> &nbsp; - Cola de Prioridad. Primero el más prometedor.
            <br><br><br>
            <b>Funcionamiento por etapas: </b>
            <br> &nbsp; <b>1.</b> Partimos de un nodo inicial del árbol.
            <br> &nbsp; <b>2.</b> Se asigna una solución pesimista (soluciones voraces).
            <br> &nbsp; <b>3.</b> Selección.
            <br> &nbsp; &nbsp; &nbsp; <b>3.1.</b>Extracción del nodo a expandir del conjunto de nodos vivos.
            <br> &nbsp; &nbsp; &nbsp; <b>3.2.</b> La elección depende de la estrategia empleada.
            <br> &nbsp; &nbsp; &nbsp; <b>3.3.</b>Se actualiza la mejor solución con las nuevas soluciones encontradas.
            <br> &nbsp; <b>4.</b> Ramificación.
            <br> &nbsp; &nbsp; &nbsp; <b>4.1.</b> Se exapande el nodo seleccionado en la etapa anterior dando lugar al conjunto 
            de sus nodos hijos.
            <br> &nbsp; <b>5.</b> Poda
            <br> &nbsp; &nbsp; &nbsp;<b>5.1.</b> Se eliminan (podan) nodos que no contribuyen a la solución.
            <br> &nbsp; &nbsp; &nbsp;<b>5.1.</b>El resto de nodos se añaden al conjunto de nodos vivos.
            <br> &nbsp;<b>6.</b> El algoritmo finaliza cuando se agota el conjunto de nodos vivos.

            <br><br><br>
            <b>Proceso de poda: </b>
            <br>
            <b>Cota Optimista: </b> Estima a mejor. 
            <br>El mejor valor que podría alcanzarse al expandir el nodo.
            <br>Puede que no haya ninguna solución factible que alcanze ese valor. 
            <br>Normalmente se obtienen relajando las restricciones del problema.
            <br>Si la cota optimista de un nodo es peor que la solución en curso, se puede podar el nodo.
            <br>
            <b>Cota Pesimista: </b> Estima a peor.
            <br>Ha de asegurar que existe una solución factible con un valor mejor que la cota.
            <br>Normalmente se obtienen mediante soluciones voraces del problema. 
            <br>Se puede eliminar un nodo si su cota optimista es peor que la mejor cota pesimista. 
            <br>Permite poda aún antes de haber encontrado una solución factible. 
            
            <br>
            <br>
            <br>
            Cuanto mas ajustadas sean las cotas, más podas se producirán.

            <br><br><br>
            <b>Características: </b>
            <br>
            Las estrategias pueden proporcionar: 
            <br> Todas las soluciones factibles.
            <br> Una solución al problema.
            <br> La solución óptima al problema.
            <br> Las n mejores soluciones.

            <br>
            El objetivo de esta técnica es mejorar la eficiencia en la exploración del espacio de nombres.
            <br>

            <br><br><br>
            <b>Objetivo de esta técnica: </b>
            <br>
            Mejorar la eficiencia en la exploración del espacio de soluciones.
            </p>

            <br><br><br>
            <b>Desventajas/Necesidades: </b>
            <br>
            <br>Encontrar una buena cota optimista. Problema relajado.
            <br>Encontrar una buena solución pesimista. Estrategias voraces.
            <br>Encontrar una buena estrategia de exploración. Como ordenar.
            <br>Mayor requerimiento de memoria que los algoritmos de Vuelta Atrás. 
            <br>Las complejidades en el peor caso suelen ser muy altas.
            
            <br><br><br>
            <b>Ventajas: </b>
            <br>
            Suelen ser más rápidos que Vuelta Atrás. 


            <br><br><br>
            Para saber si un nodo es prometedor, se compara la cota optimista del nodo con la mejor solución hasta 
            el momento. Mejor cota pesimista encontrada hasta el momento. 
            <br>
             


            <code>

            </code>



            <div class="centralbar">
                @include('algoritmos.centralbar_1')
                @include('algoritmos.centralbar_2')
            </div>
        </div>

    @include('algoritmos.sidebar')

    </div>


@endsection