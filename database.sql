CREATE TABLE homes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  address VARCHAR(255),
  city VARCHAR(100),
  state VARCHAR(2),
  zip_code VARCHAR(10),
  bedrooms INT,
  bathrooms FLOAT,
  home_size_sqft INT,
  lot_size_sqft INT,
  year_built INT,
  price DECIMAL(12,2),
  image_filename VARCHAR(255)
);

INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('7372 Washington Blvd', 'Silver Spring', 'MD', '20901', '4', '3.3', '3200', '9000', '1967', '125000', 'home1.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('6913 Main St', 'Gaithersburg', 'MD', '20877', '1', '1.5', '3800', '7000', '1973', '605000', 'home2.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('1516 Washington Blvd', 'Baltimore', 'MD', '21201', '6', '1.7', '3400', '1500', '1962', '765000', 'home3.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('992 Maple Ave', 'Bowie', 'MD', '20715', '3', '3.4', '3000', '6000', '1955', '375000', 'home4.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('2526 Main St', 'Columbia', 'MD', '21044', '6', '3.6', '1000', '5500', '1997', '185000', 'home5.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('531 Elm St', 'Baltimore', 'MD', '21201', '6', '2.5', '3800', '2500', '1955', '280000', 'home6.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('749 Main St', 'Silver Spring', 'MD', '20901', '2', '3.3', '3700', '8500', '1984', '730000', 'home7.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('6278 Cedar Ln', 'Bowie', 'MD', '20715', '6', '1.4', '2000', '9000', '1966', '415000', 'home8.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('8518 Main St', 'Gaithersburg', 'MD', '20877', '5', '3.7', '1100', '1000', '1998', '205000', 'home9.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('5981 Pine St', 'Bethesda', 'MD', '20814', '2', '1.3', '3200', '1500', '1990', '555000', 'home10.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('4604 Maple Ave', 'Rockville', 'MD', '20850', '1', '1.4', '1200', '7500', '1985', '860000', 'home11.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('2917 Washington Blvd', 'Baltimore', 'MD', '21201', '6', '3.5', '2100', '4000', '1985', '860000', 'home12.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('5814 Oak Dr', 'Gaithersburg', 'MD', '20877', '6', '3.8', '1200', '4000', '1982', '820000', 'home13.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('3712 Elm St', 'Baltimore', 'MD', '21201', '1', '2.2', '3100', '5500', '1973', '205000', 'home14.jpg');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('2965 Washington Blvd', 'Silver Spring', 'MD', '20901', '3', '4.0', '1000', '8000', '2022', '130000', 'home15.webp');
INSERT INTO homes (address, city, state, zip_code, bedrooms, bathrooms, home_size_sqft, lot_size_sqft, year_built, price, image_filename) VALUES ('4187 Main St', 'Annapolis', 'MD', '21401', '2', '1.6', '1400', '2500', '2014', '875000', 'home16.jpg');
