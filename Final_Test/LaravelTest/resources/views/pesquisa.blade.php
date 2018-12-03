@extends ('layout')

@section('title', 'Area Administrativa')

@section('content')

<table class="table table-striped">
  <thead class="table-info">
      <tr>
        <th class="table-th" colspan="12">RELATÓRIO DE REGISTROS</th>
      </tr>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">EQUIPAMENTO_ID</th>
        <th scope="col">DESCRIÇÃO</th>
        <th scope="col">DATALIMITE</th>
        <th scope="col">TIPO*</th>
        <th scope="col">CREATED_AT</th>
        <th scope="col">UPDATED_AT</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($registro as $w)
        if(!isset($registro)){
          <tr>
              <th colspan="12">Registro não encontrado!</th>
          </tr>
      }else{
          <tr>
            <th scope="row">{{ $w->id }}</th>
            <td>{{ $w->equipamento_id }}</td>
            <td>{{ $w->descricao }}</td>
            <td>{{ $w->datalimite }}</td>
            <td>{{ $w->tipo }}</td>
            <td>{{ $w->created_at }}</td>
            <td>{{ $w->updated_at }}</td>
          </tr>
      }
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th colspan="12">*1 -> Preventiva / 2 -> Corretiva / 3 -> Urgente</th>
    </tr>
  </tfoot>
</table>

@endsection
