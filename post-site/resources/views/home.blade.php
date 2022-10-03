@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="sb-sidenav-footer">
                @auth
                <div class="small">Hello..<a href="" class="p-3">{{ auth()->user()->name }}</a></div>
                @endauth
                <h1 class="mt-6">Welcome to the Admin panal in <strong>UNIKEY GLOBAL</strong></h1>
            </div> 
        </div>
    </div>
@endsection