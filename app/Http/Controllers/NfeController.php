<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class NfeController extends Controller
{
    // 
    public function envioxml(request $request){ 
    	if(empty($request->all())){
    		//dd(phpinfo());
    		return view('/nfe/envioxml');
    	}
 
    	//dd($request->all());
 		
 		try{
		 // Define o valor default para a variável que contém o nome da imagem 
		    $files = $request->file('upload');

		    if(empty($files)){
		    	return view('/nfe/envioxml', ['mensagem'=> 'Nenhum arquivo selecionado!'] );
		    }else{
		    	 $total = count($_FILES['upload']['name']); 

				// Loop through each file
				for( $i=0 ; $i < $total ; $i++ ) {

				  //Get the temp file path
				  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

				  $xml = simplexml_load_file($tmpFilePath);

				  $nome_arquivo = $_FILES['upload']['name'][$i];

			      $valor = $xml->NFe->infNFe->total->ICMSTot->vNF;

			      $dados[$i]['nome_arquivo'] = $nome_arquivo;

			      $dados[$i]['valor_nfe'] = $valor;
	   
				 } 

				 return view('/nfe/envioxml', ['dados' => $dados , 'mensagem_sucesso' => 'Total de '.$total.' arquivos lidos com sucesso!'] );
		    }
 		}catch(Exception $e){

	    	return redirect('/nfe/envioxml')->with(['mensagem_erro' => $e->getMessage()]); 
	    }

    }
}
