<!--Retorno programado desde el controlador--->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif