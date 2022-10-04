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
                                    NUESTROS CLIENTES
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Clientes/Datos en la tabla
                            <div>
                               <!-- <a href="/admin/configuracion/usuario/add" class="btn btn-primary lift"><em class='bx bxs-user-plus'></em>{{ __('Crear Usuario') }}</a> -->
                            <a href='/admin/operaciones/clientes/crear' class="btn btn-primary lift" type="button"><i class='bx bx-directions'></i>Nuevo Cliente-Empresa</a>
                            </div>

                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="#">Clientes Jurídicos</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="/admin/operaciones/clientes/indexClienteNatural">Clientes Naturales</a>
                            </li>

                          </ul>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                            <form class="input-group">
                                <button class="btn btn-outline-primary btn-sm me-md-2" type="submit"> <em class='bx bx-search-alt'></em>Buscar</button>
                                <input name="busqueda" class="form-control " type="search" placeholder="Ingrese nombre de empresa" aria-label="Search" autocomplete="off">

                            </form>
                        </div>
                        <div class="card-body py-2">
                            <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Nº de RUC</th>
                                        <th>Razón Social</th>
                                        <th>E-.mail</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>202203045</td>
                                        <td>GRATING PERU SAC</td>
                                        <td>grupo@grating-prodac.pe</td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-table me-2"><i class='bx bx-dots-vertical-rounded'></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-table"><i class='bx bx-trash' ></i></button>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection