<p style="color: #dc2626;
        background-color: #fca5a5;
        border-color: none;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem;" 
    x-data="{ show: true }"
    x-show="show"
    x-transition
    x-init="setTimeout(() => show = false, 4000)"
    class="text-sm text-red-600 dark:text-red-300"
>{{ $slot }}</p>