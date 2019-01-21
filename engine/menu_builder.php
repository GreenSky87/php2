<?php
return [
                    [
                        'name' => 'Home',
                        'href' => '/',                                              
                    ],
                    
                    [
                        'name' => 'Man',
                        'href' => '/Man.php',
                        'podmenu' => [
                            [
                                'name' => 'Tees/Tank tops',
                                'href' => '/Tees_Tank tops.php',                                
                            ],
                            [
                                'name' => 'Shirts/Polos',
                                'href' => '/Shirts_Polos.php',                              
                            ],
                            [
                                'name' => 'Sweaters',
                                'href' => '/Sweaters.php',                              
                            ],
                            [
                                'name' => 'Sweatshirts/Hoodies',
                                'href' => '/Sweatshirts_Hoodies.php',                               
                            ],
                            [
                                'name' => 'Blazers',
                                'href' => '/Blazers.php',                               
                            ],
                            [
                                'name' => 'Jackets/vests',
                                'href' => '/Jackets_vests.php',                             
                            ],
                           
                        ],
                    ],
                    [
                        'name' => 'Woman',
                        'href' => '/Woman.php',
                        'podmenu' => [
                            [
                                'name' => 'Dresses',
                                'href' => '/Dresses.php',                               
                            ],
                            [
                                'name' => 'Tops',
                                'href' => '/Tops.php',                              
                            ],
                            [
                                'name' => 'Sweaters/Knits',
                                'href' => '/Sweaters_Knits.php',                                
                            ],
                            [
                                'name' => 'Jackets/Coats',
                                'href' => '/Jackets_Coats.php',                             
                            ],
                            [
                                'name' => 'Blazers',
                                'href' => '/Blazers.php',                               
                            ],
                            [
                                'name' => 'Denim',
                                'href' => '/Denim.php',                             
                            ],
                            [
                                'name' => 'Leggings/Pants',
                                'href' => '/Leggings_Pants.php',                                
                            ],
                            [
                                'name' => 'Skirts/Shorts',
                                'href' => '/Skirts_Shorts.php',                             
                            ],
                            [
                                'name' => 'Accessories',
                                'href' => '/Accessories.php',                               
                            ],
                        ],
                    ],
                    [
                        'name' => 'Kids',
                        'href' => '/Kids.php',  
                    ],
                     [
                        'name' => 'accoseriese',
                        'href' => '/accoseriese.php',
                    ],
                     [
                        'name' => 'featured',
                        'href' => '/featured.php',
                    ],
                    [
                         'name' => 'Товары',
                         'href' => '/catalog.php',
                         'podmenu' => [],
                    ],
                    [
                        'name' => 'reviews',
                        'href' => '/reviews.php', 
                    ],
                    [
                    'name' => 'Админка',
                    'security' => 'admin',
                    'podmenu' => [
                        [
                          'name' => 'Каталог',
                          'href' => '/admin/catalog/index.php',
                          'podmenu' => [],
                     ],
        ],
    ],
                 
        ];
?>