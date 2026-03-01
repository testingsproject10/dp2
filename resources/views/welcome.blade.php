<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Portal | Academic Excellence</title>
    
    <!-- Google Fonts: Inter & Playfair Display for academic feel -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    colors: {
                        university: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a', // Deep Navy
                            gold: '#B59410',
                        },
                    },
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer base {
            body {
                @apply bg-[#fcfcfc] text-university-900 antialiased;
            }
        }
        @layer components {
            .portal-card {
                @apply bg-white border border-university-200 p-6 rounded-lg shadow-sm hover:shadow-md transition-all duration-300;
            }
            .btn-formal {
                @apply px-6 py-2.5 rounded font-semibold transition-all duration-200 flex items-center justify-center;
            }
            .btn-primary {
                @apply bg-university-900 text-white hover:bg-university-800;
            }
            .btn-outline {
                @apply border-2 border-university-900 text-university-900 hover:bg-university-900 hover:text-white;
            }
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">
    <!-- Top Decorative Bar -->
    <div class="h-2 bg-university-gold w-full"></div>

    <!-- Formal Header -->
    <header class="bg-white border-b border-university-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 bg-university-900 flex items-center justify-center rounded shadow-inner">
                    <!-- Placeholder University Emblem -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147L12 15l7.74-4.853a4.5 4.5 0 00-4.86-1.545l-2.88 1.08a1.5 1.5 0 01-1.02 0l-2.88-1.08a4.5 4.5 0 00-4.86 1.545z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.156 12.47L3 13.86l9 5.25 9-5.25-3.156-1.39a15.003 15.003 0 01-11.688 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 22.125V18l9-5.25M10.5 22.125V18l-9-5.25" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl md:text-3xl font-serif text-university-900 tracking-tight">PREMIUM STATE UNIVERSITY</h1>
                    <p class="text-sm font-medium text-university-500 uppercase tracking-widest">Portal for Students & Faculty</p>
                </div>
            </div>
            
            <div class="flex items-center space-x-3">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="btn-formal btn-primary">Go to Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn-formal btn-outline">Log In</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-formal btn-primary">Apply Online</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <!-- Branding Bar (Sub-nav feel) -->
    <div class="bg-university-900 text-white/80 py-2 hidden md:block">
        <div class="max-w-7xl mx-auto px-6 flex space-x-8 text-xs font-bold uppercase tracking-wider">
            <a href="#" class="hover:text-university-gold transition-colors">Prospective Students</a>
            <a href="#" class="hover:text-university-gold transition-colors">Current Students</a>
            <a href="#" class="hover:text-university-gold transition-colors">Staff & Faculty</a>
            <a href="#" class="hover:text-university-gold transition-colors">Alumni</a>
            <a href="#" class="hover:text-university-gold transition-colors">Library</a>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow max-w-7xl mx-auto w-full p-6 lg:p-12 space-y-12">
        
        <!-- Hero Section & Notice Board Grid -->
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Hero / Featured News -->
            <div class="lg:col-span-2 space-y-6">
                <div class="relative rounded-2xl overflow-hidden aspect-[16/9] shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756ebafe3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="University Campus" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-university-900 via-university-900/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 space-y-2">
                        <span class="bg-university-gold text-university-900 text-[10px] font-bold px-2 py-1 rounded uppercase">Featured news</span>
                        <h2 class="text-3xl md:text-4xl font-serif text-white">Enrollment for Fall Semester 2026 is Now Open</h2>
                        <p class="text-white/80 max-w-xl text-sm md:text-base">Join the community of scholars and innovators. Secure your place at the nation's leading institution.</p>
                    </div>
                </div>
            </div>

            <!-- Notice Board -->
            <div class="portal-card flex flex-col h-full">
                <div class="flex items-center justify-between mb-6 border-b border-university-100 pb-4">
                    <h3 class="text-lg font-bold flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-university-gold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                        <span>Official Notices</span>
                    </h3>
                    <a href="#" class="text-xs font-bold text-university-500 hover:text-university-900 uppercase">View All</a>
                </div>
                <div class="space-y-4 flex-grow overflow-y-auto">
                    <div class="group border-l-2 border-university-200 pl-4 hover:border-university-gold transition-colors cursor-pointer">
                        <p class="text-[10px] text-university-400 font-bold uppercase tracking-wider">March 1, 2026</p>
                        <p class="text-sm font-semibold group-hover:text-university-gold transition-colors">Mid-semester examination schedule released.</p>
                    </div>
                    <div class="group border-l-2 border-university-200 pl-4 hover:border-university-gold transition-colors cursor-pointer">
                        <p class="text-[10px] text-university-400 font-bold uppercase tracking-wider">Feb 28, 2026</p>
                        <p class="text-sm font-semibold group-hover:text-university-gold transition-colors">Annual Cultural Fest individual participation forms.</p>
                    </div>
                    <div class="group border-l-2 border-university-200 pl-4 hover:border-university-gold transition-colors cursor-pointer">
                        <p class="text-[10px] text-university-400 font-bold uppercase tracking-wider">Feb 25, 2026</p>
                        <p class="text-sm font-semibold group-hover:text-university-gold transition-colors">Library service maintenance on Sunday.</p>
                    </div>
                    <div class="group border-l-2 border-university-200 pl-4 hover:border-university-gold transition-colors cursor-pointer">
                        <p class="text-[10px] text-university-400 font-bold uppercase tracking-wider">Feb 20, 2026</p>
                        <p class="text-sm font-semibold group-hover:text-university-gold transition-colors">Scholarship deadline extended to March 15th.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portal Services Grid -->
        <section class="space-y-8">
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-serif text-university-900 border-b-2 border-university-gold inline-block pb-2">Academic Services</h2>
                <p class="text-university-500 mt-2">Quick access to essential portal features for the university community.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <!-- Service 1: Learning Management System -->
                <a href="#" class="portal-card flex flex-col items-center text-center space-y-4 hover:border-university-gold group">
                    <div class="w-12 h-12 bg-university-100 rounded-full flex items-center justify-center group-hover:bg-university-900 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-university-900 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18c-2.305 0-4.408.867-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>
                    <span class="font-bold text-sm tracking-tight text-university-800">LMS Portal</span>
                </a>

                <!-- Service 2: Grades & Records -->
                <a href="#" class="portal-card flex flex-col items-center text-center space-y-4 hover:border-university-gold group">
                    <div class="w-12 h-12 bg-university-100 rounded-full flex items-center justify-center group-hover:bg-university-900 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-university-900 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .415.162.798.425 1.082.263.285.622.466 1.02.466m0 0c.415 0 .798-.162 1.082-.425.285-.263.466-.622.466-1.02 0-.231-.035-.454-.1-.664m-1.819 0a48.108 48.108 0 013.432 0m4.668 0a48.533 48.533 0 00-1.732-.107M3.75 6.108c0-1.135.845-2.098 1.976-2.192.453-.038.907-.07 1.36-.097m3.372 3.372a3 3 0 11-6 0 3 3 0 016 0zM3.75 6.108v11.642c0 1.242 1.008 2.25 2.25 2.25h12M3.75 6.108a48.591 48.591 0 0110.156-1.077" />
                        </svg>
                    </div>
                    <span class="font-bold text-sm tracking-tight text-university-800">Grades & Records</span>
                </a>

                <!-- Service 3: Financial Aid -->
                <a href="#" class="portal-card flex flex-col items-center text-center space-y-4 hover:border-university-gold group">
                    <div class="w-12 h-12 bg-university-100 rounded-full flex items-center justify-center group-hover:bg-university-900 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-university-900 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="font-bold text-sm tracking-tight text-university-800">Financial Aid</span>
                </a>

                <!-- Service 4: Registration -->
                <a href="#" class="portal-card flex flex-col items-center text-center space-y-4 hover:border-university-gold group">
                    <div class="w-12 h-12 bg-university-100 rounded-full flex items-center justify-center group-hover:bg-university-900 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-university-900 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .415.162.798.425 1.082.263.285.622.466 1.02.466m0 0c.415 0 .798-.162 1.082-.425.285-.263.466-.622.466-1.02 0-.231-.035-.454-.1-.664m-1.819 0a48.108 48.108 0 013.432 0m4.668 0a48.533 48.533 0 00-1.732-.107M3.75 6.108c0-1.135.845-2.098 1.976-2.192.453-.038.907-.07 1.36-.097m3.372 3.372a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <span class="font-bold text-sm tracking-tight text-university-800">Registration</span>
                </a>

                <!-- Service 5: Library Access -->
                <a href="#" class="portal-card flex flex-col items-center text-center space-y-4 hover:border-university-gold group">
                    <div class="w-12 h-12 bg-university-100 rounded-full flex items-center justify-center group-hover:bg-university-900 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-university-900 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18" />
                        </svg>
                    </div>
                    <span class="font-bold text-sm tracking-tight text-university-800">Library Access</span>
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-university-900 text-white py-12 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="space-y-4 col-span-1 md:col-span-2">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-white/10 rounded flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147L12 15l7.74-4.853a4.5 4.5 0 00-4.86-1.545l-2.88 1.08a1.5 1.5 0 01-1.02 0l-2.88-1.08a4.5 4.5 0 00-4.86 1.545z" />
                        </svg>
                    </div>
                    <span class="text-xl font-serif">PREMIUM STATE UNIVERSITY</span>
                </div>
                <p class="text-white/60 text-sm max-w-sm">Dedicated to fostering a vibrant learning environment through Innovation, integrity, and intellectual curiosity. Our portal provides seamless access to academic excellence.</p>
            </div>
            
            <div class="space-y-4">
                <h4 class="text-university-gold font-bold uppercase text-xs tracking-widest">Connect</h4>
                <nav class="flex flex-col space-y-2 text-sm text-white/60">
                    <a href="#" class="hover:text-white transition-colors">Facebook</a>
                    <a href="#" class="hover:text-white transition-colors">Twitter (X)</a>
                    <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
                    <a href="#" class="hover:text-white transition-colors">Instagram</a>
                </nav>
            </div>

            <div class="space-y-4">
                <h4 class="text-university-gold font-bold uppercase text-xs tracking-widest">Support</h4>
                <nav class="flex flex-col space-y-2 text-sm text-white/60">
                    <a href="#" class="hover:text-white transition-colors">IT Helpdesk</a>
                    <a href="#" class="hover:text-white transition-colors">Academic Advising</a>
                    <a href="#" class="hover:text-white transition-colors">Student Affairs</a>
                    <a href="#" class="hover:text-white transition-colors">Contact Us</a>
                </nav>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto border-t border-white/10 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-white/40 space-y-4 md:space-y-0">
            <p>&copy; {{ date('Y') }} Premium State University. All academic rights reserved.</p>
            <div class="flex space-x-6">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Use</a>
                <a href="#" class="hover:text-white transition-colors">Accessibility</a>
            </div>
        </div>
    </footer>
</body>

</html>