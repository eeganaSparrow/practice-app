@props([
    'breadcrumbs' => [
        [
            'href' => '/',
            'label' => 'TOP'    
        ]
    ]
])
<nav class="text-black" aria-label="Breadcrumb">
    <ol class="list-none p-0 inline-flex">
        @foreach($breadcrumbs as $breadcrumb)
        @if ($loop->last)
            <li>
                <a href="{{ $breadcrumb['href'] }}" class="text-gray-500">{{ $breadcrumb['label'] }}</a>
            </li>
        @else
            <li class="flex items-center">
                <a href="{{ $breadcrumb['href'] }}" class="hover:underline">{{ $breadcrumb['label'] }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                </svg>
            </li>
        @endif
        @endforeach
    </ol>
</nav>