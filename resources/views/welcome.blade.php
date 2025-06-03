<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Internship Information System</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600|Open+Sans:400,700|Roboto:400,700|Poppins:700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .background-image-overlay {
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/images/background.png') center center / cover no-repeat;
            z-index: -1;
        }
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            font-family: 'Instrument Sans', sans-serif;
            background-color: #FFFFFF;
        }
        .font-open-sans { font-family: 'Open Sans', sans-serif; }
        .font-roboto { font-family: 'Roboto', sans-serif; }
        .font-poppins { font-family: 'Poppins', sans-serif; }
        
        .btn {
            display: inline-block;
            padding: 0.5rem 1.25rem; 
            font-weight: 600;
            font-size: 0.9rem; 
            text-align: center;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.2s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.3);
            width: 100px; 
        }
        .btn-primary {
            background-color: #2563eb;
            color: white;
        }
        .btn-primary:hover {
            background-color: #1d4ed8;
            transform: translateY(-1px);
        }
        .btn-secondary {
            background-color: #4b5563;
            color: white;
        }
        .btn-secondary:hover {
            background-color: #374151;
            transform: translateY(-1px);
        }
        
        .text-shadow {
            text-shadow: 0 1px 3px rgba(0,0,0,0.3);
        }
        .heading-text {
            text-shadow: 0 2px 4px rgba(0,0,0,0.4);
        }
        
        .button-container {
            display: flex;
            justify-content: left;
            margin-top: 1.5rem;
        }
    </style>
</head>

<body class="relative w-full h-screen overflow-hidden">
    <div class="background-image-overlay absolute inset-0 h-full w-full"></div>

    <div class="absolute inset-0 flex items-center justify-center p-6">
        <div class="max-w-7xl w-full flex flex-col lg:flex-row items-center justify-center gap-8">
            <div class="flex-1 text-white p-8 relative z-10">
                <h1 class="font-poppins font-bold text-5xl mb-4 leading-tight heading-text text-left">
                    Welcome to<br>Student Internship<br>Information System!
                </h1>
                <p class="font-open-sans text-lg leading-relaxed mb-6 text-shadow text-left">
                    Find and apply for internship opportunities,<br>manage your reports, and track your evaluations.
                </p>
                <div class="button-container">
                    <div class="flex flex-col sm:flex-row gap-4">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                                    Go to Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary">
                                    Login
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-secondary">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>