@extends('layouts.app')

@section('title', 'Rutas')

@section('content')
<div id="wrapper">
    @include('includes.menu_lateral')

    <div id="page-wrapper" class="gray-bg dashbard-1">
    	<div class="row border-bottom">
            @include('includes.menu_superior')
        </div>

        <div class="row border-bottom white-bg dashboard-header">
            <div class="ibox-title">
                <h5>Lista de rutas creadas en el sistema</h5>
                <a href="{{url('/route/create')}}">
                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="button">
                        <strong>Crear ruta</strong>
                    </button>
                </a>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>

                        <tbody>
                        	@foreach ($ruta as $row_ruta)
                                <tr>
                                    <td>{{$row_ruta->code}}</td>
                                    <td>{{$row_ruta->name}}</td>
                        			<td>
                        				<a href="{{url('/route/'.$row_ruta->id.'/edit')}}" rel="tooltip" title="Editar" class="btn btn-link btn-simple btn-xs">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                        			</td>
                                    <td>
                                        <a href="{{url('/route/'.$row_ruta->id.'/delete')}}" rel="tooltip" title="Eliminar" class="btn btn-link btn-simple btn-xs">
                                            <i class="fas fa-trash-alt fa-fw"></i>
                                        </a>
                                    </td>
                        	    </tr>
                    		@endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
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