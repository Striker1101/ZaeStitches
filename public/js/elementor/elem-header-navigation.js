!(function () {
    "use strict";
    var e = function (e) {
        rey.validation.isJQuery(e) && (e = e[0]),
            rey.vars.elementor_edit_mode
                ? rey.components.mainMenu && rey.components.mainMenu(e)
                : e.classList.contains("--hbg-hover-yes") &&
                  (e
                      .querySelectorAll(".rey-mainNavigation-mobileBtn")
                      .forEach((e) => {
                          e.addEventListener("mouseenter", (e) => {
                              e.currentTarget.click();
                          });
                      }),
                  e.classList.contains("--hbg-hover-close-yes") &&
                      e
                          .querySelectorAll(".rey-mainNavigation--mobile")
                          .forEach((e) => {
                              e.addEventListener("mouseleave", (n) => {
                                  var r = e.querySelector(
                                      ".js-rey-mobileMenu-close"
                                  );
                                  r && r.click();
                              });
                          }));
    };
    rey.hooks.addAction("elementor/init", function (n) {
        n.registerElement({ name: "reycore-header-navigation.default", cb: e });
    });
})();
