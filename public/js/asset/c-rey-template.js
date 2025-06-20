!(function () {
    var n = /\\|'|\r|\n|\u2028|\u2029/g,
        r = {
            "'": "'",
            "\\": "\\",
            "\r": "r",
            "\n": "n",
            "\u2028": "u2028",
            "\u2029": "u2029",
        };
    function t(n) {
        return "\\" + r[n];
    }
    function e(n, r) {
        return null != n && hasOwnProperty.call(n, r);
    }
    var u = /^\s*(\w|\$)+\s*$/,
        o = /(.)^/,
        a = /<#([\s\S]+?)#>/g,
        c = /\{\{\{([\s\S]+?)\}\}\}/g,
        i = /\{\{([^\}]+?)\}\}(?!\})/g,
        _ = "data";
    window._rey_escape = function (n) {
        var r = {
                "&": "&amp;",
                "<": "&lt;",
                ">": "&gt;",
                '"': "&quot;",
                "'": "&#x27;",
                "`": "&#x60;",
            },
            t = "(?:" + Object.keys(r).join("|") + ")",
            e = RegExp(t),
            u = RegExp(t, "g");
        return (
            (n = null == n ? "" : "" + n),
            e.test(n)
                ? n.replace(u, function (n) {
                      return r[n];
                  })
                : n
        );
    };
    var l = (function (n, r) {
        var t = function (u) {
            var o = t.cache,
                a = "" + (r ? r.apply(this, arguments) : u);
            return e(o, a) || (o[a] = n.apply(this, arguments)), o[a];
        };
        return (t.cache = {}), t;
    })(function (r) {
        var e;
        return function (l) {
            var p = document.getElementById("tmpl-" + r);
            if (!p) throw new Error("Template not found: #tmpl-" + r);
            return (e =
                e ||
                (function (r) {
                    var e = RegExp(
                            [
                                (i || o).source,
                                (c || o).source,
                                (a || o).source,
                            ].join("|") + "|$",
                            "g"
                        ),
                        l = 0,
                        p = "__p+='";
                    r.replace(e, function (e, u, o, a, c) {
                        return (
                            (p += r.slice(l, c).replace(n, t)),
                            (l = c + e.length),
                            u
                                ? (p +=
                                      "'+\n((__t=(" +
                                      u +
                                      "))==null?'':window._rey_escape(__t))+\n'")
                                : o
                                ? (p +=
                                      "'+\n((__t=(" +
                                      o +
                                      "))==null?'':__t)+\n'")
                                : a && (p += "';\n" + a + "\n__p+='"),
                            e
                        );
                    }),
                        (p += "';\n");
                    var s,
                        f = _;
                    if (!u.test(f))
                        throw new Error(
                            "variable is not a bare identifier: " + f
                        );
                    p =
                        "var __t,__p='',__j=Array.prototype.join,print=function(){__p+=__j.call(arguments,'');};\n" +
                        p +
                        "return __p;\n";
                    try {
                        s = new Function(f, "_", p);
                    } catch (n) {
                        throw ((n.source = p), n);
                    }
                    var w = function (n) {
                        return s.call(this, n, {});
                    };
                    return (w.source = "function(" + f + "){\n" + p + "}"), w;
                })(p.innerHTML))(l);
        };
    });
    "undefined" == typeof rey ? (window._rey_template = l) : (rey.template = l);
})();
