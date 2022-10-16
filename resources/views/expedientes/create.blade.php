

<style>
    .selection .select2-selection.select2-selection--multiple .select2-selection__rendered .select2-selection__choice {
    background-color: #007bff;
    color: white;
}
.selection .select2-selection.select2-selection--multiple .select2-selection__rendered .select2-selection__choice .select2-selection__choice__remove {
    
    color: white;
}
</style>

@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Crear Expediente</h1>
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
                 {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('expedientes.index') }}" class="btn btn-default">Cancelar</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear cliente</h5>
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
                    @include('clientes.fields')
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
   
        $('#submit').click(function(){
            var nombre = $('#nombre').val();
            var apellido = $('#apellido').val();
            var ci = $('#ci').val();
            var fecha_nacimiento = $('#fecha_nacimiento').val();
            var nacionalidad = $('#nacionalidad').val();
            var distrito_origen = $('#distrito_origen').val();
            var domicilio_particular = $('#domicilio_particular').val();
            var numero_casa = $('#numero_casa').val();
            var barrio = $('#barrio').val();
            var ciudad = $('#ciudad').val();
            var numero_telefono = $('#numero_telefono').val();
            var email = $('#email').val();
            var rede_social = $('#rede_social').val();
            var nombre_apellido_coyuge = $('#nombre_apellido_coyuge').val();
            var ci_coyuge = $('#ci_coyuge').val();
            var empresa_otro = $('#empresa_otro').val();
            var direccion = $('#direccion').val();
            var numero_casa_laboral = $('#numero_casa_laboral').val();
            var telefono_fijo = $('#telefono_fijo').val();
            var telefono_laboral = $('#telefono_laboral').val();
            var email_laboral = $('#email_laboral').val(); 
         
            $.ajax({
               type:'POST',
               url:'/clientes/crear',
               data:{  "_token": "{{ csrf_token() }}", nombre: nombre, apellido: apellido, ci: ci, fecha_nacimiento: fecha_nacimiento, nacionalidad: nacionalidad, distrito_origen: distrito_origen, domicilio_particular: domicilio_particular, numero_casa: numero_casa, barrio: barrio, ciudad: ciudad, numero_telefono: numero_telefono, email: email, rede_social: rede_social, nombre_apellido_coyuge: nombre_apellido_coyuge, ci_coyuge: ci_coyuge, empresa_otro: empresa_otro, direccion: direccion, numero_casa_laboral: numero_casa_laboral, telefono_fijo: telefono_fijo, telefono_laboral: telefono_laboral, email_laboral: email_laboral},
               success:function(data) {
                  $('#exampleModal').modal('hide');
               }
            });


            
            var id = $('#cliente :last').val();
            id++;
            $("#cliente").append($('<option></option>').attr("value", id).text(nombre));

             
            return false;
            });
   
   </script>

<!-- Modal juzgado -->
<div class="modal fade" id="exampleModalj" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Juzgado</h5>
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
                    @include('juzgados.fields')
                </div>

            </div>

            <div class="card-footer">
            </div>
        </div>
    </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" id="prueba" data-dismiss="modal">Cerrar</button>
          {!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'submitj']) !!}
           </form>
      </div>
    </div>
  </div>
</div>

   <script type="text/javascript">
   
        $('#submitj').click(function(){
            var nombre = $('#nombrejuz').val();
            var juez = $('#juez').val();
            var secretario = $('#secretario').val();
            var id_circunscripcion = $('#id_circunscripcion :selected').val();
            $.ajax({
               type:'POST',
               url:'/juzgados/crear',
               data:{  "_token": "{{ csrf_token() }}", nombre: nombre, juez: juez, secretario: secretario, id_circunscripcion: id_circunscripcion},
               success:function(data) {
                  $('#exampleModalj').modal('hide');
               }
            });


            
            var id = $('#juzgado :last').val();
            id++;
            $("#juzgado").append($('<option></option>').attr("value", id).text(nombre));

             
            return false;
            });
   
   </script>
   <!-- Modal circunscripcion -->
<div class="modal fade" id="exampleModalc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Circunscripcion</h5>
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
                     @include('circunscripcions.fields')
                </div>

            </div>

            <div class="card-footer">
            </div>
        </div>
    </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" id="prueba" data-dismiss="modal">Cancelar</button>
          {!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'submitc']) !!}
           </form>
      </div>
    </div>
  </div>
</div>

   <script type="text/javascript">
   
        $('#submitc').click(function(){
            var nombre = $('#nombrecir').val();
            var departamento = $('#departamento').val();
            $.ajax({
               type:'POST',
               url:'/circunscripcions/crear',
               data:{  "_token": "{{ csrf_token() }}", nombre: nombre, departamento: departamento},
               success:function(data) {
                  $('#exampleModalc').modal('hide');
               }
            });


            
            var id = $('#circunscripcion :last').val();
            id++;
            $("#circunscripcion").append($('<option></option>').attr("value", id).text(nombre));

             
            return false;
            });
   
   </script>

   @endsection
