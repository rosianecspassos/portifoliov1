<div class="container-fluid"> 

<div class="row">
<div class="col-md-3 text-center">
<div class="card  pt-2 pb-5">



<img src="{{ auth()->check() && auth()->user()->foto_perfil ? asset(auth()->user()->foto_perfil) : asset('images/rosiane.png') }}" class="bg-light rounded-circle mt-3 mb-4" id="profile-image">

      <div class="card-body cardprincipal">
      @foreach($principais as $principal)  
<!--<img src="images/rosiane.png" class=" bg-light rounded-circle mt-3 mb-4"> -->


       
        <h1 class="mb-0">{{ $principal->nome }} </h1>

    
        <span class="badge text-bg-primary"> {{ $principal->titulo_academico }} </span>  

     
        </div>

        <div class="text-card  mt-2 text-center idiomas"> 
        @php
    // Mapeamento de idiomas para cores específicas
    $idiomaCores = [
        'espanhol' => 'danger',
        'inglês' => 'primary',
        'português' => 'success',
    ];
@endphp

<p class="card-text mb-0">
@if(is_array($principal->idioma) && count($principal->idioma) > 0)
    @foreach($principal->idioma as $item)
        @php
            // Se for string com vírgulas, transforma em array
            $idiomasSeparados = explode(',', $item);
        @endphp
        @foreach($idiomasSeparados as $idiomaRaw)
            @php
                $idioma = strtolower(trim(str_replace(['[', ']', '"'], '', $idiomaRaw)));
                $cor = $idiomaCores[$idioma] ?? 'secondary';
            @endphp
            <span class="badge bg-{{ $cor }}">{{ ucfirst($idioma) }}</span>
        @endforeach
    @endforeach
@elseif(!is_array($principal->idioma))
    @php
        $idiomasSeparados = explode(',', $principal->idioma);
    @endphp
    @foreach($idiomasSeparados as $idiomaRaw)
        @php
            $idioma = strtolower(trim(str_replace(['[', ']', '"'], '', $idiomaRaw)));
            $cor = $idiomaCores[$idioma] ?? 'secondary';
        @endphp
        <span class="badge bg-{{ $cor }}">{{ ucfirst($idioma) }}</span>
    @endforeach
@endif

</p>
      </div>



<div class = "redes_sociais"> 
      <ul class="mt-5 text-center">  
      <li><a href="https://github.com/rosianecspassos"><i class="fa fa-github" style="font-size:24px"></i></a></li>
      <li><a href="https://api.whatsapp.com/send?phone=5534996619291"><i class="fa fa-whatsapp" style="font-size:24px"></i></a></li>
      <li><a href="https://www.linkedin.com/in/rosiane-cristina-souza-dos-passos-38390645/"><i class="fa fa-linkedin" style="font-size:24px"></i></a></li>
</ul> 
</div> 
    </div>
</div> 
<div class="col-md-9">
<div class="card pt-2 pb-5">
      <div class="card-body ">
        <div class="row border border-top-0 border-start-0 border-end-0">
            <div class="col p-4">
        <h5 class="card-title mt-2"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Formação acadêmica</h5>


<p class="card-text mb-0 text-light"> 
@foreach($principais as $principal)

    @if(isset($principal->formacoes_completas) && is_array($principal->formacoes_completas) && count($principal->formacoes_completas) > 0)
        @foreach($principal->formacoes_completas as $formacao_completa)
            {{ $formacao_completa['formacao'] }} |
            {{ $formacao_completa['grau'] }} |
            {{ $formacao_completa['instituicao'] }}
            <br>
        @endforeach
    @else
        <p>Nenhuma formação informada.</p>
    @endif
    
@endforeach

        </p> 

        </div>
   
    <div class="col col_experiencia" style="display: block !important;">
        <span class="card_experiencia"> 
    <h5 class="card-title mt-2"><i class="fa fa-briefcase" aria-hidden="true"></i> Experiência</h5> </span> 
    <div class="experiencia text-light">
    @if(is_array($principal->experiencia) && count($principal->experiencia) > 0)
        <ul class="lista-experiencia">
            @foreach($principal->experiencia as $item)
                @foreach(explode(',', $item) as $experienciaSeparada)
                    <li>{{ trim(str_replace(['[', ']', '"'], '', $experienciaSeparada)) }}</li>
                @endforeach
            @endforeach
        </ul>
    @elseif(!empty($principal->experiencia))
        <ul class="lista-experiencia">
            @foreach(explode(',', $principal->experiencia) as $experienciaSeparada)
                <li>{{ trim(str_replace(['[', ']', '"'], '', $experienciaSeparada)) }}</li>
            @endforeach
        </ul>
    @endif
</div>
</div> 

</div>

     

<div class="mt-4"> 
    <h5 class="card-title"><i class="fa fa-flag" aria-hidden="true"></i> Áreas de Interesse</h5> 
    @php
    // Lista de classes Bootstrap para cores dos badges
    $badgeColors = ['danger', 'success',  'warning', 'info', 'dark' ];
@endphp
@if(is_array($principal->areas) && count($principal->areas) > 0)
    @foreach($principal->areas as $item)
        @php
            // Garante que cada item seja separado corretamente se vier como string
            $areasSeparadas = explode(',', $item);
        @endphp
        @foreach($areasSeparadas as $index => $areaRaw)
            @php
                $area = trim(str_replace(['[', ']', '"'], '', $areaRaw));
                $color = $badgeColors[$index % count($badgeColors)];
            @endphp
            <span class="badge bg-{{ $color }}">{{ $area }}</span>
        @endforeach
    @endforeach
@elseif(!is_array($principal->areas))
    @php
        $areasSeparadas = explode(',', $principal->areas);
    @endphp
    @foreach($areasSeparadas as $index => $areaRaw)
        @php
            $area = trim(str_replace(['[', ']', '"'], '', $areaRaw));
            $color = $badgeColors[$index % count($badgeColors)];
        @endphp
        <span class="badge bg-{{ $color }}">{{ $area }}</span>
    @endforeach
@endif

           <!--Exibe valor como lista separada por "," para transformar o array em uma string. -->
           <p class="card-text mb-0">
   
</p>
    
   <!-- <span class="badge text-bg-warning"><span>-->
  <!--  <span class="badge text-bg-success"></span>-->
</div> 

<div class="mt-3"> 
 
@endforeach
<a href="" class="btn text-light"> Saiba <i class="fa fa-plus" aria-hidden="true"></i></a>
</div> 
    </div>
</div> 

</div>


</div>

</div> 
