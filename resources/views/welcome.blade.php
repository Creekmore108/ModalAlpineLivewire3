<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </head>
    <body class="p-5">
       <x-modal  name="modal1" title="Modal 1">
            <x-slot:body>
                <span class="p-5">Body number one</span>
                {{-- <livewire:clicker> --}}
            </x-slot>
       </x-modal>
       <x-modal  name="modal2" title="Modal 2">
            <x-slot:body>
                <span class="p-5">Body number two</span>
            </x-slot>
        </x-modal>
       <div>
            <button x-data x-on:click="$dispatch('open-modal',{ name : 'modal1'})"
                    class="px-3 py-1 bg-teal-500 text-white rounded">Open Modal 1</button>
            <p>&nbsp;</p>
            <button x-data x-on:click="$dispatch('open-modal',{ name : 'modal2'})"
                    class="px-3 py-1 bg-blue-500 text-white rounded">Open Modal 2</button>
            <p>&nbsp;</p>
                <livewire:clicker />
       </div>
    </body>
</html>
