
const Wrapper = document.getElementById('my_projects');
// const err = document.querySelector('.err');




setInterval(() => {
    
     let xhr = new XMLHttpRequest;
    xhr.open("GET","admin/controller/Hproject.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                Wrapper.innerHTML=data;
                
            }

        }
    }

    xhr.send()

}, 10000);