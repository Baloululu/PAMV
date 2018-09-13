@extends("default")
@section('title', 'Accueil')
@section('accueil', 'active')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <h1 class="w3-underline-pink">Mon histoire</h1>
                <h4 class="vertical-margin-32">Comment j’ai eu l’idée de créer ma micro entreprise.</h4>

                <p class="w3-text-gray">Je suis allée voir une magnétiseuse qui ma conseillée de porter un bracelet en perles labradorite... ce que j’ai fait... et au bout de quelques heures j’ai ressenti les bienfaits.
                    C‘était magique... donc à partir de là j’ai décidé d’en faire profiter mon entourage en fabriquant moi-même les bracelets et je n'ai eu que de bons résptats auprès de tout le monde.
                    Donc je me suis dit je vais en faire ma micro entreprise et en faire profiter d'autres personnes. J’ ai fait une formation aux cristaux éthériques auprès de Nadège pour mieux vous satisfaire et bien
                    connaitre les bienfaits des pierres.</p>
                <p class="w3-text-gray">Je vous propose de faire des bracelets, colliers, ... pour soulager vos maux. Mais aussi de porter des pierres sur vous ou le mettre dans des pièces pour harmoniser votre maison...
                    Les prix varient en fonction de votre tour de poignet. N’ hésitez pas à me contacter soit par mail : pamv88@orange.fr ou par message via ma page facebook.</p>
                <p class="w3-text-gray">Au plaisir de vous rencontrer !</p>
                <p class="w3-text-gray">Laurence.</p>

            </div>
            <div class="col-xs-12 col-md-4">
                <svg class="w3-fill-pink" style="width: 100%">
                    <use xlink:href="{{ asset("img/SVG-icons.svg") }}#quality" />
                </svg>
            </div>
        </div>
    </div>

    <div class="w3-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <svg style="width: 100%">
                        <use xlink:href="{{ asset("img/SVG-icons.svg") }}#nature" />
                    </svg>
                </div>

                <div class="col-xs-12 col-md-8">
                    <h1 class="w3-underline-pink">Les 7 chakras</h1>
                    <h4 class="vertical-margin-32">Comment les pierres peuvent agir sur notre corps pour permettent de bien rééquilibrer l’énergie.</h4>

                    <p class="w3-text-gray">Les sept chakras sont les centres énergétiques dans nos corps qui permettent à l’énergie d’être absorbée vers l’intérieur.
                        Tout notre corps est gouverné par trois canaux verticaux dans lesquels l’énergie circpe, et par sept chakras principaux.
                        Lorsque l’énergie se retrouve bloquée dans l’un ou tous vos chakras, cela peut souvent entrainer des maladies ou des absences. Il est donc important de comprendre ce que représente chaque
                        chakra et ce que vous pouvez faire pour leur offrir un soutien et maintenir la circpation des flux d’énergie.</p>
                </div>

                <div class="col-xs-12 col-md-6">
                    <h5 class="w3-text-blue">Le Chakra de base</h5>
                    <ul class="w3-text-gray">
                        <li>Il représente le fondement de nos actes et le sentiment d’avoir une base.</li>
                        <li>Emplacement&#8239;: À la base de la colonne vertébrale, au niveau du coccyx.</li>
                        <li>Les enjeux émotifs&#8239;: Les questions liées à la survie telles que l’autosuffisance financière, l’argent et la nourriture.</li>
                        <li>Les pierres... de lave... hématite.. fluorite... jaspe rouge... bronzite... tourmaline noire... agate rouge... corail fossilisé...</li>
                    </ul>

                    <h5 class="w3-text-blue">Le Chakra sacré</h5>
                    <ul class="w3-text-gray">
                        <li>Notre connexion et aptitude à accepter l’Autre et les nouvelles expériences.</li>
                        <li>Emplacement: Au niveau de la partie inférieure de l’abdomen, environ cinq centimètres sous le nombril.</li>
                        <li>Les enjeux émotifs&#8239;: La sensation de vivre dans l’abondance, le bien-être, le plaisir et l’intimité.</li>
                        <li>Les pierres... cornaline... de lune... tourmaline noire... bronzite... fluorite...</li>
                    </ul>

                    <h5 class="w3-text-blue">Le Chakra du Plexus solaire</h5>
                    <ul class="w3-text-gray">
                        <li>Notre capacité à être confiant et à exercer un contrôle sur notre vie.</li>
                        <li>Emplacement&#8239;: La partie supérieure de l’abdomen, dans la région de l’estomac.</li>
                        <li>Les enjeux émotifs&#8239;: La confiance en soi et l’estime de soi.</li>
                        <li>Les pierres... ambre... fluorite... citrine... soleil... œil de taureau et tigre... bronzite... tourmaline noire... amétrine... corail fossilisé... apatite... cornaline...</li>
                    </ul>

                    <h5 class="w3-text-blue">Le Chakra du cœur</h5>
                    <ul class="w3-text-gray">
                        <li>Notre capacité à aimer.</li>
                        <li>Emplacement&#8239;: Situé sur la poitrine, juste au-dessus du cœur.</li>
                        <li>Les enjeux émotifs&#8239;: L’amour, la joie et la paix intérieure.</li>
                        <li>Les pierres... lépidolite... aventurine... jade... amazonite... malachite... quartz rose... labradorite... agate mousse... jaspe unakite... tourmaline noire... bronzite... péridot... soleil... fluorite...</li>
                    </ul>
                </div>

                <div class="col-xs-12 col-md-6">
                    <h5 class="w3-text-blue">Le Chakra de la gorge</h5>
                    <ul class="w3-text-gray">
                        <li>Notre capacité à communiquer.</li>
                        <li>Emplacement&#8239;: La gorge.</li>
                        <li>Les enjeux émotifs&#8239;: La communication, l’expression personnelle au travers des sentiments et de la vérité, la détention de secrets.</li>
                        <li>Les pierres... fluorite... aigue marine... tourmaline noire... agate du botswana... turquoise... calcédoine... chrysocolle...</li>
                    </ul>

                    <h5 class="w3-text-blue">Le Chakra frontal</h5>
                    <ul class="w3-text-gray">
                        <li>Notre capacité à nous concentrer et à voir plus grand.</li>
                        <li>Emplacement&#8239;: Sur le front entre les yeux (aussi appelé le chakra du troisième oeil).</li>
                        <li>Les enjeux émotifs&#8239;: L’intuition, l’imagination, la sagesse et l’habilité à penser clairement et à prendre des décisions.</li>
                        <li>Les pierres... fluorite... tourmaline noire... sodalite... dumortiérite... cristal de roche... lapis lazpi...</li>
                    </ul>


                    <h5 class="w3-text-blue">Le Chakra de la couronne</h5>
                    <ul class="w3-text-gray">
                        <li>Le chakra sommital représente notre capacité à nous relier à la source divine.</li>
                        <li>Emplacement&#8239;: Le sommet de la tête.</li>
                        <li>Les enjeux émotifs&#8239;: La beauté intérieure et extérieure, notre connexion à la spiritualité et au bonheur pur.</li>
                        <li>Les pierres... amethyste... cristal de roche... ametrine... lapis lazpi... howlite...</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection