@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main class="container">
    @dump($tickets)
</main>
@endsection
