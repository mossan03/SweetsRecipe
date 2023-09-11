<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理画面</title>
    <link rel="stylesheet" href="https://unpkg.com/destyle.css@2.0.2/destyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body class="add-recipe">
    <h1>スイーツレシピ追加</h1>
    <form action="{{ route('myadmin.add') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="add-item">
            <h2>追加するスイーツの名前</h2>
            <input type="text" name="sweet_name">
        </div>
        <div class="upload add-item">
            <h2>スイーツの完成画像</h2>
            <div>
                <input type="file" accept="image/webp" name="file">
            </div>
        </div>
        {{-- <div class="add-item">
            <h2>スイーツの材料</h2>
            <table>
                <thead>
                    <tr>
                        <th>材料名</th>
                        <th>数量</th>
                        <th>単位</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i=1; $i < 11; $i++)
                        <tr>
                            <td><input type="text" name="ingredient_name"></td>
                            <td><input type="text" name="ingredient_amount"></td>
                            <td>
                                <select size="1" name="sample" class="unit">
                                    <option hidden>－</option>
                                    <option value="グラム">グラム</option>
                                    <option value="cc">cc</option>
                                    <option value="ピース">ピース</option>
                                </select>
                            </td>
                        </tr> 
                    @endfor
                </tbody>
            </table>
        </div> --}}
        <div class="add-item">
            <h2>作るときのポイント</h2>
            <input type="text" name="point">
        </div>
        <div class="category add-item">
            <h2>カテゴリーの選択</h2>
                <div class="category-wrapper">
                    @foreach(App\Models\Category::get() as $category)
                        <div class="category-item">
                            <label>
                                <input type="checkbox" name="category" value="{{ $category->id }}">{{ $category->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
        </div>
        <div class="check add-item">
            <button class="check-btn" type="submit">Add</button>
        </div>
    </form>
    <script src="js/script.js"></script>
</body>
</html>