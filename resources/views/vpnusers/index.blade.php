@extends('dashboard')


@section('content')


    @if(! $users->count())
        <div class="row">
            <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">No VPN users</span>
                        <p>You don't have any vpn users yet. Before creating a vpn server you must create one user.</p>
                    </div>
                </div>
            </div>
        </div>
    @else

        <div class="row">
            <div class="col s12">
                <h4>Users</h4>
            </div>
            <div class="col s12 m6">
                <ul class="collection">
                @foreach ($users as $user)
                    <li class="collection-item dismissable"><div>{{ $user->name }}<a  class="secondary-content"><i class="material-icons" onclick="checkDelete('{{ $user->name }}')">delete</i></a></div></li>
                @endforeach
                </ul>
            </div>
        </div>
    @endif
    <p>Create a vpn user</p>
    {!! Form::open(['url' => 'vpnusers']) !!}
    <div class="row">
        <div class="input-field col s6">
            {!! Form::label('name','username') !!}
            {!! Form::text('name',null,['class'=>'validate']) !!}
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password', array('class' => 'validate')) !!}
        </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="submit">Create user
        <i class="material-icons right"></i>
    </button>
    {!! Form::close() !!}

    @if($error)
        <script>Materialize.toast('{{ $error }}', 4000)</script>
    @endif

    <script>
        function checkDelete(name) {
            if (confirm('Really delete?')) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'DELETE',
                    url: '/vpnusers/'+name,
                    success: function(){
                        window.location.href = "{{ URL::to('vpnusers')}}";
                    }
                });
            }
        }
    </script>

    @include('errors.list')

@stop