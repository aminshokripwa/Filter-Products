@extends('layouts.app')
@section('title', 'products')
@push('styles')
    <link rel="stylesheet" href="{{asset('jq-ui/jquery-ui.css')}}">
@endpush
@push('scripts')
    <script src="{{asset('jq-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('js/range-slider.js')}}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
@endpush
@section('content')
    <div class="card mb-4 container">
        <form
            action="/"
            method="get"
            class="row card-body"
        >
            <div class="col-md-6">
                <p class="my-2 border-bottom">storage range</p>
                <input type="text" value="{{request('storage')}}" name="storage" id="amount" readonly style="border:0; font-weight:bold;">
                <div id="slider-range"></div>
            </div>
            <div class="col-md-6">
                <p class="my-2 border-bottom">RAM</p>
                @foreach([2,4,8,12,16,24,32,48,64,96,128] as $ram)
                    <x-ram-checkbox :ram="$ram"></x-ram-checkbox>
                @endforeach
            </div>
            <div class="col-md-6">
                <p class="my-2 border-bottom">Harddisk type</p>
                <select name="hard" id="" class="form-control">
                    <option value="">select an option</option>
                    <option value="SAS" @if(request('hard') == 'SAS') selected @endif>SAS</option>
                    <option value="SATA" @if(request('hard') == 'SATA') selected @endif>SATA</option>
                    <option value="SSD" @if(request('hard') == 'SSD') selected @endif>SSD</option>
                </select>
            </div>
            <div class="col-md-6">
                <p class="my-2 border-bottom">Location</p>
                <select name="location" class="form-control">
                    <option value="">select an option</option>
                    @foreach($locations as $location)
                        <option value="{{$location}}" @if(request('location') == $location) selected @endif>{{$location}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <input type="submit" class="btn btn-primary my-2 form-control" value="filter results">
            </div>
            <div class="col-md-3">
                <a href="{{route('index')}}" class="my-2 btn btn-warning">reset filters</a>
            </div>
        </form>
    </div>
    @auth()
        @if(count($products))
            <div class="card container mb-4">
                <form action="{{route('delete-all')}}" class="card-body row" method="post">
                    @csrf
                    <div class="col-md-6">
                        <input type="button" class="btn btn-danger delete-all-btn" value="delete all records">
                        <input type="submit" class="delete-all d-none">
                    </div>
                </form>
            </div>
        @endif
    @endauth
    <div class="col-md-12 card px-2 container" style="overflow: scroll;">
        @if($products->count())
        <table class="card-body table table-striped table-borderless table-hover table-responsive text-center mw-100">
            <thead>
                <tr>
                    <th>Model</th>
                    <th>RAM</th>
                    <th>HDD</th>
                    <th>Location</th>
                    <th>Price</th>
                    @auth()
                        <th></th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="align-middle">{{$product->model}}</td>
                        <td class="align-middle">{{$product->ram}}</td>
                        <td class="align-middle">{{$product->hdd}}</td>
                        <td class="align-middle">{{$product->location}}</td>
                        <td class="align-middle">{{$product->price . ' ' . $product->unit}}</td>
                        @auth()
                            <td class="align-middle">
                                <form action="{{route('delete', $product->id)}}">
                                    <input type="submit" class="btn btn-sm btn-danger" value="delete">
                                </form>
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <div class="card-body text-center mx-2">
                no products available
            </div>
        @endif
        <div class="mx-auto">
            {{$products->links('vendor/pagination/bootstrap-4')}}
        </div>
        <x-message></x-message>
    </div>
@endsection
