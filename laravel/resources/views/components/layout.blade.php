<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://unpkg.com/destyle.css@2.0.2/destyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="wrapper">
            <h1 class="site-title">
                <a href="{{ route('recipes.index') }}">
                    <img src="{{ url('images/logo2.svg') }}" alt="" class="site-logo">
                </a>
            </h1>
            <p class="site-description">本格的なスイーツレシピをお届けいたします。</p>
        </div>
    </header>
    <nav>
        <button class="button-menu">メニュー</button>
        <ul class="menu-wrapper">
            <li><a href="{{ route('recipes.index') }}">ホーム</a></li>
            @foreach(App\Models\Category::get() as $category)
                <li><a href="{{ $category->id }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </nav>
    <main class="main-contents wrapper">
        {{ $slot }}
    </main>
    <script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>