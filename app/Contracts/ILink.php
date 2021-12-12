<?php

namespace App\Contracts;

interface ILink
{

    public function all();

    public function show(string $id);

    public function create(array $data);

    public function update(string $id, array $data);

    public function delete(string $id);

}
