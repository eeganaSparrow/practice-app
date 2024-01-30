@component('mail::message')

# 昨日は{{ $count }}件のつぶやきが追加されました！

{{ $toUser->name }}さん、こんにちは！

昨日は{{ $count }}件のつぶやきが追加されました！最新のつぶやきを確認しましょう。

@component('mail::button', ['url' => route('tweet.index')])
    つぶやきを見に行く
@endcomponent

@endcomponent