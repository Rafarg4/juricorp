@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <section class="content-header">
        <div class="container-fluid">
    
        <h2 class="h2 text-center mb-5 border-bottom pb-3">Calendario de Audiencia</h2>
        <div id='audiencias'></div>
        </div>
            
<script>
            $(document).ready(function () {
            var SITEURL = "{{ url('/audiencias') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var calendar = $('#audiencias').fullCalendar({
                editable: true,
                editable: true,
                events: SITEURL + "/audiencias",
                displayEventTime: true,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function (inicio_audiencia, fin_audiencia, allDay) {
                    var descipcion_audiencia = prompt('Nombre Audiencia:');
                    var expediente_id = prompt('Expediente:');
                    if (descipcion_audiencia) {
                        var inicio_audiencia = $.fullCalendar.formatDate(inicio_audiencia, "Y-MM-DD HH:mm:ss");
                        var fin_audiencia = $.fullCalendar.formatDate(fin_audiencia, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: SITEURL + "/audiencias_crear",
                            data: {
                                descipcion_audiencia: descipcion_audiencia,
                                inicio_audiencia: inicio_audiencia,
                                fin_audiencia: fin_audiencia,
                                 expediente_id: expediente_id,
                                type: 'create'
                            },
                            type: "POST",
                            success: function (data) {
                                displayMessage("Audiencia creada.");
                                calendar.fullCalendar('renderEvent', {
                                    id: data.id,
                                    expediente_id: expediente_id,
                                    descipcion_audiencia: descipcion_audiencia,
                                    inicio_audiencia: inicio_audiencia,
                                    fin_audiencia: fin_audiencia,
                                    allDay: allDay
                                }, true);
                                calendar.fullCalendar('unselect');
                            }
                        });
                    }
                }
                
                
            });
        });
        function displayMessage(message) {
            toastr.success(message, 'Event');            
        }






</script>
@endsection

