@extends('Layout.app')
<link rel="stylesheet" href="{{ url('assets/css/create.css') }}">
    @section('content')
    <section id="create-task">
      <div class="container py-5">
        <h1 class="mb-5 text-center">Add New Task</h1>
        <form action="{{route('pages/store')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="title">Task Title  
              <span class="text-danger">*
              @error('title')
              {{$message}}    
              @enderror
          </span></label>
            <input type="text" class="form-control" id="title" name="title" required>
          </div>
          
          <div class="form-group">
            <label for="description">Task Description 
               <span class="text-danger">*
              @error('description')
              {{$message}}    
              @enderror
          </span></label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
          </div>

          <div class="form-group">
            <label for="due_date">Due Date  <span class="text-danger">*
              @error('due_date')
              {{$message}}    
              @enderror
          </span></label>
            <input type="date" class="form-control" id="due_date" name="due_date" required>
          </div>
          <br>
          <br>
          <button type="submit" class="btn btn-success">Add Task</button>
        </form>
      </div>
    </section>
    @endsection
