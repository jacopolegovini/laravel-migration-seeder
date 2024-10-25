@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main class="container">
    <h1>
        Homepage
    </h1>
    <div class="train-general-list d-flex">
        <div class="card">
            <ul>
                @foreach ($trains as $train)
                <li>
                    <section>Company: {{$train->company}}</section>
                </li>
                <li>
                    <section>Departure Station: {{$train->depature_station}}</section>
                </li>
                <li>
                    <section>Arrival Station: {{$train->arrival_station}}</section>
                </li>
                <li>
                    <section>Departure Time: {{$train->departure_time}}</section>
                </li>
                <li>
                    <section>Arrival Time: {{$train->arrival_time}}</section>
                </li>
                <li>
                    <section>Train Code: {{$train->train_code}}</section>
                </li>
                <li>
                    <section>On Time: {{$train->on_time}}</section>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</main>
@endsection
