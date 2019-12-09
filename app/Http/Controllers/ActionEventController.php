<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Imagem;
use App\Ong;
use App\OngHasUser;
use App\ActionEvent;
use App\ActionEventHasUser;
use App\Segment;


class ActionEventController extends Controller
{
    public function index()
    {
       $eventos = ActionEvent::all();
       return view('eventos')->with('eventos', $eventos);
    }

    public function listarEvento($id)
    {
        $total=[];
        $evento = ActionEvent::find($id);
        $idUser =  $evento->users;
        $total = count($idUser);
        $idOng = $evento->id_ong;
        $ong = Ong::find($idOng);
        return view('homeEventos', compact('evento', 'ong' ,'idUser', 'total'));
    }

    public function allEvents($id)
    {
        $ongEventos = ActionEvent::all()->where('id_ong', '=', $id);
        return $ongEventos;
    }

    public function adicionarEvento($id2)
    {
        $segmentos = Segment::all();
        $ong = Ong::find($id2);
        return view('novoEvento', compact('segmentos', 'ong'));
    }

    // Edita Evento

    public function editarEvento($id){
        $evento = ActionEvent::find($id);
        $segmentos = Segment::all();
        return view('editarEvento', compact('evento', 'segmentos'));
    }

    public function atualizarEvento(Request $request, $id)
    {
        $evento = ActionEvent::find($id);
        $arquivo = $request->file('imagem');
        if($arquivo == NULL){
            $path = $evento->image;
        }else{
            $pasta = 'perfil-evento';
            $path = Imagem::criarCaminhoImagem($arquivo, $pasta);
        }


        $evento->title = $request->input('nome');
        $evento->description = $request->input('descricao');
        $evento->address = $request->input('endereco');
        $evento->district = $request->input('bairro');
        $evento->city = $request->input('cidade');
        $evento->uf = $request->input('uf');
        $evento->date = $request->input('data');
        $evento->image = $path;

        $evento->save();

        return redirect('eventos/'.$id);
    }

    // Salva o Evento
    public function salvarEvento(Request $request)
    {

        $user = $request->input('id');
        $ong = $request->input('id2');
        $verifica = OngHasUser::all()->where('id_user', '=', $user)
                                     ->where('id_ong', '=', $ong)
                                     ->where('permission_level', '=', 1);

        if(count($verifica) <= 0){
            $error = 'erro';
            return redirect('home/')->with('error', $error);
        }else{

        $arquivo = $request->file('imagem');

            if($arquivo == NULL){
                $path = '';
            }else{
                $pasta = 'perfil-evento';
                $path = Imagem::criarCaminhoImagem($arquivo, $pasta);
            }
        // Salva evento no banco
            ActionEvent::create([
                'title' => $request->input('titulo'),
                'description' => $request->input('descricao'),
                'address' => $request->input('endereco'),
                'segment' => $request->input('segmento'),
                'district' => $request->input('bairro'),
                'city' => $request->input('cidade'),
                'uf' => $request->input('uf'),
                'date' => $request->input('data'),
                'id_ong' => $ong,
                'image' => $path
            ]);

            $evento = ActionEvent::all()->last();
            return redirect('eventos/'. $evento->id)->with('eventoCriado', 'Evento criado com sucesso!');

            }
    }

    public function excluirEvento(Request $request)
    {
        $idEvento = $request->input('idEvento');
        $idOng = $request->input('idOng');
        $idResult = ActionEvent::find($idEvento);

        $idResult->delete();
        return redirect('homeOng/'.$idOng)->with('excluido', 'Evento excluído com sucesso!');
    }

    public function participar($idEvento, $idUser)
    {


        ActionEventHasUser::create([
            'id_action_event' =>  $idEvento,
            'id_user' =>  $idUser

        ]);


        return back()->with('sucess','Participação confirmada com sucesso.');
    }

    public function cancelarParticipacao(Request $request)
    {

        $idEvento = $request->input('idEvento');
        $idUser = $request->input('idUser');

        $eventoUser = ActionEventHasUser::all()
                                            ->where('id_action_event', '=',  $idEvento )
                                            ->where('id_user', '=', $idUser)->first();

        $eventoUser->delete();

        return back()->with('sucess','Participação cancelada.');
    }

}
