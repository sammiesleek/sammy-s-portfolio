
const cover = document.getElementById('rev-w');




// setInterval(() => {
//      let xhr = new XMLHttpRequest;
//     xhr.open("GET","admin/controller/Hreview.php", true);
//     xhr.onload = ()=>{
//         if(xhr.readyState == XMLHttpRequest.DONE){
//             if(xhr.status === 200){
//                 let data = xhr.response;
//                 cover.innerHTML=data;
                
//             }

//         }
//     }

//     xhr.send()

    
// }, 10000);


const loadrev = ()=>{

 let xhr = new XMLHttpRequest;
    xhr.open("GET","admin/controller/Hreview.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                cover.innerHTML=data;
                
            }

        }
    }

    xhr.send()


}
loadrev();