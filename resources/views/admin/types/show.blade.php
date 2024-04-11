@extends('layouts.app')
@section('title', 'Lista Categoria')

@section('content')
    <section>
        <div class="container ">

            <a href="{{ route('admin.types.index') }}" class="my-4 btn btn-primary"><i
                    class="fa-solid fa-circle-left fa-beat"></i>
                Torna alla Lista Dei Progetti</a>
            <h1 class="mb-4">Vedi Nuovo Progetto</h1>

            <p>{{ $type->label }}</p>
            {{-- <p>{{ $type->color }}</p> --}}
            <p>{!! $type->getBadge() !!}</p>

            <h3>Related Projects</h3>
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Title</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($related_projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->label }}</td>
                            <td> <a href="{{ route('admin.project.show', $project) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-eye"></i>
                                </a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $related_projects->links('pagination::bootstrap-5') }}

        </div>
    </section>

@endsection


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
