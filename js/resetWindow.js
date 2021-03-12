function reset(){ //код для перезегрузки страницы, чтобы начать заного игру
    location.reload();
}

document.querySelectorAll('#reset')[0].onclick = reset;
document.querySelectorAll('#reset')[1].onclick = reset;