function drawCircles(numCircles) {
    let colors = ["red", "blue", "pink", "Salmon",
        "Orange", "Yellow", "Violet", "Purple",
        "SlateBlue", "Black", "Lime", "Aqua", "Silver"];

    for (let i = 0; i < numCircles; i++) {
        let diameter = getRandomDiameter();
        let color = getRandomColor(colors);
        let position = getRandomPosition(diameter);

        let circle = $("<div></div>");
        circle.css({
            width: diameter + "px",
            height: diameter + "px",
            borderRadius: "50%",
            backgroundColor: color,
            position: "absolute",
            left: position[0] + "px",
            top: position[1] + "px"
        });

        $("body").append(circle);
    }
}