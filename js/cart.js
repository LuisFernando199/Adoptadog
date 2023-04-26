// Ahora una ventana modal para visualizar el carrito al pulsarlo
const showWindowCart = () => {
  // Primero forzamos que limpe todo el carrito
  windowContainer.innerHTML = "";
  // forzamos el display para que cada vez que haga click altere en none con el flex
  windowContainer.style.display = "flex";
  // creamos primero el header con un texto y un boton de cierre

  const header = document.createElement("div");
  header.className = "header";
  header.innerHTML = `
       <h1 class="header-title">Tú perrito</h1>
      `;

  windowContainer.append(header);
  const headerButton = document.createElement("h2");
  headerButton.innerHTML = "<img src='./assets/x.svg'>";
  headerButton.className = "header-button";
  header.append(headerButton);

  // cerrar la ventana modal
  headerButton.addEventListener("click", () => {
    windowContainer.style.display = "none";
  });

  // ahora recorremos el carro para agregarle los productos
  cart.forEach((dog) => {
    // mostrar lo que hay en el carro y lo recorremos, luego lo recojemos y lo mostramos.
    const cartContent = document.createElement("div");
    cartContent.className = "carrito-content";
    cartContent.innerHTML = `
      <img src="${dog.img}">
      <h3>${dog.nombre}</h3>
      &nbsp;&nbsp;
      <h4>${dog.precio} €</h4>
      <p>Cantidad: ${dog.cantidad}</p>
      <p>Total: ${dog.cantidad * dog.precio}€</p>
    `;
    windowContainer.append(cartContent);
    //console.log(cart.lenght)
  // boton eliminar
    const deleteCart = document.createElement("span");

    deleteCart.innerHTML = "<img src='../Adoptadog/assets/delete.svg'>";
    deleteCart.className = "eliminar";
    cartContent.append(deleteCart);

    deleteCart.addEventListener("click", deleteDog)
    
  });

  // ahora vamos a calcular el total usando em metodo reduce

  const total = cart.reduce((cont, data) => cont + data.precio * data.cantidad , 0);

  // Ahora creamos el div donde agregar el total
  const totalCart = document.createElement("div");
  totalCart.className = "total-carrito";
  totalCart.innerHTML = `
     Total a pagar: ${total} €
    `;
  windowContainer.append(totalCart);

  // Ahora creamos un div donde pagar el pedido
  const pagar = document.createElement("button");
pagar.className = "anadir";
pagar.innerHTML = "Pedir";
windowContainer.append(pagar);
// pedir perro
pagar.addEventListener("click", () => {
  if(total == 0){
    alert("Tienes que elegir un perro minimo")
   }else{
   alert("Perro pedido")
}});

}
// llamada 
shop.addEventListener("click", () => { showWindowCart() });
 