class CheckForm{ //класс для проверки полей
    static checkLink(name, link){ //метод для проверки файлов
        if (name.value.trim().length < 6 || link.value.trim().length < 4){
            if (name.value.trim().length < 6){
                alert('Слишком короткое название');
            }
            if (link.value.trim().length < 4){
                alert('Слишком короткая ссылка')
            }
            return false;
        } else {
            return true;
        }
    }

    static photoAndVideo(name, link){ //метод для проверки видео и фотографий
        if (name.value.trim().length < 6 || link.value.trim().length < 4 || !(link.value.trim().includes('<iframe'))){
            if (name.value.trim().length < 6){
                alert('Слишком короткое название');
            }
            if (link.value.trim().length < 4){
                alert('Слишком короткая ссылка')
            }
            if (!(link.value.trim().includes('<iframe'))){
                alert('Фотографии и видео необходимо встраивать');
            }
            return false;
        } else {
            return true;
        }
    }
}

let nameFile = document.querySelector('#nameFile1'); //проверка имени файла
let linkFile = document.querySelector('#linkFile1'); //проверка ссылки файла

document.querySelector('#b-File1').onclick = () =>{ //проверка файлов перед отправкой
    if(CheckForm.checkLink(nameFile, linkFile)){
        alert('Файл создается, скорость создания файла зависит от его размера и скорости вашего интернета');
        return true;
    } else {
        return false;
    }
}

let nameVideo = document.querySelector('#nameVideo1'); //проверка имени видео
let linkVideo = document.querySelector('#linkVideo1');//проверка ссылки видео

document.querySelector('#b-Video1').onclick = () =>{ //проверка видео перед отправкой
    if(CheckForm.photoAndVideo(nameVideo, linkVideo)){ 
        alert('Файл создается, скорость создания файла зависит от его размера и скорости вашего интернета');
        return true;
    } else {
        return false;
    }
}

let namePhoto = document.querySelector('#namePhoto1');
let linkPhoto = document.querySelector('#linkPhoto1');

document.querySelector('#b-Photo1').onclick = () =>{ //проверка фотографий перед отправкой
    if(CheckForm.photoAndVideo(namePhoto, linkPhoto)){ 
        alert('Файл создается, скорость создания файла зависит от его размера и скорости вашего интернета');
        return true;
    } else {
        return false;
    }
}

