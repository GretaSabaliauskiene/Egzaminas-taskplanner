@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create a status:</div>
               <div class="card-body">
                   <form action="{{ route('status.store') }}" method="POST"> 
                       @csrf
                       <div class="form-group">
                           <label>Name: </label>
                           <input type="text" name="name" class="form-control">
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
