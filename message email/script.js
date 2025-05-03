const form = document.querySelector("form");
let statuText = document.getElementById("sending-message");


form.onsubmit = (e)=>{
    e.preventDefault();
    statuText.style.display = 'block';
    statuText.style.color = '#666'
    let xhr = new XMLHttpRequest();
    xhr.open("POST","message.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState == 4 && xhr.status == 200){
            let response = xhr.response;
            if(response.indexOf("Email and password field is required") != -1 || response.indexOf("Enter a valid email adress") || response.indexOf("sorry ,field to send your message")){
                statuText.style.color = 'red'
            }else{
                form.reset();
                setTimeout(()=>{
                    statuText.style.display = "none";
                },3000)
            }
            statuText.innerText = response
            
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}