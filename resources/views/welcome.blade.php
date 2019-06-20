@extends('layout')

@section('title', __('trans.title') )

@section('content')
    <div class="search">
        <h1>{{ __('trans.search-title') }}</h1>
        <form class="search-specialist" method="post">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <div class="form-group">
                            <select class="form-control" id="sel1">
                                <option value="0">{{ __('trans.services.select-service') }}</option>
                                <option value="1">{{ __('trans.services.dance-class') }}</option>
                                <option value="2">{{ __('trans.services.spanish-class') }}</option>
                                <option value="3">{{ __('trans.services.english-class') }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1">
                    <div class="form-group">
                        <button class="btn btn-primary" type="button">{{ __("trans.search") }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="services-city">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <h2> {{ __('trans.services-city-head') }}</h2>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <select name="cities" id="cities" class="form-control">
                            <option value="1">Moscú</option>
                            <option value="2">Sant Petersburgo</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <a href="#">
                    <img src="{{ asset("images/services/imagen-espanol.jpg") }}" alt="">
                    <p>{{ __("trans.service-name",['name' => "Español", "cant" => 150]) }}</p>
                </a>
            </div>
            <div class="col-lg-4 text-center">
                <a href="#">
                    <img src="{{ asset("images/services/baile.png") }}" alt="">
                    <p>{{ __("trans.service-name",['name' => "Baile", "cant" => 150]) }}</p>
                </a>
            </div>
            <div class="col-lg-4 text-center">
                <a href="#">
                    <img src="{{ asset("images/services/english.png") }}" alt="">
                    <p>{{ __("trans.service-name",['name' => "Inglés", "cant" => 150]) }}</p>
                </a>
            </div>
        </div>
    </div>
@endsection