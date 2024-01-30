<div class="flex
            w-full mt-1 mb-2 p-2
            text-red-500 leading-none
            bt-red-500
            lg:rounded-full lg:inline-flex"
    role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
    </svg>
    <span class="pt-1 pl-1 mr-2
                text-left font-semibold
                flex-auto
                ">{{ $slot }}</span>
</div>