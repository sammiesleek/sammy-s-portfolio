
const Wrapper = document.querySelector('.pro_wrap');
// const err = document.querySelector('.err');




setInterval(() => {
    
     let xhr = new XMLHttpRequest;
    xhr.open("GET","controller/projects.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                Wrapper.innerHTML=data;
                
            }

        }
    }

    xhr.send()

}, 500);