function getRandomColor(colors) {
    let index = Math.floor(Math.random() * colors.length)
    return colors[index];
}

function getRandomDiameter() {
    return Math.floor(Math.random() * (151)) + 50;
}

function getRandomPosition(diameter) {
    const radius = diameter / 2;
    const screenWidth = window.innerWidth;
    const screenHeight = window.innerHeight;
    const x = Math.floor(Math.random() * (screenWidth - diameter)) + radius;
    const y = Math.floor(Math.random() * (screenHeight - diameter)) + radius;
    return [x, y];
}
