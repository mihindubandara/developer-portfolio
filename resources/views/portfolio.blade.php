<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Portfolio - Mihindu Bandara</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; color: #333; }
        .hero { background: linear-gradient(135deg, #1e293b, #0f172a); color: white; padding: 100px 0; }
        .card { border: none; transition: transform 0.3s; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .card:hover { transform: translateY(-5px); }
        .badge-tech { background-color: #e2e8f0; color: #1e293b; margin-right: 5px; margin-bottom: 5px; display: inline-block; }
        .skill-icon { font-size: 2.2rem; margin-bottom: 10px; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Portfolio.API</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero / Profile Section -->
    <section class="hero text-center" id="about">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Hi, I'm Mihindu Bandara</h1>
            <p class="lead text-info fw-semibold">Software Engineering Student | Full Stack Developer</p>
            <p class="mx-auto text-light opacity-75 mb-4" style="max-width: 700px;">
                Passionate Software Engineering student with experience in building RESTful APIs, web applications using Laravel, PHP, MySQL, and modern JavaScript frameworks.
            </p>
            
            <!-- Contact Details Badges / Info -->
            <div class="d-flex flex-wrap justify-content-center gap-3 mb-4 text-light opacity-85">
                <span><i class="fas fa-envelope text-info me-1"></i> bandaramihidu28@gmail.com</span>
                <span><i class="fas fa-phone text-info me-1"></i> +94 76 6433093</span>
                <span><i class="fas fa-map-marker-alt text-info me-1"></i> 115/2 Pitawala Road, Menikhinna</span>
            </div>

            <div class="mt-4">
                <a href="https://github.com/mihindubandara" target="_blank" class="btn btn-outline-light me-2 mb-2"><i class="fab fa-github"></i> GitHub</a>
                <a href="https://www.linkedin.com/in/mihindu-bandara-2256bb424" target="_blank" class="btn btn-outline-light me-2 mb-2"><i class="fab fa-linkedin"></i> LinkedIn</a>
                <a href="/cv.pdf" target="_blank" class="btn btn-primary mb-2">
                    <i class="fas fa-file-download"></i> Download CV
                </a>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-5" id="skills">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Technical Skills</h2>
            <div class="row g-4 justify-content-center">
                <!-- Java -->
                <div class="col-6 col-md-3 text-center">
                    <div class="p-4 border rounded bg-white shadow-sm h-100">
                        <i class="fab fa-java text-danger skill-icon"></i>
                        <h5 class="fw-bold mb-0">Java</h5>
                    </div>
                </div>
                <!-- PHP -->
                <div class="col-6 col-md-3 text-center">
                    <div class="p-4 border rounded bg-white shadow-sm h-100">
                        <i class="fab fa-php text-primary skill-icon" style="color: #777bb3 !important;"></i>
                        <h5 class="fw-bold mb-0">PHP</h5>
                    </div>
                </div>
                <!-- Laravel -->
                <div class="col-6 col-md-3 text-center">
                    <div class="p-4 border rounded bg-white shadow-sm h-100">
                        <i class="fab fa-laravel text-danger skill-icon"></i>
                        <h5 class="fw-bold mb-0">Laravel</h5>
                    </div>
                </div>
                <!-- JavaScript -->
                <div class="col-6 col-md-3 text-center">
                    <div class="p-4 border rounded bg-white shadow-sm h-100">
                        <i class="fab fa-js text-warning skill-icon"></i>
                        <h5 class="fw-bold mb-0">JavaScript</h5>
                    </div>
                </div>
                <!-- MySQL -->
                <div class="col-6 col-md-3 text-center">
                    <div class="p-4 border rounded bg-white shadow-sm h-100">
                        <i class="fas fa-database text-info skill-icon"></i>
                        <h5 class="fw-bold mb-0">MySQL</h5>
                    </div>
                </div>
                <!-- HTML & CSS -->
                <div class="col-6 col-md-3 text-center">
                    <div class="p-4 border rounded bg-white shadow-sm h-100">
                        <i class="fab fa-html5 text-orange skill-icon" style="color: #e34f26 !important;"></i>
                        <h5 class="fw-bold mb-0">HTML & CSS</h5>
                    </div>
                </div>
                <!-- Git & GitHub -->
                <div class="col-6 col-md-3 text-center">
                    <div class="p-4 border rounded bg-white shadow-sm h-100">
                        <i class="fab fa-git-alt text-dark skill-icon" style="color: #f05032 !important;"></i>
                        <h5 class="fw-bold mb-0">Git & GitHub</h5>
                    </div>
                </div>
                <!-- C# -->
                <div class="col-6 col-md-3 text-center">
                    <div class="p-4 border rounded bg-white shadow-sm h-100">
                        <i class="fas fa-code text-purple skill-icon" style="color: #68217a !important;"></i>
                        <h5 class="fw-bold mb-0">C#</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-5 bg-light" id="projects">
        <div class="container">
            <h2 class="text-center fw-bold mb-1">ACADEMIC PROJECTS</h2>
            <p class="text-center text-muted mb-4">Featured works and developments</p>
            <div class="row g-4" id="projects-container">
                <!-- Project 1 -->
                <div class="col-md-6">
                    <div class="card h-100 p-4">
                        <h4 class="fw-bold">Anonymous Police Complaint System</h4>
                        <p class="text-muted">Anonymous complaint submission, evidence upload, complaint tracking and administrative management.</p>
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
                            <a href="https://github.com/mihindubandara" target="_blank" class="btn btn-sm btn-outline-dark"><i class="fab fa-github"></i> GitHub</a>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-md-6">
                    <div class="card h-100 p-4">
                        <h4 class="fw-bold">T20 World Cup Management System</h4>
                        <p class="text-muted">Web-based tournament and stadium ticket management with booking and administration features.</p>
                        <div class="mb-3">
                            <span class="badge badge-tech p-2">PHP (PDO)</span>
                            <span class="badge badge-tech p-2">MySQL</span>
                            <span class="badge badge-tech p-2">HTML</span>
                            <span class="badge badge-tech p-2">CSS</span>
                            <span class="badge badge-tech p-2">Bootstrap</span>
                            <span class="badge badge-tech p-2">Git & GitHub</span>
                        </div>
                        <div>
                            <a href="https://github.com/mihindubandara" target="_blank" class="btn btn-sm btn-outline-dark"><i class="fab fa-github"></i> GitHub</a>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-6">
                    <div class="card h-100 p-4">
                        <h4 class="fw-bold">Bookstore Management System</h4>
                        <p class="text-muted">Desktop application for managing books, customers, inventory and sales.</p>
                        <div class="mb-3">
                            <span class="badge badge-tech p-2">Java</span>
                            <span class="badge badge-tech p-2">Java Swing (GUI)</span>
                            <span class="badge badge-tech p-2">MySQL</span>
                            <span class="badge badge-tech p-2">JDBC</span>
                            <span class="badge badge-tech p-2">MySQL Connector/J</span>
                        </div>
                        <div>
                            <a href="https://github.com/mihindubandara" target="_blank" class="btn btn-sm btn-outline-dark"><i class="fab fa-github"></i> GitHub</a>
                        </div>
                    </div>
                </div>
                <!-- Project 4 -->
                <div class="col-md-6">
                    <div class="card h-100 p-4">
                        <h4 class="fw-bold">Game Zone Management System</h4>
                        <p class="text-muted">Desktop management system for customer records, game bookings, payments and PDF reports.</p>
                        <div class="mb-3">
                            <span class="badge badge-tech p-2">Java</span>
                            <span class="badge badge-tech p-2">Java Swing</span>
                            <span class="badge badge-tech p-2">MySQL</span>
                            <span class="badge badge-tech p-2">JDBC</span>
                            <span class="badge badge-tech p-2">MySQL Connector/J</span>
                            <span class="badge badge-tech p-2">iText PDF Library</span>
                        </div>
                        <div>
                            <a href="https://github.com/mihindubandara" target="_blank" class="btn btn-sm btn-outline-dark"><i class="fab fa-github"></i> GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="py-5" id="education">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Education</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-10">
                    <div class="p-4 border rounded bg-white shadow-sm mb-3">
                        <h4 class="fw-bold">Higher National Diploma in Information Technology (HNDIT)</h4>
                        <h6 class="text-primary">SLIATE | <small class="text-muted">2023 - Present</small></h6>
                        <p class="mb-0 text-muted">Focused on Software Engineering, Web Development, Database Systems, and Object-Oriented Programming.</p>
                    </div>
                    <div class="p-4 border rounded bg-white shadow-sm mb-3">
                        <h4 class="fw-bold">G.C.E. Advanced Level – Commerce Stream</h4>
                        <h6 class="text-primary">Medamahanuwara Secondary School | <small class="text-muted">2023</small></h6>
                    </div>
                    <div class="p-4 border rounded bg-white shadow-sm">
                        <h4 class="fw-bold">G.C.E. Ordinary Level</h4>
                        <h6 class="text-primary">Medamahanuwara Secondary School | <small class="text-muted">2019</small></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-5 bg-dark text-white" id="contact">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Get In Touch</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form id="contact-form" action="{{ url('/api/contact') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" id="contact-name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" id="contact-email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="subject" id="contact-subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <textarea name="message" id="contact-message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                    <div id="contact-alert" class="alert mt-3 d-none"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-black text-center text-secondary text-xs">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Mihindu Bandara. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>