@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Computers</div>

                <div class="panel-body">

                    <?= link_to('computers/create', $title = 'Add', ['class' => 'btn btn-primary'], $secure = null); ?>
                    <hr/>
                    
                    <table class="table">
                        <tr>
                            <th>Computer Name</th>
                            <th>IP</th>
                            <th>Max Computers</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($labs as $lab)
                        <tr>
                            <td>{{ $lab->name }}</td>
                            <td>{{ $lab->type }}</td>
                            <td>{{ $lab->max_coms }}</td>
                            <td>
                                <?= Form::open(array('url'=>'labs/'.$lab->id,'method'=>'delete')) ?>
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
