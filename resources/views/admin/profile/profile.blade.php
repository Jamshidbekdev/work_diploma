@extends('layouts.admin')
@section('content')
    @include('admin.components.errors')
    @include('admin.components.alerts')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">
                Foydalanuvchi
            </h5>
            <p>
                <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.dashboard') }}">Orqaga</a>
            </p><br>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-3">
                        <img class="rounded-circle w-100 img-thumbnail" src = "{{ $user->getImage() }}">
                        <div class="form-group pretty-file-selector">
                            <input class="form-control-file d-none" type="file" accept="image/*" name="img">
                            <button type="button" class="btn btn-outline-primary btn-block mt-2">
                                <i class="fa fa-image"></i> Rasm tanlash
                            </button>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label for="">Ismi</label>
                            <input class="form-control" name="name" value="{{ $user->name }}" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" name="email" type="mail" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="">Parol</label>
                            <input class="form-control" name="password" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Parolni tasdiqlash</label>
                            <input class="form-control" name="password_confirmation" type="text">
                        </div>
                        <button type="submit" class="btn btn-success">Saqlash</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
