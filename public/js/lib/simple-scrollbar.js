!(function (t, e) {
    "object" == typeof exports
        ? (module.exports = e(window, document))
        : (t.SimpleScrollbar = e(window, document));
})(this, function (t, e) {
    var s =
        t.requestAnimationFrame ||
        t.setImmediate ||
        function (t) {
            return setTimeout(t, 0);
        };
    function i(t) {
        Object.prototype.hasOwnProperty.call(t, "data-simple-scrollbar") ||
            Object.defineProperty(t, "data-simple-scrollbar", {
                value: new n(t),
            });
    }
    function r(i) {
        for (
            this.target = i,
                this.compStyle = t.getComputedStyle(this.target),
                this.direction = this.compStyle.direction,
                this.bar = '<div class="ss-scroll">',
                this.wrapper = e.createElement("div"),
                this.wrapper.setAttribute("class", "ss-wrapper"),
                this.el = e.createElement("div"),
                this.el.setAttribute("class", "ss-content"),
                "rtl" === this.direction && this.el.classList.add("rtl"),
                this.wrapper.appendChild(this.el);
            this.target.firstChild;

        )
            this.el.appendChild(this.target.firstChild);
        this.target.appendChild(this.wrapper),
            this.target.insertAdjacentHTML("beforeend", this.bar),
            (this.bar = this.target.lastChild),
            (function (t, i) {
                var r;
                function a(t) {
                    var e = t.pageY - r;
                    (r = t.pageY),
                        s(function () {
                            i.el.scrollTop += e / i.scrollRatio;
                        });
                }
                function n() {
                    t.classList.remove("ss-grabbed"),
                        e.body.classList.remove("ss-grabbed"),
                        e.removeEventListener("mousemove", a),
                        e.removeEventListener("mouseup", n);
                }
                t.addEventListener("mousedown", function (s) {
                    return (
                        (r = s.pageY),
                        t.classList.add("ss-grabbed"),
                        e.body.classList.add("ss-grabbed"),
                        e.addEventListener("mousemove", a),
                        e.addEventListener("mouseup", n),
                        !1
                    );
                });
            })(this.bar, this),
            this.moveBar(),
            t.addEventListener("resize", this.moveBar.bind(this)),
            this.el.addEventListener("scroll", this.moveBar.bind(this)),
            this.el.addEventListener("mouseenter", this.moveBar.bind(this)),
            this.target.classList.add("ss-container"),
            "0px" === this.compStyle.height &&
                "0px" !== this.compStyle["max-height"] &&
                (i.style.height = this.compStyle["max-height"]);
    }
    function a() {
        for (
            var t = e.querySelectorAll("*[data-ss-container]"), s = 0;
            s < t.length;
            s++
        )
            i(t[s]);
    }
    (r.prototype = {
        moveBar: function (t) {
            var e = this.el.scrollHeight,
                i = this.el.clientHeight,
                r = this;
            this.scrollRatio = i / e;
            r.direction, r.target.clientWidth, r.bar.clientWidth;
            s(function () {
                r.scrollRatio >= 1
                    ? (r.wrapper.classList.add("ss-hidden-bar"),
                      r.bar.classList.add("ss-hidden"))
                    : (r.wrapper.classList.remove("ss-hidden-bar"),
                      r.bar.classList.remove("ss-hidden"),
                      (r.bar.style.cssText =
                          "height:" +
                          Math.max(100 * r.scrollRatio, 10) +
                          "%; top:" +
                          (r.el.scrollTop / e) * 100 +
                          "%;"));
            });
        },
    }),
        e.addEventListener("DOMContentLoaded", a),
        (r.initEl = i),
        (r.initAll = a);
    var n = r;
    return n;
});
