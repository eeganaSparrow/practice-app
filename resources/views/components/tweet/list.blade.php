@props([
    'tweets' => [],
])

<div class="bg-white rounded-md shadow-lg mt-5 mb-5">
    <ul>
        @foreach($tweets as $tweet)
        <li class="flex justify-between p-4
                items-start border-b last:border-b-0 border-gray-200">
            <div>
                <span class="inline-block px-2 py-1 mb-2 text-xs text-gray-600 bg-gray-100 rounded-full">{{ $tweet->user->name }}</span>
                <p class="text-gray-600">{!! nl2br(e($tweet->content)) !!}</p>
                <x-tweet.images :images="$tweet->images"/>
            </div>
            <div>
                <x-tweet.options :tweetId="$tweet->id" :userId="$tweet->user_id"></x-tweet.options>
            </div>
        </li>
        @endforeach
    </ul>
</div>