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



                {{--  <p>{{ $computer->name }}</p>  --}}
                <iframe src="{{ $computer->link }}" style="border: 0; width: 1024px; height: 768px">Your browser doesn't support iFrames.</iframe>
                {{--  <a href="{{ $computer->link }}" class="btn btn-default">Click here to start the PC</a>  --}}

              
    </div>
</div>
@endsection
