@extends('main')

@section('main.content')
    <div>
        <div>
            @include('components.navbar')
        </div>
        <div>
            @yield('base.content')
        </div>
        <div>
            @include('components.footer')
        </div>
    </div>
@endsection
