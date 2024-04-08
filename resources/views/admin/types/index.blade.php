@extends('layouts.app')

@section('title', 'Lista Categorie')
@section('content')

    <section>
        <div class="container ">
            <a href="{{ route('admin.types.create') }}" class="my-4 btn btn-primary"><i class="fa-solid fa-plus me-2"></i>
                Crea una Nuova
                Categoria</a>
            <h1 class="mb-4">Lista categorie</h1>
            <table class="table mb-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Etichetta</th>
                        <th>Colore</th>
                        <th>Badge </th>
                        <th></th>
                </thead>
                <tbody>
                    @forelse ($types as $type)
                        <tr>
                            <td>{{ $type->id }}</td>
                            <td>{{ $type->label }}</td>
                            <td>{{ $type->color }}</td>
                            <td>{!! $type->getBadge() !!}</td>
                            <td></td>

                        </tr>



                    @empty
                        <tr>
                            <td colspan="100%">
                                <i>Nessun Risultato</i>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </section>

@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
