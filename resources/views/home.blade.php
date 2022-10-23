@extends('layouts.app')

@section('content')
<br>
<div class="container-fluid">
<div class="row">
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box">
<span class="info-box-icon bg-info elevation-1"> <i class="fa fas-solid fa-gavel"></i></span>
<div class="info-box-content">
<span class="info-box-text">Juzgados</span>
<span class="info-box-number">
<a href="{{ route('juzgados.index') }}" class="small-box-footer">Ir a <i class="fas fa-arrow-circle-right"></i></a>
</span>
</div>

</div>
</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-danger elevation-1"><i class="fa fas-solid fa-list"></i></span>
<div class="info-box-content">
<span class="info-box-text">Circunscripcion</span>
<span class="info-box-number"><a href="{{ route('circunscripcions.index') }}" class="small-box-footer">Ir a <i class="fas fa-arrow-circle-right"></i></a></span>
</div>

</div>

</div>


<div class="clearfix hidden-md-up"></div>
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-success elevation-1"><i class="fa fas-regular fa-clipboard"></i></span>
<div class="info-box-content">
<span class="info-box-text">Clientes</span>
<span class="info-box-number"><a href="{{ route('clientes.index') }}" class="small-box-footer">Ir a <i class="fas fa-arrow-circle-right"></i></a></span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-warning elevation-1"><i class="fa fas-solid fa-folder"></i></span>
<div class="info-box-content">
<span class="info-box-text">Expedientes</span>
<span class="info-box-number"><a href="{{ route('expedientes.index') }}" class="small-box-footer">Ir a <i class="fas fa-arrow-circle-right"></i></a></span>
</div>

</div>
</div>
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-light elevation-1"><i class="fa fas-solid fa-folder"></i></span>
<div class="info-box-content">
<span class="info-box-text">Reportes</span>
<span class="info-box-number"><a href="{{ route('reporte.index') }}" class="small-box-footer">Ir a <i class="fas fa-arrow-circle-right"></i></a></span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-primary elevation-1"><i class="fa fas-solid fa-calendar"></i>  </span>
<div class="info-box-content">
<span class="info-box-text">Audiencias</span>
<span class="info-box-number"><a href="{{ route('audiencias.index') }}" class="small-box-footer">Ir a <i class="fas fa-arrow-circle-right"></i></a></span>
</div>

</div>

</div>
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-dark elevation-1"><i class="fas fa-users"></i></span>
<div class="info-box-content">
<span class="info-box-text">Usuarios</span>
<span class="info-box-number"><a href="{{ route('users.index') }}" class="small-box-footer">Ir a <i class="fas fa-arrow-circle-right"></i></a></span>
</div>

</div>

</div>
</div>
@endsection
