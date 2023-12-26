    <div class="flex items-center ">

        <!-- Profile dropdown -->
        <div x-data="{show: false}" x-on:click.away="show = false" class="ml-3 relative">
            <div>
                <button x-on:click="show = !show" type="button" class="max-w-xs  rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <p>{{ ucfirst(config('app.locale')) }}</p>
                </button>
            </div>

            <div x-show="show" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                @foreach(config('app.available_locales') as $locale_name => $available_locale)
                <a href="/language/{{ $available_locale }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">{{ ucfirst($locale_name) }}</a>
                @endforeach
            </div>
        </div>
    </div>