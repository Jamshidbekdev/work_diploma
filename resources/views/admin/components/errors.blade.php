@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops Something went wrong !</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close alertdanger" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@push('css')
    <style>
        .alertdanger {
            position: absolute;
            top: 50%;
            right: 2%;
            transform: translate(0, -50%);
        }

    </style>
@endpush
