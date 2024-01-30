@props([
    'tweet',    
])
<div class="p-4">
    <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id]) }}"
    method="post">
        @method('PUT')
        @csrf
        
        @if(session('feedback.success'))
        <x-alert.success>{{ session('feedback.success') }}</x-alert.success>
        @endif

        <div class="mt-1">
            <textarea
                name="tweet"
                rows="3"
                class="block w-full mt-1 p-2
                    border border-green-300 rounded-md
                    sm:text-sm
                    focus:ring-blue-400 focus:border-blue-400"
            placeholder="つぶやきを入力" >{{ $tweet->content }}</textarea>
            <p class="mt-2 text-sm text-gray-500">140文字まで</p>
        </div>

        @error('tweet')
            <x-alert.error>{{ $message }}</x-alert.error>
        @enderror

        <div class="flex flex-wrap justify-end">
            <x-element.button>編集</x-element.button>
        </div>
    </form>
</div>