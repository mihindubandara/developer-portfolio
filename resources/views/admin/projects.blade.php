<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('admin.dashboard') }}"><i class="fas fa-arrow-left"></i> Back to Dashboard</a>
        </div>
    </nav>

    <div class="container py-5">
        <h2 class="fw-bold mb-4">Manage Projects</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row g-4">
            <!-- Add New Project Form -->
            <div class="col-md-5">
                <div class="card p-4 shadow-sm">
                    <h4 class="fw-bold mb-3">Add New Project</h4>
                    <form action="{{ route('admin.projects.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold">Project Title</label>
                            <input type="text" name="title" class="form-control" placeholder="e.g. E-Commerce Web App" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Description</label>
                            <textarea name="description" class="form-control" rows="3" placeholder="Short summary of project" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Technologies Used</label>
                            <input type="text" name="technologies" class="form-control" placeholder="e.g. Laravel, React, MySQL" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">GitHub Link</label>
                            <input type="url" name="github_link" class="form-control" placeholder="https://github.com/..." >
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Demo Link</label>
                            <input type="url" name="demo_link" class="form-control" placeholder="https://..." >
                        </div>
                        <button type="submit" class="btn btn-primary w-100"><i class="fas fa-plus-circle"></i> Save Project</button>
                    </form>
                </div>
            </div>

            <!-- Existing Projects List -->
            <div class="col-md-7">
                <div class="card p-4 shadow-sm">
                    <h4 class="fw-bold mb-3">Existing Projects</h4>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Tech</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td><strong>{{ $project->title }}</strong></td>
                                    <td><small class="badge bg-secondary">{{ $project->technologies }}</small></td>
                                    <td>
                                        <form action="{{ route('admin.projects.delete', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>