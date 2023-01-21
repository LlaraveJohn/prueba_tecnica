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
                <div class="col-md-12">
                    <h5>Formulario creación de usuarios</h5>
                    <a href="{{url('/admin/user')}}">
                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="button">
                            <strong>Regresar</strong>
                        </button>
                    </a>
                </div>
            </div>

            <div class="ibox-content" style="padding: 15px 20px 0px 20px;">
                <div class="row">
                    @if (isset($id))
                        <form method="POST" action="{{url('/client/'.$cliente->id.'/edit')}}" role="form">
                    @else
                        <form method="POST" action="{{url('/client')}}" role="form">
                    @endif
                        @csrf

                        <div class="form-group col-md-4">
                            <label>Documento</label>
                            @if (isset($id))
                                <input type="number" name="document" min="1" value="{{old('document', $cliente->document)}}" class="form-control">
                            @else
                                <input type="number" name="document" min="1" value="{{old('document')}}" class="form-control">
                            @endif
                            @error('document')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label>Nombres</label>
                            @if (isset($id))
                                <input type="text" name="name" value="{{old('name', $cliente->name)}}" class="form-control">
                            @else
                                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                            @endif
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>                        

                        <div class="form-group col-md-4">
                            <label>Apellidos</label>
                            @if (isset($id))
                                <input type="text" name="surname" value="{{old('surname', $cliente->surname)}}" class="form-control">
                            @else
                                <input type="text" name="surname" value="{{old('surname')}}" class="form-control">
                            @endif
                            @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label>Teléfono</label>
                            @if (isset($id))
                                <input type="number" name="phone" min="1" value="{{old('phone', $cliente->phone)}}" class="form-control">
                            @else
                                <input type="number" name="phone" min="1" value="{{old('phone')}}" class="form-control">
                            @endif
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label>Latitud</label>
                            @if (isset($id))
                                <input type="text" name="latitude" value="{{old('latitude', $cliente->latitude)}}" class="form-control">
                            @else
                                <input type="text" name="latitude" value="{{old('latitude')}}" class="form-control">
                            @endif
                            @error('latitude')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label>Longitud</label>
                            @if (isset($id))
                                <input type="text" name="longitude" value="{{old('longitude', $cliente->longitude)}}" class="form-control">
                            @else
                                <input type="text" name="longitude" value="{{old('longitude')}}" class="form-control">
                            @endif
                            @error('longitude')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label>Ruta</label>
                            @if (isset($id))
                                <select name="ruta" class="form-control">
                                    @foreach ($ruta as $rows_ruta)
                                        @if ($rows_ruta->id == $cliente->route_id)
                                            <option value="{{$rows_ruta->id}}" selected>{{$rows_ruta->name}}</option>
                                        @else
                                            <option value="{{$rows_ruta->id}}">{{$rows_ruta->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            @else
                                <select name="ruta" class="form-control">
                                    <option></option>
                                    @foreach ($ruta as $rows_ruta)
                                        <option value="{{$rows_ruta->id}}">{{$rows_ruta->name}}</option>
                                    @endforeach
                                </select>
                            @endif
                            @error('ruta')
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