// Zona  variables
const container = document.getElementById("contenedor");
const shop = document.getElementById("carritoNavbar");
const windowContainer = document.getElementById("ventanaModal");
const amountCart = document.getElementById("amountCart");


let cart = JSON.parse(localStorage.getItem("cartKey")) || [];
// recorremos el objeto que contiene todos los perros en JSonPerritos.js

const getDogs = async () => {
  const resp = await fetch("dogs.json");
  const data = await resp.json()
  console.log(data)

  
data.forEach((dog) => {
  //creo una card
  let card = document.createElement("div");
  // le doy una clase a la card
  card.className = "card";
  // creo el cuerpo html de la card
  card.innerHTML = `
    <img src="${dog.img}">
    <h3 class="nombre">${dog.nombre}<span></span></h3>
    <p class="descripcion">${dog.descripcion}</p>
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
        img: dog.img,
        nombre: dog.nombre,
        descripcion: dog.descripcion,
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

getDogs();
