const form = document.querySelector('.form form');
const mssg = document.querySelector('.mssg');
// const err = document.querySelector('.err');
const logbtn = document.getElementById('sub_mit');
mssg.style.display="block";

form.onsubmit = (e) =>{
    e.preventDefault();
}



if(logbtn){
    logbtn.addEventListener('click',()=>{
        
    let xhr = new XMLHttpRequest;
    xhr.open("POST","../admin/controller/review.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == 'success'){
                    mssg.innerHTML= '<p> Review submmited, Thank you. </P>'
                      setTimeout(() => {
                        location.href="../index.php"

                    }, 3000);
                }else{

                    mssg.innerHTML=data;
                }

                
                  
                    
                
                
            }
                
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata)
})
}

