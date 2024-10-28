@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main class="container">
    <table>
        <thead>
            <th>
                Name
            </th>
            <th>
                Train Number
            </th>
            <th>
                Departure Date
            </th>
            <th>
                Departure Time
            </th>
        </thead>
        @foreach ($tickets as $ticket)
        <tr>
            <td>
                {{$ticket->user_name}}
            </td>
            <td>
                {{$ticket->train_number}}
            </td>
            <td>
                {{$ticket->departure_date}}
            </td>
            <td>
                {{$ticket->departure_time}}
            </td>
        </tr>
        @endforeach
    </table>
</main>
@endsection
