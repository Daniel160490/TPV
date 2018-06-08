@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Página Principal <small> - La Qarmita</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Inicio de Sesión</div>
                </div>

                <div class="box-body">Inició sesión correctamente, Bienvenido: {{ backpack_auth()->user()->name }}</div>
            </div>
        </div>
    </div>
@endsection
