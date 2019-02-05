@php if(!empty($mensagem_erro)){ @endphp
 	<br>
	<div class="alert alert-danger" role="alert" >{{$mensagem_erro}}</div><br>
 
@php } @endphp
@php if(!empty($mensagem_sucesso)){ @endphp
 	<br>
	<div class="alert alert-success" role="alert" >{{$mensagem_sucesso}}</div><br>
 
@php } @endphp