<?php
session_start();
$contactStatus = $_SESSION['contact_status'] ?? null;
unset($_SESSION['contact_status']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>mrwill — Full-Stack Developer</title>
<meta name="description" content="Portfolio of mrwill, a full-stack developer building clean, functional web applications.">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="data:,">
</head>
<body>

<header class="site-header">
  <div class="container nav">
    <a href="#home" class="logo">mrwill<span>.</span></a>
    <nav class="nav-links" id="navLinks">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#skills">Skills</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </nav>
    <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<main>

  <section id="home" class="hero">
    <div class="container hero-inner">
      <p class="hero-eyebrow">Hi, I'm</p>
      <h1>mrwill</h1>
      <p class="hero-tagline">Full-Stack Developer crafting clean, functional, and fast web experiences.</p>
      <div class="hero-actions">
        <a href="#projects" class="btn btn-primary">View My Work</a>
        <a href="#contact" class="btn btn-ghost">Get In Touch</a>
      </div>
    </div>
  </section>

  <section id="about" class="section">
    <div class="container">
      <h2 class="section-title">About Me</h2>
      <div class="about-grid">
        <div class="about-text">
          <p>I'm a developer who enjoys turning ideas into working products — from backend logic to pixel-level frontend details. I care about writing code that's easy to read, easy to change, and does exactly what it says.</p>
          <p>Comfortable across the stack: server-side logic, databases, APIs, and modern frontend tooling. I like small, sharp tools over bloated frameworks when they get the job done.</p>
        </div>
        <ul class="about-facts">
          <li><strong>Based in</strong><span>Remote / Available Worldwide</span></li>
          <li><strong>Focus</strong><span>Web Applications &amp; APIs</span></li>
          <li><strong>Currently</strong><span>Open to new projects</span></li>
        </ul>
      </div>
    </div>
  </section>

  <section id="skills" class="section section-alt">
    <div class="container">
      <h2 class="section-title">Skills</h2>
      <div class="skills-grid">
        <div class="skill-card">
          <h3>Frontend</h3>
          <p>HTML, CSS, JavaScript, React</p>
        </div>
        <div class="skill-card">
          <h3>Backend</h3>
          <p>PHP, Node.js, REST APIs</p>
        </div>
        <div class="skill-card">
          <h3>Database</h3>
          <p>MySQL, MongoDB</p>
        </div>
        <div class="skill-card">
          <h3>Tools</h3>
          <p>Git, Docker, VS Code</p>
        </div>
      </div>
    </div>
  </section>

  <section id="projects" class="section">
    <div class="container">
      <h2 class="section-title">Projects</h2>
      <div class="projects-grid">
        <article class="project-card">
          <div class="project-thumb" aria-hidden="true"></div>
          <div class="project-body">
            <h3>Project One</h3>
            <p>A short description of what this project does and the problem it solves.</p>
            <div class="project-tags"><span>PHP</span><span>MySQL</span></div>
            <a href="#" class="project-link">View Project →</a>
          </div>
        </article>
        <article class="project-card">
          <div class="project-thumb" aria-hidden="true"></div>
          <div class="project-body">
            <h3>Project Two</h3>
            <p>A short description of what this project does and the problem it solves.</p>
            <div class="project-tags"><span>JavaScript</span><span>API</span></div>
            <a href="#" class="project-link">View Project →</a>
          </div>
        </article>
        <article class="project-card">
          <div class="project-thumb" aria-hidden="true"></div>
          <div class="project-body">
            <h3>Project Three</h3>
            <p>A short description of what this project does and the problem it solves.</p>
            <div class="project-tags"><span>React</span><span>Node.js</span></div>
            <a href="#" class="project-link">View Project →</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section id="contact" class="section section-alt">
    <div class="container contact-grid">
      <div>
        <h2 class="section-title">Get In Touch</h2>
        <p class="contact-intro">Have a project in mind or just want to say hi? Send a message below.</p>
        <ul class="contact-details">
          <li>Email: <a href="mailto:hello@mrwillbuilds.com">hello@mrwillbuilds.com</a></li>
          <li>GitHub: <a href="#" target="_blank" rel="noopener">github.com/mrwill</a></li>
          <li>LinkedIn: <a href="#" target="_blank" rel="noopener">linkedin.com/in/mrwill</a></li>
        </ul>
      </div>

      <form class="contact-form" action="contact.php" method="POST" novalidate>
        <?php if ($contactStatus === 'success'): ?>
          <p class="form-message form-success">Thanks! Your message has been sent.</p>
        <?php elseif ($contactStatus === 'error'): ?>
          <p class="form-message form-error">Something went wrong. Please try again or email directly.</p>
        <?php endif; ?>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
    </div>
  </section>

</main>

<footer class="site-footer">
  <div class="container">
    <p>&copy; <?php echo date('Y'); ?> mrwill. Built with PHP, HTML &amp; CSS.</p>
  </div>
</footer>

<script src="js/main.js"></script>
</body>
</html>
