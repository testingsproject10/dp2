<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Premium Portal</title>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-out forwards',
                        'slide-up': 'slideUp 0.6s ease-out forwards',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                    },
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer base {
            body {
                @apply bg-slate-50 text-slate-900 antialiased selection:bg-primary-500 selection:text-white;
            }
        }
        @layer components {
            .glass {
                @apply bg-white/70 backdrop-blur-lg border border-white/20;
            }
            .input-field {
                @apply w-full px-4 py-3 bg-white border border-slate-200 rounded-xl outline-none transition-all duration-200 focus:border-primary-500 focus:ring-4 focus:ring-primary-500/10 placeholder:text-slate-400;
            }
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">
    <!-- Background Decor -->
    <div class="fixed inset-0 z-[-1] overflow-hidden pointer-events-none">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary-100 rounded-full blur-3xl opacity-50"></div>
        <div class="absolute top-1/2 -right-24 w-80 h-80 bg-blue-50 rounded-full blur-3xl opacity-60"></div>
    </div>

    <!-- Navigation -->
    <nav class="w-full px-6 py-4 flex justify-between items-center bg-white/50 backdrop-blur-sm sticky top-0 z-50">
        <div class="flex items-center space-x-2">
            <div class="w-10 h-10 bg-gradient-to-tr from-primary-600 to-blue-400 rounded-xl flex items-center justify-center shadow-lg shadow-primary-500/20">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                </svg>
            </div>
            <span class="text-xl font-bold tracking-tight text-slate-800">DP2 Portal</span>
        </div>
        
        <div class="space-x-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="text-sm font-semibold hover:text-primary-600 transition-colors">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-semibold hover:text-primary-600 transition-colors">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-primary-600 text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-primary-700 transition-all hover:shadow-lg hover:shadow-primary-500/30">Sign Up</a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center p-6 lg:p-12">
        <div class="max-w-5xl w-full grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Hero Text -->
            <div class="space-y-8 animate-slide-up">
                <div class="inline-flex items-center space-x-2 px-3 py-1 bg-primary-50 border border-primary-100 rounded-full">
                    <span class="w-2 h-2 bg-primary-500 rounded-full animate-pulse"></span>
                    <span class="text-xs font-bold text-primary-700 uppercase tracking-widest">Available Now</span>
                </div>
                
                <h1 class="text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1] tracking-tight">
                    Professional <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-blue-500">Deployment</span> Solutions.
                </h1>
                
                <p class="text-lg text-slate-600 leading-relaxed max-w-md">
                    Experience the next generation of project management with our premium dashboard. Clean, fast, and light.
                </p>
                
                <div class="flex items-center space-x-6">
                    <div class="flex -space-x-3">
                        <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-200"></div>
                        <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-300"></div>
                        <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-400"></div>
                    </div>
                    <div class="text-sm text-slate-500 font-medium">
                        Joined by <span class="text-slate-900 font-bold">1,200+</span> users this week
                    </div>
                </div>
            </div>

            <!-- Form Card -->
            <div class="animate-fade-in" style="animation-delay: 0.2s;">
                <div class="glass p-8 lg:p-10 rounded-3xl shadow-2xl shadow-slate-200/50">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-slate-800">Get Started</h2>
                        <p class="text-slate-500 text-sm mt-1">Fill in your details below to continue.</p>
                    </div>

                    <form action="#" method="POST" class="space-y-5">
                        <div class="space-y-2">
                            <label for="name" class="text-sm font-semibold text-slate-700 ml-1">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="John Doe" class="input-field" required>
                        </div>

                        <div class="space-y-2">
                            <label for="email" class="text-sm font-semibold text-slate-700 ml-1">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="john@example.com" class="input-field" required>
                        </div>

                        <div class="space-y-2">
                            <label for="password" class="text-sm font-semibold text-slate-700 ml-1">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="input-field" required>
                        </div>

                        <button type="submit" class="w-full py-4 bg-primary-600 text-white rounded-xl font-bold shadow-xl shadow-primary-500/25 hover:bg-primary-700 hover:-translate-y-0.5 transition-all active:scale-95">
                            Create Account
                        </button>
                    </form>

                    <p class="mt-8 text-center text-xs text-slate-400">
                        By signing up, you agree to our <a href="#" class="underline hover:text-slate-600 transition-colors">Terms of Service</a>.
                    </p>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="p-8 text-center">
        <p class="text-sm text-slate-400">
            &copy; {{ date('Y') }} DP2 Portal. All rights reserved.
        </p>
    </footer>
</body>

</html>