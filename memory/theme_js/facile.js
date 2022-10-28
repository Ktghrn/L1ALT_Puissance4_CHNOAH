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
    { imgSrc: "./img_pokemon/4.png", name: "1" },
    { imgSrc: "./img_pokemon/17.png", name: "2" },
    { imgSrc: "./img_pokemon/23.png", name: "3" },
    { imgSrc: "./img_pokemon/35.png", name: "4" },
    { imgSrc: "./img_pokemon/48.png", name: "5" },
    { imgSrc: "./img_pokemon/55.png", name: "6" },
    { imgSrc: "./img_pokemon/59.png", name: "7" },
    { imgSrc: "./img_pokemon/133.png", name: "8" },
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
    if(toggleCard.length === 16){
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