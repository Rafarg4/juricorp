<div class="table-responsive">
    <table class="table" id="mytable">
        <thead>
        <tr>
             <th style="display:none;">id</th>
            <th>Concepto</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Nro Expediente</th>
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pagoExpedientes as $pagoExpediente)
            <tr>
                <td style="display:none;" class="id">{{ $pagoExpediente->id}}</td>
                <td >{{ $pagoExpediente->concepto }}</td>
            <td >{{number_format ($pagoExpediente->monto) }}</td>
            <td >{{ $pagoExpediente->fecha }}</td>
            <td>{{ $pagoExpediente->expediente->numero }}</td>
            <td>
                    {!! Form::open(['route' => ['pagoExpedientes.destroy', ['pagoExpediente'=>$pagoExpediente->id,'id_expediente'=>$pagoExpediente->id_expediente]], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                       
                        <button type="button" class="btn btn-default btn-xs editarPagoA"><i class="fa fas-solid fa-image fa-lg"></i></button>
                        
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Desea eliminar el pago?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
             <td></td>
                
                <td></td>
                <td></td>
                <td><b>Total de Pagos:</b></td>
                <td><b>{{number_format ($pago_total) }} Gs</b></td>
    </tr>
  </tfoot>
    </table>
</div>





<div class="modal fade" id="verArchivoPago" tabindex="-1" role="dialog" aria-labelledby="verArchivoPagoLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verArchivoPagoLabel">Archivo del pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   
  <div class="content">

        @include('adminlte-templates::common.errors')

        <div class="card">

           
                @csrf
            

            <div class="card-body">

                
                    
                   <img id="archivo_pago_img" src="" width="1100" height="560">

              

            </div>

            <div class="card-footer">
              
               
            </div>

           

        </div>
    </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" id="verArchivoPagobtn" data-dismiss="modal">Cerrar</button>
        
        
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

    $('.btn.btn-default.btn-xs.editarPagoA').click(function(){
        
        var id = $(this).closest("tr").children("td:eq(0)").text();
         $.ajax({
                            url:"/pagoExpediente/archivo",
                            type:"GET",
                            dataType:'json',
                            data:{id:id},
                            success:function(response)
                            {

                                $("#archivo_pago_img").attr("src","/storage/"+response.archivo);
                                $('#verArchivoPago').modal('toggle');

                                
                            },
                            error:function(error)
                            {
                                    console.log("error");
                            },
                        });
                    });
                    
        



  
   
   </script>