const form = document.querySelector('.fourm form');
const Seterr = document.querySelector('.Seterr');
const err = document.querySelector('.err');
const logbtn = document.getElementById('Logbt');

form.onsubmit = (e) =>{
    e.preventDefault();
}



if(logbtn){
    logbtn.addEventListener('click',()=>{
        
    let xhr = new XMLHttpRequest;
    xhr.open("POST","../admin/controller/login.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                
                if(data == "success"){
                    location.href="dashboard.php"
                }else{
                    alert(data)
                // Seterr.style.display="block"
                // err.textContent=data

                }
            }

        }
    }

    let formdata = new FormData(form);
    xhr.send(formdata)
})
}

