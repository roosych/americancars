@extends('layouts.admin')

@section('content')

    <div class="col-lg-12">
        <div class="row">
            <div class="col-12">
                <a href="{{route('carmodels')}}" class="btn btn-primary mb-4"><i class="ri-arrow-left-line mr-2"></i>Modellər</a>
            </div>
        </div>
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Əlavə et</h5>
            </div>


            <form action="{{route('carmodel.store')}}" method="POST">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="brand_id">Brend</label>
                        <select class="form-control" id="brand_id" name="brand_id">
                            <option value="0">Brend seçin</option>
                            @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{ucfirst($brand->title)}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Model</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                        @if($errors->has('title'))
                            <p class="text-danger">{{ $errors->first('title') }}</p>
                        @endif
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Əlavə et</button>
                        </div>
                    </div>
                </div>



            </form>

        </div>
    </div>
@endsection