@extends('layouts.mainLayout')

@section('metaTags')
    <meta name="description" content="{{ Helper::settings()->description }}">
    <meta keywords="{{ Helper::settings()->tags }}">


@endsection

@section('content')
    
    @include('partials.navbar')

 

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="special-heading">Énumération des <span>enseignements</span> </h1>
                <p>
                    Le tableau ci-dessous énumère mes enseignements :
                </p>
                <table class="table table-bordered">
                    <tr>
                        <th>Module</th>
                        <th>Cours</th>
                        <th>TD</th>
                        <th>TP</th>
                        <th>Année</th>
                    </tr>
                    <tr>
                        <td>Electronique et composants des systèmes informatique (1ère année MI)</td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td></td>
                        <td>2015 - 2018</td> 
                    </tr>
                    <tr>
                        <td>Technologie de l’information et de la communication (1ère année MI) </td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td></td>
                        <td></td>
                        <td>2015 - 2018</td> 
                    </tr>
                    <tr>
                        <td>Algorithmique I & II (1ère année ST)</td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td></td>
                        <td></td>
                        <td>2015 - 2017</td> 
                    </tr>
                    <tr>
                        <td>Algorithmique et structure de données (1ère année MI)</td>
                        <td></td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td></td>
                        <td>2015 - 2021</td> 
                    </tr>
                    <tr>
                        <td>Aspects juridiques et économiques des logiciels (L2-Informatique)</td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td></td>
                        <td></td>
                        <td>2017 - 2018</td> 
                    </tr>
                    <tr>
                        <td>Système d’aide à la décision (L3 ISIL - informatique)</td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td></td>
                        <td>2015 - 2021</td> 
                    </tr>
                    <tr>
                        <td>Rédaction scientifique (L3 ISIL - informatique)</td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td></td>
                        <td>2015 - 2018</td> 
                    </tr>
                    <tr>
                        <td>Intelligence artificielle (L3 SI - informatique)</td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td>2019 - 2021</td> 
                    </tr>
                    <tr>
                        <td>Développer et créer une startup (L3 SI - informatique)</td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td></td>
                        <td></td>
                        <td>2019 - 2021</td> 
                    </tr>
                    <tr>
                        <td>Ingénierie dirigée par les modèles (M1 ISIL - informatique)</td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td>2018 - 2019</td> 
                    </tr>
                    <tr>
                        <td>Systèmes multimédia (M1 ISIL - informatique)</td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td></td>
                        <td>2019 - 2020</td> 
                    </tr>
                    <tr>
                        <td>Intelligence computationnelle (M2 GSI - informatique)</td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td> <i class="fas fa-check"></i> </td>
                        <td>2016 - 2021</td> 
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <div class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="special-heading pb-4">Co-encadrement de thèses</h1>
                    <h4 class="special-heading" style="font-size: 18px"> 2018 : <span>Hayi Mohamed Yassine. </span></h4>
                    <p>
                        <b> Intitulé : </b> Vers une gestion intelligente des services sensibles au contexte dans l'Internet des Objets :  Approche centrée utilisateur. <br>
                        <b> Directeur de thèse :</b> Dr. Moumen Hamouma, Université de Batna. <br>
                        <b>Co-encadrant de thèse :</b> Dr. Zahira Chouiref.

                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="special-heading">Encadrement de <span>Masters 2</span> et Projets de <span>Fin de Cycle</span> </h1>
                <p>Tous les projets M2 encadrés dans le tableau ci-dessous étaient d’une durée de 5 à 6 mois.</p>
                <table class="table table-bordered">
                    <tr>
                        <th>Théme</th>
                        <th>Étudiants</th>
                        <th>Année universitaire</th>
                        <th>Spécialité</th>
                    </tr>
                    <tr>
                        <td>
                            <b>1.</b> Réalisation d’un annuaire généraliste permettant la publication et la recherche sur le Web, la globalité de tous les centres d’intérêts.
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Larbi Fela</li>
                                <li>Habet Mohamed </li>
                            </ul>
                        </td>
                        <td>2017 / 2018</td>
                        <td>Master ISIL & GSI </td>
                    </tr>
                    <tr>
                        <td>
                            <b>2.</b> Système de vidéosurveillance avec la reconnaissance faciale.
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Baghdadi Zineb</li>
                                <li>Labandji Besma</li>
                            </ul>
                        </td>
                        <td>2017 / 2018</td>
                        <td>Master GSI</td>
                    </tr>

                    <tr>
                        <td>
                            <b>3.</b> Développement d'une application mobile pour la visite personnalisée de sites culturels.
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Zamoum Hafidha </li>
                                <li>Mohamedi Mouna</li>
                            </ul>
                        </td>
                        <td>2018 / 2019</td>
                        <td>Master ISIL</td>
                    </tr>

                    <tr>
                        <td>
                            <b>4.</b> Développement d'une application mobile pour la visite personnalisée de sites culturels.
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Mostghanemi Soraya </li>
                                <li>Meslem Yasmine </li>
                            </ul>
                        </td>
                        <td>2018 / 2019</td>
                        <td>Master ISIL</td>
                    </tr>

                    <tr>
                        <td>
                            <b>5.</b> Etude des techniques de clustering pour améliorer la qualité des prédictions dans un processus de recommandation.
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Ait Kaci Ouardia </li>
                                <li>Zarouri Imane  </li>
                            </ul>
                        </td>
                        <td>2019 / 2020</td>
                        <td>Master ISIL</td>
                    </tr>

                    <tr>
                        <td>
                            <b>6.</b> Approche hybride pour l'étude de requêtes à préférences pour l'interrogation de bases de données volumineuses. 
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Hamidi Khadidja</li>
                                <li>Tazekrit Yasmine.</li>
                            </ul>
                        </td>
                        <td>2019 / 2020</td>
                        <td>Master GSI/ISIL </td>
                    </tr>

                    <tr>
                        <td>
                            <b>7.</b> Deep-Learning appliqué à la segmentation des images médicales.
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Saadi Hocine</li>
                                <li>Saidi Yasser</li>
                            </ul>
                        </td>
                        <td>2020 / 2021</td>
                        <td>Master GSI</td>
                    </tr>

                    
                    <tr>
                        <td>
                            <b>8.</b> Vers une approche de recommandation de services
                            sensible au contexte utilisant les techniques de machine Learning (Naïve Bayes, Random Forest, SVD).
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Bouamra Amira</li>
                                <li>Allalou NourElhouda</li>
                            </ul>
                        </td>
                        <td>2020 / 2021</td>
                        <td>Master GSI</td>
                    </tr>

                    <tr>
                        <td>
                            <b>9.</b> Conception et réalisation d’un site Web dynamique pour la recherche d’un service e-tourisme.
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Belili Amira</li>
                                <li>Larbi Fella</li>
                            </ul>
                        </td>
                        <td>2015 / 2016</td>
                        <td>Licence ISIL</td>
                    </tr>


                    <tr>
                        <td>
                            <b>10.</b> Conception et réalisation d’un espace numérique de travail pour l’université de Bouira.
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Gasmi Naima</li>
                                <li>Boudraf Youcef</li>
                            </ul>
                        </td>
                        <td>2015 / 2016</td>
                        <td>Licence ISIL</td>
                    </tr>

                    
                    <tr>
                        <td>
                            <b>11.</b> Conception et réalisation d’une application de suivi des affaires juridiques civiles (ADE).
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Ait Kaci Ouardia</li>
                                <li>Amhir Nadjet</li>
                            </ul>
                        </td>
                        <td>2017 / 2018</td>
                        <td>Licence ISIL</td>
                    </tr>


                    <tr>
                        <td>
                            <b>12.</b> Conception et réalisation d’une plateforme Web collaborative pour SONATRACH.
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Naceri Sihem</li>
                                <li>Mahdi Khadidja</li>
                            </ul>
                        </td>
                        <td>2018 / 2019</td>
                        <td>Licence ISIL</td>
                    </tr>


                    <tr>
                        <td>
                            <b>13.</b> Conception et réalisation d’un site Web dynamique de cours et de formations en ligne.
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Manaa Abderzak</li>
                                <li>Kessouri Mohamed</li>
                            </ul>
                        </td>
                        <td>2019 / 2020</td>
                        <td>Licence ISIL</td>
                    </tr>


                    <tr>
                        <td>
                            <b>14.</b> Conception et réalisation d’une bibliothèque en ligne reposant sur un système de troc.
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Labidi Abdellatif</li>
                                <li>Bouda Lamine</li>
                            </ul>
                        </td>
                        <td>2019 / 2020</td>
                        <td>Licence ISIL</td>
                    </tr>


                    <tr>
                        <td>
                            <b>15.</b> Intégration de l’e-paiement dans une plate-forme numérique de travail - School Connect (SATIM).
                        </td>
                        <td>
                            <ul class="ps-3">
                                <li>Elamouri Maroua</li>
                                <li>Haddouche Ahcene</li>
                                <li>Rabia Ikram</li>
                            </ul>
                        </td>
                        <td>2020 / 2021</td>
                        <td>Licence ISIL</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>





    <div class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="special-heading pb-4">Encadrement des <span>étudiants stagiaires</span> en entreprise</h1>
                    <p>Le tableau ci-dessous énumère l’encadrement et le suivi des étudiants stagiaires en entreprise des projets de fin de cycle. </p>
                    <table class="table table-bordered">
                        <tr>
                            <th>Thèmes </th>
                            <th>Étudiants</th>
                            <th>Année universitaire</th>
                            <th>Spécialité</th>
                        </tr>
                        <tr>
                            <td>Conception et réalisation d’une application de suivi des affaires juridiques civiles pour l’ADE (Algérienne des Eaux)</td>
                            <td>
                                <ul class="ps-3">
                                    <li>Ait Kaci Ouardia</li>
                                    <li>Amhir Nadjet</li>
                                </ul>
                            </td>
                            <td>2017 / 2018</td>
                            <td>Licence ISIL</td>
                        </tr>

                        <tr>
                            <td>Conception et réalisation d’une plateforme Web collaborative pour <b>« SONATRACH »</b> </td>
                            <td>
                                <ul class="ps-3">
                                    <li>Naceri Sihem</li>
                                    <li>Mahdi Khadidja</li>
                                </ul>
                            </td>
                            <td>2018 / 2019</td>
                            <td>Licence ISIL</td>
                        </tr>

                        <tr>
                            <td>
                                Intégration de l’e-paiement dans une plate-forme numérique de travail - School Connect. <br>
                                <div class="pt-3">
                                    <i class="fas fa-map-marker-alt"></i> « Société d’Automatisation des Transactions Interbancaires et de Monétique SATIM »
                                </div>
                                </td>
                            <td>
                                <ul class="ps-3">
                                    <li>Elamouri Maroua</li>
                                    <li>Haddouche Ahcene</li>
                                    <li>Rabia Ikram</li>
                                </ul>
                            </td>
                            <td>2020 / 2021</td>
                            <td>Licence ISIL</td>
                        </tr>


                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="special-heading">Implication dans la formation</h1>
                <p>
                    Je suis également impliquée dans l’évolution de la formation de département d’informatique à travers différentes actions :
                    <ul>
                        <li> <p> Suivi de projet de fin de cycle (env. 4 étudiants par an).</p> </li>
                        <li> <p> Présidente de la commission de suivi projet de fin de cycle et jury de PFC (env. 5-10 par an). </p> </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>




    @include('partials.footer')

@endsection



@section('scripts')
    <script>
        if($(window).width() <= 720) {
            $('table').addClass('table-responsive')
        } else {
            $('table').removeClass('table-responsive')
        }
    </script>

@endsection

