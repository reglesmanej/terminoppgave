let men1 = "<div class='cartProductBox'> <img class='skoBilde' src='/bilder/air.force.men.webp'> <div class='carttekst'> <h1 class='shoe1Men'>Nike Air Force 1 Low Drake NOCTA Certified Lover Boy</h1> <p class='price'>NOK 1,400</p></div></div>"

let cartVar = "";

let sum = 0

function addToCart() {
    cartVar += men1
    sum+=1400
    localStorage.setItem("lagretHandlekurv", cartVar)
    localStorage.setItem("lagretSum", sum)
    console.log(cartVar)
}

function showCart () { 
    document.getElementById("cart").innerHTML = localStorage.lagretHandlekurv;
    document.getElementById("sum").innerHTML ="Total: NOK " + localStorage.lagretSum;
}

function emptyCart() {
    cartVar = "";
    sum=""
    localStorage.setItem("lagretHandlekurv", cartVar)
    localStorage.setItem("lagretSum", sum)
    showCart()
}

function buy() {
    alert("Thank you for your order! Your order will be at your doorstep in 3-5 bussines days.")
    emptyCart()
}









