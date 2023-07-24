new Splide('#swiperleft', {
    type: 'loop',
    drag: 'free',
    focus: 'center',
    perPage: 8,
    pauseOnHover: false,
    pauseOnFocus: false,
    rewind: true,
    autoScroll: {speed: 1,},
    pagination: false,
    arrows: false,
    breakpoints: {
        1400:{
            perPage: 7
        },
        768: {
            perPage: 5
        },
        576: {
            perPage: 3
        }
    }
}).mount(window.splide.Extensions);

new Splide('#swiperright', {
    type: 'loop',
    drag: 'free',
    focus: 'center',
    perPage: 8,
    direction: 'rtl',
    pauseOnHover: false,
    pauseOnFocus: false,
    rewind: true,
    autoScroll: {speed: 1,},
    pagination: false,
    arrows: false,
    breakpoints: {
        1400:{
            perPage: 7
        },
        768: {
            perPage: 5
        },
        576: {
            perPage: 3
        }
    }
}).mount(window.splide.Extensions);

new Splide( '#splidearticles', {
    type: 'slide',
    perPage: 2,
    pagination: false,
    arrows: false,
    clones: false,
    rewind: true,
    gap: '1rem',
    padding: {
        right: '4rem'
    },
    breakpoints: {
        1400: {
            padding: {
                right: '2.5rem'
            }       
        },
        1200: {
            perPage: 2,
            gap: '0.9rem',
            padding: {
                right: '2rem'
            }
        },
        992: {
            perPage: 1,
            gap: '0.9rem',
            padding: {
                right: '3rem'
            }
        },
        768: {
            perPage: 2,
            gap: '0.9rem',
            padding: {
                right: '1.5rem'
            }
        },
        576: {
            perPage: 1,
            gap: '1rem',
            padding: {
                right: '2.5rem'
            }
        }
    }
}).mount();


// const tl = gsap.timeline({defaults: {ease: "power1.out"}});
// tl.to('.text_title', {y:'0%', duration:1.5});

// to -> staggerTo --- If you want to have multiple items appear one after the other, you can use staggerTo


function heroView(x){
    if(x.matches){
        var timelineInitial = new TimelineLite(),
            tweenInitial1 = TweenLite.to('.text_title',1,{ease: Power1.easeInOut,transform: 'translate(0,0)',opacity:1});

        timelineInitial.add(tweenInitial1)
    }
}

