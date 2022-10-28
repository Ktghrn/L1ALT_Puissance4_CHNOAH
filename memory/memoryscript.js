function img1() {
    let theme = document.getElementById('theme-select').value;
    let imgMap = {
        "pokemon" : "img/img1.png",
        "paysage" : "img/img2.png",
        "pays" : "img/img3.png"
    };
    document.getElementById('myimage1').src = imgMap[theme];
}

function img2() {
    let difficult = document.getElementById('dif-select').value;
    let imgMap = {
        "facile" : "img/img4.png",
        "intermediaire" : "img/img5.png",
        "expert" : "img/img6.png",
        "impossible" : "img/img7.png"
    };
    document.getElementById('myimage2').src = imgMap[difficult];
}

