@extends('layouts.app')

@section('title')
    {{ __('index.title') }} | {{ __('index.h1') }}
@endsection

@section('content')
    <main class="main">

        <div class="container">
            <div class="row row--grid">
                <!-- title -->
                <div class="col-12">
                    <div class="main__title main__title--page">
                        <h1>{{ __('index.h1') }}</h1>
                    </div>
                </div>
                <!-- end title -->

                <!-- filter -->
{{--                <div class="col-12">
                    <div class="main__filter">
                        <form action="#" class="main__filter-search">
                            <input type="text" placeholder="Axtar...">
                            <button type="button" aria-label="Axtar"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg></button>
                        </form>

                        <div class="main__filter-wrap">
                            <select class="main__select" name="status">
                                <option value="relevance">Relevance</option>
                                <option value="new">Newest</option>
                                <option value="old">Oldest</option>
                            </select>
                            <label for="brands"></label>
                            <select class="main__select" id="brands" name="">
                                <option value="Bütün modellər">Bütün modellər</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>--}}
                <!-- end filter -->
            </div>
            <!-- partners -->

            <div class="row">
                <div class="col-12">
                    <div class="partners splide my-4" id="partners-slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach($brands as $brand)
                                    <li class="splide__slide">
                                        <a href="{{route('brand', $brand)}}" class="partners__img">
                                            <img src="/storage/{{$brand->image}}" alt="{{$brand->title}}">
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end partners -->
            <!-- cars -->
            <section class="row row--grid">

                @each('components.car_card', $cars, 'car')

            </section>
            <!-- end cars -->



            <!-- paginator -->
            <div class="row row--grid">
                <div class="col-12">
                    {{$cars->links('vendor.pagination.front')}}
                </div>
            </div>
            <!-- end paginator -->
        </div>

    </main>
@endsection