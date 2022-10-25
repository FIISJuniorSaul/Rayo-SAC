<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Empresa de transportes RAYO S.A.C</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <!-- Styles -->
    <style>
        :root {
            --bs-blue: #0061f2;
            --bs-indigo: #5800e8;
            --bs-purple: #6900c7;
            --bs-pink: #e30059;
            --bs-red: #e81500;
            --bs-orange: #fa5b0f;
            --bs-yellow: #f4a100;
            --bs-green: #00ac69;
            --bs-teal: #00ba94;
            --bs-cyan: #00cfd5;
            --bs-white: #fff;
            --bs-gray: #69707a;
            --bs-gray-dark: #363d47;
            --bs-gray-100: #f2f6fc;
            --bs-gray-200: #e0e5ec;
            --bs-gray-300: #d4dae3;
            --bs-gray-400: #c5ccd6;
            --bs-gray-500: #a7aeb8;
            --bs-gray-600: #69707a;
            --bs-gray-700: #4a515b;
            --bs-gray-800: #363d47;
            --bs-gray-900: #212832;
            --bs-primary: #0061f2;
            --bs-secondary: #6900c7;
            --bs-success: #00ac69;
            --bs-info: #00cfd5;
            --bs-warning: #f4a100;
            --bs-danger: #e81500;
            --bs-light: #f2f6fc;
            --bs-dark: #212832;
            --bs-black: #000;
            --bs-white: #fff;
            --bs-red: #e81500;

            --bs-orange: #fa5b0f;
            --bs-yellow: #f4a100;
            --bs-green: #00ac69;
            --bs-teal: #00ba94;
            --bs-cyan: #00cfd5;
            --bs-blue: #0061f2;
            --bs-indigo: #5800e8;
            --bs-purple: #6900c7;
            --bs-pink: #e30059;
            --bs-red-soft: #f1e0e3;
            --bs-orange-soft: #f3e7e3;
            --bs-yellow-soft: #f2eee3;
            --bs-green-soft: #daefed;
            --bs-teal-soft: #daf0f2;
            --bs-cyan-soft: #daf2f8;
            --bs-blue-soft: #dae7fb;
            --bs-indigo-soft: #e3ddfa;
            --bs-purple-soft: #e4ddf7;
            --bs-pink-soft: #f1ddec;
            --bs-primary-soft: #dae7fb;
            --bs-secondary-soft: #e4ddf7;
            --bs-success-soft: #daefed;
            --bs-info-soft: #daf2f8;
            --bs-warning-soft: #f2eee3;
            --bs-danger-soft: #f1e0e3;
            --bs-primary-rgb: 0, 97, 242;
            --bs-secondary-rgb: 105, 0, 199;
            --bs-success-rgb: 0, 172, 105;
            --bs-info-rgb: 0, 207, 213;
            --bs-warning-rgb: 244, 161, 0;
            --color_base: #FC8500;
            --bs-danger-rgb: 232, 21, 0;
            --bs-light-rgb: 242, 246, 252;
            --bs-dark-rgb: 33, 40, 50;
            --bs-black-rgb: 0, 0, 0;
            --bs-white-rgb: 255, 255, 255;
            --bs-red-rgb: 232, 21, 0;
            --bs-orange-rgb: 247, 100, 0;
            --bs-yellow-rgb: 244, 161, 0;
            --bs-green-rgb: 0, 172, 105;
            --bs-teal-rgb: 0, 186, 148;
            --bs-cyan-rgb: 0, 207, 213;
            --bs-blue-rgb: 0, 97, 242;
            --bs-indigo-rgb: 88, 0, 232;
            --bs-purple-rgb: 105, 0, 199;
            --bs-pink-rgb: 227, 0, 89;
            --bs-red-soft-rgb: 241, 224, 227;
            --bs-orange-soft-rgb: 243, 231, 227;
            --bs-yellow-soft-rgb: 242, 238, 227;
            --bs-green-soft-rgb: 218, 239, 237;
            --bs-teal-soft-rgb: 218, 240, 242;
            --bs-cyan-soft-rgb: 218, 242, 248;
            --bs-blue-soft-rgb: 218, 231, 251;
            --bs-indigo-soft-rgb: 227, 221, 250;
            --bs-purple-soft-rgb: 228, 221, 247;
            --bs-pink-soft-rgb: 241, 221, 236;
            --bs-primary-soft-rgb: 218, 231, 251;
            --bs-secondary-soft-rgb: 228, 221, 247;
            --bs-success-soft-rgb: 218, 239, 237;
            --bs-info-soft-rgb: 218, 242, 248;
            --bs-warning-soft-rgb: 242, 238, 227;
            --bs-danger-soft-rgb: 241, 224, 227;
            --bs-white-rgb: 255, 255, 255;
            --bs-black-rgb: 0, 0, 0;
            --bs-body-color-rgb: 105, 112, 122;
            --bs-body-bg-rgb: 242, 246, 252;
            --bs-font-sans-serif: "Metropolis", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            --bs-body-font-family: Metropolis, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            --bs-body-font-size: 1rem;
            --bs-body-font-weight: 400;
            --bs-body-line-height: 1.5;
            --bs-body-color: #69707a;
            --bs-body-bg: #f2f6fc;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }


        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: smooth;
            }
        }

        body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }



        hr {
            margin: 1rem 0;
            color: inherit;
            background-color: currentColor;
            border: 0;
            opacity: 0.25;
        }

        hr:not([size]) {
            height: 1px;
        }

        h6,
        .h6,
        h5,
        .h5,
        h4,
        .h4,
        h3,
        .h3,
        h2,
        .h2,
        h1,
        .h1 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
            color: #363d47;
        }

        h1,
        .h1 {
            font-size: calc(1.275rem + 0.3vw);
        }

        @media (min-width: 1200px) {

            h1,
            .h1 {
                font-size: 1.5rem;
            }
        }

        h2,
        .h2 {
            font-size: calc(1.265rem + 0.18vw);
        }

        @media (min-width: 1200px) {

            h2,
            .h2 {
                font-size: 1.4rem;
            }
        }

        h3,
        .h3 {
            font-size: calc(1.255rem + 0.06vw);
        }

        @media (min-width: 1200px) {

            h3,
            .h3 {
                font-size: 1.3rem;
            }
        }

        h4,
        .h4 {
            font-size: 1.2rem;
        }

        h5,
        .h5 {
            font-size: 1.1rem;
        }

        h6,
        .h6 {
            font-size: 1rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        abbr[title],
        abbr[data-bs-original-title] {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit;
        }

        ol,
        ul {
            padding-left: 2rem;
        }

        ol,
        ul,
        dl {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        ol ol,
        ul ul,
        ol ul,
        ul ol {
            margin-bottom: 0;
        }

        dt {
            font-weight: 500;
        }

        dd {
            margin-bottom: 0.5rem;
            margin-left: 0;
        }

        blockquote {
            margin: 0 0 1rem;
        }

        b,
        strong {
            font-weight: bolder;
        }

        small,
        .small {
            font-size: 0.875em;
        }

        mark,
        .mark {
            padding: 0.2em;
            background-color: #fcf8e3;
        }

        sub,
        sup {
            position: relative;
            font-size: 0.75em;
            line-height: 0;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        a {
            color: #0061f2;
            text-decoration: none;
        }

        a:hover {
            color: #004ec2;
            text-decoration: underline;
        }

        a:not([href]):not([class]),
        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none;
        }

        pre,
        code,
        kbd,
        samp {
            font-family: var(--bs-font-monospace);
            font-size: 1em;
            direction: ltr
                /* rtl:ignore */
            ;
            unicode-bidi: bidi-override;
        }

        pre {
            display: block;
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            font-size: 0.875em;
            color: #69707a;
        }

        pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal;
        }

        code {
            font-size: 0.875em;
            color: #e30059;
            word-wrap: break-word;
        }

        a>code {
            color: inherit;
        }

        kbd {
            padding: 0.2rem 0.4rem;
            font-size: 0.875em;
            color: #fff;
            background-color: #212832;
            border-radius: 0.25rem;
        }

        kbd kbd {
            padding: 0;
            font-size: 1em;
            font-weight: 500;
        }

        figure {
            margin: 0 0 1rem;
        }

        img,
        svg {
            vertical-align: middle;
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        caption {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            color: #a7aeb8;
            text-align: left;
        }

        th {
            text-align: inherit;
            text-align: -webkit-match-parent;
        }

        thead,
        tbody,
        tfoot,
        tr,
        td,
        th {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
        }

        label {
            display: inline-block;
        }

        button {
            border-radius: 0;
        }

        button:focus:not(:focus-visible) {
            outline: 0;
        }

        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button,
        select {
            text-transform: none;
        }

        [role=button] {
            cursor: pointer;
        }

        select {
            word-wrap: normal;
        }

        select:disabled {
            opacity: 1;
        }

        [list]::-webkit-calendar-picker-indicator {
            display: none;
        }

        button,
        [type=button],
        [type=reset],
        [type=submit] {
            -webkit-appearance: button;
        }

        button:not(:disabled),
        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled) {
            cursor: pointer;
        }

        ::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        textarea {
            resize: vertical;
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
        }

        legend {
            float: left;
            width: 100%;
            padding: 0;
            margin-bottom: 0.5rem;
            font-size: calc(1.275rem + 0.3vw);
            line-height: inherit;
        }

        @media (min-width: 1200px) {
            legend {
                font-size: 1.5rem;
            }
        }

        legend+* {
            clear: left;
        }

        ::-webkit-datetime-edit-fields-wrapper,
        ::-webkit-datetime-edit-text,
        ::-webkit-datetime-edit-minute,
        ::-webkit-datetime-edit-hour-field,
        ::-webkit-datetime-edit-day-field,
        ::-webkit-datetime-edit-month-field,
        ::-webkit-datetime-edit-year-field {
            padding: 0;
        }

        ::-webkit-inner-spin-button {
            height: auto;
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: textfield;
        }

        /* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-color-swatch-wrapper {
            padding: 0;
        }

        ::-webkit-file-upload-button {
            font: inherit;
        }

        ::file-selector-button {
            font: inherit;
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button;
        }

        output {
            display: inline-block;
        }

        iframe {
            border: 0;
        }

        summary {
            display: list-item;
            cursor: pointer;
        }

        progress {
            vertical-align: baseline;
        }

        [hidden] {
            display: none !important;
        }

        .lead {
            font-size: 1.1rem;
            font-weight: 400;
        }

        .display-1 {
            font-size: calc(1.625rem + 4.5vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-1 {
                font-size: 5rem;
            }
        }

        .display-2 {
            font-size: calc(1.575rem + 3.9vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-2 {
                font-size: 4.5rem;
            }
        }

        .display-3 {
            font-size: calc(1.525rem + 3.3vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-3 {
                font-size: 4rem;
            }
        }

        .display-4 {
            font-size: calc(1.475rem + 2.7vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-4 {
                font-size: 3.5rem;
            }
        }

        .display-5 {
            font-size: calc(1.425rem + 2.1vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-5 {
                font-size: 3rem;
            }
        }

        .display-6 {
            font-size: calc(1.375rem + 1.5vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-6 {
                font-size: 2.5rem;
            }
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
        }

        .list-inline-item {
            display: inline-block;
        }

        .list-inline-item:not(:last-child) {
            margin-right: 0.5rem;
        }

        .initialism {
            font-size: 0.875em;
            text-transform: uppercase;
        }

        .blockquote {
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }

        .blockquote> :last-child {
            margin-bottom: 0;
        }

        .blockquote-footer {
            margin-top: -1rem;
            margin-bottom: 1rem;
            font-size: 0.875em;
            color: #69707a;
        }

        .blockquote-footer::before {
            content: "— ";
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .img-thumbnail {
            padding: 0.25rem;
            background-color: #f2f6fc;
            border: 1px solid #d4dae3;
            border-radius: 0.35rem;
            max-width: 100%;
            height: auto;
        }

        .figure {
            display: inline-block;
        }

        .figure-img {
            margin-bottom: 0.5rem;
            line-height: 1;
        }

        .figure-caption {
            font-size: 0.875em;
            color: #69707a;
        }

        .container,
        .container-fluid,
        .container-xxl,
        .container-xl,
        .container-lg,
        .container-md,
        .container-sm {
            width: 100%;
            padding-right: var(--bs-gutter-x, 0.75rem);
            padding-left: var(--bs-gutter-x, 0.75rem);
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {

            .container-sm,
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {

            .container-md,
            .container-sm,
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {

            .container-lg,
            .container-md,
            .container-sm,
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {

            .container-xl,
            .container-lg,
            .container-md,
            .container-sm,
            .container {
                max-width: 1140px;
            }
        }

        @media (min-width: 1500px) {

            .container-xxl,
            .container-xl,
            .container-lg,
            .container-md,
            .container-sm,
            .container {
                max-width: 1440px;
            }
        }

        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-0.5 * var(--bs-gutter-x));
            margin-left: calc(-0.5 * var(--bs-gutter-x));
        }

        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * 0.5);
            padding-left: calc(var(--bs-gutter-x) * 0.5);
            margin-top: var(--bs-gutter-y);
        }

        .col {
            flex: 1 0 0%;
        }

        .row-cols-auto>* {
            flex: 0 0 auto;
            width: auto;
        }

        .row-cols-1>* {
            flex: 0 0 auto;
            width: 100%;
        }

        .row-cols-2>* {
            flex: 0 0 auto;
            width: 50%;
        }

        .row-cols-3>* {
            flex: 0 0 auto;
            width: 33.3333333333%;
        }

        .row-cols-4>* {
            flex: 0 0 auto;
            width: 25%;
        }

        .row-cols-5>* {
            flex: 0 0 auto;
            width: 20%;
        }

        .row-cols-6>* {
            flex: 0 0 auto;
            width: 16.6666666667%;
        }

        .col-auto {
            flex: 0 0 auto;
            width: auto;
        }

        .col-1 {
            flex: 0 0 auto;
            width: 8.33333333%;
        }

        .col-2 {
            flex: 0 0 auto;
            width: 16.66666667%;
        }

        .col-3 {
            flex: 0 0 auto;
            width: 25%;
        }

        .col-4 {
            flex: 0 0 auto;
            width: 33.33333333%;
        }

        .col-5 {
            flex: 0 0 auto;
            width: 41.66666667%;
        }

        .col-6 {
            flex: 0 0 auto;
            width: 50%;
        }

        .col-7 {
            flex: 0 0 auto;
            width: 58.33333333%;
        }

        .col-8 {
            flex: 0 0 auto;
            width: 66.66666667%;
        }

        .col-9 {
            flex: 0 0 auto;
            width: 75%;
        }

        .col-10 {
            flex: 0 0 auto;
            width: 83.33333333%;
        }

        .col-11 {
            flex: 0 0 auto;
            width: 91.66666667%;
        }

        .col-12 {
            flex: 0 0 auto;
            width: 100%;
        }

        .offset-1 {
            margin-left: 8.33333333%;
        }

        .offset-2 {
            margin-left: 16.66666667%;
        }

        .offset-3 {
            margin-left: 25%;
        }

        .offset-4 {
            margin-left: 33.33333333%;
        }

        .offset-5 {
            margin-left: 41.66666667%;
        }

        .offset-6 {
            margin-left: 50%;
        }

        .offset-7 {
            margin-left: 58.33333333%;
        }

        .offset-8 {
            margin-left: 66.66666667%;
        }

        .offset-9 {
            margin-left: 75%;
        }

        .offset-10 {
            margin-left: 83.33333333%;
        }

        .offset-11 {
            margin-left: 91.66666667%;
        }

        .g-0,
        .gx-0 {
            --bs-gutter-x: 0;
        }

        .g-0,
        .gy-0 {
            --bs-gutter-y: 0;
        }

        .g-1,
        .gx-1 {
            --bs-gutter-x: 0.25rem;
        }

        .g-1,
        .gy-1 {
            --bs-gutter-y: 0.25rem;
        }

        .g-2,
        .gx-2 {
            --bs-gutter-x: 0.5rem;
        }

        .g-2,
        .gy-2 {
            --bs-gutter-y: 0.5rem;
        }

        .g-3,
        .gx-3 {
            --bs-gutter-x: 1rem;
        }

        .g-3,
        .gy-3 {
            --bs-gutter-y: 1rem;
        }

        .g-4,
        .gx-4 {
            --bs-gutter-x: 1.5rem;
        }

        .g-4,
        .gy-4 {
            --bs-gutter-y: 1.5rem;
        }

        .g-5,
        .gx-5 {
            --bs-gutter-x: 2.5rem;
        }

        .g-5,
        .gy-5 {
            --bs-gutter-y: 2.5rem;
        }

        .g-10,
        .gx-10 {
            --bs-gutter-x: 6rem;
        }

        .g-10,
        .gy-10 {
            --bs-gutter-y: 6rem;
        }

        .g-15,
        .gx-15 {
            --bs-gutter-x: 9rem;
        }

        .g-15,
        .gy-15 {
            --bs-gutter-y: 9rem;
        }

        @media (min-width: 576px) {
            .col-sm {
                flex: 1 0 0%;
            }

            .row-cols-sm-auto>* {
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-sm-1>* {
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-sm-2>* {
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-sm-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-sm-4>* {
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-sm-5>* {
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-sm-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-sm-auto {
                flex: 0 0 auto;
                width: auto;
            }

            .col-sm-1 {
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-sm-2 {
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-sm-3 {
                flex: 0 0 auto;
                width: 25%;
            }

            .col-sm-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-sm-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-sm-6 {
                flex: 0 0 auto;
                width: 50%;
            }

            .col-sm-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-sm-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-sm-9 {
                flex: 0 0 auto;
                width: 75%;
            }

            .col-sm-10 {
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-sm-11 {
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-sm-0 {
                margin-left: 0;
            }

            .offset-sm-1 {
                margin-left: 8.33333333%;
            }

            .offset-sm-2 {
                margin-left: 16.66666667%;
            }

            .offset-sm-3 {
                margin-left: 25%;
            }

            .offset-sm-4 {
                margin-left: 33.33333333%;
            }

            .offset-sm-5 {
                margin-left: 41.66666667%;
            }

            .offset-sm-6 {
                margin-left: 50%;
            }

            .offset-sm-7 {
                margin-left: 58.33333333%;
            }

            .offset-sm-8 {
                margin-left: 66.66666667%;
            }

            .offset-sm-9 {
                margin-left: 75%;
            }

            .offset-sm-10 {
                margin-left: 83.33333333%;
            }

            .offset-sm-11 {
                margin-left: 91.66666667%;
            }

            .g-sm-0,
            .gx-sm-0 {
                --bs-gutter-x: 0;
            }

            .g-sm-0,
            .gy-sm-0 {
                --bs-gutter-y: 0;
            }

            .g-sm-1,
            .gx-sm-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-sm-1,
            .gy-sm-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-sm-2,
            .gx-sm-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-sm-2,
            .gy-sm-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-sm-3,
            .gx-sm-3 {
                --bs-gutter-x: 1rem;
            }

            .g-sm-3,
            .gy-sm-3 {
                --bs-gutter-y: 1rem;
            }

            .g-sm-4,
            .gx-sm-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-sm-4,
            .gy-sm-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-sm-5,
            .gx-sm-5 {
                --bs-gutter-x: 2.5rem;
            }

            .g-sm-5,
            .gy-sm-5 {
                --bs-gutter-y: 2.5rem;
            }

            .g-sm-10,
            .gx-sm-10 {
                --bs-gutter-x: 6rem;
            }

            .g-sm-10,
            .gy-sm-10 {
                --bs-gutter-y: 6rem;
            }

            .g-sm-15,
            .gx-sm-15 {
                --bs-gutter-x: 9rem;
            }

            .g-sm-15,
            .gy-sm-15 {
                --bs-gutter-y: 9rem;
            }
        }

        @media (min-width: 768px) {
            .col-md {
                flex: 1 0 0%;
            }

            .row-cols-md-auto>* {
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-md-1>* {
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-md-2>* {
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-md-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-md-4>* {
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-md-5>* {
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-md-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-md-auto {
                flex: 0 0 auto;
                width: auto;
            }

            .col-md-1 {
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-md-2 {
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-md-3 {
                flex: 0 0 auto;
                width: 25%;
            }

            .col-md-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-md-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-md-6 {
                flex: 0 0 auto;
                width: 50%;
            }

            .col-md-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-md-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-md-9 {
                flex: 0 0 auto;
                width: 75%;
            }

            .col-md-10 {
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-md-11 {
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-md-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-md-0 {
                margin-left: 0;
            }

            .offset-md-1 {
                margin-left: 8.33333333%;
            }

            .offset-md-2 {
                margin-left: 16.66666667%;
            }

            .offset-md-3 {
                margin-left: 25%;
            }

            .offset-md-4 {
                margin-left: 33.33333333%;
            }

            .offset-md-5 {
                margin-left: 41.66666667%;
            }

            .offset-md-6 {
                margin-left: 50%;
            }

            .offset-md-7 {
                margin-left: 58.33333333%;
            }

            .offset-md-8 {
                margin-left: 66.66666667%;
            }

            .offset-md-9 {
                margin-left: 75%;
            }

            .offset-md-10 {
                margin-left: 83.33333333%;
            }

            .offset-md-11 {
                margin-left: 91.66666667%;
            }

            .g-md-0,
            .gx-md-0 {
                --bs-gutter-x: 0;
            }

            .g-md-0,
            .gy-md-0 {
                --bs-gutter-y: 0;
            }

            .g-md-1,
            .gx-md-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-md-1,
            .gy-md-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-md-2,
            .gx-md-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-md-2,
            .gy-md-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-md-3,
            .gx-md-3 {
                --bs-gutter-x: 1rem;
            }

            .g-md-3,
            .gy-md-3 {
                --bs-gutter-y: 1rem;
            }

            .g-md-4,
            .gx-md-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-md-4,
            .gy-md-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-md-5,
            .gx-md-5 {
                --bs-gutter-x: 2.5rem;
            }

            .g-md-5,
            .gy-md-5 {
                --bs-gutter-y: 2.5rem;
            }

            .g-md-10,
            .gx-md-10 {
                --bs-gutter-x: 6rem;
            }

            .g-md-10,
            .gy-md-10 {
                --bs-gutter-y: 6rem;
            }

            .g-md-15,
            .gx-md-15 {
                --bs-gutter-x: 9rem;
            }

            .g-md-15,
            .gy-md-15 {
                --bs-gutter-y: 9rem;
            }
        }

        @media (min-width: 992px) {
            .col-lg {
                flex: 1 0 0%;
            }

            .row-cols-lg-auto>* {
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-lg-1>* {
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-lg-2>* {
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-lg-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-lg-4>* {
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-lg-5>* {
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-lg-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-lg-auto {
                flex: 0 0 auto;
                width: auto;
            }

            .col-lg-1 {
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-lg-2 {
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-lg-3 {
                flex: 0 0 auto;
                width: 25%;
            }

            .col-lg-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-lg-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-lg-6 {
                flex: 0 0 auto;
                width: 50%;
            }

            .col-lg-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-lg-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-lg-9 {
                flex: 0 0 auto;
                width: 75%;
            }

            .col-lg-10 {
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-lg-11 {
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-lg-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-lg-0 {
                margin-left: 0;
            }

            .offset-lg-1 {
                margin-left: 8.33333333%;
            }

            .offset-lg-2 {
                margin-left: 16.66666667%;
            }

            .offset-lg-3 {
                margin-left: 25%;
            }

            .offset-lg-4 {
                margin-left: 33.33333333%;
            }

            .offset-lg-5 {
                margin-left: 41.66666667%;
            }

            .offset-lg-6 {
                margin-left: 50%;
            }

            .offset-lg-7 {
                margin-left: 58.33333333%;
            }

            .offset-lg-8 {
                margin-left: 66.66666667%;
            }

            .offset-lg-9 {
                margin-left: 75%;
            }

            .offset-lg-10 {
                margin-left: 83.33333333%;
            }

            .offset-lg-11 {
                margin-left: 91.66666667%;
            }

            .g-lg-0,
            .gx-lg-0 {
                --bs-gutter-x: 0;
            }

            .g-lg-0,
            .gy-lg-0 {
                --bs-gutter-y: 0;
            }

            .g-lg-1,
            .gx-lg-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-lg-1,
            .gy-lg-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-lg-2,
            .gx-lg-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-lg-2,
            .gy-lg-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-lg-3,
            .gx-lg-3 {
                --bs-gutter-x: 1rem;
            }

            .g-lg-3,
            .gy-lg-3 {
                --bs-gutter-y: 1rem;
            }

            .g-lg-4,
            .gx-lg-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-lg-4,
            .gy-lg-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-lg-5,
            .gx-lg-5 {
                --bs-gutter-x: 2.5rem;
            }

            .g-lg-5,
            .gy-lg-5 {
                --bs-gutter-y: 2.5rem;
            }

            .g-lg-10,
            .gx-lg-10 {
                --bs-gutter-x: 6rem;
            }

            .g-lg-10,
            .gy-lg-10 {
                --bs-gutter-y: 6rem;
            }

            .g-lg-15,
            .gx-lg-15 {
                --bs-gutter-x: 9rem;
            }

            .g-lg-15,
            .gy-lg-15 {
                --bs-gutter-y: 9rem;
            }
        }

        @media (min-width: 1200px) {
            .col-xl {
                flex: 1 0 0%;
            }

            .row-cols-xl-auto>* {
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-xl-1>* {
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-xl-2>* {
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-xl-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-xl-4>* {
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-xl-5>* {
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-xl-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-xl-auto {
                flex: 0 0 auto;
                width: auto;
            }

            .col-xl-1 {
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-xl-2 {
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-xl-3 {
                flex: 0 0 auto;
                width: 25%;
            }

            .col-xl-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-xl-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-xl-6 {
                flex: 0 0 auto;
                width: 50%;
            }

            .col-xl-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-xl-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-xl-9 {
                flex: 0 0 auto;
                width: 75%;
            }

            .col-xl-10 {
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-xl-11 {
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-xl-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-xl-0 {
                margin-left: 0;
            }

            .offset-xl-1 {
                margin-left: 8.33333333%;
            }

            .offset-xl-2 {
                margin-left: 16.66666667%;
            }

            .offset-xl-3 {
                margin-left: 25%;
            }

            .offset-xl-4 {
                margin-left: 33.33333333%;
            }

            .offset-xl-5 {
                margin-left: 41.66666667%;
            }

            .offset-xl-6 {
                margin-left: 50%;
            }

            .offset-xl-7 {
                margin-left: 58.33333333%;
            }

            .offset-xl-8 {
                margin-left: 66.66666667%;
            }

            .offset-xl-9 {
                margin-left: 75%;
            }

            .offset-xl-10 {
                margin-left: 83.33333333%;
            }

            .offset-xl-11 {
                margin-left: 91.66666667%;
            }

            .g-xl-0,
            .gx-xl-0 {
                --bs-gutter-x: 0;
            }

            .g-xl-0,
            .gy-xl-0 {
                --bs-gutter-y: 0;
            }

            .g-xl-1,
            .gx-xl-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-xl-1,
            .gy-xl-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-xl-2,
            .gx-xl-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-xl-2,
            .gy-xl-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-xl-3,
            .gx-xl-3 {
                --bs-gutter-x: 1rem;
            }

            .g-xl-3,
            .gy-xl-3 {
                --bs-gutter-y: 1rem;
            }

            .g-xl-4,
            .gx-xl-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-xl-4,
            .gy-xl-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-xl-5,
            .gx-xl-5 {
                --bs-gutter-x: 2.5rem;
            }

            .g-xl-5,
            .gy-xl-5 {
                --bs-gutter-y: 2.5rem;
            }

            .g-xl-10,
            .gx-xl-10 {
                --bs-gutter-x: 6rem;
            }

            .g-xl-10,
            .gy-xl-10 {
                --bs-gutter-y: 6rem;
            }

            .g-xl-15,
            .gx-xl-15 {
                --bs-gutter-x: 9rem;
            }

            .g-xl-15,
            .gy-xl-15 {
                --bs-gutter-y: 9rem;
            }
        }

        @media (min-width: 1500px) {
            .col-xxl {
                flex: 1 0 0%;
            }

            .row-cols-xxl-auto>* {
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-xxl-1>* {
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-xxl-2>* {
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-xxl-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-xxl-4>* {
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-xxl-5>* {
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-xxl-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-xxl-auto {
                flex: 0 0 auto;
                width: auto;
            }

            .col-xxl-1 {
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-xxl-2 {
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-xxl-3 {
                flex: 0 0 auto;
                width: 25%;
            }

            .col-xxl-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-xxl-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-xxl-6 {
                flex: 0 0 auto;
                width: 50%;
            }

            .col-xxl-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-xxl-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-xxl-9 {
                flex: 0 0 auto;
                width: 75%;
            }

            .col-xxl-10 {
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-xxl-11 {
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-xxl-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-xxl-0 {
                margin-left: 0;
            }

            .offset-xxl-1 {
                margin-left: 8.33333333%;
            }

            .offset-xxl-2 {
                margin-left: 16.66666667%;
            }

            .offset-xxl-3 {
                margin-left: 25%;
            }

            .offset-xxl-4 {
                margin-left: 33.33333333%;
            }

            .offset-xxl-5 {
                margin-left: 41.66666667%;
            }

            .offset-xxl-6 {
                margin-left: 50%;
            }

            .offset-xxl-7 {
                margin-left: 58.33333333%;
            }

            .offset-xxl-8 {
                margin-left: 66.66666667%;
            }

            .offset-xxl-9 {
                margin-left: 75%;
            }

            .offset-xxl-10 {
                margin-left: 83.33333333%;
            }

            .offset-xxl-11 {
                margin-left: 91.66666667%;
            }

            .g-xxl-0,
            .gx-xxl-0 {
                --bs-gutter-x: 0;
            }

            .g-xxl-0,
            .gy-xxl-0 {
                --bs-gutter-y: 0;
            }

            .g-xxl-1,
            .gx-xxl-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-xxl-1,
            .gy-xxl-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-xxl-2,
            .gx-xxl-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-xxl-2,
            .gy-xxl-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-xxl-3,
            .gx-xxl-3 {
                --bs-gutter-x: 1rem;
            }

            .g-xxl-3,
            .gy-xxl-3 {
                --bs-gutter-y: 1rem;
            }

            .g-xxl-4,
            .gx-xxl-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-xxl-4,
            .gy-xxl-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-xxl-5,
            .gx-xxl-5 {
                --bs-gutter-x: 2.5rem;
            }

            .g-xxl-5,
            .gy-xxl-5 {
                --bs-gutter-y: 2.5rem;
            }

            .g-xxl-10,
            .gx-xxl-10 {
                --bs-gutter-x: 6rem;
            }

            .g-xxl-10,
            .gy-xxl-10 {
                --bs-gutter-y: 6rem;
            }

            .g-xxl-15,
            .gx-xxl-15 {
                --bs-gutter-x: 9rem;
            }

            .g-xxl-15,
            .gy-xxl-15 {
                --bs-gutter-y: 9rem;
            }
        }

        .table,
        .dataTable-table {
            --bs-table-bg: transparent;
            --bs-table-accent-bg: transparent;
            --bs-table-striped-color: #69707a;
            --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
            --bs-table-active-color: #69707a;
            --bs-table-active-bg: rgba(0, 0, 0, 0.1);
            --bs-table-hover-color: #69707a;
            --bs-table-hover-bg: rgba(224, 229, 236, 0.25);
            width: 100%;
            margin-bottom: 1rem;
            color: #69707a;
            vertical-align: top;
            border-color: #e0e5ec;
        }

        .table> :not(caption)>*>*,
        .dataTable-table> :not(caption)>*>* {
            padding: 0.75rem 0.75rem;
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }

        .table>tbody,
        .dataTable-table>tbody {
            vertical-align: inherit;
        }

        .table>thead,
        .dataTable-table>thead {
            vertical-align: bottom;
        }

        .table> :not(:first-child),
        .dataTable-table> :not(:first-child) {
            border-top: 2px solid currentColor;
        }

        .caption-top {
            caption-side: top;
        }

        .table-sm> :not(caption)>*>* {
            padding: 0.25rem 0.25rem;
        }

        .table-bordered> :not(caption)>*,
        .dataTable-table> :not(caption)>* {
            border-width: 1px 0;
        }

        .table-bordered> :not(caption)>*>*,
        .dataTable-table> :not(caption)>*>* {
            border-width: 0 1px;
        }

        .table-borderless> :not(caption)>*>* {
            border-bottom-width: 0;
        }

        .table-borderless> :not(:first-child) {
            border-top-width: 0;
        }

        .table-striped>tbody>tr:nth-of-type(odd)>* {
            --bs-table-accent-bg: var(--bs-table-striped-bg);
            color: var(--bs-table-striped-color);
        }

        .table-active {
            --bs-table-accent-bg: var(--bs-table-active-bg);
            color: var(--bs-table-active-color);
        }

        .table-hover>tbody>tr:hover>*,
        .dataTable-table>tbody>tr:hover>* {
            --bs-table-accent-bg: var(--bs-table-hover-bg);
            color: var(--bs-table-hover-color);
        }

        .table-primary {
            --bs-table-bg: #ccdffc;
            --bs-table-striped-bg: #c2d4ef;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #b8c9e3;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bdcee9;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #b8c9e3;
        }

        .table-secondary {
            --bs-table-bg: #e1ccf4;
            --bs-table-striped-bg: #d6c2e8;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #cbb8dc;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #d0bde2;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #cbb8dc;
        }

        .table-success {
            --bs-table-bg: #cceee1;
            --bs-table-striped-bg: #c2e2d6;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #b8d6cb;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bddcd0;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #b8d6cb;
        }

        .table-info {
            --bs-table-bg: #ccf5f7;
            --bs-table-striped-bg: #c2e9eb;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #b8ddde;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bde3e4;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #b8ddde;
        }

        .table-warning {
            --bs-table-bg: #fdeccc;
            --bs-table-striped-bg: #f0e0c2;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #e4d4b8;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #eadabd;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #e4d4b8;
        }

        .table-danger {
            --bs-table-bg: #fad0cc;
            --bs-table-striped-bg: #eec6c2;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #e1bbb8;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #e7c0bd;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #e1bbb8;
        }

        .table-light {
            --bs-table-bg: #f2f6fc;
            --bs-table-striped-bg: #e6eaef;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #dadde3;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #e0e4e9;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #dadde3;
        }

        .table-dark {
            --bs-table-bg: #212832;
            --bs-table-striped-bg: #2c333c;
            --bs-table-striped-color: #fff;
            --bs-table-active-bg: #373e47;
            --bs-table-active-color: #fff;
            --bs-table-hover-bg: #323841;
            --bs-table-hover-color: #fff;
            color: #fff;
            border-color: #373e47;
        }

        .table-responsive,
        .dataTable-wrapper .dataTable-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 1499.98px) {
            .table-responsive-xxl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        .form-label {
            margin-bottom: 0.5rem;
        }

        .col-form-label {
            padding-top: calc(0.875rem + 1px);
            padding-bottom: calc(0.875rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1;
        }

        .col-form-label-lg {
            padding-top: calc(1.125rem + 1px);
            padding-bottom: calc(1.125rem + 1px);
            font-size: 1rem;
        }

        .col-form-label-sm {
            padding-top: calc(0.5rem + 1px);
            padding-bottom: calc(0.5rem + 1px);
            font-size: 0.75rem;
        }

        .form-text {
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #a7aeb8;
        }

        .text-11 {
            font-size: .6875rem !important;
        }

        .form-control,
        .dataTable-input {
            display: block;
            width: 100%;
            padding: 0.875rem 1.125rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #c5ccd6;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.35rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {

            .form-control,
            .dataTable-input {
                transition: none;
            }
        }

        .form-control[type=file],
        [type=file].dataTable-input {
            overflow: hidden;
        }

        .form-control[type=file]:not(:disabled):not([readonly]),
        [type=file].dataTable-input:not(:disabled):not([readonly]) {
            cursor: pointer;
        }

        .form-control:focus,
        .dataTable-input:focus {
            color: #69707a;
            background-color: #fff;
            border-color: transparent;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(0, 97, 242, 0.25);
        }

        .form-control::-webkit-date-and-time-value,
        .dataTable-input::-webkit-date-and-time-value {
            height: 1em;
        }

        .form-control::-moz-placeholder,
        .dataTable-input::-moz-placeholder {
            color: #a7aeb8;
            opacity: 1;
        }

        .form-control:-ms-input-placeholder,
        .dataTable-input:-ms-input-placeholder {
            color: #a7aeb8;
            opacity: 1;
        }

        .form-control::placeholder,
        .dataTable-input::placeholder {
            color: #a7aeb8;
            opacity: 1;
        }

        .form-control:disabled,
        .dataTable-input:disabled,
        .form-control[readonly],
        [readonly].dataTable-input {
            background-color: #e0e5ec;
            opacity: 1;
        }

        .form-control::-webkit-file-upload-button,
        .dataTable-input::-webkit-file-upload-button {
            padding: 0.875rem 1.125rem;
            margin: -0.875rem -1.125rem;
            -webkit-margin-end: 1.125rem;
            margin-inline-end: 1.125rem;
            color: #69707a;
            background-color: #fff;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control::file-selector-button,
        .dataTable-input::file-selector-button {
            padding: 0.875rem 1.125rem;
            margin: -0.875rem -1.125rem;
            -webkit-margin-end: 1.125rem;
            margin-inline-end: 1.125rem;
            color: #69707a;
            background-color: #fff;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {

            .form-control::-webkit-file-upload-button,
            .dataTable-input::-webkit-file-upload-button {
                -webkit-transition: none;
                transition: none;
            }

            .form-control::file-selector-button,
            .dataTable-input::file-selector-button {
                transition: none;
            }
        }

        .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button,
        .dataTable-input:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
            background-color: #f2f2f2;
        }

        .form-control:hover:not(:disabled):not([readonly])::file-selector-button,
        .dataTable-input:hover:not(:disabled):not([readonly])::file-selector-button {
            background-color: #f2f2f2;
        }

        .form-control::-webkit-file-upload-button,
        .dataTable-input::-webkit-file-upload-button {
            padding: 0.875rem 1.125rem;
            margin: -0.875rem -1.125rem;
            -webkit-margin-end: 1.125rem;
            margin-inline-end: 1.125rem;
            color: #69707a;
            background-color: #fff;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {

            .form-control::-webkit-file-upload-button,
            .dataTable-input::-webkit-file-upload-button {
                -webkit-transition: none;
                transition: none;
            }
        }

        .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button,
        .dataTable-input:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
            background-color: #f2f2f2;
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding: 0.875rem 0;
            margin-bottom: 0;
            line-height: 1;
            color: #69707a;
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0;
        }

        .form-control-plaintext.form-control-sm,
        .form-control-plaintext.form-control-lg {
            padding-right: 0;
            padding-left: 0;
        }

        .form-control-sm {
            min-height: calc(1em + 1rem + 2px);
            padding: 0.5rem 0.75rem;
            font-size: 0.75rem;
            border-radius: 0.25rem;
        }

        .form-control-sm::-webkit-file-upload-button {
            padding: 0.5rem 0.75rem;
            margin: -0.5rem -0.75rem;
            -webkit-margin-end: 0.75rem;
            margin-inline-end: 0.75rem;
        }

        .form-control-sm::file-selector-button {
            padding: 0.5rem 0.75rem;
            margin: -0.5rem -0.75rem;
            -webkit-margin-end: 0.75rem;
            margin-inline-end: 0.75rem;
        }

        .form-control-sm::-webkit-file-upload-button {
            padding: 0.5rem 0.75rem;
            margin: -0.5rem -0.75rem;
            -webkit-margin-end: 0.75rem;
            margin-inline-end: 0.75rem;
        }

        .form-control-lg {
            min-height: calc(1em + 2.25rem + 2px);
            padding: 1.125rem 1.5rem;
            font-size: 1rem;
            border-radius: 0.5rem;
        }

        .form-control-lg::-webkit-file-upload-button {
            padding: 1.125rem 1.5rem;
            margin: -1.125rem -1.5rem;
            -webkit-margin-end: 1.5rem;
            margin-inline-end: 1.5rem;
        }

        .form-control-lg::file-selector-button {
            padding: 1.125rem 1.5rem;
            margin: -1.125rem -1.5rem;
            -webkit-margin-end: 1.5rem;
            margin-inline-end: 1.5rem;
        }

        .form-control-lg::-webkit-file-upload-button {
            padding: 1.125rem 1.5rem;
            margin: -1.125rem -1.5rem;
            -webkit-margin-end: 1.5rem;
            margin-inline-end: 1.5rem;
        }

        textarea.form-control,
        textarea.dataTable-input {
            min-height: calc(1em + 1.75rem + 2px);
        }

        textarea.form-control-sm {
            min-height: calc(1em + 1rem + 2px);
        }

        textarea.form-control-lg {
            min-height: calc(1em + 2.25rem + 2px);
        }

        .form-control-color {
            width: 3rem;
            height: auto;
            padding: 0.875rem;
        }

        .form-control-color:not(:disabled):not([readonly]) {
            cursor: pointer;
        }

        .form-control-color::-moz-color-swatch {
            height: 1em;
            border-radius: 0.35rem;
        }

        .form-control-color::-webkit-color-swatch {
            height: 1em;
            border-radius: 0.35rem;
        }

        .form-select,
        .dataTable-selector {
            display: block;
            width: 100%;
            padding: 0.875rem 3.375rem 0.875rem 1.125rem;
            -moz-padding-start: calc(1.125rem - 3px);
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23363d47' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 1.125rem center;
            background-size: 16px 12px;
            border: 1px solid #c5ccd6;
            border-radius: 0.35rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        @media (prefers-reduced-motion: reduce) {

            .form-select,
            .dataTable-selector {
                transition: none;
            }
        }

        .form-select:focus,
        .dataTable-selector:focus {
            border-color: transparent;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(0, 97, 242, 0.25);
        }

        .form-select[multiple],
        [multiple].dataTable-selector,
        .form-select[size]:not([size="1"]),
        [size].dataTable-selector:not([size="1"]) {
            padding-right: 1.125rem;
            background-image: none;
        }

        .form-select:disabled,
        .dataTable-selector:disabled {
            background-color: #e0e5ec;
        }

        .form-select:-moz-focusring,
        .dataTable-selector:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #69707a;
        }

        .form-select-sm {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0.75rem;
            font-size: 0.75rem;
            border-radius: 0.25rem;
        }

        .form-select-lg {
            padding-top: 1.125rem;
            padding-bottom: 1.125rem;
            padding-left: 1.5rem;
            font-size: 1rem;
            border-radius: 0.5rem;
        }

        .form-check {
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5em;
            margin-bottom: 0.125rem;
        }

        .form-check .form-check-input {
            float: left;
            margin-left: -1.5em;
        }

        .form-check-input {
            width: 1em;
            height: 1em;
            margin-top: 0.25em;
            vertical-align: top;
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            border: 1px solid rgba(0, 0, 0, 0.25);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
        }

        .form-check-input[type=checkbox] {
            border-radius: 0.25em;
        }

        .form-check-input[type=radio] {
            border-radius: 50%;
        }

        .form-check-input:active {
            filter: brightness(90%);
        }

        .form-check-input:focus {
            border-color: transparent;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(0, 97, 242, 0.25);
        }

        .form-check-input:checked {
            background-color: #0061f2;
            border-color: #0061f2;
        }

        .form-check-input:checked[type=checkbox] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
        }

        .form-check-input:checked[type=radio] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
        }

        .form-check-input[type=checkbox]:indeterminate {
            background-color: #0061f2;
            border-color: #0061f2;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
        }

        .form-check-input:disabled {
            pointer-events: none;
            filter: none;
            opacity: 0.5;
        }

        .form-check-input[disabled]~.form-check-label,
        .form-check-input:disabled~.form-check-label {
            opacity: 0.5;
        }

        .form-switch {
            padding-left: 2.5em;
        }

        .form-switch .form-check-input {
            width: 2em;
            margin-left: -2.5em;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
            background-position: left center;
            border-radius: 2em;
            transition: background-position 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-switch .form-check-input {
                transition: none;
            }
        }

        .form-switch .form-check-input:focus {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='transparent'/%3e%3c/svg%3e");
        }

        .form-switch .form-check-input:checked {
            background-position: right center;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
        }

        .form-check-inline {
            display: inline-block;
            margin-right: 1rem;
        }

        .btn-check {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none;
        }

        .btn-check[disabled]+.btn,
        .btn-check:disabled+.btn {
            pointer-events: none;
            filter: none;
            opacity: 0.65;
        }

        .form-range {
            width: 100%;
            height: 1.5rem;
            padding: 0;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .form-range:focus {
            outline: 0;
        }

        .form-range:focus::-webkit-slider-thumb {
            box-shadow: 0 0 0 1px #f2f6fc, 0 0 0 0.25rem rgba(0, 97, 242, 0.25);
        }

        .form-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #f2f6fc, 0 0 0 0.25rem rgba(0, 97, 242, 0.25);
        }

        .form-range::-moz-focus-outer {
            border: 0;
        }

        .form-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -0.25rem;
            background-color: #0061f2;
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            appearance: none;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-range::-webkit-slider-thumb {
                -webkit-transition: none;
                transition: none;
            }
        }

        .form-range::-webkit-slider-thumb:active {
            background-color: #b3d0fb;
        }

        .form-range::-webkit-slider-runnable-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #d4dae3;
            border-color: transparent;
            border-radius: 1rem;
        }

        .form-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #0061f2;
            border: 0;
            border-radius: 1rem;
            -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -moz-appearance: none;
            appearance: none;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-range::-moz-range-thumb {
                -moz-transition: none;
                transition: none;
            }
        }

        .form-range::-moz-range-thumb:active {
            background-color: #b3d0fb;
        }

        .form-range::-moz-range-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #d4dae3;
            border-color: transparent;
            border-radius: 1rem;
        }

        .form-range:disabled {
            pointer-events: none;
        }

        .form-range:disabled::-webkit-slider-thumb {
            background-color: #a7aeb8;
        }

        .form-range:disabled::-moz-range-thumb {
            background-color: #a7aeb8;
        }

        .form-floating {
            position: relative;
        }

        .form-floating>.form-control,
        .form-floating>.dataTable-input,
        .form-floating>.form-select,
        .form-floating>.dataTable-selector {
            height: calc(3.5rem + 2px);
            line-height: 1.25;
        }

        .form-floating>label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            padding: 1rem 1.125rem;
            pointer-events: none;
            border: 1px solid transparent;
            transform-origin: 0 0;
            transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-floating>label {
                transition: none;
            }
        }

        .form-floating>.form-control,
        .form-floating>.dataTable-input {
            padding: 1rem 1.125rem;
        }

        .form-floating>.form-control::-moz-placeholder,
        .form-floating>.dataTable-input::-moz-placeholder {
            color: transparent;
        }

        .form-floating>.form-control:-ms-input-placeholder,
        .form-floating>.dataTable-input:-ms-input-placeholder {
            color: transparent;
        }

        .form-floating>.form-control::placeholder,
        .form-floating>.dataTable-input::placeholder {
            color: transparent;
        }

        .form-floating>.form-control:not(:-moz-placeholder-shown),
        .form-floating>.dataTable-input:not(:-moz-placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-control:not(:-ms-input-placeholder),
        .form-floating>.dataTable-input:not(:-ms-input-placeholder) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-control:focus,
        .form-floating>.dataTable-input:focus,
        .form-floating>.form-control:not(:placeholder-shown),
        .form-floating>.dataTable-input:not(:placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-control:-webkit-autofill,
        .form-floating>.dataTable-input:-webkit-autofill {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-select,
        .form-floating>.dataTable-selector {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-control:not(:-moz-placeholder-shown)~label,
        .form-floating>.dataTable-input:not(:-moz-placeholder-shown)~label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }

        .form-floating>.form-control:not(:-ms-input-placeholder)~label,
        .form-floating>.dataTable-input:not(:-ms-input-placeholder)~label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }

        .form-floating>.form-control:focus~label,
        .form-floating>.dataTable-input:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label,
        .form-floating>.dataTable-input:not(:placeholder-shown)~label,
        .form-floating>.form-select~label,
        .form-floating>.dataTable-selector~label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }

        .form-floating>.form-control:-webkit-autofill~label,
        .form-floating>.dataTable-input:-webkit-autofill~label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }

        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%;
        }

        .input-group>.form-control,
        .input-group>.dataTable-input,
        .input-group>.form-select,
        .input-group>.dataTable-selector {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
        }

        .input-group>.form-control:focus,
        .input-group>.dataTable-input:focus,
        .input-group>.form-select:focus,
        .input-group>.dataTable-selector:focus {
            z-index: 3;
        }

        .input-group .btn {
            position: relative;
            z-index: 2;
        }

        .input-group .btn:focus {
            z-index: 3;
        }

        .input-group-text {
            display: flex;
            align-items: center;
            padding: 0.875rem 1.125rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            text-align: center;
            white-space: nowrap;
            background-color: #fff;
            border: 1px solid #c5ccd6;
            border-radius: 0.35rem;
        }

        .input-group-lg>.form-control,
        .input-group-lg>.dataTable-input,
        .input-group-lg>.form-select,
        .input-group-lg>.dataTable-selector,
        .input-group-lg>.input-group-text,
        .input-group-lg>.btn {
            padding: 1.125rem 1.5rem;
            font-size: 1rem;
            border-radius: 0.5rem;
        }

        .input-group-sm>.form-control,
        .input-group-sm>.dataTable-input,
        .input-group-sm>.form-select,
        .input-group-sm>.dataTable-selector,
        .input-group-sm>.input-group-text,
        .input-group-sm>.btn {
            padding: 0.5rem 0.75rem;
            font-size: 0.75rem;
            border-radius: 0.25rem;
        }

        .input-group-lg>.form-select,
        .input-group-lg>.dataTable-selector,
        .input-group-sm>.form-select,
        .input-group-sm>.dataTable-selector {
            padding-right: 4.5rem;
        }

        .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
        .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group.has-validation> :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu),
        .input-group.has-validation>.dropdown-toggle:nth-last-child(n+4) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-left: -1px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #00ac69;
        }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: 0.1rem;
            font-size: 0.875rem;
            color: #fff;
            background-color: rgba(0, 172, 105, 0.9);
            border-radius: 0.35rem;
        }

        .was-validated :valid~.valid-feedback,
        .was-validated :valid~.valid-tooltip,
        .is-valid~.valid-feedback,
        .is-valid~.valid-tooltip {
            display: block;
        }

        .was-validated .form-control:valid,
        .was-validated .dataTable-input:valid,
        .form-control.is-valid,
        .is-valid.dataTable-input {
            border-color: #00ac69;
            padding-right: calc(1em + 1.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2300ac69' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.25em + 0.4375rem) center;
            background-size: calc(0.5em + 0.875rem) calc(0.5em + 0.875rem);
        }

        .was-validated .form-control:valid:focus,
        .was-validated .dataTable-input:valid:focus,
        .form-control.is-valid:focus,
        .is-valid.dataTable-input:focus {
            border-color: #00ac69;
            box-shadow: 0 0 0 0.25rem rgba(0, 172, 105, 0.25);
        }

        .was-validated textarea.form-control:valid,
        .was-validated textarea.dataTable-input:valid,
        textarea.form-control.is-valid,
        textarea.is-valid.dataTable-input {
            padding-right: calc(1em + 1.75rem);
            background-position: top calc(0.25em + 0.4375rem) right calc(0.25em + 0.4375rem);
        }

        .was-validated .form-select:valid,
        .was-validated .dataTable-selector:valid,
        .form-select.is-valid,
        .is-valid.dataTable-selector {
            border-color: #00ac69;
        }

        .was-validated .form-select:valid:not([multiple]):not([size]),
        .was-validated .dataTable-selector:valid:not([multiple]):not([size]),
        .was-validated .form-select:valid:not([multiple])[size="1"],
        .was-validated .dataTable-selector:valid:not([multiple])[size="1"],
        .form-select.is-valid:not([multiple]):not([size]),
        .is-valid.dataTable-selector:not([multiple]):not([size]),
        .form-select.is-valid:not([multiple])[size="1"],
        .is-valid.dataTable-selector:not([multiple])[size="1"] {
            padding-right: 6.1875rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23363d47' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2300ac69' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-position: right 1.125rem center, center right 3.375rem;
            background-size: 16px 12px, calc(0.5em + 0.875rem) calc(0.5em + 0.875rem);
        }

        .was-validated .form-select:valid:focus,
        .was-validated .dataTable-selector:valid:focus,
        .form-select.is-valid:focus,
        .is-valid.dataTable-selector:focus {
            border-color: #00ac69;
            box-shadow: 0 0 0 0.25rem rgba(0, 172, 105, 0.25);
        }

        .was-validated .form-check-input:valid,
        .form-check-input.is-valid {
            border-color: #00ac69;
        }

        .was-validated .form-check-input:valid:checked,
        .form-check-input.is-valid:checked {
            background-color: #00ac69;
        }

        .was-validated .form-check-input:valid:focus,
        .form-check-input.is-valid:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 172, 105, 0.25);
        }

        .was-validated .form-check-input:valid~.form-check-label,
        .form-check-input.is-valid~.form-check-label {
            color: #00ac69;
        }

        .form-check-inline .form-check-input~.valid-feedback {
            margin-left: 0.5em;
        }

        .was-validated .input-group .form-control:valid,
        .was-validated .input-group .dataTable-input:valid,
        .input-group .form-control.is-valid,
        .input-group .is-valid.dataTable-input,
        .was-validated .input-group .form-select:valid,
        .was-validated .input-group .dataTable-selector:valid,
        .input-group .form-select.is-valid,
        .input-group .is-valid.dataTable-selector {
            z-index: 1;
        }

        .was-validated .input-group .form-control:valid:focus,
        .was-validated .input-group .dataTable-input:valid:focus,
        .input-group .form-control.is-valid:focus,
        .input-group .is-valid.dataTable-input:focus,
        .was-validated .input-group .form-select:valid:focus,
        .was-validated .input-group .dataTable-selector:valid:focus,
        .input-group .form-select.is-valid:focus,
        .input-group .is-valid.dataTable-selector:focus {
            z-index: 3;
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #e81500;
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: 0.1rem;
            font-size: 0.875rem;
            color: #fff;
            background-color: rgba(232, 21, 0, 0.9);
            border-radius: 0.35rem;
        }

        .was-validated :invalid~.invalid-feedback,
        .was-validated :invalid~.invalid-tooltip,
        .is-invalid~.invalid-feedback,
        .is-invalid~.invalid-tooltip {
            display: block;
        }

        .was-validated .form-control:invalid,
        .was-validated .dataTable-input:invalid,
        .form-control.is-invalid,
        .is-invalid.dataTable-input {
            border-color: #e81500;
            padding-right: calc(1em + 1.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23e81500'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23e81500' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.25em + 0.4375rem) center;
            background-size: calc(0.5em + 0.875rem) calc(0.5em + 0.875rem);
        }

        .was-validated .form-control:invalid:focus,
        .was-validated .dataTable-input:invalid:focus,
        .form-control.is-invalid:focus,
        .is-invalid.dataTable-input:focus {
            border-color: #e81500;
            box-shadow: 0 0 0 0.25rem rgba(232, 21, 0, 0.25);
        }

        .was-validated textarea.form-control:invalid,
        .was-validated textarea.dataTable-input:invalid,
        textarea.form-control.is-invalid,
        textarea.is-invalid.dataTable-input {
            padding-right: calc(1em + 1.75rem);
            background-position: top calc(0.25em + 0.4375rem) right calc(0.25em + 0.4375rem);
        }

        .was-validated .form-select:invalid,
        .was-validated .dataTable-selector:invalid,
        .form-select.is-invalid,
        .is-invalid.dataTable-selector {
            border-color: #e81500;
        }

        .was-validated .form-select:invalid:not([multiple]):not([size]),
        .was-validated .dataTable-selector:invalid:not([multiple]):not([size]),
        .was-validated .form-select:invalid:not([multiple])[size="1"],
        .was-validated .dataTable-selector:invalid:not([multiple])[size="1"],
        .form-select.is-invalid:not([multiple]):not([size]),
        .is-invalid.dataTable-selector:not([multiple]):not([size]),
        .form-select.is-invalid:not([multiple])[size="1"],
        .is-invalid.dataTable-selector:not([multiple])[size="1"] {
            padding-right: 6.1875rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23363d47' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23e81500'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23e81500' stroke='none'/%3e%3c/svg%3e");
            background-position: right 1.125rem center, center right 3.375rem;
            background-size: 16px 12px, calc(0.5em + 0.875rem) calc(0.5em + 0.875rem);
        }

        .was-validated .form-select:invalid:focus,
        .was-validated .dataTable-selector:invalid:focus,
        .form-select.is-invalid:focus,
        .is-invalid.dataTable-selector:focus {
            border-color: #e81500;
            box-shadow: 0 0 0 0.25rem rgba(232, 21, 0, 0.25);
        }

        .was-validated .form-check-input:invalid,
        .form-check-input.is-invalid {
            border-color: #e81500;
        }

        .was-validated .form-check-input:invalid:checked,
        .form-check-input.is-invalid:checked {
            background-color: #e81500;
        }

        .was-validated .form-check-input:invalid:focus,
        .form-check-input.is-invalid:focus {
            box-shadow: 0 0 0 0.25rem rgba(232, 21, 0, 0.25);
        }

        .was-validated .form-check-input:invalid~.form-check-label,
        .form-check-input.is-invalid~.form-check-label {
            color: #e81500;
        }

        .form-check-inline .form-check-input~.invalid-feedback {
            margin-left: 0.5em;
        }

        .was-validated .input-group .form-control:invalid,
        .was-validated .input-group .dataTable-input:invalid,
        .input-group .form-control.is-invalid,
        .input-group .is-invalid.dataTable-input,
        .was-validated .input-group .form-select:invalid,
        .was-validated .input-group .dataTable-selector:invalid,
        .input-group .form-select.is-invalid,
        .input-group .is-invalid.dataTable-selector {
            z-index: 2;
        }

        .was-validated .input-group .form-control:invalid:focus,
        .was-validated .input-group .dataTable-input:invalid:focus,
        .input-group .form-control.is-invalid:focus,
        .input-group .is-invalid.dataTable-input:focus,
        .was-validated .input-group .form-select:invalid:focus,
        .was-validated .input-group .dataTable-selector:invalid:focus,
        .input-group .form-select.is-invalid:focus,
        .input-group .is-invalid.dataTable-selector:focus {
            z-index: 3;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.875rem 1.125rem;
            font-size: 0.875rem;
            border-radius: 0.35rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .btn {
                transition: none;
            }
        }

        .btn:hover {
            color: #69707a;
            text-decoration: none;
        }

        .btn-check:focus+.btn,
        .btn:focus {
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(0, 97, 242, 0.25);
        }

        .btn:disabled,
        .btn.disabled,
        fieldset:disabled .btn {
            pointer-events: none;
            opacity: 0.65;
        }

        .btn-primary {
            color: #fff;
            background-color: #0061f2;
            border-color: #0061f2;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0052ce;
            border-color: #004ec2;
        }

        .btn-check:focus+.btn-primary,
        .btn-primary:focus {
            color: #fff;
            background-color: #0052ce;
            border-color: #004ec2;
            box-shadow: 0 0 0 0.25rem rgba(38, 121, 244, 0.5);
        }

        .btn-check:checked+.btn-primary,
        .btn-check:active+.btn-primary,
        .btn-primary:active,
        .btn-primary.active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #004ec2;
            border-color: #0049b6;
        }

        .btn-check:checked+.btn-primary:focus,
        .btn-check:active+.btn-primary:focus,
        .btn-primary:active:focus,
        .btn-primary.active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(38, 121, 244, 0.5);
        }

        .btn-primary:disabled,
        .btn-primary.disabled {
            color: #fff;
            background-color: #0061f2;
            border-color: #0061f2;
        }

        .btn-secondary {
            color: #fff;
            background-color: #6900c7;
            border-color: #6900c7;
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #5900a9;
            border-color: #54009f;
        }

        .btn-check:focus+.btn-secondary,
        .btn-secondary:focus {
            color: #fff;
            background-color: #5900a9;
            border-color: #54009f;
            box-shadow: 0 0 0 0.25rem rgba(128, 38, 207, 0.5);
        }

        .btn-check:checked+.btn-secondary,
        .btn-check:active+.btn-secondary,
        .btn-secondary:active,
        .btn-secondary.active,
        .show>.btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: #54009f;
            border-color: #4f0095;
        }

        .btn-check:checked+.btn-secondary:focus,
        .btn-check:active+.btn-secondary:focus,
        .btn-secondary:active:focus,
        .btn-secondary.active:focus,
        .show>.btn-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(128, 38, 207, 0.5);
        }

        .btn-secondary:disabled,
        .btn-secondary.disabled {
            color: #fff;
            background-color: #6900c7;
            border-color: #6900c7;
        }

        .btn-success {
            color: #fff;
            background-color: #00ac69;
            border-color: #00ac69;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #009259;
            border-color: #008a54;
        }

        .btn-check:focus+.btn-success,
        .btn-success:focus {
            color: #fff;
            background-color: #009259;
            border-color: #008a54;
            box-shadow: 0 0 0 0.25rem rgba(38, 184, 128, 0.5);
        }

        .btn-check:checked+.btn-success,
        .btn-check:active+.btn-success,
        .btn-success:active,
        .btn-success.active,
        .show>.btn-success.dropdown-toggle {
            color: #fff;
            background-color: #008a54;
            border-color: #00814f;
        }

        .btn-check:checked+.btn-success:focus,
        .btn-check:active+.btn-success:focus,
        .btn-success:active:focus,
        .btn-success.active:focus,
        .show>.btn-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(38, 184, 128, 0.5);
        }

        .btn-success:disabled,
        .btn-success.disabled {
            color: #fff;
            background-color: #00ac69;
            border-color: #00ac69;
        }

        .btn-info {
            color: #fff;
            background-color: #00cfd5;
            border-color: #00cfd5;
        }

        .btn-info:hover {
            color: #fff;
            background-color: #00b0b5;
            border-color: #00a6aa;
        }

        .btn-check:focus+.btn-info,
        .btn-info:focus {
            color: #fff;
            background-color: #00b0b5;
            border-color: #00a6aa;
            box-shadow: 0 0 0 0.25rem rgba(38, 214, 219, 0.5);
        }

        .btn-check:checked+.btn-info,
        .btn-check:active+.btn-info,
        .btn-info:active,
        .btn-info.active,
        .show>.btn-info.dropdown-toggle {
            color: #fff;
            background-color: #00a6aa;
            border-color: #009ba0;
        }

        .btn-check:checked+.btn-info:focus,
        .btn-check:active+.btn-info:focus,
        .btn-info:active:focus,
        .btn-info.active:focus,
        .show>.btn-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(38, 214, 219, 0.5);
        }

        .btn-info:disabled,
        .btn-info.disabled {
            color: #fff;
            background-color: #00cfd5;
            border-color: #00cfd5;
        }

        .btn-warning {
            color: #fff;
            background-color: #f4a100;
            border-color: #f4a100;
        }

        .btn-warning:hover {
            color: #fff;
            background-color: #cf8900;
            border-color: #c38100;
        }

        .btn-check:focus+.btn-warning,
        .btn-warning:focus {
            color: #fff;
            background-color: #cf8900;
            border-color: #c38100;
            box-shadow: 0 0 0 0.25rem rgba(246, 175, 38, 0.5);
        }

        .btn-check:checked+.btn-warning,
        .btn-check:active+.btn-warning,
        .btn-warning:active,
        .btn-warning.active,
        .show>.btn-warning.dropdown-toggle {
            color: #fff;
            background-color: #c38100;
            border-color: #b77900;
        }

        .btn-check:checked+.btn-warning:focus,
        .btn-check:active+.btn-warning:focus,
        .btn-warning:active:focus,
        .btn-warning.active:focus,
        .show>.btn-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(246, 175, 38, 0.5);
        }

        .btn-warning:disabled,
        .btn-warning.disabled {
            color: #fff;
            background-color: #f4a100;
            border-color: #f4a100;
        }

        .btn-danger {
            color: #fff;
            background-color: #e81500;
            border-color: #e81500;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c51200;
            border-color: #ba1100;
        }

        .btn-check:focus+.btn-danger,
        .btn-danger:focus {
            color: #fff;
            background-color: #c51200;
            border-color: #ba1100;
            box-shadow: 0 0 0 0.25rem rgba(235, 56, 38, 0.5);
        }

        .btn-check:checked+.btn-danger,
        .btn-check:active+.btn-danger,
        .btn-danger:active,
        .btn-danger.active,
        .show>.btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #ba1100;
            border-color: #ae1000;
        }

        .btn-check:checked+.btn-danger:focus,
        .btn-check:active+.btn-danger:focus,
        .btn-danger:active:focus,
        .btn-danger.active:focus,
        .show>.btn-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(235, 56, 38, 0.5);
        }

        .btn-danger:disabled,
        .btn-danger.disabled {
            color: #fff;
            background-color: #e81500;
            border-color: #e81500;
        }

        .btn-light {
            color: #000;
            background-color: #f2f6fc;
            border-color: #f2f6fc;
        }

        .btn-light:hover {
            color: #000;
            background-color: #f4f7fc;
            border-color: #f3f7fc;
        }

        .btn-check:focus+.btn-light,
        .btn-light:focus {
            color: #000;
            background-color: #f4f7fc;
            border-color: #f3f7fc;
            box-shadow: 0 0 0 0.25rem rgba(206, 209, 214, 0.5);
        }

        .btn-check:checked+.btn-light,
        .btn-check:active+.btn-light,
        .btn-light:active,
        .btn-light.active,
        .show>.btn-light.dropdown-toggle {
            color: #000;
            background-color: #f5f8fd;
            border-color: #f3f7fc;
        }

        .btn-check:checked+.btn-light:focus,
        .btn-check:active+.btn-light:focus,
        .btn-light:active:focus,
        .btn-light.active:focus,
        .show>.btn-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(206, 209, 214, 0.5);
        }

        .btn-light:disabled,
        .btn-light.disabled {
            color: #000;
            background-color: #f2f6fc;
            border-color: #f2f6fc;
        }

        .btn-dark {
            color: #fff;
            background-color: #212832;
            border-color: #212832;
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #1c222b;
            border-color: #1a2028;
        }

        .btn-check:focus+.btn-dark,
        .btn-dark:focus {
            color: #fff;
            background-color: #1c222b;
            border-color: #1a2028;
            box-shadow: 0 0 0 0.25rem rgba(66, 72, 81, 0.5);
        }

        .btn-check:checked+.btn-dark,
        .btn-check:active+.btn-dark,
        .btn-dark:active,
        .btn-dark.active,
        .show>.btn-dark.dropdown-toggle {
            color: #fff;
            background-color: #1a2028;
            border-color: #191e26;
        }

        .btn-check:checked+.btn-dark:focus,
        .btn-check:active+.btn-dark:focus,
        .btn-dark:active:focus,
        .btn-dark.active:focus,
        .show>.btn-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(66, 72, 81, 0.5);
        }

        .btn-dark:disabled,
        .btn-dark.disabled {
            color: #fff;
            background-color: #212832;
            border-color: #212832;
        }

        .btn-black {
            color: #fff;
            background-color: #000;
            border-color: #000;
        }

        .btn-black:hover {
            color: #fff;
            background-color: black;
            border-color: black;
        }

        .btn-check:focus+.btn-black,
        .btn-black:focus {
            color: #fff;
            background-color: black;
            border-color: black;
            box-shadow: 0 0 0 0.25rem rgba(38, 38, 38, 0.5);
        }

        .btn-check:checked+.btn-black,
        .btn-check:active+.btn-black,
        .btn-black:active,
        .btn-black.active,
        .show>.btn-black.dropdown-toggle {
            color: #fff;
            background-color: black;
            border-color: black;
        }

        .btn-check:checked+.btn-black:focus,
        .btn-check:active+.btn-black:focus,
        .btn-black:active:focus,
        .btn-black.active:focus,
        .show>.btn-black.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(38, 38, 38, 0.5);
        }

        .btn-black:disabled,
        .btn-black.disabled {
            color: #fff;
            background-color: #000;
            border-color: #000;
        }

        .btn-white {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-white:hover {
            color: #000;
            background-color: white;
            border-color: white;
        }

        .btn-check:focus+.btn-white,
        .btn-white:focus {
            color: #000;
            background-color: white;
            border-color: white;
            box-shadow: 0 0 0 0.25rem rgba(217, 217, 217, 0.5);
        }

        .btn-check:checked+.btn-white,
        .btn-check:active+.btn-white,
        .btn-white:active,
        .btn-white.active,
        .show>.btn-white.dropdown-toggle {
            color: #000;
            background-color: white;
            border-color: white;
        }

        .btn-check:checked+.btn-white:focus,
        .btn-check:active+.btn-white:focus,
        .btn-white:active:focus,
        .btn-white.active:focus,
        .show>.btn-white.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(217, 217, 217, 0.5);
        }

        .btn-white:disabled,
        .btn-white.disabled {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-red {
            color: #fff;
            background-color: #e81500;
            border-color: #e81500;
        }

        .btn-red:hover {
            color: #fff;
            background-color: #c51200;
            border-color: #ba1100;
        }

        .btn-check:focus+.btn-red,
        .btn-red:focus {
            color: #fff;
            background-color: #c51200;
            border-color: #ba1100;
            box-shadow: 0 0 0 0.25rem rgba(235, 56, 38, 0.5);
        }

        .btn-check:checked+.btn-red,
        .btn-check:active+.btn-red,
        .btn-red:active,
        .btn-red.active,
        .show>.btn-red.dropdown-toggle {
            color: #fff;
            background-color: #ba1100;
            border-color: #ae1000;
        }

        .btn-check:checked+.btn-red:focus,
        .btn-check:active+.btn-red:focus,
        .btn-red:active:focus,
        .btn-red.active:focus,
        .show>.btn-red.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(235, 56, 38, 0.5);
        }

        .btn-red:disabled,
        .btn-red.disabled {
            color: #fff;
            background-color: #e81500;
            border-color: #e81500;
        }

        .btn-orange {
            color: #fff;
            background-color: #f76400;
            border-color: #f76400;
        }

        .btn-orange:hover {
            color: #fff;
            background-color: #d25500;
            border-color: #c65000;
        }

        .btn-check:focus+.btn-orange,
        .btn-orange:focus {
            color: #fff;
            background-color: #d25500;
            border-color: #c65000;
            box-shadow: 0 0 0 0.25rem rgba(248, 123, 38, 0.5);
        }

        .btn-check:checked+.btn-orange,
        .btn-check:active+.btn-orange,
        .btn-orange:active,
        .btn-orange.active,
        .show>.btn-orange.dropdown-toggle {
            color: #fff;
            background-color: #c65000;
            border-color: #b94b00;
        }

        .btn-check:checked+.btn-orange:focus,
        .btn-check:active+.btn-orange:focus,
        .btn-orange:active:focus,
        .btn-orange.active:focus,
        .show>.btn-orange.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(248, 123, 38, 0.5);
        }

        .btn-orange:disabled,
        .btn-orange.disabled {
            color: #fff;
            background-color: #f76400;
            border-color: #f76400;
        }

        .btn-yellow {
            color: #fff;
            background-color: #f4a100;
            border-color: #f4a100;
        }

        .btn-yellow:hover {
            color: #fff;
            background-color: #cf8900;
            border-color: #c38100;
        }

        .btn-check:focus+.btn-yellow,
        .btn-yellow:focus {
            color: #fff;
            background-color: #cf8900;
            border-color: #c38100;
            box-shadow: 0 0 0 0.25rem rgba(246, 175, 38, 0.5);
        }

        .btn-check:checked+.btn-yellow,
        .btn-check:active+.btn-yellow,
        .btn-yellow:active,
        .btn-yellow.active,
        .show>.btn-yellow.dropdown-toggle {
            color: #fff;
            background-color: #c38100;
            border-color: #b77900;
        }

        .btn-check:checked+.btn-yellow:focus,
        .btn-check:active+.btn-yellow:focus,
        .btn-yellow:active:focus,
        .btn-yellow.active:focus,
        .show>.btn-yellow.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(246, 175, 38, 0.5);
        }

        .btn-yellow:disabled,
        .btn-yellow.disabled {
            color: #fff;
            background-color: #f4a100;
            border-color: #f4a100;
        }

        .btn-green {
            color: #fff;
            background-color: #00ac69;
            border-color: #00ac69;
        }

        .btn-green:hover {
            color: #fff;
            background-color: #009259;
            border-color: #008a54;
        }

        .btn-check:focus+.btn-green,
        .btn-green:focus {
            color: #fff;
            background-color: #009259;
            border-color: #008a54;
            box-shadow: 0 0 0 0.25rem rgba(38, 184, 128, 0.5);
        }

        .btn-check:checked+.btn-green,
        .btn-check:active+.btn-green,
        .btn-green:active,
        .btn-green.active,
        .show>.btn-green.dropdown-toggle {
            color: #fff;
            background-color: #008a54;
            border-color: #00814f;
        }

        .btn-check:checked+.btn-green:focus,
        .btn-check:active+.btn-green:focus,
        .btn-green:active:focus,
        .btn-green.active:focus,
        .show>.btn-green.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(38, 184, 128, 0.5);
        }

        .btn-green:disabled,
        .btn-green.disabled {
            color: #fff;
            background-color: #00ac69;
            border-color: #00ac69;
        }

        .btn-teal {
            color: #fff;
            background-color: #00ba94;
            border-color: #00ba94;
        }

        .btn-teal:hover {
            color: #fff;
            background-color: #009e7e;
            border-color: #009576;
        }

        .btn-check:focus+.btn-teal,
        .btn-teal:focus {
            color: #fff;
            background-color: #009e7e;
            border-color: #009576;
            box-shadow: 0 0 0 0.25rem rgba(38, 196, 164, 0.5);
        }

        .btn-check:checked+.btn-teal,
        .btn-check:active+.btn-teal,
        .btn-teal:active,
        .btn-teal.active,
        .show>.btn-teal.dropdown-toggle {
            color: #fff;
            background-color: #009576;
            border-color: #008c6f;
        }

        .btn-check:checked+.btn-teal:focus,
        .btn-check:active+.btn-teal:focus,
        .btn-teal:active:focus,
        .btn-teal.active:focus,
        .show>.btn-teal.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(38, 196, 164, 0.5);
        }

        .btn-teal:disabled,
        .btn-teal.disabled {
            color: #fff;
            background-color: #00ba94;
            border-color: #00ba94;
        }

        .btn-cyan {
            color: #fff;
            background-color: #00cfd5;
            border-color: #00cfd5;
        }

        .btn-cyan:hover {
            color: #fff;
            background-color: #00b0b5;
            border-color: #00a6aa;
        }

        .btn-check:focus+.btn-cyan,
        .btn-cyan:focus {
            color: #fff;
            background-color: #00b0b5;
            border-color: #00a6aa;
            box-shadow: 0 0 0 0.25rem rgba(38, 214, 219, 0.5);
        }

        .btn-check:checked+.btn-cyan,
        .btn-check:active+.btn-cyan,
        .btn-cyan:active,
        .btn-cyan.active,
        .show>.btn-cyan.dropdown-toggle {
            color: #fff;
            background-color: #00a6aa;
            border-color: #009ba0;
        }

        .btn-check:checked+.btn-cyan:focus,
        .btn-check:active+.btn-cyan:focus,
        .btn-cyan:active:focus,
        .btn-cyan.active:focus,
        .show>.btn-cyan.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(38, 214, 219, 0.5);
        }

        .btn-cyan:disabled,
        .btn-cyan.disabled {
            color: #fff;
            background-color: #00cfd5;
            border-color: #00cfd5;
        }

        .btn-blue {
            color: #fff;
            background-color: #0061f2;
            border-color: #0061f2;
        }

        .btn-blue:hover {
            color: #fff;
            background-color: #0052ce;
            border-color: #004ec2;
        }

        .btn-check:focus+.btn-blue,
        .btn-blue:focus {
            color: #fff;
            background-color: #0052ce;
            border-color: #004ec2;
            box-shadow: 0 0 0 0.25rem rgba(38, 121, 244, 0.5);
        }

        .btn-check:checked+.btn-blue,
        .btn-check:active+.btn-blue,
        .btn-blue:active,
        .btn-blue.active,
        .show>.btn-blue.dropdown-toggle {
            color: #fff;
            background-color: #004ec2;
            border-color: #0049b6;
        }

        .btn-check:checked+.btn-blue:focus,
        .btn-check:active+.btn-blue:focus,
        .btn-blue:active:focus,
        .btn-blue.active:focus,
        .show>.btn-blue.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(38, 121, 244, 0.5);
        }

        .btn-blue:disabled,
        .btn-blue.disabled {
            color: #fff;
            background-color: #0061f2;
            border-color: #0061f2;
        }

        .btn-indigo {
            color: #fff;
            background-color: #5800e8;
            border-color: #5800e8;
        }

        .btn-indigo:hover {
            color: #fff;
            background-color: #4b00c5;
            border-color: #4600ba;
        }

        .btn-check:focus+.btn-indigo,
        .btn-indigo:focus {
            color: #fff;
            background-color: #4b00c5;
            border-color: #4600ba;
            box-shadow: 0 0 0 0.25rem rgba(113, 38, 235, 0.5);
        }

        .btn-check:checked+.btn-indigo,
        .btn-check:active+.btn-indigo,
        .btn-indigo:active,
        .btn-indigo.active,
        .show>.btn-indigo.dropdown-toggle {
            color: #fff;
            background-color: #4600ba;
            border-color: #4200ae;
        }

        .btn-check:checked+.btn-indigo:focus,
        .btn-check:active+.btn-indigo:focus,
        .btn-indigo:active:focus,
        .btn-indigo.active:focus,
        .show>.btn-indigo.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(113, 38, 235, 0.5);
        }

        .btn-indigo:disabled,
        .btn-indigo.disabled {
            color: #fff;
            background-color: #5800e8;
            border-color: #5800e8;
        }

        .btn-purple {
            color: #fff;
            background-color: #6900c7;
            border-color: #6900c7;
        }

        .btn-purple:hover {
            color: #fff;
            background-color: #5900a9;
            border-color: #54009f;
        }

        .btn-check:focus+.btn-purple,
        .btn-purple:focus {
            color: #fff;
            background-color: #5900a9;
            border-color: #54009f;
            box-shadow: 0 0 0 0.25rem rgba(128, 38, 207, 0.5);
        }

        .btn-check:checked+.btn-purple,
        .btn-check:active+.btn-purple,
        .btn-purple:active,
        .btn-purple.active,
        .show>.btn-purple.dropdown-toggle {
            color: #fff;
            background-color: #54009f;
            border-color: #4f0095;
        }

        .btn-check:checked+.btn-purple:focus,
        .btn-check:active+.btn-purple:focus,
        .btn-purple:active:focus,
        .btn-purple.active:focus,
        .show>.btn-purple.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(128, 38, 207, 0.5);
        }

        .btn-purple:disabled,
        .btn-purple.disabled {
            color: #fff;
            background-color: #6900c7;
            border-color: #6900c7;
        }

        .btn-pink {
            color: #fff;
            background-color: #e30059;
            border-color: #e30059;
        }

        .btn-pink:hover {
            color: #fff;
            background-color: #c1004c;
            border-color: #b60047;
        }

        .btn-check:focus+.btn-pink,
        .btn-pink:focus {
            color: #fff;
            background-color: #c1004c;
            border-color: #b60047;
            box-shadow: 0 0 0 0.25rem rgba(231, 38, 114, 0.5);
        }

        .btn-check:checked+.btn-pink,
        .btn-check:active+.btn-pink,
        .btn-pink:active,
        .btn-pink.active,
        .show>.btn-pink.dropdown-toggle {
            color: #fff;
            background-color: #b60047;
            border-color: #aa0043;
        }

        .btn-check:checked+.btn-pink:focus,
        .btn-check:active+.btn-pink:focus,
        .btn-pink:active:focus,
        .btn-pink.active:focus,
        .show>.btn-pink.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(231, 38, 114, 0.5);
        }

        .btn-pink:disabled,
        .btn-pink.disabled {
            color: #fff;
            background-color: #e30059;
            border-color: #e30059;
        }

        .btn-red-soft {
            color: #000;
            background-color: #f1e0e3;
            border-color: #f1e0e3;
        }

        .btn-red-soft:hover {
            color: #000;
            background-color: #f3e5e7;
            border-color: #f2e3e6;
        }

        .btn-check:focus+.btn-red-soft,
        .btn-red-soft:focus {
            color: #000;
            background-color: #f3e5e7;
            border-color: #f2e3e6;
            box-shadow: 0 0 0 0.25rem rgba(205, 190, 193, 0.5);
        }

        .btn-check:checked+.btn-red-soft,
        .btn-check:active+.btn-red-soft,
        .btn-red-soft:active,
        .btn-red-soft.active,
        .show>.btn-red-soft.dropdown-toggle {
            color: #000;
            background-color: #f4e6e9;
            border-color: #f2e3e6;
        }

        .btn-check:checked+.btn-red-soft:focus,
        .btn-check:active+.btn-red-soft:focus,
        .btn-red-soft:active:focus,
        .btn-red-soft.active:focus,
        .show>.btn-red-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(205, 190, 193, 0.5);
        }

        .btn-red-soft:disabled,
        .btn-red-soft.disabled {
            color: #000;
            background-color: #f1e0e3;
            border-color: #f1e0e3;
        }

        .btn-orange-soft {
            color: #000;
            background-color: #f3e7e3;
            border-color: #f3e7e3;
        }

        .btn-orange-soft:hover {
            color: #000;
            background-color: #f5ebe7;
            border-color: #f4e9e6;
        }

        .btn-check:focus+.btn-orange-soft,
        .btn-orange-soft:focus {
            color: #000;
            background-color: #f5ebe7;
            border-color: #f4e9e6;
            box-shadow: 0 0 0 0.25rem rgba(207, 196, 193, 0.5);
        }

        .btn-check:checked+.btn-orange-soft,
        .btn-check:active+.btn-orange-soft,
        .btn-orange-soft:active,
        .btn-orange-soft.active,
        .show>.btn-orange-soft.dropdown-toggle {
            color: #000;
            background-color: #f5ece9;
            border-color: #f4e9e6;
        }

        .btn-check:checked+.btn-orange-soft:focus,
        .btn-check:active+.btn-orange-soft:focus,
        .btn-orange-soft:active:focus,
        .btn-orange-soft.active:focus,
        .show>.btn-orange-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(207, 196, 193, 0.5);
        }

        .btn-orange-soft:disabled,
        .btn-orange-soft.disabled {
            color: #000;
            background-color: #f3e7e3;
            border-color: #f3e7e3;
        }

        .btn-yellow-soft {
            color: #000;
            background-color: #f2eee3;
            border-color: #f2eee3;
        }

        .btn-yellow-soft:hover {
            color: #000;
            background-color: #f4f1e7;
            border-color: #f3f0e6;
        }

        .btn-check:focus+.btn-yellow-soft,
        .btn-yellow-soft:focus {
            color: #000;
            background-color: #f4f1e7;
            border-color: #f3f0e6;
            box-shadow: 0 0 0 0.25rem rgba(206, 202, 193, 0.5);
        }

        .btn-check:checked+.btn-yellow-soft,
        .btn-check:active+.btn-yellow-soft,
        .btn-yellow-soft:active,
        .btn-yellow-soft.active,
        .show>.btn-yellow-soft.dropdown-toggle {
            color: #000;
            background-color: #f5f1e9;
            border-color: #f3f0e6;
        }

        .btn-check:checked+.btn-yellow-soft:focus,
        .btn-check:active+.btn-yellow-soft:focus,
        .btn-yellow-soft:active:focus,
        .btn-yellow-soft.active:focus,
        .show>.btn-yellow-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(206, 202, 193, 0.5);
        }

        .btn-yellow-soft:disabled,
        .btn-yellow-soft.disabled {
            color: #000;
            background-color: #f2eee3;
            border-color: #f2eee3;
        }

        .btn-green-soft {
            color: #000;
            background-color: #daefed;
            border-color: #daefed;
        }

        .btn-green-soft:hover {
            color: #000;
            background-color: #e0f1f0;
            border-color: #def1ef;
        }

        .btn-check:focus+.btn-green-soft,
        .btn-green-soft:focus {
            color: #000;
            background-color: #e0f1f0;
            border-color: #def1ef;
            box-shadow: 0 0 0 0.25rem rgba(185, 203, 201, 0.5);
        }

        .btn-check:checked+.btn-green-soft,
        .btn-check:active+.btn-green-soft,
        .btn-green-soft:active,
        .btn-green-soft.active,
        .show>.btn-green-soft.dropdown-toggle {
            color: #000;
            background-color: #e1f2f1;
            border-color: #def1ef;
        }

        .btn-check:checked+.btn-green-soft:focus,
        .btn-check:active+.btn-green-soft:focus,
        .btn-green-soft:active:focus,
        .btn-green-soft.active:focus,
        .show>.btn-green-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(185, 203, 201, 0.5);
        }

        .btn-green-soft:disabled,
        .btn-green-soft.disabled {
            color: #000;
            background-color: #daefed;
            border-color: #daefed;
        }

        .btn-teal-soft {
            color: #000;
            background-color: #daf0f2;
            border-color: #daf0f2;
        }

        .btn-teal-soft:hover {
            color: #000;
            background-color: #e0f2f4;
            border-color: #def2f3;
        }

        .btn-check:focus+.btn-teal-soft,
        .btn-teal-soft:focus {
            color: #000;
            background-color: #e0f2f4;
            border-color: #def2f3;
            box-shadow: 0 0 0 0.25rem rgba(185, 204, 206, 0.5);
        }

        .btn-check:checked+.btn-teal-soft,
        .btn-check:active+.btn-teal-soft,
        .btn-teal-soft:active,
        .btn-teal-soft.active,
        .show>.btn-teal-soft.dropdown-toggle {
            color: #000;
            background-color: #e1f3f5;
            border-color: #def2f3;
        }

        .btn-check:checked+.btn-teal-soft:focus,
        .btn-check:active+.btn-teal-soft:focus,
        .btn-teal-soft:active:focus,
        .btn-teal-soft.active:focus,
        .show>.btn-teal-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(185, 204, 206, 0.5);
        }

        .btn-teal-soft:disabled,
        .btn-teal-soft.disabled {
            color: #000;
            background-color: #daf0f2;
            border-color: #daf0f2;
        }

        .btn-cyan-soft {
            color: #000;
            background-color: #daf2f8;
            border-color: #daf2f8;
        }

        .btn-cyan-soft:hover {
            color: #000;
            background-color: #e0f4f9;
            border-color: #def3f9;
        }

        .btn-check:focus+.btn-cyan-soft,
        .btn-cyan-soft:focus {
            color: #000;
            background-color: #e0f4f9;
            border-color: #def3f9;
            box-shadow: 0 0 0 0.25rem rgba(185, 206, 211, 0.5);
        }

        .btn-check:checked+.btn-cyan-soft,
        .btn-check:active+.btn-cyan-soft,
        .btn-cyan-soft:active,
        .btn-cyan-soft.active,
        .show>.btn-cyan-soft.dropdown-toggle {
            color: #000;
            background-color: #e1f5f9;
            border-color: #def3f9;
        }

        .btn-check:checked+.btn-cyan-soft:focus,
        .btn-check:active+.btn-cyan-soft:focus,
        .btn-cyan-soft:active:focus,
        .btn-cyan-soft.active:focus,
        .show>.btn-cyan-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(185, 206, 211, 0.5);
        }

        .btn-cyan-soft:disabled,
        .btn-cyan-soft.disabled {
            color: #000;
            background-color: #daf2f8;
            border-color: #daf2f8;
        }

        .btn-blue-soft {
            color: #000;
            background-color: #dae7fb;
            border-color: #dae7fb;
        }

        .btn-blue-soft:hover {
            color: #000;
            background-color: #e0ebfc;
            border-color: #dee9fb;
        }

        .btn-check:focus+.btn-blue-soft,
        .btn-blue-soft:focus {
            color: #000;
            background-color: #e0ebfc;
            border-color: #dee9fb;
            box-shadow: 0 0 0 0.25rem rgba(185, 196, 213, 0.5);
        }

        .btn-check:checked+.btn-blue-soft,
        .btn-check:active+.btn-blue-soft,
        .btn-blue-soft:active,
        .btn-blue-soft.active,
        .show>.btn-blue-soft.dropdown-toggle {
            color: #000;
            background-color: #e1ecfc;
            border-color: #dee9fb;
        }

        .btn-check:checked+.btn-blue-soft:focus,
        .btn-check:active+.btn-blue-soft:focus,
        .btn-blue-soft:active:focus,
        .btn-blue-soft.active:focus,
        .show>.btn-blue-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(185, 196, 213, 0.5);
        }

        .btn-blue-soft:disabled,
        .btn-blue-soft.disabled {
            color: #000;
            background-color: #dae7fb;
            border-color: #dae7fb;
        }

        .btn-indigo-soft {
            color: #000;
            background-color: #e3ddfa;
            border-color: #e3ddfa;
        }

        .btn-indigo-soft:hover {
            color: #000;
            background-color: #e7e2fb;
            border-color: #e6e0fb;
        }

        .btn-check:focus+.btn-indigo-soft,
        .btn-indigo-soft:focus {
            color: #000;
            background-color: #e7e2fb;
            border-color: #e6e0fb;
            box-shadow: 0 0 0 0.25rem rgba(193, 188, 213, 0.5);
        }

        .btn-check:checked+.btn-indigo-soft,
        .btn-check:active+.btn-indigo-soft,
        .btn-indigo-soft:active,
        .btn-indigo-soft.active,
        .show>.btn-indigo-soft.dropdown-toggle {
            color: #000;
            background-color: #e9e4fb;
            border-color: #e6e0fb;
        }

        .btn-check:checked+.btn-indigo-soft:focus,
        .btn-check:active+.btn-indigo-soft:focus,
        .btn-indigo-soft:active:focus,
        .btn-indigo-soft.active:focus,
        .show>.btn-indigo-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(193, 188, 213, 0.5);
        }

        .btn-indigo-soft:disabled,
        .btn-indigo-soft.disabled {
            color: #000;
            background-color: #e3ddfa;
            border-color: #e3ddfa;
        }

        .btn-purple-soft {
            color: #000;
            background-color: #e4ddf7;
            border-color: #e4ddf7;
        }

        .btn-purple-soft:hover {
            color: #000;
            background-color: #e8e2f8;
            border-color: #e7e0f8;
        }

        .btn-check:focus+.btn-purple-soft,
        .btn-purple-soft:focus {
            color: #000;
            background-color: #e8e2f8;
            border-color: #e7e0f8;
            box-shadow: 0 0 0 0.25rem rgba(194, 188, 210, 0.5);
        }

        .btn-check:checked+.btn-purple-soft,
        .btn-check:active+.btn-purple-soft,
        .btn-purple-soft:active,
        .btn-purple-soft.active,
        .show>.btn-purple-soft.dropdown-toggle {
            color: #000;
            background-color: #e9e4f9;
            border-color: #e7e0f8;
        }

        .btn-check:checked+.btn-purple-soft:focus,
        .btn-check:active+.btn-purple-soft:focus,
        .btn-purple-soft:active:focus,
        .btn-purple-soft.active:focus,
        .show>.btn-purple-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(194, 188, 210, 0.5);
        }

        .btn-purple-soft:disabled,
        .btn-purple-soft.disabled {
            color: #000;
            background-color: #e4ddf7;
            border-color: #e4ddf7;
        }

        .btn-pink-soft {
            color: #000;
            background-color: #f1ddec;
            border-color: #f1ddec;
        }

        .btn-pink-soft:hover {
            color: #000;
            background-color: #f3e2ef;
            border-color: #f2e0ee;
        }

        .btn-check:focus+.btn-pink-soft,
        .btn-pink-soft:focus {
            color: #000;
            background-color: #f3e2ef;
            border-color: #f2e0ee;
            box-shadow: 0 0 0 0.25rem rgba(205, 188, 201, 0.5);
        }

        .btn-check:checked+.btn-pink-soft,
        .btn-check:active+.btn-pink-soft,
        .btn-pink-soft:active,
        .btn-pink-soft.active,
        .show>.btn-pink-soft.dropdown-toggle {
            color: #000;
            background-color: #f4e4f0;
            border-color: #f2e0ee;
        }

        .btn-check:checked+.btn-pink-soft:focus,
        .btn-check:active+.btn-pink-soft:focus,
        .btn-pink-soft:active:focus,
        .btn-pink-soft.active:focus,
        .show>.btn-pink-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(205, 188, 201, 0.5);
        }

        .btn-pink-soft:disabled,
        .btn-pink-soft.disabled {
            color: #000;
            background-color: #f1ddec;
            border-color: #f1ddec;
        }

        .btn-primary-soft {
            color: #000;
            background-color: #dae7fb;
            border-color: #dae7fb;
        }

        .btn-primary-soft:hover {
            color: #000;
            background-color: #e0ebfc;
            border-color: #dee9fb;
        }

        .btn-check:focus+.btn-primary-soft,
        .btn-primary-soft:focus {
            color: #000;
            background-color: #e0ebfc;
            border-color: #dee9fb;
            box-shadow: 0 0 0 0.25rem rgba(185, 196, 213, 0.5);
        }

        .btn-check:checked+.btn-primary-soft,
        .btn-check:active+.btn-primary-soft,
        .btn-primary-soft:active,
        .btn-primary-soft.active,
        .show>.btn-primary-soft.dropdown-toggle {
            color: #000;
            background-color: #e1ecfc;
            border-color: #dee9fb;
        }

        .btn-check:checked+.btn-primary-soft:focus,
        .btn-check:active+.btn-primary-soft:focus,
        .btn-primary-soft:active:focus,
        .btn-primary-soft.active:focus,
        .show>.btn-primary-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(185, 196, 213, 0.5);
        }

        .btn-primary-soft:disabled,
        .btn-primary-soft.disabled {
            color: #000;
            background-color: #dae7fb;
            border-color: #dae7fb;
        }

        .btn-secondary-soft {
            color: #000;
            background-color: #e4ddf7;
            border-color: #e4ddf7;
        }

        .btn-secondary-soft:hover {
            color: #000;
            background-color: #e8e2f8;
            border-color: #e7e0f8;
        }

        .btn-check:focus+.btn-secondary-soft,
        .btn-secondary-soft:focus {
            color: #000;
            background-color: #e8e2f8;
            border-color: #e7e0f8;
            box-shadow: 0 0 0 0.25rem rgba(194, 188, 210, 0.5);
        }

        .btn-check:checked+.btn-secondary-soft,
        .btn-check:active+.btn-secondary-soft,
        .btn-secondary-soft:active,
        .btn-secondary-soft.active,
        .show>.btn-secondary-soft.dropdown-toggle {
            color: #000;
            background-color: #e9e4f9;
            border-color: #e7e0f8;
        }

        .btn-check:checked+.btn-secondary-soft:focus,
        .btn-check:active+.btn-secondary-soft:focus,
        .btn-secondary-soft:active:focus,
        .btn-secondary-soft.active:focus,
        .show>.btn-secondary-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(194, 188, 210, 0.5);
        }

        .btn-secondary-soft:disabled,
        .btn-secondary-soft.disabled {
            color: #000;
            background-color: #e4ddf7;
            border-color: #e4ddf7;
        }

        .btn-success-soft {
            color: #000;
            background-color: #daefed;
            border-color: #daefed;
        }

        .btn-success-soft:hover {
            color: #000;
            background-color: #e0f1f0;
            border-color: #def1ef;
        }

        .btn-check:focus+.btn-success-soft,
        .btn-success-soft:focus {
            color: #000;
            background-color: #e0f1f0;
            border-color: #def1ef;
            box-shadow: 0 0 0 0.25rem rgba(185, 203, 201, 0.5);
        }

        .btn-check:checked+.btn-success-soft,
        .btn-check:active+.btn-success-soft,
        .btn-success-soft:active,
        .btn-success-soft.active,
        .show>.btn-success-soft.dropdown-toggle {
            color: #000;
            background-color: #e1f2f1;
            border-color: #def1ef;
        }

        .btn-check:checked+.btn-success-soft:focus,
        .btn-check:active+.btn-success-soft:focus,
        .btn-success-soft:active:focus,
        .btn-success-soft.active:focus,
        .show>.btn-success-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(185, 203, 201, 0.5);
        }

        .btn-success-soft:disabled,
        .btn-success-soft.disabled {
            color: #000;
            background-color: #daefed;
            border-color: #daefed;
        }

        .btn-info-soft {
            color: #000;
            background-color: #daf2f8;
            border-color: #daf2f8;
        }

        .btn-info-soft:hover {
            color: #000;
            background-color: #e0f4f9;
            border-color: #def3f9;
        }

        .btn-check:focus+.btn-info-soft,
        .btn-info-soft:focus {
            color: #000;
            background-color: #e0f4f9;
            border-color: #def3f9;
            box-shadow: 0 0 0 0.25rem rgba(185, 206, 211, 0.5);
        }

        .btn-check:checked+.btn-info-soft,
        .btn-check:active+.btn-info-soft,
        .btn-info-soft:active,
        .btn-info-soft.active,
        .show>.btn-info-soft.dropdown-toggle {
            color: #000;
            background-color: #e1f5f9;
            border-color: #def3f9;
        }

        .btn-check:checked+.btn-info-soft:focus,
        .btn-check:active+.btn-info-soft:focus,
        .btn-info-soft:active:focus,
        .btn-info-soft.active:focus,
        .show>.btn-info-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(185, 206, 211, 0.5);
        }

        .btn-info-soft:disabled,
        .btn-info-soft.disabled {
            color: #000;
            background-color: #daf2f8;
            border-color: #daf2f8;
        }

        .btn-warning-soft {
            color: #000;
            background-color: #f2eee3;
            border-color: #f2eee3;
        }

        .btn-warning-soft:hover {
            color: #000;
            background-color: #f4f1e7;
            border-color: #f3f0e6;
        }

        .btn-check:focus+.btn-warning-soft,
        .btn-warning-soft:focus {
            color: #000;
            background-color: #f4f1e7;
            border-color: #f3f0e6;
            box-shadow: 0 0 0 0.25rem rgba(206, 202, 193, 0.5);
        }

        .btn-check:checked+.btn-warning-soft,
        .btn-check:active+.btn-warning-soft,
        .btn-warning-soft:active,
        .btn-warning-soft.active,
        .show>.btn-warning-soft.dropdown-toggle {
            color: #000;
            background-color: #f5f1e9;
            border-color: #f3f0e6;
        }

        .btn-check:checked+.btn-warning-soft:focus,
        .btn-check:active+.btn-warning-soft:focus,
        .btn-warning-soft:active:focus,
        .btn-warning-soft.active:focus,
        .show>.btn-warning-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(206, 202, 193, 0.5);
        }

        .btn-warning-soft:disabled,
        .btn-warning-soft.disabled {
            color: #000;
            background-color: #f2eee3;
            border-color: #f2eee3;
        }

        .btn-danger-soft {
            color: #000;
            background-color: #f1e0e3;
            border-color: #f1e0e3;
        }

        .btn-danger-soft:hover {
            color: #000;
            background-color: #f3e5e7;
            border-color: #f2e3e6;
        }

        .btn-check:focus+.btn-danger-soft,
        .btn-danger-soft:focus {
            color: #000;
            background-color: #f3e5e7;
            border-color: #f2e3e6;
            box-shadow: 0 0 0 0.25rem rgba(205, 190, 193, 0.5);
        }

        .btn-check:checked+.btn-danger-soft,
        .btn-check:active+.btn-danger-soft,
        .btn-danger-soft:active,
        .btn-danger-soft.active,
        .show>.btn-danger-soft.dropdown-toggle {
            color: #000;
            background-color: #f4e6e9;
            border-color: #f2e3e6;
        }

        .btn-check:checked+.btn-danger-soft:focus,
        .btn-check:active+.btn-danger-soft:focus,
        .btn-danger-soft:active:focus,
        .btn-danger-soft.active:focus,
        .show>.btn-danger-soft.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(205, 190, 193, 0.5);
        }

        .btn-danger-soft:disabled,
        .btn-danger-soft.disabled {
            color: #000;
            background-color: #f1e0e3;
            border-color: #f1e0e3;
        }

        .btn-outline-primary {
            color: #0061f2;
            border-color: #0061f2;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #0061f2;
            border-color: #0061f2;
        }

        .btn-check:focus+.btn-outline-primary,
        .btn-outline-primary:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 97, 242, 0.5);
        }

        .btn-check:checked+.btn-outline-primary,
        .btn-check:active+.btn-outline-primary,
        .btn-outline-primary:active,
        .btn-outline-primary.active,
        .btn-outline-primary.dropdown-toggle.show {
            color: #fff;
            background-color: #0061f2;
            border-color: #0061f2;
        }

        .btn-check:checked+.btn-outline-primary:focus,
        .btn-check:active+.btn-outline-primary:focus,
        .btn-outline-primary:active:focus,
        .btn-outline-primary.active:focus,
        .btn-outline-primary.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 97, 242, 0.5);
        }

        .btn-outline-primary:disabled,
        .btn-outline-primary.disabled {
            color: #0061f2;
            background-color: transparent;
        }

        .btn-outline-secondary {
            color: #6900c7;
            border-color: #6900c7;
        }

        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #6900c7;
            border-color: #6900c7;
        }

        .btn-check:focus+.btn-outline-secondary,
        .btn-outline-secondary:focus {
            box-shadow: 0 0 0 0.25rem rgba(105, 0, 199, 0.5);
        }

        .btn-check:checked+.btn-outline-secondary,
        .btn-check:active+.btn-outline-secondary,
        .btn-outline-secondary:active,
        .btn-outline-secondary.active,
        .btn-outline-secondary.dropdown-toggle.show {
            color: #fff;
            background-color: #6900c7;
            border-color: #6900c7;
        }

        .btn-check:checked+.btn-outline-secondary:focus,
        .btn-check:active+.btn-outline-secondary:focus,
        .btn-outline-secondary:active:focus,
        .btn-outline-secondary.active:focus,
        .btn-outline-secondary.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(105, 0, 199, 0.5);
        }

        .btn-outline-secondary:disabled,
        .btn-outline-secondary.disabled {
            color: #6900c7;
            background-color: transparent;
        }

        .btn-outline-success {
            color: #00ac69;
            border-color: #00ac69;
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #00ac69;
            border-color: #00ac69;
        }

        .btn-check:focus+.btn-outline-success,
        .btn-outline-success:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 172, 105, 0.5);
        }

        .btn-check:checked+.btn-outline-success,
        .btn-check:active+.btn-outline-success,
        .btn-outline-success:active,
        .btn-outline-success.active,
        .btn-outline-success.dropdown-toggle.show {
            color: #fff;
            background-color: #00ac69;
            border-color: #00ac69;
        }

        .btn-check:checked+.btn-outline-success:focus,
        .btn-check:active+.btn-outline-success:focus,
        .btn-outline-success:active:focus,
        .btn-outline-success.active:focus,
        .btn-outline-success.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 172, 105, 0.5);
        }

        .btn-outline-success:disabled,
        .btn-outline-success.disabled {
            color: #00ac69;
            background-color: transparent;
        }

        .btn-outline-info {
            color: #00cfd5;
            border-color: #00cfd5;
        }

        .btn-outline-info:hover {
            color: #fff;
            background-color: #00cfd5;
            border-color: #00cfd5;
        }

        .btn-check:focus+.btn-outline-info,
        .btn-outline-info:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 207, 213, 0.5);
        }

        .btn-check:checked+.btn-outline-info,
        .btn-check:active+.btn-outline-info,
        .btn-outline-info:active,
        .btn-outline-info.active,
        .btn-outline-info.dropdown-toggle.show {
            color: #fff;
            background-color: #00cfd5;
            border-color: #00cfd5;
        }

        .btn-check:checked+.btn-outline-info:focus,
        .btn-check:active+.btn-outline-info:focus,
        .btn-outline-info:active:focus,
        .btn-outline-info.active:focus,
        .btn-outline-info.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 207, 213, 0.5);
        }

        .btn-outline-info:disabled,
        .btn-outline-info.disabled {
            color: #00cfd5;
            background-color: transparent;
        }

        .btn-outline-warning {
            color: #f4a100;
            border-color: #f4a100;
        }

        .btn-outline-warning:hover {
            color: #fff;
            background-color: #f4a100;
            border-color: #f4a100;
        }

        .btn-check:focus+.btn-outline-warning,
        .btn-outline-warning:focus {
            box-shadow: 0 0 0 0.25rem rgba(244, 161, 0, 0.5);
        }

        .btn-check:checked+.btn-outline-warning,
        .btn-check:active+.btn-outline-warning,
        .btn-outline-warning:active,
        .btn-outline-warning.active,
        .btn-outline-warning.dropdown-toggle.show {
            color: #fff;
            background-color: #f4a100;
            border-color: #f4a100;
        }

        .btn-check:checked+.btn-outline-warning:focus,
        .btn-check:active+.btn-outline-warning:focus,
        .btn-outline-warning:active:focus,
        .btn-outline-warning.active:focus,
        .btn-outline-warning.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(244, 161, 0, 0.5);
        }

        .btn-outline-warning:disabled,
        .btn-outline-warning.disabled {
            color: #f4a100;
            background-color: transparent;
        }

        .btn-outline-danger {
            color: #e81500;
            border-color: #e81500;
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #e81500;
            border-color: #e81500;
        }

        .btn-check:focus+.btn-outline-danger,
        .btn-outline-danger:focus {
            box-shadow: 0 0 0 0.25rem rgba(232, 21, 0, 0.5);
        }

        .btn-check:checked+.btn-outline-danger,
        .btn-check:active+.btn-outline-danger,
        .btn-outline-danger:active,
        .btn-outline-danger.active,
        .btn-outline-danger.dropdown-toggle.show {
            color: #fff;
            background-color: #e81500;
            border-color: #e81500;
        }

        .btn-check:checked+.btn-outline-danger:focus,
        .btn-check:active+.btn-outline-danger:focus,
        .btn-outline-danger:active:focus,
        .btn-outline-danger.active:focus,
        .btn-outline-danger.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(232, 21, 0, 0.5);
        }

        .btn-outline-danger:disabled,
        .btn-outline-danger.disabled {
            color: #e81500;
            background-color: transparent;
        }

        .btn-outline-light {
            color: #f2f6fc;
            border-color: #f2f6fc;
        }

        .btn-outline-light:hover {
            color: #000;
            background-color: #f2f6fc;
            border-color: #f2f6fc;
        }

        .btn-check:focus+.btn-outline-light,
        .btn-outline-light:focus {
            box-shadow: 0 0 0 0.25rem rgba(242, 246, 252, 0.5);
        }

        .btn-check:checked+.btn-outline-light,
        .btn-check:active+.btn-outline-light,
        .btn-outline-light:active,
        .btn-outline-light.active,
        .btn-outline-light.dropdown-toggle.show {
            color: #000;
            background-color: #f2f6fc;
            border-color: #f2f6fc;
        }

        .btn-check:checked+.btn-outline-light:focus,
        .btn-check:active+.btn-outline-light:focus,
        .btn-outline-light:active:focus,
        .btn-outline-light.active:focus,
        .btn-outline-light.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(242, 246, 252, 0.5);
        }

        .btn-outline-light:disabled,
        .btn-outline-light.disabled {
            color: #f2f6fc;
            background-color: transparent;
        }

        .btn-outline-dark {
            color: #212832;
            border-color: #212832;
        }

        .btn-outline-dark:hover {
            color: #fff;
            background-color: #212832;
            border-color: #212832;
        }

        .btn-check:focus+.btn-outline-dark,
        .btn-outline-dark:focus {
            box-shadow: 0 0 0 0.25rem rgba(33, 40, 50, 0.5);
        }

        .btn-check:checked+.btn-outline-dark,
        .btn-check:active+.btn-outline-dark,
        .btn-outline-dark:active,
        .btn-outline-dark.active,
        .btn-outline-dark.dropdown-toggle.show {
            color: #fff;
            background-color: #212832;
            border-color: #212832;
        }

        .btn-check:checked+.btn-outline-dark:focus,
        .btn-check:active+.btn-outline-dark:focus,
        .btn-outline-dark:active:focus,
        .btn-outline-dark.active:focus,
        .btn-outline-dark.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(33, 40, 50, 0.5);
        }

        .btn-outline-dark:disabled,
        .btn-outline-dark.disabled {
            color: #212832;
            background-color: transparent;
        }

        .btn-outline-black {
            color: #000;
            border-color: #000;
        }

        .btn-outline-black:hover {
            color: #fff;
            background-color: #000;
            border-color: #000;
        }

        .btn-check:focus+.btn-outline-black,
        .btn-outline-black:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 0, 0, 0.5);
        }

        .btn-check:checked+.btn-outline-black,
        .btn-check:active+.btn-outline-black,
        .btn-outline-black:active,
        .btn-outline-black.active,
        .btn-outline-black.dropdown-toggle.show {
            color: #fff;
            background-color: #000;
            border-color: #000;
        }

        .btn-check:checked+.btn-outline-black:focus,
        .btn-check:active+.btn-outline-black:focus,
        .btn-outline-black:active:focus,
        .btn-outline-black.active:focus,
        .btn-outline-black.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 0, 0, 0.5);
        }

        .btn-outline-black:disabled,
        .btn-outline-black.disabled {
            color: #000;
            background-color: transparent;
        }

        .btn-outline-white {
            color: #fff;
            border-color: #fff;
        }

        .btn-outline-white:hover {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-check:focus+.btn-outline-white,
        .btn-outline-white:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.5);
        }

        .btn-check:checked+.btn-outline-white,
        .btn-check:active+.btn-outline-white,
        .btn-outline-white:active,
        .btn-outline-white.active,
        .btn-outline-white.dropdown-toggle.show {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-check:checked+.btn-outline-white:focus,
        .btn-check:active+.btn-outline-white:focus,
        .btn-outline-white:active:focus,
        .btn-outline-white.active:focus,
        .btn-outline-white.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.5);
        }

        .btn-outline-white:disabled,
        .btn-outline-white.disabled {
            color: #fff;
            background-color: transparent;
        }

        .btn-outline-red {
            color: #e81500;
            border-color: #e81500;
        }

        .btn-outline-red:hover {
            color: #fff;
            background-color: #e81500;
            border-color: #e81500;
        }

        .btn-check:focus+.btn-outline-red,
        .btn-outline-red:focus {
            box-shadow: 0 0 0 0.25rem rgba(232, 21, 0, 0.5);
        }

        .btn-check:checked+.btn-outline-red,
        .btn-check:active+.btn-outline-red,
        .btn-outline-red:active,
        .btn-outline-red.active,
        .btn-outline-red.dropdown-toggle.show {
            color: #fff;
            background-color: #e81500;
            border-color: #e81500;
        }

        .btn-check:checked+.btn-outline-red:focus,
        .btn-check:active+.btn-outline-red:focus,
        .btn-outline-red:active:focus,
        .btn-outline-red.active:focus,
        .btn-outline-red.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(232, 21, 0, 0.5);
        }

        .btn-outline-red:disabled,
        .btn-outline-red.disabled {
            color: #e81500;
            background-color: transparent;
        }

        .btn-outline-orange {
            color: #f76400;
            border-color: #f76400;
        }

        .btn-outline-orange:hover {
            color: #fff;
            background-color: #f76400;
            border-color: #f76400;
        }

        .btn-check:focus+.btn-outline-orange,
        .btn-outline-orange:focus {
            box-shadow: 0 0 0 0.25rem rgba(247, 100, 0, 0.5);
        }

        .btn-check:checked+.btn-outline-orange,
        .btn-check:active+.btn-outline-orange,
        .btn-outline-orange:active,
        .btn-outline-orange.active,
        .btn-outline-orange.dropdown-toggle.show {
            color: #fff;
            background-color: #f76400;
            border-color: #f76400;
        }

        .btn-check:checked+.btn-outline-orange:focus,
        .btn-check:active+.btn-outline-orange:focus,
        .btn-outline-orange:active:focus,
        .btn-outline-orange.active:focus,
        .btn-outline-orange.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(247, 100, 0, 0.5);
        }

        .btn-outline-orange:disabled,
        .btn-outline-orange.disabled {
            color: #f76400;
            background-color: transparent;
        }

        .btn-outline-yellow {
            color: #f4a100;
            border-color: #f4a100;
        }

        .btn-outline-yellow:hover {
            color: #fff;
            background-color: #f4a100;
            border-color: #f4a100;
        }

        .btn-check:focus+.btn-outline-yellow,
        .btn-outline-yellow:focus {
            box-shadow: 0 0 0 0.25rem rgba(244, 161, 0, 0.5);
        }

        .btn-check:checked+.btn-outline-yellow,
        .btn-check:active+.btn-outline-yellow,
        .btn-outline-yellow:active,
        .btn-outline-yellow.active,
        .btn-outline-yellow.dropdown-toggle.show {
            color: #fff;
            background-color: #f4a100;
            border-color: #f4a100;
        }

        .btn-check:checked+.btn-outline-yellow:focus,
        .btn-check:active+.btn-outline-yellow:focus,
        .btn-outline-yellow:active:focus,
        .btn-outline-yellow.active:focus,
        .btn-outline-yellow.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(244, 161, 0, 0.5);
        }

        .btn-outline-yellow:disabled,
        .btn-outline-yellow.disabled {
            color: #f4a100;
            background-color: transparent;
        }

        .btn-outline-green {
            color: #00ac69;
            border-color: #00ac69;
        }

        .btn-outline-green:hover {
            color: #fff;
            background-color: #00ac69;
            border-color: #00ac69;
        }

        .btn-check:focus+.btn-outline-green,
        .btn-outline-green:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 172, 105, 0.5);
        }

        .btn-check:checked+.btn-outline-green,
        .btn-check:active+.btn-outline-green,
        .btn-outline-green:active,
        .btn-outline-green.active,
        .btn-outline-green.dropdown-toggle.show {
            color: #fff;
            background-color: #00ac69;
            border-color: #00ac69;
        }

        .btn-check:checked+.btn-outline-green:focus,
        .btn-check:active+.btn-outline-green:focus,
        .btn-outline-green:active:focus,
        .btn-outline-green.active:focus,
        .btn-outline-green.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 172, 105, 0.5);
        }

        .btn-outline-green:disabled,
        .btn-outline-green.disabled {
            color: #00ac69;
            background-color: transparent;
        }

        .btn-outline-teal {
            color: #00ba94;
            border-color: #00ba94;
        }

        .btn-outline-teal:hover {
            color: #fff;
            background-color: #00ba94;
            border-color: #00ba94;
        }

        .btn-check:focus+.btn-outline-teal,
        .btn-outline-teal:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 186, 148, 0.5);
        }

        .btn-check:checked+.btn-outline-teal,
        .btn-check:active+.btn-outline-teal,
        .btn-outline-teal:active,
        .btn-outline-teal.active,
        .btn-outline-teal.dropdown-toggle.show {
            color: #fff;
            background-color: #00ba94;
            border-color: #00ba94;
        }

        .btn-check:checked+.btn-outline-teal:focus,
        .btn-check:active+.btn-outline-teal:focus,
        .btn-outline-teal:active:focus,
        .btn-outline-teal.active:focus,
        .btn-outline-teal.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 186, 148, 0.5);
        }

        .btn-outline-teal:disabled,
        .btn-outline-teal.disabled {
            color: #00ba94;
            background-color: transparent;
        }

        .btn-outline-cyan {
            color: #00cfd5;
            border-color: #00cfd5;
        }

        .btn-outline-cyan:hover {
            color: #fff;
            background-color: #00cfd5;
            border-color: #00cfd5;
        }

        .btn-check:focus+.btn-outline-cyan,
        .btn-outline-cyan:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 207, 213, 0.5);
        }

        .btn-check:checked+.btn-outline-cyan,
        .btn-check:active+.btn-outline-cyan,
        .btn-outline-cyan:active,
        .btn-outline-cyan.active,
        .btn-outline-cyan.dropdown-toggle.show {
            color: #fff;
            background-color: #00cfd5;
            border-color: #00cfd5;
        }

        .btn-check:checked+.btn-outline-cyan:focus,
        .btn-check:active+.btn-outline-cyan:focus,
        .btn-outline-cyan:active:focus,
        .btn-outline-cyan.active:focus,
        .btn-outline-cyan.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 207, 213, 0.5);
        }

        .btn-outline-cyan:disabled,
        .btn-outline-cyan.disabled {
            color: #00cfd5;
            background-color: transparent;
        }

        .btn-outline-blue {
            color: #0061f2;
            border-color: #0061f2;
        }

        .btn-outline-blue:hover {
            color: #fff;
            background-color: #0061f2;
            border-color: #0061f2;
        }

        .btn-check:focus+.btn-outline-blue,
        .btn-outline-blue:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 97, 242, 0.5);
        }

        .btn-check:checked+.btn-outline-blue,
        .btn-check:active+.btn-outline-blue,
        .btn-outline-blue:active,
        .btn-outline-blue.active,
        .btn-outline-blue.dropdown-toggle.show {
            color: #fff;
            background-color: #0061f2;
            border-color: #0061f2;
        }

        .btn-check:checked+.btn-outline-blue:focus,
        .btn-check:active+.btn-outline-blue:focus,
        .btn-outline-blue:active:focus,
        .btn-outline-blue.active:focus,
        .btn-outline-blue.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 97, 242, 0.5);
        }

        .btn-outline-blue:disabled,
        .btn-outline-blue.disabled {
            color: #0061f2;
            background-color: transparent;
        }

        .btn-outline-indigo {
            color: #5800e8;
            border-color: #5800e8;
        }

        .btn-outline-indigo:hover {
            color: #fff;
            background-color: #5800e8;
            border-color: #5800e8;
        }

        .btn-check:focus+.btn-outline-indigo,
        .btn-outline-indigo:focus {
            box-shadow: 0 0 0 0.25rem rgba(88, 0, 232, 0.5);
        }

        .btn-check:checked+.btn-outline-indigo,
        .btn-check:active+.btn-outline-indigo,
        .btn-outline-indigo:active,
        .btn-outline-indigo.active,
        .btn-outline-indigo.dropdown-toggle.show {
            color: #fff;
            background-color: #5800e8;
            border-color: #5800e8;
        }

        .btn-check:checked+.btn-outline-indigo:focus,
        .btn-check:active+.btn-outline-indigo:focus,
        .btn-outline-indigo:active:focus,
        .btn-outline-indigo.active:focus,
        .btn-outline-indigo.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(88, 0, 232, 0.5);
        }

        .btn-outline-indigo:disabled,
        .btn-outline-indigo.disabled {
            color: #5800e8;
            background-color: transparent;
        }

        .btn-outline-purple {
            color: #6900c7;
            border-color: #6900c7;
        }

        .btn-outline-purple:hover {
            color: #fff;
            background-color: #6900c7;
            border-color: #6900c7;
        }

        .btn-check:focus+.btn-outline-purple,
        .btn-outline-purple:focus {
            box-shadow: 0 0 0 0.25rem rgba(105, 0, 199, 0.5);
        }

        .btn-check:checked+.btn-outline-purple,
        .btn-check:active+.btn-outline-purple,
        .btn-outline-purple:active,
        .btn-outline-purple.active,
        .btn-outline-purple.dropdown-toggle.show {
            color: #fff;
            background-color: #6900c7;
            border-color: #6900c7;
        }

        .btn-check:checked+.btn-outline-purple:focus,
        .btn-check:active+.btn-outline-purple:focus,
        .btn-outline-purple:active:focus,
        .btn-outline-purple.active:focus,
        .btn-outline-purple.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(105, 0, 199, 0.5);
        }

        .btn-outline-purple:disabled,
        .btn-outline-purple.disabled {
            color: #6900c7;
            background-color: transparent;
        }

        .btn-outline-pink {
            color: #e30059;
            border-color: #e30059;
        }

        .btn-outline-pink:hover {
            color: #fff;
            background-color: #e30059;
            border-color: #e30059;
        }

        .btn-check:focus+.btn-outline-pink,
        .btn-outline-pink:focus {
            box-shadow: 0 0 0 0.25rem rgba(227, 0, 89, 0.5);
        }

        .btn-check:checked+.btn-outline-pink,
        .btn-check:active+.btn-outline-pink,
        .btn-outline-pink:active,
        .btn-outline-pink.active,
        .btn-outline-pink.dropdown-toggle.show {
            color: #fff;
            background-color: #e30059;
            border-color: #e30059;
        }

        .btn-check:checked+.btn-outline-pink:focus,
        .btn-check:active+.btn-outline-pink:focus,
        .btn-outline-pink:active:focus,
        .btn-outline-pink.active:focus,
        .btn-outline-pink.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(227, 0, 89, 0.5);
        }

        .btn-outline-pink:disabled,
        .btn-outline-pink.disabled {
            color: #e30059;
            background-color: transparent;
        }

        .btn-outline-red-soft {
            color: #f1e0e3;
            border-color: #f1e0e3;
        }

        .btn-outline-red-soft:hover {
            color: #000;
            background-color: #f1e0e3;
            border-color: #f1e0e3;
        }

        .btn-check:focus+.btn-outline-red-soft,
        .btn-outline-red-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(241, 224, 227, 0.5);
        }

        .btn-check:checked+.btn-outline-red-soft,
        .btn-check:active+.btn-outline-red-soft,
        .btn-outline-red-soft:active,
        .btn-outline-red-soft.active,
        .btn-outline-red-soft.dropdown-toggle.show {
            color: #000;
            background-color: #f1e0e3;
            border-color: #f1e0e3;
        }

        .btn-check:checked+.btn-outline-red-soft:focus,
        .btn-check:active+.btn-outline-red-soft:focus,
        .btn-outline-red-soft:active:focus,
        .btn-outline-red-soft.active:focus,
        .btn-outline-red-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(241, 224, 227, 0.5);
        }

        .btn-outline-red-soft:disabled,
        .btn-outline-red-soft.disabled {
            color: #f1e0e3;
            background-color: transparent;
        }

        .btn-outline-orange-soft {
            color: #f3e7e3;
            border-color: #f3e7e3;
        }

        .btn-outline-orange-soft:hover {
            color: #000;
            background-color: #f3e7e3;
            border-color: #f3e7e3;
        }

        .btn-check:focus+.btn-outline-orange-soft,
        .btn-outline-orange-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(243, 231, 227, 0.5);
        }

        .btn-check:checked+.btn-outline-orange-soft,
        .btn-check:active+.btn-outline-orange-soft,
        .btn-outline-orange-soft:active,
        .btn-outline-orange-soft.active,
        .btn-outline-orange-soft.dropdown-toggle.show {
            color: #000;
            background-color: #f3e7e3;
            border-color: #f3e7e3;
        }

        .btn-check:checked+.btn-outline-orange-soft:focus,
        .btn-check:active+.btn-outline-orange-soft:focus,
        .btn-outline-orange-soft:active:focus,
        .btn-outline-orange-soft.active:focus,
        .btn-outline-orange-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(243, 231, 227, 0.5);
        }

        .btn-outline-orange-soft:disabled,
        .btn-outline-orange-soft.disabled {
            color: #f3e7e3;
            background-color: transparent;
        }

        .btn-outline-yellow-soft {
            color: #f2eee3;
            border-color: #f2eee3;
        }

        .btn-outline-yellow-soft:hover {
            color: #000;
            background-color: #f2eee3;
            border-color: #f2eee3;
        }

        .btn-check:focus+.btn-outline-yellow-soft,
        .btn-outline-yellow-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(242, 238, 227, 0.5);
        }

        .btn-check:checked+.btn-outline-yellow-soft,
        .btn-check:active+.btn-outline-yellow-soft,
        .btn-outline-yellow-soft:active,
        .btn-outline-yellow-soft.active,
        .btn-outline-yellow-soft.dropdown-toggle.show {
            color: #000;
            background-color: #f2eee3;
            border-color: #f2eee3;
        }

        .btn-check:checked+.btn-outline-yellow-soft:focus,
        .btn-check:active+.btn-outline-yellow-soft:focus,
        .btn-outline-yellow-soft:active:focus,
        .btn-outline-yellow-soft.active:focus,
        .btn-outline-yellow-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(242, 238, 227, 0.5);
        }

        .btn-outline-yellow-soft:disabled,
        .btn-outline-yellow-soft.disabled {
            color: #f2eee3;
            background-color: transparent;
        }

        .btn-outline-green-soft {
            color: #daefed;
            border-color: #daefed;
        }

        .btn-outline-green-soft:hover {
            color: #000;
            background-color: #daefed;
            border-color: #daefed;
        }

        .btn-check:focus+.btn-outline-green-soft,
        .btn-outline-green-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 239, 237, 0.5);
        }

        .btn-check:checked+.btn-outline-green-soft,
        .btn-check:active+.btn-outline-green-soft,
        .btn-outline-green-soft:active,
        .btn-outline-green-soft.active,
        .btn-outline-green-soft.dropdown-toggle.show {
            color: #000;
            background-color: #daefed;
            border-color: #daefed;
        }

        .btn-check:checked+.btn-outline-green-soft:focus,
        .btn-check:active+.btn-outline-green-soft:focus,
        .btn-outline-green-soft:active:focus,
        .btn-outline-green-soft.active:focus,
        .btn-outline-green-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 239, 237, 0.5);
        }

        .btn-outline-green-soft:disabled,
        .btn-outline-green-soft.disabled {
            color: #daefed;
            background-color: transparent;
        }

        .btn-outline-teal-soft {
            color: #daf0f2;
            border-color: #daf0f2;
        }

        .btn-outline-teal-soft:hover {
            color: #000;
            background-color: #daf0f2;
            border-color: #daf0f2;
        }

        .btn-check:focus+.btn-outline-teal-soft,
        .btn-outline-teal-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 240, 242, 0.5);
        }

        .btn-check:checked+.btn-outline-teal-soft,
        .btn-check:active+.btn-outline-teal-soft,
        .btn-outline-teal-soft:active,
        .btn-outline-teal-soft.active,
        .btn-outline-teal-soft.dropdown-toggle.show {
            color: #000;
            background-color: #daf0f2;
            border-color: #daf0f2;
        }

        .btn-check:checked+.btn-outline-teal-soft:focus,
        .btn-check:active+.btn-outline-teal-soft:focus,
        .btn-outline-teal-soft:active:focus,
        .btn-outline-teal-soft.active:focus,
        .btn-outline-teal-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 240, 242, 0.5);
        }

        .btn-outline-teal-soft:disabled,
        .btn-outline-teal-soft.disabled {
            color: #daf0f2;
            background-color: transparent;
        }

        .btn-outline-cyan-soft {
            color: #daf2f8;
            border-color: #daf2f8;
        }

        .btn-outline-cyan-soft:hover {
            color: #000;
            background-color: #daf2f8;
            border-color: #daf2f8;
        }

        .btn-check:focus+.btn-outline-cyan-soft,
        .btn-outline-cyan-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 242, 248, 0.5);
        }

        .btn-check:checked+.btn-outline-cyan-soft,
        .btn-check:active+.btn-outline-cyan-soft,
        .btn-outline-cyan-soft:active,
        .btn-outline-cyan-soft.active,
        .btn-outline-cyan-soft.dropdown-toggle.show {
            color: #000;
            background-color: #daf2f8;
            border-color: #daf2f8;
        }

        .btn-check:checked+.btn-outline-cyan-soft:focus,
        .btn-check:active+.btn-outline-cyan-soft:focus,
        .btn-outline-cyan-soft:active:focus,
        .btn-outline-cyan-soft.active:focus,
        .btn-outline-cyan-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 242, 248, 0.5);
        }

        .btn-outline-cyan-soft:disabled,
        .btn-outline-cyan-soft.disabled {
            color: #daf2f8;
            background-color: transparent;
        }

        .btn-outline-blue-soft {
            color: #dae7fb;
            border-color: #dae7fb;
        }

        .btn-outline-blue-soft:hover {
            color: #000;
            background-color: #dae7fb;
            border-color: #dae7fb;
        }

        .btn-check:focus+.btn-outline-blue-soft,
        .btn-outline-blue-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 231, 251, 0.5);
        }

        .btn-check:checked+.btn-outline-blue-soft,
        .btn-check:active+.btn-outline-blue-soft,
        .btn-outline-blue-soft:active,
        .btn-outline-blue-soft.active,
        .btn-outline-blue-soft.dropdown-toggle.show {
            color: #000;
            background-color: #dae7fb;
            border-color: #dae7fb;
        }

        .btn-check:checked+.btn-outline-blue-soft:focus,
        .btn-check:active+.btn-outline-blue-soft:focus,
        .btn-outline-blue-soft:active:focus,
        .btn-outline-blue-soft.active:focus,
        .btn-outline-blue-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 231, 251, 0.5);
        }

        .btn-outline-blue-soft:disabled,
        .btn-outline-blue-soft.disabled {
            color: #dae7fb;
            background-color: transparent;
        }

        .btn-outline-indigo-soft {
            color: #e3ddfa;
            border-color: #e3ddfa;
        }

        .btn-outline-indigo-soft:hover {
            color: #000;
            background-color: #e3ddfa;
            border-color: #e3ddfa;
        }

        .btn-check:focus+.btn-outline-indigo-soft,
        .btn-outline-indigo-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(227, 221, 250, 0.5);
        }

        .btn-check:checked+.btn-outline-indigo-soft,
        .btn-check:active+.btn-outline-indigo-soft,
        .btn-outline-indigo-soft:active,
        .btn-outline-indigo-soft.active,
        .btn-outline-indigo-soft.dropdown-toggle.show {
            color: #000;
            background-color: #e3ddfa;
            border-color: #e3ddfa;
        }

        .btn-check:checked+.btn-outline-indigo-soft:focus,
        .btn-check:active+.btn-outline-indigo-soft:focus,
        .btn-outline-indigo-soft:active:focus,
        .btn-outline-indigo-soft.active:focus,
        .btn-outline-indigo-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(227, 221, 250, 0.5);
        }

        .btn-outline-indigo-soft:disabled,
        .btn-outline-indigo-soft.disabled {
            color: #e3ddfa;
            background-color: transparent;
        }

        .btn-outline-purple-soft {
            color: #e4ddf7;
            border-color: #e4ddf7;
        }

        .btn-outline-purple-soft:hover {
            color: #000;
            background-color: #e4ddf7;
            border-color: #e4ddf7;
        }

        .btn-check:focus+.btn-outline-purple-soft,
        .btn-outline-purple-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(228, 221, 247, 0.5);
        }

        .btn-check:checked+.btn-outline-purple-soft,
        .btn-check:active+.btn-outline-purple-soft,
        .btn-outline-purple-soft:active,
        .btn-outline-purple-soft.active,
        .btn-outline-purple-soft.dropdown-toggle.show {
            color: #000;
            background-color: #e4ddf7;
            border-color: #e4ddf7;
        }

        .btn-check:checked+.btn-outline-purple-soft:focus,
        .btn-check:active+.btn-outline-purple-soft:focus,
        .btn-outline-purple-soft:active:focus,
        .btn-outline-purple-soft.active:focus,
        .btn-outline-purple-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(228, 221, 247, 0.5);
        }

        .btn-outline-purple-soft:disabled,
        .btn-outline-purple-soft.disabled {
            color: #e4ddf7;
            background-color: transparent;
        }

        .btn-outline-pink-soft {
            color: #f1ddec;
            border-color: #f1ddec;
        }

        .btn-outline-pink-soft:hover {
            color: #000;
            background-color: #f1ddec;
            border-color: #f1ddec;
        }

        .btn-check:focus+.btn-outline-pink-soft,
        .btn-outline-pink-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(241, 221, 236, 0.5);
        }

        .btn-check:checked+.btn-outline-pink-soft,
        .btn-check:active+.btn-outline-pink-soft,
        .btn-outline-pink-soft:active,
        .btn-outline-pink-soft.active,
        .btn-outline-pink-soft.dropdown-toggle.show {
            color: #000;
            background-color: #f1ddec;
            border-color: #f1ddec;
        }

        .btn-check:checked+.btn-outline-pink-soft:focus,
        .btn-check:active+.btn-outline-pink-soft:focus,
        .btn-outline-pink-soft:active:focus,
        .btn-outline-pink-soft.active:focus,
        .btn-outline-pink-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(241, 221, 236, 0.5);
        }

        .btn-outline-pink-soft:disabled,
        .btn-outline-pink-soft.disabled {
            color: #f1ddec;
            background-color: transparent;
        }

        .btn-outline-primary-soft {
            color: #dae7fb;
            border-color: #dae7fb;
        }

        .btn-outline-primary-soft:hover {
            color: #000;
            background-color: #dae7fb;
            border-color: #dae7fb;
        }

        .btn-check:focus+.btn-outline-primary-soft,
        .btn-outline-primary-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 231, 251, 0.5);
        }

        .btn-check:checked+.btn-outline-primary-soft,
        .btn-check:active+.btn-outline-primary-soft,
        .btn-outline-primary-soft:active,
        .btn-outline-primary-soft.active,
        .btn-outline-primary-soft.dropdown-toggle.show {
            color: #000;
            background-color: #dae7fb;
            border-color: #dae7fb;
        }

        .btn-check:checked+.btn-outline-primary-soft:focus,
        .btn-check:active+.btn-outline-primary-soft:focus,
        .btn-outline-primary-soft:active:focus,
        .btn-outline-primary-soft.active:focus,
        .btn-outline-primary-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 231, 251, 0.5);
        }

        .btn-outline-primary-soft:disabled,
        .btn-outline-primary-soft.disabled {
            color: #dae7fb;
            background-color: transparent;
        }

        .btn-outline-secondary-soft {
            color: #e4ddf7;
            border-color: #e4ddf7;
        }

        .btn-outline-secondary-soft:hover {
            color: #000;
            background-color: #e4ddf7;
            border-color: #e4ddf7;
        }

        .btn-check:focus+.btn-outline-secondary-soft,
        .btn-outline-secondary-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(228, 221, 247, 0.5);
        }

        .btn-check:checked+.btn-outline-secondary-soft,
        .btn-check:active+.btn-outline-secondary-soft,
        .btn-outline-secondary-soft:active,
        .btn-outline-secondary-soft.active,
        .btn-outline-secondary-soft.dropdown-toggle.show {
            color: #000;
            background-color: #e4ddf7;
            border-color: #e4ddf7;
        }

        .btn-check:checked+.btn-outline-secondary-soft:focus,
        .btn-check:active+.btn-outline-secondary-soft:focus,
        .btn-outline-secondary-soft:active:focus,
        .btn-outline-secondary-soft.active:focus,
        .btn-outline-secondary-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(228, 221, 247, 0.5);
        }

        .btn-outline-secondary-soft:disabled,
        .btn-outline-secondary-soft.disabled {
            color: #e4ddf7;
            background-color: transparent;
        }

        .btn-outline-success-soft {
            color: #daefed;
            border-color: #daefed;
        }

        .btn-outline-success-soft:hover {
            color: #000;
            background-color: #daefed;
            border-color: #daefed;
        }

        .btn-check:focus+.btn-outline-success-soft,
        .btn-outline-success-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 239, 237, 0.5);
        }

        .btn-check:checked+.btn-outline-success-soft,
        .btn-check:active+.btn-outline-success-soft,
        .btn-outline-success-soft:active,
        .btn-outline-success-soft.active,
        .btn-outline-success-soft.dropdown-toggle.show {
            color: #000;
            background-color: #daefed;
            border-color: #daefed;
        }

        .btn-check:checked+.btn-outline-success-soft:focus,
        .btn-check:active+.btn-outline-success-soft:focus,
        .btn-outline-success-soft:active:focus,
        .btn-outline-success-soft.active:focus,
        .btn-outline-success-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 239, 237, 0.5);
        }

        .btn-outline-success-soft:disabled,
        .btn-outline-success-soft.disabled {
            color: #daefed;
            background-color: transparent;
        }

        .btn-outline-info-soft {
            color: #daf2f8;
            border-color: #daf2f8;
        }

        .btn-outline-info-soft:hover {
            color: #000;
            background-color: #daf2f8;
            border-color: #daf2f8;
        }

        .btn-check:focus+.btn-outline-info-soft,
        .btn-outline-info-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 242, 248, 0.5);
        }

        .btn-check:checked+.btn-outline-info-soft,
        .btn-check:active+.btn-outline-info-soft,
        .btn-outline-info-soft:active,
        .btn-outline-info-soft.active,
        .btn-outline-info-soft.dropdown-toggle.show {
            color: #000;
            background-color: #daf2f8;
            border-color: #daf2f8;
        }

        .btn-check:checked+.btn-outline-info-soft:focus,
        .btn-check:active+.btn-outline-info-soft:focus,
        .btn-outline-info-soft:active:focus,
        .btn-outline-info-soft.active:focus,
        .btn-outline-info-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(218, 242, 248, 0.5);
        }

        .btn-outline-info-soft:disabled,
        .btn-outline-info-soft.disabled {
            color: #daf2f8;
            background-color: transparent;
        }

        .btn-outline-warning-soft {
            color: #f2eee3;
            border-color: #f2eee3;
        }

        .btn-outline-warning-soft:hover {
            color: #000;
            background-color: #f2eee3;
            border-color: #f2eee3;
        }

        .btn-check:focus+.btn-outline-warning-soft,
        .btn-outline-warning-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(242, 238, 227, 0.5);
        }

        .btn-check:checked+.btn-outline-warning-soft,
        .btn-check:active+.btn-outline-warning-soft,
        .btn-outline-warning-soft:active,
        .btn-outline-warning-soft.active,
        .btn-outline-warning-soft.dropdown-toggle.show {
            color: #000;
            background-color: #f2eee3;
            border-color: #f2eee3;
        }

        .btn-check:checked+.btn-outline-warning-soft:focus,
        .btn-check:active+.btn-outline-warning-soft:focus,
        .btn-outline-warning-soft:active:focus,
        .btn-outline-warning-soft.active:focus,
        .btn-outline-warning-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(242, 238, 227, 0.5);
        }

        .btn-outline-warning-soft:disabled,
        .btn-outline-warning-soft.disabled {
            color: #f2eee3;
            background-color: transparent;
        }

        .btn-outline-danger-soft {
            color: #f1e0e3;
            border-color: #f1e0e3;
        }

        .btn-outline-danger-soft:hover {
            color: #000;
            background-color: #f1e0e3;
            border-color: #f1e0e3;
        }

        .btn-check:focus+.btn-outline-danger-soft,
        .btn-outline-danger-soft:focus {
            box-shadow: 0 0 0 0.25rem rgba(241, 224, 227, 0.5);
        }

        .btn-check:checked+.btn-outline-danger-soft,
        .btn-check:active+.btn-outline-danger-soft,
        .btn-outline-danger-soft:active,
        .btn-outline-danger-soft.active,
        .btn-outline-danger-soft.dropdown-toggle.show {
            color: #000;
            background-color: #f1e0e3;
            border-color: #f1e0e3;
        }

        .btn-check:checked+.btn-outline-danger-soft:focus,
        .btn-check:active+.btn-outline-danger-soft:focus,
        .btn-outline-danger-soft:active:focus,
        .btn-outline-danger-soft.active:focus,
        .btn-outline-danger-soft.dropdown-toggle.show:focus {
            box-shadow: 0 0 0 0.25rem rgba(241, 224, 227, 0.5);
        }

        .btn-outline-danger-soft:disabled,
        .btn-outline-danger-soft.disabled {
            color: #f1e0e3;
            background-color: transparent;
        }

        .btn-link {
            font-weight: 400;
            color: #0061f2;
            text-decoration: none;
        }

        .btn-link:hover {
            color: #004ec2;
            text-decoration: underline;
        }

        .btn-link:focus {
            text-decoration: underline;
        }

        .btn-link:disabled,
        .btn-link.disabled {
            color: #69707a;
        }

        .btn-lg,
        .btn-group-lg>.btn {
            padding: 1.125rem 1.5rem;
            font-size: 1rem;
            border-radius: 0.5rem;
        }

        .btn-sm,
        .btn-group-sm>.btn {
            padding: 0.5rem 0.75rem;
            font-size: 0.75rem;
            border-radius: 0.25rem;
        }

        .fade {
            transition: opacity 0.15s linear;
        }

        @media (prefers-reduced-motion: reduce) {
            .fade {
                transition: none;
            }
        }

        .fade:not(.show) {
            opacity: 0;
        }

        .collapse:not(.show) {
            display: none;
        }

        .collapsing {
            height: 0;
            overflow: hidden;
            transition: height 0.15s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .collapsing {
                transition: none;
            }
        }

        .collapsing.collapse-horizontal {
            width: 0;
            height: auto;
            transition: width 0.35s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .collapsing.collapse-horizontal {
                transition: none;
            }
        }

        .dropup,
        .dropend,
        .dropdown,
        .dropstart {
            position: relative;
        }

        .dropdown-toggle {
            white-space: nowrap;
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent;
        }

        .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropdown-menu {
            position: absolute;
            z-index: 1000;
            display: none;
            min-width: 10rem;
            padding: 0.5rem 0;
            margin: 0;
            font-size: 1rem;
            color: #69707a;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e0e5ec;
            border-radius: 0.35rem;
        }

        .dropdown-menu[data-bs-popper] {
            top: 100%;
            left: 0;
            margin-top: 0.125rem;
        }

        .dropdown-menu-start {
            --bs-position: start;
        }

        .dropdown-menu-start[data-bs-popper] {
            right: auto;
            left: 0;
        }

        .dropdown-menu-end {
            --bs-position: end;
        }

        .dropdown-menu-end[data-bs-popper] {
            right: 0;
            left: auto;
        }

        @media (min-width: 576px) {
            .dropdown-menu-sm-start {
                --bs-position: start;
            }

            .dropdown-menu-sm-start[data-bs-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-sm-end {
                --bs-position: end;
            }

            .dropdown-menu-sm-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 768px) {
            .dropdown-menu-md-start {
                --bs-position: start;
            }

            .dropdown-menu-md-start[data-bs-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-md-end {
                --bs-position: end;
            }

            .dropdown-menu-md-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 992px) {
            .dropdown-menu-lg-start {
                --bs-position: start;
            }

            .dropdown-menu-lg-start[data-bs-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-lg-end {
                --bs-position: end;
            }

            .dropdown-menu-lg-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 1200px) {
            .dropdown-menu-xl-start {
                --bs-position: start;
            }

            .dropdown-menu-xl-start[data-bs-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-xl-end {
                --bs-position: end;
            }

            .dropdown-menu-xl-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 1500px) {
            .dropdown-menu-xxl-start {
                --bs-position: start;
            }

            .dropdown-menu-xxl-start[data-bs-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-xxl-end {
                --bs-position: end;
            }

            .dropdown-menu-xxl-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }

        .dropup .dropdown-menu[data-bs-popper] {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: 0.125rem;
        }

        .dropup .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0;
            border-right: 0.3em solid transparent;
            border-bottom: 0.3em solid;
            border-left: 0.3em solid transparent;
        }

        .dropup .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropend .dropdown-menu[data-bs-popper] {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
            margin-left: 0.125rem;
        }

        .dropend .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0;
            border-bottom: 0.3em solid transparent;
            border-left: 0.3em solid;
        }

        .dropend .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropend .dropdown-toggle::after {
            vertical-align: 0;
        }

        .dropstart .dropdown-menu[data-bs-popper] {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0;
            margin-right: 0.125rem;
        }

        .dropstart .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
        }

        .dropstart .dropdown-toggle::after {
            display: none;
        }

        .dropstart .dropdown-toggle::before {
            display: inline-block;
            margin-right: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0.3em solid;
            border-bottom: 0.3em solid transparent;
        }

        .dropstart .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropstart .dropdown-toggle::before {
            vertical-align: 0;
        }

        .dropdown-divider {
            height: 0;
            margin: 0.5rem 0;
            overflow: hidden;
            border-top: 1px solid #e0e5ec;
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: 0.25rem 1rem;
            clear: both;
            font-weight: 400;
            color: #212832;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            color: #1e242d;
            text-decoration: none;
            background-color: #e0e5ec;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #0061f2;
        }

        .dropdown-item.disabled,
        .dropdown-item:disabled {
            color: #a7aeb8;
            pointer-events: none;
            background-color: transparent;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-header {
            display: block;
            padding: 0.5rem 1rem;
            margin-bottom: 0;
            font-size: 0.875rem;
            color: #69707a;
            white-space: nowrap;
        }

        .dropdown-item-text {
            display: block;
            padding: 0.25rem 1rem;
            color: #212832;
        }

        .dropdown-menu-dark {
            color: #d4dae3;
            background-color: #363d47;
            border-color: #e0e5ec;
        }

        .dropdown-menu-dark .dropdown-item {
            color: #d4dae3;
        }

        .dropdown-menu-dark .dropdown-item:hover,
        .dropdown-menu-dark .dropdown-item:focus {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.15);
        }

        .dropdown-menu-dark .dropdown-item.active,
        .dropdown-menu-dark .dropdown-item:active {
            color: #fff;
            background-color: #0061f2;
        }

        .dropdown-menu-dark .dropdown-item.disabled,
        .dropdown-menu-dark .dropdown-item:disabled {
            color: #a7aeb8;
        }

        .dropdown-menu-dark .dropdown-divider {
            border-color: #e0e5ec;
        }

        .dropdown-menu-dark .dropdown-item-text {
            color: #d4dae3;
        }

        .dropdown-menu-dark .dropdown-header {
            color: #a7aeb8;
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: inline-flex;
            vertical-align: middle;
        }

        .btn-group>.btn,
        .btn-group-vertical>.btn {
            position: relative;
            flex: 1 1 auto;
        }

        .btn-group>.btn-check:checked+.btn,
        .btn-group>.btn-check:focus+.btn,
        .btn-group>.btn:hover,
        .btn-group>.btn:focus,
        .btn-group>.btn:active,
        .btn-group>.btn.active,
        .btn-group-vertical>.btn-check:checked+.btn,
        .btn-group-vertical>.btn-check:focus+.btn,
        .btn-group-vertical>.btn:hover,
        .btn-group-vertical>.btn:focus,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn.active {
            z-index: 1;
        }

        .btn-toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        .btn-toolbar .input-group {
            width: auto;
        }

        .btn-group>.btn:not(:first-child),
        .btn-group>.btn-group:not(:first-child) {
            margin-left: -1px;
        }

        .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
        .btn-group>.btn-group:not(:last-child)>.btn {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .btn-group>.btn:nth-child(n+3),
        .btn-group> :not(.btn-check)+.btn,
        .btn-group>.btn-group:not(:first-child)>.btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .dropdown-toggle-split {
            padding-right: 0.84375rem;
            padding-left: 0.84375rem;
        }

        .dropdown-toggle-split::after,
        .dropup .dropdown-toggle-split::after,
        .dropend .dropdown-toggle-split::after {
            margin-left: 0;
        }

        .dropstart .dropdown-toggle-split::before {
            margin-right: 0;
        }

        .btn-sm+.dropdown-toggle-split,
        .btn-group-sm>.btn+.dropdown-toggle-split {
            padding-right: 0.5625rem;
            padding-left: 0.5625rem;
        }

        .btn-lg+.dropdown-toggle-split,
        .btn-group-lg>.btn+.dropdown-toggle-split {
            padding-right: 1.125rem;
            padding-left: 1.125rem;
        }

        .btn-group-vertical {
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group {
            width: 100%;
        }

        .btn-group-vertical>.btn:not(:first-child),
        .btn-group-vertical>.btn-group:not(:first-child) {
            margin-top: -1px;
        }

        .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
        .btn-group-vertical>.btn-group:not(:last-child)>.btn {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .btn-group-vertical>.btn~.btn,
        .btn-group-vertical>.btn-group:not(:first-child)>.btn {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            color: #0061f2;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .nav-link {
                transition: none;
            }
        }

        .nav-link:hover,
        .nav-link:focus {
            color: #004ec2;
            text-decoration: none;
        }

        .nav-link.disabled {
            color: #69707a;
            pointer-events: none;
            cursor: default;
        }

        .nav-tabs {
            border-bottom: 1px solid #d4dae3;
        }

        .nav-tabs .nav-link {
            margin-bottom: -1px;
            background: none;
            border: 1px solid transparent;
            border-top-left-radius: 0.35rem;
            border-top-right-radius: 0.35rem;
        }

        .nav-tabs .nav-link:hover,
        .nav-tabs .nav-link:focus {
            border-color: #e0e5ec #e0e5ec #d4dae3;
            isolation: isolate;
        }

        .nav-tabs .nav-link.disabled {
            color: #69707a;
            background-color: transparent;
            border-color: transparent;
        }

        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            color: #4a515b;
            background-color: #f2f6fc;
            border-color: #d4dae3 #d4dae3 #f2f6fc;
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav-pills .nav-link {
            background: none;
            border: 0;
            border-radius: 0.35rem;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #0061f2;
        }

        .nav-fill>.nav-link,
        .nav-fill .nav-item {
            flex: 1 1 auto;
            text-align: center;
        }

        .nav-justified>.nav-link,
        .nav-justified .nav-item {
            flex-basis: 0;
            flex-grow: 1;
            text-align: center;
        }

        .nav-fill .nav-item .nav-link,
        .nav-justified .nav-item .nav-link {
            width: 100%;
        }

        .tab-content>.tab-pane {
            display: none;
        }

        .tab-content>.active {
            display: block;
        }

        .navbar {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .navbar>.container,
        .navbar>.container-fluid,
        .navbar>.container-sm,
        .navbar>.container-md,
        .navbar>.container-lg,
        .navbar>.container-xl,
        .navbar>.container-xxl {
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            justify-content: space-between;
        }

        .navbar-brand {
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            white-space: nowrap;
        }

        .navbar-brand:hover,
        .navbar-brand:focus {
            text-decoration: none;
        }

        .navbar-nav {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0;
        }

        .navbar-nav .dropdown-menu {
            position: static;
        }

        .navbar-text {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .navbar-collapse {
            flex-basis: 100%;
            flex-grow: 1;
            align-items: center;
        }

        .navbar-toggler {
            padding: 0.25rem 0.75rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: 0.35rem;
            transition: box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .navbar-toggler {
                transition: none;
            }
        }

        .navbar-toggler:hover {
            text-decoration: none;
        }

        .navbar-toggler:focus {
            text-decoration: none;
            outline: 0;
            box-shadow: 0 0 0 0.25rem;
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }

        .navbar-nav-scroll {
            max-height: var(--bs-scroll-height, 75vh);
            overflow-y: auto;
        }

        @media (min-width: 576px) {
            .navbar-expand-sm {
                flex-wrap: nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-sm .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-sm .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-sm .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-sm .navbar-toggler {
                display: none;
            }

            .navbar-expand-sm .offcanvas-header {
                display: none;
            }

            .navbar-expand-sm .offcanvas {
                position: inherit;
                bottom: 0;
                z-index: 1000;
                flex-grow: 1;
                visibility: visible !important;
                background-color: transparent;
                border-right: 0;
                border-left: 0;
                transition: none;
                transform: none;
            }

            .navbar-expand-sm .offcanvas-top,
            .navbar-expand-sm .offcanvas-bottom {
                height: auto;
                border-top: 0;
                border-bottom: 0;
            }

            .navbar-expand-sm .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }

        @media (min-width: 768px) {
            .navbar-expand-md {
                flex-wrap: nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-md .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-md .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-md .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-md .navbar-toggler {
                display: none;
            }

            .navbar-expand-md .offcanvas-header {
                display: none;
            }

            .navbar-expand-md .offcanvas {
                position: inherit;
                bottom: 0;
                z-index: 1000;
                flex-grow: 1;
                visibility: visible !important;
                background-color: transparent;
                border-right: 0;
                border-left: 0;
                transition: none;
                transform: none;
            }

            .navbar-expand-md .offcanvas-top,
            .navbar-expand-md .offcanvas-bottom {
                height: auto;
                border-top: 0;
                border-bottom: 0;
            }

            .navbar-expand-md .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }

        @media (min-width: 992px) {
            .navbar-expand-lg {
                flex-wrap: nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-lg .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-lg .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-lg .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-lg .navbar-toggler {
                display: none;
            }

            .navbar-expand-lg .offcanvas-header {
                display: none;
            }

            .navbar-expand-lg .offcanvas {
                position: inherit;
                bottom: 0;
                z-index: 1000;
                flex-grow: 1;
                visibility: visible !important;
                background-color: transparent;
                border-right: 0;
                border-left: 0;
                transition: none;
                transform: none;
            }

            .navbar-expand-lg .offcanvas-top,
            .navbar-expand-lg .offcanvas-bottom {
                height: auto;
                border-top: 0;
                border-bottom: 0;
            }

            .navbar-expand-lg .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }

        @media (min-width: 1200px) {
            .navbar-expand-xl {
                flex-wrap: nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-xl .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-xl .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-xl .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-xl .navbar-toggler {
                display: none;
            }

            .navbar-expand-xl .offcanvas-header {
                display: none;
            }

            .navbar-expand-xl .offcanvas {
                position: inherit;
                bottom: 0;
                z-index: 1000;
                flex-grow: 1;
                visibility: visible !important;
                background-color: transparent;
                border-right: 0;
                border-left: 0;
                transition: none;
                transform: none;
            }

            .navbar-expand-xl .offcanvas-top,
            .navbar-expand-xl .offcanvas-bottom {
                height: auto;
                border-top: 0;
                border-bottom: 0;
            }

            .navbar-expand-xl .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }

        @media (min-width: 1500px) {
            .navbar-expand-xxl {
                flex-wrap: nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-xxl .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-xxl .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-xxl .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-xxl .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-xxl .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-xxl .navbar-toggler {
                display: none;
            }

            .navbar-expand-xxl .offcanvas-header {
                display: none;
            }

            .navbar-expand-xxl .offcanvas {
                position: inherit;
                bottom: 0;
                z-index: 1000;
                flex-grow: 1;
                visibility: visible !important;
                background-color: transparent;
                border-right: 0;
                border-left: 0;
                transition: none;
                transform: none;
            }

            .navbar-expand-xxl .offcanvas-top,
            .navbar-expand-xxl .offcanvas-bottom {
                height: auto;
                border-top: 0;
                border-bottom: 0;
            }

            .navbar-expand-xxl .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }

        .navbar-expand {
            flex-wrap: nowrap;
            justify-content: flex-start;
        }

        .navbar-expand .navbar-nav {
            flex-direction: row;
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand .navbar-nav-scroll {
            overflow: visible;
        }

        .navbar-expand .navbar-collapse {
            display: flex !important;
            flex-basis: auto;
        }

        .navbar-expand .navbar-toggler {
            display: none;
        }

        .navbar-expand .offcanvas-header {
            display: none;
        }

        .navbar-expand .offcanvas {
            position: inherit;
            bottom: 0;
            z-index: 1000;
            flex-grow: 1;
            visibility: visible !important;
            background-color: transparent;
            border-right: 0;
            border-left: 0;
            transition: none;
            transform: none;
        }

        .navbar-expand .offcanvas-top,
        .navbar-expand .offcanvas-bottom {
            height: auto;
            border-top: 0;
            border-bottom: 0;
        }

        .navbar-expand .offcanvas-body {
            display: flex;
            flex-grow: 0;
            padding: 0;
            overflow-y: visible;
        }

        .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-brand:hover,
        .navbar-light .navbar-brand:focus {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, 0.55);
        }

        .navbar-light .navbar-nav .nav-link:hover,
        .navbar-light .navbar-nav .nav-link:focus {
            color: rgba(0, 0, 0, 0.7);
        }

        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(0, 0, 0, 0.3);
        }

        .navbar-light .navbar-nav .show>.nav-link,
        .navbar-light .navbar-nav .nav-link.active {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, 0.55);
            border-color: rgba(0, 0, 0, 0.1);
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-light .navbar-text {
            color: rgba(0, 0, 0, 0.55);
        }

        .navbar-light .navbar-text a,
        .navbar-light .navbar-text a:hover,
        .navbar-light .navbar-text a:focus {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-dark .navbar-brand {
            color: #fff;
        }

        .navbar-dark .navbar-brand:hover,
        .navbar-dark .navbar-brand:focus {
            color: #fff;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.55);
        }

        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link:focus {
            color: rgba(255, 255, 255, 0.75);
        }

        .navbar-dark .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, 0.25);
        }

        .navbar-dark .navbar-nav .show>.nav-link,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #fff;
        }

        .navbar-dark .navbar-toggler {
            color: rgba(255, 255, 255, 0.55);
            border-color: rgba(255, 255, 255, 0.1);
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-dark .navbar-text {
            color: rgba(255, 255, 255, 0.55);
        }

        .navbar-dark .navbar-text a,
        .navbar-dark .navbar-text a:hover,
        .navbar-dark .navbar-text a:focus {
            color: #fff;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(33, 40, 50, 0.125);
            border-radius: 0.35rem;
        }

        .card>hr {
            margin-right: 0;
            margin-left: 0;
        }

        .card>.list-group {
            border-top: inherit;
            border-bottom: inherit;
        }

        .card>.list-group:first-child {
            border-top-width: 0;
            border-top-left-radius: 0.35rem;
            border-top-right-radius: 0.35rem;
        }

        .card>.list-group:last-child {
            border-bottom-width: 0;
            border-bottom-right-radius: 0.35rem;
            border-bottom-left-radius: 0.35rem;
        }

        .card>.card-header+.list-group,
        .card>.list-group+.card-footer {
            border-top: 0;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.35rem 1.35rem;


        }

        .card-title {
            margin-bottom: 0.5rem;
        }

        .card-subtitle {
            margin-top: -0.25rem;
            margin-bottom: 0;
        }

        .card-text:last-child {
            margin-bottom: 0;
        }

        .card-link:hover {
            text-decoration: none;
        }

        .card-link+.card-link {
            margin-left: 1.35rem;
        }

        .card-header {
            padding: 1rem 1.35rem;
            margin-bottom: 0;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }

        .card-header:first-child {
            border-radius: 0.35rem 0.35rem 0 0;
        }

        .card-footer {
            padding: 1rem 1.35rem;
            background-color: rgba(33, 40, 50, 0.03);
            border-top: 1px solid rgba(33, 40, 50, 0.125);
        }

        .card-footer:last-child {
            border-radius: 0 0 0.35rem 0.35rem;
        }

        .card-header-tabs {
            margin-right: -0.675rem;
            margin-bottom: -1rem;
            margin-left: -0.675rem;
            border-bottom: 0;
        }

        .card-header-tabs .nav-link.active {
            background-color: #fff;
            border-bottom-color: #fff;
        }

        .card-header-pills {
            margin-right: -0.675rem;
            margin-left: -0.675rem;
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
            border-radius: 0.35rem;
        }

        .card-img,
        .card-img-top,
        .card-img-bottom {
            width: 100%;
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: 0.35rem;
            border-top-right-radius: 0.35rem;
        }

        .card-img,
        .card-img-bottom {
            border-bottom-right-radius: 0.35rem;
            border-bottom-left-radius: 0.35rem;
        }

        .card-group>.card {
            margin-bottom: 0.75rem;
        }

        @media (min-width: 576px) {
            .card-group {
                display: flex;
                flex-flow: row wrap;
            }

            .card-group>.card {
                flex: 1 0 0%;
                margin-bottom: 0;
            }

            .card-group>.card+.card {
                margin-left: 0;
                border-left: 0;
            }

            .card-group>.card:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }

            .card-group>.card:not(:last-child) .card-img-top,
            .card-group>.card:not(:last-child) .card-header {
                border-top-right-radius: 0;
            }

            .card-group>.card:not(:last-child) .card-img-bottom,
            .card-group>.card:not(:last-child) .card-footer {
                border-bottom-right-radius: 0;
            }

            .card-group>.card:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }

            .card-group>.card:not(:first-child) .card-img-top,
            .card-group>.card:not(:first-child) .card-header {
                border-top-left-radius: 0;
            }

            .card-group>.card:not(:first-child) .card-img-bottom,
            .card-group>.card:not(:first-child) .card-footer {
                border-bottom-left-radius: 0;
            }
        }

        .accordion-button {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            padding: 1rem 1.25rem;
            font-size: 1rem;
            color: #69707a;
            text-align: left;
            background-color: #fff;
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .accordion-button {
                transition: none;
            }
        }

        .accordion-button:not(.collapsed) {
            color: #0057da;
            background-color: #e6effe;
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230057da'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            transform: rotate(-180deg);
        }

        .accordion-button::after {
            flex-shrink: 0;
            width: 1.25rem;
            height: 1.25rem;
            margin-left: auto;
            content: "";
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%2369707a'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-size: 1.25rem;
            transition: transform 0.2s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .accordion-button::after {
                transition: none;
            }
        }

        .accordion-button:hover {
            z-index: 2;
        }

        .accordion-button:focus {
            z-index: 3;
            border-color: transparent;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(0, 97, 242, 0.25);
        }

        .accordion-header {
            margin-bottom: 0;
        }

        .accordion-item {
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.125);
        }

        .accordion-item:first-of-type {
            border-top-left-radius: 0.35rem;
            border-top-right-radius: 0.35rem;
        }

        .accordion-item:first-of-type .accordion-button {
            border-top-left-radius: calc(0.35rem - 1px);
            border-top-right-radius: calc(0.35rem - 1px);
        }

        .accordion-item:not(:first-of-type) {
            border-top: 0;
        }

        .accordion-item:last-of-type {
            border-bottom-right-radius: 0.35rem;
            border-bottom-left-radius: 0.35rem;
        }

        .accordion-item:last-of-type .accordion-button.collapsed {
            border-bottom-right-radius: calc(0.35rem - 1px);
            border-bottom-left-radius: calc(0.35rem - 1px);
        }

        .accordion-item:last-of-type .accordion-collapse {
            border-bottom-right-radius: 0.35rem;
            border-bottom-left-radius: 0.35rem;
        }

        .accordion-body {
            padding: 1rem 1.25rem;
        }

        .accordion-flush .accordion-collapse {
            border-width: 0;
        }

        .accordion-flush .accordion-item {
            border-right: 0;
            border-left: 0;
            border-radius: 0;
        }

        .accordion-flush .accordion-item:first-child {
            border-top: 0;
        }

        .accordion-flush .accordion-item:last-child {
            border-bottom: 0;
        }

        .accordion-flush .accordion-item .accordion-button {
            border-radius: 0;
        }

        .breadcrumb {
            display: flex;
            flex-wrap: wrap;
            padding: 0 0;
            margin-bottom: 1rem;
            list-style: none;
        }

        .breadcrumb-item+.breadcrumb-item {
            padding-left: 0.5rem;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            float: left;
            padding-right: 0.5rem;
            color: #69707a;
            content: var(--bs-breadcrumb-divider, "/")
                /* rtl: var(--bs-breadcrumb-divider, "/") */
            ;
        }

        .breadcrumb-item.active {
            color: #69707a;
        }

        .pagination,
        .dataTable-pagination ul {
            display: flex;
            padding-left: 0;
            list-style: none;
        }

        .page-link,
        .dataTable-pagination a {
            position: relative;
            display: block;
            color: #0061f2;
            background-color: #fff;
            border: 1px solid #d4dae3;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {

            .page-link,
            .dataTable-pagination a {
                transition: none;
            }
        }

        .page-link:hover,
        .dataTable-pagination a:hover {
            z-index: 2;
            color: #004ec2;
            text-decoration: none;
            background-color: #e0e5ec;
            border-color: #d4dae3;
        }

        .page-link:focus,
        .dataTable-pagination a:focus {
            z-index: 3;
            color: #004ec2;
            background-color: #e0e5ec;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(0, 97, 242, 0.25);
        }

        .page-item:not(:first-child) .page-link,
        .page-item:not(:first-child) .dataTable-pagination a,
        .dataTable-pagination .page-item:not(:first-child) a,
        .dataTable-pagination li:not(:first-child) .page-link,
        .dataTable-pagination li:not(:first-child) a {
            margin-left: -1px;
        }

        .page-item.active .page-link,
        .page-item.active .dataTable-pagination a,
        .dataTable-pagination .page-item.active a,
        .dataTable-pagination li.active .page-link,
        .dataTable-pagination li.active a {
            z-index: 3;
            color: #fff;
            background-color: #0061f2;
            border-color: #0061f2;
        }

        .page-item.disabled .page-link,
        .page-item.disabled .dataTable-pagination a,
        .dataTable-pagination .page-item.disabled a,
        .dataTable-pagination li.disabled .page-link,
        .dataTable-pagination li.disabled a {
            color: #69707a;
            pointer-events: none;
            background-color: #fff;
            border-color: #d4dae3;
        }

        .page-link,
        .dataTable-pagination a {
            padding: 0.375rem 0.75rem;
        }

        .page-item:first-child .page-link,
        .page-item:first-child .dataTable-pagination a,
        .dataTable-pagination .page-item:first-child a,
        .dataTable-pagination li:first-child .page-link,
        .dataTable-pagination li:first-child a {
            border-top-left-radius: 0.35rem;
            border-bottom-left-radius: 0.35rem;
        }

        .page-item:last-child .page-link,
        .page-item:last-child .dataTable-pagination a,
        .dataTable-pagination .page-item:last-child a,
        .dataTable-pagination li:last-child .page-link,
        .dataTable-pagination li:last-child a {
            border-top-right-radius: 0.35rem;
            border-bottom-right-radius: 0.35rem;
        }

        .pagination-lg .page-link,
        .pagination-lg .dataTable-pagination a,
        .dataTable-pagination .pagination-lg a {
            padding: 0.75rem 1.5rem;
            font-size: 1.25rem;
        }

        .pagination-lg .page-item:first-child .page-link,
        .pagination-lg .page-item:first-child .dataTable-pagination a,
        .dataTable-pagination .pagination-lg .page-item:first-child a,
        .pagination-lg .dataTable-pagination li:first-child .page-link,
        .pagination-lg .dataTable-pagination li:first-child a,
        .dataTable-pagination .pagination-lg li:first-child .page-link,
        .dataTable-pagination .pagination-lg li:first-child a {
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }

        .pagination-lg .page-item:last-child .page-link,
        .pagination-lg .page-item:last-child .dataTable-pagination a,
        .dataTable-pagination .pagination-lg .page-item:last-child a,
        .pagination-lg .dataTable-pagination li:last-child .page-link,
        .pagination-lg .dataTable-pagination li:last-child a,
        .dataTable-pagination .pagination-lg li:last-child .page-link,
        .dataTable-pagination .pagination-lg li:last-child a {
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
        }

        .pagination-sm .page-link,
        .pagination-sm .dataTable-pagination a,
        .dataTable-pagination .pagination-sm a {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }

        .pagination-sm .page-item:first-child .page-link,
        .pagination-sm .page-item:first-child .dataTable-pagination a,
        .dataTable-pagination .pagination-sm .page-item:first-child a,
        .pagination-sm .dataTable-pagination li:first-child .page-link,
        .pagination-sm .dataTable-pagination li:first-child a,
        .dataTable-pagination .pagination-sm li:first-child .page-link,
        .dataTable-pagination .pagination-sm li:first-child a {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .pagination-sm .page-item:last-child .page-link,
        .pagination-sm .page-item:last-child .dataTable-pagination a,
        .dataTable-pagination .pagination-sm .page-item:last-child a,
        .pagination-sm .dataTable-pagination li:last-child .page-link,
        .pagination-sm .dataTable-pagination li:last-child a,
        .dataTable-pagination .pagination-sm li:last-child .page-link,
        .dataTable-pagination .pagination-sm li:last-child a {
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }

        .badge {
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 400;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.35rem;
        }

        .badge:empty {
            display: none;
        }

        .btn .badge {
            position: relative;
            top: -1px;
        }

        .alert {
            position: relative;
            padding: 1.25rem 1rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.35rem;
        }

        .alert-heading {
            color: inherit;
        }

        .alert-link {
            font-weight: 500;
        }

        .alert-dismissible {
            padding-right: 3rem;
        }

        .alert-dismissible .btn-close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            padding: 1.5625rem 1rem;
        }

        .alert-primary {
            color: #003a91;
            background-color: #ccdffc;
            border-color: #b3d0fb;
        }

        .alert-primary .alert-link {
            color: #002e74;
        }

        .alert-secondary {
            color: #3f0077;
            background-color: #e1ccf4;
            border-color: #d2b3ee;
        }

        .alert-secondary .alert-link {
            color: #32005f;
        }

        .alert-success {
            color: #00673f;
            background-color: #cceee1;
            border-color: #b3e6d2;
        }

        .alert-success .alert-link {
            color: #005232;
        }

        .alert-info {
            color: #007c80;
            background-color: #ccf5f7;
            border-color: #b3f1f2;
        }

        .alert-info .alert-link {
            color: #006366;
        }

        .alert-warning {
            color: #926100;
            background-color: #fdeccc;
            border-color: #fce3b3;
        }

        .alert-warning .alert-link {
            color: #754e00;
        }

        .alert-danger {
            color: #8b0d00;
            background-color: #fad0cc;
            border-color: #f8b9b3;
        }

        .alert-danger .alert-link {
            color: #6f0a00;
        }

        .alert-light {
            color: #919497;
            background-color: #fcfdfe;
            border-color: #fbfcfe;
        }

        .alert-light .alert-link {
            color: #747679;
        }

        .alert-dark {
            color: #14181e;
            background-color: #d3d4d6;
            border-color: #bcbfc2;
        }

        .alert-dark .alert-link {
            color: #101318;
        }

        .alert-black {
            color: black;
            background-color: #cccccc;
            border-color: #b3b3b3;
        }

        .alert-black .alert-link {
            color: black;
        }

        .alert-white {
            color: #999999;
            background-color: white;
            border-color: white;
        }

        .alert-white .alert-link {
            color: #7a7a7a;
        }

        .alert-red {
            color: #8b0d00;
            background-color: #fad0cc;
            border-color: #f8b9b3;
        }

        .alert-red .alert-link {
            color: #6f0a00;
        }

        .alert-orange {
            color: #943c00;
            background-color: #fde0cc;
            border-color: #fdd1b3;
        }

        .alert-orange .alert-link {
            color: #763000;
        }

        .alert-yellow {
            color: #926100;
            background-color: #fdeccc;
            border-color: #fce3b3;
        }

        .alert-yellow .alert-link {
            color: #754e00;
        }

        .alert-green {
            color: #00673f;
            background-color: #cceee1;
            border-color: #b3e6d2;
        }

        .alert-green .alert-link {
            color: #005232;
        }

        .alert-teal {
            color: #007059;
            background-color: #ccf1ea;
            border-color: #b3eadf;
        }

        .alert-teal .alert-link {
            color: #005a47;
        }

        .alert-cyan {
            color: #007c80;
            background-color: #ccf5f7;
            border-color: #b3f1f2;
        }

        .alert-cyan .alert-link {
            color: #006366;
        }

        .alert-blue {
            color: #003a91;
            background-color: #ccdffc;
            border-color: #b3d0fb;
        }

        .alert-blue .alert-link {
            color: #002e74;
        }

        .alert-indigo {
            color: #35008b;
            background-color: #deccfa;
            border-color: #cdb3f8;
        }

        .alert-indigo .alert-link {
            color: #2a006f;
        }

        .alert-purple {
            color: #3f0077;
            background-color: #e1ccf4;
            border-color: #d2b3ee;
        }

        .alert-purple .alert-link {
            color: #32005f;
        }

        .alert-pink {
            color: #880035;
            background-color: #f9ccde;
            border-color: #f7b3cd;
        }

        .alert-pink .alert-link {
            color: #6d002a;
        }

        .alert-red-soft {
            color: #918688;
            background-color: #fcf9f9;
            border-color: #fbf6f7;
        }

        .alert-red-soft .alert-link {
            color: #746b6d;
        }

        .alert-orange-soft {
            color: #928b88;
            background-color: #fdfaf9;
            border-color: #fbf8f7;
        }

        .alert-orange-soft .alert-link {
            color: #756f6d;
        }

        .alert-yellow-soft {
            color: #918f88;
            background-color: #fcfcf9;
            border-color: #fbfaf7;
        }

        .alert-yellow-soft .alert-link {
            color: #74726d;
        }

        .alert-green-soft {
            color: #838f8e;
            background-color: #f8fcfb;
            border-color: #f4fafa;
        }

        .alert-green-soft .alert-link {
            color: #697272;
        }

        .alert-teal-soft {
            color: #839091;
            background-color: #f8fcfc;
            border-color: #f4fbfb;
        }

        .alert-teal-soft .alert-link {
            color: #697374;
        }

        .alert-cyan-soft {
            color: #839195;
            background-color: #f8fcfe;
            border-color: #f4fbfd;
        }

        .alert-cyan-soft .alert-link {
            color: #697477;
        }

        .alert-blue-soft {
            color: #838b97;
            background-color: #f8fafe;
            border-color: #f4f8fe;
        }

        .alert-blue-soft .alert-link {
            color: #696f79;
        }

        .alert-indigo-soft {
            color: #888596;
            background-color: #f9f8fe;
            border-color: #f7f5fe;
        }

        .alert-indigo-soft .alert-link {
            color: #6d6a78;
        }

        .alert-purple-soft {
            color: #898594;
            background-color: #faf8fd;
            border-color: #f7f5fd;
        }

        .alert-purple-soft .alert-link {
            color: #6e6a76;
        }

        .alert-pink-soft {
            color: #91858e;
            background-color: #fcf8fb;
            border-color: #fbf5f9;
        }

        .alert-pink-soft .alert-link {
            color: #746a72;
        }

        .alert-primary-soft {
            color: #838b97;
            background-color: #f8fafe;
            border-color: #f4f8fe;
        }

        .alert-primary-soft .alert-link {
            color: #696f79;
        }

        .alert-secondary-soft {
            color: #898594;
            background-color: #faf8fd;
            border-color: #f7f5fd;
        }

        .alert-secondary-soft .alert-link {
            color: #6e6a76;
        }

        .alert-success-soft {
            color: #838f8e;
            background-color: #f8fcfb;
            border-color: #f4fafa;
        }

        .alert-success-soft .alert-link {
            color: #697272;
        }

        .alert-info-soft {
            color: #839195;
            background-color: #f8fcfe;
            border-color: #f4fbfd;
        }

        .alert-info-soft .alert-link {
            color: #697477;
        }

        .alert-warning-soft {
            color: #918f88;
            background-color: #fcfcf9;
            border-color: #fbfaf7;
        }

        .alert-warning-soft .alert-link {
            color: #74726d;
        }

        .alert-danger-soft {
            color: #918688;
            background-color: #fcf9f9;
            border-color: #fbf6f7;
        }

        .alert-danger-soft .alert-link {
            color: #746b6d;
        }

        @-webkit-keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem;
            }
        }

        @keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem;
            }
        }

        .progress {
            display: flex;
            height: 1rem;
            overflow: hidden;
            font-size: 0.75rem;
            background-color: #e0e5ec;
            border-radius: 0.35rem;
        }

        .progress-bar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            background-color: #0061f2;
            transition: width 0.6s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar {
                transition: none;
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-size: 1rem 1rem;
        }

        .progress-bar-animated {
            -webkit-animation: 1s linear infinite progress-bar-stripes;
            animation: 1s linear infinite progress-bar-stripes;
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar-animated {
                -webkit-animation: none;
                animation: none;
            }
        }

        .list-group {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            border-radius: 0.35rem;
        }

        .list-group-numbered {
            list-style-type: none;
            counter-reset: section;
        }

        .list-group-numbered>li::before {
            content: counters(section, ".") ". ";
            counter-increment: section;
        }

        .list-group-item-action {
            width: 100%;
            color: #4a515b;
            text-align: inherit;
        }

        .list-group-item-action:hover,
        .list-group-item-action:focus {
            z-index: 1;
            color: #4a515b;
            text-decoration: none;
            background-color: #f2f6fc;
        }

        .list-group-item-action:active {
            color: #69707a;
            background-color: #e0e5ec;
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 0.5rem 1rem;
            color: #212832;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.125);
        }

        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .list-group-item:last-child {
            border-bottom-right-radius: inherit;
            border-bottom-left-radius: inherit;
        }

        .list-group-item.disabled,
        .list-group-item:disabled {
            color: #69707a;
            pointer-events: none;
            background-color: #fff;
        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #0061f2;
            border-color: #0061f2;
        }

        .list-group-item+.list-group-item {
            border-top-width: 0;
        }

        .list-group-item+.list-group-item.active {
            margin-top: -1px;
            border-top-width: 1px;
        }

        .list-group-horizontal {
            flex-direction: row;
        }

        .list-group-horizontal>.list-group-item:first-child {
            border-bottom-left-radius: 0.35rem;
            border-top-right-radius: 0;
        }

        .list-group-horizontal>.list-group-item:last-child {
            border-top-right-radius: 0.35rem;
            border-bottom-left-radius: 0;
        }

        .list-group-horizontal>.list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0;
        }

        .list-group-horizontal>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px;
        }

        @media (min-width: 576px) {
            .list-group-horizontal-sm {
                flex-direction: row;
            }

            .list-group-horizontal-sm>.list-group-item:first-child {
                border-bottom-left-radius: 0.35rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-sm>.list-group-item:last-child {
                border-top-right-radius: 0.35rem;
                border-bottom-left-radius: 0;
            }

            .list-group-horizontal-sm>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }

        @media (min-width: 768px) {
            .list-group-horizontal-md {
                flex-direction: row;
            }

            .list-group-horizontal-md>.list-group-item:first-child {
                border-bottom-left-radius: 0.35rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-md>.list-group-item:last-child {
                border-top-right-radius: 0.35rem;
                border-bottom-left-radius: 0;
            }

            .list-group-horizontal-md>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }

        @media (min-width: 992px) {
            .list-group-horizontal-lg {
                flex-direction: row;
            }

            .list-group-horizontal-lg>.list-group-item:first-child {
                border-bottom-left-radius: 0.35rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-lg>.list-group-item:last-child {
                border-top-right-radius: 0.35rem;
                border-bottom-left-radius: 0;
            }

            .list-group-horizontal-lg>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }

        @media (min-width: 1200px) {
            .list-group-horizontal-xl {
                flex-direction: row;
            }

            .list-group-horizontal-xl>.list-group-item:first-child {
                border-bottom-left-radius: 0.35rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-xl>.list-group-item:last-child {
                border-top-right-radius: 0.35rem;
                border-bottom-left-radius: 0;
            }

            .list-group-horizontal-xl>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }

        @media (min-width: 1500px) {
            .list-group-horizontal-xxl {
                flex-direction: row;
            }

            .list-group-horizontal-xxl>.list-group-item:first-child {
                border-bottom-left-radius: 0.35rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-xxl>.list-group-item:last-child {
                border-top-right-radius: 0.35rem;
                border-bottom-left-radius: 0;
            }

            .list-group-horizontal-xxl>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-xxl>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }

            .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }

        .list-group-flush {
            border-radius: 0;
        }

        .list-group-flush>.list-group-item {
            border-width: 0 0 1px;
        }

        .list-group-flush>.list-group-item:last-child {
            border-bottom-width: 0;
        }

        .list-group-item-primary {
            color: #003a91;
            background-color: #ccdffc;
        }

        .list-group-item-primary.list-group-item-action:hover,
        .list-group-item-primary.list-group-item-action:focus {
            color: #003a91;
            background-color: #b8c9e3;
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #003a91;
            border-color: #003a91;
        }

        .list-group-item-secondary {
            color: #3f0077;
            background-color: #e1ccf4;
        }

        .list-group-item-secondary.list-group-item-action:hover,
        .list-group-item-secondary.list-group-item-action:focus {
            color: #3f0077;
            background-color: #cbb8dc;
        }

        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #3f0077;
            border-color: #3f0077;
        }

        .list-group-item-success {
            color: #00673f;
            background-color: #cceee1;
        }

        .list-group-item-success.list-group-item-action:hover,
        .list-group-item-success.list-group-item-action:focus {
            color: #00673f;
            background-color: #b8d6cb;
        }

        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #00673f;
            border-color: #00673f;
        }

        .list-group-item-info {
            color: #007c80;
            background-color: #ccf5f7;
        }

        .list-group-item-info.list-group-item-action:hover,
        .list-group-item-info.list-group-item-action:focus {
            color: #007c80;
            background-color: #b8ddde;
        }

        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #007c80;
            border-color: #007c80;
        }

        .list-group-item-warning {
            color: #926100;
            background-color: #fdeccc;
        }

        .list-group-item-warning.list-group-item-action:hover,
        .list-group-item-warning.list-group-item-action:focus {
            color: #926100;
            background-color: #e4d4b8;
        }

        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #926100;
            border-color: #926100;
        }

        .list-group-item-danger {
            color: #8b0d00;
            background-color: #fad0cc;
        }

        .list-group-item-danger.list-group-item-action:hover,
        .list-group-item-danger.list-group-item-action:focus {
            color: #8b0d00;
            background-color: #e1bbb8;
        }

        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #8b0d00;
            border-color: #8b0d00;
        }

        .list-group-item-light {
            color: #919497;
            background-color: #fcfdfe;
        }

        .list-group-item-light.list-group-item-action:hover,
        .list-group-item-light.list-group-item-action:focus {
            color: #919497;
            background-color: #e3e4e5;
        }

        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #919497;
            border-color: #919497;
        }

        .list-group-item-dark {
            color: #14181e;
            background-color: #d3d4d6;
        }

        .list-group-item-dark.list-group-item-action:hover,
        .list-group-item-dark.list-group-item-action:focus {
            color: #14181e;
            background-color: #bebfc1;
        }

        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #14181e;
            border-color: #14181e;
        }

        .list-group-item-black {
            color: black;
            background-color: #cccccc;
        }

        .list-group-item-black.list-group-item-action:hover,
        .list-group-item-black.list-group-item-action:focus {
            color: black;
            background-color: #b8b8b8;
        }

        .list-group-item-black.list-group-item-action.active {
            color: #fff;
            background-color: black;
            border-color: black;
        }

        .list-group-item-white {
            color: #999999;
            background-color: white;
        }

        .list-group-item-white.list-group-item-action:hover,
        .list-group-item-white.list-group-item-action:focus {
            color: #999999;
            background-color: #e6e6e6;
        }

        .list-group-item-white.list-group-item-action.active {
            color: #fff;
            background-color: #999999;
            border-color: #999999;
        }

        .list-group-item-red {
            color: #8b0d00;
            background-color: #fad0cc;
        }

        .list-group-item-red.list-group-item-action:hover,
        .list-group-item-red.list-group-item-action:focus {
            color: #8b0d00;
            background-color: #e1bbb8;
        }

        .list-group-item-red.list-group-item-action.active {
            color: #fff;
            background-color: #8b0d00;
            border-color: #8b0d00;
        }

        .list-group-item-orange {
            color: #943c00;
            background-color: #fde0cc;
        }

        .list-group-item-orange.list-group-item-action:hover,
        .list-group-item-orange.list-group-item-action:focus {
            color: #943c00;
            background-color: #e4cab8;
        }

        .list-group-item-orange.list-group-item-action.active {
            color: #fff;
            background-color: #943c00;
            border-color: #943c00;
        }

        .list-group-item-yellow {
            color: #926100;
            background-color: #fdeccc;
        }

        .list-group-item-yellow.list-group-item-action:hover,
        .list-group-item-yellow.list-group-item-action:focus {
            color: #926100;
            background-color: #e4d4b8;
        }

        .list-group-item-yellow.list-group-item-action.active {
            color: #fff;
            background-color: #926100;
            border-color: #926100;
        }

        .list-group-item-green {
            color: #00673f;
            background-color: #cceee1;
        }

        .list-group-item-green.list-group-item-action:hover,
        .list-group-item-green.list-group-item-action:focus {
            color: #00673f;
            background-color: #b8d6cb;
        }

        .list-group-item-green.list-group-item-action.active {
            color: #fff;
            background-color: #00673f;
            border-color: #00673f;
        }

        .list-group-item-teal {
            color: #007059;
            background-color: #ccf1ea;
        }

        .list-group-item-teal.list-group-item-action:hover,
        .list-group-item-teal.list-group-item-action:focus {
            color: #007059;
            background-color: #b8d9d3;
        }

        .list-group-item-teal.list-group-item-action.active {
            color: #fff;
            background-color: #007059;
            border-color: #007059;
        }

        .list-group-item-cyan {
            color: #007c80;
            background-color: #ccf5f7;
        }

        .list-group-item-cyan.list-group-item-action:hover,
        .list-group-item-cyan.list-group-item-action:focus {
            color: #007c80;
            background-color: #b8ddde;
        }

        .list-group-item-cyan.list-group-item-action.active {
            color: #fff;
            background-color: #007c80;
            border-color: #007c80;
        }

        .list-group-item-blue {
            color: #003a91;
            background-color: #ccdffc;
        }

        .list-group-item-blue.list-group-item-action:hover,
        .list-group-item-blue.list-group-item-action:focus {
            color: #003a91;
            background-color: #b8c9e3;
        }

        .list-group-item-blue.list-group-item-action.active {
            color: #fff;
            background-color: #003a91;
            border-color: #003a91;
        }

        .list-group-item-indigo {
            color: #35008b;
            background-color: #deccfa;
        }

        .list-group-item-indigo.list-group-item-action:hover,
        .list-group-item-indigo.list-group-item-action:focus {
            color: #35008b;
            background-color: #c8b8e1;
        }

        .list-group-item-indigo.list-group-item-action.active {
            color: #fff;
            background-color: #35008b;
            border-color: #35008b;
        }

        .list-group-item-purple {
            color: #3f0077;
            background-color: #e1ccf4;
        }

        .list-group-item-purple.list-group-item-action:hover,
        .list-group-item-purple.list-group-item-action:focus {
            color: #3f0077;
            background-color: #cbb8dc;
        }

        .list-group-item-purple.list-group-item-action.active {
            color: #fff;
            background-color: #3f0077;
            border-color: #3f0077;
        }

        .list-group-item-pink {
            color: #880035;
            background-color: #f9ccde;
        }

        .list-group-item-pink.list-group-item-action:hover,
        .list-group-item-pink.list-group-item-action:focus {
            color: #880035;
            background-color: #e0b8c8;
        }

        .list-group-item-pink.list-group-item-action.active {
            color: #fff;
            background-color: #880035;
            border-color: #880035;
        }

        .list-group-item-red-soft {
            color: #918688;
            background-color: #fcf9f9;
        }

        .list-group-item-red-soft.list-group-item-action:hover,
        .list-group-item-red-soft.list-group-item-action:focus {
            color: #918688;
            background-color: #e3e0e0;
        }

        .list-group-item-red-soft.list-group-item-action.active {
            color: #fff;
            background-color: #918688;
            border-color: #918688;
        }

        .list-group-item-orange-soft {
            color: #928b88;
            background-color: #fdfaf9;
        }

        .list-group-item-orange-soft.list-group-item-action:hover,
        .list-group-item-orange-soft.list-group-item-action:focus {
            color: #928b88;
            background-color: #e4e1e0;
        }

        .list-group-item-orange-soft.list-group-item-action.active {
            color: #fff;
            background-color: #928b88;
            border-color: #928b88;
        }

        .list-group-item-yellow-soft {
            color: #918f88;
            background-color: #fcfcf9;
        }

        .list-group-item-yellow-soft.list-group-item-action:hover,
        .list-group-item-yellow-soft.list-group-item-action:focus {
            color: #918f88;
            background-color: #e3e3e0;
        }

        .list-group-item-yellow-soft.list-group-item-action.active {
            color: #fff;
            background-color: #918f88;
            border-color: #918f88;
        }

        .list-group-item-green-soft {
            color: #838f8e;
            background-color: #f8fcfb;
        }

        .list-group-item-green-soft.list-group-item-action:hover,
        .list-group-item-green-soft.list-group-item-action:focus {
            color: #838f8e;
            background-color: #dfe3e2;
        }

        .list-group-item-green-soft.list-group-item-action.active {
            color: #fff;
            background-color: #838f8e;
            border-color: #838f8e;
        }

        .list-group-item-teal-soft {
            color: #839091;
            background-color: #f8fcfc;
        }

        .list-group-item-teal-soft.list-group-item-action:hover,
        .list-group-item-teal-soft.list-group-item-action:focus {
            color: #839091;
            background-color: #dfe3e3;
        }

        .list-group-item-teal-soft.list-group-item-action.active {
            color: #fff;
            background-color: #839091;
            border-color: #839091;
        }

        .list-group-item-cyan-soft {
            color: #839195;
            background-color: #f8fcfe;
        }

        .list-group-item-cyan-soft.list-group-item-action:hover,
        .list-group-item-cyan-soft.list-group-item-action:focus {
            color: #839195;
            background-color: #dfe3e5;
        }

        .list-group-item-cyan-soft.list-group-item-action.active {
            color: #fff;
            background-color: #839195;
            border-color: #839195;
        }

        .list-group-item-blue-soft {
            color: #838b97;
            background-color: #f8fafe;
        }

        .list-group-item-blue-soft.list-group-item-action:hover,
        .list-group-item-blue-soft.list-group-item-action:focus {
            color: #838b97;
            background-color: #dfe1e5;
        }

        .list-group-item-blue-soft.list-group-item-action.active {
            color: #fff;
            background-color: #838b97;
            border-color: #838b97;
        }

        .list-group-item-indigo-soft {
            color: #888596;
            background-color: #f9f8fe;
        }

        .list-group-item-indigo-soft.list-group-item-action:hover,
        .list-group-item-indigo-soft.list-group-item-action:focus {
            color: #888596;
            background-color: #e0dfe5;
        }

        .list-group-item-indigo-soft.list-group-item-action.active {
            color: #fff;
            background-color: #888596;
            border-color: #888596;
        }

        .list-group-item-purple-soft {
            color: #898594;
            background-color: #faf8fd;
        }

        .list-group-item-purple-soft.list-group-item-action:hover,
        .list-group-item-purple-soft.list-group-item-action:focus {
            color: #898594;
            background-color: #e1dfe4;
        }

        .list-group-item-purple-soft.list-group-item-action.active {
            color: #fff;
            background-color: #898594;
            border-color: #898594;
        }

        .list-group-item-pink-soft {
            color: #91858e;
            background-color: #fcf8fb;
        }

        .list-group-item-pink-soft.list-group-item-action:hover,
        .list-group-item-pink-soft.list-group-item-action:focus {
            color: #91858e;
            background-color: #e3dfe2;
        }

        .list-group-item-pink-soft.list-group-item-action.active {
            color: #fff;
            background-color: #91858e;
            border-color: #91858e;
        }

        .list-group-item-primary-soft {
            color: #838b97;
            background-color: #f8fafe;
        }

        .list-group-item-primary-soft.list-group-item-action:hover,
        .list-group-item-primary-soft.list-group-item-action:focus {
            color: #838b97;
            background-color: #dfe1e5;
        }

        .list-group-item-primary-soft.list-group-item-action.active {
            color: #fff;
            background-color: #838b97;
            border-color: #838b97;
        }

        .list-group-item-secondary-soft {
            color: #898594;
            background-color: #faf8fd;
        }

        .list-group-item-secondary-soft.list-group-item-action:hover,
        .list-group-item-secondary-soft.list-group-item-action:focus {
            color: #898594;
            background-color: #e1dfe4;
        }

        .list-group-item-secondary-soft.list-group-item-action.active {
            color: #fff;
            background-color: #898594;
            border-color: #898594;
        }

        .list-group-item-success-soft {
            color: #838f8e;
            background-color: #f8fcfb;
        }

        .list-group-item-success-soft.list-group-item-action:hover,
        .list-group-item-success-soft.list-group-item-action:focus {
            color: #838f8e;
            background-color: #dfe3e2;
        }

        .list-group-item-success-soft.list-group-item-action.active {
            color: #fff;
            background-color: #838f8e;
            border-color: #838f8e;
        }

        .list-group-item-info-soft {
            color: #839195;
            background-color: #f8fcfe;
        }

        .list-group-item-info-soft.list-group-item-action:hover,
        .list-group-item-info-soft.list-group-item-action:focus {
            color: #839195;
            background-color: #dfe3e5;
        }

        .list-group-item-info-soft.list-group-item-action.active {
            color: #fff;
            background-color: #839195;
            border-color: #839195;
        }

        .list-group-item-warning-soft {
            color: #918f88;
            background-color: #fcfcf9;
        }

        .list-group-item-warning-soft.list-group-item-action:hover,
        .list-group-item-warning-soft.list-group-item-action:focus {
            color: #918f88;
            background-color: #e3e3e0;
        }

        .list-group-item-warning-soft.list-group-item-action.active {
            color: #fff;
            background-color: #918f88;
            border-color: #918f88;
        }

        .list-group-item-danger-soft {
            color: #918688;
            background-color: #fcf9f9;
        }

        .list-group-item-danger-soft.list-group-item-action:hover,
        .list-group-item-danger-soft.list-group-item-action:focus {
            color: #918688;
            background-color: #e3e0e0;
        }

        .list-group-item-danger-soft.list-group-item-action.active {
            color: #fff;
            background-color: #918688;
            border-color: #918688;
        }

        .btn-close {
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            padding: 0.25em 0.25em;
            color: #000;
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
            border: 0;
            border-radius: 0.35rem;
            opacity: 0.5;
        }

        .btn-close:hover {
            color: #000;
            text-decoration: none;
            opacity: 0.75;
        }

        .btn-close:focus {
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(0, 97, 242, 0.25);
            opacity: 1;
        }

        .btn-close:disabled,
        .btn-close.disabled {
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            opacity: 0.25;
        }

        .btn-close-white {
            filter: invert(1) grayscale(100%) brightness(200%);
        }

        .toast {
            width: 350px;
            max-width: 100%;
            font-size: 0.875rem;
            pointer-events: auto;
            background-color: rgba(255, 255, 255, 0.85);
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 0.15rem 1.75rem 0 rgba(33, 40, 50, 0.15);
            border-radius: 0.35rem;
        }

        .toast.showing {
            opacity: 0;
        }

        .toast:not(.show) {
            display: none;
        }

        .toast-container {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            max-width: 100%;
            pointer-events: none;
        }

        .toast-container> :not(:last-child) {
            margin-bottom: 0.75rem;
        }

        .toast-header {
            display: flex;
            align-items: center;
            padding: 0.5rem 0.75rem;
            color: #69707a;
            background-color: rgba(255, 255, 255, 0.85);
            background-clip: padding-box;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            border-top-left-radius: calc(0.35rem - 1px);
            border-top-right-radius: calc(0.35rem - 1px);
        }

        .toast-header .btn-close {
            margin-right: -0.375rem;
            margin-left: 0.75rem;
        }

        .toast-body {
            padding: 0.75rem;
            word-wrap: break-word;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1055;
            display: none;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            outline: 0;
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: 0.5rem;
            pointer-events: none;
        }

        .modal.fade .modal-dialog {
            transition: transform 0.3s ease-out;
            transform: translate(0, -50px);
        }

        @media (prefers-reduced-motion: reduce) {
            .modal.fade .modal-dialog {
                transition: none;
            }
        }

        .modal.show .modal-dialog {
            transform: none;
        }

        .modal.modal-static .modal-dialog {
            transform: scale(1.02);
        }

        .modal-dialog-scrollable {
            height: calc(100% - 1rem);
        }

        .modal-dialog-scrollable .modal-content {
            max-height: 100%;
            overflow: hidden;
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto;
        }

        .modal-dialog-centered {
            display: flex;
            align-items: center;
            min-height: calc(100% - 1rem);
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 0.5rem;
            outline: 0;
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            width: 100vw;
            height: 100vh;
            background-color: #000;
        }

        .modal-backdrop.fade {
            opacity: 0;
        }

        .modal-backdrop.show {
            opacity: 0.5;
        }

        .modal-header {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: 1px solid #e0e5ec;
            border-top-left-radius: calc(0.5rem - 1px);
            border-top-right-radius: calc(0.5rem - 1px);
        }

        .modal-header .btn-close {
            padding: 0.5rem 0.5rem;
            margin: -0.5rem -0.5rem -0.5rem auto;
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5;
        }

        .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: 1rem;
        }

        .modal-footer {
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 0;
            align-items: center;
            justify-content: flex-end;
            padding: 0.75rem;
            border-top: 1px solid #e0e5ec;
            border-bottom-right-radius: calc(0.5rem - 1px);
            border-bottom-left-radius: calc(0.5rem - 1px);
        }

        .modal-footer>* {
            margin: 0.25rem;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto;
            }

            .modal-dialog-scrollable {
                height: calc(100% - 3.5rem);
            }

            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem);
            }

            .modal-sm {
                max-width: 300px;
            }
        }

        @media (min-width: 992px) {

            .modal-lg,
            .modal-xl {
                max-width: 800px;
            }
        }

        @media (min-width: 1200px) {
            .modal-xl {
                max-width: 1140px;
            }
        }

        .modal-fullscreen {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal-fullscreen .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal-fullscreen .modal-header {
            border-radius: 0;
        }

        .modal-fullscreen .modal-body {
            overflow-y: auto;
        }

        .modal-fullscreen .modal-footer {
            border-radius: 0;
        }

        @media (max-width: 575.98px) {
            .modal-fullscreen-sm-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-sm-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-sm-down .modal-header {
                border-radius: 0;
            }

            .modal-fullscreen-sm-down .modal-body {
                overflow-y: auto;
            }

            .modal-fullscreen-sm-down .modal-footer {
                border-radius: 0;
            }
        }

        @media (max-width: 767.98px) {
            .modal-fullscreen-md-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-md-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-md-down .modal-header {
                border-radius: 0;
            }

            .modal-fullscreen-md-down .modal-body {
                overflow-y: auto;
            }

            .modal-fullscreen-md-down .modal-footer {
                border-radius: 0;
            }
        }

        @media (max-width: 991.98px) {
            .modal-fullscreen-lg-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-lg-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-lg-down .modal-header {
                border-radius: 0;
            }

            .modal-fullscreen-lg-down .modal-body {
                overflow-y: auto;
            }

            .modal-fullscreen-lg-down .modal-footer {
                border-radius: 0;
            }
        }

        @media (max-width: 1199.98px) {
            .modal-fullscreen-xl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-xl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-xl-down .modal-header {
                border-radius: 0;
            }

            .modal-fullscreen-xl-down .modal-body {
                overflow-y: auto;
            }

            .modal-fullscreen-xl-down .modal-footer {
                border-radius: 0;
            }
        }

        @media (max-width: 1499.98px) {
            .modal-fullscreen-xxl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-xxl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-xxl-down .modal-header {
                border-radius: 0;
            }

            .modal-fullscreen-xxl-down .modal-body {
                overflow-y: auto;
            }

            .modal-fullscreen-xxl-down .modal-footer {
                border-radius: 0;
            }
        }

        .tooltip {
            position: absolute;
            z-index: 1080;
            display: block;
            margin: 0;
            font-family: "Metropolis", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.875rem;
            word-wrap: break-word;
            opacity: 0;
        }

        .tooltip.show {
            opacity: 0.9;
        }

        .tooltip .tooltip-arrow {
            position: absolute;
            display: block;
            width: 0.8rem;
            height: 0.4rem;
        }

        .tooltip .tooltip-arrow::before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-tooltip-top,
        .bs-tooltip-auto[data-popper-placement^=top] {
            padding: 0.4rem 0;
        }

        .bs-tooltip-top .tooltip-arrow,
        .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
            bottom: 0;
        }

        .bs-tooltip-top .tooltip-arrow::before,
        .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
            top: -1px;
            border-width: 0.4rem 0.4rem 0;
            border-top-color: #000;
        }

        .bs-tooltip-end,
        .bs-tooltip-auto[data-popper-placement^=right] {
            padding: 0 0.4rem;
        }

        .bs-tooltip-end .tooltip-arrow,
        .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
            left: 0;
            width: 0.4rem;
            height: 0.8rem;
        }

        .bs-tooltip-end .tooltip-arrow::before,
        .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
            right: -1px;
            border-width: 0.4rem 0.4rem 0.4rem 0;
            border-right-color: var(--bs-orange);
        }

        .bs-tooltip-bottom,
        .bs-tooltip-auto[data-popper-placement^=bottom] {
            padding: 0.4rem 0;
        }

        .bs-tooltip-bottom .tooltip-arrow,
        .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
            top: 0;
        }

        .bs-tooltip-bottom .tooltip-arrow::before,
        .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
            bottom: -1px;
            border-width: 0 0.4rem 0.4rem;
            border-bottom-color: var(--bs-orange);
        }

        .bs-tooltip-start,
        .bs-tooltip-auto[data-popper-placement^=left] {
            padding: 0 0.4rem;
        }

        .bs-tooltip-start .tooltip-arrow,
        .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
            right: 0;
            width: 0.4rem;
            height: 0.8rem;
        }

        .bs-tooltip-start .tooltip-arrow::before,
        .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
            left: -1px;
            border-width: 0.4rem 0 0.4rem 0.4rem;
            border-left-color: var(--bs-orange);
        }

        .tooltip-inner {
            max-width: 200px;
            padding: 0.25rem 0.5rem;
            color: #fff;
            text-align: center;
            background-color: var(--bs-orange);
            border-radius: 0.35rem;
        }

        .popover {
            position: absolute;
            top: 0;
            left: 0
                /* rtl:ignore */
            ;
            z-index: 1070;
            display: block;
            max-width: 276px;
            font-family: "Metropolis", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.875rem;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 0.5rem;
        }

        .popover .popover-arrow {
            position: absolute;
            display: block;
            width: 1rem;
            height: 0.5rem;
        }

        .popover .popover-arrow::before,
        .popover .popover-arrow::after {
            position: absolute;
            display: block;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-popover-top>.popover-arrow,
        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow {
            bottom: calc(-0.5rem - 1px);
        }

        .bs-popover-top>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before {
            bottom: 0;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: rgba(0, 0, 0, 0.25);
        }

        .bs-popover-top>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after {
            bottom: 1px;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: #fff;
        }

        .bs-popover-end>.popover-arrow,
        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow {
            left: calc(-0.5rem - 1px);
            width: 0.5rem;
            height: 1rem;
        }

        .bs-popover-end>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before {
            left: 0;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: rgba(0, 0, 0, 0.25);
        }

        .bs-popover-end>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after {
            left: 1px;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: #fff;
        }

        .bs-popover-bottom>.popover-arrow,
        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow {
            top: calc(-0.5rem - 1px);
        }

        .bs-popover-bottom>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before {
            top: 0;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: rgba(0, 0, 0, 0.25);
        }

        .bs-popover-bottom>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after {
            top: 1px;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: #fff;
        }

        .bs-popover-bottom .popover-header::before,
        .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 1rem;
            margin-left: -0.5rem;
            content: "";
            border-bottom: 1px solid #f0f0f0;
        }

        .bs-popover-start>.popover-arrow,
        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow {
            right: calc(-0.5rem - 1px);
            width: 0.5rem;
            height: 1rem;
        }

        .bs-popover-start>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before {
            right: 0;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: rgba(0, 0, 0, 0.25);
        }

        .bs-popover-start>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after {
            right: 1px;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: #fff;
        }

        .popover-header {
            padding: 0.5rem 1rem;
            margin-bottom: 0;
            font-size: 1rem;
            color: #363d47;
            background-color: #f0f0f0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            border-top-left-radius: calc(0.5rem - 1px);
            border-top-right-radius: calc(0.5rem - 1px);
        }

        .popover-header:empty {
            display: none;
        }

        .popover-body {
            padding: 1rem 1rem;
            color: #69707a;
        }

        .carousel {
            position: relative;
        }

        .carousel.pointer-event {
            touch-action: pan-y;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-inner::after {
            display: block;
            clear: both;
            content: "";
        }

        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: transform 0.6s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel-item {
                transition: none;
            }
        }

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }

        /* rtl:begin:ignore */
        .carousel-item-next:not(.carousel-item-start),
        .active.carousel-item-end {
            transform: translateX(100%);
        }

        .carousel-item-prev:not(.carousel-item-end),
        .active.carousel-item-start {
            transform: translateX(-100%);
        }

        /* rtl:end:ignore */
        .carousel-fade .carousel-item {
            opacity: 0;
            transition-property: opacity;
            transform: none;
        }

        .carousel-fade .carousel-item.active,
        .carousel-fade .carousel-item-next.carousel-item-start,
        .carousel-fade .carousel-item-prev.carousel-item-end {
            z-index: 1;
            opacity: 1;
        }

        .carousel-fade .active.carousel-item-start,
        .carousel-fade .active.carousel-item-end {
            z-index: 0;
            opacity: 0;
            transition: opacity 0s 0.6s;
        }

        @media (prefers-reduced-motion: reduce) {

            .carousel-fade .active.carousel-item-start,
            .carousel-fade .active.carousel-item-end {
                transition: none;
            }
        }

        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15%;
            padding: 0;
            color: #fff;
            text-align: center;
            background: none;
            border: 0;
            opacity: 0.5;
            transition: opacity 0.15s ease;
        }

        @media (prefers-reduced-motion: reduce) {

            .carousel-control-prev,
            .carousel-control-next {
                transition: none;
            }
        }

        .carousel-control-prev:hover,
        .carousel-control-prev:focus,
        .carousel-control-next:hover,
        .carousel-control-next:focus {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: 0.9;
        }

        .carousel-control-prev {
            left: 0;
        }

        .carousel-control-next {
            right: 0;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            background-repeat: no-repeat;
            background-position: 50%;
            background-size: 100% 100%;
        }

        /* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 2;
            display: flex;
            justify-content: center;
            padding: 0;
            margin-right: 15%;
            margin-bottom: 1rem;
            margin-left: 15%;
            list-style: none;
        }

        .carousel-indicators [data-bs-target] {
            box-sizing: content-box;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            padding: 0;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: 0.5;
            transition: opacity 0.6s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel-indicators [data-bs-target] {
                transition: none;
            }
        }

        .carousel-indicators .active {
            opacity: 1;
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 1.25rem;
            left: 15%;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: #fff;
            text-align: center;
        }

        .carousel-dark .carousel-control-prev-icon,
        .carousel-dark .carousel-control-next-icon {
            filter: invert(1) grayscale(100);
        }

        .carousel-dark .carousel-indicators [data-bs-target] {
            background-color: #000;
        }

        .carousel-dark .carousel-caption {
            color: #000;
        }

        @-webkit-keyframes spinner-border {
            to {
                transform: rotate(360deg)
                    /* rtl:ignore */
                ;
            }
        }

        @keyframes spinner-border {
            to {
                transform: rotate(360deg)
                    /* rtl:ignore */
                ;
            }
        }

        .spinner-border {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: -0.125em;
            border: 0.25em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: 0.75s linear infinite spinner-border;
            animation: 0.75s linear infinite spinner-border;
        }

        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
            border-width: 0.2em;
        }

        @-webkit-keyframes spinner-grow {
            0% {
                transform: scale(0);
            }

            50% {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes spinner-grow {
            0% {
                transform: scale(0);
            }

            50% {
                opacity: 1;
                transform: none;
            }
        }

        .spinner-grow {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: -0.125em;
            background-color: currentColor;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: 0.75s linear infinite spinner-grow;
            animation: 0.75s linear infinite spinner-grow;
        }

        .spinner-grow-sm {
            width: 1rem;
            height: 1rem;
        }

        @media (prefers-reduced-motion: reduce) {

            .spinner-border,
            .spinner-grow {
                -webkit-animation-duration: 1.5s;
                animation-duration: 1.5s;
            }
        }

        .offcanvas {
            position: fixed;
            bottom: 0;
            z-index: 1045;
            display: flex;
            flex-direction: column;
            max-width: 100%;
            visibility: hidden;
            background-color: #fff;
            background-clip: padding-box;
            outline: 0;
            transition: transform 0.3s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .offcanvas {
                transition: none;
            }
        }

        .offcanvas-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #000;
        }

        .offcanvas-backdrop.fade {
            opacity: 0;
        }

        .offcanvas-backdrop.show {
            opacity: 0.5;
        }

        .offcanvas-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1rem;
        }

        .offcanvas-header .btn-close {
            padding: 0.5rem 0.5rem;
            margin-top: -0.5rem;
            margin-right: -0.5rem;
            margin-bottom: -0.5rem;
        }

        .offcanvas-title {
            margin-bottom: 0;
            line-height: 1.5;
        }

        .offcanvas-body {
            flex-grow: 1;
            padding: 1rem 1rem;
            overflow-y: auto;
        }

        .offcanvas-start {
            top: 0;
            left: 0;
            width: 400px;
            border-right: 1px solid rgba(0, 0, 0, 0.2);
            transform: translateX(-100%);
        }

        .offcanvas-end {
            top: 0;
            right: 0;
            width: 400px;
            border-left: 1px solid rgba(0, 0, 0, 0.2);
            transform: translateX(100%);
        }

        .offcanvas-top {
            top: 0;
            right: 0;
            left: 0;
            height: 30vh;
            max-height: 100%;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            transform: translateY(-100%);
        }

        .offcanvas-bottom {
            right: 0;
            left: 0;
            height: 30vh;
            max-height: 100%;
            border-top: 1px solid rgba(0, 0, 0, 0.2);
            transform: translateY(100%);
        }

        .offcanvas.show {
            transform: none;
        }

        .placeholder {
            display: inline-block;
            min-height: 1em;
            vertical-align: middle;
            cursor: wait;
            background-color: currentColor;
            opacity: 0.5;
        }

        .placeholder.btn::before {
            display: inline-block;
            content: "";
        }

        .placeholder-xs {
            min-height: 0.6em;
        }

        .placeholder-sm {
            min-height: 0.8em;
        }

        .placeholder-lg {
            min-height: 1.2em;
        }

        .placeholder-glow .placeholder {
            -webkit-animation: placeholder-glow 2s ease-in-out infinite;
            animation: placeholder-glow 2s ease-in-out infinite;
        }

        @-webkit-keyframes placeholder-glow {
            50% {
                opacity: 0.2;
            }
        }

        @keyframes placeholder-glow {
            50% {
                opacity: 0.2;
            }
        }

        .placeholder-wave {
            -webkit-mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
            mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
            -webkit-mask-size: 200% 100%;
            mask-size: 200% 100%;
            -webkit-animation: placeholder-wave 2s linear infinite;
            animation: placeholder-wave 2s linear infinite;
        }

        @-webkit-keyframes placeholder-wave {
            100% {
                -webkit-mask-position: -200% 0%;
                mask-position: -200% 0%;
            }
        }

        @keyframes placeholder-wave {
            100% {
                -webkit-mask-position: -200% 0%;
                mask-position: -200% 0%;
            }
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }

        .link-primary {
            color: #0061f2;
        }

        .link-primary:hover,
        .link-primary:focus {
            color: #004ec2;
        }

        .link-secondary {
            color: #6900c7;
        }

        .link-secondary:hover,
        .link-secondary:focus {
            color: #54009f;
        }

        .link-success {
            color: #00ac69;
        }

        .link-success:hover,
        .link-success:focus {
            color: #008a54;
        }

        .link-info {
            color: #00cfd5;
        }

        .link-info:hover,
        .link-info:focus {
            color: #00a6aa;
        }

        .link-warning {
            color: #f4a100;
        }

        .link-warning:hover,
        .link-warning:focus {
            color: #c38100;
        }

        .link-danger {
            color: #e81500;
        }

        .link-danger:hover,
        .link-danger:focus {
            color: #ba1100;
        }

        .link-light {
            color: #f2f6fc;
        }

        .link-light:hover,
        .link-light:focus {
            color: #f5f8fd;
        }

        .link-dark {
            color: #212832;
        }

        .link-dark:hover,
        .link-dark:focus {
            color: #1a2028;
        }

        .link-black {
            color: #000;
        }

        .link-black:hover,
        .link-black:focus {
            color: black;
        }

        .link-white {
            color: #fff;
        }

        .link-white:hover,
        .link-white:focus {
            color: white;
        }

        .link-red {
            color: #e81500;
        }

        .link-red:hover,
        .link-red:focus {
            color: #ba1100;
        }

        .link-orange {
            color: #f76400;
        }

        .link-orange:hover,
        .link-orange:focus {
            color: #c65000;
        }

        .link-yellow {
            color: #f4a100;
        }

        .link-yellow:hover,
        .link-yellow:focus {
            color: #c38100;
        }

        .link-green {
            color: #00ac69;
        }

        .link-green:hover,
        .link-green:focus {
            color: #008a54;
        }

        .link-teal {
            color: #00ba94;
        }

        .link-teal:hover,
        .link-teal:focus {
            color: #009576;
        }

        .link-cyan {
            color: #00cfd5;
        }

        .link-cyan:hover,
        .link-cyan:focus {
            color: #00a6aa;
        }

        .link-blue {
            color: #0061f2;
        }

        .link-blue:hover,
        .link-blue:focus {
            color: #004ec2;
        }

        .link-indigo {
            color: #5800e8;
        }

        .link-indigo:hover,
        .link-indigo:focus {
            color: #4600ba;
        }

        .link-purple {
            color: #6900c7;
        }

        .link-purple:hover,
        .link-purple:focus {
            color: #54009f;
        }

        .link-pink {
            color: #e30059;
        }

        .link-pink:hover,
        .link-pink:focus {
            color: #b60047;
        }

        .link-red-soft {
            color: #f1e0e3;
        }

        .link-red-soft:hover,
        .link-red-soft:focus {
            color: #f4e6e9;
        }

        .link-orange-soft {
            color: #f3e7e3;
        }

        .link-orange-soft:hover,
        .link-orange-soft:focus {
            color: #f5ece9;
        }

        .link-yellow-soft {
            color: #f2eee3;
        }

        .link-yellow-soft:hover,
        .link-yellow-soft:focus {
            color: #f5f1e9;
        }

        .link-green-soft {
            color: #daefed;
        }

        .link-green-soft:hover,
        .link-green-soft:focus {
            color: #e1f2f1;
        }

        .link-teal-soft {
            color: #daf0f2;
        }

        .link-teal-soft:hover,
        .link-teal-soft:focus {
            color: #e1f3f5;
        }

        .link-cyan-soft {
            color: #daf2f8;
        }

        .link-cyan-soft:hover,
        .link-cyan-soft:focus {
            color: #e1f5f9;
        }

        .link-blue-soft {
            color: #dae7fb;
        }

        .link-blue-soft:hover,
        .link-blue-soft:focus {
            color: #e1ecfc;
        }

        .link-indigo-soft {
            color: #e3ddfa;
        }

        .link-indigo-soft:hover,
        .link-indigo-soft:focus {
            color: #e9e4fb;
        }

        .link-purple-soft {
            color: #e4ddf7;
        }

        .link-purple-soft:hover,
        .link-purple-soft:focus {
            color: #e9e4f9;
        }

        .link-pink-soft {
            color: #f1ddec;
        }

        .link-pink-soft:hover,
        .link-pink-soft:focus {
            color: #f4e4f0;
        }

        .link-primary-soft {
            color: #dae7fb;
        }

        .link-primary-soft:hover,
        .link-primary-soft:focus {
            color: #e1ecfc;
        }

        .link-secondary-soft {
            color: #e4ddf7;
        }

        .link-secondary-soft:hover,
        .link-secondary-soft:focus {
            color: #e9e4f9;
        }

        .link-success-soft {
            color: #daefed;
        }

        .link-success-soft:hover,
        .link-success-soft:focus {
            color: #e1f2f1;
        }

        .link-info-soft {
            color: #daf2f8;
        }

        .link-info-soft:hover,
        .link-info-soft:focus {
            color: #e1f5f9;
        }

        .link-warning-soft {
            color: #f2eee3;
        }

        .link-warning-soft:hover,
        .link-warning-soft:focus {
            color: #f5f1e9;
        }

        .link-danger-soft {
            color: #f1e0e3;
        }

        .link-danger-soft:hover,
        .link-danger-soft:focus {
            color: #f4e6e9;
        }

        .ratio {
            position: relative;
            width: 100%;
        }

        .ratio::before {
            display: block;
            padding-top: var(--bs-aspect-ratio);
            content: "";
        }

        .ratio>* {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .ratio-1x1 {
            --bs-aspect-ratio: 100%;
        }

        .ratio-4x3 {
            --bs-aspect-ratio: 75%;
        }

        .ratio-16x9 {
            --bs-aspect-ratio: 56.25%;
        }

        .ratio-21x9 {
            --bs-aspect-ratio: 42.8571428571%;
        }

        .fixed-top,
        .nav-fixed #layoutSidenav #layoutSidenav_nav,
        .nav-fixed .topnav {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }

        .sticky-top,
        .nav-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020;
        }

        @media (min-width: 576px) {
            .sticky-sm-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }

        @media (min-width: 768px) {
            .sticky-md-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }

        @media (min-width: 992px) {
            .sticky-lg-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }

        @media (min-width: 1200px) {
            .sticky-xl-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }

        @media (min-width: 1500px) {
            .sticky-xxl-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }

        .hstack {
            display: flex;
            flex-direction: row;
            align-items: center;
            align-self: stretch;
        }

        .vstack {
            display: flex;
            flex: 1 1 auto;
            flex-direction: column;
            align-self: stretch;
        }

        .visually-hidden,
        .visually-hidden-focusable:not(:focus):not(:focus-within) {
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            white-space: nowrap !important;
            border: 0 !important;
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            content: "";
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .vr {
            display: inline-block;
            align-self: stretch;
            width: 1px;
            min-height: 1em;
            background-color: currentColor;
            opacity: 0.25;
        }

        .align-baseline {
            vertical-align: baseline !important;
        }

        .align-top {
            vertical-align: top !important;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .align-bottom {
            vertical-align: bottom !important;
        }

        .align-text-bottom {
            vertical-align: text-bottom !important;
        }

        .align-text-top {
            vertical-align: text-top !important;
        }

        .float-start {
            float: left !important;
        }

        .float-end {
            float: right !important;
        }

        .float-none {
            float: none !important;
        }

        .opacity-0 {
            opacity: 0 !important;
        }

        .opacity-25 {
            opacity: 0.25 !important;
        }

        .opacity-50 {
            opacity: 0.5 !important;
        }

        .opacity-75 {
            opacity: 0.75 !important;
        }

        .opacity-100 {
            opacity: 1 !important;
        }

        .overflow-auto {
            overflow: auto !important;
        }

        .overflow-hidden {
            overflow: hidden !important;
        }

        .overflow-visible {
            overflow: visible !important;
        }

        .overflow-scroll {
            overflow: scroll !important;
        }

        .d-inline {
            display: inline !important;
        }

        .d-inline-block {
            display: inline-block !important;
        }

        .d-block {
            display: block !important;
        }

        .d-grid {
            display: grid !important;
        }

        .d-table {
            display: table !important;
        }

        .d-table-row {
            display: table-row !important;
        }

        .d-table-cell {
            display: table-cell !important;
        }

        .d-flex {
            display: flex !important;
        }

        .d-inline-flex {
            display: inline-flex !important;
        }

        .d-none {
            display: none !important;
        }

        /*.shadow {
  box-shadow: 0 0.15rem 1.75rem 0 rgba(33, 40, 50, 0.15) !important;
}*/
        .shadow {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(255, 255, 255, 0.3) !important;
        }

        .shadow-sm {
            box-shadow: 0 0.125rem 0.25rem 0 rgba(33, 40, 50, 0.2) !important;
        }

        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }

        .position-static {
            position: static !important;
        }

        .position-relative {
            position: relative !important;
        }

        .position-absolute {
            position: absolute !important;
        }

        .position-fixed {
            position: fixed !important;
        }

        .position-sticky {
            position: -webkit-sticky !important;
            position: sticky !important;
        }

        .top-0 {
            top: 0 !important;
        }

        .top-50 {
            top: 50% !important;
        }

        .top-100 {
            top: 100% !important;
        }

        .bottom-0 {
            bottom: 0 !important;
        }

        .bottom-50 {
            bottom: 50% !important;
        }

        .bottom-100 {
            bottom: 100% !important;
        }

        .start-0 {
            left: 0 !important;
        }

        .start-50 {
            left: 50% !important;
        }

        .start-100 {
            left: 100% !important;
        }

        .end-0 {
            right: 0 !important;
        }

        .end-50 {
            right: 50% !important;
        }

        .end-100 {
            right: 100% !important;
        }

        .translate-middle {
            transform: translate(-50%, -50%) !important;
        }

        .translate-middle-x {
            transform: translateX(-50%) !important;
        }

        .translate-middle-y {
            transform: translateY(-50%) !important;
        }

        .border {
            border: 1px solid #e0e5ec !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .border-top {
            border-top: 1px solid #e0e5ec !important;
        }

        .border-top-0 {
            border-top: 0 !important;
        }

        .border-end {
            border-right: 1px solid #e0e5ec !important;
        }

        .border-end-0 {
            border-right: 0 !important;
        }

        .border-bottom {
            border-bottom: 1px solid #e0e5ec !important;
        }

        .border-bottom-0 {
            border-bottom: 0 !important;
        }

        .border-start {
            border-left: 1px solid #e0e5ec !important;
        }

        .border-start-0 {
            border-left: 0 !important;
        }

        .border-primary {
            border-color: #0061f2 !important;
        }

        .border-secondary {
            border-color: #6900c7 !important;
        }

        .border-success {
            border-color: #00ac69 !important;
        }

        .border-info {
            border-color: #00cfd5 !important;
        }

        .border-warning {
            border-color: #f4a100 !important;
        }

        .border-danger {
            border-color: #e81500 !important;
        }

        .border-light {
            border-color: #f2f6fc !important;
        }

        .border-dark {
            border-color: #212832 !important;
        }

        .border-black {
            border-color: #000 !important;
        }

        .border-white {
            border-color: #fff !important;
        }

        .border-red {
            border-color: #e81500 !important;
        }

        .border-orange {
            border-color: #f76400 !important;
        }

        .border-yellow {
            border-color: #f4a100 !important;
        }

        .border-green {
            border-color: #00ac69 !important;
        }

        .border-teal {
            border-color: #00ba94 !important;
        }

        .border-cyan {
            border-color: #00cfd5 !important;
        }

        .border-blue {
            border-color: #0061f2 !important;
        }

        .border-indigo {
            border-color: #5800e8 !important;
        }

        .border-purple {
            border-color: #6900c7 !important;
        }

        .border-pink {
            border-color: #e30059 !important;
        }

        .border-red-soft {
            border-color: #f1e0e3 !important;
        }

        .border-orange-soft {
            border-color: #f3e7e3 !important;
        }

        .border-yellow-soft {
            border-color: #f2eee3 !important;
        }

        .border-green-soft {
            border-color: #daefed !important;
        }

        .border-teal-soft {
            border-color: #daf0f2 !important;
        }

        .border-cyan-soft {
            border-color: #daf2f8 !important;
        }

        .border-blue-soft {
            border-color: #dae7fb !important;
        }

        .border-indigo-soft {
            border-color: #e3ddfa !important;
        }

        .border-purple-soft {
            border-color: #e4ddf7 !important;
        }

        .border-pink-soft {
            border-color: #f1ddec !important;
        }

        .border-primary-soft {
            border-color: #dae7fb !important;
        }

        .border-secondary-soft {
            border-color: #e4ddf7 !important;
        }

        .border-success-soft {
            border-color: #daefed !important;
        }

        .border-info-soft {
            border-color: #daf2f8 !important;
        }

        .border-warning-soft {
            border-color: #f2eee3 !important;
        }

        .border-danger-soft {
            border-color: #f1e0e3 !important;
        }

        .border-1 {
            border-width: 1px !important;
        }

        .border-2 {
            border-width: 2px !important;
        }

        .border-3 {
            border-width: 3px !important;
        }

        .border-4 {
            border-width: 4px !important;
        }

        .border-5 {
            border-width: 5px !important;
        }

        .w-25 {
            width: 25% !important;
        }

        .w-50 {
            width: 50% !important;
        }

        .w-75 {
            width: 75% !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .w-auto {
            width: auto !important;
        }

        .mw-100 {
            max-width: 100% !important;
        }

        .vw-100 {
            width: 100vw !important;
        }

        .min-vw-100 {
            min-width: 100vw !important;
        }

        .h-25 {
            height: 25% !important;
        }

        .h-50 {
            height: 50% !important;
        }

        .h-75 {
            height: 75% !important;
        }

        .h-100 {
            height: 100% !important;
        }

        .h-auto {
            height: auto !important;
        }

        .mh-100 {
            max-height: 100% !important;
        }

        .vh-100 {
            height: 100vh !important;
        }

        .min-vh-100 {
            min-height: 100vh !important;
        }

        .flex-fill {
            flex: 1 1 auto !important;
        }

        .flex-row {
            flex-direction: row !important;
        }

        .flex-column {
            flex-direction: column !important;
        }

        .flex-row-reverse {
            flex-direction: row-reverse !important;
        }

        .flex-column-reverse {
            flex-direction: column-reverse !important;
        }

        .flex-grow-0 {
            flex-grow: 0 !important;
        }

        .flex-grow-1 {
            flex-grow: 1 !important;
        }

        .flex-shrink-0 {
            flex-shrink: 0 !important;
        }

        .flex-shrink-1 {
            flex-shrink: 1 !important;
        }

        .flex-wrap {
            flex-wrap: wrap !important;
        }

        .flex-nowrap {
            flex-wrap: nowrap !important;
        }

        .flex-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .gap-0 {
            gap: 0 !important;
        }

        .gap-1 {
            gap: 0.25rem !important;
        }

        .gap-2 {
            gap: 0.5rem !important;
        }

        .gap-3 {
            gap: 1rem !important;
        }

        .gap-4 {
            gap: 1.5rem !important;
        }

        .gap-5 {
            gap: 2.5rem !important;
        }

        .gap-10 {
            gap: 6rem !important;
        }

        .gap-15 {
            gap: 9rem !important;
        }

        .justify-content-start {
            justify-content: flex-start !important;
        }

        .justify-content-end {
            justify-content: flex-end !important;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .justify-content-between {
            justify-content: space-between !important;
        }

        .justify-content-around {
            justify-content: space-around !important;
        }

        .justify-content-evenly {
            justify-content: space-evenly !important;
        }

        .align-items-start {
            align-items: flex-start !important;
        }

        .align-items-end {
            align-items: flex-end !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .align-items-baseline {
            align-items: baseline !important;
        }

        .align-items-stretch {
            align-items: stretch !important;
        }

        .align-content-start {
            align-content: flex-start !important;
        }

        .align-content-end {
            align-content: flex-end !important;
        }

        .align-content-center {
            align-content: center !important;
        }

        .align-content-between {
            align-content: space-between !important;
        }

        .align-content-around {
            align-content: space-around !important;
        }

        .align-content-stretch {
            align-content: stretch !important;
        }

        .align-self-auto {
            align-self: auto !important;
        }

        .align-self-start {
            align-self: flex-start !important;
        }

        .align-self-end {
            align-self: flex-end !important;
        }

        .align-self-center {
            align-self: center !important;
        }

        .align-self-baseline {
            align-self: baseline !important;
        }

        .align-self-stretch {
            align-self: stretch !important;
        }

        .order-first {
            order: -1 !important;
        }

        .order-0 {
            order: 0 !important;
        }

        .order-1 {
            order: 1 !important;
        }

        .order-2 {
            order: 2 !important;
        }

        .order-3 {
            order: 3 !important;
        }

        .order-4 {
            order: 4 !important;
        }

        .order-5 {
            order: 5 !important;
        }

        .order-last {
            order: 6 !important;
        }

        .m-0 {
            margin: 0 !important;
        }

        .m-1 {
            margin: 0.25rem !important;
        }

        .m-2 {
            margin: 0.5rem !important;
        }

        .m-3 {
            margin: 1rem !important;
        }

        .m-4 {
            margin: 1.5rem !important;
        }

        .m-5 {
            margin: 2.5rem !important;
        }

        .m-10 {
            margin: 6rem !important;
        }

        .m-15 {
            margin: 9rem !important;
        }

        .m-auto {
            margin: auto !important;
        }

        .mx-0 {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .mx-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important;
        }

        .mx-2 {
            margin-right: 0.5rem !important;
            margin-left: 0.5rem !important;
        }

        .mx-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important;
        }

        .mx-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important;
        }

        .mx-5 {
            margin-right: 2.5rem !important;
            margin-left: 2.5rem !important;
        }

        .mx-10 {
            margin-right: 6rem !important;
            margin-left: 6rem !important;
        }

        .mx-15 {
            margin-right: 9rem !important;
            margin-left: 9rem !important;
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .my-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .my-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important;
        }

        .my-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .my-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .my-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
        }

        .my-5 {
            margin-top: 2.5rem !important;
            margin-bottom: 2.5rem !important;
        }

        .my-10 {
            margin-top: 6rem !important;
            margin-bottom: 6rem !important;
        }

        .my-15 {
            margin-top: 9rem !important;
            margin-bottom: 9rem !important;
        }

        .my-auto {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

        .mt-0 {
            margin-top: 0 !important;
        }

        .mt-1 {
            margin-top: 0.25rem !important;
        }

        .mt-2 {
            margin-top: 0.5rem !important;
        }

        .mt-3 {
            margin-top: 1rem !important;
        }

        .mt-4 {
            margin-top: 1.5rem !important;
        }

        .mt-5 {
            margin-top: 2.5rem !important;
        }

        .mt-10 {
            margin-top: 6rem !important;
        }

        .mt-15 {
            margin-top: 9rem !important;
        }

        .mt-auto {
            margin-top: auto !important;
        }

        .me-0 {
            margin-right: 0 !important;
        }

        .me-1 {
            margin-right: 0.25rem !important;
        }

        .me-2 {
            margin-right: 0.5rem !important;
        }

        .me-3 {
            margin-right: 1rem !important;
        }

        .me-4 {
            margin-right: 1.5rem !important;
        }

        .me-5 {
            margin-right: 2.5rem !important;
        }

        .me-10 {
            margin-right: 6rem !important;
        }

        .me-15 {
            margin-right: 9rem !important;
        }

        .me-auto {
            margin-right: auto !important;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mb-1 {
            margin-bottom: 0.25rem !important;
        }

        .mb-2 {
            margin-bottom: 0.5rem !important;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .mb-5 {
            margin-bottom: 2.5rem !important;
        }

        .mb-10 {
            margin-bottom: 6rem !important;
        }

        .mb-15 {
            margin-bottom: 9rem !important;
        }

        .mb-auto {
            margin-bottom: auto !important;
        }

        .ms-0 {
            margin-left: 0 !important;
        }

        .ms-1 {
            margin-left: 0.25rem !important;
        }

        .ms-2 {
            margin-left: 0.5rem !important;
        }

        .ms-3 {
            margin-left: 1rem !important;
        }

        .ms-4 {
            margin-left: 1.5rem !important;
        }

        .ms-5 {
            margin-left: 2.5rem !important;
        }

        .ms-10 {
            margin-left: 6rem !important;
        }

        .ms-15 {
            margin-left: 9rem !important;
        }

        .ms-auto {
            margin-left: auto !important;
        }

        .m-n1 {
            margin: -0.25rem !important;
        }

        .m-n2 {
            margin: -0.5rem !important;
        }

        .m-n3 {
            margin: -1rem !important;
        }

        .m-n4 {
            margin: -1.5rem !important;
        }

        .m-n5 {
            margin: -2.5rem !important;
        }

        .m-n10 {
            margin: -6rem !important;
        }

        .m-n15 {
            margin: -9rem !important;
        }

        .mx-n1 {
            margin-right: -0.25rem !important;
            margin-left: -0.25rem !important;
        }

        .mx-n2 {
            margin-right: -0.5rem !important;
            margin-left: -0.5rem !important;
        }

        .mx-n3 {
            margin-right: -1rem !important;
            margin-left: -1rem !important;
        }

        .mx-n4 {
            margin-right: -1.5rem !important;
            margin-left: -1.5rem !important;
        }

        .mx-n5 {
            margin-right: -2.5rem !important;
            margin-left: -2.5rem !important;
        }

        .mx-n10 {
            margin-right: -6rem !important;
            margin-left: -6rem !important;
        }

        .mx-n15 {
            margin-right: -9rem !important;
            margin-left: -9rem !important;
        }

        .my-n1 {
            margin-top: -0.25rem !important;
            margin-bottom: -0.25rem !important;
        }

        .my-n2 {
            margin-top: -0.5rem !important;
            margin-bottom: -0.5rem !important;
        }

        .my-n3 {
            margin-top: -1rem !important;
            margin-bottom: -1rem !important;
        }

        .my-n4 {
            margin-top: -1.5rem !important;
            margin-bottom: -1.5rem !important;
        }

        .my-n5 {
            margin-top: -2.5rem !important;
            margin-bottom: -2.5rem !important;
        }

        .my-n10 {
            margin-top: -6rem !important;
            margin-bottom: -6rem !important;
        }

        .my-n15 {
            margin-top: -9rem !important;
            margin-bottom: -9rem !important;
        }

        .mt-n1 {
            margin-top: -0.25rem !important;
        }

        .mt-n2 {
            margin-top: -0.5rem !important;
        }

        .mt-n3 {
            margin-top: -1rem !important;
        }

        .mt-n4 {
            margin-top: -1.5rem !important;
        }

        .mt-n5 {
            margin-top: -2.5rem !important;
        }

        .mt-n10 {
            margin-top: -6rem !important;
        }

        .mt-n15 {
            margin-top: -9rem !important;
        }

        .me-n1 {
            margin-right: -0.25rem !important;
        }

        .me-n2 {
            margin-right: -0.5rem !important;
        }

        .me-n3 {
            margin-right: -1rem !important;
        }

        .me-n4 {
            margin-right: -1.5rem !important;
        }

        .me-n5 {
            margin-right: -2.5rem !important;
        }

        .me-n10 {
            margin-right: -6rem !important;
        }

        .me-n15 {
            margin-right: -9rem !important;
        }

        .mb-n1 {
            margin-bottom: -0.25rem !important;
        }

        .mb-n2 {
            margin-bottom: -0.5rem !important;
        }

        .mb-n3 {
            margin-bottom: -1rem !important;
        }

        .mb-n4 {
            margin-bottom: -1.5rem !important;
        }

        .mb-n5 {
            margin-bottom: -2.5rem !important;
        }

        .mb-n10 {
            margin-bottom: -6rem !important;
        }

        .mb-n15 {
            margin-bottom: -9rem !important;
        }

        .ms-n1 {
            margin-left: -0.25rem !important;
        }

        .ms-n2 {
            margin-left: -0.5rem !important;
        }

        .ms-n3 {
            margin-left: -1rem !important;
        }

        .ms-n4 {
            margin-left: -1.5rem !important;
        }

        .ms-n5 {
            margin-left: -2.5rem !important;
        }

        .ms-n10 {
            margin-left: -6rem !important;
        }

        .ms-n15 {
            margin-left: -9rem !important;
        }

        .p-0 {
            padding: 0 !important;
        }

        .p-1 {
            padding: 0.25rem !important;
        }

        .p-2 {
            padding: 0.5rem !important;
        }

        .p-3 {
            padding: 1rem !important;
        }

        .p-4 {
            padding: 1.5rem !important;
        }

        .p-5 {
            padding: 2.5rem !important;
        }

        .p-10 {
            padding: 6rem !important;
        }

        .p-15 {
            padding: 9rem !important;
        }

        .px-0 {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .px-1 {
            padding-right: 0.25rem !important;
            padding-left: 0.25rem !important;
        }

        .px-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .px-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }

        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }

        .px-5 {
            padding-right: 2.5rem !important;
            padding-left: 2.5rem !important;
        }

        .px-10 {
            padding-right: 6rem !important;
            padding-left: 6rem !important;
        }

        .px-15 {
            padding-right: 9rem !important;
            padding-left: 9rem !important;
        }

        .py-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .py-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
        }

        .py-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .py-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .py-5 {
            padding-top: 2.5rem !important;
            padding-bottom: 2.5rem !important;
        }

        .py-10 {
            padding-top: 6rem !important;
            padding-bottom: 6rem !important;
        }

        .py-15 {
            padding-top: 9rem !important;
            padding-bottom: 9rem !important;
        }

        .pt-0 {
            padding-top: 0 !important;
        }

        .pt-1 {
            padding-top: 0.25rem !important;
        }

        .pt-2 {
            padding-top: 0.5rem !important;
        }

        .pt-3 {
            padding-top: 1rem !important;
        }

        .pt-4 {
            padding-top: 1.5rem !important;
        }

        .pt-5 {
            padding-top: 2.5rem !important;
        }

        .pt-10 {
            padding-top: 6rem !important;
        }

        .pt-15 {
            padding-top: 9rem !important;
        }

        .pe-0 {
            padding-right: 0 !important;
        }

        .pe-1 {
            padding-right: 0.25rem !important;
        }

        .pe-2 {
            padding-right: 0.5rem !important;
        }

        .pe-3 {
            padding-right: 1rem !important;
        }

        .pe-4 {
            padding-right: 1.5rem !important;
        }

        .pe-5 {
            padding-right: 2.5rem !important;
        }

        .pe-10 {
            padding-right: 6rem !important;
        }

        .pe-15 {
            padding-right: 9rem !important;
        }

        .pb-0 {
            padding-bottom: 0 !important;
        }

        .pb-1 {
            padding-bottom: 0.25rem !important;
        }

        .pb-2 {
            padding-bottom: 0.5rem !important;
        }

        .pb-3 {
            padding-bottom: 1rem !important;
        }

        .pb-4 {
            padding-bottom: 1.5rem !important;
        }

        .pb-5 {
            padding-bottom: 2.5rem !important;
        }

        .pb-10 {
            padding-bottom: 6rem !important;
        }

        .pb-15 {
            padding-bottom: 9rem !important;
        }

        .ps-0 {
            padding-left: 0 !important;
        }

        .ps-1 {
            padding-left: 0.25rem !important;
        }

        .ps-2 {
            padding-left: 0.5rem !important;
        }

        .ps-3 {
            padding-left: 1rem !important;
        }

        .ps-4 {
            padding-left: 1.5rem !important;
        }

        .ps-5 {
            padding-left: 2.5rem !important;
        }

        .ps-10 {
            padding-left: 6rem !important;
        }

        .ps-15 {
            padding-left: 9rem !important;
        }

        .font-monospace {
            font-family: var(--bs-font-monospace) !important;
        }

        .fs-1 {
            font-size: calc(1.275rem + 0.3vw) !important;
        }

        .fs-2 {
            font-size: calc(1.265rem + 0.18vw) !important;
        }

        .fs-3 {
            font-size: calc(1.255rem + 0.06vw) !important;
        }

        .fs-4 {
            font-size: 1.2rem !important;
        }

        .fs-5 {
            font-size: 1.1rem !important;
        }

        .fs-6 {
            font-size: 1rem !important;
        }

        .fst-italic {
            font-style: italic !important;
        }

        .fst-normal {
            font-style: normal !important;
        }

        .fw-light {
            font-weight: 300 !important;
        }

        .fw-lighter {
            font-weight: lighter !important;
        }

        .fw-normal {
            font-weight: 400 !important;
        }

        .fw-bold {
            font-weight: 500 !important;
        }

        .fw-bolder {
            font-weight: bolder !important;
        }

        .lh-1 {
            line-height: 1 !important;
        }

        .lh-sm {
            line-height: 1.25 !important;
        }

        .lh-base {
            line-height: 1.5 !important;
        }

        .lh-lg {
            line-height: 2 !important;
        }

        .text-start {
            text-align: left !important;
        }

        .text-end {
            text-align: right !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-decoration-none {
            text-decoration: none !important;
        }

        .text-decoration-underline {
            text-decoration: underline !important;
        }

        .text-decoration-line-through {
            text-decoration: line-through !important;
        }

        .text-lowercase {
            text-transform: lowercase !important;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .text-capitalize {
            text-transform: capitalize !important;
        }

        .text-wrap {
            white-space: normal !important;
        }

        .text-nowrap {
            white-space: nowrap !important;
        }

        /* rtl:begin:remove */
        .text-break {
            word-wrap: break-word !important;
            word-break: break-word !important;
        }

        /* rtl:end:remove */
        .text-primary {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
        }

        .text-secondary {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
        }

        .text-success {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
        }

        .text-info {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
        }

        .text-warning {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
        }

        .text-danger {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
        }

        .text-light {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
        }

        .text-dark {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
        }

        .text-black {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important;
        }

        .text-white {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
        }

        .text-red {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-red-rgb), var(--bs-text-opacity)) !important;
        }

        .text-orange {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-orange-rgb), var(--bs-text-opacity)) !important;
        }

        .text-yellow {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-yellow-rgb), var(--bs-text-opacity)) !important;
        }

        .text-green {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-green-rgb), var(--bs-text-opacity)) !important;
        }

        .text-teal {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-teal-rgb), var(--bs-text-opacity)) !important;
        }

        .text-cyan {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-cyan-rgb), var(--bs-text-opacity)) !important;
        }

        .text-blue {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-blue-rgb), var(--bs-text-opacity)) !important;
        }

        .text-indigo {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-indigo-rgb), var(--bs-text-opacity)) !important;
        }

        .text-purple {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-purple-rgb), var(--bs-text-opacity)) !important;
        }

        .text-pink {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-pink-rgb), var(--bs-text-opacity)) !important;
        }

        .text-red-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-red-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-orange-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-orange-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-yellow-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-yellow-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-green-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-green-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-teal-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-teal-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-cyan-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-cyan-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-blue-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-blue-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-indigo-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-indigo-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-purple-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-purple-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-pink-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-pink-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-primary-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-primary-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-secondary-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-secondary-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-success-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-success-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-info-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-info-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-warning-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-warning-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-danger-soft {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-danger-soft-rgb), var(--bs-text-opacity)) !important;
        }

        .text-body {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important;
        }

        .text-muted {
            --bs-text-opacity: 1;
            color: #a7aeb8 !important;
        }

        .text-black-50 {
            --bs-text-opacity: 1;
            color: rgba(0, 0, 0, 0.5) !important;
        }

        .text-white-50 {
            --bs-text-opacity: 1;
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .text-reset,
        .footer-admin a {
            --bs-text-opacity: 1;
            color: inherit !important;
        }

        .text-opacity-25 {
            --bs-text-opacity: 0.25;
        }

        .text-opacity-50 {
            --bs-text-opacity: 0.5;
        }

        .text-opacity-75 {
            --bs-text-opacity: 0.75;
        }

        .text-opacity-100 {
            --bs-text-opacity: 1;
        }

        .bg-primary {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-secondary {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-success {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-info {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-warning {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-danger {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-light {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-dark {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-black {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-white {
            --bs-bg-opacity: 1;
            /*background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;*/
            background-color: #222222 !important;
        }

        .bg-red {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-red-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-orange {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-orange-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-yellow {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-yellow-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-green {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-green-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-teal {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-teal-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-cyan {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-cyan-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-blue {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-blue-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-indigo {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-indigo-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-purple {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-purple-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-pink {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-pink-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-red-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-red-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-orange-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-orange-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-yellow-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-yellow-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-green-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-green-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-teal-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-teal-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-cyan-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-cyan-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-blue-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-blue-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-indigo-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-indigo-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-purple-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-purple-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-pink-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-pink-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-primary-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-primary-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-secondary-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-secondary-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-success-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-success-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-info-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-info-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-warning-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-warning-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-danger-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-danger-soft-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-body {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-transparent {
            --bs-bg-opacity: 1;
            background-color: transparent !important;
        }

        .bg-opacity-10 {
            --bs-bg-opacity: 0.1;
        }

        .bg-opacity-25 {
            --bs-bg-opacity: 0.25;
        }

        .bg-opacity-50 {
            --bs-bg-opacity: 0.5;
        }

        .bg-opacity-75 {
            --bs-bg-opacity: 0.75;
        }

        .bg-opacity-100 {
            --bs-bg-opacity: 1;
        }

        .bg-gradient {
            background-image: var(--bs-gradient) !important;
        }

        .user-select-all {
            -webkit-user-select: all !important;
            -moz-user-select: all !important;
            user-select: all !important;
        }

        .user-select-auto {
            -webkit-user-select: auto !important;
            -moz-user-select: auto !important;
            -ms-user-select: auto !important;
            user-select: auto !important;
        }

        .user-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important;
        }

        .pe-none {
            pointer-events: none !important;
        }

        .pe-auto {
            pointer-events: auto !important;
        }

        .rounded {
            border-radius: 0.35rem !important;
        }

        .rounded-0 {
            border-radius: 0 !important;
        }

        .rounded-1 {
            border-radius: 0.25rem !important;
        }

        .rounded-2 {
            border-radius: 0.35rem !important;
        }

        .rounded-3 {
            border-radius: 0.5rem !important;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .rounded-pill {
            border-radius: 50rem !important;
        }

        .rounded-top {
            border-top-left-radius: 0.35rem !important;
            border-top-right-radius: 0.35rem !important;
        }

        .rounded-end {
            border-top-right-radius: 0.35rem !important;
            border-bottom-right-radius: 0.35rem !important;
        }

        .rounded-bottom {
            border-bottom-right-radius: 0.35rem !important;
            border-bottom-left-radius: 0.35rem !important;
        }

        .rounded-start {
            border-bottom-left-radius: 0.35rem !important;
            border-top-left-radius: 0.35rem !important;
        }

        .visible {
            visibility: visible !important;
        }

        .invisible {
            visibility: hidden !important;
        }

        @media (min-width: 576px) {
            .float-sm-start {
                float: left !important;
            }

            .float-sm-end {
                float: right !important;
            }

            .float-sm-none {
                float: none !important;
            }

            .d-sm-inline {
                display: inline !important;
            }

            .d-sm-inline-block {
                display: inline-block !important;
            }

            .d-sm-block {
                display: block !important;
            }

            .d-sm-grid {
                display: grid !important;
            }

            .d-sm-table {
                display: table !important;
            }

            .d-sm-table-row {
                display: table-row !important;
            }

            .d-sm-table-cell {
                display: table-cell !important;
            }

            .d-sm-flex {
                display: flex !important;
            }

            .d-sm-inline-flex {
                display: inline-flex !important;
            }

            .d-sm-none {
                display: none !important;
            }

            .flex-sm-fill {
                flex: 1 1 auto !important;
            }

            .flex-sm-row {
                flex-direction: row !important;
            }

            .flex-sm-column {
                flex-direction: column !important;
            }

            .flex-sm-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-sm-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-sm-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-sm-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-sm-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-sm-shrink-1 {
                flex-shrink: 1 !important;
            }

            .flex-sm-wrap {
                flex-wrap: wrap !important;
            }

            .flex-sm-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-sm-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .gap-sm-0 {
                gap: 0 !important;
            }

            .gap-sm-1 {
                gap: 0.25rem !important;
            }

            .gap-sm-2 {
                gap: 0.5rem !important;
            }

            .gap-sm-3 {
                gap: 1rem !important;
            }

            .gap-sm-4 {
                gap: 1.5rem !important;
            }

            .gap-sm-5 {
                gap: 2.5rem !important;
            }

            .gap-sm-10 {
                gap: 6rem !important;
            }

            .gap-sm-15 {
                gap: 9rem !important;
            }

            .justify-content-sm-start {
                justify-content: flex-start !important;
            }

            .justify-content-sm-end {
                justify-content: flex-end !important;
            }

            .justify-content-sm-center {
                justify-content: center !important;
            }

            .justify-content-sm-between {
                justify-content: space-between !important;
            }

            .justify-content-sm-around {
                justify-content: space-around !important;
            }

            .justify-content-sm-evenly {
                justify-content: space-evenly !important;
            }

            .align-items-sm-start {
                align-items: flex-start !important;
            }

            .align-items-sm-end {
                align-items: flex-end !important;
            }

            .align-items-sm-center {
                align-items: center !important;
            }

            .align-items-sm-baseline {
                align-items: baseline !important;
            }

            .align-items-sm-stretch {
                align-items: stretch !important;
            }

            .align-content-sm-start {
                align-content: flex-start !important;
            }

            .align-content-sm-end {
                align-content: flex-end !important;
            }

            .align-content-sm-center {
                align-content: center !important;
            }

            .align-content-sm-between {
                align-content: space-between !important;
            }

            .align-content-sm-around {
                align-content: space-around !important;
            }

            .align-content-sm-stretch {
                align-content: stretch !important;
            }

            .align-self-sm-auto {
                align-self: auto !important;
            }

            .align-self-sm-start {
                align-self: flex-start !important;
            }

            .align-self-sm-end {
                align-self: flex-end !important;
            }

            .align-self-sm-center {
                align-self: center !important;
            }

            .align-self-sm-baseline {
                align-self: baseline !important;
            }

            .align-self-sm-stretch {
                align-self: stretch !important;
            }

            .order-sm-first {
                order: -1 !important;
            }

            .order-sm-0 {
                order: 0 !important;
            }

            .order-sm-1 {
                order: 1 !important;
            }

            .order-sm-2 {
                order: 2 !important;
            }

            .order-sm-3 {
                order: 3 !important;
            }

            .order-sm-4 {
                order: 4 !important;
            }

            .order-sm-5 {
                order: 5 !important;
            }

            .order-sm-last {
                order: 6 !important;
            }

            .m-sm-0 {
                margin: 0 !important;
            }

            .m-sm-1 {
                margin: 0.25rem !important;
            }

            .m-sm-2 {
                margin: 0.5rem !important;
            }

            .m-sm-3 {
                margin: 1rem !important;
            }

            .m-sm-4 {
                margin: 1.5rem !important;
            }

            .m-sm-5 {
                margin: 2.5rem !important;
            }

            .m-sm-10 {
                margin: 6rem !important;
            }

            .m-sm-15 {
                margin: 9rem !important;
            }

            .m-sm-auto {
                margin: auto !important;
            }

            .mx-sm-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-sm-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-sm-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-sm-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-sm-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important;
            }

            .mx-sm-5 {
                margin-right: 2.5rem !important;
                margin-left: 2.5rem !important;
            }

            .mx-sm-10 {
                margin-right: 6rem !important;
                margin-left: 6rem !important;
            }

            .mx-sm-15 {
                margin-right: 9rem !important;
                margin-left: 9rem !important;
            }

            .mx-sm-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-sm-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-sm-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-sm-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-sm-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-sm-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-sm-5 {
                margin-top: 2.5rem !important;
                margin-bottom: 2.5rem !important;
            }

            .my-sm-10 {
                margin-top: 6rem !important;
                margin-bottom: 6rem !important;
            }

            .my-sm-15 {
                margin-top: 9rem !important;
                margin-bottom: 9rem !important;
            }

            .my-sm-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-sm-0 {
                margin-top: 0 !important;
            }

            .mt-sm-1 {
                margin-top: 0.25rem !important;
            }

            .mt-sm-2 {
                margin-top: 0.5rem !important;
            }

            .mt-sm-3 {
                margin-top: 1rem !important;
            }

            .mt-sm-4 {
                margin-top: 1.5rem !important;
            }

            .mt-sm-5 {
                margin-top: 2.5rem !important;
            }

            .mt-sm-10 {
                margin-top: 6rem !important;
            }

            .mt-sm-15 {
                margin-top: 9rem !important;
            }

            .mt-sm-auto {
                margin-top: auto !important;
            }

            .me-sm-0 {
                margin-right: 0 !important;
            }

            .me-sm-1 {
                margin-right: 0.25rem !important;
            }

            .me-sm-2 {
                margin-right: 0.5rem !important;
            }

            .me-sm-3 {
                margin-right: 1rem !important;
            }

            .me-sm-4 {
                margin-right: 1.5rem !important;
            }

            .me-sm-5 {
                margin-right: 2.5rem !important;
            }

            .me-sm-10 {
                margin-right: 6rem !important;
            }

            .me-sm-15 {
                margin-right: 9rem !important;
            }

            .me-sm-auto {
                margin-right: auto !important;
            }

            .mb-sm-0 {
                margin-bottom: 0 !important;
            }

            .mb-sm-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-sm-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-sm-3 {
                margin-bottom: 1rem !important;
            }

            .mb-sm-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-sm-5 {
                margin-bottom: 2.5rem !important;
            }

            .mb-sm-10 {
                margin-bottom: 6rem !important;
            }

            .mb-sm-15 {
                margin-bottom: 9rem !important;
            }

            .mb-sm-auto {
                margin-bottom: auto !important;
            }

            .ms-sm-0 {
                margin-left: 0 !important;
            }

            .ms-sm-1 {
                margin-left: 0.25rem !important;
            }

            .ms-sm-2 {
                margin-left: 0.5rem !important;
            }

            .ms-sm-3 {
                margin-left: 1rem !important;
            }

            .ms-sm-4 {
                margin-left: 1.5rem !important;
            }

            .ms-sm-5 {
                margin-left: 2.5rem !important;
            }

            .ms-sm-10 {
                margin-left: 6rem !important;
            }

            .ms-sm-15 {
                margin-left: 9rem !important;
            }

            .ms-sm-auto {
                margin-left: auto !important;
            }

            .m-sm-n1 {
                margin: -0.25rem !important;
            }

            .m-sm-n2 {
                margin: -0.5rem !important;
            }

            .m-sm-n3 {
                margin: -1rem !important;
            }

            .m-sm-n4 {
                margin: -1.5rem !important;
            }

            .m-sm-n5 {
                margin: -2.5rem !important;
            }

            .m-sm-n10 {
                margin: -6rem !important;
            }

            .m-sm-n15 {
                margin: -9rem !important;
            }

            .mx-sm-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }

            .mx-sm-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }

            .mx-sm-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }

            .mx-sm-n4 {
                margin-right: -1.5rem !important;
                margin-left: -1.5rem !important;
            }

            .mx-sm-n5 {
                margin-right: -2.5rem !important;
                margin-left: -2.5rem !important;
            }

            .mx-sm-n10 {
                margin-right: -6rem !important;
                margin-left: -6rem !important;
            }

            .mx-sm-n15 {
                margin-right: -9rem !important;
                margin-left: -9rem !important;
            }

            .my-sm-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-sm-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-sm-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-sm-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important;
            }

            .my-sm-n5 {
                margin-top: -2.5rem !important;
                margin-bottom: -2.5rem !important;
            }

            .my-sm-n10 {
                margin-top: -6rem !important;
                margin-bottom: -6rem !important;
            }

            .my-sm-n15 {
                margin-top: -9rem !important;
                margin-bottom: -9rem !important;
            }

            .mt-sm-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-sm-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-sm-n3 {
                margin-top: -1rem !important;
            }

            .mt-sm-n4 {
                margin-top: -1.5rem !important;
            }

            .mt-sm-n5 {
                margin-top: -2.5rem !important;
            }

            .mt-sm-n10 {
                margin-top: -6rem !important;
            }

            .mt-sm-n15 {
                margin-top: -9rem !important;
            }

            .me-sm-n1 {
                margin-right: -0.25rem !important;
            }

            .me-sm-n2 {
                margin-right: -0.5rem !important;
            }

            .me-sm-n3 {
                margin-right: -1rem !important;
            }

            .me-sm-n4 {
                margin-right: -1.5rem !important;
            }

            .me-sm-n5 {
                margin-right: -2.5rem !important;
            }

            .me-sm-n10 {
                margin-right: -6rem !important;
            }

            .me-sm-n15 {
                margin-right: -9rem !important;
            }

            .mb-sm-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-sm-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-sm-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-sm-n4 {
                margin-bottom: -1.5rem !important;
            }

            .mb-sm-n5 {
                margin-bottom: -2.5rem !important;
            }

            .mb-sm-n10 {
                margin-bottom: -6rem !important;
            }

            .mb-sm-n15 {
                margin-bottom: -9rem !important;
            }

            .ms-sm-n1 {
                margin-left: -0.25rem !important;
            }

            .ms-sm-n2 {
                margin-left: -0.5rem !important;
            }

            .ms-sm-n3 {
                margin-left: -1rem !important;
            }

            .ms-sm-n4 {
                margin-left: -1.5rem !important;
            }

            .ms-sm-n5 {
                margin-left: -2.5rem !important;
            }

            .ms-sm-n10 {
                margin-left: -6rem !important;
            }

            .ms-sm-n15 {
                margin-left: -9rem !important;
            }

            .p-sm-0 {
                padding: 0 !important;
            }

            .p-sm-1 {
                padding: 0.25rem !important;
            }

            .p-sm-2 {
                padding: 0.5rem !important;
            }

            .p-sm-3 {
                padding: 1rem !important;
            }

            .p-sm-4 {
                padding: 1.5rem !important;
            }

            .p-sm-5 {
                padding: 2.5rem !important;
            }

            .p-sm-10 {
                padding: 6rem !important;
            }

            .p-sm-15 {
                padding: 9rem !important;
            }

            .px-sm-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-sm-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-sm-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-sm-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-sm-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .px-sm-5 {
                padding-right: 2.5rem !important;
                padding-left: 2.5rem !important;
            }

            .px-sm-10 {
                padding-right: 6rem !important;
                padding-left: 6rem !important;
            }

            .px-sm-15 {
                padding-right: 9rem !important;
                padding-left: 9rem !important;
            }

            .py-sm-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-sm-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-sm-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-sm-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-sm-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-sm-5 {
                padding-top: 2.5rem !important;
                padding-bottom: 2.5rem !important;
            }

            .py-sm-10 {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }

            .py-sm-15 {
                padding-top: 9rem !important;
                padding-bottom: 9rem !important;
            }

            .pt-sm-0 {
                padding-top: 0 !important;
            }

            .pt-sm-1 {
                padding-top: 0.25rem !important;
            }

            .pt-sm-2 {
                padding-top: 0.5rem !important;
            }

            .pt-sm-3 {
                padding-top: 1rem !important;
            }

            .pt-sm-4 {
                padding-top: 1.5rem !important;
            }

            .pt-sm-5 {
                padding-top: 2.5rem !important;
            }

            .pt-sm-10 {
                padding-top: 6rem !important;
            }

            .pt-sm-15 {
                padding-top: 9rem !important;
            }

            .pe-sm-0 {
                padding-right: 0 !important;
            }

            .pe-sm-1 {
                padding-right: 0.25rem !important;
            }

            .pe-sm-2 {
                padding-right: 0.5rem !important;
            }

            .pe-sm-3 {
                padding-right: 1rem !important;
            }

            .pe-sm-4 {
                padding-right: 1.5rem !important;
            }

            .pe-sm-5 {
                padding-right: 2.5rem !important;
            }

            .pe-sm-10 {
                padding-right: 6rem !important;
            }

            .pe-sm-15 {
                padding-right: 9rem !important;
            }

            .pb-sm-0 {
                padding-bottom: 0 !important;
            }

            .pb-sm-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-sm-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-sm-3 {
                padding-bottom: 1rem !important;
            }

            .pb-sm-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-sm-5 {
                padding-bottom: 2.5rem !important;
            }

            .pb-sm-10 {
                padding-bottom: 6rem !important;
            }

            .pb-sm-15 {
                padding-bottom: 9rem !important;
            }

            .ps-sm-0 {
                padding-left: 0 !important;
            }

            .ps-sm-1 {
                padding-left: 0.25rem !important;
            }

            .ps-sm-2 {
                padding-left: 0.5rem !important;
            }

            .ps-sm-3 {
                padding-left: 1rem !important;
            }

            .ps-sm-4 {
                padding-left: 1.5rem !important;
            }

            .ps-sm-5 {
                padding-left: 2.5rem !important;
            }

            .ps-sm-10 {
                padding-left: 6rem !important;
            }

            .ps-sm-15 {
                padding-left: 9rem !important;
            }

            .text-sm-start {
                text-align: left !important;
            }

            .text-sm-end {
                text-align: right !important;
            }

            .text-sm-center {
                text-align: center !important;
            }
        }

        @media (min-width: 768px) {
            .float-md-start {
                float: left !important;
            }

            .float-md-end {
                float: right !important;
            }

            .float-md-none {
                float: none !important;
            }

            .d-md-inline {
                display: inline !important;
            }

            .d-md-inline-block {
                display: inline-block !important;
            }

            .d-md-block {
                display: block !important;
            }

            .d-md-grid {
                display: grid !important;
            }

            .d-md-table {
                display: table !important;
            }

            .d-md-table-row {
                display: table-row !important;
            }

            .d-md-table-cell {
                display: table-cell !important;
            }

            .d-md-flex {
                display: flex !important;
            }

            .d-md-inline-flex {
                display: inline-flex !important;
            }

            .d-md-none {
                display: none !important;
            }

            .flex-md-fill {
                flex: 1 1 auto !important;
            }

            .flex-md-row {
                flex-direction: row !important;
            }

            .flex-md-column {
                flex-direction: column !important;
            }

            .flex-md-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-md-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-md-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-md-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-md-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-md-shrink-1 {
                flex-shrink: 1 !important;
            }

            .flex-md-wrap {
                flex-wrap: wrap !important;
            }

            .flex-md-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-md-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .gap-md-0 {
                gap: 0 !important;
            }

            .gap-md-1 {
                gap: 0.25rem !important;
            }

            .gap-md-2 {
                gap: 0.5rem !important;
            }

            .gap-md-3 {
                gap: 1rem !important;
            }

            .gap-md-4 {
                gap: 1.5rem !important;
            }

            .gap-md-5 {
                gap: 2.5rem !important;
            }

            .gap-md-10 {
                gap: 6rem !important;
            }

            .gap-md-15 {
                gap: 9rem !important;
            }

            .justify-content-md-start {
                justify-content: flex-start !important;
            }

            .justify-content-md-end {
                justify-content: flex-end !important;
            }

            .justify-content-md-center {
                justify-content: center !important;
            }

            .justify-content-md-between {
                justify-content: space-between !important;
            }

            .justify-content-md-around {
                justify-content: space-around !important;
            }

            .justify-content-md-evenly {
                justify-content: space-evenly !important;
            }

            .align-items-md-start {
                align-items: flex-start !important;
            }

            .align-items-md-end {
                align-items: flex-end !important;
            }

            .align-items-md-center {
                align-items: center !important;
            }

            .align-items-md-baseline {
                align-items: baseline !important;
            }

            .align-items-md-stretch {
                align-items: stretch !important;
            }

            .align-content-md-start {
                align-content: flex-start !important;
            }

            .align-content-md-end {
                align-content: flex-end !important;
            }

            .align-content-md-center {
                align-content: center !important;
            }

            .align-content-md-between {
                align-content: space-between !important;
            }

            .align-content-md-around {
                align-content: space-around !important;
            }

            .align-content-md-stretch {
                align-content: stretch !important;
            }

            .align-self-md-auto {
                align-self: auto !important;
            }

            .align-self-md-start {
                align-self: flex-start !important;
            }

            .align-self-md-end {
                align-self: flex-end !important;
            }

            .align-self-md-center {
                align-self: center !important;
            }

            .align-self-md-baseline {
                align-self: baseline !important;
            }

            .align-self-md-stretch {
                align-self: stretch !important;
            }

            .order-md-first {
                order: -1 !important;
            }

            .order-md-0 {
                order: 0 !important;
            }

            .order-md-1 {
                order: 1 !important;
            }

            .order-md-2 {
                order: 2 !important;
            }

            .order-md-3 {
                order: 3 !important;
            }

            .order-md-4 {
                order: 4 !important;
            }

            .order-md-5 {
                order: 5 !important;
            }

            .order-md-last {
                order: 6 !important;
            }

            .m-md-0 {
                margin: 0 !important;
            }

            .m-md-1 {
                margin: 0.25rem !important;
            }

            .m-md-2 {
                margin: 0.5rem !important;
            }

            .m-md-3 {
                margin: 1rem !important;
            }

            .m-md-4 {
                margin: 1.5rem !important;
            }

            .m-md-5 {
                margin: 2.5rem !important;
            }

            .m-md-10 {
                margin: 6rem !important;
            }

            .m-md-15 {
                margin: 9rem !important;
            }

            .m-md-auto {
                margin: auto !important;
            }

            .mx-md-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-md-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-md-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-md-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-md-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important;
            }

            .mx-md-5 {
                margin-right: 2.5rem !important;
                margin-left: 2.5rem !important;
            }

            .mx-md-10 {
                margin-right: 6rem !important;
                margin-left: 6rem !important;
            }

            .mx-md-15 {
                margin-right: 9rem !important;
                margin-left: 9rem !important;
            }

            .mx-md-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-md-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-md-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-md-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-md-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-md-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-md-5 {
                margin-top: 2.5rem !important;
                margin-bottom: 2.5rem !important;
            }

            .my-md-10 {
                margin-top: 6rem !important;
                margin-bottom: 6rem !important;
            }

            .my-md-15 {
                margin-top: 9rem !important;
                margin-bottom: 9rem !important;
            }

            .my-md-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-md-0 {
                margin-top: 0 !important;
            }

            .mt-md-1 {
                margin-top: 0.25rem !important;
            }

            .mt-md-2 {
                margin-top: 0.5rem !important;
            }

            .mt-md-3 {
                margin-top: 1rem !important;
            }

            .mt-md-4 {
                margin-top: 1.5rem !important;
            }

            .mt-md-5 {
                margin-top: 2.5rem !important;
            }

            .mt-md-10 {
                margin-top: 6rem !important;
            }

            .mt-md-15 {
                margin-top: 9rem !important;
            }

            .mt-md-auto {
                margin-top: auto !important;
            }

            .me-md-0 {
                margin-right: 0 !important;
            }

            .me-md-1 {
                margin-right: 0.25rem !important;
            }

            .me-md-2 {
                margin-right: 0.5rem !important;
            }

            .me-md-3 {
                margin-right: 1rem !important;
            }

            .me-md-4 {
                margin-right: 1.5rem !important;
            }

            .me-md-5 {
                margin-right: 2.5rem !important;
            }

            .me-md-10 {
                margin-right: 6rem !important;
            }

            .me-md-15 {
                margin-right: 9rem !important;
            }

            .me-md-auto {
                margin-right: auto !important;
            }

            .mb-md-0 {
                margin-bottom: 0 !important;
            }

            .mb-md-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-md-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-md-3 {
                margin-bottom: 1rem !important;
            }

            .mb-md-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-md-5 {
                margin-bottom: 2.5rem !important;
            }

            .mb-md-10 {
                margin-bottom: 6rem !important;
            }

            .mb-md-15 {
                margin-bottom: 9rem !important;
            }

            .mb-md-auto {
                margin-bottom: auto !important;
            }

            .ms-md-0 {
                margin-left: 0 !important;
            }

            .ms-md-1 {
                margin-left: 0.25rem !important;
            }

            .ms-md-2 {
                margin-left: 0.5rem !important;
            }

            .ms-md-3 {
                margin-left: 1rem !important;
            }

            .ms-md-4 {
                margin-left: 1.5rem !important;
            }

            .ms-md-5 {
                margin-left: 2.5rem !important;
            }

            .ms-md-10 {
                margin-left: 6rem !important;
            }

            .ms-md-15 {
                margin-left: 9rem !important;
            }

            .ms-md-auto {
                margin-left: auto !important;
            }

            .m-md-n1 {
                margin: -0.25rem !important;
            }

            .m-md-n2 {
                margin: -0.5rem !important;
            }

            .m-md-n3 {
                margin: -1rem !important;
            }

            .m-md-n4 {
                margin: -1.5rem !important;
            }

            .m-md-n5 {
                margin: -2.5rem !important;
            }

            .m-md-n10 {
                margin: -6rem !important;
            }

            .m-md-n15 {
                margin: -9rem !important;
            }

            .mx-md-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }

            .mx-md-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }

            .mx-md-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }

            .mx-md-n4 {
                margin-right: -1.5rem !important;
                margin-left: -1.5rem !important;
            }

            .mx-md-n5 {
                margin-right: -2.5rem !important;
                margin-left: -2.5rem !important;
            }

            .mx-md-n10 {
                margin-right: -6rem !important;
                margin-left: -6rem !important;
            }

            .mx-md-n15 {
                margin-right: -9rem !important;
                margin-left: -9rem !important;
            }

            .my-md-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-md-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-md-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-md-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important;
            }

            .my-md-n5 {
                margin-top: -2.5rem !important;
                margin-bottom: -2.5rem !important;
            }

            .my-md-n10 {
                margin-top: -6rem !important;
                margin-bottom: -6rem !important;
            }

            .my-md-n15 {
                margin-top: -9rem !important;
                margin-bottom: -9rem !important;
            }

            .mt-md-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-md-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-md-n3 {
                margin-top: -1rem !important;
            }

            .mt-md-n4 {
                margin-top: -1.5rem !important;
            }

            .mt-md-n5 {
                margin-top: -2.5rem !important;
            }

            .mt-md-n10 {
                margin-top: -6rem !important;
            }

            .mt-md-n15 {
                margin-top: -9rem !important;
            }

            .me-md-n1 {
                margin-right: -0.25rem !important;
            }

            .me-md-n2 {
                margin-right: -0.5rem !important;
            }

            .me-md-n3 {
                margin-right: -1rem !important;
            }

            .me-md-n4 {
                margin-right: -1.5rem !important;
            }

            .me-md-n5 {
                margin-right: -2.5rem !important;
            }

            .me-md-n10 {
                margin-right: -6rem !important;
            }

            .me-md-n15 {
                margin-right: -9rem !important;
            }

            .mb-md-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-md-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-md-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-md-n4 {
                margin-bottom: -1.5rem !important;
            }

            .mb-md-n5 {
                margin-bottom: -2.5rem !important;
            }

            .mb-md-n10 {
                margin-bottom: -6rem !important;
            }

            .mb-md-n15 {
                margin-bottom: -9rem !important;
            }

            .ms-md-n1 {
                margin-left: -0.25rem !important;
            }

            .ms-md-n2 {
                margin-left: -0.5rem !important;
            }

            .ms-md-n3 {
                margin-left: -1rem !important;
            }

            .ms-md-n4 {
                margin-left: -1.5rem !important;
            }

            .ms-md-n5 {
                margin-left: -2.5rem !important;
            }

            .ms-md-n10 {
                margin-left: -6rem !important;
            }

            .ms-md-n15 {
                margin-left: -9rem !important;
            }

            .p-md-0 {
                padding: 0 !important;
            }

            .p-md-1 {
                padding: 0.25rem !important;
            }

            .p-md-2 {
                padding: 0.5rem !important;
            }

            .p-md-3 {
                padding: 1rem !important;
            }

            .p-md-4 {
                padding: 1.5rem !important;
            }

            .p-md-5 {
                padding: 2.5rem !important;
            }

            .p-md-10 {
                padding: 6rem !important;
            }

            .p-md-15 {
                padding: 9rem !important;
            }

            .px-md-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-md-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-md-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-md-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-md-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .px-md-5 {
                padding-right: 2.5rem !important;
                padding-left: 2.5rem !important;
            }

            .px-md-10 {
                padding-right: 6rem !important;
                padding-left: 6rem !important;
            }

            .px-md-15 {
                padding-right: 9rem !important;
                padding-left: 9rem !important;
            }

            .py-md-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-md-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-md-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-md-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-md-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-md-5 {
                padding-top: 2.5rem !important;
                padding-bottom: 2.5rem !important;
            }

            .py-md-10 {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }

            .py-md-15 {
                padding-top: 9rem !important;
                padding-bottom: 9rem !important;
            }

            .pt-md-0 {
                padding-top: 0 !important;
            }

            .pt-md-1 {
                padding-top: 0.25rem !important;
            }

            .pt-md-2 {
                padding-top: 0.5rem !important;
            }

            .pt-md-3 {
                padding-top: 1rem !important;
            }

            .pt-md-4 {
                padding-top: 1.5rem !important;
            }

            .pt-md-5 {
                padding-top: 2.5rem !important;
            }

            .pt-md-10 {
                padding-top: 6rem !important;
            }

            .pt-md-15 {
                padding-top: 9rem !important;
            }

            .pe-md-0 {
                padding-right: 0 !important;
            }

            .pe-md-1 {
                padding-right: 0.25rem !important;
            }

            .pe-md-2 {
                padding-right: 0.5rem !important;
            }

            .pe-md-3 {
                padding-right: 1rem !important;
            }

            .pe-md-4 {
                padding-right: 1.5rem !important;
            }

            .pe-md-5 {
                padding-right: 2.5rem !important;
            }

            .pe-md-10 {
                padding-right: 6rem !important;
            }

            .pe-md-15 {
                padding-right: 9rem !important;
            }

            .pb-md-0 {
                padding-bottom: 0 !important;
            }

            .pb-md-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-md-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-md-3 {
                padding-bottom: 1rem !important;
            }

            .pb-md-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-md-5 {
                padding-bottom: 2.5rem !important;
            }

            .pb-md-10 {
                padding-bottom: 6rem !important;
            }

            .pb-md-15 {
                padding-bottom: 9rem !important;
            }

            .ps-md-0 {
                padding-left: 0 !important;
            }

            .ps-md-1 {
                padding-left: 0.25rem !important;
            }

            .ps-md-2 {
                padding-left: 0.5rem !important;
            }

            .ps-md-3 {
                padding-left: 1rem !important;
            }

            .ps-md-4 {
                padding-left: 1.5rem !important;
            }

            .ps-md-5 {
                padding-left: 2.5rem !important;
            }

            .ps-md-10 {
                padding-left: 6rem !important;
            }

            .ps-md-15 {
                padding-left: 9rem !important;
            }

            .text-md-start {
                text-align: left !important;
            }

            .text-md-end {
                text-align: right !important;
            }

            .text-md-center {
                text-align: center !important;
            }
        }

        @media (min-width: 992px) {
            .float-lg-start {
                float: left !important;
            }

            .float-lg-end {
                float: right !important;
            }

            .float-lg-none {
                float: none !important;
            }

            .d-lg-inline {
                display: inline !important;
            }

            .d-lg-inline-block {
                display: inline-block !important;
            }

            .d-lg-block {
                display: block !important;
            }

            .d-lg-grid {
                display: grid !important;
            }

            .d-lg-table {
                display: table !important;
            }

            .d-lg-table-row {
                display: table-row !important;
            }

            .d-lg-table-cell {
                display: table-cell !important;
            }

            .d-lg-flex {
                display: flex !important;
            }

            .d-lg-inline-flex {
                display: inline-flex !important;
            }

            .d-lg-none {
                display: none !important;
            }

            .flex-lg-fill {
                flex: 1 1 auto !important;
            }

            .flex-lg-row {
                flex-direction: row !important;
            }

            .flex-lg-column {
                flex-direction: column !important;
            }

            .flex-lg-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-lg-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-lg-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-lg-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-lg-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-lg-shrink-1 {
                flex-shrink: 1 !important;
            }

            .flex-lg-wrap {
                flex-wrap: wrap !important;
            }

            .flex-lg-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-lg-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .gap-lg-0 {
                gap: 0 !important;
            }

            .gap-lg-1 {
                gap: 0.25rem !important;
            }

            .gap-lg-2 {
                gap: 0.5rem !important;
            }

            .gap-lg-3 {
                gap: 1rem !important;
            }

            .gap-lg-4 {
                gap: 1.5rem !important;
            }

            .gap-lg-5 {
                gap: 2.5rem !important;
            }

            .gap-lg-10 {
                gap: 6rem !important;
            }

            .gap-lg-15 {
                gap: 9rem !important;
            }

            .justify-content-lg-start {
                justify-content: flex-start !important;
            }

            .justify-content-lg-end {
                justify-content: flex-end !important;
            }

            .justify-content-lg-center {
                justify-content: center !important;
            }

            .justify-content-lg-between {
                justify-content: space-between !important;
            }

            .justify-content-lg-around {
                justify-content: space-around !important;
            }

            .justify-content-lg-evenly {
                justify-content: space-evenly !important;
            }

            .align-items-lg-start {
                align-items: flex-start !important;
            }

            .align-items-lg-end {
                align-items: flex-end !important;
            }

            .align-items-lg-center {
                align-items: center !important;
            }

            .align-items-lg-baseline {
                align-items: baseline !important;
            }

            .align-items-lg-stretch {
                align-items: stretch !important;
            }

            .align-content-lg-start {
                align-content: flex-start !important;
            }

            .align-content-lg-end {
                align-content: flex-end !important;
            }

            .align-content-lg-center {
                align-content: center !important;
            }

            .align-content-lg-between {
                align-content: space-between !important;
            }

            .align-content-lg-around {
                align-content: space-around !important;
            }

            .align-content-lg-stretch {
                align-content: stretch !important;
            }

            .align-self-lg-auto {
                align-self: auto !important;
            }

            .align-self-lg-start {
                align-self: flex-start !important;
            }

            .align-self-lg-end {
                align-self: flex-end !important;
            }

            .align-self-lg-center {
                align-self: center !important;
            }

            .align-self-lg-baseline {
                align-self: baseline !important;
            }

            .align-self-lg-stretch {
                align-self: stretch !important;
            }

            .order-lg-first {
                order: -1 !important;
            }

            .order-lg-0 {
                order: 0 !important;
            }

            .order-lg-1 {
                order: 1 !important;
            }

            .order-lg-2 {
                order: 2 !important;
            }

            .order-lg-3 {
                order: 3 !important;
            }

            .order-lg-4 {
                order: 4 !important;
            }

            .order-lg-5 {
                order: 5 !important;
            }

            .order-lg-last {
                order: 6 !important;
            }

            .m-lg-0 {
                margin: 0 !important;
            }

            .m-lg-1 {
                margin: 0.25rem !important;
            }

            .m-lg-2 {
                margin: 0.5rem !important;
            }

            .m-lg-3 {
                margin: 1rem !important;
            }

            .m-lg-4 {
                margin: 1.5rem !important;
            }

            .m-lg-5 {
                margin: 2.5rem !important;
            }

            .m-lg-10 {
                margin: 6rem !important;
            }

            .m-lg-15 {
                margin: 9rem !important;
            }

            .m-lg-auto {
                margin: auto !important;
            }

            .mx-lg-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-lg-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-lg-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-lg-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-lg-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important;
            }

            .mx-lg-5 {
                margin-right: 2.5rem !important;
                margin-left: 2.5rem !important;
            }

            .mx-lg-10 {
                margin-right: 6rem !important;
                margin-left: 6rem !important;
            }

            .mx-lg-15 {
                margin-right: 9rem !important;
                margin-left: 9rem !important;
            }

            .mx-lg-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-lg-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-lg-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-lg-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-lg-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-lg-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-lg-5 {
                margin-top: 2.5rem !important;
                margin-bottom: 2.5rem !important;
            }

            .my-lg-10 {
                margin-top: 6rem !important;
                margin-bottom: 6rem !important;
            }

            .my-lg-15 {
                margin-top: 9rem !important;
                margin-bottom: 9rem !important;
            }

            .my-lg-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-lg-0 {
                margin-top: 0 !important;
            }

            .mt-lg-1 {
                margin-top: 0.25rem !important;
            }

            .mt-lg-2 {
                margin-top: 0.5rem !important;
            }

            .mt-lg-3 {
                margin-top: 1rem !important;
            }

            .mt-lg-4 {
                margin-top: 1.5rem !important;
            }

            .mt-lg-5 {
                margin-top: 2.5rem !important;
            }

            .mt-lg-10 {
                margin-top: 6rem !important;
            }

            .mt-lg-15 {
                margin-top: 9rem !important;
            }

            .mt-lg-auto {
                margin-top: auto !important;
            }

            .me-lg-0 {
                margin-right: 0 !important;
            }

            .me-lg-1 {
                margin-right: 0.25rem !important;
            }

            .me-lg-2 {
                margin-right: 0.5rem !important;
            }

            .me-lg-3 {
                margin-right: 1rem !important;
            }

            .me-lg-4 {
                margin-right: 1.5rem !important;
            }

            .me-lg-5 {
                margin-right: 2.5rem !important;
            }

            .me-lg-10 {
                margin-right: 6rem !important;
            }

            .me-lg-15 {
                margin-right: 9rem !important;
            }

            .me-lg-auto {
                margin-right: auto !important;
            }

            .mb-lg-0 {
                margin-bottom: 0 !important;
            }

            .mb-lg-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-lg-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-lg-3 {
                margin-bottom: 1rem !important;
            }

            .mb-lg-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-lg-5 {
                margin-bottom: 2.5rem !important;
            }

            .mb-lg-10 {
                margin-bottom: 6rem !important;
            }

            .mb-lg-15 {
                margin-bottom: 9rem !important;
            }

            .mb-lg-auto {
                margin-bottom: auto !important;
            }

            .ms-lg-0 {
                margin-left: 0 !important;
            }

            .ms-lg-1 {
                margin-left: 0.25rem !important;
            }

            .ms-lg-2 {
                margin-left: 0.5rem !important;
            }

            .ms-lg-3 {
                margin-left: 1rem !important;
            }

            .ms-lg-4 {
                margin-left: 1.5rem !important;
            }

            .ms-lg-5 {
                margin-left: 2.5rem !important;
            }

            .ms-lg-10 {
                margin-left: 6rem !important;
            }

            .ms-lg-15 {
                margin-left: 9rem !important;
            }

            .ms-lg-auto {
                margin-left: auto !important;
            }

            .m-lg-n1 {
                margin: -0.25rem !important;
            }

            .m-lg-n2 {
                margin: -0.5rem !important;
            }

            .m-lg-n3 {
                margin: -1rem !important;
            }

            .m-lg-n4 {
                margin: -1.5rem !important;
            }

            .m-lg-n5 {
                margin: -2.5rem !important;
            }

            .m-lg-n10 {
                margin: -6rem !important;
            }

            .m-lg-n15 {
                margin: -9rem !important;
            }

            .mx-lg-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }

            .mx-lg-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }

            .mx-lg-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }

            .mx-lg-n4 {
                margin-right: -1.5rem !important;
                margin-left: -1.5rem !important;
            }

            .mx-lg-n5 {
                margin-right: -2.5rem !important;
                margin-left: -2.5rem !important;
            }

            .mx-lg-n10 {
                margin-right: -6rem !important;
                margin-left: -6rem !important;
            }

            .mx-lg-n15 {
                margin-right: -9rem !important;
                margin-left: -9rem !important;
            }

            .my-lg-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-lg-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-lg-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-lg-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important;
            }

            .my-lg-n5 {
                margin-top: -2.5rem !important;
                margin-bottom: -2.5rem !important;
            }

            .my-lg-n10 {
                margin-top: -6rem !important;
                margin-bottom: -6rem !important;
            }

            .my-lg-n15 {
                margin-top: -9rem !important;
                margin-bottom: -9rem !important;
            }

            .mt-lg-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-lg-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-lg-n3 {
                margin-top: -1rem !important;
            }

            .mt-lg-n4 {
                margin-top: -1.5rem !important;
            }

            .mt-lg-n5 {
                margin-top: -2.5rem !important;
            }

            .mt-lg-n10 {
                margin-top: -6rem !important;
            }

            .mt-lg-n15 {
                margin-top: -9rem !important;
            }

            .me-lg-n1 {
                margin-right: -0.25rem !important;
            }

            .me-lg-n2 {
                margin-right: -0.5rem !important;
            }

            .me-lg-n3 {
                margin-right: -1rem !important;
            }

            .me-lg-n4 {
                margin-right: -1.5rem !important;
            }

            .me-lg-n5 {
                margin-right: -2.5rem !important;
            }

            .me-lg-n10 {
                margin-right: -6rem !important;
            }

            .me-lg-n15 {
                margin-right: -9rem !important;
            }

            .mb-lg-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-lg-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-lg-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-lg-n4 {
                margin-bottom: -1.5rem !important;
            }

            .mb-lg-n5 {
                margin-bottom: -2.5rem !important;
            }

            .mb-lg-n10 {
                margin-bottom: -6rem !important;
            }

            .mb-lg-n15 {
                margin-bottom: -9rem !important;
            }

            .ms-lg-n1 {
                margin-left: -0.25rem !important;
            }

            .ms-lg-n2 {
                margin-left: -0.5rem !important;
            }

            .ms-lg-n3 {
                margin-left: -1rem !important;
            }

            .ms-lg-n4 {
                margin-left: -1.5rem !important;
            }

            .ms-lg-n5 {
                margin-left: -2.5rem !important;
            }

            .ms-lg-n10 {
                margin-left: -6rem !important;
            }

            .ms-lg-n15 {
                margin-left: -9rem !important;
            }

            .p-lg-0 {
                padding: 0 !important;
            }

            .p-lg-1 {
                padding: 0.25rem !important;
            }

            .p-lg-2 {
                padding: 0.5rem !important;
            }

            .p-lg-3 {
                padding: 1rem !important;
            }

            .p-lg-4 {
                padding: 1.5rem !important;
            }

            .p-lg-5 {
                padding: 2.5rem !important;
            }

            .p-lg-10 {
                padding: 6rem !important;
            }

            .p-lg-15 {
                padding: 9rem !important;
            }

            .px-lg-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-lg-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-lg-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-lg-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-lg-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .px-lg-5 {
                padding-right: 2.5rem !important;
                padding-left: 2.5rem !important;
            }

            .px-lg-10 {
                padding-right: 6rem !important;
                padding-left: 6rem !important;
            }

            .px-lg-15 {
                padding-right: 9rem !important;
                padding-left: 9rem !important;
            }

            .py-lg-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-lg-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-lg-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-lg-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-lg-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-lg-5 {
                padding-top: 2.5rem !important;
                padding-bottom: 2.5rem !important;
            }

            .py-lg-10 {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }

            .py-lg-15 {
                padding-top: 9rem !important;
                padding-bottom: 9rem !important;
            }

            .pt-lg-0 {
                padding-top: 0 !important;
            }

            .pt-lg-1 {
                padding-top: 0.25rem !important;
            }

            .pt-lg-2 {
                padding-top: 0.5rem !important;
            }

            .pt-lg-3 {
                padding-top: 1rem !important;
            }

            .pt-lg-4 {
                padding-top: 1.5rem !important;
            }

            .pt-lg-5 {
                padding-top: 2.5rem !important;
            }

            .pt-lg-10 {
                padding-top: 6rem !important;
            }

            .pt-lg-15 {
                padding-top: 9rem !important;
            }

            .pe-lg-0 {
                padding-right: 0 !important;
            }

            .pe-lg-1 {
                padding-right: 0.25rem !important;
            }

            .pe-lg-2 {
                padding-right: 0.5rem !important;
            }

            .pe-lg-3 {
                padding-right: 1rem !important;
            }

            .pe-lg-4 {
                padding-right: 1.5rem !important;
            }

            .pe-lg-5 {
                padding-right: 2.5rem !important;
            }

            .pe-lg-10 {
                padding-right: 6rem !important;
            }

            .pe-lg-15 {
                padding-right: 9rem !important;
            }

            .pb-lg-0 {
                padding-bottom: 0 !important;
            }

            .pb-lg-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-lg-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-lg-3 {
                padding-bottom: 1rem !important;
            }

            .pb-lg-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-lg-5 {
                padding-bottom: 2.5rem !important;
            }

            .pb-lg-10 {
                padding-bottom: 6rem !important;
            }

            .pb-lg-15 {
                padding-bottom: 9rem !important;
            }

            .ps-lg-0 {
                padding-left: 0 !important;
            }

            .ps-lg-1 {
                padding-left: 0.25rem !important;
            }

            .ps-lg-2 {
                padding-left: 0.5rem !important;
            }

            .ps-lg-3 {
                padding-left: 1rem !important;
            }

            .ps-lg-4 {
                padding-left: 1.5rem !important;
            }

            .ps-lg-5 {
                padding-left: 2.5rem !important;
            }

            .ps-lg-10 {
                padding-left: 6rem !important;
            }

            .ps-lg-15 {
                padding-left: 9rem !important;
            }

            .text-lg-start {
                text-align: left !important;
            }

            .text-lg-end {
                text-align: right !important;
            }

            .text-lg-center {
                text-align: center !important;
            }
        }

        @media (min-width: 1200px) {
            .float-xl-start {
                float: left !important;
            }

            .float-xl-end {
                float: right !important;
            }

            .float-xl-none {
                float: none !important;
            }

            .d-xl-inline {
                display: inline !important;
            }

            .d-xl-inline-block {
                display: inline-block !important;
            }

            .d-xl-block {
                display: block !important;
            }

            .d-xl-grid {
                display: grid !important;
            }

            .d-xl-table {
                display: table !important;
            }

            .d-xl-table-row {
                display: table-row !important;
            }

            .d-xl-table-cell {
                display: table-cell !important;
            }

            .d-xl-flex {
                display: flex !important;
            }

            .d-xl-inline-flex {
                display: inline-flex !important;
            }

            .d-xl-none {
                display: none !important;
            }

            .flex-xl-fill {
                flex: 1 1 auto !important;
            }

            .flex-xl-row {
                flex-direction: row !important;
            }

            .flex-xl-column {
                flex-direction: column !important;
            }

            .flex-xl-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-xl-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-xl-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-xl-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-xl-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-xl-shrink-1 {
                flex-shrink: 1 !important;
            }

            .flex-xl-wrap {
                flex-wrap: wrap !important;
            }

            .flex-xl-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-xl-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .gap-xl-0 {
                gap: 0 !important;
            }

            .gap-xl-1 {
                gap: 0.25rem !important;
            }

            .gap-xl-2 {
                gap: 0.5rem !important;
            }

            .gap-xl-3 {
                gap: 1rem !important;
            }

            .gap-xl-4 {
                gap: 1.5rem !important;
            }

            .gap-xl-5 {
                gap: 2.5rem !important;
            }

            .gap-xl-10 {
                gap: 6rem !important;
            }

            .gap-xl-15 {
                gap: 9rem !important;
            }

            .justify-content-xl-start {
                justify-content: flex-start !important;
            }

            .justify-content-xl-end {
                justify-content: flex-end !important;
            }

            .justify-content-xl-center {
                justify-content: center !important;
            }

            .justify-content-xl-between {
                justify-content: space-between !important;
            }

            .justify-content-xl-around {
                justify-content: space-around !important;
            }

            .justify-content-xl-evenly {
                justify-content: space-evenly !important;
            }

            .align-items-xl-start {
                align-items: flex-start !important;
            }

            .align-items-xl-end {
                align-items: flex-end !important;
            }

            .align-items-xl-center {
                align-items: center !important;
            }

            .align-items-xl-baseline {
                align-items: baseline !important;
            }

            .align-items-xl-stretch {
                align-items: stretch !important;
            }

            .align-content-xl-start {
                align-content: flex-start !important;
            }

            .align-content-xl-end {
                align-content: flex-end !important;
            }

            .align-content-xl-center {
                align-content: center !important;
            }

            .align-content-xl-between {
                align-content: space-between !important;
            }

            .align-content-xl-around {
                align-content: space-around !important;
            }

            .align-content-xl-stretch {
                align-content: stretch !important;
            }

            .align-self-xl-auto {
                align-self: auto !important;
            }

            .align-self-xl-start {
                align-self: flex-start !important;
            }

            .align-self-xl-end {
                align-self: flex-end !important;
            }

            .align-self-xl-center {
                align-self: center !important;
            }

            .align-self-xl-baseline {
                align-self: baseline !important;
            }

            .align-self-xl-stretch {
                align-self: stretch !important;
            }

            .order-xl-first {
                order: -1 !important;
            }

            .order-xl-0 {
                order: 0 !important;
            }

            .order-xl-1 {
                order: 1 !important;
            }

            .order-xl-2 {
                order: 2 !important;
            }

            .order-xl-3 {
                order: 3 !important;
            }

            .order-xl-4 {
                order: 4 !important;
            }

            .order-xl-5 {
                order: 5 !important;
            }

            .order-xl-last {
                order: 6 !important;
            }

            .m-xl-0 {
                margin: 0 !important;
            }

            .m-xl-1 {
                margin: 0.25rem !important;
            }

            .m-xl-2 {
                margin: 0.5rem !important;
            }

            .m-xl-3 {
                margin: 1rem !important;
            }

            .m-xl-4 {
                margin: 1.5rem !important;
            }

            .m-xl-5 {
                margin: 2.5rem !important;
            }

            .m-xl-10 {
                margin: 6rem !important;
            }

            .m-xl-15 {
                margin: 9rem !important;
            }

            .m-xl-auto {
                margin: auto !important;
            }

            .mx-xl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-xl-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-xl-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-xl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-xl-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important;
            }

            .mx-xl-5 {
                margin-right: 2.5rem !important;
                margin-left: 2.5rem !important;
            }

            .mx-xl-10 {
                margin-right: 6rem !important;
                margin-left: 6rem !important;
            }

            .mx-xl-15 {
                margin-right: 9rem !important;
                margin-left: 9rem !important;
            }

            .mx-xl-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-xl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-xl-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-xl-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-xl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-xl-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-xl-5 {
                margin-top: 2.5rem !important;
                margin-bottom: 2.5rem !important;
            }

            .my-xl-10 {
                margin-top: 6rem !important;
                margin-bottom: 6rem !important;
            }

            .my-xl-15 {
                margin-top: 9rem !important;
                margin-bottom: 9rem !important;
            }

            .my-xl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-xl-0 {
                margin-top: 0 !important;
            }

            .mt-xl-1 {
                margin-top: 0.25rem !important;
            }

            .mt-xl-2 {
                margin-top: 0.5rem !important;
            }

            .mt-xl-3 {
                margin-top: 1rem !important;
            }

            .mt-xl-4 {
                margin-top: 1.5rem !important;
            }

            .mt-xl-5 {
                margin-top: 2.5rem !important;
            }

            .mt-xl-10 {
                margin-top: 6rem !important;
            }

            .mt-xl-15 {
                margin-top: 9rem !important;
            }

            .mt-xl-auto {
                margin-top: auto !important;
            }

            .me-xl-0 {
                margin-right: 0 !important;
            }

            .me-xl-1 {
                margin-right: 0.25rem !important;
            }

            .me-xl-2 {
                margin-right: 0.5rem !important;
            }

            .me-xl-3 {
                margin-right: 1rem !important;
            }

            .me-xl-4 {
                margin-right: 1.5rem !important;
            }

            .me-xl-5 {
                margin-right: 2.5rem !important;
            }

            .me-xl-10 {
                margin-right: 6rem !important;
            }

            .me-xl-15 {
                margin-right: 9rem !important;
            }

            .me-xl-auto {
                margin-right: auto !important;
            }

            .mb-xl-0 {
                margin-bottom: 0 !important;
            }

            .mb-xl-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-xl-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-xl-3 {
                margin-bottom: 1rem !important;
            }

            .mb-xl-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-xl-5 {
                margin-bottom: 2.5rem !important;
            }

            .mb-xl-10 {
                margin-bottom: 6rem !important;
            }

            .mb-xl-15 {
                margin-bottom: 9rem !important;
            }

            .mb-xl-auto {
                margin-bottom: auto !important;
            }

            .ms-xl-0 {
                margin-left: 0 !important;
            }

            .ms-xl-1 {
                margin-left: 0.25rem !important;
            }

            .ms-xl-2 {
                margin-left: 0.5rem !important;
            }

            .ms-xl-3 {
                margin-left: 1rem !important;
            }

            .ms-xl-4 {
                margin-left: 1.5rem !important;
            }

            .ms-xl-5 {
                margin-left: 2.5rem !important;
            }

            .ms-xl-10 {
                margin-left: 6rem !important;
            }

            .ms-xl-15 {
                margin-left: 9rem !important;
            }

            .ms-xl-auto {
                margin-left: auto !important;
            }

            .m-xl-n1 {
                margin: -0.25rem !important;
            }

            .m-xl-n2 {
                margin: -0.5rem !important;
            }

            .m-xl-n3 {
                margin: -1rem !important;
            }

            .m-xl-n4 {
                margin: -1.5rem !important;
            }

            .m-xl-n5 {
                margin: -2.5rem !important;
            }

            .m-xl-n10 {
                margin: -6rem !important;
            }

            .m-xl-n15 {
                margin: -9rem !important;
            }

            .mx-xl-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }

            .mx-xl-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }

            .mx-xl-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }

            .mx-xl-n4 {
                margin-right: -1.5rem !important;
                margin-left: -1.5rem !important;
            }

            .mx-xl-n5 {
                margin-right: -2.5rem !important;
                margin-left: -2.5rem !important;
            }

            .mx-xl-n10 {
                margin-right: -6rem !important;
                margin-left: -6rem !important;
            }

            .mx-xl-n15 {
                margin-right: -9rem !important;
                margin-left: -9rem !important;
            }

            .my-xl-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-xl-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-xl-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-xl-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important;
            }

            .my-xl-n5 {
                margin-top: -2.5rem !important;
                margin-bottom: -2.5rem !important;
            }

            .my-xl-n10 {
                margin-top: -6rem !important;
                margin-bottom: -6rem !important;
            }

            .my-xl-n15 {
                margin-top: -9rem !important;
                margin-bottom: -9rem !important;
            }

            .mt-xl-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-xl-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-xl-n3 {
                margin-top: -1rem !important;
            }

            .mt-xl-n4 {
                margin-top: -1.5rem !important;
            }

            .mt-xl-n5 {
                margin-top: -2.5rem !important;
            }

            .mt-xl-n10 {
                margin-top: -6rem !important;
            }

            .mt-xl-n15 {
                margin-top: -9rem !important;
            }

            .me-xl-n1 {
                margin-right: -0.25rem !important;
            }

            .me-xl-n2 {
                margin-right: -0.5rem !important;
            }

            .me-xl-n3 {
                margin-right: -1rem !important;
            }

            .me-xl-n4 {
                margin-right: -1.5rem !important;
            }

            .me-xl-n5 {
                margin-right: -2.5rem !important;
            }

            .me-xl-n10 {
                margin-right: -6rem !important;
            }

            .me-xl-n15 {
                margin-right: -9rem !important;
            }

            .mb-xl-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-xl-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-xl-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-xl-n4 {
                margin-bottom: -1.5rem !important;
            }

            .mb-xl-n5 {
                margin-bottom: -2.5rem !important;
            }

            .mb-xl-n10 {
                margin-bottom: -6rem !important;
            }

            .mb-xl-n15 {
                margin-bottom: -9rem !important;
            }

            .ms-xl-n1 {
                margin-left: -0.25rem !important;
            }

            .ms-xl-n2 {
                margin-left: -0.5rem !important;
            }

            .ms-xl-n3 {
                margin-left: -1rem !important;
            }

            .ms-xl-n4 {
                margin-left: -1.5rem !important;
            }

            .ms-xl-n5 {
                margin-left: -2.5rem !important;
            }

            .ms-xl-n10 {
                margin-left: -6rem !important;
            }

            .ms-xl-n15 {
                margin-left: -9rem !important;
            }

            .p-xl-0 {
                padding: 0 !important;
            }

            .p-xl-1 {
                padding: 0.25rem !important;
            }

            .p-xl-2 {
                padding: 0.5rem !important;
            }

            .p-xl-3 {
                padding: 1rem !important;
            }

            .p-xl-4 {
                padding: 1.5rem !important;
            }

            .p-xl-5 {
                padding: 2.5rem !important;
            }

            .p-xl-10 {
                padding: 6rem !important;
            }

            .p-xl-15 {
                padding: 9rem !important;
            }

            .px-xl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-xl-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-xl-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-xl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-xl-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .px-xl-5 {
                padding-right: 2.5rem !important;
                padding-left: 2.5rem !important;
            }

            .px-xl-10 {
                padding-right: 6rem !important;
                padding-left: 6rem !important;
            }

            .px-xl-15 {
                padding-right: 9rem !important;
                padding-left: 9rem !important;
            }

            .py-xl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-xl-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-xl-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-xl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-xl-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-xl-5 {
                padding-top: 2.5rem !important;
                padding-bottom: 2.5rem !important;
            }

            .py-xl-10 {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }

            .py-xl-15 {
                padding-top: 9rem !important;
                padding-bottom: 9rem !important;
            }

            .pt-xl-0 {
                padding-top: 0 !important;
            }

            .pt-xl-1 {
                padding-top: 0.25rem !important;
            }

            .pt-xl-2 {
                padding-top: 0.5rem !important;
            }

            .pt-xl-3 {
                padding-top: 1rem !important;
            }

            .pt-xl-4 {
                padding-top: 1.5rem !important;
            }

            .pt-xl-5 {
                padding-top: 2.5rem !important;
            }

            .pt-xl-10 {
                padding-top: 6rem !important;
            }

            .pt-xl-15 {
                padding-top: 9rem !important;
            }

            .pe-xl-0 {
                padding-right: 0 !important;
            }

            .pe-xl-1 {
                padding-right: 0.25rem !important;
            }

            .pe-xl-2 {
                padding-right: 0.5rem !important;
            }

            .pe-xl-3 {
                padding-right: 1rem !important;
            }

            .pe-xl-4 {
                padding-right: 1.5rem !important;
            }

            .pe-xl-5 {
                padding-right: 2.5rem !important;
            }

            .pe-xl-10 {
                padding-right: 6rem !important;
            }

            .pe-xl-15 {
                padding-right: 9rem !important;
            }

            .pb-xl-0 {
                padding-bottom: 0 !important;
            }

            .pb-xl-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-xl-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-xl-3 {
                padding-bottom: 1rem !important;
            }

            .pb-xl-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-xl-5 {
                padding-bottom: 2.5rem !important;
            }

            .pb-xl-10 {
                padding-bottom: 6rem !important;
            }

            .pb-xl-15 {
                padding-bottom: 9rem !important;
            }

            .ps-xl-0 {
                padding-left: 0 !important;
            }

            .ps-xl-1 {
                padding-left: 0.25rem !important;
            }

            .ps-xl-2 {
                padding-left: 0.5rem !important;
            }

            .ps-xl-3 {
                padding-left: 1rem !important;
            }

            .ps-xl-4 {
                padding-left: 1.5rem !important;
            }

            .ps-xl-5 {
                padding-left: 2.5rem !important;
            }

            .ps-xl-10 {
                padding-left: 6rem !important;
            }

            .ps-xl-15 {
                padding-left: 9rem !important;
            }

            .text-xl-start {
                text-align: left !important;
            }

            .text-xl-end {
                text-align: right !important;
            }

            .text-xl-center {
                text-align: center !important;
            }
        }

        @media (min-width: 1500px) {
            .float-xxl-start {
                float: left !important;
            }

            .float-xxl-end {
                float: right !important;
            }

            .float-xxl-none {
                float: none !important;
            }

            .d-xxl-inline {
                display: inline !important;
            }

            .d-xxl-inline-block {
                display: inline-block !important;
            }

            .d-xxl-block {
                display: block !important;
            }

            .d-xxl-grid {
                display: grid !important;
            }

            .d-xxl-table {
                display: table !important;
            }

            .d-xxl-table-row {
                display: table-row !important;
            }

            .d-xxl-table-cell {
                display: table-cell !important;
            }

            .d-xxl-flex {
                display: flex !important;
            }

            .d-xxl-inline-flex {
                display: inline-flex !important;
            }

            .d-xxl-none {
                display: none !important;
            }

            .flex-xxl-fill {
                flex: 1 1 auto !important;
            }

            .flex-xxl-row {
                flex-direction: row !important;
            }

            .flex-xxl-column {
                flex-direction: column !important;
            }

            .flex-xxl-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-xxl-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-xxl-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-xxl-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-xxl-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-xxl-shrink-1 {
                flex-shrink: 1 !important;
            }

            .flex-xxl-wrap {
                flex-wrap: wrap !important;
            }

            .flex-xxl-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-xxl-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .gap-xxl-0 {
                gap: 0 !important;
            }

            .gap-xxl-1 {
                gap: 0.25rem !important;
            }

            .gap-xxl-2 {
                gap: 0.5rem !important;
            }

            .gap-xxl-3 {
                gap: 1rem !important;
            }

            .gap-xxl-4 {
                gap: 1.5rem !important;
            }

            .gap-xxl-5 {
                gap: 2.5rem !important;
            }

            .gap-xxl-10 {
                gap: 6rem !important;
            }

            .gap-xxl-15 {
                gap: 9rem !important;
            }

            .justify-content-xxl-start {
                justify-content: flex-start !important;
            }

            .justify-content-xxl-end {
                justify-content: flex-end !important;
            }

            .justify-content-xxl-center {
                justify-content: center !important;
            }

            .justify-content-xxl-between {
                justify-content: space-between !important;
            }

            .justify-content-xxl-around {
                justify-content: space-around !important;
            }

            .justify-content-xxl-evenly {
                justify-content: space-evenly !important;
            }

            .align-items-xxl-start {
                align-items: flex-start !important;
            }

            .align-items-xxl-end {
                align-items: flex-end !important;
            }

            .align-items-xxl-center {
                align-items: center !important;
            }

            .align-items-xxl-baseline {
                align-items: baseline !important;
            }

            .align-items-xxl-stretch {
                align-items: stretch !important;
            }

            .align-content-xxl-start {
                align-content: flex-start !important;
            }

            .align-content-xxl-end {
                align-content: flex-end !important;
            }

            .align-content-xxl-center {
                align-content: center !important;
            }

            .align-content-xxl-between {
                align-content: space-between !important;
            }

            .align-content-xxl-around {
                align-content: space-around !important;
            }

            .align-content-xxl-stretch {
                align-content: stretch !important;
            }

            .align-self-xxl-auto {
                align-self: auto !important;
            }

            .align-self-xxl-start {
                align-self: flex-start !important;
            }

            .align-self-xxl-end {
                align-self: flex-end !important;
            }

            .align-self-xxl-center {
                align-self: center !important;
            }

            .align-self-xxl-baseline {
                align-self: baseline !important;
            }

            .align-self-xxl-stretch {
                align-self: stretch !important;
            }

            .order-xxl-first {
                order: -1 !important;
            }

            .order-xxl-0 {
                order: 0 !important;
            }

            .order-xxl-1 {
                order: 1 !important;
            }

            .order-xxl-2 {
                order: 2 !important;
            }

            .order-xxl-3 {
                order: 3 !important;
            }

            .order-xxl-4 {
                order: 4 !important;
            }

            .order-xxl-5 {
                order: 5 !important;
            }

            .order-xxl-last {
                order: 6 !important;
            }

            .m-xxl-0 {
                margin: 0 !important;
            }

            .m-xxl-1 {
                margin: 0.25rem !important;
            }

            .m-xxl-2 {
                margin: 0.5rem !important;
            }

            .m-xxl-3 {
                margin: 1rem !important;
            }

            .m-xxl-4 {
                margin: 1.5rem !important;
            }

            .m-xxl-5 {
                margin: 2.5rem !important;
            }

            .m-xxl-10 {
                margin: 6rem !important;
            }

            .m-xxl-15 {
                margin: 9rem !important;
            }

            .m-xxl-auto {
                margin: auto !important;
            }

            .mx-xxl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-xxl-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-xxl-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-xxl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-xxl-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important;
            }

            .mx-xxl-5 {
                margin-right: 2.5rem !important;
                margin-left: 2.5rem !important;
            }

            .mx-xxl-10 {
                margin-right: 6rem !important;
                margin-left: 6rem !important;
            }

            .mx-xxl-15 {
                margin-right: 9rem !important;
                margin-left: 9rem !important;
            }

            .mx-xxl-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-xxl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-xxl-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-xxl-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-xxl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-xxl-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-xxl-5 {
                margin-top: 2.5rem !important;
                margin-bottom: 2.5rem !important;
            }

            .my-xxl-10 {
                margin-top: 6rem !important;
                margin-bottom: 6rem !important;
            }

            .my-xxl-15 {
                margin-top: 9rem !important;
                margin-bottom: 9rem !important;
            }

            .my-xxl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-xxl-0 {
                margin-top: 0 !important;
            }

            .mt-xxl-1 {
                margin-top: 0.25rem !important;
            }

            .mt-xxl-2 {
                margin-top: 0.5rem !important;
            }

            .mt-xxl-3 {
                margin-top: 1rem !important;
            }

            .mt-xxl-4 {
                margin-top: 1.5rem !important;
            }

            .mt-xxl-5 {
                margin-top: 2.5rem !important;
            }

            .mt-xxl-10 {
                margin-top: 6rem !important;
            }

            .mt-xxl-15 {
                margin-top: 9rem !important;
            }

            .mt-xxl-auto {
                margin-top: auto !important;
            }

            .me-xxl-0 {
                margin-right: 0 !important;
            }

            .me-xxl-1 {
                margin-right: 0.25rem !important;
            }

            .me-xxl-2 {
                margin-right: 0.5rem !important;
            }

            .me-xxl-3 {
                margin-right: 1rem !important;
            }

            .me-xxl-4 {
                margin-right: 1.5rem !important;
            }

            .me-xxl-5 {
                margin-right: 2.5rem !important;
            }

            .me-xxl-10 {
                margin-right: 6rem !important;
            }

            .me-xxl-15 {
                margin-right: 9rem !important;
            }

            .me-xxl-auto {
                margin-right: auto !important;
            }

            .mb-xxl-0 {
                margin-bottom: 0 !important;
            }

            .mb-xxl-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-xxl-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-xxl-3 {
                margin-bottom: 1rem !important;
            }

            .mb-xxl-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-xxl-5 {
                margin-bottom: 2.5rem !important;
            }

            .mb-xxl-10 {
                margin-bottom: 6rem !important;
            }

            .mb-xxl-15 {
                margin-bottom: 9rem !important;
            }

            .mb-xxl-auto {
                margin-bottom: auto !important;
            }

            .ms-xxl-0 {
                margin-left: 0 !important;
            }

            .ms-xxl-1 {
                margin-left: 0.25rem !important;
            }

            .ms-xxl-2 {
                margin-left: 0.5rem !important;
            }

            .ms-xxl-3 {
                margin-left: 1rem !important;
            }

            .ms-xxl-4 {
                margin-left: 1.5rem !important;
            }

            .ms-xxl-5 {
                margin-left: 2.5rem !important;
            }

            .ms-xxl-10 {
                margin-left: 6rem !important;
            }

            .ms-xxl-15 {
                margin-left: 9rem !important;
            }

            .ms-xxl-auto {
                margin-left: auto !important;
            }

            .m-xxl-n1 {
                margin: -0.25rem !important;
            }

            .m-xxl-n2 {
                margin: -0.5rem !important;
            }

            .m-xxl-n3 {
                margin: -1rem !important;
            }

            .m-xxl-n4 {
                margin: -1.5rem !important;
            }

            .m-xxl-n5 {
                margin: -2.5rem !important;
            }

            .m-xxl-n10 {
                margin: -6rem !important;
            }

            .m-xxl-n15 {
                margin: -9rem !important;
            }

            .mx-xxl-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }

            .mx-xxl-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }

            .mx-xxl-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }

            .mx-xxl-n4 {
                margin-right: -1.5rem !important;
                margin-left: -1.5rem !important;
            }

            .mx-xxl-n5 {
                margin-right: -2.5rem !important;
                margin-left: -2.5rem !important;
            }

            .mx-xxl-n10 {
                margin-right: -6rem !important;
                margin-left: -6rem !important;
            }

            .mx-xxl-n15 {
                margin-right: -9rem !important;
                margin-left: -9rem !important;
            }

            .my-xxl-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-xxl-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-xxl-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-xxl-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important;
            }

            .my-xxl-n5 {
                margin-top: -2.5rem !important;
                margin-bottom: -2.5rem !important;
            }

            .my-xxl-n10 {
                margin-top: -6rem !important;
                margin-bottom: -6rem !important;
            }

            .my-xxl-n15 {
                margin-top: -9rem !important;
                margin-bottom: -9rem !important;
            }

            .mt-xxl-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-xxl-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-xxl-n3 {
                margin-top: -1rem !important;
            }

            .mt-xxl-n4 {
                margin-top: -1.5rem !important;
            }

            .mt-xxl-n5 {
                margin-top: -2.5rem !important;
            }

            .mt-xxl-n10 {
                margin-top: -6rem !important;
            }

            .mt-xxl-n15 {
                margin-top: -9rem !important;
            }

            .me-xxl-n1 {
                margin-right: -0.25rem !important;
            }

            .me-xxl-n2 {
                margin-right: -0.5rem !important;
            }

            .me-xxl-n3 {
                margin-right: -1rem !important;
            }

            .me-xxl-n4 {
                margin-right: -1.5rem !important;
            }

            .me-xxl-n5 {
                margin-right: -2.5rem !important;
            }

            .me-xxl-n10 {
                margin-right: -6rem !important;
            }

            .me-xxl-n15 {
                margin-right: -9rem !important;
            }

            .mb-xxl-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-xxl-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-xxl-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-xxl-n4 {
                margin-bottom: -1.5rem !important;
            }

            .mb-xxl-n5 {
                margin-bottom: -2.5rem !important;
            }

            .mb-xxl-n10 {
                margin-bottom: -6rem !important;
            }

            .mb-xxl-n15 {
                margin-bottom: -9rem !important;
            }

            .ms-xxl-n1 {
                margin-left: -0.25rem !important;
            }

            .ms-xxl-n2 {
                margin-left: -0.5rem !important;
            }

            .ms-xxl-n3 {
                margin-left: -1rem !important;
            }

            .ms-xxl-n4 {
                margin-left: -1.5rem !important;
            }

            .ms-xxl-n5 {
                margin-left: -2.5rem !important;
            }

            .ms-xxl-n10 {
                margin-left: -6rem !important;
            }

            .ms-xxl-n15 {
                margin-left: -9rem !important;
            }

            .p-xxl-0 {
                padding: 0 !important;
            }

            .p-xxl-1 {
                padding: 0.25rem !important;
            }

            .p-xxl-2 {
                padding: 0.5rem !important;
            }

            .p-xxl-3 {
                padding: 1rem !important;
            }

            .p-xxl-4 {
                padding: 1.5rem !important;
            }

            .p-xxl-5 {
                padding: 2.5rem !important;
            }

            .p-xxl-10 {
                padding: 6rem !important;
            }

            .p-xxl-15 {
                padding: 9rem !important;
            }

            .px-xxl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-xxl-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-xxl-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-xxl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-xxl-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .px-xxl-5 {
                padding-right: 2.5rem !important;
                padding-left: 2.5rem !important;
            }

            .px-xxl-10 {
                padding-right: 6rem !important;
                padding-left: 6rem !important;
            }

            .px-xxl-15 {
                padding-right: 9rem !important;
                padding-left: 9rem !important;
            }

            .py-xxl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-xxl-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-xxl-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-xxl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-xxl-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-xxl-5 {
                padding-top: 2.5rem !important;
                padding-bottom: 2.5rem !important;
            }

            .py-xxl-10 {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }

            .py-xxl-15 {
                padding-top: 9rem !important;
                padding-bottom: 9rem !important;
            }

            .pt-xxl-0 {
                padding-top: 0 !important;
            }

            .pt-xxl-1 {
                padding-top: 0.25rem !important;
            }

            .pt-xxl-2 {
                padding-top: 0.5rem !important;
            }

            .pt-xxl-3 {
                padding-top: 1rem !important;
            }

            .pt-xxl-4 {
                padding-top: 1.5rem !important;
            }

            .pt-xxl-5 {
                padding-top: 2.5rem !important;
            }

            .pt-xxl-10 {
                padding-top: 6rem !important;
            }

            .pt-xxl-15 {
                padding-top: 9rem !important;
            }

            .pe-xxl-0 {
                padding-right: 0 !important;
            }

            .pe-xxl-1 {
                padding-right: 0.25rem !important;
            }

            .pe-xxl-2 {
                padding-right: 0.5rem !important;
            }

            .pe-xxl-3 {
                padding-right: 1rem !important;
            }

            .pe-xxl-4 {
                padding-right: 1.5rem !important;
            }

            .pe-xxl-5 {
                padding-right: 2.5rem !important;
            }

            .pe-xxl-10 {
                padding-right: 6rem !important;
            }

            .pe-xxl-15 {
                padding-right: 9rem !important;
            }

            .pb-xxl-0 {
                padding-bottom: 0 !important;
            }

            .pb-xxl-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-xxl-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-xxl-3 {
                padding-bottom: 1rem !important;
            }

            .pb-xxl-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-xxl-5 {
                padding-bottom: 2.5rem !important;
            }

            .pb-xxl-10 {
                padding-bottom: 6rem !important;
            }

            .pb-xxl-15 {
                padding-bottom: 9rem !important;
            }

            .ps-xxl-0 {
                padding-left: 0 !important;
            }

            .ps-xxl-1 {
                padding-left: 0.25rem !important;
            }

            .ps-xxl-2 {
                padding-left: 0.5rem !important;
            }

            .ps-xxl-3 {
                padding-left: 1rem !important;
            }

            .ps-xxl-4 {
                padding-left: 1.5rem !important;
            }

            .ps-xxl-5 {
                padding-left: 2.5rem !important;
            }

            .ps-xxl-10 {
                padding-left: 6rem !important;
            }

            .ps-xxl-15 {
                padding-left: 9rem !important;
            }

            .text-xxl-start {
                text-align: left !important;
            }

            .text-xxl-end {
                text-align: right !important;
            }

            .text-xxl-center {
                text-align: center !important;
            }
        }

        @media (min-width: 1200px) {
            .fs-1 {
                font-size: 1.5rem !important;
            }

            .fs-2 {
                font-size: 1.4rem !important;
            }

            .fs-3 {
                font-size: 1.3rem !important;
            }
        }

        @media print {
            .d-print-inline {
                display: inline !important;
            }

            .d-print-inline-block {
                display: inline-block !important;
            }

            .d-print-block {
                display: block !important;
            }

            .d-print-grid {
                display: grid !important;
            }

            .d-print-table {
                display: table !important;
            }

            .d-print-table-row {
                display: table-row !important;
            }

            .d-print-table-cell {
                display: table-cell !important;
            }

            .d-print-flex {
                display: flex !important;
            }

            .d-print-inline-flex {
                display: inline-flex !important;
            }

            .d-print-none {
                display: none !important;
            }
        }

        html,
        body {
            height: 100%;
        }

        body {
            overflow-x: hidden;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-Thin.otf");
            font-weight: 100;
            font-style: normal;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-ThinItalic.otf");
            font-weight: 100;
            font-style: italic;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-ExtraLight.otf");
            font-weight: 200;
            font-style: normal;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-ExtraLightItalic.otf");
            font-weight: 200;
            font-style: italic;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-Light.otf");
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-LightItalic.otf");
            font-weight: 300;
            font-style: italic;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-Regular.otf");
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-RegularItalic.otf");
            font-weight: 400;
            font-style: italic;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-Medium.otf");
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-MediumItalic.otf");
            font-weight: 500;
            font-style: italic;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-SemiBold.otf");
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-SemiBoldItalic.otf");
            font-weight: 600;
            font-style: italic;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-Bold.otf");
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-BoldItalic.otf");
            font-weight: 700;
            font-style: italic;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-ExtraBold.otf");
            font-weight: 800;
            font-style: normal;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-ExtraBoldItalic.otf");
            font-weight: 800;
            font-style: italic;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-Black.otf");
            font-weight: 800;
            font-style: normal;
        }

        @font-face {
            font-family: "Metropolis";
            src: url("../assets/fonts/metropolis/Metropolis-BlackItalic.otf");
            font-weight: 800;
            font-style: italic;
        }

        #layoutAuthentication {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #layoutAuthentication #layoutAuthentication_content {
            min-width: 0;
            flex-grow: 1;
        }

        #layoutAuthentication #layoutAuthentication_footer {
            min-width: 0;
        }

        #layoutError {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #layoutError #layoutError_content {
            min-width: 0;
            flex-grow: 1;
        }

        #layoutError #layoutError_footer {
            min-width: 0;
        }

        .img-error {
            max-width: 20rem;
        }

        @-webkit-keyframes fadeInUp {
            0% {
                opacity: 0;
                margin-top: 0.75rem;
            }

            100% {
                opacity: 1;
                margin-top: 0;
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                margin-top: 0.75rem;
            }

            100% {
                opacity: 1;
                margin-top: 0;
            }
        }

        .animated--fade-in-up {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
            -webkit-animation-duration: 300ms;
            animation-duration: 300ms;
            -webkit-animation-timing-function: margin cubic-bezier(0.18, 1.25, 0.4, 1), opacity cubic-bezier(0, 1, 0.4, 1);
            animation-timing-function: margin cubic-bezier(0.18, 1.25, 0.4, 1), opacity cubic-bezier(0, 1, 0.4, 1);
        }

        .animated--fade-in-up.dropdown-menu {
            margin-top: 0;
            top: 0.125rem !important;
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .animated--fade-in {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
            -webkit-animation-duration: 300ms;
            animation-duration: 300ms;
            -webkit-animation-timing-function: opacity cubic-bezier(0, 1, 0.4, 1);
            animation-timing-function: opacity cubic-bezier(0, 1, 0.4, 1);
        }

        .fechaHora {
            display: inline-block;
            /*background-color:#ffff;*/
            color: #B6B7BF;
            font-weight: bold;
            font-size: 14px;
            /*border-radius:4px;
 box-shadow: -4px -4px 10px rgba(255,255,255,0.5),
    5px 5px 10px rgba(255,255,255,0.1);*/
        }

        .bg-gradient-primary-to-secondary {
            background-color: #0422D8 !important;
            /*background-image: linear-gradient(135deg, #0061f2 0%, rgba(105, 0, 199, 0.8) 100%) !important;*/
            box-shadow:
                7px 7px 15px #45566754,
                -8px -8px 15px rgb(81 101 121 / 4%),
                inset -5px -4px 13px 0px rgb(81 101 121 / 35%),
                inset 6px 7px 12px 0px rgb(3 11 250 / 94%);
        }

        .bg-transparent-light {
            color: rgba(255, 255, 255, 0.5) !important;
            background-color: rgba(0, 0, 0, 0.1) !important;
        }

        .bg-transparent-dark {
            color: rgba(33, 40, 50, 0.5) !important;
            background-color: rgba(33, 40, 50, 0.8) !important;
        }

        .bg-gray-100 {
            background-color: #f2f6fc !important;
        }

        .bg-gray-200 {
            background-color: #e0e5ec !important;
        }

        .bg-gray-300 {
            background-color: #d4dae3 !important;
        }

        .bg-gray-400 {
            background-color: #c5ccd6 !important;
        }

        .bg-gray-500 {
            background-color: #a7aeb8 !important;
        }

        .bg-gray-600 {
            background-color: #69707a !important;
        }

        .bg-gray-700 {
            background-color: #4a515b !important;
        }

        .bg-gray-800 {
            background-color: #363d47 !important;
        }

        .bg-gray-900 {
            background-color: #212832 !important;
        }

        .bg-white-25 {
            background-color: rgba(255, 255, 255, 0.25) !important;
        }

        .bg-img-cover {
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .bg-img-repeat {
            background-position: top left;
            background-repeat: repeat;
        }

        .overlay {
            position: relative;
        }

        .overlay:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #000;
            opacity: 0.5;
        }

        .overlay-primary:before {
            background-color: #0061f2 !important;
        }

        .overlay-secondary:before {
            background-color: #6900c7 !important;
        }

        .overlay-success:before {
            background-color: #00ac69 !important;
        }

        .overlay-info:before {
            background-color: #00cfd5 !important;
        }

        .overlay-warning:before {
            background-color: #f4a100 !important;
        }

        .overlay-danger:before {
            background-color: #e81500 !important;
        }

        .overlay-light:before {
            background-color: #f2f6fc !important;
        }

        .overlay-dark:before {
            background-color: #212832 !important;
        }

        .overlay-black:before {
            background-color: #000 !important;
        }

        .overlay-white:before {
            background-color: #fff !important;
        }

        .overlay-red:before {
            background-color: #e81500 !important;
        }

        .overlay-orange:before {
            background-color: #f76400 !important;
        }

        .overlay-yellow:before {
            background-color: #f4a100 !important;
        }

        .overlay-green:before {
            background-color: #00ac69 !important;
        }

        .overlay-teal:before {
            background-color: #00ba94 !important;
        }

        .overlay-cyan:before {
            background-color: #00cfd5 !important;
        }

        .overlay-blue:before {
            background-color: #0061f2 !important;
        }

        .overlay-indigo:before {
            background-color: #5800e8 !important;
        }

        .overlay-purple:before {
            background-color: #6900c7 !important;
        }

        .overlay-pink:before {
            background-color: #e30059 !important;
        }

        .overlay-red-soft:before {
            background-color: #f1e0e3 !important;
        }

        .overlay-orange-soft:before {
            background-color: #f3e7e3 !important;
        }

        .overlay-yellow-soft:before {
            background-color: #f2eee3 !important;
        }

        .overlay-green-soft:before {
            background-color: #daefed !important;
        }

        .overlay-teal-soft:before {
            background-color: #daf0f2 !important;
        }

        .overlay-cyan-soft:before {
            background-color: #daf2f8 !important;
        }

        .overlay-blue-soft:before {
            background-color: #dae7fb !important;
        }

        .overlay-indigo-soft:before {
            background-color: #e3ddfa !important;
        }

        .overlay-purple-soft:before {
            background-color: #e4ddf7 !important;
        }

        .overlay-pink-soft:before {
            background-color: #f1ddec !important;
        }

        .overlay-primary-soft:before {
            background-color: #dae7fb !important;
        }

        .overlay-secondary-soft:before {
            background-color: #e4ddf7 !important;
        }

        .overlay-success-soft:before {
            background-color: #daefed !important;
        }

        .overlay-info-soft:before {
            background-color: #daf2f8 !important;
        }

        .overlay-warning-soft:before {
            background-color: #f2eee3 !important;
        }

        .overlay-danger-soft:before {
            background-color: #f1e0e3 !important;
        }

        .overlay-10:before {
            opacity: 0.1;
        }

        .overlay-20:before {
            opacity: 0.2;
        }

        .overlay-30:before {
            opacity: 0.3;
        }

        .overlay-40:before {
            opacity: 0.4;
        }

        .overlay-50:before {
            opacity: 0.5;
        }

        .overlay-60:before {
            opacity: 0.6;
        }

        .overlay-70:before {
            opacity: 0.7;
        }

        .overlay-80:before {
            opacity: 0.8;
        }

        .overlay-90:before {
            opacity: 0.9;
        }

        .border-lg {
            border-width: 0.25rem !important;
        }

        .border-top-lg {
            border-top-width: 0.25rem !important;
        }

        .border-end-lg {
            border-right-width: 0.25rem !important;
        }

        .border-bottom-lg {
            border-bottom-width: 0.25rem !important;
        }

        .border-start-lg {
            border-left-width: 0.25rem !important;
        }

        .border-primary {
            border-color: #0061f2 !important;
        }

        .border-secondary {
            border-color: #6900c7 !important;
        }

        .border-success {
            border-color: #00ac69 !important;
        }

        .border-info {
            border-color: #00cfd5 !important;
        }

        .border-warning {
            border-color: #f4a100 !important;
        }

        .border-danger {
            border-color: #e81500 !important;
        }

        .border-light {
            border-color: #f2f6fc !important;
        }

        .border-dark {
            border-color: #212832 !important;
        }

        .border-black {
            border-color: #000 !important;
        }

        .border-white {
            border-color: #fff !important;
        }

        .border-red {
            border-color: #e81500 !important;
        }

        .border-orange {
            border-color: #f76400 !important;
        }

        .border-yellow {
            border-color: #f4a100 !important;
        }

        .border-green {
            border-color: #00ac69 !important;
        }

        .border-teal {
            border-color: #00ba94 !important;
        }

        .border-cyan {
            border-color: #00cfd5 !important;
        }

        .border-blue {
            border-color: #0061f2 !important;
        }

        .border-indigo {
            border-color: #5800e8 !important;
        }

        .border-purple {
            border-color: #6900c7 !important;
        }

        .border-pink {
            border-color: #e30059 !important;
        }

        .border-red-soft {
            border-color: #f1e0e3 !important;
        }

        .border-orange-soft {
            border-color: #f3e7e3 !important;
        }

        .border-yellow-soft {
            border-color: #f2eee3 !important;
        }

        .border-green-soft {
            border-color: #daefed !important;
        }

        .border-teal-soft {
            border-color: #daf0f2 !important;
        }

        .border-cyan-soft {
            border-color: #daf2f8 !important;
        }

        .border-blue-soft {
            border-color: #dae7fb !important;
        }

        .border-indigo-soft {
            border-color: #e3ddfa !important;
        }

        .border-purple-soft {
            border-color: #e4ddf7 !important;
        }

        .border-pink-soft {
            border-color: #f1ddec !important;
        }

        .border-primary-soft {
            border-color: #dae7fb !important;
        }

        .border-secondary-soft {
            border-color: #e4ddf7 !important;
        }

        .border-success-soft {
            border-color: #daefed !important;
        }

        .border-info-soft {
            border-color: #daf2f8 !important;
        }

        .border-warning-soft {
            border-color: #f2eee3 !important;
        }

        .border-danger-soft {
            border-color: #f1e0e3 !important;
        }

        .border-start-primary {
            border-left-color: #0061f2 !important;
        }

        .border-start-secondary {
            border-left-color: #6900c7 !important;
        }

        .border-start-success {
            border-left-color: #00ac69 !important;
        }

        .border-start-info {
            border-left-color: #00cfd5 !important;
        }

        .border-start-warning {
            border-left-color: #f4a100 !important;
        }

        .border-start-danger {
            border-left-color: #e81500 !important;
        }

        .border-start-light {
            border-left-color: #f2f6fc !important;
        }

        .border-start-dark {
            border-left-color: #212832 !important;
        }

        .border-start-black {
            border-left-color: #000 !important;
        }

        .border-start-white {
            border-left-color: #fff !important;
        }

        .border-start-red {
            border-left-color: #e81500 !important;
        }

        .border-start-orange {
            border-left-color: #f76400 !important;
        }

        .border-start-yellow {
            border-left-color: #f4a100 !important;
        }

        .border-start-green {
            border-left-color: #00ac69 !important;
        }

        .border-start-teal {
            border-left-color: #00ba94 !important;
        }

        .border-start-cyan {
            border-left-color: #00cfd5 !important;
        }

        .border-start-blue {
            border-left-color: #0061f2 !important;
        }

        .border-start-indigo {
            border-left-color: #5800e8 !important;
        }

        .border-start-purple {
            border-left-color: #6900c7 !important;
        }

        .border-start-pink {
            border-left-color: #e30059 !important;
        }

        .border-start-red-soft {
            border-left-color: #f1e0e3 !important;
        }

        .border-start-orange-soft {
            border-left-color: #f3e7e3 !important;
        }

        .border-start-yellow-soft {
            border-left-color: #f2eee3 !important;
        }

        .border-start-green-soft {
            border-left-color: #daefed !important;
        }

        .border-start-teal-soft {
            border-left-color: #daf0f2 !important;
        }

        .border-start-cyan-soft {
            border-left-color: #daf2f8 !important;
        }

        .border-start-blue-soft {
            border-left-color: #dae7fb !important;
        }

        .border-start-indigo-soft {
            border-left-color: #e3ddfa !important;
        }

        .border-start-purple-soft {
            border-left-color: #e4ddf7 !important;
        }

        .border-start-pink-soft {
            border-left-color: #f1ddec !important;
        }

        .border-start-primary-soft {
            border-left-color: #dae7fb !important;
        }

        .border-start-secondary-soft {
            border-left-color: #e4ddf7 !important;
        }

        .border-start-success-soft {
            border-left-color: #daefed !important;
        }

        .border-start-info-soft {
            border-left-color: #daf2f8 !important;
        }

        .border-start-warning-soft {
            border-left-color: #f2eee3 !important;
        }

        .border-start-danger-soft {
            border-left-color: #f1e0e3 !important;
        }

        .border-end-primary {
            border-right-color: #0061f2 !important;
        }

        .border-end-secondary {
            border-right-color: #6900c7 !important;
        }

        .border-end-success {
            border-right-color: #00ac69 !important;
        }

        .border-end-info {
            border-right-color: #00cfd5 !important;
        }

        .border-end-warning {
            border-right-color: #f4a100 !important;
        }

        .border-end-danger {
            border-right-color: #e81500 !important;
        }

        .border-end-light {
            border-right-color: #f2f6fc !important;
        }

        .border-end-dark {
            border-right-color: #212832 !important;
        }

        .border-end-black {
            border-right-color: #000 !important;
        }

        .border-end-white {
            border-right-color: #fff !important;
        }

        .border-end-red {
            border-right-color: #e81500 !important;
        }

        .border-end-orange {
            border-right-color: #f76400 !important;
        }

        .border-end-yellow {
            border-right-color: #f4a100 !important;
        }

        .border-end-green {
            border-right-color: #00ac69 !important;
        }

        .border-end-teal {
            border-right-color: #00ba94 !important;
        }

        .border-end-cyan {
            border-right-color: #00cfd5 !important;
        }

        .border-end-blue {
            border-right-color: #0061f2 !important;
        }

        .border-end-indigo {
            border-right-color: #5800e8 !important;
        }

        .border-end-purple {
            border-right-color: #6900c7 !important;
        }

        .border-end-pink {
            border-right-color: #e30059 !important;
        }

        .border-end-red-soft {
            border-right-color: #f1e0e3 !important;
        }

        .border-end-orange-soft {
            border-right-color: #f3e7e3 !important;
        }

        .border-end-yellow-soft {
            border-right-color: #f2eee3 !important;
        }

        .border-end-green-soft {
            border-right-color: #daefed !important;
        }

        .border-end-teal-soft {
            border-right-color: #daf0f2 !important;
        }

        .border-end-cyan-soft {
            border-right-color: #daf2f8 !important;
        }

        .border-end-blue-soft {
            border-right-color: #dae7fb !important;
        }

        .border-end-indigo-soft {
            border-right-color: #e3ddfa !important;
        }

        .border-end-purple-soft {
            border-right-color: #e4ddf7 !important;
        }

        .border-end-pink-soft {
            border-right-color: #f1ddec !important;
        }

        .border-end-primary-soft {
            border-right-color: #dae7fb !important;
        }

        .border-end-secondary-soft {
            border-right-color: #e4ddf7 !important;
        }

        .border-end-success-soft {
            border-right-color: #daefed !important;
        }

        .border-end-info-soft {
            border-right-color: #daf2f8 !important;
        }

        .border-end-warning-soft {
            border-right-color: #f2eee3 !important;
        }

        .border-end-danger-soft {
            border-right-color: #f1e0e3 !important;
        }

        .border-top-primary {
            border-top-color: #0061f2 !important;
        }

        .border-top-secondary {
            border-top-color: #6900c7 !important;
        }

        .border-top-success {
            border-top-color: #00ac69 !important;
        }

        .border-top-info {
            border-top-color: #00cfd5 !important;
        }

        .border-top-warning {
            border-top-color: #f4a100 !important;
        }

        .border-top-danger {
            border-top-color: #e81500 !important;
        }

        .border-top-light {
            border-top-color: #f2f6fc !important;
        }

        .border-top-dark {
            border-top-color: #212832 !important;
        }

        .border-top-black {
            border-top-color: #000 !important;
        }

        .border-top-white {
            border-top-color: #fff !important;
        }

        .border-top-red {
            border-top-color: #e81500 !important;
        }

        .border-top-orange {
            border-top-color: #f76400 !important;
        }

        .border-top-yellow {
            border-top-color: #f4a100 !important;
        }

        .border-top-green {
            border-top-color: #00ac69 !important;
        }

        .border-top-teal {
            border-top-color: #00ba94 !important;
        }

        .border-top-cyan {
            border-top-color: #00cfd5 !important;
        }

        .border-top-blue {
            border-top-color: #0061f2 !important;
        }

        .border-top-indigo {
            border-top-color: #5800e8 !important;
        }

        .border-top-purple {
            border-top-color: #6900c7 !important;
        }

        .border-top-pink {
            border-top-color: #e30059 !important;
        }

        .border-top-red-soft {
            border-top-color: #f1e0e3 !important;
        }

        .border-top-orange-soft {
            border-top-color: #f3e7e3 !important;
        }

        .border-top-yellow-soft {
            border-top-color: #f2eee3 !important;
        }

        .border-top-green-soft {
            border-top-color: #daefed !important;
        }

        .border-top-teal-soft {
            border-top-color: #daf0f2 !important;
        }

        .border-top-cyan-soft {
            border-top-color: #daf2f8 !important;
        }

        .border-top-blue-soft {
            border-top-color: #dae7fb !important;
        }

        .border-top-indigo-soft {
            border-top-color: #e3ddfa !important;
        }

        .border-top-purple-soft {
            border-top-color: #e4ddf7 !important;
        }

        .border-top-pink-soft {
            border-top-color: #f1ddec !important;
        }

        .border-top-primary-soft {
            border-top-color: #dae7fb !important;
        }

        .border-top-secondary-soft {
            border-top-color: #e4ddf7 !important;
        }

        .border-top-success-soft {
            border-top-color: #daefed !important;
        }

        .border-top-info-soft {
            border-top-color: #daf2f8 !important;
        }

        .border-top-warning-soft {
            border-top-color: #f2eee3 !important;
        }

        .border-top-danger-soft {
            border-top-color: #f1e0e3 !important;
        }

        .border-bottom-primary {
            border-bottom-color: #0061f2 !important;
        }

        .border-bottom-secondary {
            border-bottom-color: #6900c7 !important;
        }

        .border-bottom-success {
            border-bottom-color: #00ac69 !important;
        }

        .border-bottom-info {
            border-bottom-color: #00cfd5 !important;
        }

        .border-bottom-warning {
            border-bottom-color: #f4a100 !important;
        }

        .border-bottom-danger {
            border-bottom-color: #e81500 !important;
        }

        .border-bottom-light {
            border-bottom-color: #f2f6fc !important;
        }

        .border-bottom-dark {
            border-bottom-color: #212832 !important;
        }

        .border-bottom-black {
            border-bottom-color: #000 !important;
        }

        .border-bottom-white {
            border-bottom-color: #fff !important;
        }

        .border-bottom-red {
            border-bottom-color: #e81500 !important;
        }

        .border-bottom-orange {
            border-bottom-color: #f76400 !important;
        }

        .border-bottom-yellow {
            border-bottom-color: #f4a100 !important;
        }

        .border-bottom-green {
            border-bottom-color: #00ac69 !important;
        }

        .border-bottom-teal {
            border-bottom-color: #00ba94 !important;
        }

        .border-bottom-cyan {
            border-bottom-color: #00cfd5 !important;
        }

        .border-bottom-blue {
            border-bottom-color: #0061f2 !important;
        }

        .border-bottom-indigo {
            border-bottom-color: #5800e8 !important;
        }

        .border-bottom-purple {
            border-bottom-color: #6900c7 !important;
        }

        .border-bottom-pink {
            border-bottom-color: #e30059 !important;
        }

        .border-bottom-red-soft {
            border-bottom-color: #f1e0e3 !important;
        }

        .border-bottom-orange-soft {
            border-bottom-color: #f3e7e3 !important;
        }

        .border-bottom-yellow-soft {
            border-bottom-color: #f2eee3 !important;
        }

        .border-bottom-green-soft {
            border-bottom-color: #daefed !important;
        }

        .border-bottom-teal-soft {
            border-bottom-color: #daf0f2 !important;
        }

        .border-bottom-cyan-soft {
            border-bottom-color: #daf2f8 !important;
        }

        .border-bottom-blue-soft {
            border-bottom-color: #dae7fb !important;
        }

        .border-bottom-indigo-soft {
            border-bottom-color: #e3ddfa !important;
        }

        .border-bottom-purple-soft {
            border-bottom-color: #e4ddf7 !important;
        }

        .border-bottom-pink-soft {
            border-bottom-color: #f1ddec !important;
        }

        .border-bottom-primary-soft {
            border-bottom-color: #dae7fb !important;
        }

        .border-bottom-secondary-soft {
            border-bottom-color: #e4ddf7 !important;
        }

        .border-bottom-success-soft {
            border-bottom-color: #daefed !important;
        }

        .border-bottom-info-soft {
            border-bottom-color: #daf2f8 !important;
        }

        .border-bottom-warning-soft {
            border-bottom-color: #f2eee3 !important;
        }

        .border-bottom-danger-soft {
            border-bottom-color: #f1e0e3 !important;
        }

        .rounded-xl {
            border-radius: 1rem !important;
        }

        .border-gray-100 {
            border-color: #f2f6fc !important;
        }

        .border-gray-200 {
            border-color: #e0e5ec !important;
        }

        .border-gray-300 {
            border-color: #d4dae3 !important;
        }

        .border-gray-400 {
            border-color: #c5ccd6 !important;
        }

        .border-gray-500 {
            border-color: #a7aeb8 !important;
        }

        .border-gray-600 {
            border-color: #69707a !important;
        }

        .border-gray-700 {
            border-color: #4a515b !important;
        }

        .border-gray-800 {
            border-color: #363d47 !important;
        }

        .border-gray-900 {
            border-color: #212832 !important;
        }

        .no-caret .dropdown-toggle::after {
            display: none;
        }

        .pointer {
            cursor: pointer !important;
        }

        .no-highlight {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important;
        }

        .lift {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(33, 40, 50, 0.15);
            transition: transform 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .lift:hover {
            transform: translateY(-0.3333333333rem);
            box-shadow: 0 0.5rem 2rem 0 rgba(33, 40, 50, 0.25);
        }

        .lift:active {
            transform: none;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(33, 40, 50, 0.15);
        }

        .lift-sm {
            box-shadow: 0 0.125rem 0.25rem 0 rgba(33, 40, 50, 0.2);
        }

        .lift-sm:hover {
            transform: translateY(-0.1666666667rem);
            box-shadow: 0 0.25rem 1rem 0 rgba(33, 40, 50, 0.25);
        }

        .lift-sm:active {
            transform: none;
            box-shadow: 0 0.125rem 0.25rem 0 rgba(33, 40, 50, 0.2);
        }

        .card.lift {
            text-decoration: none;
            color: inherit;
        }

        .o-visible {
            overflow: visible !important;
        }

        .o-hidden {
            overflow: hidden !important;
        }

        .shadow-right-sm {
            box-shadow: 0.125rem 0 0.25rem 0 rgba(33, 40, 50, 0.15) !important;
        }

        .shadow-right {
            box-shadow: 0.15rem 0 1.75rem 0 rgba(33, 40, 50, 0.15) !important;
        }

        .shadow-right-lg {
            box-shadow: 1rem 0 3rem 0 rgba(33, 40, 50, 0.15) !important;
        }

        .shadow-left-sm {
            box-shadow: -0.125rem 0 0.25rem 0 rgba(33, 40, 50, 0.15) !important;
        }

        .shadow-left {
            box-shadow: -0.15rem 0 1.75rem 0 rgba(33, 40, 50, 0.15) !important;
        }

        .shadow-left-lg {
            box-shadow: -1rem 0 3rem 0 rgba(33, 40, 50, 0.15) !important;
        }

        .content-skewed {
            perspective: 1500px !important;
            transform-style: preserve-3d !important;
        }

        .content-skewed-right {
            perspective-origin: right center !important;
        }

        .content-skewed-right .content-skewed-item {
            transform: rotateY(30deg) rotateX(15deg) !important;
            -webkit-backface-visibility: hidden !important;
            backface-visibility: hidden !important;
        }

        .content-skewed-left {
            perspective-origin: left center !important;
        }

        .content-skewed-left .content-skewed-item {
            transform: rotateY(-30deg) rotateX(15deg) !important;
            -webkit-backface-visibility: hidden !important;
            backface-visibility: hidden !important;
        }

        .text-gray-100 {
            color: #f2f6fc !important;
        }

        .text-gray-200 {
            color: #e0e5ec !important;
        }

        .text-gray-300 {
            color: #d4dae3 !important;
        }

        .text-gray-400 {
            color: #c5ccd6 !important;
        }

        .text-gray-500 {
            color: #a7aeb8 !important;
        }

        .text-gray-600 {
            color: #69707a !important;
        }

        .text-gray-700 {
            color: #4a515b !important;
        }

        .text-gray-800 {
            color: #363d47 !important;
        }

        .text-gray-900 {
            color: #212832 !important;
        }

        .fw-100 {
            font-weight: 100 !important;
        }

        .fw-200 {
            font-weight: 200 !important;
        }

        .fw-300 {
            font-weight: 300 !important;
        }

        .fw-400 {
            font-weight: 400 !important;
        }

        .fw-500 {
            font-weight: 500 !important;
        }

        .fw-600 {
            font-weight: 600 !important;
        }

        .fw-700 {
            font-weight: 700 !important;
        }

        .fw-800 {
            font-weight: 800 !important;
        }

        .fw-900 {
            font-weight: 900 !important;
        }

        .text-white-75 {
            color: rgba(255, 255, 255, 0.75) !important;
        }

        .text-white-25 {
            color: rgba(255, 255, 255, 0.25) !important;
        }

        .text-black-75 {
            color: rgba(0, 0, 0, 0.75) !important;
        }

        .text-black-25 {
            color: rgba(0, 0, 0, 0.25) !important;
        }

        .text-xs {
            font-size: 0.75rem !important;
        }

        .text-sm {
            font-size: 0.875rem !important;
        }

        .text-lg {
            font-size: 1.25rem !important;
        }

        .text-xl {
            font-size: 2.5rem !important;
        }

        .text-uppercase-expanded {
            font-weight: 700;
            letter-spacing: 0.125em;
            text-transform: uppercase;
        }

        .text-arrow-icon {
            line-height: 1;
            display: inline-flex;
            align-items: center;
        }

        .text-arrow-icon svg {
            margin-left: 0.25rem;
        }

        .text-arrow-icon.small svg {
            height: 0.875rem;
            width: 0.875rem;
        }

        .line-height-normal {
            line-height: normal !important;
        }

        .feather-sm {
            height: 0.875rem !important;
            width: 0.875rem !important;
        }

        .feather-lg {
            height: 1.25rem !important;
            width: 1.25rem !important;
        }

        .feather-xl {
            height: 2.5rem !important;
            width: 2.5rem !important;
        }

        .z-1 {
            z-index: 1 !important;
            position: relative !important;
        }

        .z-2 {
            z-index: 2 !important;
            position: relative !important;
        }

        .alert-icon {
            position: relative;
            display: flex;
            padding: 0;
        }

        .alert-icon button.btn-close {
            position: absolute;
            top: 1.25rem;
            right: 1rem;
        }

        .alert-icon .alert-icon-aside {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            padding-left: 1rem;
            font-size: 1.5rem;
        }

        .alert-icon .alert-icon-aside svg.feather,
        .alert-icon .alert-icon-aside svg,
        .alert-icon .alert-icon-aside i {
            height: 1.5rem;
            width: 1.5rem;
        }

        .alert-icon .alert-icon-content {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .alert-primary.alert-solid {
            color: #fff;
            background-color: #0061f2;
            border-color: #0061f2;
        }

        .alert-primary.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-secondary.alert-solid {
            color: #fff;
            background-color: #6900c7;
            border-color: #6900c7;
        }

        .alert-secondary.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-success.alert-solid {
            color: #fff;
            background-color: #00ac69;
            border-color: #00ac69;
        }

        .alert-success.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-info.alert-solid {
            color: #fff;
            background-color: #00cfd5;
            border-color: #00cfd5;
        }

        .alert-info.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-warning.alert-solid {
            color: #fff;
            background-color: #f4a100;
            border-color: #f4a100;
        }

        .alert-warning.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-danger.alert-solid {
            color: #fff;
            background-color: #e81500;
            border-color: #e81500;
        }

        .alert-danger.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-light.alert-solid {
            color: #000;
            background-color: #f2f6fc;
            border-color: #f2f6fc;
        }

        .alert-light.alert-solid .alert-link {
            color: black;
        }

        .alert-dark.alert-solid {
            color: #fff;
            background-color: #212832;
            border-color: #212832;
        }

        .alert-dark.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-black.alert-solid {
            color: #fff;
            background-color: #000;
            border-color: #000;
        }

        .alert-black.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-white.alert-solid {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }

        .alert-white.alert-solid .alert-link {
            color: black;
        }

        .alert-red.alert-solid {
            color: #fff;
            background-color: #e81500;
            border-color: #e81500;
        }

        .alert-red.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-orange.alert-solid {
            color: #fff;
            background-color: #f76400;
            border-color: #f76400;
        }

        .alert-orange.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-yellow.alert-solid {
            color: #fff;
            background-color: #f4a100;
            border-color: #f4a100;
        }

        .alert-yellow.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-green.alert-solid {
            color: #fff;
            background-color: #00ac69;
            border-color: #00ac69;
        }

        .alert-green.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-teal.alert-solid {
            color: #fff;
            background-color: #00ba94;
            border-color: #00ba94;
        }

        .alert-teal.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-cyan.alert-solid {
            color: #fff;
            background-color: #00cfd5;
            border-color: #00cfd5;
        }

        .alert-cyan.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-blue.alert-solid {
            color: #fff;
            background-color: #0061f2;
            border-color: #0061f2;
        }

        .alert-blue.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-indigo.alert-solid {
            color: #fff;
            background-color: #5800e8;
            border-color: #5800e8;
        }

        .alert-indigo.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-purple.alert-solid {
            color: #fff;
            background-color: #6900c7;
            border-color: #6900c7;
        }

        .alert-purple.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-pink.alert-solid {
            color: #fff;
            background-color: #e30059;
            border-color: #e30059;
        }

        .alert-pink.alert-solid .alert-link {
            color: #cccccc;
        }

        .alert-red-soft.alert-solid {
            color: #000;
            background-color: #f1e0e3;
            border-color: #f1e0e3;
        }

        .alert-red-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-orange-soft.alert-solid {
            color: #000;
            background-color: #f3e7e3;
            border-color: #f3e7e3;
        }

        .alert-orange-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-yellow-soft.alert-solid {
            color: #000;
            background-color: #f2eee3;
            border-color: #f2eee3;
        }

        .alert-yellow-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-green-soft.alert-solid {
            color: #000;
            background-color: #daefed;
            border-color: #daefed;
        }

        .alert-green-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-teal-soft.alert-solid {
            color: #000;
            background-color: #daf0f2;
            border-color: #daf0f2;
        }

        .alert-teal-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-cyan-soft.alert-solid {
            color: #000;
            background-color: #daf2f8;
            border-color: #daf2f8;
        }

        .alert-cyan-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-blue-soft.alert-solid {
            color: #000;
            background-color: #dae7fb;
            border-color: #dae7fb;
        }

        .alert-blue-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-indigo-soft.alert-solid {
            color: #000;
            background-color: #e3ddfa;
            border-color: #e3ddfa;
        }

        .alert-indigo-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-purple-soft.alert-solid {
            color: #000;
            background-color: #e4ddf7;
            border-color: #e4ddf7;
        }

        .alert-purple-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-pink-soft.alert-solid {
            color: #000;
            background-color: #f1ddec;
            border-color: #f1ddec;
        }

        .alert-pink-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-primary-soft.alert-solid {
            color: #000;
            background-color: #dae7fb;
            border-color: #dae7fb;
        }

        .alert-primary-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-secondary-soft.alert-solid {
            color: #000;
            background-color: #e4ddf7;
            border-color: #e4ddf7;
        }

        .alert-secondary-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-success-soft.alert-solid {
            color: #000;
            background-color: #daefed;
            border-color: #daefed;
        }

        .alert-success-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-info-soft.alert-solid {
            color: #000;
            background-color: #daf2f8;
            border-color: #daf2f8;
        }

        .alert-info-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-warning-soft.alert-solid {
            color: #000;
            background-color: #f2eee3;
            border-color: #f2eee3;
        }

        .alert-warning-soft.alert-solid .alert-link {
            color: black;
        }

        .alert-danger-soft.alert-solid {
            color: #000;
            background-color: #f1e0e3;
            border-color: #f1e0e3;
        }

        .alert-danger-soft.alert-solid .alert-link {
            color: black;
        }

        .avatar {
            display: inline-flex;
            height: 2rem;
            width: 2rem;
            border-radius: 50%;
            position: relative;
            align-items: center;
            justify-content: center;
        }

        .avatar .avatar-img {
            border-radius: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            height: 2rem;
            width: auto;
        }

        .avatar-xs {
            height: 1.25rem;
            width: 1.25rem;
        }

        .avatar-xs .avatar-img {
            height: 1rem;
        }

        .avatar-sm {
            height: 1.75rem;
            width: 1.75rem;
        }

        .avatar-sm .avatar-img {
            height: 1.5rem;
        }

        .avatar-lg {
            height: 2.5rem;
            width: 2.5rem;
        }

        .avatar-lg .avatar-img {
            height: 2.5rem;
        }

        .avatar-xl {
            height: 3rem;
            width: 3rem;
        }

        .avatar-xl .avatar-img {
            height: 3rem;
        }

        .avatar-xxl {
            height: 3.75rem;
            width: 3.75rem;
        }

        .avatar-xxl .avatar-img {
            height: 3.75rem;
        }

        .avatar-busy::before,
        .avatar-idle::before,
        .avatar-offline::before,
        .avatar-online::before {
            content: "";
            position: absolute;
            bottom: 5%;
            right: 5%;
            width: 20%;
            height: 20%;
            border-radius: 50%;
            background-color: #d4dae3;
            border: 0.0625rem solid #fff;
        }

        .avatar-busy::before {
            background-color: #e81500;
        }

        .avatar-idle::before {
            background-color: #f4a100;
        }

        .avatar-offline::before {
            background-color: #d4dae3;
        }

        .avatar-online::before {
            background-color: #00ac69;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-icon {
            padding: 0;
            justify-content: center;
            overflow: hidden;
            border-radius: 100%;
            flex-shrink: 0;
            height: calc((0.875rem * 1) + (0.875rem * 2) + (2px)) !important;
            width: calc((0.875rem * 1) + (0.875rem * 2) + (2px)) !important;
        }

        .btn-icon .feather {
            margin-top: 0 !important;
        }

        .btn-icon.btn-xl {
            height: calc((1.125rem * 1) + (1.25rem * 2) + (2px)) !important;
            width: calc((1.125rem * 1) + (1.25rem * 2) + (2px)) !important;
            border-radius: 100%;
        }

        .btn-icon.btn-lg,
        .btn-group-lg>.btn-icon.btn {
            height: calc((1rem * 1) + (1.125rem * 2) + (2px)) !important;
            width: calc((1rem * 1) + (1.125rem * 2) + (2px)) !important;
        }

        .btn-icon.btn-sm,
        .btn-group-sm>.btn-icon.btn {
            height: calc((0.75rem * 1) + (0.5rem * 2) + (2px)) !important;
            width: calc((0.75rem * 1) + (0.5rem * 2) + (2px)) !important;
        }

        .btn-icon.btn-xs {
            height: calc((0.7rem * 1) + (0.25rem * 2) + (2px)) !important;
            width: calc((0.7rem * 1) + (0.25rem * 2) + (2px)) !important;
            border-radius: 100%;
        }

        .btn-icon.btn-link {
            text-decoration: none;
        }

        .btn .feather {
            margin-top: -1px;
            height: 0.875rem;
            width: 0.875rem;
        }

        .btn-lg .feather,
        .btn-group-lg>.btn .feather {
            height: 1rem;
            width: 1rem;
        }

        .btn-sm .feather,
        .btn-group-sm>.btn .feather {
            height: 0.75rem;
            width: 0.75rem;
        }

        .btn-xs .feather {
            height: 0.7rem;
            width: 0.7rem;
        }

        .btn-xl .feather {
            height: 1.125rem;
            width: 1.125rem;
        }

        .btn-xs {
            padding: 0.25rem 0.5rem;
            font-size: 0.7rem;
            border-radius: 0.35rem;
            line-height: 1;
        }

        .btn-xl {
            padding: 1.25rem 1.5rem;
            font-size: 1.125rem;
            border-radius: 0.5rem;
        }

        .btn-facebook {
            color: #fff;
            background-color: #3b5998;
            border-color: #3b5998;
        }

        .btn-facebook:hover {
            color: #fff;
            background-color: #324c81;
            border-color: #2f477a;
        }

        .btn-check:focus+.btn-facebook,
        .btn-facebook:focus {
            color: #fff;
            background-color: #324c81;
            border-color: #2f477a;
            box-shadow: 0 0 0 0.25rem rgba(88, 114, 167, 0.5);
        }

        .btn-check:checked+.btn-facebook,
        .btn-check:active+.btn-facebook,
        .btn-facebook:active,
        .btn-facebook.active,
        .show>.btn-facebook.dropdown-toggle {
            color: #fff;
            background-color: #2f477a;
            border-color: #2c4372;
        }

        .btn-check:checked+.btn-facebook:focus,
        .btn-check:active+.btn-facebook:focus,
        .btn-facebook:active:focus,
        .btn-facebook.active:focus,
        .show>.btn-facebook.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(88, 114, 167, 0.5);
        }

        .btn-facebook:disabled,
        .btn-facebook.disabled {
            color: #fff;
            background-color: #3b5998;
            border-color: #3b5998;
        }

        .btn-github {
            color: #fff;
            background-color: #333333;
            border-color: #333333;
        }

        .btn-github:hover {
            color: #fff;
            background-color: #2b2b2b;
            border-color: #292929;
        }

        .btn-check:focus+.btn-github,
        .btn-github:focus {
            color: #fff;
            background-color: #2b2b2b;
            border-color: #292929;
            box-shadow: 0 0 0 0.25rem rgba(82, 82, 82, 0.5);
        }

        .btn-check:checked+.btn-github,
        .btn-check:active+.btn-github,
        .btn-github:active,
        .btn-github.active,
        .show>.btn-github.dropdown-toggle {
            color: #fff;
            background-color: #292929;
            border-color: #262626;
        }

        .btn-check:checked+.btn-github:focus,
        .btn-check:active+.btn-github:focus,
        .btn-github:active:focus,
        .btn-github.active:focus,
        .show>.btn-github.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(82, 82, 82, 0.5);
        }

        .btn-github:disabled,
        .btn-github.disabled {
            color: #fff;
            background-color: #333333;
            border-color: #333333;
        }

        .btn-google {
            color: #fff;
            background-color: #ea4335;
            border-color: #ea4335;
        }

        .btn-google:hover {
            color: #fff;
            background-color: #c7392d;
            border-color: #bb362a;
        }

        .btn-check:focus+.btn-google,
        .btn-google:focus {
            color: #fff;
            background-color: #c7392d;
            border-color: #bb362a;
            box-shadow: 0 0 0 0.25rem rgba(237, 95, 83, 0.5);
        }

        .btn-check:checked+.btn-google,
        .btn-check:active+.btn-google,
        .btn-google:active,
        .btn-google.active,
        .show>.btn-google.dropdown-toggle {
            color: #fff;
            background-color: #bb362a;
            border-color: #b03228;
        }

        .btn-check:checked+.btn-google:focus,
        .btn-check:active+.btn-google:focus,
        .btn-google:active:focus,
        .btn-google.active:focus,
        .show>.btn-google.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(237, 95, 83, 0.5);
        }

        .btn-google:disabled,
        .btn-google.disabled {
            color: #fff;
            background-color: #ea4335;
            border-color: #ea4335;
        }

        .btn-twitter {
            color: #fff;
            background-color: #1da1f2;
            border-color: #1da1f2;
        }

        .btn-twitter:hover {
            color: #fff;
            background-color: #1989ce;
            border-color: #1781c2;
        }

        .btn-check:focus+.btn-twitter,
        .btn-twitter:focus {
            color: #fff;
            background-color: #1989ce;
            border-color: #1781c2;
            box-shadow: 0 0 0 0.25rem rgba(63, 175, 244, 0.5);
        }

        .btn-check:checked+.btn-twitter,
        .btn-check:active+.btn-twitter,
        .btn-twitter:active,
        .btn-twitter.active,
        .show>.btn-twitter.dropdown-toggle {
            color: #fff;
            background-color: #1781c2;
            border-color: #1679b6;
        }

        .btn-check:checked+.btn-twitter:focus,
        .btn-check:active+.btn-twitter:focus,
        .btn-twitter:active:focus,
        .btn-twitter.active:focus,
        .show>.btn-twitter.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(63, 175, 244, 0.5);
        }

        .btn-twitter:disabled,
        .btn-twitter.disabled {
            color: #fff;
            background-color: #1da1f2;
            border-color: #1da1f2;
        }

        .menu-list {
            font-size: 1.8rem;
        }

        .menu-list2 {
            font-size: 1.2rem;
        }

        .btn-transparent-dark {
            /*color: rgba(33, 40, 50, 0.5);
  background-color: transparent;*/
            border-color: transparent;
            /*color: rgba(33, 40, 50, 0.5) !important;*/
            color: #ffff !important;
        }

        .btn-transparent-dark:hover,
        .btn-transparent-table:hover {
            color: #ffff;
            background-color: blue;
            /*color: rgba(33, 40, 50, 0.5);
  background-color: rgba(33, 40, 50, 0.1);*/
            border-color: transparent;
        }

        .btn-check:focus+.btn-transparent-dark,
        .btn-transparent-dark:focus {
            /*color: rgba(33, 40, 50, 0.5);
  background-color: rgba(33, 40, 50, 0.1);*/
            color: #ffff;
            background-color: var(--bs-orange);
            border-color: transparent;
            box-shadow: 0 0 0 0.25rem rgba(11, 14, 17, 0.5);
        }

        .btn-check:checked+.btn-transparent-dark,
        .btn-check:active+.btn-transparent-dark,
        .btn-transparent-dark:active,
        .btn-transparent-dark.active,
        .show>.btn-transparent-dark.dropdown-toggle {
            color: rgba(33, 40, 50, 0.5);
            background-color: rgba(33, 40, 50, 0.2);
            border-color: transparent;
        }

        .btn-check:checked+.btn-transparent-dark:focus,
        .btn-check:active+.btn-transparent-dark:focus,
        .btn-transparent-dark:active:focus,
        .btn-transparent-dark.active:focus,
        .show>.btn-transparent-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(11, 14, 17, 0.5);
        }

        .btn-transparent-dark:disabled,
        .btn-transparent-dark.disabled {
            color: rgba(33, 40, 50, 0.35);
            background-color: rgba(33, 40, 50, 0.1);
            border-color: transparent;
        }

        .btn-transparent-dark:focus {
            box-shadow: 0 0 0 0.25rem rgba(33, 40, 50, 0.25) !important;
        }

        .btn-transparent-light {
            color: rgba(255, 255, 255, 0.5);
            background-color: transparent;
            border-color: transparent;
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .btn-transparent-light:hover {
            color: rgba(255, 255, 255, 0.5);
            background-color: rgba(255, 255, 255, 0.1);
            border-color: transparent;
        }

        .btn-check:focus+.btn-transparent-light,
        .btn-transparent-light:focus {
            color: rgba(255, 255, 255, 0.5);
            background-color: rgba(255, 255, 255, 0.1);
            border-color: transparent;
            box-shadow: 0 0 0 0.25rem rgba(88, 88, 88, 0.5);
        }

        .btn-check:checked+.btn-transparent-light,
        .btn-check:active+.btn-transparent-light,
        .btn-transparent-light:active,
        .btn-transparent-light.active,
        .show>.btn-transparent-light.dropdown-toggle {
            color: rgba(255, 255, 255, 0.5);
            background-color: rgba(255, 255, 255, 0.2);
            border-color: transparent;
        }

        .btn-check:checked+.btn-transparent-light:focus,
        .btn-check:active+.btn-transparent-light:focus,
        .btn-transparent-light:active:focus,
        .btn-transparent-light.active:focus,
        .show>.btn-transparent-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(88, 88, 88, 0.5);
        }

        .btn-transparent-light:disabled,
        .btn-transparent-light.disabled {
            color: rgba(255, 255, 255, 0.35);
            background-color: rgba(255, 255, 255, 0.1);
            border-color: transparent;
        }

        .btn-transparent-light:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25) !important;
        }

        .btn-white-10 {
            color: rgba(255, 255, 255, 0.5);
            background-color: rgba(255, 255, 255, 0.1);
            border-color: transparent;
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .btn-white-10:hover {
            color: rgba(255, 255, 255, 0.5);
            background-color: rgba(255, 255, 255, 0.15);
            border-color: transparent;
        }

        .btn-check:focus+.btn-white-10,
        .btn-white-10:focus {
            color: rgba(255, 255, 255, 0.5);
            background-color: rgba(255, 255, 255, 0.15);
            border-color: transparent;
            box-shadow: 0 0 0 0.25rem rgba(88, 88, 88, 0.5);
        }

        .btn-check:checked+.btn-white-10,
        .btn-check:active+.btn-white-10,
        .btn-white-10:active,
        .btn-white-10.active,
        .show>.btn-white-10.dropdown-toggle {
            color: rgba(255, 255, 255, 0.5);
            background-color: rgba(255, 255, 255, 0.2);
            border-color: transparent;
        }

        .btn-check:checked+.btn-white-10:focus,
        .btn-check:active+.btn-white-10:focus,
        .btn-white-10:active:focus,
        .btn-white-10.active:focus,
        .show>.btn-white-10.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(88, 88, 88, 0.5);
        }

        .btn-white-10:disabled,
        .btn-white-10.disabled {
            color: rgba(255, 255, 255, 0.35);
            background-color: rgba(255, 255, 255, 0.1);
            border-color: transparent;
        }

        .btn-white-10:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25) !important;
        }

        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(33, 40, 50, 0.15);
        }

        .card .card-header {
            font-weight: 500;
        }

        .card:not([class*=bg-]) .card-header {
            color: #0061f2;
        }

        .card.bg-dark .card-header,
        .card.bg-dark .card-footer {
            border-color: rgba(255, 255, 255, 0.15);
        }

        .card .card-header .card-header-tabs .nav-link.active {
            background-color: #fff;
            border-bottom-color: #fff;
        }

        /*.card-detalle{
  padding: 10px;
  box-shadow: .2px 1px 1px #d8d8d8, -.2px -4px 1px #0422D8;
  border-radius: 5px;
  justify-content: center;
  background: #ffff;
}*/



        .card-header-actions {
            /*box-shadow: .8px 1px 1px #d8d8d8, -.3px -4px 1px #0061f2;
  background-color: #ffff !important;
  /*background-color: #f6f7f9;*/
            /*box-shadow: 7px 7px 15px #45566754,
      -8px -8px 15px rgb(81 101 121 / 4%),
      inset -5px -4px 13px 0px rgb(81 101 121 / 35%),
      inset 6px 7px 12px 0px rgb(255 255 255 / 94%),
      inset .8px 1px 1px #d8d8d8, -.3px -4px 1px #0061f2;*/
            box-shadow: 4px 4px 8px rgb(189 200 213), 0 -4px 1px #0061f2;
            border-radius: 5px;
        }

        .card-header-actions .card-header {
            height: 3.5625rem;
            display: flex;
            align-items: center;
            justify-content: space-between !important;
            padding-top: 0.5625rem;
            padding-bottom: 0.5625rem;

        }

        .card-header-actions .card-header .dropdown-menu {
            margin-top: 0;
            top: 0.5625rem !important;
        }

        .card-collapsable .card-header[data-bs-toggle=collapse],
        .card-collapsable .card-header[data-toggle=collapse] {
            display: flex;
            text-decoration: none;
            position: relative;
            align-items: center;
            justify-content: space-between;
        }

        .card-collapsable .card-header[data-bs-toggle=collapse] .card-collapsable-arrow,
        .card-collapsable .card-header[data-toggle=collapse] .card-collapsable-arrow {
            height: 0.9rem;
            width: 0.9rem;
            display: inline-flex;
            font-size: 0.9rem;
            transition: transform 0.1s ease-in-out;
        }

        .card-collapsable .card-header[data-bs-toggle=collapse] .card-collapsable-arrow svg,
        .card-collapsable .card-header[data-bs-toggle=collapse] .card-collapsable-arrow i,
        .card-collapsable .card-header[data-bs-toggle=collapse] .card-collapsable-arrow .feather,
        .card-collapsable .card-header[data-toggle=collapse] .card-collapsable-arrow svg,
        .card-collapsable .card-header[data-toggle=collapse] .card-collapsable-arrow i,
        .card-collapsable .card-header[data-toggle=collapse] .card-collapsable-arrow .feather {
            height: 0.9rem;
            width: 0.9rem;
        }

        .card-collapsable .card-header[data-bs-toggle=collapse].collapsed,
        .card-collapsable .card-header[data-toggle=collapse].collapsed {
            border-radius: 0.35rem;
        }

        .card-collapsable .card-header[data-bs-toggle=collapse].collapsed .card-collapsable-arrow,
        .card-collapsable .card-header[data-toggle=collapse].collapsed .card-collapsable-arrow {
            transform: rotate(-90deg);
        }

        .card-icon {
            overflow: hidden;
        }

        .card-icon .card-icon-aside {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            padding: 2rem;
        }

        .card-icon .card-icon-aside i,
        .card-icon .card-icon-aside svg,
        .card-icon .card-icon-aside .feather {
            height: 3rem;
            width: 3rem;
        }

        .card-link {
            text-decoration: none !important;
            color: inherit !important;
        }

        .card-link:hover {
            color: inherit !important;
        }

        .card-progress .progress {
            height: 0.5rem;
            background-color: rgba(33, 40, 50, 0.03);
        }

        .card-scrollable .card-body {
            max-height: 15rem;
            overflow-y: auto;
        }

        .card-waves .card-body,
        .card-angles .card-body {
            background-size: 100% auto;
            background-repeat: no-repeat;
            background-position: center bottom;
        }

        .card-waves .card-body {
            background-image: url("/assets/img/backgrounds/bg-waves.svg");
        }

        .card-angles .card-body {
            background-image: url("/assets/img/backgrounds/bg-angles.svg");
        }

        .card-flag {
            position: absolute;
            font-size: 0.7rem;
            padding: 0.3rem 0.5rem;
            line-height: 1;
        }

        .card-flag-dark {
            background-color: rgba(33, 40, 50, 0.7);
            color: #fff;
        }

        .card-flag-light {
            background-color: rgba(255, 255, 255, 0.7);
            color: #69707a;
        }

        .card-flag-lg {
            font-size: 0.9rem;
            padding: 0.5rem 0.65rem;
        }

        .card-flag-top-right {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            top: 0.5rem;
            right: 0;
        }

        .card-flag-top-left {
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            top: 0.5rem;
            left: 0;
        }

        .card-flag-bottom-right {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            bottom: 0.5rem;
            right: 0;
        }

        .card-flag-bottom-left {
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            bottom: 0.5rem;
            left: 0;
        }

        .dropdown-menu {
            font-size: 0.9rem;
            border: none;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(33, 40, 50, 0.15);
        }

        .dropdown-menu .dropdown-header {
            font-size: 0.75rem;
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        .dropdown-menu .dropdown-item {
            display: flex;
            align-items: center;
        }

        .dropdown-menu .dropdown-item .dropdown-item-icon {
            margin-right: 0.5rem;
            line-height: 1;
        }

        .dropdown-menu .dropdown-item .dropdown-item-icon svg {
            height: 0.9em;
            width: 0.9em;
        }

        .dropdown-menu .dropdown-item.active .dropdown-item-icon,
        .dropdown-menu .dropdown-item:active .dropdown-item-icon {
            color: #fff;
        }

        .dropdown .dropdown-toggle {
            display: inline-flex;
            align-items: center;
        }

        .dropdown .dropdown-toggle .dropdown-arrow {
            margin-left: 0.4rem;
            margin-right: 0;
            transition: transform 0.1s ease-in-out;
            font-size: 0.6em;
        }

        .dropdown .dropdown-toggle.show .dropdown-arrow {
            transform: rotate(90deg);
        }

        .feather {
            height: 1rem;
            width: 1rem;
            vertical-align: top;
        }

        .feather-sm {
            height: 0.8rem;
            width: 0.8rem;
        }

        .icon-stack {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border-radius: 100%;
            height: 2.5rem;
            width: 2.5rem;
            font-size: 1rem;
            background-color: #f2f6fc;
            flex-shrink: 0;
        }

        .icon-stack svg {
            height: 1rem;
            width: 1rem;
        }

        .icon-stack-sm {
            height: 2rem;
            width: 2rem;
        }

        .icon-stack-lg {
            height: 4rem;
            width: 4rem;
            font-size: 1.5rem;
        }

        .icon-stack-lg svg {
            height: 1.5rem;
            width: 1.5rem;
        }

        .icon-stack-xl {
            height: 5rem;
            width: 5rem;
            font-size: 1.75rem;
        }

        .icon-stack-xl svg {
            height: 1.75rem;
            width: 1.75rem;
        }

        .icon-list-social {
            display: flex;
        }

        .icon-list-social .icon-list-social-link {
            font-size: 1.25rem;
            margin-right: 0.5rem;
        }

        .badge-sm {
            font-size: 0.75rem;
        }

        .badge-md {
            font-size: 1rem;
        }

        .badge-lg {
            font-size: 1.25rem;
        }

        .timeline .timeline-item {
            display: flex;
            align-items: flex-start;
        }

        .timeline .timeline-item .timeline-item-marker {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .timeline .timeline-item .timeline-item-marker .timeline-item-marker-text {
            font-size: 0.875rem;
            width: 6rem;
            color: #a7aeb8;
            text-align: center;
            margin-bottom: 0.5rem;
            display: block;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .timeline .timeline-item .timeline-item-marker .timeline-item-marker-indicator {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 3rem;
            width: 3rem;
            background-color: #f2f6fc;
            border-radius: 100%;
        }

        .timeline .timeline-item .timeline-item-content {
            padding-top: 0;
            padding-bottom: 2rem;
            padding-left: 1rem;
            width: 100%;
        }

        .timeline .timeline-item:last-child .timeline-item-content {
            padding-bottom: 0 !important;
        }

        @media (min-width: 576px) {
            .timeline .timeline-item .timeline-item-marker {
                flex-direction: row;
                transform: translateX(1.625rem);
                margin-bottom: 0;
            }

            .timeline .timeline-item .timeline-item-marker .timeline-item-marker-text {
                margin-right: 0.5rem;
                margin-bottom: 0;
            }

            .timeline .timeline-item .timeline-item-content {
                padding-top: 0.75rem;
                padding-bottom: 3rem;
                padding-left: 3rem;
                border-left: solid 0.25rem #f2f6fc;
            }

            .timeline .timeline-item:last-child .timeline-item-content {
                border-left-color: transparent;
            }
        }

        .timeline.timeline-sm .timeline-item .timeline-item-marker {
            transform: translateX(0.875rem);
        }

        .timeline.timeline-sm .timeline-item .timeline-item-marker .timeline-item-marker-text {
            width: 3rem;
            font-size: 0.7rem;
        }

        .timeline.timeline-sm .timeline-item .timeline-item-marker .timeline-item-marker-indicator {
            height: 1.5rem;
            width: 1.5rem;
            font-size: 0.875rem;
        }

        .timeline.timeline-sm .timeline-item .timeline-item-marker .timeline-item-marker-indicator .feather {
            height: 0.75rem;
            width: 0.75rem;
        }

        .timeline.timeline-sm .timeline-item .timeline-item-content {
            font-size: 0.875rem;
            padding-top: 0.15rem;
            padding-bottom: 1rem;
            padding-left: 1.5rem;
        }

        .timeline.timeline-xs .timeline-item .timeline-item-marker {
            transform: translateX(0.5625rem);
        }

        .timeline.timeline-xs .timeline-item .timeline-item-marker .timeline-item-marker-text {
            width: 3rem;
            font-size: 0.7rem;
        }

        .timeline.timeline-xs .timeline-item .timeline-item-marker .timeline-item-marker-indicator {
            height: 0.875rem;
            width: 0.875rem;
            font-size: 0.875rem;
            border: 0.125rem solid #fff;
            margin-top: -0.125rem;
        }

        .timeline.timeline-xs .timeline-item .timeline-item-content {
            font-size: 0.875rem;
            padding-top: 0;
            padding-bottom: 1rem;
            padding-left: 1.5rem;
        }

        .step {
            display: flex;
            flex-wrap: nowrap;
            width: 100%;
        }

        .step .step-item {
            flex: 1 1 0;
            position: relative;
            text-align: center;
        }

        .step .step-item:not(:first-child)::before {
            background-color: #69707a;
            content: "";
            height: 0.125rem;
            left: -50%;
            position: absolute;
            top: 0.4375rem;
            width: 100%;
            z-index: 0;
        }

        .step .step-item .step-item-link {
            color: #69707a;
            position: relative;
            display: inline-block;
            padding-top: 1.25rem;
            padding-left: 1rem;
            padding-right: 1rem;
            text-decoration: none;
            z-index: 1;
        }

        .step .step-item .step-item-link::before {
            background-color: #69707a;
            border: 0.125rem solid #fff;
            border-radius: 100%;
            content: "";
            display: block;
            height: 1rem;
            width: 1rem;
            left: 50%;
            position: absolute;
            top: 0;
            transform: translateX(-50%);
            z-index: 1;
        }

        .step .step-item .step-item-link.disabled {
            pointer-events: none;
            cursor: default;
        }

        .step .step-item.active a::before {
            background: #fff;
            border: 0.125rem solid #69707a;
        }

        .step .step-item.active~.step-item .step-item-link {
            color: #d4dae3;
        }

        .step .step-item.active~.step-item .step-item-link::before {
            background: #d4dae3;
        }

        .step .step-item.active~.step-item::before {
            background: #d4dae3;
        }

        .step-lg .step-item:not(:first-child)::before {
            height: 0.25rem;
            top: 0.625rem;
        }

        .step-lg .step-item .step-item-link {
            padding-top: 2rem;
        }

        .step-lg .step-item .step-item-link::before {
            border-width: 0.25rem;
            height: 1.5rem;
            width: 1.5rem;
        }

        .step-lg .step-item.active a::before {
            border-width: 0.25rem;
        }

        .step-primary .step-item:not(:first-child)::before {
            background-color: #0061f2;
        }

        .step-primary .step-item .step-item-link {
            color: #0061f2;
        }

        .step-primary .step-item .step-item-link::before {
            background-color: #0061f2;
        }

        .step-primary .step-item.active a::before {
            border-color: #0061f2;
        }

        .step-secondary .step-item:not(:first-child)::before {
            background-color: #6900c7;
        }

        .step-secondary .step-item .step-item-link {
            color: #6900c7;
        }

        .step-secondary .step-item .step-item-link::before {
            background-color: #6900c7;
        }

        .step-secondary .step-item.active a::before {
            border-color: #6900c7;
        }

        .step-success .step-item:not(:first-child)::before {
            background-color: #00ac69;
        }

        .step-success .step-item .step-item-link {
            color: #00ac69;
        }

        .step-success .step-item .step-item-link::before {
            background-color: #00ac69;
        }

        .step-success .step-item.active a::before {
            border-color: #00ac69;
        }

        .step-info .step-item:not(:first-child)::before {
            background-color: #00cfd5;
        }

        .step-info .step-item .step-item-link {
            color: #00cfd5;
        }

        .step-info .step-item .step-item-link::before {
            background-color: #00cfd5;
        }

        .step-info .step-item.active a::before {
            border-color: #00cfd5;
        }

        .step-warning .step-item:not(:first-child)::before {
            background-color: #f4a100;
        }

        .step-warning .step-item .step-item-link {
            color: #f4a100;
        }

        .step-warning .step-item .step-item-link::before {
            background-color: #f4a100;
        }

        .step-warning .step-item.active a::before {
            border-color: #f4a100;
        }

        .step-danger .step-item:not(:first-child)::before {
            background-color: #e81500;
        }

        .step-danger .step-item .step-item-link {
            color: #e81500;
        }

        .step-danger .step-item .step-item-link::before {
            background-color: #e81500;
        }

        .step-danger .step-item.active a::before {
            border-color: #e81500;
        }

        .step-light .step-item:not(:first-child)::before {
            background-color: #f2f6fc;
        }

        .step-light .step-item .step-item-link {
            color: #f2f6fc;
        }

        .step-light .step-item .step-item-link::before {
            background-color: #f2f6fc;
        }

        .step-light .step-item.active a::before {
            border-color: #f2f6fc;
        }

        .step-dark .step-item:not(:first-child)::before {
            background-color: #212832;
        }

        .step-dark .step-item .step-item-link {
            color: #212832;
        }

        .step-dark .step-item .step-item-link::before {
            background-color: #212832;
        }

        .step-dark .step-item.active a::before {
            border-color: #212832;
        }

        .step-black .step-item:not(:first-child)::before {
            background-color: #000;
        }

        .step-black .step-item .step-item-link {
            color: #000;
        }

        .step-black .step-item .step-item-link::before {
            background-color: #000;
        }

        .step-black .step-item.active a::before {
            border-color: #000;
        }

        .step-white .step-item:not(:first-child)::before {
            background-color: #fff;
        }

        .step-white .step-item .step-item-link {
            color: #fff;
        }

        .step-white .step-item .step-item-link::before {
            background-color: #fff;
        }

        .step-white .step-item.active a::before {
            border-color: #fff;
        }

        .step-red .step-item:not(:first-child)::before {
            background-color: #e81500;
        }

        .step-red .step-item .step-item-link {
            color: #e81500;
        }

        .step-red .step-item .step-item-link::before {
            background-color: #e81500;
        }

        .step-red .step-item.active a::before {
            border-color: #e81500;
        }

        .step-orange .step-item:not(:first-child)::before {
            background-color: #f76400;
        }

        .step-orange .step-item .step-item-link {
            color: #f76400;
        }

        .step-orange .step-item .step-item-link::before {
            background-color: #f76400;
        }

        .step-orange .step-item.active a::before {
            border-color: #f76400;
        }

        .step-yellow .step-item:not(:first-child)::before {
            background-color: #f4a100;
        }

        .step-yellow .step-item .step-item-link {
            color: #f4a100;
        }

        .step-yellow .step-item .step-item-link::before {
            background-color: #f4a100;
        }

        .step-yellow .step-item.active a::before {
            border-color: #f4a100;
        }

        .step-green .step-item:not(:first-child)::before {
            background-color: #00ac69;
        }

        .step-green .step-item .step-item-link {
            color: #00ac69;
        }

        .step-green .step-item .step-item-link::before {
            background-color: #00ac69;
        }

        .step-green .step-item.active a::before {
            border-color: #00ac69;
        }

        .step-teal .step-item:not(:first-child)::before {
            background-color: #00ba94;
        }

        .step-teal .step-item .step-item-link {
            color: #00ba94;
        }

        .step-teal .step-item .step-item-link::before {
            background-color: #00ba94;
        }

        .step-teal .step-item.active a::before {
            border-color: #00ba94;
        }

        .step-cyan .step-item:not(:first-child)::before {
            background-color: #00cfd5;
        }

        .step-cyan .step-item .step-item-link {
            color: #00cfd5;
        }

        .step-cyan .step-item .step-item-link::before {
            background-color: #00cfd5;
        }

        .step-cyan .step-item.active a::before {
            border-color: #00cfd5;
        }

        .step-blue .step-item:not(:first-child)::before {
            background-color: #0061f2;
        }

        .step-blue .step-item .step-item-link {
            color: #0061f2;
        }

        .step-blue .step-item .step-item-link::before {
            background-color: #0061f2;
        }

        .step-blue .step-item.active a::before {
            border-color: #0061f2;
        }

        .step-indigo .step-item:not(:first-child)::before {
            background-color: #5800e8;
        }

        .step-indigo .step-item .step-item-link {
            color: #5800e8;
        }

        .step-indigo .step-item .step-item-link::before {
            background-color: #5800e8;
        }

        .step-indigo .step-item.active a::before {
            border-color: #5800e8;
        }

        .step-purple .step-item:not(:first-child)::before {
            background-color: #6900c7;
        }

        .step-purple .step-item .step-item-link {
            color: #6900c7;
        }

        .step-purple .step-item .step-item-link::before {
            background-color: #6900c7;
        }

        .step-purple .step-item.active a::before {
            border-color: #6900c7;
        }

        .step-pink .step-item:not(:first-child)::before {
            background-color: #e30059;
        }

        .step-pink .step-item .step-item-link {
            color: #e30059;
        }

        .step-pink .step-item .step-item-link::before {
            background-color: #e30059;
        }

        .step-pink .step-item.active a::before {
            border-color: #e30059;
        }

        .step-red-soft .step-item:not(:first-child)::before {
            background-color: #f1e0e3;
        }

        .step-red-soft .step-item .step-item-link {
            color: #f1e0e3;
        }

        .step-red-soft .step-item .step-item-link::before {
            background-color: #f1e0e3;
        }

        .step-red-soft .step-item.active a::before {
            border-color: #f1e0e3;
        }

        .step-orange-soft .step-item:not(:first-child)::before {
            background-color: #f3e7e3;
        }

        .step-orange-soft .step-item .step-item-link {
            color: #f3e7e3;
        }

        .step-orange-soft .step-item .step-item-link::before {
            background-color: #f3e7e3;
        }

        .step-orange-soft .step-item.active a::before {
            border-color: #f3e7e3;
        }

        .step-yellow-soft .step-item:not(:first-child)::before {
            background-color: #f2eee3;
        }

        .step-yellow-soft .step-item .step-item-link {
            color: #f2eee3;
        }

        .step-yellow-soft .step-item .step-item-link::before {
            background-color: #f2eee3;
        }

        .step-yellow-soft .step-item.active a::before {
            border-color: #f2eee3;
        }

        .step-green-soft .step-item:not(:first-child)::before {
            background-color: #daefed;
        }

        .step-green-soft .step-item .step-item-link {
            color: #daefed;
        }

        .step-green-soft .step-item .step-item-link::before {
            background-color: #daefed;
        }

        .step-green-soft .step-item.active a::before {
            border-color: #daefed;
        }

        .step-teal-soft .step-item:not(:first-child)::before {
            background-color: #daf0f2;
        }

        .step-teal-soft .step-item .step-item-link {
            color: #daf0f2;
        }

        .step-teal-soft .step-item .step-item-link::before {
            background-color: #daf0f2;
        }

        .step-teal-soft .step-item.active a::before {
            border-color: #daf0f2;
        }

        .step-cyan-soft .step-item:not(:first-child)::before {
            background-color: #daf2f8;
        }

        .step-cyan-soft .step-item .step-item-link {
            color: #daf2f8;
        }

        .step-cyan-soft .step-item .step-item-link::before {
            background-color: #daf2f8;
        }

        .step-cyan-soft .step-item.active a::before {
            border-color: #daf2f8;
        }

        .step-blue-soft .step-item:not(:first-child)::before {
            background-color: #dae7fb;
        }

        .step-blue-soft .step-item .step-item-link {
            color: #dae7fb;
        }

        .step-blue-soft .step-item .step-item-link::before {
            background-color: #dae7fb;
        }

        .step-blue-soft .step-item.active a::before {
            border-color: #dae7fb;
        }

        .step-indigo-soft .step-item:not(:first-child)::before {
            background-color: #e3ddfa;
        }

        .step-indigo-soft .step-item .step-item-link {
            color: #e3ddfa;
        }

        .step-indigo-soft .step-item .step-item-link::before {
            background-color: #e3ddfa;
        }

        .step-indigo-soft .step-item.active a::before {
            border-color: #e3ddfa;
        }

        .step-purple-soft .step-item:not(:first-child)::before {
            background-color: #e4ddf7;
        }

        .step-purple-soft .step-item .step-item-link {
            color: #e4ddf7;
        }

        .step-purple-soft .step-item .step-item-link::before {
            background-color: #e4ddf7;
        }

        .step-purple-soft .step-item.active a::before {
            border-color: #e4ddf7;
        }

        .step-pink-soft .step-item:not(:first-child)::before {
            background-color: #f1ddec;
        }

        .step-pink-soft .step-item .step-item-link {
            color: #f1ddec;
        }

        .step-pink-soft .step-item .step-item-link::before {
            background-color: #f1ddec;
        }

        .step-pink-soft .step-item.active a::before {
            border-color: #f1ddec;
        }

        .step-primary-soft .step-item:not(:first-child)::before {
            background-color: #dae7fb;
        }

        .step-primary-soft .step-item .step-item-link {
            color: #dae7fb;
        }

        .step-primary-soft .step-item .step-item-link::before {
            background-color: #dae7fb;
        }

        .step-primary-soft .step-item.active a::before {
            border-color: #dae7fb;
        }

        .step-secondary-soft .step-item:not(:first-child)::before {
            background-color: #e4ddf7;
        }

        .step-secondary-soft .step-item .step-item-link {
            color: #e4ddf7;
        }

        .step-secondary-soft .step-item .step-item-link::before {
            background-color: #e4ddf7;
        }

        .step-secondary-soft .step-item.active a::before {
            border-color: #e4ddf7;
        }

        .step-success-soft .step-item:not(:first-child)::before {
            background-color: #daefed;
        }

        .step-success-soft .step-item .step-item-link {
            color: #daefed;
        }

        .step-success-soft .step-item .step-item-link::before {
            background-color: #daefed;
        }

        .step-success-soft .step-item.active a::before {
            border-color: #daefed;
        }

        .step-info-soft .step-item:not(:first-child)::before {
            background-color: #daf2f8;
        }

        .step-info-soft .step-item .step-item-link {
            color: #daf2f8;
        }

        .step-info-soft .step-item .step-item-link::before {
            background-color: #daf2f8;
        }

        .step-info-soft .step-item.active a::before {
            border-color: #daf2f8;
        }

        .step-warning-soft .step-item:not(:first-child)::before {
            background-color: #f2eee3;
        }

        .step-warning-soft .step-item .step-item-link {
            color: #f2eee3;
        }

        .step-warning-soft .step-item .step-item-link::before {
            background-color: #f2eee3;
        }

        .step-warning-soft .step-item.active a::before {
            border-color: #f2eee3;
        }

        .step-danger-soft .step-item:not(:first-child)::before {
            background-color: #f1e0e3;
        }

        .step-danger-soft .step-item .step-item-link {
            color: #f1e0e3;
        }

        .step-danger-soft .step-item .step-item-link::before {
            background-color: #f1e0e3;
        }

        .step-danger-soft .step-item.active a::before {
            border-color: #f1e0e3;
        }

        .form-check.form-check-solid .form-check-input {
            background-color: #eef2f8;
            border-color: #eef2f8;
        }

        .form-check.form-check-solid .form-check-input:checked {
            background-color: #0061f2;
        }

        .form-control-solid {
            background-color: #eef2f8;
            border-color: #eef2f8;
        }

        .form-control-solid:focus {
            background-color: #eef2f8;
        }

        .input-group-joined {
            border-color: #c5ccd6;
            border-width: 1px;
            border-style: solid;
            border-radius: 0.4375rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .input-group-joined:focus-within {
            border-color: transparent;
            box-shadow: 0 0 0 0.25rem rgba(0, 97, 242, 0.25);
        }

        .input-group-joined .form-control,
        .input-group-joined .dataTable-input {
            border: none;
        }

        .input-group-joined .form-control:focus,
        .input-group-joined .dataTable-input:focus {
            box-shadow: none;
            outline: none;
        }

        .input-group-joined .input-group-text,
        .input-group-joined .input-group-text {
            border: none;
            background-color: #fff;
        }

        .input-group-joined-xl .form-control,
        .input-group-joined-xl .dataTable-input {
            height: 4rem;
            font-size: 1.25rem;
        }

        .input-group-joined.input-group-solid {
            border: 0;
            background-color: #eef2f8;
        }

        .input-group-joined.input-group-solid .form-control,
        .input-group-joined.input-group-solid .dataTable-input,
        .input-group-joined.input-group-solid .input-group-text {
            background-color: transparent;
        }

        #layoutSidenav {
            display: flex;
        }


        #layoutSidenav #layoutSidenav_nav {
            flex-basis: 15rem;
            flex-shrink: 0;
            transition: transform 0.15s ease-in-out;
            z-index: 1038;
            transform: translateX(-15rem);
        }

        #layoutSidenav #layoutSidenav_content {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-width: 0;
            flex-grow: 1;
            min-height: calc(100vh - 3.625rem);
            margin-left: -15rem;
        }

        .sidenav-toggled #layoutSidenav #layoutSidenav_nav {
            transform: translateX(0);
        }

        .sidenav-toggled #layoutSidenav #layoutSidenav_content:before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            z-index: 1037;
            opacity: 0.5;
            transition: opacity 0.3s ease-in-out;
        }

        @media (min-width: 992px) {
            #layoutSidenav #layoutSidenav_nav {
                transform: translateX(0);
            }

            #layoutSidenav #layoutSidenav_content {
                margin-left: -3.4rem;
                transition: margin 0.15s ease-in-out;
            }

            .sidenav-toggled #layoutSidenav #layoutSidenav_nav {
                transform: translateX(-15rem);
            }

            .sidenav-toggled #layoutSidenav #layoutSidenav_content {
                margin-left: -15rem;
            }

            .sidenav-toggled #layoutSidenav #layoutSidenav_content:before {
                display: none;
            }
        }

        .nav-fixed .topnav {
            z-index: 1039;
        }

        .nav-fixed #layoutSidenav #layoutSidenav_nav {
            width: 11.5rem;
            height: 100vh;
            z-index: 1038;
        }

        .nav-fixed #layoutSidenav #layoutSidenav_nav .sidenav {
            padding-top: 4rem;
            ACA8A4
        }

        .nav-fixed #layoutSidenav #layoutSidenav_nav .sidenav .sidenav-menu {
            overflow-y: overlay;
        }

        .nav-fixed #layoutSidenav #layoutSidenav_nav .sidenav .sidenav-menu::-webkit-scrollbar {
            width: 0.75rem;
        }

        .nav-fixed #layoutSidenav #layoutSidenav_nav .sidenav .sidenav-menu::-webkit-scrollbar-thumb {
            border-radius: 5rem;
            border-width: 0.2rem;
            border-style: solid;
            background-clip: padding-box;
            /*background-color: rgba(33, 40, 50, 0.2);*/
            background-color: #ACA8A4;
            border-color: transparent;
        }

        .nav-fixed #layoutSidenav #layoutSidenav_nav .sidenav .sidenav-menu::-webkit-scrollbar-button {
            width: 0;
            height: 0;
            display: none;
        }

        .nav-fixed #layoutSidenav #layoutSidenav_nav .sidenav .sidenav-menu::-webkit-scrollbar-corner {
            background-color: transparent;
        }

        .nav-fixed #layoutSidenav #layoutSidenav_nav .sidenav .sidenav-menu::-webkit-scrollbar-track {
            background: inherit;
        }

        @media (pointer: fine) and (hover: hover) {
            .nav-fixed #layoutSidenav #layoutSidenav_nav .sidenav .sidenav-menu {
                overflow-y: hidden;
            }

            .nav-fixed #layoutSidenav #layoutSidenav_nav .sidenav .sidenav-menu:hover {
                overflow-y: overlay;
            }
        }

        @media (pointer: coarse) and (hover: none) {
            .nav-fixed #layoutSidenav #layoutSidenav_nav .sidenav .sidenav-menu {
                overflow-y: overlay;
            }
        }

        @-moz-document url-prefix() {
            .nav-fixed #layoutSidenav #layoutSidenav_nav .sidenav .sidenav-menu {
                overflow-y: auto;
            }
        }

        .nav-fixed #layoutSidenav #layoutSidenav_nav .sidenav.sidenav-dark .sidenav-menu::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.25);
            border-color: rgba(0, 0, 0, 0);
        }

        .nav-fixed #layoutSidenav #layoutSidenav_content {
            padding-left: 15rem;
            top: 3.625rem;
        }

        .layout-rtl #layoutSidenav #layoutSidenav_nav {
            transform: translateX(15rem);
        }

        .layout-rtl #layoutSidenav #layoutSidenav_content {
            margin-left: 0;
            margin-right: -15rem;
        }

        .layout-rtl.sidenav-toggled #layoutSidenav #layoutSidenav_nav {
            transform: translateX(0);
        }

        @media (min-width: 992px) {
            .layout-rtl #layoutSidenav #layoutSidenav_nav {
                transform: translateX(0);
            }

            .layout-rtl #layoutSidenav #layoutSidenav_content {
                margin-right: 0;
                transition: margin 0.15s ease-in-out;
            }

            .layout-rtl.sidenav-toggled #layoutSidenav #layoutSidenav_nav {
                transform: translateX(15rem);
            }

            .layout-rtl.sidenav-toggled #layoutSidenav #layoutSidenav_content {
                margin-right: -15rem;
            }
        }

        .layout-rtl.nav-fixed #layoutSidenav #layoutSidenav_nav {
            left: auto;
        }

        .layout-rtl.nav-fixed #layoutSidenav #layoutSidenav_content {
            padding-left: 0;
            padding-right: 15rem;
        }

        .dropdown-notifications {
            position: static;
        }

        .dropdown-notifications .dropdown-menu {
            padding-top: 0;
            padding-bottom: 0;
            width: calc(100% - 1.5rem);
            right: 0.75rem;
            max-height: calc(21rem - 1px);
            overflow-x: hidden;
            overflow-y: overlay;
        }

        .dropdown-notifications .dropdown-menu::-webkit-scrollbar {
            width: 0.75rem;
        }

        .dropdown-notifications .dropdown-menu::-webkit-scrollbar-thumb {
            border-radius: 10rem;
            border-width: 0.2rem;
            border-style: solid;
            background-clip: padding-box;
            background-color: rgba(33, 40, 50, 0.2);
            border-color: transparent;
        }

        .dropdown-notifications .dropdown-menu::-webkit-scrollbar-button {
            width: 0;
            height: 0;
            display: none;
        }

        .dropdown-notifications .dropdown-menu::-webkit-scrollbar-corner {
            background-color: transparent;
        }

        .dropdown-notifications .dropdown-menu::-webkit-scrollbar-track {
            background: inherit;
        }

        @media (pointer: fine) and (hover: hover) {
            .dropdown-notifications .dropdown-menu {
                overflow-y: hidden;
            }

            .dropdown-notifications .dropdown-menu:hover {
                overflow-y: overlay;
            }
        }

        @media (pointer: coarse) and (hover: none) {
            .dropdown-notifications .dropdown-menu {
                overflow-y: overlay;
            }
        }

        @-moz-document url-prefix() {
            .dropdown-notifications .dropdown-menu {
                overflow-y: auto;
            }
        }

        .dropdown-notifications .dropdown-menu .dropdown-notifications-header {
            /*background-color: #0061f2;*/
            background-color: var(--bs-orange);
            color: #fff !important;
            padding-top: 1rem;
            padding-bottom: 1rem;
            line-height: 1;
        }

        .dropdown-notifications .dropdown-menu .dropdown-notifications-header svg {
            height: 0.7rem;
            width: 0.7rem;
            opacity: 0.7;
        }

        .dropdown-notifications .dropdown-menu .dropdown-notifications-item {
            padding-top: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e0e5ec;
        }

        .dropdown-notifications .dropdown-menu .dropdown-notifications-item .dropdown-notifications-item-icon,
        .dropdown-notifications .dropdown-menu .dropdown-notifications-item .dropdown-notifications-item-img {
            height: 2.5rem;
            width: 2.5rem;
            border-radius: 100%;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .dropdown-notifications .dropdown-menu .dropdown-notifications-item .dropdown-notifications-item-icon {
            background-color: #0061f2;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dropdown-notifications .dropdown-menu .dropdown-notifications-item .dropdown-notifications-item-icon svg {
            text-align: center;
            font-size: 0.85rem;
            color: #fff;
            height: 0.85rem;
        }

        .dropdown-notifications .dropdown-menu .dropdown-notifications-item .dropdown-notifications-item-content .dropdown-notifications-item-content-details {
            color: #a7aeb8;
            font-size: 0.7rem;
        }

        .dropdown-notifications .dropdown-menu .dropdown-notifications-item .dropdown-notifications-item-content .dropdown-notifications-item-content-text {
            font-size: 0.9rem;
            max-width: calc(100vw - 8.5rem);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .dropdown-notifications .dropdown-menu .dropdown-notifications-item .dropdown-notifications-item-content .dropdown-notifications-item-content-actions .btn-sm,
        .dropdown-notifications .dropdown-menu .dropdown-notifications-item .dropdown-notifications-item-content .dropdown-notifications-item-content-actions .btn-group-sm>.btn {
            font-size: 0.7rem;
            padding: 0.15rem 0.35rem;
            cursor: pointer;
        }

        .dropdown-notifications .dropdown-menu .dropdown-notifications-footer {
            justify-content: center;
            font-size: 0.8rem;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            color: #a7aeb8;
            cursor: pointer;
        }

        .dropdown-notifications .dropdown-menu .dropdown-notifications-footer .dropdown-notifications-footer-icon {
            height: 1em;
            width: 1em;
            margin-left: 0.25rem;
        }

        .dropdown-notifications .dropdown-menu .dropdown-notifications-footer:active {
            color: #fff;
        }

        @media (min-width: 576px) {
            .dropdown-notifications {
                position: relative;
            }

            .dropdown-notifications .dropdown-menu {
                width: auto;
                min-width: 18.75rem;
                right: 0;
            }

            .dropdown-notifications .dropdown-menu .dropdown-notifications-item .dropdown-notifications-item-content .dropdown-notifications-item-content-text {
                max-width: 13rem;
            }
        }

        .dropdown-user .dropdown-menu {
            min-width: 13rem;
        }

        .dropdown-user .dropdown-menu .dropdown-header {
            text-transform: none;
            letter-spacing: normal;
        }

        .dropdown-user .dropdown-menu .dropdown-header .dropdown-user-img {
            height: 2.5rem;
            width: 2.5rem;
            margin-right: 1rem;
            border-radius: 100%;
        }

        .dropdown-user .dropdown-menu .dropdown-header .dropdown-user-details {
            font-weight: 400;
        }

        .dropdown-user .dropdown-menu .dropdown-header .dropdown-user-details .dropdown-user-details-name {
            color: #ffff;
            font-weight: 500;
            font-size: 0.9rem;
            max-width: 10rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .dropdown-user .dropdown-menu .dropdown-header .dropdown-user-details .dropdown-user-details-email {
            color: #69707a;
            font-size: 0.75rem;
            max-width: 10rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .dropdown-user .dropdown-menu .dropdown-item {
            align-items: center;
        }

        .dropdown-user .dropdown-menu .dropdown-item .dropdown-item-icon {
            color: #a7aeb8;
        }

        .dropdown-user .dropdown-menu .dropdown-item .dropdown-item-icon svg {
            vertical-align: inherit;
        }

        .dropdown-user .dropdown-menu .dropdown-item:active .dropdown-item-icon {
            color: #fff;
        }

        .footer-admin {
            height: 3rem;
            display: flex;
            align-items: center;
            padding: 1rem 0 2rem 0;
        }

        .footer-admin.footer-dark {
            color: rgba(255, 255, 255, 0.6);
        }

        .footer-admin.footer-light {
            color: #a7aeb8;
        }

        .nav .nav-link .nav-link-icon,
        .sidenav-menu .nav-link .nav-link-icon {
            margin-right: 0.5rem;
        }

        .nav-borders .nav-link {
            color: #69707a;
            border-bottom-width: 0.125rem;
            border-bottom-style: solid;
            border-bottom-color: transparent;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0;
            padding-right: 0;
            margin-left: 1rem;
            margin-right: 1rem;
        }

        .nav-borders .nav-link.active {
            color: #0061f2;
            border-bottom-color: #0061f2;
        }

        .nav-borders .nav-link.disabled {
            color: #c5ccd6;
        }

        .nav-borders.flex-column .nav-link {
            padding-top: 0;
            padding-bottom: 0;
            padding-right: 1rem;
            padding-left: 1rem;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            margin-right: 0;
            margin-left: 0;
            border-bottom: none;
            border-right-width: 0.125rem;
            border-right-style: solid;
            border-right-color: transparent;
        }

        .nav-borders.flex-column .nav-link.active {
            border-right-color: #0061f2;
        }

        .navbar .dropdown-menu {
            top: calc(100% + 0.5rem + 0.5rem) !important;
            font-size: 0.9rem;
        }

        .navbar .dropdown-menu .dropdown-header {
            color: #a7aeb8;

        }

        .navbar .form-control,
        .navbar .dataTable-input {
            font-size: 0.9rem;
        }

        .topnav {
            padding-left: 0;
            height: 3.625rem;
            z-index: 1039;
            font-size: 0.9rem;
        }

        .topnav .navbar-brand {
            width: 15rem;
            margin: 0;
            font-size: 1rem;
            font-weight: bold;
        }

        .topnav .navbar-brand img {
            height: 0.8rem;
        }

        @media (min-width: 992px) {
            .topnav .navbar-brand {
                width: 12rem;
            }
        }

        .topnav.navbar-dark #sidebarToggle {
            color: rgba(255, 255, 255, 0.5);
        }

        .topnav.navbar-dark .navbar-brand {
            color: #fff;
        }

        .topnav.navbar-light #sidebarToggle {
            color: #212832;
        }

        .topnav.navbar-light .navbar-brand {
            color: #ffff;
        }

        .topnav .dropdown {
            position: static;
        }

        .topnav .dropdown .dropdown-menu {
            width: calc(100% - 1.5rem);
            right: 0.75rem;
            left: 0.75rem;
        }

        @media (min-width: 576px) {
            .topnav .dropdown {
                position: relative;
            }

            .topnav .dropdown .dropdown-menu {
                width: auto;
                min-width: 15rem;
                right: 0;
                left: auto;
            }
        }

        :target:before {
            content: "";
            display: block;
            height: 5.125rem;
            margin: -5.125rem 0 0;
        }

        .nav-sticky {
            top: 5.125rem;
            font-size: 0.9rem;
        }

        .nav-sticky .nav-link {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
        }

        .nav-sticky .nav-link.active {
            font-weight: 600;
        }

        .nav-sticky ul.nav>li.nav-item>.nav {
            display: none;
        }

        .nav-sticky ul.nav>li.nav-item>a.nav-link.active~.nav {
            display: flex;
        }

        .sidenav {
            display: flex;
            flex-direction: column;
            height: 100%;
            flex-wrap: nowrap;
            font-size: 0.7rem;
        }

        .sidenav .sidenav-menu {
            flex-grow: 1;
        }

        .sidenav .sidenav-menu .nav {
            flex-direction: column;
            flex-wrap: nowrap;
        }

        .sidenav .sidenav-menu .nav .sidenav-menu-heading {
            padding: 1.75rem 1rem 0.75rem;
            font-size: 0.7rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .sidenav .sidenav-menu .nav .nav-link {
            display: flex;
            align-items: center;
            line-height: normal;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            position: relative;
        }

        .sidenav .sidenav-menu .nav .nav-link .nav-link-icon {
            font-size: 0.9rem;
            padding-right: 0.5rem;
            display: inline-flex;
        }

        .sidenav .sidenav-menu .nav .nav-link .nav-link-icon .feather {
            width: 1rem;
            height: 1rem;
        }

        .sidenav .sidenav-menu .nav .nav-link.active {
            font-weight: 600;
        }

        .sidenav .sidenav-menu .nav .nav-link.active .nav-icon {
            color: #0061f2;
        }

        .sidenav .sidenav-menu .nav .nav-link .sidenav-collapse-arrow {
            display: inline-block;
            margin-left: auto;
            transition: transform 0.15s ease;
        }

        .sidenav .sidenav-menu .nav .nav-link.collapsed .sidenav-collapse-arrow {
            transform: rotate(-90deg);
        }

        .sidenav .sidenav-menu .nav .nav-link .badge {
            padding: 0.125rem 0.25rem;
        }

        .sidenav .sidenav-menu .nav .sidenav-menu-nested {
            flex-direction: column;
            margin-left: 1.4375rem;
            border-left-style: solid;
            border-left-width: thin;
            padding-left: 0.5625rem;
        }

        .sidenav .sidenav-footer {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            height: 5rem;
            background-color: #212832 !important;
        }

        .sidenav .sidenav-footer .sidenav-footer-content {
            font-size: 0.9rem;
        }

        .sidenav .sidenav-footer .sidenav-footer-content .sidenav-footer-subtitle {
            font-size: 0.90rem;
        }

        .sidenav .sidenav-footer .sidenav-footer-content .sidenav-footer-title {
            font-weight: 900;
            color: #e3ddfa;
        }

        .sidenav-dark {
            background-color: #272f3b;
            color: rgba(255, 255, 255, 0.5);
        }

        .sidenav-dark .sidenav-menu .sidenav-menu-heading {
            color: rgba(255, 255, 255, 0.25);
        }

        .sidenav-dark .sidenav-menu .nav-link {
            color: rgba(255, 255, 255, 0.5);
        }

        .sidenav-dark .sidenav-menu .nav-link .nav-link-icon {
            color: rgba(255, 255, 255, 0.25);
        }

        .sidenav-dark .sidenav-menu .nav-link .sidenav-collapse-arrow {
            color: rgba(255, 255, 255, 0.25);
        }

        .sidenav-dark .sidenav-menu .nav-link:hover {
            color: #fff;
        }

        .sidenav-dark .sidenav-menu .nav-link.active {
            color: #fff;
        }

        .sidenav-dark .sidenav-menu .nav-link.active .nav-link-icon {
            color: #fff;
        }

        .sidenav-dark .sidenav-menu-nested {
            border-left-color: rgba(255, 255, 255, 0.15);
        }

        .sidenav-dark .sidenav-footer {
            background-color: rgba(0, 0, 0, 0.25);
        }

        .sidenav-light {
            /*background-color: #FF0000;*/
            background-color: #212832;
            color: #212832;
        }

        .sidenav-light .sidenav-menu .sidenav-menu-heading {
            color: #a7aeb8;
        }

        .sidenav-light .sidenav-menu .nav-link {
            /*color: #212832;*/
            color: #fff;
            margin-left: 0.2rem;
            margin-right: 0.5rem;
        }

        .sidenav-light .sidenav-menu .nav-link .nav-link-icon {
            color: #a7aeb8;
        }

        .sidenav-light .sidenav-menu .nav-link .sidenav-collapse-arrow {
            /*color: #a7aeb8;*/
            color: #fff;
        }

        /*color del cursor cuando  se pasa sobre las opciones*/
        .sidenav-light .sidenav-menu .nav-link:hover {
            /*color: #0061f2;*/
            border-radius: 4px;
            color: #fff;
            background-color: var(--bs-orange);
            margin-left: 0.2rem;
            margin-right: 0.5rem;
        }

        .sidenav-light .sidenav-menu .nav-link.active {
            /*color: #0061f2;*/
            border-radius: 4px;
            background-color: var(--bs-orange);
            margin-left: 0.2rem;
            margin-right: 0.5rem;
        }

        /*editar icono*/
        .sidenav-light .sidenav-menu .nav-link.active .nav-link-icon {
            color: #ffff;
        }

        .sidenav-light .sidenav-menu-nested {
            border-left-color: #d4dae3;
        }

        .sidenav-light .sidenav-footer {
            background-color: rgba(33, 40, 50, 0.05);
        }

        .sidenav-light .sidenav-footer .sidenav-footer-subtitle {
            color: #fff;
        }

        .page-header .page-header-content {
            padding-top: 0.4rem;
            padding-bottom: 0.3rem;
            margin-left: 0.8rem;
            margin-right: 0.8rem;

        }

        .page-title {
            display: inline-block;
            color: #ffff;
            font-weight: bold;
            font-size: 16px;

        }

        .page-header .page-header-content .page-header-title {
            line-height: normal;
            font-size: 1.2rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            margin-bottom: 0;
        }

        .page-header .page-header-content .page-header-title .page-header-icon {
            margin-right: 0.5rem;
            display: inline-flex;
        }

        .page-header .page-header-content .page-header-title .page-header-icon .feather {
            height: 1.75rem;
            width: 1.75rem;
        }

        .page-header .page-header-content .page-header-subtitle {
            font-size: 1.15rem;
            margin-top: 0.25rem;
        }

        .page-header .page-header-search .input-group-joined {
            border-color: transparent;
        }

        .page-header .page-header-search .input-group-joined .form-control,
        .page-header .page-header-search .input-group-joined .dataTable-input {
            height: 4rem;
            font-size: 1.25rem;
        }

        .page-header .page-header-search .input-group-joined:focus-within {
            box-shadow: 0 0 0 0.25rem rgba(0, 97, 242, 0.25);
            border-color: transparent;
        }

        .page-header-compact .page-header-content {
            padding: 0;
        }

        .page-header-compact .page-header-content .page-header-title {
            font-size: 1rem;
        }

        .page-header-compact .page-header-content .page-header-title .page-header-icon .feather {
            height: 1rem;
            width: 1rem;
        }

        .page-header.page-header-dark {
            color: rgba(255, 255, 255, 0.5);
            border-radius: 5px;
            margin-left: 0.5rem;
            margin-right: 0.5rem;
        }

        .page-header.page-header-dark .page-header-title {
            color: #fff;
        }

        .page-header.page-header-dark .page-header-title .page-header-icon {
            color: rgba(255, 255, 255, 0.5);
        }

        .page-header.page-header-dark .page-header-subtitle {
            color: rgba(255, 255, 255, 0.5);
        }

        .page-header.page-header-dark .breadcrumb {
            background-color: rgba(0, 0, 0, 0.15);
            box-shadow: 0 0.15rem 1.75rem 0 rgba(33, 40, 50, 0.15);
        }

        .page-header.page-header-dark .breadcrumb .breadcrumb-item,
        .page-header.page-header-dark .breadcrumb .breadcrumb-item+.breadcrumb-item::before {
            color: rgba(255, 255, 255, 0.35);
        }

        .page-header.page-header-dark .breadcrumb .breadcrumb-item a {
            color: rgba(255, 255, 255, 0.6);
        }

        .page-header.page-header-dark .page-header-search .input-group-joined:focus-within {
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.5);
            border-color: transparent;
        }

        .page-header.page-header-light {
            color: rgba(33, 40, 50, 0.5);
        }

        .page-header.page-header-light .page-header-title {
            color: #212832;
        }

        .page-header.page-header-light .page-header-title .page-header-icon {
            color: rgba(33, 40, 50, 0.5);
        }

        .page-header.page-header-light .page-header-subtitle {
            color: rgba(33, 40, 50, 0.5);
        }

        .page-header.page-header-light .breadcrumb {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .page-header.page-header-light .breadcrumb .breadcrumb-item,
        .page-header.page-header-light .breadcrumb .breadcrumb-item+.breadcrumb-item::before {
            color: #69707a;
        }

        .page-header.page-header-light .breadcrumb .breadcrumb-item a {
            color: #0061f2;
        }

        .page-body.page-body-dark {
            color: rgba(255, 255, 255, 0.5);
            border-radius: 5px;
            margin-left: 0.5rem;
            margin-right: 0.5rem;
        }

        .page-body.page-body-dark .page-body-title {
            color: #fff;
        }

        .page-body .page-body-content {
            padding-top: 0.4rem;
            padding-bottom: 0.3rem;
            margin-left: 0.5rem;
            margin-right: 0.5rem;

        }

        .img-account-profile {
            height: 10rem;
        }

        .cc-color-visa {
            color: #1a1f71;
        }

        .cc-color-mastercard {
            color: #cc0000;
        }

        .cc-color-amex {
            color: #002663;
        }

        .table-billing-history {
            font-size: 0.85rem;
        }

        .table-billing-history thead th {
            border-top: none;
        }

        .table-billing-history th,
        .table-billing-history td {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            padding-left: 1.375rem;
            padding-right: 1.375rem;
        }

        .icons-org-create {
            display: inline-flex;
            align-items: center;
            position: relative;
        }

        .icons-org-create .icon-users {
            height: 4rem;
            width: 4rem;
        }

        .icons-org-create .icon-users circle,
        .icons-org-create .icon-users path:first-of-type {
            color: #0061f2;
        }

        .icons-org-create .icon-users path {
            color: rgba(0, 97, 242, 0.35);
        }

        .icons-org-create .icon-plus {
            color: #0061f2;
            position: absolute;
            font-size: 1.5rem;
            top: -0.5rem;
            right: -0.75rem;
        }

        .icons-org-join {
            display: inline-flex;
            position: relative;
        }

        .icons-org-join .icon-user {
            height: 4rem;
            width: 4rem;
            color: #6900c7;
        }

        .icons-org-join .icon-arrow {
            font-size: 2rem;
            margin: 1rem 0.5rem 1rem 0;
            color: #6900c7;
        }

        .icons-org-join .icon-users {
            margin: 0.5rem 0;
            height: 3rem;
            width: 3rem;
        }

        .icons-org-join .icon-users circle,
        .icons-org-join .icon-users path:first-of-type {
            color: rgba(105, 0, 199, 0.5);
        }

        .icons-org-join .icon-users path {
            color: rgba(105, 0, 199, 0.25);
        }

        .org-or-divider {
            display: flex;
            position: relative;
            width: 100%;
            justify-content: center;
            border-bottom: 1px solid #e0e5ec;
        }

        .org-or-divider .org-or {
            height: 2rem;
            width: 2rem;
            position: absolute;
            top: -1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 100%;
            border: 1px solid #e0e5ec;
            font-size: 80%;
            color: #6900c7;
        }

        .invoice .invoice-brand-img {
            height: 5rem;
            width: 5rem;
        }

        .invoice .table tbody tr td,
        .invoice .dataTable-table tbody tr td {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        @media (min-width: 992px) {
            .pricing-detailed .pricing-detailed-behind {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
        }

        .pricing-columns .pricing-columns-price {
            font-size: 2rem;
            color: #212832;
        }

        .pricing-columns .pricing-columns-price span {
            font-weight: normal;
            font-size: 1rem;
            color: #69707a;
        }

        .pricing-columns .list-group-flush .list-group-item {
            display: flex;
            align-items: center;
        }

        .nav-wizard .nav-link {
            display: flex;
            align-items: center;
            padding: 2rem;
        }

        .nav-wizard .nav-link .wizard-step-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 2.5rem;
            width: 2.5rem;
            flex-shrink: 0;
            margin-right: 1rem;
            border-radius: 0.35rem;
            background-color: #0061f2;
            color: white;
        }

        .nav-wizard .nav-link .wizard-step-icon i,
        .nav-wizard .nav-link .wizard-step-icon svg,
        .nav-wizard .nav-link .wizard-step-icon .feather {
            color: white;
        }

        .nav-wizard .nav-link .wizard-step-text {
            line-height: 1;
            text-align: left;
        }

        .nav-wizard .nav-link .wizard-step-text .wizard-step-text-name {
            font-size: 1rem;
            margin-bottom: 0.25rem;
            color: #0061f2;
        }

        .nav-wizard .nav-link .wizard-step-text .wizard-step-text-details {
            font-weight: 400;
            font-size: 0.875rem;
            color: #69707a;
        }

        .nav-wizard .nav-link.active .wizard-step-icon {
            background-color: #fff;
            color: #0061f2;
        }

        .nav-wizard .nav-link.active .wizard-step-icon i,
        .nav-wizard .nav-link.active .wizard-step-icon svg,
        .nav-wizard .nav-link.active .wizard-step-icon .feather {
            color: #0061f2;
        }

        .nav-wizard .nav-link.active .wizard-step-text .wizard-step-text-name {
            color: #fff;
        }

        .nav-wizard .nav-link.active .wizard-step-text .wizard-step-text-details {
            color: rgba(255, 255, 255, 0.5);
        }

        :root {
            --litepicker-month-header-color: #4a515b;
            --litepicker-button-prev-month-color: #ffff;
            --litepicker-button-next-month-color: #ffff;
            --litepicker-button-prev-month-color-hover: #0061f2;
            --litepicker-button-next-month-color-hover: #0061f2;
            --litepicker-month-weekday-color: #69707a;
            --litepicker-month-week-number-color: #69707a;
            --litepicker-day-width: 34px;
            --litepicker-day-color: #363d47;
            --litepicker-day-color-hover: #0061f2;
            --litepicker-is-today-color: #69707a;
            --litepicker-is-in-range-color: rgba(0, 97, 242, 0.15);
            --litepicker-is-start-color: #fff;
            --litepicker-is-start-color-bg: #0061f2;
            --litepicker-is-end-color: #fff;
            --litepicker-is-end-color-bg: #0061f2;
            --litepicker-button-apply-color-bg: #0061f2;
            --litepicker-button-reset-color-hover: #0061f2;
            --litepicker-highlighted-day-color: #363d47;
            --litepicker-highlighted-day-color-bg: rgba(0, 97, 242, 0.15);
        }

        .show-week-numbers {
            --litepicker-month-width: calc(var(--litepicker-day-width) * 8);
        }

        .litepicker {
            font-family: "Metropolis", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important;
            font-size: 0.875rem !important;
        }

        .litepicker .container__months {
            box-shadow: none !important;
            border-radius: 0.25rem !important;
        }

        @media (max-width: 709px) {
            .litepicker .container__months.columns-2 {
                width: calc(var(--litepicker-month-width) + 10px) !important;
            }
        }

        .litepicker .container__months .month-item-header {
            font-weight: normal !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.75rem !important;
            color: var(--bs-white) !important;
            background-color: var(--bs-orange);
        }

        .litepicker .container__months .month-item-header div>.month-item-name {
            margin-right: 0.25rem !important;
            font-weight: 500 !important;
        }

        .litepicker .container__months .month-item-header div>.month-item-year {
            font-weight: 500 !important;
        }

        .litepicker .container__months .month-item-header .button-previous-month,
        .litepicker .container__months .month-item-header .button-next-month {
            transition: none !important;
            cursor: pointer !important;
        }

        .litepicker .container__months .month-item-header .button-previous-month>svg,
        .litepicker .container__months .month-item-header .button-previous-month>img,
        .litepicker .container__months .month-item-header .button-next-month>svg,
        .litepicker .container__months .month-item-header .button-next-month>img {
            transform: scale(0.75);
        }

        .litepicker .container__months .month-item-header .button-previous-month {
            color: var(--litepicker-button-prev-month-color) !important;
        }

        .litepicker .container__months .month-item-header .button-previous-month>svg,
        .litepicker .container__months .month-item-header .button-previous-month>img {
            fill: var(--litepicker-button-prev-month-color) !important;
        }

        .litepicker .container__months .month-item-header .button-previous-month:hover {
            color: var(--litepicker-button-prev-month-color-hover) !important;
        }

        .litepicker .container__months .month-item-header .button-previous-month:hover>svg {
            fill: var(--litepicker-button-prev-month-color-hover) !important;
        }

        .litepicker .container__months .month-item-header .button-next-month {
            color: var(--litepicker-button-next-month-color) !important;
        }

        .litepicker .container__months .month-item-header .button-next-month>svg,
        .litepicker .container__months .month-item-header .button-next-month>img {
            fill: var(--litepicker-button-next-month-color) !important;
        }

        .litepicker .container__months .month-item-header .button-next-month:hover {
            color: var(--litepicker-button-next-month-color-hover) !important;
        }

        .litepicker .container__months .month-item-header .button-next-month:hover>svg {
            fill: var(--litepicker-button-next-month-color-hover) !important;
        }

        .litepicker .container__months .month-item-weekdays-row {
            color: var(--litepicker-month-weekday-color) !important;
        }

        .litepicker .container__days>div,
        .litepicker .container__days>a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0 !important;
            margin: 0;
            width: var(--litepicker-day-width) !important;
            height: var(--litepicker-day-width) !important;
        }

        .litepicker .container__days .day-item {
            color: var(--litepicker-day-color) !important;
            border-radius: 100% !important;
            transition: none !important;
            cursor: pointer !important;
        }

        .litepicker .container__days .day-item:hover {
            color: var(--bs-orange) !important;
            box-shadow: inset 0 0 0 1px var(--bs-orange) !important;
        }

        .litepicker .container__days .day-item.is-today {
            box-shadow: inset 0 0 0 1px var(--bs-orange);
            color: var(--litepicker-is-today-color) !important;
        }

        .litepicker .container__days .day-item.is-in-range {
            position: relative;
            background-color: transparent !important;
        }

        .litepicker .container__days .day-item.is-in-range:after {
            content: "";
            display: block;
            height: 100%;
            width: calc(100% + 4px);
            position: absolute;
            background-color: var(--litepicker-is-in-range-color);
        }

        .litepicker .container__days .day-item.is-start-date {
            color: var(--litepicker-is-start-color) !important;
            background-color: var(--bs-orange) !important;
            position: relative;
        }

        .litepicker .container__days .day-item.is-start-date:after {
            content: "";
            display: block;
            height: 100%;
            width: calc(50% + 2px);
            position: absolute;
            left: auto;
            right: -2px;
            background-color: var(--litepicker-is-in-range-color);
        }

        .litepicker .container__days .day-item.is-start-date.is-flipped:after {
            right: auto;
            left: -2px;
        }

        .litepicker .container__days .day-item.is-end-date {
            color: var(--litepicker-is-end-color) !important;
            background-color: var(--bs-orange) !important;
            position: relative;
        }

        .litepicker .container__days .day-item.is-end-date:after {
            content: "";
            display: block;
            height: 100%;
            width: calc(50% + 2px);
            position: absolute;
            left: -2px;
            right: auto;
            background-color: var(--litepicker-is-in-range-color);
        }

        .litepicker .container__days .day-item.is-end-date.is-flipped:after {
            right: -2px;
            left: auto;
        }

        .litepicker .container__days .day-item.is-start-date.is-end-date:after {
            display: none;
        }

        .litepicker .container__days .day-item.is-highlighted {
            color: var(--litepicker-highlighted-day-color) !important;
            background-color: var(--litepicker-highlighted-day-color-bg) !important;
        }

        .litepicker[data-plugins=ranges] .container__main {
            margin-top: 0.25rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(33, 40, 50, 0.15);
            overflow: hidden;
            border-radius: 0.35rem;
        }

        .litepicker[data-plugins=ranges] .container__main .container__predefined-ranges {
            box-shadow: none !important;
            border-radius: 0.35rem !important;
            border-top-right-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
            padding-top: 0.5rem;
            border-right: 1px solid #e0e5ec;
        }

        .litepicker[data-plugins=ranges] .container__main .container__predefined-ranges button {
            cursor: pointer !important;
        }

        .litepicker[data-plugins=ranges] .container__main .container__months {
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
        }

        .chart-area {
            position: relative;
            height: 10rem;
            width: 100%;
        }

        @media (min-width: 768px) {
            .chart-area {
                height: 15rem;
            }
        }

        .chart-bar {
            position: relative;
            height: 10rem;
            width: 100%;
        }

        @media (min-width: 768px) {
            .chart-bar {
                height: 15rem;
            }
        }

        .chart-pie {
            position: relative;
            height: 15rem;
            width: 100%;
        }

        @media (min-width: 768px) {
            .chart-pie {
                height: 15rem;
            }
        }

        .dataTable-wrapper .dataTable-container {
            font-size: 0.875rem;
        }

        .dataTable-wrapper.no-header .dataTable-container {
            border-top: none;
        }

        .dataTable-wrapper.no-footer .dataTable-container {
            border-bottom: none;
        }

        .dataTable-top {
            padding: 0 0 1rem;
        }

        .dataTable-bottom {
            padding: 0;
        }

        .dataTable-top>nav:first-child,
        .dataTable-top>div:first-child,
        .dataTable-bottom>nav:first-child,
        .dataTable-bottom>div:first-child {
            float: left;
        }

        .dataTable-top>nav:last-child,
        .dataTable-top>div:last-child,
        .dataTable-bottom>nav:last-child,
        .dataTable-bottom>div:last-child {
            float: right;
        }

        .dataTable-selector {
            width: auto;
            display: inline-block;
            padding-left: 1.125rem;
            padding-right: 2.125rem;
            margin-right: 0.25rem;
        }

        .dataTable-info {
            margin: 7px 0;
        }

        /* PAGER */
        .dataTable-pagination a:hover {
            background-color: #e0e5ec;
        }

        .dataTable-pagination .active a,
        .dataTable-pagination .active a:focus,
        .dataTable-pagination .active a:hover {
            background-color: #0061f2;
        }

        .dataTable-pagination .ellipsis a,
        .dataTable-pagination .disabled a,
        .dataTable-pagination .disabled a:focus,
        .dataTable-pagination .disabled a:hover {
            cursor: not-allowed;
        }

        .dataTable-pagination .disabled a,
        .dataTable-pagination .disabled a:focus,
        .dataTable-pagination .disabled a:hover {
            cursor: not-allowed;
            opacity: 0.4;
        }

        .dataTable-pagination .pager a {
            font-weight: bold;
        }

        /* TABLE */
        .dataTable-table {
            border-collapse: collapse;
        }

        .dataTable-table>tbody>tr>td,
        .dataTable-table>tbody>tr>th,
        .dataTable-table>tfoot>tr>td,
        .dataTable-table>tfoot>tr>th,
        .dataTable-table>thead>tr>td,
        .dataTable-table>thead>tr>th {
            vertical-align: top;
            padding: 0.75rem 0.75rem;
        }

        .dataTable-table>thead>tr>th {
            vertical-align: bottom;
            text-align: left;
            border-bottom: none;
        }

        .dataTable-table>tfoot>tr>th {
            vertical-align: bottom;
            text-align: left;
        }

        .dataTable-table th {
            vertical-align: bottom;
            text-align: left;
        }

        .dataTable-table th a {
            text-decoration: none;
            color: inherit;
        }

        .dataTable-sorter {
            display: inline-block;
            height: 100%;
            position: relative;
            width: 100%;
            padding-right: 1rem;
        }

        .dataTable-sorter::before,
        .dataTable-sorter::after {
            content: "";
            height: 0;
            width: 0;
            position: absolute;
            right: 4px;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            opacity: 0.2;
        }

        .dataTable-sorter::before {
            bottom: 4px;
        }

        .dataTable-sorter::after {
            top: 0px;
        }

        .asc .dataTable-sorter::after,
        .desc .dataTable-sorter::before {
            opacity: 0.6;
        }

        .dataTables-empty {
            text-align: center;
        }

        .dataTable-top::after,
        .dataTable-bottom::after {
            clear: both;
            content: " ";
            display: table;
        }

        .btn-datatable {
            height: 20px !important;
            width: 20px !important;
            font-size: 0.75rem;
            border-radius: 0.35rem !important;
        }

        .sbp-dropdown-example .dropdown-menu {
            display: inline-block;
            position: relative;
            float: none;
            max-width: 15rem;
        }

        .sbp-preview {
            border-radius: 0.35rem;
            border: 0.25rem solid #e0e5ec;
            border-style: solid;
        }

        .sbp-preview .sbp-preview-content {
            padding: 1.5rem;
            border-bottom: 1px solid #e0e5ec;
            position: relative;
        }

        .sbp-preview .sbp-preview-code {
            background-color: #f2f6fc;
            padding: 1.5rem;
            border-bottom: 1px solid #e0e5ec;
        }

        .sbp-preview .sbp-preview-code .nav-tabs {
            border-bottom-color: transparent;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .sbp-preview .sbp-preview-code .nav-tabs .nav-item .nav-link {
            border-bottom: 0;
            display: inline-flex;
            align-items: center;
        }

        .sbp-preview .sbp-preview-code .nav-tabs .nav-item .nav-link.active {
            border-color: transparent;
            background-color: #2f2f2f;
            color: white;
        }

        .sbp-preview .sbp-preview-code .nav-tabs .nav-item .nav-link .img-pug {
            height: 1em;
            padding: 1px 0;
        }

        .sbp-preview .sbp-preview-text {
            background-color: #f2f6fc;
            font-size: 0.875rem;
            padding: 1.5rem;
        }

        code[class*=language-],
        pre[class*=language-] {
            text-align: left;
            white-space: pre;
            word-spacing: normal;
            word-break: normal;
            word-wrap: normal;
            color: #eee;
            background: #2f2f2f;
            font-family: "SFMono-Regular", "Consolas", "Liberation Mono", "Menlo", monospace;
            font-size: 0.875rem;
            line-height: 1.5em;
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            -webkit-hyphens: none;
            -ms-hyphens: none;
            hyphens: none;
        }

        code[class*=language-]::-moz-selection,
        pre[class*=language-]::-moz-selection,
        code[class*=language-] ::-moz-selection,
        pre[class*=language-] ::-moz-selection {
            background: #363636;
        }

        code[class*=language-]::-moz-selection,
        pre[class*=language-]::-moz-selection,
        code[class*=language-] ::-moz-selection,
        pre[class*=language-] ::-moz-selection {
            background: #363636;
        }

        code[class*=language-]::selection,
        pre[class*=language-]::selection,
        code[class*=language-] ::selection,
        pre[class*=language-] ::selection {
            background: #363636;
        }

        :not(pre)>code[class*=language-] {
            white-space: normal;
            border-radius: 0.2em;
            padding: 0.1em;
        }

        pre[class*=language-] {
            overflow: auto;
            position: relative;
            margin: 0;
            padding: 1rem;
            max-height: 35rem;
        }

        .language-css>code,
        .language-sass>code,
        .language-scss>code {
            color: #fd9170;
        }

        [class*=language-] .namespace {
            opacity: 0.7;
        }

        .token.atrule {
            color: #c792ea;
        }

        .token.attr-name {
            color: #ffcb6b;
        }

        .token.attr-value {
            color: #a5e844;
        }

        .token.attribute {
            color: #a5e844;
        }

        .token.boolean {
            color: #c792ea;
        }

        .token.builtin {
            color: #ffcb6b;
        }

        .token.cdata {
            color: #80cbc4;
        }

        .token.char {
            color: #80cbc4;
        }

        .token.class {
            color: #ffcb6b;
        }

        .token.class-name {
            color: #f2ff00;
        }

        .token.comment {
            color: #616161;
        }

        .token.constant {
            color: #c792ea;
        }

        .token.deleted {
            color: #ff6666;
        }

        .token.doctype {
            color: #616161;
        }

        .token.entity {
            color: #ff6666;
        }

        .token.function {
            color: #c792ea;
        }

        .token.hexcode {
            color: #f2ff00;
        }

        .token.id {
            color: #c792ea;
            font-weight: bold;
        }

        .token.important {
            color: #c792ea;
            font-weight: bold;
        }

        .token.inserted {
            color: #80cbc4;
        }

        .token.keyword {
            color: #c792ea;
        }

        .token.number {
            color: #fd9170;
        }

        .token.operator {
            color: #89ddff;
        }

        .token.prolog {
            color: #616161;
        }

        .token.property {
            color: #80cbc4;
        }

        .token.pseudo-class {
            color: #a5e844;
        }

        .token.pseudo-element {
            color: #a5e844;
        }

        .token.punctuation {
            color: #89ddff;
        }

        .token.regex {
            color: #f2ff00;
        }

        .token.selector {
            color: #ff6666;
        }

        .token.string {
            color: #a5e844;
        }

        .token.symbol {
            color: #c792ea;
        }

        .token.tag {
            color: #ff6666;
        }

        .token.unit {
            color: #fd9170;
        }

        .token.url {
            color: #ff6666;
        }

        .token.variable {
            color: #ff6666;
        }
    </style>
</head>

<body class="antialiased">


    <div>
        <div id="layoutSidenav_content">
            <main>
                <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
                    id="sidenavAccordion">
                    <!-- Navbar Brand-->
                    <!-- * * Tip * * You can use text or an image for your navbar brand.-->
                    <!-- * * * * * * When using an image, we recommend the SVG format.-->
                    <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
                    <a class="navbar-brand pe-3 ps-4 ps-lg-4" href="/admin/main">Rayo SAC</a>

                    <!-- Navbar Items-->
                    <ul class="navbar-nav align-items-center ms-auto">
                        <!-- Lenguaje-->
                        <li class="nav-item dropdown no-caret d-none d-sm-block me-2 dropdown-notifications">
                            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts"
                                href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" title="Lenguaje"><i
                                    class='bx bx-world'></i></a>
                            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                                aria-labelledby="navbarDropdownAlerts">
                                <h6 class="dropdown-header dropdown-notifications-header">
                                    <i class='bx bx-world'></i>
                                    Lenguaje
                                </h6>


                                <!-- Example Alert 1-->
                                <a class="dropdown-item dropdown-notifications-item" href="#!">
                                    <div class="dropdown-notifications-item-icon bg-warning"><i
                                            class='bx bx-world'></i>
                                    </div>
                                    <div class="dropdown-notifications-item-content">
                                        <div class="dropdown-notifications-item-content-details">Español</div>
                                    </div>
                                </a>
                                <a class="dropdown-item dropdown-notifications-item" href="#!">
                                    <div class="dropdown-notifications-item-icon bg-warning"><i
                                            class='bx bx-world'></i>
                                    </div>
                                    <div class="dropdown-notifications-item-content">
                                        <div class="dropdown-notifications-item-content-details">inglés</div>
                                    </div>
                                </a>

                            </div>
                            <!-- Sidenav Toggle Button-->
                            <div
                                class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                        @else
                                            <a href="{{ route('login') }}"
                                                class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar
                                                sesion</a>
                                        @endauth
                                    </div>
                                @endif

                        </li>

                        </li>
                    </ul>
                </nav>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://imgs.search.brave.com/Q_VVZd-bEb3yqq2vbt0_1mVfyHs8pX2UyMYDfUisF-E/rs:fit:647:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5a/ZHlxNlZPOHUwSnNE/X2xldzJJUVl3SGFG/YiZwaWQ9QXBp"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://imgs.search.brave.com/m8e0erJqyyvgCgidFXfVc-GzIH1j4yiuuV34fcahdtE/rs:fit:841:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5C/NWRlY2lZc1BoN3d1/amQ2amFTTDB3SGFF/TCZwaWQ9QXBp"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://imgs.search.brave.com/JPpxdprpj_gxqgM1TSwEdCjzKF-S3bCDv5xHhv6nxoI/rs:fit:1012:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC50/LWVtUExidnJxbml4/RHdSbnE4RW5nSGFE/ZSZwaWQ9QXBp"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="card-group">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This card has even longer content than the first to
                                show that equal height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>


                <!-- paginacion final -->
                <div class="p-3 mb-2 bg-dark text-white">
                    <h1 class="text-white"> Acerca de nosotros</h1>

                    <h4 class="text-white">Siguenos en <em type="button" class='bx bxl-facebook-square'></em>
                        <em type="button" class='bx bxl-instagram-alt'></em> <em type="button" class='bx bxl-youtube'></em>
                    </h4>
                    <h4 class="text-white"> Contactenos <em type="button" class='bx bxl-messenger'></em> <em type="button" class='bx bxl-whatsapp'></em></h4>
                    <div>
                        <h4 class="text-white"><em class='bx bxs-phone-call'></em> Llamanos al (928033951) </h4>
                        <h5 class="text-white"> De lunes a domingo de 8:00 am a 6:00 pm </h5>
                    </div>

                </div>
            </main>

        </div>

    </div>

    </div>
</body>

</html>
