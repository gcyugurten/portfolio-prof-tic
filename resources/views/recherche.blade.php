@extends('layouts.mainLayout')

@section('metaTags')
    <meta name="description" content="{{ Helper::settings()->description }}">
    <meta keywords="{{ Helper::settings()->tags }}">

    @section('styles')
        <style>
   
            ul li strong {
                font-size: 20px;
                font-family: 'Ubuntu', sans-serif;
            }
        </style>
    @endsection


@endsection

@section('content')
    
    @include('partials.navbar')

 

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="special-heading pb-5">Activités de <span>recherche</span> </h1>
                <h4 class="special-heading pb-3" style="font-size:20px">Implication dans des projets de recherche</h4>
                <p class="pb-4">
                    2015-2019 <i><b> Contrat de recherche CNEPRU</b></i> <br>
                    Participation à la réalisation du projet de recherche agréé Sous le numéro <b><i>C00L07UN100120140008</i></b> 
                    <br>
                    <b> Intitulé PRINT :</b> Vers une ligne de produits logiciels pour le eGouvernement et sous la responsabilité du Prof. Djamal Benouar, recruté en qualité de membre du laboratoire LIMPAF.
                </p>
                <h4 class="special-heading pb-3" style="font-size:20px">Organisation d’évènements scientifiques</h4>
                <p>
                    <b>2018 à ce jour :</b>  Organisatrice des séminaires hebdomadaires « Séminaire du laboratoire LIMPAF » du laboratoire LIMPAF du 20 Décembre 2017 à ce jour.
                </p>
            </div>
        </div>
    </div>


    <div class="bg-light py-5 publications">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="special-heading pb-4">Liste des <span>publications</span> </h1>
                    <div class="box">
                        <h3 class="special-heading">
                            1. Towards Intelligent Road Traffic Management over Weighted Large Graphs Hybrid Meta-Heuristic-Based Approach”. <span style="font-size: 14px">Hayi. M. Yassine & Zahira Chouiref.</span>
                            <i class="fas fa-angle-down"></i>

                        </h3>
                        <div class="box-content">
                            <div class="item">
                                <div class="title">Journal Title :</div>
                                <div class="content">Journal of Cases on Information Technology (JCIT) / Classe B.</div>
                            </div>
                            <div class="item">
                                <div class="title">Publisher :</div>
                                <div class="content">IGI GLOBAL</div>
                            </div>
                            <div class="item">
                                <div class="title">ISSN :</div>
                                <div class="content">1548-7717 </div>
                            </div>
                            <div class="item">
                                <div class="title">E-ISSN :</div>
                                <div class="content">1548-7725 </div>
                            </div>
                            <div class="item">
                                <div class="title">Special Issue Submission :</div>
                                <div class="content">Artificial Intelligence in Data Science (AIDS) </div>
                            </div>
                            <div class="item">
                                <div class="title">Date d’acceptation :</div>
                                <div class="content">06/03/2021</div>
                            </div>
                            Volume <b>24</b>, Issue <b>2 (April-June, 2022).</b>
                        </div>
                    </div>
                    <div class="box">
                        <h3 class="special-heading">
                            2. Toward Preference and Context-Aware Hybrid Tourist Recommender System based on Machine Learning Techniques. <span style="font-size: 14px">Hayi. M. Yassine & Zahira Chouiref.</span>
                            <i class="fas fa-angle-down"></i>

                        </h3>
                        <div class="box-content">
                            <div class="item">
                                <div class="title">Journal Title :</div>
                                <div class="content">ISPRS International Journal of Geo-Information - MDPI / Classe A</div>
                            </div>
                            <div class="item">
                                <div class="title">Publisher :</div>
                                <div class="content">MDPI</div>
                            </div>
                            <div class="item">
                                <div class="title">ISSN :</div>
                                <div class="content">ijgi-1467753</div>
                            </div>
                            <div class="item">
                                <div class="title">Special Issue Submission :</div>
                                <div class="content">Geo Data Science for Tourism</div>
                            </div>
                            <div class="item">
                                <div class="title">Date d’acceptation :</div>
                                <div class="content">Under review (final step), 2021.</div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <h3 class="special-heading">
                            3. A fuzzy framework for efficient user-centric Web service selection. <span style="font-size: 14px">Zahira Chouiref, Abdelkader Belkhir, Karim Benouaret, Allel Hadjali</span>
                            <i class="fas fa-angle-down"></i>

                        </h3>
                        <div class="box-content">
                            <div class="item">
                                <div class="title">Journal Title :</div>
                                <div class="content">Applied Soft Computing / Classe A.</div>
                            </div>
                            <div class="item">
                                Volume 41, 2016,
                            </div>
                            <div class="item">
                                <div class="title">Pages : </div>
                                <div class="content">51-65</div>
                            </div>
                            <div class="item">
                                <div class="title">ISSN :</div>
                                <div class="content">1568-4946,</div>
                            </div>
                            <div class="item">
                                <div class="title">Lien :</div>
                                <a href="https://doi.org/10.1016/j.asoc.2015.12.011" target="_blank" class="content">https://doi.org/10.1016/j.asoc.2015.12.011</a>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <h3 class="special-heading">
                            4. Advanced Profile Similarity to Enhance Semantic Web Services Matching. <span style="font-size: 14px">Z. Chouiref, A. Belkhir and A. Hadjali</span>
                            <i class="fas fa-angle-down"></i>

                        </h3>
                        <div class="box-content">
                            <div class="item">
                                <div class="title">Date :</div>
                                <div class="content">October 2013</div>
                            </div>
                        
                            <div class="item">
                                <div class="title">Lien :</div>
                                <a href="http://dx.doi.org/10.3991/ijes.v1i1.2963" target="_blank" class="content">http://dx.doi.org/10.3991/ijes.v1i1.2963</a>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <h3 class="special-heading">
                            5. Un système de programmation fonctionnelle pour la composition automatique deservices Web. <span style="font-size: 14px">Z. Chouiref, A. Belkhir</span>
                            <i class="fas fa-angle-down"></i>

                        </h3>
                        <div class="box-content">
                            <div class="item">
                                Revue d’information Scientifique et Technique ( RIST), CERIST, Vol 18 N° 1, 2010.
                            </div>
                        
                            <div class="item">
                                <div class="title">Lien :</div>
                                <a href="http://rist.cerist.dz/" target="_blank" class="content">http://rist.cerist.dz/.</a>
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
                <h1 class="special-heading pb-5">Liste des communications <span>internationales</span> </h1>

                <ul>
                    <li class="pb-5">
                        <strong>An Improved Optimization Algorithm to Find Multiple Shortest Paths Over Large Graph</strong>
                        <p class="pt-2">
                            EDiS'2020 (Second international conference on Embedded & Distributed Systems) <br>
                            <i class="fas fa-clock pe-2 pt-4"></i> 02 au 04 Novembre 2020 <br>
                            <i class="fas fa-map-marker-alt pe-2"></i> l’université d’Oran. <br>
                            <i class="fas fa-user pe-2"></i> Hayi. M. Yassine & Zahira Chouiref.
                        </p>
                    </li>

                    <li class="pb-5">
                        <strong>An Efficient Hybrid Meta-Heuristic Approach for Solving the k-Shortest Paths Problem Over Weighted Large Graphs</strong>
                        <p class="pt-2">
                            4th international conference on artificial intelligence in renewable energetic systems. <br>
                            <i class="fas fa-map-marker-alt pe-2 pt-4"></i> IC-AIRES2020-IEEE. Tipasa <br>
                            <i class="fas fa-clock pe-2"></i> November 2020. <br>
                            <i class="fas fa-user pe-2"></i> Hayi. M. Yassine & Zahira Chouiref.
                        </p>
                    </li>

                    <li class="pb-5">
                        <strong>La sélection automatique des services Web : Approche basée sur la similarité du profil contextuel et sur la théorie des ensembles flous.</strong>
                        <p class="pt-2">
                            1st International Symposium on Data Science and Computational Intelligence <br>
                            <i class="fas fa-map-marker-alt pe-2 pt-4"></i> DSCI 2017 - Tunisia <br>
                            <i class="fas fa-clock pe-2"></i> December 2017. <br>
                            <i class="fas fa-user pe-2"></i> Z. Chouiref.
                        </p>
                    </li>

                    <li class="pb-5">
                        <strong>Weighted Fuzzy Preferences-Based Approach for Web Service Selection.</strong>
                        <p class="pt-2">
                            International Conference on Pattern Analysis and Intelligent Systems <br>
                            <i class="fas fa-map-marker-alt pe-2 pt-4"></i> PAIS 2015 IEEE Tebessa, Algeria <br>
                            <i class="fas fa-clock pe-2"></i> October 2015. <br>
                            <i class="fas fa-user pe-2"></i> Z. Chouiref, et al.
                        </p>
                    </li>

                    <li class="pb-5">
                        <strong>Making Web Services Selection More Customized A Fuzzy-Logic-Theory-Based Approach.</strong>
                        <p class="pt-2">
                            12th International Conference on Service Oriented Computing <br>
                            <i class="fas fa-map-marker-alt pe-2"></i> ICSOC, Paris <br>
                            <i class="fas fa-map-marker-alt pe-2"></i> November 2014 <br>
                            <i class="fas fa-user"></i> Z. Chouiref, et al.
                        </p>
                    </li>

                    <li class="pb-5">
                        <strong>Multi Matchmaking Approach for Semantic Web Services Selection based on Fuzzy Inference.</strong>
                        <p class="pt-2">
                            <i class="fas fa-map-marker-alt pe-2 pt-4"></i> ICWE, Toulouse <br>
                            <i class="fas fa-clock pe-2"></i> July 2014.<br>
                            <i class="fas fa-user"></i> Z. Chouiref, et al.
                        </p>
                    </li>

                    <li class="pb-5">
                        <strong>Enhancing Semantic Web Services Discovery Using Similarity of Contextual Profile.</strong>
                        <p class="pt-2">
                            <i class="fas fa-map-marker-alt pe-2"></i> ICIW, Italie <br>
                            <i class="fas fa-map-marker-alt pe-2"></i> July 2013 <br>
                            <i class="fas fa-user"></i> Z. Chouiref, et al.

                        </p>
                    </li>

                    <li class="pb-5">
                        <strong>A New Similarity Measure to Improve the Discovery of Semantic Web Services Based on Profile.</strong>
                        <p class="pt-2">
                            <i class="fas fa-map-marker-alt pe-2"></i> ICWIT2013, Tunisia <br>
                            <i class="fas fa-map-marker-alt pe-2"></i> May 2013 <br>
                            <i class="fas fa-user"></i> Z. Chouiref, et al.
                        </p>
                    </li>

                    <li class="pb-5">
                        <strong>Composition of Semantic Web Services: Functions based Approach.</strong>
                        <p class="pt-2">
                            International Conference on Applied Informatics <br>
                            <i class="fas fa-map-marker-alt pe-2"></i> ICAI09 IEEE, BBA- Algeria <br>
                            <i class="fas fa-map-marker-alt pe-2"></i> November 200.<br>
                            <i class="fas fa-user"></i> Z. Chouiref, et al.
                        </p>
                    </li>

                    <li class="pb-5">
                        <strong>Un Système de Programmation Fonctionnelle pour la Composition des Services Web.</strong>
                        <p class="pt-2">
                            Workshop international sur les Services Web dans les systèmes d’informations WWS’09<br>
                            <i class="fas fa-map-marker-alt pe-2"></i>  CERIST Algeria <br>
                            <i class="fas fa-map-marker-alt pe-2"></i> 2009.<br>
                            <i class="fas fa-user"></i> Z. Chouiref, et al.
                        </p>
                    </li>
                 
                </ul>
                


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