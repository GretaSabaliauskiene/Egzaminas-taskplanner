@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change task information</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('task.update', $task->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label>Task Name </label>
                            <input type="text" name="task_name" class="form-control" value="{{ $task->task_name }}">
                        </div>
                  
                        <div class="form-group">
                            <label>Add date: </label>
                            <input type="date" name="add_date" class="form-control" value="{{ $task->add_date }}"> 
                        </div>
                        <div class="form-group">
                            <label>Completed date: </label>
                            <input type="date" name="completed_date" class="form-control" value="{{ $task->completed_date }}"> 
                        </div>
                    
                        <div class="form-group">
                            <label for="">Task Description:</label>
                            <textarea id="mce"  type="text" name="task_description" rows=10 cols=100 class="form-control">{{ $task->task_description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Status </label>
                            <select name="status_id" id="" class="form-control">
                                 <option value="" selected disabled>Choose a status</option>
                                 @foreach ($statuses as $status)
                                <option value="{{ $status->id }}" @if($status->id == $task->status_id) selected="selected" @endif>{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Pakeisti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
