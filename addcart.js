let carts = document.querySelectorAll(".add-cart");

for(i=0; i< carts.length; i++){
    carts[i].addEventListener('click', () =>{
      
        cartNumber();
    })
}
function onLoadCartNumber(){
    let productNumber = localStorage.getItem('cartNumbers');
     if(productNumber){
        document.getElementById("span").textContent = productNumber;
     }
}

function cartNumber(){
    let productNumber = localStorage.getItem('cartNumbers');
    productNumber = parseInt(productNumber);
   

    if(productNumber){
        localStorage.setItem('cartNumbers', productNumber + 1);
        document.getElementById("span").textContent = productNumber + 1;
    }
    else{
        localStorage.setItem('cartNumbers', 1);
        document.getElementById("span").textContent = 1;
    }
    
}

onLoadCartNumber();