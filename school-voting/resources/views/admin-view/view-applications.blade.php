<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin — Applications</title>
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
            <header><h2>Candidate Applications</h2></header>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($applications->isEmpty())
                <p>No pending applications.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>School</th>
                            <th>Party</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($applications as $application)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $application->user->first_name }} {{ $application->user->last_name }}</td>
                            <td>{{ $application->position }}</td>
                            <td>{{ $application->user->school }}</td>
                            <td>{{ $application->party }}</td>
                            <td>{{ $application->candidate_status }}</td>
                            <td>
                                <form action="{{ route('admin.applications.update', $application->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="action" value="approved">
                                    <button type="submit">Approve</button>
                                </form>
                                <form action="{{ route('admin.applications.update', $application->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="action" value="disqualified">
                                    <button type="submit">Reject</button>
                                </form>
                                <form action="{{ route('admin.applications.update', $application->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="action" value="flagged">
                                    <button type="submit">Flag</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Your Company</p>
    </footer>
</body>
</html>
