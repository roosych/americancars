@extends('layouts.app')

@section('title', '404')

@section('content')
    <!-- main content -->
    <main class="main main--sign" data-bg="{{asset('img/bg/bg.png')}}">
        <!-- error -->
        <div class="page-404">
            <div class="page-404__wrap">
                <div class="page-404__content">
                    <h1 class="page-404__title">404</h1>
                    <p class="page-404__text">Axtardığınız səhifə tapılmadı!</p>
                    <a href="{{route('index')}}" class="page-404__btn"><span>Əsas səhifə</span></a>
                </div>
            </div>
        </div>
        <!-- end error -->
    </main>
    <!-- end main content -->
@endsection