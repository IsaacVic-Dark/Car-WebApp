@extends('layouts.clean')
@section('childContent')
    @include('layouts.partials.header')
    @yield('content')

    @hasSection()
    <footer>
        @section('footerLinks')
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
        @show
    </footer>
    @endif
@endsection
