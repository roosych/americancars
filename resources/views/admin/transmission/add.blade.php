@extends('layouts.admin')

@section('content')

    <div class="col-lg-12">
        <div class="row">
            <div class="col-12">
                <a href="{{route('transmissions')}}" class="btn btn-primary mb-4"><i class="ri-arrow-left-line mr-2"></i>Transmissiya növləri</a>
            </div>
        </div>
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Əlavə et</h5>
            </div>


            <form action="{{route('transmission.store')}}" method="POST">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="">AZ</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title_az">
                        @if($errors->has('title_az'))
                            <p class="text-danger">{{ $errors->first('title_az') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">RU</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title_ru">
                        @if($errors->has('title_ru'))
                            <p class="text-danger">{{ $errors->first('title_ru') }}</p>
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