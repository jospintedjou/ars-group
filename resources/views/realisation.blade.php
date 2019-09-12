@extends('layouts.app')

@section('content')
    <div class="container pd-l-0 pd-r-0 mg-r-0 mg-l-0" style="max-width: initial">
        <div class="row img-top mg-b-50 height-600"
             style="background-image: url({{asset('images/background-header-1024x411.png')}});
                     background-repeat: no-repeat;background-size: 100% 100%;">
            <div class="title">
                <div class="text-white">NOS REALISATIONS</div>
                <div class="underline"></div>
            </div>
        </div>
        <div class="row mg-l-50 mg-r-50">
            <div class="col-md-5">
                <div class="row mg-b-100 relative">
                    <div class="text-brown bold small-title mg-l-35">Flamimgo</div>
                    <h3>Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de
                        paragraphes,
                        de mots ou de listes. Vous obtenez alors un texte aléatoire que vous pourrez ensuite utiliser
                        librement
                        dans vos maquettes.</h3>
                    <div class="underline brown width-230 mg-l-134 mg-t-50"></div>
                </div>
                <div class="row mg-b-100 relative center">
                    <div>
                        <img class="lg-img-round" src="{{asset('images/images-1.jpeg')}}" alt=""/>
                    </div>
                    <div class="date-btm">Mars-Mai</div>
                </div>
                <div class="row mg-b-100 relative">
                    <div class="text-brown bold small-title mg-l-35">ICADE</div>
                    <h3>Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de
                        paragraphes,
                        de mots ou de listes. Vous obtenez alors un texte aléatoire que vous pourrez ensuite utiliser
                        librement
                        dans vos maquettes.</h3>
                    <div class="underline brown width-230 mg-l-134 mg-t-50"></div>
                </div>
                <div class="row mg-b-100 relative center">
                    <div>
                        <img class="lg-img-round" src="{{asset('images/images-2.jpeg')}}" alt=""/>
                    </div>
                    <div class="date-btm">Aout-Septembre</div>
                </div>
            </div>
            <div class="col-md-2" style="position: relative">
                <div class="year-ball red"><span class="f-s-20 bold">2018</span></div>
                <div class="v-line">
                </div>
                <div class="year-ball red top-1400"><span class="f-s-20 bold">2018</span></div>
                <div class="year-ball red top-460"><span class="f-s-20 bold">2018</span></div>
                <div class="year-ball red top-835"><span class="f-s-20 bold">2018</span></div>
            </div>
            <div class="col-md-5">
                <div class="row mg-b-100 relative center">
                    <div>
                        <img class="lg-img-round" src="{{asset('images/images-1.png')}}" alt=""/>
                    </div>
                    <div class="date-btm">Mars-Mai</div>
                </div>
                <div class="row mg-b-100 relative">
                    <div class="text-brown bold small-title mg-l-35">Roma</div>
                    <h3>Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de
                        paragraphes,
                        de mots ou de listes. Vous obtenez alors un texte aléatoire que vous pourrez ensuite utiliser
                        librement
                        dans vos maquettes.</h3>
                    <div class="underline brown width-230 mg-l-134 mg-t-50"></div>
                </div>
                <div class="row mg-b-100 relative center">
                    <div>
                        <img class="lg-img-round" src="{{asset('images/logo-Icade-fond-gris-1024x765.png')}}" alt=""/>
                    </div>
                    <div class="date-btm">Aout-Septembre</div>
                </div>
                <div class="row mg-b-100 relative">
                    <div class="text-brown bold small-title mg-l-35">ARC</div>
                    <h3>Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de
                        paragraphes,
                        de mots ou de listes. Vous obtenez alors un texte aléatoire que vous pourrez ensuite utiliser
                        librement
                        dans vos maquettes.</h3>
                    <div class="underline brown width-230 mg-l-134 mg-t-50"></div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
@endsection
