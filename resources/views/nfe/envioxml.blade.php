 
 @extends('home')
  
 @section('titulo') 
   @php $titulo = 'Consulta de XML e seus valores' @endphp 
 @endsection

  @section('content')
  

  	<div class="col-sm-12">
  		@include('mensagem') 
 
		<label><b>Selecione quantos arquivos .xml que você desejar:</b></label>

		<form action="/nfe/envioxml/" method="post" enctype="multipart/form-data">
		   <input name="upload[]" type="file" multiple="multiple" class="btn btn-dark" />

		    <br><br>
		    <button class="btn btn-dark" type="submit">Consultar valores</button>

		</form>

	</div> 

	@php if(!empty($dados)){ @endphp
   
		  <div class="col-sm-4">
		  	<input class="form-control" id="myInput" type="text" placeholder="Filtre sua chave da nota fiscal ...">
		  </div>	 
		  <br>
		  <table class="table table-bordered table-striped">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Nome do arquivo .xml</th>
		      <th scope="col">R$ - Valor total da nota fiscal</th> 
		    </tr>
		  </thead>

		  @php $total = 0; @endphp

		  <tbody id="myTable">
			  	@php foreach ($dados as $umDado):  @endphp

			  	@php $total +=  floatval($umDado['valor_nfe']); @endphp
			  		<tr>
				      <td scope="row">{{$umDado['nome_arquivo']}}</td>
				      <td>{{$umDado['valor_nfe']}}</td> 
				    </tr> 
			    @php endforeach; @endphp
		     
		  </tbody>

		  <thead class="thead-dark">
		    <tr>
		      <th scope="col" style="text-align: right;">Total:</th>
		      <th scope="col">R$ {{$total}}</th> 
		    </tr>
		  </thead>
		 </table>
 
	@php } @endphp

  @endsection

  @section('script-js')
  	<script type="text/javascript">
			$(document).ready(function(){
			  $("#myInput").on("keyup", function() {
			    var value = $(this).val().toLowerCase();
			    $("#myTable tr").filter(function() {
			      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			    });
			  });
			});
	</script>
 
  @endsection



 
