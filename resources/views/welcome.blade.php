
@extends('layouts.main')
@section('title', 'HDC Events')

@section('content')
    
<h1>Título top</h1>
<img src="/img/banner.jpg" alt="">

<p>{{ $nome }}</p>
@if($idade >= 18)
    <p>{{$nome}}! Parabens, voce eh maior de idade</p>
@else
<p>{{$nome}}! Voce ainda nao eh maior de idade</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p>{{$arr[$i]}}</p>
@endfor
        
@endsection


