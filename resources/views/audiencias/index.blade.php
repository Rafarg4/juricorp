@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>





    <section class="content-header">


        <div class="container-fluid">
    
        
        <div class="row">
            <div class="col-12">
                       <h2 class="h2 text-center mb-5 border-bottom pb-3">Calendario de Audiencia</h2>
                <div class="col-md-11 offset-1 mt-5 mb-5">

                    <div id="calendar">

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
             @include('audiencias.fields')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="guardarAudiencia" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>  

  
    <script>
           
            $(document).ready(function() {
         
            var audiencia = @json($events);
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev, next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay',
                },
                events: audiencia,
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDays) {
                    $('#audienciaModal').modal('toggle');
                    $('#guardarAudiencia').click(function() {
                        var descripcion_audiencia = $('#descripcion_audiencia').val();
                        var inicio_audiencia = $('#inicio_audiencia').val();
                        var fin_audiencia = $('#fin_audiencia').val();
                        console.log(fin_audiencia);
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
                                    'start' : response.fin_audiencia,
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
                    var fin_audiencia= moment(event.end).format('YYYY-MM-DD');
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
                eventClick: function(event){
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
                },
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

