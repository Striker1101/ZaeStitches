!(function () {
    var e = function (e) {
        var n = (e || document).querySelectorAll(".rey-lazyBg");
        if ("IntersectionObserver" in window) {
            var t = new IntersectionObserver(function (e, n) {
                e.forEach(function (e) {
                    e.isIntersecting &&
                        (e.target.classList.remove("rey-lazyBg"),
                        t.unobserve(e.target));
                });
            });
            n.forEach(function (e) {
                t.observe(e);
            });
        } else
            for (var r = 0; r < n.length; r++)
                n[r].classList.remove("rey-lazyBg");
    };
    document.addEventListener("DOMContentLoaded", function () {
        e();
    }),
        document.addEventListener("reycore/ajaxfilters/end", function (n) {
            e(n.detail.scope);
        }),
        document.addEventListener(
            "reycore/ajaxfilters/extra_content",
            function (n) {
                e(n.detail.scope);
            }
        );
})();
