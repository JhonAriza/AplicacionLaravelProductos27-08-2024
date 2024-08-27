<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ProductUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;
class UserController extends Controller
{

    // public function pdf()
    // {
    // $users = User::get();
    // $pdf = Pdf::loadView('pdf',['users' => $users]);
    // return $pdf->download('users.pdf');
    // }

    public function graficas()
    {
        $ProductUser = User::get();


        return view('graficas',$ProductUser);
    }

    public function index()
    {
        $users = User::get();

        $ProductUser['ProductUser']=ProductUser::paginate(10);
        return view('index', ['users' => $users],$ProductUser);
    }


    public function storeUser(Request $request)
    {
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'lastname'=>$request->lastname,
                'password' => Hash::make($request->password),
             ]);

             return back();
        } catch (\Throwable $th) {
            return response()->json(['algo slaio mal' => $th->getMessage()]);
        }
    }

    public function updateUser($id)
    {
        $user = User::find($id);

        return view('edit', ['id' => $id,'user' => $user]);
    }
    public function updateUserId(Request $request, $id)
    {
        try {
            $user = User::find($request->id)->update([
                'name' => $request->name,
                'lastname'=>$request->lastneme,
                'email' => $request->email,
                'password' => $request->password,
             ]);
            $users = User::get();

            return redirect()->route('index', ['users' => $users]);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function deleteUser(Request $request)
    {
        try {
            $user = User::find($request->id);
            $user->delete();
             return back();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

}
