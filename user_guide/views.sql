CREATE VIEW v_menu_items AS
SELECT menuItem.ID AS menuItem_id, menuItem.name AS menuItem_name, price AS menuItem_price,menuItem.description AS menuItem_description, category.ID AS category_id, category.name AS category_name, generalCategory.id AS general_id, generalCategory.name AS general_name, location.ID AS location_id, location.name AS location_name FROM
menuItem INNER JOIN
category ON menuItem.category = category.ID
INNER JOIN location
ON menuItem.location = location.ID
INNER JOIN generalCategory
ON category.general = generalCategory.ID;

CREATE VIEW v_categories AS 
SELECT category.ID AS category_id, category.name AS category_name, category.location AS location_id, location.name AS location_name, generalCategory.ID AS general_id, generalCategory.name AS general_name
FROM category INNER JOIN
location ON category.location = location.ID
INNER JOIN generalCategory
ON category.general = generalCategory.ID;

CREATE VIEW v_reservation_details AS
select reservation.id AS reservation_id, reservation.firstName as first_name, reservation.lastName AS last_name, reservation.phone AS phone, reservation.email AS email, reservation.updated AS updated, reservation.due AS aeg, reservation.notes AS notes, reservation.people AS people, reservation.location AS location, location.name AS location_name, location.aadress AS location_address,
reservationItems.ID AS reservationItem_id, reservationItems.menuItem AS reservation_menuItem, menuItem.name AS menuItem, menuItem.price AS menuItem_price, reservationItems.amount AS reservationItem_amount
FROM reservation INNER JOIN 
location ON reservation.location = location.ID INNER JOIN
reservationItems ON reservation.ID = reservationItems.reservation
INNER JOIN menuItem ON
menuItem.ID = reservationItems.menuItem;

CREATE VIEW v_users AS
select users.id AS user_id, users.first_name, users.last_name, users.email, users.phone, groups.id AS group_id, groups.name, groups.description from 
users 
INNER JOIN users_groups
ON users.id = users_groups.user_id
INNER JOIN groups
ON users_groups.group_id = groups.id;


CREATE VIEW v_users_locations AS
SELECT users.id AS user_id , users.first_name, users.last_name, location.ID AS location_id , location.name AS location_name , location.aadress AS location_adderss FROM
users INNER JOIN users_groups
ON users.id = users_groups.user_id
INNER JOIN groups_locations
ON users_groups.group_id = groups_locations.group_id
INNER JOIN location
ON groups_locations.location_id = location.ID;