@extends('layouts.admin')

@section('content')
    <!-- Basic Card Example -->
    @include('admin.components.alerts')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">
                O'quv markazlar
            </h5>
            <p>
                <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.education.create') }}">Yaratish</a>
            </p><br>

        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Rasm</th>
                    <th>Nomi</th>
                    <th>Barcha o'qishga topshirganlar</th>
                    <th>Budget</th>
                    <th>To'lov shartnoma</th>
                    <th>Manzil</th>
                    <th>Amallar</th>
                </thead>
                <tbody>
                    @foreach ($items as $key => $item)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>
                                @if ($item->getImage())
                                <img class="img img-thumbnail" src="{{ $item->getImage() }}" style="width:130px">
                                @else
                                Rasm yo'q!
                                @endif
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->all }}</td>
                            <td class="text-success">{{ $item->grand }}</td>
                            <td class="text-warning">{{ $item->contract }}</td>
                            <td>{{ $item->address }}</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="btn btn-sm btn-info "
                                            href="{{ route('admin.education.show', $item->id) }}"><i
                                                class="fa fa-eye"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn btn-sm btn-warning"
                                            href="{{ route('admin.education.edit', $item->id) }}"><i
                                                class="fa fa-pen"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn btn-sm btn-danger delete-btn"
                                            data-url="{{ route('admin.education.destroy', $item->id) }}"><i
                                                class="fa fa-trash"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                    <div class=""></div>
                </tbody>
            </table>
            <div class="col-md-2 offset-md-5">
                {{-- {{ $data->links() }} --}}
            </div>
        </div>
    </div>
    @include('admin.components.delete-confirm')
@endsection
