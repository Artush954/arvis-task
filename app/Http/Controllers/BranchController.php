<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class BranchController
 * @package App\Http\Controllers
 */
class BranchController extends Controller
{
    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function index($id)
    {
        $branch = Branch::where('company_id', $id)->with('company')->get();
        return view('branch.index', compact('branch', 'id'));
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function create($id)
    {
        return view('branch.create', compact('id'));
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $branch = new Branch();
        $branch->branch_name = $request->branch_name;
        $branch->company_id = $request->company_id;
        $branch->save();

        return redirect()->route('branch.index',['id'=>$request->company_id]);
    }
}
