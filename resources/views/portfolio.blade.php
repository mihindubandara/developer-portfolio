<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile->name ?? 'Mihindu Bandara' }} - Portfolio</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-950 text-slate-100 font-sans selection:bg-cyan-500 selection:text-slate-950">

    <!-- Header / Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="#" class="text-xl font-bold tracking-wider text-cyan-400">MB.</a>
            <nav class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="#about" class="hover:text-cyan-400 transition">About</a>
                <a href="#skills" class="hover:text-cyan-400 transition">Skills</a>
                <a href="#projects" class="hover:text-cyan-400 transition">Projects</a>
                <a href="#education" class="hover:text-cyan-400 transition">Education</a>
                <a href="#contact" class="hover:text-cyan-400 transition">Contact</a>
            </nav>
            <a href="{{ route('login') }}" class="text-xs bg-slate-800 hover:bg-slate-700 px-4 py-2 rounded-full border border-slate-700 transition">Admin Login</a>
        </div>
    </header>

    <!-- Hero / About Section -->
    <section id="about" class="pt-32 pb-20 px-6 max-w-6xl mx-auto flex flex-col items-center text-center">
        <div class="inline-block p-1 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full mb-6">
            <div class="bg-slate-950 px-6 py-2 rounded-full text-cyan-400 text-sm font-semibold tracking-wide uppercase">
                Software Engineering Student
            </div>
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4">
            Hi, I'm <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">{{ $profile->name ?? 'Mihindu Bandara' }}</span>
        </h1>
        <p class="text-lg md:text-xl text-slate-400 max-w-2xl mb-8 leading-relaxed">
            {{ $profile->bio ?? 'Passionate Software Engineering student with experience in building RESTful APIs, web applications using Laravel, PHP, MySQL, and modern JavaScript frameworks.' }}
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#contact" class="bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-semibold px-8 py-3 rounded-xl transition shadow-lg shadow-cyan-500/20">Get In Touch</a>
            <a href="#projects" class="bg-slate-900 hover:bg-slate-800 border border-slate-800 px-8 py-3 rounded-xl transition">View Projects</a>
        </div>
    </section>

    <!-- Technical Skills Section (Percentage නැතුව Cards විදිහට) -->
    <section id="skills" class="py-20 px-6 max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2">Technical Skills</h2>
            <div class="w-16 h-1 bg-cyan-500 mx-auto rounded-full"></div>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
            @php
                $skills = \App\Models\Skill::all();
            @endphp
            @forelse($skills as $skill)
                <div class="bg-slate-900/50 border border-slate-800/80 p-6 rounded-2xl flex flex-col items-center justify-center text-center hover:border-cyan-500/50 hover:bg-slate-900 transition group">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="font-semibold text-lg text-slate-200">{{ $skill->name }}</h3>
                    @if($skill->level)
                        <span class="text-xs text-slate-500 mt-1 uppercase tracking-wider">{{ $skill->level }}</span>
                    @endif
                </div>
            @empty
                <!-- Fallback default skills if database is empty -->
                @foreach(['Java', 'PHP', 'Laravel', 'JavaScript', 'MySQL', 'HTML & CSS'] as $defaultSkill)
                    <div class="bg-slate-900/50 border border-slate-800/80 p-6 rounded-2xl flex flex-col items-center justify-center text-center hover:border-cyan-500/50 hover:bg-slate-900 transition group">
                        <div class="w-12 h-12 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="font-semibold text-lg text-slate-200">{{ $defaultSkill }}</h3>
                    </div>
                @endforeach
            @endforelse
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section id="projects" class="py-20 px-6 max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2">Featured Projects</h2>
            <div class="w-16 h-1 bg-cyan-500 mx-auto rounded-full"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            @php
                $projects = \App\Models\Project::all();
            @endphp
            @forelse($projects as $project)
                <div class="bg-slate-900 border border-slate-800 p-8 rounded-2xl flex flex-col justify-between hover:border-cyan-500/40 transition">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 rounded-lg bg-blue-500/10 text-blue-400 flex items-center justify-center">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-slate-100">{{ $project->title }}</h3>
                        <p class="text-slate-400 leading-relaxed mb-6">{{ $project->description }}</p>
                    </div>
                    @if($project->link)
                        <a href="{{ $project->link }}" target="_blank" class="inline-flex items-center text-cyan-400 hover:text-cyan-300 font-medium text-sm">
                            View Project <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    @endif
                </div>
            @empty
                <!-- Fallback default projects -->
                <div class="bg-slate-900 border border-slate-800 p-8 rounded-2xl">
                    <h3 class="text-2xl font-bold mb-3">Anonymous Police Complaint System</h3>
                    <p class="text-slate-400 leading-relaxed">A web platform allowing citizens to report complaints securely and anonymously with real-time status tracking.</p>
                </div>
                <div class="bg-slate-900 border border-slate-800 p-8 rounded-2xl">
                    <h3 class="text-2xl font-bold mb-3">T20 World Cup Management System</h3>
                    <p class="text-slate-400 leading-relaxed">Comprehensive management system to handle cricket match schedules, teams, player statistics, and live updates.</p>
                </div>
            @endforelse
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 px-6 max-w-4xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2">Education</h2>
            <div class="w-16 h-1 bg-cyan-500 mx-auto rounded-full"></div>
        </div>
        <div class="space-y-6">
            @php
                $educations = \App\Models\Education::all();
            @endphp
            @forelse($educations as $edu)
                <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div>
                        <h3 class="text-xl font-bold text-slate-100">{{ $edu->degree }}</h3>
                        <p class="text-cyan-400 font-medium text-sm mt-1">{{ $edu->institution }}</p>
                    </div>
                    <span class="mt-2 md:mt-0 bg-slate-800 px-4 py-1.5 rounded-full text-xs font-semibold text-slate-400 border border-slate-700">{{ $edu->year }}</span>
                </div>
            @empty
                <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div>
                        <h3 class="text-xl font-bold text-slate-100">Higher National Diploma in Information Technology (HNDIT)</h3>
                        <p class="text-cyan-400 font-medium text-sm mt-1">SLIATE</p>
                    </div>
                    <span class="mt-2 md:mt-0 bg-slate-800 px-4 py-1.5 rounded-full text-xs font-semibold text-slate-400 border border-slate-700">2023 - Present</span>
                </div>
            @endforelse
        </div>
    </section>

    <!-- Contact Section (Email එකත් එක්ක) -->
    <section id="contact" class="py-20 px-6 max-w-4xl mx-auto">
        <div class="bg-gradient-to-br from-slate-900 to-slate-950 border border-slate-800 p-8 md:p-12 rounded-3xl text-center shadow-2xl">
            <h2 class="text-3xl font-bold mb-4">Get In Touch</h2>
            <p class="text-slate-400 mb-8 max-w-lg mx-auto">Have a project in mind, an opportunity, or just want to say hi? Feel free to drop a message or email me directly!</p>
            
            <!-- Direct Email Display -->
            <div class="inline-flex items-center justify-center bg-slate-800/80 border border-slate-700 px-6 py-3 rounded-xl mb-8 text-cyan-400 font-medium">
                <i class="fas fa-envelope mr-3"></i> {{ $profile->email ?? 'mihindu@gmail.com' }}
            </div>

            <!-- Contact Form -->
            <form action="{{ url('/api/contact') }}" method="POST" class="space-y-4 max-w-md mx-auto text-left">
                @csrf
                <div>
                    <input type="text" name="name" placeholder="Your Name" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-cyan-500 transition">
                </div>
                <div>
                    <input type="email" name="email" placeholder="Your Email" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-cyan-500 transition">
                </div>
                <div>
                    <textarea name="message" rows="4" placeholder="Your Message" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-slate-100 focus:outline-none focus:border-cyan-500 transition"></textarea>
                </div>
                <button type="submit" class="w-full bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold py-3 rounded-xl transition shadow-lg shadow-cyan-500/20">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 border-t border-slate-900 text-center text-xs text-slate-500">
        <p>&copy; {{ date('Y') }} Mihindu Bandara. All rights reserved.</p>
    </footer>

</body>
</html>