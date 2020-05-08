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
            <span>Análisis</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="algoritmos-section container">

    @include('algoritmos.sidebar')

        <div>
            <h1 class="stylish-heading">Análisis de algoritmos</h1>
            <p>Los algoritmos nos sirven para resolver problemas</p>
            <code>
    #include &ltstdl&gt
    #include 

    int main()
    {

    }
            
            </code>
            <p>Resultado</p>
            <pre>

[Fri May  8 13:09:15 2020] 127.0.0.1:47342 [200]: /css/app.css
[Fri May  8 13:09:15 2020] 127.0.0.1:47346 [200]: /css/responsive.css
[Fri May  8 13:09:15 2020] 127.0.0.1:47352 [200]: /images/purple-bg.svg?f16e837103683268cec6fab2c76935f5

            </pre>
        </div>

    </div>




@endsection