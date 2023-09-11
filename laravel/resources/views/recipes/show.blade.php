<x-layout>
    <x-slot name="title">
        {{ $sweet->name }} - みずまた
    </x-slot>

    <div class="post-content wrapper">
        <h2>{{ $sweet->name }}</h2>
        <figure class="recipe-image">
            <img src="{{ asset('storage/image'. $sweet->id. '.webp') }}" alt="{{ $sweet->name }}">
        </figure>
        <h3>材料</h3>
        {{-- ここに「人数」を選ぶ選択しを作る --}}
        <ul>
            @foreach($sweet->ingredients as $ingredient)
                <li>{{ $ingredient->name }} {{ $ingredient->amount }} {{ $ingredient->unit }}</li>
            @endforeach
        </ul>
        <h2>作り方</h2>
        <ol>
            @foreach($sweet->recipes as $recipe)
                <li>{{ $recipe->recipe }}</li>
            @endforeach
        </ol>
        <blockquote>
            <p>{{ $sweet->point }}</p>
        </blockquote>
    </div>
    <footer class="post-footer wrapper">
        <div class="tags-links">
            <ul>
                @foreach($sweet->categories as $category)
                    <li><a href="#">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </footer>
</x-layout>