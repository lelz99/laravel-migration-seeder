@extends('layouts.main')
@section('table-trains')
<section id="table-trains " class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di Partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Codice Treno</th>
            <th scope="col">Numero Carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        @foreach ($trains as $train)
            <tbody>
              <tr>
                <td scope="row">{{$train->rail_company}}</td>
                <td>{{$train->departure_station}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>{{$train->departure_time}}</td>
                <td>{{$train->arrival_time}}</td>
                <td>{{$train->train_code}}</td>
                <td>{{$train->carriage}}</td>
                <td>{{$train->on_time ? 'In Orario' : 'In Ritardo'}}</td>
                <td>{{$train->canceled ? 'Cancellato' : ''}}</td>
              </tr>
            @endforeach
        </table>
</section>
@endsection