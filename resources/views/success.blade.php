@extends( 'layouts.app' )

@section( 'content' )
    <div class="container">
      <figure class="logo">
        {!! Html::image( asset( 'images/logo-cachorro.png' ), "ABC Cachorro", [] ) !!}
      </figure>

     <section class="validar-cerrar">
        <figure class="logo"><img src="images/logo-cachorro.png"></figure>
        <figure class="paloma"><img src="images/cerrar.png"></figure>
        <h2>¡Gracias!</h2>
        <p>Hemos recibido tus datos correctamente, muy pronto recibirás sorpresas exclusivas. </p>
      </section>

      @foreach( $errors->all( ) as $error )
      <div class="alert alert-warning">
        {{ $error }}
      </div>
      @endforeach
    </div>
@endsection

@section( 'scripts' )
    @parent
@endsection