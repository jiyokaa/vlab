@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Labs</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            {{ session('status') }}
                        </div>
                    @endif
                    <?= link_to('labs/create', $title = 'Add', ['class' => 'btn btn-primary'], $secure = null); ?>
                    <table class="table">
                        <tr>
                            <th>Lab Name</th>
                            <th>Type</th>
                            <th>Max Computers</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($labs as $lab)
                        <tr>
                            <td><a href="labs/{{ $lab->id }}">{{ $lab->name }}</a></td>
                            <td>{{ $lab->type }}</td>
                            <td>{{ $lab->max_coms }}</td>
                            <td>
                                <?= Form::open(array('url'=>'labs/'.$lab->id,'method'=>'delete')) ?>
                                    <button type="submit" onclick="return confirm('Are you sure to delete Lab?\n The computer in this lab will be unable to access')" class="btn btn-danger">
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
