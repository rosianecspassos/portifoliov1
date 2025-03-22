<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
    <head> 
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar dados principais </title> 
@vite('resources/js/app.js')
<script type="text/javascript">
        // Função para adicionar campos de formação
        function adicionarCampoFormacao() {
            var novoCampoFormacao = document.createElement("div");
            novoCampoFormacao.classList.add("campo-formacao");
            novoCampoFormacao.innerHTML = `
                <label for="formacao[]">Formação:</label>
                <input type="text" name="formacao[]" required>
                <button type="button"   class="bg-primary text-light border-0 mt-1" onclick="removerCampo(this)">Remover</button>
                <br>
            `;
            document.getElementById("formacao-container").appendChild(novoCampoFormacao);
        }

        // Função para adicionar campos de instituição de ensino
        function adicionarCampoInstituicao() {
            var novoCampoInstituicao = document.createElement("div");
            novoCampoInstituicao.classList.add("campo-instituicao");
            novoCampoInstituicao.innerHTML = `
                <label for="instituicao[]">Instituição de Ensino:</label>
                <input type="text" name="instituicao[]" required>
                <button type="button" class="bg-primary text-light border-0 mt-1"onclick="removerCampo(this)">Remover</button>
                <br>
            `;
            document.getElementById("instituicao-container").appendChild(novoCampoInstituicao);
        }


        // Função para adicionar campos de grau da formação
        function adicionarCampoGrau() {
            var novoCampoGrau= document.createElement("div");
            novoCampoGrau.classList.add("Campo-grau");
            novoCampoGrau.innerHTML = `
                <label for="grau[]">Nível:</label>
                <input type="text" name="grau[]" required>
                <button type="button" class="bg-primary text-light border-0 mt-1"onclick="removerCampo(this)">Remover</button>
                <br>
            `;
            document.getElementById("grau-container").appendChild(novoCampoGrau);
        }
   // Função para adicionar campos de idiomas
   function adicionarCampoIdioma() {
            var novoCampoIdioma= document.createElement("div");
            novoCampoIdioma.classList.add("Campo-idioma");
            novoCampoIdioma.innerHTML = `
                <label for="idioma[]">Idioma:</label>
                <input type="text" name="idioma[]" required>
                <button type="button" class="bg-primary text-light border-0 mt-1"onclick="removerCampo(this)">Remover</button>
                <br>
            `;
            document.getElementById("idioma-container").appendChild(novoCampoIdioma);
        }

          // Função para adicionar campos de experiência
   function adicionarCampoExp() {
            var novoCampoExp= document.createElement("div");
            novoCampoExp.classList.add("Campo-exp");
            novoCampoExp.innerHTML = `
                <label for="experiencia[]">Experência:</label>
                <input type="text" name="experiencia[]" required>
                <button type="button" class="bg-primary text-light border-0 mt-1"onclick="removerCampo(this)">Remover</button>
                <br>
            `;
            document.getElementById("exp-container").appendChild(novoCampoExp);
        }



        // Função para remover campos
        function removerCampo(button) {
            button.parentElement.remove();
        }
    </script>
     </head> 
     <div class="container m-5">
        <div class="btnAcesso">
     @include('layouts.navlogin')
    </div>
        <h4 class="mb-4 text-center">Cadastro principal da Home</h4> 
     <form action="" method="POST">
     @yield('principaisinfo')

     @yield('dadosacademicos')

     @yield('experiencia')

     @yield('sobre')
     <div class="container text-center"> 
     <button type="submit" class="bg-primary text-light border-0 mt-1 mb-4">Enviar</button>
    </div> 
    </form> 
    </div>
     <body> 
</body>
</html>