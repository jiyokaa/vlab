@extends('layouts.4col')

@section('jquery')
<script>
    $(document).ready(function(){
        window.onbeforeunload = function() {
            alert("Bye now!");
        };
    });
</script>
@endsection


@section('content')
<div class="container">
    <div class="row">

        <div class="col-sm-4">
  
        </div>
        <div class="col-sm-4">
            <h2>{{ $computer->name }}</h2> 
        </div>
        <div class="col-sm-4">
        
        </div>            
              
    </div><!-- end row-->

    <div class="row">

        <div class="col-sm-4">
        
        </div>
        <div class="col-sm-4">
            
            <p>
                <iframe src="{{ $computer->link }}" style="position:fixed; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;">Your browser doesn't support iFrames.</iframe> 
                @if ($computer->is_available == '1')
                    <a href="{{ url('/reserve') }}" class="btn btn-default">Click here to lock the PC</a>
                @else
                    <a href="{{ $computer->link }}" class="btn btn-danger">Click here to unlock the PC</a>
                @endif
                    
                    <a href="{{ $computer->link }}" class="btn btn-default">Click here to start the PC</a>
                 </p>
        </div>
        <div class="col-sm-4">

        </div>            
        
    </div><!-- end row-->
</div><!--end container -->
@endsection
