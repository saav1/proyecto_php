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
            <span>Vuelta Atrás</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="principal-section">

    @include('algoritmos.sidebar')

        <div class="container-info">
            <h1 class="stylish-heading">Estrategia Vuelta Atrás</h1>
            <p>
                <b>Backtracking</b> o Vuelta Atrás es una técnica para resolver problemas de forma recursiva. 
                Se basa en la idea de <b>generar todas las soluciones posibles</b> a un problema. 
                <br> <br> La generación de las posibles soluciones se hace incrementalmente, paso a paso.
                Comprobando cada componente, si un componente <b>no</b> cumple con las restricciones, <b>se elimina</b>. 
                Al final tendremos un conjunto de soluciones (cumplen con el objetivo), de las cuales elegiremos la mejor (solución óptima).
                <br><br>Las soluciones generadas se clasifican en dos grupos: 
                <br> &nbsp;&nbsp;<b>- Soluciones Fáctibles</b>. Satisfacen las restriciones del problema.
                <br> &nbsp;&nbsp;<b>- Solución Óptima</b>. La que además de solucionar el problema y 
                cumplir con las restricciones, es la mejor solución. 
                <br> <br> Puede ser que se de casos donde haya más de 
                una solución óptima, es decir, que dos soluciones sean igual de buenas. 
               
                <br> <br> Para poder aplicar esta técnica, el problema dado debe tener un <b> conjunto de soluciones 
                finito</b>, de no ser así, el algoritmo se quedaría "colgado" por que buscaría infinitas soluciones.
                
                <br><br>Esquema general Vuelta Atrás en pseudocódigo:
            </p>

            <code>
    fun solucionBack( Problema problema ){
        solucion mejorSolucion = factible_solucion(n);
        backtracking( nodoInicial(problema) , mejorSolucion );
        return mejorSolucion;
    }

    fun algoritmoBacktraking( Nodo nodo, solucion &mejorSolucion ){
        if( esHoja(nodo) ){
            if( esMejor( solucionBack(nodo), mejorSolucion ) ){
                mejorSolucion = solucion(nodo);
            }
            return;
        }

        for( Nodo aux : expande(nodo) ){
            if( esFactible(aux) && esPrometedor(aux) ){
                algoritmoBacktraking(aux, mejorSolucion);
            }
        }
    }
            </code>





            <div class="centralbar">
                @include('algoritmos.centralbar_1')
                @include('algoritmos.centralbar_2')
            </div>
        </div>

    @include('algoritmos.sidebar')

    </div>


@endsection