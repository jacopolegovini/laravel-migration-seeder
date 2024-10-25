@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main>
    <h1>
        Homepage
    </h1>
    <div class="train-general-list">
        <div class="card">
            @dump($trains["id"]);
        </div>
    </div>

</main>
@endsection
