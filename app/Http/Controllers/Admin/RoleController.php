<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;
use UxWeb\SweetAlert\SweetAlert;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::all();
        return view('admin.Role.all', compact('roles') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.role.create');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        
        $data = $request->all();
        $rules=[
                    'name' => ['required', 'string', 'min:4', 'max:10', 'unique:roles']
                ];
        $validator = Validator::make($data , $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($data);
        }

        Role::create([
            'name' => $request->name
        ]);

        SweetAlert::success('thank you', ' you are now a new member!');
        return redirect()->back();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = Role::findOrFail($id)->with([
            'user' => function($query){
                $query->select('id','name','role_id');
            }
        ])->where('id',$id)->get();
        return response()->json($user);
        return view('admin.role.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $role = Role::findOrFail($id);
        return view('admin.role.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        $rules=['name' => ['required', 'string', 'min:4', 'max:10','unique:roles']];
        $validator = Validator::make($data , $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($data);
        }

        $user = Role::findOrFail($id);
        $user->update(['name' => $request->name]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = Role::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
