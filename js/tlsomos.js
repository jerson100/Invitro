const controller = new ScrollMagic.Controller();
var timelineInitial = new TimelineLite(),
    tweenInitial1 = TweenLite.staggerTo(".photos .photo", 1, { ease: Power1.easeInOut, opacity: 1, scale: 1, rotate: 0 }, 0.05),
    tweenInitial1_1 = TweenLite.to(".photos .txt", 1, { ease: Power1.easeInOut, transform: "none", opacity: 1 });
function timeline(e) {
    var t = 0,
        a = 0;
    e.matches ? ((t = 250), (a = 175)) : ((t = 500), (a = 350));
    var r = new TimelineLite(),
        o = TweenLite.to(".img_l", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        n = TweenLite.to(".img_r", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        i = TweenLite.to("body", 1, { ease: Power1.easeInOut, background: "white" }),
        s = TweenLite.to(".photos h1", 1, { ease: Power1.easeInOut, transform: "translate(-200px,0)", opacity: 1 }),
        l = TweenLite.to(".photos p", 1, { ease: Power1.easeInOut, transform: "translate(-200px,0)", opacity: 1 }),
        c = TweenLite.staggerTo(".photos .photo", 1, { ease: Power1.easeInOut, opacity: 0 }, 0.025);
    r.add(i).add(c, "-=1").add(s, "-=1").add(l, "-=1").add(o, "-=1").add(n, "-=1"), new ScrollMagic.Scene({ triggerElement: ".years", duration: t, triggerHook: 1, stagger: { each: 0 } }).setTween(r).addTo(controller);
    var d = new TimelineLite(),
        g = TweenLite.to(".why_invitro .col-half:nth-child(1)", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        _ = TweenLite.to(".why_invitro .col-half:nth-child(2)", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
    d.add(g).add(_, "-=1"), new ScrollMagic.Scene({ triggerElement: ".why_invitro", duration: a, triggerHook: 0.5, stagger: { each: 0 } }).setTween(d).addTo(controller);
    var $ = new TimelineLite(),
        m = TweenLite.to(".awards .col-custom-left", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        p = TweenLite.to(".awards .col-custom-right", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
    $.add(m).add(p, "-=1"), new ScrollMagic.Scene({ triggerElement: ".team", duration: a, triggerHook: 0.5, stagger: { each: 0 } }).setTween($).addTo(controller);
    var u = new TimelineLite(),
        h = TweenLite.staggerTo(".member_card", 1, { ease: Power1.easeInOut, scale: 1, opacity: 1 }, 1.2);
    u.add(h), new ScrollMagic.Scene({ triggerElement: ".meet_us", duration: 1400, triggerHook: 0.5, stagger: { each: 0 } }).setTween(u).addTo(controller);
    var w = new TimelineLite(),
        y = TweenLite.to(".meet_us h2", 1, { ease: Power1.easeInOut, opacity: 1 }),
        f = TweenLite.to(".meet_us p", 1, { ease: Power1.easeInOut, opacity: 1 });
    w.add(y, "-=1").add(f, "-=1"), new ScrollMagic.Scene({ triggerElement: ".members", duration: 500, triggerHook: 1, stagger: { each: 0 } }).setTween(w).addTo(controller);
}
function blue_header() {
    document.querySelector("header").classList.add("blue");
}
function splitScroll(e) {
    if (e.matches) {
        let t = new ScrollMagic.Controller();
        new ScrollMagic.Scene({ duration: "200%", triggerElement: ".trigger_interests_2", triggerHook: 0 }).setPin(".trigger_interests_2").addTo(t),
            new ScrollMagic.Scene({ duration: "200%", triggerElement: ".trigger_in_love_1", triggerHook: 0 }).setPin(".trigger_in_love_1").addTo(t);
    }
}
timelineInitial.add(tweenInitial1).add(tweenInitial1_1, "-=1");
if(!window.matchMedia("(max-width: 675px)").matches){
    timeline(window.matchMedia("(max-height: 675px)"));
}
    (window.onpaint = blue_header()),
    document.querySelector("#splidewhy") && new Splide("#splidewhy", { type: "fade", perPage: 1, perMove: 1, pauseOnHover: !1, pauseOnFocus: !1, rewind: !0, autoplay: !0, interval: 2500, pagination: !1, arrows: !1 }).mount(),
    gsap
        .timeline({ scrollTrigger: { trigger: ".trigger_interests_1", start: "top center", end: "bottom center", markers: !1, scrub: !0 } })
        .from(".bi_1", { opacity: 0 })
        .from(".bi_2", { opacity: 0 })
        .from(".bi_3", { opacity: 0 }),
    gsap
        .timeline({ scrollTrigger: { trigger: ".trigger_in_love_2", start: "top center", end: "bottom center", markers: !1, scrub: !0 } })
        .from(".bil_1", { opacity: 0 })
        .from(".bil_2", { opacity: 0 })
        .from(".bil_3", { opacity: 0 });
var querie = window.matchMedia("(min-width: 768px)");
splitScroll(querie);
