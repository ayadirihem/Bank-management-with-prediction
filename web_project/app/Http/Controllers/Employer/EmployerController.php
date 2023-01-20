<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Repositories\EmployerRepository;
use Illuminate\Http\Request;
use App\Entities\User;
use Session;
use Excel;


class EmployerController extends Controller {

    protected $employerRepository;

    public function __construct(EmployerRepository $employerRepository) {
        $this->employerRepository = $employerRepository;
    }

    public function index() {
        $title = 'Users';
        $subTitle = 'List des employés';       
        $users = $this->employerRepository->getUsers();   
        $roles = array('Admin' => 'Admin','Employer' => 'Employer');    
        return view('employer.users.index', compact('roles','users', 'title', 'subTitle'));
                
    }

    public function edit($id) {
        $title = 'Users';
        $subTitle = 'Modification info Employer';
        $roles = array('Admin' => 'Admin','Employer' => 'Employer'); 
        $user = $this->employerRepository->getById($id);
        return view('employer.users.edit', compact('user', 'roles', 'title', 'subTitle'));
    }

    public function update(Request $request) {
        //$this->setAdmin($request);
        $this->validate($request, [
            'Name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $id = $request->id;
        $save['name'] = $request->input('Name');
        $save['username'] = $request->input('Username');
        $save['email'] = $request->input('Email');
        $save['password'] = sha1($request->password);
        $save['pwd'] = $request->password;
        $save['access'] = $request->input('Role');

        if ($request->photo) {
            $photo = $request->input('photo');
            $filename = $photo->getClientOriginalName();
            $photo->move(public_path('users'), $filename);
            $save['photo'] = $filename;
        }
        $this->employerRepository->update($id, $save);

        Session::flash('message', 'L\'employer a été mis à jour avec succès.');
        // Redirect to `user.index` route
        // Use route:list to view the `Action` or where this routes going to
        return redirect()->route('employer.index');
    }

    public function destroy($id) {
        $this->employerRepository->destroy($id);
        Session::flash('message', 'L\'employer a été supprimé avec succès.');       
        return redirect()->route('employer.index');
    }


    public function create() {
        $title = 'Users';
        $subTitle = 'User Form';
         
        return view('employer.users.create', compact('roles', 'title', 'subTitle'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $save['name'] = $request->name;
        $save['username'] = $request->username;
        $save['email'] = $request->email;
        $save['password'] = sha1($request->password);
        $save['pwd'] = $request->password;
        $save['access'] = $request->access;
        $save['active'] = 1;

        if ($request->photo) {
            $photo = $request->photo;
            $filename = $photo->getClientOriginalName();
            $photo->move(public_path('users'), $filename);
            $save['photo'] = $filename;
        }

        $this->employerRepository->store($save);
        // Store data for only a single request and destory
        Session::flash('message', 'L\'employer a été enregistré  avec succès.');
        // Redirect to `user.index` route
        // Use route:list to view the `Action` or where this routes going to
        return redirect()->route('employer.index');
    }
   

    public function show($id) {
        $user = $this->employerRepository->getById($id);

        return view('employer.users.show', compact('user'));
    }

    
    public function enable($id) {
        $save['id'] = $id;
        $save['active'] = 1;
        $this->employerRepository->update($id, $save);
        Session::flash('message', 'L\'employer a été mis à jour avec succès.');
        // Redirect to `user.index` route
        // Use route:list to view the `Action` or where this routes going to
        return redirect()->route('employer.index');
    }

    public function disable($id) {
        $save['id'] = $id;
        $save['active'] = 0;
        $this->employerRepository->update($id, $save);
        Session::flash('message', 'L\'employer a été mis à jour avec succès');
        // Redirect to `user.index` route
        // Use route:list to view the `Action` or where this routes going to
        return redirect()->route('employer.index');
    }

}
