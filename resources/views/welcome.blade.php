 @extends('layouts.main')      

 @section('title','HDC Events')

 @section('content')

    <!-- @foreach($events as $event)
        <p>{{$event->title}} -- {{$event->description}}</p>
    @endforeach -->

    <div class="col-md-12" id="search-container">
        <h1>Busque por pizza</h1>

        <form action="/" method="get">
            <input type="text" class="form-control" name="search" id="search" placeholder="Procurar.."   value="">
        </form>
    </div>

    <div id="events-container" class="col-md-12">

    @if($search)
        <h2>Buscando por: {{$search}}</h2>
    @else
        <h2>Cardapio</h2>
    @endif
        <p class="subtitle">Descubra a diversidade de deliciosas opções de pizzas em nosso cardápio!</p>

        <div id="cards-container" class="row">
            @foreach($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{$event->title}}">
                <div class="card-body">
                    <!-- <div class="card-date">{{ date('d/m/Y', strtotime($event->date) )}}</div> -->
                    <h5 class="card-title">{{$event->title}}</h5>
                    <h5 class="card-title">{{$event->price}}</h5>
                    <p class="card-participants">{{$event->description}}</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">saber mais</a>
                </div>
                </div>
            @endforeach 
            @if(count($events) == 0 && $search)
                <p>Não foi possivel encontrar nenhum evento com {{$search}}! <a href="/">Ver todos!</a> </p>
            @elseif(count($events) == 0)
                <p>Não há eventos disponiveis</p>
            @endif
        </div> 
    </div>
@endsection
