@extends('layout')

@section('title', __('trans.titleProfile',['name' => isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email]) )

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-2 left-menu">
            @if(Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
                {!! menu('Spelcialists','bootstrap') !!}
            @endif
        </div>
        <div class="col-lg-10 content-home">
            <div class="container">
                <h1>{{ __("trans.filter-requests") }}</h1>
                <form id="filter-request" method="post">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="city"><strong>{{ __('trans.city') }}</strong></label>
                                <select name="city" id="city" class="form-control">
                                    <option value="1">Moscú</option>
                                    <option value="2">Sant Petersburgo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="service"><strong>{{ __('trans.select-serv') }}</strong></label>
                                <select name="city" id="service" class="form-control">
                                    <option value="0">{{ __('trans.services.select-service') }}</option>
                                    <option value="1">{{ __('trans.services.dance-class') }}</option>
                                    <option value="2">{{ __('trans.services.spanish-class') }}</option>
                                    <option value="3">{{ __('trans.services.english-class') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="place"><strong>{{ __('trans.place.title') }}</strong></label>
                                <select name="city" id="service" class="form-control">
                                    <option value="0">{{ __('trans.place.any') }}</option>
                                    <option value="1">{{ __('trans.place.client') }}</option>
                                    <option value="2">{{ __('trans.place.specialist') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="place"><strong>{{ __('trans.metro') }}</strong></label>
                                <select name="city" id="service" class="form-control">
                                    <option value="0">{{ __('trans.place.any') }}</option>
                                    <option value="1">{{ __('trans.place.client') }}</option>
                                    <option value="2">{{ __('trans.place.specialist') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="results-search">
                    <h2>{{ __("trans.results") }}</h2>
                    @for ($i = 0; $i < 5; $i++)
                        <div class="res">
                            <div class="res__content">
                                <p>Maria</p>
                                <div class="price">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <p>
                                                <span><strong>{{ __("trans.price") }}: </strong>900р/ч</span>
                                                <span><strong>{{ __("trans.metro") }}: </strong>Киевская</span>
                                            </p>
                                            <p>
                                                <span><strong>{{ __("trans.address") }}: </strong></span>
                                            </p>
                                        </div>
                                        <div class="col-lg-2 text-center">
                                            <a href=""><i class="fa fa-envelope-open"></i> <p>{{ __("trans.view-order") }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
