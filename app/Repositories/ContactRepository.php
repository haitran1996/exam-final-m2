<?php


namespace App\Repositories;



use App\Contact;
use App\Contracts\ContactRepositoryInterface;

class ContactRepository implements ContactRepositoryInterface
{
    protected $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function findById($id)
    {
        return $this->contact->findOrFail($id);
    }

    public function all()
    {
        return $this->contact->all();
    }

    public function delete($obj)
    {
        $obj->delete();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function search($keyword)
    {
        return $this->contact->where('fisrtName', 'like', "%$keyword%")
                ->orWhere('lastName','like',"%$keyword%")->get();
    }
}
