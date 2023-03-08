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
    </head>
    <body class="antialiased">
    <!-- component -->
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">From the blog</h1>

            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                @foreach($posts as $post)
                    <div class="lg:flex">
                        <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="{{ $post->image_path }}" alt="">

                        <div class="flex flex-col justify-between py-6 lg:mx-6">
                            <a href="/posts/{{ $post->slug }}" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                                {{ $post->title }}
                            </a>

                            <span class="text-sm text-gray-500 dark:text-gray-300">{{ $post->published_at }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    </body>
</html>
