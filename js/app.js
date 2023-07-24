var contenedores,loaderInitial=document.querySelector(".loader.rtl"),loaderFinal=document.querySelector(".loader.ltr"),enlaces_exit=Array.from(document.querySelectorAll("a.exit"));window.addEventListener("load",function(){loaderInitial.classList.add("scape"),setTimeout(function(){loaderInitial.parentElement.removeChild(loaderInitial)},4e3)}),enlaces_exit.forEach(e=>{e.addEventListener("click",e=>{e.preventDefault(),loaderFinal.classList.add("scape");var r=e.currentTarget.getAttribute("href");setTimeout(function(){window.location.href=r},1e3)})}),document.querySelector("#open").addEventListener("click",e=>{document.body.classList.toggle("menu-open")});var footer=document.querySelector("footer"),coords=footer.getBoundingClientRect();window.addEventListener("scroll",e=>{var r=document.querySelector("header"),t=document.querySelector("a.whatsapp");window.scrollY>650?r.classList.add("small"):r.classList.remove("small"),window.scrollY>1200?t.classList.add("visible"):t.classList.remove("visible")}),document.querySelector(".tabs_box")&&Array.from(document.querySelectorAll(".tabs_box")).forEach(e=>{var r=e.querySelectorAll(".tab"),t=e.querySelectorAll(".image"),a=1;function l(){Array.from(r).forEach(e=>{e.classList.remove("active")}),Array.from(t).forEach(e=>{e.classList.remove("active")})}function o(){e.querySelector("video")&&e.querySelectorAll("video").forEach(e=>{e.pause()})}Array.from(r).forEach(r=>{r.addEventListener("mouseover",r=>{l(),o();var t=r.currentTarget;t.classList.add("active"),a=parseInt(t.classList[1].toString().replace("tab_","")),e.querySelector(`.image.image_${a}`).classList.add("active")})})});

document.querySelector("#splide_generator")&&new Splide("#splide_generator",{type:"fade",perPage:1,perMove:1,pauseOnHover:!1,pauseOnFocus:!1,rewind:!0,autoplay:!0,interval:5e3,pagination:!1,arrows:!1}).mount(),document.querySelector("#clients")&&new Splide("#clients",{type:"loop",drag:"free",focus:"center",perPage:5,pauseOnHover:!1,pauseOnFocus:!1,rewind:!0,autoScroll:{speed:1},pagination:!1,arrows:!1,breakpoints:{1200:{perPage:4},768:{perPage:3}}}).mount(window.splide.Extensions);

var summary1=document.querySelectorAll("details summary")[0],summary2=document.querySelectorAll("details summary")[1];summary1.addEventListener("click",e=>{if(summary2.parentElement.open){summary2.click();return}}),summary2.addEventListener("click",e=>{if(summary1.parentElement.open){summary1.click();return}});

if(document.querySelector('#splide_gallery')){
    new Splide( '#splide_gallery', {
        type: 'slide',
        perPage: 3,
        perMove: 1,
        arrows: false,
        pagination: false,
        gap: '5%',
        pauseOnHover: false,
        pauseOnFocus: false,
    }).mount(window.splide.Extensions);
}