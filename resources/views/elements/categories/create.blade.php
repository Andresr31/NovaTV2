@extends('layouts.app')
@section('title','NovaTV - Crear categorias')

@section('content')

    <div class="row py-4 px-4">
        <div class="col-md-10 offset-md-1">
            <h1 style="color: #2471A3;">
                <i class="fa fa-plus"></i> Agregar Categoría
            </h1>
            <hr>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('home') }}">
                            <i class="fa fa-clipboard-list"></i>
                            Escritorio
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('categories.index') }}">
                            <i class="fa fa-list-alt"></i>
                            Módulo Categorias
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fa fa-plus"></i>
                            Adicionar Categoria
                    </li>
                </ol>
            </nav>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name">Nombre </label>

                    <div class="">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description">Descripción </label>

                    <div class="">
                        <textarea name="description" class="form-control" id="description" rows="3">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                

                <div class="d-grid gap-2 mb-3">
                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #2471A3"> Agregar <i class="fa fa-save mx-2"></i></button>
                </div>

            </form>
        </div>
    </div>


@endsection