!(function () {
    "use strict";
    "undefined" != typeof rey
        ? (rey.components.videoHelper = function (e) {
              var t = {};
              return (
                  (void 0 !== e.containers && "" != e.containers) ||
                      console.error("error"),
                  (t.config = Object.assign(
                      { containers: [], lazyLoad: !0 },
                      e || "{}"
                  )),
                  (t.htmlVideosLoaded = !1),
                  (t.videos = { youtube: {}, hosted: {} }),
                  (t._players = { youtube: {}, hosted: {} }),
                  (t.currentIndex = 0),
                  (t.loadYoutubeAPI = function () {
                      if (!1 === rey.___.youTubeApiLoaded) {
                          const e = document.createElement("script");
                          (e.type = "text/javascript"),
                              (e.onload = () => {
                                  rey.___.youTubeApiLoaded = !0;
                              }),
                              (e.src = "https://www.youtube.com/iframe_api"),
                              document.head.appendChild(e);
                      }
                  }),
                  (t.calcYTVideosSize = function (e) {
                      var t = e.parentElement,
                          i = t.offsetWidth,
                          o = t.offsetHeight,
                          a = "16:9".split(":"),
                          s = a[0] / a[1],
                          r = i / o > s;
                      return { width: r ? i : o * s, height: r ? i / s : o };
                  }),
                  (t.changeYTVideoSize = function (e) {
                      var t = this.calcYTVideosSize(e);
                      (e.style.width = t.width + "px"),
                          (e.style.height = t.height + "px");
                  }),
                  (t.init = function () {
                      this.config.containers.forEach((e, t) => {
                          e
                              .querySelectorAll(
                                  ".rey-hostedVideo[data-video-params]"
                              )
                              .forEach((e) => {
                                  if (
                                      rey.vars.is_desktop ||
                                      !e.classList.contains(
                                          "elementor-hidden-mobile"
                                      )
                                  ) {
                                      var i = JSON.parse(
                                              e.getAttribute(
                                                  "data-video-params"
                                              ) || "{}"
                                          ),
                                          o = void 0 !== i.src && i.src;
                                      (o &&
                                          rey.validation.matchYoutubeUrl(o)) ||
                                          (this._players.hosted[t] = {
                                              el: e,
                                              playerVars: i,
                                          });
                                  }
                              }),
                              e
                                  .querySelectorAll(
                                      ".rey-youtubeVideo[data-video-params]"
                                  )
                                  .forEach((e) => {
                                      if (
                                          rey.vars.is_desktop ||
                                          !e.classList.contains(
                                              "elementor-hidden-mobile"
                                          )
                                      ) {
                                          var i =
                                              e.getAttribute("data-video-id") ||
                                              "";
                                          if (i) {
                                              if (
                                                  rey.validation.isValidURL(i)
                                              ) {
                                                  if (
                                                      !rey.validation.matchYoutubeUrl(
                                                          i
                                                      )
                                                  )
                                                      return;
                                                  i =
                                                      rey.validation.matchYoutubeUrl(
                                                          i
                                                      );
                                              }
                                              if (
                                                  ((this._players.youtube[t] = {
                                                      el: e.children[0],
                                                      videoId: i,
                                                      playerVars: JSON.parse(
                                                          e.getAttribute(
                                                              "data-video-params"
                                                          ) || "{}"
                                                      ),
                                                  }),
                                                  e.nextElementSibling &&
                                                      e.nextElementSibling.classList.contains(
                                                          "rey-youtubePreview"
                                                      ))
                                              ) {
                                                  var o = rey.dom.children(
                                                      e.nextElementSibling,
                                                      "img"
                                                  );
                                                  o.length &&
                                                      120 ===
                                                          o[0].naturalWidth &&
                                                      o[0].setAttribute(
                                                          "src",
                                                          o[0].getAttribute(
                                                              "data-default-src"
                                                          )
                                                      );
                                              }
                                          }
                                      }
                                  });
                      });
                      var e = Object.keys(this._players.youtube).length,
                          t = Object.keys(this._players.hosted).length;
                      (t || e) &&
                          (t &&
                              (this.config.lazyLoad || this.add_html5_videos()),
                          e &&
                              (this.config.lazyLoad ||
                                  this.add_youtube_videos()),
                          this.events());
                  }),
                  (t.events = function () {
                      window.addEventListener(
                          "resize",
                          rey.util.debounce(() => {
                              Object.keys(this.videos.youtube).forEach((e) => {
                                  void 0 !== this.videos.youtube[e] &&
                                      void 0 !== this.videos.youtube[e].a &&
                                      this.videos.youtube[e].a &&
                                      this.changeYTVideoSize(
                                          this.videos.youtube[e].a
                                      );
                              });
                          }, 600)
                      );
                  }),
                  (t.add_youtube_videos = function () {
                      this.loadYoutubeAPI(),
                          "undefined" == typeof YT ||
                          ("object" == typeof YT && !YT.loaded)
                              ? setTimeout(() => {
                                    this.add_youtube_videos();
                                }, 350)
                              : Object.keys(this._players.youtube).forEach(
                                    (e) => {
                                        if (
                                            void 0 !== this._players.youtube[e]
                                        ) {
                                            var t = this._players.youtube[e];
                                            this.videos.youtube[e] =
                                                new YT.Player(t.el, {
                                                    videoId: t.videoId,
                                                    playerVars: t.playerVars,
                                                    events: {
                                                        onStateChange: (e) => {
                                                            e.target
                                                                .getIframe()
                                                                .parentNode.setAttribute(
                                                                    "data-player-state",
                                                                    e.data
                                                                );
                                                        },
                                                        onReady: (t) => {
                                                            this.changeYTVideoSize(
                                                                t.target.getIframe()
                                                            ),
                                                                this.config
                                                                    .lazyLoad
                                                                    ? ("object" ==
                                                                          typeof this
                                                                              .currentIndex &&
                                                                          -1 !==
                                                                              this.currentIndex.indexOf(
                                                                                  parseInt(
                                                                                      e
                                                                                  )
                                                                              )) ||
                                                                      parseInt(
                                                                          e
                                                                      ) ==
                                                                          this
                                                                              .currentIndex
                                                                        ? t.target.playVideo()
                                                                        : t.target.pauseVideo()
                                                                    : t.target.playVideo(),
                                                                setInterval(
                                                                    () => {
                                                                        t.target.getCurrentTime() >=
                                                                            t.target.getDuration() -
                                                                                0.5 &&
                                                                            t.target.seekTo(
                                                                                0
                                                                            );
                                                                    },
                                                                    250
                                                                );
                                                        },
                                                    },
                                                });
                                        }
                                    }
                                );
                  }),
                  (t.add_html5_videos = function () {
                      Object.keys(this._players.hosted).forEach((e) => {
                          if (void 0 !== this._players.hosted[e]) {
                              var t = this._players.hosted[e],
                                  i = document.createElement("video");
                              Object.keys(t.playerVars).forEach((e) => {
                                  i.setAttribute(e, t.playerVars[e]);
                              }),
                                  (i.muted = !0),
                                  (i.oncanplay = (i) => {
                                      this.config.lazyLoad
                                          ? "object" ==
                                                typeof this.currentIndex &&
                                            -1 !==
                                                this.currentIndex.indexOf(
                                                    parseInt(e)
                                                )
                                              ? i.target.play()
                                              : parseInt(e) == this.currentIndex
                                              ? i.currentTarget.play()
                                              : i.currentTarget.pause()
                                          : i.currentTarget.play(),
                                          t.el.setAttribute(
                                              "data-player-state",
                                              1
                                          ),
                                          (this.videos.hosted[e] =
                                              i.currentTarget);
                                  }),
                                  t.el.append(i);
                          }
                      }),
                          (this.htmlVideosLoaded = !0);
                  }),
                  (t.changeState = function (e, i) {
                      t.currentIndex = e;
                      var o = {
                              hosted: {
                                  play: "play",
                                  pause: "pause",
                                  method: "hostedChangeState",
                              },
                              youtube: {
                                  play: "playVideo",
                                  pause: "pauseVideo",
                                  method: "youtubeChangeState",
                              },
                          },
                          a = (e) => {
                              Object.keys(o).forEach((t) => {
                                  var a = o[t];
                                  void 0 !== this._players[t][e] &&
                                      this[a.method](e, a[i]);
                              });
                          };
                      "object" == typeof e
                          ? Object.keys(e).forEach((t) => {
                                a(e[t]);
                            })
                          : a(e);
                  }),
                  (t.hostedChangeState = function (e, t) {
                      this.htmlVideosLoaded || !this.config.lazyLoad
                          ? void 0 !== this.videos.hosted[e] &&
                            this.videos.hosted[e][t]()
                          : this.add_html5_videos();
                  }),
                  (t.youtubeChangeState = function (e, t) {
                      var i =
                          Object.keys(this.videos.youtube).length &&
                          void 0 !== this.videos.youtube[e];
                      !this.config.lazyLoad || i
                          ? i &&
                            void 0 !== t &&
                            this.videos.youtube[e].hasOwnProperty(t) &&
                            this.videos.youtube[e][t]()
                          : this.add_youtube_videos();
                  }),
                  (t.pauseAll = function () {}),
                  t
              );
          })
        : console.error("`rey` is undefined so this script will not run.");
})();
