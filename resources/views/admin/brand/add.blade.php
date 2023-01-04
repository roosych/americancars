@extends('layouts.admin')

@section('content')

    <div class="col-lg-12">
        <div class="row">
            <div class="col-12">
                <a href="{{route('brands')}}" class="btn btn-primary mb-4"><i class="ri-arrow-left-line mr-2"></i>Brendlər</a>
            </div>
        </div>
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Əlavə et</h5>
            </div>


            <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <ul class="nav nav-tabs custom-tab-line mb-3" id="defaultTabLine" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab-line" data-toggle="tab" href="#main_info" role="tab" aria-controls="main_info" aria-selected="true">Əsas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab-line" data-toggle="tab" href="#seo_info" role="tab" aria-controls="seo_info" aria-selected="false">SEO</a>
                    </li>
                </ul>
                <div class="tab-content" id="defaultTabContentLine">
                    <div class="tab-pane fade active show" id="main_info" role="tabpanel" aria-labelledby="home-tab-line">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Avtomobil brendinin adı</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                            @if($errors->has('title'))
                                <p class="text-danger">{{ $errors->first('title') }}</p>
                            @endif
                        </div>


                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Fayl seçin</label>
                            </div>
                        </div>
                        <p class="text-warning">Şəkilin ölçüləri <b>350x150</b>px, format <b>.png</b>, maksimum <b>2MB</b> tövsiyyə olunur</p>

                        <div class="form-group form-check mt-3">
                            <input type="hidden" name="active" value="0">
                            <input type="checkbox" class="form-check-input" name="active" value="1" id="exampleCheck1" {{ old('active') ? 'checked="checked"' : '' }}>
                            <label class="form-check-label" for="exampleCheck1">Aktiv olsun?</label>
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