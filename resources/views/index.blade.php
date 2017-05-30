@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="btn-group btn-group-justified" role="group">
                            <div class="btn-group" role="group">
                                <a class="btn btn-default btn-lg" href="{{ route('user') }}"><span class="glyphicon glyphicon-user"></span> Users</a>
                            </div>
                            <div class="btn-group" role="group">
                                <a class="btn btn-default btn-lg" href="{{ route('faction') }}"><span class="glyphicon glyphicon-th-large"></span> Factions</a>
                            </div>
                            <div class="btn-group" role="group">
                                <a class="btn btn-default btn-lg" href="{{ route('gumball') }}"><span class="glyphicon glyphicon-minus-sign"></span> Gumballs</a>
                            </div>
                            <div class="btn-group" role="group">
                                <a class="btn btn-default btn-lg" href="{{ route('fate') }}"><span class="glyphicon glyphicon-transfer"></span> Fates</a>
                            </div>
                            <div class="btn-group" role="group">
                                <a class="btn btn-default btn-lg" href="{{ route('match') }}"><span class="glyphicon glyphicon-resize-horizontal"></span> Matches</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
