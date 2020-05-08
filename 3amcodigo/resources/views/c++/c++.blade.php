@extends('layout')

@section('title', 'Algoritmos')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
        <a href="/">Principal</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>C++</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="algoritmos-section container">
        <div class="sidebar">
            <h3><a href="/algoritmos">C++</a></h3>
            <ul>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
            </ul>
        </div>

        <div>
            <h1 class="stylish-heading">C++</h1>
            <p>Los algoritmos nos sirven para resolver problemas</p>
            <code>
    #include &ltstdl&gt
    #include 

    int main()
    {
        //Escribe tú código aquí
    }
            
            </code>
            <p>Resultado:</p>

            <pre>

    [Fri May  8 13:09:15 2020] 127.0.0.1:47342 [200]: /css/app.css
    [Fri May  8 13:09:15 2020] 127.0.0.1:47346 [200]: /css/responsive.css
    [Fri May  8 13:09:15 2020] 127.0.0.1:47352 [200]: 

            </pre>
        </div>

    </div>




@endsection