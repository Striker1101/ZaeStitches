!(function (t) {
    "use strict";
    var e = function (e) {
        var s = this;
        (this.class = "is-opened"),
            (this._request = !1),
            (this.resultsShowing = !1),
            (this.init = function () {
                if (
                    reyParams.ajax_search &&
                    ((this.$searchPanel = t(e)),
                    this.$searchPanel.length &&
                        !this.$searchPanel.closest(".--prevent-results-overlay")
                            .length &&
                        reyParams.ajax_search &&
                        ((this.$postType = t(
                            '[name="post_type"]',
                            this.$searchPanel
                        )),
                        this.$postType.length &&
                            ((this.$searchField = t(
                                "input[type='search']",
                                this.$searchPanel
                            )),
                            (this.panel_HTML = rey.template("reySearchPanel")),
                            this.panel_HTML)))
                )
                    return (
                        (this.$results = t(
                            ".js-rey-searchResults",
                            this.$searchPanel
                        )),
                        (this.params = reyParams),
                        (this.$catList = t(
                            ".rey-searchForm-catList",
                            this.$searchPanel
                        )),
                        this.$catList.length &&
                            this.$catList
                                .siblings("span")
                                .text(
                                    t("option:selected", this.$catList).text()
                                ),
                        this.events(),
                        this
                    );
            }),
            (this.events = function () {
                var e = function (t) {
                    s._request &&
                        s._request instanceof XMLHttpRequest &&
                        s._request.abort(),
                        s.runSearchRequest(t);
                };
                this.$searchField.on(
                    "input",
                    rey.util.debounce(function (t) {
                        var a = t.target.value.trim();
                        if (
                            "" !== a ||
                            !s.resultsShowing ||
                            t.originalEvent.inputType
                        )
                            if (
                                "" !== a &&
                                a.length >=
                                    s.params.js_params.ajax_search_letter_count
                            )
                                e(a);
                            else {
                                if ("" === a) return;
                                s.printSearchResults();
                            }
                        else s.removeResults();
                    }, 1e3)
                ),
                    this.$searchField.on("focus", function (t) {
                        var a = t.target.value.trim();
                        a && !s.resultsShowing && e(a);
                    }),
                    this.$searchField
                        .closest("form")
                        .on("submit", function (t) {
                            reyParams.js_params.ajax_search_allow_empty ||
                                s.$searchField.val().trim() ||
                                t.preventDefault();
                        }),
                    this.$postType.on("change", function (e) {
                        var a = t(this);
                        s.$searchField.trigger("input"),
                            t(
                                ".rey-searchForm-postType > span",
                                s.$searchPanel
                            ).text(t("option:selected", this).text()),
                            s.$catList.length &&
                                ("product" === a.val()
                                    ? (s.$catList.parent().show(),
                                      s.$catList.removeAttr("disabled"))
                                    : (s.$catList.parent().hide(),
                                      s.$catList.attr("disabled", "disabled")));
                    }),
                    this.$catList.on("change", function (e) {
                        s.$searchField.trigger("input"),
                            t(this)
                                .siblings("span")
                                .text(t("option:selected", this).text());
                    }),
                    t(".rey-searchPanel__suggestions button").on(
                        "click",
                        function (e) {
                            e.preventDefault(),
                                s.$searchField.val(t(this).text()),
                                s.$searchField.trigger("input");
                        }
                    ),
                    t(document.body).on("click", function (e) {
                        s.resultsShowing &&
                            (e.target.closest(".rey-searchAjax") ||
                                (s.removeResults(),
                                t(document).trigger(
                                    "reycore/ajax_search/close"
                                )));
                    });
            }),
            (this.runSearchRequest = function (e) {
                if (
                    (this.$searchPanel.addClass("--loading"),
                    this.removeResults(),
                    void 0 !== this.params.search_texts)
                ) {
                    var a = { s: e, post_type: s.$postType.val() };
                    if (this.$catList.length)
                        this.$catList.val() &&
                            (a.product_cat = this.$catList.val());
                    this.$searchField
                        .closest("form")
                        .find("input, select")
                        .each(function (e, s) {
                            var i = t(s),
                                r = i.val().trim();
                            "" !== r && (a[i.attr("name")] = r);
                        }),
                        this.$searchField
                            .closest("form")
                            .find("input, select")
                            .each(function (e, s) {
                                var i = t(s),
                                    r = i.val().trim();
                                "" !== r && (a[i.attr("name")] = r);
                            }),
                        (this._request = rey.ajax.request("ajax_search", {
                            data: a,
                            params: { cache: !1 },
                            cb: function (t) {
                                var e = [];
                                t &&
                                    t.success &&
                                    t.data.total_count &&
                                    0 !== parseInt(t.data.total_count) &&
                                    (e = t.data.items),
                                    s.$searchPanel.addClass("--has-results"),
                                    s.printSearchResults(e),
                                    (s._request = !1);
                            },
                        }));
                }
            }),
            (this.printSearchResults = function (t) {
                var e = "";
                rey.validation.isArray(t)
                    ? ((e = t.length
                          ? this.panel_HTML({
                                items: t,
                                only_title: this.params.ajax_search_only_title,
                            })
                          : "<div class='rey-searchResults-message'>" +
                            this.params.search_texts.NO_RESULTS +
                            "</div>"),
                      this.$searchPanel.removeClass("--loading"))
                    : this.removeResults(),
                    this.showResults(e);
            }),
            (this.showResults = function (t) {
                this.$results.html(t).addClass("--visible"),
                    (this.resultsShowing = !0);
            }),
            (this.removeResults = function () {
                this.$results.empty().removeClass("--visible"),
                    this.$searchPanel.removeClass("--has-results"),
                    (this.resultsShowing = !1),
                    t(document).trigger("reycore/ajax_search/remove_results");
            }),
            this.init();
    };
    document.addEventListener("rey-DOMContentLoaded", function (s) {
        t(".js-rey-ajaxSearch").each(function () {
            new e(this);
        });
    });
})(jQuery);
