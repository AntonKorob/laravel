<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <title>@yield('title')</title>

    </head>

    <body>
        <div>
            <!-- <div class="d-flex justify-content-center p-3 mb-2 bg-secondary  "> -->

            <!-- <div class=" col-md-3 mb-2 mb-md-0">
                    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                        <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>
                </div> -->

            <ul class="nav col-12 col-md-auto mb-5 justify-content-center mb-md-0 bg-indigo-200 p-3 m-3">
                <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="/about" class="nav-link rounded px-2 ">About</a></li>
                <li><a href="/posts" class="nav-link rounded px-2">Posts</a></li>
                <li><a href="/postsnew" class="nav-link rounded px-2">New_Page</a></li>
                <li><a href="/contacts" class="nav-link rounded px-2">Contacts</a></li>
                <li><a href="/file" class="nav-link rounded px-2">Upload_img</a></li>
            </ul>

            @if (Route::has('login'))

            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth

                <li>
                    <x-app-layout>

                    </x-app-layout>
                </li>
                <!-- <a href="{{ url('/home') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a> -->
                @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 me-2">Log
                    in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>

        <div class="container justify-content-between mt-4">
            <!--Вызов @yield('content') -->
            @yield('content')

        </div>


        <!-- FOOTER -->
        <footer class="footer mt-auto py-3 bg-indigo-200">
            <div class="container text-white">
                <p class="float-end text-white"><a href="#" class="text-white">Back to top</a></p>
                <p>© {{date('Y')}} Company, Inc.</p>


            </div>
        </footer>

        </div>
        </div>
    </body>

</html>