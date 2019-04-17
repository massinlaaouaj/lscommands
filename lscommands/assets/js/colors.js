function background(color) {
    document.bgColor = color;
    if (color=='black') {
        document.body.style.color='white';
    } else {
        document.body.style.color='black';        
    }
}