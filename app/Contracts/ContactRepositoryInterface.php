<?php


namespace App\Contracts;

interface ContactRepositoryInterface
{
    public function all();
    public function delete($id);
    public function store($obj);
    public function search($keyword);
}
