document.addEventListener("DOMContentLoaded", function () {
    var cards = document.querySelectorAll(".card");

    function handleMouseMove(e) {
        var rect = this.getBoundingClientRect();
        var cardCenterX = rect.left + rect.width / 2;
        var cardCenterY = rect.top + rect.height / 2;
        var xAxis = (cardCenterX - e.clientX) / 10;
        var yAxis = (cardCenterY - e.clientY) / 10;
        var scale = 1;

        this.style.transform =
            "perspective(1000px) rotateY(" +
            xAxis +
            "deg) rotateX(" +
            yAxis +
            "deg) scale(" +
            scale +
            ")";
    }

    function resetCard() {
        this.style.transition = "transform 0.3s ease";
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

            card.style.transition = "none";
            card.addEventListener("mousemove", handleMouseMove);
        });

        card.addEventListener("mouseleave", function () {
            card.removeEventListener("mousemove", handleMouseMove);
            resetCard.call(card);
        });
    });
});
