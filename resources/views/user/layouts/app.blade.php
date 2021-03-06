<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS -->
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{asset('plugins/lightbox/css/lightbox.css')}}" rel="stylesheet" />

    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    @stack('costumestyle')

    <style>
        /*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        header,
        nav {
            display: block
        }

        h1 {
            font-size: 2em;
            margin: .67em 0
        }

        a {
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }

        b {
            font-weight: inherit;
            font-weight: bolder
        }

        code {
            font-family: monospace, monospace;
            font-size: 1em
        }

        img {
            border-style: none
        }

        svg:not(:root) {
            overflow: hidden
        }

        button,
        input,
        textarea {
            font-family: sans-serif;
            font-size: 100%;
            line-height: 1.15;
            margin: 0
        }

        button,
        input {
            overflow: visible
        }

        button {
            text-transform: none
        }

        [type=reset],
        [type=submit],
        button,
        html [type=button] {
            -webkit-appearance: button
        }

        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner,
        button::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        [type=button]:-moz-focusring,
        [type=reset]:-moz-focusring,
        [type=submit]:-moz-focusring,
        button:-moz-focusring {
            outline: 1px dotted ButtonText
        }

        textarea {
            overflow: auto
        }

        [type=checkbox],
        [type=radio] {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0
        }

        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        [type=search]::-webkit-search-cancel-button,
        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        [hidden],
        template {
            display: none
        }

        html {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-family: sans-serif
        }

        *,
        :after,
        :before {
            -webkit-box-sizing: inherit;
            box-sizing: inherit
        }

        h1,
        h2,
        p {
            margin: 0
        }

        button {
            background: transparent;
            padding: 0
        }

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color
        }

        ul {
            margin: 0
        }

        *,
        :after,
        :before {
            border: 0 solid #dae1e7
        }

        img {
            border-style: solid
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            border-radius: 0
        }

        textarea {
            resize: vertical
        }

        img {
            max-width: 100%;
            height: auto
        }

        button,
        input,
        textarea {
            font-family: inherit
        }

        input::-webkit-input-placeholder,
        textarea::-webkit-input-placeholder {
            color: inherit;
            opacity: .5
        }

        input:-ms-input-placeholder,
        input::-ms-input-placeholder,
        textarea:-ms-input-placeholder,
        textarea::-ms-input-placeholder {
            color: inherit;
            opacity: .5
        }

        input::placeholder,
        textarea::placeholder {
            color: inherit;
            opacity: .5
        }

        [role=button],
        button {
            cursor: pointer
        }

        a {
            text-decoration: none;
            color: #4dc0b5
        }

        a:hover {
            text-decoration: underline
        }

        .top-nav-item {
            color: #606f7b;
            font-size: .875rem;
            margin-right: 1rem;
            font-weight: 600;
            padding-bottom: 1.5rem;
            border-bottom-width: 2px;
            border-style: solid;
            border-color: transparent
        }

        .top-nav-item.active {
            text-decoration: none;
            color: #4dc0b5;
            border-color: #4dc0b5
        }

        .top-nav-item:hover {
            text-decoration: none;
            color: #4dc0b5;
            border-color: #4dc0b5
        }

        .hero {
            background: url("/img/twitter/tailwind_bg.jpg")
        }

        .container {
            width: 100%
        }

        @media (min-width:576px) {
            .container {
                max-width: 576px
            }
        }

        @media (min-width:768px) {
            .container {
                max-width: 768px
            }
        }

        @media (min-width:992px) {
            .container {
                max-width: 992px
            }
        }

        @media (min-width:1200px) {
            .container {
                max-width: 1200px
            }
        }

        table {
            border-collapse: collapse
        }

        th {
            text-align: inherit
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent
        }

        .table td,
        .table th {
            padding: 1rem;
            vertical-align: top
        }

        .table td,
        .table th {
            border-top: 1px solid #dee2e6
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6
        }

        .table .table {
            background-color: #fff
        }

        .table-active,
        .table-active>td,
        .table-active>th {
            background-color: rgba(0, 0, 0, .075)
        }

        .list-reset {
            list-style: none;
            padding: 0
        }

        .bg-transparent {
            background-color: transparent
        }

        .bg-blue-wp-pusher {
            background-color: #1179bf
        }

        .bg-green-wp-pusher {
            background-color: #038e7d
        }

        .bg-grey-custom {
            background-color: #e4eaef
        }

        .bg-grey-light {
            background-color: #dae1e7
        }

        .bg-grey-lighter {
            background-color: #f1f5f8
        }

        .bg-grey-lightest {
            background-color: #f8fafc
        }

        .bg-white {
            background-color: #fff
        }

        .bg-red {
            background-color: #e3342f
        }

        .bg-yellow-lightest {
            background-color: #fcfbeb
        }

        .bg-teal {
            background-color: #4dc0b5
        }

        .bg-blue-resolute {
            background-color: #149ed4
        }

        .bg-blue-resolute-dark {
            background-color: #0b799e
        }

        .hover\:bg-black:hover {
            background-color: #22292f
        }

        .hover\:bg-grey-darkest:hover {
            background-color: #3d4852
        }

        .hover\:bg-grey:hover {
            background-color: #b8c2cc
        }

        .hover\:bg-grey-light:hover {
            background-color: #dae1e7
        }

        .hover\:bg-red-dark:hover {
            background-color: #cc1f1a
        }

        .hover\:bg-green-dark:hover {
            background-color: #1f9d55
        }

        .hover\:bg-teal-dark:hover {
            background-color: #38a89d
        }

        .hover\:bg-teal:hover {
            background-color: #4dc0b5
        }

        .bg-cover {
            background-size: cover
        }

        .border-transparent {
            border-color: transparent
        }

        .border-blue-wp-pusher {
            border-color: #1179bf
        }

        .border-black {
            border-color: #22292f
        }

        .border-grey {
            border-color: #b8c2cc
        }

        .border-grey-light {
            border-color: #dae1e7
        }

        .border-white {
            border-color: #fff
        }

        .border-teal {
            border-color: #4dc0b5
        }

        .border-blue-resolute {
            border-color: #149ed4
        }

        .border-blue-resolute-dark {
            border-color: #0b799e
        }

        .border-blue-light {
            border-color: #6cb2eb
        }

        .hover\:border-transparent:hover {
            border-color: transparent
        }

        .hover\:border-teal:hover {
            border-color: #4dc0b5
        }

        .rounded-sm {
            border-radius: .125rem
        }

        .rounded {
            border-radius: .25rem
        }

        .rounded-lg {
            border-radius: .5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-r {
            border-top-right-radius: .25rem
        }

        .rounded-r {
            border-bottom-right-radius: .25rem
        }

        .rounded-l {
            border-bottom-left-radius: .25rem
        }

        .rounded-l {
            border-top-left-radius: .25rem
        }

        .border-solid {
            border-style: solid
        }

        .border-2 {
            border-width: 2px
        }

        .border {
            border-width: 1px
        }

        .border-r-2 {
            border-right-width: 2px
        }

        .border-b-2 {
            border-bottom-width: 2px
        }

        .border-t-4 {
            border-top-width: 4px
        }

        .border-b-4 {
            border-bottom-width: 4px
        }

        .border-l-4 {
            border-left-width: 4px
        }

        .border-t-8 {
            border-top-width: 8px
        }

        .border-t {
            border-top-width: 1px
        }

        .border-r {
            border-right-width: 1px
        }

        .border-b {
            border-bottom-width: 1px
        }

        .block {
            display: block
        }

        .table {
            display: table
        }

        .hidden {
            display: none
        }

        .flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .flex-col {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .flex-wrap {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .items-center {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .justify-center {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .justify-between {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .flex-1 {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1
        }

        .font-wp-pusher {
            font-family: Lato, -apple-system, Helvetica Neue, sans-serif
        }

        .font-source-sans-pro {
            font-family: Source Sans Pro, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif
        }

        .font-sans {
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif
        }

        .font-light {
            font-weight: 300
        }

        .font-normal {
            font-weight: 400
        }

        .font-medium {
            font-weight: 500
        }

        .font-semibold {
            font-weight: 600
        }

        .font-bold {
            font-weight: 700
        }

        .h-6 {
            height: 1.5rem
        }

        .h-8 {
            height: 2rem
        }

        .h-10 {
            height: 2.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-20 {
            height: 5rem
        }

        .h-48 {
            height: 12rem
        }

        .h-64 {
            height: 16rem
        }

        .h-112 {
            height: 28rem
        }

        .leading-tight {
            line-height: 1.25
        }

        .leading-normal {
            line-height: 1.5
        }

        .my-1 {
            margin-top: .25rem;
            margin-bottom: .25rem
        }

        .my-4 {
            margin-top: 1rem;
            margin-bottom: 1rem
        }

        .mx-16 {
            margin-left: 4rem;
            margin-right: 4rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mb-0 {
            margin-bottom: 0
        }

        .ml-0 {
            margin-left: 0
        }

        .mt-1 {
            margin-top: .25rem
        }

        .mr-1 {
            margin-right: .25rem
        }

        .mb-1 {
            margin-bottom: .25rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .mb-2 {
            margin-bottom: .5rem
        }

        .mt-3 {
            margin-top: .75rem
        }

        .mr-3 {
            margin-right: .75rem
        }

        .mb-3 {
            margin-bottom: .75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mr-4 {
            margin-right: 1rem
        }

        .mb-4 {
            margin-bottom: 1rem
        }

        .mr-5 {
            margin-right: 1.25rem
        }

        .mr-6 {
            margin-right: 1.5rem
        }

        .mb-6 {
            margin-bottom: 1.5rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .mr-8 {
            margin-right: 2rem
        }

        .mb-8 {
            margin-bottom: 2rem
        }

        .mb-10 {
            margin-bottom: 2.5rem
        }

        .mb-16 {
            margin-bottom: 4rem
        }

        .mt-24 {
            margin-top: 6rem
        }

        .max-w-wp-pusher {
            max-width: 56rem
        }

        .max-w-full {
            max-width: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .hover\:opacity-75:hover {
            opacity: .75
        }

        .p-1 {
            padding: .25rem
        }

        .p-2 {
            padding: .5rem
        }

        .p-3 {
            padding: .75rem
        }

        .p-4 {
            padding: 1rem
        }

        .p-10 {
            padding: 2.5rem
        }

        .py-1 {
            padding-top: .25rem;
            padding-bottom: .25rem
        }

        .py-2 {
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .px-2 {
            padding-left: .5rem;
            padding-right: .5rem
        }

        .py-3 {
            padding-top: .75rem;
            padding-bottom: .75rem
        }

        .px-3 {
            padding-left: .75rem;
            padding-right: .75rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .py-6 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem
        }

        .px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }

        .pl-0 {
            padding-left: 0
        }

        .pt-2 {
            padding-top: .5rem
        }

        .pr-2 {
            padding-right: .5rem
        }

        .pb-2 {
            padding-bottom: .5rem
        }

        .pl-2 {
            padding-left: .5rem
        }

        .pt-3 {
            padding-top: .75rem
        }

        .pl-3 {
            padding-left: .75rem
        }

        .pt-4 {
            padding-top: 1rem
        }

        .pr-4 {
            padding-right: 1rem
        }

        .pb-4 {
            padding-bottom: 1rem
        }

        .pl-4 {
            padding-left: 1rem
        }

        .pr-6 {
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .pr-8 {
            padding-right: 2rem
        }

        .pl-8 {
            padding-left: 2rem
        }

        .pt-10 {
            padding-top: 2.5rem
        }

        .pl-10 {
            padding-left: 2.5rem
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .pin-y {
            top: 0;
            bottom: 0
        }

        .pin-t {
            top: 0
        }

        .pin-r {
            right: 0
        }

        .shadow {
            -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .1)
        }

        .shadow-lg {
            -webkit-box-shadow: 0 15px 30px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
            box-shadow: 0 15px 30px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08)
        }

        .fill-current {
            fill: currentColor
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-blue-wp-pusher {
            color: #1179bf
        }

        .text-black {
            color: #22292f
        }

        .text-grey-darkest {
            color: #3d4852
        }

        .text-grey-darker {
            color: #606f7b
        }

        .text-grey-dark {
            color: #8795a1
        }

        .text-grey {
            color: #b8c2cc
        }

        .text-white {
            color: #fff
        }

        .text-red {
            color: #e3342f
        }

        .text-yellow-darker {
            color: #684f1d
        }

        .text-green-dark {
            color: #1f9d55
        }

        .text-teal {
            color: #4dc0b5
        }

        .text-blue-resolute {
            color: #149ed4
        }

        .text-blue-resolute-icon {
            color: #a7b7c7
        }

        .text-blue {
            color: #3490dc
        }

        .hover\:text-black:hover {
            color: #22292f
        }

        .hover\:text-grey-darkest:hover {
            color: #3d4852
        }

        .hover\:text-grey-darker:hover {
            color: #606f7b
        }

        .hover\:text-grey-dark:hover {
            color: #8795a1
        }

        .hover\:text-white:hover {
            color: #fff
        }

        .hover\:text-red:hover {
            color: #e3342f
        }

        .hover\:text-green:hover {
            color: #38c172
        }

        .hover\:text-teal:hover {
            color: #4dc0b5
        }

        .hover\:text-blue-dark:hover {
            color: #2779bd
        }

        .hover\:text-blue-light:hover {
            color: #6cb2eb
        }

        .text-xs {
            font-size: .75rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-base {
            font-size: 1rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .text-xl {
            font-size: 1.25rem
        }

        .text-2xl {
            font-size: 1.5rem
        }

        .text-3xl {
            font-size: 1.875rem
        }

        .text-5\.5xl {
            font-size: 4.125rem
        }

        .italic {
            font-style: italic
        }

        .uppercase {
            text-transform: uppercase
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .hover\:no-underline:hover {
            text-decoration: none
        }

        .tracking-tight {
            letter-spacing: -.05em
        }

        .tracking-wide {
            letter-spacing: .05em
        }

        .align-top {
            vertical-align: top
        }

        .w-6 {
            width: 1.5rem
        }

        .w-8 {
            width: 2rem
        }

        .w-12 {
            width: 3rem
        }

        .w-20 {
            width: 5rem
        }

        .w-24 {
            width: 6rem
        }

        .w-48 {
            width: 12rem
        }

        .w-64 {
            width: 16rem
        }

        .w-128 {
            width: 32rem
        }

        .w-1\/2 {
            width: 50%
        }

        .w-1\/3 {
            width: 33.33333%
        }

        .w-2\/3 {
            width: 66.66667%
        }

        .w-1\/4 {
            width: 25%
        }

        .w-3\/4 {
            width: 75%
        }

        .w-3\/5 {
            width: 60%
        }

        .w-1\/8 {
            width: 12.5%
        }

        .w-7\/8 {
            width: 87.5%
        }

        .w-full {
            width: 100%
        }

        .grid {
            display: grid
        }

        .grid-columns-12 {
            grid-template-columns: repeat(12, 1fr)
        }

        .col-span-12 {
            grid-column-start: span 12
        }

        .transition-slow {
            -webkit-transition-duration: .5s;
            transition-duration: .5s
        }

        @media (min-width:768px) {
            .md\:flex-row {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }

            .md\:mb-0 {
                margin-bottom: 0
            }

            .md\:ml-4 {
                margin-left: 1rem
            }

            .md\:ml-10 {
                margin-left: 2.5rem
            }

            .md\:w-1\/2-almost {
                width: 48%
            }

            .md\:w-1\/3 {
                width: 33.33333%
            }

            .md\:w-2\/3 {
                width: 66.66667%
            }
        }

        @media (min-width:992px) {
            .lg\:flex-row {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }

            .lg\:justify-end {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end
            }

            .lg\:my-0 {
                margin-top: 0;
                margin-bottom: 0
            }

            .lg\:mt-0 {
                margin-top: 0
            }

            .lg\:-mt-24 {
                margin-top: -6rem
            }

            .lg\:pl-0 {
                padding-left: 0
            }

            .lg\:absolute {
                position: absolute
            }

            .lg\:relative {
                position: relative
            }

            .lg\:pin-t {
                top: 0
            }

            .lg\:pin-l {
                left: 0
            }

            .lg\:w-128 {
                width: 32rem
            }

            .lg\:w-1\/2 {
                width: 50%
            }

            .lg\:w-1\/4 {
                width: 25%
            }

            .lg\:w-1\/5 {
                width: 20%
            }

            .lg\:w-2\/5 {
                width: 40%
            }

            .lg\:grid-columns-5 {
                grid-template-columns: repeat(5, 1fr)
            }

            .lg\:col-span-2 {
                grid-column-start: span 2
            }

            .lg\:col-span-10 {
                grid-column-start: span 10
            }
        }

    </style>

    @livewireStyles

</head>

<body class="bg-grey-light font-sans">
    <div id="app">

        @yield('navbar')


        <button onclick="myFunction()"> Here </button>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    {{-- <script src=" {{asset('plugins/TheSaas/page.min.js')}}"></script> --}}
    {{-- <script src=" {{asset('plugins/TheSaas/script.js')}} "></script> --}}
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- ./Vue Mixed -->
    {{-- <script src=" {{asset('js/app.js')}} "></script> --}}
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- lightbox -->
    <script src="{{ asset('plugins/lightbox/js/lightbox.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Toasts -->
    <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
    <script>
        function myFunction() {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-left",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success("NEW demand ")
        }

    </script>

    <script src="{{asset('plugins/select2/select2.full.min.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

    @yield('scripts')

    @livewireScripts
    @stack('js')
</body>

</html>
