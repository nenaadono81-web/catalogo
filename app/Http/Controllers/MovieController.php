<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function allMovie() {
        return Movie::all();
    }
    
    public function movie($id) {
        return Movie::find($id);
    }

    public function guardar(Request $req) {
        $validate = $req->validate([
            'title' => 'required',
            'synopsis' => 'required',
            'year' => 'required',
            'cover' => 'required',
        ]);

        $movie = Movie::create($req->all());

        return response()->json($movie, 201);
    }

    public function actualizar(Request $req, $id) {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json([
                "message" => "Pelicula no encontrada"
            ], 404);
        }

        $movie->update($req->all());

        return response()->json([
            "message" => "Pelicula actualizada correctamente",
            "data" => $movie
        ], 200);
    }

    public function eliminar($id) {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json([
                "message" => "Pelicula no encontrada"
            ], 404);
        }

        $movie->delete();

        return response()->json([
            "message" => "Pelicula eliminada correctamente"
        ], 200);
    }

}
