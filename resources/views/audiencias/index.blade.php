@extends('layouts.app')

@section('content')







    <section class="content-header">


        <div class="container-fluid">
    
        <div class="card">
            <div class="card-body">
        <div class="row">
            <div class="col-12 ">
                       <h2 class="h2 text-center mb-5 border-bottom pb-3">Calendario de Audiencia</h2>
                <div class="col-md-12">

                    <div id="calendar">

                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
          
    <div class="modal fade" id="audienciaModal" tabindex="-1" aria-labelledby="audienciaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="audienciaModalLabel">Audiencia descripcion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
             <form action="" id="formularioAudiencias">

        {!! csrf_field() !!} <!--  permite identificar los datos de este formulario -->


          <div class="form-group">
            <label for="descripcion_audiencia">Descripcion de Audiencia</label>
              <input type="text" class="form-control" name="descripcion_audiencia" id="descripcion_audiencia" aria-describedby="helpId" placeholder="Descripcion de la audiencia">
             
            </div>
            <div class="form-group">
            <label for="id_expediente">Numero de expediente</label>
              {!! Form::select('id_expediente',  $expediente,null, ['id'=>'id_expediente','class'=> 'form-control custom-select','placeholder'=> 'Seleccionar un expediente']) !!}
            </div>
           
           <div class="form-group">
            <label for="inicio_audiencia">Fecha de audiencia</label>
              <input type="datetime-local" class="form-control" name="inicio_audiencia" id="inicio_audiencia" aria-describedby="helpId">
             
            </div>

           

        </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" id="guardarAudiencia" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>  

  <div class="modal fade" id="audienciaModal2" tabindex="-1" aria-labelledby="audienciaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="audienciaModalLabel">Audiencia descripcion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
             <form action="" id="formularioAudiencias2">

        {!! csrf_field() !!} <!--  permite identificar los datos de este formulario -->


          <div class="form-group">
            <label for="descripcion_audiencia2">Descripcion de Audiencia</label>
              <input type="text" class="form-control" name="descripcion_audiencia2" id="descripcion_audiencia2" aria-describedby="helpId" placeholder="Descripcion de la audiencia">
             
            </div>
            <div class="form-group">
            <label for="id_expediente2">Numero de expediente</label>
              {!! Form::select('id_expediente',  $expediente,null, ['id'=>'id_expediente2','class'=> 'form-control custom-select','placeholder'=> 'Seleccionar un expediente']) !!}
            </div>
           <div class="form-group">
            <label for="inicio_audiencia2">Fecha de audiencia</label>
              <input type="datetime-local" class="form-control" name="inicio_audiencia2" id="inicio_audiencia2" aria-describedby="helpId">
             
            </div>

           

        </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" id="borrarAudiencia" class="btn btn-danger">Borrar</button>
          <button type="button" id="guardarAudiencia2" class="btn btn-primary">Guardar</button>
          
        </div>
      </div>
    </div>
  </div>  
    


    <script>
           
            $(document).ready(function() {
    formulario = $('#formularioAudiencias');
    
            var audiencia = @json($events);
            var calendar = $('#calendar').fullCalendar({
                header: {
                    left: 'prev, next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay',
                },

                locale: 'es',
                eventSources: [{
                url: 'audiencias/mostrar',
                format: 'json',
                type: 'get',
                extraParams:{
                _token: "{{ csrf_token() }}"
             }

                }],
                themeSystem: 'standard',
                selectable: true,
                selectHelper: true,
                 
                select: function(start, end, allDays) {
                 $('#formularioAudiencias')[0].reset();   
                 inicio_fecha = moment(end._d).format('YYYY-MM-DD HH:MM:SS');
                
                 $('#inicio_audiencia').val(inicio_fecha);
                 $('#audienciaModal').modal('toggle');
                    $('#guardarAudiencia').click(function() {
                        var descripcion_audiencia = $('#descripcion_audiencia').val();
                        var inicio_audiencia = $('#inicio_audiencia').val();
                        var id_expediente =$('#id_expediente').val();
 
                        $.ajax({
                            url:"audiencias/",
                            type:"POST",
                            dataType:'json',
                            data:{ "_token": "{{ csrf_token() }}", descripcion_audiencia, inicio_audiencia, id_expediente },
                            success:function(response)
                            {
                                $('#audienciaModal').modal('hide');
                                $('#calendar').fullCalendar('renderEvent', {
                                    'title': response.descripcion_audiencia,
                                    'start' : response.inicio_audiencia
                                });
                            },
                            error:function(error)
                            {
                                    console.log("error");
                            },
                        });
                    });
                },
                editable: true,
                eventDrop: function(event) {
                    var id = event.id;
                    var inicio_audiencia = moment(event.start).format('YYYY-MM-DD HH:MM:SS');
                    var descripcion_audiencia = event.title;
                    var id_expediente = event.id_expediente;

                    $.ajax({
                            url:"audiencias/update/" + id,
                            type:"PATCH",
                            dataType:'json',
                            data:{ "_token": "{{ csrf_token() }}",inicio_audiencia,id_expediente,descripcion_audiencia },
                            success:function(response)
                            {
                                alert("Fecha de Audiencia Actualizada", "Event Updated!", "success");
                            },
                            error:function(error)
                            {
                                console.log(error);
                            },
                        });
                },
                

                eventClick: function(event){

                    
                    var id = event.id;
                    var descripcion_audiencia= event.title;
                    var inicio_audiencia = moment(event.start._d).format('YYYY-MM-DD HH:MM:SS');
                    var id_expediente = event.id_expediente;


                    $('#formularioAudiencias')[0].reset();
                    $('#formularioAudiencias2')[0].reset();

                     
                     $('#inicio_audiencia2').val(inicio_audiencia);
                     $('#descripcion_audiencia2').val(descripcion_audiencia);
                     $('#id_expediente2').val(id_expediente);


                    $('#audienciaModal2').modal('toggle');
                    $('#guardarAudiencia2').click(function() {
                        var descripcion_audiencia = $('#descripcion_audiencia2').val();
                        var inicio_audiencia = $('#inicio_audiencia2').val();
                        var id_expediente =$('#id_expediente2').val();
                        $.ajax({
                            url:"audiencias/update/" + id,
                            type:"PATCH",
                            dataType:'json',
                            data:{ "_token": "{{ csrf_token() }}", descripcion_audiencia, inicio_audiencia, id_expediente },
                            success:function(response)
                            {
                                $('#audienciaModal2').modal('hide');
                                $('#formularioAudiencias')[0].reset();

                            },
                            error:function(error)
                            {
                                    console.log("error");
                            },
                        });
                    });
                    $('#borrarAudiencia').click(function() {
                        var descripcion_audiencia = $('#descripcion_audiencia').val();
                        var inicio_audiencia = $('#inicio_audiencia').val();
                        var id_expediente =$('#id_expediente').val();
                        $.ajax({
                            url:"audiencias/destroy/" + id,
                            type:"delete",
                            dataType:'json',
                            data:{ "_token": "{{ csrf_token() }}"},
                            success:function(response)
                            {
                                $('#audienciaModal2').modal('hide');
                                $('#formularioAudiencias2')[0].reset();

                            },
                            error:function(error)
                            {
                                    console.log("error");
                            },
                        });
                    });
                     $("#audienciaModal2").on("hidden.bs.modal", function () {
                        $('#guardarAudiencia2').unbind();
                     $('#borrarAudiencia').unbind();
               
                    });
                    
                }
               
                
            });
            
            $('#audienciaModal').on('hidden.bs.modal', function () {
            calendar.fullCalendar('refetchEvents');
            });
             $("#audienciaModal").on("hidden.bs.modal", function () {
                $('#guardarAudiencia2').unbind();
                $('#borrarAudiencia').unbind();
                $('#guardarAudiencia').unbind();
            });
            $('#audienciaModal2').on('hidden.bs.modal', function () {
            calendar.fullCalendar('refetchEvents');
            });
            $('.fc-event').css('font-size', '16px');
            $("#audienciaModal").on("hidden.bs.modal", function () {
                $('#guardarAudiencia').unbind();
            });
        });
    </script>





@endsection

