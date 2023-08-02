<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 @include('partials.head')
    <body class="antialiased max-w-7xl mx-auto min-h-screen flex flex-col items-center justify-center">

    <div class="border border-gray-200 rounded p-4 ">
        <p>
            There are two pages welcome and livewire. The welcome page is a simple page with a heading and a link to the
            livewire page.
        </p>
        <p>
            The headings have <code>wire:navigate</code> attributes that trigger navigation to the corresponding sections.
        </p>
    </div>
    <div class="mt-8">
        <livewire:results/>
    </div>
    </body>
</html>
