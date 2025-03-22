<div class="menuacesso position-absolute top-0 end-0 justify-content-end mt-4 mb-2"> 
<button class="dropbtn">Acesso</button>
  <div class="dropdown-content">
    <!--Cadastrar no site --> 
    <a href="{{route('register')}}">Cadastro usuário</a>
    <!--Entrar na conta--> 
    <a href="{{route('dashboard')}}">Perfil</a>
    <!--Voltar para tela de login-->
    <a href="{{route('login')}}">Login</a>
        <!--Voltar para tela de cadastro de usuário-->
        <a href="{{route('register')}}">Logout</a>
  </div>
</div> 
  </div>

