<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;
use \App\Http\Requests\StoreParticipanteRequest;

class ParticipanteController extends Controller
{
  private $participante;

  public function __construct(Participante $participante){
    $this->participante = $participante;
  }

    public function listarParticipantes()
    {
      $participantes = $this->participante->paginate(15);

      return view('listagem', compact('participantes'));
    }

    public function cadastrarParticipante()
    {
      return view('cadastro');
    }

    public function gravarParticipante(StoreParticipanteRequest $request)
    {
      $participante = new Participante;

      $participante->nome = $request->nome;
      $participante->sobrenome = $request->sobrenome;
      $participante->email = $request->email;
      $participante->data_nascimento = $request->data_nascimento;
      $participante->endereco = $request->endereco;

      $participante->save();

      $request->session()->flash('success', 'Seu cadastro foi efetuado!');

      return redirect('/cadastro/participante');
    }
}
