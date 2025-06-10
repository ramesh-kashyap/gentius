! function() {
    "use strict";
    try {
        if ("undefined" != typeof document) {
            var e = document.createElement("style");
            e.appendChild(document.createTextNode("iframe#\\:1\\.container{display:none!important}body{top:0%!important}")), document.head.appendChild(e)
        }
    } catch (t) {
        console.error("vite-plugin-css-injected-by-js", t)
    }
}();
! function(e, n) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = n(require("jquery")) : "function" == typeof define && define.amd ? define(["jquery"], n) : (e = "undefined" != typeof globalThis ? globalThis : e || self).HScriptAdminHelper = n(e.$)
}(this, (function(e) {
    "use strict";
    var n;
    /*!
     * jQuery Cookie Plugin v1.4.1
     * https://github.com/carhartl/jquery-cookie
     *
     * Copyright 2013 Klaus Hartl
     * Released under the MIT license
     */
    n || (n = 1, function(e) {
        var n = /\+/g;

        function o(e) {
            return a.raw ? e : encodeURIComponent(e)
        }

        function t(e) {
            return a.raw ? e : decodeURIComponent(e)
        }

        function r(e) {
            return o(a.json ? JSON.stringify(e) : String(e))
        }

        function c(e) {
            0 === e.indexOf('"') && (e = e.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, "\\"));
            try {
                return e = decodeURIComponent(e.replace(n, " ")), a.json ? JSON.parse(e) : e
            } catch (o) {}
        }

        function i(n, o) {
            var t = a.raw ? n : c(n);
            return e.isFunction(o) ? o(t) : t
        }
        var a = e.cookie = function(n, c, l) {
            if (void 0 !== c && !e.isFunction(c)) {
                if ("number" == typeof(l = e.extend({}, a.defaults, l)).expires) {
                    var s = l.expires,
                        u = l.expires = new Date;
                    u.setTime(+u + 864e5 * s)
                }
                return document.cookie = [o(n), "=", r(c), l.expires ? "; expires=" + l.expires.toUTCString() : "", l.path ? "; path=" + l.path : "", l.domain ? "; domain=" + l.domain : "", l.secure ? "; secure" : ""].join("")
            }
            for (var d = n ? void 0 : {}, m = document.cookie ? document.cookie.split("; ") : [], f = 0, p = m.length; f < p; f++) {
                var h = m[f].split("="),
                    g = t(h.shift()),
                    v = h.join("=");
                if (n && n === g) {
                    d = i(v, c);
                    break
                }
                n || void 0 === (v = i(v)) || (d[g] = v)
            }
            return d
        };
        a.defaults = {}, e.removeCookie = function(n, o) {
            return void 0 !== e.cookie(n) && (e.cookie(n, "", e.extend({}, o, {
                expires: -1
            })), !e.cookie(n))
        }
    }(e));
    const o = {
        en: "gb",
        tr: "tr",
        th: "th",
        sk: "sk",
        vi: "vn",
        ru: "ru",
        ar: "sa",
        sr: "rs",
        ro: "ro",
        jp: "jp",
        "pt-PT": "pt",
        ko: "kr",
        it: "it",
        id: "id",
        hi: "in",
        el: "gr",
        fr: "fr",
        es: "es",
        nl: "de",
        "zh-CH": "cn"
    };
    async function t(e) {
        var n, t, r;
        if (!e.translator) return console.warn("translator: config.translator not found");
        const {
            languageItemSelector: c,
            defaultFlagSelector: i,
            onChangeLanguage: a
        } = e.translator;
        if (!c) return console.warn("translator: languageItemSelector not found");
        const l = document.createElement("script");
        l.innerHTML = "function googleTranslateElementInit() {\n        new google.translate.TranslateElement({ pageLanguage: 'en', autoDisplay: false }, 'google_translate_element');\n    }", document.body.appendChild(l);
        const s = document.createElement("div");
        var u;
        s.id = "google_translate_element", s.style.display = "none", document.body.appendChild(s), await (u = "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit", new Promise(((e, n) => {
            const o = document.createElement("script");
            o.src = u, o.async = !0, o.onload = () => e(), o.onerror = () => n(new Error(`ÐžÑˆÐ¸Ð±ÐºÐ° Ð·Ð°Ð³Ñ€ÑƒÐ·ÐºÐ¸ ÑÐºÑ€Ð¸Ð¿Ñ‚Ð°: ${u}`)), document.head.appendChild(o)
        }))), console.log("translator: inited");
        const d = document.querySelectorAll(c);
        if (!d.length) return console.warn("translator: no language items found");
        const m = null == (r = null == (t = null == (n = document.cookie.split("; ").find((e => e.startsWith("googtrans=")))) ? void 0 : n.split("=")[1]) ? void 0 : t.match(/(\w{2})/g)) ? void 0 : r[1];
        if (m && (console.warn("translator: langFromCookies", m), a && a(m), i)) {
            const e = document.querySelector(i);
            e && (e.src = `images/flags/${o[m || "en"]}.png`, e.style.backgroundImage = `url(images/flags/${o[m || "en"]}.png)`, Object.assign(e.style, {
                objectFit: "cover"
            }))
        }
        d.forEach((e => {
            e.addEventListener("click", (n => {
                n.preventDefault();
                const t = e.dataset.googleLang;
                if (t) {
                    if (i) {
                        const e = document.querySelector(i);
                        e && (e.src = `images/flags/${o[t || "gb"]}.png`, e.style.backgroundImage = `url(images/flags/${o[t || "gb"]}.png)`, Object.assign(e.style, {
                            objectFit: "cover"
                        }))
                    }! function(e) {
                        const n = document.querySelector(".goog-te-combo");
                        n && (n.value = e, n.dispatchEvent(new Event("change")))
                    }(t), a && a(t)
                }
            }))
        }))
    }
    class r extends TypeError {
        constructor(e, n) {
            let o;
            const {
                message: t,
                explanation: r,
                ...c
            } = e, {
                path: i
            } = e, a = 0 === i.length ? t : `At path: ${i.join(".")} -- ${t}`;
            super(r ? ? a), null != r && (this.cause = a), Object.assign(this, c), this.name = this.constructor.name, this.failures = () => o ? ? (o = [e, ...n()])
        }
    }

    function c(e) {
        return "object" == typeof e && null != e
    }

    function i(e) {
        return c(e) && !Array.isArray(e)
    }

    function a(e) {
        if ("[object Object]" !== Object.prototype.toString.call(e)) return !1;
        const n = Object.getPrototypeOf(e);
        return null === n || n === Object.prototype
    }

    function l(e) {
        return "symbol" == typeof e ? e.toString() : "string" == typeof e ? JSON.stringify(e) : `${e}`
    }

    function s(e, n, o, t) {
        if (!0 === e) return;
        !1 === e ? e = {} : "string" == typeof e && (e = {
            message: e
        });
        const {
            path: r,
            branch: c
        } = n, {
            type: i
        } = o, {
            refinement: a,
            message: s = `Expected a value of type \`${i}\`${a ? ` with refinement \`${a}\`` : ""}, but received: \`${l(t)}\``
        } = e;
        return {
            value: t,
            type: i,
            refinement: a,
            key: r[r.length - 1],
            path: r,
            branch: c,
            ...e,
            message: s
        }
    }

    function* u(e, n, o, t) {
        var r;
        c(r = e) && "function" == typeof r[Symbol.iterator] || (e = [e]);
        for (const c of e) {
            const e = s(c, n, o, t);
            e && (yield e)
        }
    }

    function* d(e, n, o = {}) {
        const {
            path: t = [],
            branch: r = [e],
            coerce: i = !1,
            mask: a = !1
        } = o, l = {
            path: t,
            branch: r,
            mask: a
        };
        i && (e = n.coercer(e, l));
        let s = "valid";
        for (const c of n.validator(e, l)) c.explanation = o.message, s = "not_valid", yield [c, void 0];
        for (let [u, m, f] of n.entries(e, l)) {
            const n = d(m, f, {
                path: void 0 === u ? t : [...t, u],
                branch: void 0 === u ? r : [...r, m],
                coerce: i,
                mask: a,
                message: o.message
            });
            for (const o of n) o[0] ? (s = null != o[0].refinement ? "not_refined" : "not_valid", yield [o[0], void 0]) : i && (m = o[1], void 0 === u ? e = m : e instanceof Map ? e.set(u, m) : e instanceof Set ? e.add(m) : c(e) && (void 0 !== m || u in e) && (e[u] = m))
        }
        if ("not_valid" !== s)
            for (const c of n.refiner(e, l)) c.explanation = o.message, s = "not_refined", yield [c, void 0];
        "valid" === s && (yield [void 0, e])
    }
    class m {
        constructor(e) {
            const {
                type: n,
                schema: o,
                validator: t,
                refiner: r,
                coercer: c = e => e,
                entries: i = function*() {}
            } = e;
            this.type = n, this.schema = o, this.entries = i, this.coercer = c, this.validator = t ? (e, n) => u(t(e, n), n, this, e) : () => [], this.refiner = r ? (e, n) => u(r(e, n), n, this, e) : () => []
        }
        assert(e, n) {
            return function(e, n, o) {
                const t = p(e, n, {
                    message: o
                });
                if (t[0]) throw t[0]
            }(e, this, n)
        }
        create(e, n) {
            return function(e, n, o) {
                const t = p(e, n, {
                    coerce: !0,
                    message: o
                });
                if (t[0]) throw t[0];
                return t[1]
            }(e, this, n)
        }
        is(e) {
            return f(e, this)
        }
        mask(e, n) {
            return function(e, n, o) {
                const t = p(e, n, {
                    coerce: !0,
                    mask: !0,
                    message: o
                });
                if (t[0]) throw t[0];
                return t[1]
            }(e, this, n)
        }
        validate(e, n = {}) {
            return p(e, this, n)
        }
    }

    function f(e, n) {
        return !p(e, n)[0]
    }

    function p(e, n, o = {}) {
        const t = d(e, n, o),
            c = function(e) {
                const {
                    done: n,
                    value: o
                } = e.next();
                return n ? void 0 : o
            }(t);
        if (c[0]) {
            return [new r(c[0], (function*() {
                for (const e of t) e[0] && (yield e[0])
            })), void 0]
        }
        return [void 0, c[1]]
    }

    function h(e, n) {
        return new m({
            type: e,
            schema: null,
            validator: n
        })
    }

    function g() {
        return h("func", (e => "function" == typeof e || `Expected a function, but received: ${l(e)}`))
    }

    function v() {
        return h("number", (e => "number" == typeof e && !isNaN(e) || `Expected a number, but received: ${l(e)}`))
    }

    function y(e) {
        const n = e ? Object.keys(e) : [],
            o = h("never", (() => !1));
        return new m({
            type: "object",
            schema: e || null,
            * entries(t) {
                if (e && c(t)) {
                    const r = new Set(Object.keys(t));
                    for (const o of n) r.delete(o), yield [o, t[o], e[o]];
                    for (const e of r) yield [e, t[e], o]
                }
            },
            validator: e => i(e) || `Expected an object, but received: ${l(e)}`,
            coercer(n, o) {
                if (!i(n)) return n;
                const t = { ...n
                };
                if (o.mask && e)
                    for (const r in t) void 0 === e[r] && delete t[r];
                return t
            }
        })
    }

    function w(e) {
        return new m({ ...e,
            validator: (n, o) => void 0 === n || e.validator(n, o),
            refiner: (n, o) => void 0 === n || e.refiner(n, o)
        })
    }

    function S() {
        return h("string", (e => "string" == typeof e || `Expected a string, but received: ${l(e)}`))
    }

    function x(e, n, o = {}) {
        return function(e, n, o) {
            return new m({ ...e,
                coercer: (t, r) => f(t, n) ? e.coercer(o(t, r), r) : e.coercer(t, r)
            })
        }(e, h("unknown", (() => !0)), (e => {
            const t = "function" == typeof n ? n() : n;
            if (void 0 === e) return t;
            if (!o.strict && a(e) && a(t)) {
                const n = { ...e
                };
                let o = !1;
                for (const e in t) void 0 === n[e] && (n[e] = t[e], o = !0);
                if (o) return n
            }
            return e
        }))
    }
    const E = y({
            id: v(),
            percentPerHour: v(),
            percentPerDay: v(),
            minDepo: v(),
            maxDepo: v(),
            durationInDays: w(v()),
            additionalData: w(y({
                selector: S(),
                html: S()
            }))
        }),
        k = y({
            languageItemSelector: S(),
            defaultFlagSelector: w(S()),
            onChangeLanguage: w(g())
        }),
        b = y({
            calcSelector: S(),
            profitHourlySelector: w(S()),
            profitDailySelector: w(S()),
            profitMonthlySelector: w(S()),
            profitAnnualSelector: w(S()),
            profitTotalSelector: w(S()),
            hourlyPercentSelector: w(S()),
            dailyPercentSelector: w(S()),
            errorMessageSelector: w(S())
        }),
        I = y({
            setting: (F = E, new m({
                type: "array",
                schema: F,
                * entries(e) {
                    if (F && Array.isArray(e))
                        for (const [n, o] of e.entries()) yield [n, o, F]
                },
                coercer: e => Array.isArray(e) ? e.slice() : e,
                validator: e => Array.isArray(e) || `Expected an array value, but received: ${l(e)}`
            })),
            minDepoSelector: w(S()),
            maxDepoSelector: w(S()),
            planSelector: S()
        });
    var F;
    const D = y({
            value: v(),
            fractions: v(),
            name: S(),
            minWithdraw: v(),
            minDeposit: v()
        }),
        q = (C = S(), j = D, new m({
            type: "record",
            schema: null,
            * entries(e) {
                if (c(e))
                    for (const n in e) {
                        const o = e[n];
                        yield [n, n, C], yield [n, o, j]
                    }
            },
            validator: e => i(e) || `Expected an object, but received: ${l(e)}`,
            coercer: e => i(e) ? { ...e
            } : e
        }));
    var C, j;
    const A = y({
            currencyInputSelector: x(S(), "input[name=PSys]"),
            amountInputSelector: x(S(), "input[name=Sum]"),
            planInputSelector: x(S(), "input[name=Plan]"),
            onChangeForm: w(g())
        }),
        N = y({
            onChangeForm: w(g()),
            formSelector: w(S()),
            formErrorMessage: w(S())
        }),
        M = y({
            onChangeForm: w(g()),
            formSelector: w(S()),
            formErrorMessage: w(S())
        }),
        O = y({
            calc: w(b),
            translator: w(k),
            plans: I,
            common: x(A, {}),
            withdraw: w(N),
            deposit: w(M),
            course: q
        });
    return function(n) {
        (async () => {
            try {
                const o = O.create(n);
                ! function(n) {
                    const o = Math.min(...n.plans.setting.map((e => e.minDepo)));
                    e(n.common.amountInputSelector).val(o.toFixed(2)), e(n.common.currencyInputSelector).filter(":first").attr("checked", 1), e(n.common.planInputSelector).filter(":first").attr("checked", 1), n.plans.setting.map((e => {
                        if (e.additionalData) {
                            const o = e.additionalData ? document.querySelector(`${n.plans.planSelector}:nth-child(${e.id}) ${e.additionalData.selector}`) : null;
                            o && (o.innerHTML = e.additionalData.html)
                        }
                    }))
                }(o), await t(o),
                    function(n) {
                        if (!n.calc) return console.error("calc: config.calc not found");
                        if (!n.calc.calcSelector) return console.warn("calc: page without calc");
                        if (!document.querySelector(n.calc.calcSelector)) return console.warn("calc: page without calc");
                        console.log("calc: inited");
                        const {
                            profitHourlySelector: o,
                            profitDailySelector: t,
                            profitMonthlySelector: r,
                            profitAnnualSelector: c,
                            profitTotalSelector: i,
                            hourlyPercentSelector: a,
                            dailyPercentSelector: l,
                            errorMessageSelector: s
                        } = n.calc, {
                            currencyInputSelector: u,
                            amountInputSelector: d,
                            planInputSelector: m
                        } = n.common, f = e(u), p = e(d), h = e(m);

                        function g() {
                            const d = e(u).filter(":checked"),
                                f = e(m).filter(":checked");
                            s && e(s).text("");
                            const h = d.val(),
                                g = parseFloat(p.val()) || 0,
                                v = parseInt(f.val(), 10),
                                y = n.course[h],
                                w = 1 / (y.value || 1);
                            if (n.common.onChangeForm && n.common.onChangeForm(v, h, g, n), !n.plans.setting || 0 === n.plans.setting.length) return console.warn("calc: No plans configured");
                            const S = n.plans.setting.find((e => e.id === v));
                            if (!S) return s && e(s).text("Selected plan not found"), console.warn("calc: Selected plan not found");
                            if (g < S.minDepo * w) {
                                const n = (S.minDepo * w).toFixed(y.fractions);
                                return s && e(s).css("color", "red").text(`Amount is lower than minimal depo: ${n} ${y.name}(current ${g.toFixed(y.fractions)} ${y.name})`), console.warn(`calc: Amount is lower than minimal depo: ${n} ${y.name}`)
                            }
                            if (g > S.maxDepo * w) {
                                const n = (S.maxDepo * w).toFixed(y.fractions);
                                return s && e(s).css("color", "red").text(`Amount is greater than max depo: ${n} ${y.name}(current ${g.toFixed(y.fractions)} ${y.name})`), console.warn(`calc: Amount is greater than max depo: ${n} ${y.name}`)
                            }
                            if (h in n.course) {
                                const n = g * (S.percentPerHour / 100),
                                    s = n.toFixed(y.fractions),
                                    u = (24 * n).toFixed(y.fractions),
                                    d = (24 * n * 30).toFixed(y.fractions),
                                    m = (24 * n * 30 * 12).toFixed(y.fractions);
                                !S.durationInDays && i && console.warn(`calc: durationInDays for plan ${S.id} not found`);
                                const f = (24 * n * S.durationInDays).toFixed(y.fractions);
                                o && e(o).text(s + " " + y.name), t && e(t).text(u + " " + y.name), r && e(r).text(d + " " + y.name), c && e(c).text(m + " " + y.name), a && e(a).text(S.percentPerHour.toFixed(4) + "%"), l && e(l).text(S.percentPerDay.toFixed(2) + "%"), i && e(i).text(f + " " + y.name)
                            } else console.warn(`calc: ${h} not found in config course`)
                        }

                        function v() {
                            const o = e(`${u}:checked`),
                                t = e(`${m}:checked`),
                                r = o.val(),
                                c = parseInt(t.val(), 10),
                                i = n.plans.setting.find((e => e.id === c));
                            if (!i) return;
                            const a = n.course[r],
                                l = 1 / (a.value || 1),
                                s = i.minDepo * l + Math.pow(10, -a.fractions);
                            e(n.common.amountInputSelector).val(s.toFixed(a.fractions))
                        }
                        h.on("change", v), f.on("change", v), f.on("change", g), p.on("input", g), h.on("change", g), g()
                    }(o),
                    function(e) {
                        console.log("min-max: inited");
                        const {
                            currencyInputSelector: n
                        } = e.common;
                        if (!n) return void console.warn("min-max: currencyInputSelector not found");
                        const o = document.querySelectorAll(n);

                        function t() {
                            const o = document.querySelector(`${n}:checked`);
                            if (!o) return void console.warn("min-max: No checked currency element found");
                            const t = o.value,
                                r = e.course[t];
                            if (!r) return void console.warn(`min-max: No course found for currency ${t}`);
                            const c = 1 / (r.value || 1),
                                i = document.querySelectorAll(e.plans.planSelector);
                            i.length ? i.forEach(((n, o) => {
                                const t = e.plans.setting[o];
                                if (!t) return void console.warn(`min-max: No plan config found for index ${o}`);
                                const i = t.minDepo * c,
                                    a = t.maxDepo * c;
                                if (e.plans.maxDepoSelector) {
                                    const o = n.querySelector(e.plans.maxDepoSelector);
                                    o && (o.textContent = `${a.toFixed(r.fractions)} ${r.name}`)
                                }
                                if (e.plans.minDepoSelector) {
                                    const o = n.querySelector(e.plans.minDepoSelector);
                                    o && (o.textContent = `${i.toFixed(r.fractions)} ${r.name}`)
                                }
                            })) : console.warn("min-max: No plan elements found")
                        }
                        o.length ? (o.forEach((e => e.addEventListener("change", t))), t()) : console.warn("min-max: No elements found for currencyInputSelector")
                    }(o),
                    function(e) {
                        if (!e.withdraw.formSelector) return;
                        if (null === document.querySelector(e.withdraw.formSelector)) return console.warn("withdraw: withdrawal form not found");
                        console.log("withdraw: inited");
                        const {
                            currencyInputSelector: n
                        } = e.common;
                        if (!n) return void console.warn("min-max: currencyInputSelector not found");
                        const o = document.querySelectorAll(n);
                        if (!o.length) return void console.warn("min-max: No elements found for currencyInputSelector");
                        const t = document.querySelector(e.withdraw.formSelector);
                        if (!t) return void console.warn("min-max: withdrawal form elem found");
                        const r = t.querySelector(e.common.amountInputSelector);

                        function c() {
                            if (!e.withdraw.formSelector) return void console.warn("min-max: withdrawal form not provided");
                            const o = document.querySelector(`${n}:checked`);
                            if (!o) return void console.warn("min-max: No checked currency element found");
                            const r = o.value,
                                c = e.course[r];
                            if (!c) return void console.warn(`min-max: No course found for currency ${r}`);
                            e.common.amountInputSelector && $(e.common.amountInputSelector).val(c.minWithdraw.toFixed(c.fractions));
                            const i = t.querySelector(e.common.amountInputSelector),
                                a = parseFloat(null == i ? void 0 : i.value) || 0,
                                l = new CustomEvent("withdraw-form-change", {
                                    detail: {
                                        currency: r,
                                        amount: a,
                                        config: e
                                    }
                                });
                            document.dispatchEvent(l)
                        }
                        o.forEach((e => e.addEventListener("change", c))), c(), e.common.amountInputSelector && $(e.common.amountInputSelector).on("input", (function() {
                            if (!e.withdraw.formSelector) return void console.warn("min-max: withdrawal form not provided");
                            if (!document.querySelector(e.withdraw.formSelector)) return void console.warn("min-max: withdrawal form elem found");
                            const o = document.querySelector(`${n}:checked`);
                            if (!o) return void console.warn("min-max: No checked currency element found");
                            e.withdraw.formErrorMessage && $(e.withdraw.formErrorMessage).text("");
                            const t = o.value,
                                c = e.course[t];
                            if (!c) return void console.warn(`min-max: No course found for currency ${t}`);
                            const i = parseFloat(null == r ? void 0 : r.value) || 0,
                                a = new CustomEvent("withdraw-form-change", {
                                    detail: {
                                        currency: t,
                                        amount: i,
                                        config: e
                                    }
                                });
                            return document.dispatchEvent(a), i < c.minWithdraw ? (e.withdraw.formErrorMessage && $(e.withdraw.formErrorMessage).css("color", "red").text(`Amount is lower than min withdraw: ${c.minWithdraw} ${c.name}(current ${i.toFixed(c.fractions)} ${c.name})`), console.warn(`calc: Amount is lower than min withdraw: ${c.minWithdraw} ${c.name}`)) : void 0
                        })), void 0 !== e.withdraw.onChangeForm && document.addEventListener("withdraw-form-change", (e => {
                            const {
                                currency: n,
                                amount: o,
                                config: t
                            } = e.detail;
                            t.withdraw.onChangeForm(+n, o, t)
                        }));
                        const i = document.querySelector(`${n}:checked`);
                        if (!i) return void console.warn("min-max: No checked currency element found");
                        const a = new CustomEvent("withdraw-form-change", {
                            detail: {
                                currency: i.value,
                                amount: parseFloat(null == r ? void 0 : r.value) || 0,
                                config: e
                            }
                        });
                        document.dispatchEvent(a)
                    }(o),
                    function(e) {
                        if (!e.deposit.formSelector) return;
                        if (null === document.querySelector(e.deposit.formSelector)) return console.warn("deposit: deposit form not found");
                        console.log("deposit: inited");
                        const {
                            currencyInputSelector: n
                        } = e.common;
                        if (!n) return void console.warn("min-max: currencyInputSelector not found");
                        const o = document.querySelectorAll(n);
                        if (!o.length) return void console.warn("min-max: No elements found for currencyInputSelector");
                        const t = document.querySelector(e.deposit.formSelector);
                        if (!t) return void console.warn("min-max: deposit form elem found");
                        const r = t.querySelector(e.common.amountInputSelector);

                        function c() {
                            if (!e.deposit.formSelector) return void console.warn("min-max: deposit form not provided");
                            const o = document.querySelector(`${n}:checked`);
                            if (!o) return void console.warn("min-max: No checked currency element found");
                            const r = o.value,
                                c = e.course[r];
                            if (!c) return void console.warn(`min-max: No course found for currency ${r}`);
                            e.common.amountInputSelector && $(e.common.amountInputSelector).val(c.minDeposit.toFixed(c.fractions));
                            const i = t.querySelector(e.common.amountInputSelector),
                                a = parseFloat(null == i ? void 0 : i.value) || 0,
                                l = new CustomEvent("deposit-form-change", {
                                    detail: {
                                        currency: r,
                                        amount: a,
                                        config: e
                                    }
                                });
                            document.dispatchEvent(l)
                        }
                        o.forEach((e => e.addEventListener("change", c))), c(), e.common.amountInputSelector && $(e.common.amountInputSelector).on("input", (function() {
                            if (!e.deposit.formSelector) return void console.warn("min-max: deposit form not provided");
                            if (!document.querySelector(e.deposit.formSelector)) return void console.warn("min-max: deposit form elem found");
                            const o = document.querySelector(`${n}:checked`);
                            if (!o) return void console.warn("min-max: No checked currency element found");
                            e.deposit.formErrorMessage && $(e.deposit.formErrorMessage).text("");
                            const t = o.value,
                                c = e.course[t];
                            if (!c) return void console.warn(`min-max: No course found for currency ${t}`);
                            const i = parseFloat(null == r ? void 0 : r.value) || 0,
                                a = new CustomEvent("deposit-form-change", {
                                    detail: {
                                        currency: t,
                                        amount: i,
                                        config: e
                                    }
                                });
                            return document.dispatchEvent(a), i < c.minDeposit ? (e.deposit.formErrorMessage && $(e.deposit.formErrorMessage).css("color", "red").text(`Amount is lower than min deposit: ${c.minDeposit} ${c.name}(current ${i.toFixed(c.fractions)} ${c.name})`), console.warn(`calc: Amount is lower than min deposit: ${c.minDeposit} ${c.name}`)) : void 0
                        })), void 0 !== e.deposit.onChangeForm && document.addEventListener("deposit-form-change", (e => {
                            const {
                                currency: n,
                                amount: o,
                                config: t
                            } = e.detail;
                            t.deposit.onChangeForm(+n, o, t)
                        }));
                        const i = document.querySelector(`${n}:checked`);
                        if (!i) return void console.warn("min-max: No checked currency element found");
                        const a = new CustomEvent("deposit-form-change", {
                            detail: {
                                currency: i.value,
                                amount: parseFloat(null == r ? void 0 : r.value) || 0,
                                config: e
                            }
                        });
                        document.dispatchEvent(a)
                    }(o)
            } catch (o) {
                console.error("HscriptAdminHelper:", o)
            }
        })()
    }
}));