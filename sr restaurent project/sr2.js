
    var image=document.getElementById("l1");
    let count=1;
    setInterval(()=>{
      if(count<2){count++;}
      else if(count==2){
        image.src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQp2D08EfKizttcxXjjk59QgcgOuWyA3qqW7cNuSmo1mH3WsONJopYw8BLKESCrax7POJQ&usqp=CAU";
      }
    },1000);