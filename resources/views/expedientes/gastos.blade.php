<div class="table-responsive">
    <table class="table" id="mytable">
        <thead>
        <tr>
            <th style="display:none;">id</th>
            <th>Concepto</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Nro de expediente</th>
        
            @can('ver-pago')<th>Accion</th>@endcan
        </tr>
        </thead>
        <tbody>
        @foreach($gastoExpedientes as $gastoExpediente)
            <tr>
                <td style="display:none;" class="id">{{ $gastoExpediente->id}}</td>
                <td>{{ $gastoExpediente->concepto_gasto }}</td>
           <td>{{number_format ($gastoExpediente->monto_gasto) }}</td>
            <td>{{ $gastoExpediente->fecha_gasto }}</td>
            <td>{{ $gastoExpediente->expediente->numero}}</td>
              @can('ver-pago')<td>
                    {!! Form::open(['route' => ['gastoExpedientes.destroy', ['gastoExpediente'=>$gastoExpediente->id,'id_expediente'=>$gastoExpediente->id_expediente]], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <button type="button" class="btn btn-default btn-xs editarGastoA"><i class="fa fas-solid fa-image fa-lg"></i></button>
                        
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Desea eliminar el gasto?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>@endcan
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            
                <td></td>
                <td></td>
                <td></td>
                <td><b>Total de Gastos:</b></td>
                <td><b>{{number_format ($gasto_total)}} Gs</b></td>
    </tr>
  </tfoot>
    </table>
</div>

<div class="modal fade" id="verArchivoGasto" tabindex="-1" role="dialog" aria-labelledby="verArchivoGastoLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verArchivoGastoLabel">Archivo del gasto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   
  <div class="content">

        @include('adminlte-templates::common.errors')

        <div class="card">

           
                @csrf
            

            <div class="card-body">

                
                    
                   <img id="archivo_gasto_img" src="" width="1100" height="560">

              

            </div>

            <div class="card-footer">
              
               
            </div>

           

        </div>
    </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" id="verArchivoGastobtn" data-dismiss="modal">Cerrar</button>
        
        
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

    $('.btn.btn-default.btn-xs.editarGastoA').click(function(){
        
        var id = $(this).closest("tr").children("td:eq(0)").text();
         $.ajax({
                            url:"/gastoExpediente/archivo",
                            type:"GET",
                            dataType:'json',
                            data:{id:id},
                            success:function(response)
                            {

                                $("#archivo_gasto_img").attr("src","/storage/"+response.archivo);
                                $('#verArchivoGasto').modal('toggle');

                                
                            },
                            error:function(error)
                            {
                                    console.log("error");
                            },
                        });
                    });
                    
        



  
   
   </script>