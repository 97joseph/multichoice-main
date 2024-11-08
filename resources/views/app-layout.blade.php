<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="description" content="@yield(' ')">
    <meta name="keywords" content="@yield('keywords',' ')">
    <link rel="icon" href="{{ asset('favicon.jpeg') }}">
    @vite(['resources/css/app.css','resources/js/app.jsx'])
</head>
<body class="font-LottoLove4 text-paragraph bg-gray-50">
<header class="shadow-md tracking-wide relative z-50">

    <div class="flex flex-wrap items-center justify-between gap-4 px-10 py-4 bg-white min-h-[70px]">
        <a href="/">
            <img src={{ asset('images/logo.jpg') }} alt="logo" class="w-36" />
        </a>

        <div
            id="collapseMenu"
            class="max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50"

        >
        <button

            id="toggleClose"
            class="lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-4 fill-black"
                viewBox="0 0 320.591 320.591"
            >
                <path
                    d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                    data-original="#000000"
                ></path>
                <path
                    d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                    data-original="#000000"
                ></path>
            </svg>
        </button>

        <ul class="lg:flex lg:gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
            <li class="mb-6 hidden max-lg:block">
                <a href="/">
                    <img
                        src={{ asset('images/logo.jpg') }}
                        alt="logo"
                        class="w-36"
                    />
                </a>
            </li>
            <li class="max-lg:border-b max-lg:py-3 px-3 whitespace-nowrap">
                <a
                    href="/"
                    class="hover:text-[#f15a24] hover:underline block font-bold text-[15px]"
                >
                    Home
                </a>
            </li>


            <li class="max-lg:border-b max-lg:py-3 px-3 whitespace-nowrap">
                <a
                    href="register"
                    class="hover:text-[#f15a24] hover:underline block font-bold text-[15px]"
                >
                    Operator Register
                </a>
            </li>

            <li class="max-lg:border-b max-lg:py-3 px-3 whitespace-nowrap">
                <a
                    href="login"
                    class="hover:text-[#f15a24] hover:underline block font-bold text-[15px]"
                >
                    Operator Login
                </a>
            </li>

          

            <li class="max-lg:border-b max-lg:py-3 px-3 whitespace-nowrap">
                <a
                    href="support"
                    class="hover:text-[#f15a24] hover:underline block font-bold text-[15px]"
                >
                    Support
                </a>
            </li>
        </ul>
    </div>
    <div class="flex max-lg:ml-auto">
        <button

            id="toggleOpen"
            class="lg:hidden"
        >
            <svg
                class="w-7 h-7"
                fill="#000"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"
                ></path>
            </svg>
        </button>
    </div>
    </div>
</header>
<main class="container mx-auto max-w-8xl mt-8 gap-2 grid grid-rows-[1fr_auto] min-h-screen"> @yield('main')</main>
<div id="footer"></div>
@yield('js-scripts')
<script>
    // Passing image URL to React
    window.logoUrl = @json(asset('images/log1o.jpeg'));
</script>
</body>
</html>