// cargar los datos del carrioto al localstorage

const saveCart = () => {
  return localStorage.setItem("cartKey", JSON.stringify(cart));
};

// recoger el cart

JSON.parse(localStorage.getItem("cartKey"));
