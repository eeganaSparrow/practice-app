<x-layout title="TOP | Sparrow Tweet">
    <x-layout.single>
        <h2 class="text-center text-yellow-900 text-4xl font-bold font-serif mt-8 mb-8">Sparrow Tweet</h2>
        <x-tweet.form.post></x-tweet.form.post>
        <x-tweet.list :tweets="$tweets"></x-tweet.list>
    </x-layout.single>
</x-layout>