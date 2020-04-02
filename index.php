<?php
$GLOBALS['_ta_campaign_key'] = 'b4139e33d506890472044baad2d293a7';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=b4139e33d506890472044baad2d293a7' parameter

require 'bootloader.php';

$campaign_id = '4hk06d';

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
<html lang="en-GB">

<head>
    <meta charSet="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Novateck</title>
    <meta name="author" content="Novateck" />
    <meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000" />
    <link rel="manifest" href="/manifest.webmanifest" />
    <link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m" />
    <link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m" />
    <link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m" />
    <link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m" />
    <link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m" />
    <link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m" />
    <link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m" />
    <link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m" />
    <meta property="og:site_name" content="Novateck" />
    <meta property="og:title" content="Designing a Gamer&#39;s World" />
    <meta property="og:description" content="Creating quality games, by gamers, for gamers!" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://img1.wsimg.com/isteam/stock/w6NayBl" />
    <meta property="og:locale" content="en_GB" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Novateck" />
    <meta name="twitter:description" content="Designing a Gamer&#39;s World" />
    <meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/w6NayBl" />
    <meta name="twitter:image:alt" content="Novateck" />
    <meta name="theme-color" content="#035ca9" />
    <script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-GB"
        crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2a4f73fcd74c5421/script.js" crossorigin></script>
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
Copyright 2016 The Cabin Project Authors (impallari@gmail.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/

        /* vietnamese */

        @font-face {
            font-family: 'Cabin';
            font-style: normal;
            font-weight: 700;
            src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhquylWeg.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Cabin';
            font-style: normal;
            font-weight: 700;
            src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhruylWeg.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Cabin';
            font-style: normal;
            font-weight: 700;
            src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhluyk.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /*
Copyright (c) 2010-2011 by tyPoland Lukasz Dziedzic (team@latofonts.com) with Reserved Font Name "Lato". Licensed under the SIL Open Font License, Version 1.1.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/

        /* latin-ext */

        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 400;
            src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAUi-qJCY.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 400;
            src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAXC-q.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 700;
            src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_FQft1dw.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 700;
            src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_Gwft.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 100;
            src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AUi-qJCY.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 100;
            src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AXC-q.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 300;
            src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwaPGR_p.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 300;
            src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwiPGQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjxAwXjeu.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjx4wXg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwaPGR_p.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwiPGQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 900;
            src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwaPGR_p.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 900;
            src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwiPGQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <link rel="stylesheet" href="//img1.wsimg.com/blobby/go/6fd06233-d5b2-4f56-b37c-4e07ee47ca4a/gpub/5c2b28b7ec7cfd8c/styles.css" />
    <link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/6fd06233-d5b2-4f56-b37c-4e07ee47ca4a/gpub/4e483c86505a32d7/styles.css" />
    <style data-glamor="cxs-media-sheet" type="text/css"></style>
    <style data-glamor="cxs-xs-sheet" type="text/css">
        @media (max-width: 767px) {
            .x .c1-k {
                padding-top: 40px
            }
        }

        @media (max-width: 767px) {
            .x .c1-l {
                padding-bottom: 40px
            }
        }

        @media (max-width: 767px) {
            .x .c1-1p {
                width: 100%
            }
        }

        @media (max-width: 767px) {
            .x .c1-1q {
                display: flex
            }
        }

        @media (max-width: 767px) {
            .x .c1-1r {
                justify-content: center
            }
        }

        @media (max-width: 767px) {
            .x .c1-60> :nth-child(n) {
                margin-bottom: 24px
            }
        }

        @media (max-width: 767px) {
            .x .c1-61> :last-child {
                margin-bottom: 0 !important
            }
        }

        @media (max-width: 767px) {
            .x .c1-9g {
                margin-top: 0px
            }
        }

        @media (max-width: 767px) {
            .x .c1-9h {
                margin-bottom: 0px
            }
        }

        @media (max-width: 767px) {
            .x .c1-9j {
                padding-bottom: 32px
            }
        }

        @media (max-width: 767px) {
            .x .c1-9m {
                flex-direction: column
            }
        }
    </style>
    <link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/6fd06233-d5b2-4f56-b37c-4e07ee47ca4a/gpub/e34a5c8e1a0b0d6/styles.css" />
    <link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/6fd06233-d5b2-4f56-b37c-4e07ee47ca4a/gpub/2aa230f8a3224fae/styles.css" />
    <style data-glamor="cxs-lg-sheet" type="text/css">
        @media (min-width: 1280px) {
            .x .c1-f {
                font-size: 16px
            }
        }

        @media (min-width: 1280px) {
            .x .c1-2e {
                font-size: 32px
            }
        }

        @media (min-width: 1280px) {
            .x .c1-39 {
                width: 1160px
            }
        }

        @media (min-width: 1280px) {
            .x .c1-58 {
                font-size: 62px
            }
        }

        @media (min-width: 1280px) {
            .x .c1-5i {
                font-size: 44px
            }
        }

        @media (min-width: 1280px) {
            .x .c1-7r {
                font-size: 14px
            }
        }

        @media (min-width: 1280px) {
            .x .c1-81 {
                font-size: 22px
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
            .x .c1-2f {
                font-size: 36px
            }
        }

        @media (min-width: 1536px) {
            .x .c1-3a {
                width: 1280px
            }
        }

        @media (min-width: 1536px) {
            .x .c1-4q {
                margin-bottom: 0.25em
            }
        }

        @media (min-width: 1536px) {
            .x .c1-59 {
                font-size: 70px
            }
        }

        @media (min-width: 1536px) {
            .x .c1-5j {
                font-size: 48px
            }
        }

        @media (min-width: 1536px) {
            .x .c1-7s {
                font-size: 16px
            }
        }

        @media (min-width: 1536px) {
            .x .c1-82 {
                font-size: 24px
            }
        }
    </style>
    <style type="text/css">
        .page-inner {
            background-color: rgb(255, 255, 255);
            min-height: 100vh;
        }
    </style>
</head>

<body class="x  x-fonts-cabin" context="[object Object]">
    <div id="layout-6-fd-06233-d-5-b-2-4-f-56-b-37-c-4-e-07-ee-47-ca-4-a" class="layout layout-layout layout-layout-layout-22 locale-en-GB lang-en">
        <div data-ux="Page" id="page-41694" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
            <div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                <div id="decb563d-2ffd-496b-8f45-a72d6081dd25" class="widget widget-header widget-header-header-9">
                    <div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                        <div>
                            <section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-j c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                            <nav data-ux="Container" class="x-el x-el-nav c1-1 c1-2 c1-m c1-n c1-o c1-p c1-q c1-r c1-3 c1-s c1-t c1-u c1-b c1-c c1-d c1-v c1-w c1-e c1-f c1-g x-d-ux">
                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-x c1-b c1-c c1-d c1-y c1-z c1-e c1-f c1-g x-d-ux">
                                                    <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-15 c1-16 c1-17 c1-18 c1-19 c1-1a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                        <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-t c1-p c1-u c1-1e c1-r c1-1f c1-1g c1-b c1-c c1-d c1-1h c1-1i c1-e c1-f c1-g x-d-ux">
                                                            <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1j c1-r c1-10 c1-1k c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                <div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1l c1-1m c1-1n c1-1o c1-q c1-4 c1-c c1-1p c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                    <a rel="" typography="LinkAlpha" data-ux="Link" data-page="e4a29574-7367-47ba-a97a-6afa99d5677a" title="cacccas" href="/" class="x-el x-el-a c1-1t c1-1u c1-1v c1-1w c1-1x c1-1y c1-1z c1-20 c1-21 c1-22 c1-23 c1-b c1-24 c1-c c1-25 c1-26 c1-27 c1-d c1-e c1-f c1-g x-d-ux x-d-page"
                                                                        data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.41698.click,click">
                                                                        <div id="bs-1">
                                                                            <h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-41699" logoText="cacccas" class="x-el x-el-h3 c1-1l c1-1m c1-1w c1-1x c1-28 c1-17 c1-15 c1-14 c1-16 c1-q c1-1o c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-1l c1-1m c1-1n c1-4 c1-2a c1-2g c1-25 c1-2h c1-1o c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-aid x-d-field-id x-d-field-route">cacccas</span></h3>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-10 c1-b c1-c c1-d c1-2i c1-e c1-f c1-g x-d-ux">
                                                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                        <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-2j c1-14 c1-2k c1-2l c1-2m c1-4 c1-1k c1-2n c1-b c1-c c1-2o c1-2p c1-2q c1-2r c1-d c1-e c1-f c1-g x-d-ux">
                                                            <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x c1-2y c1-1k c1-b c1-c c1-2z c1-30 c1-31 c1-32 c1-d c1-e c1-f c1-g x-d-ux"></div>
                                                            <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-33 c1-34 c1-2v c1-2w c1-2x c1-2y c1-b c1-c c1-2z c1-30 c1-31 c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                    <div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1l c1-1m c1-1n c1-1o c1-q c1-c c1-1p c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                        <a rel="" typography="LinkAlpha" data-ux="Link" data-page="e4a29574-7367-47ba-a97a-6afa99d5677a" title="cacccas" href="/" class="x-el x-el-a c1-1t c1-1u c1-1v c1-1w c1-1x c1-1y c1-1z c1-20 c1-21 c1-22 c1-23 c1-b c1-24 c1-c c1-25 c1-26 c1-27 c1-d c1-e c1-f c1-g x-d-ux x-d-page"
                                                                            data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.41700.click,click">
                                                                            <div id="bs-2">
                                                                                <h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-41701" logoText="cacccas" class="x-el x-el-h3 c1-1l c1-1m c1-1w c1-1x c1-28 c1-17 c1-15 c1-14 c1-16 c1-q c1-1o c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-1l c1-1m c1-1n c1-4 c1-2a c1-2g c1-25 c1-2h c1-1o c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-aid x-d-field-id x-d-field-route">cacccas</span></h3>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x c1-2y c1-10 c1-35 c1-b c1-c c1-2z c1-30 c1-31 c1-32 c1-d c1-e c1-f c1-g x-d-ux"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-r c1-b c1-c c1-d c1-36 c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="Container" data-field-id="background" class="x-el x-el-div c1-1 c1-2 c1-m c1-n c1-o c1-p c1-q c1-b c1-c c1-37 c1-d c1-38 c1-e c1-39 c1-f c1-3a c1-g x-d-ux x-d-field-id"><img src="//img1.wsimg.com/isteam/stock/w6NayBl/:/" alt="image20" data-ux="Image" data-aid="BACKGROUND_IMAGE_RENDERED" data-ht="Inset" class="x-el x-el-img c1-1 c1-2 c1-q c1-4 c1-m c1-n c1-14 c1-16 c1-3b c1-3c c1-3d c1-3e c1-3f c1-b c1-c c1-d c1-3g c1-3h c1-1i c1-3i c1-3j c1-e c1-f c1-g x-d-ux x-d-aid x-d-ht"
                                            /></div>
                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-10 c1-3k c1-1b c1-2s c1-3l c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-m c1-n c1-o c1-p c1-q c1-10 c1-3k c1-1b c1-2s c1-3l c1-3m c1-3n c1-3o c1-3p c1-b c1-c c1-37 c1-d c1-38 c1-3q c1-3r c1-3s c1-3t c1-3u c1-3v c1-e c1-39 c1-f c1-3a c1-g x-d-ux">
                                                    <div data-ux="HeroLeft" class="x-el x-el-div c1-1 c1-2 c1-2v c1-3w c1-1f c1-17 c1-15 c1-3x c1-3y c1-10 c1-3k c1-3n c1-4 c1-b c1-c c1-d c1-3z c1-40 c1-41 c1-42 c1-43 c1-e c1-f c1-g x-d-ux">
                                                        <div typography="HeadingBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-44 c1-1m c1-1w c1-1x c1-45 c1-14 c1-46 c1-47 c1-48 c1-3f c1-49 c1-4a c1-4b c1-4c c1-4d c1-4e c1-4f c1-4g c1-4h c1-4i c1-4j c1-34 c1-4k c1-4l c1-4m c1-4n c1-4o c1-b c1-c c1-29 c1-4p c1-d c1-e c1-f c1-4q c1-g x-d-ux x-d-aid x-d-route x-rt">
                                                            <p style="margin:0"><span>Creating quality games, by gamers, for gamers!</span></p>
                                                        </div>
                                                        <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-17 c1-15 c1-1e c1-4v c1-q c1-4w c1-b c1-c c1-37 c1-d c1-38 c1-e c1-39 c1-f c1-3a c1-g x-d-ux">
                                                            <h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-4x c1-1m c1-1w c1-1x c1-4y c1-17 c1-15 c1-14 c1-4z c1-47 c1-48 c1-x c1-49 c1-4a c1-4b c1-4c c1-50 c1-51 c1-52 c1-53 c1-4g c1-4h c1-3o c1-r c1-q c1-4o c1-b c1-29 c1-54 c1-4p c1-55 c1-56 c1-57 c1-58 c1-59 x-d-ux x-d-aid x-d-route"><span>Designing a Gamer&#x27;s World</span></h1>
                                                            <div id="bs-3">
                                                                <div data-ux="Element" typography="HeadingAlpha" id="tagline-container-41702" class="x-el x-el-div c1-4x c1-1m c1-1w c1-1x c1-28 c1-3f c1-54 c1-b c1-29 c1-4p c1-55 c1-2i c1-57 c1-58 c1-59 x-d-ux">
                                                                    <h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-4x c1-1m c1-1w c1-1x c1-4y c1-17 c1-15 c1-14 c1-4z c1-5a c1-47 c1-48 c1-1n c1-49 c1-4a c1-4b c1-4c c1-50 c1-51 c1-52 c1-53 c1-4g c1-4h c1-3o c1-r c1-q c1-4 c1-4o c1-54 c1-b c1-29 c1-4p c1-55 c1-57 c1-58 c1-59 x-d-ux x-d-aid x-d-route"><span>Designing a Gamer&#x27;s World</span></h1><span data-ux="Element" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-41702" class="x-el x-el-span c1-1l c1-1m c1-5b c1-x c1-5c c1-5d c1-5e c1-54 c1-1o c1-55 c1-57 c1-58 c1-59 x-d-ux x-d-size x-d-scaler-id">Designing a Gamer&#x27;s World</span>
                                                                    <span
                                                                        data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-41702" class="x-el x-el-span c1-1l c1-1m c1-5b c1-x c1-5c c1-5d c1-5e c1-5f c1-1o c1-5g c1-5h c1-5i c1-5j x-d-ux x-d-size x-d-scaler-id">Designing a Gamer&#x27;s World</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-41702" class="x-el x-el-span c1-1l c1-1m c1-5b c1-x c1-5c c1-5d c1-5e c1-2a c1-1o c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-size x-d-scaler-id">Designing a Gamer&#x27;s World</span></div>
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
                <div id="0fead98d-8106-460b-b8c7-f417866dc216" class="widget widget-introduction widget-introduction-introduction-4">
                    <div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div>
                            <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-5k c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux">
                                <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-m c1-n c1-o c1-p c1-q c1-b c1-c c1-37 c1-d c1-38 c1-e c1-39 c1-f c1-3a c1-g x-d-ux">
                                    <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-5l c1-16 c1-5m c1-1f c1-b c1-c c1-2o c1-2p c1-5n c1-2r c1-d c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-5o c1-3w c1-5p c1-b c1-c c1-5q c1-5r c1-5s c1-2z c1-30 c1-5t c1-32 c1-d c1-5u c1-5v c1-5w c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="ContentBasic" class="x-el x-el-div x-el c1-1 c1-2 c1-10 c1-3k c1-4 c1-5x c1-1k c1-1f c1-5y c1-5z c1-b c1-c c1-60 c1-61 c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                <h1 typography="HeadingGamma" data-ux="FeaturedHeading" data-aid="SECTION_TITLE_RENDERED" data-route="sectionTitle" data-promoted-from="4" data-order="0" class="x-el x-el-h1 c1-1l c1-1m c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-63 c1-64 c1-65 c1-66 c1-67 c1-1o c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-aid x-d-route x-d-promoted-from x-d-order">Find our Latest Games</h1>
                                                <div typography="BodyAlpha" data-ux="FeaturedText" alignment="center" data-aid="DESCRIPTION_TEXT" data-route="description" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-14 c1-16 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt">
                                                    <p style="margin:0"><span class="x-el x-el-span c1-72 c1-73 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">You can learn more about our games here on our website, including a schedule of preview plays on Twitch. For already released games, you can visit our Itch.io page to download games for your platform.&nbsp;</span></p>
                                                </div>
                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><a typography="ButtonAlpha" rel="noopener" data-ux="Button" data-aid="CTA_BUTTON_RENDERED" href="http://itch.io" target="_blank" data-tccl="ux2.INTRODUCTION.introduction4.Featured.Default.Button.Default.41703.click,click"
                                                        class="x-el x-el-a c1-74 c1-1m c1-t c1-u c1-75 c1-76 c1-77 c1-78 c1-1n c1-1f c1-1v c1-1z c1-1x c1-1w c1-q c1-4 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-3d c1-b c1-7i c1-2b c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s x-d-ux x-d-aid x-d-tccl">Get Games</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div id="89eca27c-e067-47fe-af9c-04393db5e426" class="widget widget-about widget-about-about-7">
                    <div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div>
                            <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-5k c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux">
                                <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-m c1-n c1-o c1-p c1-q c1-b c1-c c1-37 c1-d c1-38 c1-e c1-39 c1-f c1-3a c1-g x-d-ux">
                                    <h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-44 c1-1m c1-1w c1-1x c1-45 c1-17 c1-15 c1-14 c1-63 c1-7t c1-47 c1-48 c1-3f c1-7u c1-4a c1-4b c1-4c c1-4d c1-4e c1-7v c1-52 c1-53 c1-4g c1-4h c1-1f c1-b c1-c c1-29 c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" typography="HeadingBeta" class="">What We Do</span></h2>
                                    <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-5l c1-7w c1-5m c1-3m c1-b c1-c c1-2o c1-2p c1-2q c1-2r c1-d c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-7x c1-q c1-2v c1-5o c1-u c1-5p c1-b c1-c c1-2z c1-30 c1-31 c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/0" index="0" id="c0c50a49-fcef-49e7-abfc-d85567c68e05" class="x-el x-el-div x-el c1-1 c1-2 c1-r c1-10 c1-3k c1-1k c1-1f c1-2n c1-4 c1-5x c1-5y c1-5z c1-b c1-c c1-60 c1-61 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">
                                                <h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-aid x-d-field-id x-d-field-route">Our Games</h4>
                                                <div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-14 c1-16 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt">
                                                    <p style="margin:0"><span>Our first game, <span class="x-el x-el-span c1-1 c1-2 c1-4r c1-b c1-4s x-d-ux">The Legends of Dust, </span>was an RPG adventure that took players through the worlds of the Desert Kingdoms of Nome.
                                                        It received great reviews and Best Adventure from GenCon's ENnies. We are pleased to offer two continuations of that game in <span class="x-el x-el-span c1-1 c1-2 c1-4r c1-b c1-4s x-d-ux">The Myths of Fog</span>                                                        and <span class="x-el x-el-span c1-1 c1-2 c1-4r c1-b c1-4s x-d-ux">The Jaunty Effect</span>.&nbsp;</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-7x c1-q c1-2v c1-5o c1-u c1-5p c1-b c1-c c1-83 c1-84 c1-2z c1-30 c1-31 c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/1" index="1" id="f5e5e634-a5be-43f4-9de9-4b2d9d499289" class="x-el x-el-div x-el c1-1 c1-2 c1-r c1-10 c1-3k c1-1k c1-1f c1-2n c1-4 c1-5x c1-5y c1-5z c1-b c1-c c1-60 c1-61 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">
                                                <h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-aid x-d-field-id x-d-field-route">How It Works</h4>
                                                <div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-14 c1-16 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt">
                                                    <p style="margin:0"><span>Each game is just a starting point for our adventure. We like to stay connected to our players with meet-ups and gameplay events. Check out our events section or follow us on social media to see what is happening next.</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-7x c1-q c1-2v c1-5o c1-u c1-5p c1-b c1-c c1-83 c1-84 c1-2z c1-30 c1-31 c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/2" index="2" id="0fe3e7df-d2e2-4ff6-8c8b-3beddb4eb338" class="x-el x-el-div x-el c1-1 c1-2 c1-r c1-10 c1-3k c1-1k c1-1f c1-2n c1-4 c1-5x c1-5y c1-5z c1-b c1-c c1-60 c1-61 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">
                                                <h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-aid x-d-field-id x-d-field-route">Looking to the Future</h4>
                                                <div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-14 c1-16 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt">
                                                    <p style="margin:0"><span>We welcome your feedback and keep working to make each game better than the last. We work with online player services and tabletop tournaments to keep connected with you. Drop us a line, and have a voice in what we build next.</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div id="f2ef8d96-61ca-4b66-a0d9-688afa3dda3c" class="widget widget-gallery widget-gallery-gallery-4">
                    <div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div>
                            <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-5k c1-85 c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux">
                                <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-m c1-n c1-o c1-p c1-q c1-b c1-c c1-37 c1-d c1-38 c1-e c1-39 c1-f c1-3a c1-g x-d-ux">
                                    <h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-44 c1-1m c1-1w c1-1x c1-45 c1-17 c1-15 c1-14 c1-63 c1-7t c1-47 c1-48 c1-3f c1-7u c1-4a c1-4b c1-4c c1-4d c1-4e c1-7v c1-52 c1-53 c1-4g c1-4h c1-1f c1-b c1-c c1-29 c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" typography="HeadingBeta" class="">Photo Gallery</span></h2>
                                    <div id="bs-4">
                                        <div style="width:1px;height:1px;visibility:hidden"></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div id="94a50344-ae71-4626-8884-68a08765f219" class="widget widget-calendar widget-calendar-calendar-1">
                    <div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div>
                            <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-5k c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux">
                                <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-m c1-n c1-o c1-p c1-q c1-b c1-c c1-37 c1-d c1-38 c1-e c1-39 c1-f c1-3a c1-g x-d-ux">
                                    <div data-ux="Intro" class="x-el x-el-div x-el c1-1 c1-2 c1-63 c1-1f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                        <h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="CALENDAR_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-44 c1-1m c1-1w c1-1x c1-45 c1-17 c1-15 c1-14 c1-16 c1-7t c1-47 c1-48 c1-3f c1-7u c1-4a c1-4b c1-4c c1-4d c1-4e c1-7v c1-52 c1-53 c1-4g c1-4h c1-1f c1-b c1-c c1-29 c1-4p c1-d c1-40 c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" typography="HeadingBeta" class="">Events</span></h2>
                                    </div>
                                    <div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                        <div>
                                            <div id="94a50344-ae71-4626-8884-68a08765f219-bootstrap-container">
                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                    <style>
                                                        .cal-nav-arrow {
                                                            opacity: .8;
                                                            cursor: pointer;
                                                        }

                                                        .cal-nav-arrow:hover {
                                                            opacity: 1;
                                                        }
                                                    </style>
                                                    <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-5l c1-16 c1-5m c1-b c1-c c1-2o c1-2p c1-5n c1-2r c1-d c1-e c1-f c1-g x-d-ux">
                                                        <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-5o c1-3w c1-5p c1-b c1-c c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                            <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                    <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-86 c1-11 c1-12 c1-13 c1-14 c1-5l c1-16 c1-87 c1-4 c1-88 c1-2v c1-5k c1-b c1-c c1-2o c1-2p c1-5n c1-2r c1-d c1-e c1-f c1-g x-d-ux">
                                                                        <div data-ux="GridCell" data-field-id="events" data-field-route="/events/0" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-5o c1-3w c1-5p c1-b c1-c c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">
                                                                            <div data-ux="Grid" data-aid="CALENDAR_SMALLER_SCREEN_CONTAINER" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-15 c1-16 c1-17 c1-b c1-c c1-2o c1-2p c1-5n c1-2r c1-89 c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-7x c1-q c1-2v c1-5o c1-3w c1-1e c1-8a c1-b c1-c c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h3 typography="HeadingGamma" data-ux="DisplayHeading" class="x-el x-el-h3 c1-1l c1-1m c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-1o c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f x-d-ux">
                                                                                        <div data-ux="Block" data-aid="CALENDAR_EVENT_DATE" class="x-el x-el-div c1-1l c1-1m c1-1o c1-2a c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-aid">
                                                                                            <div data-ux="Block" data-field-id="events.date" data-field-route="/events/0" class="x-el x-el-div c1-1l c1-1m c1-1o c1-2a c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-field-id x-d-field-route">First Fridays</div>
                                                                                        </div>
                                                                                    </h3>
                                                                                </div>
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-7x c1-q c1-2v c1-4v c1-3w c1-1e c1-8a c1-b c1-c c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="events.title" data-field-route="/events/0" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-field-id x-d-field-route">Q&amp;A Night</h4>
                                                                                    <h4 typography="HeadingDelta" data-ux="HeadingMinor" data-aid="CALENDAR_EVENT_TIME" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-aid"></h4>
                                                                                    <p typography="BodyAlpha" data-ux="Text" data-field-id="events.location" data-field-route="/events/0" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-8b c1-16 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">twitch.tv</p>
                                                                                    <div data-ux="Block" data-aid="CALENDAR_DESC" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                                        <div typography="BodyAlpha" data-ux="Text" data-aid="CALENDAR_DESC_TEXT" data-field-id="events.desc" data-field-route="/events/0" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-8b c1-16 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"></div><span rel="" typography="LinkAlpha" data-ux="MoreLinkExpand" data-aid="CALENDAR_DESC_EXPAND" class="x-el x-el-span c1-1t c1-1u c1-1v c1-1w c1-1x c1-1n c1-1z c1-8c c1-8b c1-8d c1-b c1-24 c1-c c1-25 c1-26 c1-27 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"
                                                                                            data-tccl="ux2.CALENDAR.calendar1.Group.Default.MoreLink.Expand.41704.click,click"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" data-ux="Icon" data-aid="plus" class="x-el x-el-svg c1-1 c1-2 c1-2g c1-1n c1-3b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><path fill-rule="evenodd" d="M19.799 11.899a1 1 0 0 0-1-1H12.9V5a1 1 0 0 0-2 0v5.899H5a1 1 0 1 0 0 2h5.9v5.899a1 1 0 1 0 2 0v-5.899h5.899a1 1 0 0 0 1-1"></path></svg><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-3b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Event Details</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div data-ux="Grid" data-aid="CALENDAR_BIGGER_SCREEN_CONTAINER" class="x-el x-el-div c1-1 c1-2 c1-x c1-11 c1-12 c1-13 c1-14 c1-5l c1-16 c1-5m c1-b c1-c c1-2o c1-2p c1-5n c1-2r c1-8e c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-5o c1-3w c1-8f c1-b c1-c c1-8g c1-8h c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h3 typography="HeadingGamma" data-ux="DisplayHeading" class="x-el x-el-h3 c1-1l c1-1m c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-1o c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f x-d-ux">
                                                                                        <div data-ux="Block" data-aid="CALENDAR_EVENT_DATE" class="x-el x-el-div c1-1l c1-1m c1-1o c1-2a c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-aid">
                                                                                            <div data-ux="Block" data-field-id="events.date" data-field-route="/events/0" class="x-el x-el-div c1-1l c1-1m c1-1o c1-2a c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-field-id x-d-field-route">First Fridays</div>
                                                                                        </div>
                                                                                    </h3>
                                                                                </div>
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-5o c1-3w c1-5p c1-4o c1-b c1-c c1-83 c1-84 c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="events.title" data-field-route="/events/0" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-field-id x-d-field-route">Q&amp;A Night</h4>
                                                                                    <div data-ux="Block" data-aid="CALENDAR_DESC" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                                        <div typography="BodyAlpha" data-ux="Text" data-aid="CALENDAR_DESC_TEXT" data-field-id="events.desc" data-field-route="/events/0" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-8b c1-16 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt">
                                                                                            <p style="margin:0"><span>Come ask us questions about our current releases and upcoming games.&nbsp;</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-8i c1-3w c1-5p c1-8j c1-b c1-c c1-8g c1-8h c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h4 typography="HeadingDelta" data-ux="HeadingMinor" data-aid="CALENDAR_EVENT_TIME" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-aid"></h4>
                                                                                    <p typography="BodyAlpha" data-ux="Text" data-field-id="events.location" data-field-route="/events/0" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-8b c1-16 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">twitch.tv</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                    <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-86 c1-11 c1-12 c1-13 c1-14 c1-5l c1-16 c1-87 c1-4 c1-88 c1-h c1-5k c1-b c1-c c1-2o c1-2p c1-5n c1-2r c1-d c1-e c1-f c1-g x-d-ux">
                                                                        <div data-ux="GridCell" data-field-id="events" data-field-route="/events/1" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-5o c1-3w c1-5p c1-b c1-c c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">
                                                                            <div data-ux="Grid" data-aid="CALENDAR_SMALLER_SCREEN_CONTAINER" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-15 c1-16 c1-17 c1-b c1-c c1-2o c1-2p c1-5n c1-2r c1-89 c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-7x c1-q c1-2v c1-5o c1-3w c1-1e c1-8a c1-b c1-c c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h3 typography="HeadingGamma" data-ux="DisplayHeading" class="x-el x-el-h3 c1-1l c1-1m c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-1o c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f x-d-ux">
                                                                                        <div data-ux="Block" data-aid="CALENDAR_EVENT_DATE" class="x-el x-el-div c1-1l c1-1m c1-1o c1-2a c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-aid">
                                                                                            <div data-ux="Block" data-field-id="events.date" data-field-route="/events/1" class="x-el x-el-div c1-1l c1-1m c1-1o c1-2a c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-field-id x-d-field-route">Sundays</div>
                                                                                        </div>
                                                                                    </h3>
                                                                                </div>
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-7x c1-q c1-2v c1-4v c1-3w c1-1e c1-8a c1-b c1-c c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="events.title" data-field-route="/events/1" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-field-id x-d-field-route">Speedrun Sunday</h4>
                                                                                    <h4 typography="HeadingDelta" data-ux="HeadingMinor" data-aid="CALENDAR_EVENT_TIME" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-aid"></h4>
                                                                                    <p typography="BodyAlpha" data-ux="Text" data-field-id="events.location" data-field-route="/events/1" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-8b c1-16 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">twitch.tv</p>
                                                                                    <div data-ux="Block" data-aid="CALENDAR_DESC" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                                        <div typography="BodyAlpha" data-ux="Text" data-aid="CALENDAR_DESC_TEXT" data-field-id="events.desc" data-field-route="/events/1" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-8b c1-16 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"></div><span rel="" typography="LinkAlpha" data-ux="MoreLinkExpand" data-aid="CALENDAR_DESC_EXPAND" class="x-el x-el-span c1-1t c1-1u c1-1v c1-1w c1-1x c1-1n c1-1z c1-8c c1-8b c1-8d c1-b c1-24 c1-c c1-25 c1-26 c1-27 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"
                                                                                            data-tccl="ux2.CALENDAR.calendar1.Group.Default.MoreLink.Expand.41705.click,click"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" data-ux="Icon" data-aid="plus" class="x-el x-el-svg c1-1 c1-2 c1-2g c1-1n c1-3b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><path fill-rule="evenodd" d="M19.799 11.899a1 1 0 0 0-1-1H12.9V5a1 1 0 0 0-2 0v5.899H5a1 1 0 1 0 0 2h5.9v5.899a1 1 0 1 0 2 0v-5.899h5.899a1 1 0 0 0 1-1"></path></svg><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-3b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Event Details</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div data-ux="Grid" data-aid="CALENDAR_BIGGER_SCREEN_CONTAINER" class="x-el x-el-div c1-1 c1-2 c1-x c1-11 c1-12 c1-13 c1-14 c1-5l c1-16 c1-5m c1-b c1-c c1-2o c1-2p c1-5n c1-2r c1-8e c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-5o c1-3w c1-8f c1-b c1-c c1-8g c1-8h c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h3 typography="HeadingGamma" data-ux="DisplayHeading" class="x-el x-el-h3 c1-1l c1-1m c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-1o c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f x-d-ux">
                                                                                        <div data-ux="Block" data-aid="CALENDAR_EVENT_DATE" class="x-el x-el-div c1-1l c1-1m c1-1o c1-2a c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-aid">
                                                                                            <div data-ux="Block" data-field-id="events.date" data-field-route="/events/1" class="x-el x-el-div c1-1l c1-1m c1-1o c1-2a c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-field-id x-d-field-route">Sundays</div>
                                                                                        </div>
                                                                                    </h3>
                                                                                </div>
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-5o c1-3w c1-5p c1-4o c1-b c1-c c1-83 c1-84 c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="events.title" data-field-route="/events/1" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-field-id x-d-field-route">Speedrun Sunday</h4>
                                                                                    <div data-ux="Block" data-aid="CALENDAR_DESC" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                                        <div typography="BodyAlpha" data-ux="Text" data-aid="CALENDAR_DESC_TEXT" data-field-id="events.desc" data-field-route="/events/1" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-8b c1-16 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt">
                                                                                            <p style="margin:0"><span>Every Sunday, we challenge a new speedrunner to discover a faster way through our game.</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-8i c1-3w c1-5p c1-8j c1-b c1-c c1-8g c1-8h c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h4 typography="HeadingDelta" data-ux="HeadingMinor" data-aid="CALENDAR_EVENT_TIME" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-aid"></h4>
                                                                                    <p typography="BodyAlpha" data-ux="Text" data-field-id="events.location" data-field-route="/events/1" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-8b c1-16 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">twitch.tv</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                    <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-86 c1-11 c1-12 c1-13 c1-14 c1-5l c1-16 c1-87 c1-4 c1-88 c1-h c1-5k c1-b c1-c c1-2o c1-2p c1-5n c1-2r c1-d c1-e c1-f c1-g x-d-ux">
                                                                        <div data-ux="GridCell" data-field-id="events" data-field-route="/events/2" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-5o c1-3w c1-5p c1-b c1-c c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route">
                                                                            <div data-ux="Grid" data-aid="CALENDAR_SMALLER_SCREEN_CONTAINER" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-15 c1-16 c1-17 c1-b c1-c c1-2o c1-2p c1-5n c1-2r c1-89 c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-7x c1-q c1-2v c1-5o c1-3w c1-1e c1-8a c1-b c1-c c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h3 typography="HeadingGamma" data-ux="DisplayHeading" class="x-el x-el-h3 c1-1l c1-1m c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-1o c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f x-d-ux">
                                                                                        <div data-ux="Block" data-aid="CALENDAR_EVENT_DATE" class="x-el x-el-div c1-1l c1-1m c1-1o c1-2a c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-aid">
                                                                                            <div data-ux="Block" data-field-id="events.date" data-field-route="/events/2" class="x-el x-el-div c1-1l c1-1m c1-1o c1-2a c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-field-id x-d-field-route">Second Mondays</div>
                                                                                        </div>
                                                                                    </h3>
                                                                                </div>
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-7x c1-q c1-2v c1-4v c1-3w c1-1e c1-8a c1-b c1-c c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="events.title" data-field-route="/events/2" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-field-id x-d-field-route">Release Day</h4>
                                                                                    <h4 typography="HeadingDelta" data-ux="HeadingMinor" data-aid="CALENDAR_EVENT_TIME" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-aid"></h4>
                                                                                    <p typography="BodyAlpha" data-ux="Text" data-field-id="events.location" data-field-route="/events/2" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-8b c1-16 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"></p>
                                                                                    <div data-ux="Block" data-aid="CALENDAR_DESC" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                                        <div typography="BodyAlpha" data-ux="Text" data-aid="CALENDAR_DESC_TEXT" data-field-id="events.desc" data-field-route="/events/2" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-8b c1-16 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"></div><span rel="" typography="LinkAlpha" data-ux="MoreLinkExpand" data-aid="CALENDAR_DESC_EXPAND" class="x-el x-el-span c1-1t c1-1u c1-1v c1-1w c1-1x c1-1n c1-1z c1-8c c1-8b c1-8d c1-b c1-24 c1-c c1-25 c1-26 c1-27 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"
                                                                                            data-tccl="ux2.CALENDAR.calendar1.Group.Default.MoreLink.Expand.41706.click,click"><svg viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" data-ux="Icon" data-aid="plus" class="x-el x-el-svg c1-1 c1-2 c1-2g c1-1n c1-3b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><path fill-rule="evenodd" d="M19.799 11.899a1 1 0 0 0-1-1H12.9V5a1 1 0 0 0-2 0v5.899H5a1 1 0 1 0 0 2h5.9v5.899a1 1 0 1 0 2 0v-5.899h5.899a1 1 0 0 0 1-1"></path></svg><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-3b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Event Details</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div data-ux="Grid" data-aid="CALENDAR_BIGGER_SCREEN_CONTAINER" class="x-el x-el-div c1-1 c1-2 c1-x c1-11 c1-12 c1-13 c1-14 c1-5l c1-16 c1-5m c1-b c1-c c1-2o c1-2p c1-5n c1-2r c1-8e c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-5o c1-3w c1-8f c1-b c1-c c1-8g c1-8h c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h3 typography="HeadingGamma" data-ux="DisplayHeading" class="x-el x-el-h3 c1-1l c1-1m c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-1o c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f x-d-ux">
                                                                                        <div data-ux="Block" data-aid="CALENDAR_EVENT_DATE" class="x-el x-el-div c1-1l c1-1m c1-1o c1-2a c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-aid">
                                                                                            <div data-ux="Block" data-field-id="events.date" data-field-route="/events/2" class="x-el x-el-div c1-1l c1-1m c1-1o c1-2a c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-field-id x-d-field-route">Second Mondays</div>
                                                                                        </div>
                                                                                    </h3>
                                                                                </div>
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-5o c1-3w c1-5p c1-4o c1-b c1-c c1-83 c1-84 c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h4 typography="HeadingDelta" data-ux="HeadingMinor" data-field-id="events.title" data-field-route="/events/2" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-field-id x-d-field-route">Release Day</h4>
                                                                                    <div data-ux="Block" data-aid="CALENDAR_DESC" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                                        <div typography="BodyAlpha" data-ux="Text" data-aid="CALENDAR_DESC_TEXT" data-field-id="events.desc" data-field-route="/events/2" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-8b c1-16 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt">
                                                                                            <p style="margin:0"><span>The second Monday of every month, we will release an update or expansion for our gamers.</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-8i c1-3w c1-5p c1-8j c1-b c1-c c1-8g c1-8h c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                                                    <h4 typography="HeadingDelta" data-ux="HeadingMinor" data-aid="CALENDAR_EVENT_TIME" class="x-el x-el-h4 c1-1 c1-2 c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-64 c1-65 c1-66 c1-u c1-b c1-29 c1-7y c1-4p c1-7z c1-80 c1-81 c1-82 x-d-ux x-d-aid"></h4>
                                                                                    <p typography="BodyAlpha" data-ux="Text" data-field-id="events.location" data-field-route="/events/2" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-8b c1-16 c1-b c1-71 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                <div id="278937d2-9ef3-4f90-b2ce-b82e6696c1c8" class="widget widget-subscribe widget-subscribe-subscribe-2">
                    <div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div>
                            <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-5k c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux">
                                <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-m c1-n c1-o c1-p c1-q c1-b c1-c c1-37 c1-d c1-38 c1-e c1-39 c1-f c1-3a c1-g x-d-ux">
                                    <div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-8k c1-b c1-c c1-d c1-8l c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-5l c1-16 c1-5m c1-b c1-c c1-2o c1-2p c1-5n c1-2r c1-d c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-1d c1-q c1-2v c1-5o c1-3w c1-5p c1-b c1-c c1-2z c1-30 c1-5t c1-32 c1-d c1-e c1-f c1-g x-d-ux">
                                                <div style="width:100%">
                                                    <div id="278937d2-9ef3-4f90-b2ce-b82e6696c1c8-bootstrap-container">
                                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3f c1-b c1-c c1-d c1-y c1-8m c1-e c1-f c1-g x-d-ux">
                                                            <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8n c1-b c1-c c1-d c1-8o c1-40 c1-e c1-f c1-g x-d-ux">
                                                                <h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h3 c1-1l c1-1m c1-1w c1-1x c1-62 c1-17 c1-15 c1-14 c1-16 c1-1f c1-1o c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f x-d-ux x-d-aid x-d-route">Subscribe</h3>
                                                            </div>
                                                            <div data-ux="Block" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-1b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid">
                                                                <form data-ux="InputGroup" aria-live="polite" class="x-el x-el-form x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-16 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                                                    <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-10 c1-3k c1-b c1-c c1-8p c1-d c1-e c1-f c1-g x-d-ux">
                                                                        <div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-10 c1-1b c1-8q c1-b c1-c c1-8r c1-8s c1-d c1-e c1-f c1-g x-d-ux">
                                                                            <div data-ux="InputFloatLabel" class="x-el x-el-div c1-1 c1-2 c1-r c1-4 c1-b c1-c c1-8t c1-8u c1-d c1-e c1-f c1-g x-d-ux"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input41707" value="" class="x-el x-el-input c1-1 c1-2 c1-8v c1-8w c1-4 c1-7d c1-7f c1-8x c1-7e c1-3d c1-78 c1-8y c1-8z c1-18 c1-19 c1-b c1-90 c1-c c1-4p c1-91 c1-7m c1-92 c1-93 c1-94 c1-95 c1-96 c1-97 c1-98 c1-99 c1-8t c1-8u c1-d c1-e c1-f c1-g x-d-ux"
                                                                                /><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input41707" class="x-el x-el-label c1-1 c1-2 c1-1w c1-1x c1-5d c1-9a c1-9b c1-9c c1-9d c1-b c1-90 c1-c c1-4p c1-d c1-e c1-f c1-g x-d-ux">Email Address</label></div>
                                                                        </div><button tcclTracking="click" typography="ButtonAlpha" data-ux="FormButton" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND"
                                                                            class="x-el x-el-button c1-74 c1-1m c1-t c1-u c1-9e c1-9f c1-77 c1-78 c1-1n c1-1f c1-1v c1-1z c1-1x c1-1w c1-q c1-4 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-3d c1-17 c1-15 c1-b c1-7i c1-2b c1-7j c1-7k c1-7l c1-7m c1-7n c1-9g c1-9h c1-7o c1-8r c1-8s c1-9i c1-7p c1-7q c1-7r c1-7s x-d-ux x-d-tccl x-d-aid">Sign up</button></div>
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
                <div id="0ba364cb-0f51-4bdf-bb6f-c564722b5533" class="widget widget-footer widget-footer-footer-4">
                    <div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                        <div>
                            <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-5k c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux">
                                <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-m c1-n c1-o c1-p c1-q c1-b c1-c c1-37 c1-d c1-38 c1-e c1-39 c1-f c1-3a c1-g x-d-ux">
                                    <div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-1f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                        <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-m c1-n c1-o c1-p c1-q c1-67 c1-b c1-c c1-9j c1-37 c1-d c1-38 c1-e c1-39 c1-f c1-3a c1-g x-d-ux">
                                            <div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-m c1-n c1-o c1-p c1-q c1-1f c1-9k c1-5k c1-b c1-c c1-37 c1-d c1-38 c1-e c1-39 c1-f c1-3a c1-g x-d-ux">
                                                <ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-9l c1-2v c1-4v c1-3w c1-1e c1-14 c1-15 c1-16 c1-17 c1-b c1-c c1-1q c1-9m c1-d c1-e c1-f c1-g x-d-ux"></ul>
                                            </div>
                                            <p typography="BodyAlpha" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-14 c1-8n c1-2b c1-b c1-29 c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">cacccas</p>
                                        </div>
                                        <div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-12 c1-13 c1-14 c1-15 c1-16 c1-17 c1-1k c1-1f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">
                                            <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-7x c1-q c1-2v c1-4v c1-3w c1-1e c1-b c1-c c1-d c1-9n c1-9o c1-e c1-f c1-g x-d-ux">
                                                <div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-14 c1-16 c1-b c1-9p c1-7k c1-4p c1-7p c1-42 c1-7q c1-7r c1-7s x-d-ux x-d-aid x-d-route x-rt">
                                                    <p style="margin:0"><span>Copyright © 2020 cacccas - All Rights Reserved.</span></p>
                                                </div>
                                            </div>
                                            <div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1b c1-1c c1-7x c1-q c1-2v c1-4v c1-3w c1-1e c1-b c1-c c1-d c1-9n c1-9o c1-e c1-f c1-g x-d-ux">
                                                <p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-1w c1-1x c1-68 c1-9q c1-16 c1-b c1-9p c1-7k c1-4p c1-7p c1-9r c1-8l c1-7q c1-7r c1-7s x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-gb_corp_applications_base" class="x-el x-el-a c1-1t c1-1u c1-1v c1-1w c1-1x c1-1y c1-1z c1-9q c1-b c1-24 c1-7k c1-25 c1-26 c1-27 c1-7p c1-9r c1-8l c1-7q c1-7r c1-7s x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.41708.click,click">Website Builder</a></span></p>
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
    </div>
    <script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.57.8.js" crossorigin></script>
    <script type="text/javascript">
        window.cxs && window.cxs.setOptions({
            prefix: "c2-"
        });
    </script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1bf99321fe1b5afa/script.js" crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e5c5290100cf70a7/script.js" crossorigin></script>
    <script type="text/javascript">
        window.wsb['context-bs-1'] = {
            "renderMode": "PUBLISH",
            "fonts": ["cabin", "default", ""],
            "colors": ["#035ca9"],
            "fontScale": "medium",
            "locale": "en-GB",
            "language": "en",
            "internalLinks": {},
            "isHomepage": true,
            "navigationMap": {
                "e4a29574-7367-47ba-a97a-6afa99d5677a": {
                    "isFlyoutMenu": false,
                    "active": true,
                    "pageId": "e4a29574-7367-47ba-a97a-6afa99d5677a",
                    "name": "Home",
                    "href": "\u002F",
                    "target": "",
                    "visible": true,
                    "requiresAuth": false,
                    "tags": [],
                    "rel": "",
                    "type": "page",
                    "showInFooter": false
                }
            },
            "theme": "Theme22",
            "paintJob": "LIGHT"
        };
    </script>
    <script type="text/javascript">
        (function(props, context) {
            Core.utils.renderBootstrap({
                elId: 'bs-1',
                componentName: 'LogoText',
                props: props,
                context: context,
                contextKey: 'context-bs-1',
                radpack: ""
            });
        })({
            "logo": {
                "logoText": "cacccas",
                "selectedMutatorType": "TEXT"
            },
            "fontPackLogoId": null,
            "widgetId": "decb563d-2ffd-496b-8f45-a72d6081dd25",
            "section": "default",
            "category": "neutral",
            "locale": "en-GB",
            "renderMode": "PUBLISH"
        }, {
            "widgetId": "decb563d-2ffd-496b-8f45-a72d6081dd25",
            "widgetType": "HEADER",
            "widgetPreset": "header9",
            "section": "default",
            "category": "neutral",
            "fontSize": "medium",
            "fontFamily": "alternate",
            "group": "Logo",
            "groupType": "Default"
        });
    </script>
    <script type="text/javascript">
        (function(props, context) {
            Core.utils.renderBootstrap({
                elId: 'bs-2',
                componentName: 'LogoText',
                props: props,
                context: context,
                contextKey: 'context-bs-1',
                radpack: ""
            });
        })({
            "logo": {
                "logoText": "cacccas",
                "selectedMutatorType": "TEXT"
            },
            "fontPackLogoId": null,
            "widgetId": "decb563d-2ffd-496b-8f45-a72d6081dd25",
            "section": "default",
            "category": "neutral",
            "locale": "en-GB",
            "renderMode": "PUBLISH"
        }, {
            "widgetId": "decb563d-2ffd-496b-8f45-a72d6081dd25",
            "widgetType": "HEADER",
            "widgetPreset": "header9",
            "section": "default",
            "category": "neutral",
            "fontSize": "medium",
            "fontFamily": "alternate",
            "group": "Logo",
            "groupType": "Default"
        });
    </script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/4d1c79152d4020f6/script.js" crossorigin></script>
    <script type="text/javascript">
        (function(props, context) {
            Core.utils.renderBootstrap({
                elId: 'bs-3',
                componentName: 'DynamicTagline',
                props: props,
                context: context,
                contextKey: 'context-bs-1',
                radpack: ""
            });
        })({
            "tag": "h1",
            "style": {
                "textAlign": "left",
                "marginTop": 0
            },
            "children": "Designing a Gamer's World",
            "typography": "HeadingAlpha",
            "data-aid": "HEADER_TAGLINE_RENDERED",
            "data-route": "tagline",
            "widgetId": "decb563d-2ffd-496b-8f45-a72d6081dd25",
            "section": "default",
            "category": "neutral",
            "locale": "en-GB",
            "renderMode": "PUBLISH"
        }, {
            "widgetId": "decb563d-2ffd-496b-8f45-a72d6081dd25",
            "widgetType": "HEADER",
            "widgetPreset": "header9",
            "section": "default",
            "category": "neutral",
            "fontSize": "medium",
            "fontFamily": "alternate",
            "group": "Hero",
            "groupType": "Left"
        });
    </script>
    <script type="text/javascript">
        Number(window.vctElements) || (window.vctElements = 0), window.vctElements++, window.markVisuallyComplete();
    </script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/6176cef63b1c373b/script.js" crossorigin></script>
    <script type="text/javascript">
        window.wsb['context-bs-4'] = {
            "renderMode": "PUBLISH",
            "fonts": ["cabin", "default", ""],
            "colors": ["#035ca9"],
            "fontScale": "medium",
            "locale": "en-GB",
            "language": "en",
            "internalLinks": {},
            "isHomepage": true,
            "navigationMap": {
                "e4a29574-7367-47ba-a97a-6afa99d5677a": {
                    "isFlyoutMenu": false,
                    "active": true,
                    "pageId": "e4a29574-7367-47ba-a97a-6afa99d5677a",
                    "name": "Home",
                    "href": "\u002F",
                    "target": "",
                    "visible": true,
                    "requiresAuth": false,
                    "tags": [],
                    "rel": "",
                    "type": "page",
                    "showInFooter": false
                }
            },
            "theme": "Theme22"
        };
    </script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/6fd06233-d5b2-4f56-b37c-4e07ee47ca4a/gpub/bf6214b1676ada2/script.js" crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/840c8229935e90d0/script.js" crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/6fd06233-d5b2-4f56-b37c-4e07ee47ca4a/gpub/84fad2236410cead/script.js" crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/c73a9a1825af2da0/script.js" crossorigin></script>
    <script type="text/javascript" src="//img1.wsimg.com/blobby/go/6fd06233-d5b2-4f56-b37c-4e07ee47ca4a/gpub/9f63992968c2b9d9/script.js" crossorigin></script>
    <script type="text/javascript">
        document.getElementById('page-41694').addEventListener('click', function() {}, false);
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
            "websiteId": "6fd06233-d5b2-4f56-b37c-4e07ee47ca4a"
        }), _trfd.push({
            "pd": "2020-03-31T18:13:51.143Z"
        }), _trfd.push({
            ap: "IPv2",
            ds: tccl_dpsid() || "-1"
        });

        function addTccl() {
            if (Number(window.vctElements) && !window.VISUAL_COMPLETE) {
                setTimeout(addTccl, 500)
            } else {
                var t = document.createElement("script");
                t.setAttribute("src", "//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js");
                document.body.appendChild(t)
            }
        }
        addTccl();
        _trfd.push({
            "meta.widgetCount": "5",
            "meta.theme": "layout22",
            "meta.headerMediaType": "Image",
            "meta.hasOLS": "false",
            "meta.hasOLA": "false",
            "meta.hasMembership": "false"
        })
    </script>
</body>

</html>
