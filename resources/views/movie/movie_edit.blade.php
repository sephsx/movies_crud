<x-temp>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <div class="dropdown ms-auto">
      <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Options
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="{{ route('movies.index') }}">Movie List</a></li>
        <li><a class="dropdown-item" href="{{ route('movies.create') }}">Create Movie</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container vh-100 d-flex align-items-center justify-content-center">
    <div class="card" style="width: 500px;">
        <div class="card-header text-center font-weight-bold">
            Edit Movie
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('movies.update', $movie->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title" class="mb-3">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}" required>
                </div>
                <div class="form-group">
                    <label for="director" class="mb-3">Director</label>
                    <input type="text" class="form-control" id="director" name="director" value="{{ $movie->director }}" required>
                </div>
                <div class="form-group">
                    <label for="description" class="mb-3">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $movie->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-3">Update Movie</button>
            </form>
        </div>
    </div>
</div>
</x-temp>
