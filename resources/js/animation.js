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
