@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main class="container">
    @dump($passengers)
</main>
@endsection
