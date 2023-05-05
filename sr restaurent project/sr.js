function changeImage(name1,name2,name3)
{
    var image=document.getElementById("kl");
    var first=document.getElementById("z1");
    var second=document.getElementById("q2");
    first.innerText=name2;
    second.innerText=name3;
    image.src=name1;
    image.style.height="300px";
    image.style.width="300px";
}