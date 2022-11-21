@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 mx-auto">
            <h1 class="text-center text-muted mb-5">Books</h1>
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-3">
                                    <a href="{{ route('books.show', $book->id) }}" class="link-danger">{{ $book->name }}</a>
                                </h5>
                                <p class="card-text text-muted">{{ $book->description }}</p>
                            </div>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Author: {{ $book->author}}</li>
                                    <li class="list-group-item"><h5><span class="badge bg-primary">$ {{ $book->price }}</span></h5></li>
                                </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
