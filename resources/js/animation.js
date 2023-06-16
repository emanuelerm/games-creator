document.addEventListener("DOMContentLoaded", function () {
    let cards = document.querySelectorAll(".card");
    const MARGIN = 10; // Margine in pixel intorno alla carta

    function handleMouseEnter() {
        this.style.transition = "box-shadow 0.55s ease";
        this.style.boxShadow = "0px 1px 20px 1px #ef3b2d";
    }

    function handleMouseLeave() {
        this.style.transition = "box-shadow 0.55s ease";
        this.style.boxShadow = "none";
    }

    function handleMouseMove(e) {
        let rect = this.getBoundingClientRect();
        let cardCenterX = rect.left + rect.width / 2;
        let cardCenterY = rect.top + rect.height / 2;
        let xAxis = (cardCenterX - e.clientX) / 10;
        let yAxis = (cardCenterY - e.clientY) / 10;
        let scale = 1;

        // Controllo se il cursore si trova nel margine intorno alla carta
        if (
            e.clientX < rect.left + MARGIN ||
            e.clientX > rect.right - MARGIN ||
            e.clientY < rect.top + MARGIN ||
            e.clientY > rect.bottom - MARGIN
        ) {
            // Il cursore si trova nel margine, non applicare la trasformazione
            this.style.transform = "rotateY(0deg) rotateX(0deg) scale(1)";
        } else {
            // Il cursore è all'interno della carta, applica la trasformazione
            this.style.transform =
                "perspective(1000px) rotateY(" +
                xAxis +
                "deg) rotateX(" +
                yAxis +
                "deg) scale(" +
                scale +
                ")";
        }
    }

    function resetCard() {
        this.style.transition = "box-shadow 0.55s ease";
        this.style.transform = "rotateY(0deg) rotateX(0deg) scale(1)";
    }

    cards.forEach(function (card) {
        card.addEventListener("mouseenter", function () {
            cards.forEach(function (otherCard) {
                if (otherCard !== card) {
                    otherCard.removeEventListener("mousemove", handleMouseMove);
                    resetCard.call(otherCard);
                }
            });

            card.addEventListener("mousemove", handleMouseMove);
            handleMouseEnter.call(card);
        });

        card.addEventListener("mouseleave", function () {
            card.removeEventListener("mousemove", handleMouseMove);
            resetCard.call(card);
            handleMouseLeave.call(card);
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    let carousel = document.querySelector(".scroll");
    let scrollPosition = 0; // Posizione di scorrimento corrente
    let targetScrollPosition = 0; // Posizione di scorrimento target
    let isScrolling = false; // Flag per indicare se è in corso un'animazione di scorrimento

    carousel.addEventListener("wheel", function (e) {
        e.preventDefault();

        // Calcola la direzione dello scroll e l'incremento di scorrimento
        let scrollDirection = e.deltaY > 0 ? 1 : -1;
        let scrollIncrement = 40; // Modifica questo valore a tuo piacimento

        // Calcola la nuova posizione di scorrimento target
        targetScrollPosition += scrollDirection * scrollIncrement;

        // Avvia l'animazione di scorrimento
        if (!isScrolling) {
            requestAnimationFrame(scrollCarousel);
            isScrolling = true;
        }
    });

    function scrollCarousel() {
        // Calcola l'incremento di scorrimento basato sulla distanza tra la posizione attuale e la posizione target
        let scrollIncrement = (targetScrollPosition - scrollPosition) * 0.1;

        // Applica l'incremento di scorrimento alla posizione corrente
        scrollPosition += scrollIncrement;

        // Applica lo scorrimento al carosello
        carousel.scrollLeft = scrollPosition;

        // Continua l'animazione finché la posizione corrente e la posizione target non sono abbastanza vicine
        if (Math.abs(scrollPosition - targetScrollPosition) > 0.5) {
            requestAnimationFrame(scrollCarousel);
        } else {
            isScrolling = false;
        }
    }
});
