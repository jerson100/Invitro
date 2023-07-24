<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/CSSPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>

<script>
    if(document.querySelector('.tell_us')){
        var timelineTU = new TimelineLite(),
            tween_ti = TweenLite.to('.tell_us .col-custom-left',1,{ease: Power1.easeInOut,transform: 'translate(0,0)',opacity:1}),
            tween_td = TweenLite.to('.tell_us .col-custom-right',1,{ease: Power1.easeInOut,transform: 'translate(0,0)',opacity:1});

        timelineTU
            .add(tween_ti)
            .add(tween_td, "-=1")

        var duration = 0;
        if(window.matchMedia("(max-height: 675px)").matches){
            duration = 300
        }else{
            duration = 700
        }

        var scene1 = new ScrollMagic.Scene({
            triggerElement: '.tell_us',
            duration: duration,
            triggerHook: 1,
            stagger: {
                each: 0
            }
        })
        .setTween(timelineTU)
        .addTo(new ScrollMagic.Controller())
    }

    if(document.querySelector('.experiences')){
        var timeline5 = new TimelineLite(),
            tween5 = TweenLite.to('.experiences h2',1,{ease: Power1.easeInOut,transform:'translate(0,0)',opacity:1}),
            tween5_1 = TweenLite.to('.card_experiences',1,{ease: Power1.easeInOut,transform:'translate(0,0)',opacity:1});

        timeline5.add(tween5).add(tween5_1)

        var duration5 = 0;
        if(window.matchMedia("(max-height: 675px)").matches){
            duration5 = 475;
        }else{
            duration5 = 750;
        }

        var scene5 = new ScrollMagic.Scene({
            triggerElement: '.experiences',
            duration: duration5,
            triggerHook: 1,
        })
        .setTween(timeline5)
        // .addIndicators()
        .addTo(new ScrollMagic.Controller())
    }

    if(document.querySelector('header')){
        var timeline_header = new TimelineLite(),
            header = TweenLite.to('header',.5,{ease: Power1.easeInOut,transform:'translate(0,0)',opacity:1,translateY:0});

        timeline_header.add(header)
    }
</script>