@extends('layout')

@section('title', __('trans.create-order') )

@section('content')
    <section class="create-order">
        <h1 class="text-center">{{ __("trans.create-order") }} </h1>
        <form method="post" action="">
            <div class="row">
                <div class="col-lg-4">
                    <h3>{{ __("trans.select-service") }}</h3>
                    <div class="form-group">
                        <select class="form-control" name="service" id="sel1">
                            <option value="0">{{ __('trans.services.select-service') }}</option>
                            <option value="1">{{ __('trans.services.dance-class') }}</option>
                            <option value="2">{{ __('trans.services.spanish-class') }}</option>
                            <option value="3">{{ __('trans.services.english-class') }}</option>
                        </select>
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-6">
                    <h3>{{ __("trans.select-place") }}</h3>
                    <!-- Group of default radios - option 1 -->
                    <div class="custom-control custom-radio">
                        <input type="radio" value="1" class="custom-control-input" id="any" checked name="place_id[]">
                        <label class="custom-control-label" for="any">{{ __("trans.places.any") }}</label>
                    </div>
                    <!-- Group of default radios - option 2 -->
                    <div class="custom-control custom-radio">
                        <input type="radio" value="2" class="custom-control-input" id="client" name="place_id[]">
                        <label class="custom-control-label" for="client">{{ __("trans.places.client") }}</label>
                    </div>
                    <!-- Group of default radios - option 3 -->
                    <div class="custom-control custom-radio">
                        <input type="radio" value="3" class="custom-control-input" id="specialist" name="place_id[]">
                        <label class="custom-control-label" for="specialist">{{ __("trans.places.specialist") }}</label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h3>{{ __("trans.price") }}</h3>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2 col-sm-6">
                            <div class="form-group">
                                <label for="price" class="control-label"><strong>{{ __("trans.price") }}</strong></label>
                                <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="form-group">
                                <label for="time" class="control-label"><strong>{{ __("trans.time") }}</strong></label>
                                <select name="time" class="form-control">
                                    <option value="1">45</option>
                                    <option value="2">60</option>
                                    <option value="3">90</option>
                                    <option value="4">120</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h3>{{ __("trans.address") }}</h3>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="custom-control custom-radio col-lg-2 col-sm-4">
                                <input type="radio" value="metro" class="custom-control-input" id="metro" name="address[]" checked>
                                <label class="custom-control-label" for="metro">{{ __("trans.metro") }}</label>
                            </div>
                            <div class="custom-control custom-radio col-lg-2 col-sm-4">
                                <input type="radio" value="map" class="custom-control-input" id="selmap" name="address[]">
                                <label class="custom-control-label" for="selmap">{{ __("trans.map") }}</label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 address-metro">
                            <div class="form-group">
                                <label for="place"><strong>{{ __('trans.metro') }}</strong></label>
                                <select name="metro" id="service" class="form-control">
                                    <option value="0">{{ __('trans.place.any') }}</option>
                                    <option value="1">Киевская</option>
                                    <option value="2">Савёловская</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 address-map">
                            <div id="address-map">

                            </div>
                        </div>
                        <div class="offset-lg-8 col-lg-4 col-sm-12 text-right">
                            <button type="button" class="btn btn-primary">{{ __('trans.send') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection

@section('js')
    @parent
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
    <script src="{{ asset('js/yandex.maps.js') }}"></script>
@endsection