@extends('layouts.4col')

@section('content')
<div class="container">
    <div class="row">
        
        <h4> Lab lists</h4>
        
        @if (session('status'))
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    {{ session('status') }}
            </div>
        @endif

    </div><!-- end row -->


    <div class="row">
         <table class="table">
                        <tr>
                            <th>Lab Name</th>
                            <th>Type</th>
                            <th>Max Computers</th>
                            @if(!Auth::guest())
                                @if (Auth::user()->type=='Admin')
                                    <th>Delete</th>
                                @endif
                            @endif
                        </tr>
                        @foreach ($labs as $lab)
                        <tr>
                            <td><a href="labs/{{ $lab->id }}">{{ $lab->name }}</a></td>
                            <td>{{ $lab->type }}</td>
                            <td>{{ $lab->max_coms }}</td>
                            @if(!Auth::guest())
                                @if (Auth::user()->type=='Admin')
                                    <td>
                                        <?= Form::open(array('url'=>'labs/'.$lab->id,'method'=>'delete')) ?>
                                            <button type="submit" onclick="return confirm('Are you sure to delete Lab?\n The computer in this lab will be unable to access')" class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        <?= Form::close() ?>
                                    </td>
                                @endif
                            @endif
                        </tr>
                        @endforeach
        </table>
    </div><!-- end row -->
    <div class="row">
        <div class="addbutton">
            <?= link_to('labs/create', $title = 'Add', ['class' => 'btn btn-primary'], $secure = null); ?>
        </div>
    </div><!-- end row -->

</div><!-- end container -->
     
@endsection
