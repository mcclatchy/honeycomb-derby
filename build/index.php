<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <script>
        var gomez = {
            gs: new Date().getTime(),
            acctId: "D3FD89",
            grpId: "Escenic",
            grpId1: "mdc",
            grpId2: window.location.hostname,
            grpId3: "national",
            pgId: "story-detail",
            wrate: 1
        };
    </script>


    <script type='text/javascript'>
        (function() {
            var a = window;
            a.dT_ ? a.console && a.console.log("Duplicate agent injection detected, turning off redundant initConfig.") : window.dT_ || (window.dT_ = {
                cfg: "cors=1|async=1|tp=500,50,5,1,10|reportUrl=//mcclatchy.dynatracesaas.com/dynaTraceMonitor|agentUri=//mcclatchy.dynatracesaas.com/dtagent_23jpqrstxz_6000500041014.js|auto=#AUTO#|domain=#DOMAIN#|rid=RID_#REQUEST_ID#|rpid=#RESPONSE_ID#"
            })
        })();
        (function() {
            function s() {
                var a = 0;
                try {
                    a = window.performance.timing.navigationStart + Math.floor(window.performance.now())
                } catch (b) {}
                return 0 >= a ? (new Date).getTime() : a
            }

            function Z(a, b) {
                return $(a, b)
            }

            function l(a, b) {
                for (var c = 1; c < arguments.length; c++) a.push(arguments[c])
            }

            function v(a, b) {
                return parseInt(a, b || 10)
            }

            function E(a) {
                try {
                    if (w) return w[a]
                } catch (b) {}
                return null
            }

            function F(a, b) {
                try {
                    window.sessionStorage.setItem(a, b)
                } catch (c) {}
            }

            function m(a, b) {
                var c = -1;
                b && (a && a.indexOf) && (c = a.indexOf(b));
                return c
            }

            function G(a) {
                document.cookie =
                    a + '="";path=/' + (d.domain ? ";domain=" + d.domain : "") + "; expires=Thu, 01-Jan-70 00:00:01 GMT;"
            }

            function H(a) {
                a = encodeURIComponent(a);
                var b = [];
                if (a)
                    for (var c = 0; c < a.length; c++) {
                        var k = a.charAt(c),
                            d = aa[k];
                        d ? l(b, d) : l(b, k)
                    }
                return b.join("")
            }

            function x(a, b, c) {
                b || 0 == b ? (b = ("" + b).replace(/[;\n\r]/g, "_"), b = "DTSA" === a.toUpperCase() ? H(b) : b, a = a + "=" + b + ";path=/" + (d.domain ? ";domain=" + d.domain : ""), c && (a += ";expires=" + c.toUTCString()), document.cookie =
                    a) : G(a)
            }

            function r(a) {
                var b, c, k, d = document.cookie.split(";");
                for (b = 0; b <
                    d.length; b++)
                    if (c = m(d[b], "="), k = d[b].substring(0, c), c = d[b].substring(c + 1), k = k.replace(/^\s+|\s+$/g, ""), k === a) return "DTSA" === a.toUpperCase() ? decodeURIComponent(c) : c;
                return ""
            }

            function I(a) {
                return /^[0-9A-Za-z_$\+\/\.\-\*%\|]*$/.test(a)
            }

            function J() {
                var a = r(K);
                return a && I(a) ? a : ""
            }

            function L(a) {
                a = a || J();
                var b = {
                    sessionId: null,
                    serverId: null
                };
                if (a) {
                    var c = m(a, "|"),
                        d = a; - 1 !== c && (d = a.substring(0, c));
                    c = m(d, "$"); - 1 !== c ? (b.sessionId = d.substring(c + 1), b.serverId = d.substring(0, c)) : b.sessionId = d
                }
                return b
            }

            function ba(a) {
                return L(a).serverId
            }

            function ca(a) {
                if (a) return L(a).sessionId;
                if (a = e.gSC()) {
                    var b = a.indexOf("|"); - 1 !== b && (a = a.substring(0, b))
                }
                return a
            }

            function M(a, b) {
                return Math.floor(Math.random() * (b - a + 1)) + a
            }

            function N(a) {
                var b = window.crypto || window.msCrypto,
                    c;
                if (b) c = new Int8Array(a), b.getRandomValues(c);
                else {
                    c = [];
                    for (b = 0; b < a; b++) c.push(M(0, O))
                }
                a = [];
                for (b = 0; b < c.length; b++) {
                    var d = Math.abs(c[b] % O),
                        d = 9 >= d ? String.fromCharCode(d + 48) : String.fromCharCode(d + 55);
                    a.push(d)
                }
                return a.join("")
            }

            function P(a) {
                return document.getElementsByTagName(a)
            }

            function Q(a) {
                var b = a.length;
                if ("number" === typeof b) a = b;
                else {
                    for (var b = 0, c = 2048; a[c - 1];) b = c, c += c;
                    for (var d = 7; 1 < c - b;) d = (c + b) / 2, a[d - 1] ? b = d : c = d;
                    a = a[d] ? c : b
                }
                return a
            }

            function da() {
                var a = d.csu,
                    a = (a.indexOf("dbg") == a.length - 3 ? a.substr(0, a.length - 3) : a) + "_" + d.app + "_Store";
                try {
                    if (y) {
                        var b = y.getItem(a);
                        if (b) {
                            for (var a = {}, c = b.split("|"), b = 0; b < c.length; b++) {
                                var e = c[b].split("=");
                                2 == e.length && (a[e[0]] = decodeURIComponent(e[1]))
                            }
                            if (!d.lastModification || parseInt(a.lastModification.substr(0, 13), 10) >= parseInt(d.lastModification.substr(0,
                                    13), 10))
                                for (var q in a) a.hasOwnProperty(q) && ("config" == q ? z(a[q]) : d[q] = a[q])
                        }
                    }
                } catch (g) {}
            }

            function z(a) {
                a = a.split("|");
                for (var b = 0; b < a.length; b++) {
                    var c = m(a[b], "="); - 1 === c ? d[a[b]] = "1" : d[a[b].substring(0, c)] = a[b].substring(c + 1, a[b].length)
                }
            }

            function ea(a, b) {
                if (a) {
                    var c = /([a-zA-Z]*)[0-9]{0,3}_[a-zA-Z_0-9]*_[0-9]+/g.exec(a);
                    if (c && c.length) {
                        var k = c[0];
                        d.csu = c[1];
                        c = k.split("_");
                        d.legacy = "1";
                        d.featureHash = c[1];
                        d.dtVersion = e.version[0] + "" + e.version[1]
                    }
                }
                b && z(b);
                c = location.hostname;
                k = d.domain;
                c = c && k ? c == k ||
                    -1 !== c.indexOf("." + k, c.length - ("." + k).length) ? !0 : !1 : !0;
                c || (delete d.domain, d.domainOverride = "true")
            }

            function fa() {
                return K
            }

            function ga() {
                return ha
            }

            function ia() {
                return ja
            }

            function A(a) {
                d[a] = 0 > m(d[a], "#" + a.toUpperCase()) ? d[a] : ""
            }

            function ka() {
                return t
            }

            function R(a, b) {
                for (var c = S(b), d = !1, e = 0; e < c.length; e++) c[e].frameId === t && (c[e].actionId = a, d = !0);
                d || l(c, {
                    frameId: t,
                    actionId: a
                });
                T(c)
            }

            function T(a, b) {
                var c = "";
                if (a) {
                    for (var c = [], d = 0; d < a.length; d++) 0 < d && 0 < c.length && l(c, "p"), l(c, a[d].frameId), l(c, "h"), l(c,
                        a[d].actionId);
                    c = c.join("")
                }
                c || (c = "-");
                x(B, c)
            }

            function S(a) {
                var b = r(B),
                    c = [];
                if (b && "-" !== b)
                    for (var b = b.split("p"), d = 0; d < b.length; d++) {
                        var e = b[d].split("h");
                        if (2 === e.length && e[0] && e[1]) {
                            var g = e[0],
                                f;
                            if (!(f = a)) {
                                f = g.split("_");
                                f = v(f[0]);
                                var h = s() % C;
                                h < f && (h += C);
                                f = f + 9E5 > h
                            }
                            f && l(c, {
                                frameId: g,
                                actionId: e[1]
                            })
                        }
                    }
                return c
            }

            function U() {
                var a = r(u);
                if (!a || "" == a || a.length && a.length != V) a = E(u), a && a.length == V || (W = !0, a = s() + N(la));
                var b = a,
                    c = new Date;
                c.setFullYear(c.getFullYear() + 2);
                x(u, b, c);
                F(u, b);
                return a
            }

            function ma() {
                return W
            }
            var g = window;
            if (!g.dT_ || !g.dT_.cfg || "string" != typeof g.dT_.cfg || g.dT_.initialized) g.console && g.console.log("Initconfig not found or agent already initialized! This is an injection issue.");
            else {
                var $ = window.setTimeout,
                    w = window.sessionStorage,
                    e = {
                        version: [6, 5, 4, "1014"],
                        cfg: window.dT_ && window.dT_.cfg,
                        ica: 1
                    };
                e.version[3] = parseInt(e.version[3], 10);
                window.dT_ = e;
                e.agentStartTime = s();
                e.nw = s;
                e.apush = l;
                e.st = Z;
                var O = 32,
                    aa = {
                        "!": "%21",
                        "~": "%7E",
                        "*": "%2A",
                        "(": "%28",
                        ")": "%29",
                        "'": "%27",
                        $: "%24",
                        ";": "%3B",
                        ",": "%2C"
                    };
                e.gSSV = E;
                e.sSSV = F;
                e.pn = v;
                e.iVSC = I;
                e.io = m;
                e.dC = G;
                e.sC = x;
                e.esc = H;
                e.gSId = ba;
                e.gDtc = ca;
                e.gSC = J;
                e.gC = r;
                e.cRN = M;
                e.cRS = N;
                e.gEL = Q;
                e.gEBTN = P;
                var d = {
                        reportUrl: "dynaTraceMonitor",
                        initializedModules: "",
                        csu: "dtagent",
                        domainOverride: "false",
                        dataDtConfig: e.cfg
                    },
                    y;
                try {
                    y = window.localStorage
                } catch (na) {}
                if (-1 == m(d.dataDtConfig, "#CONFIGSTRING") && (z(d.dataDtConfig), A("domain"), A("auto"), A("app"), (g = d.agentUri) && -1 < m(g, "_"))) g = /([a-zA-Z0-9]*)[0-9]*_([a-zA-Z0-9]*)_[0-9]*/.exec(g), d.csu = g[1], d.featureHash = g[
                        2], d.dtVersion =
                    e.version[0] + "" + e.version[1];
                var g = P("script"),
                    X = Q(g);
                if (0 < X)
                    for (var h, Y = d.csu + "_bootstrap.js", D = 0; D < X; D++)
                        if (h = g[D], h.attributes) {
                            var n = h.attributes.getNamedItem("data-dtconfig");
                            h = h.src;
                            if (n) {
                                ea(h, n.value);
                                break
                            }
                            if ((n = h && h.indexOf(Y)) && 0 <= n) n = n + Y.length + 5, d.app = h.length > n ? h.substr(n) : "Default%20Application"
                        }
                da();
                try {
                    var f = d.ign;
                    if (f && RegExp(f).test(window.location.href)) {
                        document.dT_ = window.dT_ = null;
                        return
                    }
                } catch (oa) {}
                var B = "dtPC",
                    K = "dtCookie",
                    ha = "x-dtPC",
                    ja = "x-dtReferer";
                e.gSCN = fa;
                e.gPCHN = ga;
                e.gRHN =
                    ia;
                e.pageContextCookieName = B;
                e.latencyCookieName = "dtLatC";
                e.cfg = d;
                var C = 6E8,
                    t = e.agentStartTime % C + "_" + v(1E3 * Math.random());
                e.gFId = ka;
                e.frameId = t;
                R(1);
                e.gPC = S;
                e.cPC = R;
                e.sPC = T;
                var p;
                try {
                    p = w.getItem("dtDisabled")
                } catch (pa) {}!d.auto && (!d.legacy && !p) && (f = d.agentname || d.csu || "dtagent", f = r("dtUseDebugAgent") ? d.debugName || f + "dbg" : d.name || f, p = d.agentUri || d.agentLocation + "/" + f + "_" + d.featureHash + "_" + d
                    .buildNumber, d.async ? (f = document.createElement("script"), f.setAttribute("src", p), d.async && f.setAttribute("defer",
                        "true"), f.setAttribute("crossorigin", "anonymous"), p = document.getElementsByTagName("script")[0], p.parentElement.insertBefore(f, p)) : document.write('<script type="text/javascript" src="' + p + '">\x3c/script>'));
                var u = "rxVisitor",
                    la = 32,
                    V = 45,
                    W = !1;
                U();
                e.iNV = ma;
                e.gVID = U
            }
        })();
    </script>
    <!-- paywall disabled -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How Hollywood’s biggest studios perform the greatest visual effects trick by taking advantage of the digital artists that create it’s award-winning movie magic | McClatchy DC</title>
    <meta name="keywords" content="Hollywood, oscar sunday, corruption, revenue, money, visual effects, graphic artists, lobbying, mpaa, oscars, emmys, protest, abuse, wages, labor rights, vfx industry, visual effect degrees, movies, top ten, marvel, universal, disney, paramount, twentieth century fox, warner brothers, sony, sony hacks, avengers, superman, Deadpool, la la land, arrival, moana, zootopia, kubo, life of pi, rhythm and hues, african american, white, vfx soldier, tax, subsidies, Vancouver, life after pi, scott ross, ilm, industrial light and magic, digital domain, daniel lay, producer, director, films, working conditions, special effects, ang lee, george clooney, titanic, editing, harry potter, rogue one, star wars, movie magic, Civil War, Batman, Spider-Man, Superman, Captain America, Guardians of the Galaxy, Iron Man, Hulk, Dr. Strange, motion graphics, pixel fucking, pixel-fucked, when are the oscars, big studios, unions, benefits, nominees, winner, ILM"
    />
    <meta name="news_keywords" content="Hollywood, oscar sunday, corruption, revenue, money, visual effects, graphic artists, lobbying, mpaa, oscars, emmys, protest, abuse, wages, labor rights, vfx industry, visual effect degrees, movies, top ten, marvel, universal, disney, paramount, twentieth century fox, warner brothers, sony, sony hacks, avengers, superman, Deadpool, la la land, arrival, moana, zootopia, kubo, life of pi, rhythm and hues, african american, white, vfx soldier, tax, subsidies, Vancouver, life after pi, scott ross, ilm, industrial light and magic, digital domain, daniel lay, producer, director, films, working conditions, special effects, ang lee, george clooney, titanic, editing, harry potter, rogue one, star wars, movie magic, Civil War, Batman, Spider-Man, Superman, Captain America, Guardians of the Galaxy, Iron Man, Hulk, Dr. Strange, motion graphics, pixel fucking, pixel-fucked, when are the oscars, big studios, unions, benefits, nominees, winner, ILM"
    />
    <meta name="allow-comments" content="true" />
    <meta name="description" content="Visual effects artists are responsible for some of the most iconic moments in movie history. The top 10 highest grossing films of 2016 all contained computer generated imagery. But while Hollywood's profits grow, the visual effects artists struggle for fair pay, representation and recognition beyond the most prestigious award in film - an Oscar."
    />
    <meta name="title" content="Hollywood's Greatest Trick | McClatchy DC" />
    <meta name="googlebot" content="noodp, noarchive" />
    <meta name="original-source" content="http://pics.mcclatchyinteractive.com/news/nation-world/national/article128729769.html" />
    <link rel="canonical" href="http://pics.mcclatchyinteractive.com/news/nation-world/national/article128729769.html" />
    <meta name="google-site-verification" content="EedtwJCD34vv_4BAyiBZEQMjnQ_W3-NUVzBgXyT6ooY" />
    <meta property="og:title" content="Hollywood's Greatest Trick" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.mcclatchydc.com/news/nation-world/national/article128729769.html" />
    <meta property="og:description" content="Visual effects artists are responsible for some of the most iconic moments in movie history. &nbsp;The top 10 highest grossing films of 2016 all contained computer generated imagery. &nbsp;But while Hollywood's profits grow, the visual effects artists struggle for fair pay, representation and recognition beyond the most prestigious award in film - an Oscar."
    />
    <meta property="og:image" content="http://www.mcclatchydc.com/news/nation-world/national/fxwz0m/picture134315234/ALTERNATES/LANDSCAPE_1140/documentary-keyframe.png" />
    <meta property="og:site_name" content="mcclatchydc" />
    <meta property="fb:app_id" content="1407731799445564" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="McClatchyDC">
    <meta name="twitter:title" content="Hollywood's Greatest Trick">
    <meta name="twitter:description" content="Visual effects artists are responsible for some of the most iconic moments in movie history. &nbsp;The top 10 highest grossing films of 2016 all contained computer generated imagery. &nbsp;But while Hollywood's profits grow, the visual effects artists struggle for fair pay, representation and recognition beyond the most prestigious award in film - an Oscar.">
    <meta name="twitter:image" content="http://www.mcclatchydc.com/news/nation-world/national/fxwz0m/picture134315234/ALTERNATES/LANDSCAPE_1140/documentary-keyframe.png">
    <meta name="msapplication-TileImage" content="http://www.mcclatchydc.com/static/theme/mcclatchydc/base/ico/windowsmetro-144.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://www.mcclatchydc.com/static/theme/mcclatchydc/base/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://www.mcclatchydc.com/static/theme/mcclatchydc/base/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://www.mcclatchydc.com/static/theme/mcclatchydc/base/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://www.mcclatchydc.com/static/theme/mcclatchydc/base/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://www.mcclatchydc.com/static/theme/mcclatchydc/base/ico/favicon.png">
    <link href="http://www.mcclatchydc.com/static/theme/mcclatchydc-2020/base/css/main-1.0.100-98b9c26.css?sVer=1.0.100-98b9c26" rel="stylesheet">
    <!--[if lt IE 9]>
