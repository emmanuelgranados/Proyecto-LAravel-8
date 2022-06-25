<?php

namespace App\Http\Controllers\Administracion;

use App\ExpirarContrasena;
use App\Role;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UsuariosController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');

    }

    public function index()
    {
        // Auth::user()->authorizeRoles(['admin', 'Sistemas']);
        // dd(Role::where('activo', 1)->get());
// dd(Auth::user()->hasRole('admin'));
      $usuarios =  DB::table('role_user')->selectRaw('users.id , users.name ,users.email , users.activo , roles.name as rol')
      ->join('roles', 'roles.id', '=', 'role_id')
      ->join('users', 'users.id', '=', 'user_id')
      ->where('users.activo',1)
      ->where('users.eliminado',0)
      ->get();

        //  dd( $usuarios );


        return view('administracion/usuarios',['usuarios'=>$usuarios]);
        // return view('administracion/usuarios/usuarios', ['usuarios' => User::where('activo', 1)->get(), 'roles' => Role::where('activo', 1)->pluck('name', 'id'),
        //                                                   'empleados_maestra'=>EmpleadosMaestra::select('id_empleado','nombre','apellido_paterno','apellido_materno')->where('activo', 1)->get()]);
    }

    // public function mark_read()
    // {
    //     auth()->user()->unreadNotifications->markAsRead();
    //     return redirect()->back();
    // }

    // public function crear_rol(Request $request)
    // {
    //     if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('Sistemas'))
    //     {
    //         if( !Role::where('name', $request->rol_name)->exists() )
    //         {
    //             Role::create([
    //                 'name' => $request->rol_name,
    //                 'description' => $request->rol_desc
    //             ]);
    //             return redirect()->back()->with('message', ['type'=> 'success', 'text' => 'Registro creado/actualizado correctamente.', 'title' => '¡Éxito!']);
    //         }
    //         return redirect()->back()->with('message', ['type'=> 'error', 'text' => 'El rol ingresado: '.$request->rol_name.' ya existe, prueba con otro.', 'title' => '¡Error!']);
    //     }
    //     return redirect()->back()->with('message', ['type'=> 'error', 'text' => 'No tienes los permisos suficientes para crear un rol, verifícalo con sistemas.', 'title' => '¡Error!']);
    // }

    // public function editar_rol(Request $request, $id)
    // {
    //     if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('Sistemas'))
    //     {
    //         $rol = Role::find($id);
    //         $check = (isset($request->edit_rol_status)) ? 1 : 0;
    //         // dd($request, $rol);
    //         if($rol)
    //         {
    //             $rol->update([
    //                 'name' => $request->edit_rol_name,
    //                 'description' => $request->edit_rol_desc,
    //                 'activo' => $check
    //             ]);
    //             return redirect()->back()->with('message', ['type'=> 'success', 'text' => 'Registro creado/actualizado correctamente.', 'title' => '¡Éxito!']);
    //         }
    //         return redirect()->back()->with('message', ['type'=> 'error', 'text' => 'El rol a editar no se encuentra, prueba con otro.', 'title' => '¡Error!']);
    //     }
    //     return redirect()->back()->with('message', ['type'=> 'error', 'text' => 'No tienes los permisos suficientes para editar un rol, verifícalo con sistemas.', 'title' => '¡Error!']);
    // }

    // public function crear_usuario(Request $request)
    // {
    //     if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('Sistemas'))
    //     {
    //         if( !User::where('email', $request->email)->exists() )
    //         {
    //             try
    //             {
    //                 $nombre =EmpleadosMaestra::scopeNameWhere($request->nombre);

    //                 $entity = User::create([
    //                                             'name' => $nombre[0]['nombre'] .' '. $nombre[0]['apellido_paterno'] .' '.$nombre[0]['apellido_materno'],
    //                                             'email' => $request->email,
    //                                             'password' => Hash::make($request->pass)
    //                                         ]);

    //                 EmpleadosMaestra::where('id_empleado',$nombre[0]['id_empleado'])
    //                                 ->update(['fk_id_usuarios_cardinal' => $entity->id]);

    //                 $expirarpass = new ExpirarContrasena;
    //                 $expirarpass->fk_id_usuario = $entity->id;
    //                 $expirarpass->dias_expiracion = 0;
    //                 $expirarpass->save();

    //                 if($entity){
    //                     $arr = [];
    //                     foreach ($request->rol as $rol)
    //                     {
    //                         $arr[] = ['role_id' => $rol];
    //                     }
    //                     $entity->roles()->sync($arr);

    //                     $roles = '';
    //                     foreach ($entity->load('roles')->roles as $key => $value)
    //                     {
    //                         $roles .= $value->name.', ';
    //                     }

    //                     $mensaje = '<p>Buen día '.$nombre[0]['nombre'] .' '. $nombre[0]['apellido_paterno'] .' '.$nombre[0]['apellido_materno'].', de parte del equipo de sistemas te damos la más cordial bienvenida al nuevo sistema <strong>Cardinal</strong>.</p>
    //                                 <p>Para acceder al sistema considera los siguientes puntos: </p>
    //                                 <p>
    //                                     <ul>
    //                                         <li>Url: <a href="http://192.168.3.200/">http://192.168.3.200/</a></li>
    //                                         <li>Correo de acceso: <strong>'.$request->email.'</strong></li>
    //                                         <li>Contraseña: <strong>'.$request->pass.'</strong></li>
    //                                     </ul>
    //                                 </p>
    //                                 <p>A tu usuario se le asignó el rol de <strong>'.$roles.'</strong>, por lo tanto considera que el acceso a ciertos módulos será limitado.</p></br>
    //                                 <p>Si tienes dudas puedes <strong>responder a este correo o ponerte en contacto con sistemas.</strong></p>';


    //                     $correos = array($request->email);


    //                     Hal::send($correos, 'Bienvenido a Cardinal', $mensaje, $nombre[0]['nombre'] .' '. $nombre[0]['apellido_paterno'] .' '.$nombre[0]['apellido_materno'], true);

    //                     return redirect()->back()->with('message', ['type'=> 'success', 'text' => 'Se registro correctamente.', 'title' => '¡Exito!']);
    //                 }
    //             }
    //             catch(Exception $e)
    //             {
    //                 return redirect()->back()->with('message', ['type'=> 'error', 'text' => $e->getMessage(), 'title' => '¡Error!']);
    //             }
    //         }
    //         return redirect()->back()->with('message', ['type'=> 'error', 'text' => 'No fue posible crear el nuevo usuario ya que el correo ingresado: '.$request->email.' ya existe.', 'title' => '¡Error!']);
    //     }
    //     return redirect()->back()->with('message', ['type'=> 'error', 'text' => 'No tienes los permisos suficientes para crear un usuario, verifícalo con sistemas.', 'title' => '¡Error!']);
    // }

    // public function editar_usuario(Request $request, $id)
    // {

    //     $nombre =EmpleadosMaestra::scopeNameId($request->edit_nombre);

    //     if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('Sistemas'))
    //     {
    //         $user = User::find($id);
    //         $check = (isset($request->edit_user_status)) ? 1 : 0;

    //         if($user)
    //         {
    //             // dd($nombre[0]['nombre'] .' '. $nombre[0]['apellido_paterno'] .' '.$nombre[0]['apellido_materno']);
    //             $user->update([
    //                 'name' => $nombre[0]['nombre'] .' '. $nombre[0]['apellido_paterno'] .' '.$nombre[0]['apellido_materno'],
    //                 'email' => $request->edit_email,
    //                 'activo' => $check
    //             ]);
    //             $arr = [];
    //             // dd($request->edit_rol);
    //             foreach ($request->edit_rol as $rol)
    //             {
    //                 $arr[] = ["role_id" => $rol];
    //             }
    //             $result_sync = $user->roles()->sync($arr);

    //             $roles = '';
    //             foreach ($user->load('roles')->roles as $key => $value)
    //             {
    //                 $roles .= $value->name.'  , ';
    //             }

    //             if( isset($result_sync['attached']) && count($result_sync['attached']) > 0 )
    //             {
    //                 $mensaje = '<p>Buen día '.$nombre[0]['nombre'] .' '. $nombre[0]['apellido_paterno'] .' '.$nombre[0]['apellido_materno'] .', se te informa que tus permisos <strong>fueron modificados</strong>.</p>
    //                 <p>El/Los nuevos permisos registrados es/son: <strong>'.$roles.'</strong></p>
    //                 <p>Si tienes dudas puedes <strong>responder a este correo o ponerte en contacto con sistemas.</strong></p>';
    //                 $correos = array($request->edit_email);
    //                 Hal::send($correos, 'Cambio de permisos en cardinal', $mensaje, $nombre[0]['nombre'] .' '. $nombre[0]['apellido_paterno'] .' '.$nombre[0]['apellido_materno'], true);
    //             }

    //             return redirect()->back()->with('message', ['type'=> 'success', 'text' => 'Registro creado/actualizado correctamente.', 'title' => '¡Éxito!']);
    //         }
    //         return redirect()->back()->with('message', ['type'=> 'error', 'text' => 'El usuario a editar no se encuentra, prueba con otro.', 'title' => '¡Error!']);
    //     }
    //     return redirect()->back()->with('message', ['type'=> 'error', 'text' => 'No tienes los permisos suficientes para editar un rol, verifícalo con sistemas.', 'title' => '¡Error!']);
    // }

    // public function editar_pass(Request $request, $id)
    // {
    //     if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('Sistemas'))
    //     {
    //         $user = User::find($id);
    //         if($user)
    //         {
    //             $user->update([
    //                 'password' => Hash::make($request->edit_pass),
    //             ]);
    //             // dd("estoy aqui");

    //             ExpirarContrasena::updateOrInsert(
    //                 ['fk_id_usuario' => $user->id],
    //                 ['ultimo_update' => now(),'dias_expiracion'=>0]

    //             );

    //             return redirect()->back()->with('message', ['type'=> 'success', 'text' => 'Registro creado/actualizado correctamente.', 'title' => '¡Éxito!']);
    //         }
    //         return redirect()->back()->with('message', ['type'=> 'error', 'text' => 'El usuario a editar no se encuentra, prueba con otro.', 'title' => '¡Error!']);
    //     }
    //     return redirect()->back()->with('message', ['type'=> 'error', 'text' => 'No tienes los permisos suficientes para editar un rol, verifícalo con sistemas.', 'title' => '¡Error!']);
    // }

}
