<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Http\Requests\EmployeeRequest;
use App\Models\Branch;
use App\Models\Employee;
use App\Models\Role;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index($id)
    {
        $employee = Employee::where('branch_id', $id)->with('role')->get();
        return view('employee.index', compact('employee', 'id'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create($branch_id)
    {
        $roles = Role::all();
        return view('employee.create', compact('roles', 'branch_id'));
    }

    /**
     * @param CompanyRequest $request
     * @return RedirectResponse
     */
    public function store(EmployeeRequest $request)
    {

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->branch_id = $request->branch_id;
        $employee->role_id = $request->role;
        $employee->save();
        return redirect()->route('company.index');
    }
}
