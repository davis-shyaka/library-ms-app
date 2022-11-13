<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between lg:justify-center">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
            {{-- <x-button target="_blank" href="https://github.com/davis-shyaka" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Find Us on GitHub</span>
            </x-button> --}}
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __('Welcome back, ') }}{{ Auth::user()->name }}
    </div>

    <div
        class="flex flex-col items-center gap-10 bg-slate-300 dark:bg-[#020917] shadow rounded-xl mx-auto mt-4 mb-2 p-4">

        <div class="lg:w-1/2 sm:w-full sm:h-full">
            <h1
                class="text-center py-4 font text-transparent bg-clip-text bg-gradient-to-r to-indigo-600 from-cyan-400 text-3xl">
                {{ $chart1->options['chart_title'] }}</h1>
            {!! $chart1->renderHtml() !!}
        </div>
    </div>

    <div
        class="flex flex-col items-center gap-10 bg-slate-300 dark:bg-[#020917] shadow rounded-xl mx-auto mt-4 mb-2 p-4">

        <div class="w-full">
            <h1
                class="text-center py-4 font text-transparent bg-clip-text bg-gradient-to-r to-indigo-600 from-cyan-400 text-3xl">
                {{ $chart2->options['chart_title'] }}</h1>
            {!! $chart2->renderHtml() !!}
        </div>
    </div>

    <div
        class="flex flex-col items-center gap-10 bg-slate-300 dark:bg-[#020917] shadow rounded-xl mx-auto mt-4 mb-2 p-4">

        <div class="">
            <h1
                class="text-center py-4 font text-transparent bg-clip-text bg-gradient-to-r to-indigo-600 from-cyan-400 text-3xl">
                {{ $chart3->options['chart_title'] }}</h1>
            {!! $chart3->renderHtml() !!}
        </div>
    </div>

    {!! $chart1->renderChartJsLibrary() !!}

    {!! $chart1->renderJs() !!}
    {!! $chart2->renderJs() !!}
    {!! $chart3->renderJs() !!}
</x-app-layout>
