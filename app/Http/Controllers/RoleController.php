<?php
namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role as ModelsRole;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller 
{
    public function index()
    {
        $roles = Role::all(); // Menggunakan ModelsRole jika sesuai
        return view('admin.role.index', compact('roles')); 
    }

    public function create(){
        $permissions = Permission::all(); // Mengambil semua permissions
        return view('admin.role.create', compact('permissions'));
    }

    public function store(Request $request){
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'permissions' => 'required|array',
        ]);

        // Membuat role baru
        $role = ModelsRole::create(['name' => $request->input('name')]);

        // Menambahkan permissions ke role
        $role->givePermissionTo($request->input('permissions'));

        // Redirect setelah penyimpanan
        return redirect()->route('roles.index')->with('success', 'Role created successfully');
    }
}
