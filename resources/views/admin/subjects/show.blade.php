@extends('layouts.admin')

@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Fan
            </h6>
            <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.subject.index') }}">Orqaga</a>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Fan nomi</label>
                <input class="form-control" value="{{ $subject->name }}" name="name" type="text" readonly >
            </div>
        </div>
    </div>
@endsection
