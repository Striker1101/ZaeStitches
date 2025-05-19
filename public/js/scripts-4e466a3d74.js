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
        e(".rey-classic-reviewOrder-img").each((function(t, c) {
            ! function(t) {
                var c = e(t);
                c.next(".rey-classic-reviewOrder-content").length || c.nextAll().wrapAll("<div class='rey-classic-reviewOrder-content' />")
            }(c)
        }))
    };
    e(document.body).on("updated_wc_div updated_shipping_method applied_coupon removed_coupon country_to_state_changed applied_coupon_in_checkout update_checkout updated_checkout checkout_error", (function() {
        t()
    })), document.addEventListener("rey-DOMContentLoaded", (function(e) {
        t()
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
    var t = {
        steps: ["info", "shipping", "payment"],
        currentStep: "info",
        sameBilling: !0,
        sameShipping: !0,
        vfields: "input, textarea, select",
        vfieldsIgnore: ".invoice-only, .skip-field",
        init: function(t) {
            if ("undefined" == typeof wc_checkout_params && !rey.vars.elementor_edit_mode) return console.error("Page is not set as a Checkout page. Access WooCommerce Settings > Advanced, and make sure to set the Checkout page to this page."), !1;
            if (void 0 === e.fn.block) return !1;
            if (this.page_selector = ".rey-checkoutPage.--layout-custom", this.$page = e(this.page_selector, t), this.$page.length) {
                this.$form = e(".rey-checkoutPage-form", this.$page), this.$review = e(".rey-checkoutPage-review", this.$page), this.billingFirst = this.$page.hasClass("--bfirst"), this.shippingDisabled = !e('.__step[data-step="shipping"]', this.$page).length, this.supportsSteps = "yes" === this.$page.attr("data-steps"), this.shippingDisabled && (this.steps = ["info", "payment"]), this.params = JSON.parse(this.$page.attr("data-bto-custom") || "{}");
                var i = 0;
                if (window.location.hash && this.supportsSteps) {
                    var o = window.location.hash.replace("#", ""),
                        s = this.steps.indexOf(o); - 1 !== s && 0 !== s && this.validate_fields("info") && (i = s)
                }
                this.go_to_step(i, !0, !0), this.update_crumbs(), this.activateS2(), this.update_form_reviews(), this.events(), this.sticky_review(), this.make_tooltips()
            }
        },
        events: function() {
            var t = this;
            e(document).on("click", this.page_selector + ' button[name="apply_coupon"]', (function(i) {
                i.preventDefault(), t.apply_coupon(e(this))
            })), e(document).on("click", this.page_selector + " .__step .__step-fwd", (e => {
                e.preventDefault(), "info" === e.currentTarget.closest(".__step").getAttribute("data-step") ? this.validate_info_and_process() : this.go_to_next_step()
            })), e(document).on("click", this.page_selector + ' .__step .__step-back[href^="#"]', (function(e) {
                e.preventDefault(), t.go_to_prev_step()
            })), e(document).on("click", this.page_selector + " .rey-checkoutPage-review-toggle", (function(t) {
                t.preventDefault(), e(this).parent().toggleClass("--mob-active")
            })), e(document).on("click", this.page_selector + " .rey-checkoutPage-crumbs a", (function(i) {
                var o = e(this).attr("data-step");
                "cart" !== o && (i.preventDefault(), t.go_to_step(t.steps.indexOf(o)))
            })), e(document).on("click", this.page_selector + " .rey-formReview-action a", (function(i) {
                i.preventDefault();
                var o = e(this).attr("data-target");
                "billing" !== o ? t.go_to_step(t.steps.indexOf(o)) : e(".rey-checkoutDetails-billing").slideToggle()
            })), e(document).on("change", this.page_selector + " .rey-checkoutChoose-item input[type='radio']", (function(i) {
                var o = "different" === e(this).val(),
                    s = e(this).closest(".rey-checkoutChoose"),
                    a = e(".woocommerce-billing-fields__field-wrapper", s);
                s.toggleClass("--active", o), t.sameBilling = !o, e('input[name="ship_to_different_address"]').val(o ? 1 : 0), o ? (e('input:not(input[name="ship_to_different_address"]):not(#shipping_country), textarea, select', a).val(""), t.clone_targeted_shipping_fields("#shipping_country")) : t.clone_shipping_fields()
            })), e(document).on("change", this.page_selector + " .woocommerce-shipping-methods input[type='radio']", (function(e) {
                t.$page.addClass("--loading")
            })), e(document).on("change", this.page_selector + " input[name='ship_to_different_address']", (function(i) {
                var o = e(this),
                    s = e(".woocommerce-shipping-fields__field-wrapper", t.$page);
                o.prop("checked") ? (t.sameShipping = !1, s.slideDown(), e('input:not(input[name="ship_to_different_address"]):not(#shipping_country), textarea, select:not(#shipping_country)', s).val(""), e("#shipping_state", s).trigger("change")) : (t.sameShipping = !0, s.slideUp(250, (function() {
                    t.clone_billing_fields()
                })))
            })), e(document.body).on("reycore/woocommerce/checkout/changed_step", (function(i) {
                t.update_crumbs(), t.update_form_reviews(), t.clone_shipping_fields(), t.clone_billing_fields(), t.animate_top(), t.make_tooltips(), t.$review.removeClass("--mob-active"), e(".woocommerce-error, .woocommerce-message, .woocommerce-info", t.$page).remove()
            })), e(document.body).on("updated_checkout", (function(e, i) {
                t.update_form_reviews(i), t.$page.removeClass("--loading")
            })), e(document).on("change", ".__step[data-step='info'] .woocommerce-shipping-fields input, .__step[data-step='info'] .woocommerce-shipping-fields textarea, .__step[data-step='info'] .woocommerce-shipping-fields select", (function(i) {
                void 0 !== wc_checkout_params.prevent_cloning_shipping_fields && wc_checkout_params.prevent_cloning_shipping_fields || wc_checkout_params.exclude_cloning_fields && e(this).is(wc_checkout_params.exclude_cloning_fields) || t.clone_shipping_fields(i.target)
            })), e(document).on("change", ".__step[data-step='info'] .woocommerce-billing-fields input, .__step[data-step='info'] .woocommerce-billing-fields textarea, .__step[data-step='info'] .woocommerce-billing-fields select", (function(e) {
                t.clone_billing_fields(e.target)
            })), e(document.body).on("checkout_error", (function(e) {
                t.refresh_events()
            })), e(window).bind("popstate", (function(e) {
                if (window.location.hash && t.supportsSteps) {
                    var i = window.location.hash.replace("#", ""),
                        o = t.steps.indexOf(i); - 1 !== o && 0 !== o && t.validate_fields("info") && t.go_to_step(t.steps.indexOf(i), !0)
                }
            }))
        },
        refresh_events: function() {
            e(".woocommerce-error a[data-reymodal]").on("click", (function(t) {
                var i = JSON.parse(e(this).attr("data-reymodal") || "{}");
                (!e.isEmptyObject(i) && "undefined" !== i.content && i.content && (i.content = e(i.content)), "undefined" != typeof ReyModal) && new ReyModal({
                    linkAttributeName: !1,
                    catchFocus: !1,
                    closeOnEsc: !0,
                    backscroll: !0
                }).init().open(i)
            }))
        },
        animate_top: function() {
            e("html, body").animate({
                scrollTop: this.$page.offset().top - rey.vars.adminBar - 25
            }, "fast", (function(e) {
                return --e * e * e + 1
            }))
        },
        update_crumbs: function() {
            e(" .rey-checkoutPage-crumbs li").removeClass("--active"), e(" .rey-checkoutPage-crumbs a[data-step=" + this.currentStep + "]").parent().addClass("--active")
        },
        update_form_reviews: function(t) {
            e(".rey-formReview-block").each((function(t, i) {
                var o = e(i),
                    s = e(".rey-formReview-content", o),
                    a = s.attr("data-fill");
                if ("email" === a) {
                    var n = e("#billing_email");
                    n.length && s.text(n.val())
                } else if ("method" === a) {
                    var r = e("#shipping_method input[type='radio']:checked");
                    if (r.length || (r = e("#shipping_method input[type='hidden']")), r.length) {
                        var c = r.next("label"),
                            l = e(".__label", c);
                        l.length && (c = l), s.text(c.text())
                    }
                }
            }))
        },
        validate_info_and_process: function() {
            if (this.validate_fields("info")) {
                var e = document.querySelector(`${this.page_selector} .__step[data-step='info'] .woocommerce-shipping-fields, ${this.page_selector} .__step[data-step='info'] .woocommerce-billing-fields`);
                if (e) {
                    var t = {
                        shipping: e.classList.contains("woocommerce-shipping-fields"),
                        fields: {}
                    };
                    e.querySelectorAll(".validate-required input, .validate-required textarea, .validate-required select").forEach((e => {
                        t.fields[e.getAttribute("name")] = e.value
                    })), rey.ajax.request("custom_layout_process_data", {
                        data: t,
                        cb: t => {
                            if (t && t.success)
                                if (t.data && t.data.error) {
                                    if (t.data.error.message && !t.data.error.field) return console.error(t.data.error.message);
                                    if (t.data.error.field) {
                                        var i = e.querySelector(`#${t.data.error.field}_field`);
                                        i && i.classList.add("woocommerce-invalid", "woocommerce-invalid-required-field");
                                        var o = i.querySelector(".__invalid-error");
                                        o && o.remove();
                                        var s = document.createElement("span");
                                        s.classList.add("__invalid-error"), s.textContent = t.data.error.message, i.append(s)
                                    }
                                } else this.go_to_next_step();
                            else console.error("Something went wrong.")
                        }
                    })
                }
            }
        },
        go_to_next_step: function() {
            this.go_to_step(this.steps.indexOf(this.currentStep) + 1)
        },
        go_to_prev_step: function() {
            this.go_to_step(this.steps.indexOf(this.currentStep) - 1, !0, !0)
        },
        go_to_step: function(t, i, o) {
            if (this.supportsSteps) {
                if (!o) {
                    var s = !0;
                    if (this.validate_fields("info") || (s = !1), s && this.billingFirst && !this.sameShipping && (this.validate_fields("shipping") || (s = !1)), !s) return
                }
                var a = e(".__step[data-step]").eq(t),
                    n = this;
                if (this.currentStep = a.attr("data-step"), a.length) {
                    this.$page.attr("data-active-step", this.currentStep), this.$page.addClass("--loading");
                    var r = function() {
                        0 === t && e("#billing_email").trigger("focus"), n.$page.removeClass("--loading"), a.show(), a.siblings(".__step").hide()
                    };
                    i ? r() : setTimeout(r, 1200), window.location.hash = this.currentStep, e(document.body).trigger("reycore/woocommerce/checkout/changed_step", [a])
                }
            }
        },
        validate_fields: function(t) {
            var i = {},
                o = ".__step[data-step='" + t + "'] .validate-required",
                s = document.querySelectorAll(o),
                a = e(o);
            e(".__invalid-error", this.$page).remove();
            for (var n = 0; n < a.length; n++) {
                var r = a[n],
                    c = e(this.vfields, r);
                if (c.length && 0 === c.closest(this.vfieldsIgnore).length && "none" !== getComputedStyle(r).display) {
                    var l = c.val();
                    if ("" == l || "email" === c.attr("type") && !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/.test(l) || "tel" === c.attr("type") && !/^[\+\d\-\(\)\s]+$/.test(l)) {
                        var p = !0;
                        e("input#createaccount").prop("checked") || c.closest(".create-account").length && (p = !1), p && (i[r.getAttribute("id")] = r)
                    }
                    if (a.length - 1 === n) return i = rey.hooks.applyFilters("checkout/validate_fields_issues", i, s), Object.keys(i).forEach(((t, o) => {
                        var s = e(i[t]);
                        (s.addClass("woocommerce-invalid-required-field woocommerce-invalid"), e('<span class="__invalid-error">' + (i[t].getAttribute("data-error-text") || reyParams.checkout.error_text) + "</span>").insertAfter(e(".woocommerce-input-wrapper", i[t])), 0 === o) && (s.offset().top && window.scrollTo({
                            top: s.offset().top - 20,
                            behavior: "smooth"
                        }))
                    })), !Object.keys(i).length
                }
            }
        },
        clone_billing_fields: function(t) {
            if (!this.shippingDisabled && this.billingFirst && this.sameShipping) {
                var i = e(".woocommerce-shipping-fields"),
                    o = e(".woocommerce-billing-fields");
                e(t || this.vfields, o).each((function(t, o) {
                    var s = e(o),
                        a = s.val(),
                        n = s.attr("name");
                    if (n && void 0 !== n) {
                        var r = n.replace("billing_", "shipping_"),
                            c = e('[name="' + r + '"]', i);
                        if (c.length) c.val(a);
                        else {
                            var l = e('[name="' + n + '"]', i);
                            l.length && l.val(a)
                        }
                    }
                }))
            }
        },
        clone_shipping_fields: function(e) {
            this.sameBilling && this.clone_targeted_shipping_fields(e || this.vfields)
        },
        clone_targeted_shipping_fields: function(t) {
            if (!this.shippingDisabled && !this.billingFirst) {
                var i = e(".woocommerce-shipping-fields"),
                    o = e(".woocommerce-billing-fields");
                e(t, i).each((function(t, i) {
                    var s = e(i),
                        a = s.val(),
                        n = s.attr("name").replace("shipping_", "billing_"),
                        r = e('[name="' + n + '"]', o);
                    r.length && r.val(a)
                }))
            }
        },
        apply_coupon: function(t) {
            this.$review.is(".--loading") || this.$review.parents(".--loading").length || this.$review.addClass("--loading");
            var i = this,
                o = t.siblings("input[name='coupon_code']"),
                s = o.val(),
                a = {
                    security: wc_checkout_params.apply_coupon_nonce,
                    coupon_code: s
                };
            e.ajax({
                type: "POST",
                url: wc_checkout_params.wc_ajax_url.toString().replace("%%endpoint%%", "apply_coupon"),
                data: a,
                dataType: "html",
                success: function(o) {
                    e(".woocommerce-error, .woocommerce-message, .woocommerce-info", this.$page).remove(), e(".__notice", this.$page).remove();
                    var s = e('<div class="__notice --clean-wc-notice">' + o + "</div>").insertAfter(t.parent());
                    e(document.body).trigger("applied_coupon_in_checkout", [a.coupon_code]), e(document.body).trigger("update_checkout", {
                        update_shipping_method: !1
                    }), e(".woocommerce-message", s).length && i.$review.addClass("--mob-active")
                },
                complete: function() {
                    i.$review.removeClass("--loading"), o.val("")
                }
            })
        },
        sticky_review: function() {
            rey.vars.is_desktop && this.$page.is(".--sticky-review") && rey.elements.siteWrapper && rey.elements.siteWrapper.style.setProperty("--site-wrapper-overflow", "visible")
        },
        activateS2: function() {
            void 0 !== e.fn.selectWoo && e("select:not(.select2-hidden-accessible)", this.$form).each((function() {
                if (!this.classList.contains("--no-select2") && !this.closest(".--no-select2")) {
                    var t = {
                        placeholder: e(this).attr("data-placeholder") || e(this).attr("placeholder") || "",
                        width: "100%",
                        containerCssClass: "select2-reyStyles",
                        dropdownCssClass: "select2-reyStyles"
                    };
                    e(this).on("select2:select", (function() {
                        e(this).focus()
                    })).selectWoo(t)
                }
            }))
        },
        make_tooltips: function() {
            e(".woocommerce-shipping-fields .woocommerce-input-wrapper span.description, .woocommerce-billing-fields .woocommerce-input-wrapper span.description").each((function(t, i) {
                var o = e(i),
                    s = o.html();
                if (rey) {
                    var a = rey.frontend.svgIcon.get("help");
                    e('<span class="rey-inputTip" data-rey-tooltip="' + s + '" data-tooltip-size="180">' + a + "</span>").insertAfter(o)
                }
                o.remove()
            }))
        }
    };
    rey.hooks.addAction("elementor/init", (function(e) {
        e.registerElement({
            name: "reycore-wc-checkout.default",
            cb: function(e) {
                t.init(e)
            }
        })
    }))
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
! function(t) {
    var e = {};

    function o(i) {
        if (e[i]) return e[i].exports;
        var a = e[i] = {
            i: i,
            l: !1,
            exports: {}
        };
        return t[i].call(a.exports, a, a.exports, o), a.l = !0, a.exports
    }
    o.m = t, o.c = e, o.d = function(t, e, i) {
        o.o(t, e) || Object.defineProperty(t, e, {
            enumerable: !0,
            get: i
        })
    }, o.r = function(t) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(t, "__esModule", {
            value: !0
        })
    }, o.t = function(t, e) {
        if (1 & e && (t = o(t)), 8 & e) return t;
        if (4 & e && "object" == typeof t && t && t.__esModule) return t;
        var i = Object.create(null);
        if (o.r(i), Object.defineProperty(i, "default", {
                enumerable: !0,
                value: t
            }), 2 & e && "string" != typeof t)
            for (var a in t) o.d(i, a, function(e) {
                return t[e]
            }.bind(null, a));
        return i
    }, o.n = function(t) {
        var e = t && t.__esModule ? function() {
            return t.default
        } : function() {
            return t
        };
        return o.d(e, "a", e), e
    }, o.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, o.p = "", o(o.s = 1)
}([function(t, e, o) {
    "use strict";

    function i() {
        return (i = Object.assign ? Object.assign.bind() : function(t) {
            for (var e = 1; e < arguments.length; e++) {
                var o = arguments[e];
                for (var i in o) Object.prototype.hasOwnProperty.call(o, i) && (t[i] = o[i])
            }
            return t
        }).apply(this, arguments)
    }

    function a(t, e) {
        for (var o = 0; o < e.length; o++) {
            var i = e[o];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
        }
    }
    o.d(e, "a", (function() {
        return n
    }));
    var n = function() {
        function t(e) {
            ! function(t, e) {
                if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
            }(this, t);
            this.config = i({
                backscroll: !0,
                linkAttributeName: "data-reymodal",
                extraAttributes: '[data-rey-inline-modal][href^="http"]:not([href="#"])',
                closeOnOverlay: !0,
                closeOnEsc: !0,
                closeOnButton: !0,
                waitTransitions: !1,
                catchFocus: !0,
                fixedSelectors: "*[data-reyfixed]",
                beforeOpen: function() {},
                afterOpen: function() {},
                afterClose: function() {}
            }, e), this.config.linkAttributeName && this.init(), this._closeAfterTransition = this._closeAfterTransition.bind(this), "undefined" != typeof rey && (rey.___.modal_scripts_loaded = !0)
        }
        var e, o, n;
        return e = t, (o = [{
            key: "init",
            value: function() {
                this.isOpened = !1, this.openedWindow = !1, this.starter = !1, this._nextWindows = !1, this._scrollPosition = 0, this._reopenTrigger = !1, this._overlayChecker = !1, this._isMoved = !1, this._exists = !1, this._focusElements = ["a[href]", "area[href]", 'input:not([disabled]):not([type="hidden"]):not([aria-hidden])', "select:not([disabled]):not([aria-hidden])", "textarea:not([disabled]):not([aria-hidden])", "button:not([disabled]):not([aria-hidden])", "iframe", "object", "embed", "[contenteditable]", '[tabindex]:not([tabindex^="-"])'], this._modalBlock = !1, this._prefix = "rmodal-", this.modalData = {}, this._modalDataExtra = !1;
                var t = document.querySelector(".reymodal__shadow");
                return t ? this.shadow = t : (this.shadow = document.createElement("div"), this.shadow.classList.add("reymodal__shadow"), this.shadow.style.display = "none", document.body.appendChild(this.shadow)), this.eventsFeeler(), this
            }
        }, {
            key: "eventsFeeler",
            value: function() {
                var t = this;
                document.addEventListener("click", (function(e) {
                    var o = e.target.closest(`[${t.config.linkAttributeName}], ${t.config.extraAttributes}`);
                    if (t._isMoved || !o)(e.target.closest('.rey-modal-section a[href*="#"]:not([href$="#"])') || t.config.closeOnButton && e.target.closest("[data-reyclose]")) && t.close();
                    else {
                        e.preventDefault(), t.starter = o;
                        var i = t.starter.getAttribute(t.config.linkAttributeName);
                        if (rey.validation.isValidURL(i) || (t.modalData = JSON.parse(i || "{}")), !Object.keys(t.modalData).length) {
                            var a = i || t.starter.getAttribute("data-rey-inline-modal") || t.starter.getAttribute("href") || t.starter.getAttribute("data-href");
                            if (!a) return;
                            if (-1 !== a.indexOf("youtube.com") ? (t.modalData.type = "iframe", t.modalData.src = a, t.modalData.videoService = "youtube") : -1 !== a.indexOf("youtu.be") ? (t.modalData.type = "iframe", t.modalData.src = a.replace("youtu.be/", "youtube.com/watch?v="), t.modalData.videoService = "youtube") : -1 !== a.indexOf("vimeo.com") && (t.modalData.type = "iframe", t.modalData.src = a, t.modalData.videoService = "vimeo"), !Object.keys(t.modalData).length) return;
                            t.modalData.id = t.urlToID(a), t.modalData.width = 750
                        }
                        t.open()
                    }
                })), this.config.closeOnOverlay && (document.addEventListener("mousedown", (function(e) {
                    !t._isMoved && e.target instanceof Element && !e.target.classList.contains("reymodal__wrap") || (t._overlayChecker = !0)
                })), document.addEventListener("mouseup", (function(e) {
                    if (!t._isMoved && e.target instanceof Element && t._overlayChecker && e.target.classList.contains("reymodal__wrap")) return e.preventDefault(), t._overlayChecker = !t._overlayChecker, void t.close();
                    t._overlayChecker = !1
                }))), window.addEventListener("keydown", (function(e) {
                    if (!t._isMoved && t.config.closeOnEsc && 27 === e.which && t.isOpened) return e.preventDefault(), void t.close();
                    !t._isMoved && t.config.catchFocus && 9 === e.which && t.isOpened && t.focusCatcher(e)
                }))
            }
        }, {
            key: "getModalData",
            value: function() {
                return i({
                    id: (new Date).getTime(),
                    type: "selector",
                    src: "",
                    content: "",
                    caption: "",
                    replacements: {},
                    width: "",
                    wrapperClass: "",
                    closeColor: "",
                    closePosition: "",
                    autoplay: !0,
                    ratio: "",
                    videoFormat: ""
                }, this.modalData)
            }
        }, {
            key: "createMarkup",
            value: function() {
                this.modalData = this.getModalData(), this.modalData.id = this._prefix + this.modalData.id;
                var t = document.getElementById(this.modalData.id);
                if (t) return this._exists = !0, void(this._nextWindows = t);
                if (this.createContent(), this.modalData.caption) {
                    this.$caption = document.createElement("div"), this.$caption.classList.add("reymodal__caption");
                    let t = document.createTextNode(this.modalData.caption);
                    this.$caption.appendChild(t)
                }
                this.$closeButton = document.createElement("button"), this.$closeButton.classList.add("reymodal__close"), this.$closeButton.setAttribute("data-reyclose", ""), this.$closeButton.setAttribute("aria-label", "Close");
                var e = this.modalData.closePosition || this._modalDataExtra && this._modalDataExtra.closePosition;
                e && this.$closeButton.classList.add("--p-" + e), this._modalDataExtra && this._modalDataExtra.closeColor && this.$closeButton.style.setProperty("color", this._modalDataExtra.closeColor), this.$window = document.createElement("div"), this.$window.classList.add("reymodal__window"), this.$window.setAttribute("aria-modal", "true"), this.$window.setAttribute("role", "dialog"), this.modalData.width && this.$window.style.setProperty("max-width", this.modalData.width + "px"), this.$content && this.$window.appendChild(this.$content), this._modalDataExtra && this._modalDataExtra.closeParent ? this.$window.querySelector(this._modalDataExtra.closeParent).appendChild(this.$closeButton) : this.$window.appendChild(this.$closeButton), this.modalData.caption && this.$window.appendChild(this.$caption), this.$innerWrap = document.createElement("div"), this.$innerWrap.classList.add("reymodal__wrap"), this.$innerWrap.appendChild(this.$window), this.$wrapper = document.createElement("div"), this.$wrapper.classList.add("reymodal", "--type-" + this.modalData.type), this.modalData.wrapperClass && this.$wrapper.classList.add(this.modalData.wrapperClass), this._modalDataExtra && this._modalDataExtra.wrapperClass && this.$wrapper.classList.add(this._modalDataExtra.wrapperClass), this.$wrapper.setAttribute("aria-hidden", "true"), this.$wrapper.setAttribute("id", this.modalData.id), this.$wrapper.appendChild(this.$innerWrap), this._nextWindows = document.body.appendChild(this.$wrapper)
            }
        }, {
            key: "createContent",
            value: function() {
                if ("image" === this.modalData.type) this.$content = document.createElement("img"), this.$content.classList.add("reymodal__image"), this.$content.setAttribute("src", this.modalData.src);
                else if ("video" === this.modalData.type) this.$contentVideo = document.createElement("video"), this.$contentVideo.setAttribute("src", this.modalData.src), this.$contentVideo.setAttribute("preload", "auto"), this.$contentVideo.setAttribute("controls", ""), this.$contentVideo.setAttribute("poster", ""), this.$content = document.createElement("div"), this.$content.classList.add("reymodal__video"), this.$content.setAttribute("data-ratio", this.modalData.videoFormat), this.$content.appendChild(this.$contentVideo);
                else if ("iframe" === this.modalData.type) {
                    var t = this.getIframeSrc();
                    t && (this.$contentIframe = document.createElement("iframe"), this.$contentIframe.setAttribute("src", t), this.$contentIframe.setAttribute("frameborder", "0"), this.$contentIframe.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"), this.$contentIframe.setAttribute("allowfullscreen", ""), this.$content = document.createElement("div"), this.$content.classList.add("reymodal__video"), this.$content.setAttribute("data-ratio", this.modalData.videoFormat), this.$content.appendChild(this.$contentIframe))
                } else if ("selector" === this.modalData.type) {
                    var e;
                    if ("string" == typeof this.modalData.content ? e = document.body.querySelector(this.modalData.content) : "object" == typeof this.modalData.content && this.modalData.content instanceof HTMLElement ? e = this.modalData.content : "object" == typeof this.modalData.content && Object.keys(this.modalData.content).length && (e = this.modalData.content[0]), e) {
                        this.$content = e;
                        var o = JSON.parse(this.$content.getAttribute("data-modal-extra") || "{}");
                        Object.keys(o).length && (this._modalDataExtra = o);
                        var i = this.$content.getAttribute("data-elementor-class"),
                            a = this;
                        i && (i.split(" ").forEach((t => {
                            a.$content.classList.add(t)
                        })), this.$content.removeAttribute("data-elementor-class"))
                    }
                } else "html" === this.modalData.type && (this.$content = document.createElement("div"), this.$content.classList.add("reymodal__html"), this.$content.innerHTML = this.modalData.content);
                this.modalData.ratio && this.$content && this.$content.style.setProperty("--custom-video-ratio", this.modalData.ratio + "%")
            }
        }, {
            key: "getIframeSrc",
            value: function() {
                var t = {
                        youtube: {
                            index: "youtube.com",
                            id: "v=",
                            src: "//www.youtube.com/embed/%id%%sep%autoplay=1&rel=0&enablejsapi=1&showinfo=0&playsinline=1&mute=1",
                            time: "&t="
                        },
                        vimeo: {
                            index: "vimeo.com/",
                            id: "/",
                            src: "//player.vimeo.com/video/%id%?autoplay=1&muted=1",
                            time: "#t="
                        },
                        gmaps: {
                            index: "//maps.google.",
                            src: "%id%&output=embed"
                        }
                    },
                    e = this.modalData.src;
                return Object.keys(t).forEach((function(o) {
                    var i = t[o];
                    if (e.indexOf(i.index) > -1 && ("youtube.com" !== i.index || -1 === e.indexOf("embed/"))) {
                        var a = "?";
                        return i.id && ("string" == typeof i.id && (e = e.substr(e.lastIndexOf(i.id) + i.id.length, e.length)), i.time && -1 !== e.lastIndexOf(i.time) && (e = (e = e.replace("&start=", "?start=")).replace("&t=", "?start="), a = "&")), e = i.src.replace("%sep%", a).replace("%id%", e), !1
                    }
                })), e
            }
        }, {
            key: "open",
            value: function(t) {
                if (t && (this.modalData = t), this.createMarkup(), this._nextWindows) {
                    if (this.isOpened) return this._reopenTrigger = !0, void this.close();
                    this.openedWindow = this._nextWindows, this._modalBlock = this.openedWindow.querySelector(".reymodal__window"), this.$content && this.$content.classList.remove("--hidden"), this.config.beforeOpen(this), this._runReplacements(), this._bodyScrollControl(), this.shadow.style.display = "", this.shadow.classList.add("reymodal__shadow--show"), this.openedWindow.classList.add("reymodal--active"), this.openedWindow.setAttribute("aria-hidden", "false"), this.modalData.autoplay && this.$contentVideo && (this.$contentVideo.autoplay = !0, this.$contentVideo.load()), this.config.catchFocus && this.focusControl(), this.config.afterOpen(this), this.isOpened = !0
                } else console.log("Warning: ReyModal selector is not found")
            }
        }, {
            key: "close",
            value: function() {
                this._preventClose || this.isOpened && (this.config.waitTransitions ? (this.openedWindow.classList.add("reymodal--moved"), this._isMoved = !0, this.openedWindow.addEventListener("transitionend", this._closeAfterTransition), this.openedWindow.classList.remove("reymodal--active")) : (this.openedWindow.classList.remove("reymodal--active"), this._closeAfterTransition()))
            }
        }, {
            key: "setPreventClose",
            value: function(t) {
                this._preventClose = t, this.$closeButton.style.display = !0 === t ? "none" : "block"
            }
        }, {
            key: "_runReplacements",
            value: function() {
                if (this.modalData.replacements && "video" !== this.modalData.type && "iframe" !== this.modalData.type && !this._hasReplaced) {
                    var t = this.$content || this.openedWindow;
                    if (t) {
                        for (var e in this.modalData.replacements) {
                            var o = this.modalData.replacements[e];
                            if (0 === e.indexOf("#") || 0 === e.indexOf(".")) {
                                var i = t.querySelector(e);
                                i && ("INPUT" === i.tagName ? i.setAttribute("value", o) : i.innerHTML = o)
                            } else t.innerHTML = t.innerHTML.replace(new RegExp(e, "g"), o)
                        }
                        this._hasReplaced = !0
                    }
                }
            }
        }, {
            key: "_closeAfterTransition",
            value: function() {
                this.openedWindow.classList.remove("reymodal--moved"), this.openedWindow.removeEventListener("transitionend", this._closeAfterTransition), this._isMoved = !1, this.shadow.classList.remove("reymodal__shadow--show"), this.openedWindow.setAttribute("aria-hidden", "true"), this.config.catchFocus && this.focusControl(), this._bodyScrollControl(), this.isOpened = !1, this.openedWindow.scrollTop = 0, this.config.afterClose(this), this.stopVideos(), this._reopenTrigger && (this._reopenTrigger = !1, this.open())
            }
        }, {
            key: "stopVideos",
            value: function() {
                if (this.$contentVideo) this.$contentVideo.pause(), this.$contentVideo.currentTime = 0;
                else if (this.$contentIframe) {
                    if (this.modalData.videoService && "vimeo" === this.modalData.videoService) return void this.$contentIframe.contentWindow.postMessage('{"method":"pause"}', "*");
                    this.$contentIframe.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', "*")
                }
            }
        }, {
            key: "focusControl",
            value: function() {
                var t = this.openedWindow.querySelectorAll(this._focusElements);
                this.isOpened && this.starter ? this.starter.focus() : t.length && t[0].focus()
            }
        }, {
            key: "focusCatcher",
            value: function(t) {
                var e = this.openedWindow.querySelectorAll(this._focusElements),
                    o = Array.prototype.slice.call(e);
                if (this.openedWindow.contains(document.activeElement)) {
                    var i = o.indexOf(document.activeElement);
                    t.shiftKey && 0 === i && (o[o.length - 1].focus(), t.preventDefault()), t.shiftKey || i !== o.length - 1 || (o[0].focus(), t.preventDefault())
                } else o[0].focus(), t.preventDefault()
            }
        }, {
            key: "urlToID",
            value: function(t) {
                var e = "àáâäæãåāăąçćčđďèéêëēėęěğǵḧîïíīįìıİłḿñńǹňôöòóœøōõőṕŕřßśšşșťțûüùúūǘůűųẃẍÿýžźż·/_,:;",
                    o = new RegExp(e.split("").join("|"), "g");
                return t.toString().toLowerCase().replace(/\//g, "").replace(/\s+/g, "-").replace(o, (t => "aaaaaaaaaacccddeeeeeeeegghiiiiiiiilmnnnnoooooooooprrsssssttuuuuuuuuuwxyyzzz------".charAt(e.indexOf(t)))).replace(/&/g, "-and-").replace(/[^\w\-]+/g, "").replace(/\-\-+/g, "-").replace(/^-+/, "").replace(/-+$/, "")
            }
        }, {
            key: "_bodyScrollControl",
            value: function() {
                if (this.config.backscroll) {
                    if (!0 === this.isOpened) return document.documentElement.classList.remove("reymodal__opened"), void document.body.classList.remove("--no-scroll");
                    document.documentElement.classList.add("reymodal__opened"), document.body.classList.add("--no-scroll")
                }
            }
        }]) && a(e.prototype, o), n && a(e, n), Object.defineProperty(e, "prototype", {
            writable: !1
        }), t
    }()
}, function(t, e, o) {
    "use strict";
    o.r(e),
        function(t) {
            var e = o(0);
            o(3), o(4);
            t.ReyModal = e.a
        }.call(this, o(2))
}, function(t, e) {
    var o;
    o = function() {
        return this
    }();
    try {
        o = o || new Function("return this")()
    } catch (t) {
        "object" == typeof window && (o = window)
    }
    t.exports = o
}, function(t, e) {
    "undefined" != typeof Element && (Element.prototype.matches || (Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector), Element.prototype.closest || (Element.prototype.closest = function(t) {
        var e = this;
        do {
            if (e.matches(t)) return e;
            e = e.parentElement || e.parentNode
        } while (null !== e && 1 === e.nodeType);
        return null
    }))
}, function(t, e, o) {}]);
var myModals = new ReyModal({
    catchFocus: !1,
    closeOnEsc: !0,
    backscroll: !0
});
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