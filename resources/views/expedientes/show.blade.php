@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Expediente detalles</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('expedientes.index') }}">
                        Volver
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
            <div class="card-footer clearfix">




</div>
        </div>
    </div>
  @can('ver-pago')
   

           <section class="content-header">
        <div class="container-fluid">
              <div class=row>
                  
                 <div class="col-lg-6">
                      <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Pagos</h3>
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>Añadir Pago</button>
                            </div>
                             <div class="card-body">
                                @include('expedientes.pagos')
                                
                            </div>
                      </div>
                  </div> 
                  <div class="col-lg-6">
                      <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Gastos</h3>
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal1"><i class="fas fa-plus"></i>Añadir Gasto</button>
                            </div>
                             <div class="card-body">
                              @include('expedientes.gastos')
                                
                            </div>
                      </div>
                  </div>  
              </div>
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

<script>
    var ingreso= {!! json_encode($ingreso_var); !!};
    var egreso= {!! json_encode($egreso_var); !!};
    
    console.log(egreso);
    console.log(ingreso);
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
        data: ingreso



    }, {
        name: 'Egresos',
        data: egreso

    }]
});
</script>
               </div>
    </section>
   

@endcan

  


<!-- MODAL PARA PAGOS -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cargar un nuevo pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   
  <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

           <form id="pago_expediente_modal" action="javascript:;" method="post" enctype="multipart/form-data">
                @csrf
            

            <div class="card-body">

                <div class="row">
                    @include('pago_expedientes.fields')
                </div>

            </div>

            <div class="card-footer">
              
               
            </div>

           

        </div>
    </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" id="prueba" data-dismiss="modal">Cerrar</button>
          {!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'submit']) !!}
           </form>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

     $('#pago_expediente_modal').submit(function(e) {
        let formData = new FormData(this);
        
        console.log(formData.get('id_expediente'));
         $.ajax({
            type:'POST',
            url: "/pagoExpedientes",
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            success: (response) => {
                location.reload(true);
                    this.reset();
                
            },
            error: function(response){
               console.log(response.responseJSON.message);
            }
       });
    });
   
   </script>
<!-- MODAL PARA PAGOS -->



<!-- MODAL PARA GASTOS-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Cargar un nuevo gasto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   
  <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

        <form id="gasto_expediente_modal" action="javascript:;" method="post" enctype="multipart/form-data">
            @csrf
            

            <div class="card-body">

                <div class="row">
                    @include('gasto_expedientes.fields')
                </div>

            </div>

            <div class="card-footer">
              
               
            </div>

           

        </div>
    </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" id="prueba" data-dismiss="modal">Cerrar</button>
          {!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'submit1']) !!}
           </form>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
   
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

     $('#gasto_expediente_modal').submit(function(e) {
        let formData = new FormData(this);

         $.ajax({
            type:'POST',
            url: "/gastoExpedientes",
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                location.reload(true);
                    this.reset();
                
            },
            error: function(response){
                console.log(response.responseJSON.message);
            }
       });
    });
   
   
   </script>
<!-- MODAL PARA GASTO -->
@endsection