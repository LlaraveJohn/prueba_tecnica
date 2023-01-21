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
                <div class="col-md-12">
                    <h5>Formulario creación de rutas</h5>
                    <a href="{{url('/route')}}">
                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="button">
                            <strong>Regresar</strong>
                        </button>
                    </a>
                </div>
            </div>

            <div class="ibox-content" style="padding: 15px 20px 0px 20px;">
                <div class="row">
                    @if (isset($id))
                        <form method="POST" action="{{url('/route/'.$ruta->id.'/edit')}}" role="form">
                    @else
                        <form method="POST" action="{{url('/route')}}" role="form">
                    @endif
                        @csrf

                        <div class="form-group col-md-6">
                            <label>Código</label>
                            @if (isset($id))
                                <input type="text" name="code" value="{{old('code', $ruta->code)}}" class="form-control">
                            @else
                                <input type="text" name="code" value="{{old('code')}}" class="form-control">
                            @endif
                            @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label>Nombre</label>
                            @if (isset($id))
                                <input type="text" name="name" value="{{old('name', $ruta->name)}}" class="form-control">
                            @else
                                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                            @endif
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                                @if (isset($id))
                                   <strong>Actualizar</strong>
                                @else
                                    <strong>Guardar</strong>
                                @endif
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection