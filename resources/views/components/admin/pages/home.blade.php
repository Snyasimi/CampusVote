<x-admin.layout>

    @push('stylesheets')
        <link
            rel="stylesheet"
            href="{{ asset('css/adminPages/homePage.css') }}"
        >
    @endpush


    <main class="admin-home">

        {{-- =================================================
             ADMIN HEADER
             ================================================= --}}
        <header class="admin-home__header">

            <span class="admin-home__header-title">
                M.K.U Techinniovation
            </span>

        </header>


        {{-- =================================================
             PAGE BANNER
             ================================================= --}}
        <section class="admin-home__banner">

            <h1 class="admin-home__banner-title">
                Home
            </h1>

        </section>


        {{-- =================================================
             QUICK STATISTICS
             ================================================= --}}
        <section
            class="admin-home__stats"
            aria-label="Election statistics"
        >

            {{-- Total Voters --}}
            <article class="admin-home__stat-card">

                <h2 class="admin-home__stat-title">
                    Total Voters
                </h2>

                <span class="admin-home__stat-value">
                    0
                </span>

            </article>


            {{-- Total Candidates --}}
            <article class="admin-home__stat-card">

                <h2 class="admin-home__stat-title">
                    Total Candidates
                </h2>

                <span class="admin-home__stat-value">
                    0
                </span>

            </article>


            {{-- Total Votes --}}
            <article class="admin-home__stat-card">

                <h2 class="admin-home__stat-title">
                    Total Votes
                </h2>

                <span class="admin-home__stat-value">
                    0
                </span>

            </article>


            {{-- Suspended Accounts --}}
            <article class="admin-home__stat-card">

                <h2 class="admin-home__stat-title">
                    Suspended Accounts
                </h2>

                <span class="admin-home__stat-value">
                    0
                </span>

            </article>


            {{-- Total Elections --}}
            <article class="admin-home__stat-card">

                <h2 class="admin-home__stat-title">
                    Total Elections
                </h2>

                <span class="admin-home__stat-value">
                    0
                </span>

            </article>


            {{-- Election Date --}}
            <article class="admin-home__stat-card">

                <h2 class="admin-home__stat-title">
                    Election Date
                </h2>

                <span class="admin-home__stat-value">
                    —
                </span>

            </article>

        </section>


        {{-- =================================================
             FOOTER
             ================================================= --}}
        <footer class="admin-home__footer">

            <p class="admin-home__footer-text">
                &copy; {{ date('Y') }} M.K.U Techinniovation
            </p>

        </footer>

    </main>

</x-admin.layout>