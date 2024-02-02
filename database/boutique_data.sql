SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

-- Inserting a category with a fish origin name
INSERT INTO categories (name) VALUES ('Atlantic');
INSERT INTO categories (name) VALUES ('Pacific');
INSERT INTO categories (name) VALUES ('Mediterranean');
INSERT INTO categories (name) VALUES ('Baltic');
INSERT INTO categories (name) VALUES ('Caribbean');

INSERT INTO tva (rate_tva) VALUES (5.5);
INSERT INTO tva (rate_tva) VALUES (20);

INSERT INTO products (name, description, stock, path_img, price_ht, price_ttc, price_tva, weight, categories_id, tva_id)
    VALUES 
 ('Salmon', 'Description for Product 1', 100, 'img/product/product1.jpg', 50.00, 60.00, 20.00, 1.5, 1, 1),
 ('Tuna', 'Description for Product 2', 75, 'img/product/product2.jpg', 75.00, 90.00, 15.00, 2.0, 2, 2),
 ('Cod', 'Description for Product 3', 50, 'img/product/product3.jpg', 100.00, 120.00, 20.00, 1.8, 1, 2),
 ('Trout', 'Description for Product 4', 120, 'img/product/product4.jpg', 45.00, 54.00, 9.00, 1.2, 3, 1),
 ('Snapper', 'Description for Product 5', 80, 'img/product/product5.jpg', 60.00, 72.00, 12.00, 1.5, 4, 2),
 ('Bass', 'Description for Product 6', 90, 'img/product/product6.jpg', 70.00, 84.00, 14.00, 1.7, 5, 1),
 ('Halibut', 'Description for Product 7', 110, 'img/product/product7.jpg', 55.00, 66.00, 11.00, 1.3, 1, 2),
 ('Catfish', 'Description for Product 8', 65, 'img/product/product8.jpg', 85.00, 102.00, 17.00, 1.9, 2, 1),
 ('Mahi-mahi', 'Description for Product 9', 95, 'img/product/product9.jpg', 40.00, 48.00, 8.00, 1.0, 3, 2),
 ('Swordfish', 'Description for Product 10', 75, 'img/product/product10.jpg', 65.00, 78.00, 13.00, 1.6, 4, 1) ;


UPDATE products
SET description = '
   A highly prized fish with pinkish-orange flesh.
   Known for its rich flavor and tender texture.
   Salmon is a popular choice for grilling, baking, or smoking.
   It\'s packed with omega-3 fatty acids, which are good for heart health.
   Found in both freshwater and saltwater environments.
   Salmon often migrates long distances for spawning.
   Different species include Chinook, Coho, and Atlantic.
   Often served with lemon, dill, or a creamy sauce.
   Can be enjoyed raw in sushi or sashimi dishes.
   A versatile fish that complements a variety of cuisines.
' WHERE id=1;

UPDATE products
SET description = '
   A large, fast-swimming fish with a streamlined body.
   Found in both tropical and temperate oceans worldwide.
   Tuna is known for its firm flesh and rich flavor.
   It\'s a favorite choice for sushi and sashimi.
   Also commonly grilled, seared, or canned.
   Tuna fishing can be controversial due to overfishing concerns.
   Different species include Yellowfin, Bluefin, and Albacore.
   Tuna is a good source of protein and omega-3 fatty acids.
   It\'s often enjoyed as a steak or in salads.
   Some species of tuna, like Bluefin, are highly prized and can be expensive.
' WHERE id=2;

UPDATE products
SET description = '
   A mild-flavored fish with a dense, flaky texture.
   Found in both Atlantic and Pacific oceans.
   Cod is a versatile fish used in many cuisines worldwide.
   It\'s often battered and fried to make fish and chips.
   Cod is also delicious baked, broiled, or poached.
   Sustainable fishing practices are crucial for maintaining cod populations.
   Different species include Atlantic cod and Pacific cod.
   Cod liver oil is rich in vitamins A and D.
   It\'s a good source of lean protein and low in fat.
   Cod is often served with lemon, herbs, or a creamy sauce.
' WHERE id=3;