function timeline(x){

    var trigger1 = 0,
        duration2 = 0,
        duration3 = 0,
        duration4 = 0,
        duration5 = 0;
    if(x.matches){
        duration2 = 400;duration3 = 525;duration4 = 400;duration5 = 400;trigger1 = 1;
    }else{
        duration2 = 1000;duration3 = 800;duration4 = 400;duration5 = 600;trigger1 = 0.5;
    }

    const controller = new ScrollMagic.Controller();
    
    
    //----------------------------------------------------

    var timeline_bg = new TimelineLite(),
        tween_bg = TweenLite.staggerTo('.bg_animated',1,{ease: Power1.easeInOut,opacity:0.1},0.1);

    timeline_bg.add(tween_bg)

    var scene_bg = new ScrollMagic.Scene({
        triggerElement: 'main .carousel',
        duration: 250,
        triggerHook: 0.5
    })
    .setTween(timeline_bg)
    //.addIndicators()
    .addTo(controller)

    //----------------------------------------------------

    var timeline1 = new TimelineLite(),
        tween1 = TweenLite.to('body',1,{ease:Power1.easeInOut,background:'#121212'}),
        tween1_1 = TweenLite.to('.change_color',1,{ease: Power1.easeInOut,color: 'white',stroke: 'white',fill: 'white'}),
        tween1_2 = TweenLite.to('header',1,{ease: Power1.easeInOut,background:'#121212'}),
        tween1_3 = TweenLite.to('.whover',1,{ease: Power1.easeInOut,boxShadow: '0px 8px 7px 0px rgb(0 0 0 / 50%)',background:'transparent linear-gradient(180deg, #121212 10%, #020202 90%) 0% 0% no-repeat padding-box'}),
        tween1_4 = TweenLite.to('.whover a',1,{ease: Power1.easeInOut,color:'white'}),
        tween1_5 = TweenLite.to('.shadow_white',1,{ease: Power1.easeInOut,opacity:0}),
        tween1_6 = TweenLite.to('.shadow_black',1,{ease: Power1.easeInOut,opacity:1});
    //var tween1_7 = TweenLite.to('.bg_animated',1,{ease: Power1.easeInOut,opacity:0});

    timeline1
        .add(tween1_5)
        .add(tween1)
        .add(tween1_6)
        .add(tween1_2, "-=1.9")
        .add(tween1_1, "-=1.9")
        .add(tween1_3, "-=1.9")
        .add(tween1_4, "-=1.9")

    var scene1 = new ScrollMagic.Scene({
        triggerElement: '.able',
        duration: 450,
        triggerHook: trigger1,
        stagger: 0
    })
    .setTween(timeline1)
    //.addIndicators()
    .addTo(controller)

    //----------------------------------------------------

    var timeline2 = new TimelineLite(),
        tween2 = TweenLite.to('.ellipse',1,{ease: Power1.easeInOut,transform: 'translate(-50%, 0%) translate3d(0px, 0px, 0px) scale(1.5, 1.5)'}),
        tween2_1 = TweenLite.to('.change_color',1,{ease: Power1.easeInOut,color: 'black',stroke: 'black',fill: 'black'}),
        tween2_2 = TweenLite.to('header',1,{ease: Power1.easeInOut,background:'#ffffff'}),
        tween2_3 = TweenLite.to('.whover',1,{ease: Power1.easeInOut,boxShadow: '0px 8px 7px #00000014',background:'transparent linear-gradient(180deg, #FFFFFF 10%, #F2F2F2 90%) 0% 0% no-repeat padding-box'}),
        tween2_4 = TweenLite.to('.whover a',1,{ease: Power1.easeInOut,color:'black'}),
        tween2_5 = TweenLite.to('.choose',1,{ease: Power1.easeInOut,background:'white'});

    timeline2
        .add(tween2)
        .add(tween2_5)
        .add(tween2_2, "-=2.1")
        .add(tween2_3, "-=2.1")
        .add(tween2_1, "-=2.1")
        .add(tween2_4, "-=2.1")

    var scene2 = new ScrollMagic.Scene({
        triggerElement: '.choose',
        duration: duration2,
        triggerHook: 0,
        stagger: 0
    })
    .setTween(timeline2)
    // .addIndicators()
    .addTo(controller)

    //----------------------------------------------------

    var timeline3 = new TimelineLite(),
        tween3 = TweenLite.to('.leftroright',1,{ease: Power1.easeInOut,transform: 'translate(0,0)'});

    timeline3.add(tween3)

    var scene3 = new ScrollMagic.Scene({
        triggerElement: '.able',
        duration: duration3,
        triggerHook: 1,
        stagger: 0
    })
    .setTween(timeline3)
    .addTo(controller)

    //----------------------------------------------------

    var timeline3_1 = new TimelineLite(),
        tween3_1 = TweenLite.to('.righttoleft',1,{ease: Power1.easeInOut,transform: 'translate(0,0)'});

    timeline3_1.add(tween3_1)

    var scene3_1 = new ScrollMagic.Scene({
        triggerElement: '.able',
        duration: duration3,
        triggerHook: 1,
        stagger: 0
    })
    .setTween(timeline3_1)
    .addTo(controller)

    //---------------------------------------------------

    var timeline4 = new TimelineLite(),
        tween4 = TweenLite.staggerTo('.card',1,{ease: Power1.easeInOut,transform: 'translate(0,0)'},0.125);

    timeline4.add(tween4)

    var scene4 = new ScrollMagic.Scene({
        triggerElement: '.choose .grid',
        duration: duration4,
        triggerHook: 1
    })
    .setTween(timeline4)
    // .setPin('.choose')
    // .addIndicators()
    .addTo(controller)

    //---------------------------------------------------
    
    var timeline5 = new TimelineLite(),
        tween5 = TweenLite.staggerTo('.blog_card',1,{ease: Power1.easeInOut,opacity:1},0.125);

    timeline5.add(tween5)

    var scene5 = new ScrollMagic.Scene({
        triggerElement: '.box_blog_cards',
        duration: duration5,
        triggerHook: 1
    })
    .setTween(timeline5)
    .addTo(controller)

    //---------------------------------------------------
}

if(!window.matchMedia("(max-width: 675px)").matches){
    timeline(window.matchMedia("(max-height: 675px)"))
    heroView(window.matchMedia("(min-height: 800px)"))
}