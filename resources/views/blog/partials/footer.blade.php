<footer class="w-full bg-white px-4 md:px-0">
  <div class="container mx-auto py-6 flex flex-col md:flex-row items-center justify-between">
    <span class="text-center md:text-left text-gray-600">© {{ now()->year }} {{ config('app.name', __('canvas::blog.title')) }}. {{ config('blog.taglines.header') }}</span>
  </div>
</footer>
