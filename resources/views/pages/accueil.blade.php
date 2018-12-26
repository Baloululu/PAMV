@extends("default")
@section('title', 'Accueil')
@section('Accueil', 'w3-fill-white')

@section('content')
    <div class="container">
        <div class="row text-justify align-items-center">
            <div class="col-xs-12 col-md-8">
                <h1>Mon histoire</h1>
                <h4 class="vertical-margin-32">Comment j’ai eu l’idée de créer ma micro entreprise.</h4>

                <p>Je suis allée voir une magnétiseuse qui m'a conseillé de porter un bracelet en perles de
                    labradorite... ce que j’ai fait... Et au bout de quelques heures j’en ai ressenti les bienfaits.
                    C‘était magique... donc à partir de là, j’ai décidé d’en faire profiter mon entourage en fabriquant
                    moi-même des bracelets et je n'ai eu que de bons résultats auprès de tout le monde.
                    Donc je me suis dit que j'allais fonder ma micro entreprise pour faire découvrir la lithothérapie à
                    d'autres personnes. J’ai fait une formation aux cristaux éthériques auprès de Nadège pour mieux vous
                    satisfaire et bien
                    connaître les bienfaits des pierres.</p>
                <p>Je vous propose de faire des bracelets, colliers, ... pour soulager vos maux. Mais aussi de porter
                    des pierres sur vous ou de les mettre dans des pièces pour harmoniser votre maison.
                    Les prix varient en fonction de votre tour de poignet. N’hésitez pas à me contacter soit par mail :
                    <a href="mailto:pamv88@orange.fr">pamv88@orange.fr</a> ou par message via ma page <a
                            href="https://www.facebook.com/fadylaurence/" target="_blank">facebook</a>.</p>
                <p>Au plaisir de vous rencontrer !</p>
                <p>Laurence.</p>

            </div>
            <div class="col-xs-12 col-md-4">
                <img src="{{ asset('img/pamv_carte.svg') }}" style="width: 100%">
            </div>
        </div>
    </div>

    <div class="w3-light-gray">
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
                        Lorsque l’énergie se retrouve bloquée dans l’un ou tous vos chakras, cela peut souvent entraîner
                        des maladies ou des absences. Il est donc important de comprendre ce que représente chaque
                        chakra et ce que vous pouvez faire pour leur offrir un soutien et maintenir la circulation des
                        flux d’énergie.</p>
                </div>

            </div>

            <div class="accordion" id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-link w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Le Chakra racine (de base)
                                    </button>
                                </div>
                                <div class="col text-right">
                                    <button class="btn btn-link w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-angle-down"></i>
                                    </button>
                                </div>
                            </div>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                         data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Il représente le fondement de nos actes et le sentiment d’avoir une base.</li>
                                <li>Emplacement&#8239;: À la base de la colonne vertébrale, au niveau du coccyx.</li>
                                <li>Les enjeux émotifs&#8239;: Les questions liées à la survie telles que
                                    l’autosuffisance
                                    financière, l’argent et la nourriture.
                                </li>
                                <li>Les pierres&#8239;: de lave&#8239;; hématite&#8239;; fluorite&#8239;; jaspe rouge&#8239;;
                                    bronzite&#8239;; tourmaline noire&#8239;; agate rouge&#8239;; corail fossilisé.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-link collapsed w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Le Chakra sacré
                                    </button>
                                </div>
                                <div class="col text-right">
                                    <button class="btn btn-link collapsed w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fas fa-angle-down"></i>
                                    </button>
                                </div>
                            </div>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Notre connexion et aptitude à accepter l’autre et les nouvelles expériences.</li>
                                <li>Emplacement: Au niveau de la partie inférieure de l’abdomen, environ cinq
                                    centimètres sous
                                    le nombril.
                                </li>
                                <li>Les enjeux émotifs&#8239;: La sensation de vivre dans l’abondance, le bien-être, le
                                    plaisir
                                    et l’intimité.
                                </li>
                                <li>Les pierres&#8239;: cornaline&#8239;; de lune&#8239;; tourmaline noire&#8239;;
                                    bronzite&#8239;;
                                    fluorite.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-link collapsed w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Le Chakra du plexus solaire
                                    </button>
                                </div>
                                <div class="col text-right">
                                    <button class="btn btn-link collapsed w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fas fa-angle-down"></i>
                                    </button>
                                </div>
                            </div>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                         data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Notre capacité à être confiant et à exercer un contrôle sur notre vie.</li>
                                <li>Emplacement&#8239;: La partie supérieure de l’abdomen, dans la région de
                                    l’estomac.
                                </li>
                                <li>Les enjeux émotifs&#8239;: La confiance en soi et l’estime de soi.</li>
                                <li>Les pierres&#8239;: ambre&#8239;; fluorite&#8239;; citrine&#8239;; soleil&#8239;;
                                    œil de
                                    taureau et de tigre&#8239;; bronzite&#8239;; tourmaline noire&#8239;; amétrine&#8239;;
                                    corail fossilisé&#8239;; apatite&#8239;; cornaline.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFor">
                        <h2 class="mb-0">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-link collapsed w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
                                        Le Chakra du cœur
                                    </button>
                                </div>
                                <div class="col text-right">
                                    <button class="btn btn-link collapsed w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
                                        <i class="fas fa-angle-down"></i>
                                    </button>
                                </div>
                            </div>
                        </h2>
                    </div>
                    <div id="collapseFor" class="collapse" aria-labelledby="headingFor"
                         data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Notre capacité à aimer.</li>
                                <li>Emplacement&#8239;: Situé sur la poitrine, juste au-dessus du cœur.</li>
                                <li>Les enjeux émotifs&#8239;: L’amour, la joie et la paix intérieure.</li>
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
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-link collapsed w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Le Chakra de la gorge
                                    </button>
                                </div>
                                <div class="col text-right">
                                    <button class="btn btn-link collapsed w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <i class="fas fa-angle-down"></i>
                                    </button>
                                </div>
                            </div>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                         data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Notre capacité à communiquer.</li>
                                <li>Emplacement&#8239;: La gorge.</li>
                                <li>Les enjeux émotifs&#8239;: La communication, l’expression personnelle au travers des
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
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-link collapsed w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Le Chakra frontal
                                    </button>
                                </div>
                                <div class="col text-right">
                                    <button class="btn btn-link collapsed w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <i class="fas fa-angle-down"></i>
                                    </button>
                                </div>
                            </div>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                         data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Notre capacité à nous concentrer et à voir plus grand.</li>
                                <li>Emplacement&#8239;: Sur le front entre les yeux (aussi appelé le chakra du troisième
                                    oeil).
                                </li>
                                <li>Les enjeux émotifs&#8239;: L’intuition, l’imagination, la sagesse et l’habilité à
                                    penser
                                    clairement et à prendre des décisions.
                                </li>
                                <li>Les pierres&#8239;: fluorite&#8239;; tourmaline noire&#8239;; sodalite&#8239;;
                                    dumortiérite&#8239;;
                                    cristal de roche&#8239;; lapis lazpi.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-link collapsed w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Le Chakra de la couronne
                                    </button>
                                </div>
                                <div class="col text-right">
                                    <button class="btn btn-link collapsed w3-text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        <i class="fas fa-angle-down"></i>
                                    </button>
                                </div>
                            </div>
                        </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                         data-parent="#accordion">
                        <div class="card-body">
                            <ul class="w3-text-gray">
                                <li>Le chakra sommital représente notre capacité à nous relier à la source divine.</li>
                                <li>Emplacement&#8239;: Le sommet de la tête.</li>
                                <li>Les enjeux émotifs&#8239;: La beauté intérieure et extérieure, notre connexion à la
                                    spiritualité et au bonheur pur.
                                </li>
                                <li>Les pierres&#8239;: amethyste&#8239;; cristal de roche&#8239;; ametrine&#8239;;
                                    lapis lazpi&#8239;;
                                    howlite.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection