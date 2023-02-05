<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoas;


class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pessoas = Pessoas::all();        
        // return $pessoas;
        $data = Pessoas::orderBy('created_at', 'DESC')->get();        
        return $data;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function criar(Request $request)
    {
        try{
                         
            $newPessoas = new Pessoas; 

            $newPessoas->nome = $request->pessoa['nome'];
            $newPessoas->cpf = $request->pessoa['cpf'];
            $newPessoas->rg = $request->pessoa['rg'];
            $newPessoas->data_nasc = $request->pessoa['data_nasc'];
            $newPessoas->sexo = $request->pessoa['sexo'];
            $newPessoas->save();
        
                return $newPessoas;
            } 
               

        catch(Exception $e){
            return($e);   
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function achaum($id)
    {
        $tempessoa = Pessoas::find( $id );

        if($tempessoa){
            return $tempessoa;
        }else{
            return "Nao foi encrotado pessoas com esse id";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $temPessoa = Pessoas::find( $id );

        if( $temPessoa){
        try
        {
                if( $temPessoa->nome != $request->pessoa['nome']){
                    $temPessoa->nome = $request->pessoa['nome'];
                }
                if( $temPessoa->cpf != $request->pessoa['cpf']){
                    $temPessoa->cpf = $request->pessoa['cpf'];
                }
                if( $temPessoa->rg != $request->pessoa['rg']){
                    $temPessoa->rg = $request->pessoa['rg'];
                }
                if( $temPessoa->data_nasc != $request->pessoa['data_nasc']){
                    $temPessoa->data_nasc = $request->pessoa['data_nasc'];
                }
                if( $temPessoa->sexo != $request->pessoa['sexo']){
                    $temPessoa->sexo = $request->pessoa['sexo'];
                }

                $temPessoa->updated_at = date("Y-m-d H:i:s"); 

                $temPessoa->save();
                return $temPessoa;
        } 
        catch(Exception $e)
        {
            return($e);
        }
        } else{
            return "Nao existe essa pessoa";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tempessoa = Pessoas::find( $id );

        if($tempessoa){
            $tempessoa->delete();
            return "Deletado com Sucesso";
        } else{
            return "Não existe essa pessoa";
        }

    }
}
