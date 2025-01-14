@extends('adminlte::page')

@section('title', 'JABB')

@section('content_header')
    <h1>Editar roll</h1>
@stop

@section('content')

    @if ('info')
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

<div class="card">
    <div class="card-body">
        {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}
            
            @include('admin.roles.partials.form')

            {!! Form::submit('Actulizar Rol', ['class' => 'btn btn-primary']); !!}

        {!! Form::close() !!}
    </div>
</div>
@stop
