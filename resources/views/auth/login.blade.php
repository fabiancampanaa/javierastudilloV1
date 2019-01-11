@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container col-md-6 .offset-md-3">
        <div class="card card-default">
            <div class="card-header">
                <div class="row">
                    <div class="col col-md-4 text-center"><img src="/img/logo.jpg" width="140"></div>
                    <div class="col col-md-6"><h2 class="panel-title">Bienvenido a Javiera Astudillo</h2></div>
                </div>               
            </div>
            <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Ingresa tu email">
                        {!! $errors->first('email','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label for="email">Contraseña</label>
                            <input class="form-control" type="password" name="password" placeholder="Ingresa tu password">
                            {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                    </div>
                    <button class="btn btn-primary btn-block">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection