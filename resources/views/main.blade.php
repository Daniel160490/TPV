@extends('backpack::layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Menú Principal</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">

    <!-- BOTON PRODUCTOS -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-10 text-center">
                        <div class="huge">Productos</div>
                    </div>
                </div>
            </div>
            <a href="admin/producto">
                <div class="panel-footer">
                    <span class="pull-left">Detalles</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <!-- BOTON EVENTOS -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-calendar fa-5x"></i>
                    </div>
                    <div class="col-xs-10 text-center">
                        <div class="huge">Eventos</div>
                    </div>
                </div>
            </div>
            <a href="admin/evento">
                <div class="panel-footer">
                    <span class="pull-left">Detalles</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <!-- BOTON USUARIOS -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-group fa-5x"></i>
                    </div>
                    <div class="col-xs-10 text-center">
                        <div class="huge">Usuarios</div>
                    </div>
                </div>
            </div>
            <a href="admin/usuario">
                <div class="panel-footer">
                    <span class="pull-left">Detalles</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    
    <!--Boton TPV -->
     <div class="col-lg-3 col-md-6">
        <div class="panel panel">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-qrcode fa-5x"></i>
                    </div>
                    <div class="col-xs-10 text-center">
                        <div class="huge">TPV</div>
                    </div>
                </div>
            </div>
            <a href="mesas">
                <div class="panel-footer">
                    <span class="pull-left">Detalles</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <!-- BOTON COMANDAS --> 
    <div class="col-lg-3 col-md-6">
        <div class="panel panel">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tags fa-5x"></i>
                    </div>
                    <div class="col-xs-10 text-center">
                        <div class="huge">COMANDAS</div>
                    </div>
                </div>
            </div>
            <a href="admin/comanda">
                <div class="panel-footer">
                    <span class="pull-left">Detalles</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


    <!-- BOTON MESAS -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-apple fa-5x"></i>
                    </div>
                    <div class="col-xs-10 text-center">
                        <div class="huge">Mesas</div>
                    </div>
                </div>
            </div>
            <a href="admin/mesas">
                <div class="panel-footer">
                    <span class="pull-left">Detalles</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

</div>
@endsection