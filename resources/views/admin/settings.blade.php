@extends('layouts.admin')

@section('content')

    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Məlumatlar</h5>
            </div>

            <div class="col-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

            <form action="{{route('settings.update')}}" method="POST">
                @method('PUT')
                @csrf
                <div class="card-body">

                    <div class="form-row">
                        <div class="col-12">
                            <label for="facebook">Mobil nömrə 1</label>
                            <div class="input-group mb-3">
                                <input type="text" name="phone1" value="{{$setts->phone1}}" class="form-control" id="facebook" aria-describedby="phone1">
                            </div>
                        </div>

{{--                        <div class="col-12">
                            <label for="facebook">Mobil nömrə 2</label>
                            <div class="input-group mb-3">
                                <input type="text" name="phone2" value="{{$setts->phone2}}" class="form-control" id="facebook" aria-describedby="phone2">
                            </div>
                        </div>--}}

                        <div class="col-12">
                            <label for="facebook">WhatsApp nömrəsi</label>
                            <div class="input-group mb-3">
                                <input type="text" name="whatsapp" value="{{$setts->whatsapp}}" class="form-control" id="whatsapp" aria-describedby="whatsapp">
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="facebook">Facebook səhifəsi</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="facebook">https://facebook.com/</span>
                                </div>
                                <input type="text" name="facebook" value="{{$setts->facebook}}" class="form-control" id="facebook" aria-describedby="facebook">
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="facebook">Instagram səhifəsi</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="instagram">https://instagram.com/</span>
                                </div>
                                <input type="text" name="instagram" value="{{$setts->instagram}}" class="form-control" id="instagram" aria-describedby="instagram">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Yadda saxla</button>
                        </div>
                    </div>
                </div>



            </form>

        </div>
    </div>
@endsection