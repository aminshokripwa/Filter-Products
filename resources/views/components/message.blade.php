@push('scripts')
    <script src="{{asset('js/message.js')}}"></script>
@endpush
@if(session()->has('success'))
    <div
        class="col-md-6 bg-success mw-100 bg-opacity-75 text-white fixed-bottom my-2 p-1 rounded message-area"
        style="transition: margin-left 1s"
    >
        {{session('success')}}
    </div>
@endif
@if(session()->has('failed'))
    <div
        class="col-md-6 bg-danger mw-100 bg-opacity-75 text-white fixed-bottom my-2 p-1 rounded message-area"
        style="transition: margin-left 1s"
    >
        {{session('failed')}}
    </div>
@endif
