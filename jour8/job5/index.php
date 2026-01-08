<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Park</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<header class="relative">
    <section class="relative h-96 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1920&q=80"
            alt="Montagne avec vallée"
            class="w-full h-full object-cover opacity-70">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-40"></div>

        <!-- Navigation -->
        <nav class="absolute top-0 left-0 right-0 z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex-shrink-0 flex items-center space-x-3">
                        <svg class="h-10 w-10 text-blue-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L9 8H7L10 14H8L12 22L16 14H14L17 8H15L12 2Z" />
                            <ellipse cx="12" cy="22" rx="3" ry="1" fill="currentColor" opacity="0.5" />
                        </svg>
                        <h1 class="text-white text-2xl font-bold">National Park</h1>
                    </div>
                    <div class="hidden md:flex items-center space-x-4">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="#a-propos" class="text-blue-100 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">À propos</a>
                            <a href="#notre-travail" class="text-blue-100 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Notre travail</a>
                            <a href="#histoires" class="text-blue-100 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Histoires</a>
                            <a href="#soutien" class="text-blue-100 hover:bg-blue-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Soutien</a>
                        </div>
                        <div class="relative">
                            <input type="text" placeholder="Rechercher..." class="bg-blue-800 text-white placeholder-blue-300 px-4 py-2 pl-10 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 w-64">
                            <svg class="h-5 w-5 text-blue-300 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="md:hidden">
                        <button id="mobile-menu-button" class="text-gray-300 hover:text-white focus:outline-none focus:text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div id="mobile-menu" class="hidden md:hidden bg-blue-800 bg-opacity-90">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="#a-propos" class="text-blue-100 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">À propos</a>
                    <a href="#notre-travail" class="text-blue-100 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Notre travail</a>
                    <a href="#histoires" class="text-blue-100 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Histoires</a>
                    <a href="#soutien" class="text-blue-100 hover:bg-blue-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Soutien</a>
                    <div class="px-3 py-2">
                        <div class="relative">
                            <input type="text" placeholder="Rechercher..." class="bg-blue-800 text-white placeholder-blue-300 px-4 py-2 pl-10 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
                            <svg class="h-5 w-5 text-blue-300 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white max-w-3xl px-4">
                <h2 class="text-5xl font-bold mb-4 drop-shadow-lg">Découvrez la Nature</h2>
                <p class="text-xl drop-shadow-lg leading-relaxed">
                    Explorez les merveilles de nos parcs nationaux<br>
                    Partez à l'aventure au cœur de paysages époustouflants<br>
                    Découvrez une faune et une flore exceptionnelles<br>
                    Vivez des moments inoubliables en harmonie avec la nature
                </p>
            </div>
        </div>
    </section>

