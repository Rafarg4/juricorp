

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
            <div class="card-footer clearfix">
<button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>Añadir Pago</button>


<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal1"><i class="fas fa-plus"></i>Añadir Gasto</button>
</div>
        </div>
    </div>
  
           <section class="content-header">
        <div class="container-fluid">
              <div class=row>
                  
                 <div class="col-lg-6">
                      <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Pagos</h3>
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
                            </div>
                             <div class="card-body">
                              @include('expedientes.gastos')
                                
                            </div>
                      </div>
                  </div>  
              </div>
               </div>
    </section>
   


@endsection
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


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

           <form>
            

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
        
        <button type="button" class="btn btn-secondary" id="prueba" data-dismiss="modal">Close</button>
          {!! Form::submit('Save', ['class' => 'btn btn-primary', 'id' => 'submit']) !!}
           </form>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
   
        $('#submit').click(function(){
            var expediente_id = $('#expediente_id').val();
            var concepto = $('#concepto').val();
            var monto = $('#monto').val();
            var fecha = $('#fecha').val();
         
         
            $.ajax({
               type:'POST',
               url:'/pagoExpedientes',
               data:{  "_token": "{{ csrf_token() }}", concepto: concepto, monto: monto, fecha: fecha, expediente_id: expediente_id},
               success:function(data) {
                  $('#exampleModal').modal('hide');
               }
            });


            });
   
   </script>
<!-- MODAL PARA PAGOS -->



<!-- MODAL PARA GASTOS-->

<!-- MODAL PARA GASTO -->