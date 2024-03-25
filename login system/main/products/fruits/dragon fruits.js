let valuecount = 1;

const inc = document.getElementById("increment");
const input = document.getElementById("input");
const dec = document.getElementById("decrement");
const totalprice = document.getElementById("price");

inc.addEventListener("click", () => {
    let add = valuecount++;
    input.value = add;
    totalprice.innerHTML = add*131;
  })

  dec.addEventListener("click",()=>{
    if(valuecount >= 2){
        let sub = --valuecount;
        input.value = sub;
        totalprice.innerHTML = sub*131;
    }
  })