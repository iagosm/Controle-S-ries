@component('mail::message')
  # Uma nova série foi criada - {{$nomeSerie}}

  A série {{$nomeSerie}} com {{$qtdTemporadas}} temporadas e {{$episodiosPorTemporada}} episódios por temporada.

  Acesse aqui:

  @component('mail::button', ['url' => route('seasons.index', $idSerie)])
      Ver Série
  @endcomponent

@endcomponent
