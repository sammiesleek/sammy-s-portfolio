const form = document.querySelector('.fill form');
const Seterr = document.querySelector('.Seterr');
const err = document.querySelector('.err');
const logbtn = document.getElementById('sub_mit');

form.onsubmit = (e) =>{
    e.preventDefault();
}



if(logbtn){
    logbtn.addEventListener('click',()=>{
        
    let xhr = new XMLHttpRequest;
    xhr.open("POST","controller/edit_project.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                // alert (data)
                if(data == 'success'){
                    location.href="manage-projects.php"
                }else{
                    alert(data)
                }
                
            }
                
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata)
})
}


