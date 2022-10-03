@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Expediente</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'expedientes.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('expedientes.fields')
                </div>

            </div>

            <div class="card-footer">
                 {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('expedientes.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
