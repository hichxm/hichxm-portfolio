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
                'name' => 'Hicham SLIMANI — Portfolio',
                'link' => 'https://hichxm.fr/',
                'description' => 'Réalisation de mon portfolio personnel avec un backend Symfony et une intégration continue avec GitHub Actions.',
                'image_path' => 'hichxm.webp',
                'tags' => [
                    'PHP',
                    'Symfony',
                    'Docker',
                    'GitHub Actions',
                    'Continuous Integration',
                ],
                'links' => [
                    [
                        'text' => 'Github',
                        'type' => 'primary',
                        'icon' => 'fa fa-github',
                        'href' => 'https://github.com/hichxm/hichxm-portfolio/',
                    ],
                    [
                        'text' => 'Visiter',
                        'type' => 'outline-primary',
                        'icon' => 'fa fa-globe',
                        'href' => 'https://hichxm.fr/',
                    ]
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
        'testimonials' => [
//            [
//                'author' => 'Antonio Tina alternant à Lynx Business',
//                'content' => '
//                    “Il est très passionné par le code. Il aime
//                    apprendre même pendant son temps libre.
//                    Il a pris 4 alternants/apprentis sous son
//                    aile et ne se lasse pas de nous enseigner.
//                    Un excellent ajout à n\'importe quelle
//                    équipe !”
//                ',
//            ],
            [
                'author' => 'Pierre de MEDCOM',
                'content' => '
                    “Hicham a su aller immédiatement aux sources 
                    potentielles du problème et nous a aiguillé 
                    sur des pistes pour un environnement de travail 
                    plus serein. Il nous avait prévenu qu\'il pensait 
                    régler le problème en une heure et effectivement, 
                    le bug avait été corrigé en 40 minutes. ”
                ',
            ],
            [
                'author' => 'Jimmy Hoareau de DigitaWeb',
                'content' => '
                    “Très bonne mission, très bon relationnel.
                    Un développeur qui n’a pas peur de
                    prendre le téléphone pour comprendre le
                    besoin et vite trouver des solutions, c’est
                    rare !”
                ',
            ],
            [
                'author' => 'Josue de DIGIT',
                'content' => '
                    “Disponible et très réactif, Hicham a su déployer 
                    en un temps record notre solution sur nos 
                    serveurs OVH. Parfaite maitrise du PHP et de 
                    Laravel. Un plaisir de collaborer avec lui ”
                ',
            ],
            [
                'author' => 'Faryal Bezahaf de Fauvert Professionnel',
                'content' => '
                    “Réactif, efficace et professionnel. Très
                    contente d\'avoir pu travailler avec Hicham
                    sur la migration de notre site web
                    e-commerce. Je recommande vivement.”
                ',
            ],
//            [
//                'author' => 'Thibault de ThankYouLab',
//                'content' => '
//                    “Excellente expérience avec Hicham. Très
//                    réactif et un travail de super qualité. Je
//                    recommande.”
//                ',
//            ],
            [
                'author' => 'Amadou de Amadou-Warr SOW',
                'content' => '
                    “Monsieur SLIMANI a réalisé une mission 
                    de formateur en développement auprès d\'un 
                    public exigeant, il est un interlocuteur passionné, 
                    compétent et serviable et sait s\'adapter aux 
                    situations complexes.”
                ',
            ],
//            [
//                'author' => 'Thierry de WebCom',
//                'content' => '
//                    “Hicham est extrêmement réactif, très performant.
//                    À l\'écoute de son client. Pas de conflit juste
//                    des conseils avisés. Vraiment je recommande a 100%”
//                ',
//            ]
        ]
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