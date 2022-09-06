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
                                    ROLES Y PRIVILEGIOS
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Privilegios
                        </div>
                        <form>

                            <div class="row g-2 px-3">
                                <div class="col">
                                    <h5>Rol</h5>
                                </div>
                                <div class="col">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                                        <form class="input-group">
                                            <input name="busqueda" class="form-control me-md-2" type="search"
                                                placeholder="Ingrese nombre" aria-label="Search" autocomplete="off">
                                            <button class="btn btn-outline-primary btn-sm" type="submit"> <em
                                                    class='bx bx-search-alt'></em>Buscar</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="configuración">
                    <label class="form-check-label" for="configuración">
                        Configuración
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="operaciones">
                    <label class="form-check-label" for="operaciones">
                        Operaciones
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="facturación">
                    <label class="form-check-label" for="facturación">
                        Facturacion
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="reportes">
                    <label class="form-check-label" for="reportes">
                        Reportes
                    </label>
                </div>
                <div class="btn">
                    <button class="btn btn-primary me-md-2" type="button">Guardar</button>
                    <button class="btn btn-primary" type="button"><i class='bx bxs-left-arrow-square'></i>Cancelar</button>
                    </div>

        </div>
        </main>
    </div>
    </div>
@endsection