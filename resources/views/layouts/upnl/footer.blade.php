			  @include('partials.notify')

        <footer id="footer">
            <div class="footer-bottom">
                <div class="container">
                    <div class="wrap-fx">
                        <div class="Copyright">Copyright © 2025 GENTIUS LTD
                            All Rights Reserved.</div>
                        <ul class="social">
                            <li><a target="_blank" href="https://t.me/GENTIUSLTD"><i class="fa fa-paper-plane"></i></a>
                            </li>
                            <li><a target="_blank" href="https://x.com/GENTIUS_LTD"><i
                                        class="fa-brands fa-x-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div><a id="scroll-top"></a>

    <style>
        .cicon {
            margin-top: -7px !important;
            font-size: 23px !important;
        }

        .cicon:hover {
            color: #deff10 !important;
        }

        .myv {
            max-width: 180px !important;
            background: url("../upnl/assets/images/common/bg_text4e.png") !important;
        }

        .lfirn {
            min-width: 360px !important;
        }

        .baltxt {
            max-width: 180px !important;
        }

        .mobic {
            width: calc(50% - 30px) !important;
            padding: 24px 30px 24px 20px !important;
        }

        @media only screen and (min-width: 381px) and (max-width: 450px) {
            .mymob {
                text-align: start !important;
                margin-left: 9px !important;
            }

            .mobic {
                width: calc(100% - 0px) !important;
                padding: 24px 30px 24px 20px !important;
            }

            .linkbox {
                max-width: 400px !important;
                padding: 50px 20px 17px 25px !important;
            }

            .reflinx {
                font-size: 1.1rem !important;
            }

            .boxtmob {
                max-width: 100% !important;
            }
        }

        @media only screen and (min-width: 200px) and (max-width: 380px) {
            .mobic {
                width: calc(100% - 0px) !important;
                padding: 24px 10px 24px 10px !important;
            }

            .lfirn {
                min-width: 300px !important;
            }

            .baltxt {
                min-width: 160px !important;
                max-width: 190px !important;
                font-size: 0.91rem !important;
            }

            .myv {
                min-width: 160px !important;
                max-width: 200px !important;
                background: url("assets/images/common/bg_text4e.png") !important;
                font-size: 1rem !important;
                padding: 10px 15px !important;
            }

            .linkbox {
                max-width: 350px !important;
                padding: 50px 20px 17px 20px !important;
            }

            .reflinx {
                font-size: 1rem !important;
            }

            .boxtmob {
                max-width: 100% !important;
            }
        }

        .alert-success {
            margin-left: auto;
            margin-right: auto;
            max-width: 730px !important;
            padding: 10px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 1.1rem;
            background: #86FF00;
            color: #000000;
            z-index: 1;
            text-align: center;
            opacity: 0.8;
            margin-bottom: 15px !important;
        }

        .alert-secondary {
            margin-left: auto;
            margin-right: auto;
            max-width: 730px !important;
            padding: 10px;
            margin-bottom: 15px !important;
            border-radius: 6px;
            font-weight: 500;
            font-size: 1.1rem;
            background: #ff0000;
            color: #fff;
            z-index: 1;
            text-align: center;
            opacity: 0.8;
        }
    </style>
    <script>
        function copyToClipboard(elementId) {

            // Create an auxiliary hidden input
            var aux = document.createElement("input");

            // Get the text from the element passed into the input
            aux.setAttribute("value", document.getElementById(elementId).innerHTML);

            // Append the aux input to the body
            document.body.appendChild(aux);

            // Highlight the content
            aux.select();

            // Execute the copy command
            document.execCommand("copy");

            // Remove the input from the body
            document.body.removeChild(aux);

            alert("Copied: " + aux.value);
        }

        function log() {
            console.log('---')
        }
    </script>

    <script src="{{asset('')}}upnl/app/js/jquery.min.js"></script>
    <script src="{{asset('')}}upnl/app/js/bootstrap.min.js"></script>
    <script src="{{asset('')}}upnl/app/js/swiper-bundle.min.js"></script>
    <script src="{{asset('')}}upnl/app/js/swiper.js"></script>
    <script src="{{asset('')}}upnl/app/js/countto.js"></script>
    <script src="{{asset('')}}upnl/app/js/app.js"></script>
    <script src="{{asset('')}}upnl/app/js/donatProgress.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('')}}upnl/app/js/jquery.easing.js"></script>
    <script src="{{asset('')}}upnl/app/js/plugin.js"></script>
    <script src="{{asset('')}}upnl/app/js/count-down.js"></script>
    <script src="{{asset('')}}upnl/js/calc.js"></script>
  

    <style>
        .gt_float_switcher {
            border-radius: 5px;
            background: #d7d7d7;
        }

        .gt_float_switcher .gt-selected {
            background-color: #fff;
        }

        .gt_float_switcher .gt-selected .gt-current-lang span.gt-lang-code {
            font-family: "roboto slab", sans-serif;
        }

        .nturl {
            font-size: 0;
            color: transparent;
        }

        .nturl img {
            display: inline-block;
            vertical-align: middle;
        }

        .gt-lang-code {
            font-size: 18px;
        }
    </style>
    <script>window.gtranslateSettings = { "default_language": "en", "native_language_names": true, "languages": ["en", "ru", "fr", "de", "it", "es", "uk", "tr"], "wrapper_selector": ".gtranslate_wrapper", "float_switcher_open_direction": "right" }</script>

    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

    <script>
        "use strict";
        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>
    <style>
        .mgm {
            border-radius: 7px;
            position: fixed;
            z-index: 90;
            bottom: 25%;
            right: 10px;
            background: #fff;
            padding: 10px 27px;
            box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
        }

        .mgm a {
            font-weight: 700;
            display: block;
            color: #FF5722;
        }

        .mgm a,
        .mgm a:active {
            transition: all .2s ease;
            color: #FF5722;
        }
    </style>

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '3b7e6343de44118a89a5bf3b8009db0c15e00b48';
        window.smartsupp || (function (d) {
            var s, c, o = smartsupp = function () { o._.push(arguments) }; o._ = [];
            s = d.getElementsByTagName('script')[0]; c = d.createElement('script');
            c.type = 'text/javascript'; c.charset = 'utf-8'; c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?'; s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(102286491, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/102286491" style="position:absolute; left:-9999px;" alt /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <iframe id="chat-application-iframe" title="Smartsupp" aria-hidden="true"
        style="display: block; position: fixed; top: 0px; left: 0px; width: 1px; height: 1px; opacity: 0; border: none; z-index: -1; pointer-events: none;"></iframe>
    <div id="smartsupp-widget-container"><!----><!----><!----> <!----><!---->
        <!---->
        <div style="border-radius: 9999px; box-shadow: rgba(0, 0, 0, 0.06) 0px 1px 6px, rgba(0, 0, 0, 0.12) 0px 2px 32px; color-scheme: normal; height: 56px; position: fixed; bottom: 24px; left: initial; right: 12px; z-index: 10000000; width: 56px;"
            data-testid="widgetButtonFrame"><iframe allowfullscreen scrolling="no" id="widgetButtonFrame"
                title="Smartsupp widget button"
                style="position: absolute; width: 100%; height: 100%; border: none; display: block; text-align: left; margin: 0px; padding: 0px; top: 0px; left: 0px; opacity: 1;"></iframe><!---->
        </div><!---->
        <!----><!----> <!----><!----><!---->
    </div>
    <div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate"
        style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;"
        data-id>
        <div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd">
            <div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img
                    src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24" alt>
            </div>
            <div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c">
                <div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Original
                    text</div>
                <div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div>
            </div>
            <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr">
                <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr">
                    <div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Rate
                        this translation</div>
                    <div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Your feedback
                        will be used to help improve Google
                        Translate</div>
                </div>
                <div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button"
                        class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Good translation" aria-label="Good translation"
                        aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z">
                                </path>
                            </svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z">
                                </path>
                            </svg></span></button><button id="goog-gt-thumbDownButton" type="button"
                        class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Poor translation" aria-label="Poor translation"
                        aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z">
                                </path>
                            </svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z">
                                </path>
                            </svg></span></button></div>
            </div>
            <div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce">
                <form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te"
                    method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl"
                        id="goog-gt-votingInputSrcLang"><input type="text" name="tl"
                        id="goog-gt-votingInputTrgLang"><input type="text" name="query"
                        id="goog-gt-votingInputSrcText"><input type="text" name="gtrans"
                        id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote">
                </form><iframe name="votingFrame" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
    <div class="VIpgJd-ZVi9od-aZ2wEe-wOHMyf">
        <div class="VIpgJd-ZVi9od-aZ2wEe-OiiCO"><svg xmlns="http://www.w3.org/2000/svg" class="VIpgJd-ZVi9od-aZ2wEe"
                width="96px" height="96px" viewBox="0 0 66 66">
                <circle class="VIpgJd-ZVi9od-aZ2wEe-Jt5cK" fill="none" stroke-width="6" stroke-linecap="round" cx="33"
                    cy="33" r="30"></circle>
            </svg></div>
    </div>
</body>

</html>