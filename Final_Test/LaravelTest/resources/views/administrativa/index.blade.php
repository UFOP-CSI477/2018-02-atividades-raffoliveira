@extends ('layout')

@section('title', 'Area Administrativa')

@section('content')

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link" id="nav-inclusao-equipamento-tab" data-toggle="tab" href="#nav-inclusao-equipamento" role="tab" aria-controls="nav-inclusao-equipamento" aria-selected="false">Incluir Equipamentos </a>
    <a class="nav-item nav-link" id="nav-inclusao-registro-tab" data-toggle="tab" href="#nav-inclusao-registro" role="tab" aria-controls="nav-inclusao-registro" aria-selected="false">Incluir Registros </a>
    <a class="nav-item nav-link active" id="nav-relatorio-tab" data-toggle="tab" href="#nav-relatorio" role="tab" aria-controls="nav-relatorio" aria-selected="true">Relatório</a>
    <a class="nav-item nav-link" id="nav-pesquisa-tab" data-toggle="tab" href="#nav-pesquisa" role="tab" aria-controls="nav-pesquisa" aria-selected="false">Pesquisa</a>
  </div>
</nav>

<div class="tab-content div-adm" id="nav-tabContent">

    <div class="tab-pane fade" id="nav-inclusao-equipamento" role="tabpanel" aria-labelledby="nav-inclusao-equipamento-tab">
        <form class="form-inline" action="{{route('administrativa.store')}}" method="post">
            @csrf
            <label class="label-pad" for="nomeEquipamento">Equipamento:</label>
            <input class="form-control" type="text" name='nome' placeholder="Digite o equipamento">
            <button class="btn btn-outline-success" type="submit">Cadastrar</button>
        </form>
    </div>



    <div class="tab-pane fade" id="nav-inclusao-registro" role="tabpanel" aria-labelledby="nav-inclusao-registro-tab">
        <form action="{{route('geral.store')}}" method="post">
            @csrf
            <div class="form-row">
                  <div class="form-group col-md-4">
                        <label class="label-pad" for="equipamento_id">Registro:</label>
                        <select class="form-control"  name="equipamento_id" >
                                <option >Escolha um registro</option>
                            @foreach($administrativa as $w)
                                <option value="{{ $w->id }}">{{ $w->nome }}</option>
                            @endforeach
                        </select>
                  </div>
                  <div class="form-group col-md-4">
                        <label class="label-pad" for="descricao">Descrição:</label>
                        <textarea class="form-control" name='descricao' placeholder="Digite a descrição" rows="4"></textarea>
                  </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                    <label class="label-pad" for="datalimite">Data Limite:</label>
                    <input class="form-control" type="date" name='datalimite' placeholder="Digite a datalimite">
              </div>
              <div class="form-group col-md-4">
                    <label class="label-pad" for="tipo">Tipo:</label>
                    <input class="form-control" type="integer" name='tipo' placeholder="1 -> Preventiva / 2 -> Corretiva / 3 -> Urgente">
              </div>

            </div>

            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cadastrar</button>
        </form>

    </div>


    <div class="tab-pane fade show active" id="nav-relatorio" role="tabpanel" aria-labelledby="nav-relatorio-tab">
      <table class="table table-striped">
        <thead class="table-info">
            <tr>
              <th class="table-th" colspan="12">RELATÓRIO DE EQUIPAMENTOS</th>
            </tr>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOME</th>
              <th scope="col">CREATED_AT</th>
              <th scope="col">UPDATED_AT</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($administrativa as $w)
            <tr>
                <th scope="row">{{ $w->id }}</th>
                <td>{{ $w->nome }}</td>
                <td>{{ $w->created_at }}</td>
                <td>{{ $w->updated_at }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>


    <div class="tab-pane fade" id="nav-pesquisa" role="tabpanel" aria-labelledby="nav-pesquisa-tab">
      <form class="form-inline" action="" method="post">
          @csrf
          <label class="label-pad" for="nomeEquipamento">Equipamento:</label>
          <select class="form-control"  name="equipamento_id">
                  <option ></option>
              @foreach($administrativa as $w)
                  <option value="{{ $w->id }}">{{ $w->nome }}</option>
              @endforeach
          </select>
          <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
</div>

@endsection
