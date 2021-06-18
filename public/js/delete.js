
(function(win,doc){
    'use strict';
      
  function confirmDel(e) {
    e.preventDefault()
    let token = doc.getElementsByName("_token")[0].value;
    console.log(token)
    if(confirm("Deseja mesmo apagar?")) {
      
      const url = e.target.parentNode.href;
      // const options = {
      //   headers: {
      //       "X-Requested-With": "XMLHttpRequest",
      //       "X-CSRF-TOKEN": token
      //     }
      //   }
      // fetch(url,options).then(win.location.href = "professor";)
      let ajax = new XMLHttpRequest();
      
      ajax.open("get", url);
      
      ajax.setRequestHeader("X-CSRF-TOKEN",token)
      
      ajax.send();
      ajax.onreadystatechange = function() {
        if(ajax.readyState === 4 && ajax.status === 200) {
          console.log("Tudo certo, foi apagado!")
          win.location.href = "professor";
        }
      }
    }


  }

  if(doc.querySelectorAll(".js_del")) {
    
    let btnAll = doc.querySelectorAll(".js_del");

    btnAll.forEach((btn) => {
      btn.addEventListener("click", confirmDel, false);
    })
  }

})(window, document);