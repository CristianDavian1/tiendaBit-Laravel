<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Support\Facades\Auth;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOption\Option;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;



class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function initial()
    {

        return view('project.index');
    }
    public function index()
    {
        
         $crear = users::orderBy('id')->paginate(10);
         return view('project.admin', compact('crear') );
         
    }
    public function indexRegistro()
    {
         
          users::orderBy('id')->paginate(10);
         return redirect()->route('inicio.page')->with('message', 'usuario registrado correctamente');
         
         
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->validate([

            'nombre'=> 'required|max:60',
            ucwords('nombre'),
            'email' => 'required|max:60',
            'password'=> 'required'
            
        ]);
        
        
        $crear = users::create($datos);
        return redirect()->route('users.index');

       
    }
    public function store2(Request $request)
    {
        $datos = $request->validate([

            'nombre'=> 'required|max:60',
            'email' => 'required|max:60',
            'password'=> 'required',
            'userPhoto'=> 'image|max:3000'
            
        ]);

        
       
     
        if($request->hasFile('userPhoto')){

            $folder = 'users_images';

            $image_path = Storage::disk('s3')->put($folder, $request->userPhoto, 'public');
                
            $request->userphoto = $image_path;
            
        }
        
        
      

         users::create([

            'nombre' => ucwords($request->nombre),
            'email' => $request->email,
            'password'=> hash::make($request->password),
            'userPhoto'=> $request->userPhoto = $image_path,
          

        ]);
        

        return redirect()->route('users.indexRegistro');
        
       
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $Users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $users = users::findOrFail($id);
        
        $users->nombre = $request->input('nombre');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->userCompra = $request->input('userCompra');
       
        $users->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = users::findOrFail($id);
        $users->delete();
        return redirect()->route('users.index');
    }

    //editar el usuario...

    public function editform($id){

        $users = users::findOrFail($id);
        return view('project.administrador.edit', compact('users'));
    }

    //autenticar session de usuario

    public function autenticacion(Request $request)
    {
        
         $request->validate([
            
            'email' => 'required',
            'password' => 'required',
        ]);

        
        
        if(Auth()->attempt(request(['email', 'password'])) == true ){

            

            $dato = request('email');
            $request->session()->regenerate();

             
             return redirect()->route('autenticacion.inicio',compact('dato'));

        }else{
            
            return back()->withErrors([
                'message' => 'The provided credentials do not match our records.',
            ]);
        }
        


    }

    public function inicio($dato)
    {

        

        $imprimir = post::orderBy('id')->get();
        
        $query = DB::table('users')->select('id')->where('email', '=', $dato)->first();
        $user = DB::table('users')->find($query->id);
        

        return view('project.inicio', compact('user', 'imprimir'));
    }
    public function logut(Request $request)
    {

        Auth::logout();
 
      $request->session()->invalidate();
 
      $request->session()->regenerateToken();
      $request->session()->flush();
 
      return redirect('/');

    }
    public function noLogin()
{

    return back()->withErrors([
        'noSession' => 'The provided credentials do not match our records.',
    ]);

}
} 