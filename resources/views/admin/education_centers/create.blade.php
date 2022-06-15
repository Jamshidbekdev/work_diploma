@extends('layouts.admin')
@section('content')
    <!-- Basic Card Example -->
    @include('admin.components.errors')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                O'quv markaz qo'shish
            </h6>
            <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.education.index') }}">Orqaga</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.education.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nomi</label>
                    <input class="form-control" name="name" required type="text">
                </div>
                <div class="form-group">
                    <label for="">Logo</label>
                    <input class="form-control" name="img" type="file" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="">O'qishga topshirganlar soni</label>
                    <input class="form-control" name="all" type="number">
                </div>
                <div class="form-group">
                    <label for="">O'qishga budget asosida qabul qilingganlar soni</label>
                    <input class="form-control" name="grand" type="number">
                </div>
                <div class="form-group">
                    <label for="">O'qishga shartnoma asosida qabul qilingganlar soni</label>
                    <input class="form-control" name="contract" type="number">
                </div>
                <div class="form-group">
                    <label for="">Manzil</label>
                    <input class="form-control" required name="address" type="text">
                </div>
                <div class="form-group">
                    <label for="">Telefon raqami</label>
                    <input class="form-control" required name="phone" type="number">
                </div>
                <div class="form-group">
                    <label for="my-subjects">Fanlar</label>
                    <select multiple="multiple" name="subjects[]" id="subjects" class="form-control" required>
                        <option value="" class="">No Select</option>
                        @foreach (DB::table('subjects')->get() as $value)
                            <option value="{{ $value->id }}" class="">{{ $value->name }}</option>
                        @endforeach;
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Qisqacha malumot</label>
                    <textarea name="desc" id="" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Yuborish</button>
            </form>
        </div>
    </div>
@endsection
