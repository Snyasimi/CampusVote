@push('stylesheets')
    <link
        rel="stylesheet"
        href="{{ asset('css/adminPages/navigation.css') }}"
    >
@endpush

<aside class="admin-navigation">

    {{-- Navigation Header --}}
    <header class="admin-navigation__header">

        <h2 class="admin-navigation__title">
            Navigation
        </h2>

    </header>


    {{-- Administrator Details --}}
    <section class="admin-navigation__profile">

        <h3 class="admin-navigation__section-title">
            My Details
        </h3>

        <div class="admin-navigation__profile-details">

            <div class="admin-navigation__profile-item">

                <span class="admin-navigation__profile-label">
                    Name
                </span>

                <span class="admin-navigation__profile-value">
                    Bob Name ds
                </span>

            </div>


            <div class="admin-navigation__profile-item">

                <span class="admin-navigation__profile-label">
                    Last Login
                </span>

                <span class="admin-navigation__profile-value">
                    10:59 PM
                </span>

            </div>

        </div>

    </section>


    {{-- Main Navigation --}}
    <nav
        class="admin-navigation__menu"
        aria-label="Main navigation"
    >

        <ul class="admin-navigation__list">


            {{-- User Management --}}
            <li class="admin-navigation__group">

                <h3 class="admin-navigation__group-title">
                    User Management
                </h3>

                <ul class="admin-navigation__submenu">

                    <li class="admin-navigation__item">
                        <a
                            href="#"
                            class="admin-navigation__link"
                        >
                            All Users
                        </a>
                    </li>

                    <li class="admin-navigation__item">
                        <a
                            href="#"
                            class="admin-navigation__link"
                        >
                            All Candidates
                        </a>
                    </li>

                    <li class="admin-navigation__item">
                        <a
                            href="#"
                            class="admin-navigation__link"
                        >
                            All Voters
                        </a>
                    </li>

                </ul>

            </li>


            {{-- Candidate Management --}}
            <li class="admin-navigation__group">

                <h3 class="admin-navigation__group-title">
                    Candidate Management
                </h3>

                <ul class="admin-navigation__submenu">

                    <li class="admin-navigation__item">
                        <a
                            href="#"
                            class="admin-navigation__link"
                        >
                            View Applications
                        </a>
                    </li>

                    <li class="admin-navigation__item">
                        <a
                            href="#"
                            class="admin-navigation__link"
                        >
                            Contesting
                        </a>
                    </li>

                    <li class="admin-navigation__item">
                        <a
                            href="#"
                            class="admin-navigation__link"
                        >
                            Find Candidate
                        </a>
                    </li>

                </ul>

            </li>


            {{-- Settings --}}
            <li class="admin-navigation__group">

                <h3 class="admin-navigation__group-title">
                    Settings
                </h3>

                <ul class="admin-navigation__submenu">

                    <li class="admin-navigation__item">
                        <a
                            href="#"
                            class="admin-navigation__link"
                        >
                            Update Information
                        </a>
                    </li>

                    <li class="admin-navigation__item">
                        <a
                            href="#"
                            class="admin-navigation__link"
                        >
                            Account Settings
                        </a>
                    </li>

                    <li class="admin-navigation__item">
                        <a
                            href="#"
                            class="admin-navigation__link"
                        >
                            System Settings
                        </a>
                    </li>

                </ul>

            </li>

        </ul>

    </nav>

</aside>