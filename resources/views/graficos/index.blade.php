@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Estado de expediente</h1>
                </div>
                <div class="col-sm-6">
                
                </div>
            </div>
        </div>
         <div class="content px-3">
        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">


        <figure class="highcharts-figure">
            <div id="container"></div>
    
                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ingresos e egresos</h1>
                </div>
                <div class="col-sm-6">
                
                </div>
            </div>
        </div>
         <div class="content px-3">
        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">


        <figure class="highcharts-figure">
            <div id="container2"></div>
    
                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    </section>


<script type="text/javascript">
    var activo = <?php echo json_encode($activo)?>;
  var paralizado = <?php echo json_encode($paralizado)?>;
  var finalizado = <?php echo json_encode($finalizado)?>;
      Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Estados de expedientes'
    },
    subtitle: {
        text: 'Cantidades: ' +
            '<a href="https://www.ssb.no/en/statbank/table/08940/" ' +
            'target="_blank">segun el estado</a>'
    },
    xAxis: {
        categories: [
            'Detalles',
            '2011',
            '2012',
          
        ],
        crosshair: true
    },
    yAxis: {
        title: {
            useHTML: true,
            text: 'Cantidades de estados'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: false,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Activo',
        data: [activo],

    }, {
        name: 'Paralizado',
        data: [paralizado],

    }, {
        name: 'Finalizado',
        data: [finalizado],

    

    }]
});
      
</script>
<script>
   
    Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Ingresos e egresos totales por mes'
    },
    subtitle: {
        text: 'Detalles: '
    },
    xAxis: {
        categories:  [
        @php
foreach($ingreso as $ingreso){
         echo "'$ingreso->mes',";
        }
       @endphp
    ],
    },
    yAxis: {
        title: {
            useHTML: true,
            text: 'Selecione un mes para ver reportes'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: false,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Ingresos',
        data: [ @php
foreach($ingreso as $ingreso){
         echo "'$ingreso->monto',";
        }
       @endphp]


    }, {
        name: 'Egresos',
        data: [123]

    }]
});
</script>
@endsection
