const controller = new ScrollMagic.Controller();
var timelineInitial = new TimelineLite(),
    tweenInitial1 = TweenLite.to(".we_can_help_you h1", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
    tweenInitial1_1 = TweenLite.staggerTo(".we_can_help_you .toleft", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }, 0.2),
    tweenInitial1_2 = TweenLite.staggerTo(".reasons > div", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }, 0.2),
    tweenInitial1_3 = TweenLite.to(".map", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
function timeline(e) {
    var t = new TimelineLite(),
        a = TweenLite.to(".txt", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
        n = TweenLite.to(".hand", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 });
    t.add(a).add(n, "-=1");
    var i = 0;
    (i = e.matches ? 350 : 800), new ScrollMagic.Scene({ triggerElement: ".contactanos", duration: i, triggerHook: 1, stagger: { each: 0 } }).setTween(t).addTo(controller);
}
timelineInitial.add(tweenInitial1).add(tweenInitial1_1, "-=1").add(tweenInitial1_2, "-=1").add(tweenInitial1_3, "-=1");
if(!window.matchMedia("(max-width: 675px)").matches){
    timeline(window.matchMedia("(max-height: 675px)"));
}