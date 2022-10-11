@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Editar Juzgado</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($juzgado, ['route' => ['juzgados.update', $juzgado->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('juzgados.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Gaurdar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('juzgados.index') }}" class="btn btn-default">Cancelar</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
