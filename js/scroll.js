$(document).ready(function () {
    var e = 0;
    ("https://invitro.pe/revision/nueva_web/desarrollo-y-diseno-web/" == window.location.href ||
        "https://invitro.pe/revision/nueva_web/publicidad-digital/" == window.location.href ||
        "https://invitro.pe/revision/nueva_web/branding-y-diseno-grafico/" == window.location.href ||
        "https://invitro.pe/revision/nueva_web/healthcare/" == window.location.href ||
        "https://invitro.pe/revision/nueva_web/b2b/" == window.location.href ||
        "https://invitro.pe/revision/nueva_web/e-commerce-retail/" == window.location.href ||
        "https://invitro.pe/revision/nueva_web/administracion-de-redes-sociales/" == window.location.href) &&
        (e = 175),
        $("#todown").on("click", function (o) {
            var i = $(".scn_sec").offset().top + e;
            $("html,body").stop().animate({ scrollTop: i }, 10);
        }),
        $("a.volver-arriba").on("click", function (e) {
            e.preventDefault(), 0 != $(window).scrollTop() && $("html,body").stop().animate({ scrollTop: 0 }, 50);
        }),
        $("a.scroll-suave").on("click", function (e) {
            e.preventDefault();
            var o = $($(this).attr("href")).offset().top;
            $("html,body").stop().animate({ scrollTop: o }, 50);
        });
});
