<p style="color: #166534;
        background-color: #bbf7d0;
        border-color: #22c55e;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem;" 
    x-data="{ show: true }"
    x-show="show"
    x-transition
    x-init="setTimeout(() => show = false, 4000)"
    class="text-sm text-green-800 dark:text-green-500 bg-green-200 mb-4"
> {{ $slot }} </p>