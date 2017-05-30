@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Matches
                        </h2>
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('fate') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="user" value="{{ $user->id }}"/>

                            @foreach ($errors->all() as $message)
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @endforeach

                            @define $fates = $user->fates->pluck('id')
                            @define $allianceGumballs = $alliance->gumballs($user->id)->get()

                            @forelse ($groups as $group)
                                <h3>
                                    @if ($group->image)<img src="{{ $group->image }}" height="40" title="{{ $group->name }}">@endif
                                    {{ $group->name }}
                                </h3>

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
                                                Gumballs
                                            </th>
                                            <th>
                                                Available?
                                            </th>
                                            <th>
                                                Matches
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($group->fates->whereNotIn('id', $fates)->sortBy('name') as $fate)
                                            @define $allianceFate = false

                                            @if ($fate->gumballs->count() > 1)
                                                @if ($allianceGumballs->where('id', $fate->gumballs->first()->id)->count() && $user->gumballs->where('id', $fate->gumballs->last()->id)->count())
                                                    @define $allianceFate = true
                                                @else
                                                    @if ($allianceGumballs->where('id', $fate->gumballs->last()->id)->count() && $user->gumballs->where('id', $fate->gumballs->first()->id)->count())
                                                        @define $allianceFate = true
                                                    @endif
                                                @endif
                                            @endif

                                             <tr>
                                                 <td>
                                                     @if ($fate->image)<img src="{{ $fate->image }}" height="40" title="{{ $fate->name }}">@endif
                                                 </td>
                                                 <td>
                                                     {{ $fate->name }}
                                                 </td>
                                                 <td>
                                                     <ul class="small">
                                                         @forelse ($fate->gumballs as $gumball)
                                                             <li>
                                                                 @if ($user->gumballs->where('id', '=', $gumball->id)->count())
                                                                     <span class="glyphicon glyphicon-ok text-success"></span>
                                                                 @else
                                                                     <span class="glyphicon glyphicon-remove text-danger"></span>
                                                                 @endif
                                                                 @if ($gumball->image)<img src="{{ $gumball->image }}" height="25" title="{{ $gumball->name }}">@endif
                                                                 {{ $gumball->name }}
                                                             </li>
                                                         @empty
                                                             <li class="list-unstyled">
                                                                 -
                                                             </li>
                                                         @endforelse
                                                    </ul>
                                                 </td>
                                                 <td>
                                                     @if ($allianceFate)
                                                         <span class="glyphicon glyphicon-ok text-success"></span>
                                                     @else
                                                         <span class="glyphicon glyphicon-remove text-danger"></span>
                                                     @endif
                                                 </td>
                                                 <td>
                                                     <ol class="small">
                                                         @if ($allianceFate)
                                                             @forelse ($alliance->getFateUsersByGumballs($fate->gumballs->pluck('id'), $user) as $allianceUser)
                                                                 <li>
                                                                     {{ $allianceUser->name }}
                                                                 </li>
                                                             @empty
                                                                 <li class="list-unstyled">
                                                                     -
                                                                 </li>
                                                             @endforelse
                                                         @else
                                                             <li class="list-unstyled">
                                                                 -
                                                             </li>
                                                         @endif
                                                     </ol>
                                                 </td>
                                             </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6">
                                                    None to display
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                <hr>
                            @empty
                                <h3>
                                    None to display
                                </h3>
                            @endforelse

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>

                                    <a class="btn btn-link" href="{{ route('home') }}">
                                        Home
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
