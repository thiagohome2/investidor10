@extends('layout')

@section('content')

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($new as $news)
          <div class="col">
            <div class="card h-100">
              
              <div class="card-body text-center">
                <h5 class="card-title">{{$news->title}}</h5>
                <p class="card-text">{{$news->description}}</p>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal{{$news->id}}">
                Acessar
                </button>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="modal{{$news->id}}" tabindex="-1" aria-labelledby="modal{{$news->id}}Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modal{{$news->id}}Label">{{$news->title}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                {{$news->description}}
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
<div>
@endsection