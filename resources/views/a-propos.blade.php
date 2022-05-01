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
                <h1 class="special-heading pb-4">Ma <span>fonction</span> actuelle</h1>
                <p>
                    Je suis en poste d’enseignante-chercheuse permanente à l’université de Bouira avec le grade de maître de conférences de classe B. J’enseigne divers modules tels que Système d’aide à la décision, Intelligence artificielle, Intelligence computationnelle, Algorithmique et structures de données à des niveaux différents (L3, M1, M2, L1). Je suis membre du laboratoire LIMPAF à l’université de Bouira depuis 2014 et je fais partie de l’équipe 1 : Systèmes Informatique pour l’Agriculture et les forêts (SIAF), dirigée par le Professeur Bennouar Djamal où je réalise ma recherche en optimisation des systèmes de recommandation basés sur l’IoT. Depuis décembre 2016, et jusqu’à Décembre 2019, je suis le responsable de la spécialité ISIL de département d’Informatique. Depuis Septembre 2015 à ce jour, j’assure la tâche du membre du comité scientifique et depuis Septembre 2018 à ce jour, je suis membre du comité de formation doctorale du département d’Informatique.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="special-heading pb-4">Diplômes <span>universitaires</span></h1>
                    <div class="career pt-4">

                        <div class="item">
                            <div class="float-start">
                                <span class="circle"></span>
                                <div class="item-devider"></div>
                            </div>
                            <div class="career-content ps-5">
                                <div class="title">Baccalauréat Série Sciences de la Nature et de la Vie. Lycée AbdErahmane Mira- Bouira.</div>
                                <div class="date"><i class="far fa-clock"></i> 2000</div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="float-start">
                                <span class="circle"></span>
                                <div class="item-devider"></div>    

                            </div>
                            <div class="career-content ps-5">
                                <div class="title">Ingénieur d’État en informatique, de l’université M’HammedBougara de Boumerdes /UMBB.</div>
                                <p class="description">
                                    <b>Option : </b>Informatique Industrielle. <br>
                                    <b>Thème :	</b>
                                    La vidéosurveillance sur une infrastructure IP- Transmission et diffusion de la vidéo en temps réel sur IP.

                                </p>
                                <div class="date"><i class="far fa-clock"></i> 2000 > 2005</div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="float-start">
                                <span class="circle"></span>
                                <div class="item-devider"></div>
                            </div>
                            <div class="career-content ps-5">
                                <div class="title">Magister en Informatique de l’Université M’HammedBougara de Boumerdes /UMBB.</div>
                                <p class="description">
                                    <b>Option : </b>Spécification Logiciels et Traitement de l’information. <br>
                                    <b>Thème : </b>Un Système de Programmation Fonctionnelle pour la Composition de Services Web.

                                </p>
                                <div class="date"><i class="far fa-clock"></i> 2005 > 2009</div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="float-start">
                                <span class="circle"></span>
                                <div class="item-devider"></div>
                            </div>
                            <div class="career-content ps-5">
                                <div class="title">Doctorat Ès science de l’Université des Sciences et de Technologie Houari Boumediene (USTHB)- Alger-Algérie. </div>
                                <p class="description">
                                    <b> Thème : </b>Framework pour la sélection automatique des services Web : Approche basée sur la similarité du profil contextuel. <br>
                                    <b></b>
                                    Devant le jury : 
                                    Mr. Yacine DJOUADI, Professeur, USTHB Président du jury <br>
                                    Mr. Abdelkamel TARI, Professeur, Univ de Bejaïa Examinateur <br>
                                    Mr. Amar BALA, Professeur, ESI Examinateur
                                    Mme. Hassina NACER, MCA, USTHB Examinatrice
                                    Mr. Abdelkader BELKHIR, Professeur, USTHB Directeur de thèse <br>
                                    Mr. Allel HADJALI, Professeur, ISAE-ENSMA, Poitiers Co-directeur de thèse


                                </p>
                                <div class="date"><i class="far fa-clock"></i> 22 Avril 2017</div>
                            </div>
                        </div>

                         


                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="special-heading pb-4">Formations</h1>
                <div class="career pt-4">

                    <div class="item">
                        <div class="float-start">
                            <span class="circle"></span>
                            <div class="item-devider"></div>
                        </div>
                        <div class="career-content ps-5">
                            <div class="title">Stage de fin d’étude</div>
                            <p class="description">Installation et administration de réseaux Microsoft 2003 Server,</p>
                            <div class="date"><i class="far fa-clock"></i> Janvier - Juin 2005</div>
                            <div class="date location"><i class="fas fa-map-marker-alt"></i> ENSI (Entreprise Nationale des Systèmes Informatiques)</div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="float-start">
                            <span class="circle"></span>
                            <div class="item-devider"></div>
                        </div>
                        <div class="career-content ps-5">
                            <div class="title">Les réseaux Informatiques </div>
                            <p class="description">
                                Attestations de réussite à la formation sur les réseaux Informatiques : <br>
                                CCNA 1 - CCNA 2 - CCNA 3 - CCNA 4 - Délivrée par <b>CISCO Networking Academy.</b>
                            </p>
                            <div class="date"><i class="far fa-clock"></i> Septembre 2005 - Aout 2007</div>
                            
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="bg-light detailed-skills">
        <div class="container py-5 bg-light">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="special-heading pb-4">Connaissances <span>techniques</span> et <span>méthodologiques</span></h1>
                    <div class="row">

                        <div class="col-md-3">
                            <div class="box">
                                <h4 class="special-heading" style="font-size: 20px">Langages de programmation</h4>
                                <ul>
                                    <li>Python</li>
                                    <li>PHP</li>
                                    <li>Javascript</li>
                                    <li>C++</li>
                                    <li>Delphi</li>
                                    <li>Pascal</li>
                                    <li>VB</li>
                                    <li>VBA</li>
                                    <li>Matlab</li>
                                    <li>Latex</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="box">
                                <h4 class="special-heading" style="font-size: 20px">Outils</h4>
                                <ul>
                                    <li>Ms Office</li>
                                    <li>Frontpage</li>
                                    <li>Photoshop</li>
                                    <li>Flash</li>
                                    <li>Visual Studio</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="box">
                                <h4 class="special-heading" style="font-size: 20px">Méthodes de modélisation</h4>
                                <ul>
                                    <li>UML</li>
                                    <li>Merise</li>
                                </ul>
                            </div>
                            <div class="box mt-3">
                                <h4 class="special-heading" style="font-size: 20px">Base de données</h4>
                                <ul>
                                    <li>MySQL</li>
                                    <li>Access</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                                <h4 class="special-heading" style="font-size: 20px">Langues maitrisés</h4>
                                <ul>
                                    <li>Tamazight</li>
                                    <li>Anglais</li>
                                    <li>Français</li>
                                    <li>Arabe</li>
                                </ul>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="special-heading pb-4">Objectifs <span>professionnels</span></h1>
                <p>
                    <i class="fas fa-check pr-2"></i> Evoluer dans un cadre de travail intéressant et élargir mes connaissances.  <br>
                    <i class="fas fa-check pr-2"></i> Mettre mes compétences en pratique et faire partie d'une équipe de recherche dynamique.

                </p>
            </div>

        </div>
    </div>



    <div class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="special-heading pb-4">Résponsabilités</h1>
                    
                    <ul>
                        <li class="pb-2">
                            <strong>2015-2021 : Membre de conseil scientifique de département d’Informatique CSD.</strong>
                            <p>Membre élu au CSD de département d’informatique.</p>
                        </li>
                        <li class="pb-2">
                            <strong>2016-2019 : Responsable de spécialité informatique.</strong>
                            <p>Responsable de spécialité informatique. En charge d’élaborer et d’aménager les
                                canevas de formation de Licence et Master.</p>
                        </li>
                        <li class="pb-2">
                            <strong>2015-2020 : Membre de conseil de discipline de département d’informatique.</strong>
                            <p>Membre élu au CDD de département d’informatique.</p>
                        </li>
                        <li class="pb-2">
                            <strong>2019 : Implication dans la diffusion scientifique.</strong>
                            <p>Dépôt du polycopie de cours intitulé "Electronique et composants de systèmes informatique" à la bibliothèque de la faculté des sciences et des sciences appliquées. Ce polycopie est expertisé par Pr. Bennouar Djamal et Pr Amad Mourad de l’université de Bouira, Dr Boudries Abdelmalek de l’université de Béjaia a eu l’avis favorable du conseil scientifique de la faculté..</p>
                        </li>
                    </ul>
                    
                </div>

            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="special-heading pb-4"><span>Charges collectives</span> diverses</h1>
                    
                <ul>
                    <li class="pb-2">
                        <strong>2019-2020</strong>
                        <p>Chargée de coordonner l’aménagement des canevas des Masters Génie des Systèmes Informatiques (GSI) et Ingénierie des Systèmes d’Information et du Logiciel ISIL.</p>
                    </li>
                    <li class="pb-2">
                        <strong>2017</strong>
                        <p>Participation à l’élaboration du projet socio-économique "Vers un Garage Intelligent pour l’élevage de volaille", dans le cadre de l’octroi du budget FNRSDT au titre de l’année 2017.</p>
                    </li>
                    <li class="pb-2">
                        <strong>2017</strong>
                        <p>Intervenante les séminaires de LIMPAF et dans l’offre de formation Doctorale LMD de   département d’Informatique et participation à l’organisation du concours de Doctorat à   l’université de Bouira pour l’année universitaire 2018-2019 (Informatique) et 2020-2021 (Chimie).</p>
                    </li>
                    <li class="pb-2">
                        <strong>2015</strong>
                        <p>Participation à l’élaboration du canevas de formation Master ISIL.</p>
                    </li>
                    <li class="pb-2">
                        <strong>2011 - 2012</strong>
                        <p>Participation à l’élaboration du canevas de formation MI.</p>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    @include('partials.footer')

@endsection


