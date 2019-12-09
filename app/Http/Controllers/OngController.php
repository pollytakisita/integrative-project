<?php

namespace App\Http\Controllers;

use App\ActionEvent;
use App\User;
use App\Ong;
use App\OngHasUser;
use App\Segment;
use App\Gallery;

use Illuminate\Http\Request;
use App\Http\Controllers\Imagem;

class OngController extends Controller
{
   // Busca todas as ongs cadastradas e redireciona para view ongs
    public function index()
    {
       $ongs = Ong::all();
       return view('ongs')->with('ongs', $ongs);
    }

    public function listarOng($idOng)
    {
        $ong = Ong::find($idOng);
        $eventos = ActionEvent::where('id_ong', '=', $ong->id)->paginate(4);

        $fotos = Gallery::all()->where('id_ong', '=', $ong->id);

        $OngUser = OngHasUser::all()->where('id_ong', '=', $ong->id);


        return view('homeOng', compact('ong', 'eventos', 'fotos', 'OngUser'));
    }


    public function buscarOng($busca)
    {
        $result = Ong::where('name', 'LIKE', "%{$busca}%")->get();
        if(count($result) <=0){
            $result = Ong::where('district', 'LIKE', "%{$busca}%")->get();
        }
        return $result;
     }


    // Redireciona para o form de cadastro de Ong
    public function adicionarOng()
    {
        $segmentos = Segment::all();
        return view('novaOng')->with('segmentos', $segmentos);
    }

    public function editarOng($id)
    {
        $ong = Ong::find($id);
        $segmentos = Segment::all();

        return view('perfilOngEditar')->with(['ong' => $ong ,'segmentos' => $segmentos]);
    }


    public function atualizarOng(Request $request, $id)
    {
        $request->validate([
            "nome" => "min:3|max:100",
            "email" => "max:100",
            "descricao" => "min:3|max:500",
            "avatar" => "max:100"
        ]);


        $ong = ong::find($id);
        $arquivo = $request->file('imagem');
       /*  $userId = $request->input('id'); */
        if($arquivo == NULL){
            $path = $ong->avatar;
        }else{
            $pasta = 'perfil';
            $path = Imagem::criarCaminhoImagem($arquivo, $pasta);
        }


        $ong->name = $request->input('nome');
        $ong->segment = $request->input('segmento');
        $ong->description = $request->input('descricao');
        $ong->email = $request->input('email');
        $ong->phone1 = $request->input('phone1');
        $ong->phone2 = $request->input('phone2');
        $ong->address = $request->input('endereco');
        $ong->district = $request->input('bairro');
        $ong->city = $request->input('cidade');
        $ong->uf = $request->input('uf');
        $ong->website1 = $request->input('site1');
        $ong->website2 = $request->input('site2');
        $ong->website3 = $request->input('site3');
        $ong->website4 = $request->input('site4');
        $ong->avatar = $path;

        $ong->save();
        $url = url('homeOng/'.$id);

        return redirect($url);

       /*  return redirect('home/'); */
    }


     // Salva a Ong
    public function salvarOng(Request $request, $id)
    {
        $request->validate([
            "nome" => "min:3|max:100",
            "email" => "max:100",
            "descricao" => "min:3|max:500",
            "avatar" => "max:100",
            "address" => "min:1|max:100"

        ]);

        $result =  OngHasUser::all()->where('id_user', '=', $id)->where('permission_level', '=', 1 );

       /*  var_dump($result); */

        if(count($result) > 0){
            $error = 'erro';
            return redirect('home/')->with('error', $error);

        } else{

        $user = User::find($id);
        $arquivo = $request->file('imagem');

        if($arquivo == NULL){
            $path = '';
        }else{
            $pasta = 'perfil';
            $path = Imagem::criarCaminhoImagem($arquivo, $pasta);
        }
       // Salva a ong no banco
        Ong::create([
            'name' => $request->input('nome'),
            'email' => $request->input('email'),
            'segment' => $request->input('segmento'),
            'description' => $request->input('descricao'),
            'address' => $request->input('endereco'),
            'district' => $request->input('bairro'),
            'city' => $request->input('cidade'),
            'uf' => $request->input('uf'),
            'avatar' => $path
        ]);
        // Vincula a ong acima cadastrada ao usuario que cadastrou e o coloca como adm
        $ong = Ong::all() -> last();

        OngHasUser::create([
            'id_user' => $user->id,
            'id_ong' => $ong->id,
            'permission_level' => 1
        ]);


        return redirect('homeOng/'.$ong->id)->with('ongCriada', 'Sua ONG foi criada com sucesso! Informe mais dados sobre ela.');

         }

       }

       public function delete(Request $request, $id)
       {

            $idUser = $request->input('idUser');
            $ong = Ong::find($id);
            $ongHasUser = OngHasUser::all()->where('id_ong', '=', $id)
                                    ->where('id_user', '=', $idUser)
                                    ->where('permission_level', '=', 1)
                                    ->first();
            if($ongHasUser){


               $ong->delete();

                return redirect('home')->with('excluiu', 'Sua ONG foi excluída!');
            }else{

                return redirect('home')->with('naoExcluiu', 'Não foi possível excluir!');
            }

       }





}


