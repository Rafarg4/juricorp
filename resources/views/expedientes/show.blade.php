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

           <form id="pago_expediente_modal" enctype="multipart/form-data">
                @csrf>
            

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


         $.ajax({
            type:'POST',
            url: "/pagoExpedientes",
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {
                    this.reset();
                }
            },
            error: function(response){
                $('#file-input-error').text(response.responseJSON.message);
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

           <form>
            

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
   
        $('#submit1').click(function(){
            var id_expediente = $('#id_expediente').val();
            var concepto_gasto = $('#concepto_gasto').val(); 
            var monto_gasto = $('#monto_gasto').val();
            var fecha_gasto = $('#fecha_gasto').val();
            var archivo_gasto = $('#archivo_gasto').val();
         
                     $.ajax({
               type:'POST',
               url:'/gastoExpedientes',
               data:{  "_token": "{{ csrf_token() }}", concepto_gasto: concepto_gasto, monto_gasto: monto_gasto, fecha_gasto: fecha_gasto, id_expediente: id_expediente, archivo_gasto: archivo_gasto},
               success:function(data) {
                  $('#exampleModal1').modal('hide');
               }
            });


            });
   
   </script>
<!-- MODAL PARA GASTO -->
@endsection