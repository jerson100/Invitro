function dark_header() {
    document.querySelector("header").classList.add("dark");
}
window.onpaint = dark_header();
var sliders = ["#serviceshero", "#splide_web"];
sliders.forEach((e) => {
    new Splide(e, { type: "fade", perPage: 1, perMove: 1, pauseOnHover: !1, pauseOnFocus: !1, rewind: !0, autoplay: !0, interval: 5e3, pagination: !1, arrows: !1 }).mount();
});
const controller = new ScrollMagic.Controller();
var timelineInitial = new TimelineLite(),
    tweenInitial1 = TweenLite.to(".text_title", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
    tweenInitial1_1 = TweenLite.to(".page_crumb", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
    tweenInitial1_2 = TweenLite.to(".page_content > p", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
    tweenInitial1_3 = TweenLite.to(".page_content > a", 1, { ease: Power1.easeInOut, opacity: 1 }),
    tweenInitial1_4 = TweenLite.to(".page_img_hero .splide", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
function timeline(e) {
    var t = 0,
        a = 0;
    e.matches ? ((t = 500), (a = 400)) : ((t = 750), (a = 500));
    var r = new TimelineLite(),
        n = TweenLite.to(".features .row:nth-child(1) .box_content", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        o = TweenLite.to(".features .row:nth-child(1) .box_image", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
    r.add(n).add(o, "-=1"), new ScrollMagic.Scene({ triggerElement: ".features", duration: 250, triggerHook: 0, stagger: { each: 0 } }).setTween(r).setPin(".features").addTo(controller);
    var s = new TimelineLite(),
        i = TweenLite.to(".features .row:nth-child(2) .box_content", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        l = TweenLite.to(".features .row:nth-child(2) .box_image", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
    s.add(i).add(l, "-=1"), new ScrollMagic.Scene({ triggerElement: ".features .row:nth-child(2)", duration: 250, triggerHook: 0, stagger: { each: 0 } }).setTween(s).setPin(".features .row:nth-child(2)").addTo(controller);
    var d = new TimelineLite(),
        c = TweenLite.to(".features .row:nth-child(3) .box_content", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        $ = TweenLite.to(".features .row:nth-child(3) .box_image", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
    d.add(c).add($, "-=1"), new ScrollMagic.Scene({ triggerElement: ".features .row:nth-child(3)", duration: 250, triggerHook: 0, stagger: { each: 0 } }).setTween(d).setPin(".features .row:nth-child(3)").addTo(controller);
    var _ = new TimelineLite(),
        g = TweenLite.to(".offers h2", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        u = TweenLite.to(".offers li", 1, { ease: Power1.easeInOut, opacity: 1 });
    _.add(g).add(u, "-=0.5"), new ScrollMagic.Scene({ triggerElement: ".offers", duration: t, triggerHook: 1, stagger: { each: 0 } }).setTween(_).addTo(controller);
    var w = new TimelineLite(),
        h = TweenLite.to(".portafolio h2", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        f = TweenLite.to(".portafolio .proyecto", 1, { ease: Power1.easeInOut, opacity: 1 });
    w.add(h).add(f, "+=0.5"), new ScrollMagic.Scene({ triggerElement: ".portafolio", duration: 700, triggerHook: 1, stagger: { each: 0 } }).setTween(w).addTo(controller);
    var p = new TimelineLite(),
        m = TweenLite.to(".i_want_my_web", 1, { ease: Power1.easeInOut, opacity: 1 });
    p.add(m), new ScrollMagic.Scene({ triggerElement: ".i_want_my_web", duration: a, triggerHook: 1, stagger: { each: 0 } }).setTween(p).addTo(controller);
}
if(!window.matchMedia("(max-width: 675px)").matches){
    timeline(window.matchMedia("(max-height: 675px)"));
}
