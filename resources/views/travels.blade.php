@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Travel Packages</h1>

        @foreach ($travels as $travel)
            <article>
                <h2>{{ $travel->city }}</h2>
                <h4>{{ $travel->state }}</h4>
                <div>Hotel: {{ $travel->hotel }}</div>
                <div>Transportation: {{ $travel->transportation }}</div>
                <div>Price: {{ number_format($travel->price, 0, ',', '.') }}$</div>
                @if (!$travel->last)
                    <hr>
                @endif
            </article>
        @endforeach

        <section class="mt-5">
            {{ $travels->links() }}
        </section>
    </div>
@endsection
