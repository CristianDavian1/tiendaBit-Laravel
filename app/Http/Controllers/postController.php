<?php

namespace App\Http\Controllers;
use App\Models\users;
namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;



class postController extends Controller
{
    public function crear($id)
    {
        $user = DB::table('users')->find($id);
        return view('project.user.crearPost', compact('user'));
    }
    public function insertar(Request $request)
    {
       

         $request->validate([

            'nombre' => 'required',
            'correo' => 'required',
            'titulo' => 'required|max:35',
            'categoria' => 'required',
            'etiquetas' => 'required|max:30',
            'detalles' => 'required|max:430',

        ]);
        
        if($request->hasFile('file')){


            $folder = 'imagenes_posts';

            $imagen = Storage::disk('s3')->put($folder, $request->file, 'public');

            $request->file = $imagen;
        }

        post::create([

            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'titulo' => $request->titulo,
            'categoria' => $request->categoria,
            'etiquetas' => $request->etiquetas,
            'detalles' =>$request->detalles,
            'file' => $request->file,
        ]);

        $dato = $request->correo;

        return redirect()->route('autenticacion.inicio', compact('dato'));

    }

    public function addLike($id)
    {


        $likes = post::where('id', '=', $id)->first();
        


        if(isset($likes->like)){

            $likes->like += 1;

            $likes->save();
        }
        return $likes;


        return redirect()->route('autenticacion.inicio', compact('dato'));
    }
}
