<x-temp>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <span class="navbar-brand">Movie Link</span>
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

<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text"><strong>Director:</strong> {{ $movie->director }}</p>
                    <p class="card-text"><strong>Description:</strong> {{ $movie->description }}</p>
                    <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this movie?')">Delete</button>
                    </form>
                    <a href="{{ route('movies.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
</x-temp>
