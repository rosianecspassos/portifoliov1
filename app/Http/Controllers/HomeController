<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Principal;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage; // Importe a classe Storage
//use Illuminate\View\View;
// 'foto' => $foto ? $foto->store('public/fotos') : null,  // Caso haja uma foto

class HomeController extends Controller
{
    //Retorna a view Home
    public function index(){
        $principais = Principal::all(); 
        foreach ($principais as $principal) {
            $formacoes = json_decode($principal->formacao, true) ?? [];
            $graus = json_decode($principal->grau, true) ?? [];
            $instituicoes = json_decode($principal->instituicao, true) ?? [];
    
            $formacoes_completas = [];
            foreach ($formacoes as $key => $formacao) {
                $formacoes_completas[] = [
                    'formacao' => isset($formacao) ? trim(str_replace(['[', ']', '"', ','], '', $formacao)) : '',
                    'grau' => isset($graus[$key]) ? trim(str_replace(['[', ']', '"', ','], '', $graus[$key])) : '',
                    'instituicao' => isset($instituicoes[$key]) ? trim(str_replace(['[', ']', '"', ','], '', $instituicoes[$key])) : '',
                ];
            }
    
            $principal->formacoes_completas = $formacoes_completas;
    
        }

        return view('application.index', ['principais'=>$principais]); 
    }

    public function create(){
    //Retorna a view do formulário de criação
        return view('cadastros.dadosprincipais');
    }
    
            
//Salvar
    public function store(Request $request){
      // Captura os dados do formulário como arrays
      $idioma = $request->input('idioma', []);  // Caso o campo 'idioma' esteja vazio, será atribuído um array vazio
      $areas = $request->input('areas', []);
      $formacao = $request->input('formacao', []);
      $experiencia = $request->input('experiencia', []);
      $instituicao = $request->input('instituicao', []);
  
      // Outros dados do formulário
      $nome = $request->input('nome');
      $cargo_atual = $request->input('cargo_atual');
      $titulo_academico = $request->input('titulo_academico');
      $grau = $request->input('grau');
    //  $sobre = $request->input('sobre');
 function uploadFotoPerfil(Request $request)
    {
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $path = $foto->store('public/fotos');
            $url = Storage::url($path);

            if (auth()->check()) {
                auth()->user()->update(['foto_perfil' => $url]);
            }

            return redirect()->route('home')->with('success', 'Foto de perfil atualizada!');
        }


    
}

  
     

      // Criar o registro no banco de dados
      Principal::create([
          'nome' => $nome,
          'cargo_atual' => $cargo_atual,
          'titulo_academico' => $titulo_academico,
          'idioma' => is_array($idioma) ? json_encode($idioma) : $idioma,   
          'formacao' => is_array($formacao) ? json_encode($formacao) : $formacao,
          'instituicao' => is_array($instituicao) ? json_encode($instituicao) : $instituicao,
          'experiencia' => is_array($experiencia) ? json_encode($experiencia) : $experiencia,
          'grau' => is_array($grau) ? json_encode($grau) : $grau,
          'areas' => is_array($areas) ? json_encode($areas) : $areas,
       
         // 'sobre' => $sobre,
         // 'foto' => $foto ? $foto->store('public/fotos') : null,  // Caso haja uma foto
      ]);






            return redirect()-> route('application.index'); 
}


    


    public function update(){
        return view('application.updateindex');
    }



   



        
   

    

    




}
