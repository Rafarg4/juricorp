@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Expediente Details</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('expedientes.index') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('expedientes.show_fields')

                </div>
            </div>
        </div>
    </div>
    <div class="invoice p-3 mb-3">

<div class="row">
<div class="col-12">
<h4>
<i class="fas fa-globe"></i> Amaya & Asociados.
<small class="float-right"><div>Fecha:
<script>
date = new Date().toLocaleDateString();
document.write(date);
</script>
</div></small>
</h4>
</div>

</div>

<div class="row invoice-info">
<div class="col-sm-4 invoice-col">
<address>
<strong>Amaya & Asociados.</strong><br>
795 Folsom Ave, Suite 600<br>
San Francisco, CA 94107<br>
Phone: (804) 123-5432<br>
Email: info@almasaeedstudio.com
</address>
</div>

<div class="col-sm-4 invoice-col">
<strong>Datos de Cliente</strong>
<address>
<br>
795 Folsom Ave, Suite 600<br>
San Francisco, CA 94107<br>
Phone: (555) 539-1037<br>
Email: john.doe@example.com
</address>
</div>

<div class="col-sm-4 invoice-col">
<b>Detalles de Expediente</b><br>
<br>
<b>Nro de Expediente:</b>{{ $expediente->numero}}<br>
<b>Anho:</b> {{ $expediente->anho }}<br>
<b>Caratula:</b>{{ $expediente->caratula }}<br>
<b>Circunscripcion:</b>{{ $expediente->circunscripcion->nombre }}<br>
<b>Juzgado: </b>{{ $expediente->juzgado->nombre }}<br>
<b>Creado: </b>{{ $expediente->created_at }}<br>
<b>Actualizado:</b>{{ $expediente->updated_at }}
</div>

</div>


<div class="row">
<div class="col-12 table-responsive">
<table class="table table-striped">
<thead>
<tr>
<th>Concepto</th>
<th>Monto</th>
<th>Codigo</th>
<th>Fecha</th>
<th>Numero de Expediente</th>
</tr>
</thead>
<tbody>
<tr>
<td>Pago de honorarios</td>
<td>2500000</td>
<td>455-981-221</td>
<td>08/10/2022</td>
<td>123</td>
</tr>

</tr>
</tbody>
</table>
</div>

</div>

<div class="row">

<div class="col-6">

</div>

<div class="col-6">
<p class="lead">Monto a pagar</p>
<div class="table-responsive">
<table class="table">
<tbody><tr>
<th style="width:50%">Subtotal:</th>
<td>$250.30</td>
</tr>
<tr>
<tr>
<th>Total:</th>
<td>$265.24</td>
</tr>
</tbody></table>
</div>
</div>

</div>


<div class="row no-print">
<div class="col-12">
<a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
<button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
Payment
</button>
<button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
<i class="fas fa-download"></i> Generate PDF
</button>
</div>
@endsection
