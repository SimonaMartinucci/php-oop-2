<?php

require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Category.php';

$db = [
    new Type('Cibo croccante', 'Prodotto con carne e prosciutto', 'https://media.zooplus.com/bilder/7/400/384544_pla_affinity_ultima_medium_maxi_adult_rind_3kg_hs_01_7.jpg', 22.00, new Category('Cani', 'Prodotto per cani'), 'Cibo'),
    new Type('Giocattolo Interattivo', 'Gioco con piume e suoni per stimolare il gatto', 'https://www.vidaxl.it/dw/image/v2/BFNS_PRD/on/demandware.static/-/Sites-vidaxl-catalog-master-sku/default/dw657016cf/hi-res/1/2/4/5001/432008/image_2_432008.jpg?sw=400', 15.99, new Category('Gatti', 'Prodotto per gatti'), 'Giocattolo'),
    new Type('Shampoo Delicato', 'Shampoo specifico per il manto del cane, senza parabeni', 'https://www.naturepetshop.it/wp-content/uploads/linea-101-Shampoo-Sbiancante-per-Cani.jpg', 12.49, new Category('Cani', 'Prodotto per cani'), 'Cura e Igiene'),
    new Type('Lettiera Agglomerante', 'Lettiera che si compatta per facilitare la pulizia', 'https://media.zooplus.com/bilder/4/400/tigerino_crystal_babypowder_5l_1000x1000_4.jpg', 18.75, new Category('Gatti', 'Prodotto per gatti'), 'Lettiera'),
    new Type('Collare Regolabile', 'Collare in nylon resistente con chiusura sicura', 'https://www.thekill.it/11318-home_default/collare-regolabile-in-nylon-per-cane.jpg', 9.99, new Category('Cani', 'Prodotto per cani'), 'Accessori'),
    new Type('Tiragraffi Compact', 'Tiragraffi con superficie in sisal per gatti', 'https://media.zooplus.com/bilder/8/400/333019_pla_trixie_junior_kratzbaum_pepito_hs_01_8.jpg', 29.99, new Category('Gatti', 'Prodotto per gatti'), 'Arredamento'),
    new Type('Cuccia da Esterno', 'Cuccia resistente alle intemperie per cani di taglia media', 'https://arcaplanet.vtexassets.com/arquivos/ids/227349/canile-domus-mini.jpg?v=637454792222500000', 49.99, new Category('Cani', 'Prodotto per cani'), 'Arredamento'),
    new Type('Tiragraffi con Pallina', 'Tiragraffi verticale con pallina integrata per gatti', 'https://i.ebayimg.com/images/g/cecAAOSw1h5j0r4H/s-l400.jpg', 24.99, new Category('Gatti', 'Prodotto per gatti'), 'Giocattolo')
];
