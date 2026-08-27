<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin — Positions</title>
    <link rel="stylesheet" href="{{ asset('css/admin-pages/home-page.css')}}">
</head>
<body>
    <main>
        <div class="side-nav">
            <header><h2>Navigation</h2></header>
            <ul class="main-link">
                <li><a href="{{ route('admin.home') }}"> Home</a></li>
                <li><span class="sub-link-header">Candidates</span>
                    <ul class="sub-link">
                        <li><a href="{{ route('admin.applications.index') }}">Applications</a></li>
                    </ul>
                </li>
                <li><span class="sub-link-header">Positions</span>
                    <ul class="sub-link">
                        <li><a href="{{ route('admin.positions.index') }}">Manage Positions</a></li>
                    </ul>
                </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" style="margin-top:1rem">
                @csrf
                <button type="submit">Log out</button>
            </form>
        </div>

        <div class="main-area">
            <header><h2>Manage Positions</h2></header>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('admin.positions.store') }}" method="POST">
                @csrf
                <label for="name">New Position Name:</label>
                <input type="text" id="name" name="name" required>
                @error('name') <span style="color:red">{{ $message }}</span> @enderror
                <button type="submit">Add Position</button>
            </form>

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Position Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($positions as $position)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $position->name }}</td>
                        <td>
                            <form action="{{ route('admin.positions.destroy', $position->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Delete this position?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">No positions found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Your Company</p>
    </footer>
</body>
</html>
