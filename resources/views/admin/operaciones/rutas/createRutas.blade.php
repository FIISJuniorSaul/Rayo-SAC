@extends('layouts.config')
@section('content')
    @include('admin.header')
    <div id="layoutSidenav">
        @include('admin.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="page-header page-header-dark bg-gradient-primary-to-secondary mt-1">
                    <div class="page-header-content">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-auto">
                                <h1 class="page-title">
                                    {{ __('ROUTES') }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            {{ __(' Route Data') }}
                        </div>
                        <div class="card-body">
                            <br>
                            @if (\Session::has('warning'))
                                <div class="alert alert-danger">
                                    <ul>
                                        <li>{{ \Session::get('warning') }}</li>
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('rutasdestino.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3 px-6">
                                    <div>
                                        <h5>{{ __('ROUTE DETAILS') }}</h5>
                                        <h6>{{ __('point of origin') }}</h6>
                                        <!--estado roles y permisos-->
                                        <div class="row gx-2 mb-2">
                                            <!-- select Estate-->
                                            <div class="col-md-4">
                                                <label class="small mb-1"
                                                    for="inputDepartament">{{ __('Department') }}</label>
                                                <select class="form-control state" name="departamento_origen"></select>
                                            </div>
                                            <!-- select roles and permissions-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputProvince">{{ __('Province') }}</label>
                                                <select class="form-control city" name="provincia_origen"></select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputDistrit">{{ __('District') }}</label>
                                                <select class="form-control district" name="distritoOrigen_id"></select>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <h6>{{ __('Destination point') }}</h6>
                                        <!--estado roles y permisos-->
                                        <div class="row gx-2 mb-2">
                                            <!-- select Estate-->
                                            <div class="col-md-4">
                                                <label class="small mb-1"
                                                    for="inputDepartament">{{ __('Department') }}</label>
                                                <select class="form-control state_destino"
                                                    name="departamento_destino"></select>
                                            </div>
                                            <!-- select roles and permissions-->
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputProvince">{{ __('Province') }}</label>
                                                <select class="form-control city_destino" name="provincia_destino"></select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="small mb-1" for="inputDistrit">{{ __('District') }}</label>
                                                <select class="form-control district_destino"
                                                    name="distritoDestino_id"></select>
                                            </div>
                                            <div class="col-md-4">
                                                <br>
                                                <h6 class="small mb-1" for="inputRol">{{ __('Select Vehicle') }}</h6>
                                                <select id="id_carga" name="vehiculos_id" class="form-control">
                                                    <option>{{ __('Select') }}</option>
                                                    @foreach ($vehiculos as $vehi)
                                                        <option value="{{ $vehi->id }}"> {{ $vehi->marca }}
                                                            {{ $vehi->capacidad_carga }} Toneladas</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="text-center">
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="submit"><em class='bx bx-check'></em>{{ __('Save') }}
                                    </button>
                                    <!-- cancel changes button-->
                                    <form action="{{route('ruta.index')}}" method="POST">
                                        <a class="btn btn-primary me-md-2" href="{{route('ruta.index')}}" onclick="return confirm('seguro que desea cancelar?');"><em class='bx bxs-left-arrow-square'></em> {{ __('Cancel') }}</a>
                                        @csrf
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer-admin mt-auto footer-light">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright © Empresa de Transportes Rayo SAC 2022</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            ·
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