<script src="http://www.mcclatchydc.com/static/js/html5shiv.js?sVer=1.0.100-98b9c26"></script>
<script src="http://www.mcclatchydc.com/static/js/respond.min.js?sVer=1.0.100-98b9c26"></script>
<script type="text/javascript" src="http://www.mcclatchydc.com/static/js/mi-scripts/pollyfill.js?sVer=1.0.100-98b9c26"></script>
<![endif]-->

    <script type="text/javascript" src="http://www.mcclatchydc.com/static/js/jquery-1.10.2.min.js?sVer=1.0.100-98b9c26"></script>
    <script type="text/javascript" src="http://www.mcclatchydc.com/static/js/mi-wf-site-1.0.100-98b9c26-min.js"></script>


    <script type="text/javascript">
        mi.pageInfo.setConf({
            'marketInfo.pagelevel': 'story',
            'wufoo.formID': '',
            'publication.mediadomain': 'media.mcclatchydc.com',
            'headerDateDisplay': 'false',
            'accuweather.apiKey': '2ce96fe9da724185a27db1e6a3ecf580',
            'marketInfo.application_version': '1.0.100-98b9c26',
            'marketInfo.logoAltText': 'McClatchy DC',
            'marketInfo.allow_ads': 'true',
            'nativo.story.placements': '840234,840253,844382',
            'marketInfo.pagelevel_informational': 'false',
            'marketInfo.addcities': 'New York, Los Angeles, Chicago, Houston',
            'marketInfo.staticDirectory': 'mcclatchydc',
            'marketInfo.state_abbreviation': 'DC',
            'publication.domain': 'McClatchyDC.com',
            'accuweather.partnerCode': 'MCCLATCHY',
            'marketInfo.domain': 'mcclatchydc',
            'facebook.app.id': '1407731799445564',
            'marketInfo.clipped_taxonomy': 'News/National',
            'nativo.video.placements': '869363,869362',
            'marketInfo.careerbuilder.lr': 'na',
            'marketInfo.CarsSEO': 'na',
            'marketInfo.CarsAFF': 'na',
            'accuweather.locationString': '',
            'marketInfo.Jobslr': 'na',
            'marketInfo.adretargeting.kill_list': ["simpli.fi"],
            'marketInfo.webmaster_email': 'web@mcclatchydc.com',
            'marketInfo.phone': '202-383-6001',
            'marketInfo.sourcelevel': 'national',
            'pressPlus.zone': 'yhcckue46lomxwNAPLOCaa',
            'marketInfo.zipcode': '20005',
            'marketInfo.shortURL': 'breaking',
            'marketInfo.viewsizes': [{
                "Large": [1200, 600]
            }, {
                "Medium": [992, 300]
            }, {
                "Small": [768, 300]
            }, {
                "Extra-Small": [0, 0]
            }],
            'findnsave.tracking': 'findnsave',
            'marketInfo.JobsSEO': 'naa',
            'accuweather.dev': 'false',
            'marketInfo.state': 'District of Columbia',
            'cs.circ_phone': '202-383-6001',
            'marketInfo.siteId': '91',
            'marketInfo.county': 'Washington metropolitan area',
            'marketInfo.adsizes': {
                "outofpage": {},
                "default": {
                    "None": [],
                    "970x90": [970, 90],
                    "Billboard Flex": [
                        [960, 30],
                        [970, 30],
                        [970, 90],
                        [970, 250]
                    ],
                    "960x30": [960, 30],
                    "728x90": [728, 90],
                    "600x250": [600, 250],
                    "500x300": [500, 300],
                    "468x60": [468, 60],
                    "336x280": [336, 280],
                    "320x450": [320, 450],
                    "320x50": [320, 50],
                    "300x600": [300, 600],
                    "Flex Ad": [
                        [300, 250],
                        [300, 600]
                    ],
                    "Welcome Ad": [
                        [300, 250],
                        [300, 600],
                        [550, 480],
                        [600, 500]
                    ],
                    "300x250": [300, 250],
                    "300x100": [300, 100],
                    "300x75": [300, 75],
                    "300x50": [300, 50],
                    "240x400": [240, 400],
                    "234x60": [234, 60],
                    "216x36": [216, 36],
                    "180x150": [180, 150],
                    "168x28": [168, 28],
                    "160x600": [160, 600],
                    "160x90": [160, 90],
                    "146x60": [146, 60],
                    "120x600": [120, 600],
                    "120x240": [120, 240],
                    "120x20": [120, 20],
                    "Rising Star": [500, 300]
                },
                "floorboard": {
                    "None": [],
                    "285x70": [285, 70]
                },
                "wallpaper": {
                    "None": [],
                    "1600x600": [1600, 600]
                }
            },
            'obituaries.deathNoticeUrl': '',
            'marketInfo.name': 'McClatchy DC',
            'marketInfo.location': 'Washington',
            'marketInfo.region': 'across the US',
            'marketInfo.JobsSiteID': 'na',
            'marketInfo.careerbuilder.dmc_id': '',
            'marketInfo.code': 'MDC',
            'marketInfo.careerbuilder.dmc_code': '',
            'cs.circ_url': 'http://www.mcclatchydc.com/plus/',
            'marketInfo.market_identifier': 'MDC.site_mcclatchydc',
            'accuweather.locationString1': '',
            'wf.resource.static.rootUrl': '/static/',
            'marketInfo.JobsQSSTS': 'DC,US',
            'accuweather.locationString3': '',
            'financialContent.account': 'bellinghamherald',
            'accuweather.locationString2': '',
            'accuweather.locationKey3': '',
            'marketInfo.followLinks': '1',
            'marketInfo.networkid': '7675',
            'accuweather.locationKey2': '',
            'accuweather.locationKey1': '',
            'marketInfo.product': 'site',
            'marketInfo.JobsQSCTY': 'Washington',
            'obituaries.deathNoticeEmail': 'web@mcclatchydc.com',
            'marketInfo.street_address': '700 12th St. NW, Suite 1000, Washington, DC 20005',
            'obituaries.deathNoticePhone': '202-383-6001',
            'accuweather.locationKey': '',
            'marketInfo.taxonomy': 'News/National///',
            'marketInfo.city': 'Washington',
        });
    </script>
    <script type="text/javascript">
        mi_Ads.env.create();
    </script>
    <script type="text/javascript" src="http://ad.crwdcntrl.net/5/c=7436/pe=y/callback=extractPid" async></script>
    <script type="text/javascript" src="http://c.amazon-adsystem.com/aax2/amzn_ads.js"></script>
    <script type="text/javascript">
        try {
            amznads.getAds('3108');
        } catch (e) { /*ignore*/ }
    </script>
    <script type="text/javascript">
        try {
            amznads.setTargetingForGPTAsync('amznslots');
        } catch (e) { /*ignore*/ }
    </script>
    <script type="text/javascript">
        var _prx = window._prx || [];
        _prx.push(['cfg.SetNoAutoStart']);
    </script>
    <script type="text/javascript" src="//s.ntv.io/serve/load.js" async></script>
    <script type="text/javascript">
        var mistats = mistats || {};
        mistats.pagelevel = "Story";
        mistats.cmsid = "Story: 128729769";
        mistats.pagename = "Story: 128729769|Hollywoods Greatest Trick";
        mistats.taxonomy = "News|National|||";
        mistats.channel = "National";
        mistats.contentsource = "NewsDesk_MCC|Sohail AlJameaAli RizviGreg HadleyandElizabeth Koh";
        mistats.pubdate = "2017/02/22";
        mistats.moddate = "2017/02/27 H11";
        mistats.keywords =
            "Hollywood oscar sunday corruption revenue money visual effects graphic artists lobbying mpaa oscars emmys protest abuse wages labor rights vfx industry visual effect degrees movies top ten marvel universal disney paramount twentieth century fox warner brothers sony sony hacks avengers superman Deadpool la la land arrival moana zootopia kubo life of pi rhythm and hues african american white vfx soldier tax subsidies Vancouver life after pi scott ross ilm industrial light and magic digital domain daniel lay producer director films working conditions special effects ang lee george clooney titanic editing harry potter rogue one star wars movie magic Civil War Batman SpiderMan Superman Captain America Guardians of the Galaxy Iron Man Hulk Dr Strange motion graphics pixel fucking pixelfucked when are the oscars big studios unions benefits nominees winner ILM";
    </script>
    <script type='text/javascript' src='http://media.mcclatchydc.com/misites/mcd/mcclatchydc.js'></script>
    <script src="//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5" async></script>
