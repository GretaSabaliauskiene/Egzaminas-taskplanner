@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create a task</div>
               <div class="card-body">
                   <form action="{{ route('task.store') }}" method="POST"> 
                       @csrf
                       <div class="form-group">
                           <label>Task Name: </label>
                           <input type="text" name="task_name" class="form-control">
                       </div>
                       <div class="form-group">
                        <label>Task Description: </label>
                        <input type="text" name="task_description" class="form-control">
                    </div>
                       <div class="form-group">
                           <label>Add date: </label>
                           <input type="date" name="add_date" class="form-control"> 
                       </div>
                       <div class="form-group">
                        <label>Completed date: </label>
                        <input type="date" name="completed_date" class="form-control"> 
                    </div>
                      
                    <div class="form-group">
                        <label>Status </label>
                        <select name="status_id" id="" class="form-control">
                             <option value="" selected disabled>Choose a status</option>
                             @foreach ($statuses as $status)
                             <option value="{{ $status->id }}">{{ $status->name }}</option>
                             @endforeach
                        </select>
                    </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
