<?php

namespace App\Http\Controllers;

use App\Contracts\ContactServiceInterface;
use App\Http\Requests\RequestCreateContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactServiceInterface $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        $contacts = $this->contactService->all();
        return view('home', compact('contacts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(RequestCreateContact $request)
    {
        $this->contactService->create($request);
        $alert = 'Created successful!';
        return back()->with('alert',$alert);
    }

    public function search(Request $request)
    {
        $contacts = $this->contactService->search($request->keyword);

        return view('home',compact('contacts'));
    }

    public function delete($id)
    {
        $this->contactService->delete($id);
        $alert = "Deleted an item successful!";
        return back()->with('alert',$alert);
    }
}
