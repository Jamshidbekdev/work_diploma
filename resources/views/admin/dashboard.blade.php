@extends('layouts.admin')
@section('content')
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                O'quv markazlar soni</div><br>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ DB::table('education_centers')->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-building fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Fanlar</div><br>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ DB::table('subjects')->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Barcha o'quv markazlardan o'qishga topshirganlar soni</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ DB::table('education_centers')->sum('all') }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Barcha o'quv markazlardan o'qishga kirganlar soni</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ DB::table('education_centers')->sum(DB::raw('grand + contract')) }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">
                    O'quv markazlar
                </h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th>Rasm</th>
                        <th>Nomi</th>
                        <th>Barcha o'qishga topshirganlar</th>
                        <th>Budget</th>
                        <th>To'lov shartnoma</th>
                        <th>Manzil</th>
                    </thead>
                    <tbody>
                        @foreach ($items as $key => $item)
                            <tr>
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
    </div>
@endsection
