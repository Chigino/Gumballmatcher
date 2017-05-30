@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Users
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        &nbsp;
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        Gumballs
                                    </th>
                                    <th>
                                        Fates
                                    </th>
                                    <th>
                                        Joined
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>
                                            @if ($user->image)<img src="{{ $user->image }}" height="40" title="{{ $user->name }}">@endif
                                        </td>
                                        <td>
                                             {{ $user->name }}
                                        </td>
                                        <td>
                                             {{ $user->username }}
                                        </td>
                                        <td>
                                            {{ $user->gumballs()->count() }}
                                        </td>
                                        <td>
                                            {{ $user->fates()->count() }}
                                        </td>
                                        <td>
                                             {{ $user->created_at->format('d-m-Y') }}
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="3">
                                        None to display
                                    </td>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="col-md-8 col-md-offset-4">
                            <a class="btn btn-link" href="{{ route('home') }}">
                                Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
