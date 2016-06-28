@extends('layouts.app')

@section('content')
<div class="mio">
    test
    <table>
        @foreach($habilidades as $habilidad)
            <tr><td>{{ $habilidad->nombre }}</td></tr> <!-- Si te fijas usas $torre->polaridad->tipo_polaridad desde ahí accedes al modelo Polaridad y a sus atributos-->
        @endforeach
    </table>
   
</div>
@endsection
