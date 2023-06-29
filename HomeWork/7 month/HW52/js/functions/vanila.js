function drawCircles(numCircles) {

    let colors = ["red", "blue", "pink", "Salmon",
        "Orange", "Yellow", "Violet", "Purple",
        "SlateBlue", "Black", "Lime", "Aqua", "Silver"];

    for (let i = 0; i < numCircles; i++) {
        let diameter = getRandomDiameter();
        let color = getRandomColor(colors);
        let position = getRandomPosition(diameter);

        let circle = document.createElement("div");
        circle.style.width = diameter + "px";
        circle.style.height = diameter + "px";
        circle.style.borderRadius = "50%";
        circle.style.backgroundColor = color;
        circle.style.position = "absolute";
        circle.style.left = position[0] + "px";
        circle.style.top = position[1] + "px";

        document.body.appendChild(circle);
    }
}
