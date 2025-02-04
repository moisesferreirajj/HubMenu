@extends('layouts.app')
@section('title', 'HubMenu | Login')

@section('content')
    <div class="logindrm">
        <div class="card-form">
    <form class="frm">
        <input type="text" class="inputxt" placeholder="Email">
        <input type="password" class="inputxt" placeholder="Senha">
        <a href="/forgot"  class="forgot">Esqueceu a Senha</a>
    </form>
        <input type="submit" class="log-btn" >
        <p> Não possuí conta?
            <a href="/sign" class="nav-sign">Clique aqui!</a>
        </p>
        </div>
    </div>
@endsection