</head>

<body>
    <!-- Powered by Escenic Content Engine and Widget Framework. http://escenic.com -->
    <div class=" ">
        <script type="text/javascript">
            var $window = $window || $(window);
            var $document = $document || $(document);

            function hidePhotoTitle() {
                if ($(document.getElementById("top-galleries")).height() === 0) {
                    $(document.getElementById("top-photos-carousel")).hide();
                }
                if ($(document.getElementById("top-galleries-with-counter")).height() === 0) {
                    $(document.getElementById("top-photos-carousel")).hide();
                    console.log('found');
                }
            }
            $window.on("load", hidePhotoTitle);
        </script>
    </div>
    <div class="">
        <header class=" " role="banner">
            <div class="hidden">
                <div>
                    <div class="ad-widget" id="div-gpt-ad-oop-1" adtype="outofpage" pkg="None" data-ad-policy="onPageLoad" articleId="128729769"></div>
                </div>
            </div>
            <!--
Widget ID: Feature Master with title feature master masthead top:
Referenced feature mi.masterConfig.searchBarType, which was empty. Attempting fall-back value.
-->
            <div id="masthead-container">
                <div class="container">
                    <div class="masthead-row">
                        <div id="masthead-main">
                            <div id="masthead-logo">
                                <a href="http://www.mcclatchydc.com/" target="_top"><img src="http://www.mcclatchydc.com/static/images/mcclatchydc/logo-lg.png" alt="McClatchy DC | McClatchyDC.com" class="img-responsive center-block"></a>
                            </div>
                            <div id="quick-nav" class="hidden-xs">
                                <ul class=" nav navbar-nav">
                                    <li>
                                        <a href="/news/politics-government/white-house/#navlink=subnav">
