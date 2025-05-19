"use strict";
if (void 0 !== rey || void 0 !== window.rey) console.error('Rey needs the "rey" global variable and will override the existing one.'), rey = {
    components: {}
};
else var rey = {
    components: {}
};
var ReyTheme = function() {
    var e = this,
        t = this;

    function i() {}
    this.validation = {}, this.util = {}, this.dom = {}, this.___ = {}, this.vars = {}, this.legacy = {}, this.headerHeight = null, this.elements = {
        html: document.querySelector(":root"),
        body: document.body,
        header: document.querySelector(".rey-siteHeader:not(.--hfx-spacer)"),
        footer: document.querySelector(".rey-siteFooter"),
        site_overlay: document.querySelector(".rey-overlay--site"),
        siteWrapper: document.querySelector(".rey-siteWrapper"),
        sitePreloader: document.getElementById("rey-site-preloader")
    }, this.getElement = function(t) {
        return e.elements[t] ? e.elements[t] : t
    }, "undefined" == typeof reyParams && (console.log("`reyParams` is an essential variable to Rey and must be properly loaded at all times. In case you are loading the JavaScript delayed, make sure to exclude `rey-script`."), window.reyParams = {}), this.params = "object" == typeof reyParams && reyParams ? reyParams : {}, this.validation.isArray = Array.isArray || function(e) {
        return "[object Array]" === toString.call(e)
    }, this.validation.isNodeList = function(e) {
        return e instanceof NodeList
    }, this.validation.isEmpty = function(e) {
        return e.length = 0
    }, this.validation.isNull = function(e) {
        return null === e
    }, this.validation.typeOf = function(e, t) {
        return typeof t === e
    }, this.validation.isBoolean = function(e) {
        return !0 === e || !1 === e
    }, this.util.slice = function(e, t, i) {
        return Array.prototype.slice.call(e, t, i)
    }, this.util.apply = function(t) {
        return t.bind.apply(t, [null].concat(e.util.slice(arguments, 1)))
    }, this.util.isPositionAtBottomEdge = function(e, i) {
        return t.dom.offset(e).top > window.innerHeight * ((i || 80) / 100)
    }, this.validation.isFunction = this.util.apply(this.validation.typeOf, "function"), this.validation.isString = this.util.apply(this.validation.typeOf, "string"), this.validation.isUndefined = this.util.apply(this.validation.typeOf, "undefined"), this.validation.isJSON = function(e) {
        try {
            return JSON.parse(e) && !!e
        } catch (e) {
            return !1
        }
    }, this.validation.isObject = function(t) {
        return !e.validation.isNull(t) && e.validation.typeOf("object", t)
    }, this.validation.isEmptyObject = function(e) {
        return 0 === Object.keys(e).length
    }, this.validation.matches = function(t, i) {
        return Element.prototype.matches || (Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector), e.validation.isHTMLElement(t) && t.matches.call(t, i)
    }, this.validation.testSelector = function(e) {
        document.querySelector("*");
        try {
            document.querySelector(e)
        } catch (e) {
            return !1
        }
        return !0
    }, this.validation.isInstanceOf = function(e, t) {
        if (null === e) return !1;
        let i = e.__proto__;
        for (; null !== i;) {
            if (i.constructor.name === t) return !0;
            i = i.__proto__
        }
        return !1
    }, this.validation.isHTMLElement = function(t) {
        return void 0 !== window.elementor && window.elementor.$preview && window.elementor.$preview.length ? e.validation.isInstanceOf(t, "HTMLElement") : t instanceof HTMLElement
    }, this.validation.matchYoutubeUrl = function(e) {
        var t = /^(?:https?:\/\/)?(?:m\.|www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
        return !!e.match(t) && e.match(t)[1]
    }, this.validation.isValidURL = function(e) {
        try {
            return new URL(e), !0
        } catch (e) {
            return !1
        }
    }, this.validation.isJQuery = function(e) {
        return "object" == typeof e && null != e && null != e.jquery
    }, this.util.debounce = function(e, t, i) {
        var s, r, n, o, a, l = function() {
            var d = Date.now - o;
            d < t && d >= 0 ? s = setTimeout(l, t - d) : (s = null, i || (a = e.apply(n, r), s || (n = r = null)))
        };
        return function() {
            n = this, r = arguments, o = Date.now;
            var d = i && !s;
            return s || (s = setTimeout(l, t)), d && (a = e.apply(n, r), n = r = null), a
        }
    }, this.util.wait = {
        timeout: 400,
        styles: function(e) {
            if (!0 === rey.___.lazyStylesheets) return e();
            setTimeout(rey.util.wait.styles, this.timeout, ...arguments)
        }
    }, this.util.getRandomInt = function(e) {
        return Math.floor(Math.random() * Math.floor(e))
    }, this.util.minTwoDigits = function(e) {
        return (e < 10 ? "0" : "") + e
    }, this.util.ls = {
        set: function(e, t, i) {
            if (e && t && i) {
                var s = {
                    value: t,
                    expires_at: (new Date).getTime() + i / 1
                };
                localStorage.setItem(e.toString(), JSON.stringify(s))
            }
        },
        get: function(e) {
            if (!e) return null;
            var t = JSON.parse(localStorage.getItem(e.toString()));
            if (null !== t) {
                if (!(null !== t.expires_at && t.expires_at < (new Date).getTime())) return t.value;
                localStorage.removeItem(e.toString())
            }
            return null
        }
    }, this.util.expiration = {
        min: 6e4,
        hr: 36e5,
        day: 864e5,
        week: 6048e5,
        month: 18144e6,
        year: 217728e6
    }, this.util.raf = function(e) {
        return requestAnimationFrame(e)
    }, this.util.simpleHash = function(e) {
        let t = 0;
        for (let i = 0; i < e.length; i++) t = (t << 5) - t + e.charCodeAt(i), t |= 0;
        return t.toString(16)
    }, this.util.getUrlVars = function(t) {
        var i, s = {};
        e.validation.isUndefined(t) && (t = window.location.href);
        var r = t.slice(t.indexOf("?") + 1).split("&");
        if (1 === r.length && t === r[0]) return s;
        for (var n = 0; n < r.length; n++) s[(i = r[n].split("="))[0]] = i[1];
        return s
    }, this.util.setUrlVars = function(t, i) {
        if (t = t || {}, e.validation.isUndefined(i) && (i = window.location.href), e.validation.isEmptyObject(t)) return i;
        var s = "?";
        return -1 !== i.indexOf("?") && (s = "&"), i + s + e.util.serialize(t)
    }, this.util.serialize = function(t, i) {
        var s, r = [];
        for (s in t)
            if (t.hasOwnProperty(s)) {
                var n = i ? i + "[" + s + "]" : s,
                    o = t[s];
                r.push(null !== o && "object" == typeof o ? e.util.serialize(o, n) : encodeURIComponent(n) + "=" + encodeURIComponent(o))
            }
        return r.join("&")
    }, this.util.getFormData = function(e, t) {
        t = t || "input, textarea, select";
        var i = {};
        return e.querySelectorAll(t).forEach((e => {
            var t = e.getAttribute("name");
            t && (i[t] = e.value)
        })), i
    }, this.util.versionCompare = function(e, t) {
        if (typeof e + typeof t != "stringstring") return !1;
        for (var i = e.split("."), s = t.split("."), r = 0, n = Math.max(i.length, s.length); r < n; r++) {
            if (i[r] && !s[r] && parseInt(i[r]) > 0 || parseInt(i[r]) > parseInt(s[r])) return 1;
            if (s[r] && !i[r] && parseInt(s[r]) > 0 || parseInt(i[r]) < parseInt(s[r])) return -1
        }
        return 0
    }, this.util.noop = i, this.util.csv = function(e) {
        return this.validation.isArray(e) ? e.map((e => JSON.stringify(e))).join(",") : e
    }, this.util.getNumber = function(e) {
        return t.validation.isString(e) ? parseInt(e.replace(/\D/g, "")) : e
    };
    var s = function(t, s) {
        var r = this;
        this.ok = 0, this.err = 0, this.elem, this.opts = {
            onComplete: i,
            onProgress: i,
            onLoad: i,
            onError: i
        }, this.init = function() {
            if (e.validation.isFunction(s) ? this.opts.onComplete = s : this.opts = Object.assign(this.opts, s || {}), t) {
                if (e.validation.isJQuery(t)) {
                    if (1 === t.length) this.elem = [t.get(0)];
                    else if (t.length > 1) {
                        var i = [];
                        for (let e = 0; e < t.length; e++) i.push(t[e]);
                        this.elem = i
                    }
                } else if (t.nodeName && "IMG" == t.nodeName) this.elem = [t];
                else if (e.validation.isString(t)) {
                    var n = document.querySelector(t);
                    n && (this.elem = n.getElementsByTagName("img"))
                } else null == t.length && ("IMG" == t.nodeName ? this.elem = [t] : this.elem = t.getElementsByTagName("img"));
                if (!this.elem) return this.opts.onComplete();
                if (this.total = this.elem.length, !this.total) return this.opts.onComplete();
                Object.keys(this.elem).forEach((e => {
                    var t = r.elem[e];
                    if (t.complete) return r.onload(t);
                    t.onload = r.onload(t), t.onerror = r.onerror(t)
                }))
            }
        }, this.isDone = function() {
            var t = (this.ok + this.err) / this.total;
            ((1 === t ? this.opts.onComplete : this.opts.onProgress) || e.util.noop)(t, {
                failed: r.err,
                loaded: r.ok,
                total: r.total
            })
        }, this.onload = function(e) {
            r.ok++, r.opts.onLoad(e), r.isDone()
        }, this.onerror = function(e) {
            r.err++, r.opts.onError(e), r.isDone()
        }, this.init()
    };
    this.util.imagesLoaded = function() {
            new s(...arguments)
        }, this.util.alreadyLoaded = function(e) {
            return !e || !!e.hasAttribute("data-loaded") || void e.setAttribute("data-loaded", "")
        }, this.dom.hasClass = function(e, t) {
            return e.classList.contains(t)
        }, this.dom.addClass = function(t, i) {
            e.getElement(t).classList.add(...i.split(" "))
        }, this.dom.removeClass = function(t, i) {
            e.getElement(t).classList.remove(...i.split(" "))
        }, this.dom.setProperty = function(e, t, i) {
            i || (i = document.documentElement), i.style.setProperty(e, t)
        }, this.dom.setProperties = function(e, t) {
            Object.keys(e).forEach((i => {
                t.style.setProperty("--" + i, e[i])
            }))
        }, this.dom.getProperty = function(e, t, i) {
            return t || (t = document.documentElement), !0 === i ? getComputedStyle(t).getPropertyValue(e) : t.style.getPropertyValue(e)
        }, this.dom.offset = function(e) {
            let t = 0,
                i = 0;
            for (; null !== e;) t += e.offsetTop, i += e.offsetLeft, e = e.offsetParent;
            return {
                top: t,
                left: i
            }
        }, this.dom.wrap = function(e, t) {
            e.parentNode.insertBefore(t, e), t.appendChild(e)
        }, this.dom.wrapWithMarkup = function(e, t, i) {
            e.outerHTML = t + e.outerHTML + i
        }, this.dom.children = function(t, i) {
            if (e.validation.testSelector(":scope")) return t.querySelectorAll(e.dom.addInnerClassesToSelector(i, ":scope > "));
            var s = t ? e.util.slice(t.children) : [];
            return i ? s.filter((function(t) {
                return e.validation.matches(t, i)
            })) : s
        }, this.dom.getNodeIndex = function(e) {
            for (var t = e.parentNode.children, i = t.length; i--;)
                if (t[i] == e) return i
        }, this.dom.getSiblings = function(e, t) {
            const i = [];
            let s;
            s = t ? rey.dom.children(e.parentNode, t) : e.parentNode.children;
            for (const t of s) t !== e && i.push(t);
            return i
        }, this.dom.parents = function(e, t) {
            let i = [];
            for (; e.parentNode !== document.body;) e.matches(t) && i.push(e), e = e.parentNode;
            return i
        }, this.dom.parentsUntil = function(t, i, s) {
            const r = [];
            for (; t && t !== document && (!i || !e.validation.matches(t, i)); t = t.parentNode) s ? e.validation.matches(t, s) && r.push(t) : r.push(t);
            return r
        }, this.dom.prevAll = e => {
            const t = [];
            let i = e.parentNode.firstElementChild;
            for (; i !== e;) t.push(i), i = i.nextElementSibling;
            return t
        }, this.dom.notChildOf = (e, t) => Array.from(document.querySelectorAll(e)).filter((e => !e.closest(t))), this.dom.contains = function(t, i) {
            var s = e.validation.isJQuery(i) ? i[0] : i;
            return t.contains(s)
        }, this.dom.getCssStyle = function(e, t) {
            var i = getComputedStyle(e);
            if (rey.validation.isString(t)) return i[t] ? i[t] : "";
            var s = {};
            return t.forEach((e => {
                s[e] = i[e] ? i[e] : ""
            })), s
        }, this.dom.getNodeListArray = function(e, t) {
            if (t = t || document, !e) return [t];
            var i = [];
            return e.length ? rey.validation.isJQuery(e) || rey.validation.isObject(e) ? i = Object.values(e).filter((e => rey.validation.isHTMLElement(e))) : rey.validation.isArray(e) && (i = e) : i = [e], i
        }, this.dom.getNumberProperty = function(e, t, i) {
            i = i || 0;
            var s = getComputedStyle(e);
            if (!s) return i;
            var r = s.getPropertyValue(t);
            return r ? isNaN(r) ? i : parseInt(r) : i
        }, this.dom.addEventListener = function(t, i, s) {
            (s = s || document).addEventListener(t, (function(t) {
                e.validation.isString(t.detail) ? i(t, t.detail) : e.validation.isArray(t.detail) && i(t, ...t.detail)
            }))
        }, this.dom.trigger = function(e, t, i) {
            (t = t || document).dispatchEvent(new CustomEvent(e, {
                detail: i
            }))
        }, this.dom.addInnerClassesToSelector = function(e, t, i) {
            return e.split(",").map((function(e) {
                return (t || "") + e.trim() + (i || "")
            })).join(",")
        }, this.dom.insertHtml = function(e, t, i) {
            e.insertAdjacentHTML(t, i)
        }, this.dom.createElementFromHTML = function(e, i) {
            var s = document.createElement("template");
            if (!t.validation.isString(e)) return e;
            var r = e.trim();
            s.innerHTML = r;
            var n = s.content.firstChild;
            return !t.validation.isEmptyObject(i || {}) && Object.keys(i).forEach((e => {
                n.setAttribute(e, i[e])
            })), n
        }, this.dom.delegate = function(e, t, i, s) {
            t.split(" ").forEach((t => e.addEventListener(t, (function(e) {
                let t = e.target.closest(i);
                e.target && t && (e.initiator = t, s(e))
            }))))
        }, this.dom.createEl = function(e, i) {
            var s = Object.assign({
                    target: document,
                    class: "",
                    attributes: {},
                    text: "",
                    appendTo: !1
                }, i || {}),
                r = s.target.createElement(e);
            return s.class && t.dom.addClass(r, s.class), s.text && (r.textContent = s.text), s.attributes && Object.keys(s.attributes).length && Object.keys(s.attributes).forEach((e => {
                r.setAttribute(e, s.attributes[e])
            })), s.appendTo && s.appendTo.append(r), r
        }, this.dom.normalizeCollection = function(e) {
            if (t.validation.isString(e)) e = document.querySelectorAll(e);
            else if (e instanceof HTMLElement) e = [e];
            else if (e.__proto__ && e.__proto__.constructor.name && 0 === e.__proto__.constructor.name.toLowerCase().indexOf("html")) e = [e];
            else if (t.validation.isJQuery(e))
                if (1 === e.length) e = [e.get(0)];
                else {
                    if (!(e.length > 1)) return [];
                    var i = [];
                    for (let t = 0; t < e.length; t++) i.push(e[t]);
                    e = i
                }
            return e
        }, this.dom.empty = function(e) {
            for (; e.firstChild && e.removeChild(e.firstChild););
        }, this.dom.isHidden = function(e) {
            return null === e.offsetParent
        }, this.jquery = {}, this.jquery.addEventListener = function(e, i, s) {
            t.validation.isUndefined(jQuery) || jQuery(s || document).on(e, i)
        }, this.jquery.trigger = function(e, i, s) {
            t.validation.isUndefined(jQuery) || jQuery(i).trigger(e, s || [])
        }, this.animation = {}, this.animation.slideUp = function(e, t) {
            var i = e.style.display;
            "none" !== i && ("" === i && 0 === e.offsetHeight && 0 === e.offsetWidth || (t = t || 500, e.style.transitionProperty = "height, margin, padding", e.style.transitionDuration = t + "ms", e.style.height = e.offsetHeight + "px", e.offsetHeight, e.style.overflow = "hidden", e.style.height = 0, e.style.paddingTop = 0, e.style.paddingBottom = 0, e.style.marginTop = 0, e.style.marginBottom = 0, setTimeout((() => {
                e.style.display = "none", e.style.removeProperty("height"), e.style.removeProperty("padding-top"), e.style.removeProperty("padding-bottom"), e.style.removeProperty("margin-top"), e.style.removeProperty("margin-bottom"), e.style.removeProperty("overflow"), e.style.removeProperty("transition-duration"), e.style.removeProperty("transition-property")
            }), t)))
        }, this.animation.slideDown = function(t, i, s) {
            i = i || 500, t.style.removeProperty("display");
            let r = e.dom.getCssStyle(t, "display");
            "none" === r && (r = "block"), t.style.display = r;
            let n = t.offsetHeight;
            t.style.overflow = "hidden", t.style.height = 0, t.style.paddingTop = 0, t.style.paddingBottom = 0, t.style.marginTop = 0, t.style.marginBottom = 0, t.offsetHeight, t.style.transitionProperty = "height, margin, padding", t.style.transitionDuration = i + "ms", t.style.height = n + "px", t.style.removeProperty("padding-top"), t.style.removeProperty("padding-bottom"), t.style.removeProperty("margin-top"), t.style.removeProperty("margin-bottom"), setTimeout((() => {
                t.style.removeProperty("height"), t.style.removeProperty("overflow"), t.style.removeProperty("transition-duration"), t.style.removeProperty("transition-property"), s && s()
            }), i)
        }, this.animation.slideToggle = function(e, i) {
            return i = i || 500, "none" === t.dom.getCssStyle(e, "display") ? t.animation.slideDown(e, i) : t.animation.slideUp(e, i)
        }, this.animation.fadeOut = function(e, t) {
            e.style.opacity = 1,
                function i() {
                    (e.style.opacity -= .1) < 0 ? (e.style.display = "none", t && t()) : requestAnimationFrame(i)
                }()
        }, this.animation.fadeIn = function(e, t, i) {
            e.style.opacity = 0, e.style.display = t || "block",
                function t() {
                    var s = parseFloat(e.style.opacity);
                    (s += .1) > 1 ? i && i() : (e.style.opacity = s, requestAnimationFrame(t))
                }()
        }, this.log = function(e) {
            this.params.debug && (rey.validation.isObject(e) ? ("undefined" !== e.script && e.script && console.log(e.script + " is undefined"), "undefined" !== e.message && e.message && console.log(e.message)) : rey.validation.isString(e) && console.log(e))
        }, this.hooks = new function() {
            var e = {
                    removeFilter: function(t, i) {
                        return "string" == typeof t && s("filters", t, i), e
                    },
                    applyFilters: i,
                    applyFilter: i,
                    addFilter: function(t, i, s, n) {
                        return "string" == typeof t && "function" == typeof i && r("filters", t, i, s = parseInt(s || 10, 10), n), e
                    },
                    removeAction: function(t, i) {
                        return "string" == typeof t && s("actions", t, i), e
                    },
                    doAction: function() {
                        var t = Array.prototype.slice.call(arguments),
                            i = t.shift();
                        return "string" == typeof i && n("actions", i, t), e
                    },
                    doActionDeprecated: function() {
                        var i = Array.prototype.slice.call(arguments),
                            s = i.shift();
                        return "string" == typeof s && (-1 !== Object.keys(t.actions).indexOf(s) && console.error(`${s} is deprecated and will be removed in a future update. Please use another hook.`), n("actions", s, i)), e
                    },
                    addAction: function(t, i, s, n) {
                        return "string" == typeof t && "function" == typeof i && (s = parseInt(s || 10, 10), -1 !== t.indexOf(" ") ? t.split(" ").forEach((e => {
                            r("actions", e, i, s, n)
                        })) : r("actions", t, i, s, n)), e
                    },
                    storage: function() {
                        return t
                    }
                },
                t = {
                    actions: {},
                    filters: {}
                };

            function i() {
                var t = Array.prototype.slice.call(arguments),
                    i = t.shift();
                return "string" == typeof i ? n("filters", i, t) : e
            }

            function s(e, i, s, r) {
                if (t[e][i])
                    if (s) {
                        var n, o = t[e][i];
                        if (r)
                            for (n = o.length; n--;) {
                                var a = o[n];
                                a.callback === s && a.context === r && o.splice(n, 1)
                            } else
                                for (n = o.length; n--;) o[n].callback === s && o.splice(n, 1)
                    } else t[e][i] = []
            }

            function r(e, i, s, r, n) {
                var o = {
                        callback: s,
                        priority: r,
                        context: n
                    },
                    a = t[e][i];
                a ? (a.push(o), a = function(e) {
                    for (var t, i, s, r = 1, n = e.length; r < n; r++) {
                        for (t = e[r], i = r;
                            (s = e[i - 1]) && s.priority > t.priority;) e[i] = e[i - 1], --i;
                        e[i] = t
                    }
                    return e
                }(a)) : a = [o], t[e][i] = a
            }

            function n(e, i, s) {
                var r = t[e][i];
                if (!r) return "filters" === e && s[0];
                var n = 0,
                    o = r.length;
                if ("filters" === e)
                    for (; n < o; n++) s[0] = r[n].callback.apply(r[n].context, s);
                else
                    for (; n < o; n++) r[n].callback.apply(r[n].context, s);
                return "filters" !== e || s[0]
            }
            return e
        }, this.frontend = {}, this.frontend.scroll = new function() {
            this.isDisabled = !1, this.cssClass = "--no-scroll", this.disable = function() {
                this.isDisabled || (e.elements.body.classList.add(this.cssClass), this.isDisabled = !0)
            }, this.enable = function() {
                this.isDisabled && (e.elements.body.classList.remove(this.cssClass), this.isDisabled = !1)
            }
        }, this.frontend.overlay = new function() {
            var e = this;
            this.keepOpen = null, this._createdSite = null, this._opened = null, this._classes = {}, this.open = function(t, i) {
                if (this._opened) {
                    if (t === this._opened) return;
                    this.close()
                }
                this.type = t || "header", rey.validation.isString(this.type) || (t = rey.elements.header && rey.dom.contains(rey.elements.header, t) ? "header" : "site"), this.options = Object.assign({
                    id: "",
                    cssClass: "",
                    darken: !1,
                    scroll: !1,
                    click: !0
                }, i || {}), this._classes = {}, this._classes.main = this.type + "-overlay--is-opened", this.options.darken && (this._classes.darken = "--overlay-darken"), this.options.click || (this._classes.nox = "--no-x"), this.options.id && (this._classes.src = "--src-" + this.options.id, this._classes.osrc = "--o-src-" + this.options.id), this.options.cssClass && this.options.cssClass.split(" ").forEach(((t, i) => {
                    e._classes[i] = t
                })), this.toggleClasses(!0), this._opened = this.type, this.options.scroll && rey.frontend.scroll.disable()
            }, this.toggleClasses = function(t) {
                Object.keys(e._classes).forEach((i => {
                    rey.elements.body.classList.toggle(e._classes[i], t)
                }))
            }, this.closeAll = this.close, this.close = function() {
                this.keepOpen || this._opened && (this.toggleClasses(!1), this._opened = null, rey.frontend.scroll.enable())
            }, this.isOpened = function(e) {
                return e ? this._opened === e : this._opened
            }
        }, this.frontend.svgIcon = new function() {
            var e = this;
            this.__svgs = {}, this.__fetches = {}, this.customID, this.svgHolder = document.getElementById("rey-svg-holder"), this.get = function(i, s) {
                if (i) return s ? (e.addToTarget(i, s), this.getTargetSelector()) : (setTimeout((() => {
                    t.frontend.inView({
                        target: `svg[data-icon-placeholder="${i}"]`,
                        cb: function() {
                            e.replacePlaceholder(i)
                        },
                        once: !0
                    })
                }), 1e3), `<svg style="width:1px;height:1px;display:inline-block;" data-icon-placeholder="${i}"></svg>`)
            }, this.addToTarget = function(i, s) {
                if (this.customID = (new Date).getTime(), !this.__svgs[i]) return this.fetch(i, (function() {
                    return e.addToTarget(i, s)
                }));
                if (s) {
                    var r = t.dom.createElementFromHTML(this.__svgs[i], {
                        "data-svg-id": this.customID
                    });
                    s.appendChild(r)
                }
            }, this.getTargetSelector = function() {
                var e = this.customID;
                return this.customID = null, `svg[data-svg-id="${e}"]`
            }, this.replacePlaceholder = function(t) {
                if (!this.__svgs[t]) return this.fetch(t, (function() {
                    e.replacePlaceholder(t)
                }));
                var i = this.__svgs[t] || !1;
                if (i) {
                    var s = document.querySelectorAll(`svg[data-icon-placeholder="${t}"]`);
                    s.length && s.forEach((e => {
                        e.insertAdjacentHTML("afterend", i), e.remove()
                    }))
                }
            }, this.fetch = function(i, s) {
                var r = function(t) {
                    e.__svgs[i] = t, s.call(e, t, i)
                };
                if (t.params.svg_icons[i]) return r(t.params.svg_icons[i]);
                if (!this.__fetches[i]) {
                    if (this.svgHolder) {
                        var n = this.svgHolder.querySelector(`svg[data-icon-id="${i}"]`);
                        if (n) return r(n.outerHTML)
                    }
                    var o = t.params.svg_icons_path.toString().replace("%%icon%%", i);
                    return this.__fetches[i] = o, t.ajax.request("get_svg_icon", {
                        ss: `svg_icon_${i}`,
                        data: {
                            id: i
                        },
                        cb: function(e) {
                            var t = e && e.success ? e.data : "";
                            r(t)
                        }
                    })
                }
            }, this.getArrows = function(e) {
                var t = this.get("arrow-long"),
                    i = '<div class="rey-arrowSvg rey-arrowSvg--%%s%%">',
                    s = "</div>",
                    r = {
                        prev: i.replace("%%s%%", "left") + t + s,
                        next: i.replace("%%s%%", "right") + t + s
                    };
                return e ? r[e] : r
            }
        }, this.frontend.inView = function(e) {
            if (!(e = Object.assign({
                    target: [],
                    cb: i,
                    onHide: i,
                    once: !0,
                    offset: .2,
                    inTab: !1,
                    addClass: !0,
                    toggleClass: !1,
                    cssProp: !1,
                    cssPropTarget: !1,
                    ratioTolerance: !1,
                    delay: !1,
                    disableHideDownwards: !1,
                    root: null,
                    rootMargin: "0px 0px 0px 0px",
                    name: ""
                }, e)).target) return;
            e.target = rey.dom.normalizeCollection(e.target);
            var t = e.target.length;
            if (!t) return;
            if (!("IntersectionObserver" in window)) {
                for (var s = 0; s < e.target.length; s++) e.cb(e.target[s], s);
                return
            }
            var r = t > 0,
                n = 0,
                o = {
                    rootMargin: e.rootMargin,
                    threshold: e.offset
                };
            if (e.root && (o.root = e.root), !1 !== e.delay && (o.delay = e.delay), r) {
                var a = e.target[0].getAttribute("data-viewport-offset");
                a && (o.threshold = a)
            }
            const l = new IntersectionObserver((function(i, s) {
                i.forEach(((i, o) => {
                    var a = !0 === i.isIntersecting;
                    if (e.ratioTolerance && i.boundingClientRect.height / 2 - e.ratioTolerance <= i.intersectionRect.height && i.boundingClientRect.height / 2 + e.ratioTolerance > i.intersectionRect.height && (a = !0), e.cssProp) {
                        var l = i.target;
                        e.cssPropTarget && (l = e.cssPropTarget), l.style.setProperty("--in", a ? 1 : 0)
                    }
                    if (e.toggleClass && i.target.classList.toggle("rey-inView", a), a) n++, e.cb.call(this, i, o, n), e.addClass && !e.toggleClass && i.target.classList.add("rey-inView"), e.once && (s.unobserve(i.target), r ? n === t && s.disconnect() : s.disconnect());
                    else {
                        if (e.disableHideDownwards && i.boundingClientRect.top < 0 && !i.isIntersecting) return;
                        e.onHide.call(this, i.target, o)
                    }
                }))
            }), o);
            if (r)
                for (s = 0; s < t; s++) l.observe(e.target[s]);
            else l.observe(e.target);
            return e.inTab && document.addEventListener("visibilitychange", (function(t) {
                e.target.classList.toggle("rey-inView", "visible" === document.visibilityState)
            })), l
        }, this.frontend.panels = {
            keepOpen: null,
            active: null,
            init: function(e) {
                this.active && !this.keepOpen && (this.active(), this.reset()), this.active = e
            },
            reset: function() {
                this.active = null, this.keepOpen = null
            },
            closeActive: function() {
                this.active && !this.keepOpen && this.active()
            },
            can: function() {
                return !e.validation.isNull(this.active)
            }
        }, this.frontend.gridData = function(e) {
            var t, i = Object.assign({
                data: null,
                container: null,
                grid: null,
                items: [],
                grid_selector: "ul.products",
                item_selector: "li.product"
            }, e || {});
            if (i.data) {
                var s = i.data;
                i.data = document.createElement("div"), i.data.innerHTML = s
            }
            if (i.container) t = i.container;
            else {
                if (!i.grid) return i;
                t = i.grid
            }
            return void 0 === t || (i.grid || (i.grid = t.querySelector(i.grid_selector)), i.grid && (i.items = i.grid.querySelectorAll(i.item_selector))), i
        }, this.frontend.firstInteraction = function() {
            const e = () => {
                t.___.firstInteractionHappened || (t.___.firstInteractionHappened = !0, t.hooks.doAction("first_interaction", this), document.dispatchEvent(new CustomEvent("rey/first_interaction", {
                    detail: {
                        rey: this
                    }
                })))
            };
            reyParams.delay_final_js_event ? window.addEventListener(reyParams.delay_final_js_event, (() => {
                e()
            })) : (["mousemove", "keydown", "click", "touchstart"].forEach((t => {
                document.body.addEventListener(t, (t => {
                    t.isTrusted && e()
                }), {
                    once: !0
                })
            })), window.addEventListener("scroll", (t => {
                e()
            }), {
                once: !0
            }))
        }, this.frontend.firstInteraction(),
        function() {
            var e = function(e, t) {
                    e.target.dispatchEvent(new CustomEvent(t, {
                        detail: e.target,
                        bubbles: !0,
                        cancelable: !0
                    }))
                },
                t = !0,
                i = {
                    x: 0,
                    y: 0
                },
                s = {
                    x: 0,
                    y: 0
                },
                r = {
                    touchstart: function(e) {
                        i = {
                            x: e.touches[0].pageX,
                            y: e.touches[0].pageY
                        }
                    },
                    touchmove: function(e) {
                        t = !1, s = {
                            x: e.touches[0].pageX,
                            y: e.touches[0].pageY
                        }
                    },
                    touchend: function(r) {
                        if (t) e(r, "fc");
                        else {
                            var n = s.x - i.x,
                                o = Math.abs(n),
                                a = s.y - i.y,
                                l = Math.abs(a);
                            Math.max(o, l) > 20 && e(r, o > l ? n < 0 ? "swl" : "swr" : a < 0 ? "swu" : "swd")
                        }
                        t = !0
                    },
                    touchcancel: function(e) {
                        t = !1
                    }
                };
            for (var n in r) document.addEventListener(n, r[n], !1)
        }(), this.assets = {
            __lazyAssets: [],
            __loadedScripts: [],
            __loadedStyles: [],
            obj: {
                styles: {},
                scripts: {}
            }
        }, this.assets.lazyAssets = function(t, i) {
            const s = void 0 !== i;
            if (e.validation.isEmptyObject(t)) s && i();
            else {
                var r = JSON.stringify(t); - 1 === e.assets.__lazyAssets.indexOf(r) ? (e.assets.__lazyAssets.push(JSON.stringify(t)), t.styles && !e.validation.isEmptyObject(t.styles) && e.assets.loadMultipleStyles(t.styles), !t.scripts || e.validation.isEmptyObject(t.scripts) ? s && i() : e.assets.loadMultipleScripts(t.scripts).then((function() {
                    s && i()
                }))) : s && i()
            }
        }, this.assets.loadMultipleScripts = function(t) {
            var i = [];
            return Object.keys(t).forEach((function(s, r) {
                -1 === e.assets.__loadedScripts.indexOf(s) && -1 === window.reyScripts.indexOf(s) && (document.getElementById(s + "-js") || (window.reyScripts.push(s), e.assets.__loadedScripts.push(s), i.push(function(t, i) {
                    return new Promise((function(s, r) {
                        var n = document.createElement("script"); - 1 === t.indexOf("ver=") && (t += "?ver=" + e.params.core.v), n.src = t, n.id = i + "-js", n.async = !1, n.onload = function() {
                            s(t)
                        }, n.onerror = function() {
                            r(t)
                        }, e.elements.body.appendChild(n)
                    }))
                }(t[s], s))))
            })), Promise.all(i)
        }, this.assets.loadMultipleStyles = function(i) {
            var s = document.getElementById("wp-custom-css");
            s || (s = document.getElementById("reycore-inline-styles")), Object.keys(i).map((r => {
                var n = i[r];
                if (-1 === e.assets.__loadedStyles.indexOf(r)) {
                    if (void 0 !== window.reyStyles && e.validation.isArray(window.reyStyles))
                        for (var o = 0; o < window.reyStyles.length; o++)
                            if (-1 !== window.reyStyles[o].indexOf(r)) return;
                    if (-1 === n.indexOf("ver=") && (n += "?ver=" + e.params.core.v), !document.querySelector(`link[id="${r}-css"]:not([data-lazy-href]):not([${t.params.lazy_attribute}])`)) {
                        const e = document.createElement("link");
                        e.id = r + "-css", e.rel = "stylesheet", e.type = "text/css", e.href = n, s ? document.head.contains(s) ? document.head.insertBefore(e, s) : (console.info("The integrity of the <head> tag seems to be invalid. Please carefully check the Head tag for tags which are not allowed (such as div, p, span etc., basically non metadata tags)."), document.body.prepend(e)) : document.head.appendChild(e)
                    }
                    void 0 !== window.reyStyles && void 0 !== window.reyStyles[1] && window.reyStyles[1].push(r), e.assets.__loadedStyles.push(r)
                }
            }))
        }, this.ajax = {
            __queue: {},
            __responses: {}
        }, this.ajax.request = function(e, s) {
            var r = t.params.core.ajax_queue;
            if ((e || !t.validation.isUndefined(s.url)) && !t.validation.isEmptyObject(s)) {
                s = Object.assign({
                    ss: !1,
                    data: {},
                    params: {},
                    cb: i
                }, s);
                var n = !1,
                    o = !1;
                if (t.params.core.r_ajax_debug && (s.ss = !1), t.vars.logged_in && (s.ss = !1), s.ss) {
                    r = !1;
                    var a = [`rey_ss_${t.params.site_id||0}`, `${"string"==typeof s.ss?s.ss:e}`];
                    t.params.lang && a.push(t.params.lang), o = a.join("_"), "refresh" in s.data && s.data.refresh && sessionStorage.removeItem(o), n = sessionStorage.getItem(o)
                }
                var l = JSON.stringify({
                        name: e,
                        args: s
                    }).replace(/\s/g, ""),
                    d = function(e) {
                        delete t.ajax.__queue[l], t.ajax.__responses[l] = e
                    },
                    c = {
                        url: t.params.core.r_ajax_url.toString().replace("%%endpoint%%", e),
                        complete: i,
                        progress: i,
                        error: function(e) {
                            s.cb({
                                success: !1,
                                data: {
                                    error: this.statusText || "Request failed.",
                                    the_error: e
                                }
                            }), console.error("Request failed!", this)
                        },
                        formData: {
                            _nonce: t.params.core.r_ajax_nonce,
                            "reycore-ajax-data": s.data
                        },
                        options: {
                            method: "POST",
                            cache: !1,
                            headers: {
                                "content-type": "application/x-www-form-urlencoded;charset=UTF-8"
                            }
                        }
                    };
                if (c.options = Object.assign(c.options, s.params), !1 === c.options.cache && (c.options.headers["cache-control"] = "no-cache, no-store, max-age=0"), s.formData && (c.formData = Object.assign(c.formData, s.formData)), t.params.lang && (c.formData.lang = t.params.lang), c.success = function(i) {
                        if (!i || i && !i.success) throw console.log("Response: ", i), new Error("Failed response");
                        if (!i.data) throw new Error("No registered actions data!");
                        if (void 0 === i.data[e]) throw new Error("No data in " + e + "!");
                        !n && o && void 0 !== i.data[e] && void 0 !== i.data[e].data && void 0 === i.data[e].data.errors && sessionStorage.setItem(o, JSON.stringify(i));
                        var r = i.data[e],
                            a = function() {
                                s.cb(r), t.hooks.doAction("reycore/ajax_response", e, i)
                            };
                        if (!(!1 in r)) {
                            var l = r.data;
                            if (l && void 0 !== l.errors) return "string" == typeof l.errors ? console.error(l.errors) : Object.keys(l.errors).forEach((function(e) {
                                console.error(e)
                            })), void a();
                            if ("transient" in r && rey.hooks.doAction("ajax/flush_transients/names", r), "assets" in r && r.assets) {
                                var d = r.assets;
                                if (d && "styles" in d && Object.keys(d.styles).length && t.assets.loadMultipleStyles(d.styles), d && "scripts" in d && Object.keys(d.scripts).length) {
                                    var c = !1;
                                    return void t.assets.loadMultipleScripts(d.scripts).then((function() {
                                        c || (c = !0, t.hooks.doAction("reycore/ajax_response/assets"), a())
                                    }))
                                }
                            }
                            a()
                        }
                    }, n && s.ss) return c.success(JSON.parse(n));
                if (void 0 !== t.ajax.__queue[l]) {
                    const e = () => {
                        setTimeout((() => {
                            var i = t.ajax.__responses[l];
                            i ? (c.success.call(this, i), c.complete.call(this, i)) : e()
                        }), 1e3)
                    };
                    return e()
                }
                if (!r || t.validation.isEmptyObject(t.ajax.__queue)) {
                    var u = new XMLHttpRequest;
                    u.open(c.options.method, c.url);
                    var h = function(e) {
                        return rey.validation.isJSON(e) ? JSON.parse(e || "{}") : e
                    };
                    return u.onload = function() {
                        var e = h(this.response);
                        this.status >= 200 && this.status < 400 ? c.success.call(this, e) : c.error.call(this, e), c.complete.call(this, e), d(e)
                    }, u.onerror = function() {
                        var e = h(this.response);
                        c.error.call(this, e), c.complete.call(this, e), d(e)
                    }, u.onabort = function() {}, u.onprogress = function() {
                        c.progress.call(this)
                    }, Object.keys(c.options.headers).forEach((e => {
                        u.setRequestHeader(e, c.options.headers[e])
                    })), u.send(t.util.serialize(c.formData)), t.ajax.__queue[l] = u, u
                }
                setTimeout((function() {
                    return t.ajax.__queue = {}, t.ajax.request(e, s)
                }), 50)
            }
        }, this.ajax.url = function(e, s) {
            if (e && !t.validation.isEmptyObject(s)) {
                s = Object.assign({
                    method: "GET",
                    data: {},
                    params: {},
                    cb: i,
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    }
                }, s);
                var r = new XMLHttpRequest;
                return r.open(s.method, e), r.onload = function() {
                    this.status >= 200 && this.status < 400 ? s.cb.call(this, "success") : s.cb.call(this, "error")
                }, r.onerror = function() {
                    s.cb.call(this, "error")
                }, Object.keys(s.headers).forEach((e => {
                    r.setRequestHeader(e, s.headers[e])
                })), r.send(s.data), r
            }
        }, this.trapFocusHandlers = {}, this.trapFocus = function(e, t = null) {
            var i = Array.from(e.querySelectorAll("summary, a[href], button:enabled, [tabindex]:not([tabindex^='-']), [draggable], area, input:not([type=hidden]):enabled, select:enabled, textarea:enabled, object, iframe"));
            if (i.length) {
                var s = i[0],
                    r = i[i.length - 1];
                t || (t = s), this.removeTrapFocus(), this.trapFocusHandlers.focusin = t => {
                    t.target !== e && t.target !== r && t.target !== s || document.addEventListener("keydown", this.trapFocusHandlers.keydown)
                }, this.trapFocusHandlers.focusout = e => {
                    document.removeEventListener("keydown", this.trapFocusHandlers.keydown)
                }, this.trapFocusHandlers.keydown = function(t) {
                    t.code && "TAB" === t.code.toUpperCase() && (t.target !== r || t.shiftKey || (t.preventDefault(), s.focus()), t.target !== e && t.target !== s || !t.shiftKey || (t.preventDefault(), r.focus()))
                }, document.addEventListener("focusout", this.trapFocusHandlers.focusout), document.addEventListener("focusin", this.trapFocusHandlers.focusin), t.focus(), "INPUT" === t.tagName && ["search", "text", "email", "url"].includes(t.type) && t.value && t.setSelectionRange(0, t.value.length)
            }
        }, this.removeTrapFocus = function(e = null) {
            document.removeEventListener("focusin", this.trapFocusHandlers.focusin), document.removeEventListener("focusout", this.trapFocusHandlers.focusout), document.removeEventListener("keydown", this.trapFocusHandlers.keydown), e && e.focus()
        }, this.vars.logged_in = this.elements.body.classList.contains("logged-in"), this.vars.page_id = parseInt(this.elements.body.getAttribute("data-id") || 0), this.vars.elementor_edit_mode = document.body.classList.contains("rey-elementor-edit-mode"), this.vars.customizer_preview = this.elements.body.classList.contains("customizer-preview-mode"), this.vars.is_edit_mode = this.vars.elementor_edit_mode || this.vars.customizer_preview, this.vars.container_size = parseInt(this.elements.html.getAttribute("data-container") || 1440), this.vars.is_rtl = !!this.elements.body.classList.contains("rtl"), this.vars.headerIsFixed = !1, this.vars.is_global_section_mode = this.elements.body.classList.contains("single-rey-global-sections"), this.vars.is_touch_device = function() {
            return "ontouchstart" in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0
        }, this.vars.breakpoints = this.hooks.applyFilters("rey/breakpoints", {
            mobile: "(max-width: 767px)",
            tablet: "(min-width: 768px) and (max-width: 1024px)",
            desktop: "(min-width: 1025px)"
        }), this.refresh = () => {
            this.vars.is_touch = this.vars.is_touch_device(), this.vars.is_mobile = window.matchMedia(this.vars.breakpoints.mobile).matches, this.vars.is_tablet = window.matchMedia(this.vars.breakpoints.tablet).matches, this.vars.is_desktop = window.matchMedia(this.vars.breakpoints.desktop).matches, this.vars.is_desktop_touch = window.matchMedia(this.vars.breakpoints.desktop).matches && this.vars.is_touch, this.vars.adminBar = this.elements.body.classList.contains("admin-bar") ? this.vars.is_desktop ? 32 : 46 : 0, this.vars.device = this.vars.is_mobile ? "mobile" : this.vars.is_tablet ? "tablet" : !!this.vars.is_desktop && "desktop", this.vars.mobileClickEvent = reyParams.mobile_click_event || (this.vars.is_touch ? "touchstart" : "click"), this.vars.mobileClickEventParams = "touchstart" === this.vars.mobileClickEvent ? {
                passive: !0
            } : {}, this.vars.device && this.elements.body.setAttribute("data-rey-device", this.vars.device)
        }, this.refresh(), this.___.lastDevice = this.vars.device, window.addEventListener("resize", this.util.debounce((() => {
            this.refresh(), window.dispatchEvent(new CustomEvent("rey/window/resize")), this.___.lastDevice !== this.vars.device && window.dispatchEvent(new CustomEvent("rey/window/breakpoint")), this.___.lastDevice = this.vars.device
        }), 300)), this.___.youTubeApiLoaded = !1, this._extend = function() {
            String.prototype.replaceAll || (String.prototype.replaceAll = function(e, t) {
                return "[object regexp]" === Object.prototype.toString.call(e).toLowerCase() ? this.replace(e, t) : this.replace(new RegExp(e, "g"), t)
            })
        }, this._extend(), this.template || (void 0 !== window._rey_template ? this.template = window._rey_template : this.template = function() {
            return function() {
                return ""
            }
        })
};
Object.assign(rey, new ReyTheme), document.addEventListener(reyParams.delay_forced_js_event || "DOMContentLoaded", (e => {
    rey.hooks.addAction("first_interaction", (function() {
        var e;
        reyParams.theme_js_params.header_height_on_first_interaction && function() {
                if (rey.elements.header) {
                    var e = function() {
                        var e = rey.elements.header.cloneNode(!0);
                        e.style.visibility = "hidden", e.style.pointerEvents = "none", e.classList.remove("--fixed-shrinking", "header-pos--fixed", "--scrolled", "--shrank"), rey.elements.header.after(e), rey.headerHeight = e.offsetHeight, document.documentElement.style.setProperty("--header-default--height", rey.headerHeight + "px"), e.remove()
                    };
                    e(), window.addEventListener("resize", rey.util.debounce(e, 500)), window.addEventListener("rey/refresh_header", rey.util.debounce(e, 500))
                }
            }(), rey.elements.header ? .classList.remove("--loading-fixed-desktop", "--loading-fixed-tablet", "--loading-fixed-mobile"), (e = document.querySelectorAll("video[data-lazy-video], iframe[data-lazy-video]")).length && rey.frontend.inView({
                target: e,
                cb: function(e) {
                    e.target.setAttribute("src", e.target.getAttribute("data-lazy-video"))
                },
                once: !0
            }),
            function() {
                if (reyParams && reyParams.theme_js_params && reyParams.theme_js_params.embed_responsive) {
                    var e = document.querySelectorAll(reyParams.theme_js_params.embed_responsive.elements.join(","));
                    e.length && (rey.assets.loadMultipleStyles({
                        "rey-embed-responsive": reyParams.theme_js_params.embed_responsive.src
                    }), e.forEach((e => {
                        e.closest(".embed-responsive") || e.closest(".wp-block-embed") || rey.dom.wrapWithMarkup(e, '<div class="embed-responsive embed-responsive-16by9">', "</div>")
                    })))
                }
            }(), document.addEventListener("keydown", (e => {
                27 == e.keyCode && rey.frontend.panels.can() && (rey.frontend.panels.closeActive(), rey.frontend.overlay.close())
            })), document.querySelectorAll(".rey-overlay:not(.--no-close,.--no-js-close)").forEach((e => {
                e.addEventListener("click", (e => {
                    e.preventDefault(), rey.frontend.panels.closeActive(), rey.frontend.overlay.close()
                }))
            })), rey.hooks.doActionDeprecated("reytheme/init")
    }));
    var t = e => {
        reyParams.log_events && console.log(`Fired "rey-DOMContentLoaded" after "${e}" event.`), document.dispatchEvent(new CustomEvent("rey-DOMContentLoaded", {
            detail: {
                event: e,
                logEvents: reyParams.log_events
            }
        }))
    };
    reyParams.log_events && console.log(`Started Rey on "${e.type}" event.`), reyParams.delay_js_dom_event && "DOMContentLoaded" === e.type ? document.addEventListener(reyParams.delay_js_dom_event, (() => {
        t(reyParams.delay_js_dom_event)
    })) : t(e.type)
})), "undefined" != typeof jQuery && function(e) {
    e.rey || (e.rey = {}), e.rey.helpers = new function() {
        var t = this;
        this.methods = {
            isEmpty: "validation.isEmpty",
            isNull: "validation.isEmpty",
            typeOf: "validation.typeOf",
            isFunction: "validation.isFunction",
            isString: "validation.isString",
            isUndefined: "validation.isUndefined",
            isObject: "validation.isObject",
            isEmptyObject: "validation.isEmptyObject",
            matches: "validation.matches",
            testSelector: "validation.testSelector",
            isInstanceOf: "validation.isInstanceOf",
            isHTMLElement: "validation.isHTMLElement",
            slice: "util.slice",
            apply: "util.apply",
            raf: "util.raf",
            children: "dom.children",
            addSvgIcon: "frontend.getSvgIcon",
            getSvgArrows: "frontend.svgIcon.getArrows",
            getUrlVars: "util.getUrlVars",
            inView: "frontend.inView",
            frontendAjax: "ajax.request",
            lazyAssets: "assets.lazyAssets",
            loadMultipleScripts: "assets.loadMultipleScripts",
            loadMultipleStyles: "assets.loadMultipleStyles",
            params: "params",
            isArray: "validation.isArray",
            matchYoutubeUrl: "validation.matchYoutubeUrl",
            isValidURL: "validation.isValidURL",
            setProperty: "dom.setProperty",
            getProperty: "dom.getProperty",
            debounce: "util.debounce",
            ls: "util.ls",
            expiration: "util.expiration",
            getRandomInt: "util.getRandomInt",
            minTwoDigits: "util.minTwoDigits",
            addFilter: "hooks.addFilter",
            removeFilter: "hooks.removeFilter",
            applyFilter: "hooks.applyFilters",
            log: "log",
            youTubeApiLoaded: "___.youTubeApiLoaded",
            logged_in: "vars.logged_in",
            page_id: "vars.page_id",
            elementor_edit_mode: "vars.elementor_edit_mode",
            customizer_preview: "vars.customizer_preview",
            is_edit_mode: "vars.is_edit_mode",
            $sitePreloader: "vars.$sitePreloader",
            $container_size: "vars.$container_size",
            is_rtl: "vars.is_rtl",
            is_global_section_mode: "vars.is_global_section_mode",
            is_touch_device: "vars.is_touch_device",
            is_touch: "vars.is_touch_device",
            is_mobile: "vars.is_mobile",
            is_tablet: "vars.is_tablet",
            is_desktop: "vars.is_desktop",
            is_desktop_touch: "vars.is_desktop_touch",
            adminBar: "vars.adminBar"
        }, Object.keys(this.methods).forEach((e => {
            var i = t.methods[e],
                s = rey;
            i.split(".").forEach((e => {
                s = s[e]
            })), rey.validation.isFunction(s) ? t[e] = function(...t) {
                return console.log(`$.rey.${e} function is deprecated. Please use rey.${i} instead.`), s(...t)
            } : rey.validation.isObject(s) ? t[e] = function() {
                return console.log(`$.rey.${e} object is deprecated. Please use rey.${i} instead.`), s
            } : rey.validation.isBoolean(s) && (t[e] = function() {
                return console.log(`$.rey.${e} var is deprecated. Please use rey.${i} instead.`), s
            })
        })), this.elements = {
            $body: e(rey.elements.body),
            $header: e(rey.elements.header),
            $footer: e(rey.elements.footer),
            $site_overlay: e(rey.elements.site_overlay),
            $siteWrapper: e(rey.elements.siteWrapper),
            $sitePreloader: e(rey.elements.sitePreloader)
        }, this.headerOverlayOpened = function() {
            return "header" === rey.frontend.overlay.isOpened()
        }, this.overlay = rey.frontend.overlay.close, this.doScroll = {
            disable: function() {
                rey.frontend.scroll.disable()
            },
            enable: function() {
                rey.frontend.scroll.enable()
            }
        }
    }, e.reyHelpers = e.rey.helpers, e.reyCoreHelpers = e.rey.helpers
}(jQuery);
! function() {
    "use strict";
    var e = function() {
        this.init = function() {
            rey.hooks.addAction("first_interaction", (() => {
                this.onFirstInteraction()
            })), rey.hooks.doAction("reycore/init", this)
        }, this.onFirstInteraction = function() {
            "undefined" != typeof reyParams && Object.keys(reyParams).length && (this.lazyStyleSheets(), this.markTop(), this.dirAware(), this.emptyElementsCheck(), this.doCachedMenus(), this.getHeights(), this.loadLazyAssets(), this.events())
        }, this.events = function() {
            document.querySelectorAll('.js-scroll-to[data-target^="#"], .js-scroll-to[href^="#"], .js-scroll-to > a[href^="#"], .--scrollto > a[href^="#"]').forEach((e => {
                e.addEventListener("click", (e => {
                    e.preventDefault();
                    var t = e.currentTarget.getAttribute("data-target") || e.currentTarget.getAttribute("href") || "";
                    if (t) {
                        var r = document.querySelector(t);
                        if (r) {
                            var n = rey.dom.offset(r).top;
                            rey.elements.header && rey.elements.header.classList.contains("header-pos--fixed") && (n -= rey.elements.header.outerHeight), n -= 50, isNaN(n) || window.scrollTo({
                                top: n,
                                behavior: "smooth"
                            })
                        }
                    }
                }))
            })), document.querySelectorAll("a.js-back-button, .js-back-button a").forEach((e => {
                e.addEventListener("click", (e => {
                    e.preventDefault(), window.history.back()
                }))
            })), document.querySelectorAll(".rey-postSocialShare a[data-share-props]").forEach((e => {
                e.addEventListener("click", (e => {
                    e.preventDefault();
                    var t = JSON.parse(e.currentTarget.getAttribute("data-share-props") || "{}");
                    window.open(e.currentTarget.getAttribute("href"), t.name || "", t.size || "width=550,height=550")
                }))
            })), window.addEventListener("scroll", rey.util.debounce(this.markTop, 200)), rey.hooks.addAction("reycore/ajax_response", (function(e, t) {
                t.data && "undefined" != typeof SimpleScrollbar && SimpleScrollbar.initAll()
            }))
        }, this.lazyStyleSheets = function() {
            var e = document.querySelectorAll(`link[${reyParams.lazy_attribute}]`);
            if (e.length) {
                var t = 0;
                e.forEach(((r, n) => {
                    var a = function(r) {
                        e.length - 1 === t && (rey.___.lazyStylesheets = !0), t++
                    };
                    r.onload = a, r.onerror = a, r.setAttribute("href", r.getAttribute(reyParams.lazy_attribute))
                }))
            } else rey.___.lazyStylesheets = !0
        }, this.loadLazyAssets = function() {
            rey.vars.is_edit_mode || Object.keys(reyParams.lazy_assets).forEach((e => {
                document.querySelectorAll(e).length && rey.assets.lazyAssets(reyParams.lazy_assets[e])
            }))
        }, this.emptyElementsCheck = function() {
            var e = document.querySelectorAll(reyParams.check_for_empty);
            e.length && rey.frontend.inView({
                target: e,
                cb: function(e) {
                    var t = e.target;
                    t.children.length || t.classList.add("--empty")
                },
                once: !0
            })
        }, this.markTop = function() {
            rey.elements.body.toggleAttribute("data-at-top", !window.pageYOffset > 0)
        }, this.dirAware = function() {
            var e = 0;
            if (reyParams.core.js_params.dir_aware) {
                var t = function() {
                    var t = window.pageYOffset;
                    t > e ? rey.elements.body.setAttribute("data-direction", "down") : rey.elements.body.setAttribute("data-direction", "up"), e = t <= 0 ? 0 : t
                };
                window.addEventListener("scroll", rey.util.debounce(t, reyParams.core.js_params.sticky_debounce)), t()
            }
        }, this.getHeights = function() {
            var e = document.querySelectorAll(".js-get-height");
            e.length && rey.frontend.inView({
                target: e,
                cb: function(e) {
                    var t = e.target,
                        r = e.boundingClientRect.height;
                    r < 1 && t.childNodes.forEach((e => {
                        1 === t.childNodes.length && e.classList.contains("--no-h") || (r += e.offsetHeight)
                    })), r && t.style.setProperty("--height", r + "px")
                },
                once: !0
            })
        }, this.doCachedMenus = function() {
            rey.frontend.inView({
                target: document.querySelectorAll('ul[data-menu-qid]:not([data-menu-qid=""])'),
                cb: function(e) {
                    var t = e.target;
                    t.querySelectorAll(".o-id-" + t.getAttribute("data-menu-qid")).forEach((e => {
                        rey.dom.parents(e, ".current-menu-ancestor").forEach((e => {
                            e.classList.add("current-menu-item")
                        })), e.classList.add("current-menu-item")
                    }))
                },
                once: !0
            })
        }, this.init()
    };
    document.addEventListener("rey-DOMContentLoaded", (function(t) {
        t.detail.logEvents && console.log(`ReyCore started on "rey-DOMContentLoaded" after "${t.detail.event}" event.`), new e
    }))
}();
! function(e) {
    "use strict";
    var t = function() {
        var t = this;
        return this.init = function() {
            this.genericHtml(), this.canShip(), this.passVisibility(), this.overrideSelect2Defaults(), this.modifyQuantityNumberField(), this.cleanupNoMargin(), this.events(), rey.hooks.doAction("woocommerce/init", this)
        }, this.events = function() {
            rey.hooks.addAction("product/loaded", (e => {
                e.length && (rey.hooks.doAction("refresh_general_html", e), rey.hooks.doAction("animate_items", e), e.forEach((e => {
                    this.modifyQuantityLoop(e), this.modifyQuantityNumberField(e)
                })))
            })), rey.jquery.addEventListener("rey/product/loaded", (function(e, t) {
                t.length && rey.hooks.doAction("product/loaded", rey.dom.normalizeCollection(t))
            }));
            var o = document.querySelector(".woocommerce-store-notice__dismiss-link");
            o && o.addEventListener("click", (function() {
                window.dispatchEvent(new Event("rey/refresh_header"))
            })), e(document).on("click", ".rey-toggleCoupon-btn", (function(t) {
                t.preventDefault();
                var o = e(this).next(".rey-toggleCoupon-content");
                o.toggleClass("--visible"), e('input[type="text"]', o).focus()
            })), e(document).on("change keydown", "input.qty[max]", (function(t) {
                var o = e(this),
                    n = parseFloat(o.attr("max") || 0);
                n && parseFloat(o.val()) > n && o.val(n)
            })), rey.hooks.addAction("ajax_variation_popup/after_open", (function(e) {
                t.modifyQuantityNumberField(e.data)
            })), rey.hooks.addAction("after_quickview", (function(e) {
                t.modifyQuantityNumberField(e)
            })), e(document.body).on("added_to_cart removed_from_cart wc_fragments_refreshed updated_wc_div wc_fragments_loaded", (function(e) {
                t.modifyQuantityNumberField()
            }));
            var n = function() {
                document.body.dispatchEvent(new Event("jetpack-lazy-images-load"))
            };
            rey.hooks.addAction("minicart/opened", n), rey.hooks.addAction("minicart/tab", n), rey.hooks.addAction("ajaxfilters/finished", (function() {
                n()
            })), rey.hooks.addAction("product/loaded", (function(e) {
                n()
            })), e(document).on("rey/woocommerce/product/rendered", (function(e) {
                console.log(e.detail.node)
            }))
        }, this.genericHtml = function() {}, this.canShip = function() {
            var e = document.querySelector(".rey-canShip");
            if (e) {
                var t;
                rey.frontend.inView({
                    target: e,
                    once: !0,
                    cb: function() {
                        t || (rey.ajax.request("get_shipping_status", {
                            ss: !0,
                            data: {
                                text: e.getAttribute("data-text"),
                                no_text: e.getAttribute("data-no-text")
                            },
                            params: {
                                cache: !1
                            },
                            cb: function(t) {
                                t.data && (e.innerHTML = t.data)
                            }
                        }), t = !0)
                    }
                })
            }
        }, this.passVisibility = function() {
            var t = e('input[type="password"].--suports-visibility, #customer_login .woocommerce-Input[type="password"]');
            t.length && t.each((function(t, o) {
                var n = e(o);
                n.wrap('<span class="__passVisibility-wrapper" />'), e('<span class="__passVisibility-toggle" data-lazy-hidden><svg aria-hidden="true" role="img" class="rey-icon rey-icon-eye" viewBox="0 0 462 346"><g fill="currentColor"><path d="M231,346 C361.436183,346 462,200.328259 462,173 C462,140.487458 358.577777,0 231,0 C93.5440287,0 -9.09494702e-13,147.592833 0,173 C-9.09494702e-13,202.891659 98.7537165,346 231,346 Z M56.5824289,160.219944 C66.7713209,143.972119 80.8380648,126.358481 96.9838655,110.409249 C137.421767,70.4636625 183.742247,47 231,47 C274.601338,47 320.969689,69.950087 362.198255,108.597753 C379.196924,124.532309 394.05286,142.102205 404.598894,158.109745 C408.097652,163.420414 410.921082,168.270183 412.937184,172.308999 C410.938053,176.17267 408.227675,180.777961 404.935744,185.802242 C394.313487,202.014365 379.591292,219.766541 362.844874,235.861815 C321.537134,275.563401 275.324602,299 231,299 C185.594631,299 139.232036,275.892241 98.4322564,236.780777 C81.8396065,220.874739 67.3726628,203.315324 57.0346413,187.230288 C53.7287772,182.08666 51.0347693,177.372655 49.078323,173.422728 C50.9746819,169.614712 53.5157275,165.110292 56.5824289,160.219944 Z" fill-rule="nonzero"></path> <circle id="Oval" cx="231" cy="173" r="51"></circle></g></svg></span>').insertAfter(n).on("click", (function(e) {
                    n.parent().toggleClass("--text"), n.attr("type", (function(e, t) {
                        return "password" == t ? "text" : "password"
                    }))
                }))
            }))
        }, this.overrideSelect2Defaults = function() {
            reyParams && reyParams.js_params && reyParams.js_params.select2_overrides && (void 0 !== e.fn.select2 && e.fn.select2.defaults && e.fn.select2.defaults.hasOwnProperty("set") && (e.fn.select2.defaults.set("containerCssClass", "select2-reyStyles"), e.fn.select2.defaults.set("dropdownCssClass", "select2-reyStyles")), void 0 !== e.fn.selectWoo && e.fn.selectWoo.defaults && e.fn.selectWoo.defaults.hasOwnProperty("set") && (e.fn.selectWoo.defaults.set("containerCssClass", "select2-reyStyles"), e.fn.selectWoo.defaults.set("dropdownCssClass", "select2-reyStyles")))
        }, this.modifyQuantityNumberField = function(e) {
            reyParams ? .js_params ? .force_qty_text_field && (e = (rey.validation.isJQuery(e) ? e[0] : e) || document).querySelectorAll('.rey-qtyField input[type="number"]').forEach((e => {
                e.setAttribute("type", "text")
            }))
        }, this.modifyQuantityLoop = function(e) {
            e.querySelectorAll(".rey-loopQty input.qty:not(.product-quantity input.qty)").forEach((e => {
                var t = parseFloat(e.getAttribute("min"));
                t >= 0 && parseFloat(e.value) < t && (e.value = t)
            }))
        }, this.cleanupNoMargin = function() {
            e("ul.products.--no-margins").each((function() {
                var t = e(this);
                t.next("div[data-colspans]").length && t.removeClass("--no-margins")
            }))
        }, this.init()
    };
    document.addEventListener("rey-DOMContentLoaded", (function(e) {
        rey.woocommerce = new t
    }))
}(jQuery);
! function(e) {
    "use strict";
    var t = function() {
        if (reyParams.js_params.cart_update_by_qty) {
            var t, r = e('.woocommerce-cart-form [name="update_cart"]');
            r.length && e(".woocommerce-cart-form").on("change keyup mouseup", "input.qty, select.qty", (function() {
                "undefined" !== t && clearTimeout(t), "" != e(this).val() && (t = setTimeout((function() {
                    r.trigger("click")
                }), reyParams.js_params.cart_update_threshold))
            }))
        } else e('button[name="update_cart"]').show()
    };
    e(document.body).on("added_to_cart removed_from_cart wc_fragments_refreshed updated_wc_div wc_fragments_loaded", (function(e) {
        t()
    })), document.addEventListener("rey-DOMContentLoaded", (function(e) {
        t(),
            function() {
                if (!rey.vars.is_desktop) {
                    var e = document.querySelector(".wc-proceed-to-checkout");
                    if (e) {
                        var t = document.querySelector(".rey-cart-stickyBtn");
                        t && rey.frontend.inView({
                            target: e,
                            once: !1,
                            cb: e => {
                                t.classList.add("--hide")
                            },
                            onHide: e => {
                                t.classList.remove("--hide")
                            }
                        })
                    }
                }
            }()
    }))
}(jQuery);
! function(e) {
    "use strict";
    var t = !1,
        n = {},
        i = {
            init: function(e) {
                if (!t) return t = !0, i.scope = e || document, i.lazyLoad(), i.adjustWidths(), i.megaMenuGs(), rey.vars.elementor_edit_mode && rey.elementor && rey.elementor._makeHeaderZindex(), i;
                rey.vars.elementor_edit_mode && Object.keys(n).forEach((t => {
                    var i = n[t];
                    (e.length ? e[0] : e).querySelectorAll(t).forEach((e => {
                        e.querySelectorAll("ul.sub-menu").forEach((e => {
                            e.remove()
                        })), e.append(i)
                    }))
                }))
            },
            lazyLoad: function() {
                var t = {},
                    n = {},
                    i = {},
                    s = function(s) {
                        var a = this;
                        this.init = function() {
                            this.$item = e(s), this.$menuItem = this.$item.parent(".menu-item"), this.isMobileNav = this.$menuItem.closest(".rey-mainMenu").hasClass("rey-mainMenu-mobile"), this.config = JSON.parse(this.$item.attr("data-lazy-config")), e.isEmptyObject(this.config) || (this.id = this.config.mid, this.lazyType = this.isMobileNav ? "yes_mo" : this.config.lazy_type, this.lazyTypeEvent = this.isMobileNav ? rey.vars.mobileClickEvent : "mouseenter", this.addLoaderIndicator(), this.events())
                        }, this.events = function() {
                            "yes_mo" === this.lazyType ? this.$menuItem.one(this.lazyTypeEvent, (function(e) {
                                i[a.id] = !0, a.$menuItem.addClass("--loading"), a.makeRequest()
                            })).one("mouseleave", (function(e) {
                                i[a.id] && (i[a.id] = !1)
                            })) : "yes_pm" === this.lazyType ? (this.$menuItem.one(this.lazyTypeEvent, (function(e) {
                                i[a.id] = !0, t[a.id] || a.$menuItem.addClass("--loading")
                            })).one("mouseleave", (function(e) {
                                i[a.id] && (i[a.id] = !1)
                            })), this.$item.closest(".rey-mainNavigation").one("mouseenter", (function(e) {
                                a.makeRequest()
                            }))) : "yes_pl" === this.lazyType && rey.hooks.addAction("first_interaction", (function() {
                                setTimeout((function() {
                                    a.makeRequest()
                                }), 1e3)
                            }))
                        }, this.addLoaderIndicator = function() {
                            var t = this.$menuItem;
                            this.isMobileNav && (t = e(" > a", this.$menuItem)), e('<i class="__mmloader --invisible"></i>').appendTo(t)
                        }, this.makeRequest = function() {
                            t[this.id] ? this.appendData(t[this.id]) : n[this.id] ? setTimeout((function() {
                                a.makeRequest()
                            }), 300) : n[this.id] = rey.ajax.request("get_megamenu", {
                                ss: "get_megamenu_" + this.id,
                                data: {
                                    mid: this.id
                                },
                                params: {
                                    cache: !1
                                },
                                cb: function(e) {
                                    e.data && (a.appendData(e.data), t[a.id] = e.data, rey.hooks.doAction("elementor/content/lazy_loaded", a.$item[0]), n[a.id] = !1)
                                }
                            })
                        }, this.appendData = function(t) {
                            this.$menuItem.removeClass("--loading"), e(t).appendTo(this.$item), "yes_pl" !== this.lazyType && (this.openOverlay(), this.$menuItem.removeClass("--overlay-delayed")), setTimeout((function() {
                                a.$item.addClass("--ready")
                            }), 50)
                        }, this.openOverlay = function() {
                            if (i[this.id]) {
                                var e = rey.elements.header ? "header" : "site",
                                    t = reyParams.theme_js_params.menu_hover_overlay,
                                    n = this.$item.closest("[data-hoverlay]");
                                n.length && (t = n.attr("data-hoverlay")), t && rey.frontend.overlay.open(e, {
                                    click: !1,
                                    id: "menu"
                                })
                            }
                        }, this.init()
                    };
                e(".rey-mega-gs[data-lazy-config]").each((function(e, t) {
                    new s(t)
                }))
            },
            megaMenuGs: function() {
                (i.scope.length ? i.scope[0] : i.scope).querySelectorAll(".rey-mega-gs").forEach((e => {
                    if (rey.vars.elementor_edit_mode && e.closest(".rey-mainNavigation--desktop") && (n[".rey-mainNavigation--desktop #" + e.closest(".menu-item").getAttribute("id")] = e), e.classList.contains("--disable-mega-gs-mobile") && e.closest(".rey-mainMenu-mobile")) return e.remove();
                    rey.dom.getSiblings(e, ".sub-menu").forEach((e => {
                        e.remove()
                    }))
                }))
            },
            adjustWidths: function() {
                var t = function(t) {
                    var n = this;
                    this.init = function() {
                        if (this.menuItem = t, this.submenus = rey.dom.children(this.menuItem, ".rey-mega-gs, ul.sub-menu"), this.submenus.length && (this.removeSubmenuIfMega(), rey.vars.is_desktop)) return this.submenu = this.submenus[0], this.isBoxed = this.menuItem.classList.contains("--mega-boxed"), this.prepareBoxedContainer(), this.resizePanel(), this.events(), this
                    }, this.events = function() {
                        window.addEventListener("resize", rey.util.debounce((function(e) {
                            n.refreshBoxedContainer(), n.resizePanel()
                        }), 500)), rey.elements.header && rey.elements.header.addEventListener("lazyloaded", rey.util.debounce(n.resizePanel, 500)), window.addEventListener("LazyLoad::Initialized", n.resizePanel), e(document).on("rey/elementor_section/animation_complete", (function(e, t, i) {
                            var s = n.item.closest(".elementor-section.elementor-top-section, .elementor > .e-container, .elementor > .e-con");
                            t.id == s.getAttribute("data-id") && n.resizePanel()
                        }))
                    }, this.resizePanel = function() {
                        requestAnimationFrame(this._resizePanel)
                    }, this._resizePanel = function() {
                        if (reyParams.mega_menu_use_bounding_client_rect) var e = n.menuItem.getBoundingClientRect();
                        else e = rey.dom.offset(n.menuItem);
                        var t = e.left;
                        rey.vars.is_rtl && (t = document.documentElement.clientWidth - (t + n.menuItem.offsetWidth));
                        var i = {},
                            s = "block";
                        if (n.menuItem.classList.contains("--is-mega-cols") && (s = "flex"), n.isBoxed) i["--mm-offset"] = t + "px";
                        else if (n.menuItem.classList.contains("--mega-full")) i["--mm-offset"] = t + "px";
                        else if (n.menuItem.classList.contains("--mega-custom")) {
                            s = "flex";
                            var a = Math.floor(t / document.body.clientWidth * 100);
                            i["--mm-offset"] = t + "px", a <= 33 ? i["--mm-translate-factor"] = .2 : a > 67 && (i["--mm-translate-factor"] = .8), n.menuItem.classList.contains("--mega-center") && n.submenu.classList.add("--site-center")
                        }
                        Object.keys(i).forEach((e => {
                            n.submenu.style.setProperty(e, i[e])
                        })), n.submenu.style.display = s
                    }, this.prepareBoxedContainer = function() {
                        this.isBoxed && (this.navContainer = this.menuItem.closest(".mega-boxed-container > .elementor-container:not(.--mm-container-data), .elementor-top-section > .elementor-container:not(.--mm-container-data), .rey-siteHeader-container:not(.--mm-container-data), :is(.elementor-section-wrap, [data-elementor-id]) > .e-con > .e-con-inner"), this.navContainer && (this.isElementorContainer = this.navContainer.classList.contains("e-con-inner"), this.refreshBoxedContainer()))
                    }, this.refreshBoxedContainer = function() {
                        if (this.isBoxed && this.navContainer) {
                            var e = rey.dom.offset(this.navContainer).left || 0;
                            e && this.navContainer.style.setProperty("--mm-container", e + "px"), this.navContainer.classList.add("--mm-container-data"), this.isElementorContainer && this.navContainer.style.setProperty("--ec-max-width", this.navContainer.offsetWidth + "px")
                        }
                    }, this.removeSubmenuIfMega = function() {
                        this.submenus.length > 1 && this.submenus.forEach((e => {
                            rey.validation.matches(e, "ul.sub-menu") && e.remove()
                        }))
                    }, this.init()
                };
                [".rey-siteHeader:not(.--hfx-spacer) .rey-mainNavigation--desktop", ".rey-stickyContent .rey-mainNavigation--desktop", ".rey-pbTemplate--gs-header .rey-mainNavigation--desktop", ".elementor[data-elementor-type='header'] .rey-mainNavigation--desktop"].forEach((e => {
                    (rey.validation.isJQuery(i.scope) ? i.scope[0] : i.scope).querySelectorAll(e).forEach((e => {
                        e.querySelectorAll(".menu-item.depth--0.--is-mega").forEach((e => {
                            e.addEventListener("mouseenter", (n => {
                                rey.util.wait.styles((function() {
                                    new t(e)
                                }))
                            }), {
                                once: !0
                            })
                        }))
                    }))
                }))
            }
        };
    document.addEventListener("rey-DOMContentLoaded", (function() {
        rey.hooks.addFilter("headermenu/mobile/selectors", (function(e) {
            return e.unshift(".rey-mega-gs"), e
        })), rey.vars.elementor_edit_mode || i.init()
    })), rey.hooks.addAction("elementor/init", (function(e) {
        rey.vars.elementor_edit_mode && e.registerElement({
            name: "reycore-header-navigation.default",
            cb: i.init
        })
    }))
}(jQuery);
! function() {
    "use strict";
    var e = function(e) {
        var t = e[0];
        t.hasAttribute("data-column-link") && (rey.vars.elementor_edit_mode || t && (t.querySelectorAll("a[href]").forEach((e => {
            e.removeAttribute("href")
        })), t.addEventListener("click", (function(e) {
            var o = JSON.parse(t.getAttribute("data-column-link") || "{}");
            if (o.url)
                if (e.preventDefault(), o.url.match("^#elementor-action")) {
                    var r = o.url;
                    ((r = decodeURIComponent(r)).includes("elementor-action:action=popup:open") || r.includes("elementor-action:action=lightbox")) && (t.querySelector("#rey-colLink-dynamic") || rey.dom.createEl("a", {
                        class: "--hidden",
                        attributes: {
                            id: "rey-colLink-dynamic",
                            href: o.url
                        },
                        appendTo: t
                    }).click())
                } else if (o.url.match("^#") && "#" !== o.url) {
                r = o.url;
                var n = document.querySelector(r);
                n && (window.scrollTo({
                    top: rey.dom.offset(n).top - 15,
                    behavior: "smooth"
                }), window.location.hash = r)
            } else window.open(o.url, o.target)
        }))))
    };
    rey.hooks.addAction("elementor/init", (function(t) {
        t.registerElement({
            name: "column",
            cb: e
        })
    }))
}();
document.addEventListener("rey-DOMContentLoaded", (function() {
    document.querySelectorAll(".rey-mainNavigation.rey-mainNavigation--desktop").forEach((e => {
        var n = e.parentElement.querySelector(".rey-mainNavigation-mobileBtn:not(.--prevent-main-mobile-nav)");
        if (n) {
            var t = t => {
                if (!rey.vars.is_global_section_mode) {
                    t.preventDefault();
                    var o = e.getAttribute("id");
                    void 0 !== rey.components.mainMenu ? rey.hooks.doAction("headermenu/mobile/open", o, n) : rey.___.openMobileMenuID = o
                }
            };
            n.addEventListener("click", t), n.addEventListener("touchstart", t)
        }
    }))
}));
! function() {
    "use strict";
    var e, t = function(t) {
            var i = this,
                r = this;
            return this.debug = !1, this.submenuSelector = ".sub-menu", this.init = function() {
                t && (this.MMEL = t, this.mobileNav = this.MMEL.parentElement.querySelector(".rey-mainNavigation.rey-mainNavigation--mobile"), this.id = this.MMEL.getAttribute("data-id"), this.tapToLink = this.MMEL.closest(".elementor-element.--tap-link"), this.delays = reyParams.theme_js_params.menu_delays, rey.vars.is_edit_mode && (this.delays = !1), this.open_event = reyParams.theme_js_params.menu_items_open_event, e && (this.open_event = "click"), "click" === this.open_event && this.MMEL.classList.add("--onclick"), this.overlayData(), this.createBadges(), this.makeAcc(), this.activeFollowers(), this.menuItemsDelays(), this.events())
            }, this.createBadges = function() {
                var e = this.MMEL.querySelectorAll([".menu-item.--badge-green", ".menu-item.--badge-red", ".menu-item.--badge-orange", ".menu-item.--badge-blue", ".menu-item.--badge-accent"].join(","));
                e.length && (rey.assets.loadMultipleStyles({
                    "rey-header-menu-color-badges": reyParams.theme_js_params.menu_badges_styles
                }), e.forEach((e => {
                    var t = rey.dom.children(e, "a");
                    if (t.length) {
                        var i = document.createElement("i");
                        i.classList.add("--menu-badge"), i.style.position = "absolute", i.style.opacity = 0, i.textContent = t[0].getAttribute("title");
                        var r = rey.dom.children(t[0], "span");
                        r.length && r[0].prepend(i)
                    }
                })))
            }, this.overlayData = function() {
                this.overlayType = reyParams.theme_js_params.menu_hover_overlay;
                var e = this.MMEL.closest("[data-hoverlay]");
                if (rey.vars.elementor_edit_mode) {
                    var t = this.MMEL.parentElement.querySelector(".__editmode[data-hoverlay]");
                    t && (e = t)
                }
                if (e && (this.overlayType = e.getAttribute("data-hoverlay")), this.overlaySupported = "show" === this.overlayType || !0 === this.overlayType, this.mobileMenuOverlaySupported = "hide" !== reyParams.theme_js_params.menu_mobile_overlay, this.MMEL.closest(".rey-stickyContent")) return this.overlaySupported = "hide" !== this.overlayType, void(this.overlayTarget = "site");
                if (rey.vars.is_desktop && "show_header_top" === this.overlayType) {
                    if (rey.vars.elementor_edit_mode && !document.querySelector(".rey-overlay--header-top")) {
                        var i = document.createElement("div");
                        i.classList.add("rey-overlay", "rey-overlay--header-top");
                        var r = document.querySelector(".rey-pbTemplate--gs-header .elementor.elementor-edit-area-active > .elementor-section-wrap");
                        r && r.append(i)
                    }
                    this.overlayTarget = "header-top", this.overlaySupported = !0
                } else this.overlayTarget = rey.elements.header && rey.dom.contains(rey.elements.header, this.MMEL) ? "header" : "site"
            }, this.lastSubmenuDirection = function(e) {
                var t = e || this.MMEL.querySelector(".rey-mainMenu.rey-mainMenu--desktop .menu-item-has-children.depth--0.--is-regular:last-child > .sub-menu");
                if (t) {
                    t.classList.remove("--reached-end");
                    var i = t.getBoundingClientRect(),
                        r = i.left;
                    rey.vars.is_rtl && (r = document.documentElement.clientWidth - (r + i.width)), r + i.width > document.documentElement.clientWidth && t.classList.add("--reached-end")
                }
            }, this.menuItemsDelays = function() {
                this.MMEL.querySelectorAll(".rey-mainMenu--desktop .sub-menu").forEach(((e, t) => {
                    rey.dom.children(e, "li > a > span").forEach(((e, t) => {
                        e.style.transitionDelay = .03 * t + "s"
                    }))
                })), this.mobileNav && this.mobileNav.querySelectorAll("ul.rey-mainMenu-mobile").forEach((e => {
                    var t = (e, t) => {
                        e.style.transitionDelay = .03 * t + .3 + "s"
                    };
                    e.closest(".--submenu-display-expanded") ? e.querySelectorAll(".depth--0 > a > span, .sub-menu > li > a > span").forEach(t) : (e.querySelectorAll(".depth--0 > a > span").forEach(t), e.querySelectorAll(".sub-menu > li > a > span").forEach(t))
                }))
            }, this.events = function() {
                if ("hover" === this.open_event) {
                    var e, t, r, s, a = parseFloat(reyParams.theme_js_params.menu_items_hover_timer),
                        n = parseFloat(reyParams.theme_js_params.menu_items_leave_timer);
                    this.delays || (a = 0, n = 0);
                    var o, l = this.MMEL.querySelectorAll(".rey-mainMenu.rey-mainMenu--desktop > .menu-item-has-children"),
                        h = function(e) {
                            (e = e || l).forEach((e => {
                                e.classList.remove("--hover"), e.setAttribute("aria-expanded", "false")
                            }))
                        };
                    l.forEach((i => {
                        i.addEventListener("mouseenter", (i => {
                            clearTimeout(t), clearTimeout(r), clearTimeout(s), e = setTimeout((() => {
                                var e = i.target;
                                h(rey.dom.getSiblings(e)), e.classList.add("--hover"), e.setAttribute("aria-expanded", "true"), e.classList.contains("--overlay-delayed") || this.openHeaderOverlay(), rey.hooks.doAction("menu_item/open", i, this)
                            }), a)
                        })), i.addEventListener("mouseleave", (i => {
                            clearTimeout(e), t = setTimeout((() => {
                                h()
                            }), n)
                        }))
                    })), this.MMEL.querySelectorAll(".rey-mainMenu.rey-mainMenu--desktop > .menu-item:not(.menu-item-has-children)").forEach((e => {
                        e.addEventListener("mouseenter", (e => {
                            s = setTimeout((() => {
                                h(), this.closeHeaderOverlay()
                            }), n)
                        }))
                    })), this.MMEL.querySelectorAll(".rey-mainMenu.rey-mainMenu--desktop").forEach((e => {
                        e.addEventListener("mouseenter", (e => {
                            this.log(":: MENU ENTER"), rey.frontend.panels.closeActive(), rey.frontend.scroll.enable(), this.MMEL.classList.add("--active"), clearTimeout(o)
                        })), e.addEventListener("mouseleave", (e => {
                            this.log(":: MENU LEAVE"), o = setTimeout((() => {
                                this.log(":: MENU LEAVE (menuActiveTimer)"), this.MMEL.classList.remove("--active"), this.closeHeaderOverlay()
                            }), parseFloat(reyParams.theme_js_params.menu_hover_timer)), r = setTimeout((() => {
                                this.log(":: MENU LEAVE (menuLeaveTimer)"), h(), this.closeHeaderOverlay()
                            }), n)
                        }))
                    }))
                } else if ("click" === this.open_event) {
                    var d = !1,
                        m = () => {
                            rey.frontend.panels.reset(), this.MMEL.querySelectorAll(".rey-mainMenu.rey-mainMenu--desktop > .menu-item-has-children").forEach((e => {
                                e.classList.remove("--hover"), e.setAttribute("aria-expanded", "false")
                            })), this.MMEL.classList.remove("--active"), d = !1
                        };
                    this.MMEL.querySelectorAll(".rey-mainMenu.rey-mainMenu--desktop > .menu-item-has-children > a").forEach((e => {
                        e.addEventListener("click", (e => {
                            e.preventDefault();
                            var t = e.currentTarget.parentElement;
                            if (t.classList.contains("--hover")) return m(), void this.closeHeaderOverlay();
                            rey.frontend.panels.init(m.bind(this)), this.openHeaderOverlay(!0), this.MMEL.classList.add("--active"), t.classList.add("--hover"), t.setAttribute("aria-expanded", "true"), rey.hooks.doAction("menu_item/open", e, this), d = !0
                        }))
                    })), "hide" === reyParams.theme_js_params.menu_hover_overlay && document.addEventListener("click", (function(e) {
                        if (d) {
                            var t = ".menu-item-has-children.--hover";
                            e.target.closest(t) || document.querySelectorAll(t).length && m()
                        }
                    }))
                }
                this.MMEL.querySelectorAll(".rey-mainMenu.rey-mainMenu--desktop > .menu-item .menu-item-has-children").forEach((e => {
                    e.addEventListener("mouseenter", (t => {
                        e.classList.add("--hover")
                    })), e.addEventListener("mouseleave", (t => {
                        e.classList.remove("--hover")
                    }))
                })), this.mobileSelectors = rey.hooks.applyFilters("headermenu/mobile/selectors", [this.submenuSelector]), rey.___.openMobileMenuID === this.MMEL.getAttribute("id") && (this.openMobileMenu(), rey.___.openMobileMenuID = null), rey.hooks.addAction("headermenu/mobile/open", (e => {
                    e === this.MMEL.getAttribute("id") && this.openMobileMenu()
                }));
                var c = this.mobileNav && this.mobileNav.querySelector(".rey-mobileMenu-close");
                if (c && c.addEventListener(rey.vars.mobileClickEvent, (e => {
                        rey.vars.is_global_section_mode || (e.preventDefault(), this.closeMobileMenu(!0))
                    }), {}), this.mobileNav) {
                    var u = this.mobileNav.closest(".--submenu-display-expanded");
                    this.mobileNav.querySelectorAll(".rey-mainMenu-mobile .menu-item-has-children > a").forEach((e => {
                        if (!rey.vars.is_global_section_mode) {
                            var t = !1;
                            i.mobileSelectors.forEach((i => {
                                var r = rey.dom.getSiblings(e, i);
                                r.length && (t = r[0])
                            })), t && (u && (e.classList.add("--open"), rey.animation.slideDown(t)), e.addEventListener(rey.vars.mobileClickEvent, (e => {
                                if (e.preventDefault(), rey.hooks.doAction("headermenu/mobile/click", e.currentTarget, this), !this.tapToLink || e.target.classList.contains("--submenu-indicator")) return e.currentTarget.classList.toggle("--open"), void rey.animation.slideToggle(t);
                                this.tapToLink && (window.location.href = e.currentTarget.getAttribute("href"))
                            }), {}))
                        }
                    }))
                }
                this.MMEL.querySelectorAll(".rey-mainMenu.rey-mainMenu--desktop .menu-item-has-children.depth--0.--is-regular, .rey-mainMenu.rey-mainMenu--desktop .menu-item-has-children.depth--0.--is-regular .menu-item-has-children").forEach((e => {
                    e.addEventListener("mouseenter", (e => {
                        var t = rey.dom.children(e.target, ".sub-menu");
                        t.length && this.lastSubmenuDirection(t[0])
                    }))
                })), this.mobileNav && this.mobileNav.querySelectorAll(".menu-item > a[href*='#']:not([href='#'])").forEach((e => {
                    e.addEventListener("click", (e => {
                        if (!rey.vars.is_global_section_mode)
                            if (this.tapToLink && "I" === e.target.tagName && e.target.classList.contains("--submenu-indicator")) this.closeMobileMenu(!0);
                            else {
                                var t = e.currentTarget.getAttribute("href");
                                t.substring(0, t.indexOf("#")) === window.location.origin + window.location.pathname && e.preventDefault(), this.closeMobileMenu(!0)
                            }
                    }), {})
                })), document.addEventListener("keyup", (e => {
                    27 == e.keyCode && this.MMEL.querySelectorAll(".rey-mainMenu.rey-mainMenu--desktop > .menu-item-has-children").forEach((e => {
                        e.classList.remove("--hover")
                    }))
                }))
            }, this.closeHeaderOverlay = function() {
                rey.frontend.overlay.close()
            }, this.openHeaderOverlay = function(e) {
                if (this.overlaySupported) {
                    var t = {
                        click: e || !1,
                        id: "menu"
                    };
                    rey.frontend.overlay.open(i.overlayTarget, t)
                }
            }, this.makeAcc = function() {
                if (rey.hooks.applyFilters("rey/main_menu/a11y", !0)) {
                    this.MMEL.querySelectorAll(".menu-item-has-children.depth--0, .menu-item-has-children.--is-regular .menu-item-has-children").forEach((e => {
                        e.setAttribute("aria-haspopup", "true"), e.setAttribute("aria-expanded", "false"), e.querySelectorAll(".rey-mega-gs a, .sub-menu a").forEach((e => {
                            e.setAttribute("tabindex", "-1")
                        }))
                    })), document.addEventListener("keydown", (e => {
                        if (9 !== e.keyCode) {
                            if (-1 !== [13, 32].indexOf(e.keyCode)) {
                                var i = this.MMEL.querySelectorAll('.menu-item[aria-haspopup="true"] > a:focus');
                                i.length && (e.preventDefault(), i.forEach((e => {
                                    var t = e.parentElement;
                                    if ("LI" !== t.tagName) return;
                                    t.setAttribute("aria-expanded", "true");
                                    const i = new Event("mouseenter");
                                    t.dispatchEvent(i), t.querySelectorAll(".rey-mega-gs a, .sub-menu > li > a").forEach((e => {
                                        e.removeAttribute("tabindex")
                                    }))
                                })))
                            }
                            27 == e.keyCode && t()
                        }
                    }));
                    var e = !1;
                    this.MMEL.querySelectorAll(".depth--0 > a").forEach((i => {
                        i.addEventListener("mousedown", (() => {
                            e = !0
                        })), i.addEventListener("focusin", (() => {
                            e || t(), e = !1
                        }))
                    }));
                    var t = () => {
                        this.MMEL.querySelectorAll('.menu-item[aria-haspopup="true"][aria-expanded="true"]').forEach((e => {
                            e.setAttribute("aria-expanded", "false");
                            const t = new Event("mouseleave");
                            e.dispatchEvent(t), e.querySelectorAll("rey-mega-gs a, .sub-menu a").forEach((e => {
                                e.setAttribute("tabindex", "-1")
                            }))
                        }))
                    }
                }
            }, this.openMobileMenu = function() {
                rey.frontend.panels.init(this.closeMobileMenu.bind(this)), r.mobileMenuOverlaySupported && rey.frontend.overlay.open(this.overlayTarget), rey.hooks.applyFilters("rey/main_menu/mobile/disable_scroll", !0) && rey.frontend.scroll.disable(), this.mobileNav && this.mobileNav.classList.add("--is-active"), rey.elements.body.classList.add("--mobileNav--active")
            }, this.closeMobileMenu = function(e) {
                rey.frontend.panels.reset(), r.mobileMenuOverlaySupported && (rey.vars.is_desktop && !e || rey.frontend.overlay.close()), this.mobileNav && this.mobileNav.classList.remove("--is-active"), rey.frontend.scroll.enable(), rey.elements.body.classList.remove("--mobileNav--active")
            }, this.activeFollowers = function() {
                new function() {
                    var e = this;
                    this.points = {}, this.targets = {}, this.menuItems = {}, this.anchors = {}, this.nonElementor = {}, this.firstHash = null, this.topThreshold = 0, this.activeClass = "current-menu-item", this.init = function() {
                        this.items = document.querySelectorAll('.rey-mainNavigation .menu-item a[href*="#"]:not([href="#"])'), this.items.length && (this.supportsTopThreshold = rey.elements.header && rey.elements.header.classList.contains("header-pos--fixed"), this.getInitialData(), this.handleScroll(), this.events())
                    }, this.events = function() {
                        window.addEventListener("resize", rey.util.debounce((function() {
                            e.refreshData()
                        }), 500)), window.addEventListener("scroll", rey.util.debounce((function() {
                            e.handleScroll()
                        }), 50)), Object.keys(this.anchors).forEach((t => {
                            e.anchors[t].addEventListener("click", (function(i) {
                                e.setHeaderHeight();
                                var r = e.points[t] - e.topThreshold + 1;
                                e.nonElementor[t] && (i.preventDefault(), window.scrollTo({
                                    top: r,
                                    behavior: "smooth"
                                })), elementorFrontend.hooks ? elementorFrontend.hooks.addFilter("frontend/handlers/menu_anchor/scroll_top_distance", (function(e) {
                                    return r
                                })) : window.scrollTo({
                                    top: r,
                                    behavior: "smooth"
                                })
                            }))
                        }))
                    }, this.getInitialData = function() {
                        this.items.forEach((t => {
                            if ((!rey.vars.is_desktop || t.closest(".rey-mainNavigation--desktop")) && (rey.vars.is_desktop || t.closest(".rey-mainNavigation--mobile"))) {
                                var i = t.getAttribute("href").split("#"),
                                    r = i[i.length - 1],
                                    s = document.querySelector(`.elementor-element[id="${r}"], .elementor-menu-anchor[id="${r}"], .rey-siteWrapper[id="${r}"]`);
                                s && (e.anchors[r] = t, e.menuItems[r] = t.parentElement, e.targets[r] = s, e.points[r] = rey.dom.offset(s).top, e.nonElementor[r] = s.classList.contains("rey-siteWrapper"), null === e.firstHash && (e.firstHash = r), e.menuItems[r].classList.remove(e.activeClass))
                            }
                        }))
                    }, this.refreshData = function() {
                        this.setHeaderHeight(), Object.keys(e.targets).forEach((t => {
                            e.points[t] = rey.dom.offset(e.targets[t]).top
                        }))
                    }, this.handleScroll = function() {
                        var t = window.pageYOffset || document.documentElement.scrollTop;
                        Object.keys(e.points).forEach((i => {
                            var r = e.menuItems[i];
                            r.classList.remove(e.activeClass), t + e.topThreshold > e.points[i] ? e.activeMenuItem = r : null !== e.firstHash && i === e.firstHash && (e.activeMenuItem = null)
                        })), e.activeMenuItem && e.activeMenuItem.classList.add(e.activeClass)
                    }, this.setHeaderHeight = function() {
                        this.supportsTopThreshold && (this.topThreshold = rey.headerHeight)
                    }, this.init()
                }
            }, this.log = function(e) {
                this.debug && rey.log(e)
            }, this.init()
        },
        i = function() {
            rey.components.mainMenu = function(e) {
                var i = [];
                (e || document).querySelectorAll(".rey-mainNavigation.rey-mainNavigation--desktop").forEach((e => {
                    var r = e.getAttribute("id"); - 1 === i.indexOf(r) && (i.push(r), new t(e))
                }))
            }, rey.components.mainMenu()
        };
    window.matchMedia("(min-width: 1025px) and (max-width: 1200px)").matches && ("ontouchstart" in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0) ? (e = !0, document.addEventListener("rey-DOMContentLoaded", i)) : rey.hooks.addAction("first_interaction", i)
}();
! function() {
    "use strict";
    var e = function(e) {
        rey.validation.isJQuery(e) && (e = e[0]), rey.vars.elementor_edit_mode ? rey.components.mainMenu && rey.components.mainMenu(e) : e.classList.contains("--hbg-hover-yes") && (e.querySelectorAll(".rey-mainNavigation-mobileBtn").forEach((e => {
            e.addEventListener("mouseenter", (e => {
                e.currentTarget.click()
            }))
        })), e.classList.contains("--hbg-hover-close-yes") && e.querySelectorAll(".rey-mainNavigation--mobile").forEach((e => {
            e.addEventListener("mouseleave", (n => {
                var r = e.querySelector(".js-rey-mobileMenu-close");
                r && r.click()
            }))
        })))
    };
    rey.hooks.addAction("elementor/init", (function(n) {
        n.registerElement({
            name: "reycore-header-navigation.default",
            cb: e
        })
    }))
}();
! function() {
    "use strict";
    var e = function(e) {
        var t = this;
        this.isOpen, this.closeButton, this.openedFrom, this.init = function() {
            if (this.config = Object.assign({
                    name: "sidepanel",
                    panel: "",
                    trigger: "",
                    manualOpen: !1,
                    onInit: function() {},
                    onUpdate: function() {},
                    onOpen: function() {},
                    onOpened: function() {},
                    onClose: function() {},
                    onClosed: function() {},
                    closeBtn: !0,
                    closeText: "",
                    alignment: "right",
                    bodyClass: "--side-panel-active",
                    extraBodyClass: "",
                    elOpenClass: "--is-open",
                    elOpenedClass: "--is-opened",
                    animateSite: !1,
                    disableScroll: !0
                }, e || {}), this.panel = this.config.panel, this.trigger = this.config.trigger, rey.validation.isString(this.panel) && (this.panel = document.querySelector(this.panel)), rey.validation.isString(this.trigger) && (this.trigger = document.querySelectorAll(this.trigger)), this.panel && this.trigger) {
                if (document.dispatchEvent(new CustomEvent("reycore/sidepanel/init", {
                        detail: {
                            app: this
                        }
                    })), this.panel.hasAttribute("data-sidepanel")) {
                    var i = JSON.parse(this.panel.getAttribute("data-sidepanel") || "{}");
                    rey.validation.isEmptyObject(i) || Object.keys(i).forEach((e => {
                        t.config[e] = i[e]
                    }))
                }
                return this.alignment = this.panel.getAttribute("data-align") || this.config.alignment, this.ensurePanel(), this.addCloseButton(), this.triggerEvent(), this.config.onInit.call(this), this
            }
        }, this.update = function(e) {
            e && e.call(this), this.triggerEvent(), this.ensurePanel(), this.config.onUpdate.call(this)
        }, this.triggerEvent = function() {
            this.config.manualOpen || (rey.validation.isNodeList(this.trigger) ? this.trigger.forEach((e => {
                t.handleTriggerEvent(e)
            })) : this.handleTriggerEvent(this.trigger))
        }, this.handleTriggerEvent = function(e) {
            e && e.addEventListener("click", (e => {
                if (e.preventDefault(), this.isOpen) return this.close();
                this.open()
            }))
        }, this.ensurePanel = function() {
            this.panel.classList.contains("rey-sidePanel") || this.panel.classList.add("rey-sidePanel")
        }, this.addCloseButton = function() {
            if (this.config.closeBtn && !this.panel.querySelector(".rey-sidePanel-close")) {
                var e = this.panel.children[0];
                if (rey.validation.isString(this.config.closeBtn)) {
                    var i = this.panel.querySelector(this.config.closeBtn);
                    i && (e = i)
                }
                var s = rey.frontend.svgIcon.get("close");
                s += rey.frontend.svgIcon.get("arrow-classic");
                var n = document.createElement("button");
                n.classList.add("btn", "__arrClose", "rey-sidePanel-close", "--invisible"), n.setAttribute("aria-label", reyParams.core.js_params.panel_close_text);
                var o = `<span class="__icons">${s}</span>`;
                this.config.closeText && (o = `<span class="__close-text">${this.config.closeText}</span>` + o), n.innerHTML = o, e.appendChild(n), n.addEventListener("click", (function(e) {
                    e.preventDefault(), t.close()
                })), this.closeButton = n
            }
        }, this.open = function() {
            this.isOpen || (this.__isBlock || (this.panel.style.display = "block", this.__isBlock = !0), this.transitionDuration || (this.transitionDuration = rey.dom.getNumberProperty(this.panel, "--transition-duration", 400)), this.config.onOpen.call(this), rey.frontend.panels.init(this.close.bind(this)), rey.frontend.overlay.open("site"), this.config.disableScroll && rey.frontend.scroll.disable(), requestAnimationFrame((function() {
                t.toggleClasses(!0)
            })), this.isOpen = !0)
        }, this.close = function() {
            this.isOpen && (this.config.onClose.call(this), rey.frontend.panels.reset(), rey.frontend.overlay.close(), this.config.disableScroll && rey.frontend.scroll.enable(), requestAnimationFrame((function() {
                t.toggleClasses(!1)
            })), this.isOpen = !1)
        }, this.toggleClasses = function(e) {
            rey.elements.body.classList.toggle(this.config.bodyClass, e), rey.elements.body.classList.toggle(`${this.config.bodyClass}--${this.alignment}`, e), this.config.extraBodyClass && (rey.validation.isArray(this.config.extraBodyClass) ? rey.elements.body.classList.toggle(...this.config.extraBodyClass, e) : rey.elements.body.classList.toggle(this.config.extraBodyClass, e)), this.panel.classList.toggle(this.config.elOpenClass, e), rey.validation.isNodeList(this.trigger) ? this.trigger.forEach((i => {
                i && i.classList.toggle(t.config.elOpenClass, e)
            })) : this.trigger && this.trigger.classList.toggle(this.config.elOpenClass, e), this.config.animateSite && rey.elements.body.classList.toggle("--side-animated", e), setTimeout((() => {
                t.onTransitionEnd()
            }), this.transitionDuration), rey.hooks.doAction("toggle_sidepanel", e, t)
        }, this.onTransitionEnd = function() {
            this.isOpen ? (this.config.onOpened.call(this), this.panel.classList.add(this.config.elOpenedClass), void 0 !== rey.trapFocus && rey.trapFocus(this.panel)) : (this.config.onClosed.call(this), this.panel.classList.remove(this.config.elOpenedClass), void 0 !== rey.removeTrapFocus && (rey.validation.isNodeList(this.trigger) ? rey.removeTrapFocus(this.openedFrom) : this.trigger && rey.removeTrapFocus(this.trigger)), this.openedFrom = null)
        }, this.init()
    };
    rey.components.sidePanel = function() {
        return new e(...arguments)
    }
}();
! function() {
    "use strict";
    var e = {
        isOpen: !1,
        class: "is-opened",
        button: null,
        searchLogo: [],
        init: function() {
            if (this.searchPanel = this.getPanel(), this.searchPanel) return this.searchField = this.searchPanel.querySelector("input[type='search']"), this.panelStyle = this.searchPanel.getAttribute("data-style"), this.sideSetup(), this.wideSetup(), this
        },
        getPanel: function() {
            return document.getElementById("rey-searchPanel")
        },
        sideSetup: function() {
            if ("side" === this.panelStyle) {
                var e = {
                    name: "search-panel",
                    trigger: ".js-rey-headerSearch-toggle",
                    panel: this.searchPanel,
                    extraBodyClass: ["search-panel--active", "search-panel--side"],
                    onOpen: this.openSide
                };
                rey.components.sidePanel(e)
            }
        },
        openSide: function() {
            rey.frontend.inView({
                target: e.searchField,
                cb: function() {
                    e.searchField.focus()
                },
                once: !0
            })
        },
        closeSide: function(e) {},
        wideSetup: function() {
            if ("wide" === this.panelStyle) {
                document.querySelectorAll(".js-rey-headerSearch-toggle").forEach((t => {
                    t.addEventListener("click", (t => {
                        if (t.preventDefault(), !rey.vars.is_global_section_mode) {
                            if (e.button = t.currentTarget, e.sticky = e.button.closest('.rey-stickyContent[data-align="top"]'), e.headerSource = rey.elements.header, rey.vars.headerisShrinked) this.searchPanel.style.setProperty("--shrank--header-height", e.headerSource.offsetHeight + "px");
                            else if (e.sticky) {
                                var s = rey.dom.children(e.sticky, ".elementor");
                                s.length && (e.headerSource = s[0])
                            }
                            if (e.headerSource && (e.searchLogo = e.headerSource.querySelectorAll("img.custom-logo[data-search-logo]")), e.isOpen) return e.closeWide();
                            e.openWide()
                        }
                    }))
                }));
                var t = document.querySelector(".rey-searchPanel-wideOverlay");
                t && t.addEventListener("click", (function(t) {
                    t.preventDefault(), e.isOpen && e.closeWide()
                })), t && document.addEventListener("keyup", (function(t) {
                    e.isOpen && 27 == t.keyCode && e.closeWide()
                })), rey.hooks.addAction("minicart/opened", (function() {
                    e.isOpen && e.closeWide()
                }))
            }
        },
        openWide: function() {
            this.isOpen || (this.isOpen = !0, this.startToggler())
        },
        startToggler: function() {
            this.__startedToggler ? this.toggleWide(!0) : (this.searchPanel.classList.remove("--hidden"), setTimeout((() => {
                this.toggleWide(!0)
            }), 50), this.__startedToggler = !0)
        },
        toggleWide: function(t) {
            this.button.classList.toggle(this.class, t), e.searchPanel.classList.toggle("--is-open", t), rey.elements.body.classList.toggle("search-panel--active", t), rey.elements.body.classList.toggle("search-panel--wide", t), t ? (this.button && this.searchLogo.length && this.searchLogo.forEach((e => {
                e.setAttribute("data-initial-src", e.getAttribute("src")), e.setAttribute("src", e.getAttribute("data-search-logo")), e.setAttribute("srcset", "")
            })), rey.frontend.inView({
                target: e.searchField,
                cb: function() {
                    e.searchField.focus()
                },
                once: !0
            })) : (this.button && this.searchLogo.length && this.searchLogo.forEach((e => {
                var t = e.getAttribute("data-initial-src");
                t && (e.setAttribute("src", t), e.setAttribute("srcset", ""))
            })), setTimeout((function() {
                rey.elements.body.classList.remove("--overlay-under-header")
            }), 300))
        },
        closeWide: function() {
            this.isOpen && (this.isOpen = !1, this.toggleWide(!1))
        }
    };
    document.addEventListener("rey-DOMContentLoaded", (function() {
        rey.components.searchPanel = e.init()
    }))
}();
! function(e) {
    "use strict";
    var t = {
        statusDefault: "init",
        iName: "mini-cart",
        debug: !1,
        somethingChanged: !0,
        __cart_count: 0,
        triggerOpen: !1,
        triggerFromClick: !1,
        isOpen: !1,
        hasBeenOpened: !1,
        assetsFragmentName: "_cart_assets_",
        cartButtonSelector: ".js-rey-headerCart",
        cartPanelSelector: ".js-rey-cartPanel",
        init: function() {
            var t;
            if ((this.$cartPanel = e(this.cartPanelSelector), this.cartTrigger = document.querySelectorAll(this.cartButtonSelector), this.cartPanel = document.querySelector(this.cartPanelSelector), this.cartPanel) && (this.cartTrigger.forEach((e => {
                    "A" === e.tagName && (t = !0)
                })), !t)) {
                this.status = this.statusDefault;
                var a = {
                    name: "mini-cart",
                    trigger: this.cartTrigger,
                    panel: this.cartPanel,
                    closeBtn: ".rey-cartPanel-header",
                    extraBodyClass: "--cart-active",
                    manualOpen: !0,
                    onClose: this.close
                };
                return reyParams.header_cart_panel && reyParams.header_cart_panel.close_text && (a.closeText = reyParams.header_cart_panel.close_text), this.SP = rey.components.sidePanel(a), this.handleEmptySession(), this.events(), rey.hooks.doAction("minicart/init", this), this
            }
        },
        events: function() {
            var a;
            e(document).on("click", this.cartButtonSelector, (function(e) {
                e.preventDefault();
                var a = this;
                rey.vars.is_global_section_mode || rey.elements.body.classList.contains("woocommerce-cart") || rey.elements.body.classList.contains("woocommerce-checkout") || (t.loaderTimeout = setTimeout((() => {
                    a.classList.add("--loading")
                }), 200), t.triggerOpen = !0, t.triggerFromClick = !0, t.open(), t.SP.openedFrom = a)
            })), this.cartPanel.addEventListener("click", (function(e) {
                e.target.closest(".rey-cartPanel-continue button") && (e.preventDefault(), t.closePanel())
            })), this.cartPanel.addEventListener("input", (e => {
                var t = e.target.closest("input.qty");
                t && (clearTimeout(a), a = setTimeout((() => {
                    this.listenForQtyChange(t)
                }), 500))
            })), e(document).on("click", ".woocommerce-mini-cart-item a.remove", (function(t) {
                e(this).closest(".woocommerce-mini-cart-item").addClass("--loading")
            })), e(document.body).on("added_to_cart removed_from_cart wc_fragments_refreshed updated_wc_div wc_fragments_loaded", (function(e) {
                t.refreshScroll()
            })), e(document.body).on("adding_to_cart", (function(e) {
                t.status = "adding", t.triggerOpen = !0
            })), e(document.body).on("added_to_cart", ((e, a, r, n) => {
                if (!(a && void 0 !== a.e_manually_triggered && a.e_manually_triggered || (t.status = "added", "yes" === wc_add_to_cart_params.cart_redirect_after_add))) {
                    var o = !(void 0 === n || !n.length) && n[0];
                    if (o && o.hasAttribute("data-checkout")) return rey.hooks.removeAction("minicart/open"), void(window.location = o.getAttribute("data-checkout"));
                    if (t.__cart_count = void 0 !== a._count_ ? a._count_ : 0, o && o.classList.contains("--prevent-open-cart") || "cart" !== reyParams.after_add_to_cart) t.updateCountAttribute();
                    else if (rey.elements.body.classList.contains("woocommerce-cart")) {
                        var c = document.querySelector(".woocommerce-cart-form");
                        c && window.scrollTo(0, rey.dom.offset(c).top)
                    } else t.activateTab(), t.open(), t.updateCountAttribute()
                }
            })), e(document.body).on("removed_from_cart", (function(e, a) {
                t.status = "removed", void 0 !== a._count_ && (t.__cart_count = a._count_, a._count_ || t.emptyGs(), t.updateCountAttribute())
            })), e(document.body).on("wc_fragments_loaded", (function(e) {
                if (t.log(":: LOADED FRAGMENTS"), reyParams.wpch) {
                    var a = document.querySelector(".__cart-count");
                    a && (t.__cart_count = parseInt(a.textContent), t.updateCountAttribute())
                }
                t.somethingChanged = !0, document.querySelectorAll(".woocommerce-mini-cart-item").forEach((e => {
                    if (!e.querySelector("a.remove")) {
                        var t = e.querySelector(".cartBtnQty-controls");
                        t && t.classList.add("--disabled-controls")
                    }
                }))
            })), e(document.body).on("wc_fragments_refreshed", (function(e) {
                t.log(":: REFRESHED FRAGMENTS");
                var a = t.getFragments();
                t.__cart_count = void 0 !== a._count_ ? a._count_ : 0, t.willRefreshFragments = !1, (t.triggerFromClick || "cart" === reyParams.after_add_to_cart) && t.open()
            })), e(document.body).on("wc_cart_button_updated", (function(e, t) {
                t.next(".added_to_cart").remove()
            })), rey.hooks.addAction("minicart/open", (function() {
                t.triggerOpen = !0, t.open()
            })), e(".__tab", t.$cartPanel).on("click", (function() {
                var a = e(this).attr("data-item");
                t.activateTab(a)
            })), e(document).on("keypress", ".rey-cartPanel .coupon #coupon_code", (function(e) {
                "Enter" === e.key && (e.preventDefault(), t.apply_coupon())
            })), e(document).on("click", '.rey-cartPanel .coupon button[name="apply_coupon"]', (function(e) {
                e.preventDefault(), t.apply_coupon()
            })), e(document).on("click", ".rey-cartPanel .woocommerce-remove-coupon", (function(e) {
                e.preventDefault(), t.remove_coupon(this)
            }))
        },
        listenForQtyChange: function(a) {
            if ("" !== a.value) {
                a.style.setProperty("--qty-len", (a.value.length || 1) + 1);
                var r = e(a),
                    n = r.closest(".woocommerce-mini-cart-item"),
                    o = e("a.remove", n),
                    c = parseFloat(r.attr("max") || 0);
                c && parseFloat(r.val()) > c && r.val(c), rey.components.block(n[0]), e.ajax({
                    type: "POST",
                    url: reyParams.wc_ajax_url.toString().replace("%%endpoint%%", "rey_update_minicart"),
                    data: {
                        cart_item_key: o.data("cart_item_key"),
                        cart_item_qty: r.val(),
                        security: reyParams.ajax_nonce
                    },
                    success: function(a) {
                        if (a && a.fragments) {
                            if (e.each(a.fragments, (function(t) {
                                    e(t).fadeTo("400", "0.6").addClass("--no-click")
                                })), e.each(a.fragments, (function(t, a) {
                                    e(t).replaceWith(a), e(t).stop(!0).css("opacity", "1").removeClass("--no-click")
                                })), "undefined" != typeof wc_cart_fragments_params && wc_cart_fragments_params.fragment_name) {
                                var r = wc_cart_fragments_params.cart_hash_key,
                                    n = wc_cart_fragments_params.fragment_name;
                                sessionStorage.setItem(n, JSON.stringify(a.fragments)), a.cart_hash && (localStorage.setItem(r, a.cart_hash), sessionStorage.setItem(r, a.cart_hash), Cookies.set("woocommerce_cart_hash", a.cart_hash), sessionStorage.setItem("wc_cart_created", (new Date).getTime()))
                            }
                            t.__cart_count = a.fragments && void 0 !== a.fragments._count_ ? a.fragments._count_ : 0, t.updateCountAttribute(), e(document.body).trigger("wc_fragments_loaded"), rey.hooks.doAction("minicart/updated", t), document.dispatchEvent(new CustomEvent("reycore/minicart/updated", {
                                detail: {
                                    MC: t
                                }
                            }))
                        } else {
                            o.attr("href") && (window.location = o.attr("href"))
                        }
                    },
                    error: function() {
                        e("<p><small>" + reyParams.cannot_update_cart + "</small></p>").appendTo(n), setTimeout((function() {
                            window.location.reload()
                        }), 1e3)
                    },
                    dataType: "json"
                })
            }
        },
        updateCountAttribute: function(e) {
            document.querySelectorAll("[data-rey-cart-count]").forEach((e => {
                e.setAttribute("data-rey-cart-count", this.__cart_count)
            })), e && document.querySelectorAll(".__cart-count").forEach((e => {
                e.textContent = this.__cart_count
            }))
        },
        getFragments: function() {
            return "undefined" == typeof wc_cart_fragments_params ? {} : wc_cart_fragments_params.fragment_name ? JSON.parse(sessionStorage.getItem(wc_cart_fragments_params.fragment_name) || "{}") : {}
        },
        handleEmptySession: function() {
            if (reyParams.wpch && "undefined" != typeof wc_cart_fragments_params && wc_cart_fragments_params.fragment_name && !sessionStorage.getItem(wc_cart_fragments_params.fragment_name) && !localStorage.getItem(wc_cart_fragments_params.cart_hash_key) && !Cookies.get("woocommerce_cart_hash")) return t.__cart_count = 0, t.updateCountAttribute(!0);
            setTimeout((() => {
                "undefined" != typeof wc_cart_fragments_params && wc_cart_fragments_params.fragment_name && !sessionStorage.getItem(wc_cart_fragments_params.fragment_name) && localStorage.getItem(wc_cart_fragments_params.cart_hash_key) && (console.log('Trigger "wc_fragments_refreshed".'), e(document.body).trigger("wc_fragments_refreshed"))
            }), 100)
        },
        open: function() {
            if ("undefined" == typeof wc_cart_fragments_params) return console.log("Cart Fragments script is not loaded. Probably a 3rd party plugin has disabled it."), t.__openPanel();
            t.log(":: CART-OPEN");
            var a = t.getFragments();
            if (rey.validation.isEmptyObject(a)) e(document.body).trigger("wc_fragment_refresh");
            else if (!t.willRefreshFragments || t.hasBeenOpened) {
                if (t.triggerOpen) {
                    if (t.triggerOpen = !1, !a || !(t.assetsFragmentName in a)) return t.__openPanel();
                    rey.assets.lazyAssets(a[t.assetsFragmentName], (function() {
                        rey.hooks.doAction("minicart/assets_ready", t), document.dispatchEvent(new CustomEvent("rey/minicart/assets_ready", {
                            detail: {
                                MC: t
                            }
                        })), setTimeout((function() {
                            t.__openPanel(), t.cartPanel.removeAttribute("data-lazy-hidden")
                        }), 200)
                    }))
                }
            } else e(document.body).trigger("wc_fragment_refresh")
        },
        __openPanel: function() {
            this.SP.open(), clearTimeout(t.loaderTimeout), this.cartTrigger.forEach((e => {
                e.classList.remove("--loading")
            })), rey.hooks.doAction("minicart/opened", t), this.refreshScroll(), this.emptyGs(), this.isOpen = !0, this.hasBeenOpened = !0, this.assetsLoaded = !0, this.triggerFromClick = !1
        },
        closePanel: function() {
            t.SP.close(), t.close()
        },
        close: function() {
            t.isOpen = !1, t.somethingChanged = !1, t.status = t.statusDefault, t.log(":: CART-CLOSE"), rey.hooks.doAction("minicart/close", t)
        },
        activateTab: function(t) {
            t = t || "cart", e(".__tab", this.$cartPanel).removeClass("--active"), e('.__tab[data-item="' + t + '"]', this.$cartPanel).addClass("--active"), e(".__tab-content", this.$cartPanel).removeClass("--active"), e('.__tab-content[data-item="' + t + '"]', this.$cartPanel).addClass("--active"), rey.hooks.doAction("minicart/tab", t, this)
        },
        coupon_success: function(t) {
            if (t.fragments["div.widget_shopping_cart_content"]) {
                var a = e(t.fragments["div.widget_shopping_cart_content"]).find(".woocommerce-mini-cart__total.total");
                a && (e(".woocommerce-mini-cart__total.total", this.$cartPanel).replaceWith(a), e(".rey-toggleCoupon-content", a).addClass("--visible"))
            }
            if (t.notices) {
                var r = e(".rey-toggleCoupon-response", this.$cartPanel);
                r.html(t.notices), setTimeout((function() {
                    r.fadeOut()
                }), reyParams.header_cart_panel.coupon_notice_timer || 2e3)
            }
        },
        apply_coupon: function() {
            var t = e(".rey-toggleCoupon", this.$cartPanel),
                a = e("#coupon_code", this.$cartPanel).val(),
                r = {
                    security: reyParams.header_cart_panel.apply_coupon_nonce,
                    coupon_code: a
                };
            t.addClass("--loading"), e.ajax({
                type: "POST",
                url: woocommerce_params.wc_ajax_url.toString().replace("%%endpoint%%", "rey_apply_coupon"),
                data: r,
                dataType: "json"
            }).done(this.coupon_success)
        },
        remove_coupon: function(t) {
            var a = e(t).attr("data-coupon"),
                r = e(".minicart-total-row.coupon-" + a, this.$cartPanel),
                n = {
                    security: reyParams.header_cart_panel.remove_coupon_nonce,
                    coupon: a
                };
            r.addClass("--loading"), e.ajax({
                type: "POST",
                url: woocommerce_params.wc_ajax_url.toString().replace("%%endpoint%%", "rey_remove_coupon"),
                data: n,
                dataType: "json"
            }).done(this.coupon_success)
        },
        emptyGs: function() {
            var a = e(".rey-emptyMiniCartGs");
            if (a.length && !a.html()) {
                var r = a.attr("data-gsid");
                if (r) return t.emptyGsContent ? a.append(t.emptyGsContent) : void rey.ajax.request("get_empty_minicart_gs_content", {
                    ss: !0,
                    data: {
                        gsid: r
                    },
                    params: {
                        cache: !1
                    },
                    cb: function(e) {
                        a.append(e.data), t.emptyGsContent = e.data
                    }
                })
            }
        },
        refreshScroll: function() {
            var e = this.cartPanel.querySelector(".woocommerce-mini-cart");
            e && "undefined" != typeof SimpleScrollbar && SimpleScrollbar.initEl(e)
        },
        log: function(e) {
            this.debug && console.log(e)
        }
    };
    document.addEventListener("rey-DOMContentLoaded", (function(e) {
        rey.components.minicart = t.init()
    })), e(document.body).on("wc_fragments_refresh_empty", (function() {
        reyParams.header_cart_panel.cart_fragment_tweak ? t.willRefreshFragments = !0 : e(document.body).trigger("wc_fragment_refresh")
    })), e(document.body).on("adding_to_cart wc_fragments_refreshed", (function() {
        t.willRefreshFragments = !1
    }))
}(jQuery);
! function() {
    "use strict";
    var e = function(e) {
        var t = this;
        this.isOpen, this.init = function() {
            if (!rey.vars.is_global_section_mode && (this.config = Object.assign({
                    name: "droppanel",
                    panel: "",
                    trigger: ".rey-header-dropPanel-btn",
                    manualOpen: !1,
                    onInit: function() {},
                    onUpdate: function() {},
                    onOpen: function() {},
                    onOpened: function() {},
                    onClose: function() {},
                    onClosed: function() {},
                    closeOnScroll: !1,
                    panelOutside: !1,
                    mobileStretch: !1,
                    alignment: "right",
                    bodyClass: "--drop-panel-active",
                    extraBodyClass: "",
                    elOpenClass: "--is-open",
                    elOpenedClass: "--is-opened",
                    initialDisplay: "block"
                }, e || {}), this.panel = this.config.panel, this.trigger = this.config.trigger, rey.validation.isString(this.panel) && (this.panel = document.querySelector(this.panel)), rey.validation.isString(this.trigger) && (this.trigger = this.panel.querySelector(this.trigger)), this.panel && this.trigger)) {
                if (this.panel.hasAttribute("data-droppanel")) {
                    var i = JSON.parse(this.panel.getAttribute("data-droppanel") || "{}");
                    rey.validation.isEmptyObject(i) || Object.keys(i).forEach((e => {
                        t.config[e] = i[e]
                    }))
                }
                if (this.contentHolder = this.panel.querySelector(".rey-header-dropPanel-content"), this.contentHolder || this.config.panelOutside) {
                    if (this.alignment = this.panel.getAttribute("data-align") || this.config.alignment, this.overlaySource = rey.elements.header && rey.dom.contains(rey.elements.header, this.trigger) ? "header" : "site", this.hasOverlay = !this.trigger.classList.contains("--no-overlay"), this.panel.setAttribute("data-location", this.config.panelOutside ? "outside" : "inside"), this.isHover = this.trigger.closest(".--dp-hover"), this.isHover) {
                        var s = document.createElement("div");
                        s.classList.add("__safe-spacer"), this.trigger.append(s)
                    }
                    this.config.onInit.call(this), this.events()
                }
            }
        }, this.setCoordinates = function() {
            var e = rey.dom.offset(t.trigger),
                i = document.body.offsetWidth || window.outerWidth,
                s = {
                    l: e.left < i / 2 ? "unset" : "auto",
                    r: e.left > i / 2 ? "unset" : "auto"
                };
            this.atBottom, rey.dom.setProperties(s, t.panel), t.contentHolder.style.display = t.config.initialDisplay;
            var n = !1;
            if (t.config.panelOutside && (n = !0), t.config.mobileStretch && (t.panel.classList.add("--mobile-stretch"), n = !0), n) {
                var o = {
                    "o-top": e.top,
                    "o-left": e.left,
                    "w-width": i,
                    "t-width": t.trigger.offsetWidth,
                    "t-height": t.trigger.offsetHeight
                };
                rey.dom.setProperties(o, t.panel)
            }
        }, this.events = function() {
            var e = function(e) {
                e.preventDefault(), rey.util.wait.styles((function() {
                    t.isHover || t.config.manualOpen || (t.isOpen ? t.close() : t.open())
                }))
            };
            this.trigger.addEventListener("click", e), this.trigger.addEventListener("touchstart", e), this.trigger.addEventListener("mouseenter", (function(e) {
                t.isHover && (t.config.manualOpen || t.open())
            })), this.panel.addEventListener("mouseleave", (function(e) {
                t.isHover && (t.config.manualOpen || t.close())
            })), window.addEventListener("resize", rey.util.debounce(this.setCoordinates, 500)), document.addEventListener("scroll", (function(e) {
                t.isOpen && rey.vars.is_desktop && t.config.closeOnScroll && t.close()
            }))
        }, this.update = function(e) {
            e && e.call(this), this.events(), this.config.onUpdate.call(this)
        }, this.open = function() {
            this.isOpen || (this.__coordinatesSet || (this.setCoordinates(), this.__coordinatesSet = !0, rey.elements.header.classList.contains("--fixed-shrinking") && (this.__coordinatesSet = !1)), this.transitionDuration || (this.transitionDuration = rey.dom.getNumberProperty(this.panel, "--transition-duration", 400)), this.config.onOpen.call(this), rey.frontend.panels.init(this.close.bind(this)), this.hasOverlay && rey.frontend.overlay.open(this.overlaySource), requestAnimationFrame(this.startToggler), this.isOpen = !0)
        }, this.startToggler = function() {
            t.toggleClasses(!0), t.__startedToggler = !0
        }, this.close = function() {
            this.isOpen && (this.config.onClose.call(this), rey.frontend.panels.reset(), this.hasOverlay && rey.frontend.overlay.close(), requestAnimationFrame((function() {
                t.toggleClasses(!1)
            })), this.isOpen = !1)
        }, this.toggleClasses = function(e) {
            rey.elements.body.classList.toggle(this.config.bodyClass, e), this.config.extraBodyClass && rey.elements.body.classList.toggle(this.config.extraBodyClass, e), this.panel.classList.toggle(this.config.elOpenClass, e), this.trigger.classList.toggle(this.config.elOpenClass, e), setTimeout((() => {
                t.onTransitionEnd()
            }), this.transitionDuration), rey.hooks.doAction("toggle_droppanel", e, this)
        }, this.onTransitionEnd = function() {
            this.isOpen ? (this.config.onOpened.call(this), this.panel.classList.add(this.config.elOpenedClass), rey.trapFocus(this.contentHolder)) : (this.config.onClosed.call(this), this.panel.classList.remove(this.config.elOpenedClass), rey.removeTrapFocus(this.trigger))
        }, this.init()
    };
    rey.components.dropPanel = function() {
        return new e(...arguments)
    }, document.querySelectorAll(".rey-header-dropPanel:not(.--manual)").forEach((e => {
        rey.components.dropPanel({
            panel: e
        })
    }))
}();
! function(e) {
    "use strict";
    var t = {
        wishlist: null,
        init: function() {
            if (!rey.vars.is_global_section_mode && (this.btn = document.querySelectorAll(".js-rey-headerAccount"), this.panel = document.querySelector(".rey-accountPanel-wrapper"), this.panel && this.btn.length)) return this.layout = this.panel.getAttribute("data-layout"), this.makeDrop(), this.makeOffcanvas(), this.makeWishlist(), this.events(), this
        },
        makeWishlist: function() {
            this.wPanel = this.panel.querySelector(".rey-wishlistPanel"), this.wPanel && rey.components.wishlist_panel && (this.wishlist = rey.components.wishlist_panel(this.wPanel, {
                scroll: !0,
                customHeight: "drop" === this.layout
            }))
        },
        events: function() {
            this.panel.querySelectorAll(".rey-accountTabs-item").forEach((e => {
                e.addEventListener("click", (function(e) {
                    e.preventDefault();
                    var t = e.currentTarget,
                        a = t.closest(".rey-accountPanel");
                    t.classList.remove("--active");
                    var n = rey.dom.getSiblings(t);
                    n.length && n.forEach((e => {
                        e.classList.remove("--active")
                    })), t.classList.add("--active");
                    var s = t.getAttribute("data-item");
                    if (a) {
                        a.querySelectorAll("[data-account-tab]").forEach((e => {
                            e.classList.remove("--active")
                        }));
                        var i = a.querySelector('[data-account-tab="' + s + '"]');
                        i && i.classList.add("--active")
                    }
                    rey.hooks.doAction("account_panel/tab", s, t)
                }))
            }))
        },
        onOpen: function() {
            t.wishlist && t.wishlist.refresh(), rey.hooks.doAction("account_panel/onOpen", this)
        },
        makeDrop: function() {
            "drop" === this.layout && this.btn.forEach((e => {
                if (!(rey.vars.is_desktop && e.closest(".elementor-hidden-desktop") || rey.vars.is_mobile && e.closest(".elementor-hidden-mobile"))) {
                    e.setAttribute("data-layout", "drop");
                    var a = {
                        name: "account-panel",
                        trigger: e,
                        panel: t.panel,
                        closeOnScroll: t.panel.hasAttribute("data-close-scroll"),
                        extraBodyClass: "header-account--active",
                        panelOutside: !0,
                        onOpen: t.onOpen,
                        initialDisplay: "flex"
                    };
                    rey.components.dropPanel(a)
                }
            }))
        },
        makeOffcanvas: function() {
            if ("offcanvas" === this.layout) {
                var e = {
                    name: "account-panel",
                    trigger: t.btn,
                    panel: t.panel,
                    extraBodyClass: "header-account--active",
                    onOpen: t.onOpen
                };
                rey.components.sidePanel(e)
            }
        }
    };
    document.addEventListener("rey-DOMContentLoaded", (function(e) {
        rey.components.accountPanel = t.init()
    }))
}(jQuery);
! function() {
    var n = /\\|'|\r|\n|\u2028|\u2029/g,
        r = {
            "'": "'",
            "\\": "\\",
            "\r": "r",
            "\n": "n",
            "\u2028": "u2028",
            "\u2029": "u2029"
        };

    function t(n) {
        return "\\" + r[n]
    }

    function e(n, r) {
        return null != n && hasOwnProperty.call(n, r)
    }
    var u = /^\s*(\w|\$)+\s*$/,
        o = /(.)^/,
        a = /<#([\s\S]+?)#>/g,
        c = /\{\{\{([\s\S]+?)\}\}\}/g,
        i = /\{\{([^\}]+?)\}\}(?!\})/g,
        _ = "data";
    window._rey_escape = function(n) {
        var r = {
                "&": "&amp;",
                "<": "&lt;",
                ">": "&gt;",
                '"': "&quot;",
                "'": "&#x27;",
                "`": "&#x60;"
            },
            t = "(?:" + Object.keys(r).join("|") + ")",
            e = RegExp(t),
            u = RegExp(t, "g");
        return n = null == n ? "" : "" + n, e.test(n) ? n.replace(u, (function(n) {
            return r[n]
        })) : n
    };
    var l = function(n, r) {
        var t = function(u) {
            var o = t.cache,
                a = "" + (r ? r.apply(this, arguments) : u);
            return e(o, a) || (o[a] = n.apply(this, arguments)), o[a]
        };
        return t.cache = {}, t
    }((function(r) {
        var e;
        return function(l) {
            var p = document.getElementById("tmpl-" + r);
            if (!p) throw new Error("Template not found: #tmpl-" + r);
            return (e = e || function(r) {
                var e = RegExp([(i || o).source, (c || o).source, (a || o).source].join("|") + "|$", "g"),
                    l = 0,
                    p = "__p+='";
                r.replace(e, (function(e, u, o, a, c) {
                    return p += r.slice(l, c).replace(n, t), l = c + e.length, u ? p += "'+\n((__t=(" + u + "))==null?'':window._rey_escape(__t))+\n'" : o ? p += "'+\n((__t=(" + o + "))==null?'':__t)+\n'" : a && (p += "';\n" + a + "\n__p+='"), e
                })), p += "';\n";
                var s, f = _;
                if (!u.test(f)) throw new Error("variable is not a bare identifier: " + f);
                p = "var __t,__p='',__j=Array.prototype.join,print=function(){__p+=__j.call(arguments,'');};\n" + p + "return __p;\n";
                try {
                    s = new Function(f, "_", p)
                } catch (n) {
                    throw n.source = p, n
                }
                var w = function(n) {
                    return s.call(this, n, {})
                };
                return w.source = "function(" + f + "){\n" + p + "}", w
            }(p.innerHTML))(l)
        }
    }));
    "undefined" == typeof rey ? window._rey_template = l : rey.template = l
}();
! function(t) {
    "use strict";
    var s = function(s, i) {
        this.has_content = !1, this._products = [], this.init = function() {
            this.wishlist_panel = t(s), this.wishlist_panel.length && (document.body.classList.contains("elementor-editor-active") || (this.options = t.extend({
                scroll: !0,
                customHeight: !0
            }, i), this.params = reyParams, this.wishlist_container = this.wishlist_panel.parent(), this.isProductGrid = "grid" === this.wishlist_container.attr("data-type"), this.events()))
        }, this.events = function() {
            var s = this;
            t(document).on("wc_fragments_loaded.wishlist wc_fragments_refreshed.wishlist reycore/woocommerce/wishlist/added_product reycore/woocommerce/wishlist/removed_product", (function() {
                s.has_content = !1, s.wishlist_container.removeClass("--loaded")
            })), t(document).on("reycore/woocommerce/wishlist/get_saved_products", (function(t, i) {
                s.wishlist_panel.addClass("--loading").empty(), s._products = i, s.display(), s.has_content = !0, s.wishlist_container.attr("data-count", i.length)
            })), rey.hooks.addAction("account_panel/tab", (function(t, i) {
                "wishlist" === t && s.refresh_height()
            })), rey.hooks.addAction("woocommerce/wishlist_account/remove", (() => {
                t(".rey-wishlistItem", this.wishlist_panel).length || this.show_empty()
            }))
        }, this.refresh = function(s) {
            var i = this;
            this.wishlist_panel.length && (i.has_content || (this.wishlist_panel.addClass("--loading").empty(), rey.ajax.request("get_wishlist_data", {
                params: {
                    cache: !1
                },
                cb: function(s) {
                    var e = s.data || [];
                    t(document).trigger("reycore/woocommerce/wishlist/get_data", [i, e]), e.length ? (i._products = e, i.display(), i.wishlist_container.attr("data-count", e.length), i.has_content = !0) : i.show_empty()
                }
            })))
        }, this.refreshScroll = function() {
            if (rey.vars.is_desktop) {
                var t = this.wishlist_panel;
                this.options.scroll && "undefined" != typeof SimpleScrollbar && t.length && SimpleScrollbar.initEl(t[0])
            }
        }, this.display = function() {
            var s = this;
            if (this.wishlist_panel.removeClass("--loading"), this._products.length) {
                this.wishlist_container.removeClass("--empty");
                var i = this.wishlist_container.closest(".rey-header-dropPanel[data-location=outside]").length,
                    e = rey.template("reyWishlistItem")({
                        num: this._products.length,
                        ob: this._products,
                        grid: s.isProductGrid,
                        fixedContainer: i
                    });
                t(e).appendTo(s.wishlist_panel), rey.util.imagesLoaded(s.wishlist_panel[0], (() => {
                    this.refresh_height()
                })), rey.hooks.doAction("wishlist/display_content", s.wishlist_panel[0], this)
            }
        }, this.refresh_height = function() {
            var i = t(s);
            if (this.options.customHeight) {
                var e = t("div.rey-wishlistItem:nth-of-type(1)", i);
                if (e.length) {
                    var n = e[0].offsetHeight;
                    n && i[0].parentElement.style.setProperty("--height", n + "px")
                }
            }
            i.addClass("--loaded"), this._products.length > 2 && this.refreshScroll()
        }, this.show_empty = function() {
            this.wishlist_panel.removeClass("--loading"), this.wishlist_container.addClass("--empty"), this.params.wishlist_empty_text && t("<p>" + this.params.wishlist_empty_text + "</p>").appendTo(this.wishlist_panel)
        }, this.init()
    };
    t.fn.rey_wishlist_panel = function(t) {
        return new s(this, t)
    }, rey.components.wishlist_panel = function() {
        return new s(...arguments)
    }
}(jQuery);
! function() {
    "use strict";
    var t = function(t) {
            this.refreshProps = !1, this.horizontalRange = .5, this.largeRange = .85, this.smallRange = .15, this.vars = {}, this.timeout = null, rey.vars.is_desktop || (this.largeRange = .75, this.smallRange = .25), this.init = function() {
                this.item = t, this.item.getAttribute("data-rey-tooltip-id") || (this.item.removeAttribute("title"), this.vars.isSlide = this.item.closest(".splide"), this.vars.isSidePanel = this.item.closest(".rey-sidePanel"), this.vars.fixedContainer = this.item.hasAttribute("data-fx-tooltip"), this.refreshProps = this.vars.isSlide || this.vars.fixedContainer || this.vars.isSidePanel, this.createID(), this.createHolder(), this.setInitialProperties(), this.events(), this.show())
            }, this.createID = function() {
                var t = this.item.getAttribute("data-tooltip-id");
                if (t) return t;
                void 0 === rey.___.tooltips && (rey.___.tooltips = 0), rey.___.tooltips += 1, this.item.setAttribute("data-rey-tooltip-id", rey.___.tooltips), this.id = rey.___.tooltips
            }, this.createHolder = function() {
                var t = document.createElement("div");
                t.classList.add("rey-tooltip-el"), t.setAttribute("data-rey-tooltip-id", this.id), t.setAttribute("data-source", this.item.getAttribute("data-rey-tooltip-source") || ""), document.body.appendChild(t), this.holder = t;
                var e = this.item.getAttribute("data-tooltip-size");
                e && this.holder.style.setProperty("--size", e + "px"), this.setText()
            }, this.setProperties = function() {
                if (this.refreshProps) {
                    var t = (e = this.item.getBoundingClientRect()).top + window.scrollY;
                    (this.vars.fixedContainer || this.vars.isSidePanel) && (t -= rey.vars.adminBar)
                } else {
                    var e;
                    t = (e = rey.dom.offset(this.item)).top
                }
                var i = {
                        top: t,
                        left: e.left,
                        height: this.holder.offsetHeight,
                        "el-width": this.item.offsetWidth,
                        "el-height": this.item.offsetHeight
                    },
                    s = document.body.offsetWidth;
                i.left + this.holder.offsetWidth > s ? this.horizontalRange = .9 : i.left <= 0 && (this.horizontalRange = .1), i["el-h"] = this.horizontalRange, rey.dom.setProperties(i, this.holder)
            }, this.setInitialProperties = function() {
                this.setProperties()
            }, this.events = function() {
                this.mouseEnterHandler = this.mouseEnterHandler.bind(this), this.mouseLeaveHandler = this.mouseLeaveHandler.bind(this), this.resizeHandler = rey.util.debounce(this.resizeHandler.bind(this), 500), this.destroyHandler = this.destroyHandler.bind(this), this.item.addEventListener("mouseenter", this.mouseEnterHandler), this.item.addEventListener("mouseleave", this.mouseLeaveHandler), window.addEventListener("resize", this.resizeHandler), document.addEventListener("reycore/ajaxfilters/start", this.destroyHandler)
            }, this.mouseEnterHandler = function() {
                this.timeout = setTimeout((() => {
                    this.show()
                }), 50)
            }, this.mouseLeaveHandler = function() {
                this.hide(), clearTimeout(this.timeout)
            }, this.resizeHandler = function() {
                this.setProperties()
            }, this.destroyHandler = function() {
                this.destroy()
            }, this.setText = function() {
                this.holder.textContent = this.item.getAttribute("data-rey-tooltip")
            }, this.hide = function() {
                this.holder.classList.remove("--visible")
            }, this.destroy = function() {
                this.item.removeEventListener("mouseenter", this.mouseEnterHandler), this.item.removeEventListener("mouseleave", this.mouseLeaveHandler), window.removeEventListener("resize", this.resizeHandler), document.removeEventListener("reycore/ajaxfilters/start", this.destroyHandler), this.holder.remove()
            }, this.show = function() {
                this.setText(), this.holder.classList.add("--visible"), this.refreshProps && this.setProperties()
            }, this.init()
        },
        e = function(e) {
            rey.vars.is_desktop && (e = e || document).querySelectorAll("[data-rey-tooltip]:not([data-rey-tooltip=''])").forEach((e => {
                e.addEventListener("mouseenter", (function() {
                    new t(e)
                }), {
                    once: !0
                })
            }))
        };
    document.addEventListener("rey-DOMContentLoaded", (function() {
        e()
    })), rey.hooks.addAction("ajaxfilters/finished", (function(t, i) {
        e(t), i && Object.keys(i).forEach((t => {
            var s = document.getElementById(i[t]);
            e(s)
        }))
    })), rey.hooks.addAction("wishlist/display_content", (function(t) {
        e(t)
    })), rey.hooks.addAction("product/loaded", (function(t) {
        t.forEach((t => {
            e(t)
        }))
    })), rey.jquery.addEventListener("updated_checkout", (function(t, i) {
        e()
    }))
}();
! function(t) {
    "use strict";
    var e = {
            init: function() {
                return this.cookie_key = "rey_wishlist_ids_" + reyParams.site_id, this.logged_in = reyParams.wishlist_get_results, this.$notice = t(".rey-wishlist-notice-wrapper"), this
            },
            setCookie: function(t, e) {
                var i = {};
                reyParams.wishlist_expire && (i.expires = parseInt(reyParams.wishlist_expire)), Cookies.set(t, e, i)
            },
            setProduct: function(e) {
                if ("undefined" != typeof Cookies) {
                    e = parseInt(e);
                    var i = this.getProducts(); - 1 === i.indexOf(e) && (i.push(e), this.setCookie(this.cookie_key, i.join("|")), t(document).trigger("reycore/woocommerce/wishlist/added_product", [i, e]))
                }
            },
            removeProduct: function(e, i, s) {
                if ("undefined" != typeof Cookies) {
                    e = parseInt(e);
                    var o = this.getProducts();
                    o.splice(i, 1), this.setCookie(this.cookie_key, o.join("|")), s || t(document).trigger("reycore/woocommerce/wishlist/removed_product", [o, e])
                }
            },
            updateCounters: function(t) {
                t || (t = this.getProducts()), document.querySelectorAll(".rey-wishlistCounter-number").forEach((e => {
                    if (e.setAttribute("data-count", t.length), t.length) {
                        var i = e.closest(".rey-headerIcon-counter");
                        i && i.classList.remove("--hidden")
                    }
                }))
            },
            save: function(i) {
                i || (i = this.getProducts()), this.logged_in && (t(".rey-wishlistBtn").addClass("--disabled"), rey.ajax.request("wishlist_add_to_user", {
                    params: {
                        cache: !1
                    },
                    cb: function(i) {
                        e.animateButtons(), t(".rey-wishlistBtn").removeClass("--disabled --doing")
                    }
                }))
            },
            getProducts: function() {
                if ("undefined" != typeof Cookies) {
                    var t = Cookies.get(this.cookie_key),
                        e = t && t.split("|") || [];
                    return e = e.map((function(t) {
                        return parseInt(t)
                    })), void 0 !== reyParams.wishlist_umeta_counter && reyParams.wishlist_umeta_counter.length && reyParams.wishlist_umeta_counter.length !== e ? (this.setCookie(this.cookie_key, reyParams.wishlist_umeta_counter.join("|")), reyParams.wishlist_umeta_counter) : e
                }
            },
            animateButtons: function(e) {
                var i = t(e ? ".rey-wishlistBtn[data-id=" + e + "]" : ".rey-wishlistBtn.--doing");
                i.addClass("--animate"), setTimeout((function() {
                    i.removeClass("--animate")
                }), 500)
            },
            toggleButtonAttributes: function(e, i) {
                var s;
                i ? (e.addClass("--in-wishlist"), s = reyParams.wishlist_text_rm) : (e.removeClass("--in-wishlist"), s = reyParams.wishlist_text_add), e.attr({
                    title: s,
                    "aria-label": s
                }), e.is("[data-rey-tooltip]") && e.attr("data-rey-tooltip", s);
                var o = t(".rey-wishlistBtn-text", e);
                o.length && o.text(s)
            },
            showNotice: function() {
                if ("notice" === reyParams.wishlist_after_add) {
                    this.$notice.removeClass("--hidden").addClass("--visible");
                    var i = new function(t, e) {
                        var i, s, o = e;
                        this.pause = function() {
                            window.clearTimeout(i), o -= Date.now() - s
                        }, this.resume = function() {
                            s = Date.now(), window.clearTimeout(i), i = window.setTimeout(t, o)
                        }, this.resume()
                    }((function() {
                        e.$notice.removeClass("--visible")
                    }), 3200);
                    i.resume(), t(".rey-wishlist-notice", this.$notice).on("mouseenter", (function() {
                        i.pause()
                    })).on("mouseleave", (function() {
                        i.resume()
                    }))
                }
            }
        },
        i = function() {
            var i = this;
            this.isWishlistPage = !1, this.init = function() {
                this.isWishlistPage = t("body.rey-wishlist-page").length, this.$siteMain = t("body.rey-wishlist-page .rey-siteContent"), this.$emptyPage = t(".rey-wishlist-emptyPage", this.$siteMain), this.isWishlistPage && (this.base = e.init(), this.refreshData(), this.getShareId(), this.checkPageIds(), this.cleanupPage(), this.events())
            }, this.events = function() {
                t(document).on("reycore/woocommerce/wishlist/added_product reycore/woocommerce/wishlist/removed_product", (function(t, e, s) {
                    i.cleanupPage()
                }))
            }, this.refreshData = function() {
                this.$wishlistWrapper = t(".rey-wishlistWrapper", this.$siteMain), this.hideTitle = this.$wishlistWrapper.hasClass("--hide-title")
            }, this.getShareId = function() {
                this.shareId = !1;
                var t = rey.util.getUrlVars();
                Object.keys(t).length && "wid" in t && (this.shareId = t.wid)
            }, this.checkPageIds = function() {
                if (this.shareId) this.getWishlistPageContent();
                else {
                    var e = i.base.getProducts();
                    e.length || this.$siteMain.removeClass("--loading"), this.$wishlistWrapper.length && t("li.product", this.$wishlistWrapper).length === e.length || this.getWishlistPageContent()
                }
            }, this.getWishlistPageContent = function() {
                this.$siteMain.addClass("--loading");
                var e = {
                    pid: i.$emptyPage.attr("data-id"),
                    "hide-title": this.hideTitle ? 1 : 0
                };
                this.shareId && (e.wid = this.shareId), rey.ajax.request("wishlist_get_page_content", {
                    data: e,
                    params: {
                        cache: !1
                    },
                    formData: {
                        wid: this.shareId
                    },
                    cb: function(e) {
                        if (i.$siteMain.removeClass("--loading"), e.data && i.$siteMain.length) {
                            var s = document.createElement("div");
                            s.innerHTML = e.data, i.$wishlistWrapper[0].append(s), i.refreshData(), i.cleanupPage();
                            var o = s.querySelectorAll("li.product");
                            o.length && i.$wishlistWrapper.removeClass("--empty"), rey.hooks.doAction("wishlist/loaded", s), rey.hooks.doAction("product/loaded", o), t(document).on("click", ".rey-wishlist-removeBtn, .wishlist-remove", (function(e) {
                                e.preventDefault();
                                var s = t(this),
                                    o = parseInt(s.attr("data-id") || s.attr("data-pid") || "");
                                s.hasClass("elementor-element") && (o = parseInt(s.closest("[data-pid]").attr("data-pid") || ""));
                                var r = i.base.getProducts(),
                                    a = s.closest("li.product");
                                if (!isNaN(o)) {
                                    var n = r.indexOf(o); - 1 !== n && (i.base.removeProduct(o, n), a.attr("style", "").fadeOut(300, (function() {
                                        t(this).remove(), t("li.product", i.$wishlistWrapper).length || i.$wishlistWrapper.addClass("--empty")
                                    })))
                                }
                            }))
                        }
                    }
                })
            }, this.cleanupPage = function() {
                this.isWishlistPage && (this.$siteMain && !this.$siteMain.length || t(".woocommerce-notices-wrapper, .rey-loopHeader", this.$siteMain).remove())
            }, this.init()
        },
        s = function() {
            var i = this;
            this.init = function() {
                this.base = e.init(), this.mobileCloneTop(), this.updateCounters(), this.checkBtnStatuses(), this.events()
            }, this.updateCounters = function() {
                this.base.getProducts().length ? this.base.updateCounters() : void 0 !== reyParams.wishlist_update_counters_timeout ? setTimeout((() => {
                    this.base.updateCounters()
                }), parseInt(reyParams.wishlist_update_counters_timeout)) : rey.hooks.addAction("first_interaction", (() => {
                    this.base.updateCounters()
                }))
            }, this.events = function() {
                t(document).on("click", ".rey-wishlistBtn", (function(e) {
                    e.preventDefault();
                    var s = t(this),
                        o = parseInt(s.attr("data-id") || ""),
                        r = i.base.getProducts();
                    if (!isNaN(o)) {
                        if (s.hasClass("--supports-ajax") && s.addClass("--doing"), s.hasClass("--in-wishlist")) {
                            var a = r.indexOf(o);
                            if (-1 !== a) return i.base.removeProduct(o, a), void i.base.toggleButtonAttributes(s)
                        }
                        i.base.showNotice(), i.base.setProduct(o), i.base.toggleButtonAttributes(s, !0)
                    }
                })), t(document).on("click", ".rey-wishlistItem-remove", (function(e) {
                    e.preventDefault();
                    var s = t(this),
                        o = parseInt(s.attr("data-id") || ""),
                        r = i.base.getProducts();
                    if (!isNaN(o)) {
                        var a = r.indexOf(o);
                        if (-1 !== a) {
                            i.base.removeProduct(o, a), s.closest(".rey-wishlistItem").fadeOut(500, (function() {
                                t(this).remove(), rey.hooks.doAction("woocommerce/wishlist_account/remove", this, i), t(document).trigger("reycore/woocommerce/wishlist_account/remove")
                            }));
                            var n = this.getAttribute("data-rey-tooltip-id");
                            if (n) {
                                var h = document.querySelector(`.rey-tooltip-el[data-rey-tooltip-id="${n}"]`);
                                h && h.remove()
                            }
                            i.base.toggleButtonAttributes(t(".rey-wishlistBtn.--in-wishlist[data-id=" + o + "]"))
                        }
                    }
                })), t(document).on("reycore/woocommerce/wishlist/added_product reycore/woocommerce/wishlist/removed_product", (function(t, e, s) {
                    i.base.updateCounters(e), i.base.save(e), i.base.logged_in || i.base.animateButtons(s)
                })), t(document).on("reycore/woocommerce/after_login", (function(t, e) {
                    i.getSavedProducts()
                })), t(document).on("reycore/woocommerce/wishlist/get_data", (function(t, e, s) {
                    i.refreshCookieAndCounters(s)
                })), rey.hooks.addAction("ajaxfilters/finished", (function(t) {
                    i.mobileCloneTop(t)
                })), rey.hooks.addAction("product/loaded", (function(t) {
                    i.mobileCloneTop(t)
                }))
            }, this.checkBtnStatuses = function() {
                rey.hooks.addAction("first_interaction", (() => {
                    var e = this.base.getProducts();
                    document.querySelectorAll(".rey-wishlistBtn").forEach((i => {
                        if (i.classList.contains("--in-wishlist")) {
                            var s = parseInt(i.getAttribute("data-id") || 0); - 1 === e.indexOf(s) && this.base.toggleButtonAttributes(t(i))
                        }
                    }))
                }))
            }, this.mobileCloneTop = function(e) {
                rey.vars.is_mobile && t(".rey-wishlistBtn.--show-mobile--top", e || t(document)).each((function() {
                    var e = t(this),
                        i = e.closest("li.product"),
                        s = t(".rey-productThumbnail .rey-thPos--top-right", i);
                    s.length || (s = t('<div class="rey-thPos rey-thPos--top-right"></div>').appendTo(t(".rey-productThumbnail", i))), e.clone().removeClass("--show-mobile--top").addClass("--show-mobile--top-show").appendTo(s)
                }))
            }, this.refreshCookieAndCounters = function(e) {
                if ("undefined" != typeof Cookies) {
                    var s = e.map((function(t) {
                        return t.id
                    }));
                    i.base.setCookie(i.base.cookie_key, s.join("|")), i.base.updateCounters(s), t(".rey-wishlistBtn").removeClass("--supports-ajax --in-wishlist"), t.each(s, (function(e, s) {
                        var o = t(".rey-wishlistBtn[data-id=" + s + "]");
                        o.addClass("--in-wishlist"), i.base.logged_in && o.addClass("--supports-ajax")
                    }))
                }
            }, this.getSavedProducts = function() {
                this.base.logged_in = !0, rey.ajax.request("get_wishlist_data", {
                    params: {
                        cache: !1
                    },
                    cb: e => {
                        var i = e.data;
                        i && i.length && "undefined" != typeof Cookies && (this.refreshCookieAndCounters(i), t(document).trigger("reycore/woocommerce/wishlist/get_saved_products", [i]))
                    }
                })
            }, this.init()
        };
    document.addEventListener("rey-DOMContentLoaded", (function(e) {
        t.reyWishlist = new s, new i
    }));
    var o = function(e) {
        t.reyWishlist || (t.reyWishlist = new s);
        var i = t(e),
            o = t.reyWishlist.base.getProducts();
        o.length && (t.reyWishlist.base.toggleButtonAttributes(t("li.product .rey-wishlistBtn", i)), t.each(o, (function(e, s) {
            var o = t('li.product .rey-wishlistBtn[data-id="' + s + '"]', i);
            o.length && t.reyWishlist.base.toggleButtonAttributes(o, !0)
        })))
    };
    rey.hooks.addAction("elementor/element/lazy_loaded", (function(t) {
        o(t)
    })), rey.hooks.addAction("elementor/content/lazy_loaded", (function(t) {
        o(t)
    }))
}(jQuery);
! function() {
    "use strict";
    var e = !1,
        t = function() {
            var t = this;
            this.elements = {}, this.hashes = [], this.init = function() {
                e || (e = !0, this.general_html(), this.sticky_cols(), this.headerOverlayResetZindexes(), this.lazyContent(), setTimeout((() => {
                    rey.hooks.doAction("elementor/init", this), document.dispatchEvent(new CustomEvent("rey/elementor/init", {
                        detail: {
                            app: this
                        }
                    })), this.runElements()
                }), 100), rey.hooks.addAction("reycore/ajax_response/assets", (() => {
                    rey.hooks.doAction("elementor/init", this)
                })))
            }, this.runElements = function() {
                var e = {};
                Object.keys(this.elements).forEach((t => {
                    this.elements[t].forEach((n => {
                        if (rey.vars.elementor_edit_mode) elementorFrontend.hooks.addAction("frontend/element_ready/" + t, n);
                        else {
                            if (!e[t]) {
                                var r = "data-widget_type"; - 1 !== ["section", "column", "container"].indexOf(t) && (r = "data-element_type"), e[t] = document.querySelectorAll(`.elementor-element[${r}="${t}"]`)
                            }
                            e[t].forEach((e => {
                                n(jQuery(e))
                            }))
                        }
                    }))
                }))
            }, this.getHash = function(e) {
                return e = (e = e.replace(/\s+/g, "")).substring(0, 100), rey.util.simpleHash(e)
            }, this.registerElement = function(e) {
                this.elements[e.name] || (this.elements[e.name] = []);
                var t = this.getHash(e.name + e.cb.toString()); - 1 === this.hashes.indexOf(t) && (this.hashes.push(t), this.elements[e.name].push(e.cb))
            }, this.headerOverlayResetZindexes = function() {
                reyParams.header_no_zindex_patch || (rey.elements.header ? (rey.elements.header.addEventListener("click", t._makeHeaderZindex, {
                    once: !0
                }), rey.elements.header.addEventListener("mouseover", t._makeHeaderZindex, {
                    once: !0
                }), rey.elements.header.addEventListener("touchstart", t._makeHeaderZindex, {
                    once: !0,
                    passive: !0
                })) : t._makeHeaderZindex())
            }, this._makeHeaderZindex = function() {
                if (!reyParams.header_no_zindex_patch && !t.__didZ) {
                    var e = [".rey-header-dropPanel"];
                    reyParams.theme_js_params && "hide" !== reyParams.theme_js_params.menu_hover_overlay && (e.push(".menu-item.menu-item-has-children.--is-mega"), e.push(".menu-item.menu-item-has-children.--is-regular"), e.push(".rey-mainNavigation--mobile")), [".rey-siteHeader:not(.--hfx-spacer)", ".rey-pbTemplate--gs-header"].forEach((n => {
                        document.querySelectorAll(n + ' .elementor-element[class*="--zindexed-"]').forEach((n => {
                            n.querySelector(e.join(",")) && (n.classList.add("--zindex-auto"), t.__didZ = !0)
                        }))
                    }))
                }
            }, this.lazyContent = function() {
                rey.hooks.addAction("elementor/element/lazy_loaded", ((e, t, n) => {
                    void 0 !== this.elements[n] && this.elements[n].forEach((t => {
                        t(jQuery(e))
                    }))
                })), rey.hooks.addAction("elementor/content/lazy_loaded", (e => {
                    e.querySelectorAll(".elementor-element").forEach((e => {
                        var t = e.getAttribute("data-element_type");
                        "widget" === t && (t = e.getAttribute("data-widget_type")), void 0 !== this.elements[t] && this.elements[t].forEach((t => {
                            t(jQuery(e))
                        })), "undefined" != typeof elementorFrontend && elementorFrontend.hooks && elementorFrontend.hooks.doAction("frontend/element_ready/" + t, jQuery(e), jQuery)
                    }))
                })), window.addEventListener("elementor/popup/show", (e => {
                    if (e.detail.instance) {
                        var t = e.detail.instance.$element;
                        rey.hooks.doAction("elementor/content/lazy_loaded", rey.validation.isJQuery(t) ? t[0] : t)
                    }
                }))
            }, this.sticky_cols = function() {
                rey.vars.is_desktop && document.querySelector(".elementor-column.--sticky-col.--css-first, .shop-sidebar.--sidebar-sticky") && rey.elements.siteWrapper && rey.elements.siteWrapper.style.setProperty("--site-wrapper-overflow", "visible")
            }, this.general_html = function() {
                var e = function() {
                    document.querySelectorAll(".u-title-dashes").forEach((e => {
                        var t = e.closest(".elementor-top-section");
                        t && (t.style.overflow = "hidden")
                    }))
                };
                e(), rey.hooks.addAction("ajaxfilters/finished", (function() {
                    e()
                }))
            }, this.init()
        };

    function n() {
        rey.elementor = new t
    }
    "undefined" == typeof rey ? console.error('`rey` is undefined an will not run the "elementor/frontend/init" event, for edit mode.') : (rey.vars.elementor_edit_mode = "undefined" != typeof elementorFrontendConfig && elementorFrontendConfig.environmentMode.edit, rey.vars.is_edit_mode = rey.vars.elementor_edit_mode || rey.vars.customizer_preview), document.addEventListener("rey-DOMContentLoaded", (function() {
        rey.vars.elementor_edit_mode || n()
    })), window.addEventListener("elementor/frontend/init", (function() {
        rey.vars.elementor_edit_mode && n()
    }))
}();
! function(e) {
    "use strict";
    var o = {
        init: function(o) {
            return "undefined" != typeof wc_cart_params && (void 0 !== e.fn.block && (this.page_selector = ".rey-cartPage.--layout-custom", this.$page = e(this.page_selector, o), this.$form = e(".woocommerce-cart-form", this.$page), this.$totals = e(".cart_totals", this.$page), this.events(), this.move_coupon(), void this.sticky_totals()))
        },
        events: function() {
            var o = this;
            e(document).on("click", this.page_selector + ' button[name="apply_coupon"]', (function(e) {
                e.preventDefault(), o.apply_coupon()
            })), e(document.body).on("updated_wc_div updated_shipping_method applied_coupon removed_coupon country_to_state_changed", (function() {
                o.move_coupon()
            }))
        },
        block: function(e) {
            e.is(".processing") || e.parents(".processing").length || e.addClass("processing").block({
                message: null,
                overlayCSS: {
                    background: "#fff",
                    opacity: .6
                }
            })
        },
        show_notice: function(o, t) {
            t || (t = e(".woocommerce-notices-wrapper:first", this.$page) || e(".cart-empty", this.$page).closest(".woocommerce") || e(".woocommerce-cart-form", this.$page)), t.prepend(o)
        },
        apply_coupon: function() {
            this.block(this.$form);
            var o = this,
                t = e("#coupon_code", this.$page),
                c = t.val(),
                r = {
                    security: wc_cart_params.apply_coupon_nonce,
                    coupon_code: c
                };
            e.ajax({
                type: "POST",
                url: wc_cart_params.wc_ajax_url.toString().replace("%%endpoint%%", "apply_coupon"),
                data: r,
                dataType: "html",
                success: function(t) {
                    e(".woocommerce-error, .woocommerce-message, .woocommerce-info", this.$page).remove(), o.show_notice(t), e(document.body).trigger("applied_coupon", [c])
                },
                complete: function() {
                    o.$form.removeClass("processing").unblock(), t.val(""), e(document).trigger("wc_update_cart", [!0])
                }
            })
        },
        move_coupon: function() {
            if (e(".woocommerce-cart-form__actions .coupon").remove(), !e(".cart_totals .coupon").length && e("#tmpl-reycore-cart-coupon").length) {
                var o = rey.template("reycore-cart-coupon");
                e(o()).insertBefore(".wc-proceed-to-checkout")
            }
        },
        sticky_totals: function() {
            rey.vars.is_desktop && this.$page.is(".--totals-sticky") && rey.elements.siteWrapper && rey.elements.siteWrapper.style.setProperty("--site-wrapper-overflow", "visible")
        }
    };
    rey.hooks.addAction("elementor/init", (function(e) {
        e.registerElement({
            name: "reycore-wc-cart.default",
            cb: function(e) {
                o.init(e)
            }
        })
    }))
}(jQuery);

