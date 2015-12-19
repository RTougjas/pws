CREATE VIEW v_menu_items AS
SELECT menuItem.ID AS menuItem_id, menuItem.name AS menuItem_name, price AS menuItem_price, category.ID AS category_id, category.name AS category_name, location.ID AS location_id, location.name AS location_name FROM
menuItem INNER JOIN
category ON menuItem.category = category.ID
INNER JOIN location
ON menuItem.location = location.ID;

CREATE VIEW v_categories AS 
SELECT category.ID AS category_id, category.name AS category_name, category.location AS location_id, location.name AS location_name, generalCategory.ID AS general_id, generalCategory.name AS general_name
FROM category INNER JOIN
location ON category.location = location.ID
INNER JOIN generalCategory
ON category.general = generalCategory.ID;