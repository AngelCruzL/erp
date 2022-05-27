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
  250,
  'veggie-burger'
);

-- TODO: customer example

INSERT INTO employee (firstname, lastname, password, phone_number, profile_picture, role, branch)
VALUES (

);