window.onload = changebg;
console.log('読み込んでいる。');
function changebg() {
    var bgcolor = '#000000';
    var bodyElement = document.body;
    bodyElement.style.backgroundColor = bgcolor;
    console.log('色が変わります。');
}