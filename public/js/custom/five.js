(() => {
    class RocketElementorPreload {
        constructor() {
            (this.deviceMode = document.createElement("span")),
                (this.deviceMode.id = "elementor-device-mode-wpr"),
                this.deviceMode.setAttribute("class", "elementor-screen-only"),
                document.body.appendChild(this.deviceMode);
        }
        t() {
            let t = getComputedStyle(this.deviceMode, ":after").content.replace(
                /"/g,
                ""
            );
            (this.animationSettingKeys = this.i(t)),
                document
                    .querySelectorAll(".elementor-invisible[data-settings]")
                    .forEach((t) => {
                        const e = t.getBoundingClientRect();
                        if (e.bottom >= 0 && e.top <= window.innerHeight)
                            try {
                                this.o(t);
                            } catch (t) {}
                    });
        }
        o(t) {
            const e = JSON.parse(t.dataset.settings),
                i = e.m || e.animation_delay || 0,
                n = e[this.animationSettingKeys.find((t) => e[t])];
            if ("none" === n)
                return void t.classList.remove("elementor-invisible");
            t.classList.remove(n),
                this.currentAnimation &&
                    t.classList.remove(this.currentAnimation),
                (this.currentAnimation = n);
            let o = setTimeout(() => {
                t.classList.remove("elementor-invisible"),
                    t.classList.add("animated", n),
                    this.l(t, e);
            }, i);
            window.addEventListener("rocket-startLoading", function () {
                clearTimeout(o);
            });
        }
        i(t = "mobile") {
            const e = [""];
            switch (t) {
                case "mobile":
                    e.unshift("_mobile");
                case "tablet":
                    e.unshift("_tablet");
                case "desktop":
                    e.unshift("_desktop");
            }
            const i = [];
            return (
                ["animation", "_animation"].forEach((t) => {
                    e.forEach((e) => {
                        i.push(t + e);
                    });
                }),
                i
            );
        }
        l(t, e) {
            this.i().forEach((t) => delete e[t]),
                (t.dataset.settings = JSON.stringify(e));
        }
        static run() {
            const t = new RocketElementorPreload();
            requestAnimationFrame(t.t.bind(t));
        }
    }
    document.addEventListener("DOMContentLoaded", RocketElementorPreload.run);
})();