White House
</a>
                                    </li>
                                    <li>
                                        <a href="/news/politics-government/congress/#navlink=navbar">
Congress
</a>
                                    </li>
                                    <li>
                                        <a href="/news/nation-world/national/#navlink=navbar">
Nation
</a>
                                    </li>
                                    <li>
                                        <a href="/opinion/editorial-cartoons/#navlink=navbar">
Cartoons
</a>
                                    </li>
                                </ul>
                                <div id="site-search-lg" class="visible-lg">
                                    <form action="/search/" class="form-inline" id="site-search" role="search">
                                        <input type="text" name="q" class="form-control" />
                                        <button class="input-group-addon" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                    </form>
                                </div>
                                <div id="search-icon-sm-md" class="site-search dropdown visible-md visible-sm">
                                    <a href="#" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-search"></span></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <li class="input-group">
                                            <form action="/search/" class="form-inline" id="site-search" role="search">
                                                <input type="text" name="q" class="form-control" placeholder="Search the site" />
                                                <button class="input-group-addon" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--
Widget ID: Feature Master with title feature master masthead switch:
Referenced feature mi.masterConfig.masthead-extra, which was empty. Attempting fall-back value.
-->
                        <div id="masthead-ad" class="visible-md visible-lg">
                            <div>
                                <div class="ad-widget" id="div-gpt-ad-2" adtype="default" data-ad-policy="onPageLoad" atf="y" pkg="None" defaultsize="Large" Small="None" Medium="234x60" Extra-Small="None" Large="234x60" articleId="128729769"></div>
                            </div>
                        </div>
                    </div>
                    <div id="main-nav-container">
                        <div class="weather-container hidden-xs">
                            <div class="miWeather">
                                <a href="/weather">
                                    <div class="miWeatherCurrent">
                                        <div class="mi-weather-alert"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="login-subscribe" class="hidden-xs">
                            <!--
