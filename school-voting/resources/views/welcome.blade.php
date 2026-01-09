<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Campus Elections</title>
  <link rel="stylesheet" href="styles.css">


<style>

/* CSS Variables for colors */
:root {
  --main-bg: #fff;
  --main-text: #333;
  --header-bg: #f9f9f9;
  --nav-text: #555;
  --button-bg: #007bff;
  --button-text: #fff;
  --button-hover-bg: #0056b3;
  --link-color: #007bff;
  --link-hover-color: #0056b3;
}

/* Mobile-First Styling */
body {
  font-family: Arial, sans-serif;
  background-color: var(--main-bg);
  color: var(--main-text);
  margin: 0;
  padding: 0;
  line-height: 1.5;
}

/* Header Styling */
header {
  background-color: var(--header-bg);
  color: var(--main-text);
  padding: 1rem 0;
  border-bottom: 1px solid #ddd;
}

header .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 1rem;
}

header .logo a {
  text-decoration: none;
  color: var(--main-text);
  font-size: 1.5rem;
  font-weight: bold;
}

header nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  gap: 1rem;
}

header nav ul li a {
  text-decoration: none;
  color: var(--nav-text);
  font-size: 1rem;
}

header nav ul li a:hover {
  color: var(--link-hover-color);
}

/* Main Content Styling */
main {
  padding: 1rem;
}

.info, .cta {
  margin-bottom: 2rem;
  text-align: center;
}

.info h2, .cta h2 {
  font-size: 1.5rem;
}

.info p {
  font-size: 1rem;
  color: var(--main-text);
}

.button {
  display: inline-block;
  text-decoration: none;
  background-color: var(--button-bg);
  color: var(--button-text);
  padding: 0.75rem 1.5rem;
  border-radius: 5px;
  font-size: 1rem;
  transition: background-color 0.3s;
}

.button:hover {
  background-color: var(--button-hover-bg);
}

/* Footer Styling */
footer {
  text-align: center;
  padding: 1rem;
  background-color: var(--header-bg);
  border-top: 1px solid #ddd;
  color: var(--main-text);
}

/* Responsiveness for larger screens */
@media (min-width: 768px) {
  header .logo a {
      font-size: 2rem;
        }

  header nav ul li a {
    font-size: 1.25rem;
  }

  .info h2, .cta h2 {
    font-size: 2rem;
  }

  .info p {
    font-size: 1.25rem;
  }

  .button {
    font-size: 1.25rem;
  }
}

</style>

</head>
<body>
  <header>
    <div class="container">
      <div class="logo">
        <a href="/">Campus Elections</a>
      </div>
      <nav>
        <ul>
          <li><a href="/login">Login</a></li>
          <li><a href="/signup">Sign Up</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <section class="info">
      <h2>Why Vote?</h2>
      <p>Participating in campus elections empowers you to choose leaders who represent your voice.</p>
    </section>

    <section class="cta">
      <h2>Ready to Make a Difference?</h2>
      <a href="/vote" class="button">Vote Now</a>
    </section>
  </main>

  <footer>
    <p>&copy; 2026 Campus Elections. Designed with integrity and simplicity.</p>
  </footer>
</body>
</html>
