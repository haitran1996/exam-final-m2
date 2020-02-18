<?php


namespace App\Contracts;


interface ContactServiceInterface
{
    public function all();

    public function create($request);
    public function delete($id);
    public function store($obj);
    public function search($keyword);
}
