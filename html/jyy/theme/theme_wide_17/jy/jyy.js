document.addEventListener('DOMContentLoaded', function () {

    const headBg = document.querySelector('.jjy_nav_bg');
    const logotag = document.querySelector('.jjy_h1');
    const fdform = document.querySelector('.jjy_storeform');
    let scrollPosition = window.pageYOffset;
    // 헤더 마우스호버 이벤트
    headBg.addEventListener('mouseover', function () {
        this.classList.add('actbg');
    })

    headBg.addEventListener('mouseout', function () {
        scrollPosition === 0 && this.classList.remove('actbg')
    })

    //헤더 스크롤 이벤트
    window.addEventListener('scroll', function () {
        scrollPosition = window.pageYOffset
        console.log(scrollPosition)

        if (scrollPosition === 0) {
            headBg.classList.remove('actbg')
            fdform.classList.add('none')
        } else if (scrollPosition > 300) {
            fdform.classList.remove('none')
        } else {
            headBg.classList.add('actbg')
        }
        fdform.classList.remove('click')
        headBg.querySelector('#navbarResponsive').classList.remove('show')
    })

    //반응형 헤더 스크롤
    var hamBtn = document.getElementById("hambtn");
    var jjyNav = document.getElementById("jjy_nav");

    hamBtn.addEventListener("click", function () {
        if (jjyNav.classList.contains("ham-on")) {
            jjyNav.classList.remove("ham-on");
        } else {
            jjyNav.classList.add("ham-on");
        }
    });


    //폼태그 토글
    fdform.addEventListener('click', function () {
        this.classList.toggle('click')
    })

})


//폼태그
$(document).ready(function () {
    var $w = $(window);
    var footerH = $('.jjy_nav_bg').outerHeight();
    var $banner = $('.jjy_storeform');
    var $topBtn = $('.jy_sTop');

    $w.on('scroll', function () {
        var sT = $(window).scrollTop();
        var val = $(document).height() - $(window).height() - footerH

        if (sT > val) {
            $banner.addClass('on');
            $topBtn.addClass('act');
        }
        else {
            $banner.removeClass('on')
            $topBtn.removeClass('act');
        }

    });



    
})

