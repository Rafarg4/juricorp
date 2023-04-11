<div class="table-responsive" style="padding:15px;">
    <table class="table" id="myTabla">
        <thead>
        <tr>
            <th>Usuario</th>
        <th>Email</th>
        <th>Rol</th>
        <th>Nro expediente</th>
        <th>Creado</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
              <td>{{implode(" ",$user->getRoleNames()->toArray())}}</td>
              <td>{{ $user->expediente->numero ??'Sin asignar'}}</td>
            <td>{{ $user->created_at }}</td>
            </tr>
        </tbody>
    </table>
</div>
