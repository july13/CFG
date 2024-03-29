@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
     <a href="{{route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a><hr>
     <table class="table table-striped">
         <thead>
             <th>ID</th>
             <th>Nombre</th>
             <th>Correo</th>
             <th>Tipo</th>
             <th>Acción</th>
         </thead>
         <tbody>
             @foreach($userd as $user)
                 <tr>
                     <td>{{ $user->id }}</td>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->email }}</td>
                     <td>
                         @if($user->type == "admin")
                             <span class="label label-danger">{{ $user->type }}</span>
                         @else
                             <span class="label label-primary">{{ $user->type }}</span>
                         @endif
                     </td>
                     <td><a href="" class="btn btn-danger"></a> <a href="" class="btn btn-warning"></a></td>
                 </tr>
             @endforeach
         </tbody>
     </table>  
     {{!! $user->render() !!}}  
@endsection 