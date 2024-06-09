

var sendBtn = document.getElementById('sendBtn');
var textbox= document.getElementById('textbox');
var chatContainer = document.getElementById('chatContainer');
var httpRequest = new XMLHttpRequest();


setTimeout(function(){
   
    chatbotSendMessage("Welcome to Bangladesh Tourist Guide App");

},2000);

function chatbotSendMessage(messageText){


    var messageElement = document.createElement('div');

    messageElement.classList.add('w-50');
    messageElement.classList.add('float-left');
    messageElement.classList.add('shadow-sm');
    messageElement.style.margin="10px";
    messageElement.style.padding="5px";
    messageElement.style.backgroundColor="azure";

    messageElement.innerHTML = "<span>Chatbot: </span>"+
    "<span style="+"margin-top: 10px; padding: 10px;"+">"+messageText+"</span>";

    messageElement.animate([{easing:"ease-in",opacity:0.4},{opacity:1}],{duration:1000});
 

   chatContainer.appendChild(messageElement);
   chatContainer.scrollTop = chatContainer.scrollHeight;

    }




function sendMessage(messageText){

    var messageElement = document.createElement('div');

    messageElement.classList.add('w-50');
    messageElement.classList.add('float-right');
    messageElement.classList.add('shadow-sm');
    messageElement.style.margin="10px";
    messageElement.style.padding="5px";
    messageElement.style.backgroundColor="azure";
    

    messageElement.innerHTML = "<span>You: </span>"+
    "<span style="+"margin-top: 10px; padding: 10px;"+">"+messageText+"</span>";

 messageElement.animate([{easing:"ease-in",opacity:0.4},{opacity:1}],{duration:1000});
 

chatContainer.appendChild(messageElement);

chatContainer.scrollTop = chatContainer.scrollHeight;
makeRequest(messageText);

}


function server_response(){

    if(httpRequest.readyState == XMLHttpRequest.DONE && httpRequest.status == 200){
        var result = JSON.parse(httpRequest.responseText);


   var messageElement = document.createElement('div');

   messageElement.classList.add('w-50');
   messageElement.classList.add('float-left');
   messageElement.classList.add('shadow-sm');
   messageElement.style.margin="10px";
   messageElement.style.padding="5px";
   messageElement.style.backgroundColor="azure";

   messageElement.innerHTML = "<span>Chatbot: </span>"+
   "<span style="+"margin-top: 10px; padding: 10px;"+">"+result.response_message+"</span>";

   messageElement.animate([{easing:"ease-in",opacity:0.4},{opacity:1}],{duration:1000});


chatContainer.appendChild(messageElement);

 chatContainer.scrollTop = chatContainer.scrollHeight;

}



}




function makeRequest(messageText){
    
    httpRequest.open('Get','chatbot1.php?message='+messageText,true);
    httpRequest.send();
    httpRequest.onreadystatechange=server_response;



}

  

sendBtn.addEventListener('click',function(e){

    if(textbox.value == ""){

    alert('Please type in a message');


    }else{

    let messageText = textbox.value;

    sendMessage(messageText);

    textbox.value = "";

    }
});
