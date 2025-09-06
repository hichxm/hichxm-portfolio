<?php

namespace Hichxm\Http\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public const DATA = [
        'categories' => [
            [
                'name' => 'Languages de programmation',
                'sub-categories' =>  [
                    [
                        'name' => 'Frontend',
                        'elements' =>  [
                            [
                                'name' => 'ViteJS',
                                'image_path' => 'vite.png',
                            ],
                            [
                                'name' => 'React',
                                'image_path' => 'react.png',
                            ],
                            [
                                'name' => 'VueJS',
                                'image_path' => 'vue.png',
                            ],
                            [
                                'name' => 'TailwindCSS',
                                'image_path' => 'tailwind.png',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Backend',
                        'elements' =>  [
                            [
                                'name' => 'PHP',
                                'image_path' => 'php.png',
                            ],
                            [
                                'name' => 'NodeJS',
                                'image_path' => 'nodejs.png',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Frameworks',
                        'elements' =>  [
                            [
                                'name' => 'Laravel',
                                'image_path' => 'laravel.png',
                            ],
                            [
                                'name' => 'Symfony',
                                'image_path' => 'symfony.png',
                            ],
                            [
                                'name' => 'ExpressJS',
                                'image_path' => 'express.png',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Services',
                'sub-categories' =>  [
                    [
                        'name' => 'Cloud',
                        'elements' =>  [
                            [
                                'name' => 'OVHCloud',
                                'image_path' => 'ovh.png',
                            ],
                            [
                                'name' => 'AWS',
                                'image_path' => 'aws.png',
                            ],
                            [
                                'name' => 'Scaleway',
                                'image_path' => 'scaleway.png',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Logs & Monitoring',
                        'elements' =>  [
                            [
                                'name' => 'Plesk',
                                'image_path' => 'plesk.png',
                            ],
                            [
                                'name' => 'cPanel',
                                'image_path' => 'cpanel.png',
                            ],
                            [
                                'name' => 'Grafana',
                                'image_path' => 'grafana.png',
                            ],
                            [
                                'name' => 'Graylog',
                                'image_path' => 'graylog.png',
                            ],
                        ],
                    ],
                    [
                        'name' => 'Databases',
                        'elements' =>  [
                            [
                                'name' => 'PostgreSQL',
                                'image_path' => 'pgsql.png',
                            ],
                            [
                                'name' => 'MySQL',
                                'image_path' => 'mysql.png',
                            ],
                            [
                                'name' => 'MongoDB',
                                'image_path' => 'mongodb.png',
                            ],
                            [
                                'name' => 'Elasticsearch',
                                'image_path' => 'elasticsearch.png',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'projects' => [
            [
                'name' => 'Booki - Trouvez votre hébergement',
                'link' => 'https://hichxm.github.io/openclassrooms-booki/',
                'description' => 'Intégration d\'une maquette Figma pour l\'entreprise fictive Booki (location immobilière) responsive (desktop, tablet et mobile) en HTML & CSS.',
                'image_path' => 'booki.webp',
                'tags' => [
                    'HTML & CSS',
                    'Responsive',
                    'From scratch',
                ],
                'links' => [
                    [
                        'text' => 'Github',
                        'type' => 'primary',
                        'icon' => 'fa fa-github',
                        'href' => 'https://github.com/hichxm/openclassrooms-booki',
                    ],
                    [
                        'text' => 'Visiter',
                        'type' => 'outline-primary',
                        'icon' => 'fa fa-globe',
                        'href' => 'https://hichxm.github.io/openclassrooms-booki',
                    ],
                ],
            ],
            [
                'name' => 'Kasa - Chez vous, partout et ailleurs',
                'link' => 'https://hichxm.github.io/openclassrooms-kasa/',
                'description' => 'Intégration d\'une maquette Figma pour l\'entreprise fictive Kasa (agence immobilière) avec React en respectant au mieux les bonnes pratiques du framework.',
                'image_path' => 'kasa.webp',
                'tags' => [
                    'HTML & CSS',
                    'React',
                    'Responsive',
                    'From scratch',
                ],
                'links' => [
                    [
                        'text' => 'Github',
                        'type' => 'primary',
                        'icon' => 'fa fa-github',
                        'href' => 'https://github.com/hichxm/openclassrooms-kasa',
                    ],
                    [
                        'text' => 'Visiter',
                        'type' => 'outline-primary',
                        'icon' => 'fa fa-globe',
                        'href' => 'https://hichxm.github.io/openclassrooms-kasa/',
                    ]
                ],
            ],
            [
                'name' => 'Nina Carducci - Photographe',
                'link' => 'https://hichxm.github.io/openclassrooms-nina-carducci/',
                'description' => 'Optimisation SEO, accessibilité et performance du portfolio de la photographe fictive Nina Carducci.',
                'image_path' => 'nina.webp',
                'tags' => [
                    'HTML & CSS',
                    'JavaScript',
                    'Optimization',
                    'Google PageSpeed',
                ],
                'links' => [
                    [
                        'text' => 'Github',
                        'type' => 'primary',
                        'icon' => 'fa fa-github',
                        'href' => 'https://github.com/hichxm/openclassrooms-nina-carducci/tree/optimization',
                    ],
                    [
                        'text' => 'Visiter',
                        'type' => 'outline-primary',
                        'icon' => 'fa fa-globe',
                        'href' => 'https://hichxm.github.io/openclassrooms-nina-carducci/',
                    ]
                ],
            ],
        ],
    ];

    public static function home(Request $request, Response $response): Response
    {
        $content = render_template('home.twig', [
            'data' => self::DATA,
        ]);

        $response->setContent($content);
        $response->setStatusCode(200);

        return $response;
    }
}