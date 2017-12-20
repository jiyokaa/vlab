@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Show Computer</div>

                <div class="panel-body">

                <p>{{ $computer->name }}</p>
                
                <a href="{{ $computer->link }}" class="btn btn-default">Click here to start the PC</a>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