UPDATE products
SET description = '
  A freshwater fish known for its delicate flavor.
   Trout is native to North America, Europe, and Asia.
   It\'s a popular game fish for recreational anglers.
   Trout can be found in rivers, streams, and lakes.
   Rainbow trout is one of the most common varieties.
   Trout is delicious grilled, smoked, or pan-fried.
   It\'s rich in omega-3 fatty acids and protein.
   Different species include Brown trout and Brook trout.
   Trout is often served with almonds or a lemon-butter sauce.
   It\'s a healthy choice for a balanced diet.
' WHERE id=4;

UPDATE products
SET description = '
   A versatile fish with a mild, slightly sweet flavor.
   Found in warm coastal waters around the world.
   Snapper is popular in Caribbean and Asian cuisines.
   It\'s prized for its firm texture and white flesh.
   Red snapper is one of the most well-known varieties.
   Snapper can be grilled, baked, or steamed.
   Sustainable fishing practices are important for snapper conservation.
   Different species include Yellowtail and Mangrove snapper.
   Snapper is often served with tropical fruit salsa.
   It pairs well with citrus, garlic, and herbs.
' WHERE id=5;

UPDATE products
SET description = '
  A freshwater and saltwater fish known for its large mouth.
   Bass is prized by anglers for its fighting ability.
   Found in lakes, rivers, and coastal waters worldwide.
   Different species include Largemouth and Smallmouth bass.
   Bass has a mild flavor and firm, white flesh.
   It\'s commonly grilled, fried, or baked.
   Sustainable fishing practices are crucial for bass populations.
   Bass tournaments are popular among competitive anglers.
   Bass is often served with lemon, herbs, or a butter sauce.
   It\'s a popular choice for recreational fishing.
' WHERE id=6;

UPDATE products
SET description = '
  A large, flatfish found in both the North Atlantic and Pacific oceans.
   Halibut has a mild, sweet flavor and a firm texture.
   It\'s prized for its thick, meaty fillets.
   Halibut fishing is regulated to ensure sustainable harvests.
   Different species include Pacific and Atlantic halibut.
   Halibut is versatile and can be grilled, baked, or pan-seared.
   It\'s a good source of lean protein and omega-3 fatty acids.
   Halibut cheeks are considered a delicacy.
   Halibut is often served with citrus, herbs, or a light sauce.
   It pairs well with vegetables and grains.
' WHERE id=7;

UPDATE products
SET description = '
  A freshwater fish with a distinctive whisker-like barbels.
   Catfish are found in rivers, lakes, and ponds worldwide.
   They have a mild, sweet flavor and tender flesh.
   Catfish are popular in Southern cuisine, often fried.
   They can also be grilled, baked, or blackened.
   Farm-raised catfish are widely available year-round.
   Different species include Channel, Blue, and Flathead catfish.
   Catfish farming is an important industry in many regions.
   Catfish is often served with tartar sauce or a spicy remoulade.
   It\'s a versatile fish that can be prepared in many ways.
' WHERE id=8;

UPDATE products
SET description = '
  A colorful, tropical fish known for its vibrant appearance.
   Mahi-mahi is found in warm waters around the world.
   It has a firm texture and mild, sweet flavor.
   Mahi-mahi is often called "dolphinfish" but is not related to dolphins.
   It\'s a popular choice for grilling, broiling, or blackening.
   Mahi-mahi is rich in protein and low in fat.
   Different species include Dorado and Pompano dolphin.
   Mahi-mahi fishing is a popular sport in many tropical regions.
   Mahi-mahi fillets are often served with mango salsa.
   It\'s a delicious and nutritious fish choice.
' WHERE id=9;

UPDATE products
SET description = '
    A large, predatory fish with a long, sword-like bill.
    Swordfish are found in both temperate and tropical oceans.
    They have a mild, slightly sweet flavor and a firm texture.
    Swordfish is often grilled, broiled, or pan-seared.
    It\'s a popular choice for steaks due to its thickness.
    Swordfish steaks are often marinated before cooking.
    Sustainable fishing practices are important for swordfish conservation.
    Swordfish can grow to impressive sizes, weighing hundreds of pounds.
    It\'s a good source of protein and omega-3 fatty acids.
    Swordfish is often served with lemon, herbs, or a spicy sauce.
' WHERE id=10;

