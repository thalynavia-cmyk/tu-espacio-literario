@extends('layouts.app')

@section('title','Panel De Control')

@section('content')
    <style>
        /* 1. Forzamos el fondo en la capa principal */
        .content-wrapper {
            background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), 
                        url('https://unsplash.com') !important;
            background-size: cover !important;
            background-position: center !important;
            background-attachment: fixed !important;
        }

        /* 2. Forzamos transparencia en TODAS las capas internas que puedan estar tapando */
        .content-wrapper, 
        .content-header, 
        .content, 
        .container-fluid, 
        .row {
            background-color: transparent !important;
        }

        /* 3. Estilo para los cuadros para que resalten sobre el fondo */
        .small-box {
            box-shadow: 0 10px 30px rgba(0,0,0,0.2) !important;
            border-radius: 15px !important;
        }
    </style>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-12 text-center">
                        <h1 class="m-0 font-weight-bold" style="color: #2C3E50; font-size: 2.5rem;">📚 @yield('title')</h1>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    {{-- Cuadro Azul --}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>12</h3>
                                <p>Total Clientes</p>
                            </div>
                            <div class="icon"><i class="fas fa-users"></i></div>
                            <a href="#" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    {{-- Cuadro Verde --}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>
                                <p>Bounce Rate</p>
                            </div>
                            <div class="icon"><i class="fas fa-chart-line"></i></div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    {{-- Cuadro Amarillo --}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3 class="text-white">44</h3>
                                <p class="text-white">User Registrations</p>
                            </div>
                            <div class="icon"><i class="fas fa-user-plus"></i></div>
                            <a href="#" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    {{-- Cuadro Rojo --}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>
                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon"><i class="fas fa-eye"></i></div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
