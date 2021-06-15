<x-app-layout title="{{ __('admin/menus.Charts') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{asset('js/charts-lines.js')}}" defer></script>
    <script src="{{asset('js/charts-pie.js')}}" defer></script>
    <script src="{{asset('js/charts-bars.js')}}" defer></script>
    
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{ __('admin/menus.Charts') }}
        </h2>

        <p class="mb-8 text-gray-600 dark:text-gray-400">
            Charts are provided by
            <a class="text-green-600 dark:text-green-400 hover:underline" href="https://www.chartjs.org/">
                Chart.js
            </a>
            . Note that the default legends are disabled and you should
            provide a description for your charts in HTML. See source code for
            examples.
        </p>

        <div class="grid gap-6 mb-8 md:grid-cols-2">
            <!-- Doughnut/Pie chart -->
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    Doughnut/Pie
                </h4>
                <canvas id="pie"></canvas>
                <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                    <!-- Chart legend -->
                    <div class="flex items-center">
                        <span class="inline-block w-3 h-3 mr-1 bg-blue-600 rounded-full"></span>
                        <span>Áo sơ mi</span>
                    </div>
                    <div class="flex items-center">
                        <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
                        <span>Giày</span>
                    </div>
                    <div class="flex items-center">
                        <span class="inline-block w-3 h-3 mr-1 bg-green-600 rounded-full"></span>
                        <span>Túi xách</span>
                    </div>
                </div>
            </div>
            <!-- Lines chart -->
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    Lines
                </h4>
                <canvas id="line"></canvas>
                <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                    <!-- Chart legend -->
                    <div class="flex items-center">
                        <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
                        <span>Hữu cơ</span>
                    </div>
                    <div class="flex items-center">
                        <span class="inline-block w-3 h-3 mr-1 bg-green-600 rounded-full"></span>
                        <span>Đã thanh toán</span>
                    </div>
                </div>
            </div>
            <!-- Bars chart -->
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    Bars
                </h4>
                <canvas id="bars"></canvas>
                <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                    <!-- Chart legend -->
                    <div class="flex items-center">
                        <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
                        <span>Giày</span>
                    </div>
                    <div class="flex items-center">
                        <span class="inline-block w-3 h-3 mr-1 bg-green-600 rounded-full"></span>
                        <span>Túi xách</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>