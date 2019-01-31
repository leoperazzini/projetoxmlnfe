 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

@php if(!empty($mensagem)){ @endphp
<br>
<div class="col-sm-12">
	<div class="alert alert-danger" role="alert" >{{$mensagem}}</div><br>
</div>
@php } @endphp

<div class="col-sm-12">
	<br>
	<label><b>Selecione quantos arquivos .xml que você desejar:</b></label>

	<form action="/nfe/home/" method="post" enctype="multipart/form-data">
	   <input name="upload[]" type="file" multiple="multiple" />

	    <br><br>
	    <button type="submit">Enviar</button>
	</form>

</div> 

@php if(!empty($dados)){ @endphp
	<br>
	<div class="col-sm-12">

		@php $total = 0.0; @endphp

		@php foreach($dados as $umDado){ @endphp

			@php $total +=  floatval($umDado['valor_nfe']); @endphp
 
			<hr>{{$umDado['nome_arquivo']}} - Valor da nota fiscal: {{$umDado['valor_nfe']}}

		@php } @endphp

		<hr>

		<h4>Valor total de notas fiscais: {{$total}}</h4>

	</div>
@php } @endphp