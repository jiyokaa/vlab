@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $lab->name }} Computer lists</div>

                <div class="panel-body">
                   <?= link_to('computers/create/?id='.$lab->id, $title = 'Add new machine', ['class' => 'btn btn-primary'], $secure = null); ?>
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <tr>
                            <th>Computer Name</th>
                            <th>IP</th>
                            <th>Link</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($computers as $computer)
                        <tr>
                            <td><a href="{{ url('computers') }}/{{$computer->id}}">{{ $computer->name }}</a></td>
                            <td>{{ $computer->ip }}</td>
                            <td><a href ="{{ $computer->link }}" target="_blank"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
                            <td>
                                <?= Form::open(array('url'=>'computers/'.$computer->id,'method'=>'delete')) ?>
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                <?= Form::close() ?>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
