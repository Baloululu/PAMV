@extends("default")
@section('title', 'Accueil')
@section('Accueil', 'w3-fill-white')

@section('content')
    <div class="container">
        <div class="row text-justify align-items-center">
            <div class="col-xs-12 col-md-8">
                <h1>Mon histoire</h1>
                <h4 class="vertical-margin-32">Comment j’ai eu l’idée de créer ma micro entreprise.</h4>

                <p>Bienvenue à vous sur mon site internet, j'espère qu'il vous plaira. Je l'ai créé grâce à un ami, que
                    je me permet au passage de remercier.</p>

                <p>Quant à moi, je me présente en deux mots&#8239;: je m’appelle Laurence, j'ai 47 ans et réside dans les Vosges.</p>

                <p>Concernant l'objectif de mon site, il est de vous présenter mon activité. En effet je vous propose à
                    la vente des bracelets que je créés moi même sur mesure selon vos souhaits et tour de poignet. Cela
                    en fait des objets totalement unique et parfaitement à votre goût. Je vend également des pendentifs,
                    des boucles d’oreilles et toutes sortes de cristaux à porter sur soi selon vos symptômes et
                    circonstances&#8239;: stress, troubles du sommeil, allergies, douleurs, grossesse, ménopause et bien d'autres.</p>

                <p>Les cristaux qui ornent mes créations bijoux ont en effet des vertus et j'en ai une bonne connaissance
                    afin d'adapter selon votre profil les pierres adéquates.  J'ai effectuée une formation auprès de
                    Nadège (une formatrice en cristaux éthériques) pour connaitre tous les bien-faits des cristaux afin
                    de vous proposer une large gamme de pierres aux diverses vertus.</p>

                <p>Quelques mots concernant le statut de mon entreprise, je suis en auto-entreprise et par ailleurs en
                complément je travaille également comme vendeuse en boulangerie.
                Afin de concrétiser votre projet de bijou je vous propose de nous rencontrer, je peux en effet vous
                recevoir sur rendez-vous, ainsi n'hésitez pas à me contacter pour en savoir plus (contact possible par
                facebook&#8239;: <a href="https://www.facebook.com/fadylaurence/" target="_blank">Pierres aux milles vertus</a> ou par mail&#8239;:
                <a href="mailto:laurence.fady@pierresauxmillesvertus.ovh">laurence.fady@pierresauxmillesvertus.ovh</a>).</p>

                <p>J'espère pouvoir vous transmettre mon goût et ma passion pour les pierres et espère que mon site saura vous satisfaire.</p>

                <p>À très bientôt</p>

                <p>Laurence.</p>

                <p><em>La lithothérapie rentre dans le cadre des thérapies alternatives énergétiques, elle ne remplace pas la
                        médecine dite moderne. Pour tout problème médical veuillez consulter votre médecin.</em></p>

            </div>
            <div class="col-xs-12 col-md-4">
                <img data-lazyload="{{ asset('img/pamv_carte_optimise.svg') }}" style="width: 100%">
            </div>
        </div>
    </div>

    <div class="w3-white">
        <div class="container">
            <div class="row text-justify align-items-center">
                <div class="col-xs-12 col-md-4">
                    <svg style="width: 100%">
                        <use xlink:href="{{ asset("img/SVG-icons.svg") }}#nature"/>
                    </svg>
                </div>

                <div class="col-xs-12 col-md-8" style="margin-bottom: 20px">
                    <h1>Les 7 chakras</h1>
                    <h4 class="vertical-margin-32">Comment les pierres peuvent agir sur notre corps pour permettre de
                        rééquilibrer l’énergie.</h4>

                    <p>Les sept chakras sont les centres énergétiques dans nos corps qui permettent à l’énergie d’être
                        absorbée vers l’intérieur.
                        Tout notre corps est gouverné par trois canaux verticaux dans lesquels l’énergie circule, et par
                        sept chakras principaux.
                        Lorsque l’énergie se retrouve bloquée dans un ou plusieurs chakras, cela peut souvent entraîner
                        des maladies ou des absences. Il est donc important de comprendre ce que représente chaque
                        chakra et ce que vous pouvez faire pour leur offrir un soutien et maintenir la circulation des
                        flux d’énergie.</p>
                </div>

            </div>

            <div class="accordion" id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                         aria-expanded="true" aria-controls="collapseOne">
                        <div class="row align-items-center accordion-header">
                            <div class="col-10">
                                Le Chakra racine (de base)
                            </div>
                            <div class="col-2 text-right">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </div>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                         data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Il représente le fondement de nos actes et le sentiment d’avoir une base.</li>
                                <li>Emplacement&#8239;: à la base de la colonne vertébrale, au niveau du coccyx.</li>
                                <li>Les enjeux émotifs&#8239;: les questions liées à la survie telles que
                                    l’autosuffisance financière, l’argent et la nourriture.
                                </li>
                                <li>Les pierres&#8239;: de lave&#8239;; hématite&#8239;; fluorite&#8239;; jaspe rouge&#8239;;
                                    bronzite&#8239;; tourmaline noire&#8239;; agate rouge&#8239;; corail fossilisé.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo" data-toggle="collapse"
                         data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="row align-items-center accordion-header">
                            <div class="col-10">
                                Le Chakra sacré
                            </div>
                            <div class="col-2 text-right">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Notre connexion et aptitude à accepter l’autre et les nouvelles expériences.</li>
                                <li>Emplacement&#8239;: au niveau de la partie inférieure de l’abdomen, environ cinq
                                    centimètres sous le nombril.
                                </li>
                                <li>Les enjeux émotifs&#8239;: la sensation de vivre dans l’abondance, le bien-être, le
                                    plaisir et l’intimité.
                                </li>
                                <li>Les pierres&#8239;: cornaline&#8239;; de lune&#8239;; tourmaline noire&#8239;;
                                    bronzite&#8239;; fluorite.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree" data-toggle="collapse"
                         data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="row align-items-center accordion-header">
                            <div class="col-10">
                                Le Chakra du plexus solaire
                            </div>
                            <div class="col-2 text-right">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                         data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Notre capacité à être confiant et à exercer un contrôle sur notre vie.</li>
                                <li>Emplacement&#8239;: la partie supérieure de l’abdomen, dans la région de
                                    l’estomac.
                                </li>
                                <li>Les enjeux émotifs&#8239;: la confiance en soi et l’estime de soi.</li>
                                <li>Les pierres&#8239;: ambre&#8239;; fluorite&#8239;; citrine&#8239;; soleil&#8239;;
                                    œil de taureau et de tigre&#8239;; bronzite&#8239;; tourmaline noire&#8239;;
                                    amétrine&#8239;;
                                    corail fossilisé&#8239;; apatite&#8239;; cornaline.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFor" data-toggle="collapse"
                         data-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
                        <div class="row align-items-center accordion-header">
                            <div class="col-10">
                                Le Chakra du cœur
                            </div>
                            <div class="col-2 text-right">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <div id="collapseFor" class="collapse" aria-labelledby="headingFor"
                         data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Notre capacité à aimer.</li>
                                <li>Emplacement&#8239;: situé sur la poitrine, juste au-dessus du cœur.</li>
                                <li>Les enjeux émotifs&#8239;: l’amour, la joie et la paix intérieure.</li>
                                <li>Les pierres&#8239;: lépidolite&#8239;; aventurine&#8239;; jade&#8239;; amazonite&#8239;;
                                    malachite&#8239;; quartz rose&#8239;; labradorite&#8239;; agate mousse&#8239;; jaspe
                                    unakite&#8239;;
                                    tourmaline noire&#8239;; bronzite&#8239;; péridot&#8239;; soleil&#8239;; fluorite.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFive" data-toggle="collapse"
                         data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <div class="row align-items-center accordion-header">
                            <div class="col-10">
                                Le Chakra de la gorge
                            </div>
                            <div class="col-2 text-right">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                         data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Notre capacité à communiquer.</li>
                                <li>Emplacement&#8239;: la gorge.</li>
                                <li>Les enjeux émotifs&#8239;: la communication, l’expression personnelle au travers des
                                    sentiments et de la vérité, la détention de secrets.
                                </li>
                                <li>Les pierres&#8239;: fluorite&#8239;; aigue marine&#8239;; tourmaline noire&#8239;;
                                    agate du
                                    botswana&#8239;; turquoise&#8239;; calcédoine&#8239;; chrysocolle.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingSix" data-toggle="collapse"
                         data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <div class="row align-items-center accordion-header">
                            <div class="col-10">
                                Le Chakra frontal
                            </div>
                            <div class="col-2 text-right">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                         data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Notre capacité à nous concentrer et à voir plus grand.</li>
                                <li>Emplacement&#8239;: sur le front entre les yeux (aussi appelé le chakra du troisième
                                    oeil).
                                </li>
                                <li>Les enjeux émotifs&#8239;: l’intuition, l’imagination, la sagesse et l’habilité à
                                    penser
                                    clairement et à prendre des décisions.
                                </li>
                                <li>Les pierres&#8239;: fluorite&#8239;; tourmaline noire&#8239;; sodalite&#8239;;
                                    dumortiérite&#8239;;
                                    cristal de roche&#8239;; lapis lazuli.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingSeven" data-toggle="collapse"
                         data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <div class="row align-items-center accordion-header">
                            <div class="col-10">
                                Le Chakra de la couronne
                            </div>
                            <div class="col-2 text-right">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                         data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Le chakra sommital représente notre capacité à nous relier à la source divine.</li>
                                <li>Emplacement&#8239;: le sommet de la tête.</li>
                                <li>Les enjeux émotifs&#8239;: la beauté intérieure et extérieure, notre connexion à la
                                    spiritualité et au bonheur pur.
                                </li>
                                <li>Les pierres&#8239;: amethyste&#8239;; cristal de roche&#8239;; ametrine&#8239;;
                                    lapis lazuli&#8239;; howlite.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection