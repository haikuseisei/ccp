document.addEventListener("DOMContentLoaded", function() {
    // フェード処理を適用したい要素とスピードを指定
    handleScrollFade('.topBtn', 400);
});

//スクロールしてから表示する
function handleScrollFade(selector, threshold) {
    let element = document.querySelector(selector);
    
    window.addEventListener('scroll', function() {
        let scrollTop = window.scrollY || document.documentElement.scrollTop;
        
        if (scrollTop > threshold) {
            fadeIn(element);
        } else {
            fadeOut(element);
        }
    });
}
function fadeIn(element) {
    element.style.transition = 'opacity 0.4s';
    element.style.opacity = '1';
    element.style.visibility = 'visible';	
}
function fadeOut(element) {
    element.style.transition = 'opacity 0.4s';
    element.style.opacity = '0';
	element.style.visibility = 'hidden';
}
//スクロールする
const btnTop = document.querySelector('.topBtn');

btnTop.addEventListener('click', () => {
	window.scrollTo({
		top: 0,behavior: "smooth"
	});
});