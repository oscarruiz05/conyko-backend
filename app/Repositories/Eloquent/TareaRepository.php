<?php

namespace App\Repositories\Eloquent;

use App\Models\Tarea;
use App\Repositories\Interface\TareaRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class TareaRepository implements TareaRepositoryInterface
{

    private $model;

    public function __construct(Tarea $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->where('user_id', Auth::user()->id)->get();
    }

    public function find(string $id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(object $model, array $data)
    {
        return $model->update($data);
    }

    public function delete(string $id)
    {
        return $this->model->destroy($id);
    }
}
