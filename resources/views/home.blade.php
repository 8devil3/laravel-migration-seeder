@extends('template.base')

@section('title', 'Trains | Timetable')

@section('main')
<main>
   <table>
      <tr>
         <th>&nbsp;</th>
         <th colspan="3" class="th-departure">Partenze</th>
         <th colspan="3" class="th-arrival">Arrivi</th>
         <th colspan="4">&nbsp;</th>
      </tr>
      <tr>
         <th>Azienda</th>
         <th class="th-departure">Stazione</th>
         <th class="th-departure">Data</th>
         <th class="th-departure">Orario</th>
         <th class="th-arrival">Stazione</th>
         <th class="th-arrival">Data</th>
         <th class="th-arrival">Orario</th>
         <th>Codice treno</th>
         <th>Numero carrozze</th>
         <th>In orario?</th>
         <th>Cancellato?</th>
      </tr>
   @foreach ($trains as $train)
      <tr>
         <td>{{ $train['Azienda'] }}</td>
         <td class="departure">{{ $train['StazionePartenza'] }}</td>
         <td class="departure">{{ date_format(date_create_from_format('Y-m-d', $train['DataPartenza']), 'd/m/Y') }}</td>
         <td class="departure">{{ date_format(date_create_from_format('H:i:s', $train['OrarioPartenza']), 'H:i') }}</td>
         <td class="arrival">{{ $train['StazioneArrivo'] }}</td>
         <td class="arrival">{{ date_format(date_create_from_format('Y-m-d', $train['DataArrivo']), 'd/m/Y') }}</td>
         <td class="arrival">{{ date_format(date_create_from_format('H:i:s', $train['OrarioArrivo']), 'H:i') }}</td>
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
   {{ $trains->links() }}
   <p class="pagination-count">Risultati per pagina: <strong>{{ $trains->perPage() }}</strong></p>
   <p class="pagination-count">Risultati totali: <strong>{{ $trains->total() }}</strong></p>
</main>
@endsection
