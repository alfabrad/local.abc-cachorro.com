@extends( 'layouts.app' )

@section( 'description', 'Registra a tu cachorro y recibe Tips de Cuidado y Alimentación,
además de exclusivas sorpresas que tenemos para ti en Abc Cachorro.' )

@section( 'headScripts' )
@parent
@endsection

@section( 'content' )
    <div class="container">
      <figure class="logo">
        {!! Html::image( asset( 'images/logo-cachorro.png' ), "ABC Cachorro", [] ) !!}
      </figure>
      <h2>Registra  tu cachorro y recibe <span>Tips </span>de Cuidado y Alimentación,<br> además de exclusivas <span>sorpresas </span>que tenemos para ti</h2>
      @foreach( $errors->all( ) as $error )
      <div class="alert alert-warning">
        {{ $error }}
      </div>
      @endforeach
      {!! Form::open( [
        'url'     => action( 'DiscountController@store' ),
        'method'  => 'POST',
        'class'   => 'form-horizontal',
        'files'   => false,
        'id'      => 'discount__form'
      ] ) !!}
        <div class="item-cachorro flex">
          <p>¿Cuántos cachorros tienes?</p>
          <div class="custom-input-number">
            {!! Form::button( "-", [
              "class" => "cin-btn cin-btn-1 cin-btn-md cin-decrement"
            ] ) !!}
            {!! Form::number( "puppy-number", 1, [
              "class" => "cin-input basket-quantity",
              "step"  => "1",
              "value" => "1",
              "min"   => "0",
              "max"   => "10"
            ] ) !!}
            {!! Form::button( "+", [
              "class" => "cin-btn cin-btn-1 cin-btn-md cin-increment"
            ] ) !!}
          </div>
        </div>
        <div class="item-datos-cachorro flex">
          <div class="form-group-cachorro">
            {!! Form::text( 'puppy-name', null, [
              "class"       => "text nombre",
              "id"          => "puppy-name",
              "placeholder" => " Nombre de tu cachorro *"
            ] ) !!}
            {!! Form::label( 'puppy-name', 'Nombre de tu cachorro *' ) !!}
            <div class="errores" id="mensaje1"> ingresa nombre de cachorro</div>
            <div class="valido"  id="validar1"> Bien</div>
          </div>
          {!! Form::select( "puppy-age", [
            "" => "Meses *",
            "1"=> "1 mes",
            "2"=> "2 meses",
            "3"=> "3 meses",
            "4"=> "4 meses",
            "5"=> "5 meses",
            "6"=> "6 meses",
            "8"=> "8 meses",
            "7"=> "7 meses",
            "9"=> "9 meses",
            "10"=> "10 meses",
            "11"=> "11 meses",
            "12"=> "12 meses",
            "13"=> "13 meses",
            "14"=> "14 meses",
            "15"=> "15 meses",
            "16"=> "16 meses",
            "17"=> "17 meses",
            "18"=> "18 meses",
          ], "", [
            "class" => "meses"
          ]) !!}
          {!! Form::select( "puppy-size", [
            ""        => "Talla *",
            "mini"    => "Mini",
            "small"   => "Pequeña",
            "medium"  => "Mediana",
            "big"     => "Grande",
          ], "", [
            "class" => "tallas"
          ]) !!}
          <div class="form-group-cachorro">
            {!! Form::text( 'puppy-race', '', [
              "class"       => "text nombre",
              "id"          => "puppy-race",
              "placeholder" => " Raza (opcional)"
            ] ) !!}
            {!! Form::label( 'puppy-race', "Raza (opcional)" ) !!}
            <div class="valido" id="validar4"> Bien</div>
          </div>
        </div>
        <div class="item-descuentos flex">
          <p>¿Cómo te hacemos llegar nuestros descuentos?</p>
          <div class="form-group-cachorro">
            {!! Form::text( 'your-name', '', [
              "class"       => "text dec",
              "id"          => "3",
              "placeholder" => " Tu Nombre*"
            ] ) !!}
            {!! Form::label( '3', "Tu Nombre*" ) !!}
            <div class="errores" id="mensaje3"> ingresa nombre completo</div>
            <div class="valido" id="validar3"> Bien</div>
          </div>
          <div class="form-group-cachorro">
            {!! Form::email( 'your-email', '', [
              "class"       => "text dec",
              "id"          => "4",
              "placeholder" => " Tu e-mail*"
            ] ) !!}
            {!! Form::label( "4", "Tu e-mail*" ) !!}
            <div class="errores" id="mensaje2"> ingresa correo válido</div>
            <div class="valido" id="validar2"> Bien</div>
          </div>
        </div>
        <div class="item-codigo-postal flex">
          <p>nos ayudaría conocer tu:</p>
          <div class="form-group-cachorro">
            {!! Form::text( 'your-zipcode', '', [
              "class"       => "text tex",
              "id"          => "your-zipcode",
              "placeholder" => "C.P (opcional)"
            ] ) !!}
            {!! Form::label( 'your-zipcode', "C.P (opcional)" ) !!}
          </div>
          <p> y </p>
          <div class="form-group-cachorro">
            {!! Form::text( "your-phone", "", [
              "class"       => "text tex",
              "id"          => "5",
              "placeholder" => "Teléfono (opcional)"
            ] ) !!}
            {!! Form::label( "5", "Teléfono (opcional)" ) !!}
          </div>
        </div>
        {!! Form::checkbox( "privacy-policy", "true", "", [ "id" => "privacy-policy" ]) !!}
        <label for="privacy-policy">He leído y acepto <a href="http://www.abccachorro.com/" title="Aviso de privacidad" target="_blank">aviso de privacidad</a></label>
        {!! Form::submit( "Registrarnos", [
          "class" => "btn registrar"
        ] ) !!}
      {!! Form::close() !!}
    </div>
@endsection

@section( 'scripts' )
    @parent
    {!! Html::script( "https://unpkg.com/jquery@3.1.1/dist/jquery.min.js", [
      "type"  => "text/javascript"
    ] ) !!}
    {!! Html::script( asset( "js/index.js" ), [ "type" => "text/javascript" ] ) !!}
@endsection