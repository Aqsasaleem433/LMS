<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>RealStack CRM</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('front/asset/styles.css') }}">
</head>

<body>

<!-- Background effect -->
<div class="background-noise"></div>

<!-- HEADER -->
<header class="site-header">
    <div class="container nav-wrap">

        <a class="brand" href="#">RealStack CRM</a>

        <button id="menuBtn" class="menu-btn">Menu</button>

        <nav id="navMenu" class="nav-links">
            <a href="#features">Features</a>
            <a href="#how">How it works</a>
            <a href="#contact">Contact</a>
        </nav>

    </div>
</header>

<!-- HERO -->
<section class="hero section-reveal">
    <div class="container hero-grid">

        <div>
            <span class="eyebrow">AI LEAD ENGINE</span>

            <h1>Close more deals with AI-powered follow-ups</h1>

            <p class="hero-copy">
                AI agents call, email, and follow up automatically so your sales team focuses on closing.
            </p>

            <div class="cta-row">
                <a href="#contact" class="btn btn-primary">Book Demo</a>
                <a href="#" class="btn btn-outline">Watch Demo</a>
            </div>

            <p class="trust-row">Trusted by 150+ teams</p>
        </div>

        <!-- RIGHT PANEL -->
        <div class="hero-panel">

            <div class="panel-card">
                <div class="panel-label">SMART DIALER</div>
                <h3>Auto-call + AI notes</h3>
                <ul>
                    <li>Live call summaries</li>
                    <li>Sentiment detection</li>
                    <li>Next-step automation</li>
                </ul>
            </div>

            <div class="panel-metrics">
                <h4>Pipeline Status</h4>

                <div class="metric">
                    <span>12</span><small>leads</small>
                </div>

                <div class="metric">
                    <span>+6</span><small>WhatsApp replies</small>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- HOW IT WORKS -->
<section id="how" class="section-reveal">
    <div class="container">

        <h2>How it works</h2>
        <p class="section-intro">Four steps to automate your sales pipeline.</p>

        <div class="steps-grid">

            <div class="step-card">
                <div class="step-index">STEP 1</div>
                <h3>Import Data</h3>
                <a href="#">Explore →</a>
            </div>

            <div class="step-card">
                <div class="step-index">STEP 2</div>
                <h3>AI Scoring</h3>
                <a href="#">Explore →</a>
            </div>

            <div class="step-card">
                <div class="step-index">STEP 3</div>
                <h3>Automation</h3>
                <a href="#">Explore →</a>
            </div>

            <div class="step-card">
                <div class="step-index">STEP 4</div>
                <h3>Close Deals</h3>
                <a href="#">Explore →</a>
            </div>

        </div>

    </div>
</section>

<!-- FEATURES -->
<section id="features" class="section-reveal">
    <div class="container">

        <h2>Feature Suite</h2>

        <div class="feature-grid">

            <article>Missed Call Recovery</article>
            <article>Instant Response AI</article>
            <article>Multi-touch Follow-up</article>
            <article>CRM Sync</article>

        </div>

    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="section-reveal">
    <div class="container contact-grid">

        <div>
            <h2>Get Started</h2>
            <ul class="discovery-list">
                <li>Lead source mapping</li>
                <li>CRM integration</li>
                <li>Automation setup</li>
            </ul>
        </div>

        <form id="demoForm" class="contact-form">

            <label>
                Full Name
                <input type="text" name="name" required>
            </label>

            <label>
                Email
                <input type="email" name="email" required>
            </label>

            <label>
                Message
                <textarea name="message"></textarea>
            </label>

            <button class="btn btn-primary" type="submit">
                Request Demo
            </button>

            <p id="formStatus" class="form-status"></p>

        </form>

    </div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
    <div class="container footer-grid">

        <div>
            <h3>RealStack CRM</h3>
            <p>AI-powered sales automation</p>
        </div>

        <div>
            <a href="#">Product</a>
            <a href="#">Features</a>
        </div>

        <div>
            <a href="#">Company</a>
            <a href="#">Contact</a>
        </div>

        <div>
            <a href="#">Legal</a>
            <a href="#">Privacy</a>
        </div>

    </div>

    <p class="copyright">© 2026 RealStack CRM</p>
</footer>

<!-- JS -->
<script src="{{ asset('front/asset/script.js') }}"></script>

</body>
</html>