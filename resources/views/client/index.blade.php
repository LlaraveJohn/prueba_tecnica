@extends('layouts.app')

@section('title', 'Clienetes')

@section('content')
<div id="wrapper">
    @include('includes.menu_lateral')

    <div id="page-wrapper" class="gray-bg dashbard-1">
    	<div class="row border-bottom">
            @include('includes.menu_superior')
        </div>

        <div class="row border-bottom white-bg dashboard-header">
            <div class="ibox-title">
                <h5>Lista de clienetes creados en el sistema</h5>
                <a href="{{url('/client/create')}}">
                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="button">
                        <strong>Crear cliente</strong>
                    </button>
                </a>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th>Documento</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Teléfono</th>
                                <th>Latitud</th>
                                <th>Longitud</th>
                                <th>Ruta</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>

                        <tbody>
                        	@foreach ($cliente as $row_cliente)
                                <tr>
                                    <td>{{$row_cliente->document}}</td>
                                    <td>{{$row_cliente->name}}</td>
                                    <td>{{$row_cliente->surname}}</td>
                                    <td>{{$row_cliente->phone}}</td>
                                    <td>{{$row_cliente->latitude}}</td>
                        			<td>{{$row_cliente->longitude}}</td>
                        			<td>{{$row_cliente->nombre_ruta}}</td>
                        			<td>
                        				<a href="{{url('/client/'.$row_cliente->id.'/edit')}}" rel="tooltip" title="Editar" class="btn btn-link btn-simple btn-xs">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                        			</td>
                        			<td>
                                        <a href="{{url('/client/'.$row_cliente->id.'/delete')}}" rel="tooltip" title="Eliminar" class="btn btn-link btn-simple btn-xs">
                                            <i class="fas fa-trash-alt fa-fw"></i>
                                        </a>
                                    </td>
                        	    </tr>
                    		@endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>Documento</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Teléfono</th>
                                <th>Latitud</th>
                                <th>Longitud</th>
                                <th>Ruta</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.config_table')

@endsection