@extends('layouts.admin')

@section('content')
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Avtomobillər</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive m-b-30">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Avtomobil</th>
                                <th scope="col">VİN</th>
                                <th scope="col">Qiymət</th>
                                <th scope="col">Yaradılıb</th>
                                <th scope="col">Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cars as $car)
                                <tr>
                                    <th scope="row">{{ $cars->firstItem() + $loop->index }}</th>
                                    <td><a href="{{route('car.show', $car)}}">{{$car->brand->title}} {{$car->carmodel->title}} {{$car->year}}</a></td>
                                    <td>{{$car->vin}}</td>
                                    <td>{{$car->price}} {{$car->currency == 1 ? '₼' : '$'}}</td>
                                    <td>{{$car->created_at->format('d m Y')}}</td>
                                    <td>{{$car->active ? 'Aktiv' : 'Deaktiv'}}</td>
                                    <td>
                                        <div class="float-right">
                                            <a href="" class="btn btn-dark-rgba"><i class="ri-image-fill"></i></a>
                                            <a href="" class="btn btn-success-rgba"><i class="ri-pencil-line"></i></a>
                                            <button class="btn btn-danger-rgba cat-delete-button" data-id="1"><i class="ri-delete-bin-3-line"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{$cars->links()}}

                    </div>

                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
@endsection