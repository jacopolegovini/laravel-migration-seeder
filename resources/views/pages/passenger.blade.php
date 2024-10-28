@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main class="container">
    <ul>
        @foreach ($passengers as $passenger)
            <li>
                {{$passenger->first_name}}
                {{$passenger->last_name}}
                {{$passenger->birth_date}}
            </li>
        @endforeach
    </ul>
</main>
@endsection
