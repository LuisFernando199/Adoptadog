
//---------Funcion Eliminar------------
// Vamos a obtener con find el perro por su id
// luego vamos a crear un array "cartId" con filter identico a "cart"
// y que nos devuelva todos los elementos que sean distientos a "searchId"
// vara que nos vuelva a mostrar todos los elementos  menos el que el ID es identico
const deleteDog = () => {
  const searchId = cart.find((element) => element.id);
  //console.log(searchId)
  cart = cart.filter((cartId) => {
    //console.log(cart)
    return cartId !== searchId;
  });
  countCart();
  saveCart();
  showWindowCart();
};

//------ Funcion mostrar Cantidad en logo carrito-----------

const countCart = () => {
  
  amountCart.style.display = "block";

  const cartLenght = cart.length;
  localStorage.setItem("cartLenght", JSON.stringify(cartLenght))

  amountCart.innerText = JSON.parse(localStorage.getItem("cartLenght"));
};

countCart();


/* -------------------Funcion agregar un nuevo perro por el usuario --------------------*/


// recojer los datos 

const petId = document.getElementById("pet-id") ? document.getElementById("pet-id").innerText : "";
const petName = document.getElementById("pet-name") ? document.getElementById("pet-name").innerText : "";
const petDescription = document.getElementById("pet-description") ? document.getElementById("pet-description").innerText : "";
const petImage = document.getElementById("pet-img") ? document.getElementById("pet-img").src : "";
const petPrice = document.getElementById("pet-price") ? document.getElementById("pet-price").innerText : "";
const petQuantity = document.getElementById("pet-quantity") ? document.getElementById("pet-quantity").innerText : "";



const arrayPet =[{
  id: petId,
  name: petName,
  description: petDescription,
  image: petImage,
  precio: petPrice,
  cantidad: petQuantity,
}];


//console.log(arrayPet);
// funcion
const setDogs =  () => {
 
  arrayPet.forEach((dog) => {
  //creo una card
  let card = document.createElement("div");
  // le doy una clase a la card
  card.className = "card";
  // creo el cuerpo html de la card
  card.innerHTML = `
    <img src="${dog.image}">
    <h3 class="nombre">${dog.name}<span></span></h3>
    <p class="descripcion">${dog.description}</p>
    <p class="precio">${dog.precio} €</p>
   `;
  // agrego la card dentro de un container
  container.append(card);

  // creo un boton para añadir, le añado texto y una clase, lo agrego a la card
  let addDog = document.createElement("button");
  addDog.innerText = "Añadir";
  addDog.className = "anadir";

  card.append(addDog);
  // agrego un evento al boton, para cuando haga click, me añada al carrito,
  // que lo tengo como un array vacio, me agrege toda la info.
  addDog.addEventListener("click", () => {
    // hay que saber si en el carrito esta el producto
    const dogRepeat = cart.some((repeatDog) => {
      return repeatDog.id === dog.id;
    });
    console.log(dogRepeat);
    //Ahora recorre el array y si encuentra uno repetido le suma la cantidad
    //y con un condicional if mostramos los repetidos y los que no.
    if (dogRepeat) {
      cart.map((dogs) => {
        if (dogs.id === dog.id) {
          dogs.cantidad++;
        }
      });
    } else {
      cart.push({
        id: dog.id,
        img: dog.image,
        nombre: dog.name,
        descripcion: dog.description,
        precio: dog.precio,
        cantidad: dog.cantidad,
      });
    }
    console.log(cart);
    if (addDog) {
      alert("Añadido a tu carrito!");
      countCart();
      saveCart();
    }
  });
});

};


