<x-temp>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <span class="navbar-brand">Movie Link</span>
    <div class="dropdown ms-auto">
      <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Create
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="{{ route('movies.create') }}">Create Movie</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4 g-md-4 g-lg-4">
        @foreach($movies as $movie)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">Director: {{ $movie->director }}</p>
                    <p class="card-text">{{ $movie->description }}</p>
                    <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this movie?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</x-temp>
