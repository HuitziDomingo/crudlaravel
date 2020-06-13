@extends('dashboard.master')
@section('content')

<a class="btn btn-primary mt-3 mb-3 btn-block" href="{{route("post.create")}}">Crear Nuevo Post</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Posteado</th>
      <th scope="col">Creacion</th>
      <th scope="col">Actualizacion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $item)
        <tr>
          <td>
            {{ $item->id }}
          </td>
          <td>
            {{ $item->title }}
          </td>
          <td>
            {{ $item->posted }}
          </td>
          <td>
            {{ $item->created_at->format('d-m-y') }}
          </td>
          <td>
            {{ $item->updated_at->format('d-m-y') }}
          </td>
          <td>
            <a class="btn btn-success" href="{{route("post.show",$item->id)}}">Ver</a>
            <a class="btn btn-dark" href="{{route("post.edit",$item->id)}}">Actualizar</a>
          <form action="{{route("post.destroy",$item->id)}}" method="post">
            @method("DELETE")
            @csrf
            <button class="btn btn-danger" type="submit">Eliminar</button>
          </form>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>
{{$posts->links()}}
@endsection
    

