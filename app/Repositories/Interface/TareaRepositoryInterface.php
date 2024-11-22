<?php

namespace App\Repositories\Interface;

interface TareaRepositoryInterface
{
    public function all();
    public function find(string $id);
    public function create(array $data);
    public function update(object $model, array $data);
    public function delete(string $id);
}
