<div>
    @if(session('success'))
        <span class="px-3 py-3 bg-green-600 text-white rounded">{{ session('success') }}</span>
    @endif
   <form class="p-5" wire:submit="createNewUser">
    <input class="block rounded border border-gray-100 px-3 py-1 mb-1 mt-2" wire:model='name' type="text" placeholder="name">
    @error('name')
        <span class="text-red-500 text-xs">{{ $message }}</span>
    @enderror
    <input class="block rounded border border-gray-100 px-3 py-1 mb-1 mt-2" wire:model='email' type="email" placeholder="email">
    @error('email')
        <span class="text-red-500 text-xs">{{ $message }}</span>
    @enderror
    <input class="block rounded border border-gray-100 px-3 py-1 mb-1 mt-2" wire:model='password' type="password" placeholder="password">
    @error('password')
        <span class="text-red-500 text-xs">{{ $message }}</span>
    @enderror
    <button
        class="px-3 py-1 bg-violet-500 text-white rounded">Create</button>
        {{-- wire:click.prevent='createNewUser'>Create</button> --}}
   </form>

   <hr>

   @foreach($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach
    {{ $users->links() }}
</div>
