const form = document.querySelector('.msgBox form');
const Seterr = document.querySelector('.Seterr');
const err = document.querySelector('.err');
const logbtn = document.querySelector('.btn-sub');
const inputs = document.querySelectorAll('.clr');


const clear = ()=>{
    inputs.forEach(inPut => {
        inPut.value="";
        // console.log(inPut);
    });
}

form.onsubmit = (e) =>{
    e.preventDefault();
}

logbtn.addEventListener('click',()=>{
    // clear();
})


    logbtn.addEventListener('click',()=>{
    let xhr = new XMLHttpRequest;
    xhr.open("POST","admin/controller/mssg.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                alert(data)
                clear();
                
            }

        }
    }

    let formdata = new FormData(form);
    xhr.send(formdata)
})

