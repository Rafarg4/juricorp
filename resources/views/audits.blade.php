 @extends('layouts.app')
 @section('content')

  <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Auditoria</h1>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
               
               <div class="table-responsive" style="padding:15px;">
    <table class="table" id="myTable">
      <thead>
            <tr>
              <th>Model</th>
              <th>Accion</th>
              <th>Usuario</th>
              <th>Tiempo</th>
              <th>Old Values</th>
              <th>New Values</th>
            </tr>
          </thead>
          <tbody id="audits">
            @foreach($audits as $audit)
              <tr>
                <td>{{ $audit->auditable_type }} (id: {{ $audit->auditable_id }})</td>
                <td>{{ $audit->event }}</td>
                <td>{{ $audit->user->name }}</td>
                <td>{{ $audit->created_at }}</td>
                <td>
                  <table class="table">
                    @foreach($audit->old_values as $attribute => $value)
                      <tr>
                        <td><b>{{ $attribute }}</b></td>
                        <td>{{ $value }}</td>
                      </tr>
                    @endforeach
                  </table>
                </td>
                <td>
                  <table class="table">
                    @foreach($audit->new_values as $attribute => $value)
                      <tr>
                        <td><b>{{ $attribute }}</b></td>
                        <td>{{ $value }}</td>
                      </tr>
                    @endforeach
                  </table>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
    
      </div>
                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

                        
                  
                

   