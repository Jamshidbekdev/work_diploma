@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-2 font-weight-bold text-primary">
                Yangilik
            </h6>

        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <td class="font-weight-bold">Mavzu</td>
                    <td>{{ $item->title }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Rasm</td>
                    <td>
                        @if ($item->getImage())
                            <img class="img img-thumbnail" src="{{ $item->getImage() }}" style="width:130px">
                        @else
                        <img class="img img-thumbnail" src="https://source.unsplash.com/random" style="width:130px">
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Qisqacha malumot</td>
                    <td>{{ $item->short }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Malumot</td>
                    <td>{{ $item->desc }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
