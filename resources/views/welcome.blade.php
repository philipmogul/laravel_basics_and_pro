@extends('layouts.index_default')

@section('laraheader')
    <h1> WELCOME TO: CRUD-MASTER! </h1>
@endsection

@section('laracontent')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">Welcome</div>

                    <div class="row">
                        <hr />
                        <h2>
                        Welcome to our application! Please login or register to continue.
                        </h2>
                        <hr />
                        <div>
                            <img src="{{ asset('images/ROG STRIX G16 MAIN.png') }}" alt="Products" />
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('larafooter')
    <h3> Footer Section </h3>
@endsection


