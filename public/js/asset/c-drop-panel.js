!(function () {
    "use strict";
    var e = function (e) {
        var t = this;
        this.isOpen,
            (this.init = function () {
                if (
                    !rey.vars.is_global_section_mode &&
                    ((this.config = Object.assign(
                        {
                            name: "droppanel",
                            panel: "",
                            trigger: ".rey-header-dropPanel-btn",
                            manualOpen: !1,
                            onInit: function () {},
                            onUpdate: function () {},
                            onOpen: function () {},
                            onOpened: function () {},
                            onClose: function () {},
                            onClosed: function () {},
                            closeOnScroll: !1,
                            panelOutside: !1,
                            mobileStretch: !1,
                            alignment: "right",
                            bodyClass: "--drop-panel-active",
                            extraBodyClass: "",
                            elOpenClass: "--is-open",
                            elOpenedClass: "--is-opened",
                            initialDisplay: "block",
                        },
                        e || {}
                    )),
                    (this.panel = this.config.panel),
                    (this.trigger = this.config.trigger),
                    rey.validation.isString(this.panel) &&
                        (this.panel = document.querySelector(this.panel)),
                    rey.validation.isString(this.trigger) &&
                        (this.trigger = this.panel.querySelector(this.trigger)),
                    this.panel && this.trigger)
                ) {
                    if (this.panel.hasAttribute("data-droppanel")) {
                        var i = JSON.parse(
                            this.panel.getAttribute("data-droppanel") || "{}"
                        );
                        rey.validation.isEmptyObject(i) ||
                            Object.keys(i).forEach((e) => {
                                t.config[e] = i[e];
                            });
                    }
                    if (
                        ((this.contentHolder = this.panel.querySelector(
                            ".rey-header-dropPanel-content"
                        )),
                        this.contentHolder || this.config.panelOutside)
                    ) {
                        if (
                            ((this.alignment =
                                this.panel.getAttribute("data-align") ||
                                this.config.alignment),
                            (this.overlaySource =
                                rey.elements.header &&
                                rey.dom.contains(
                                    rey.elements.header,
                                    this.trigger
                                )
                                    ? "header"
                                    : "site"),
                            (this.hasOverlay =
                                !this.trigger.classList.contains(
                                    "--no-overlay"
                                )),
                            this.panel.setAttribute(
                                "data-location",
                                this.config.panelOutside ? "outside" : "inside"
                            ),
                            (this.isHover =
                                this.trigger.closest(".--dp-hover")),
                            this.isHover)
                        ) {
                            var s = document.createElement("div");
                            s.classList.add("__safe-spacer"),
                                this.trigger.append(s);
                        }
                        this.config.onInit.call(this), this.events();
                    }
                }
            }),
            (this.setCoordinates = function () {
                var e = rey.dom.offset(t.trigger),
                    i = document.body.offsetWidth || window.outerWidth,
                    s = {
                        l: e.left < i / 2 ? "unset" : "auto",
                        r: e.left > i / 2 ? "unset" : "auto",
                    };
                this.atBottom,
                    rey.dom.setProperties(s, t.panel),
                    (t.contentHolder.style.display = t.config.initialDisplay);
                var n = !1;
                if (
                    (t.config.panelOutside && (n = !0),
                    t.config.mobileStretch &&
                        (t.panel.classList.add("--mobile-stretch"), (n = !0)),
                    n)
                ) {
                    var o = {
                        "o-top": e.top,
                        "o-left": e.left,
                        "w-width": i,
                        "t-width": t.trigger.offsetWidth,
                        "t-height": t.trigger.offsetHeight,
                    };
                    rey.dom.setProperties(o, t.panel);
                }
            }),
            (this.events = function () {
                var e = function (e) {
                    e.preventDefault(),
                        rey.util.wait.styles(function () {
                            t.isHover ||
                                t.config.manualOpen ||
                                (t.isOpen ? t.close() : t.open());
                        });
                };
                this.trigger.addEventListener("click", e),
                    this.trigger.addEventListener("touchstart", e),
                    this.trigger.addEventListener("mouseenter", function (e) {
                        t.isHover && (t.config.manualOpen || t.open());
                    }),
                    this.panel.addEventListener("mouseleave", function (e) {
                        t.isHover && (t.config.manualOpen || t.close());
                    }),
                    window.addEventListener(
                        "resize",
                        rey.util.debounce(this.setCoordinates, 500)
                    ),
                    document.addEventListener("scroll", function (e) {
                        t.isOpen &&
                            rey.vars.is_desktop &&
                            t.config.closeOnScroll &&
                            t.close();
                    });
            }),
            (this.update = function (e) {
                e && e.call(this),
                    this.events(),
                    this.config.onUpdate.call(this);
            }),
            (this.open = function () {
                this.isOpen ||
                    (this.__coordinatesSet ||
                        (this.setCoordinates(),
                        (this.__coordinatesSet = !0),
                        rey.elements.header.classList.contains(
                            "--fixed-shrinking"
                        ) && (this.__coordinatesSet = !1)),
                    this.transitionDuration ||
                        (this.transitionDuration = rey.dom.getNumberProperty(
                            this.panel,
                            "--transition-duration",
                            400
                        )),
                    this.config.onOpen.call(this),
                    rey.frontend.panels.init(this.close.bind(this)),
                    this.hasOverlay &&
                        rey.frontend.overlay.open(this.overlaySource),
                    requestAnimationFrame(this.startToggler),
                    (this.isOpen = !0));
            }),
            (this.startToggler = function () {
                t.toggleClasses(!0), (t.__startedToggler = !0);
            }),
            (this.close = function () {
                this.isOpen &&
                    (this.config.onClose.call(this),
                    rey.frontend.panels.reset(),
                    this.hasOverlay && rey.frontend.overlay.close(),
                    requestAnimationFrame(function () {
                        t.toggleClasses(!1);
                    }),
                    (this.isOpen = !1));
            }),
            (this.toggleClasses = function (e) {
                rey.elements.body.classList.toggle(this.config.bodyClass, e),
                    this.config.extraBodyClass &&
                        rey.elements.body.classList.toggle(
                            this.config.extraBodyClass,
                            e
                        ),
                    this.panel.classList.toggle(this.config.elOpenClass, e),
                    this.trigger.classList.toggle(this.config.elOpenClass, e),
                    setTimeout(() => {
                        t.onTransitionEnd();
                    }, this.transitionDuration),
                    rey.hooks.doAction("toggle_droppanel", e, this);
            }),
            (this.onTransitionEnd = function () {
                this.isOpen
                    ? (this.config.onOpened.call(this),
                      this.panel.classList.add(this.config.elOpenedClass),
                      rey.trapFocus(this.contentHolder))
                    : (this.config.onClosed.call(this),
                      this.panel.classList.remove(this.config.elOpenedClass),
                      rey.removeTrapFocus(this.trigger));
            }),
            this.init();
    };
    (rey.components.dropPanel = function () {
        return new e(...arguments);
    }),
        document
            .querySelectorAll(".rey-header-dropPanel:not(.--manual)")
            .forEach((e) => {
                rey.components.dropPanel({ panel: e });
            });
})();