</header>
<main>
    <section class="py-16 bg-gradient-to-b from-blue-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-900 mb-4">Transformer la passion pour nos parcs en actions</h2>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                    Grâce à la générosité de nos donateurs, la NP a accompli de nombreuses actions positives dans les parcs. Cependant, il reste encore du travail à faire.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">

                <div class="bg-white rounded-lg shadow-lg p-8 text-center transform hover:scale-105 transition duration-300">
                    <div class="text-6xl font-bold text-blue-600 mb-4">400</div>
                    <div class="text-2xl font-semibold text-blue-900 mb-3">Parcs</div>
                    <p class="text-gray-600">La NP aide le Service des parcs nationaux à préserver plus de 400 sites de parcs nationaux à travers le pays.</p>
                </div>


                <div class="bg-white rounded-lg shadow-lg p-8 text-center transform hover:scale-105 transition duration-300">
                    <div class="text-6xl font-bold text-blue-600 mb-4">50</div>
                    <div class="text-2xl font-semibold text-blue-900 mb-3">Années</div>
                    <p class="text-gray-600">Depuis 1967, la NP contribue à protéger et à préserver certains des lieux les plus précieux d'Amérique.</p>
                </div>


                <div class="bg-white rounded-lg shadow-lg p-8 text-center transform hover:scale-105 transition duration-300">
                    <div class="text-6xl font-bold text-blue-600 mb-4">115 $</div>
                    <div class="text-2xl font-semibold text-blue-900 mb-3">Million</div>
                    <p class="text-gray-600">La NP a octroyé des subventions et un soutien programmatique de 115 millions de dollars à nos parcs nationaux au cours de l'exercice financier 2023.</p>
                </div>
            </div>
        </div>
    </section>


    <div class="relative overflow-hidden">
        <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=1920&q=80"
            alt="Parc national américain"
            class="w-full h-96 object-cover opacity-70">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-blue-900 px-4">
                <h2 class="text-5xl font-bold drop-shadow-lg">Nos Parcs</h2>
            </div>
        </div>
    </div>
    <ul class="inline-flex data-carousel-scrollable:relative data-carousel-scrollable:cursor-grab data-carousel-scrollable:overflow-x-auto data-carousel-scrollable:snap-mandatory data-carousel-scrollable:snap-x data-carousel-scrollable:active:cursor-grabbing data-carousel-scrollable:scrollbar-none scroll-pl-carousel-gap py-responsive-xl-60" data-carousel-target="carousel" data-ta-pan-y="" role="region" aria-label="Carrousel" aria-roledescription="carrousel" aria-live="polite" style="touch-action: pan-y;">

        <li class="flex-shrink-0 snap-start max-w-387 shadow-none transition first:ml-carousel-gap intent-keyboard:focus:scale-110 intent-keyboard:focus:shadow-4 intent-keyboard:focus:z-10 hover:scale-110 hover:shadow-4 hover:z-10 last:mr-carousel-gap" data-carousel-target="slide" aria-label="Diapositive 1 sur 7" style="width: 24.444444444444%;" aria-hidden="false">

            <article class="pointer-events-none relative" data-component="HeroPillarCarousel_heroPillarCarouselCard">
                <div class="relative">







                    <div class="hidden px-responsive-xl-36 order-last w-full data-carousel-scrollable:block lg:px-carousel-gap motion-safe:animate-fade-in-up motion-safe:animation-delay-2500 motion-safe:opacity-0">
                        <div class="max-w-1168 mx-auto xl:max-w-2560">
                            <div class="flex space-x-responsive-xl-12">
                                <button class="
                          flex aspect-square bg-black/60 dark:bg-blue/50 items-center justify-center p-responsive-xl-24 pointer-events-auto transition-colors
                          hover:bg-blue intent-keyboard:focus:bg-blue
                          dark:hover:bg-black intent-keyboard:dark:focus:bg-black
                        " data-action="click-&gt;carousel#previous" type="button">
                                    <div class="sr-only">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Retour au carrousel</font>
                                        </font>
                                    </div>

                                    <svg class="aspect-square text-white w-12 md:w-16" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" data-icon="arrow-left" aria-hidden="true">
                                        <path d="M8.98 14.27a.78.78 0 0 0-.07-1.1L4.2 9.01a.14.14 0 0 1-.04-.15.14.14 0 0 1 .12-.1h9.6a.78.78 0 0 0 0-1.56h-9.6a.14.14 0 0 1-.12-.09.14.14 0 0 1 .04-.15l4.7-4.14a.78.78 0 1 0-1.04-1.17l-6.1 5.36a1.31 1.31 0 0 0 0 1.96l6.1 5.36a.78.78 0 0 0 1.1-.07Z" fill="currentColor"></path>
                                    </svg>

                                </button>

                                <button class="
                          flex aspect-square bg-black/60 dark:bg-blue/50 items-center justify-center p-responsive-xl-24 pointer-events-auto transition-colors
                          hover:bg-blue intent-keyboard:focus:bg-blue
                          dark:hover:bg-black intent-keyboard:dark:focus:bg-black
                        " data-action="click-&gt;carousel#next" type="button">
                                    <div class="sr-only">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Défilez le carrousel vers l'avant</font>
                                        </font>
                                    </div>

                                    <svg class="aspect-square text-white w-12 md:w-16" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" data-icon="arrow-right" aria-hidden="true">
                                        <path d="M7.02 1.73a.78.78 0 0 0 .07 1.1l4.7 4.15a.14.14 0 0 1 .04.15.14.14 0 0 1-.12.1H2.1a.78.78 0 1 0 0 1.56h9.6a.14.14 0 0 1 .12.09.14.14 0 0 1-.04.15l-4.7 4.14a.78.78 0 1 0 1.04 1.17l6.1-5.36a1.31 1.31 0 0 0 0-1.96l-6.1-5.36a.78.78 0 0 0-1.1.07Z" fill="currentColor"></path>
                                    </svg>

                                </button>
                            </div>
                        </div>
                    </div>

                    <picture>


                        <source srcset="https://npf-prod.imgix.net/uploads/ook_dawn-kish-photo_cresent-lake_olympic-np_dak2423.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1120&amp;q=80&amp;w=672 672w, https://npf-prod.imgix.net/uploads/ook_dawn-kish-photo_cresent-lake_olympic-np_dak2423.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1290&amp;q=80&amp;w=774 774w">

                        <img class="h-auto w-full" src="https://npf-prod.imgix.net/uploads/ook_dawn-kish-photo_cresent-lake_olympic-np_dak2423.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1290&amp;q=80&amp;w=774" alt="" loading="lazy" style="aspect-ratio: 774 / 1290;">
                    </picture>


                </div>

                <a class="flex absolute bg-gradient-black-fade-up bottom-0 flex-col group justify-end left-0 mt-responsive-xl-40 pb-responsive-xl-40 pointer-events-auto pt-responsive-xl-160 px-responsive-xl-32 right-0 space-y-8 text-center text-white" href="https://www.nationalparks.org/area-of-work/youth-engagement-education">
                    <span class="block text-heading-xxs">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Engagement et éducation des jeunes</font>
                        </font>
                    </span>

                    <span class="font-bold text-utility-xs transition-opacity opacity-0 group-focus:opacity-100 group-hover:opacity-100">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Apprendre encore plus</font>
                        </font>
                    </span>
                </a>
            </article>
        </li>
        <li class="flex-shrink-0 snap-start max-w-387 shadow-none transition first:ml-carousel-gap intent-keyboard:focus:scale-110 intent-keyboard:focus:shadow-4 intent-keyboard:focus:z-10 hover:scale-110 hover:shadow-4 hover:z-10 last:mr-carousel-gap" data-carousel-target="slide" aria-hidden="true" aria-label="Diapositive 2 sur 7" style="width: 24.444444444444%;">

            <article class="pointer-events-none relative" data-component="HeroPillarCarousel_heroPillarCarouselCard">
                <div class="relative">









                    <picture>



                        <source srcset="https://npf-prod.imgix.net/uploads/4881f968152444fca67aae27016568e7.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1120&amp;q=80&amp;w=672 672w, https://npf-prod.imgix.net/uploads/4881f968152444fca67aae27016568e7.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1290&amp;q=80&amp;w=774 774w">

                        <img class="h-auto w-full" src="https://npf-prod.imgix.net/uploads/4881f968152444fca67aae27016568e7.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1290&amp;q=80&amp;w=774" alt="Une clôture métallique rouge ouvre sur un bâtiment historique en briques rouges doté d'une tour d'horloge." loading="lazy" style="aspect-ratio: 774 / 1290;">
                    </picture>


                </div>

                <a class="flex absolute bg-gradient-black-fade-up bottom-0 flex-col group justify-end left-0 mt-responsive-xl-40 pb-responsive-xl-40 pointer-events-auto pt-responsive-xl-160 px-responsive-xl-32 right-0 space-y-8 text-center text-white" href="https://www.nationalparks.org/area-of-work/history-culture">
                    <span class="block text-heading-xxs">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Histoire et culture</font>
                        </font>
                    </span>

                    <span class="font-bold text-utility-xs transition-opacity opacity-0 group-focus:opacity-100 group-hover:opacity-100">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Apprendre encore plus</font>
                        </font>
                    </span>
                </a>
            </article>
        </li>
        <li class="flex-shrink-0 snap-start max-w-387 shadow-none transition first:ml-carousel-gap intent-keyboard:focus:scale-110 intent-keyboard:focus:shadow-4 intent-keyboard:focus:z-10 hover:scale-110 hover:shadow-4 hover:z-10 last:mr-carousel-gap" data-carousel-target="slide" aria-hidden="true" aria-label="Diapositive 3 sur 7" style="width: 24.444444444444%;">

            <article class="pointer-events-none relative" data-component="HeroPillarCarousel_heroPillarCarouselCard">
                <div class="relative">









                    <picture>


                        <source srcset="https://npf-prod.imgix.net/uploads/dad4f1b72a634f5fb395ae2b00f9f147.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1120&amp;q=80&amp;w=672 672w, https://npf-prod.imgix.net/uploads/dad4f1b72a634f5fb395ae2b00f9f147.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1290&amp;q=80&amp;w=774 774w">

                        <img class="h-auto w-full" src="https://npf-prod.imgix.net/uploads/dad4f1b72a634f5fb395ae2b00f9f147.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1290&amp;q=80&amp;w=774" alt="Un membre d'équipage du corps de service, portant un casque et des lunettes de soleil, transporte une grosse bûche" loading="lazy" style="aspect-ratio: 774 / 1290;">
                    </picture>


                </div>

                <a class="flex absolute bg-gradient-black-fade-up bottom-0 flex-col group justify-end left-0 mt-responsive-xl-40 pb-responsive-xl-40 pointer-events-auto pt-responsive-xl-160 px-responsive-xl-32 right-0 space-y-8 text-center text-white" href="https://www.nationalparks.org/area-of-work/communities-workforce">
                    <span class="block text-heading-xxs">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Collectivités et main-d'œuvre</font>
                        </font>
                    </span>

                    <span class="font-bold text-utility-xs transition-opacity opacity-0 group-focus:opacity-100 group-hover:opacity-100">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Apprendre encore plus</font>
                        </font>
                    </span>
                </a>
            </article>
        </li>
        <li class="flex-shrink-0 snap-start max-w-387 shadow-none transition first:ml-carousel-gap intent-keyboard:focus:scale-110 intent-keyboard:focus:shadow-4 intent-keyboard:focus:z-10 hover:scale-110 hover:shadow-4 hover:z-10 last:mr-carousel-gap" data-carousel-target="slide" aria-hidden="true" aria-label="Diapositive 4 sur 7" style="width: 24.444444444444%;">

            <article class="pointer-events-none relative" data-component="HeroPillarCarousel_heroPillarCarouselCard">
                <div class="relative">









                    <picture>


                        <source srcset="https://npf-prod.imgix.net/uploads/c4dc32bb891442b28b29ae0c0102d899.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5044&amp;fp-y=0.7508&amp;h=1120&amp;q=80&amp;w=672 672w, https://npf-prod.imgix.net/uploads/c4dc32bb891442b28b29ae0c0102d899.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5044&amp;fp-y=0.7508&amp;h=1290&amp;q=80&amp;w=774 774w">

                        <img class="h-auto w-full" src="https://npf-prod.imgix.net/uploads/c4dc32bb891442b28b29ae0c0102d899.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5044&amp;fp-y=0.7508&amp;h=1290&amp;q=80&amp;w=774" alt="" loading="lazy" style="aspect-ratio: 774 / 1290;">
                    </picture>


                </div>

                <a class="flex absolute bg-gradient-black-fade-up bottom-0 flex-col group justify-end left-0 mt-responsive-xl-40 pb-responsive-xl-40 pointer-events-auto pt-responsive-xl-160 px-responsive-xl-32 right-0 space-y-8 text-center text-white" href="https://www.nationalparks.org/area-of-work/resilience-sustainability">
                    <span class="block text-heading-xxs">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Résilience et durabilité</font>
                        </font>
                    </span>

                    <span class="font-bold text-utility-xs transition-opacity opacity-0 group-focus:opacity-100 group-hover:opacity-100">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Apprendre encore plus</font>
                        </font>
                    </span>
                </a>
            </article>
        </li>
        <li class="flex-shrink-0 snap-start max-w-387 shadow-none transition first:ml-carousel-gap intent-keyboard:focus:scale-110 intent-keyboard:focus:shadow-4 intent-keyboard:focus:z-10 hover:scale-110 hover:shadow-4 hover:z-10 last:mr-carousel-gap" data-carousel-target="slide" aria-hidden="true" aria-label="Diapositive 5 sur 7" style="width: 24.444444444444%;">

            <article class="pointer-events-none relative" data-component="HeroPillarCarousel_heroPillarCarouselCard">
                <div class="relative">









                    <picture>


                        <source srcset="https://npf-prod.imgix.net/uploads/b1f8f1dff8b845ca9c17ad7c003c1f59.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1120&amp;q=80&amp;w=672 672w, https://npf-prod.imgix.net/uploads/b1f8f1dff8b845ca9c17ad7c003c1f59.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1290&amp;q=80&amp;w=774 774w">

                        <img class="h-auto w-full" src="https://npf-prod.imgix.net/uploads/b1f8f1dff8b845ca9c17ad7c003c1f59.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1290&amp;q=80&amp;w=774" alt="Photographier le Grand Canyon du Yellowstone depuis un fauteuil roulant tout-terrain" loading="lazy" style="aspect-ratio: 774 / 1290;">
                    </picture>


                </div>

                <a class="flex absolute bg-gradient-black-fade-up bottom-0 flex-col group justify-end left-0 mt-responsive-xl-40 pb-responsive-xl-40 pointer-events-auto pt-responsive-xl-160 px-responsive-xl-32 right-0 space-y-8 text-center text-white" href="https://www.nationalparks.org/area-of-work/parks-of-the-future">
                    <span class="block text-heading-xxs">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Parcs du futur</font>
                        </font>
                    </span>

                    <span class="font-bold text-utility-xs transition-opacity opacity-0 group-focus:opacity-100 group-hover:opacity-100">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Apprendre encore plus</font>
                        </font>
                    </span>
                </a>
            </article>
        </li>
        <li class="flex-shrink-0 snap-start max-w-387 shadow-none transition first:ml-carousel-gap intent-keyboard:focus:scale-110 intent-keyboard:focus:shadow-4 intent-keyboard:focus:z-10 hover:scale-110 hover:shadow-4 hover:z-10 last:mr-carousel-gap" data-carousel-target="slide" aria-hidden="true" aria-label="Diapositive 6 sur 7" style="width: 24.444444444444%;">

            <article class="pointer-events-none relative" data-component="HeroPillarCarousel_heroPillarCarouselCard">
                <div class="relative">









                    <picture>


                        <source srcset="https://npf-prod.imgix.net/uploads/Manatees_Underwater_WekivaWSR_SavetheManateesClub.png?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1120&amp;q=80&amp;w=672 672w, https://npf-prod.imgix.net/uploads/Manatees_Underwater_WekivaWSR_SavetheManateesClub.png?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1290&amp;q=80&amp;w=774 774w">

                        <img class="h-auto w-full" src="https://npf-prod.imgix.net/uploads/Manatees_Underwater_WekivaWSR_SavetheManateesClub.png?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=1290&amp;q=80&amp;w=774" alt="Lamantin sous l'eau" loading="lazy" style="aspect-ratio: 774 / 1290;">
                    </picture>


                </div>

                <a class="flex absolute bg-gradient-black-fade-up bottom-0 flex-col group justify-end left-0 mt-responsive-xl-40 pb-responsive-xl-40 pointer-events-auto pt-responsive-xl-160 px-responsive-xl-32 right-0 space-y-8 text-center text-white" href="https://www.nationalparks.org/area-of-work/landscape-wildlife-conservation">
                    <span class="block text-heading-xxs">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Conservation des paysages et de la faune</font>
                        </font>
                    </span>

                    <span class="font-bold text-utility-xs transition-opacity opacity-0 group-focus:opacity-100 group-hover:opacity-100">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Apprendre encore plus</font>
                        </font>
                    </span>
                </a>
            </article>
        </li>
        <li class="flex-shrink-0 snap-start max-w-387 shadow-none transition first:ml-carousel-gap intent-keyboard:focus:scale-110 intent-keyboard:focus:shadow-4 intent-keyboard:focus:z-10 hover:scale-110 hover:shadow-4 hover:z-10 last:mr-carousel-gap" data-carousel-target="slide" aria-hidden="true" aria-label="Diapositive 7 sur 7" style="width: 24.444444444444%;">

            <article class="pointer-events-none relative" data-component="HeroPillarCarousel_heroPillarCarouselCard">
                <div class="relative">

                    <picture>


                        <source srcset="https://npf-prod.imgix.net/uploads/3b4a9c2ca5aa440bb530affd00e0a345.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.3445&amp;fp-y=0.3685&amp;h=1120&amp;q=80&amp;w=672 672w, https://npf-prod.imgix.net/uploads/3b4a9c2ca5aa440bb530affd00e0a345.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.3445&amp;fp-y=0.3685&amp;h=1290&amp;q=80&amp;w=774 774w">

                        <img class="h-auto w-full" src="https://npf-prod.imgix.net/uploads/3b4a9c2ca5aa440bb530affd00e0a345.jpg?auto=compress%2Cformat&amp;crop=focalpoint&amp;fit=crop&amp;fp-x=0.3445&amp;fp-y=0.3685&amp;h=1290&amp;q=80&amp;w=774" alt="Un groupe de personnes se tient là, discutant et souriant." loading="lazy" style="aspect-ratio: 774 / 1290;">
                    </picture>


                </div>

                <a class="flex absolute bg-gradient-black-fade-up bottom-0 flex-col group justify-end left-0 mt-responsive-xl-40 pb-responsive-xl-40 pointer-events-auto pt-responsive-xl-160 px-responsive-xl-32 right-0 space-y-8 text-center text-white" href="https://www.nationalparks.org/area-of-work/outdoor-exploration">
                    <span class="block text-heading-xxs">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Exploration en plein air</font>
                        </font>
                    </span>

                    <span class="font-bold text-utility-xs transition-opacity opacity-0 group-focus:opacity-100 group-hover:opacity-100">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Apprendre encore plus</font>
                        </font>
                    </span>
                </a>
            </article>
        </li>

    </ul>
    <img class="absolute h-full inset-0 object-cover w-full" src="https://npf-prod.imgix.net/uploads/Areas-of-Work_Homepage_Texture.png?auto=compress%2Cformat&amp;fit=max&amp;q=80&amp;w=1600" alt="" loading="lazy" style="aspect-ratio: 1440 / 838;">

    <!-- Section Newsletter -->
    <section id="newsletter" class="py-16 bg-gradient-to-b from-white to-blue-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold text-blue-900 mb-4">Abonnez-vous à notre Newsletter</h2>
                <p class="text-lg text-gray-700">
                    Restez informé(e) de nos derniers projets, programmes et opportunités liés aux parcs nationaux.
                </p>
            </div>

            <form class="bg-white rounded-lg shadow-lg p-8" action="#" method="post">
                <div class="space-y-4">
                    <div>
                        <label for="newsletter-name" class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
                        <input type="text" id="newsletter-name" name="name" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="newsletter-email" class="block text-sm font-medium text-gray-700 mb-2">Adresse email</label>
                        <input type="email" id="newsletter-email" name="email" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="flex items-start">
                        <input type="checkbox" id="newsletter-consent" name="consent" required
                            class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="newsletter-consent" class="ml-2 text-sm text-gray-600">
                            J'accepte de recevoir des communications de National Park et je comprends que je peux me désabonner à tout moment.
                        </label>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-105">
                        S'abonner maintenant
                    </button>
                </div>
            </form>
        </div>
    </section>

