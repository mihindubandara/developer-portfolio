<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Portfolio</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; color: #333; }
        .hero { background: linear-gradient(135deg, #1e293b, #0f172a); color: white; padding: 100px 0; }
        .card { border: none; transition: transform 0.3s; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .card:hover { transform: translateY(-5px); }
        .badge-tech { background-color: #e2e8f0; color: #1e293b; margin-right: 5px; }
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
            <h1 class="display-4 fw-bold" id="profile-name">Loading...</h1>
            <p class="lead text-info" id="profile-title"></p>
            <p class="mx-auto" style="max-width: 700px;" id="profile-about"></p>
            <div class="mt-4">
                <a id="github-link" href="https://github.com/mihindubandara" target="_blank" class="btn btn-outline-light me-2"><i class="fab fa-github"></i> GitHub</a>
                <a id="linkedin-link" href="https://www.linkedin.com/in/mihindu-bandara-2256bb424" target="_blank" class="btn btn-outline-light me-2"><i class="fab fa-linkedin"></i> LinkedIn</a>
                <a id="cv-link" href="/cv.pdf" target="_blank" class="btn btn-primary"><i class="fas fa-file-download"></i> Download CV</a>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-5" id="skills">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Technical Skills</h2>
            <div class="row g-3" id="skills-container">
                <!-- Skills dynamically loaded via JS -->
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-5 bg-light" id="projects">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Featured Projects</h2>
            <div class="row g-4" id="projects-container">
                <!-- Projects dynamically loaded via JS -->
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="py-5" id="education">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Education</h2>
            <div class="row g-4" id="education-container">
                <!-- Education dynamically loaded via JS -->
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-5 bg-dark text-white" id="contact">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Get In Touch</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form id="contact-form">
                        <div class="mb-3">
                            <input type="text" id="contact-name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" id="contact-email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" id="contact-subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <textarea id="contact-message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                    <div id="contact-alert" class="alert mt-3 d-none"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript - Fetching Data from Laravel REST API -->
    <script>
        const API_BASE = '/api';

        // 1. Fetch Profile Data
        fetch(`${API_BASE}/profile`)
            .then(res => res.json())
            .then(res => {
                if(res.status && res.data) {
                    document.getElementById('profile-name').innerText = res.data.name;
                    document.getElementById('profile-title').innerText = res.data.title;
                    document.getElementById('profile-about').innerText = res.data.about;
                    document.getElementById('github-link').href = res.data.github_url || '#';
                    document.getElementById('linkedin-link').href = res.data.linkedin_url || '#';
                    document.getElementById('cv-link').href = res.data.cv_url || '#';
                }
            });

        // 2. Fetch Skills Data
        fetch(`${API_BASE}/skills`)
            .then(res => res.json())
            .then(res => {
                if(res.status && res.data) {
                    const container = document.getElementById('skills-container');
                    container.innerHTML = res.data.map(skill => `
                        <div class="col-md-4">
                            <div class="p-3 border rounded bg-white">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="fw-bold">${skill.name}</span>
                                    <span>${skill.percentage}%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-success" style="width: ${skill.percentage}%"></div>
                                </div>
                            </div>
                        </div>
                    `).join('');
                }
            });

        // 3. Fetch Projects Data
        fetch(`${API_BASE}/projects`)
            .then(res => res.json())
            .then(res => {
                if(res.status && res.data) {
                    const container = document.getElementById('projects-container');
                    container.innerHTML = res.data.map(project => `
                        <div class="col-md-6">
                            <div class="card h-100 p-4">
                                <h4 class="fw-bold">${project.title}</h4>
                                <p class="text-muted">${project.description}</p>
                                <div class="mb-3">
                                    ${project.technologies.split(',').map(tech => `<span class="badge badge-tech p-2">${tech.trim()}</span>`).join('')}
                                </div>
                                <div>
                                    ${project.github_link ? `<a href="${project.github_link}" target="_blank" class="btn btn-sm btn-outline-dark"><i class="fab fa-github"></i> GitHub</a>` : ''}
                                    ${project.demo_link ? `<a href="${project.demo_link}" target="_blank" class="btn btn-sm btn-primary ms-2"><i class="fas fa-external-link-alt"></i> Live Demo</a>` : ''}
                                </div>
                            </div>
                        </div>
                    `).join('');
                }
            });

        // 4. Fetch Education Data
        fetch(`${API_BASE}/education`)
            .then(res => res.json())
            .then(res => {
                if(res.status && res.data) {
                    const container = document.getElementById('education-container');
                    container.innerHTML = res.data.map(edu => `
                        <div class="col-md-12">
                            <div class="p-4 border rounded bg-white">
                                <h4 class="fw-bold">${edu.title}</h4>
                                <h6 class="text-primary">${edu.institution} | <small class="text-muted">${edu.year}</small></h6>
                                <p class="mb-0">${edu.description || ''}</p>
                            </div>
                        </div>
                    `).join('');
                }
            });

        // 5. Submit Contact Form to API
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const alertBox = document.getElementById('contact-alert');

            const formData = {
                name: document.getElementById('contact-name').value,
                email: document.getElementById('contact-email').value,
                subject: document.getElementById('contact-subject').value,
                message: document.getElementById('contact-message').value
            };

            fetch(`${API_BASE}/contact`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                body: JSON.stringify(formData)
            })
            .then(res => res.json())
            .then(res => {
                if(res.status) {
                    alertBox.className = 'alert alert-success mt-3';
                    alertBox.innerText = res.message;
                    document.getElementById('contact-form').reset();
                } else {
                    alertBox.className = 'alert alert-danger mt-3';
                    alertBox.innerText = 'Failed to send message.';
                }
                alertBox.classList.remove('d-none');
            });
        });
    </script>
</body>
</html>