<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Subcategory2;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Pièces moteur et Huile",
           "Visibilité",
           "Direction / Suspension / Train",
           "Freinage",
           "Filtration" ,
           "Démarrage et Charge",
           "Embrayage et Boîte de vitesse",
           "Echappement",
           "Pièces Thermiques et Climatisation",
           "Accessoires et Equipements",
           "Pièces Habitacle",
           "Pneus et Equipements Roue",
           "Entretien et Nettoyage",
           "Attelage et Portage",
           "Carrosserie et peinture",
           "Outillage"
        ];
        $subcategories = [
           "Pièces moteur et Huile" => ["Courroies et Distribution",
                                       "Huile / Accessoires vidange",
                                       "Injection carburation",
                                       "Bougies et Pièces d'allumage",
                                       "Moteur et Culasse",
                                       "Capteurs et câbles moteur",
                                       "Turbo",
                                       "Pompes",
                                       "Supports moteur",
                                       "Lubrification",
                                       "Soupapes du moteur",
                                       "Alimentation carburant"] ,
           "Visibilité"   =>["Optiques et Phares",
                           "Essuie-glaces",
                           "Ampoules",
                           "Rétroviseurs",
                           "Essuyage des phares"],
           "Direction / Suspension / Train"  =>[
                                           "Amortisseurs",
                                           "Suspension d’Essieux",
                                           "Rotules / Direction",
                                           "Moyeux et Roulements",
                                           "Transmission",
                                           "Direction",
                                           "Butées",
                                           "Kits de réparation et d'assemblage",
                                           "Ressorts et Soufflets",
                                           "Autres pièces Suspension",
                                           "Sphères",
                                           "Suspension Pneumatique",
                                           "Rotules / Suspension"
                                        ],
           "Freinage"  =>[
                       "Plaquettes de frein",
                       "Disques de frein",
                       "Hydraulique",
                       "Freins à tambours",
                       "Capteurs et câbles de freinage",
                       "Assistance au freinage"
                        ],
           "Filtration"  =>[
                               "Filtres",
                               "Autres Pièces de Filtration",
                               "Huile / Accessoires vidange"
                            ],
           "Démarrage et Charge" =>[
                                   "Batteries",
                                   "Alternateur",
                                   "Démarreur",
                                   "Alterno-Démarreurs"
                                    ],
           "Embrayage et Boîte de vitesse" =>[
                                           "Embrayage et Volant-moteur",
                                           "Accessoires de boîte de vitesse",
                                           "Autres pièces d'Embrayage"
                                        ],
           "Echappement" =>[
                           "Capteurs d'échappement",
                           "Silencieux et Tubes",
                           "Catalyseurs et Filtres à particules",
                           "Accessoires de montage",
                           "Autres pièces d'échappement"
                            ],
           "Pièces Thermiques et Climatisation" =>[
                                                   "Refroidissement",
                                                   "Chauffage et Ventilation",
                                                   "Climatisation",
                                                   "Capteurs et Sondes thermiques"

                                                ],
           "Accessoires et Equipements" =>[
                                           "Habillement et Confort Intérieur",
                                           "Aide à la conduite et au stationnement",
                                           "Quincaillerie",
                                           "Sécurité et Signalisation",
                                           "Equipement Hiver"
                                            ],
           "Pièces Habitacle" =>[
                                   "Vérins",
                                   "Lève-vitres",
                                   "Serrure / Fermeture",
                                   "Commandes et Pédalier",
                                   "Electricité",
                                   "Autres pièces d'habitacle",
                                   "Klaxon, avertisseurs sonores",
                                   "Joints d'habitacle"
                                ],
           "Pneus et Equipements Roue" =>["Chaînes-neiges et Equipements Roue"],
           "Entretien et Nettoyage" =>[
                                       "Additifs et Traitements spécifiques",
                                       "Nettoyage et Protection Extérieure",
                                       "Réparation et Maintenance",
                                       "Nettoyage et Protection de l'Habitacle",
                                       "Liquides de fonctionnement",
                                       "Accessoires Nettoyage"

                                    ],
           "Attelage et Portage" =>[
                                   "Attelage",
                                   "Accessoires d’Attelage et Portage"
                                ],
           "Carrosserie et peinture" =>[
                                   "Pare-choc",
                                   "Partie arrière",
                                   "Portières",
                                   "Partie avant",
                                   "Ailes",
                                   "Capot",
                                   "Vitres",
                                   "Grille de radiateur"
                                ],
           "Outillage" =>[
                        "Outillage divers & coffrets",
                       "Eclairage",
                    //    "Mesure",
                    //    "Kit de tournevis",
                    //    "Outils vidange",
                    //    "Pinces",
                    //    "Pompe à graisse",
                    //    "Clé pour bougie d'allumage",
                    //    "Clés Allen"
                    ]
        ];
        $subcategories2 = [
            //Pièces moteur et Huile
               "Courroies et Distribution" => [
                       "Pompe à eau + kit de courroie de distribution",
                       "Kit de distribution",
                       "Kit chaine distribution",
                       "Kit de courroies d'accessoires",
                       "Courroie trapézoïdale (d'accessoires)",
                       "Courroie trapézoïdale à nervures (d'accessoires)",
                       "Poulie Damper"
                    ],
               "Huile / Accessoires vidange" =>
                    [
                           "Huile moteur",
                           "Joint de bouchon vidange",
                           "Bouchon de vidange",
                           "Huiles boîte et pont",
                           "Huiles direction assistée"

                    ],
               "Injection carburation" =>
                    [
                               "Injecteur",
                               "Pompe à carburant",
                               "Debitmètre de masse d'air",
                               "Electrovanne",
                               "Soupape d'injection"
                    ],
               "Bougies et Pièces d'allumage" =>
                    [
                               "Bougie d'allumage",
                               "Bougie de préchauffage",
                               "Bobine d'allumage",
                               "Jeu de fils d'allumage",
                               "Faisceau d'allumage",
                               "Tête d'allumeur",
                               "Doigt allumeur",
                               "Relais, boitier de préchauffage"
                    ],
               "Moteur et Culasse" =>
                    [
                               "Joint de culasse",
                               "Joint de cache culbuteurs",
                               "Pochette de joint moteur",
                               "Bague d'étanchéité, vilebrequin",
                               "Vis de culasse"
                    ],
               "Capteurs et câbles moteur" =>
                    [
                               "Capteur, régime",
                               "Capteur, position d'arbre à cames",
                               "Capteur, pression du tuyau d'admission",
                               "Capteur, pression de carburant",
                               "Capteur, pression d'huile"

                    ],

               "Turbo" =>
                    [
                               "Turbo Compresseur",
                               "Durite de turbo",
                               "Capteur de pression de Turbo",
                               "Kit de montage Turbo"
                    ],

               "Pompes" =>
                    [
                           "Pompe à eau",
                           "Pompe à carburant",
                           "Pompe à haute pression",
                           "Pompe d'injection",
                           "Pompe à eau additionnelle"
                    ],

               "Supports moteur" =>
                    [
                           "Support moteur",
                           "Support, suspension du moteur",
                           "Butée élastique, suspension du moteur",
                           "Support de palier, suspension du moteur"

                    ],

               "Lubrification" =>
                    [
                               "Pompe à huile",
                               "Jauge de niveau d'huile",
                               "Joint de carter d’huile",
                               "Carter d'huile",
                               "Bouchon de remplissage d'huile"
                    ],
               "Soupapes du moteur" =>
                    [
                               "Soupape d'admission",
                               "Soupape d'échappement",
                               "Joint de queue de soupape",
                               "Poussoir hydraulique",
                               "Guide de soupape"
                    ],
               "Alimentation carburant" =>
                    [
                               "Réservoir de carburant",
                               "Module de dosage (AdBlue)"
                    ],
            //Visibilité
               "Optiques et Phares" =>
                    [
                           "Phare",
                           "Feu arrière",
                           "Feu antibrouillard",
                           "Feu clignotant",
                           "Feu de position",
                           "Interrupteur, feu-marche arrière"
                    ],
               "Essuie-glaces" =>
                    [
                           "Balai d'essuie-glace",
                           "Moteur d'essuie-glace",
                           "Bras d'essuie-glace",
                           "Pompe de lave-glace",
                           "Lave-glace",
                           "Bouchon, réservoir de lave-glace",
                           "Capteur de pluie"
                    ],

               "Ampoules" =>
                    [
                           "Ampoule de phare",
                           "Ampoule, feu stop/feu arrière",
                           "Ampoule, feu de stationnement/de position",
                           "Ampoule, feu clignotant",
                           "Ampoule, feu longue portée",
                           "Ampoule, feu antibrouillard",
                           "Ampoule, feu plafonnier"
                    ],
               "Rétroviseurs" =>
                    [
                           "Rétroviseur extérieur",
                           "Verre de rétroviseur, rétroviseur extérieur",
                           "Revêtement, rétroviseur extérieur"
                    ],
               "Essuyage des phares" =>
                    [
                           "Pompe d'eau de nettoyage, nettoyage des phares",
                           "Bras d'essuie-glace, nettoyage des phares"
                    ],
            //Direction / Suspension / Train
               "Amortisseurs" =>
                    [
                           "Amortisseurs avant",
                           "Amortisseurs arrière",
                           "Amortisseur à l'unité"
                    ],
               "Suspension d’Essieux" =>
                    [
                          "Triangle ou bras de suspension",
                          "Silent bloc de suspension",
                          "Suspension, corps de l'essieu",
                          "Jeu de bras, suspension de roue"
                    ],
               "Rotules / Direction" =>
                    [
                        "Rotule de direction",
                        "Biellette de direction",
                        "Rotule de direction intérieure",
                        "Joint-soufflet, direction",
                        "Barre de direction"
                    ],
               "Moyeux et Roulements" =>
                [
                    "Roulement de roue",
                    "Moyeu de roue",
                    "Circlip",
                    "Bague d'étanchéité, roulement de roue"
                ],
                "Transmission" =>
                    [
                        "Cardan",
                        "Tête de cardan, Joint homocinétique",
                        "Soufflet de cardans",
                        "Bague d'étanchéité, différentiel",
                        "Joint, arbre longitudinal",
                        "Palier central d'arbre de transmission",
                        "Croisillon de transmission, satellite-différentiel"
                    ],
                "Direction" =>
                    [
                        "Crémaillère de direction",
                        "Pompe de direction assistée",
                        "Soufflets de direction",
                        "Colonne de direction",
                        "Jeu de joints-soufflets, direction"
                    ],
                "Butées" =>
                    [
                        "Butée simple de jambe élastique (coupelle, semelle)",
                        "Butée élastique, suspension",
                        "Anneau, palier-support jambe de suspension",
                        "Joint, butée simple de jambe élastique"
                    ],
                "Kits de réparation et d'assemblage" =>
                    [
                        "Kit de réparation, suspension du stabilisateur",
                        "Kit de réparation, suspension de roue"
                    ],
                "Ressorts et Soufflets" =>
                    [
                        "Ressort",
                        "Soufflets d'amortisseur",
                        "Lame de ressort",
                        "Coussinet de palier, ressort à lames",
                        "Bride de ressort"
                    ],
                "Autres pièces Suspension" =>
                    [
                        "Suspension, stabilisateur",
                        "Coussinet de palier, stabilisateur",
                        "Fusée d'essieu, suspension de roue"
                    ],
                "Sphères" =>
                    [
                        "Accumulateur de, suspension/amortissement (Sphère)"
                    ],
                "Suspension Pneumatique" =>
                    [
                        "Ressort pneumatique, châssis"
                    ],
                "Rotules / Suspension" =>
                    [
                        "Biellette de barre stabilisatrice",
                        "Rotule de suspension",
                        "Vis de serrage, suspension articulée/rotule de suspension"

                    ],
            // Freinage
               "Plaquettes de frein" =>
                    [
                           "Plaquettes de frein avant",
                           "Plaquettes de frein arrière",
                           "Contacteur d'usure de plaquettes de frein",
                           "Kit d'accessoires de plaquettes de frein"

                    ],
               "Disques de frein" =>
                    [
                           "Jeu de 2 disques de frein avant",
                           "Jeu de 2 disques de frein arrière",
                           "Disque de frein Unitaire",
                           "Vis, disque de frein",
                           "Déflecteur, disque de frein"
                    ],
               "Hydraulique" =>
                    [
                        "Liquide de frein",
                        "Étrier de frein neuf",
                        "Étrier de frein échange standard",
                        "Kit de réparation, étrier de frein",
                        "Flexible de frein",
                        "Maître-cylindre de frein",
                        "Accumulateur de pression, freinage",
                        "Régulateur (correcteur) de la force de freinage",
                        "Piston, étrier de frein"
                    ],
               "Freins à tambours" =>
                    [
                        "Cylindre de roue",
                        "Jeu de mâchoires de frein, frein de stationnement",
                        "Kit de freins, freins à tambours",
                        "Jeu de 4 mâchoires de frein",
                        "Jeu de 2 tambours de frein",
                        "Kit d'accessoires, mâchoire de frein"

                    ],
               "Capteurs et câbles de freinage" =>
                    [
                        "Capteur ABS",
                        "Câble de frein à main",
                        "Interrupteur des feux de freins",
                        "Anneau de palpeur, ABS"
                    ],
               "Assistance au freinage" =>
                    [
                       "Servo-frein",
                       "Pompe à vide, système de freinage",
                       "Joint, pompe à vide"
                    ],


            //Filtration
               "Filtres" =>
                    [
                           "Filtre à huile",
                           "Filtre à carburant",
                           "Filtre à air",
                           "Filtre d'habitacle",
                           "Filtre hydraulique, direction"

                    ],
               "Autres Pièces de Filtration" =>
                    [
                       "Couvercle, boîtier du filtre d'huile",
                       "Joint d'étanchéité, boîtier de filtre à huile",
                       "Boîtier, filtre de carburant",
                       "Kit de filtres hyrauliques, transmission automatique"
                    ],
               "Huile / Accessoires vidange" =>
                    [
                        "Huile moteur",
                        "Joint de bouchon vidange",
                        "Bouchon de vidange",
                        "Clé pour filtre à huile"

                    ],

               // Démarrage et Charge
               "Batteries" =>
                    [
                       "Batterie voiture",
                       "Condensateur d'antiparasitage"
                    ],
               "Alternateur" =>
                    [
                       "Alternateur neuf",
                       "Alternateur échange standard",
                       "Poulie roue libre, alternateur",
                       "Régulateur d'alternateur",
                       "Poulie, alternateur",
                       "Balais, alternateur"
                    ],

               "Démarreur" =>
                    [
                       "Démarreur neuf",
                       "Démarreur échange standard",
                       "Relais, démarreur",
                       "Interrupteur d'allumage/de démarreur",
                       "Contacteur, démarreur",
                       "Kit de réparation, démarreur"
                    ],
               "Alterno-Démarreurs" =>
                    [
                       "Générateur démarreur"
                    ],
            // Embrayage et Boîte de vitesse
               "Embrayage et Volant-moteur" =>
                    [
                       "Kit d'embrayage avec volant moteur",
                       "Kit d'embrayage",
                       "Volant moteur",
                       "Emetteur, embrayage",
                       "Récepteur, embrayage",
                       "Huile de transmission"

                    ],
               "Accessoires de boîte de vitesse" =>
                    [
                       "Suspension, boîte de vitesse manuelle",
                       "Bague d'étanchéité, boîte de vitesse manuel",
                       "Câble de commande de boite de vitesse",
                       "Kit de réparation, levier de changement de vitesse",
                       "Tringle de sélection/de changement de vitesses"
                    ],
               "Autres pièces d'Embrayage" =>
                    [
                       "Câble d'embrayage",
                       "Douille de guidage, embrayage",
                       "Commande, embrayage (GRA)"
                    ],
            // Echappement
               "Capteurs d'échappement" =>
                    [
                       "Vanne EGR",
                       "Sonde lambda",
                       "capteur de température de gaz d’échappement",
                       "Transmetteur de pression, contrôle des gaz d'échappement",
                       "Radiateur, réaspiration des gaz d'échappement"

                    ],
               "Silencieux et Tubes" =>
                    [
                       "Silencieux arrière",
                       "Tuyau d'échappement",
                       "Silencieux central",
                       "Silencieux avant",
                       "Échappement"
                    ],
               "Catalyseurs et Filtres à particules" =>
                    [
                       "Catalyseur",
                       "Filtre à particules / à suie, FAP",
                       "Conduite à press., capteur de press. (filtre particule/suie)",
                       "Précatalyseur"
                    ],
               "Accessoires de montage" =>
                    [
                       "Joint d'étanchéité, collecteur d'échappement",
                       "Silentbloc de suspension d'échappement",
                       "Collier de serrage, échappement",
                       "Joint d'étanchéité, tuyau d'échappement"
                    ],
               "Autres pièces d'échappement" =>
                    [
                       "Joint, soupape-AGR",
                           "Bague d'étanchéité, tuyau d'échappement",
                           "Tuyau flexible, échappement",
                           "Clapet de gaz d'échappement"
                    ],
            // Pièces Thermiques et Climatisation
               "Refroidissement" =>
                    [
                   "Thermostat d'eau",
                   "Radiateur du moteur",
                   "Liquides refroidissement",
                   "Durite de radiateur",
                   "Intercooler, échangeur"
                    ],

               "Chauffage et Ventilation" =>
                    [
                       "Résistance, pulseur d'air habitacle",
                       "Pulseur d'air (Ventilateur intérieur)",
                       "Radiateur de chauffage",
                       "Moteur électrique, pulseur d'air habitacle"
                    ],
               "Climatisation" =>
                    [
                      "Compresseur, climatisation",
                      "Condenseur, climatisation",
                      "Bouteille déshydratante",
                      "Actionneur de climatisation"
                    ],
               "Capteurs et Sondes thermiques" =>
                    [
                       "Sonde de température, liquide de refroidissement",
                       "Capteur, niveau d'eau de refroidissement"

                    ],
            //Accessoires et Equipements
               "Habillement et Confort Intérieur" =>
                    [
                       "Jeu de tapis de sol",
                       "Pare-soleil",
                       "Tapis de coffre"
                    ],
               "Aide à la conduite et au stationnement" =>
                    [
                       "Capteur, parctronic",
                       "Commande, parctronic",
                       "Parctronic",
                       "Support, Capteur-parctronic"
                    ],
               "Quincaillerie" =>
                    [
                   "Centrale clignotante",
                   "Relais",
                   "Adaptateur de batterie",
                   "Frein de vis",
                   "Manchon",
                   "Patte",
                   "Support",
                   "Témoin lumineux"
                    ],
               "Sécurité et Signalisation" =>
                    [
                     "Triangle de signalisation"
                    ],
               "Equipement Hiver" =>
                    [
                      "Bombe dégivrante",
                      "Gratte vitre",
                      "Chargeur de batterie",
                      "Booster de batterie"
                    ],
            //Pièces Habitacle
               "Vérins" =>
                    [
                       "Vérin de hayon, de coffre",
                       "Vérin de capot-moteur",
                       "Vérin de Hayon",
                       "Ressort pneumatique, capote"
                    ],
               "Lève-vitres" =>
                    [
                       "Mécanisme de lève-vitre",
                       "Interrupteur, lève-vitre",
                       "Moteur électrique, lève-vitre"
                    ],
               "Serrure / Fermeture" =>
                    [
                       "Bouchon, réservoir de carburant",
                       "Serrure de porte",
                       "Poignée de porte",
                       "Cylindre de serrure",
                       "Élément d'ajustage, verrouillage central"
                    ],
               "Commandes et Pédalier" =>
                    [
                        "Commutateur de colonne de direction",
                        "Interrupteur de commande, régulateur de vitesse",
                        "Comodo d'éclairage",
                        "Revêtement de la pédale, pédale d'embrayage"
                    ],
               "Electricité" =>
                    [
                        "Interrupteur",
                        "Connecteur de câbles",
                        "Fusible",
                        "Porte-fusibles"
                    ],
               "Autres pièces d'habitacle" =>
                    [
                        "Ressort tournant, Airbag",
                        "Cale-porte",
                        "Guidage à galets, porte coulissante",
                        "Capteur, qualité de l'air"
                    ],
               "Klaxon, avertisseurs sonores" =>
                    [
                      "Avertisseur sonore / Klaxon"
                    ],
               "Joints d'habitacle" =>
                    [
                        "Joint d'étanchéité de porte",
                        "Joint d'étanchéité, pare-brise",
                        "Joint d'étanchéité, vitre arrière"
                    ],


            // Pneus et Equipements Roue
               "Chaînes-neiges et Equipements Roue" =>
                    [
                       "Boulon de roue",
                       "Capteur de roue, syst. de contrôle de pression des pneus"
                    ],
            // Entretien et Nettoyage
               "Additifs et Traitements spécifiques" =>
                    [
                       "ADBLUE",
                       "Additif au carburant",
                       "Nettoyant pour moteurs",
                       "Additif, régénération du filtre à particules/à suie",
                       "Traitement injecteur",
                       "Anti-fuites Radiateur",
                       "Cérine"
                    ],

               "Nettoyage et Protection Extérieure" =>
                    [
                       "Nettoyant pour vitres",
                       "Nettoyant pour jantes",
                       "Nettoyant pour plastiques",
                       "Dégrippant",
                       "Entretien carrosserie"
                    ],
               "Réparation et Maintenance" =>
                    [
                        "Nettoyant pour freins/embrayage",
                        "Pâte à joints",
                        "Kit de réparation, palpeur des roues (contrôle press° pneus)",
                        "Démarreur moteur"
                    ],
               "Nettoyage et Protection de l'Habitacle" =>
                         [
                             "Nettoyant pour textiles/tapis",
                             "Nettoyant multi-usages",
                             "Produit d'entretien pour plastiques",
                             "Désinfectant Habitacle",
                             "Nettoyant pour plastiques"
                         ],
               "Liquides de fonctionnement" =>
                         [
                             "Liquide de frein",
                             "Liquides refroidissement",
                             "Antigel",
                             "Lave-glace",
                             "Huile pour transmission automatique",
                             "Huile hydraulique"
                         ],
               "Accessoires Nettoyage" =>
                         [
                             "Savon pour les mains",
                             "Bobine d'essuyage"

                         ],
            // Attelage et Portage
               "Attelage" =>
                    [
                               "Attelage",
                               "Faisceau d' attelage"
                    ],
               "Accessoires d’Attelage et Portage" =>
                    [
                                "Adaptateur, prise"
                    ],
            //Carrosserie et peinture
               "Pare-choc" =>
                    [
                                   "Pare-chocs",
                                   "Support, pare-chocs",
                                   "Enjoliveur, pare-chocs",
                                   "Kit de montage, choc avant",
                                   "Baguette et bande protectrice, pare-chocs",
                                   "Kit d'assemblage, pare-chocs"
                    ],
               "Partie arrière" =>
                    [
                               "Capuchon, crochet de remorquage",
                               "Support de lampe, feu arrière"
                    ],
               "Portières" =>
                    [
                        "Kit d'assemblage, porte",
                        "Baguette et bande protectrice, porte",
                        "Marche-pied",
                        "Panneau latéral"
                    ],
               "Partie avant" =>
                    [
                        "Fixation de phare",
                        "Grille de pare-chocs",
                        "Support projecteur principal",
                        "Grille de radiateur",
                        "Cadre, grille de radiateur",
                        "Enjoliveur, projecteur antibrouillard",
                        "Support de plaque d'immatriculation"

                    ],
               "Ailes" =>
                    [
                        "Aile",
                        "Kit de montage, aile",
                        "Passage de roue",
                        "Élargisseur d'aile"
                    ],

               "Capot" =>
                    [
                        "Capot-moteur",
                        "Kit d'assemblage, capot-moteur"
                    ],
               "Vitres" =>
                    [
                       "Cadre de pare-brise"
                    ],
                "Grille de radiateur" =>
                    [
                       "Grille de radiateur"
                    ],
            // Outillage
               "Outillage divers & coffrets" =>
                    [
                    ],
               "Eclairage" =>
                    [
                    ],

    ];
    $i = 1;
    $j = 1;
        foreach($categories as $category)
        {
            Category::create([
                'nom' => $category
            ]);
            foreach ($subcategories[$category] as  $subcategory)
            {
                Subcategory::create([
                    'category_id' => $i ,
                    'nom' => $subcategory
                ]);

                // if(array_key_exists($subcategory, $subcategories2))
                // {
                    foreach($subcategories2[$subcategory] as  $subcategory2)
                {
                    Subcategory2::create([
                        'subcategory_id' => $j,
                        'nom' => $subcategory2
                    ]);
                // }
                }
                $j++;
            }
            $i++;
        }


            }
}
