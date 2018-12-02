@extends ('layout')

@section('title', 'Initial Page')

@section('content')

<div class="container">
    <div class="row valign-wrapper">
      <div class="col s4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">SCe Sistemas</span>
                <p>Sistemas de Controle de Registro de Manuntenções e Equipamentos. Utilize nosso sistema,
                o qual oferece o mais variado serviços de consultas e integração de dados.</p>
              </div>
              <div class="card-action">
                <a href="#">Saiba Mais</a>
              </div>
            </div>
        </div>
        <div class="col s4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Consultas</span>
                  <p>Realize suas consultas através de serviços utilizando recursos confiáveis da linguagem SQL.
                    Mantenhha seus dados seguros usando os últimos recursos de criptografias.</p>
                </div>
                <div class="card-action">
                  <a href="#">Saiba Mais</a>
                </div>
              </div>
          </div>
        <div class="col s4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Administração</span>
                <p>Temos uma equipe especializada em serviços voltados para integração dos seus dados e nosso banco de
                  dados. Seu serviço não pode ficar parado por falta de conexão.</p>
              </div>
              <div class="card-action">
                <a href="#">Saiba Mais</a>
              </div>
            </div>
        </div>
    </div>
  </div>

@endsection
