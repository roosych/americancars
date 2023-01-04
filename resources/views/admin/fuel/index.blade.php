@extends('layouts.admin')

@section('content')

    <div class="col-lg-12">
        <div class="row">
            <div class="col-12">
                <a href="{{route('fuel.add')}}" class="btn btn-primary mb-4"><i class="ri-add-line mr-2"></i>Əlavə et</a>
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
                <h5 class="card-title">Yanacaq növləri</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive m-b-30">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Aze</th>
                            <th scope="col">Rus</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($fuels as $fuel)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$fuel->title_az}}</td>
                                <td>{{$fuel->title_ru}}</td>
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