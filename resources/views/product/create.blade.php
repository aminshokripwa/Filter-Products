@extends('layouts.app')
@section('title', 'add new items')
@section('content')
        <div class="col-md-12 card">
            <form
                action="{{route('store-products')}}"
                class="card-body"
                method="post"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="form-group">
                    <h5>please select an excel file </h5>
                </div>
                <div class="form-group my-2">
                    <input
                        type="file"
                        name="file"
                        accept=".xlsx,.xls"
                        class="form-control @error('file') is-invalid @enderror"
                    >
                </div>
                <x-error-message :field="'file'"></x-error-message>
                <div class="form-group my-2">
                    <input
                        type="submit"
                        class="btn btn-primary form-control"
                        value="save products"
                    >
                </div>
                <x-message></x-message>
            </form>
        </div>
@endsection
