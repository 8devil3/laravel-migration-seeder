@extends('template.base')

@section('title', 'Trains | Timetable')

@section('main')
<main>
   <table>
      <tr>
         <th>&nbsp;</th>
         <th colspan="2">Partenze</th>
         <th colspan="2">Arrivi</th>
         <th colspan="4">&nbsp;</th>
      </tr>
      <tr>
         <th>Azienda</th>
         <th>Stazione</th>
         <th>Orario</th>
         <th>Stazione</th>
         <th>Orario</th>
         <th>Codice treno</th>
         <th>Numero carrozze</th>
         <th>In orario?</th>
         <th>Cancellato?</th>
      </tr>
   @foreach ($trains as $train)
      <tr>
         <td>{{ $train['Azienda'] }}</td>
         <td>{{ $train['StazionePartenza'] }}</td>
         <td>{{ $train['OrarioPartenza'] }}</td>
         <td>{{ $train['StazioneArrivo'] }}</td>
         <td>{{ $train['OrarioArrivo'] }}</td>
         <td>{{ $train['CodiceTreno'] }}</td>
         <td>{{ $train['NumeroCarrozze'] }}</td>
         <td>
            @if ($train['InOrario'])
               <i class="fa-solid fa-check true"></i>
            @else
               <i class="fa-solid fa-xmark false"></i>
            @endif
         </td>
         <td>
            @if ($train['Cancellato'])
               <i class="fa-solid fa-check true"></i>
            @else
               <i class="fa-solid fa-xmark false"></i>
            @endif
         </td>
      </tr>
   @endforeach
   </table>
</main>
@endsection
