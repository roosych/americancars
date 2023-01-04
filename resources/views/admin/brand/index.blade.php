@extends('layouts.admin')

@section('content')

    <div class="col-lg-12">
        <div class="row">
            <div class="col-12">
                <a href="{{route('brand.add')}}" class="btn btn-primary mb-4"><i class="ri-add-line mr-2"></i>Yeni brend</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Avtomobil brendləri</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive m-b-30">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Logo</th>
                            <th scope="col">Brend</th>
                            <th scope="col">URL</th>
                            <th scope="col">Model sayı</th>
                            <th scope="col">Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td><img src="/storage/{{$brand->image}}" width="60"></td>
                                <td>{{$brand->title}}</td>
                                <td>/{{$brand->slug}}</td>
                                <td>{{$brand->carmodels->count()}}</td>
                                <td>{{$brand->active ? 'Aktiv' : 'Deaktiv'}}</td>
                                <td>
                                    <div class="float-right">
                                        <a href="" class="btn btn-success-rgba"><i class="ri-pencil-line"></i></a>
                                        <button class="btn btn-danger-rgba cat-delete-button" data-id="1"><i class="ri-delete-bin-3-line"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection