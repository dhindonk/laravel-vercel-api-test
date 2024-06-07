@extends('layouts.app')

@section('title', 'Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Sistem Monitoring Wudhu Otomatis [ Fauzan Yuliansah Irawan ]</h1>
            </div>  
            <div class="row" style="display: flex; justify-content: center !important">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class=" card p-3 d-flex justify-center align-items-center">
                        <div class="card-icon pt-5">
                            <img src="{{ asset('assets/water.png') }}" alt="" width="100">
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h3>Total Debit Air</h3>
                            </div>
                            <div class="card p-2 d-flex justify-center align-items-center" style="background: #eee">
                                <span style="color: #333">
                                    {{ $totalDebitAir ?? 150 }} (ml)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class=" card p-3 d-flex justify-center align-items-center">
                        <div class="card-icon pt-5">
                            <img src="{{ asset('assets/group.png') }}" alt="" width="100">
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h3>Total Pemakaian</h3>
                            </div>
                            <div class="card p-2 d-flex justify-center align-items-center" style="background: #eee">
                                <span style="color: #333">
                                    {{ $jumlahPemakaian ?? 15 }} (orang)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class=" card p-3 d-flex justify-center align-items-center">
                        <div class="card-icon pt-5">
                            <img src="{{ asset('assets/money.png') }}" alt="" width="100">
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h3>Total Tagihan</h3>
                            </div>
                            <div class="card p-2 d-flex justify-center align-items-center" style="background: #eee">
                                <span style="color: #333">
                                    IDR.{{ $formattedTagihan ?? 0 }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
