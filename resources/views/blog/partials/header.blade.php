<header class="w-full bg-white shadow-md z-10">
  <div x-data="{ open: false }" class="container mx-auto">
    <nav class="flex justify-center py-4 hidden md:flex">
      <div class="w-1/2 flex justify-around text-gray-600">
        <a href="{{ route('blog.index') }}" class="px-3 py-2 hover:underline">Blog</a>
        {{-- <a href="{{ route('blog.about') }}" class="px-3 py-2 hover:underline">About</a> --}}
        <!-- <a href="#" class="px-3 py-2 hover:underline">Contact</a> -->
      </div>
      <!-- <div class="text-gray-700 px-3 py-2 hover:underline">
                <a href="#" class=""><i class="fas fa-shopping-cart mr-2"></i> Projects</a>
            </div> -->
    </nav>
    <nav x-ref="dropdown" x-show.transition="open" @click.away="open = false" class="flex flex-col items-center justify-center text-lg bg-white text-gray-600 py-4">
      <a href="{{ route('blog.index') }}" class="px-3 py-2 hover:underline">Blog</a>
      <!-- <a href="#" class="px-3 py-2 hover:underline">Categories</a> -->
      {{-- <a href="{{ route('blog.about') }}" class="px-3 py-2 hover:underline">About</a> --}}

    </nav>
  </div>
</header>
