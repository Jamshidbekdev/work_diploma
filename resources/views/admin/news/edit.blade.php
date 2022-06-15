@extends('layouts.admin')
@section('content')
    <!-- Basic Card Example -->
    @include('admin.components.errors')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">
                Yangiliklarni tahrirlash!
            </h5>
            <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.news.index') }}">Back</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.news.update',$item) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Mavzu</label>
                    <input class="form-control" name="title" value="{{ $item->title }}"  type="text">
                </div>
                <img class="rounded w-200 img-thumbnail" src = "{{ $item->getImage() }}">
                <div class="form-group">
                    <label for="">Rasm</label>
                    <input class="form-control" name="img" type="file" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="">Qisacha malumot</label>
                    <input class="form-control" name="short" value="{{ $item->short }}" type="text">
                </div>
                <div class="form-group">
                    <label for="">Malumot</label>
                    <textarea name="desc" id="" class="form-control" cols="30" rows="10">{{ $item->desc }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
