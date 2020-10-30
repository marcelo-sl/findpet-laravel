<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
use App\Especie;
use App\Situacao;
use App\Contato;
use App\Porte;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::orderBy('id', 'desc')->with('especie')->get();
        return view('pages.pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especies = Especie::all();
        $situacoes = Situacao::all();
        $portes = Porte::all();

        return view('pages.pets.create', compact('especies', 'situacoes', 'portes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['nome', 'whatsapp']);

        $contato = Contato::firstOrCreate(array('nome' => $data['nome'], 'whatsapp' => $data['whatsapp']), array($data));

        $pet = new Pet();
        $pet->raca = $request->raca;
        $pet->sexo = $request->sexo;
        $pet->descricao = $request->descricao;
        $pet->especie_id = $request->especie;
        $pet->situacao_id = $request->situacao;
        $pet->contato_id = $contato->id;
        $pet->porte_id = $request->porte;
        $pet->save();

        return redirect('/pets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pet = Pet::find($id);

        return view('pages.pets.show')->withPet($pet);
    }
}
