@extends('plantillas/inicio')

@section('tituloPagina', 'Consumir API con Laravel')

@section('Contenido')
    <main class="container is-fluid">
        <section class="hero">
            <div class="hero-body">
                <p class="title">
                    Consumir API con Laravel
                </p>
                <p class="subtitle">
                    <b> Listado de personas desde la API de JSON Placeholder </b>
                    <br>
                    @if (session('success'))
                        <article class="message is-black">
                            <div class="message-body">
                                {{ session('success') }}
                            </div>
                        </article>
                    @endif
                </p>
                <a href="{{ route('personas.create') }} " class="button is-outlined is-info is-rounded">
                    <span class="icon-text">
                        <span> Nuevo usuario </span>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-plus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M16 19h6" />
                                <path d="M19 16v6" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                            </svg>
                        </span>
                    </span>
                </a>
            </div>
        </section>
        <div class="table-container">
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th> Nombre </th>
                        <th> Usuario </th>
                        <th> Correo </th>
                        <th> Teléfono </th>
                        <th> Sitio web </th>
                        <th> Opciones </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $users => $user)
                        <tr>
                            <td> {{ $user['name'] }} </td>
                            <td> {{ $user['username'] }} </td>
                            <td> {{ $user['email'] }} </td>
                            <td> {{ $user['phone'] }} </td>
                            <td> {{ $user['website'] }} </td>
                            <td>
                                <a href="{{ route('personas.edit', encrypt($user['id'])) }}"
                                    class="button is-small is-outlined is-light is-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                    </svg>
                                </a>
                                <a href="{{ route('personas.show', encrypt($user['id'])) }}"
                                    class="button is-small is-outlined is-light is-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 7l16 0" />
                                        <path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <em>
            <p> Fuente: <a href="https://jsonplaceholder.typicode.com/users"> JSONPlaceholder </a></p>
        </em>
    </main>
@endsection
