
    @extends('layout.App')
    <link rel="stylesheet" href="{{ url('assets/css/edit.css') }}">
    @section('content')
    <section id="edit-task">
      <div class="container py-5">
        <h1 class="mb-5 text-center">Edit Task</h1>

        <form method="Post" action="{{route('pages/update',$task['id'])}}">
          @csrf
          @method('put')       
          <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $task['title'] }}" required>
          </div>
          
          <div class="form-group">
            <label for="description">Task Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $task['description'] }}</textarea>
          </div>

          <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" class="form-control" id="due_date" name="due_date" value="{{ $task['duo'] }}" required>
          </div>
          <br>
          <br>
          <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
      </div>
    </section>
    @endsection
</body>
</html>
