$(function(){
    $('.site-header').backgroundScroll({
        pattern: true,
        click: 'stop',
        img: [{{asset('../images/back.png')}}],
        speed: [0.3],
        directionX: ['left'],
        directionY: [''],
        imageWidth: 2000,
        imageHeight: 2000
    });

});
