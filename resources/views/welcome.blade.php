@extends('components.layout')

@section('about-us')
    <div id="despre-noi">
        <section class="bg-white dark:bg-gray-900">
            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <div id="scrollToTop">
                        <p><i class="fa-solid fa-arrow-up"></i></p>
                    </div>
                    <div class="caspart-top">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Despre Noi</h2>
                    </div>
                    <div class="caspart-bottom">
                        <p class="mb-4"><span class="font-normal">Smart General Cleaning</span> este o companie de curățenie
                            profesionistă cu o vastă experiență în industrie. Ne dedicăm să oferim servicii de curățenie
                            superioare și soluții personalizate pentru clienții noștri. Echipa noastră de specialiști
                            calificați utilizează echipamente și produse de curățenie de ultimă generație pentru a obține
                            rezultate excepționale în orice mediu, de la birouri și clădiri comerciale până la locuințe și
                            spații industriale.</p>
                        <p>Suntem mândri să oferim servicii prompte, eficiente și de încredere, având în vedere nevoile și
                            cerințele specifice ale fiecărui client. Obiectivul nostru principal este satisfacția deplină a
                            clienților noștri, oferindu-le un mediu curat, sigur și sănătos.</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <div class="caspart-bottom">
                        <img class="w-full rounded-lg"
                            src="/images/smart-view-img01.jpeg"
                            alt="Smart Cleaning Image">
                    </div>
                    <div class="caspart-bottom">
                        <img class="mt-4 w-full lg:mt-10 rounded-lg"
                            src="/images/smart-view-img02.jpeg"
                            alt="Smart Cleaning Image">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('servicii')
    <!-- Values section -->
    <div class="bg-slate-900" id="servicii">
        <div class="mx-auto mt-32 p-24 max-w-7xl px-6 sm:mt-40 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <div class="caspart-bottom">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white dark:text-white">Servicii Oferite</h2>
                </div>
                <div class="caspart-top">
                    <p class="mt-6 text-lg leading-8 font-light text-white font-light">Oferim, de asemenea, o gamă largă de
                        soluții suplimentare pentru nevoile dvs. de curățenie și întreținere.</p>
                </div>
            </div>
            <hr class="block sm:hidden border-cyan-400 mt-8">
            <dl
                class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div>
                        <dt class="caspart-top font-semibold text-white">Curățenie de birouri și clădiri comerciale</dt>
                    <dd class="mt-1 text-white font-light caspart-bottom">Echipa noastră de experți în curățenie asigură un
                        mediu curat și profesional
                        în birourile și clădirile comerciale. Oferim curățenie generală, inclusiv curățarea suprafețelor, a
                        mobilierului, a geamurilor, a pardoselilor și a zonelor comune.
                    </dd>
                </div>
                <hr class="block sm:hidden border-cyan-400">
                <div>
                        <dt class="caspart-top font-semibold text-white">Curățenie rezidențială</dt>
                    <dd class="caspart-bottom mt-1 text-white font-light">Realizăm servicii de curățenie detaliată și de
                        înaltă calitate pentru
                        locuințe. Echipa noastră se ocupă de curățarea camerelor, a băilor, a bucătăriilor, a podelelor și a
                        altor zone în conformitate cu cerințele și preferințele dumneavoastră.
                    </dd>
                </div>
                <hr class="block sm:hidden border-cyan-400">
                <div>
                        <dt class="caspart-top font-semibold text-white">Curățenie post-construcție</dt>
                    <dd class="caspart-bottom mt-1 text-white font-light">După finalizarea unui proiect de construcție sau
                        renovare, oferim servicii
                        profesionale de curățenie pentru a pregăti spațiul pentru utilizare. Echipa noastră se asigură că
                        toate reziduurile de construcție sunt eliminate, iar spațiul este lăsat curat, ordonat și pregătit
                        pentru utilizare.</dd>
                </div>
                <hr class="block sm:hidden border-cyan-400">
                <div>
                    <div class="caspart-bottom">
                        <dt class="font-semibold text-white">Curățenie industrială</dt>
                    </div>
                    <dd class="caspart-bottom mt-1 text-white font-light">Oferim servicii de curățenie adaptate
                        necesităților industriale, acoperind
                        diverse medii precum fabrici, depozite sau spații comerciale mari. Echipa noastră de specialiști
                        utilizează echipamente și produse de curățenie specializate pentru a asigura un mediu de lucru sigur
                        și curat.</dd>
                </div>
                <hr class="block sm:hidden border-cyan-400">
                <div>
                    <div class="caspart-bottom">
                        <dt class="font-semibold text-white">Curățenie de geamuri</dt>
                    </div>
                    <dd class="caspart-bottom mt-1 text-white font-light">Efectuăm curățenie profesională a geamurilor
                        pentru clădiri comerciale și
                        rezidențiale. Echipa noastră folosește tehnici și echipamente speciale pentru a obține rezultate
                        fără urme, asigurându-vă că geamurile strălucesc de curățenie.
                    </dd>
                </div>
                <hr class="block sm:hidden border-cyan-400">
                <div>
                    <div class="caspart-bottom">
                        <dt class="font-semibold text-white">Servicii de întreținere</dt>
                    </div>
                    <dd class="caspart-bottom mt-1 text-white font-light">Oferim servicii de întreținere pe termen lung
                        pentru a menține un mediu
                        curat și bine întreținut. Aceste servicii includ curățenie periodică, gestionarea gunoiului,
                        întreținerea pardoselilor și alte activități de curățenie specificate în acordurile noastre
                        contractuale.

                    </dd>
                </div>
            </dl>
        </div>
        <div id="galerie"></div>
    </div>
