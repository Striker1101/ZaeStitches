!(function () {
    "use strict";
    var e = {
        isOpen: !1,
        class: "is-opened",
        button: null,
        searchLogo: [],
        init: function () {
            if (((this.searchPanel = this.getPanel()), this.searchPanel))
                return (
                    (this.searchField = this.searchPanel.querySelector(
                        "input[type='search']"
                    )),
                    (this.panelStyle =
                        this.searchPanel.getAttribute("data-style")),
                    this.sideSetup(),
                    this.wideSetup(),
                    this
                );
        },
        getPanel: function () {
            return document.getElementById("rey-searchPanel");
        },
        sideSetup: function () {
            if ("side" === this.panelStyle) {
                var e = {
                    name: "search-panel",
                    trigger: ".js-rey-headerSearch-toggle",
                    panel: this.searchPanel,
                    extraBodyClass: [
                        "search-panel--active",
                        "search-panel--side",
                    ],
                    onOpen: this.openSide,
                };
                rey.components.sidePanel(e);
            }
        },
        openSide: function () {
            rey.frontend.inView({
                target: e.searchField,
                cb: function () {
                    e.searchField.focus();
                },
                once: !0,
            });
        },
        closeSide: function (e) {},
        wideSetup: function () {
            if ("wide" === this.panelStyle) {
                document
                    .querySelectorAll(".js-rey-headerSearch-toggle")
                    .forEach((t) => {
                        t.addEventListener("click", (t) => {
                            if (
                                (t.preventDefault(),
                                !rey.vars.is_global_section_mode)
                            ) {
                                if (
                                    ((e.button = t.currentTarget),
                                    (e.sticky = e.button.closest(
                                        '.rey-stickyContent[data-align="top"]'
                                    )),
                                    (e.headerSource = rey.elements.header),
                                    rey.vars.headerisShrinked)
                                )
                                    this.searchPanel.style.setProperty(
                                        "--shrank--header-height",
                                        e.headerSource.offsetHeight + "px"
                                    );
                                else if (e.sticky) {
                                    var s = rey.dom.children(
                                        e.sticky,
                                        ".elementor"
                                    );
                                    s.length && (e.headerSource = s[0]);
                                }
                                if (
                                    (e.headerSource &&
                                        (e.searchLogo =
                                            e.headerSource.querySelectorAll(
                                                "img.custom-logo[data-search-logo]"
                                            )),
                                    e.isOpen)
                                )
                                    return e.closeWide();
                                e.openWide();
                            }
                        });
                    });
                var t = document.querySelector(".rey-searchPanel-wideOverlay");
                t &&
                    t.addEventListener("click", function (t) {
                        t.preventDefault(), e.isOpen && e.closeWide();
                    }),
                    t &&
                        document.addEventListener("keyup", function (t) {
                            e.isOpen && 27 == t.keyCode && e.closeWide();
                        }),
                    rey.hooks.addAction("minicart/opened", function () {
                        e.isOpen && e.closeWide();
                    });
            }
        },
        openWide: function () {
            this.isOpen || ((this.isOpen = !0), this.startToggler());
        },
        startToggler: function () {
            this.__startedToggler
                ? this.toggleWide(!0)
                : (this.searchPanel.classList.remove("--hidden"),
                  setTimeout(() => {
                      this.toggleWide(!0);
                  }, 50),
                  (this.__startedToggler = !0));
        },
        toggleWide: function (t) {
            this.button.classList.toggle(this.class, t),
                e.searchPanel.classList.toggle("--is-open", t),
                rey.elements.body.classList.toggle("search-panel--active", t),
                rey.elements.body.classList.toggle("search-panel--wide", t),
                t
                    ? (this.button &&
                          this.searchLogo.length &&
                          this.searchLogo.forEach((e) => {
                              e.setAttribute(
                                  "data-initial-src",
                                  e.getAttribute("src")
                              ),
                                  e.setAttribute(
                                      "src",
                                      e.getAttribute("data-search-logo")
                                  ),
                                  e.setAttribute("srcset", "");
                          }),
                      rey.frontend.inView({
                          target: e.searchField,
                          cb: function () {
                              e.searchField.focus();
                          },
                          once: !0,
                      }))
                    : (this.button &&
                          this.searchLogo.length &&
                          this.searchLogo.forEach((e) => {
                              var t = e.getAttribute("data-initial-src");
                              t &&
                                  (e.setAttribute("src", t),
                                  e.setAttribute("srcset", ""));
                          }),
                      setTimeout(function () {
                          rey.elements.body.classList.remove(
                              "--overlay-under-header"
                          );
                      }, 300));
        },
        closeWide: function () {
            this.isOpen && ((this.isOpen = !1), this.toggleWide(!1));
        },
    };
    document.addEventListener("rey-DOMContentLoaded", function () {
        rey.components.searchPanel = e.init();
    });
})();
