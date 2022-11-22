<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UR</title>
    <link rel="icon" href="{{ url('') }}">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        @if (Route::has('login'))
            @auth
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <div class="flex items-center">
                        <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <g id="svgGroup" stroke-linecap="round" fill-rule="evenodd" font-size="9pt" stroke="cyan"
                                stroke-width="0.25mm" fill="cyan" style="stroke:cyan;stroke-width:0.25mm;fill:cyan">
                                <path
                                    d="M0 96C0 43 43 0 96 0H384h32c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32H384 96c-53 0-96-43-96-96V96zM64 416c0 17.7 14.3 32 32 32H352V384H96c-17.7 0-32 14.3-32 32zM247.4 283.8c-3.7 3.7-6.2 4.2-7.4 4.2s-3.7-.5-7.4-4.2c-3.8-3.7-8-10-11.8-18.9c-6.2-14.5-10.8-34.3-12.2-56.9h63c-1.5 22.6-6 42.4-12.2 56.9c-3.8 8.9-8 15.2-11.8 18.9zm42.7-9.9c7.3-18.3 12-41.1 13.4-65.9h31.1c-4.7 27.9-21.4 51.7-44.5 65.9zm0-163.8c23.2 14.2 39.9 38 44.5 65.9H303.5c-1.4-24.7-6.1-47.5-13.4-65.9zM368 192c0-70.7-57.3-128-128-128s-128 57.3-128 128s57.3 128 128 128s128-57.3 128-128zM145.3 208h31.1c1.4 24.7 6.1 47.5 13.4 65.9c-23.2-14.2-39.9-38-44.5-65.9zm31.1-32H145.3c4.7-27.9 21.4-51.7 44.5-65.9c-7.3 18.3-12 41.1-13.4 65.9zm56.1-75.8c3.7-3.7 6.2-4.2 7.4-4.2s3.7 .5 7.4 4.2c3.8 3.7 8 10 11.8 18.9c6.2 14.5 10.8 34.3 12.2 56.9h-63c1.5-22.6 6-42.4 12.2-56.9c3.8-8.9 8-15.2 11.8-18.9z" />
                            </g>
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ url('/dashboard') }}"
                                class="underline text-gray-900 dark:text-white">Dashboard</a></div>
                    </div>
                </div>
            @else
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                        <svg class="h-16 w-auto text-gray-700 sm:h-20" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <g clip-path="url(#clip0)" fill="cyan">
                                <path
                                    d="M352 96c0 53-43 96-96 96s-96-43-96-96s43-96 96-96s96 43 96 96zM240 248V512l-48.4-24.2c-20.9-10.4-43.5-17-66.8-19.3l-96-9.6C12.5 457.2 0 443.5 0 427V224c0-17.7 14.3-32 32-32H62.3c63.6 0 125.6 19.6 177.7 56zm32 264V248c52.1-36.4 114.1-56 177.7-56H480c17.7 0 32 14.3 32 32V427c0 16.4-12.5 30.2-28.8 31.8l-96 9.6c-23.2 2.3-45.9 8.9-66.8 19.3L272 512z" />
                            </g>
                        </svg>
                        <svg class="align-middle text-center" width="89.8" height="19.28" viewBox="0 0 89.8 19.28"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="svgGroup" stroke-linecap="round" fill-rule="evenodd" font-size="9pt" stroke="cyan"
                                stroke-width="0.25mm" fill="cyan" style="stroke:cyan;stroke-width:0.25mm;fill:cyan">
                                <path
                                    d="M 0 10.38 L 0 1.66 L 1.36 1.66 L 1.36 10.2 Q 1.36 11.34 1.63 12.17 A 4.47 4.47 0 0 0 1.929 12.884 A 3.335 3.335 0 0 0 2.38 13.54 Q 2.86 14.08 3.54 14.34 A 3.924 3.924 0 0 0 4.501 14.569 A 4.937 4.937 0 0 0 5.06 14.6 A 4.686 4.686 0 0 0 5.931 14.522 A 3.777 3.777 0 0 0 6.58 14.34 Q 7.26 14.08 7.74 13.54 A 3.374 3.374 0 0 0 8.225 12.819 A 4.541 4.541 0 0 0 8.49 12.17 A 5.164 5.164 0 0 0 8.684 11.324 Q 8.76 10.806 8.76 10.2 L 8.76 1.66 L 10.12 1.66 L 10.12 10.38 A 8.506 8.506 0 0 1 9.998 11.844 A 7.3 7.3 0 0 1 9.85 12.51 A 4.806 4.806 0 0 1 9.291 13.804 A 4.389 4.389 0 0 1 8.98 14.24 A 3.902 3.902 0 0 1 7.817 15.201 A 4.762 4.762 0 0 1 7.41 15.4 A 4.803 4.803 0 0 1 6.374 15.708 Q 5.885 15.799 5.323 15.816 A 8.687 8.687 0 0 1 5.06 15.82 A 7.575 7.575 0 0 1 4.006 15.751 Q 3.286 15.649 2.71 15.4 A 4.359 4.359 0 0 1 1.712 14.807 A 3.75 3.75 0 0 1 1.14 14.24 Q 0.54 13.5 0.27 12.51 A 7.733 7.733 0 0 1 0.019 10.975 A 9.147 9.147 0 0 1 0 10.38 Z M 81.18 5.18 L 82.56 5.18 Q 82.78 6.14 83.12 7.25 Q 83.46 8.36 83.89 9.54 A 53.937 53.937 0 0 0 84.711 11.651 A 59.735 59.735 0 0 0 84.84 11.96 Q 85.36 13.2 85.96 14.4 Q 86.4 13.16 86.74 12.06 Q 87.08 10.96 87.37 9.87 Q 87.66 8.78 87.93 7.64 Q 88.2 6.5 88.5 5.18 L 89.8 5.18 Q 89.16 8.08 88.34 10.82 A 54.2 54.2 0 0 1 87.317 13.912 A 43.571 43.571 0 0 1 86.56 15.84 A 14.166 14.166 0 0 1 86.224 16.58 Q 86.046 16.941 85.864 17.25 A 8.205 8.205 0 0 1 85.78 17.39 A 5.092 5.092 0 0 1 85.337 18.007 A 3.95 3.95 0 0 1 84.89 18.46 Q 84.4 18.88 83.75 19.08 A 4.251 4.251 0 0 1 83.09 19.224 Q 82.763 19.269 82.393 19.278 A 7.447 7.447 0 0 1 82.22 19.28 A 3.61 3.61 0 0 1 81.7 19.244 A 2.848 2.848 0 0 1 81.31 19.16 A 9.972 9.972 0 0 1 81.167 19.117 Q 80.947 19.049 80.848 19.005 A 0.477 0.477 0 0 1 80.8 18.98 L 81.06 17.9 A 0.316 0.316 0 0 0 81.108 17.928 Q 81.192 17.97 81.378 18.029 A 6.826 6.826 0 0 0 81.51 18.07 Q 81.88 18.18 82.28 18.18 Q 82.84 18.18 83.29 18.06 Q 83.74 17.94 84.1 17.65 Q 84.46 17.36 84.75 16.9 A 5.381 5.381 0 0 0 84.984 16.487 Q 85.09 16.28 85.195 16.04 A 10.466 10.466 0 0 0 85.32 15.74 Q 84.66 14.52 84.05 13.2 Q 83.44 11.88 82.91 10.53 Q 82.38 9.18 81.94 7.83 Q 81.5 6.48 81.18 5.18 Z M 23.74 15.52 L 22.28 15.52 Q 21.86 14.72 21.37 13.92 Q 20.88 13.12 20.37 12.37 A 39.639 39.639 0 0 0 19.744 11.475 A 32.805 32.805 0 0 0 19.38 10.98 L 18.54 9.86 Q 17.9 9.92 17.26 9.92 L 15.02 9.92 L 15.02 15.52 L 13.66 15.52 L 13.66 1.92 A 7.758 7.758 0 0 1 14.338 1.766 Q 14.804 1.681 15.35 1.63 Q 16.32 1.54 17.14 1.54 Q 18.916 1.54 20.148 1.956 A 4.659 4.659 0 0 1 21.45 2.62 A 3.498 3.498 0 0 1 22.831 4.942 A 5.309 5.309 0 0 1 22.9 5.82 A 4.808 4.808 0 0 1 22.803 6.815 Q 22.618 7.689 22.08 8.28 A 4.366 4.366 0 0 1 20.634 9.315 A 5.625 5.625 0 0 1 19.92 9.58 Q 20.165 9.886 20.521 10.357 A 78.236 78.236 0 0 1 20.75 10.66 A 30.529 30.529 0 0 1 21.399 11.561 A 37.37 37.37 0 0 1 21.8 12.15 Q 22.34 12.96 22.86 13.84 A 18.987 18.987 0 0 1 23.394 14.805 A 15.087 15.087 0 0 1 23.74 15.52 Z M 46.58 0 L 46.58 5.8 Q 46.876 5.574 47.481 5.325 A 9.787 9.787 0 0 1 47.67 5.25 Q 48.42 4.96 49.44 4.96 Q 50.56 4.96 51.43 5.36 Q 52.3 5.76 52.9 6.48 A 4.774 4.774 0 0 1 53.66 7.769 A 5.716 5.716 0 0 1 53.81 8.19 A 6.785 6.785 0 0 1 54.087 9.606 A 8.317 8.317 0 0 1 54.12 10.36 A 7.362 7.362 0 0 1 54.022 11.59 A 5.71 5.71 0 0 1 53.75 12.62 A 5.137 5.137 0 0 1 53.153 13.778 A 4.498 4.498 0 0 1 52.71 14.32 Q 52.04 15.02 51.11 15.39 A 5.221 5.221 0 0 1 49.732 15.724 A 6.465 6.465 0 0 1 49.04 15.76 Q 48.07 15.76 47.338 15.671 A 7.651 7.651 0 0 1 46.76 15.58 A 16.944 16.944 0 0 1 46.154 15.448 Q 45.872 15.381 45.63 15.311 A 7.435 7.435 0 0 1 45.28 15.2 L 45.28 0.24 L 46.58 0 Z M 31.94 14.34 L 38.46 14.34 L 38.46 15.52 L 30.58 15.52 L 30.58 1.66 L 31.94 1.66 L 31.94 14.34 Z M 71.28 8.76 L 71.28 15.28 Q 71.08 15.34 70.7 15.41 A 30.511 30.511 0 0 1 70.345 15.473 Q 70.101 15.515 69.82 15.56 Q 69.32 15.64 68.71 15.69 Q 68.1 15.74 67.46 15.74 A 6.561 6.561 0 0 1 66.579 15.683 A 5.32 5.32 0 0 1 65.95 15.56 Q 65.26 15.38 64.75 14.99 Q 64.24 14.6 63.95 13.99 A 2.824 2.824 0 0 1 63.735 13.324 Q 63.674 13.018 63.663 12.665 A 5.112 5.112 0 0 1 63.66 12.5 A 3.688 3.688 0 0 1 63.72 11.817 A 2.635 2.635 0 0 1 63.98 11.06 Q 64.3 10.46 64.88 10.07 A 3.688 3.688 0 0 1 65.69 9.665 A 4.748 4.748 0 0 1 66.26 9.5 A 7.337 7.337 0 0 1 67.315 9.345 A 9.038 9.038 0 0 1 68 9.32 A 5.837 5.837 0 0 1 68.399 9.334 A 6.846 6.846 0 0 1 68.59 9.35 A 8.198 8.198 0 0 1 69.154 9.424 A 7.547 7.547 0 0 1 69.19 9.43 A 10.911 10.911 0 0 1 69.396 9.468 Q 69.498 9.487 69.587 9.507 A 5.693 5.693 0 0 1 69.69 9.53 Q 69.897 9.579 69.977 9.619 A 0.341 0.341 0 0 1 69.98 9.62 L 69.98 8.98 Q 69.98 8.44 69.9 7.93 Q 69.82 7.42 69.55 7.01 A 1.863 1.863 0 0 0 69.001 6.471 A 2.321 2.321 0 0 0 68.79 6.35 Q 68.414 6.158 67.854 6.113 A 4.469 4.469 0 0 0 67.5 6.1 Q 66.36 6.1 65.8 6.26 Q 65.24 6.42 64.98 6.52 L 64.8 5.38 A 2.278 2.278 0 0 1 65.021 5.292 Q 65.265 5.207 65.621 5.128 A 10.101 10.101 0 0 1 65.85 5.08 A 6.696 6.696 0 0 1 66.475 4.989 Q 66.966 4.94 67.56 4.94 Q 68.58 4.94 69.29 5.23 Q 70 5.52 70.44 6.03 A 3.097 3.097 0 0 1 71.026 7.068 A 3.638 3.638 0 0 1 71.08 7.24 A 5.213 5.213 0 0 1 71.26 8.259 A 6.289 6.289 0 0 1 71.28 8.76 Z M 62.46 5.28 L 62.2 6.4 A 0.792 0.792 0 0 0 62.107 6.362 Q 61.943 6.305 61.621 6.243 A 9.254 9.254 0 0 0 61.55 6.23 A 4.46 4.46 0 0 0 61.213 6.183 Q 60.81 6.14 60.26 6.14 A 9.724 9.724 0 0 0 59.767 6.152 Q 59.261 6.177 58.91 6.26 A 10.592 10.592 0 0 0 58.704 6.311 Q 58.425 6.382 58.291 6.437 A 0.758 0.758 0 0 0 58.24 6.46 L 58.24 15.52 L 56.94 15.52 L 56.94 5.66 A 5.531 5.531 0 0 1 57.29 5.522 Q 57.687 5.378 58.24 5.231 A 18.615 18.615 0 0 1 58.32 5.21 Q 59.004 5.031 59.918 4.991 A 12.467 12.467 0 0 1 60.46 4.98 A 7.34 7.34 0 0 1 61.307 5.027 A 6.323 6.323 0 0 1 61.67 5.08 Q 62.238 5.18 62.458 5.279 A 0.85 0.85 0 0 1 62.46 5.28 Z M 80.12 5.28 L 79.86 6.4 A 0.792 0.792 0 0 0 79.767 6.362 Q 79.603 6.305 79.281 6.243 A 9.254 9.254 0 0 0 79.21 6.23 A 4.46 4.46 0 0 0 78.873 6.183 Q 78.47 6.14 77.92 6.14 A 9.724 9.724 0 0 0 77.427 6.152 Q 76.921 6.177 76.57 6.26 A 10.592 10.592 0 0 0 76.364 6.311 Q 76.085 6.382 75.951 6.437 A 0.758 0.758 0 0 0 75.9 6.46 L 75.9 15.52 L 74.6 15.52 L 74.6 5.66 A 5.531 5.531 0 0 1 74.95 5.522 Q 75.347 5.378 75.9 5.231 A 18.615 18.615 0 0 1 75.98 5.21 Q 76.664 5.031 77.578 4.991 A 12.467 12.467 0 0 1 78.12 4.98 A 7.34 7.34 0 0 1 78.967 5.027 A 6.323 6.323 0 0 1 79.33 5.08 Q 79.898 5.18 80.118 5.279 A 0.85 0.85 0 0 1 80.12 5.28 Z M 46.58 7.06 L 46.58 14.3 Q 46.88 14.4 47.47 14.49 A 6.413 6.413 0 0 0 47.875 14.537 Q 48.344 14.579 48.978 14.58 A 20.119 20.119 0 0 0 49.02 14.58 A 4.195 4.195 0 0 0 50.254 14.407 A 3.3 3.3 0 0 0 51.72 13.49 A 3.526 3.526 0 0 0 52.508 12.089 Q 52.74 11.332 52.74 10.36 Q 52.74 9.5 52.56 8.73 A 4.176 4.176 0 0 0 52.288 7.927 A 3.454 3.454 0 0 0 51.98 7.39 A 2.899 2.899 0 0 0 50.94 6.485 A 3.339 3.339 0 0 0 50.93 6.48 A 2.814 2.814 0 0 0 50.209 6.226 Q 49.804 6.14 49.32 6.14 A 4.257 4.257 0 0 0 48.572 6.204 A 3.873 3.873 0 0 0 48.44 6.23 A 5.358 5.358 0 0 0 47.891 6.377 A 4.575 4.575 0 0 0 47.66 6.46 A 5.006 5.006 0 0 0 47.323 6.605 A 3.665 3.665 0 0 0 47.03 6.76 A 5.845 5.845 0 0 0 46.84 6.877 Q 46.693 6.973 46.58 7.06 Z M 41.84 5.18 L 41.84 15.52 L 40.54 15.52 L 40.54 5.18 L 41.84 5.18 Z M 15.02 2.86 L 15.02 8.76 L 16.9 8.76 A 17.59 17.59 0 0 0 18.145 8.717 A 14.984 14.984 0 0 0 18.68 8.67 A 5.028 5.028 0 0 0 19.419 8.537 A 3.711 3.711 0 0 0 20.14 8.27 Q 20.76 7.96 21.12 7.38 A 2.138 2.138 0 0 0 21.36 6.816 Q 21.433 6.549 21.462 6.23 A 4.815 4.815 0 0 0 21.48 5.8 Q 21.48 5.042 21.235 4.501 A 2.152 2.152 0 0 0 21.12 4.28 Q 20.76 3.68 20.18 3.33 A 3.62 3.62 0 0 0 19.258 2.941 A 4.399 4.399 0 0 0 18.85 2.85 Q 18.1 2.72 17.3 2.72 Q 16.688 2.72 16.2 2.752 A 10.823 10.823 0 0 0 15.97 2.77 Q 15.4 2.82 15.02 2.86 Z M 69.98 14.4 L 69.98 10.76 Q 69.76 10.66 69.28 10.55 Q 68.846 10.451 68.119 10.441 A 12.045 12.045 0 0 0 67.96 10.44 Q 67.48 10.44 66.96 10.51 A 2.899 2.899 0 0 0 66.055 10.782 A 2.755 2.755 0 0 0 66 10.81 Q 65.56 11.04 65.28 11.44 A 1.443 1.443 0 0 0 65.072 11.897 Q 65.02 12.089 65.006 12.317 A 2.86 2.86 0 0 0 65 12.5 Q 65 12.993 65.137 13.356 A 1.647 1.647 0 0 0 65.19 13.48 Q 65.38 13.88 65.73 14.12 A 2.173 2.173 0 0 0 66.209 14.364 A 2.834 2.834 0 0 0 66.57 14.47 Q 67.052 14.578 67.661 14.58 A 6.969 6.969 0 0 0 67.68 14.58 Q 68.292 14.58 68.78 14.548 A 10.823 10.823 0 0 0 69.01 14.53 A 12.36 12.36 0 0 0 69.414 14.488 Q 69.611 14.464 69.783 14.436 A 6.072 6.072 0 0 0 69.98 14.4 Z M 42.101 2.375 A 1.221 1.221 0 0 0 42.14 2.06 A 1.292 1.292 0 0 0 42.12 1.829 A 0.896 0.896 0 0 0 41.86 1.33 Q 41.58 1.06 41.18 1.06 Q 40.78 1.06 40.5 1.33 A 0.879 0.879 0 0 0 40.259 1.745 A 1.221 1.221 0 0 0 40.22 2.06 A 1.292 1.292 0 0 0 40.24 2.291 A 0.896 0.896 0 0 0 40.5 2.79 Q 40.78 3.06 41.18 3.06 Q 41.58 3.06 41.86 2.79 A 0.879 0.879 0 0 0 42.101 2.375 Z"
                                    vector-effect="non-scaling-stroke" />
                            </g>
                        </svg>
                    </div>


                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div class="p-6">
                                <div class="flex items-center">
                                    <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 512">
                                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <g id="svgGroup" stroke-linecap="round" fill-rule="evenodd" font-size="9pt"
                                            stroke="cyan" stroke-width="0.25mm" fill="cyan"
                                            style="stroke:cyan;stroke-width:0.25mm;fill:cyan">
                                            <path
                                                d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z" />
                                        </g>
                                    </svg>
                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('login') }}"
                                            class="underline text-gray-900 dark:text-white">Student</a></div>
                                </div>
                            </div>

                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                <div class="flex items-center">
                                    <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512">
                                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <g id="svgGroup" stroke-linecap="round" fill-rule="evenodd" font-size="9pt"
                                            stroke="cyan" stroke-width="0.25mm" fill="cyan"
                                            style="stroke:cyan;stroke-width:0.25mm;fill:cyan">
                                            <path
                                                d="M0 96C0 43 43 0 96 0H384h32c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32H384 96c-53 0-96-43-96-96V96zM64 416c0 17.7 14.3 32 32 32H352V384H96c-17.7 0-32 14.3-32 32zM247.4 283.8c-3.7 3.7-6.2 4.2-7.4 4.2s-3.7-.5-7.4-4.2c-3.8-3.7-8-10-11.8-18.9c-6.2-14.5-10.8-34.3-12.2-56.9h63c-1.5 22.6-6 42.4-12.2 56.9c-3.8 8.9-8 15.2-11.8 18.9zm42.7-9.9c7.3-18.3 12-41.1 13.4-65.9h31.1c-4.7 27.9-21.4 51.7-44.5 65.9zm0-163.8c23.2 14.2 39.9 38 44.5 65.9H303.5c-1.4-24.7-6.1-47.5-13.4-65.9zM368 192c0-70.7-57.3-128-128-128s-128 57.3-128 128s57.3 128 128 128s128-57.3 128-128zM145.3 208h31.1c1.4 24.7 6.1 47.5 13.4 65.9c-23.2-14.2-39.9-38-44.5-65.9zm31.1-32H145.3c4.7-27.9 21.4-51.7 44.5-65.9c-7.3 18.3-12 41.1-13.4 65.9zm56.1-75.8c3.7-3.7 6.2-4.2 7.4-4.2s3.7 .5 7.4 4.2c3.8 3.7 8 10 11.8 18.9c6.2 14.5 10.8 34.3 12.2 56.9h-63c1.5-22.6 6-42.4 12.2-56.9c3.8-8.9 8-15.2 11.8-18.9z" />
                                        </g>
                                    </svg>
                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('login') }}"
                                            class="underline text-gray-900 dark:text-white">Librarian</a></div>
                                </div>
                            </div>

                        </div>
                    </div>
            @endif
        @endauth


        <!-- Page Footer -->
        <div>
            <footer class="flex-shrink-0 px-6 py-4">
                <p class="flex items-center justify-center gap-1 text-sm text-gray-600 dark:text-gray-400">
                    <span>&copy; UR Library 2022. All Rights Reserved </span>
                </p>
            </footer>
        </div>
    </div>

    </div>
    <script src="https://kit.fontawesome.com/92d2814568.js" crossorigin="anonymous"></script>
</body>

</html>
