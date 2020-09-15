
@extends('layouts.app')
@section('content')
<div class="card-body">
    <form action="{{ route('task.index') }}" method="GET">
        <select name="status_id" id="" class="form-control">
            <option value="" selected disabled>Filter by status</option>
            @foreach ($statuses as $status)
            <option value="{{ $status->id }}" 
                @if($status->id == app('request')->input('status_id')) 
                    selected="selected" 
                @endif>{{ $status->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table">
        <tr>
            <th>Task Name</th>
            <th>Task Description</th>
            <th>Add Date</th>
            <th>Completed Date</th>
            <th>Actions</th>
        </tr>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->task_name }}</td>
            <td>{!! $task->task_description !!}</td> 
            <td>{{ $task->add_date }}</td>
            <td>{{ $task->completed_date }}</td>
            <td>{{ $task->status->name }}</td>
            <td>
                <form action={{ route('task.destroy', $task->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('task.edit', $task->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('task.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
