// objetos con todos nuestro perritos
/*const dogs = [
    {
      id: 1,
      nombre: "Border Collie",
      precio: 250,
      descripcion:"El Border Collie es un perro inteligente, ágil, leal y energético utilizado para pastorear ovejas.",
      img:
        "https://www.purina.es/sites/default/files/2021-02/BREED%20Hero_0018_border_collie.jpg",
      cantidad: 1,
    },
    {
      id: 2,
      nombre: "Teckel",
      precio: 300,
      descripcion:"El Teckel, también conocido como Dachshund, es un perro pequeño, valiente, inteligente y de patas cortas.",
      img:
        "https://www.purina.es/sites/default/files/styles/ttt_image_510/public/2021-02/BREED%20Hero%20Mobile_0130_dachshund_smooth_mini.jpg?itok=VWhDhag0",
      cantidad: 1,
    },
    {
      id: 3,
      nombre: 'Labrador Retriever',
      precio: 800,
      descripcion: 'Perro de tamaño mediano, muy amigable y activo,  valiente, inteligente y de patas grandes.',
      img: 'https://t1.ea.ltmcdn.com/es/razas/0/0/1/labrador-retriever_100_0_orig.jpg',
      cantidad: 1
    },
    {
      id: 4,
      nombre: 'Pastor Alemán',
      precio: 900,
      descripcion: 'Perro inteligente y leal, utilizado para trabajos de pastoreo y protección, muy servicial.',
      img: 'https://img.freepik.com/fotos-premium/pastor-aleman-3-anos-edad-sentado-delante-fondo-blanco_191971-25841.jpg?w=2000',
      cantidad: 1
    },
    {
      id: 5,
      nombre: 'Bulldog Inglés',
      precio: 1200,
      descripcion: 'Perro de tamaño mediano, robusto y musculoso, pero muy amigable, y gracioso.',
      img: 'https://img.freepik.com/fotos-premium/bulldog-britanico-bulldog-ingles-10-meses-edad-sentado-delante-fondo-blanco_191971-26441.jpg',
      cantidad: 1
    },
    {
      id: 6,
      nombre: 'Poodle',
      precio: 1000,
      descripcion: 'Perro de tamaño mediano a grande, muy inteligente y con rizos en el pelaje, muy simpatico con niños.',
      img: 'https://thumbs.dreamstime.com/b/persiga-toy-poodle-que-se-sienta-en-un-fondo-blanco-con-un-cuello-rojo-42201947.jpg',
      cantidad: 1
    },
    {
      id: 7,
      nombre: 'Chihuahua',
      precio: 500,
      descripcion: 'Perro pequeño, muy activo y alerta, con una personalidad fuerte.',
      img: 'https://previews.123rf.com/images/oksun70/oksun701411/oksun70141100411/34155057-chihuahua-perro-dom%C3%A9stico-aislado-en-fondo-blanco.jpg',
      cantidad: 1
    },
    {
      id: 8,
      nombre: 'Beagle',
      precio: 700,
      descripcion: 'Perro de tamaño mediano, con un sentido del olfato muy desarrollado.',
      img: 'https://thumbs.dreamstime.com/b/beagle-en-el-fondo-blanco-70042387.jpg',
      cantidad: 1
    },
    {
      id: 9,
      nombre: 'Boxer',
      precio: 1000,
      descripcion: 'Perro de tamaño mediano a grande, musculoso y muy enérgico.',
      img: 'https://media.istockphoto.com/id/514316126/es/foto/boxeador-sentado-en-frente-de-un-fondo-blanco.jpg?s=170667a&w=0&k=20&c=C1cVvCb1FTHqMgliFaULFZ9Fx2rnYKVNq1E7790ifHg=',
      cantidad: 1
    },
    {
      id: 10,
      nombre: 'Yorkshire Terrier',
      precio: 1200,
      descripcion: 'Perro pequeño y elegante, muy inteligente y leal a su dueño.',
      img: 'https://thumbs.dreamstime.com/b/yorkshire-terrier-que-se-sienta-en-frente-en-el-fondo-blanco-44563646.jpg',
      cantidad: 1
    },
    {
      id: 11,
      nombre: 'Golden Retriever',
      precio: 900,
      descripcion: 'Perro de tamaño mediano a grande, muy amigable y fácil de entrenar.',
      img: 'https://thumbs.dreamstime.com/b/golden-retriever-que-se-sienta-aislado-sobre-un-fondo-blanco-41242032.jpg',
      cantidad: 1
    },
    {
      id: 12,
      nombre: 'Schnauzer',
      precio: 800,
      descripcion: 'Perro de tamaño mediano, inteligente y leal a su familia.',
      img: 'https://thumbs.dreamstime.com/b/perro-schnauzer-miniatura-en-el-fondo-blanco-64005253.jpg',
      cantidad: 1
      },
      {
      id: 13,
      nombre: 'Rottweiler',
      precio: 1100,
      descripcion: 'Perro grande y fuerte, utilizado para trabajos de protección y rescate.',
      img: 'https://img.freepik.com/fotos-premium/rottweiler-cachorro-delante-fondo-blanco_87557-21089.jpg',
      cantidad: 1
      },
      {
      id: 14,
      nombre: 'Shih Tzu',
      precio: 900,
      descripcion: 'Perro pequeño y elegante, con un pelaje largo y sedoso.',
      img: 'https://thumbs.dreamstime.com/b/situaci%C3%B3n-de-a%C3%B1os-shih-tzu-contra-el-fondo-blanco-lindo-del-se-est%C3%A1-colocando-solamente-en-aislado-143787609.jpg',
      cantidad: 1
      },
      {
      id: 15,
      nombre: 'Doberman',
      precio: 1000,
      descripcion: 'Perro de tamaño mediano a grande, atlético y muy leal a su dueño.',
      img: 'https://previews.123rf.com/images/isselee/isselee0904/isselee090400217/4712908-doberman-pinscher-5-a%C3%B1os-delante-de-un-fondo-blanco.jpg',
      cantidad: 1
      },
      {
      id: 16,
      nombre: 'Cocker Spaniel',
      precio: 800,
      descripcion: 'Perro de tamaño mediano, muy amigable y de pelaje sedoso.',
      img: 'https://thumbs.dreamstime.com/b/cocker-spaniel-ingl%C3%A9s-que-se-sienta-delante-del-fondo-blanco-aislado-en-141772781.jpg',
      cantidad: 1
      },
      {
      id: 17,
      nombre: 'Pomerania',
      precio: 1200,
      descripcion: 'Perro pequeño y peludo, muy elegante y activo.',
      img: 'https://img.freepik.com/fotos-premium/perro-pomeranian-fondo-blanco_63176-471.jpg?w=2000',
      cantidad: 1
      },
      {
      id: 18,
      nombre: 'Bull Terrier',
      precio: 1100,
      descripcion: 'Perro de tamaño mediano, musculoso y leal a su familia.',
      img: 'https://thumbs.dreamstime.com/b/tipo-perro-de-bull-terrier-en-el-fondo-blanco-127395006.jpg',
      cantidad: 1
      },
      {
      id: 19,
      nombre: 'Husky Siberiano',
      precio: 1300,
      descripcion: 'Perro grande y fuerte, utilizado para trabajos de trineo y rescate.',
      img: 'https://thumbs.dreamstime.com/b/perro-husky-siberiano-en-el-fondo-blanco-90519732.jpg',
      cantidad: 1
      },
      {
      id: 20,
      nombre: 'Dálmata',
      precio: 1000,
      descripcion: 'Perro de tamaño mediano a grande, con un pelaje blanco con manchas negras.',
      img: 'https://thumbs.dreamstime.com/b/perro-d%C3%A1lmata-en-el-fondo-blanco-120061418.jpg',
      cantidad: 1
      }
      
  ];*/