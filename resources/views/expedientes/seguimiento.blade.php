<div class="table-responsive" style="padding:15px;">
    <table class="table" id="myTable">
        <thead>
        <tr>
        <th>Fecha</th>
        <th>Curso Actividad Expediente</th>
        <th>Escrito</th>
        <th>Proximo Paso</th>
        <th>Preparado por</th>
        <th>Controlado por</th>
        <th>Supervision </th>
        </tr>
        </thead>
        <tbody>
        @foreach($seguimientos as $seguimiento)
            <tr>
                <td>{{ $seguimiento->fecha }}</td>
            <td>{{ $seguimiento->curso_actividad_expediente }}</td>
            <td><a href="{{route('seguimiento.download_escrito',$seguimiento->id)}}"><img src="/pdf.jpg" width="40" height="40"></a></td>
            <td>{{ $seguimiento->proximo_paso }}</td>
            <td>{{ $seguimiento->preparado_por }}</td>
            <td>{{ $seguimiento->controlado_por }}</td>
            <td>{{ $seguimiento->supervision }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
