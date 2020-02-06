<?php
$GLOBALS['_ta_campaign_key'] = 'b4139e33d506890472044baad2d293a7';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=b4139e33d506890472044baad2d293a7' parameter

require 'bootloader.php';

$campaign_id = '3es21c';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <link rel="icon" href="//img1.wsimg.com/isteam/ip/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/favicon/096bc21e-f1d7-4eee-a530-697c4b799761.jpg/:/rs=w:16,h:16,m" sizes="16x16" />
    <link rel="icon" href="//img1.wsimg.com/isteam/ip/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/favicon/096bc21e-f1d7-4eee-a530-697c4b799761.jpg/:/rs=w:24,h:24,m" sizes="24x24" />
    <link rel="icon" href="//img1.wsimg.com/isteam/ip/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/favicon/096bc21e-f1d7-4eee-a530-697c4b799761.jpg/:/rs=w:32,h:32,m" sizes="32x32" />
    <link rel="icon" href="//img1.wsimg.com/isteam/ip/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/favicon/096bc21e-f1d7-4eee-a530-697c4b799761.jpg/:/rs=w:48,h:48,m" sizes="48x48" />
    <link rel="icon" href="//img1.wsimg.com/isteam/ip/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/favicon/096bc21e-f1d7-4eee-a530-697c4b799761.jpg/:/rs=w:64,h:64,m" sizes="64x64" />
    <meta charSet="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>mniocaen</title>
    <meta name="author" content="mniocaen" />
    <link rel="manifest" href="/manifest.webmanifest" />
    <link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/favicon/096bc21e-f1d7-4eee-a530-697c4b799761.jpg/:/rs=w:57,h:57,m" />
    <link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/favicon/096bc21e-f1d7-4eee-a530-697c4b799761.jpg/:/rs=w:60,h:60,m" />
    <link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/favicon/096bc21e-f1d7-4eee-a530-697c4b799761.jpg/:/rs=w:72,h:72,m" />
    <link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/favicon/096bc21e-f1d7-4eee-a530-697c4b799761.jpg/:/rs=w:114,h:114,m" />
    <link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/favicon/096bc21e-f1d7-4eee-a530-697c4b799761.jpg/:/rs=w:120,h:120,m" />
    <link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/favicon/096bc21e-f1d7-4eee-a530-697c4b799761.jpg/:/rs=w:144,h:144,m" />
    <link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/favicon/096bc21e-f1d7-4eee-a530-697c4b799761.jpg/:/rs=w:152,h:152,m" />
    <link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/favicon/096bc21e-f1d7-4eee-a530-697c4b799761.jpg/:/rs=w:180,h:180,m" />
    <meta property="og:url" content="https://mniocaen.appspot.com/" />
    <meta property="og:site_name" content="mniocaen" />
    <meta property="og:title" content="Get your daily dose!" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://img1.wsimg.com/isteam/videos/uGbA6v1EwwF20VGXJ" />
    <meta property="og:locale" content="en_US" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="mniocaen" />
    <meta name="twitter:description" content="Get your daily dose!" />
    <meta name="twitter:image" content="http://img1.wsimg.com/isteam/videos/uGbA6v1EwwF20VGXJ" />
    <meta name="twitter:image:alt" content="mniocaen" />
    <meta name="theme-color" content="#46676D" />
    <script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US"
        crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e645c3e6fe995b50/script.js" crossorigin></script>
    <script type="text/javascript">
        "undefined" === typeof _trfq && (window._trfq = []);
        "undefined" == typeof _trfd && (window._trfd = []);
    </script>
    <script type="text/javascript">
        function logTcclEvent() {
            var t = this.getAttribute("data-tccl");
            if (window._trfq && t) try {
                for (var e = t.split(","), r = e[0], d = e[1], n = e.splice(2), c = [], o = 0; o < n.length; o += 2) c.push([n[o], n[o + 1]]);
                window._trfq.push(["cmdLogEvent", d, r, c])
            } catch (e) {
                window._trfq.push(["cmdLogEvent", "gc_published_site_error", "tccl.published.log", [
                    ["error", e.toString()],
                    ["data", t]
                ]])
            }
        }
        "undefined" != typeof window && "undefined" != typeof document && window.addEventListener("DOMContentLoaded", function() {
            for (var t = document.querySelectorAll("[data-tccl]"), e = 0; e < t.length; e++) try {
                var r = t[e].getAttribute("data-tccl").split(",");
                t[e].addEventListener(r[1], logTcclEvent)
            } catch (t) {
                window._trfq.push(["cmdLogEvent", "gc_published_site_error", "tccl.published.add", [
                    ["error", t.toString()]
                ]])
            }
        });
    </script>
    <script type="text/javascript">
        "use strict";

        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/sw.js').then(function() {
                    console.log('sw: registration complete');
                }).catch(function(err) {
                    console.log(err);
                });
            });
        }
    </script>
    <style type="text/css">
        /*
Copyright 2016 The Muli Project Authors (contact@sansoxygen.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/

        /* vietnamese */

        @font-face {
            font-family: 'Muli';
            font-style: normal;
            font-weight: 400;
            src: url(https://img1.wsimg.com/gfonts/s/muli/v19/7Aulp_0qiz-aVz7u3PJLcUMYOFnOkEk40eiNxw.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Muli';
            font-style: normal;
            font-weight: 400;
            src: url(https://img1.wsimg.com/gfonts/s/muli/v19/7Aulp_0qiz-aVz7u3PJLcUMYOFnOkEk50eiNxw.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Muli';
            font-style: normal;
            font-weight: 400;
            src: url(https://img1.wsimg.com/gfonts/s/muli/v19/7Aulp_0qiz-aVz7u3PJLcUMYOFnOkEk30eg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /*
Copyright 2011 The Quicksand Project Authors (https://github.com/andrew-paglinawan/QuicksandFamily), with Reserved Font Name Quicksand.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/

        /* vietnamese */

        @font-face {
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 400;
            src: url(https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hJFQNcOM.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 400;
            src: url(https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hJVQNcOM.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 400;
            src: url(https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hK1QN.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 700;
            src: url(https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hJFQNcOM.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 700;
            src: url(https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hJVQNcOM.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 700;
            src: url(https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hK1QN.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <link rel="stylesheet" href="//img1.wsimg.com/blobby/go/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/gpub/4ce1a7c86682e5e8/styles.css" />
    <link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/gpub/70b14d9acdccfe75/styles.css" />
    <style data-glamor="cxs-media-sheet" type="text/css"></style>
    <style data-glamor="cxs-xs-sheet" type="text/css">
        @media (max-width: 767px) {
            .x .c1-r {
                padding-top: 32px
            }
        }

        @media (max-width: 767px) {
            .x .c1-s {
                padding-bottom: 32px
            }
        }

        @media (max-width: 767px) {
            .x .c1-1v {
                margin: 0 !important
            }
        }

        @media (max-width: 767px) {
            .x .c1-2b {
                display: flex
            }
        }

        @media (max-width: 767px) {
            .x .c1-2t {
                flex-grow: 1
            }
        }

        @media (max-width: 767px) {
            .x .c1-2u> :not(:first-child):not(:last-child) {
                padding-bottom: 16px
            }
        }

        @media (max-width: 767px) {
            .x .c1-2y {
                padding-bottom: 0px !important
            }
        }

        @media (max-width: 767px) {
            .x .c1-53> :nth-child(n) {
                margin-bottom: 24px
            }
        }

        @media (max-width: 767px) {
            .x .c1-54> :last-child {
                margin-bottom: 0 !important
            }
        }

        @media (max-width: 767px) {
            .x .c1-6t {
                margin-bottom: 24px
            }
        }

        @media (max-width: 767px) {
            .x .c1-74 {
                order: -1
            }
        }

        @media (max-width: 767px) {
            .x .c1-9k {
                padding-top: none
            }
        }

        @media (max-width: 767px) {
            .x .c1-9l {
                padding-bottom: none
            }
        }

        @media (max-width: 767px) {
            .x .c1-9v {
                flex-direction: column
            }
        }
    </style>
    <link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/gpub/61b1ab620ded2bda/styles.css" />
    <link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/gpub/fae7de21027d1ea7/styles.css" />
    <style data-glamor="cxs-lg-sheet" type="text/css">
        @media (min-width: 1280px) {
            .x .c1-f {
                font-size: 16px
            }
        }

        @media (min-width: 1280px) {
            .x .c1-1l {
                width: 1160px
            }
        }

        @media (min-width: 1280px) {
            .x .c1-3f {
                font-size: 44px
            }
        }

        @media (min-width: 1280px) {
            .x .c1-3w {
                font-size: 14px
            }
        }

        @media (min-width: 1280px) {
            .x .c1-41 {
                font-size: 12px
            }
        }

        @media (min-width: 1280px) {
            .x .c1-59 {
                font-size: 22px
            }
        }

        @media (min-width: 1280px) {
            .x .c1-6x {
                font-size: 32px
            }
        }
    </style>
    <style data-glamor="cxs-xl-sheet" type="text/css">
        @media (min-width: 1536px) {
            .x .c1-g {
                font-size: 18px
            }
        }

        @media (min-width: 1536px) {
            .x .c1-1m {
                width: 1280px
            }
        }

        @media (min-width: 1536px) {
            .x .c1-3g {
                font-size: 48px
            }
        }

        @media (min-width: 1536px) {
            .x .c1-3x {
                font-size: 16px
            }
        }

        @media (min-width: 1536px) {
            .x .c1-42 {
                font-size: 14px
            }
        }

        @media (min-width: 1536px) {
            .x .c1-5a {
                font-size: 24px
            }
        }

        @media (min-width: 1536px) {
            .x .c1-6y {
                font-size: 36px
            }
        }
    </style>
    <style type="text/css">
        .grecaptcha-badge {
            visibility: hidden;
        }
    </style>
    <style type="text/css">
        .page-inner {
            background-color: rgb(255, 255, 255);
            min-height: 100vh;
        }
    </style>
</head>

<body class="x  x-fonts-muli" context="[object Object]">
    <div id="layout-c-4-e-4-d-647-9-b-58-426-a-ba-9-d-8-dcc-80993-a-6-c" class="layout layout-layout layout-layout-layout-21 locale-en-US lang-en">
        <div data-ux="Page" id="page-36" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
            <div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                <div id="fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6" class="widget widget-header widget-header-header-9">
                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                            <div>
                                <section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-b c1-c c1-l c1-m c1-n c1-o c1-p c1-q c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-v c1-b c1-c c1-d c1-w c1-e c1-f c1-g x-d-ux"></div>
                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                            <hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-4 c1-12 c1-13 c1-14 c1-15 c1-16 c1-17 c1-18 c1-19 c1-1a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux" />
                                        </div>
                                        <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1c c1-1d c1-1e c1-1f c1-u c1-1g c1-b c1-c c1-1h c1-d c1-1i c1-1j c1-1k c1-e c1-1l c1-f c1-1m c1-g x-d-ux">
                                            <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1n c1-1o c1-1p c1-1q c1-10 c1-1r c1-11 c1-1s c1-1t c1-1u c1-b c1-c c1-1v c1-1w c1-1x c1-1y c1-1z c1-20 c1-d c1-21 c1-22 c1-e c1-f c1-g x-d-ux">
                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1o c1-23 c1-24 c1-25 c1-1f c1-26 c1-27 c1-28 c1-29 c1-2a c1-b c1-c c1-2b c1-2c c1-2d c1-2e c1-2f c1-d c1-2g c1-2h c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o c1-e c1-f c1-g x-d-ux">
                                                    <div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-2p c1-2q c1-i c1-j c1-1f c1-2r c1-2s c1-b c1-c c1-2t c1-2u c1-d c1-e c1-f c1-g x-d-ux">
                                                        <div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2v c1-2w c1-1f c1-4 c1-2x c1-c c1-2y c1-2z c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                            <a rel="" typography="LinkAlpha" data-ux="Link" data-page="2dbc3c68-54c1-4511-8f4b-14af5ec7c5f0" title="amidas" href="/" class="x-el x-el-a c1-30 c1-31 c1-32 c1-2s c1-2r c1-33 c1-34 c1-14 c1-15 c1-16 c1-17 c1-b c1-35 c1-c c1-36 c1-37 c1-38 c1-d c1-e c1-f c1-g x-d-ux x-d-page"
                                                                data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.38.click,click">
                                                                <div id="bs-1">
                                                                    <h3 typography="HeadingAlpha" data-ux="LogoHeading" id="logo-container-39" logoText="amidas" class="x-el x-el-h3 c1-1 c1-2 c1-2s c1-2r c1-39 c1-1a c1-19 c1-10 c1-11 c1-1f c1-3a c1-3b c1-2w c1-35 c1-3c c1-3d c1-3e c1-3f c1-3g x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="bigLogo" class="x-el x-el-span c1-2v c1-4 c1-2w c1-3b c1-3d c1-3e c1-3f c1-3g x-d-ux x-d-aid x-d-route">amidas</span></h3>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1a c1-19 c1-3h c1-3i c1-1f c1-3j c1-b c1-c c1-1h c1-d c1-1i c1-e c1-1l c1-f c1-1m c1-g x-d-ux">
                                                            <h1 typography="BodyAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-2s c1-2r c1-3k c1-1a c1-19 c1-10 c1-3l c1-12 c1-b c1-35 c1-c c1-3c c1-d c1-w c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Get your daily dose!</h1>
                                                            <div id="bs-2">
                                                                <div data-ux="Element" id="tagline-container-40" class="x-el x-el-div c1-1 c1-2 c1-2s c1-2r c1-39 c1-v c1-b c1-c c1-d c1-3m c1-e c1-f c1-g x-d-ux">
                                                                    <h1 typography="BodyAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-2s c1-2r c1-3k c1-1a c1-19 c1-10 c1-3l c1-3n c1-2v c1-4 c1-c c1-b c1-35 c1-3c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Get your daily dose!</h1><span data-ux="Element" data-size="medium" data-scaler-id="scaler-tagline-container-40" class="x-el x-el-span c1-3o c1-3p c1-12 c1-3q c1-3r c1-3s c1-c c1-2w c1-d c1-e c1-f c1-g x-d-ux x-d-size x-d-scaler-id">Get your daily dose!</span>
                                                                    <span
                                                                        data-ux="Element" data-size="small" data-scaler-id="scaler-tagline-container-40" class="x-el x-el-span c1-3o c1-3p c1-12 c1-3q c1-3r c1-3s c1-3t c1-2w c1-3u c1-3v c1-3w c1-3x x-d-ux x-d-size x-d-scaler-id">Get your daily dose!</span><span data-ux="Element" data-size="xsmall" data-scaler-id="scaler-tagline-container-40" class="x-el x-el-span c1-3o c1-3p c1-12 c1-3q c1-3r c1-3s c1-3y c1-2w c1-3z c1-40 c1-41 c1-42 x-d-ux x-d-size x-d-scaler-id">Get your daily dose!</span></div>
                                                            </div>
                                                        </div>
                                                        <div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                            <div id="bs-3" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#" target="" data-tccl="ux2.header.cta_button.click,click" class="x-el x-el-a c1-43 c1-44 c1-45 c1-46 c1-47 c1-48 c1-3 c1-49 c1-2v c1-1t c1-32 c1-34 c1-2r c1-2s c1-1f c1-4a c1-4b c1-1g c1-b c1-4c c1-4d c1-4e c1-3t c1-4f c1-4g c1-4h c1-4i c1-3u c1-4j c1-3v c1-4k c1-4l c1-4m c1-4n c1-3w c1-3x x-d-ux x-d-aid x-d-tccl">Contact Me</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1o c1-23 c1-24 c1-25 c1-1f c1-26 c1-27 c1-28 c1-29 c1-4o c1-b c1-c c1-2c c1-2d c1-2e c1-2f c1-d c1-2g c1-4p c1-w c1-4q c1-e c1-f c1-g x-d-ux">
                                                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                        <div id="bs-4">
                                                            <div data-ux="Wrapper" data-route="hasMedia:mediaData" class="x-el x-el-div c1-1 c1-2 c1-2v c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route">
                                                                <script>
                                                                    Number(window.vctElements) || (window.vctElements = 0), window.vctElements++
                                                                </script><video data-aid="HEADER_VIDEO" style="width:100%;@md:[object Object]" src="" type="video/mp4" poster="" loop="" muted="" autoplay="" playsinline=""></video></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="9c74a663-6887-4ea1-9871-e809f8c61746" class="widget widget-content widget-content-content-4">
                    <div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div>
                            <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux">
                                <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-1h c1-d c1-1i c1-e c1-1l c1-f c1-1m c1-g x-d-ux">
                                    <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1n c1-1o c1-1p c1-1q c1-10 c1-1r c1-11 c1-1s c1-1t c1-b c1-c c1-1w c1-1x c1-1y c1-1z c1-d c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1o c1-23 c1-24 c1-4r c1-1f c1-26 c1-27 c1-28 c1-29 c1-b c1-c c1-4s c1-4t c1-4u c1-2c c1-2d c1-2e c1-2f c1-d c1-4v c1-4w c1-4x c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="ContentBasic" class="x-el x-el-div x-el c1-1 c1-2 c1-1n c1-4y c1-4 c1-4z c1-50 c1-1t c1-51 c1-52 c1-b c1-c c1-53 c1-54 c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                <h4 typography="HeadingDelta" data-ux="FeaturedHeading" data-aid="CONTENT_WELCOME_TITLE_RENDERED" data-route="welcomeTitle" class="x-el x-el-h4 c1-1 c1-2 c1-2s c1-2r c1-3k c1-1a c1-19 c1-10 c1-11 c1-b c1-55 c1-56 c1-3c c1-57 c1-58 c1-59 c1-5a x-d-ux x-d-aid x-d-route">Welcome</h4>
                                                <div typography="BodyBeta" data-ux="FeaturedText" alignment="center" data-aid="CONTENT_WELCOME_DESCRIPTION_RENDERED" data-route="welcomeDescription" class="x-el x-el-p c1-1 c1-2 c1-2s c1-2r c1-5b c1-10 c1-11 c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-3a c1-b c1-64 c1-56 c1-3c c1-57 c1-58 c1-59 c1-5a x-d-ux x-d-aid x-d-route x-rt">
                                                    <p style="margin:0"><span>There's much to see here. So, take your time, look around. Then make sure to drop me a line. <br>
&nbsp;</span></p>
                                                    <p style="margin:0"><span>I look forward to hearing from you.</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div id="f9b4a511-2820-40d1-89d0-c0e88278479c" class="widget widget-about widget-about-about-5">
                    <div data-ux="WidgetSplit" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div>
                            <div data-ux="ContainerSplit" class="x-el x-el-div c1-1 c1-2 c1-1a c1-19 c1-3h c1-3i c1-1f c1-1n c1-4y c1-69 c1-3 c1-b c1-c c1-d c1-6a c1-6b c1-6c c1-e c1-f c1-g x-d-ux">
                                <div data-ux="SplitItem" class="x-el x-el-div c1-1 c1-2 c1-1n c1-23 c1-6d c1-1f c1-t c1-b c1-c c1-6e c1-6f c1-6g c1-d c1-2g c1-6h c1-2o c1-6i c1-e c1-f c1-g x-d-ux">
                                    <section data-ux="SectionSplit" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-6j c1-23 c1-4 c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-6k c1-b c1-c c1-d c1-6l c1-6m c1-6n c1-2j c1-6o c1-e c1-f c1-g x-d-ux">
                                                <h4 typography="HeadingBeta" data-ux="SectionSplitHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" alignmentOption="left" class="x-el x-el-h4 c1-1 c1-2 c1-2s c1-2r c1-6p c1-1a c1-19 c1-10 c1-6q c1-6r c1-1t c1-2w c1-6s c1-55 c1-3c c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-2w c1-6s c1-6u c1-6w c1-6x c1-6y x-d-ux">About Us</span>
                                                    <hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-6z c1-70 c1-z c1-1g c1-11 c1-71 c1-2w c1-6s c1-6u c1-6w c1-6x c1-6y x-d-ux"
                                                    />
                                                </h4>
                                                <div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-6q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                    <div data-ux="ContentBasic" image="[object Object]" data-field-id="cards" data-field-route="/card/0" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-1n c1-4y c1-4 c1-4z c1-72 c1-6k c1-51 c1-52 c1-b c1-c c1-53 c1-54 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">
                                                        <h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-2s c1-2r c1-3k c1-1a c1-19 c1-10 c1-11 c1-b c1-55 c1-56 c1-3c c1-57 c1-58 c1-59 c1-5a x-d-ux x-d-aid x-d-route x-d-field-route">Grab interest</h4>
                                                        <div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-2s c1-2r c1-5b c1-10 c1-11 c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-b c1-64 c1-c c1-3c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt">
                                                            <p style="margin:0"><span>Say something interesting about your business here.</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-6q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                    <div data-ux="ContentBasic" image="[object Object]" data-field-id="cards" data-field-route="/card/1" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-1n c1-4y c1-4 c1-4z c1-72 c1-6k c1-51 c1-52 c1-b c1-c c1-53 c1-54 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">
                                                        <h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-2s c1-2r c1-3k c1-1a c1-19 c1-10 c1-11 c1-b c1-55 c1-56 c1-3c c1-57 c1-58 c1-59 c1-5a x-d-ux x-d-aid x-d-route x-d-field-route">Generate excitement</h4>
                                                        <div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-2s c1-2r c1-5b c1-10 c1-11 c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-b c1-64 c1-c c1-3c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt">
                                                            <p style="margin:0"><span>What's something exciting your business offers? Say it here.</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-11 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                    <div data-ux="ContentBasic" image="[object Object]" data-field-id="cards" data-field-route="/card/2" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-1n c1-4y c1-4 c1-4z c1-72 c1-6k c1-51 c1-52 c1-b c1-c c1-53 c1-54 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">
                                                        <h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-2s c1-2r c1-3k c1-1a c1-19 c1-10 c1-11 c1-b c1-55 c1-56 c1-3c c1-57 c1-58 c1-59 c1-5a x-d-ux x-d-aid x-d-route x-d-field-route">Close the deal</h4>
                                                        <div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-2s c1-2r c1-5b c1-10 c1-11 c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-b c1-64 c1-c c1-3c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt">
                                                            <p style="margin:0"><span>Give customers a reason to do business with you.</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div data-ux="SplitItemImage" class="x-el x-el-div c1-1 c1-2 c1-1n c1-23 c1-6d c1-1f c1-t c1-6j c1-73 c1-b c1-c c1-6e c1-6f c1-6g c1-74 c1-75 c1-d c1-2g c1-6h c1-2o c1-76 c1-77 c1-e c1-f c1-g x-d-ux"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-1n c1-23 c1-78 c1-b c1-c c1-79 c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg41" role="img" data-ux="Background" data-aid="ABOUT_IMAGE_RENDERED1" data-route="imageData" data-field-route="/image" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-7a c1-7b c1-7c c1-7d c1-7e c1-1n c1-23 c1-78 c1-7f c1-7g c1-b c1-c c1-79 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route"><script>new guacImage('//img1.wsimg.com/isteam/stock/107964/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg41'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%)"]})</script></div></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="b40efa80-968e-417a-9960-a54d4e76c7f9" class="widget widget-subscribe widget-subscribe-subscribe-2">
                    <div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div>
                            <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux">
                                <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-1h c1-d c1-1i c1-e c1-1l c1-f c1-1m c1-g x-d-ux">
                                    <div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-7h c1-b c1-c c1-d c1-6m c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1n c1-1o c1-1p c1-1q c1-10 c1-1r c1-11 c1-1s c1-b c1-c c1-1w c1-1x c1-1y c1-1z c1-d c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1o c1-23 c1-24 c1-4r c1-1f c1-26 c1-27 c1-28 c1-29 c1-b c1-c c1-2c c1-2d c1-2e c1-2f c1-d c1-e c1-f c1-g x-d-ux">
                                                <div style="width:100%">
                                                    <div id="b40efa80-968e-417a-9960-a54d4e76c7f9-bootstrap-container">
                                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-v c1-b c1-c c1-d c1-2m c1-2n c1-e c1-f c1-g x-d-ux">
                                                            <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3l c1-b c1-c c1-d c1-7i c1-2j c1-e c1-f c1-g x-d-ux">
                                                                <h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h3 c1-1 c1-2 c1-2s c1-2r c1-3k c1-1a c1-19 c1-10 c1-11 c1-1t c1-2w c1-55 c1-6s c1-3c c1-6u c1-6w c1-6x c1-6y x-d-ux x-d-aid x-d-route">Join My Mailing List</h3>
                                                            </div>
                                                            <div data-ux="Block" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-23 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                <form data-ux="Form" aria-live="polite" class="x-el x-el-form c1-1 c1-2 c1-11 c1-1n c1-4y c1-7j c1-50 c1-1t c1-4e c1-b c1-c c1-d c1-6b c1-e c1-f c1-g x-d-ux">
                                                                    <div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c1-1 c1-2 c1-7k c1-4 c1-b c1-c c1-d c1-7l c1-7m c1-7i c1-2j c1-e c1-f c1-g x-d-ux x-d-route">
                                                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                            <div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input42" value="" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c1-1 c1-2 c1-3 c1-7n c1-4 c1-7o c1-7p c1-y c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-z c1-b c1-7w c1-3t c1-3c c1-7x c1-4g c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-3u c1-3v c1-3w c1-3x x-d-ux x-d-aid"
                                                                                /><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input42" class="x-el x-el-label c1-1 c1-2 c1-2s c1-2r c1-3r c1-86 c1-87 c1-88 c1-89 c1-b c1-7w c1-3t c1-3c c1-3u c1-3v c1-3w c1-3x x-d-ux">Email Address</label></div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-7m c1-e c1-f c1-g x-d-ux x-d-route">
                                                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND"
                                                                                class="x-el x-el-button c1-43 c1-44 c1-45 c1-46 c1-47 c1-48 c1-2a c1-49 c1-2v c1-1t c1-32 c1-34 c1-2r c1-2s c1-1f c1-4 c1-4b c1-b c1-35 c1-4d c1-4e c1-3t c1-8a c1-4g c1-8b c1-4i c1-3u c1-4j c1-3v c1-8c c1-4l c1-4m c1-4n c1-3w c1-3x x-d-ux x-d-tccl x-d-aid">Sign up</button></div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div id="bbef00f9-7abd-4e62-a38a-019fe80d0c4e" class="widget widget-gallery widget-gallery-gallery-4">
                    <div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div>
                            <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-8d c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux">
                                <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-1h c1-d c1-1i c1-e c1-1l c1-f c1-1m c1-g x-d-ux">
                                    <h4 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h4 c1-1 c1-2 c1-2s c1-2r c1-6p c1-1a c1-19 c1-10 c1-6q c1-6r c1-1t c1-2w c1-6s c1-55 c1-3c c1-6t c1-6u c1-6w c1-6x c1-6y x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-2w c1-6s c1-6u c1-6w c1-6x c1-6y x-d-ux">Photo Gallery</span>
                                        <hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-6z c1-70 c1-z c1-1g c1-11 c1-71 c1-2w c1-6s c1-6u c1-6w c1-6x c1-6y x-d-ux"
                                        />
                                    </h4>
                                    <div id="bs-5">
                                        <div>
                                            <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1n c1-1o c1-1p c1-1q c1-10 c1-19 c1-11 c1-1a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1o c1-23 c1-24 c1-4r c1-1f c1-26 c1-3i c1-28 c1-3h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8e c1-8f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                        <div id="bricks-container-43" style="width:auto !important">
                                                            <div data-ux="GridCell" data-aid="GALLERY_IMAGE0_CELL_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-1o c1-23 c1-24 c1-8g c1-8h c1-8i c1-8j c1-8k c1-8l c1-4 c1-b c1-c c1-d c1-8m c1-8n c1-e c1-f c1-g x-d-ux x-d-aid"><img src="//img1.wsimg.com/isteam/stock/8531/:/rs=w:370,m,cg:true" srcSet="//img1.wsimg.com/isteam/stock/8531/:/rs=w:370,m,cg:true,
//img1.wsimg.com/isteam/stock/8531/:/rs=w:555,m,cg:true 1.5x,
//img1.wsimg.com/isteam/stock/8531/:/rs=w:740,m,cg:true 2x,
//img1.wsimg.com/isteam/stock/8531/:/rs=w:1110,m,cg:true 3x" alt="image1" data-ux="Image" data-route="" data-aid="GALLERY_IMAGE0_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1f c1-4 c1-1b c1-1c c1-10 c1-11 c1-8o c1-34 c1-8p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid"
                                                                /></div>
                                                            <div data-ux="GridCell" data-aid="GALLERY_IMAGE1_CELL_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-1o c1-23 c1-24 c1-8g c1-8h c1-8i c1-8j c1-8k c1-8l c1-4 c1-b c1-c c1-d c1-8m c1-8n c1-e c1-f c1-g x-d-ux x-d-aid"><img src="//img1.wsimg.com/isteam/stock/87640/:/rs=w:370,m,cg:true" srcSet="//img1.wsimg.com/isteam/stock/87640/:/rs=w:370,m,cg:true,
//img1.wsimg.com/isteam/stock/87640/:/rs=w:555,m,cg:true 1.5x,
//img1.wsimg.com/isteam/stock/87640/:/rs=w:740,m,cg:true 2x,
//img1.wsimg.com/isteam/stock/87640/:/rs=w:1110,m,cg:true 3x" alt="image2" data-ux="Image" data-route="" data-aid="GALLERY_IMAGE1_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1f c1-4 c1-1b c1-1c c1-10 c1-11 c1-8o c1-34 c1-8p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid"
                                                                /></div>
                                                            <div data-ux="GridCell" data-aid="GALLERY_IMAGE2_CELL_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-1o c1-23 c1-24 c1-8g c1-8h c1-8i c1-8j c1-8k c1-8l c1-4 c1-b c1-c c1-d c1-8m c1-8n c1-e c1-f c1-g x-d-ux x-d-aid"><img src="//img1.wsimg.com/isteam/stock/88379/:/rs=w:370,m,cg:true" srcSet="//img1.wsimg.com/isteam/stock/88379/:/rs=w:370,m,cg:true,
//img1.wsimg.com/isteam/stock/88379/:/rs=w:555,m,cg:true 1.5x,
//img1.wsimg.com/isteam/stock/88379/:/rs=w:740,m,cg:true 2x,
//img1.wsimg.com/isteam/stock/88379/:/rs=w:1110,m,cg:true 3x" alt="image3" data-ux="Image" data-route="" data-aid="GALLERY_IMAGE2_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1f c1-4 c1-1b c1-1c c1-10 c1-11 c1-8o c1-34 c1-8p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid"
                                                                /></div>
                                                            <div data-ux="GridCell" data-aid="GALLERY_IMAGE3_CELL_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-1o c1-23 c1-24 c1-8g c1-8h c1-8i c1-8j c1-8k c1-8l c1-4 c1-b c1-c c1-d c1-8m c1-8n c1-e c1-f c1-g x-d-ux x-d-aid"><img src="//img1.wsimg.com/isteam/stock/88671/:/rs=w:370,m,cg:true" srcSet="//img1.wsimg.com/isteam/stock/88671/:/rs=w:370,m,cg:true,
//img1.wsimg.com/isteam/stock/88671/:/rs=w:555,m,cg:true 1.5x,
//img1.wsimg.com/isteam/stock/88671/:/rs=w:740,m,cg:true 2x,
//img1.wsimg.com/isteam/stock/88671/:/rs=w:1110,m,cg:true 3x" alt="image4" data-ux="Image" data-route="" data-aid="GALLERY_IMAGE3_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1f c1-4 c1-1b c1-1c c1-10 c1-11 c1-8o c1-34 c1-8p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid"
                                                                /></div>
                                                            <div data-ux="GridCell" data-aid="GALLERY_IMAGE4_CELL_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-1o c1-23 c1-24 c1-8g c1-8h c1-8i c1-8j c1-8k c1-8l c1-4 c1-b c1-c c1-d c1-8m c1-8n c1-e c1-f c1-g x-d-ux x-d-aid"><img src="//img1.wsimg.com/isteam/stock/99287/:/rs=w:370,m,cg:true" srcSet="//img1.wsimg.com/isteam/stock/99287/:/rs=w:370,m,cg:true,
//img1.wsimg.com/isteam/stock/99287/:/rs=w:555,m,cg:true 1.5x,
//img1.wsimg.com/isteam/stock/99287/:/rs=w:740,m,cg:true 2x,
//img1.wsimg.com/isteam/stock/99287/:/rs=w:1110,m,cg:true 3x" alt="image5" data-ux="Image" data-route="" data-aid="GALLERY_IMAGE4_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1f c1-4 c1-1b c1-1c c1-10 c1-11 c1-8o c1-34 c1-8p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid"
                                                                /></div>
                                                            <div data-ux="GridCell" data-aid="GALLERY_IMAGE5_CELL_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-1o c1-23 c1-24 c1-8g c1-8h c1-8i c1-8j c1-8k c1-8l c1-4 c1-b c1-c c1-d c1-8m c1-8n c1-e c1-f c1-g x-d-ux x-d-aid"><img src="//img1.wsimg.com/isteam/stock/Agd00wa/:/rs=w:370,m,cg:true" srcSet="//img1.wsimg.com/isteam/stock/Agd00wa/:/rs=w:370,m,cg:true,
//img1.wsimg.com/isteam/stock/Agd00wa/:/rs=w:555,m,cg:true 1.5x,
//img1.wsimg.com/isteam/stock/Agd00wa/:/rs=w:740,m,cg:true 2x,
//img1.wsimg.com/isteam/stock/Agd00wa/:/rs=w:1110,m,cg:true 3x" alt="image6" data-ux="Image" data-route="" data-aid="GALLERY_IMAGE5_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1f c1-4 c1-1b c1-1c c1-10 c1-11 c1-8o c1-34 c1-8p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid"
                                                                /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div id="60f54465-3b85-4c88-aa89-2e40299ac81f" class="widget widget-contact widget-contact-contact-4">
                    <div data-ux="WidgetSplit" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div>
                            <div data-ux="ContainerSplit" class="x-el x-el-div c1-1 c1-2 c1-1a c1-19 c1-3h c1-3i c1-1f c1-1n c1-4y c1-t c1-3 c1-8q c1-b c1-c c1-d c1-6a c1-6b c1-8r c1-e c1-f c1-g x-d-ux">
                                <div data-ux="SplitItem" class="x-el x-el-div c1-1 c1-2 c1-1n c1-23 c1-6d c1-1f c1-t c1-b c1-c c1-6e c1-6f c1-6g c1-d c1-2g c1-6h c1-2o c1-6i c1-e c1-f c1-g x-d-ux">
                                    <section data-ux="SectionSplit" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-4 c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                        <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-1h c1-d c1-1i c1-e c1-1l c1-f c1-1m c1-g x-d-ux">
                                            <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-6m c1-6n c1-2j c1-6o c1-e c1-f c1-g x-d-ux">
                                                <h4 typography="HeadingBeta" data-ux="SectionSplitHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h4 c1-1 c1-2 c1-2s c1-2r c1-6p c1-1a c1-19 c1-10 c1-6q c1-6r c1-1t c1-2w c1-6s c1-55 c1-3c c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-2w c1-6s c1-6u c1-6w c1-6x c1-6y x-d-ux">Contact Us</span>
                                                    <hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-6z c1-70 c1-z c1-1g c1-11 c1-71 c1-2w c1-6s c1-6u c1-6w c1-6x c1-6y x-d-ux"
                                                    />
                                                </h4>
                                                <div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-1t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-6q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                        <h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-1 c1-2 c1-2s c1-2r c1-3k c1-1a c1-19 c1-10 c1-7k c1-b c1-55 c1-56 c1-3c c1-57 c1-58 c1-59 c1-5a x-d-ux x-d-aid x-d-route">Better yet, see us in person!</h4>
                                                        <div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-2s c1-2r c1-5b c1-10 c1-7k c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-b c1-64 c1-c c1-3c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt">
                                                            <p style="margin:0"><span>We love our customers, so feel free to visit during normal business hours.</span></p>
                                                        </div>
                                                    </div>
                                                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-6q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                        <h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-1 c1-2 c1-2s c1-2r c1-3k c1-1a c1-19 c1-10 c1-7k c1-b c1-55 c1-56 c1-3c c1-57 c1-58 c1-59 c1-5a x-d-ux x-d-aid x-d-route">amidas</h4>
                                                    </div>
                                                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                            <h4 typography="HeadingDelta" data-ux="ContentHeading" data-route="hoursTitle" data-aid="CONTACT_HOURS_TITLE_REND" data-field-route="/hours" class="x-el x-el-h4 c1-1 c1-2 c1-2s c1-2r c1-3k c1-1a c1-19 c1-10 c1-7k c1-b c1-55 c1-56 c1-3c c1-57 c1-58 c1-59 c1-5a x-d-ux x-d-route x-d-aid x-d-field-route">Hours</h4>
                                                            <div data-ux="Block" data-aid="CONTACT_HOURS_REND" data-route="structuredHours" data-field-route="/hours" class="x-el x-el-div c1-1 c1-2 c1-7k c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route">
                                                                <div id="bs-6">
                                                                    <table style="border-spacing:0;text-align:left;display:inline-table">
                                                                        <tr data-aid="CONTACT_HOURS_COLLAPSED_REND" style="cursor:pointer">
                                                                            <td style="padding-right:medium">
                                                                                <p typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_HOURS_COLLAPSED_LABEL" class="x-el x-el-p c1-1 c1-2 c1-2s c1-2r c1-5b c1-10 c1-11 c1-b c1-64 c1-c c1-3c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">Open today</p>
                                                                            </td>
                                                                            <td>
                                                                                <p typography="BodyAlpha" data-ux="ContentText" class="x-el x-el-p c1-1 c1-2 c1-2s c1-2r c1-5b c1-10 c1-11 c1-8t c1-8l c1-b c1-64 c1-c c1-3c c1-d c1-e c1-f c1-g x-d-ux"><span rel="" typography="LinkAlpha" data-ux="Link" data-aid="CONTACT_HOURS_COLLAPSED_HR_LABEL" class="x-el x-el-span c1-30 c1-31 c1-32 c1-2s c1-2r c1-33 c1-34 c1-b c1-8u c1-c c1-36 c1-8v c1-8w c1-d c1-e c1-f c1-g x-d-ux x-d-aid"
                                                                                        data-tccl="ux2.CONTACT.contact4.Content.Default.Link.Default.44.click,click">09:00 am – 05:00 pm</span></p>
                                                                            </td>
                                                                            <td>
                                                                                <p typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_HOURS_COLLAPSED_ARROW" class="x-el x-el-p c1-1 c1-2 c1-2s c1-2r c1-5b c1-10 c1-11 c1-b c1-64 c1-c c1-3c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><span rel="" typography="LinkAlpha" data-ux="Link" class="x-el x-el-span c1-30 c1-31 c1-32 c1-2s c1-2r c1-1n c1-34 c1-8x c1-b c1-8u c1-c c1-36 c1-8v c1-8w c1-d c1-e c1-f c1-g x-d-ux"
                                                                                        data-tccl="ux2.CONTACT.contact4.Group.Default.Link.Default.45.click,click"><svg viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px" data-ux="Icon" class="x-el x-el-svg c1-1 c1-2 c1-8y c1-2v c1-8z c1-90 c1-8o c1-t c1-91 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><path fill-rule="evenodd" d="M19.544 7.236a.773.773 0 0 1-.031 1.06l-7.883 7.743-7.42-7.742a.773.773 0 0 1 0-1.061.699.699 0 0 1 1.017 0l6.433 6.713 6.868-6.745a.698.698 0 0 1 1.016.032"></path></svg></span></p>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div typography="BodyAlpha" data-ux="ContentText" data-route="hoursCustomMessage" data-aid="CONTACT_HOURS_CUST_MSG_REND" data-field-route="/hours" class="x-el x-el-p c1-1 c1-2 c1-2s c1-2r c1-5b c1-10 c1-11 c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-b c1-64 c1-c c1-3c c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid x-d-field-route x-rt"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div id="60f54465-3b85-4c88-aa89-2e40299ac81f-bootstrap-container">
                                                            <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-92 c1-e c1-f c1-g x-d-ux">
                                                                <div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_MOBILE" class="x-el x-el-div c1-1 c1-2 c1-v c1-b c1-c c1-d c1-3m c1-e c1-f c1-g x-d-ux x-d-aid"><button typography="ButtonAlpha" data-ux="Button" data-aid="CONTACT_FORM_REVEAL_BUTTON_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-button c1-43 c1-44 c1-45 c1-46 c1-47 c1-48 c1-2a c1-49 c1-2v c1-1t c1-32 c1-34 c1-2r c1-2s c1-1f c1-4 c1-4b c1-93 c1-b c1-35 c1-4d c1-4e c1-3t c1-8a c1-4g c1-8b c1-4i c1-3u c1-4j c1-3v c1-8c c1-4l c1-4m c1-4n c1-3w c1-3x x-d-ux x-d-aid x-d-route x-d-field-route"
                                                                        data-tccl="ux2.CONTACT.contact4.Content.Default.Button.Default.47.click,click">Drop us a line!</button></div>
                                                                <div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_DESKTOP" class="x-el x-el-div c1-1 c1-2 c1-12 c1-94 c1-b c1-c c1-d c1-w c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                    <div>
                                                                        <div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_DESKTOP_REND" class="x-el x-el-div c1-1 c1-2 c1-3r c1-95 c1-3s c1-96 c1-97 c1-98 c1-99 c1-9a c1-9b c1-9c c1-4 c1-3 c1-1n c1-7j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                            <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-3 c1-1d c1-1e c1-9d c1-9e c1-t c1-1n c1-4y c1-7j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                                <h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c1-1 c1-2 c1-2s c1-2r c1-3k c1-1a c1-19 c1-10 c1-7k c1-b c1-55 c1-56 c1-3c c1-57 c1-58 c1-59 c1-5a x-d-ux x-d-aid x-d-route x-d-field-route">Drop us a line!</h4>
                                                                                <form data-ux="Form" aria-live="polite" id="contact-form48" formFieldVariationOptions="[object Object]" formTitle="Drop us a line!" formFields="[object Object],[object Object],[object Object],[object Object]"
                                                                                    formSubmitHost="https://contact.apps-api.instantpage.secureserver.net" recaptchaType="V3" domainName="amidas.godaddysites.com" formSuccessMessage="Thank you for your inquiry! We will get back to you within 48 hours."
                                                                                    websiteId="c4e4d647-9b58-426a-ba9d-8dcc80993a6c" pageId="2dbc3c68-54c1-4511-8f4b-14af5ec7c5f0" accountId="cbb3d115-391a-11ea-81c1-3417ebe7253b" staticContent="[object Object]"
                                                                                    emailOptInMessage="Sign up for our email list for updates, promotions, and more." emailConfirmationMessage="We&#x27;ve sent you a confirmation email, please click the link to verify your address."
                                                                                    infoTitle="Better yet, see us in person!" info="We love our customers, so feel free to visit during normal business hours." class="x-el x-el-form c1-1 c1-2 c1-11 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><input type="text" name="_app_id" autoComplete="off" tabindex="-1" style="display:none" value="" />
                                                                                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                                        <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1n c1-1o c1-1p c1-1q c1-10 c1-1r c1-11 c1-1s c1-b c1-c c1-1w c1-1x c1-1y c1-1z c1-d c1-e c1-f c1-g x-d-ux">
                                                                                            <div data-ux="GridCell" data-aid="CONTACT_FORM_COL1" class="x-el x-el-div c1-1 c1-2 c1-1o c1-23 c1-24 c1-25 c1-1f c1-26 c1-27 c1-28 c1-29 c1-b c1-c c1-2c c1-2d c1-2e c1-2f c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-9d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                                                    <div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">
                                                                                                        <div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input49" value="" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c1-1 c1-2 c1-3 c1-7n c1-4 c1-7o c1-7p c1-y c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-z c1-b c1-7w c1-3t c1-3c c1-7x c1-4g c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-3u c1-3v c1-3w c1-3x x-d-ux x-d-aid"
                                                                                                            /><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input49" class="x-el x-el-label c1-1 c1-2 c1-2s c1-2r c1-3r c1-86 c1-87 c1-88 c1-89 c1-b c1-7w c1-3t c1-3c c1-3u c1-3v c1-3w c1-3x x-d-ux">Name</label></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-9d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                                                    <div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">
                                                                                                        <div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input50" value="" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c1-1 c1-2 c1-3 c1-7n c1-4 c1-7o c1-7p c1-y c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-z c1-b c1-7w c1-3t c1-3c c1-7x c1-4g c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-3u c1-3v c1-3w c1-3x x-d-ux x-d-aid"
                                                                                                            /><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input50" class="x-el x-el-label c1-1 c1-2 c1-2s c1-2r c1-3r c1-86 c1-87 c1-88 c1-89 c1-b c1-7w c1-3t c1-3c c1-3u c1-3v c1-3w c1-3x x-d-ux">Email*</label></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-9d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                                                    <div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="4" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" class="x-el x-el-textarea c1-1 c1-2 c1-3 c1-7n c1-4 c1-7o c1-7p c1-y c1-7q c1-7r c1-45 c1-46 c1-7u c1-7v c1-z c1-9f c1-b c1-7w c1-3t c1-3c c1-7x c1-4g c1-84 c1-85 c1-3u c1-3v c1-3w c1-3x x-d-ux x-d-aid"></textarea></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                                            <div data-ux="Block" data-aid="CONTACT_FORM_CONTROLS" class="x-el x-el-div controls c1-1 c1-2 c1-9g c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click"
                                                                                                    state="default" class="x-el x-el-button c1-43 c1-44 c1-45 c1-46 c1-47 c1-48 c1-2a c1-49 c1-2v c1-1t c1-32 c1-34 c1-2r c1-2s c1-1f c1-4 c1-4b c1-b c1-35 c1-4d c1-4e c1-3t c1-8a c1-4g c1-8b c1-4i c1-3u c1-4j c1-3v c1-8c c1-4l c1-4m c1-4n c1-3w c1-3x x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button>
                                                                                                <span
                                                                                                    typography="BodyAlpha" data-ux="Text" data-aid="CONTACT_CANCEL_BUTTON_REND" class="x-el x-el-span c1-1 c1-2 c1-2s c1-2r c1-5b c1-10 c1-11 c1-9h c1-68 c1-8u c1-1t c1-33 c1-19 c1-9i c1-b c1-c c1-3c c1-9j c1-d c1-e c1-f c1-g x-d-ux x-d-aid">Cancel</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div style="width:1px;height:1px;visibility:hidden"></div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button typography="ButtonAlpha" data-ux="Button" data-aid="CONTACT_FORM_REVEAL_BUTTON_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-button c1-43 c1-44 c1-45 c1-46 c1-47 c1-48 c1-2a c1-49 c1-2v c1-1t c1-32 c1-34 c1-2r c1-2s c1-1f c1-4 c1-4b c1-93 c1-b c1-35 c1-4d c1-4e c1-3t c1-8a c1-4g c1-8b c1-4i c1-3u c1-4j c1-3v c1-8c c1-4l c1-4m c1-4n c1-3w c1-3x x-d-ux x-d-aid x-d-route x-d-field-route"
                                                                                data-tccl="ux2.CONTACT.contact4.Content.Default.Button.Default.51.click,click">Drop us a line!</button></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="84018e6c-a859-4f30-b691-b5ffe8050167" class="widget widget-footer widget-footer-footer-2">
                    <div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div>
                            <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-98 c1-99 c1-b c1-c c1-9k c1-9l c1-d c1-e c1-f c1-g x-d-ux">
                                <div data-ux="Divider" class="x-el x-el-div c1-1 c1-2 c1-3 c1-9g c1-9d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                    <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-1h c1-d c1-1i c1-e c1-1l c1-f c1-1m c1-g x-d-ux">
                                        <hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-7n c1-y c1-z c1-10 c1-11 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux" />
                                    </div>
                                </div>
                                <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-1h c1-d c1-1i c1-e c1-1l c1-f c1-1m c1-g x-d-ux">
                                    <div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1n c1-1o c1-1p c1-1q c1-10 c1-19 c1-11 c1-1a c1-50 c1-1t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1o c1-9m c1-24 c1-25 c1-1f c1-26 c1-3i c1-28 c1-3h c1-b c1-c c1-d c1-9n c1-9o c1-e c1-f c1-g x-d-ux">
                                                <div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-2s c1-2r c1-5b c1-10 c1-11 c1-b c1-9p c1-3t c1-3c c1-3u c1-6l c1-3v c1-3w c1-3x x-d-ux x-d-aid x-d-route x-rt">
                                                    <p style="margin:0"><span>Copyright © 2020 amidas - All Rights Reserved.</span></p>
                                                </div>
                                            </div>
                                            <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1o c1-9m c1-24 c1-25 c1-1f c1-26 c1-3i c1-28 c1-3h c1-b c1-c c1-d c1-9n c1-9o c1-e c1-f c1-g x-d-ux">
                                                <p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-2s c1-2r c1-5b c1-9q c1-11 c1-b c1-9p c1-3t c1-3c c1-3u c1-9r c1-6m c1-3v c1-3w c1-3x x-d-ux x-d-aid x-d-route"><span></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1c c1-1d c1-1e c1-1f c1-1t c1-9s c1-b c1-c c1-1h c1-d c1-1i c1-e c1-1l c1-f c1-1m c1-g x-d-ux">
                                    <ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-9t c1-26 c1-3i c1-28 c1-3h c1-10 c1-19 c1-11 c1-1a c1-9u c1-b c1-c c1-2b c1-9v c1-d c1-e c1-f c1-g x-d-ux"></ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.53.js" crossorigin></script>
    <script type="text/javascript">
        window.cxs && window.cxs.setOptions({
            prefix: "c2-"
        });
    </script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/4f9ea0579cb9d411/script.js" crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2c17300d98a3b3c6/script.js" crossorigin></script>
    <script type="text/javascript">
        window.wsb['context-bs-1'] = {
            "renderMode": "PUBLISH",
            "viewDevice": "TABLET_RENDER_DEVICE",
            "fonts": ["muli", "default", ""],
            "colors": ["#46676D"],
            "fontScale": "medium",
            "locale": "en-US",
            "language": "en",
            "internalLinks": {},
            "isHomepage": true,
            "navigationMap": {
                "2dbc3c68-54c1-4511-8f4b-14af5ec7c5f0": {
                    "isFlyoutMenu": false,
                    "active": true,
                    "pageId": "2dbc3c68-54c1-4511-8f4b-14af5ec7c5f0",
                    "name": "Home",
                    "href": "\u002F",
                    "target": "",
                    "visible": true,
                    "requiresAuth": false,
                    "rel": "",
                    "type": "page",
                    "showInFooter": false
                }
            },
            "theme": "Theme21"
        };
    </script>
    <script type="text/javascript">
        (function(props, context) {
            Core.utils.renderBootstrap({
                elId: 'bs-1',
                componentName: 'LogoText',
                props: props,
                context: context,
                contextKey: 'context-bs-1'
            });
        })({
            "logoStyle": {
                "fontSize": "xxlarge",
                "fontFamily": "primary",
                "color": "highContrast"
            },
            "logo": {
                "logoText": "amidas"
            },
            "isBigLogo": true,
            "fontPackLogoId": null,
            "maxLines": 8,
            "widgetId": "fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6",
            "section": "default",
            "category": "primary",
            "locale": "en-US",
            "renderMode": "PUBLISH",
            "viewDevice": "TABLET_RENDER_DEVICE"
        }, {
            "widgetId": "fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6",
            "widgetType": "HEADER",
            "widgetPreset": "header9",
            "section": "default",
            "category": "primary",
            "fontSize": "medium",
            "fontFamily": "alternate",
            "group": "Logo",
            "groupType": "Default"
        });
    </script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9024daa7fc990e3a/script.js" crossorigin></script>
    <script type="text/javascript">
        (function(props, context) {
            Core.utils.renderBootstrap({
                elId: 'bs-2',
                componentName: 'DynamicTagline',
                props: props,
                context: context,
                contextKey: 'context-bs-1'
            });
        })({
            "children": "Get your daily dose!",
            "scaledFontSizes": ["medium", "small", "xsmall"],
            "style": {},
            "tag": "h1",
            "data-aid": "HEADER_TAGLINE_RENDERED",
            "data-route": "tagline",
            "widgetId": "fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6",
            "section": "default",
            "category": "primary",
            "locale": "en-US",
            "renderMode": "PUBLISH",
            "viewDevice": "TABLET_RENDER_DEVICE"
        }, {
            "widgetId": "fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6",
            "widgetType": "HEADER",
            "widgetPreset": "header9",
            "section": "default",
            "category": "primary",
            "fontSize": "medium",
            "fontFamily": "alternate",
            "group": "Hero",
            "groupType": "Default"
        });
    </script>
    <script type="text/javascript">
        ! function(n) {
            var t = {};

            function o(e) {
                if (t[e]) return t[e].exports;
                var r = t[e] = {
                    i: e,
                    l: !1,
                    exports: {}
                };
                return n[e].call(r.exports, r, r.exports, o), r.l = !0, r.exports
            }
            o.m = n, o.c = t, o.d = function(n, t, e) {
                o.o(n, t) || Object.defineProperty(n, t, {
                    configurable: !1,
                    enumerable: !0,
                    get: e
                })
            }, o.n = function(n) {
                var t = n && n.__esModule ? function() {
                    return n.default
                } : function() {
                    return n
                };
                return o.d(t, "a", t), t
            }, o.o = function(n, t) {
                return Object.prototype.hasOwnProperty.call(n, t)
            }, o.p = "", o(o.s = 0)
        }([function(n, t, o) {
            "use strict";
            window.wsb = window.wsb || {}, window.wsb.CTAButton = window.wsb.CTAButton || o(1).components.CTAButton
        }, function(n, t) {
            n.exports = Core
        }]);
    </script>
    <script type="text/javascript">
        (function(props, context) {
            Core.utils.renderBootstrap({
                elId: 'bs-3',
                componentName: 'CTAButton',
                props: props,
                context: context,
                contextKey: 'context-bs-1'
            });
        })({
            "ctaButton": {
                "enabled": true,
                "label": "Contact Me",
                "pageId": "2dbc3c68-54c1-4511-8f4b-14af5ec7c5f0",
                "linkId": "309ac58f-b398-4d43-bb53-bc884d0c7e55",
                "widgetId": "",
                "url": "",
                "target": ""
            },
            "data-aid": "HEADER_CTA_BTN",
            "style": {
                "marginTop": "small",
                "backgroundColor": "action",
                "width": "auto"
            },
            "data-tccl": "ux2.header.cta_button.click,click",
            "widgetId": "fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6",
            "section": "default",
            "category": "primary",
            "locale": "en-US",
            "renderMode": "PUBLISH",
            "viewDevice": "TABLET_RENDER_DEVICE"
        }, {
            "widgetId": "fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6",
            "widgetType": "HEADER",
            "widgetPreset": "header9",
            "section": "default",
            "category": "primary",
            "fontSize": "medium",
            "fontFamily": "alternate",
            "group": "Group",
            "groupType": "Default"
        });
    </script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/844bdf109a43fe63/script.js" crossorigin></script>
    <script type="text/javascript">
        (function(props, context) {
            Core.utils.renderBootstrap({
                elId: 'bs-4',
                componentName: 'HeaderVideoBackground',
                props: props,
                context: context,
                contextKey: 'context-bs-1'
            });
        })({
            "videoStyle": {
                "width": "100%",
                "@md": {
                    "minWidth": "350px",
                    "height": "100%",
                    "objectFit": "cover"
                }
            },
            "videoBackground": "\u002F\u002Fwebsites.godaddy.com\u002Fcategories\u002Fv4\u002Fvideos\u002Fvideo\u002FuGbA6v1EwwF20VGXJ",
            "videoPoster": "\u002F\u002Fimg1.wsimg.com\u002Fisteam\u002Fvideos\u002FuGbA6v1EwwF20VGXJ",
            "dataRoute": "hasMedia:mediaData",
            "widgetId": "fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6",
            "section": "default",
            "category": "primary",
            "locale": "en-US",
            "renderMode": "PUBLISH",
            "viewDevice": "TABLET_RENDER_DEVICE"
        }, {
            "widgetId": "fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6",
            "widgetType": "HEADER",
            "widgetPreset": "header9",
            "section": "default",
            "category": "primary",
            "fontSize": "medium",
            "fontFamily": "alternate",
            "group": "Section",
            "groupType": "Default"
        });
    </script>
    <script type="text/javascript">
        Number(window.vctElements) || (window.vctElements = 0), window.vctElements++, window.markVisuallyComplete();
    </script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/b79b9a28667dda4c/script.js" crossorigin></script>
    <script type="text/javascript">
        window.wsb['context-b40efa80-968e-417a-9960-a54d4e76c7f9-bootstrap-container'] = {
            "renderMode": "PUBLISH",
            "fonts": ["muli", "default", ""],
            "colors": ["#46676D"],
            "fontScale": "medium",
            "locale": "en-US",
            "language": "en",
            "internalLinks": {},
            "isHomepage": true,
            "navigationMap": {
                "2dbc3c68-54c1-4511-8f4b-14af5ec7c5f0": {
                    "isFlyoutMenu": false,
                    "active": true,
                    "pageId": "2dbc3c68-54c1-4511-8f4b-14af5ec7c5f0",
                    "name": "Home",
                    "href": "\u002F",
                    "target": "",
                    "visible": true,
                    "requiresAuth": false,
                    "rel": "",
                    "type": "page",
                    "showInFooter": false
                }
            },
            "theme": "Theme21"
        };
    </script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/gpub/d12d14598cb5d50e/script.js" crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/5f8150ce55f22aff/script.js" crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/gpub/9ba83ca3da78ad51/script.js" crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2f76d8ff4bd4eba1/script.js" crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/gpub/658b32a7e13db789/script.js" crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/c40062615e78890b/script.js" crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/c4e4d647-9b58-426a-ba9d-8dcc80993a6c/gpub/ec658b9ca1deef04/script.js" crossorigin></script>
    <script type="text/javascript">
        document.getElementById('page-36').addEventListener('click', function() {}, false);
    </script>
    <script type="text/javascript">
        function tccl_dpsid() {
            for (var t = "dps_site_id=", i = document.cookie.split(";"), e = 0; e < i.length; e++) {
                for (var n = i[e];
                    " " == n.charAt(0);) n = n.substring(1);
                if (0 == n.indexOf(t)) return n.substring(t.length, n.length)
            }
            return null
        }
        _trfd.push({
            "tccl.baseHost": "secureserver.net"
        }), _trfd.push({
            "websiteId": "c4e4d647-9b58-426a-ba9d-8dcc80993a6c"
        }), _trfd.push({
            "pd": "2020-01-17T11:27:54.414Z"
        }), _trfd.push({
            ap: "IPv2",
            ds: tccl_dpsid() || "-1"
        });

        function addTccl() {
            if (Number(window.vctElements) && !window.VISUAL_COMPLETE) setTimeout(addTccl, 500);
            else {
                var t = document.createElement("script");
                t.setAttribute("src", "//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"), document.body.appendChild(t)
            }
        }
        addTccl();
    </script>
</body>

</html>
