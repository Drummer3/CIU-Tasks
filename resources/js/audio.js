window.onload = function () {
    if (localStorage.getItem("hasCodeRunBefore") === null) {
        var audio = new Audio('/audio/bell.mp3');
        audio.play();
        localStorage.setItem("hasCodeRunBefore", true);
    }
}