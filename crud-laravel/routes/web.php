<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; //importando classe 'request'
use App\Models\Candidato;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('/cadastrar-candidato', function(Request $informacoes){ //post: enviando informações || function(o que eu estou esperando receber)
    
    Candidato::create([
        //campos que vamos preencher || não retorna a view, e sim recebe as informações
        'nome' => $informacoes->nome_candidato,
        'telefone' => $informacoes->telefone_candidato
    ]);

    echo "Candidato criado com sucesso!";

    //dd($informacoes->nome_candidato); //debug die

});

Route::get('/mostrar-candidato/{id_do_candidato}', function($id_do_candidato){ //get: buscando informações
    //dd($id_do_candidato);

    $candidato = Candidato::findOrFail($id_do_candidato);
    //find(): função de encontrar, o find() sempre busca pelo id
    //findOrFail(): tenta encontrar, caso não encontre vai mostrar uma falha (404 not found)
    //encontro o candidato pelo id, armzeno os dados na variavel $candidado e logo abaixo mostro apenas o nome e o telefone

    echo $candidato->nome;
    echo "<br/>";
    echo $candidato->telefone;

});

Route::get('/editar-candidato/{id_do_candidato}', function($id_do_candidato){ //get: buscando informações

    $candidato = Candidato::findOrFail($id_do_candidato);
    //find(): função de encontrar, o find() sempre busca pelo id
    //findOrFail(): tenta encontrar, caso não encontre vai mostrar uma falha (404 not found)

    return view('editar_candidato', ['candidato' => $candidato]);

});

Route::put('/atualizar-candidato/{id_do_candidato}', function (Request $informacoes ,$id_do_candidato){ //put: editando informações
    //Request $informacoes: precisamos receber as informacoes(dados) para depois atualizar

    $candidato = Candidato::findOrFail($id_do_candidato);
    //find(): função de encontrar, o find() sempre busca pelo id
    //findOrFail(): tenta encontrar, caso não encontre vai mostrar uma falha (404 not found)

    $candidato->nome = $informacoes->nome_candidato;
    $candidato->telefone = $informacoes->telefone_candidato;

    $candidato->save();

    echo "Candidato atualizado com sucesso!";

});

Route::get('/excluir-candidato/{id_do_candidato}', function($id_do_candidato){ //get: buscando informações para depois deletar

    $candidato = Candidato::findOrFail($id_do_candidato);
    //find(): função de encontrar, o find() sempre busca pelo id
    //findOrFail(): tenta encontrar, caso não encontre vai mostrar uma falha (404 not found)

    $candidato->delete(); //depois que eu encpontrei o candidado eu deleto ele

    echo "Candidado excluído com sucesso!";

});