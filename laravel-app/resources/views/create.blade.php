@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    <h5>Cadastrar Notícia</h5>
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('news.store') }}">
          <div class="form-group">
              @csrf
              <label for="title">Título</label>
              <textarea class="form-control" name="title" id="title" rows="3" required maxlength="150"></textarea>
          </div>
          <div class="form-group">
              <label for="description">Descrição</label>
              <textarea class="form-control" name="description" id="description" rows="5" required></textarea>
          </div>
          <input type="hidden" id="active" name="active" value="1">
          <button type="submit" class="btn btn-block btn-secondary">Adicionar</button>
      </form>
  </div>
</div>
@endsection