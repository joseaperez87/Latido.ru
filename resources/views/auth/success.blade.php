@extends('../layout')

@section('content')
    <div class="registration-success">
        <h1 class="text-center"><i class="fa  fa-check-double text-success"></i> {{ __("trans.registration-success") }}</h1>
        <p>{{ __("trans.registration-success-text") }}</p>
    </div>
@endsection