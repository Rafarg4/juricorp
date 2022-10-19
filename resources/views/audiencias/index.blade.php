@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/es.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>





    <section class="content-header">


        <div class="container-fluid">
    
        <div class="card">
            <div class="card-body">
        <div class="row">
            <div class="col-12">
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
            <label for="inicio_audiencia">Fecha de audiencia</label>
              <input type="date" class="form-control" name="inicio_audiencia" id="inicio_audiencia" aria-describedby="helpId">
             
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
    

<link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <script>
           
            $(document).ready(function() {
    formulario = $('#formularioAudiencias'); //guarda los datos en la BD     
    //formularioConfirmacion = document.querySelector('#formularioConfirmacion'); 
    
            var audiencia = @json($events);
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev, next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay',
                },

                locale: 'es',
                events: audiencia,
                themeSystem: 'bootstrap4',
                selectable: true,
                selectHelper: true,

                select: function(start, end, allDays) {
                 inicio_fecha = moment(start._d).format('YYYY-MM-DD');
                 fin_fecha = moment(end._d).add('days',1).format('YYYY-MM-DD');
                
                 $('#inicio_audiencia').val(inicio_fecha);
                    $('#audienciaModal').modal('toggle');
                    $('#guardarAudiencia').click(function() {
                        var descripcion_audiencia = $('#descripcion_audiencia').val();
                        var inicio_audiencia = $('#inicio_audiencia').val();
                        var fin_audiencia =$('#inicio_audiencia').val();
 
                        $.ajax({
                            url:"audiencias/",
                            type:"POST",
                            dataType:'json',
                            data:{ "_token": "{{ csrf_token() }}", descripcion_audiencia, inicio_audiencia, fin_audiencia  },
                            success:function(response)
                            {
                                $('#audienciaModal').modal('hide')
                                $('#calendar').fullCalendar('renderEvent', {
                                    'title': response.descripcion_audiencia,
                                    'start' : response.inicio_audiencia,
                                    'end'  : response.fin_audiencia
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
                    var inicio_audiencia = moment(event.start).format('YYYY-MM-DD');
                    var fin_audiencia= moment(event.start).format('YYYY-MM-DD');
                   
                    $.ajax({
                            url:"audiencias/update/" + id,
                            type:"PATCH",
                            dataType:'json',
                            data:{ "_token": "{{ csrf_token() }}",inicio_audiencia, fin_audiencia },
                            success:function(response)
                            {
                                alert("Fecha de Audiencia Actualizada", "Event Updated!", "success");
                            },
                            error:function(error)
                            {
                                console.log(error)
                            },
                        });
                },
                eventResize: function(event) {

                console.log(event);
    if (!confirm("Guardar los cambios?")) {
      event.revert();
    } else {

                var id = event.id;
                var inicio_audiencia = moment(event.start._d).add('days',1).format('YYYY-MM-DD');
                var fin_audiencia= moment(event.end._d).add('days',1).format('YYYY-MM-DD');
                console.log(id + "" + inicio_audiencia + " "+fin_audiencia);
                $.ajax({
                            url:"audiencias/update/" + id,
                            type:"PATCH",
                            dataType:'json',
                            data:{ "_token": "{{ csrf_token() }}",inicio_audiencia, fin_audiencia },
                            success:function(response)
                            {
                                alert("Audiencia Actualizada", "Event Updated!", "success");
                            },
                            error:function(error)
                            {
                                console.log(error)
                            },
                        });
            }

  },
                

                eventClick: function(event){

                    console.log(event);
                    var id = event.id;
                    var descripcion_audiencia= event.title;
                    var inicio_audiencia = moment(event.start._d).add('days',1).format('YYYY-MM-DD');

                    formulario.trigger("reset");
                     $('#inicio_audiencia').val(inicio_audiencia);
                       $('#descripcion_audiencia').val(descripcion_audiencia);


                    $('#audienciaModal').modal('toggle');
                
                }
                /*eventClick: function(event){
                    var id = event.id;
                    if(confirm('Are you sure want to remove it')){
                        $.ajax({
                            url:"audiencias/destroy/"+ id,
                            type:"DELETE",
                            dataType:'json',
                            data:{ "_token": "{{ csrf_token() }}"},
                            success:function(response)
                            {
                                $('#calendar').fullCalendar('removeEvents', response);
                                
                            },
                            error:function(error)
                            {
                                console.log(error)
                            },
                        });
                    }
                }*/
                ,
                selectAllow: function(event)
                {
                    return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1, 'second').utcOffset(false), 'day');
                },
            });
            $("#bookingModal").on("hidden.bs.modal", function () {
                $('#guardarAudiencia').unbind();
            });
            $('.fc-event').css('font-size', '16px');
        });
    </script>





@endsection

