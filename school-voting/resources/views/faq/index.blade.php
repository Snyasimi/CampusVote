<x-user.layout>

    @push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/userPages/components/faq.css') }}">
    @endpush

    <div class="main-area">

        <header>
            <h2>Frequently Asked Questions</h2>
            <p class="faq-subtitle">Everything you need to know about CampusVote</p>
        </header>

        <section class="faq-section">

            <div class="faq-item">
                <h3 class="faq-question">What can CampusVote do?</h3>
                <div class="faq-answer">
                    <p>CampusVote is a campus e-polling platform that lets you:</p>
                    <ul>
                        <li>Cast your vote for student representative positions such as Chairperson, Vice-Chair, Secretary, Sports &amp; Welfare, and Academic representative.</li>
                        <li>Apply to stand as a candidate for any open position.</li>
                        <li>View live election results on your home page.</li>
                        <li>Create and manage your student account securely.</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">How do I vote?</h3>
                <div class="faq-answer">
                    <p>Log in to your account and navigate to the <a href="{{ route('vote.index') }}">Vote Page</a>. Select one candidate per position and submit your choices. Each registered student may only vote once.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">How do I apply as a candidate?</h3>
                <div class="faq-answer">
                    <p>Log in and click <strong>Apply as a Candidate</strong> in the navigation menu. Fill in the application form and submit it. Your application will be reviewed before you appear on the ballot.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Can I see the current results?</h3>
                <div class="faq-answer">
                    <p>Yes. The <a href="{{ route('user.index') }}">Home Page</a> displays the top results for every contested position in real time.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">How do I create an account?</h3>
                <div class="faq-answer">
                    <p>Click <a href="{{ route('signUpPage') }}">Sign Up</a> and complete the registration form with your student details. Once registered you can log in immediately.</p>
                </div>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">I forgot my password. What should I do?</h3>
                <div class="faq-answer">
                    <p>Please contact your institution's system administrator to have your password reset.</p>
                </div>
            </div>

        </section>

    </div>

</x-user.layout>
