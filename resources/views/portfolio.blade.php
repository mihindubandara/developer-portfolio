```html
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Portfolio.API</a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Hero / Profile Section -->
<section class="hero text-center" id="about">
    <div class="container">

        <h1 class="display-4 fw-bold mb-3">
            Hi, I'm Mihindu Bandara
        </h1>

        <p class="lead text-info fw-semibold">
            Software Engineering Student | Full Stack Developer
        </p>

        <p class="mx-auto text-light opacity-75 mb-4" style="max-width: 700px;">
            Passionate Software Engineering student with experience in
            building web applications, RESTful APIs, database-driven systems,
            and modern software solutions using Laravel, PHP, JavaScript,
            Java, MySQL and related technologies.
        </p>

        <!-- Contact Details -->
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4 text-light opacity-85">

            <span>
                <i class="fas fa-envelope text-info me-1"></i>
                bandaramihidu28@gmail.com
            </span>

            <span>
                <i class="fas fa-phone text-info me-1"></i>
                +94 76 6433093
            </span>

            <span>
                <i class="fas fa-map-marker-alt text-info me-1"></i>
                115/2 Pitawala Road, Menikhinna
            </span>

        </div>

        <!-- Profile Links -->
        <div class="mt-4">

            <a href="https://github.com/mihindubandara"
               target="_blank"
               rel="noopener noreferrer"
               class="btn btn-outline-light me-2 mb-2">

                <i class="fab fa-github"></i>
                GitHub
            </a>

            <a href="https://www.linkedin.com/in/mihindu-bandara-2256bb424"
               target="_blank"
               rel="noopener noreferrer"
               class="btn btn-outline-light me-2 mb-2">

                <i class="fab fa-linkedin"></i>
                LinkedIn
            </a>

            <a href="/cv.pdf"
               target="_blank"
               class="btn btn-primary mb-2">

                <i class="fas fa-file-download"></i>
                Download CV
            </a>

        </div>
    </div>
</section>


<!-- Skills Section -->
<section class="py-5" id="skills">
    <div class="container">

        <h2 class="text-center fw-bold mb-4">
            Technical Skills
        </h2>

        <div class="row g-4 justify-content-center">

            <!-- Java -->
            <div class="col-6 col-md-3 text-center">
                <div class="p-4 border rounded bg-white shadow-sm h-100">

                    <i class="fab fa-java text-danger skill-icon"></i>

                    <h5 class="fw-bold mb-0">
                        Java
                    </h5>

                </div>
            </div>

            <!-- PHP -->
            <div class="col-6 col-md-3 text-center">
                <div class="p-4 border rounded bg-white shadow-sm h-100">

                    <i class="fab fa-php skill-icon"
                       style="color: #777bb3 !important;"></i>

                    <h5 class="fw-bold mb-0">
                        PHP
                    </h5>

                </div>
            </div>

            <!-- Laravel -->
            <div class="col-6 col-md-3 text-center">
                <div class="p-4 border rounded bg-white shadow-sm h-100">

                    <i class="fab fa-laravel text-danger skill-icon"></i>

                    <h5 class="fw-bold mb-0">
                        Laravel
                    </h5>

                </div>
            </div>

            <!-- JavaScript -->
            <div class="col-6 col-md-3 text-center">
                <div class="p-4 border rounded bg-white shadow-sm h-100">

                    <i class="fab fa-js text-warning skill-icon"></i>

                    <h5 class="fw-bold mb-0">
                        JavaScript
                    </h5>

                </div>
            </div>

            <!-- MySQL -->
            <div class="col-6 col-md-3 text-center">
                <div class="p-4 border rounded bg-white shadow-sm h-100">

                    <i class="fas fa-database text-info skill-icon"></i>

                    <h5 class="fw-bold mb-0">
                        MySQL
                    </h5>

                </div>
            </div>

            <!-- HTML & CSS -->
            <div class="col-6 col-md-3 text-center">
                <div class="p-4 border rounded bg-white shadow-sm h-100">

                    <i class="fab fa-html5 skill-icon"
                       style="color: #e34f26 !important;"></i>

                    <h5 class="fw-bold mb-0">
                        HTML & CSS
                    </h5>

                </div>
            </div>

            <!-- Git & GitHub -->
            <div class="col-6 col-md-3 text-center">
                <div class="p-4 border rounded bg-white shadow-sm h-100">

                    <i class="fab fa-git-alt skill-icon"
                       style="color: #f05032 !important;"></i>

                    <h5 class="fw-bold mb-0">
                        Git & GitHub
                    </h5>

                </div>
            </div>

            <!-- C# -->
            <div class="col-6 col-md-3 text-center">
                <div class="p-4 border rounded bg-white shadow-sm h-100">

                    <i class="fas fa-code skill-icon"
                       style="color: #68217a !important;"></i>

                    <h5 class="fw-bold mb-0">
                        C#
                    </h5>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- Projects Section -->
<section class="py-5 bg-light" id="projects">
    <div class="container">

        <h2 class="text-center fw-bold mb-1">
            ACADEMIC PROJECTS
        </h2>

        <p class="text-center text-muted mb-4">
            Featured works and developments
        </p>

        <div class="row g-4">


            <!-- Project 1 -->
            <div class="col-md-6">

                <div class="card h-100 p-4">

                    <h4 class="fw-bold">
                        Anonymous Police Complaint System
                    </h4>

                    <p class="text-muted">
                        A Laravel-based web application that allows users
                        to submit complaints anonymously, upload image and
                        video evidence, track complaints, and support
                        emergency reporting with location information.
                    </p>

                    <div class="mb-3">

                        <span class="badge badge-tech p-2">PHP</span>
                        <span class="badge badge-tech p-2">Laravel</span>
                        <span class="badge badge-tech p-2">MySQL</span>
                        <span class="badge badge-tech p-2">HTML</span>
                        <span class="badge badge-tech p-2">CSS</span>
                        <span class="badge badge-tech p-2">JavaScript</span>
                        <span class="badge badge-tech p-2">Bootstrap</span>
                        <span class="badge badge-tech p-2">Git & GitHub</span>
                        <span class="badge badge-tech p-2">XAMPP</span>

                    </div>

                    <div>
                        <a href="https://github.com/mihindubandara/Anonymous-Police-Complaint-System"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn btn-sm btn-outline-dark">

                            <i class="fab fa-github"></i>
                            View on GitHub

                        </a>
                    </div>

                </div>

            </div>


            <!-- Project 2 -->
            <div class="col-md-6">

                <div class="card h-100 p-4">

                    <h4 class="fw-bold">
                        T20 World Cup Management System
                    </h4>

                    <p class="text-muted">
                        A web-based tournament and stadium ticket management
                        system with ticket purchasing, booking, tournament
                        management and administrative features.
                    </p>

                    <div class="mb-3">

                        <span class="badge badge-tech p-2">PHP (PDO)</span>
                        <span class="badge badge-tech p-2">MySQL</span>
                        <span class="badge badge-tech p-2">HTML</span>
                        <span class="badge badge-tech p-2">CSS</span>
                        <span class="badge badge-tech p-2">Bootstrap</span>
                        <span class="badge badge-tech p-2">Git & GitHub</span>

                    </div>

                    <div>
                        <a href="https://github.com/mihindubandara/T20-World-Cup-Management-System"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn btn-sm btn-outline-dark">

                            <i class="fab fa-github"></i>
                            View on GitHub

                        </a>
                    </div>

                </div>

            </div>


            <!-- Project 3 -->
            <div class="col-md-6">

                <div class="card h-100 p-4">

                    <h4 class="fw-bold">
                        Bookstore Management System
                    </h4>

                    <p class="text-muted">
                        A Java Swing desktop application designed to manage
                        books, customers, inventory and sales using a
                        MySQL database.
                    </p>

                    <div class="mb-3">

                        <span class="badge badge-tech p-2">Java</span>
                        <span class="badge badge-tech p-2">Java Swing (GUI)</span>
                        <span class="badge badge-tech p-2">MySQL</span>
                        <span class="badge badge-tech p-2">JDBC</span>
                        <span class="badge badge-tech p-2">MySQL Connector/J</span>

                    </div>

                    <div>
                        <a href="https://github.com/mihindubandara/bookstore-management-system"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn btn-sm btn-outline-dark">

                            <i class="fab fa-github"></i>
                            View on GitHub

                        </a>
                    </div>

                </div>

            </div>


            <!-- Project 4 -->
            <div class="col-md-6">

                <div class="card h-100 p-4">

                    <h4 class="fw-bold">
                        Game Zone Management System
                    </h4>

                    <p class="text-muted">
                        A Java Swing desktop management system for handling
                        customer records, game bookings, payments and
                        generating PDF reports.
                    </p>

                    <div class="mb-3">

                        <span class="badge badge-tech p-2">Java</span>
                        <span class="badge badge-tech p-2">Java Swing</span>
                        <span class="badge badge-tech p-2">MySQL</span>
                        <span class="badge badge-tech p-2">JDBC</span>
                        <span class="badge badge-tech p-2">MySQL Connector/J</span>
                        <span class="badge badge-tech p-2">iText PDF Library</span>

                    </div>

                    <div>
                        <a href="https://github.com/mihindubandara/Game_zone_management_system"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn btn-sm btn-outline-dark">

                            <i class="fab fa-github"></i>
                            View on GitHub

                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>


<!-- Education Section -->
<section class="py-5" id="education">
    <div class="container">

        <h2 class="text-center fw-bold mb-4">
            Education
        </h2>

        <div class="row g-4 justify-content-center">

            <div class="col-md-10">

                <!-- HNDIT -->
                <div class="p-4 border rounded bg-white shadow-sm mb-3">

                    <h4 class="fw-bold">
                        Higher National Diploma in Information Technology (HNDIT)
                    </h4>

                    <h6 class="text-primary">
                        SLIATE |
                        <small class="text-muted">
                            2023 - Present
                        </small>
                    </h6>

                    <p class="mb-0 text-muted">
                        Focused on Software Engineering, Web Development,
                        Database Systems, and Object-Oriented Programming.
                    </p>

                </div>


                <!-- A/L -->
                <div class="p-4 border rounded bg-white shadow-sm mb-3">

                    <h4 class="fw-bold">
                        G.C.E. Advanced Level – Commerce Stream
                    </h4>

                    <h6 class="text-primary">
                        Medamahanuwara Secondary School |
                        <small class="text-muted">
                            2023
                        </small>
                    </h6>

                </div>


                <!-- O/L -->
                <div class="p-4 border rounded bg-white shadow-sm">

                    <h4 class="fw-bold">
                        G.C.E. Ordinary Level
                    </h4>

                    <h6 class="text-primary">
                        Medamahanuwara Secondary School |
                        <small class="text-muted">
                            2019
                        </small>
                    </h6>

                </div>

            </div>

        </div>
    </div>
</section>


<!-- Contact Form Section -->
<section class="py-5 bg-dark text-white" id="contact">

    <div class="container">

        <h2 class="text-center fw-bold mb-2">
            Get In Touch
        </h2>

        <p class="text-center text-secondary mb-4">
            Have a question or want to work together? Send me a message.
        </p>

        <div class="row justify-content-center">

            <div class="col-md-6">

                <form id="contact-form"
                      action="{{ url('/api/contact') }}"
                      method="POST">

                    @csrf

                    <!-- Name -->
                    <div class="mb-3">

                        <label for="contact-name" class="form-label">
                            Name
                        </label>

                        <input type="text"
                               name="name"
                               id="contact-name"
                               class="form-control"
                               placeholder="Your Name"
                               required>

                    </div>


                    <!-- Email -->
                    <div class="mb-3">

                        <label for="contact-email" class="form-label">
                            Email
                        </label>

                        <input type="email"
                               name="email"
                               id="contact-email"
                               class="form-control"
                               placeholder="Your Email"
                               required>

                    </div>


                    <!-- Subject -->
                    <div class="mb-3">

                        <label for="contact-subject" class="form-label">
                            Subject
                        </label>

                        <input type="text"
                               name="subject"
                               id="contact-subject"
                               class="form-control"
                               placeholder="Subject">

                    </div>


                    <!-- Message -->
                    <div class="mb-3">

                        <label for="contact-message" class="form-label">
                            Message
                        </label>

                        <textarea name="message"
                                  id="contact-message"
                                  class="form-control"
                                  rows="5"
                                  placeholder="Your Message"
                                  required></textarea>

                    </div>


                    <!-- Send Button -->
                    <button type="submit"
                            id="contact-submit"
                            class="btn btn-primary w-100">

                        Send Message

                    </button>

                </form>


                <!-- Success / Error Alert -->
                <div id="contact-alert"
                     class="alert mt-3 d-none"
                     role="alert">
                </div>

            </div>

        </div>

    </div>

</section>


<!-- Footer -->
<footer class="py-4 bg-black text-center text-secondary">

    <div class="container">

        <p class="mb-0">
            &copy; {{ date('Y') }} Mihindu Bandara.
            All rights reserved.
        </p>

    </div>

</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- Contact Form JavaScript -->
<script>
document.getElementById('contact-form').addEventListener('submit', async function (e) {

    e.preventDefault();

    const form = this;
    const button = document.getElementById('contact-submit');
    const alertBox = document.getElementById('contact-alert');

    // Hide previous alert
    alertBox.classList.add('d-none');
    alertBox.classList.remove('alert-success', 'alert-danger');

    // Loading state
    button.disabled = true;

    button.innerHTML =
        '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';

    try {

        const response = await fetch(form.action, {

            method: 'POST',

            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector(
                    'input[name="_token"]'
                ).value
            },

            body: new FormData(form)

        });


        const data = await response.json();


        // Successful response
        if (response.ok && data.status) {

            alertBox.classList.add('alert-success');

            alertBox.innerHTML = `
                <strong>✓ Message Sent Successfully!</strong><br>
                Thank you for reaching out. Your message has been received successfully.
            `;

            alertBox.classList.remove('d-none');

            // Clear form
            form.reset();

        }

        // Server-side error
        else {

            alertBox.classList.add('alert-danger');

            if (data.message) {

                alertBox.innerHTML = `
                    <strong>✕ Unable to Send Message</strong><br>
                    ${data.message}
                `;

            } else {

                alertBox.innerHTML = `
                    <strong>✕ Something went wrong.</strong><br>
                    Please try again later.
                `;

            }

            alertBox.classList.remove('d-none');

        }


    } catch (error) {

        // Network / connection error
        alertBox.classList.add('alert-danger');

        alertBox.innerHTML = `
            <strong>✕ Unable to Send Message</strong><br>
            Please check your internet connection and try again.
        `;

        alertBox.classList.remove('d-none');

        console.error('Contact form error:', error);

    }


    finally {

        // Restore button
        button.disabled = false;

        button.innerHTML = 'Send Message';

    }

});
</script>
```
