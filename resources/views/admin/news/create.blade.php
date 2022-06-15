@extends('layouts.admin')
@section('content')
    <!-- Basic Card Example -->
    @include('admin.components.errors')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Yangilik qo'shish
            </h6>
            <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.news.index') }}">Orqaga</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Mavzu</label>
                    <input class="form-control" name="title" required type="text">
                </div>
                <div class="form-group">
                    <label for="">Rasm</label>
                    <input class="form-control" name="img" type="file" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="">Qisqacha malumot</label>
                    <input class="form-control" name="short" type="text">
                </div>
                <div class="form-group">
                    <label for="">Malumot</label>
                    <textarea name="desc" id="" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Yuborish</button>
            </form>
        </div>
    </div>
@endsection
