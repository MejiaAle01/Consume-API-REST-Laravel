<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/users');
        $data = $response->json();
        return view('personasindex', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $url =  env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url . '/user',  [
            "name" => $request->input("name"),
            "username" => $request->input("username"),
            "email" => $request->input("email"),
            "phone" => $request->input("phone"),
            "website" => $request->input("website"),
        ]);

        if ($response->successful()) {
            return redirect()->route('personas.create')->with('success', 'La persona se creó correctamente');
        } else {
            return back()->withErrors(['Error al guardar la información']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . "/users/" . decrypt($id));
        $data = $response->json();

        return view('delete', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response =  Http::get($url . "/users/" . decrypt($id));
        $data = $response->json();

        return view('update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response =  Http::put($url . "/users/" . decrypt($id), [
            "name" => $request->input("name"),
            "username" => $request->input("username"),
            "email" => $request->input("email"),
            "phone" => $request->input("phone"),
            "website" => $request->input("website"),
        ]);

        if ($response->successful()) {
            return redirect()->route('personas.index')->with('success', 'Datos actualizados correctamente');
        } else {
            return back()->withErrors('success', 'Error al actualizar el usuario');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url . '/users/' . decrypt($id));

        return redirect()->route('personas.index')->with('success', 'Datos eliminados correctamente!');
    }
}
