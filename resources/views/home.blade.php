<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>O'quv markazlari nazorat qilish</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    {{-- <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png"> --}}
    {{-- <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> --}}

    {{-- Font awesome icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">

    <link rel="stylesheet" href="{{ asset('dashboard/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="https://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <style>
        #button_id {
            border: 1px solid black;
            background: transparent;
            color: #000;
        }

        #a_id {
            border: 1px solid black;
            background: transparent;
            color: #000;
            padding: 0 4px;
            display: flex;
            align-items: center;
        }

        #form_id {
            vertical-align: top;
            display: flex;
            align-items: stretch;
            justify-content: flex-start;
            gap: 10px;
        }

        .multi-item-carousel {
            .carousel-inner {
                >.item {
                    transition: 500ms ease-in-out left;
                }

                .active {
                    &.left {
                        left: -33%;
                    }

                    &.right {
                        left: 33%;
                    }
                }

                .next {
                    left: 33%;
                }

                .prev {
                    left: -33%;
                }

                @media all and (transform-3d),
                (-webkit-transform-3d) {
                    >.item {
                        // use your favourite prefixer here
                        transition: 500ms ease-in-out left;
                        transition: 500ms ease-in-out all;
                        backface-visibility: visible;
                        transform: none !important;
                    }
                }
            }

            .carouse-control {

                &.left,
                &.right {
                    background-image: none;
                }
            }
        }

        // non-related styling:
        body {
            background: #333;
            color: #ddd;
        }

        h1 {
            color: white;
            font-size: 2.25em;
            text-align: center;
            margin-top: 1em;
            margin-bottom: 2em;
            text-shadow: 0px 2px 0px rgba(0, 0, 0, 1);
        }
    </style>
    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
    </style>
