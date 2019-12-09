<?php

namespace App\Http\Controllers;

use App\User;
use App\Ong;
use App\OngHasUser;
use App\ActionEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Imagem;

class UserController extends Controller
{



    public function  listarUp($id)
    {
        $user = User::find($id);
        $a = $user->ongs;
        return view('home')->with('user', $a);
    }



    public function editarUser()
    {
        return view('perfilEditar');
    }


    public function atualizarUser(Request $request, $id)
    {
        $user = User::find($id);


        $arquivo = $request->file('imagem');
        if($arquivo == NULL){
            $path = $user->avatar;
        }else{
            $pasta = 'perfil';
            $path = Imagem::criarCaminhoImagem($arquivo, $pasta);
        }

        $request->validate([
            "nome" => "min:3 | max:100 ",
            "biografia" => "max:1000 | min:3",
            "email" => "max:45",
            "ocupacao" => "max:50|nullable",
            "areas" => "max:255",
            "avatar" => "max:100"
        ]);



        $user->name       = $request->input('nome');
        $user->email      = $request->input('email');
        $user->occupation = $request->input('ocupacao');
        $user->biography  = $request->input('biografia');
        $user->areas      = $request->input('areas');
        $user->district   = $request->input('bairro');
        $user->city       = $request->input('cidade');
        $user->avatar     = $path;

        $user->save();

        return redirect('home/');
    }

    public function listarOngs($id){
        $user = User::find($id);
        $a = $user->ongs;
        return view('home')->with('user', $a);
    }



    //teste do Ajax listagem de Ongs do usuario

    public function allOngs($id)
    {
        $user = User::find($id);
        $user->ongs;
        return $user;
    }

    //teste do Ajax listagem de eventos do usuario
    public function eventoParticipar($id)
    {
        $user = User::find($id);
        $user->actionsEvents;
        return $user;
    }


    public function ongAdmin($id)
    {
        $ongAdmin = OngHasUser::all()->where('id_user', '=', $id)->where('permission_level', '=', 1);

        if(count($ongAdmin) > 0 ){
           foreach($ongAdmin as $ong ):
                $ongAdmin = $ong->id_ong;
           endforeach;

        return redirect('homeOng/'.$ongAdmin);
        }else{
            return redirect('home/')->with('semOng','Você ainda não possui ong criada.');
        }


       /*  $ongAdmin = User::find('ongs')->get();
        return $ongAdmin; */
    }

    public function delete(Request $request)
    {
        // pega o id do usuario que esta oculto
        $userId = $request->input('identificador');

        $user = User::find($userId);
        $ongUser = OngHasUser::all()->where('id_user', '=', $userId)
                                ->where('permission_level', '=', 1)->first();



        if($ongUser){

            $ong = Ong::find($ongUser->id_ong);
            $user->delete();
            $ong->delete();
            return redirect('/');

       }else{
           $user->delete();
           return redirect('/');

       }

    }



}
