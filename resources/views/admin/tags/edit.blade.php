@extends('adminlte::page')

@section('title', 'JABB')

@section('content_header')
    <h1>Editar etiqueta</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($tag,['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}
                
                @include('admin.tags.partials.form')

                {!! Form::submit('Actualizar categoria', ['class' => 'btn btn-primary']); !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@stop