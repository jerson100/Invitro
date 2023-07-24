function blue_header() {
    document.querySelector("header").classList.add("blue");
}
(window.onpaint = blue_header()),
    document.querySelector("#expertise") &&
        new Splide("#expertise", { type: "loop", drag: "free", focus: "center", perPage: 6, pauseOnHover: !1, pauseOnFocus: !1, rewind: !0, autoScroll: { speed: 1 }, pagination: !1, arrows: !1, breakpoints: { 768: { perPage: 3 } } }).mount(
            window.splide.Extensions
        );
const controller = new ScrollMagic.Controller();
var timelineInitial = new TimelineLite(),
    tweenInitial1 = TweenLite.to(".expertise_hero .page_crumb", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
    tweenInitial2 = TweenLite.to(".expertise_hero .page_title", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
    tweenInitial3 = TweenLite.to(".expertise_hero .description", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
    tweenInitial4 = TweenLite.to(".expertise_hero a.custom", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
function timeline(e) {
    var t = 0;
    t = e.matches ? 500 : 750;
    var a = new TimelineLite(),
        r = TweenLite.to(".features .row:nth-child(1) .box_content", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        n = TweenLite.to(".features .row:nth-child(1) .box_image", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
    a.add(r).add(n, "-=1"), new ScrollMagic.Scene({ triggerElement: ".features", duration: 250, triggerHook: 0, stagger: { each: 0 } }).setTween(a).setPin(".features").addTo(controller);
    var o = new TimelineLite(),
        s = TweenLite.to(".companies h2", 1, { ease: Power1.easeInOut, color: "#3333CC" }),
        i = TweenLite.to("body", 1, { ease: Power1.easeInOut, background: "white" });
    o.add(s).add(i, "-=1"), new ScrollMagic.Scene({ triggerElement: ".companies", duration: 500, triggerHook: 0.5, stagger: { each: 0 } }).setTween(o).addTo(controller);
    var l = new TimelineLite(),
        c = TweenLite.to(".features .row:nth-child(2) .box_content", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        d = TweenLite.to(".features .row:nth-child(2) .box_image", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
    l.add(c).add(d, "-=1"), new ScrollMagic.Scene({ triggerElement: ".features .row:nth-child(2)", duration: 250, triggerHook: 0, stagger: { each: 0 } }).setTween(l).setPin(".features .row:nth-child(2)").addTo(controller);
    var u = new TimelineLite(),
        $ = TweenLite.to(".features .row:nth-child(3) .box_content", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        g = TweenLite.to(".features .row:nth-child(3) .box_image", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
    u.add($).add(g, "-=1"), new ScrollMagic.Scene({ triggerElement: ".features .row:nth-child(3)", duration: 250, triggerHook: 0, stagger: { each: 0 } }).setTween(u).setPin(".features .row:nth-child(3)").addTo(controller);
    var h = new TimelineLite(),
        _ = TweenLite.to(".offers h2", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        p = TweenLite.to(".offers li", 1, { ease: Power1.easeInOut, opacity: 1 });
    h.add(_).add(p, "-=0.5"), new ScrollMagic.Scene({ triggerElement: ".offers", duration: t, triggerHook: 1, stagger: { each: 0 } }).setTween(h).addTo(controller);
}

if(!window.matchMedia("(max-width: 675px)").matches){
    timeline(window.matchMedia("(max-height: 675px)"));
}
