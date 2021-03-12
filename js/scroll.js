class Scroll{ //класс для прокрутки страницы
    static scroll(top){
        console.log(top);
        let i = 0;
        let timer = setInterval(
            ()=>{
                window.scrollTo(0,`${i+=10}`);
                if (top == null || top == undefined || top.offsetTop <= i ){ //если дошел до блока
                    clearInterval(timer);
                }
            },
            1, //скорость
        );
        return false;
    }
}
let exp = document.querySelector('.main-allImportantInHand-heading');//обмен опытом
let contacts = document.querySelector('.main-contacts'); //контакты

document.querySelector('#a-1').onclick = Scroll.scroll.bind(this,exp); //ссылка 1
document.querySelector('#a-2').onclick = Scroll.scroll.bind(this,contacts); //ссылка 2
document.querySelector('#a-3').onclick = Scroll.scroll.bind(this,exp); //ссылка 1
document.querySelector('#a-4').onclick = Scroll.scroll.bind(this,contacts); //ссылка 2

