<?php

namespace App\Http\Controllers;

class Imagem extends Controller
    {
    public static function criarCaminhoImagem($arquivo, $pasta)
    {
        $arquivo->storePublicly($pasta);
        $nomeArquivo = rand(000,999).$arquivo->getClientOriginalName();       
        $caminhoAbs  = public_path() . "/storage/$pasta";
        $caminhoRel  = "storage/$pasta/$nomeArquivo";
        $arquivo->move($caminhoAbs, $nomeArquivo);
        return  $caminhoRel;
    }
}

?>