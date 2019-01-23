<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\TopMenu;
use App\SideMenu;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        $topMenus = TopMenu::all();
        $sideMenus = SideMenu::all();

        return view('employee.index', compact('employees', 'topMenus', 'sideMenus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topMenus = TopMenu::all();
        $sideMenus = SideMenu::all();
        $status = Employee::getStatus();

        return view('employee.create', compact('topMenus', 'sideMenus', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $data = $request->only(['name', 'email', 'address', 'status']);
        try {
            Employee::create($data);
        } catch (\Exception $ex) {
            \Log::debug($ex->getMessage());
        }

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topMenus = TopMenu::all();
        $sideMenus = SideMenu::all();
        $employee = Employee::find($id);

        return view('employee.show', compact('topMenus', 'sideMenus', 'employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topMenus = TopMenu::all();
        $sideMenus = SideMenu::all();
        $employee = Employee::find($id);
        $status = Employee::getStatus();

        return view('employee.edit', compact('topMenus', 'sideMenus', 'employee', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, $id)
    {
        $data = $request->only(['name', 'email', 'address', 'status']);
        try {
            Employee::find($id)->update($data);
        } catch (\Exception $ex) {
            \Log::debug($ex->getMessage());
        }

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Employee::find($id)->delete();
        } catch (\Exception $ex) {
            \Log::debug($ex->getMessage());
        }

        return redirect()->route('employees.index');
    }
}
