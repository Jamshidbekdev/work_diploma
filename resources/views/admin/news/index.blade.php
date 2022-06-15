@extends('layouts.admin')

@section('content')
    <!-- Basic Card Example -->
    @include('admin.components.alerts')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">
                Yangiliklar
            </h5>
            <p>
                <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.news.create') }}">Yaratish</a>
            </p><br>

        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Rasm</th>
                    <th>Mavzu</th>
                    <th>Qisqacha malumot</th>
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
                                <img class="img img-thumbnail" src="https://source.unsplash.com/random" style="width:130px">
                                @endif
                            </td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->short }}</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="btn btn-sm btn-info "
                                            href="{{ route('admin.news.show', $item->id) }}"><i
                                                class="fa fa-eye"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn btn-sm btn-warning"
                                            href="{{ route('admin.news.edit', $item->id) }}"><i
                                                class="fa fa-pen"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn btn-sm btn-danger delete-btn"
                                            data-url="{{ route('admin.news.destroy', $item->id) }}"><i
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
                {{ $items->links() }}
            </div>
        </div>
    </div>
    @include('admin.components.delete-confirm')
@endsection
