@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Fates
                            <span class="small pull-right">
                                ({{ $user->fates->count() }} / {{ $fates->count() }})
                            </span>
                        </h2>
                    </div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('fate') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="user" value="{{ $user->id }}"/>

                            @foreach ($errors->all() as $message)
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @endforeach

                            @forelse ($groups as $group)
                                <h3>
                                    @if ($group->image)<img src="{{ $group->image }}" height="40" title="{{ $group->name }}">@endif
                                    {{ $group->name }}
                                    <span class="small pull-right">
                                        ({{ $user->fates->where('group_id', $group->id)->count() }} / {{ $group->fates->count() }})
                                    </span>
                                </h3>

                                <span class="pull-right">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="toggle">
                                        Toggle All
                                    </button>
                                </span>

                                <table class="table table-striped table-hover" data-toggle="container">
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
                                                Completed
                                            </th>
                                            <th>
                                                Linked?
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($group->fates->sortBy('name') as $fate)
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
                                                     @define $linked = $user->fates->where('id', $fate->id)

                                                     @if ($linked->count())
                                                         {{ $linked->first()->updated_at->format('d-m-Y') }}
                                                     @else
                                                         -
                                                     @endif
                                                 </td>
                                                 <td>
                                                    <input type="checkbox" name="fates[]" value="{{ $fate->id }}" {{ ($linked->count() || old('fates[' . $fate->id . ']') ? 'checked' : '') }} />
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
