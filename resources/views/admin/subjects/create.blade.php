@extends('layouts.admin')
@section('content')
    <!-- Basic Card Example -->
    @include('admin.components.errors')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Fan qo'shish
            </h6>
            <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.subject.index') }}">Orqaga</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.subject.store') }}">
                @csrf
                <div class="form-group">
                    <label for="">Fan</label>
                    <input class="form-control" name="name" type="text">
                </div>
                <button type="submit" class="btn btn-success">Yuborish</button>
            </form>
        </div>
    </div>
@endsection
