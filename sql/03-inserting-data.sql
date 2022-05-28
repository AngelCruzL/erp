INSERT INTO role (name)
VALUES
('admin'),
('management'),
('deliveryman'),
('chef');

INSERT INTO branch (name, address, phone_number, employees_number, picture)
VALUES (
  'Azcapotzalco',
  'Castilla Oriente s/n, Col. Azcapotzalco Centro. Alcaldía Azcapotzalco, C.P. 02000',
  '55-55-55-55',
  20,
  'https://imgcdn.larepublica.co/cms/2013/06/25225454/elcorral0626-1000.jpg'
),(
  'Miguel Hidalgo',
  'Perif. Blvd. Manuel Ávila Camacho 5, Lomas de Sotelo, C.P. 53390',
  '55-54-55-55',
  14,
  'https://www.portafolio.co/files/article_main/uploads/2016/02/06/56b677d9e8322.jpeg'
),(
  'Gustavo A. Madero',
  'Av. Instituto Politécnico Nacional s/n, Unidad Profesional "Adolfo López Mateos", Col. Lindavista, Del. Gustavo A. Madero, México, D.F. C.P. 07738',
  '15-15-15-15',
  14,
  'https://s1.eestatic.com/2017/01/20/cocinillas/cocinillas_187497800_116284351_864x486.jpg'
);

INSERT INTO payment_method (name, data)
VALUES (
  'Tarjeta de crédito',
  'VISA, MasterCard, American Express'
);

INSERT INTO food (name, price, description, image, weigh, slug)
VALUES (
  'Veggie Burger',
  105.00,
  'Esta hamburguesa vegetariana está llena de verduras y quinua, incluyendo mucha proteína sin carne. Una gran alternativa a una hamburguesa de ternera e igual de abundante y abundante. Se puede cocinar a la parrilla o al horno.',
  'https://www.howsweeteats.com/wp-content/uploads/2013/10/Crispy-Autumn-Veg-Burgers-with-Apple-Cider-Slaw-1-4.jpg',
  175,
  'veggie-burger'
),(
  'Big Burguer',
  150.00,
  'Jugoso, grande, lleno de ingredientes de mi elección". "Carne de res de alta calidad, media a buena con queso y tocino en un panecillo multigrano". "¡Una enorme hamburguesa simple o triple con todas las guarniciones, queso, lechuga, tomate, cebolla y salsa especial o mayonesa!',
  'https://realfood.tesco.com/media/images/Burger-31LGH-a296a356-020c-4969-86e8-d8c26139f83f-0-1400x919.jpg',
  235,
  'big-burger'
),(
  'Bacon Cheeseburger',
  120.00,
  'Nuestra Bacon Cheeseburger con una mezcla de quesos cheddar y mozzarella, y tocino ahumado. Servida con lechuga, tomates, cebolla roja, pepinillos y mayonesa en un pan Kaiser tostado.',
  'http://bostonschihuahua.com.mx/wp-content/uploads/2015/09/sandyhamb-baconcheese-2x.jpg',
  200,
  'bacon-cheeseburger'
),(
  'BBQ Blue Cheese Burger',
  180.00,
  'Nuestra jugosa hamburguesa Angus cubierta con crujientes tiras de cebolla y blue cheese, bañados con salsa BBQ, acompañada de ensalada de col tipo Baja.',
  'http://bostonschihuahua.com.mx/wp-content/uploads/2015/09/sandyhamb-bbqbluecheese-2x.jpg',
  210,
  'bbq-blue-cheese-burger'
),(
  'Classic Burger',
  95.00,
  'Esta hamburguesa clásica está llena de carne de res, queso, tocino, lechuga, tomate, cebolla y quinua. Se puede cocinar a la parrilla o al horno.',
  'https://i0.wp.com/lacostilladejuan.com/wp-content/uploads/2020/06/hamburguesa_sencilla_2.jpg?fit=537%2C537&ssl=1',
  150,
  'classic-burger'
);

-- TODO: customer example

INSERT INTO employee (firstname, lastname, email, password, phone_number, profile_picture, role, branch)
VALUES (
  'Luis',
  'Lara',
  'luislara@email.com',
  '123456',
  '12-12-12-12',
  'https://scontent.fmex10-4.fna.fbcdn.net/v/t1.18169-9/13435481_1041652459204222_2686006024059272277_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=174925&_nc_ohc=Zn-gjULkF5YAX82xWA8&_nc_ht=scontent.fmex10-4.fna&oh=00_AT-FANEQNUPPf5bAGXHoYLD4mwlanEK9kxvGkR_odVaOCw&oe=62B6C44A',
  1,
  1
),(
  'Angel',
  'Cruz',
  'angelcruz@email.com',
  '123456',
  '12-12-12-12',
  'https://scontent.fmex10-4.fna.fbcdn.net/v/t1.18169-9/13435481_1041652459204222_2686006024059272277_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=174925&_nc_ohc=Zn-gjULkF5YAX82xWA8&_nc_ht=scontent.fmex10-4.fna&oh=00_AT-FANEQNUPPf5bAGXHoYLD4mwlanEK9kxvGkR_odVaOCw&oe=62B6C44A',
  4,
  3
),(
  'Maximiliano',
  'Vergas',
  'test1@email.com',
  '123456',
  '12-12-12-12',
  'https://scontent.fmex10-4.fna.fbcdn.net/v/t1.18169-9/13435481_1041652459204222_2686006024059272277_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=174925&_nc_ohc=Zn-gjULkF5YAX82xWA8&_nc_ht=scontent.fmex10-4.fna&oh=00_AT-FANEQNUPPf5bAGXHoYLD4mwlanEK9kxvGkR_odVaOCw&oe=62B6C44A',
  2,
  1
),(
  'Juan',
  'Rangel',
  'test2@email.com',
  '123456',
  '12-12-12-12',
  'https://scontent.fmex10-4.fna.fbcdn.net/v/t1.18169-9/13435481_1041652459204222_2686006024059272277_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=174925&_nc_ohc=Zn-gjULkF5YAX82xWA8&_nc_ht=scontent.fmex10-4.fna&oh=00_AT-FANEQNUPPf5bAGXHoYLD4mwlanEK9kxvGkR_odVaOCw&oe=62B6C44A',
  1,
  2
),(
  'Fernando',
  'Orozco',
  'test3@email.com',
  '123456',
  '12-12-12-12',
  'https://scontent.fmex10-4.fna.fbcdn.net/v/t1.18169-9/13435481_1041652459204222_2686006024059272277_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=174925&_nc_ohc=Zn-gjULkF5YAX82xWA8&_nc_ht=scontent.fmex10-4.fna&oh=00_AT-FANEQNUPPf5bAGXHoYLD4mwlanEK9kxvGkR_odVaOCw&oe=62B6C44A',
  4,
  2
),(
  'Abigail',
  'Martinez',
  'test4@email.com',
  '123456',
  '12-12-12-12',
  'https://scontent.fmex10-4.fna.fbcdn.net/v/t1.18169-9/13435481_1041652459204222_2686006024059272277_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=174925&_nc_ohc=Zn-gjULkF5YAX82xWA8&_nc_ht=scontent.fmex10-4.fna&oh=00_AT-FANEQNUPPf5bAGXHoYLD4mwlanEK9kxvGkR_odVaOCw&oe=62B6C44A',
  1,
  2
);