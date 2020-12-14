<nav class="navbar navbar-expand-md  shadow-sm bg-color-red">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('images')}}" href="">Images</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('text')}}" href="">Text Files</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('videos')}}" href="">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('audios')}}" href="">Audios</a>
                </li>
                <!--
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Admin
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="" >
                        </a>
                    </div>
                </li>
                -->
        </ul>
    </div>
</nav>