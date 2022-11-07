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
    var egreso= {!! json_encode($egreso_var); !!};
    var ingreso= {!! json_encode($egreso_var); !!};
    
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
        categories: ['Enero','Febrero','Marzo','Abril','Mayo',
        'Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre']
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
        data: [ingreso[1],ingreso[2],ingreso[3],ingreso[4],ingreso[5],ingreso[6],ingreso[7],
        ingreso[8],ingreso[9],ingreso[10],ingreso[11],ingreso[12]]



    }, {
        name: 'Egresos',
        data: [egreso[1],egreso[2],egreso[3],egreso[4],egreso[5],egreso[6],egreso[7],
        egreso[8],egreso[9],egreso[10],egreso[11],egreso[12]]

    }]
});
</script>
@endsection
