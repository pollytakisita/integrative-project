@extends('layouts.app')

@section('content')
<div class="container">
<form>                                        
    <input id="id-perfil" type="hidden" value="{{Auth::user()->id}}">
</form>


{{-- /home-ong/'+id, --}}   



  
  <table id="tabela" class="table table-striped  my-ongs">
      <thead>
          <tr >
              <th scope="" class="text-center" width="25%">Logo</th>
              <th scope="" class="text-center" width="25%">Nome</th>
              <th scope="" class="text-center" width="20%">Descrição</th>
              <th scope="" class="text-center" width="20%">Ações</th>
            </tr>
        </thead>  
        <tbody>
            
        </tbody>
    </table>
</div>
    
    
    @endsection