
const Wrapper = document.querySelector('.msg_wrap');
// const err = document.querySelector('.err');



const Starts =()=>{
    
     let xhr = new XMLHttpRequest;
    xhr.open("GET","controller/messages.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                Wrapper.innerHTML=data;
                
            }

        }
    }

    xhr.send()

}


Starts();

