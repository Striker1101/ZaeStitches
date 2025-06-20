!(function () {
    "use strict";
    var e = function (e, t) {
        (this.init = function () {
            e.hasAttribute("data-lazy-load") ||
                (rey.vars.is_desktop &&
                    (rey.vars.elementor_edit_mode ||
                        ("undefined" != typeof Masonry
                            ? ((this.grid = e.querySelector(
                                  ".rey-elInsta--skin-shuffle"
                              )),
                              this.grid &&
                                  (this.grid.style.setProperty(
                                      "--gw",
                                      t + "px"
                                  ),
                                  (this.items =
                                      this.grid.querySelectorAll(
                                          ".rey-elInsta-item"
                                      )),
                                  this.items.length
                                      ? (rey.util.imagesLoaded(
                                            this.grid,
                                            () => {
                                                this.run(),
                                                    rey.frontend.inView({
                                                        target: this.items,
                                                        cb: (e, t) => {
                                                            e.target &&
                                                                (e.target.classList.add(
                                                                    "--animated-in"
                                                                ),
                                                                (e.target.style.transitionDelay =
                                                                    0.05 * t +
                                                                    "s"));
                                                        },
                                                        once: !0,
                                                    });
                                            }
                                        ),
                                        window.addEventListener(
                                            "resize",
                                            rey.util.debounce(() => {
                                                this.run();
                                            }, 300)
                                        ))
                                      : this.grid
                                            .closest(".elementor-element")
                                            .classList.add("--empty")))
                            : console.warn("masonry undefined"))));
        }),
            (this.run = function () {
                new Masonry(this.grid, {
                    itemSelector: ".rey-elInsta-item",
                    percentPosition: !0,
                    gutter: parseInt(this.grid.getAttribute("data-gap") || 10),
                });
            }),
            this.init();
    };
    rey.hooks.addAction("elementor/init", function (t) {
        t.registerElement({
            name: "reycore-instagram.shuffle",
            cb: function (t) {
                rey.frontend.inView({
                    target: t[0],
                    cb: (t, i) => {
                        new e(t.target, t.boundingClientRect.width);
                    },
                    once: !0,
                });
            },
        });
    });
})();
