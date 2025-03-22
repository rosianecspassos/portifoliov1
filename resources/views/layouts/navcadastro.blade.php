<div class="btncadastroconteudo position-absolute top-0 end-0 justify-content-end mt-4 mb-2"> 
<button class="dropbtn">Cadastrar</button>
  <div class="dropdown-content">
    <!--Cadastrar dados principais sobre mim--> 
    <a href="{{route('register')}}">Dados principais</a>
    <!--Cadastrar projetos do portifólio--> 
    <a href="{{route('dashboard')}}">Projetos</a>
    <!--Cadastrar cursos realizados-->
    <a href="{{route('login')}}">Cursos</a>
 <!--Cadastrar no site --> 
 <a href="{{route('register')}}">Cadastro usuário</a>
    <!--Entrar na conta--> 
    <a href="{{route('dashboard')}}">Perfil</a>
    <!--Voltar para tela de cadastro de usuário-->
    <a href="{{route('register')}}">Logout</a>
  </div>
</div> 
  </div>