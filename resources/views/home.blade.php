<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white">


                    <div class="max-w-2xl m-auto mt-5">
                        <div class="flow-root">
                            <ul role="list" class="-mb-8">
                                @foreach ($answers as $answer)
                                <li>
                                    <div class="relative pb-8">
                                        <div class="relative flex items-start space-x-3">
                                            <div class="relative">
                                                <img class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-400 ring-8 ring-white"
                                                    src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                                                    alt="">

                                                <span
                                                    class="absolute -bottom-0.5 -right-1 rounded-tl bg-white px-0.5 py-px">
                                                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <div>
                                                    <div class="text-sm">
                                                        <a href="#" class="font-medium text-gray-900">
                                                            BAD ASS BOT
                                                        </a>
                                                    </div>
                                                    <p class="mt-0.5 text-sm text-gray-500">Commented 2h ago</p>
                                                </div>
                                                <div class="mt-2 text-sm text-gray-700">
                                                    <p>{{ $answer }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="flex items-start space-x-4 mt-5">
                            <div class="min-w-0 flex-1">
                                <form action="/" class="relative">
                                    <div
                                        class="overflow-hidden rounded-lg shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
                                        <label for="question" class="sr-only">Ask your question</label>
                                        <textarea rows="3" name="question" id="question"
                                            class="block w-full resize-none border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                            placeholder="Add your comment..."></textarea>

                                        <!-- Spacer element to match the height of the toolbar -->
                                        <div class="py-2" aria-hidden="true">
                                            <!-- Matches height of button in toolbar (1px border + 36px content height) -->
                                            <div class="py-px">
                                                <div class="h-9"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="absolute inset-x-0 bottom-0 flex justify-between py-2 pl-3 pr-2">
                                        <div class="flex items-center space-x-5">

                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="submit"
                                                class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ask</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>





                    <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8">
                        <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
                            <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                                Some BAD ASS Cars
                            </h2>
                        </div>

                        <div class="relative mt-8">
                            <div class="relative -mb-6 w-full overflow-x-auto pb-6">
                                <ul role="list"
                                    class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
                                    @foreach ($products as $product)
                                        <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                                            <div class="group relative">
                                                <div
                                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                                                    <img src="https://placehold.co/600x400"
                                                        alt="Black machined steel pen with hexagonal grip and small white logo at top."
                                                        class="h-full w-full object-cover object-center group-hover:opacity-75">
                                                </div>
                                                <div class="mt-6">
                                                    <p class="text-sm text-gray-500">{{ $product->category }}</p>
                                                    <h3 class="mt-1 font-semibold text-gray-900">
                                                        <a href="#">
                                                            <span class="absolute inset-0"></span>
                                                            {{ $product->name }}
                                                        </a>
                                                    </h3>
                                                    <p class="mt-1 text-gray-900">${{ $product->price }}</p>
                                                </div>
                                            </div>

                                            <h4 class="sr-only">Features</h4>
                                            <ul role="list"
                                                class="mt-auto items-center justify-center space-x-3 pt-6">
                                                @foreach ($product->attributes as $attribute)
                                                    <li>{{ $attribute }}</li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
