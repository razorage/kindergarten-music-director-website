class MobileVersion{
    static show(mb){
        let stop = -10; //позиция при которой исчезнет меню
        let left = -(mb.offsetWidth); // изначальная позция
        console.log(stop);
        let timer = setInterval(
            ()=>{
                if (left >= stop){
                    clearInterval(timer);
                    mb.style.left = 10;
                }
                mb.style.left = `${left+=10}px`;
            },
            10
        );
        
    }
    static close(mb){
        let stop = mb.offsetWidth+5; //позиция при которой исчезнет меню
        let left = 0; // изначальная позция
        console.log(stop);
        let timer = setInterval(
            ()=>{
                if (left >= stop){
                    clearInterval(timer);
                }
                mb.style.left = `-${left+=10}px`;
            },
            10
        );
    }
}
let mb = document.querySelector('.mobileVersion');

document.querySelector('.mobileVersion-button').onclick = MobileVersion.show.bind(this, mb);
document.querySelector('#b-1').onclick = MobileVersion.close.bind(this, mb);

