@extends('layouts.app')
@section('title', 'profile')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">
                        <h6>change username :</h6>
                        <form action="{{route('change-username')}}" class="row w-100" method="post">
                            @csrf
                            <div class="form-group col-md-5 my-2">
                                <input type="text" value="{{auth()->user()->email}}" name="username" placeholder="new username" class="form-control @error('username') is-invalid @enderror">
                                <x-error-message :field="'username'"></x-error-message>
                            </div>
                            <div class="form-group col-md-2 my-2">
                                <input type="submit" class="btn btn-primary" value="change username">
                            </div>
                        </form>
                        <hr>
                        <h6>change password :</h6>
                        <form action="{{route('change-password')}}" class="row w-100" method="post">
                            @csrf
                            <div class="form-group col-md-6 my-2">
                                <input type="password" name="password" placeholder="password" class="form-control @error('password') is-invalid @enderror">
                                <x-error-message :field="'password'"></x-error-message>
                            </div>
                            <div class="form-group col-md-6 my-2">
                                <input type="password" name="new_password" placeholder="new password" class="form-control @error('new_password') is-invalid @enderror">
                                <x-error-message :field="'new_password'"></x-error-message>
                            </div>
                            <div class="form-group col-md-6 my-2">
                                <input type="password" name="new_password_confirmation" placeholder="confirm new password" class="form-control @error('new_password_confirmation') is-invalid @enderror">
                                <x-error-message :field="'new_password_confirmation'"></x-error-message>
                            </div>
                            <div class="form-group col-md-2 my-2">
                                <input type="submit" class="btn btn-primary" value="change password">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-message></x-message>
    </div>
@endsection