Widget ID: Feature Master with title feature master masthead login subscribe links:
Referenced feature mi.masterConfig.masthead.mpp, which was empty. Attempting fall-back value.
-->
                        </div>
                        <div id="main-nav">
                            <nav class="navbar navbar-default " role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
                                </div>
                                <div id="navbar-collapse-1" class="navbar-collapse collapse">
                                    <div id="search-icon-xs" class="site-search dropdown visible-xs">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-search"></span></a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                            <li class="input-group">
                                                <form action="/search/" class="form-inline" id="site-search" role="search">
                                                    <input type="text" name="q" class="form-control" placeholder="Search the site" />
                                                    <button class="input-group-addon" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="weather-container visible-xs">
                                        <div class="miWeather">
                                            <a href="/weather">
                                                <div class="miWeatherCurrent">
                                                    <div class="mi-weather-alert"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!--
Widget ID: Feature Master with title feature master masthead login subscribe links:
Referenced feature mi.masterConfig.masthead.mpp, which was empty. Attempting fall-back value.
-->
                                    <ul class=" nav navbar-nav">
                                        <li class="dropdown">
                                            <a href="/customer-service/#navlink=subnav" class="dropdown-toggle" data-toggle="dropdown" target=""><span class="glyphicon glyphicon-chevron-left"></span>Customer Service <span class="glyphicon glyphicon-chevron-right"></span><b class="caret"></b></a>
                                            <ul class="dropdown-menu" style="padding-top: 0px;">
                                                <li><a href="/customer-service/#navlink=subnav">Customer Service</a></li>
                                                <li><a href="/customer-service/contact-us/#navlink=subnav">Contact Us</a></li>
                                                <li><a href="/customer-service/newsletter-signup/#navlink=subnav">Newsletters</a></li>
                                                <li><a href="/customer-service/#navlink=subnav">Subscriber Services</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-divider"> </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" target=""><span class="glyphicon glyphicon-chevron-left"></span>Politics <span class="glyphicon glyphicon-chevron-right"></span><b class="caret"></b></a>
                                            <ul class="dropdown-menu" style="padding-top: 0px;">
                                                <li><a href="/news/politics-government/#navlink=subnav">All Politics</a></li>
                                                <li><a href="/news/politics-government/congress/#navlink=subnav">Congress</a></li>
                                                <li><a href="/news/politics-government/white-house/#navlink=subnav">White House</a></li>
                                                <li><a href="/news/politics-government/election/#navlink=subnav">Elections</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" target=""><span class="glyphicon glyphicon-chevron-left"></span>Nation <span class="glyphicon glyphicon-chevron-right"></span><b class="caret"></b></a>
                                            <ul class="dropdown-menu" style="padding-top: 0px;">
                                                <li><a href="/news/nation-world/national/#navlink=subnav">All Nation</a></li>
                                                <li><a href="/news/crime/#navlink=subnav">Courts &amp; Crime</a></li>
                                                <li><a href="/news/nation-world/national/economy/#navlink=subnav">Economy</a></li>
                                                <li><a href="/news/nation-world/national/national-security/#navlink=subnav">National Security</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/opinion/editorial-cartoons/#navlink=subnav">
