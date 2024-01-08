document.addEventListener('DOMContentLoaded', function () {

    const headBg = document.querySelector('.jjy_nav_bg');
    const logotag = document.querySelector('.jjy_h1');
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
        if (scrollPosition > 0) {
            headBg.classList.add('actbg')

        } else {
            headBg.classList.remove('actbg')
        }
    })

})