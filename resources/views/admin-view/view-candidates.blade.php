<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin — All Candidates</title>
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
            <header><h2>All Candidates</h2></header>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>School</th>
                        <th>Party</th>
                        <th>Status</th>
                        <th>Votes</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($candidates as $candidate)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $candidate->user->first_name }} {{ $candidate->user->last_name }}</td>
                        <td>{{ $candidate->position }}</td>
                        <td>{{ $candidate->user->school }}</td>
                        <td>{{ $candidate->party }}</td>
                        <td>{{ $candidate->candidate_status }}</td>
                        <td>{{ $candidate->votes }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7">No candidates found.</td>
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