Cartoons
</a>
                                        </li>
                                        <li class="nav-divider"> </li>
                                        <li>
                                            <a href="/customer-service/about-us/#navlink=subnav">
About Us
</a>
                                        </li>
                                        <li>
                                            <a href="/customer-service/contact-us/article24465067.html#navlink=subnav">
Our Newsrooms
</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                var language = "en-us";
                var mast_options = {
                    language: language,
                    locationKey: mi.pageInfo.getConf('accuweather.locationKey'),
                    locationString: mi.pageInfo.getConf('accuweather.locationString'),
                    isDevEnv: mi.pageInfo.getConf('accuweather.dev'),
                    publicationUrl: 'http://www.mcclatchydc.com/',
                    iconPath: 'static/images/widgets/weather/2020/',
                    detail: 'false'
                };
                var windowSize = jQuery(window).width();
                if (windowSize > 767) {
                    jQuery(".mi-weather-alert").populateWeatherAlert("description", mast_options);
                }
                jQuery(".miWeatherCurrent").populateCurrentWeather(mast_options);
            </script>
            <style type="text/css">
                /* Navigation Menu-specific styles */
                /* @media screen and (min-width: 1200px) {
#masthead-container .dropdown:hover .dropdown-menu {
display: block; } }
*/
            </style>
            <script type="text/javascript">
                /*
                var $window = $window || $(window);
                var $nav = $(document.getElementById("main-nav-container"));
                var $toggle = $nav.find(".navbar-header").find(".navbar-toggle");
                var $dropdown = $(".dropdown");
                var $navbarNav = $nav.find(".navbar-nav");
                var $navbarDropdown = $navbarNav.find(".dropdown-menu");
                if ( location.hostname.split('.')[ 1 ] === "elnuevoherald" || language === "es" ) {
                $toggle.prepend('<span class="nav-label hidden-xs">Secciones</span>');
                $dropdown.find(".form-control").attr('placeholder', 'Búsqueda');
                }
                else {
                // add Menu label to nav toggle for small and up
                $toggle.prepend('<span class="nav-label hidden-xs">Full Menu</span>');
                }
                $dropdown.children('a').attr('data-target', '#');
                // Make subnav same height as main nav
                $(document.getElementById('navbar-collapse-1')).on('shown.bs.collapse', function () {
                var navHeight = $navbarNav.height();
                $navbarDropdown.css("min-height", navHeight + "px");
                });
                */
                if (location.hostname.split('.')[1] == 'elnuevoherald') {
                    jQuery('#main-nav-container .navbar-header .navbar-toggle').prepend('<span class="nav-label hidden-xs">Secciones</span>');
                    jQuery('.dropdown .form-control').attr('placeholder', 'Búsqueda');
                } else {
                    // add Menu label to nav toggle for small and up
                    jQuery('#main-nav-container .navbar-header .navbar-toggle').prepend('<span class="nav-label hidden-xs">Full Menu</span>');
                }
                jQuery('.dropdown > a').attr('data-target', '#');
                // Make dropdowns work on hover at large breakpoint
                jQuery(function() {
                    jQuery("#masthead-container .dropdown").hover(
                        function() {
                            if ($(window).width() > 1200) {
                                $(this).addClass('open')
                            }
                        },
                        function() {
                            if ($(window).width() > 1200) {
                                $(this).removeClass('open')
                            }
                        }
                    );
                });
                // Make subnav same height as main nav
                $('#navbar-collapse-1').on('shown.bs.collapse', function() {
                    var nav_height = jQuery("#main-nav .navbar-nav").height();
                    jQuery("#main-nav .navbar-nav .dropdown-menu").css("min-height", nav_height + "px");
                });
            </script>
        </header>
        <div class="container">
            <div id="leaderboard-ad" class="ad border-bottom">
                <div class="visible-xs">
                    <div>
                        <div class="ad-widget" id="div-gpt-ad-3" adtype="default" data-ad-policy="onPageLoad" atf="y" pkg="b" defaultsize="Large" Small="None" Medium="None" Extra-Small="320x50" Large="None" articleId="128729769"></div>
                    </div>
                </div>
                <div class="hidden-xs">
                    <div>
                        <div class="ad-widget" id="div-gpt-ad-4" adtype="default" data-ad-policy="onPageLoad" atf="y" pkg="d" defaultsize="Large" Small="728x90" Medium="728x90" Extra-Small="None" Large="728x90" articleId="128729769"></div>
                    </div>
                </div>
            </div>
        </div>
        <section class="container " role="main">
            <div class="row ">
                <div class="col-sm-12 ">
                    <div id="content-body-23894431-128729769">

                    <!-- custom content here -->

                        <?php include 'custom.php'; ?>

                    <!-- /end custom content -->

                    </div>
                    <script type="text/javascript" language="javascript">
                        $(document).ready(function() {
                            // Removing empty paragraphs first
                            $("#content-body-23894431-128729769 p").filter(function() {
                                var html = $.trim($(this).html());
                                if (html == '' || html == '&nbsp;')
                                    return true;
                            }).remove();
                            // Taking a subset of paragraphs using offset and maximum
                            var offset = 1;
                            var max = -1;
                            if (offset > 1) {
                                $("#content-body-23894431-128729769").children().slice(0, offset - 1).remove();
                            }
                            if (max > -1) {
                                $("#content-body-23894431-128729769").children().slice(max).remove();
                            }
                            // Show dateline field at the beginning of the first paragraph
                            var showDateline = false;
                            var datelineStr = "";
                            if (offset <= 1 && showDateline == true && datelineStr != "") {
                                var firstChild = $("#content-body-23894431-128729769").children().get(0);
                                if ("P" == firstChild.nodeName.toUpperCase()) {
                                    $(firstChild).prepend("<span>" + datelineStr + " - </span>");
                                } else {
                                    $(firstChild).before("<span>" + datelineStr + "</span>");
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </section>
        <div class="container ">
            <div class="ad ad-sense">
                <div>
                    <div class="ad-widget" id="div-gpt-ad-5" adtype="default" data-ad-policy="onPageLoad" atf="n" pkg="m" defaultsize="Large" Small="300x250" Medium="300x250" Extra-Small="300x250" Large="300x250" articleId="128729769"></div>
                </div>
            </div>
        </div>
        <footer class=" ">
            <div class="container">
                <div class="ad">
                    <div>
                        <div class="ad-widget" id="div-gpt-ad-6" adtype="default" data-ad-policy="onPageLoad" atf="n" pkg="None" defaultsize="Large" Small="728x90" Medium="728x90" Extra-Small="300x250" Large="728x90" articleId="128729769"></div>
                    </div>
                </div>
            </div>
            <div id="footer">
                <header id="footer-logo">
                    <div class="container text-center">
                        <a href="http://www.mcclatchydc.com/" target="_top"><img src="http://www.mcclatchydc.com/static/images/mcclatchydc/logo-sm.png" alt="McClatchy DC | McClatchyDC.com" class="img-responsive"></a>
                    </div>
                </header>
                <div class="container hidden-xs">
                    <div class="row ">
                        <div class="col-sm-12 ">
                            <div id="footer-columns">
                                <div class="row " id="footer-menu-columns">
                                    <div class="col-sm-3 footer-column border-right border-xs-remove-right">
                                        <h2 class="heading">
<a href="http://#collapseOne">
Subscriptions
</a>
</h2>
                                        <ul class=" footer-menu">
                                            <li>
                                                <a href="/customer-service/newsletter-signup/#navlink=mi_footer">
Newsletters
</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3 footer-column border-lg-right">
                                        <h2 class="heading">
<a href="http://#collapseTwo">
Site Information
</a>
</h2>
                                        <ul class=" footer-menu">
                                            <li>
                                                <a href="/customer-service/#navlink=mi_footer">
Customer Service
</a>
                                            </li>
                                            <li>
                                                <a href="/customer-service/about-us/#navlink=mi_footer">
About Us
</a>
                                            </li>
                                            <li>
                                                <a href="/customer-service/contact-us/#navlink=mi_footer">
Contact Us
</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3 footer-column border-right border-xs-remove-right">
                                        <h2 class="heading">
<a href="http://#collapseThree">
Social, Mobile & More
</a>
</h2>
                                        <ul class=" footer-menu">
                                            <li>
                                                <a href="https://www.facebook.com/pages/McClatchyDC/27177163800#navlink=mi_footer" target="_blank">
Facebook
</a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/McClatchyDC#navlink=mi_footer" target="_blank">
Twitter
</a>
                                            </li>
                                            <li>
                                                <a href="https://www.youtube.com/user/McClatchyDC#navlink=mi_footer" target="_blank">
YouTube
</a>
                                            </li>
                                            <li>
                                                <a href="/mobile/#navlink=mi_footer">
Mobile Options
</a>
                                            </li>
                                            <li>
                                                <a href="https://itunes.apple.com/us/podcast/beyond-the-bubble/id1199102479?mt=2#navlink=mi_footer">
Beyond The Bubble Podcast
</a>
                                            </li>
                                            <li>
                                                <a href="https://itunes.apple.com/us/podcast/acc-now-podcast/id1173645386?mt=2#navlink=mi_footer">
The ACC Now Podcast
</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3 footer-column">
                                        <h2 class="heading">
<a href="http://#collapseFour">
Advertising
</a>
</h2>
                                        <ul class=" footer-menu">
                                            <li>
                                                <a href="http://www.mcclatchy.com/advertise/#navlink=mi_footer" target="_blank">
Advertise With Us
</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row " id="footer-legal">
                                    <ul class=" footer-menu-legal">
                                        <li>
                                            <a href="/customer-service/copyright/#navlink=mi_footer">
Copyright
</a>
                                        </li>
                                        <li>
                                            <a href="/customer-service/privacy-policy/#navlink=mi_footer">
Privacy Policy
</a>
                                        </li>
                                        <li>
                                            <a href="/customer-service/terms-of-service/#navlink=mi_footer">
Terms of Service
</a>
                                        </li>
                                    </ul>
                                    <script>
                                        jQuery('#footer #footer-columns .heading > a').each(function() {
                                            $(this).attr('href', $(this).attr('href').split('//')[1]);
                                        })
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="accordion" class="visible-xs panel-group">
                    <div class="panel">
                        <div class="panel-heading">
                            <h2 class="heading">
<a href="http://#collapseOne">
Subscriptions
</a>
</h2>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class=" footer-menu">
                                    <li>
                                        <a href="/customer-service/newsletter-signup/#navlink=mi_footer">
Newsletters
</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h2 class="heading">
<a href="http://#collapseTwo">
Site Information
</a>
</h2>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class=" footer-menu">
                                    <li>
                                        <a href="/customer-service/#navlink=mi_footer">
Customer Service
</a>
                                    </li>
                                    <li>
                                        <a href="/customer-service/about-us/#navlink=mi_footer">
About Us
</a>
                                    </li>
                                    <li>
                                        <a href="/customer-service/contact-us/#navlink=mi_footer">
Contact Us
</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h2 class="heading">
<a href="http://#collapseThree">
Social, Mobile & More
</a>
</h2>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class=" footer-menu">
                                    <li>
                                        <a href="https://www.facebook.com/pages/McClatchyDC/27177163800#navlink=mi_footer" target="_blank">
Facebook
</a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/McClatchyDC#navlink=mi_footer" target="_blank">
Twitter
</a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/user/McClatchyDC#navlink=mi_footer" target="_blank">
YouTube
</a>
                                    </li>
                                    <li>
                                        <a href="/mobile/#navlink=mi_footer">
Mobile Options
</a>
                                    </li>
                                    <li>
                                        <a href="https://itunes.apple.com/us/podcast/beyond-the-bubble/id1199102479?mt=2#navlink=mi_footer">
Beyond The Bubble Podcast
</a>
                                    </li>
                                    <li>
                                        <a href="https://itunes.apple.com/us/podcast/acc-now-podcast/id1173645386?mt=2#navlink=mi_footer">
The ACC Now Podcast
</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h2 class="heading">
<a href="http://#collapseFour">
Advertising
</a>
</h2>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class=" footer-menu">
                                    <li>
                                        <a href="http://www.mcclatchy.com/advertise/#navlink=mi_footer" target="_blank">
Advertise With Us
</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h2 class="heading">
<a href="http://#collapseFive">
More
</a>
</h2>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                <script>
                                    jQuery('#footer #accordion .heading > a').attr({
                                        'data-toggle': 'collapse',
                                        'data-parent': '#accordion'
                                    }).each(function() {
                                        $(this).attr('href', $(this).attr('href').split('//')[1]);
                                    })
                                </script>
                                <ul class=" footer-menu-legal">
                                    <li>
                                        <a href="/customer-service/copyright/#navlink=mi_footer">
Copyright
</a>
                                    </li>
                                    <li>
                                        <a href="/customer-service/privacy-policy/#navlink=mi_footer">
Privacy Policy
</a>
                                    </li>
                                    <li>
                                        <a href="/customer-service/terms-of-service/#navlink=mi_footer">
Terms of Service
</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                /* <![CDATA[ */
                var google_conversion_id = 968074018;
                var google_custom_params = window.google_tag_params;
                var google_remarketing_only = true;
                /* ]]> */
            </script>
            <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
            </script>
            <noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/968074018/?value=0&guid=ON&script=0"/>
</div>
</noscript>
            <div class="hidden">
                <div>
                    <div class="ad-widget" id="div-gpt-ad-7" adtype="default" data-ad-policy="onPageLoad" atf="y" pkg="a" defaultsize="Extra-Small" Small="None" Medium="None" Extra-Small="300x75" Large="None" articleId="128729769"></div>
                </div>
            </div>
            <div id="floorboard" class="hidden-xs">
                <div>
                    <div id="floorboard_outer">
                        <div id="floorTagWrapper" style="display:none;">
                            <div class="ad-widget" id="div-gpt-ad-8" adtype="floorboard" atf="y" pkg="a" defaultsize="Large" data-ad-policy="onPageLoad" Small='285x70' Medium='285x70' Extra-Small='None' Large='285x70' articleId='128729769'></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Render Footer from Escenic or WPS based on switch-->
    <script type="text/javascript">
        /* Front end properties configured in nursery */
        var FrontEndConfig = {
            "media.jwplayer.script.location": "http://static.mcclatchyinteractive.com/escenic/jwplayer-7.1.4/jwplayer.js",
            "media.jwplayer.hls.mimeTypes": "vnd.apple.mpegURL,application/x-mpegURL",
            "audioPlayer": "mediaelement",
            "media.jwplayer.sharing.enabled": "true",
            "videoPlayer": "jwplayer",
            "media.jwplayer.options.primary": "html5",
            "media.jwplayer.ga.enabled": "true ",
            "media.jwplayer.hls.enabled": "true",
            "media.jwplayer.key": "tTakaWDwaA/5t6sLfLhYBB4EfEa1ETrJDYnTPw=="
        };
        if (typeof(FrontEndConfig) == 'undefined') {
            FrontEndConfig = {};
        }
        FrontEndConfig.rootURL = "http://www.mcclatchydc.com/";
        /* Client-side device detection */
        var WFClientTypeDef = {
            "extraSmall": "(max-width: 767px)",
            "medium": "(min-width: 992px) and (max-width: 1199px)",
            "large": "(min-width: 1200px)",
            "small": "(min-width: 768px) and (max-width: 991px)"
        };
        var imageSizes = [80, 160, 200, 320, 400, 480, 560, 640, 720, 768, 960, 1080, 1140];
        $(function() {
            $.each(FrontEndConfig, function(key, value) {
                /* Regular properties other than JW Player setup options
                are being processed here */
                if (key.indexOf('media.jwplayer.options') < 0) {
                    FrontEndConfig[key] = WFUtils.parseStringToJSONObject(value);
                }
            });
        });
    </script>
    <script type="text/javascript" src="http://www.mcclatchydc.com/static/js/wps-wf-site-1.0.100-98b9c26-min.js"></script>
    <script type="text/javascript">
        mi_Ads.env.init();
    </script>
    <script type="text/javascript">
        //<![CDATA[
        var clientDT = new Date().getTime();
        document.write(
            '<img style="display:none;" src="http://ece-logger.nandomedia.com:8083/analysis-logger/Logger?rt=1&ctxId=23115&contextPath=21306-23109-23112-23115-&pubId=57&cat=&meta=read-story&objId=128729769&type=article&title=Hollywood%26%23039%3bs+Greatest+Trick&url=http%3a%2f%2fwww.mcclatchydc.com%2fnews%2fnation-world%2fnational%2farticle128729769.html&amp;clientDT=' +
            clientDT + '" alt="" width="1" height="1"/>');
        //]]>
    </script>
    <noscript>
<div>
<img src="http://ece-logger.nandomedia.com:8083/analysis-logger/Logger?rt=1&amp;ctxId=23115&amp;contextPath=21306-23109-23112-23115-&amp;pubId=57&amp;cat=&amp;meta=read-story&amp;objId=128729769&amp;type=article&amp;title=Hollywood%26%23039%3bs+Greatest+Trick&amp;url=http%3a%2f%2fwww.mcclatchydc.com%2fnews%2fnation-world%2fnational%2farticle128729769.html" alt="one pixel graphics" width="1" height="1"/>
</div>
</noscript>
    <script>
        var trackerConfig = null;
        if (typeof {} != 'object') {
            trackerConfig = '{}';
            trackerSend = 'send';
        } else {
            trackerConfig = {};
            if (!trackerConfig.hasOwnProperty('name')) {
                trackerConfig.name = 'wf';
            }
            trackerSend = trackerConfig.name + '.send';
        }
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-3858463-13', trackerConfig);
        ga(trackerSend, 'pageview');
    </script>
    <script type="text/javascript">
        /*Device width fix for Windows Phone 8 and IE 10*/
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement("style");
            msViewportStyle.appendChild(
                document.createTextNode(
                    "@-ms-viewport{width:auto!important}"
                )
            );
            document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
        }
    </script>
    <script type="text/javascript">
        mi.pageInfo.setConf("chartbeat.uid", 62447);
    </script>
    <div id="mistatstag" style="display:none;">
        <script type="text/javascript" src="http://media.mcclatchydc.com/mistats/products/escenic_s_code.js"></script>
        <script type="text/javascript" src="http://media.mcclatchydc.com/mistats/products/escenic.js"></script>
        <script type="text/javascript" src="http://media.mcclatchydc.com/mistats/finalizestats.js"></script>
    </div>
    <!-- Lotame Tracking Tag -->
    <script src="http://tags.crwdcntrl.net/c/7871/cc.js?ns=_cc7871" id="LOTCC_7871"></script>
    <script>
        _cc7871.bcp();
    </script>
</body>

</html>
