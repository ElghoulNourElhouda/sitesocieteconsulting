@extends('home/welcome')
<script>
$(document).ready(function() {
  $(".ext").on('click',function() {
    var url = $(this).prop('href');
    $("#hopla").load(url);
  });
});
</script>

@section('content')
@section('confirm')
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Contactez-moi</div>
			<div class="panel-body"> 
				Merci. Votre message a été transmis à l'administrateur du site. Vous recevrez une réponse rapidement.
			</div>
		</div>
	</div>
@endsection