@endsection

@section('galerie')
    <div class="w-10/12 m-auto mt-8">
        <div class="caspart-top">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Galerie Foto</h2>
        </div>
        <div class="caspart-top">
            <p class="font-light sm:w-7/12 w-full">
                Galeria foto pe care o puteți vizualiza este doar o mică parte din multitudinea impresionantă de realizări
                ale companiei noastre, Smart General Cleaning. Fiecare imagine reflectă eforturile și competența echipei
                noastre în furnizarea unor servicii de curățenie de înaltă calitate într-o varietate de medii.
            </p>
        </div>
        <div class="swiper mySwiper mt-8">
            <div class="swiper-wrapper">

                <div class="swiper-slide relative">
                    <img class="object-cover w-full m-auto h-96"
                        src="https://cdn.fs.teachablecdn.com/sxKhkCvmTmSEg8vdQmXD"
                        alt="A photo of an Apple Watch" />
                </div>

                <div class="swiper-slide relative">
                    <img class="object-cover w-full m-auto h-96"
                        src="https://cdna.artstation.com/p/assets/images/images/038/672/432/4k/zeto-cg-0001.jpg?1623748953"
                        alt="A photo of an Apple Watch" />
                </div>

                <div class="swiper-slide relative">
                    <img class="object-cover w-full m-auto h-96"
                        src="https://www.actioncleanup.com/hubfs/office.png"
                        alt="A photo of an Apple Watch" />
                </div>

                <div class="swiper-slide relative">
                    <img class="object-cover w-full m-auto h-96"
                        src="https://wallpapercrafter.com/desktop/220098-allee-avenue-alley-and-botanical-garden-hd.jpg"
                        alt="A photo of an Apple Watch" />
                </div>

                <div class="swiper-slide relative">
                    <img class="object-cover w-full m-auto h-96"
                        src="https://hkm.ro/wp-content/uploads/2022/04/apartament-de-lux-herastrau-cu-terasa-pe-acoperis-rooftop-luxury-penthouse-apartment-bucharest-herastrau-nordului-hkm-imobiliare-3.jpg"
                        alt="A photo of an Apple Watch" />
                </div>

                <div class="swiper-slide relative">
                    <img class="object-cover w-full m-auto h-96"
                        src="https://i0.wp.com/www.additudemag.com/wp-content/uploads/2016/11/Adult_Organize_Home-cleaning_Article_1723_Clean-Home_pexels-3-scaled.jpg"
                        alt="A photo of an Apple Watch" />
                </div>

            </div>
            <div class="swiper-button-next sm:block mr-32 hidden"></div>
            <div class="swiper-button-prev sm:block ml-32 hidden"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
