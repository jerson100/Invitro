function skyblue_header() {
    document.querySelector("header").classList.add("skyblue");
}
window.onpaint = skyblue_header();
const controller = new ScrollMagic.Controller();
var timelineInitial = new TimelineLite(),
    tweenInitial1 = TweenLite.to(".blog .content h1", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }),
    tweenInitial1_1 = TweenLite.staggerTo(".blog .content p", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }, 0.1);
function timeline(e) {
    var t = 0;
    t = e.matches ? 250 : 700;
    var a = new TimelineLite(),
        s = TweenLite.staggerTo(".tabs_blog .blog_card", 1, { ease: Power1.easeInOut, transform: "translate(0,0)", opacity: 1 }, 0.2),
        r = TweenLite.to("body", 1, { ease: Power1.easeInOut, background: "white" });
    a.add(s).add(r, "-=1"), new ScrollMagic.Scene({ triggerElement: ".tabs_blog .grid", duration: t, triggerHook: 1, stagger: { each: 0 } }).setTween(a).addTo(controller);
}
timelineInitial.add(tweenInitial1).add(tweenInitial1_1, "-=1");
if(!window.matchMedia("(max-width: 675px)").matches){
    timeline(window.matchMedia("(max-height: 675px)"));
}
var tabs = Array.from(document.querySelectorAll(".tabs button")),
    entries = Array.from(document.querySelectorAll(".blog_card")),
    entries_container = document.querySelector(".tabs_blog .grid");
function filtrado(e) {
    if ("all" == e) {
        entries.forEach((e) => {
            e.classList.contains("desactived") && e.classList.remove("desactived");
        });
        return;
    }
    entries.forEach((e) => {
        e.classList.contains("desactived") || e.classList.add("desactived");
    }),
        Array.from(document.querySelectorAll(`.blog_card.${e}`)).forEach((e) => {
            e.classList.remove("desactived");
        });
}
tabs.forEach((e) => {
    e.addEventListener("click", (e) => {
        e.preventDefault(),
            document.querySelector(".tabs").classList.add("filtro_selected"),
            entries_container.classList.add("filtro_selected"),
            tabs.forEach((e) => {
                e.classList.contains("active") && e.classList.remove("active");
            });
        var t = e.currentTarget;
        t.classList.add("active"), filtrado(t.classList[0]);
    });
});
