<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Ong;
use Illuminate\Http\Request;
use App\Http\Controllers\Imagem;


class GalleryController extends Controller
{
    public function index()
    {
        $fotos = Gallery::inRandomOrder()->get();
        return view('galeria', compact('fotos'));
    }

    public function allFotos($id)
    {
        $ongFotos = Gallery::all()->where('id_ong', '=', $id);
        return $ongFotos;
    }

    public function adicionarFoto($id)
    {
      $ong = Ong::find($id);
      $ongId = $ong->id;
      return view('galeriaPostar')->with('ong',$ongId);
    }



    public function postarFoto(Request $request)
    {
        $ong = $request->input('id');
        $arquivo = $request->file('imagem');

        $request->validate([
            "imagem" => "required",
        ]);

        $pasta = 'fotos';
        $path = Imagem::criarCaminhoImagem($arquivo, $pasta);

        Gallery::create([
            'name' => $request->input('nome'),
            'id_ong' => $ong,
            'image' => $path


        ]);
        /* $url = url('homeOng/'.$ong); */
        return redirect('homeOng/'.$ong);


    }



}
