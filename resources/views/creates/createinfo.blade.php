<div class="container"> 
<div class= "row"> 
    <div class="col">
    <label for="inputCargo" class="form-label fw-bold">Cargo atual: </label>
    <input type="text" class="inputCargo" placeholder="Desenvolvedor Jr." name="cargo" id="cargo"> <br> 
    <label for="inputTitulo" class="form-label fw-bold">Título acadêmico: </label>
    <input type="text" class="inputTitulo" placeholder="Especialista" name="titulo" id="titulo"> <br> 
</div>
<div class="col">
<label for="idioma" class="form-label fw-bold">Idiomas: </label>
    <input type="text" class="idioma" placeholder="Inglês" name="idioma" id="idioma"> <br> 
    <div id="idioma-container">
            <!-- Campos de grau serão adicionados aqui -->
        </div>
        <button type="button"  class="bg-primary text-light border-0 mt-1"  onclick="adicionarCampoIdioma()">Adicionar</button>
        <br><br>

<label for="interesses" class="form-label fw-bold">Àreas de Interesse: </label>
    <input type="text" class="interesses" placeholder="Desenvolvedor" name="interesses" id="interesses"> <br> 

</div>
</div>