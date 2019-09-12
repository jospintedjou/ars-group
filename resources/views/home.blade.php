@extends('layouts.app')

@section('content')
    <style>
        body{
            background: white;
        }
    </style>
    <div class="container pd-l-0 pd-r-0 mg-r-0 mg-l-0" style="max-width: initial">
        <div class="row img-top mg-b-50 height-600" style="background-image: url({{asset('images/hand_on_table.png')}});
                background-repeat: no-repeat;background-size: 100% 100%;">
            <div class="back-content">
                <div class="text-white f-s-50">Faites vos devis chez vous !</div>
                <div class="smalltext text-white pd-l-50 f-s-25">Nous vous assistons durant toout le processus.</div>
                <div class="mg-t-20" style="margin-left: 168px;">
                    <a class="btn btn-lg text-white brown bord-white btn-home">Commencer</a>
                </div>
            </div>

        </div>
        <div class="row mg-b-50">
            <div class="col-md-7 top-img height-page"
                 style="background-image: url({{asset('images/crop-img-left.png')}});
                         background-repeat: no-repeat;background-size: 100% 100%;">

            </div>
            <div class="col-md-5">
                <div class="mg-b-50 mg-t-50" style="margin-left: 171px">
                    <div class="round-ball red"><span class="fa fa-search"></span></div>
                    <h1 class="text-brown pd-b-20">Solution Adaptee</h1>
                </div>
                <div class="pd-10">
                    <h3>Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de paragraphes,
                        de mots ou de listes. Vous obtenez alors un texte aléatoire que vous pourrez ensuite utiliser librement
                        dans vos maquettes.</h3>
                    <div class="btn float-right text-brown">Lire la suite...</div>
                </div>
            </div>
        </div>
        <div class="row mg-b-50">
            <div class="col-md-7">
                <div class="mg-b-50 mg-t-50" style="margin-left: 171px">
                    <div class="round-ball black"><span class="fa fa-search"></span></div>
                    <h1 class="text-brown pd-b-20">Solution Adaptee</h1>
                </div>
                <div class="pd-10">
                    <h3>Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de paragraphes,
                        de mots ou de listes. Vous obtenez alors un texte aléatoire que vous pourrez ensuite utiliser librement
                        dans vos maquettes.</h3>
                    <div class="btn float-right text-brown">Lire la suite...</div>
                </div>
            </div>
            <div class="col-md-5 top-img height-page"
                 style="background-image: url({{asset('images/img-rigth.png')}}); background-repeat: no-repeat;background-size: 100% 100%;"></div>
        </div>

        <div class="mg-b-50">
            <div class="font-size-4em" style="margin-left: 435px;">NOS REALISATIONS</div>
            <div class="row mg-b-50" style="margin-left: 300px;">
                <div class="mg-r-50" style="display: inline-block">
                    <h2 class="text-brown font-size-4em">456</h2>
                    <h2>CMS</h2>
                </div>
                <div class="sm-round-ball red">.</div>
                <div class="col-md-3" style="display: inline-block">
                    <div class="text-brown font-size-4em">189</div>
                    <h2>Framework</h2>
                </div>
                <div class="sm-round-ball red">.</div>
                <div class="col-md-3" style="display: inline-block">
                    <div class="text-brown font-size-4em">273</div>
                    <h2>Mobile</h2>
                </div>
            </div>
        </div>

        <div class="row mg-b-50">
            <div class="font-size-4em" style="margin-left: 435px;">NOS PARTENAIRES</div>
            <div style="margin-left: 120px;">
                <img class="mg-r-50" src={{asset('images/QLIK_GREY.png')}}/>
                <img class="mg-r-50" src={{asset('images/empruntis-gris-1024x387.png')}}/>
                <img class="mg-r-50" src={{asset('images/Colibri-New-Grey_0.png')}}/>
                <img class="mg-r-50" src={{asset('images/ooveolia.png')}}/>
                <img class="mg-r-50" src={{asset('images/QLIK_GREY.png')}}/>
            </div>
        </div>

    </div>
@endsection