</head>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="container-fluid">
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-study"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span
                                                    class="count">{{ DB::table('education_centers')->count() }}</span>
                                            </div>
                                            <div class="stat-heading">O'quv markazlar soni</div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-notebook"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span
                                                    class="count">{{ DB::table('subjects')->count() }}</span>
                                            </div>
                                            <div class="stat-heading">Fanlar</div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span
                                                    class="count">{{ DB::table('education_centers')->sum('all') }}</span>
                                            </div>
                                            <div class="stat-heading">Barcha o'quv markazlardan o'qishga topshirganlar
                                                soni</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span
                                                    class="count">{{ DB::table('education_centers')->sum(DB::raw('grand + contract')) }}</span>
                                            </div>
                                            <div class="stat-heading">Barcha o'quv markazlardan o'qishga kirganlar
                                                soni</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">O'quv markazlar </h4>
                                <div class="row ">
                                    <div class="col-3 form-group">
                                        <form id="form_id" action="{{ route('search') }}" style=""
                                            method="GET">
                                            <select multiple="multiple" name="q[]" class="select2 " id="subjects">
                                                <option value="" class="">No Select</option>
                                                @foreach (DB::table('subjects')->get() as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ isset($q) ? (in_array($item->id, $q) ? 'selected' : '') : '' }}
                                                        class="">
                                                        {{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <button id="button_id" type="submit">Qidiruv</button>
                                            <a href="{{ route('main') }}" id="a_id" type="button"
                                                style="">Tozalash</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card-body--">
                                        <div class="table-stats order-table ov-h">
                                            <table class="table ">
                                                <thead>
                                                    <tr>
                                                        <th class="avatar">Rasm</th>
                                                        <th>Nomi</th>
                                                        <th>Barcha o'qishga topshirganlar</th>
                                                        <th>Budget</th>
                                                        <th>To'lov shartnoma</th>
                                                        <th>Manzil</th>
                                                        <th>Telefon raqami</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $key => $item)
                                                        <tr>
                                                            <td class="avatar">
                                                                <div class="round-img">
                                                                    @if (true)
                                                                        <img class="rounded-circle w-40"
                                                                            src="{{ $item->img != '' ? Storage::url($item->img) : '' }}"
                                                                            alt="">
                                                                    @endif
                                                                    <a href="#"></a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="show_item"
                                                                    data-array='{{ $item->name . '^' . $item->address . '^' . $item->img . '^' . $item->phone . '^' . $item->all . '^' . $item->grand . '^' . $item->contract . '^' . $item->desc }}'
                                                                    data-subjects="{{ $item->subjects->pluck('name') }}">
                                                                    <span class="name">{{ $item->name }}</span>
                                                                </a>
                                                            </td>

                                                            <td><span>{{ $item->all }}</span></td>
                                                            <td class="text-success">
                                                                <span>{{ $item->grand }}</span>
                                                            </td>
                                                            <td class="text-warning">
                                                                <span>{{ $item->contract }}</span>
                                                            </td>
                                                            </td>
                                                            <td> <span class="product">
                                                                    {{ \Illuminate\Support\Str::words($item->address, 4, '...') }}</span>
                                                            </td>
                                                            <td><span class="">{{ $item->phone }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{ $data->links() }}
                                        </div> <!-- /.table-stats -->
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card-body">
                                        @foreach ($new_data as $key => $value)
                                            @php
                                                $object = DB::table('education_centers')->find($value);
                                                $percent = (($object->grand + $object->contract) * 100) / $object->all;
                                            @endphp
                                            @if ($key <= 4)
                                                <div class="progress-box progress-1">
                                                    <h4 class="por-title">
                                                        {{ $object->name }}</h4>
                                                    <div class="por-txt">
                                                        {{ ' O\'quvchilar ' . '(' . number_format($percent, 2) . ' %)' }}
                                                    </div>
                                                    <div class="progress mb-2" style="height: 5px;">
                                                        <div class="progress-bar bg-flat-color-{{ ++$key }}"
                                                            role="progressbar"
                                                            style="width: {{ number_format($percent, 2) }}%;"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div> <!-- /.card-body -->
                                </div>
                            </div> <!-- /.row -->
                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->
                </div>
                <!--  /Traffic -->
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">O'quv markazlar</h4>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="calender-cont widget-calender">
                                                <div id="calendar"></div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="table-stats order-table ov-h">
                                                <table class="table ">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align:center;">Eng ko'p o'qitiladigan
                                                                fanlar
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($subject as $key => $item)
                                                            @if ($key <= 6)
                                                                <tr>
                                                                    <td style="text-align:center;" class="serial">
                                                                        {{ DB::table('subjects')->find($item)->name }}
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div> <!-- /.table-stats -->
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.card -->
                        </div> <!-- /.col-lg-8 -->

                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-lg-6 col-xl-12">
                                    <div class="card br-0">
                                        <div class="card-body">
                                            <div class="chart-container ov-h">
                                                <div id="flotPie1" class="float-chart"></div>
                                            </div>
                                        </div>
                                    </div><!-- /.card -->
                                </div>

                                <div class="col-lg-6 col-xl-12">
                                    <div class="card bg-flat-color-3  ">
                                        <div class="card-body">
                                            <h4 class="card-title m-0  white-color ">{{ date('F Y') }}</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="flotLine5" class="flot-line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.col-md-4 -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!--Carousel Wrapper-->
                        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                            <!--Controls-->
                            <div class="controls-top">
                                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
                                        class="fa fa-chevron-left"></i></a>
                                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                                        class="fa fa-chevron-right"></i></a>
                            </div>
                            <!--/.Controls-->

                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                                <li data-target="#multi-item-example" data-slide-to="1"></li>
                                <li data-target="#multi-item-example" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->

                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <!--First slide-->
                                @for ($i = 0; $i < count($items); $i++)
                                    <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                        <div class="row">
                                            @foreach ($items[$i] as $key => $item)
                                                <div
                                                    class="col-md-4 {{ $key != 0 ? 'clearfix d-none d-md-block' : '' }}">
                                                    <div class="card mb-2">
                                                        @if ($item->img)
                                                            <img class="card-img-top" src="{{ $item->getImage() }}"
                                                                alt="Card image cap">
                                                        @else
                                                            <img class="card-img-top"
                                                                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                                                alt="Card image cap">
                                                        @endif
                                                        <div class="card-body">
                                                            <h4 class="card-title">{{ $item->title }}</h4>
                                                            <p class="card-text">
                                                                {{ \Illuminate\Support\Str::words($item->short, 14, '...') }}
                                                            </p>
                                                            <a class="btn btn-primary show-btn"
                                                                data-title="{{ $item->title }}"
                                                                data-img="{{ $item->img }}"
                                                                data-desc="{{ $item->desc }}">Batafsil</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endfor
                                <!--/.First slide-->
                            </div>
                            <!--/.Slides-->

                        </div>
                        <!--/.Carousel Wrapper-->

                    </div>
                </div>
                <!-- /#event-modal -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                {{-- <div class="row"> --}}
                <div class="d-flex align-items-center justify-content-center">
                    Copyright &copy; {{ date('Y') }}
                </div>
                {{-- </div> --}}
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->
    @include('admin.components.show-modal')
    @include('admin.components.show_items-modal')

    <!-- Scripts -->
    <script src="{{ asset('dashboard/js/main.js') }}"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.js"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script> --}}


    {{-- <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script> --}}
    {{-- <script src="{{ asset('dashboard/js/init/weather-init.js') }}"></script> --}}

    {{-- Select --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

    {{-- Chart --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    {{-- Calendar --}}
    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="{{ asset('dashboard/js/init/fullcalendar-init.js') }}"></script>
    @stack('scripts')
    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [{
                    label: "Fizika",
                    data: [
                        [1, 38]
                    ],
                    color: '#5c6bc0'
                },
                {
                    label: "Informatika",
                    data: [
                        [1, 23]
                    ],
                    color: '#ef5350'
                },
                {
                    label: "Nemis tili",
                    data: [
                        [1, 15]
                    ],
                    color: '#66bb6a'
                }
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [{
                    label: "Direct Sell",
                    data: [
                        [1, 65]
                    ],
                    color: '#5b83de'
                },
                {
                    label: "Channel Sell",
                    data: [
                        [1, 35]
                    ],
                    color: '#00bfa5'
                }
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [
                [0, 3],
                [1, 5],
                [2, 4],
                [3, 7],
                [4, 9],
                [5, 3],
                [6, 6],
                [7, 4],
                [8, 10]
            ];

            var plot = $.plot($('#flotLine5'), [{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }], {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
        });
    </script>
    <script type="text/javascript">
        // Instantiate the Bootstrap carousel
        // $('.carousel-inner').carousel({
        //     interval: 1000
        // });
        $(function() {
            $("select").select2({
                placeholder: "Qidirish...",
                width: "100%"
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            if ($("#subjects").val().length == 0) {
                $('#button_id').attr('disabled', true);
            }
            $('#subjects').change(function() {
                var bool = $("#subjects").val().length;
                console.log(bool)
                if (bool != 0) {
                    $('#button_id').attr('disabled', false);
                } else {
                    $('#button_id').attr('disabled', true);
                }
            })
        });
    </script>
</body>

</html>
