@extends('layouts.app')

@section('content')
<div class="container">
    <link rel="stylesheet" href="css/business-casual.css">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    @if(isset($edit))

                       @include('layouts.modificarSitio')

                    @else
                       @include('layouts.formulario')

                    @endif 
                    
                    







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
