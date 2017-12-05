 @extends('layouts.app')

@section('content')


<table class="table table-striped">
  @include('flash::message')
  @if(isset($sitios))
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Logo</th>
    </tr>
  </thead>

  <tbody>
    @foreach($sitios as $s)
    <tr>
      <td>{{ $s->id}}</td>
      <td>{{ $s->nombreSitio}}</td>
      <td>{{ $s->descripcion}}</td>
      <td>
        <img src="imgSitios/{{ $s->imgUrl}}" class="img-responsive" alt="Responsive image" width="300">
      </td>
      <td>
        
      </td>
      <td> 
        <a href="sitios/{{$s->id}}/edit" class="btn btn-warning btn-xs" >Modificar</a>
        <form action="{{ route('sitios.destroy', $s->id) }}" method="post" >
           <input type="hidden" name="_method" value="delete">
           {{ csrf_field() }}

           <input type="submit" class="btn btn-danger btn-xs" value="Eliminar"></input>  

        </form>
        
      </td>
      
    </tr>


    
    
    @endforeach


    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="css/business-casual.css">
    <script src="js/bootstrap.min.js"></script>
   
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    
    
    <link href="css/starrr.css" rel=stylesheet/>
    <script src="js/starrr.js"></script>


    <hr/>
            Calificar: <span id="Estrellas"></span>
    <hr/>


    <script>
   $('#Estrellas').starrr({
       rating:0,
       change:function(e,valor){
           alert(valor);
           
       }
       
   });
    
    </script>

  </tbody>
  @endif
</table>

@endsection