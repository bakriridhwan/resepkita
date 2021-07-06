<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Web Resep</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    {{-- Froala --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/froala_editor.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/froala_style.css">

	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/code_view.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/draggable.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>//plugins/colors.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/emoticons.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/image_manager.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/image.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/line_breaker.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/table.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/char_counter.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/video.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/fullscreen.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/file.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/quick_insert.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/help.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/third_party/spell_checker.css">
	<link rel="stylesheet" href="<?= URL::to('/css_froala'); ?>/plugins/special_characters.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
	<style>
		body {
		text-align: center;
		}

		div#editor {
		width: 100%;
		margin: auto;
		text-align: left;
		}

		.ss {
		background-color: red;
		}
	</style>




    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    WEB
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="" disabled>Development Framework</a></li>
                        <li class="nav-item"><a class="nav-link" href="/api">API</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
	<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.2.7/purify.min.js"></script>

	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/froala_editor.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/align.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/char_counter.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/code_beautifier.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/code_view.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/colors.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/draggable.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/emoticons.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/entities.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/file.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/font_size.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/font_family.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/fullscreen.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/image.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/image_manager.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/line_breaker.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/inline_style.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/link.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/lists.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/paragraph_format.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/paragraph_style.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/quick_insert.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/quote.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/table.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/save.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/url.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/video.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/help.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/print.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/third_party/spell_checker.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/special_characters.min.js"></script>
	<script type="text/javascript" src="<?= URL::to('/js_froala'); ?>/plugins/word_paste.min.js"></script>

	<script>
		(function () {
		new FroalaEditor("#bahan, #alat, #langkah")
		})()
	</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