</main>
<footer class="relative overflow-hidden min-h-screen">
    <!-- Image de fond du footer -->
    <img src="https://images.unsplash.com/photo-1511593358241-7eea1f3c84e5?w=1920&q=80"
        alt="Fond de footer"
        class="fixed inset-0 w-full h-full object-cover -z-10">
    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-blue-800/80"></div>

    <aside class="dark relative z-10 py-16">
        <div class="flex flex-col relative text-white items-center gap-responsive-xl-40 max-w-screen-md mx-auto px-responsive-xl-40 py-responsive-xl-160 text-center">
            <h2 class="text-heading-md">
                <font dir="auto" style="vertical-align: inherit;">
                    <font dir="auto" style="vertical-align: inherit;">
                        Restez informé(e) de notre travail
                    </font>
                </font>
            </h2>
            <div class="space-y-responsive-xl-40 max-w-550">
                <div class="text-body-lg text-rich">
                    <p>
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Entre deux visites dans vos parcs préférés, notre newsletter est un excellent moyen de vous tenir au courant de nos derniers projets, programmes et opportunités liés aux parcs nationaux.</font>
                        </font>
                    </p>
                </div><a class="button-primary lg:py-22 px-24 lg:px-28 lg:text-16 font-bold" href="#newsletter" data-component="ButtonPrimary"><span>
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Abonnez-vous à la newsletter NP</font>
                        </font>
                    </span></a>
            </div>
        </div>
    </aside>

    <h2 class="flex gap-responsive-xl-24 items-center text-center dark:text-white" data-component="SectionLabel"> <span class="border-t grow h-0 min-w-55"></span>
        <span class="font-bold text-utility-sm">National Park Partners</span>
        <span class="border-t grow h-0 min-w-55"></span>
    </h2>
    <!-- Section Partenaires -->
    <div class="relative z-10 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-responsive-xl-64">
                <ul class="flex flex-wrap justify-center -m-responsive-xl-12">
                    <li class="w-1/3 md:w-1/6">
                        <div class="p-responsive-xl-12">
                            <article class="group-sponsor relative md:aspect-3/2" data-component="SupportingSponsors_supportingSponsorCard">
                                <a class="absolute inset-0 z-10" href="https://www.nationalparks.org/about-foundation/partnerships/corporate-partnerships/subaru">
                                    <span class="sr-only">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Subaru d'Amérique</font>
                                        </font>
                                    </span>
                                </a>
                                <picture>
                                    <source srcset="https://npf-prod.imgix.net/uploads/npf-subaru-partner.png?auto=compress%2Cformat&amp;fit=max&amp;q=80&amp;w=206 206w, https://npf-prod.imgix.net/uploads/npf-subaru-partner.png?auto=compress%2Cformat&amp;fit=max&amp;q=80&amp;w=220 220w, https://npf-prod.imgix.net/uploads/npf-subaru-partner.png?auto=compress%2Cformat&amp;fit=max&amp;q=80&amp;w=334 334w">
                                    <img class="md:absolute md:h-full md:left-0 md:object-contain md:top-0 md:w-full filter-color:grayscale filter-color:transition filter-color:group-sponsor-focus-within:grayscale-0 filter-color:group-sponsor-hover:grayscale-0" src="https://npf-prod.imgix.net/uploads/npf-subaru-partner.png?auto=compress%2Cformat&amp;fit=max&amp;q=80&amp;w=334" alt="" loading="lazy" style="aspect-ratio: 334 / 171;">
                                </picture>
                            </article>
                        </div>
                    </li>
                    <li class="w-1/3 md:w-1/6">
                        <div class="p-responsive-xl-12">
                            <article class="group-sponsor relative md:aspect-3/2" data-component="SupportingSponsors_supportingSponsorCard">
                                <a class="absolute inset-0 z-10" href="https://www.nationalparks.org/about-foundation/partnerships/corporate-partnerships/coca-cola">
                                    <span class="sr-only">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">La société Coca-Cola</font>
                                        </font>
                                    </span>
                                </a>
                                <picture>
                                    <source srcset="https://npf-prod.imgix.net/uploads/Untitled_design-removebg-preview.png?auto=compress%2Cformat&amp;fit=max&amp;q=80&amp;w=206 206w, https://npf-prod.imgix.net/uploads/Untitled_design-removebg-preview.png?auto=compress%2Cformat&amp;fit=max&amp;q=80&amp;w=220 220w, https://npf-prod.imgix.net/uploads/Untitled_design-removebg-preview.png?auto=compress%2Cformat&amp;fit=max&amp;q=80&amp;w=334 334w">
                                    <img class="md:absolute md:h-full md:left-0 md:object-contain md:top-0 md:w-full filter-color:grayscale filter-color:transition filter-color:group-sponsor-focus-within:grayscale-0 filter-color:group-sponsor-hover:grayscale-0" src="https://npf-prod.imgix.net/uploads/Untitled_design-removebg-preview.png?auto=compress%2Cformat&amp;fit=max&amp;q=80&amp;w=334" alt="" loading="lazy" style="aspect-ratio: 334 / 171;">
                                </picture>
                            </article>
                        </div>
                    </li>
                    <li class="w-1/3 md:w-1/6">
                        <div class="p-responsive-xl-12">
                            <article class="group-sponsor relative md:aspect-3/2" data-component="SupportingSponsors_supportingSponsorCard">
                                <a class="absolute inset-0 z-10" href="https://www.nationalparks.org/about-foundation/partnerships/corporate-partnerships/nature-valley">
                                    <span class="sr-only">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Nature Valley™</font>
                                        </font>
                                    </span>
                                </a>
                                <picture>
                                    <source srcset="https://npf-prod.imgix.net/uploads/NatureValley_logo.png?auto=compress%2Cformat&amp;fit=max&amp;q=80&amp;w=206 206w, https://npf-prod.imgix.net/uploads/NatureValley_logo.png?auto=compress%2Cformat&amp;fit=max&amp;q=80&amp;w=220 220w, https://npf-prod.imgix.net/uploads/NatureValley_logo.png?auto=compress%2Cformat&amp;fit=max&amp;q=80&amp;w=334 334w">
                                    <img class="md:absolute md:h-full md:left-0 md:object-contain md:top-0 md:w-full filter-color:grayscale filter-color:transition filter-color:group-sponsor-focus-within:grayscale-0 filter-color:group-sponsor-hover:grayscale-0" src="https://npf-prod.imgix.net/uploads/NatureValley_logo.png?auto=compress%2Cformat&amp;fit=max&amp;q=80&amp;w=334" alt="" loading="lazy" style="aspect-ratio: 334 / 171;">
                                </picture>
                            </article>
                        </div>
                    </li>
                </ul>

                <div class="px-responsive-xl-48">
                    <div class="max-w-736 mx-auto text-body-lg text-center text-rich text-white">
                        <p>
                            <font dir="auto" style="vertical-align: inherit;">
                                <font dir="auto" style="vertical-align: inherit;">Notre travail dans les parcs ne serait pas possible sans le soutien généreux et constant de nos partenaires corporatifs. Cette tradition de générosité est essentielle à la préservation des sites les plus précieux d'Amérique. </font>
                            </font><br><a href="https://www.nationalparks.org/about-foundation/partnerships/corporate-partnerships" class="text-blue-200 hover:text-white underline"><br>
                                <font dir="auto" style="vertical-align: inherit;">
                                    <font dir="auto" style="vertical-align: inherit;">En savoir plus sur nos partenaires</font>
                                </font>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>









<body>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>