<x-layout>
    <x-slot:title>
        {{$title}}
        </x-slot>

        <x-slot:navbar>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <!-- // -->
                                <a class="nav-link" href="{{$link_href_1}}"> <label for="name">Сalendar </label>
                                </a>
                            </li>
                            <li class="nav-item">
                                <!-- // -->
                                <a class="nav-link" href="{{$link_href_2}}">Posts</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </x-slot:navbar>
        <h1 style="color:{{$css_text_2}}">{{$text}}</h1>
        <ul style="color:{{$css_text_3}}">
            <li>{{$text_content_1}}</li>
            <li>{{$text_content_2}}</li>
            <li>{{$text_content_3}}</li>
            <li>{{$text_content_4}}</li>
        </ul>
        <table style="{{$style_table}}">
            <thead style="{{$style_thead}}">
                <tr>
                    <th>name</th>
                    <th>surname</th>
                    <th>age</th>
                </tr>
            </thead>
            <tr>
                <th>{{$name}}</th>
                <th>{{$surname}}</th>
                <th>{{$age}}</th>
            </tr>

        </table>

        <input value="{{$input_val_1}}">
        <input value="{{$input_val_2}}">
        <input value="{{$input_val_3}}">
        <p style="color:{{$css_text_1}}">Lorem ipsum dolor sit <b>{{$p_val_1}}</b> amet consectetur, adipisicing elit.
            Ea,
            quibusdam
            voluptates
            nesciunt accusantium quasi quidem eveniet possimus aliquid iure aspernatur assumenda
            <b>{{$p_val_2}}</b>
            quam
            dolorum rerum
            velit harum veniam aut, nihil id vitae cupiditate nostrum omnis cum fugiat! Nemo qui, recusandae
            voluptatibus <b>{{$p_val_3}}</b> earum porro
            officiis.
        </p>
        current timestemp: {{ date('H:m:s')}}
        <br>
        current datestemp: {{ date('d-m-Y')}}

</x-layout>