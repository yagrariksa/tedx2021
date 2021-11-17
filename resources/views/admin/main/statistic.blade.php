@extends('layouts.admin')

@section('title')
    ADMIN
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/modules/chocolat/dist/css/chocolat.css') }}">
@endsection

@section('header')
    Main Event
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Main Event Statistic</h4>
                </div>

                <div class="container mb-4 mx-0">
                    <div class="row">
                        <div class="col-sm col-4">
                            <div class="">
                                <div class="card card-statistic-1 mb-0">
                                    <div class="card-icon bg-primary">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Total Pendaftar</h4>
                                        </div>
                                        <div class="card-body">
                                            {{ $usersCount }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-8 align-middle">
                            <canvas id="myChart" height="200"></canvas>
                        </div>

                    </div>

                </div>



            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>
    <script src="{{ asset('assets/js/page/components-table.js') }}"></script>

    <script src="{{ asset('node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('node_modules/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('node_modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('node_modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('node_modules/jqvmap/dist/maps/jquery.vmap.indonesia.js') }}"></script>

    <script>
        let ownurl = "{{ route('api.main.graph') }}";
    </script>
    {{-- DATA YG DIBUTUHIN --}}
    <script src="{{ asset('assets/js/admin-main.js') }}"></script>

@endsection
