@extends('layouts.admin')

@section('content')
    <!-- Basic Card Example -->
    @include('admin.components.errors')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Fan Tahrirlash
            </h6>
            <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.subject.index') }}">Orqaga</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.subject.update', $subject->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Fan</label>
                    <input class="form-control" value="{{ $subject->name }}" name="name" type="text">
                </div>
                <button type="submit" class="btn btn-success">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
