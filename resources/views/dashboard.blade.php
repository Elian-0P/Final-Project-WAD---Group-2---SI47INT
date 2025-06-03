<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Dashboard</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="text-2xl font-bold text-[#52357B]">INTERNSHIP PORTAL</div>
                </div>
                
                <div class="flex space-x-6">
                    <a href="{{ route('internships.index') }}" 
                       class="px-6 py-2 rounded-full font-medium text-[#52357B] hover:bg-[#52357B] hover:text-white transition-all duration-300 border border-[#52357B] {{ request()->routeIs('internships.*') ? 'bg-[#52357B] text-white' : '' }}">
                        Applications
                    </a>
                    <a href="{{ route('vacancies.index') }}" 
                       class="px-6 py-2 rounded-full font-medium text-[#52357B] hover:bg-[#52357B] hover:text-white transition-all duration-300 border border-[#52357B] {{ request()->routeIs('vacancies.*') ? 'bg-[#52357B] text-white' : '' }}">
                        Vacancies
                    </a>
                    <a href="{{ route('internshipReports.index') }}" 
                       class="px-6 py-2 rounded-full font-medium text-[#52357B] hover:bg-[#52357B] hover:text-white transition-all duration-300 border border-[#52357B] {{ request()->routeIs('internshipReports.*') ? 'bg-[#52357B] text-white' : '' }}">
                        Reports
                    </a>
                    <a href="{{ route('evaluations.index') }}" 
                       class="px-6 py-2 rounded-full font-medium text-[#52357B] hover:bg-[#52357B] hover:text-white transition-all duration-300 border border-[#52357B] {{ request()->routeIs('evaluations.*') ? 'bg-[#52357B] text-white' : '' }}">
                        Evaluations
                    </a>
                    <a href="{{ route('announcements.index') }}" 
                       class="px-6 py-2 rounded-full font-medium text-[#52357B] hover:bg-[#52357B] hover:text-white transition-all duration-300 border border-[#52357B] {{ request()->routeIs('announcements.*') ? 'bg-[#52357B] text-white' : '' }}">
                        Announcements
                    </a>
                </div>
            </div>
        </div>
    </header>


    <div class="min-h-screen" style="background: linear-gradient(135deg, #B2D8CE 0%, #648DB3 100%);">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                <div class="space-y-8">
                    <div class="space-y-4">
                        <p class="text-[#5459AC] font-semibold text-lg tracking-wide uppercase">
                            INTERNSHIP PROGRAM
                        </p>
                        <h1 class="text-6xl font-bold text-[#52357B] leading-tight">
                            BUILD YOUR
                            <span class="block">FUTURE</span>
                        </h1>
                        <div class="w-32 h-1 bg-gradient-to-r from-[#5459AC] to-[#648DB3] rounded-full"></div>
                    </div>
                    
                    <p class="text-[#52357B] text-lg leading-relaxed max-w-md">
                        Join our comprehensive internship program and gain hands-on experience 
                        in your field. Connect with industry professionals and build the skills 
                        that matter.
                    </p>
                    
                    <div class="pt-4 space-x-4">
                        <a href="{{ route('internships.create') }}" 
                           class="inline-flex items-center bg-gradient-to-r from-[#5459AC] to-[#52357B] hover:from-[#52357B] hover:to-[#5459AC] text-white font-bold py-4 px-8 rounded-full text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Apply Now
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="{{ route('vacancies.index') }}" 
                           class="inline-flex items-center bg-white text-[#52357B] font-bold py-4 px-8 rounded-full text-lg transition-all duration-300 transform hover:scale-105 shadow-lg border-2 border-[#52357B] hover:bg-[#52357B] hover:text-white">
                            View Vacancies
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative z-10">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Students collaborating" 
                             class="rounded-2xl shadow-2xl w-full h-96 object-cover">
                    </div>
                    <div class="absolute -top-4 -right-4 w-72 h-72 bg-[#5459AC] opacity-20 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-60 h-60 bg-[#648DB3] opacity-20 rounded-full blur-2xl"></div>
                </div>
            </div>

            @if(session('announcement') || isset($latestAnnouncement))
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-6 mb-12 shadow-xl border-l-8 border-[#5459AC]">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-[#52357B] mb-2">📢 Latest Announcement</h3>
                        <p class="text-[#648DB3] text-lg">
                            {{ $latestAnnouncement->content ?? 'New internship opportunities available for Computer Science and Engineering students. Applications open until March 15th.' }}
                        </p>
                        @if(isset($latestAnnouncement))
                        <p class="text-sm text-gray-500 mt-2">
                            Posted: {{ $latestAnnouncement->created_at->format('M d, Y') }}
                        </p>
                        @endif
                    </div>
                    <div class="hidden md:block">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#5459AC] to-[#52357B] rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-8">
                <a href="{{ route('internships.index') }}" class="group">
                    <div class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl text-center hover:bg-white transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#5459AC] to-[#52357B] rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-12 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-[#52357B] mb-2">Applications</h4>
                        <p class="text-[#648DB3]">View and manage your internship applications</p>
                    </div>
                </a>
                <a href="{{ route('vacancies.index') }}" class="group">
                    <div class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl text-center hover:bg-white transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#FF6B6B] to-[#4ECDC4] rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-12 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-[#52357B] mb-2">Vacancies</h4>
                        <p class="text-[#648DB3]">Browse available internship positions</p>
                    </div>
                </a>
                <a href="{{ route('internshipReports.index') }}" class="group">
                    <div class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl text-center hover:bg-white transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#648DB3] to-[#5459AC] rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-12 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-[#52357B] mb-2">Reports</h4>
                        <p class="text-[#648DB3]">Generate and view progress reports</p>
                    </div>
                </a>
                <a href="{{ route('evaluations.index') }}" class="group">
                    <div class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl text-center hover:bg-white transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#B2D8CE] to-[#648DB3] rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-12 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-[#52357B] mb-2">Evaluations</h4>
                        <p class="text-[#648DB3]">Complete and view performance evaluations</p>
                    </div>
                </a>
                <a href="{{ route('announcements.index') }}" class="group">
                    <div class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl text-center hover:bg-white transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#52357B] to-[#B2D8CE] rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:rotate-12 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-[#52357B] mb-2">Announcements</h4>
                        <p class="text-[#648DB3]">Stay updated with latest news</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>