<?php

namespace App\Http\Controllers;

use App\Services\TareaService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TareasController extends Controller
{

    public function __construct(
        private TareaService $tareaService
    ){
    }

    public function index()
    {
        try {
            $tareas = $this->tareaService->all();
            return $this->successResponse($tareas, null, Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function store(Request $request)
    {
        try {
            $tarea = $this->tareaService->create($request->all());
            return $this->successResponse($tarea, 'Tarea creada', Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function show(string $id)
    {
        try {
            $tarea = $this->tareaService->find($id);
            return $this->successResponse($tarea, null, Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $model = $this->tareaService->find($id);
            $tarea = $this->tareaService->update($model, $request->all());
            return $this->successResponse($tarea, 'Tarea actualizada', Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy(string $id)
    {
        try {
            $this->tareaService->delete($id);
            return $this->successResponse(null, 'Tarea eliminada', Response::HTTP_NO_CONTENT);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
