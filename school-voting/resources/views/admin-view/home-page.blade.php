<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin-pages/home-page.css')}}">
</head>
<body>
    <main>
        <div class="side-nav">
            <header><h2>Navigation</h2></header>

            <ul class="main-link">
                <li><a href="{{ route('admin.home') }}"> Home</a></li>

                <li><span class="sub-link-header"> Candidates</span>
                    <ul class="sub-link">
                        <li><a href="{{ route('admin.applications.index') }}">Applications</a></li>
                    </ul>
                </li>
                <li><span class="sub-link-header"> Positions</span>
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
            <header>
                <h2>Top statistics</h2>
            </header>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('info'))
                <div class="alert alert-info">{{ session('info') }}</div>
            @endif

            <div class="info-banner">
                <div class="banner">
                    <h2>Total Candidates</h2>
                    <p>{{ $totalCandidates }}</p>
                </div>
                <div class="banner">
                    <h2>Total Voters</h2>
                    <p>{{ $totalVoters }}</p>
                </div>
                <div class="banner">
                    <h2>Total Users</h2>
                    <p>{{ $totalUsers }}</p>
                </div>
            </div>

            <div>
                <h2>Top Candidates by Position</h2>
            </div>
            <div class="top-results">
                @foreach($data as $positionTitle => $candidates)
                <div class="position">
                    <x-user.results-table :title="$positionTitle" :candidates="$candidates"/>
                </div>
                @endforeach
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Your Company</p>
    </footer>
</body>
</html>