@endsection

@section('testimonials')
    <div class="mt-16" id="testimoniale">
        <section class="bg-gray-900">
            <div class="mx-auto  w-10/12 m-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
                <div class="items-end justify-between sm:flex">
                    <div class="max-w-xl">
                        <div class="caspart-top">
                            <h2 class="text-4xl font-bold text-white tracking-tight sm:text-5xl">
                                Testimoniale Si Recenzii
                            </h2>
                        </div>
                        <div class="caspart-bottom">
                            <p class="mt-8 max-w-lg text-white font-light">

                                Iată ce spun câțiva dintre clienții noștri fideli despre experiența lor cu Smart General
                                Cleaning
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <blockquote class="flex h-full justify-between caspart-bottom">
                        <div>
                            <div class="mt-4">
                                <h3 class="text-xl font-bold text-cyan-400 sm:text-2xl">
                                    Robert M. | director de birou
                                </h3>

                                <p class="mt-4 text-white font-light">
                                    "Am apelat la Smart General Cleaning pentru curățenia birourilor noastre și am fost
                                    absolut impresionați de rezultate. Echipa lor profesionistă și bine pregătită a reușit
                                    să aducă un nou nivel de strălucire și proaspătătate mediului nostru de lucru. Nu numai
                                    că rezultatele au fost de excepție, dar am apreciat și atenția la detalii și
                                    promptitudinea în executarea serviciilor. Recomand cu încredere Smart General Cleaning!"
                                </p>
                            </div>
                        </div>
                    </blockquote>

                    <hr class="block sm:hidden border-cyan-400">

                    <blockquote class="flex h-full flex-col justify-between caspart-top">
                        <div>

                            <div class="mt-4">
                                <h3 class="text-xl font-bold text-cyan-400 sm:text-2xl">
                                    Ana D. | proprietar de locuință
                                </h3>

                                <p class="mt-4 text-white font-light">
                                    "Locuința noastră arată ca nouă datorită serviciilor de curățenie oferite de Smart
                                    General Cleaning. Echipa lor a fost amabilă, respectuoasă și extrem de eficientă în
                                    transformarea casei noastre într-un spațiu impecabil. Am fost impresionați de abilitatea
                                    lor de a gestiona chiar și cele mai dificile pete și murdărie. Suntem foarte mulțumiți
                                    de rezultat și vom continua să apelăm la serviciile lor în viitor!"
                                </p>
                            </div>
                        </div>
                    </blockquote>

                    <hr class="block sm:hidden border-cyan-400">

                    <blockquote class="flex h-full flex-col justify-between caspart-bottom">
                        <div>

                            <div class="mt-4">
                                <h3 class="text-xl font-bold text-cyan-400 sm:text-2xl">
                                    Laura S. | manager de facilități
                                </h3>

                                <p class="mt-4 text-white font-light">
                                    "Smart General Cleaning a fost partenerul nostru de încredere în asigurarea unui mediu
                                    curat și sigur în spațiile noastre comerciale. Echipa lor dedicată și bine echipată a
                                    reușit să răspundă nevoilor noastre specifice, asigurându-se că fiecare colțișor al
                                    clădirii noastre este impecabil curat. Profesionalismul lor și atenția la detalii ne-au
                                    convins că am făcut alegerea potrivită. Mulțumim, Smart General Cleaning!"
                                </p>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('contact')
    <div class="relative isolate bg-white mb-14" id="contact">
        <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">
            <div class="relative px-6 pb-20 pt-24 sm:pt-32 lg:static lg:px-8 lg:py-20">
                <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                    <h2 class="caspart-bottom text-4xl font-bold tracking-tight text-gray-900">Contact</h2>
                    <p class="caspart-top mt-6 text-lg leading-8 text-gray-600 font-light">
                        Dacă doriți să intrați în legătură cu noi, vă invităm să completați formularul de contact de mai
                        jos. Ne-am dori să aflăm mai multe despre nevoile și cerințele dumneavoastră pentru a vă putea oferi
                        soluții personalizate și informații relevante.</p>
                    <dl class="mt-10 space-y-4 text-base leading-7 text-gray-600">
                        <div class="caspart-top flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Address</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                </svg>
                            </dt>
                            <dd class="">Str. Crinului, Nr. 718
                                <br>Poiana, Dambovita 13736
                            </dd>
                        </div>
                        <div class="caspart-top flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Telephone</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </dt>
                            <dd><a class="hover:text-gray-900" href="tel:+1 (555) 234-5678">0732 413 054</a></dd>
                        </div>
                        <div class="caspart-bottom flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Email</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </dt>
                            <dd><a class="hover:text-gray-900" href="mailto:hello@example.com">sima.silvia@yahoo.com</a>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="m-auto font-light mt-2 block sm:hidden" id="klasd">
                <p>sau</p>
            </div>
            <form id="contact-form" action="{{ url('/') }}" method="POST"
                class="px-6 pb-24 pt-20 sm:pb-32 lg:px-8 lg:py-32">
                @csrf
                <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div class="sm:col-span-2">
                            <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Nume Si
                                Prenume</label>
                            <div class="mt-2.5">
                                <input type="text" name="name" id="name" autocomplete="name"
                                    value="{{ old('name') }}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                            @if ($errors->has('name'))
                                @foreach ($errors->get('name') as $error)
                                    <span id="name-error" class="text-red-400 text-xs">{{ $error }}</span>
                                @endforeach
                            @endif
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email"
                                class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                            <div class="mt-2.5">
                                <input type="email" name="email" id="email" autocomplete="email"
                                        value="{{ old('email') }}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                            @if ($errors->has('email'))
                                @foreach ($errors->get('email') as $error)
                                    <span id="name-error" class="text-red-400 text-xs">{{ $error }}</span>
                                @endforeach
                            @endif
                        </div>
                        <div class="sm:col-span-2">
                            <label for="phone" class="block text-sm font-semibold leading-6 text-gray-900">Numar
                                Telefon</label>
                            <div class="mt-2.5">
                                <input type="tel" name="phone" id="phone" autocomplete="tel"
                                    value="{{ old('phone') }}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
                            </div>
                            @if ($errors->has('phone'))
                                @foreach ($errors->get('phone') as $error)
                                    <span id="name-error" class="text-red-400 text-xs">{{ $error }}</span>
                                @endforeach
                            @endif
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message"
                                class="block text-sm font-semibold leading-6 text-gray-900">Mesaj</label>
                            <div class="mt-2.5">
                                <textarea name="message" id="message" rows="4"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">{{ old('message') }}</textarea>
                            </div>
                            <div id="theError" class="hidden text-red-400 text-xs">
                                <p>Toate Campurile Sunt Obligatorii.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-end">
                        <button type="submit"
                            class="rounded-full bg-slate-800 hover:bg-slate-700 transition-all px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-400">Trimite</button>
                    </div>
                </div>
            </form>

            <div class="px-6 pb-24 pt-20 sm:pb-64 m-auto lg:px-8 lg:py-64 hidden" id="succesfully">
                <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
                    <div class="flex justify-center">
                        <div class="border-4 p-20 rounded-md border-cyan-400 bg-cyan-50">
                            <div class="text-center">
                                <i class="text-7xl text-cyan-400 fas fa-check"></i>
                            </div>
                            <div class="text-center">
                                <p class="text-3xl text-cyan-400">Formular trimis cu succes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
@endsection
