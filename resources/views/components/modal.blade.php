@props(['name','title'])
<div
    x-data = "{show : false, name: '{{ $name }}' }"
    x-show = "show"
    x-on:open-modal.window = "show = (event.detail.name === name)"
    x-on:close-modal.window = "show = false"
    x-on:keydown.escape.window = "show = false"
    x-transition:enter="transition ease-out duration-400"
    x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-90"
    x-transition:leave="transition ease-in duration-400"
    style="display:none;"
    class="fixed z-50 inset-0">
   <div x-on:click = "show = false" class="bg-gray-300 inset-0 fixed opacity-40"></div>
   <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl" style="max-height:500px">
        <div>
            <button x-data x-on:click="$dispatch('close-modal')">X</button>
        </div>
        <div>
            @if(isset($title))
            <div class="py-3 flex items-center justify-center">
                {{ $title }}
            </div>
            @endif
            <div>
                {{ $body }}
            </div>
        </div>
   </div>
</div>
