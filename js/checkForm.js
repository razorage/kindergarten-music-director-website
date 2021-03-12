class CheckForm{ //класс для проверки фомры
    showForm(show){ //показать форму
        this.show = show;
        let top = this.show.offsetTop;//получаем top элемента
        let stop = 100; //100
        let time =  setInterval( //таймер для плавного закрытия формы
            () =>{
                //console.log(top);
                if (top >= stop){ //проверка
                    clearInterval(time);
                } else{ 
                    this.show.style.top = `${top+=15}px`;
                }
            },
            10
        );
    }

    closeForm(close){ //закрыть форму
        this.close = close;
        let top = this.close.offsetTop;//получаес top элемента
        let stop = `-${top*6}`; //-605
        let time =  setInterval( //таймер для плавного закрытия формы
            () =>{
                //console.log(top);
                if (top < stop){ //проверка
                    clearInterval(time);
                } else{ 
                    this.close.style.top = `${top-=15}px`;
                }
            },
            10
        );
        
    }

    checkedForm(name,email){ //проверить правильно введенных значений
        let nameCheck = name.value.trim(); //проверка имени
        let emailCheck = email.value.trim(); //проверка почты
        if ((nameCheck.length < 2) || !(emailCheck.includes('@')) || emailCheck.length < 9){
            if (!nameCheck.length < 2){
                name.value = '';
                name.placeholder = 'Некорректно введены данные';
            }
            if (!(emailCheck.includes('@')) || !(emailCheck.length < 9)){
                email.value = '';
                email.placeholder = 'Некорректно введена почта';
            }
            return false;
        } else {
            return true;
        }
    }

};
const checkForm1 = new CheckForm(); //экземпляр класса

let form1 = document.querySelector('.answer'); //форма
let name1 = document.querySelector('#name1'); //имя1
let email1 = document.querySelector('#email1'); //почта1

let name2 = document.querySelector('#name2');//имя1
let email2 = document.querySelector('#email2');//почта2



document.querySelector('.answer-button').onclick = () =>{ //кнопка для отпавки данных
   if (checkForm1.checkedForm(name1,email1)){
       return true;
    } else {
        return false;
    }
}
document.querySelector('.querstion-button').onclick = () =>{ //кнопка для отпавки данных
    if (checkForm1.checkedForm(name2,email2)){
        return true;
     } else {
         return false;
     }
 }


document.querySelector('.answer-close').onclick = checkForm1.closeForm.bind(this, form1);//кнопка для закрытия формы
document.querySelector('.b-1').onclick = checkForm1.showForm.bind(this, form1);//кнопка для открытия формы

