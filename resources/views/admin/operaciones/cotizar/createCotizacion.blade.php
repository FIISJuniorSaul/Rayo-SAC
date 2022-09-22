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
                                COTIZAR
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body page-body-light pt-3 px-2">
                <div class="card card-header-actions">
                    <div class="card-header">
                        Datos de la Cotización
                    </div>
                    <div class="card-body">


                        <br>
                        <form>
                            <h2>-------------------</h2>
                            <div class="row g-3 px-6">
                                <div class="col">
                                    <h5>Fecha</h5>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>A1</option>
                                        <option value="1">A2</option>
                                        <option value="2">A3</option>
                                    </select>

                                </div>
                                <div class="col">
                                    <h5>Comprobante</h5>
                                    <input type="text" class="form-control" placeholder="N° de Placa"
                                           >

                                </div>
                                
                            </div>

                            <div class="row g-3 px -6">
                                <div class="col">
                                    <h5>Numero de Cotización</h5>
                                    <input type="text" class="form-control" placeholder="marca"
                                        aria-label="Email">
                                </div>
                                <div class="col">
                                    <h5>Condicion de pago</h5>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" placeholder="glns"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                      
                                    </div>
                                </div>
                      
                                <div class="row g-3 px-6">
                                    <div class="col">
                                        <h5>Razón Social</h5>
                                        <input type="text" class="form-control" placeholder="5T"
                                            aria-label="telephone">
                                    </div>
                                </div>
                                <div class="row g-3 px-6">
                                    <div class="col">
                                        <h5>Teléfono</h5>
                                        <input type="text" class="form-control" placeholder="luis"
                                            aria-label="telephone">
                                    </div>
                                </div>

                                <div class="btn">
                                    <button class="btn btn-primary me-md-2" type="button"><i
                                            class='bx bxs-user-plus'></i>Guardar</button>
                                    <button class="btn btn-primary" type="button"><i
                                            class='bx bxs-left-arrow-square'></i>Cancelar</button>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection