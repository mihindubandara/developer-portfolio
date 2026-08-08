<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('admin.dashboard') }}"><i class="fas fa-user-shield"></i> Portfolio Admin Panel</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-white" href="/" target="_blank"><i class="fas fa-globe"></i> View Live Site</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <h2 class="fw-bold mb-4">Dashboard Overview</h2>

        <!-- Stats Cards -->
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card bg-primary text-white p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Total Projects</h5>
                            <h2 class="fw-bold">{{ $projectCount }}</h2>
                        </div>
                        <i class="fas fa-folder-open fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success text-white p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Total Skills</h5>
                            <h2 class="fw-bold">{{ $skillCount }}</h2>
                        </div>
                        <i class="fas fa-code fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning text-dark p-3 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Messages</h5>
                            <h2 class="fw-bold">{{ $messageCount }}</h2>
                        </div>
                        <i class="fas fa-envelope fa-3x opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Links -->
        <div class="d-flex gap-2 mb-4">
            <a href="{{ route('admin.projects') }}" class="btn btn-dark"><i class="fas fa-tasks"></i> Manage Projects</a>
            <a href="{{ route('admin.messages') }}" class="btn btn-outline-dark"><i class="fas fa-envelope-open-text"></i> View Messages</a>
        </div>

        <!-- Recent Messages Table -->
        <div class="card p-4 shadow-sm">
            <h4 class="fw-bold mb-3">Recent Messages</h4>
            @if($messages->isEmpty())
                <p class="text-muted">No messages received yet.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $msg)
                            <tr>
                                <td>{{ $msg->name }}</td>
                                <td>{{ $msg->email }}</td>
                                <td>{{ $msg->subject ?? 'N/A' }}</td>
                                <td>{{ $msg->created_at->format('Y-m-d') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

</body>
</html>