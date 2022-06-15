@extends('layouts.admin')

@section('content')
    <div class="container input-group mb-3">
    </div>
    @foreach ($items as $item)
        <div class="row">
            <div class="container">
                <a href="{{ route('admin.education.show',$item->id) }}">
                    <h4 class="primary">{{ $item->name }}</h4>
                </a>
                <h6 class="danger">{{ $item->address }}</h6>
            </div>
        </div>
    @endforeach
@endsection
