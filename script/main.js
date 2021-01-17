var Shuffle = window.Shuffle;
var element = document.querySelector('.my-grid-with-images');
var sizer = element.querySelector('.js-sizer');

var shuffleInstance = new Shuffle(element, {
    itemSelector: '.js-item',
    sizer: sizer // could also be a selector: '.my-sizer-element'
});

$('#btnAlles').on('click', function () {
    shuffleInstance.filter(Shuffle.ALL_ITEMS);
});

$('#btnBeautyWell').on('click', function () {
    shuffleInstance.filter('beautyWell');
});

$('#btnTechnologie').on('click', function () {
    shuffleInstance.filter('technologie');
});

$('#btnCreatief').on('click', function () {
    shuffleInstance.filter('creatief');
});

$('#btnDieren').on('click', function () {
    shuffleInstance.filter('dieren');
});

$('#btnFotoFilm').on('click', function () {
    shuffleInstance.filter('fotoFilm');
});

$('#btnHuisTuin').on('click', function () {
    shuffleInstance.filter('huisTuin');
});

$('#btnMuziek').on('click', function () {
    shuffleInstance.filter('muziek');
});

$('#btnSchrijven').on('click', function () {
    shuffleInstance.filter('schrijven');
});

$('#btnKoken').on('click', function () {
    shuffleInstance.filter('koken');
});


