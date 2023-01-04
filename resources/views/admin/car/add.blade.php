@extends('layouts.admin')

@section('content')

    <div class="col-lg-12">

        <div aria-live="polite" aria-atomic="true" style="">
            <div class="toast" aria-live="assertive" aria-atomic="true" data-delay="4000" style="position: absolute; top: 0; right: 0;">
                <div class="toast-header">
                    <strong class="mr-auto">Xəta</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body text-danger">
                    Şəkil əlavə edilməyib!
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="{{route('cars')}}" class="btn btn-primary mb-4"><i class="ri-arrow-left-line mr-2"></i>Avtomobillər</a>
            </div>
        </div>
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Əlavə et</h5>
            </div>
            @if($errors->any())
                {!! implode('', $errors->all()) !!}
            @endif
            <form action="{{route('car.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <ul class="nav nav-tabs custom-tab-line mb-3" id="defaultTabLine" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-line" data-toggle="tab" href="#main_info" role="tab" aria-controls="main_info" aria-selected="true">Əsas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-line" data-toggle="tab" href="#car_photos" role="tab" aria-controls="car_photos" aria-selected="false">Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-line" data-toggle="tab" href="#seo_info" role="tab" aria-controls="seo_info" aria-selected="false">SEO</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="defaultTabContentLine">
                        <div class="tab-pane fade active show" id="main_info" role="tabpanel" aria-labelledby="home-tab-line">

                            <div class="form-row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="brand_id">Brend</label>
                                        <select class="form-control @error('brand_id') is-invalid @enderror" id="brand_id" name="brand_id">
                                            <option value="">Siyahıdan seçin</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{ucfirst($brand->title)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="carmodel_id">Model</label>
                                        <select class="form-control @error('carmodel_id') is-invalid @enderror" id="carmodel_id" name="carmodel_id" disabled>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="year">Buraxılış ili</label>
                                    <select class="form-control @error('year') is-invalid @enderror" id="year" name="year">
                                        <option value="">Siyahıdan seçin</option>
                                        @for ($i = now()->year; $i > 1999; $i--)
                                            <option {{ old('year') == $i ? "selected" : "" }} value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-4">
                                    <label for="vin">VİN</label>
                                    <input type="text" class="form-control @error('vin') is-invalid @enderror" id="vin" name="vin" value="{{ old('vin') }}">
                                </div>
                                <div class="col-4">
                                    <label for="mileage_total">Yürüş</label>
                                    <input type="text" class="form-control @error('mileage_total') is-invalid @enderror" id="mileage_total" name="mileage_total" value="{{ old('mileage_total') }}">
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="mileage">Yürüş növü</label>
                                        <select class="form-control @error('mileage') is-invalid @enderror" id="mileage" name="mileage">
                                            <option value="">Siyahıdan seçin</option>
                                            <option {{ old('mileage') == 1 ? "selected" : "" }} value="1">km</option>
                                            <option {{ old('mileage') == 2 ? "selected" : "" }} value="2">ml</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="engine">Mühərrikin həcmi (sm<sup>3</sup>)</label>
                                        <select class="form-control @error('engine') is-invalid @enderror" id="engine" name="engine">
                                            <option value="">Siyahıdan seçin</option>
                                            @for ($i = 0; $i < 8000; $i+=100)
                                                <option {{ old('engine') == $i ? "selected" : "" }} value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="transmission_id">Sürətlər qutusu</label>
                                        <select class="form-control @error('transmission_id') is-invalid @enderror" id="transmission_id" name="transmission_id">
                                            <option value="">Siyahıdan seçin</option>
                                            @foreach($transmissions as $transmission)
                                                <option {{ old('transmission_id') == $transmission->id ? "selected" : "" }} value="{{$transmission->id}}">{{ucfirst($transmission->title_az)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="drive_id">Ötürücü</label>
                                        <select class="form-control @error('drive_id') is-invalid @enderror" id="drive_id" name="drive_id">
                                            <option value="">Siyahıdan seçin</option>
                                            @foreach($drives as $drive)
                                                <option {{ old('drive_id') == $drive->id ? "selected" : "" }} value="{{$drive->id}}">{{ucfirst($drive->title_az)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="fuel_id">Yanacaq növü</label>
                                        <select class="form-control @error('fuel_id') is-invalid @enderror" id="fuel_id" name="fuel_id">
                                            <option value="">Siyahıdan seçin</option>
                                            @foreach($fuels as $fuel)
                                                <option {{ old('fuel_id') == $fuel->id ? "selected" : "" }} value="{{$fuel->id}}">{{ucfirst($fuel->title_az)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="price">Qiymət</label>
                                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="currency">Valyuta</label>
                                        <select class="form-control @error('currency') is-invalid @enderror" id="currency" name="currency">
                                            <option value="">Siyahıdan seçin</option>
                                            <option {{ old('currency') == 1 ? 'selected' : '' }} value="1">₼</option>
                                            <option {{ old('currency') == 2 ? 'selected' : '' }} value="2">$</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="available_id">Mövcudluq</label>
                                        <select class="form-control @error('available_id') is-invalid @enderror" id="available_id" name="available_id">
                                            <option value="">Siyahıdan seçin</option>
                                            @foreach($availables as $available)
                                                <option {{ old('available_id') == $available->id ? "selected" : "" }} value="{{$available->id}}">{{ucfirst($available->title_az)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea id="" cols="30" rows="5" class="form-control" name="description">
                                 </textarea>
                            </div>

                            <div class="form-group form-check mt-3">
                                <input type="hidden" name="active" value="0">
                                <input type="checkbox" class="form-check-input" name="active" value="1" id="exampleCheck1" {{ old('active') ? 'checked="checked"' : '' }}>
                                <label class="form-check-label" for="exampleCheck1">Aktiv olsun?</label>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="car_photos" role="tabpanel" aria-labelledby="profile-tab-line">
                            <div class="col-12">
                                <div class="input-field">
                                    <div class="input-images"></div>
                                </div>
                                <p class="text-warning mt-3">Şəkilin ölçüləri <b>645x440</b>px, format <b>.png</b>, maksimum <b>2MB</b> tövsiyyə olunur</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seo_info" role="tabpanel" aria-labelledby="profile-tab-line">
                            <div class="form-group">
                                <label for="">Metatitle</label>
                                <input type="text" class="form-control @error('metatitle') is-invalid @enderror" name="metatitle" value="{{old('metatitle')}}">
                                @if($errors->has('metatitle'))
                                    <p class="text-danger">{{ $errors->first('metatitle') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Metadescription</label>
                                <input type="text" class="form-control @error('metadescription') is-invalid @enderror" name="metadescription" value="{{old('metadescription')}}">
                                @if($errors->has('metadescription'))
                                    <p class="text-danger">{{ $errors->first('metadescription') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Keywords</label>
                                <input type="text" class="form-control @error('keywords') is-invalid @enderror" name="keywords" value="{{old('keywords')}}">
                                @if($errors->has('keywords'))
                                    <p class="text-danger">{{ $errors->first('keywords') }}</p>
                                @endif
                            </div>
                        </div>
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

@push('scripts')
    <script>
        $('#brand_id').on('change', function () {
            var brand_id = this.value;
            $("#carmodel_id").html('').prop('disabled', false);
            $.ajax({
                url: "{{route('fetch.carmodel')}}",
                type: "POST",
                data: {
                    brand_id: brand_id,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    //console.log(result.carmodels);
                    $('#carmodel_id').html('<option value="">Siyahıdan seçin</option>');
                    $.each(result.carmodels, function (key, value) {
                        $("#carmodel_id").append('<option value="' + value
                            .id + '">' + value.title + '</option>');
                    });
                }
            });
        });
    </script>
    <script src="https://agciceyim.az/template/backend/assets/js/custom/image-uploader.min.js"></script>
    <script>
        $('.input-images').imageUploader();

        @if($errors->has('images'))
            @foreach ($errors->all() as $error)
                $('.toast').toast('show');
            @endforeach
        @endif

    </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="https://agciceyim.az/template/backend/assets/css/image-uploader.min.css">
@endpush