<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <a href="{{ route('dashboard.index') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse"
            wire:navigate>
            <x-app-logo />
        </a>

       <flux:navlist variant="outline">
    <flux:navlist.group :heading="__('Platform')" class="grid">
       <flux:navlist.item icon="shopping-bag" :href="route('dashboard.order.index')"
            :current="request()->routeIs('dashboard.orders.*')" wire:navigate>
            {{ __('Orders') }}
        </flux:navlist.item>

         <flux:navlist.item icon="clipboard-document-list" :href="route('dashboard.brand.index')"
            :current="request()->routeIs('dashboard.brand.*')" wire:navigate>
            {{ __('Brand') }}
        </flux:navlist.item>

        <flux:navlist.item icon="check-badge" :href="route('dashboard.product.index')"
            :current="request()->routeIs('dashboard.product.*')" wire:navigate>
            {{ __('Products') }}
        </flux:navlist.item>

          <flux:navlist.item icon="check-badge" :href="route('dashboard.variant.index')"
            :current="request()->routeIs('dashboard.variant.*')" wire:navigate>
            {{ __('Products Variant') }}
        </flux:navlist.item>

        <flux:navlist.item icon="newspaper" :href="route('dashboard.blog.index')"
            :current="request()->routeIs('dashboard.blog.*')" wire:navigate>
            {{ __('Blogs') }}
        </flux:navlist.item>

        <flux:navlist.item icon="bookmark" :href="route('dashboard.size.index')"
            :current="request()->routeIs('dashboard.size.*')" wire:navigate>
            {{ __('Sizes') }}
        </flux:navlist.item>

        <flux:navlist.item icon="chart-pie" :href="route('dashboard.color.index')"
            :current="request()->routeIs('dashboard.color.*')" wire:navigate>
            {{ __('Colors') }}
        </flux:navlist.item>

        <flux:navlist.item icon="clipboard-document-list" :href="route('dashboard.category.index')"
            :current="request()->routeIs('dashboard.category.*')" wire:navigate>
            {{ __('Categories') }}
        </flux:navlist.item>

          <flux:navlist.item icon="tag" :href="route('dashboard.tag.index')"
            :current="request()->routeIs('dashboard.tags.*')" wire:navigate>
            {{ __('Tags') }}
        </flux:navlist.item>

        <flux:navlist.item icon="circle-stack" :href="route('dashboard.comment.index')"
            :current="request()->routeIs('dashboard.comment.*')" wire:navigate>
            {{ __('Comments') }}
        </flux:navlist.item>

        <flux:navlist.item icon="hashtag" :href="route('dashboard.currency.index')"
            :current="request()->routeIs('dashboard.currency.*')" wire:navigate>
            {{ __('Currencies') }}
        </flux:navlist.item>

        <flux:navlist.item icon="photo" :href="route('dashboard.media.index')"
            :current="request()->routeIs('dashboard.media.*')" wire:navigate>
            {{ __('Media') }}
        </flux:navlist.item>

        <flux:navlist.item icon="scale" :href="route('dashboard.subscribe.index')"
            :current="request()->routeIs('dashboard.subscribe.*')" wire:navigate>
            {{ __('Subscribers') }}
        </flux:navlist.item>




    </flux:navlist.group>
</flux:navlist>


        <flux:spacer />


        <!-- Desktop User Menu -->
        <flux:dropdown position="bottom" align="start">
            <flux:profile :name="auth() -> user() -> name" :initials="auth() -> user() -> initials()"
                icon-trailing="chevrons-up-down" />

            <flux:menu class="w-[220px]">
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>
                        {{ __('Settings') }}</flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:sidebar>

    <!-- Mobile User Menu -->
    <flux:header class="lg:hidden">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:spacer />

        <flux:dropdown position="top" align="end">
            <flux:profile :initials="auth() -> user() -> initials()" icon-trailing="chevron-down" />

            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>
                        {{ __('Settings') }}</flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    {{ $slot }}

    @fluxScripts
</body>

</html>
