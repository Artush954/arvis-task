<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Branch;
use App\Models\Company;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $company = Company::all();
        return view('company.index', compact('company'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * @param CompanyRequest $request
     * @return RedirectResponse
     */
    public function store(CompanyRequest $request)
    {
        Company::create($request->validated());
        return redirect()->route('company.index');
    }

}
