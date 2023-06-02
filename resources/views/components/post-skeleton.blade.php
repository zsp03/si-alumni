@props([
    'size' => null,
])

<div class="w-3/4 sm:w-full @if($size == 'big') col-span-full gap-4 grid lg:grid-cols-12 @endif bg-white rounded-md p-3 shadow">
    <div class="skeleton @if($size == 'big') h-64 sm:h-96 @else h-36 @endif lg:col-span-7 w-full rounded-lg bg-gray-200"></div>
    <div class=" @if($size == 'big') my-auto lg:col-span-5 @endif space-y-3 p-2">
        <div class="skeleton @if($size == 'big') sm:h-10 @endif h-5 w-8/12 rounded-full bg-gray-200"></div>
        <div class="flex gap-2">
            <div class="skeleton h-5 w-16 rounded-full bg-gray-200"></div>
            <div class="skeleton h-5 w-12 rounded-full bg-gray-200"></div>
        </div>
        <div class="w-full flex flex-col gap-2 space-y-1">
            <div class="skeleton h-4 w-full rounded-full bg-gray-200 shadow"></div>
            <div class="skeleton h-4 w-full rounded-full bg-gray-200 shadow"></div>
            <div class="skeleton h-4 w-full rounded-full bg-gray-200 shadow"></div>
            <div class="skeleton h-4 w-7/12 rounded-full bg-gray-200 shadow"></div>
        </div>
    </div>
</div>
