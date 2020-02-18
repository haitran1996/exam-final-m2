<?php


namespace App\Services;


use App\Contact;
use App\Contracts\ContactRepositoryInterface;
use App\Contracts\ContactServiceInterface;

class ContactService implements ContactServiceInterface
{
    protected $contactRepo;

    public function __construct(ContactRepositoryInterface $contactRepo)
    {
        $this->contactRepo = $contactRepo;
    }

    public function all()
    {
        return $this->contactRepo->all();
    }

    public function create($request)
    {
        $contact = new Contact();
        $contact->fisrtName = $request->fisrtName;
        $contact->lastName = $request->lastName;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->address = $request->address;

        $file = $request->file('avatar');
        $fileName = $request->phone.'.'.$file->getClientOriginalExtension();
        $file->storeAs("public",$fileName);
        $contact->avatar = $fileName;

        $this->contactRepo->store($contact);
    }

    public function findById($id)
    {
        return $this->contactRepo->findById($id);
    }

    public function delete($id)
    {
        $contact = $this->findById($id);
        $this->contactRepo->delete($contact);
    }

    public function store($obj)
    {
        $this->contactRepo->store($obj);
    }

    public function search($keyword)
    {
        return $this->contactRepo->search($keyword);
    }
}
