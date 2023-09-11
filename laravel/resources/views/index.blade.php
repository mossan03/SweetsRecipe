<x-layout>
    <x-slot name="title">
        みずまた
    </x-slot>
    
    <div class="wrapper">
        <p class="page-title">{{ $sweet_category }}</p>
    </div>

    <div class="recipe-list">
        @forelse ($sweets as $sweet)
            <article class="recipe-item">
                <a href="{{ route('recipes.show', $sweet->id) }}">
                    <img src="{{ asset('storage/image'. $sweet->id. '.webp') }}" alt="{{ $sweet->name }}" class="recipe-thumbnail">
                </a>
                <header class="recipe-header">
                    <h2 class="recipe-title">
                        <a href="{{ route('recipes.show', $sweet->id) }}">{{ $sweet->name }}</a>
                    </h2>
                    <time class="recipe-date" datetime="{{ $sweet->created_at }}">{{ $sweet->created_at }}</time>
                    <ul class="recipe-categories">
                        @foreach($sweet->categories as $category)
                            <li><a href="{{ $category->id }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </header>
            </article>    
        @empty
            <p>レシピがありません。</p>
        @endforelse 
    </div>
    {{-- <div class="nav-links">
        <a href="#">← 新しい投稿</a>
        <a href="#">過去の投稿 →</a>
    </div> --}}

</x-layout>