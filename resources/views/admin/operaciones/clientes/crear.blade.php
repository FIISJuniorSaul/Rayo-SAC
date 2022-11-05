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
                                    AGREGAR NUEVO CLIENTE
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Datos del cliente
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{route('clienteJuridico.create')}}">Cliente Juridico</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('clienteNatural.create')}}">Cliente
                                    Natural</a>
                            </li>
                        </ul>
                        <main>
                            <!-- Main page content-->
                            <div class="container-xl px-4 mt-4">
                                <hr class="mt-0 mb-4" />
                                <div class="row">
                                    <div class="#">
                                        <!-- Account details card-->
                                        <div class="card mb-4">
                                            <div class="card-header">Detalles del cliente Jurídico</div>
                                            <div class="card-body">
                                                <label for="dni">Ingrese RUC</label>
                                                <div class="input-group">
                                                    <input type="number" min="1" max="99999999999" id="ruc"
                                                        name="ruc" value="" class="form-control"
                                                        placeholder="N° DE RUC" />&nbsp;
                                                    <button class="btn btn-primary" id="btnbuscar" align="right"><em
                                                            class='bx bx-search-alt-2'></em>Buscar</button>

                                                </div>
                                                <div class="col-md-5">
                                                    <small id="mensaje" style="color: red;display: none;font-size: 12pt;">
                                                        <i class="fa fa-remove"></i> El número de RUC no es valido.
                                                    </small>
                                                </div>
                                                <label for="dni">Ingrese DNI</label>
                                                <div class="input-group">
                                                    <input type="number" min="1" max="99999999" id="dni"
                                                        class="form-control" placeholder="Documento" />&nbsp;
                                                    <button class="btn btn-primary" id="buscardni" align="right"
                                                        onClick="consultarDni()"><em
                                                            class='bx bx-search-alt-2'></em>Buscar</button>
                                                </div>
                                                <div class="col-md-5">
                                                    <small id="mensaje" style="color: red;display: none;font-size: 12pt;">
                                                        <i class="fa fa-remove"></i> El numero de DNI no es valido.
                                                    </small>
                                                </div>
                                                <form action="{{ route('clienteJuridico.store') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <!-- Form Group (username)-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputNºDERUC">Nº DE RUC</label>
                                                            <input class="form-control" id="txtruc" type="text"
                                                                name="ruc" placeholder="Nº DE RUC" value=""
                                                                readonly />
                                                        </div>
                                                        <!-- Form Group (last name)-->

                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputRazónSocial">Razón
                                                                Social</label>
                                                            <input class="form-control" id="txtrazon" type="text"
                                                                name="razon_social" placeholder="Razón Social"
                                                                value="" readonly />
                                                        </div>

                                                    </div>
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputNameEmpresa">Estado</label>
                                                            <input class="form-control" id="txtgrupo" type="text"
                                                                name="estado" placeholder="Estado" value=""
                                                                readonly />
                                                        </div>
                                                        <!-- Form Group (last name)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputDirección">Dirección</label>

                                                            <input class="form-control" id="txtdireccion" type="text"
                                                                name="direccion" placeholder="Dirección" value=""
                                                                readonly />
                                                        </div>
                                                    </div>
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-4">
                                                            <label class="small mb-1"
                                                                for="inputNameEmpresa">Departamento</label>
                                                            <input class="form-control" id="txtdepartamento"
                                                                type="text" name="departamento"
                                                                placeholder="departamento" value="" readonly />
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label class="small mb-1"
                                                                for="inputDirección">Provincia</label>

                                                            <input class="form-control" id="txtprovincia" type="text"
                                                                name="provincia" placeholder="provincia" value=""
                                                                readonly />
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="small mb-1"
                                                                for="inputNameEmpresa">Distrito</label>
                                                            <input class="form-control" id="txtdistrito" type="text"
                                                                name="distrito" placeholder="distrito" value=""
                                                                readonly />
                                                        </div>
                                                    </div>

                                                    <!-- Form Row-->

                                                    <div class="card-body">
                                                        <!--search-->
                                                        <div
                                                            class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                                                        </div>
                                                        <!-- Form Group (username)-->
                                                        <div class="row gx-3 mb-3">
                                                            <!-- Form Group (DNI)-->
                                                            <div class="col-md-6">
                                                                <label class="small mb-1" for="inputCode">Codigo</label>
                                                                <input class="form-control" name="codigo" id="codigo"
                                                                    type="text" placeholder="codigo" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="small mb-1" for="inputDNI">DNI</label>
                                                                <input class="form-control" name="dni"
                                                                    id="dni_ciudadano" type="text" placeholder="DNI"
                                                                    readonly />
                                                            </div>
                                                            <!-- Form Group (name)-->
                                                            <div class="col-md-6">
                                                                <label class="small mb-1" for="inputName">Nombres</label>
                                                                <input class="form-control" name="nombre" id="nombres"
                                                                    type="text" placeholder="Nombres" readonly />
                                                            </div>
                                                        </div>
                                                        <!-- Form Row-->
                                                        <div class="row gx-3 mb-3">
                                                            <!-- Form Group (last name)-->
                                                            <div class="col-md-6">
                                                                <label class="small mb-1" for="inputFirstName">Apellido
                                                                    Paterno</label>
                                                                <input class="form-control" name="apellido_paterno"
                                                                    id="apellido_paterno" type="text"
                                                                    placeholder="Apellido Paterno" readonly />
                                                            </div>
                                                            <!-- Form Group (last name)-->
                                                            <div class="col-md-6">
                                                                <label class="small mb-1" for="inputLastName">Apellido
                                                                    Materno</label>
                                                                <input class="form-control" name="apellido_materno"
                                                                    id="apellido_materno" type="text"
                                                                    placeholder="Apellido Materno" readonly />
                                                            </div>
                                                        </div>
                                                        <div class="row gx-3 mb-3">
                                                            <div class="col-md-6">
                                                                <label class="small mb-1" for="inputEmail">correo
                                                                    electronico</label>
                                                                <input class="form-control" name="correo"
                                                                    id="inputEmail" type="text"
                                                                    placeholder="example@rayosac.com" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="small mb-1"
                                                                    for="inputTelephone">telefono</label>
                                                                <input class="form-control" name="telefono"
                                                                    id="inputTelephone" type="number"
                                                                    placeholder="9208033951" />
                                                            </div>
                                                        </div>


                                                        <div class="text-center">
                                                            <br>
                                                            <!-- Save changes button-->
                                                            <button class="btn btn-primary" type="submit"><em
                                                                    class='bx bxs-memory-card'></em>Guardar </button>
                                                            <!-- cancel changes button-->
                                                            <button class="btn btn-primary" type="submit"><em
                                                                    class='bx bxs-x-circle'></em>Cancelar </button>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
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
        </div>
    </div>
@endsection
