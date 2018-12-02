@extends ('welcome')

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

<div class="tab-content" id="nav-tabContent">

    <div class="tab-pane fade" id="nav-inclusao-equipamento" role="tabpanel" aria-labelledby="nav-inclusao-equipamento-tab">
        <form class="form-inline my-2 my-lg-0" action="{{route('administrativa.store')}}" method="post">
            @csrf
            <label for="nomeEquipamento">Equipamento</label>
            <input class="form-control mr-sm-2" type="text" name='nome' placeholder="Digite o equipamento">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cadastrar</button>
        </form>
    </div>


    <div class="tab-pane fade" id="nav-inclusao-registro" role="tabpanel" aria-labelledby="nav-inclusao-registro-tab">
        <form class="form-inline my-2 my-lg-0" action="{{route('geral.store')}}" method="post">
            @csrf
            <label for="nomeEquipamento">Registro</label>
            <select class="form-control"  name="equipamento_id">
                    <option ></option>
                @foreach($administrativa as $w)
                    <option value="{{ $w->id }}">{{ $w->nome }}</option>
                @endforeach
            </select>

            <textarea class="form-control mr-sm-2" name='descricao' placeholder="Digite a descrição" rows="4"></textarea>

            <input class="form-control mr-sm-2" type="date" name='datalimite' placeholder="Digite a datalimite">

            <input class="form-control mr-sm-2" type="integer" name='tipo' placeholder="Digite o tipo">





            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cadastrar</button>
        </form>



    </div>



    <div class="tab-pane fade show active" id="nav-relatorio" role="tabpanel" aria-labelledby="nav-relatorio-tab">
      <table class="table">
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
        <tdbody>
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

      <p class="lead p-padding">Para realizar a pesquisa entre com o <strong>ID</strong> do registro: </p>

      <!-- <form class="form-inline my-2 my-lg-0" action="/search" method="post" role="search">
          <input class="form-control mr-sm-2" type="text" placeholder="Digite o ID" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>


</div>

@endsection
