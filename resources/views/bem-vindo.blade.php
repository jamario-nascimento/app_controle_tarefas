Site da aplicação

@auth
    <h3>Usuário autenticado</h3>
    
    <p>  {{ Auth::user()->id }} </p>
    <p>  {{ Auth::user()->name }} </p>
    <p>  {{ Auth::user()->email }}</p>
@endauth

@guest
    <h3>Usuário não autenticado</h3>
    <p>Você precisa estar autenticado para acessar esta aplicação</p>
    <a href="{{ route('login') }}">Entrar</a>
@endguest