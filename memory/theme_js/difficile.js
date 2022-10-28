const section = document.querySelector("section");
const playerClickCount = document.querySelector("span");
const timeCount = document.querySelector("span");
let playerClick = 0;

playerClickCount.textContent = playerClick;

const getData = () => [
    { imgSrc: "./img_pokemon/4.png", name: "1" },
    { imgSrc: "./img_pokemon/17.png", name: "2" },
    { imgSrc: "./img_pokemon/23.png", name: "3" },
    { imgSrc: "./img_pokemon/35.png", name: "4" },
    { imgSrc: "./img_pokemon/48.png", name: "5" },
    { imgSrc: "./img_pokemon/55.png", name: "6" },
    { imgSrc: "./img_pokemon/59.png", name: "7" },
    { imgSrc: "./img_pokemon/133.png", name: "8" },
    { imgSrc: "./img_pokemon/136.png", name: "9" },
    { imgSrc: "./img_pokemon/143.png", name: "10" },
    { imgSrc: "./img_pokemon/146.png", name: "11" },
    { imgSrc: "./img_pokemon/151.png", name: "12" },
    { imgSrc: "./img_pokemon/202.png", name: "13" },
    { imgSrc: "./img_pokemon/206.png", name: "14" },
    { imgSrc: "./img_pokemon/208.png", name: "15" },
    { imgSrc: "./img_pokemon/214-mega.png", name: "16" },
    { imgSrc: "./img_pokemon/216.png", name: "17" },
    { imgSrc: "./img_pokemon/130.png", name: "18" },
    { imgSrc: "./img_pokemon/659.png", name: "19" },
    { imgSrc: "./img_pokemon/668f.png", name: "20" },
    { imgSrc: "./img_pokemon/669.png", name: "21" },
    { imgSrc: "./img_pokemon/671.png", name: "22" },
    { imgSrc: "./img_pokemon/677.png", name: "23" },
    { imgSrc: "./img_pokemon/678.png", name: "24" },
    { imgSrc: "./img_pokemon/679.png", name: "25" },
    { imgSrc: "./img_pokemon/686.png", name: "26" },
    { imgSrc: "./img_pokemon/688.png", name: "27" },
    { imgSrc: "./img_pokemon/699.png", name: "28" },
    { imgSrc: "./img_pokemon/700.png", name: "29" },
    { imgSrc: "./img_pokemon/701.png", name: "30" },
    { imgSrc: "./img_pokemon/711.png", name: "31" },
    { imgSrc: "./img_pokemon/721.png", name: "32" },
    { imgSrc: "./img_pokemon/4.png", name: "1" },
    { imgSrc: "./img_pokemon/17.png", name: "2" },
    { imgSrc: "./img_pokemon/23.png", name: "3" },
    { imgSrc: "./img_pokemon/35.png", name: "4" },
    { imgSrc: "./img_pokemon/48.png", name: "5" },
    { imgSrc: "./img_pokemon/55.png", name: "6" },
    { imgSrc: "./img_pokemon/59.png", name: "7" },
    { imgSrc: "./img_pokemon/133.png", name: "8" },
    { imgSrc: "./img_pokemon/136.png", name: "9" },
    { imgSrc: "./img_pokemon/143.png", name: "10" },
    { imgSrc: "./img_pokemon/146.png", name: "11" },
    { imgSrc: "./img_pokemon/151.png", name: "12" },
    { imgSrc: "./img_pokemon/202.png", name: "13" },
    { imgSrc: "./img_pokemon/206.png", name: "14" },
    { imgSrc: "./img_pokemon/208.png", name: "15" },
    { imgSrc: "./img_pokemon/214-mega.png", name: "16" },
    { imgSrc: "./img_pokemon/216.png", name: "17" },
    { imgSrc: "./img_pokemon/130.png", name: "18" },
    { imgSrc: "./img_pokemon/659.png", name: "19" },
    { imgSrc: "./img_pokemon/668f.png", name: "20" },
    { imgSrc: "./img_pokemon/669.png", name: "21" },
    { imgSrc: "./img_pokemon/671.png", name: "22" },
    { imgSrc: "./img_pokemon/677.png", name: "23" },
    { imgSrc: "./img_pokemon/678.png", name: "24" },
    { imgSrc: "./img_pokemon/679.png", name: "25" },
    { imgSrc: "./img_pokemon/686.png", name: "26" },
    { imgSrc: "./img_pokemon/688.png", name: "27" },
    { imgSrc: "./img_pokemon/699.png", name: "28" },
    { imgSrc: "./img_pokemon/700.png", name: "29" },
    { imgSrc: "./img_pokemon/701.png", name: "30" },
    { imgSrc: "./img_pokemon/711.png", name: "31" },
    { imgSrc: "./img_pokemon/721.png", name: "32" },
];

const random = () => {
    const cardData = getData();
    cardData.sort(() => Math.random() - 0.5);
    return cardData;
};

const cardGener = () => {
    const cardData = random();

    cardData.forEach((item) => {
        const card = document.createElement("div");
        const face = document.createElement("img");
        const back = document.createElement("div");
        card.classList = "card";
        face.classList = "face";
        back.classList = "back";

        face.src = item.imgSrc;
        card.setAttribute('name', item.name);

        section.appendChild(card);
        card.appendChild(face);
        card.appendChild(back);

        card.addEventListener('click', (e) => {
            card.classList.toggle("toggleCard");
            checkCards(e);
        });
    });
};

const checkCards = (e) => {
    console.log(e)
    const clickedCard = e.target;
    clickedCard.classList.add("flipped");
    const flippedCards = document.querySelectorAll('.flipped');
    const toggleCard = document.querySelectorAll(".toggleCard");
    if(flippedCards.length === 2){
        if(flippedCards[0].getAttribute('name') === flippedCards[1].getAttribute('name')){
            console.log("match");
            flippedCards.forEach((card) => {
                card.classList.remove("flipped");
                card.style.pointerEvents = "none";
            });
            playerClick++;
            playerClickCount.textContent = playerClick;
        }
        else{
            console.log("wrong");
            flippedCards.forEach(card =>{
                card.classList.remove('flipped');
                setTimeout(() => card.classList.remove("toggleCard"), 600);
            })
            playerClick++;
            playerClickCount.textContent = playerClick;
        }
    }
    if(toggleCard.length === 64){
        restart("you won");
    }
};

const restart = (text) => {
    let cardData = random();
    let faces = document.querySelectorAll(".face");
    let cards = document.querySelectorAll(".card");
    section.style.pointerEvents = "none";
    cardData.forEach((item, index) => {
        cards[index].classList.remove("toggleCard");

        setTimeout(() => {
            cards[index].style.pointerEvents = "all";
            faces[index].src = item.imgSrc;
            cards[index].setAttribute("name", item.name);
            section.style.pointerEvents = "all";
        }, 1000);
    });
    playerClick = 0;
    playerClickCount.textContent = playerClick;
    setTimeout(() => window.alert(text), 100);
}

cardGener();