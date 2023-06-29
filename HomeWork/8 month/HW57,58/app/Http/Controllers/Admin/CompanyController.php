<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $company = Company::find(1);
        return view('admin.companies.index', compact('company'));
    }

    /**
     * @param Company $company
     * @return View
     */
    public function edit(Company $company): View
    {
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * @param Request $request
     * @param Company $company
     * @return RedirectResponse
     */
    public function update(Request $request, Company $company): RedirectResponse
    {
        $data = $request->all();

        $company->update($data);

        return redirect()
            ->route('admin.company.index', ['company' => $company])
            ->with('status', "Company {$company->name} successfully updated!");
    }
}
