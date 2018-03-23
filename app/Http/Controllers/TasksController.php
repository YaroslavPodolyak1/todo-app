<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTask;
use App\Tasks;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class TasksController extends Controller
{

    public function index(): View
    {
        $tasks = Tasks::where('user_id', Auth::id())->paginate();

        return view('tasks', compact('tasks'));
    }

    public function create(): View
    {
        return view('tasks.create');
    }

    public function store(StoreTask $request)
    {
        auth()->user()->task()->create($request->only('caption', 'description'));

        return redirect('tasks');
    }

}
