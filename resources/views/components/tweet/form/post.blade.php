@auth
    <div class="p-4">
        <form action="{{ route('tweet.create') }}"
            method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <textarea
                    name="tweet"
                    rows="3"
                    class="block
                        w-full p-2 mt-1
                        border border-green-300 rounded-md
                        focus:ring-blue-400 focus:border-blue-400
                        sm:text-sm"
                    placeholder="つぶやき入力"></textarea>
            </div>
            <span>140文字まで</span>
            <x-tweet.form.images></x-tweet.form.images>
            
            @error('tweet')
                <x-alert.error>{{ $message }}</x-alert.error>
            @enderror
            <div class="flex flex-wrap justify-end">
                <x-element.button>
                    つぶやく
                </x-element.button>
            </div>
        </form>
    </div>
@endauth
@guest
    <div class="flex flex-wrap justify-center">
        <div class="flex flex-wrap justify-evenly p-4 w-1/2">
            <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
            <x-element.button-a :href="route('register')" theme="secondary">会員登録</x-element.button-a>
        </div>
    </div>
@endguest