@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-2 font-weight-bold text-primary">
                O'quv markaz!
            </h5>
            <a class="btn btn-sm btn-primary float-right" href="{{ url()->previous() }}">Orqaga</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <td class="font-weight-bold">Nomi</td>
                    <td>{{ $educationCenter->name }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Logo</td>
                    <td>
                        @if ($educationCenter->getImage())
                            <img class="img img-thumbnail" src="{{ $educationCenter->getImage() }}" style="width:130px">
                        @else
                            Rasm yo'q!
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Manzil</td>
                    <td>{{ $educationCenter->address }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Fanlar</td>
                    <td>
                        @foreach ($educationCenter->subjects()->get() as $item)
                            <li style="list-style-type: none;">{{ $item->name}}</li>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Telefon raqami</td>
                    <td>{{ $educationCenter->phone }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Qisqacha malumot</td>
                    <td>{{ $educationCenter->desc }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">O'qishga topshirganlar soni</td>
                    <td>{{ $educationCenter->all }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">O'qishga budget asosida qabul qilingganlar soni</td>
                    <td>{{ $educationCenter->grand }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">O'qishga shartnoma asosida qabul qilingganlar soni</td>
                    <td>{{ $educationCenter->contract }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
