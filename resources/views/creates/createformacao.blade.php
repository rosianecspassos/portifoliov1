
<div class="container"> 
<div class = "row">
        <div class="col">
<label for="formacao" class="form-label fw-bold">Formação acadêmica: </label>
    <input type="text" class="formacao" placeholder="Sistemas de Informação" name="formacao" id="formacao"> <br> 
<!-- Contêiner para campos de formação -->
<div id="formacao-container">
            <!-- Campos de formação serão adicionados aqui -->
        </div>
        <button type="button" class="bg-primary text-light border-0 mt-1"   onclick="adicionarCampoFormacao()">Adicionar</button>
        <br><br>

        <label for="intituicao" class="form-label fw-bold">Instituição de ensino: </label>
    <input type="text" class="intituicao" placeholder="UNIPAM" name="intituicao" id="intituicao"> <br> 

        <!-- Contêiner para campos de instituição -->
        <div id="instituicao-container">
            <!-- Campos de instituição serão adicionados aqui -->
        </div>
        <button type="button"  class="bg-primary text-light border-0 mt-1"  onclick="adicionarCampoInstituicao()">Adicionar</button>
        <br><br>
</div> 


<div class="col">
<label for="grau" class="form-label fw-bold">Nível: </label>
    <input type="text" class="grau" placeholder="Graduação" name="grau" id="grau"> <br> 
    <div id="grau-container">
            <!-- Campos de grau serão adicionados aqui -->
        </div>
        <button type="button"  class="bg-primary text-light border-0 mt-1"  onclick="adicionarCampoGrau()">Adicionar</button>
        <br><br>

</div> 
</div> 
</div>







