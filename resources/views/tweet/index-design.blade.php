
<!-- x-layout（共通部） -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparrow Tweet</title>
</head>
<body>
    <h1>Sparrow Tweet</h1>
    @if(session('feedback.success'))
        <p style="color: green;">{{ session('feedback.success')}}</p>
    @endif

<!-- x-post（投稿機能） -->
    @auth
    <div>
        <form action="{{ route('tweet.create') }}" method="post">
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea id="tweet-content" name="tweet" type="text" placeholder="つぶやき入力"></textarea>
            
    <!-- x-alert.error（エラー表示） -->
            @error('tweet')
                <p style="color: red;">{{ $message }}</p>
            @enderror
    <!-- x-element.button（ボタン機能） -->
            <button type="submit">投稿</button>
        </form>
    </div>
    @endauth

    <div>
        @foreach($tweets as $tweet)
            <details>
                <summary>{{ $tweet->content }} by {{ $tweet->user->name }}</summary>
                @if(\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)
                    <div>
                        <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id])}}">編集</a>
                        <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id])}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">削除</button>
                        </form>
                    </div>
                @else
                    編集できません
                @endif
            </details>
        @endforeach
    </div>
</body>
</html>