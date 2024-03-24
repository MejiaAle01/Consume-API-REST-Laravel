@extends('plantillas/inicio')

@section('tituloPagina', 'Actualizar usuario')

@section('Contenido')
    <main class="container is-fluid">
        <div class="columns is-centered mt-6">
            <div class="column is-4 mt-6">
                @if (session('success'))
                    <article class="message is-danger">
                        <div class="message-body">
                            {{ session('success') }}
                        </div>
                    </article>
                @endif
                <h3 class="is-size-3" align="center"> Actualizar registro </h3>
                <div class="card card-content m-4 p-5 has-background-grey-lighter">
                    <form action="{{ route('personas.update', encrypt($data['id'])) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <label class="label">
                            Nombre
                            <input type="text" name="name" placeholder="Nombre"
                                class="input control is-hovered @error('name') is invalid @enderror" required title="Nombre"
                                value="{{ $data['name'] }}" />
                            @error('name')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                            mt-4">
                            Usuario
                            <input type="text" name="username" placeholder="Usuario"
                                class="input control is-hovered @error('username') is-invalid @enderror" required
                                title="Usuario" value="{{ $data['username'] }}" />
                            @error('username')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                            mt-4">
                            Correo
                            <input type="email" name="email" placeholder="Correo"
                                class="input control is-hovered @error('email') is-invalid @enderror" required
                                title="Correo" value="{{ $data['email'] }}" />
                            @error('email')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                            mt-4">
                            Telefono
                            <input type="text" name="phone" placeholder="Telefono"
                                class="input control is-hovered @error('phone') is-invalid @enderror" required
                                title="Telefono" value="{{ $data['phone'] }}" />
                            @error('phone')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <label class="label
                            mt-4">
                            Sitio Web
                            <input type="text" name="website" placeholder="Sitio Web"
                                class="input control is-hovered @error('website') is-invalid @enderror" required
                                title="Sitio Web" value="{{ $data['website'] }}" />
                            @error('website')
                                <span class="has-text-danger"> {{ $message }} </span>
                            @enderror
                        </label>
                        <div class="has-text-centered">
                            <button type="submit" class="button is-link is-outlined is-rounded mt-4"> Actualizar </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