function _classCallCheck(t, i) {
    if (!(t instanceof i)) throw new TypeError("Cannot call a class as a function")
}

function _defineProperties(t, i) {
    for (var e = 0; e < i.length; e++) {
        var s = i[e];
        s.enumerable = s.enumerable || !1, s.configurable = !0, "value" in s && (s.writable = !0), Object.defineProperty(t, s.key, s)
    }
}

function _createClass(t, i, e) {
    return i && _defineProperties(t.prototype, i), e && _defineProperties(t, e), t
}! function(t) {
    "use strict";
    t.reySticky = function(i) {
        return new function(i) {
            var e = this;
            this.$header = t(".rey-siteHeader.header-pos--fixed:not(.--hfx-spacer)"), this.$stickyTopGs = t('.rey-stickyContent[data-align="top"] > .elementor'), this.init = function() {
                if (void 0 !== Sticky) {
                    if (this.args = t.extend({
                            element: !1,
                            marginTop: 0,
                            marginBottom: 0,
                            stickyContainer: "body",
                            trigger: !0,
                            delay: !1,
                            fixedHeaderAware: !1,
                            stickyTopGsAware: !1,
                            wrap: !1,
                            wrapWith: !1
                        }, i), this.args.element) return this.args.delay ? void setTimeout((function() {
                        return e.makeSticky()
                    }), parseInt(this.args.delay)) : this.makeSticky()
                } else console.log("Sticky undefined.")
            }, this.makeSticky = function() {
                return this.$element = t(this.args.element), this.tweakConfig(), this.sticky = new Sticky(this.args.element, {
                    marginTop: parseInt(this.args.marginTop),
                    marginBottom: parseInt(this.args.marginBottom),
                    stickyContainer: this.args.stickyContainer,
                    stickyClass: this.args.stickyClass || null,
                    useContainerHeight: this.args.useContainerHeight || !0,
                    wrap: this.args.wrap || !1,
                    wrapWith: this.args.wrapWith || "<div></div>"
                }), void 0 !== this.args.cb && this.args.cb(this.sticky), this.args.trigger && this.$element.trigger("rey/sticky", [this.sticky]), this.sticky
            }, this.tweakConfig = function() {
                this.args.marginTop += parseInt(rey.vars.adminBar), this.args.fixedHeaderAware && this.$header.length && (this.args.marginTop += this.$header.height()), this.args.stickyTopGsAware && this.$stickyTopGs.length && (this.args.marginTop += this.$stickyTopGs.height())
            }, this.init()
        }(i)
    }
}(jQuery);
var Sticky = function() {
    function t() {
        var i = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : "",
            e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {};
        _classCallCheck(this, t), this.selector = i, this.elements = [], this.version = "1.3.0", this.vp = this.getViewportSize(), this.body = document.querySelector("body"), this.options = {
            wrap: e.wrap || !1,
            wrapWith: e.wrapWith || "<span></span>",
            marginTop: e.marginTop || 0,
            marginBottom: e.marginBottom || 0,
            stickyFor: e.stickyFor || 0,
            stickyClass: e.stickyClass || null,
            stickyContainer: e.stickyContainer || "body",
            useContainerHeight: e.useContainerHeight || !1
        }, this.updateScrollTopPosition = this.updateScrollTopPosition.bind(this), this.updateScrollTopPosition(), window.addEventListener("load", this.updateScrollTopPosition), window.addEventListener("scroll", this.updateScrollTopPosition), this.run()
    }
    return _createClass(t, [{
        key: "run",
        value: function() {
            var t = this,
                i = setInterval((function() {
                    if ("complete" === document.readyState) {
                        clearInterval(i);
                        var e = document.querySelectorAll(t.selector);
                        t.forEach(e, (function(i) {
                            return t.renderElement(i)
                        }))
                    }
                }), 10)
        }
    }, {
        key: "renderElement",
        value: function(t) {
            var i = this;
            t.sticky = {}, t.sticky.active = !1, t.sticky.marginTop = parseInt(t.getAttribute("data-margin-top")) || this.options.marginTop, t.sticky.marginBottom = parseInt(t.getAttribute("data-margin-bottom")) || this.options.marginBottom, t.sticky.stickyFor = parseInt(t.getAttribute("data-sticky-for")) || this.options.stickyFor, t.sticky.useContainerHeight = this.options.useContainerHeight, t.sticky.stickyClass = t.getAttribute("data-sticky-class") || this.options.stickyClass, t.sticky.wrap = !!t.hasAttribute("data-sticky-wrap") || this.options.wrap, t.sticky.stickyContainer = this.options.stickyContainer, t.sticky.container = this.getStickyContainer(t), t.sticky.container.rect = this.getRectangle(t.sticky.container), t.sticky.rect = this.getRectangle(t), "img" === t.tagName.toLowerCase() && (t.onload = function() {
                return t.sticky.rect = i.getRectangle(t)
            }), t.sticky.wrap && this.wrapElement(t), this.activate(t)
        }
    }, {
        key: "wrapElement",
        value: function(t) {
            t.insertAdjacentHTML("beforebegin", t.getAttribute("data-sticky-wrapWith") || this.options.wrapWith), t.previousSibling.appendChild(t)
        }
    }, {
        key: "activate",
        value: function(t) {
            t.sticky.rect.top + t.sticky.rect.height < t.sticky.container.rect.top + t.sticky.container.rect.height && t.sticky.stickyFor < this.vp.width && !t.sticky.active && (t.sticky.active = !0), this.elements.indexOf(t) < 0 && this.elements.push(t), t.sticky.resizeEvent || (this.initResizeEvents(t), t.sticky.resizeEvent = !0), t.sticky.scrollEvent || (this.initScrollEvents(t), t.sticky.scrollEvent = !0), this.setPosition(t)
        }
    }, {
        key: "initResizeEvents",
        value: function(t) {
            var i = this;
            t.sticky.resizeListener = function() {
                return i.onResizeEvents(t)
            }, window.addEventListener("resize", t.sticky.resizeListener)
        }
    }, {
        key: "destroyResizeEvents",
        value: function(t) {
            window.removeEventListener("resize", t.sticky.resizeListener)
        }
    }, {
        key: "onResizeEvents",
        value: function(t) {
            this.vp = this.getViewportSize(), t.sticky.rect = this.getRectangle(t), t.sticky.container.rect = this.getRectangle(t.sticky.container), t.sticky.rect.top + t.sticky.rect.height < t.sticky.container.rect.top + t.sticky.container.rect.height && t.sticky.stickyFor < this.vp.width && !t.sticky.active ? t.sticky.active = !0 : (t.sticky.rect.top + t.sticky.rect.height >= t.sticky.container.rect.top + t.sticky.container.rect.height || t.sticky.stickyFor >= this.vp.width && t.sticky.active) && (t.sticky.active = !1), this.setPosition(t)
        }
    }, {
        key: "initScrollEvents",
        value: function(t) {
            var i = this;
            t.sticky.scrollListener = function() {
                return i.onScrollEvents(t)
            }, window.addEventListener("scroll", t.sticky.scrollListener)
        }
    }, {
        key: "destroyScrollEvents",
        value: function(t) {
            window.removeEventListener("scroll", t.sticky.scrollListener)
        }
    }, {
        key: "onScrollEvents",
        value: function(t) {
            t.sticky && t.sticky.active && this.setPosition(t)
        }
    }, {
        key: "setPosition",
        value: function(t) {
            this.css(t, {
                position: "",
                width: "",
                top: "",
                left: ""
            }), (t.sticky.useContainerHeight ? t.sticky.container.rect.height : this.vp.height) < t.sticky.rect.height || !t.sticky.active || (t.sticky.rect.width || (t.sticky.rect = this.getRectangle(t)), t.sticky.wrap && this.css(t.parentNode, {
                display: "block",
                width: t.sticky.rect.width + "px",
                height: t.sticky.rect.height + "px"
            }), 0 === t.sticky.rect.top && t.sticky.container === this.body ? (this.css(t, {
                position: "fixed",
                top: t.sticky.rect.top + "px",
                left: t.sticky.rect.left + "px",
                width: t.sticky.rect.width + "px"
            }), t.sticky.stickyClass && t.classList.add(t.sticky.stickyClass)) : this.scrollTop > t.sticky.rect.top - t.sticky.marginTop ? (this.css(t, {
                position: "fixed",
                width: t.sticky.rect.width + "px",
                left: t.sticky.rect.left + "px"
            }), this.scrollTop + t.sticky.rect.height + t.sticky.marginTop > t.sticky.container.rect.top + t.sticky.container.offsetHeight - t.sticky.marginBottom ? (t.sticky.stickyClass && t.classList.remove(t.sticky.stickyClass), this.css(t, {
                top: t.sticky.container.rect.top + t.sticky.container.offsetHeight - (this.scrollTop + t.sticky.rect.height + t.sticky.marginBottom) + "px"
            })) : (t.sticky.stickyClass && t.classList.add(t.sticky.stickyClass), this.css(t, {
                top: t.sticky.marginTop + "px"
            }))) : (t.sticky.stickyClass && t.classList.remove(t.sticky.stickyClass), this.css(t, {
                position: "",
                width: "",
                top: "",
                left: ""
            }), t.sticky.wrap && this.css(t.parentNode, {
                display: "",
                width: "",
                height: ""
            })))
        }
    }, {
        key: "update",
        value: function(t) {
            var i = this;
            this.forEach(this.elements, (function(e) {
                e.sticky.rect = i.getRectangle(e), e.sticky.container.rect = i.getRectangle(e.sticky.container), t && (e.sticky.marginTop = t), i.activate(e), i.setPosition(e)
            }))
        }
    }, {
        key: "destroy",
        value: function() {
            var t = this;
            window.removeEventListener("load", this.updateScrollTopPosition), window.removeEventListener("scroll", this.updateScrollTopPosition), this.forEach(this.elements, (function(i) {
                t.destroyResizeEvents(i), t.destroyScrollEvents(i), i.dataset.stickyWrap && (i.parentNode.parentNode.insertBefore(i, i.parentNode), i.parentNode.removeChild(i.nextSibling)), i.removeAttribute("style"), delete i.sticky
            }))
        }
    }, {
        key: "getStickyContainer",
        value: function(t) {
            for (var i = t.parentNode; !i.hasAttribute("data-sticky-container") && !i.parentNode.querySelector(t.sticky.stickyContainer) && i !== this.body;) i = i.parentNode;
            return i
        }
    }, {
        key: "getRectangle",
        value: function(t) {
            this.css(t, {
                position: "",
                width: "",
                top: "",
                left: ""
            });
            var i = Math.max(t.offsetWidth, t.clientWidth, t.scrollWidth),
                e = Math.max(t.offsetHeight, t.clientHeight, t.scrollHeight),
                s = 0,
                n = 0;
            do {
                s += t.offsetTop + this.options.marginTop || 0, n += t.offsetLeft || 0, t = t.offsetParent
            } while (t);
            return {
                top: s,
                left: n,
                width: i,
                height: e
            }
        }
    }, {
        key: "getViewportSize",
        value: function() {
            return {
                width: Math.max(document.documentElement.clientWidth, window.innerWidth || 0),
                height: Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
            }
        }
    }, {
        key: "updateScrollTopPosition",
        value: function() {
            this.scrollTop = (window.pageYOffset || document.scrollTop) - (document.clientTop || 0) || 0
        }
    }, {
        key: "forEach",
        value: function(t, i) {
            for (var e = 0, s = t.length; e < s; e++) i(t[e])
        }
    }, {
        key: "css",
        value: function(t, i) {
            for (var e in i) i.hasOwnProperty(e) && (t.style[e] = i[e])
        }
    }]), t
}();
! function(t, i) {
    "undefined" != typeof exports ? module.exports = i : "function" == typeof define && define.amd ? define([], (function() {
        return i
    })) : t.Sticky = i
}(this, Sticky);
! function() {
    "use strict";
    var t = function(t) {
        (t || document).querySelectorAll("form.cart input.qty").forEach((t => {
            t.setAttribute("data-min", parseFloat(t.getAttribute("min") || 1)), t.setAttribute("data-max", parseFloat(t.getAttribute("max") || 99999)), t.setAttribute("data-step", parseFloat(t.getAttribute("step") || 1))
        }))
    };
    document.addEventListener("rey-DOMContentLoaded", (function(e) {
        t()
    })), rey.hooks.addAction("after_quickview", (function(e) {
        t(e)
    })), rey.jquery.addEventListener("reset_data", (function(t) {
        var e = t.target.querySelector("input.qty");
        if (e) {
            var a = parseFloat(e.getAttribute("data-min") || 1);
            e.setAttribute("min", a), e.value = a, e.setAttribute("max", parseFloat(e.getAttribute("data-max") || 99999)), e.setAttribute("step", parseFloat(e.getAttribute("data-step") || 1))
        }
    }), "form.variations_form"), document.addEventListener("click", rey.util.debounce((t => {
        var e = t.target.closest(".cartBtnQty-control");
        if (e) {
            t.preventDefault();
            var a = e.parentElement,
                r = a.querySelector("input");
            if (r) {
                var i = parseFloat(r.value),
                    s = parseFloat(r.getAttribute("min") || 1),
                    n = parseFloat(r.getAttribute("max") || 99999),
                    o = parseFloat(r.getAttribute("step") || 1);
                if (!e.classList.contains("--disabled")) {
                    r.closest(".product.product-type-grouped") && (i = i || 0), a.querySelectorAll(".cartBtnQty-control").forEach((t => {
                        t.classList.remove("--disabled")
                    })), e.classList.contains("--minus") ? i > s ? i -= o : e.classList.add("--disabled") : e.classList.contains("--plus") && (i + o == n && e.classList.add("--disabled"), i < n && (i += o)), i % 1 && (i = i.toFixed(2));
                    var u = r.closest(".rey-loopQty");
                    if (u) {
                        var c = u.querySelector(".button.add_to_cart_button[data-quantity]");
                        c && c.setAttribute("data-quantity", i)
                    }
                    r.value = i, r.dispatchEvent(new Event("input", {
                        bubbles: !0
                    })), r.dispatchEvent(new Event("change", {
                        bubbles: !0
                    }))
                }
            }
        }
    }), reyParams.qty_click_debounce || 50)), document.addEventListener("input", (t => {
        var e = t.target.closest("input.qty");
        if (e) {
            var a = e.closest(".rey-loopQty");
            if (a) {
                var r = a.querySelector(".button.add_to_cart_button[data-quantity]");
                r && r.setAttribute("data-quantity", e.value)
            }
        }
    }))
}();
! function() {
    "use strict";
    "undefined" != typeof rey ? (rey.components.slider = function(e) {
        return new function(e) {
            this.init = function() {
                if ("undefined" != typeof Splide) {
                    if (this.args = Object.assign({
                            element: !1,
                            config: {},
                            trigger: !0,
                            mount: !0,
                            delay: !1,
                            markup: {},
                            customArrows: !1,
                            createArrows: !1,
                            customPagination: !1,
                            animateHeight: !1,
                            offset: {},
                            inViewEntry: !1
                        }, e), this.args.element && Object.keys(this.args.config).length) return this.args.delay ? void setTimeout((() => this.makeSlider()), parseInt(this.args.delay)) : this.makeSlider()
                } else console.log("Splide undefined.")
            }, this.makeSlider = function() {
                if (this.element = this.args.element, this.slides = this.element.querySelectorAll(".splide__slide"), this.handleConfig(), this.handleOffsets(), this.handleMarkup(), this.slider = new Splide(this.getSelector(), rey.hooks.applyFilters("reycore/sliders", this.args.config, this)), this.handleCustomPagination(), this.handleArrows(), this.animateHeight(), void 0 !== this.args.cb && this.args.cb(this.slider), this.args.trigger && rey.hooks.doAction("rey/slider", this, this.slider), this.slider.on("mounted", (() => {
                        rey.hooks.doAction("slider/mounted", this)
                    })), this.args.mount) {
                    var e = void 0 !== window.splide && void 0 !== window.splide.Extensions ? window.splide.Extensions : {};
                    void 0 === this.args.config.autoScroll && (e = {}), this.slider.mount(e)
                }
                return this.slider
            }, this.handleConfig = function() {
                void 0 === this.args.config.direction && (this.args.config.direction = rey.vars.is_rtl ? "rtl" : "ltr"), rey.vars.elementor_edit_mode && "fade" !== this.args.config.type && (this.args.config.type = "slide"), void 0 === this.args.config.pagination && (this.args.config.pagination = !1), this.args.config.resetProgress = !1, this.args.config.reducedMotion = !1, this.args.inViewEntry && (this.args.config.ioEntry = this.args.inViewEntry)
            }, this.getSelector = function() {
                var e = this.element;
                if (rey && rey.vars.elementor_edit_mode) {
                    var t = this.element.closest("[data-id]").getAttribute("data-id") || "";
                    if (!t) return e;
                    e = '.elementor-element[data-id="' + t + '"] .splide', this.element = document.querySelector(e)
                }
                return e
            }, this.handleOffsets = function() {
                if (Object.keys(this.args.offset).length) {
                    var e = {
                        ltr: "right",
                        rtl: "left"
                    };
                    this.args.config.padding = {}, rey.vars.is_desktop && this.args.offset.desktop ? this.args.config.padding[e[this.args.config.direction]] = this.args.offset.desktop + "px" : rey.vars.is_tablet && this.args.offset.tablet ? this.args.config.padding[e[this.args.config.direction]] = this.args.offset.tablet + "px" : rey.vars.is_mobile && this.args.offset.mobile && (this.args.config.padding[e[this.args.config.direction]] = this.args.offset.mobile + "px")
                }
            }, this.animateHeight = function() {
                if (this.args.animateHeight && this.element) {
                    var e = this.element.querySelector(".splide__list");
                    e.classList.add("--auto-height");
                    var t = t => {
                        var i = this.slider.Components.Slides.getAt(t).slide.querySelector("img, picture"),
                            s = e => {
                                const t = e.naturalWidth,
                                    i = e.naturalHeight;
                                return (e.parentElement.clientWidth / t * i || 1) + "px"
                            };
                        if (i) i.complete && i.getAttribute("src") ? e.style.height = s(i) : i.addEventListener("load", (function(t) {
                            e.style.height = s(this)
                        }));
                        else {
                            var r = `.splide__slide:nth-child(${t||1})`,
                                a = this.slider.root.querySelector(r);
                            a && (a.style.height = a.offsetHeight)
                        }
                    };
                    this.slider.on("active", (e => {
                        t(e.index)
                    }))
                }
            }, this.handleArrows = function() {
                if (this.args.createArrows) {
                    var e = rey.frontend.svgIcon.getArrows();
                    if (e) {
                        var t = "",
                            i = "",
                            s = this.element;
                        i += e.prev, i += e.next, "object" == typeof this.args.createArrows && (t += this.args.createArrows.navSelector, void 0 !== this.args.createArrows.extra && (i += this.args.createArrows.extra), void 0 !== this.args.createArrows.appendTo && (s = this.args.createArrows.appendTo));
                        var r = document.createElement("div");
                        r.setAttribute("data-lazy-hidden", ""), r.classList.add("splide__arrows"), t.split(" ").forEach((e => {
                            e && r.classList.add(e)
                        })), r.innerHTML = i, s.append(r);
                        var a = r.querySelector(".rey-arrowSvg--left"),
                            n = r.querySelector(".rey-arrowSvg--right");
                        a.addEventListener("click", (e => {
                            e.preventDefault(), this.slider.go("<")
                        })), n.addEventListener("click", (e => {
                            e.preventDefault(), this.slider.go(">")
                        })), this.slider.on("moved", (e => {
                            "loop" !== this.slider.options.type && (a.classList.remove("is-disabled"), n.classList.remove("is-disabled"), 0 === e ? a.classList.add("is-disabled") : this.slider.length === e + 1 && n.classList.add("is-disabled"))
                        }))
                    }
                } else if (this.args.customArrows) {
                    var o = document.querySelector(this.getSelectorDot(this.args.customArrows));
                    if (o) {
                        var d = o.querySelectorAll("[data-dir]");
                        d.forEach((e => {
                            e.addEventListener("click", (e => {
                                e.preventDefault(), this.slider.go(e.currentTarget.getAttribute("data-dir"))
                            }))
                        })), this.slider.on("moved", (e => {
                            if ("loop" !== this.slider.options.type)
                                if (d.forEach((e => {
                                        e.classList.remove("is-disabled")
                                    })), 0 === e) {
                                    var t = o.querySelector('[data-dir="<"]');
                                    t && t.classList.add("is-disabled")
                                } else if (this.slider.length === e + 1) {
                                var i = o.querySelector('[data-dir=">"]');
                                i && i.classList.add("is-disabled")
                            }
                        }))
                    }
                }
            }, this.handleCustomPagination = function() {
                if (this.args.customPagination) {
                    var e = document.querySelector(this.getSelectorDot(this.args.customPagination));
                    e && (this.args.config.pagination = !1, this.connectPagination(e, this.slider))
                }
            }, this.getSelectorDot = function(e) {
                var t = ".";
                return 0 === e.indexOf(".") && (t = ""), t + e
            }, this.connectPagination = function(e, t) {
                var i = e.querySelectorAll("[data-go]");
                i.forEach((e => {
                    e.addEventListener("click", (e => {
                        e.preventDefault(), i.forEach((e => {
                            e.classList.remove("is-active")
                        })), e.currentTarget.classList.add("is-active"), t.go(parseInt(e.currentTarget.getAttribute("data-go")))
                    }))
                })), t.on("mounted", (e => {
                    i[t.index].classList.add("is-active")
                })), t.on("move", (t => {
                    i.forEach((e => {
                        e.classList.remove("is-active")
                    })), e.querySelector('[data-go="' + t + '"]').classList.add("is-active")
                })), e.classList.add("is-visible")
            }, this.handleMarkup = function() {
                if (Object.keys(this.args.markup).length) {
                    var e = Object.assign({
                        selector: ""
                    }, this.args.markup);
                    for (const e of this.element.children) e.classList.add("splide__slide");
                    this.element.classList.add("splide__list");
                    var t = document.createElement("div");
                    t.classList.add("splide__track");
                    var i = document.createElement("div");
                    i.classList.add("splide", e.selector);
                    var s = this.args.element.getAttribute("data-skin");
                    s && s && i.setAttribute("data-skin", s), rey.dom.wrap(this.element, i), rey.dom.wrap(this.element, t), this.element.classList.remove("--splide-markup"), this.element = this.element.closest(".splide")
                }
            }, this.init()
        }(e)
    }, document.addEventListener("rey-DOMContentLoaded", (function() {
        var e = document.querySelectorAll("[data-rey-splide]");
        e.length && rey.frontend.inView({
            target: e,
            cb: e => {
                var t = JSON.parse(e.target.getAttribute("data-rey-splide") || "{}");
                rey.components.slider({
                    element: e.target,
                    config: t,
                    animateHeight: t.animateHeight && !0 === t.animateHeight
                })
            },
            once: !0
        })
    }))) : console.error("`rey` is undefined so this script will not run.")
}();
! function(t) {
    "use strict";
    var e = function(t) {
            this.createArrowsArgs = !1, this.canRun = !0, this.init = function() {
                if (!t.closest(".splide.is-initialized") && (this.grid = t, this.appSettings = JSON.parse(this.grid.getAttribute("data-prod-carousel-config") || "{}"), Object.keys(this.appSettings).length && (this.gridItems = Array.from(this.grid.querySelectorAll("li.product")), !(this.gridItems.length < 2)))) {
                    if (this.getSliderConfig(), this.canRun) return this.getArrowsArgs(), this.grid.addEventListener("rey/masonry", (t => {
                        t.detail.masonry("destroy")
                    })), rey.frontend.inView({
                        target: this.grid.closest(".splide"),
                        cb: t => {
                            rey.components.slider({
                                element: t.target,
                                config: this.sliderConfig,
                                createArrows: this.createArrowsArgs,
                                delay: 1e3
                            })
                        },
                        once: !0
                    }), this;
                    this.grid.closest(".splide").classList.add("--no-padding")
                }
            }, this.getSliderConfig = function() {
                this.cols = parseInt(this.appSettings.per_page), this.colsTablet = parseInt(this.appSettings.per_page_tablet), this.colsMobile = parseInt(this.appSettings.per_page_mobile), this.sliderConfig = {
                    type: "slide",
                    autoplay: this.appSettings.autoplay,
                    interval: parseInt(this.appSettings.interval),
                    rewind: this.appSettings.rewind,
                    perPage: this.cols,
                    gap: 0,
                    arrows: !1,
                    pagination: !1,
                    autoWidth: this.appSettings.auto_width,
                    breakpoints: {
                        1024: {
                            perPage: this.colsTablet
                        },
                        767: {
                            perPage: this.colsMobile
                        }
                    }
                }, this.appSettings.slides_to_move && (this.sliderConfig.perMove = parseInt(this.appSettings.slides_to_move)), !1 !== this.appSettings.rewind && (this.sliderConfig.breakpoints[1024].type = "loop"), rey.vars.is_mobile && this.gridItems.length <= this.colsMobile && (this.canRun = !1)
            }, this.getArrowsArgs = function() {
                if (!this.appSettings.desktop_only_arrows || rey.vars.is_desktop) {
                    this.createArrowsArgs = !0;
                    var t = "";
                    this.gridItems.length <= this.cols && (t += "--dnone-lg", this.sliderConfig.breakpoints[2560] = {
                        destroy: !0
                    }), this.gridItems.length <= this.colsTablet && (this.sliderConfig.breakpoints[1024] = {
                        destroy: !0
                    }, t += " --dnone-md --dnone-sm"), t && (this.createArrowsArgs = {
                        navSelector: t
                    })
                }
            }, this.init()
        },
        i = function(t) {
            (t || document).querySelectorAll("ul.products[data-prod-carousel-config]").forEach((t => {
                new e(t)
            }))
        };
    document.addEventListener("rey-DOMContentLoaded", (function(t) {
        i()
    })), rey.hooks.addAction("woocommerce/carousel/loaded", (function(t) {
        i(t)
    }))
}(jQuery);
! function(t) {
    "use strict";
    document.addEventListener("rey-DOMContentLoaded", (function(e) {
        var i;
        i = {
            gridTypes: ["default", "masonry", "masonry2", "metro", "scattered", "scattered2"],
            init: function(e) {
                var i = this;
                this.$pGrid = t(e), this.$pGrid.length && t.each(this.gridTypes, (function(t, e) {
                    i.$pGrid.hasClass("rey-wcGrid-" + e) && void 0 !== i["run_" + e] && i["run_" + e]()
                }))
            },
            run_masonry: function() {
                this.doMasonryGrid()
            },
            run_masonry2: function() {
                this.doMasonryGrid()
            },
            doMasonryGrid: function(e) {
                var i = e || this.$pGrid,
                    r = !1;
                void 0 !== t.fn.masonry && (i.hasClass("--prevent-masonry") || (rey.util.imagesLoaded(i, (function() {
                    r ? r.masonry("layout") : ((r = i.masonry({
                        itemSelector: "li.product",
                        percentPosition: !0,
                        transitionDuration: 0,
                        isInitLayout: !1
                    })).on("layoutComplete", (function() {
                        r.addClass("--msnry-initialised")
                    })), r.masonry(), r[0].dispatchEvent(new CustomEvent("rey/masonry", {
                        detail: r
                    })))
                })), rey.hooks.addAction("product/loaded", (function(e) {
                    r && e.length && t(e[0].parentNode).is(r) && r.masonry("appended", e)
                })), rey.hooks.addAction("view_selector/change_cols", (function() {
                    r && r.masonry()
                }))))
            },
            run_scattered: function() {
                this.doScattered()
            },
            run_scattered2: function() {
                this.doScattered("mixed")
            },
            doScattered: function(e) {
                var i = this;
                if (!this.$pGrid.hasClass("--prevent-scattered")) {
                    this.$products = t("li.product", this.$pGrid);
                    var r = function(t) {
                        "mixed" !== e ? t.addClass("scGrid-offset") : t.addClass("scGrid-offset-" + rey.util.getRandomInt(8))
                    };
                    if (reyParams.js_params.scattered_grid_custom_items && reyParams.js_params.scattered_grid_custom_items.length) t.each(reyParams.js_params.scattered_grid_custom_items, (function(e, n) {
                        r(t("li.product.post-" + n, i.$pGrid))
                    }));
                    else {
                        var n = reyParams.js_params.scattered_grid_max_items || 7;
                        this.$products.sort((function() {
                            return .5 - Math.random()
                        })).slice(0, n).each((function(e, i) {
                            r(t(i))
                        }))
                    }
                }
            },
            run_metro: function() {}
        }, t(".rey-siteMain ul.products").each((function(t, e) {
            Object.create(i).init(e)
        })), rey.hooks.addAction("ajaxfilters/finished", (function(e) {
            Object.create(i).init(t("ul.products", e))
        })), {
            key: "reycore/infinite",
            cleanup_key: "reycore/infinite_cleanup",
            $grid: t("ul.products.--paginated.--infinite"),
            init: function() {
                rey.vars.adminBar || reyParams.js_params.infinite_cache && ("true" === localStorage.getItem(this.cleanup_key) && (localStorage.removeItem(this.cleanup_key), sessionStorage.removeItem(this.key)), this.run(), this.events())
            },
            run: function() {
                this.currentData = JSON.parse(sessionStorage.getItem(this.key)), null !== this.currentData && this.$grid.length && (this.currentData.url !== window.location.href ? sessionStorage.removeItem(this.key) : (this.$grid.html(this.currentData.content), t(document).trigger("rey/infinite/refresh", [this.$grid[0]]), rey.hooks.doAction("infinite/refresh", this.$grid[0])))
            },
            events: function() {
                var e = this;
                rey.hooks.addAction("product/loaded", (function(i) {
                    var r = e.$grid.html();
                    r && t.each({
                        "is-animated-entry": "",
                        "splide--ltr splide--draggable is-active": "",
                        "is-active is-visible": "",
                        "opacity: 0;": ""
                    }, (function(t, e) {
                        r = r.replaceAll(t, e)
                    }));
                    var n = {
                        url: window.location.href,
                        content: r
                    };
                    sessionStorage.setItem(e.key, JSON.stringify(n))
                })), rey.hooks.addAction("ajaxfilters/finished", (function() {
                    sessionStorage.removeItem(e.key)
                }))
            }
        }.init()
    }))
}(jQuery);
! function() {
    "use strict";
    var t = function(t) {
        var e = "is-animated-entry";
        var n, a = (n = [], void 0 === t || !1 === t ? document.querySelectorAll("." + e) : (rey.validation.isObject(t) && 0 === t.length || rey.dom.getNodeListArray(t).forEach((t => {
            t.classList.contains(e) && n.push(t)
        })), n));
        a.length && rey.frontend.inView({
            target: a,
            cb: function(t, e) {
                t.target && (t.target.classList.add("--animated-in"), t.target.style.transitionDelay = .04 * e + "s")
            },
            once: !0
        })
    };
    document.addEventListener("rey-DOMContentLoaded", (function() {
        t()
    })), rey.hooks.addAction("animate_items", (function(e) {
        t(e)
    })), rey.hooks.addAction("post/loaded", (function(e) {
        e.length && t(e)
    }))
}();
! function(e) {
    "use strict";
    var t = {
        running: !1,
        pid: !1,
        $grid: !1,
        needsPanelMarkup: !1,
        hasContent: !1,
        _panel: "#js-rey-quickviewPanel",
        isOpen: !1,
        maybeCloseOverlay: !0,
        openStyle: "curtain",
        initialDuration: 400,
        timelineDuration: 0,
        canClose: !0,
        init: function() {
            this.running || (this.setQvData(!0), this.setupPanel(), this.events(), this.running = !0)
        },
        setupPanel: function() {
            this.panel = document.getElementById("js-rey-quickviewPanel"), this.$panel = e(this.panel), this.panel ? (this.needsPanelMarkup = !1, this.$panelContainer = e(".rey-quickview-container", this.$panel), this.panelContainer = this.panel.querySelector(".rey-quickview-container"), this.timelineDuration = this.initialDuration, this.panelContainer && (this.openStyle = this.panelContainer.getAttribute("data-openstyle"), rey.vars.is_desktop || !reyParams.quickview_only && !reyParams.quickview_mobile || (this.openStyle = "slide", this.panelContainer.setAttribute("data-openstyle", this.openStyle)))) : this.needsPanelMarkup = !0
        },
        events: function() {
            var i = function(i) {
                if (i.preventDefault(), rey.vars.is_desktop || reyParams.quickview_mobile) {
                    var n = e(this);
                    t.pid = n.attr("data-id") || n.closest("li.product").attr("data-pid"), t.pid && (rey.frontend.overlay.open("site"), rey.frontend.overlay.keepOpen = !0, t.$grid = n.closest("ul.products"), t.open())
                }
            };
            e(document).on("click", ".js-rey-quickviewBtn", i), reyParams.quickview_only && (e(document).on("click", "li.product .woocommerce-loop-product__link", i), e(document).on("click", "li.product .woocommerce-loop-product__title a", i), e(document).on("click", "li.product .rey-productSlideshow a", i)), e(document).on("click", ".rey-qvNav button", (function(i) {
                i.preventDefault();
                var n = e(this).attr("data-id");
                n && (t.maybeCloseOverlay = !1, t.timelineDuration = 0, t.pid = n, t.open(!0))
            })), e(document).on("click", ".js-rey-quickviewPanel-close", (function(e) {
                e.preventDefault(), t.maybeCloseOverlay = !0, t.close()
            })), e(document).on("keydown", (function(e) {
                t.isOpen && t.canClose && 27 == e.keyCode && (t.maybeCloseOverlay = !0, t.close())
            })), e(document.body).on("added_to_cart", (function(e, i, n, a) {
                t.isOpen && (t.maybeCloseOverlay = !1, "" === reyParams.after_add_to_cart && (t.maybeCloseOverlay = !0), t.close())
            }))
        },
        setQvData: function(t) {
            if (t && (this.quickviewData = {
                    prev: "",
                    next: ""
                }), this.$grid) {
                var i = e('li.product[data-pid="' + this.pid + '"]', this.$grid),
                    n = "",
                    a = "",
                    r = i.prev('li.product:not([data-pid^="x"])');
                r.length && (n = r.attr("data-pid"));
                var o = i.next('li.product:not([data-pid^="x"])');
                o.length && (a = o.attr("data-pid")), this.quickviewData.prev = n, this.quickviewData.next = a
            }
        },
        open: function(t) {
            if (this.$panel.length && this.$panel[0].hasAttribute("data-lazy-hidden") && this.$panel[0].removeAttribute("data-lazy-hidden"), !this.pid) return this.close();
            t || rey.frontend.panels.init(this.close.bind(this)), this.setQvData(), rey.elements.body.classList.add("quickview--is-opened"), this.$panel.addClass("--is-loading"), reyParams.quickview_mobile && !rey.vars.is_desktop && (rey.elements.body.style.overflow = "hidden"), this.isOpen = !0, rey.jquery.trigger("reycore/before_quickview", document, [this.pid]), rey.ajax.request("get_quickview_product", {
                data: {
                    id: this.pid,
                    markup: this.needsPanelMarkup,
                    woo_template: document.getElementById("tmpl-variation-template") ? 1 : 0,
                    pswp: document.querySelector(".pswp") ? 1 : 0
                },
                cb: t => {
                    t.data && (this.needsPanelMarkup && t.data.markup && (e(t.data.markup).appendTo(document.body), this.setupPanel()), !e("#tmpl-variation-template").length && t.data["woo-template-scripts"] && e(t.data["woo-template-scripts"]).appendTo(document.body), !document.querySelector(".pswp") && t.data.pswp && e(t.data.pswp).appendTo(document.body), this.panelContainer.innerHTML = t.data.content, this.after_qv(this.panelContainer), rey.hooks.doAction("after_quickview", this.panelContainer, this), rey.jquery.trigger("reycore/after_quickview", document, [this.panelContainer]))
                }
            })
        },
        after_qv: function(i) {
            var n = e(i);
            if (this.panel.classList.add("--is-visible"), this.panel.classList.remove("--is-loading"), void 0 !== rey.components.pdpGallery) {
                var a = i.querySelector(".woocommerce-product-gallery");
                a && new rey.components.pdpGallery(a, {
                    directRun: !0,
                    id: "quickview-gallery",
                    onLightboxOpen: e => {
                        t.canClose = !1, rey.frontend.panels.keepOpen = !0
                    },
                    onLightboxDestroy: e => {
                        t.canClose = !0, rey.frontend.panels.keepOpen = null
                    },
                    variationForm: i.querySelector(`form.variations_form[data-product_id="${t.pid||0}"]`)
                })
            }
            e('.rey-qtySelect ~ input[name^="quantity"]').remove(), rey.hooks.doAction("refresh_general_html", n), e(".woocommerce-review-link", n).attr("href", e("h1.product_title a", n).attr("href") + "#reviews");
            var r = i.querySelector(".quantity .qty");
            r && r.dispatchEvent(new Event("change"));
            var o = {
                easing: "easeInOutQuart",
                duration: this.timelineDuration,
                complete: () => {
                    this.after_qv_effect(i), rey.jquery.trigger("reycore/after_quickview_effect", document, [n]), rey.hooks.doAction("after_quickview_effect", n[0]), this.timelineDuration = this.initialDuration
                }
            };
            if ("curtain" === this.openStyle) anime.timeline(o).add({
                targets: t._panel + " .rey-quickview-container",
                scaleX: [0, 1]
            }).add({
                targets: t._panel + " .rey-quickview-mask",
                scaleX: [1, 0],
                delay: function(e, t) {
                    return 250 * t
                }
            }).add({
                targets: t._panel + " .rey-productSummary",
                scale: [1.1, 1]
            }, "-=400");
            else if ("slide" === this.openStyle) {
                o.duration = "600", o.easing = "easeOutQuart", anime.timeline(o).add({
                    targets: t._panel + " .rey-quickview-container",
                    translateY: [150, 0],
                    scale: [.95, 1],
                    opacity: [0, 1]
                })
            }
        },
        after_qv_effect: function(i) {
            var n = e(i),
                a = t.$panel.find(".js-scrollbar");
            a.length && "undefined" != typeof SimpleScrollbar && rey.vars.is_desktop && SimpleScrollbar.initEl(a[0]), void 0 !== e.fn.wc_variation_form && e(".variations_form", n).each((function() {
                e(this).wc_variation_form()
            })), e(".rey-qvNav-prev", n).attr("data-id", t.quickviewData.prev || ""), e(".rey-qvNav-next", n).attr("data-id", t.quickviewData.next || "")
        },
        close: function() {
            rey.frontend.panels.reset(), rey.frontend.overlay.keepOpen = null, this.maybeCloseOverlay && rey.frontend.overlay.close(), rey.elements.body.classList.remove("quickview--is-opened"), reyParams.quickview_mobile && !rey.vars.is_desktop && (rey.elements.body.style.overflow = ""), this.$panel && this.$panel.length && (this.$panel.removeClass("--is-visible --is-loading"), this.cleanupPanel()), this.isOpen = !1, this.maybeCloseOverlay = !0
        },
        cleanupPanel: function() {
            this.$panelContainer.fadeOut("fast", (function() {
                e(this).attr("style", "").children().remove()
            }))
        }
    };
    document.addEventListener("rey-DOMContentLoaded", (function(e) {
        t.init()
    })), rey.hooks.addAction("elementor/element/lazy_loaded", (function() {
        t.init()
    })), rey.hooks.addAction("elementor/content/lazy_loaded", (function() {
        t.init()
    })), rey.hooks.addAction("minicart/assets_ready", (function() {
        t.init()
    })), rey.hooks.addAction("wishlist/loaded", (function() {
        t.init()
    }))
}(jQuery);
! function(t) {
    "use strict";
    var i = function(i) {
        var n = this;
        this.init = function() {
            this.$form = t(i), this.id = this.$form.attr("data-id"), this.idAttr = this.$form.attr("id"), this.$response = t(".mc4wp-response", this.$form), this.submitting = !1, this.events()
        }, this.events = function() {
            this.$form.on("submit", (function(t) {
                t.preventDefault(), n.submitting || (n.submitting = !0, n.$form.css({
                    opacity: .5,
                    "pointer-events": "none"
                }), n.$response.empty(), n.submitForm())
            }))
        }, this.submitForm = function() {
            var i = {};
            t.each(this.$form.serializeArray(), (function(t, n) {
                i[n.name] = n.value
            })), t.ajax({
                type: "POST",
                url: window.location.href,
                data: i,
                dataType: "html",
                success: function(i) {
                    n.submitting = !1, n.$form.css({
                        opacity: 1,
                        "pointer-events": "auto"
                    });
                    var s = t(i),
                        e = t('.mc4wp-form[data-id="' + n.id + '"][id="' + n.idAttr + '"] .mc4wp-response', s);
                    e.length && n.$response.html(e.html())
                }
            })
        }, this.init()
    };
    document.addEventListener("rey-DOMContentLoaded", (function(n) {
        t(".mc4wp-form").each((function() {
            new i(this)
        }))
    }))
}(jQuery);
! function(t, e) {
    "object" == typeof exports ? module.exports = e(window, document) : t.SimpleScrollbar = e(window, document)
}(this, (function(t, e) {
    var s = t.requestAnimationFrame || t.setImmediate || function(t) {
        return setTimeout(t, 0)
    };

    function i(t) {
        Object.prototype.hasOwnProperty.call(t, "data-simple-scrollbar") || Object.defineProperty(t, "data-simple-scrollbar", {
            value: new n(t)
        })
    }

    function r(i) {
        for (this.target = i, this.compStyle = t.getComputedStyle(this.target), this.direction = this.compStyle.direction, this.bar = '<div class="ss-scroll">', this.wrapper = e.createElement("div"), this.wrapper.setAttribute("class", "ss-wrapper"), this.el = e.createElement("div"), this.el.setAttribute("class", "ss-content"), "rtl" === this.direction && this.el.classList.add("rtl"), this.wrapper.appendChild(this.el); this.target.firstChild;) this.el.appendChild(this.target.firstChild);
        this.target.appendChild(this.wrapper), this.target.insertAdjacentHTML("beforeend", this.bar), this.bar = this.target.lastChild,
            function(t, i) {
                var r;

                function a(t) {
                    var e = t.pageY - r;
                    r = t.pageY, s((function() {
                        i.el.scrollTop += e / i.scrollRatio
                    }))
                }

                function n() {
                    t.classList.remove("ss-grabbed"), e.body.classList.remove("ss-grabbed"), e.removeEventListener("mousemove", a), e.removeEventListener("mouseup", n)
                }
                t.addEventListener("mousedown", (function(s) {
                    return r = s.pageY, t.classList.add("ss-grabbed"), e.body.classList.add("ss-grabbed"), e.addEventListener("mousemove", a), e.addEventListener("mouseup", n), !1
                }))
            }(this.bar, this), this.moveBar(), t.addEventListener("resize", this.moveBar.bind(this)), this.el.addEventListener("scroll", this.moveBar.bind(this)), this.el.addEventListener("mouseenter", this.moveBar.bind(this)), this.target.classList.add("ss-container"), "0px" === this.compStyle.height && "0px" !== this.compStyle["max-height"] && (i.style.height = this.compStyle["max-height"])
    }

    function a() {
        for (var t = e.querySelectorAll("*[data-ss-container]"), s = 0; s < t.length; s++) i(t[s])
    }
    r.prototype = {
        moveBar: function(t) {
            var e = this.el.scrollHeight,
                i = this.el.clientHeight,
                r = this;
            this.scrollRatio = i / e;
            r.direction, r.target.clientWidth, r.bar.clientWidth;
            s((function() {
                r.scrollRatio >= 1 ? (r.wrapper.classList.add("ss-hidden-bar"), r.bar.classList.add("ss-hidden")) : (r.wrapper.classList.remove("ss-hidden-bar"), r.bar.classList.remove("ss-hidden"), r.bar.style.cssText = "height:" + Math.max(100 * r.scrollRatio, 10) + "%; top:" + r.el.scrollTop / e * 100 + "%;")
            }))
        }
    }, e.addEventListener("DOMContentLoaded", a), r.initEl = i, r.initAll = a;
    var n = r;
    return n
}));
! function(e) {
    "use strict";
    document.addEventListener("rey-DOMContentLoaded", (function(t) {
        var o;
        o = function(t) {
            this.forms = [{
                type: "login",
                formScope: "form.js-rey-woocommerce-form-login",
                replace: ".woocommerce-MyAccount-navigation-wrapper"
            }, {
                type: "forgot",
                formScope: "form.js-rey-woocommerce-form-forgot",
                replace: ".rey-pageContent > .woocommerce"
            }, {
                type: "register",
                formScope: "form.js-rey-woocommerce-form-register",
                replace: ".woocommerce-MyAccount-navigation-wrapper"
            }], this.$notice = [], this.init = function() {
                var o = this;
                this.$scope = e(t), e.each(this.forms, (function(e, t) {
                    o.makeForm(t)
                })), this.events()
            }, this.events = function() {
                var t = this;
                e(".rey-accountForms-links .btn", this.$scope).on("click", (function(o) {
                    var r = e(this).attr("data-location") || "";
                    r && (o.preventDefault(), t.switchForm(r))
                })), e(".rey-accountPanel").on("click", "a.showlogin", (function(e) {
                    e.preventDefault(), t.switchForm("rey-loginForm")
                })), rey.hooks.addAction("account_panel/onOpen", (e => {
                    e.panel && reyParams.core.js_params.refresh_forms_nonces && rey.ajax.request("account_forms_gn", {
                        options: {
                            method: "GET"
                        },
                        cb: function(t) {
                            t && "object" == typeof t.data && Object.keys(t.data).forEach((o => {
                                var r = e.panel.querySelector(`input[name="${o}"]`);
                                r && (r.value = t.data[o])
                            }))
                        }
                    })
                }))
            }, this.getFormData = function(t) {
                var o = {};
                return e.map(t, (function(e, t) {
                    o[e.name] = e.value
                })), o
            }, this.makeForm = function(t) {
                var o = this,
                    r = e(t.formScope, this.$scope);
                this.$scope.is("[data-no-ajax]") || (this.$notice[t.type] = e(".rey-accountForms-notice", r), r.on("submit", (function(a) {
                    a.preventDefault(), o.$scope.addClass("--loading"), o.noticeHandlerRemove(t.type);
                    var n = o.getFormData(r.serializeArray()) || {};
                    "login" === t.type ? n.login = e('button[name="login"]', r).val() : "register" === t.type && (n.register = e('button[name="register"]', r).val()), rey.ajax.request("account_forms", {
                        params: {
                            cache: !1
                        },
                        data: {
                            action_type: t.type
                        },
                        formData: n,
                        cb: function(r) {
                            if (r)
                                if (o.$scope.removeClass("--loading"), !r || r.success) {
                                    if (void 0 !== r.data)
                                        if (r.data.notices) o.noticeHandlerAdd(r.data.notices, t.type);
                                        else {
                                            if ("login" === t.type) e(document).trigger("reycore/woocommerce/after_login", [r]), e("body").addClass("logged-in");
                                            else if ("register" === t.type) e(document).trigger("reycore/woocommerce/after_register", [r]);
                                            else if ("forgot" === t.type && !r.data.notices) return void(r.data.html ? (e(".rey-accountForms .woocommerce-form-forgot-formData").remove(), o.noticeHandlerAdd(r.data.html, t.type)) : o.switchForm("rey-loginForm"));
                                            var a = o.$scope.attr("data-redirect-type") || "load_menu",
                                                n = o.$scope.attr("data-redirect-url");
                                            if ("refresh" === a) n || window.location.reload();
                                            else if ("load_menu" === a && "" != r.data.html) {
                                                e(".rey-accountForms").wrap('<div class="rey-accountForms-response --' + t.type + '"></div>').replaceWith(e(r.data.html));
                                                var c = e(".rey-accountForms-response .rey-accountForms-notice.--vanish");
                                                c.length && setTimeout((function() {
                                                    c.fadeOut((function() {
                                                        e(this).remove()
                                                    }))
                                                }), 5e3)
                                            } else window.location.href = n
                                        }
                                } else r.data && o.noticeHandlerAdd(r.data, t.type)
                        }
                    })
                })))
            }, this.noticeHandlerAdd = function(e, t) {
                this.$notice[t] && this.$notice[t].length && this.$notice[t].html(e).addClass("--filled")
            }, this.noticeHandlerRemove = function(e) {
                this.$notice[e] && this.$notice[e].length && this.$notice[e].html("").removeClass("--filled")
            }, this.switchForm = function(t) {
                this.$scope.addClass("--loading"), rey.hooks.doAction("account_forms/switch", t, this), setTimeout((() => {
                    this.$scope.removeClass("--loading"), this.$scope.find(".--active").removeClass("--active"), e("." + t, this.$scope).addClass("--active")
                }), 1e3)
            }, this.loadStrengthMeter = function() {
                var e, t;
                (t = document.createElement("script")).src = reyParams.core.pass_strength_src, t.type = "text/javascript", t.async = !0, (e = document.getElementsByTagName("script")[0]) && e.parentNode.insertBefore(t, e)
            }, this.init()
        }, e(".rey-accountForms").each((function(e, t) {
            new o(t)
        }))
    }))
}(jQuery);
! function() {
    "use strict";
    var e = function(e) {
        this.data = !1, this.isotopeGrid = !1, this.isotopeLoaded = !1, this.tabCats = [], this.loadedTabs = [], this.elements = {}, this.options = Object.assign({
            startActive: !1,
            useLocalStorage: !0
        }, e || {}), this.init = function() {
            "IntersectionObserver" in window && (this.elements.wrapper = document.getElementById("rey-demoPanel-wrapper"), this.elements.wrapper && (this.itemsTemplate = rey.template("rey-demos-template"), this.elements.panelWrapper = this.elements.wrapper.querySelector(".rey-demoPanel-panelWrapper"), this.elements.panel = this.elements.wrapper.querySelector(".rey-demoPanel"), this.elements.overlay = this.elements.wrapper.querySelector(".rey-demoPanel-overlay"), this.elements.search = this.elements.wrapper.querySelector(".js-demoPanel-search"), this.elements.tabLinksWrapper = this.elements.wrapper.querySelector(".rey-demoPanel-tabs"), this.elements.tabLinks = this.elements.tabLinksWrapper.querySelectorAll("a"), this.elements.tabs = this.elements.wrapper.querySelectorAll(".rey-demoPanel-contentTab"), this.elements.tabs.length && (this.getData(), this.events(), this.options.startActive && (this.activate(), this.open()))))
        }, this.initPanel = function() {}, this.events = function() {
            var e = this.elements.wrapper.querySelector(".js-rey-moreDemos");
            e && e.addEventListener("click", (e => {
                e.preventDefault(), this.open()
            })), document.querySelectorAll('.menu-item > a[href="#open-demo-bar"]').forEach((e => {
                e.addEventListener("click", (e => {
                    e.preventDefault(), this.open()
                }))
            })), this.elements.wrapper.querySelectorAll(".demoPanel-sizeControls").forEach((e => {
                e.addEventListener("click", (e => {
                    e.preventDefault();
                    var t = parseInt(e.currentTarget.getAttribute("data-sizing")),
                        s = parseInt(this.elements.panel.getAttribute("data-size"));
                    this.elements.panel.setAttribute("data-size", Math.min(Math.max(s + t, 1), 3))
                }))
            })), this.elements.wrapper.querySelectorAll(".rey-demoPanel-close, .rey-demoPanel-overlay").forEach((e => {
                e.addEventListener("click", (e => {
                    e.preventDefault(), this.close()
                }))
            })), this.elements.wrapper.querySelectorAll(".rey-demoPanel-remove").forEach((e => {
                e.addEventListener("click", (e => {
                    e.preventDefault(), this.deactivate()
                }))
            })), this.elements.tabLinks.forEach((e => {
                e.addEventListener("click", (e => {
                    e.preventDefault();
                    var t = this.elements.wrapper.querySelector(`.rey-demoPanel-contentTab[data-tab="${e.currentTarget.getAttribute("data-tab")}"]`);
                    t && (this.elements.tabLinks.forEach((e => {
                        e.classList.remove("--active")
                    })), this.elements.tabs.forEach((e => {
                        e.classList.remove("--active")
                    })), e.currentTarget.classList.add("--active"), t.classList.add("--active"), this.populateTab(t))
                }))
            })), document.addEventListener("keyup", (e => {
                27 == e.keyCode && this.isOpen() && this.close()
            })), rey.vars.is_desktop && this.elements.panelWrapper.querySelectorAll("[data-rey-demos-tooltip]").forEach((e => {
                var t;
                e.addEventListener("mouseenter", (s => {
                    t || ((t = document.createElement("div")).classList.add("rey-demos-tooltip"), t.textContent = e.getAttribute("data-rey-demos-tooltip") || "", rey.elements.body.append(t))
                })), e.addEventListener("mouseleave", (e => {
                    t && t.remove(), t = null
                }))
            })), this.elements.wrapper.querySelector(".js-demoPanel-handler").addEventListener("click", (e => {
                var t = parseInt(this.elements.panel.getAttribute("data-size")),
                    s = 3 === t ? t - 1 : t + 1;
                this.elements.panel.setAttribute("data-size", s)
            })), this.elements.search && this.elements.search.querySelector('input[type="search"]').addEventListener("input", rey.util.debounce((e => {
                var t = new RegExp(e.target.value, "gi");
                this.isotopeGrid && this.isotopeGrid.arrange({
                    filter: (e, s) => !t || s.getAttribute("data-keywords").match(t)
                })
            }), 200))
        }, this.isOpen = function() {
            return this.elements.wrapper.classList.contains("--active")
        }, this.activate = function() {
            this.elements.wrapper.classList.remove("--loading")
        }, this.deactivate = function() {
            this.elements.wrapper.remove(), document.querySelectorAll(".rey-demos-tooltip").forEach((e => {
                e.remove()
            }))
        }, this.open = function() {
            var e = this.elements.tabLinksWrapper.querySelector('a[data-tab="demos"]');
            e && e.click(), rey.elements.body.classList.add("--active-demo-panel"), this.elements.wrapper.classList.add("--active")
        }, this.close = function() {
            rey.elements.body.classList.remove("--active-demo-panel"), this.elements.wrapper.classList.remove("--active")
        }, this.getData = function() {
            if (this.options.useLocalStorage && rey.util.ls.get("rey_demos_bar")) return this.data = rey.util.ls.get("rey_demos_bar"), void this.activate();
            rey.ajax.request("get_demos_data", {
                cb: e => {
                    e && e.success && void 0 !== e.data && (this.options.useLocalStorage && rey.util.ls.set("rey_demos_bar", e.data, 864e5), this.data = e.data, this.activate())
                }
            })
        }, this.populateTab = function(e) {
            var t = e.getAttribute("data-tab");
            if (void 0 !== this.data[t]) {
                if (-1 === this.loadedTabs.indexOf(t)) {
                    var s = this.itemsTemplate({
                        total: parseInt(this.data[t].total),
                        items: this.data[t].items
                    });
                    e.append(rey.dom.createElementFromHTML(s)), this.loadedTabs.push(t)
                }
                this.checkSupports(t, e), this.loadImages(e), this.startIsotope(e)
            }
        }, this.checkSupports = function(e, t) {
            this.elements.search && this.elements.search.classList.remove("--active");
            var s = this.elements.wrapper.querySelector('.rey-demoPanel-tabs a[data-tab="' + e + '"]');
            if (s) {
                var a = s.getAttribute("data-supports") || "";
                (a = a.replace(/\s/g, "").split(",")) && (-1 !== a.indexOf("search") && this.elements.search && this.elements.search.classList.add("--active"), -1 !== a.indexOf("categories") && this.createCategories(e, t))
            }
        }, this.createCategories = function(e, t) {
            var s = [];
            if (void 0 === this.tabCats[e]) {
                t.querySelectorAll('.rey-demoPanel-item:not([data-categories=""])').forEach((e => {
                    e.getAttribute("data-categories").split(",").forEach((e => {
                        -1 === s.indexOf(e) && s.push(e)
                    }))
                }));
                var a = rey.template("rey-demos-categories")(s);
                t.prepend(rey.dom.createElementFromHTML(a)), this.tabCats[e] = !0, t.querySelectorAll(".rey-demoPanel-ctgItem").forEach((e => {
                    e.addEventListener("click", (e => {
                        var t = e.currentTarget.getAttribute("data-category"),
                            s = new RegExp(t, "gi"),
                            a = this.elements.search && this.elements.search.querySelector('input[type="search"]');
                        a && (a.value = ""), rey.dom.getSiblings(e.currentTarget, ".rey-demoPanel-ctgItem").forEach((e => {
                            e.classList.remove("--active")
                        })), e.currentTarget.classList.add("--active"), this.isotopeGrid && this.isotopeGrid.arrange({
                            filter: (e, t) => t.getAttribute("data-categories").match(s)
                        })
                    }))
                }))
            }
        }, this.loadIsotope = function() {
            this.isotopeLoaded || new Promise(((e, t) => {
                var s = document.createElement("script");
                const a = "https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js";
                s.src = a, s.id = "rey-demos-isotope-js", s.async = !1, s.onload = () => {
                    e(a), this.isotopeLoaded = !0
                }, s.onerror = () => {
                    t(a)
                }, document.body.appendChild(s)
            }))
        }, this.startIsotope = function(e) {
            if (this.loadIsotope(), "undefined" != typeof Isotope) {
                var t = e || this.elements.tabs.filter((e => e.matches(".--active")));
                if (t) {
                    var s = t.querySelector(".rey-demoPanel-contentItems");
                    s && (this.isotopeGrid = new Isotope(s, {
                        itemSelector: ".rey-demoPanel-item",
                        percentPosition: !0,
                        layoutMode: "masonry"
                    }))
                }
            } else setTimeout((() => {
                this.startIsotope(e)
            }), 350)
        }, this.loadImages = function(e) {
            var t = e || this.elements.tabs.filter((e => e.matches(".--active")));
            if (t) {
                var s = t.querySelectorAll(".rey-demoPanel-item:not(.--visible)"),
                    a = this.elements.wrapper.querySelector(".rey-demoPanel-content");
                if (a && s.length) {
                    var r = new IntersectionObserver((function(e) {
                        e.forEach((e => {
                            if (e.intersectionRatio > 0) {
                                r.unobserve(e.target);
                                var t = e.target.querySelector("img");
                                t && (t.setAttribute("src", t.getAttribute("data-src")), t.onload = () => {
                                    e.target.classList.add("--visible"), i.isotopeGrid && i.isotopeGrid.layout()
                                })
                            }
                        }))
                    }), {
                        root: a,
                        rootMargin: "50px 0px",
                        threshold: .01
                    });
                    s.forEach((e => {
                        r.observe(e)
                    }));
                    var i = this
                }
            }
        }, this.init()
    };
    document.addEventListener("rey-DOMContentLoaded", (function(t) {
        rey.hooks.addAction("first_interaction", (() => {
            setTimeout((() => {
                new e
            }), 2e3)
        }))
    }))
}();
! function(t) {
    "use strict";
    var e = function(e) {
        var s = this;
        this.class = "is-opened", this._request = !1, this.resultsShowing = !1, this.init = function() {
            if (reyParams.ajax_search && (this.$searchPanel = t(e), this.$searchPanel.length && !this.$searchPanel.closest(".--prevent-results-overlay").length && reyParams.ajax_search && (this.$postType = t('[name="post_type"]', this.$searchPanel), this.$postType.length && (this.$searchField = t("input[type='search']", this.$searchPanel), this.panel_HTML = rey.template("reySearchPanel"), this.panel_HTML)))) return this.$results = t(".js-rey-searchResults", this.$searchPanel), this.params = reyParams, this.$catList = t(".rey-searchForm-catList", this.$searchPanel), this.$catList.length && this.$catList.siblings("span").text(t("option:selected", this.$catList).text()), this.events(), this
        }, this.events = function() {
            var e = function(t) {
                s._request && s._request instanceof XMLHttpRequest && s._request.abort(), s.runSearchRequest(t)
            };
            this.$searchField.on("input", rey.util.debounce((function(t) {
                var a = t.target.value.trim();
                if ("" !== a || !s.resultsShowing || t.originalEvent.inputType)
                    if ("" !== a && a.length >= s.params.js_params.ajax_search_letter_count) e(a);
                    else {
                        if ("" === a) return;
                        s.printSearchResults()
                    }
                else s.removeResults()
            }), 1e3)), this.$searchField.on("focus", (function(t) {
                var a = t.target.value.trim();
                a && !s.resultsShowing && e(a)
            })), this.$searchField.closest("form").on("submit", (function(t) {
                reyParams.js_params.ajax_search_allow_empty || s.$searchField.val().trim() || t.preventDefault()
            })), this.$postType.on("change", (function(e) {
                var a = t(this);
                s.$searchField.trigger("input"), t(".rey-searchForm-postType > span", s.$searchPanel).text(t("option:selected", this).text()), s.$catList.length && ("product" === a.val() ? (s.$catList.parent().show(), s.$catList.removeAttr("disabled")) : (s.$catList.parent().hide(), s.$catList.attr("disabled", "disabled")))
            })), this.$catList.on("change", (function(e) {
                s.$searchField.trigger("input"), t(this).siblings("span").text(t("option:selected", this).text())
            })), t(".rey-searchPanel__suggestions button").on("click", (function(e) {
                e.preventDefault(), s.$searchField.val(t(this).text()), s.$searchField.trigger("input")
            })), t(document.body).on("click", (function(e) {
                s.resultsShowing && (e.target.closest(".rey-searchAjax") || (s.removeResults(), t(document).trigger("reycore/ajax_search/close")))
            }))
        }, this.runSearchRequest = function(e) {
            if (this.$searchPanel.addClass("--loading"), this.removeResults(), void 0 !== this.params.search_texts) {
                var a = {
                    s: e,
                    post_type: s.$postType.val()
                };
                if (this.$catList.length) this.$catList.val() && (a.product_cat = this.$catList.val());
                this.$searchField.closest("form").find("input, select").each((function(e, s) {
                    var i = t(s),
                        r = i.val().trim();
                    "" !== r && (a[i.attr("name")] = r)
                })), this.$searchField.closest("form").find("input, select").each((function(e, s) {
                    var i = t(s),
                        r = i.val().trim();
                    "" !== r && (a[i.attr("name")] = r)
                })), this._request = rey.ajax.request("ajax_search", {
                    data: a,
                    params: {
                        cache: !1
                    },
                    cb: function(t) {
                        var e = [];
                        t && t.success && t.data.total_count && 0 !== parseInt(t.data.total_count) && (e = t.data.items), s.$searchPanel.addClass("--has-results"), s.printSearchResults(e), s._request = !1
                    }
                })
            }
        }, this.printSearchResults = function(t) {
            var e = "";
            rey.validation.isArray(t) ? (e = t.length ? this.panel_HTML({
                items: t,
                only_title: this.params.ajax_search_only_title
            }) : "<div class='rey-searchResults-message'>" + this.params.search_texts.NO_RESULTS + "</div>", this.$searchPanel.removeClass("--loading")) : this.removeResults(), this.showResults(e)
        }, this.showResults = function(t) {
            this.$results.html(t).addClass("--visible"), this.resultsShowing = !0
        }, this.removeResults = function() {
            this.$results.empty().removeClass("--visible"), this.$searchPanel.removeClass("--has-results"), this.resultsShowing = !1, t(document).trigger("reycore/ajax_search/remove_results")
        }, this.init()
    };
    document.addEventListener("rey-DOMContentLoaded", (function(s) {
        t(".js-rey-ajaxSearch").each((function() {
            new e(this)
        }))
    }))
}(jQuery);