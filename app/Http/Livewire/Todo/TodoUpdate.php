<?php

namespace App\Http\Livewire\Todo;
use App\Models\Todo as TD;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;

class TodoUpdate extends Component
{
    public $task, $task_description, $task_id;

    public function render()
    {
        return view('livewire.todo.todo-update');
    }

    public function mount($id)
    {
        $this->task = null;
        $this->task_description = null;
        $this->task_id = Crypt::decryptString($id);
    }

}

?>