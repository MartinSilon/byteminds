@extends('frontend.layouts.app')
@section('title', 'O nás')

@section('content')

    <div class="container-fluid text-white py-5 position-relative container-green headline-container "
         style="background-image: url('{{ asset( $photo->find(11)->getPath()) }}') ;">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12">

                    <h2 class="fw-bold text-center " style="color: #f1b800">{{$text->find(21)->text1}}</h2>
                </div>
            </div>
        </div>

    </div>
    <div class="siteBg py-5">
        <div class="container py-5 containerRadius bg-white">
            <div class="container p-5">
                <p class="mt-4 ">
                    {{$text->find(22)->text1}}
                </p>

            </div>


            <div class="row">
                @foreach ([
                    [
                        'photo' => 'photos/janSimulak.png',
                        'name' => 'Ján Šimulák',
                        'mail' => 'technicke@newgreencompany.sk',
                        'phone' => '+421 915 738 367',
                        'position' => 'Vedúci technického oddelenia',
                        'description' => 'Som skúsený odborník so vzdelaním v technickom odbore a s viac ako 31-ročnou praxou v oblasti odpadového hospodárstva. Moja špecializácia zahŕňa komplexné riadenie zmluvných vzťahov s pôvodcami odpadov, ako aj s koncovými spracovateľmi a zhodnocovateľmi. Vynikám odbornými znalosťami v logistike zberu a odvozu odpadov, kde pôsobím nielen ako technik, ale aj ako vodič ADR s rozsiahlymi skúsenosťami s manipuláciou s nebezpečnými materiálmi, ako sú jedy, horľaviny, azbest a mnoho ďalších. Vďaka  dlhoročnej praxi a  precíznosti som  spoľahlivým partnerom  našich zákazníkov v oblasti environmentálneho manažmentu a nakladania s odpadmi.'
                    ],
                    [
                        'photo' => 'photos/marianMach.png',
                        'name' => 'Marián Mach',
                        'mail' => 'poradca@newgreencompany.sk',
                        'phone' => '+421 917 750 750',
                        'position' => 'Poradca',
                        'description' => 'Celý svoj život  sa venujem ochrane životného prostredia. Riadil som práce pri  výstavbe monitorovacích systémov pre ochranu podzemných vôd  a pri  sanáciách podzemných vôd ropnými látkami na 65 čerpacích staniciach a na šiestich skladoch ropných uhľovodíkov Slovnaftu a Benzinolu,  v rámci celého Slovenska. Riadil som sanáciu skládky nebezpečných odpadov vo Veternej Porube. Som spoluautorom PD pre výstavbu skládky v Kolte.  Zabezpečoval som sanáciu podzemných vôd a pôdy od znečistenia trichlórom v  ZŤS Dubnica nad Váhom a v  Zlatých Moravciach. Riadil som sanáciu znečistenia ropnými kalmi v ŽOS Vrútky.  Spolupracoval som pri vývoji a realizácii technológií na spracovanie kameniva zo železničných tratí,  chemických odpadov, odpadových olejov, odpadov s obsahom ortuti, výroby alternatívnych palív, solidifikácií popolčekov a neutralizačných kalov, Zabezpečoval som dekontamináciu prekládkového uzla ropy v Čiernej nad Tisou. Som konzultantom súdnych  znalcov pri riešení znečistenia prírodného prostredia azbestom a inými nebezpečnými odpadmi.'
                    ],
                    [
                        'photo' => 'photos/monikaMokra.png',
                        'name' => 'Monika Mokrá',
                        'mail' => 'evidencne@newgreencompany.sk',
                        'phone' => '+421 915 738 367',
                        'position' => 'Vedúca oddelenia evidencie',
                        'description' => 'Vyštudovala som na Slovenskej poľnohospodárskej univerzite v Nitre, odbor  obchod a marketing. Vždy ma zaujímali udržateľné riešenia a efektívne nakladanie s odpadmi, preto ma práca v oblasti odvozu nebezpečného odpadu baví a motivuje ma prispieť k ochrane životného prostredia a bezpečnosti našej spoločnosti.'
                    ],
                    [
                        'photo' => 'https://picsum.photos/200/252',
                        'name' => 'Emily Davis',
                        'mail' => 'mail@newgreencompany.sk',
                        'phone' => '+421 915 738 367',
                        'position' => 'Dizajnérka UX/UI',
                        'description' => 'Donec sed sem quis nunc ornare suscipit vel id arcu. Quisque feugiat blandit leo facilisis efficitur. Ut et ligula sed erat lacinia rhoncus quis in augue. Donec congue, velit eu egestas pretium, odio nulla pulvinar orci, non rhoncus quam mauris eu erat. Aliquam eu nibh at ligula tempor ornare quis at ante. Fusce varius, diam at consequat facilisis, ligula augue consequat risus, aliquam semper orci sem eget nunc. Aenean accumsan neque in nulla vestibulum, sit amet viverra tellus rhoncus. Ut congue rutrum tristique. '
                    ]
                ] as $person)
                    <div class="col-12 mb-4 p-5">
                        <div class="row align-items-center">
                            <!-- Fotka -->
                            <div class="col-12 col-md-3 justify-content-center mb-5 mb-md-0 text-center">
                                <img src="{{ $person['photo'] }}" alt="{{ $person['name'] }}" class="img-fluid shadow">
                            </div>
                            <!-- Informácie o osobe -->
                            <div class="col-12 col-md-9">
                                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start">
                                    <!-- Ľavá strana: Meno a pozícia -->
                                    <div>
                                        <h2 class="mb-1">{{ $person['name'] }}</h2>
                                        <h5 class="text-success mb-2">{{ $person['position'] }}</h5>
                                    </div>

                                    <!-- Pravá strana: E-mail a telefónne číslo -->
                                    <div class="text-md-end">
                                        <h5 class="italic mb-1 text-muted">{{ $person['mail'] }}</h5>
                                        <h5 class="italic mb-0 text-muted">{{ $person['phone'] }}</h5>
                                    </div>
                                </div>

                                <!-- Popis osoby -->
                                <p>{{ $person['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
