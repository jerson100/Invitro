const controller = new ScrollMagic.Controller();
var timelineInitial = new TimelineLite(),
    tweenInitial1 = TweenLite.to(".recommendation .col-half:nth-child(1)", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
    tweenInitial1_1 = TweenLite.to(".recommendation .col-half:nth-child(2)", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
function timeline(e) {
    var t = 0,
        a = 0;
    e.matches ? ((t = 300), (a = 1e3)) : ((t = 700), (a = 2e3));
    var n = new TimelineLite(),
        i = TweenLite.to(".clients h2", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        o = TweenLite.to(".clients p", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        r = TweenLite.to(".card_client", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
    n.add(i).add(o, "-=1").add(r, "-=1"), new ScrollMagic.Scene({ triggerElement: ".clients", duration: t, triggerHook: 1, stagger: { each: 0 } }).setTween(n).addTo(controller);
    var l = new TimelineLite(),
        s = TweenLite.staggerTo(".logos_img div", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }, 0.2);
    l.add(s), new ScrollMagic.Scene({ triggerElement: ".logos_img", duration: a, triggerHook: 1, stagger: { each: 0 } }).setTween(l).addTo(controller);
}
timelineInitial.add(tweenInitial1).add(tweenInitial1_1, "-=1");
if(!window.matchMedia("(max-width: 675px)").matches){
timeline(window.matchMedia("(max-height: 675px)"));
}