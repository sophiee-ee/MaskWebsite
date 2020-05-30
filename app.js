//add span of 0 beside everycart icon and make the class cartTotal
let carts = document.querySelectorAll(".add-cart"); //targeting all the add to cart buttons.CHANGE ID NAME ACCORDING TO THE PRODUCT USING THIS PAGE
let products = [{
        name: "Black FaceMask",
        tag: "BlackMask",
        price: 20,
        inCart: 0,
    },

    {
        name: "Purple FaceMask",
        tag: "purpleMask",
        price: 20,
        inCart: 0,
    },

    {
        name: "Pink FaceMask",
        tag: "Pink-with-white-squares",
        price: 20,
        inCart: 0,
    },
    {
        name: "Rose FaceMask",
        tag: "Roses",
        price: 20,
        inCart: 0,
    }, //used to add product descriptions. change later. basically what we want to do for this part is make the first item on the page the first object and then keep going like this. allows us to not have to change the ids constantly
];
//adding an event listener:
for (let i = 0; i < carts.length; i++) {
    //add event listener whenever the button is clicked
    carts[i].addEventListener("click", () => {
        cartNumbers(products[i]); //each product will have an index. in our case there is only one product per page. Allows us to know which item we've added to the cart
        totalCost(products[i]);
    });
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem("cartNumbers");
    if (productNumbers) {
        document.querySelector(".cartTotal ").textContent = productNumbers;
    } //needs to be called in order to run
}

//allows to track items added to cart
function cartNumbers(product) {
    //adds values to local storage
    let productNumbers = localStorage.getItem("cartNumbers"); //allows us to update the number of items in a cart if they click 'add to cart' multiple times. is a string rn

    productNumbers = parseInt(productNumbers); //changes string to number
    if (productNumbers) {
        localStorage.setItem("cartNumbers", productNumbers + 1); //allows to add number of items in the cart
        document.querySelector(".cartTotal ").textContent = productNumbers + 1; //lets the cart icon update the number of items
    } else {
        localStorage.setItem("cartNumbers", 1);
        document.querySelector(".cartTotal ").textContent = 1; //lets the cart icon update the number of items
    }
    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem("productsInCart"); //checks to see if there is already an item added to the cart with a specific description
    cartItems = JSON.parse(cartItems); //makes it turn into javaScript format when displaying object key and values
    console.log("my cart items are", cartItems);

    // check to see it there is something in local storage
    if (cartItems != null) {
        if (cartItems[product.tag] === undefined) {
            cartItems = {
                ...cartItems,
                [product.tag]: product,
            }; //allows to add different products
        }
        cartItems[product.tag].inCart += 1; //increase 1 that is already showing
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product,
        }; //need to pass as json in local storage
    }

    localStorage.setItem("productsInCart", JSON.stringify(cartItems)); //JSON.stringify makes it in a JSON format and not a javascript format
}


function totalCost(product) {
    //console.log("the product price is ", product.price);
    let cartCost = localStorage.getItem("totalCost"); //creates a string. whenever we get something from local storage it comes back as a string

    console.log("my cartcost is ", cartCost);
    //we need to check if the cart is null
    if (cartCost != null) {
        cartCost = parseInt(cartCost); //Converts it from a string into a number
        localStorage.setItem("totalCost", cartCost + product.price); //if there is already something in the cart
    } else {
        localStorage.setItem("totalCost", product.price); // if there is nothing in the cart
    }
} // this if statement allows us to add a total cost when we are adding multiple items

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems); //comes in JSON
    //Next part ensures that we are on the cart page and there is something in local storage
    let productContainer = document.querySelector(".products");
    let cartCost = localStorage.getItem("totalCost");
    if (cartItems && productContainer) {
        productContainer.innerHTML = "";
        Object.values(cartItems).map((item) => {

            productContainer.innerHTML += `
            <tr>
                 <td>
                    <div class="media">
                        <div class="d-flex">
                            <img src="./img/product/${item.tag}.jpg" alt="" />
                        </div>
                                       
                        <div class="media-body">
                            <p>${item.name}</p>
                        </div>   
                    </div>
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" typr="number" value="1">
                        <button class="btn btn-danger" type="button"> REMOVE ITEM</button>
                    </div>
                </td>
                 
                <td>
                    <h5>$${item.price}.00</h5>
                </td>
                                
                <tr> 
                    <i class="fas fa-minus"></i>
                    <span>${item.inCart}</span>
                    <i class="fas fa-plus plus-button"></i>
                 
                </tr>
                
                <td>
                    <h5>$${item.inCart * item.price}.00</h5>
                </td>
            </tr>`;

            /*productContainer.innerHTML += `
             <tr class="product cart-product">
                 <i class="fas  fa-times-circle"></i>
                 <img src ="./img/product/${item.tag}.jpg">
                 <span>${item.name}</span>
             </tr>
             <tr class='price'>$${item.price}.00</tr>
             <tr> 
                 <i class="fas fa-minus"></i>
                 <span>${item.inCart}</span>
                 <i class="fas fa-plus plus-button"></i>
                 
             </tr>
             <tr> 
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" typr="number" value="1">
                        <button class="btn btn-danger" type="button"> REMOVE ITEM</button>
                    </div>
                
            </tr>
             <tr>
                 $${item.inCart * item.price}.00
             </tr>`; //change style of font using .cart_list class. also add classes to the tr */

        });
    }
}

//check to see the products we've added to the local storage

onLoadCartNumbers();
displayCart();
