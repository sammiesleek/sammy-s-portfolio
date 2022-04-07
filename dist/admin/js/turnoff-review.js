
const aprbt= document.querySelector('.approvebtn');
const bg = document.querySelectorAll('.btj');
// const err = document.querySelector('.err');




bg.forEach(it => {
    it.addEventListener('click', ()=>{
    alert('clicked');
})
});

aprbt.addEventListener('click',()=>{
    // e.preventDefault()
    alert('clk')
})

setInterval(() => {
    
     let xhr = new XMLHttpRequest;
    xhr.open("GET","controller/turnoff-review.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status === 200){
                // let data = xhr.response;
                // CAse.innerHTML=data;
                
            }

        }
    }

    xhr.send()

}, 100);