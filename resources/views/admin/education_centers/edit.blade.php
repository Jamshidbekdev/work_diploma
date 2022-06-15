@extends('layouts.admin')
@section('content')
    <!-- Basic Card Example -->
    @include('admin.components.errors')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">
                O'quv markaz malumotlarini tahrirlash!
            </h5>
            <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.education.index') }}">Back</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.education.update',$educationCenter) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Nomi</label>
                    <input class="form-control" name="name" value="{{ $educationCenter->name }}"  type="text">
                </div>
                <img class="rounded w-200 img-thumbnail" src = "{{ $educationCenter->getImage() }}">
                <div class="form-group">
                    <label for="">Logo</label>
                    <input class="form-control" name="img" type="file" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="">O'qishga topshirganlar soni</label>
                    <input class="form-control" name="all" value="{{ $educationCenter->all }}" type="number">
                </div>
                <div class="form-group">
                    <label for="">O'qishga budget asosida qabul qilingganlar soni</label>
                    <input class="form-control" name="grand" value="{{ $educationCenter->grand }}" type="number">
                </div>
                <div class="form-group">
                    <label for="">O'qishga shartnoma asosida qabul qilingganlar soni</label>
                    <input class="form-control" name="contract" value="{{ $educationCenter->contract }}" type="number">
                </div>
                <div class="form-group">
                    <label for="">Manzil</label>
                    <input class="form-control" name="address" value="{{ $educationCenter->address }}" type="text">
                </div>
                <div class="form-group">
                    <label for="">Telefon raqami</label>
                    <input class="form-control" name="phone" value="{{ $educationCenter->phone }}" type="number">
                </div>
                <div class="form-group">
                    <label for="my-subjects">Fanlar</label>
                    <select multiple name="subjects[]" id="subjects" class="form-control" required>
                        <option value="" class="">No Select</option>
                        @foreach (DB::table('subjects')->get() as $value)
                            <option value="{{ $value->id }}"  {{ in_array($value->id, $educationCenter->subjects()->pluck('subject_id')->toArray()) ? 'selected' : '' }}>{{ $value->name }}</option>
                        @endforeach;
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Qisqacha malumot</label>
                    <textarea name="desc" id="" class="form-control" cols="30" rows="10">{{ $educationCenter->desc }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Saqlash</button>
            </form>
        </div>
    </div>
@endsection
