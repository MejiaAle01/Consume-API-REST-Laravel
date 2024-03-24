@extends('plantillas/inicio')

@section('tituloPagina', 'Eliminar usuario')

@section('Contenido')
    <main class="container is-fluid">
        <div class="columns is-centered mt-6">
            <div class="column is-4 mt-6">
                <div class="card card-content m-4 p-5 has-background-white">
                    <h3 class="is-size-3" align="center"> Eliminar registro </h3>
                    <article class="message is-danger">
                        <div class="message-header">
                            <p> ¿Está seguro que desea eliminar este registro? </p>
                        </div>
                        <div class="message-body">
                            <p> Nombre: <b>{{ $data['name'] }}</b></p>
                            <p> Usuario: <b>{{ $data['username'] }}</b></p>
                            <p> Correo: <b>{{ $data['email'] }}</b></p>
                            <p> Teléfono: <b>{{ $data['phone'] }}</b></p>
                            <p> Sitio Web: <b>{{ $data['website'] }}</b></p>
                        </div>
                    </article>
                    <form action="{{ route('personas.destroy', encrypt($data['id'])) }}" method="POST" autocomplete="off">
                        @csrf
                        @method('DELETE')
                        <div class="has-text-centered">
                            <button type="submit" class="button is-danger is-outlined is-rounded mt-4"> Eliminar
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
