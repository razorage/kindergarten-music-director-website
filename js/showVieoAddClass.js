//код для добавления класса к видео
for (let i = 0; i < document.querySelectorAll('iframe').length; i++){
    document.querySelectorAll('iframe')[i].classList.add('videoSize');
}