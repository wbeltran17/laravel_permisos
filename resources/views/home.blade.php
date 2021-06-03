@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">descripcion</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookList as $book)
                                    <tr>
                                        <th scope="row">{{ $book->id }}</th>
                                        <th scope="row">{{ $book->tittle }}</th>
                                        <th scope="row">{{ $book->description }}</th>
                                        <th>
                                            @can('book.update')
                                                <a href="{{ route('books.edit', $book->id) }}"
                                                    class="btn btn-sm btn btn-sm btn-dark">
                                                    <span>
                                                        <i class="fas fa-edit"></i>
                                                    </span>
                                                </a>
                                            @endcan

                                            @can('book.delete')
                                                {!! Form::model($book, ['route' => ['books.destroy', $book->id], 'method' => 'DELETE']) !!}
                                                {{ Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-dark']) }}
                                                {!! Form::close() !!}
                                            @endcan
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
