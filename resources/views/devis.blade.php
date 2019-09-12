@extends('layouts.app')

@section('content')
    <div class="container pd-l-0 pd-r-0 mg-r-0 mg-l-0" style="max-width: initial">
        <div class="row img-top mg-b-50 height-600"
             style="background-image: url({{asset('images/background-header-1024x411.png')}});
                     background-repeat: no-repeat;background-size: 100% 100%;background-color: white;">
            <div class="title">
                <div class="text-white">MES DEVIS</div>
                <div class="underline"></div>
            </div>
        </div>
        <div class="row mg-b-85 mg-l-100v" style="margin-right: -140px;">
            <div class="col-md-3">
                <button class="btn btn-lg white bord-brown wd-90-p pd-15 tab active-tab" data-target="ajout_devis">
                    <span class="fa fa-plus mg-r-10"></span>Nouveau devis
                </button>
            </div>
            <div class="col-md-3 mg-l-20">
                <button class="btn btn-lg white bord-brown wd-90-p pd-15 shadow-btm tab"
                        data-target="devis_non_traites">
                    <span class="fa fa-file-text-o mg-r-10"></span>Devis non traités
                </button>
            </div>
            <div class="col-md-3 mg-l-20">
                <button class="btn btn-lg white bord-brown wd-90-p pd-15 tab" data-target="devis_traites">
                    <span class="fa fa-file-text-o mg-r-10"></span>Devis traités
                </button>
            </div>
        </div>

        <div class="row mg-l-220 mg-b-50 tab-box ajout_devis">
            <form class="" style="margin-left:50px" action="{!! route('store_devis') !!}" method="post"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="nom_contact" id="nom_contact"
                                   placeholder="Nom du contact">
                            {!! $errors->first('nom_contact', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="nom_projet" id="nom_projet"
                                   placeholder="Nom du projet">
                            {!! $errors->first('nom_projet', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" name="duree" id="duree"
                                       placeholder="Duree(en jours)">
                                {!! $errors->first('duree', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="form-group col-md-6 col-md-offset-1">
                                <input class="form-control" type="date" name="debut" id="debut" placeholder="Debut">
                                {!! $errors->first('debut', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="email" id="email" placeholder="Email">
                            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-1">
                        <div class="form-group row input-img l-h-87 h-90" data-img="logo">
                            <div class="text-center col-md-12 f-s-25 img-preview">LOGO</div>
                            {!! $errors->first('logo', '<small class="help-block">:message</small>') !!}
                        </div>
                        <input class="logo form-control hg-91 hidden" type="file" name="logo" id="logo"
                               placeholder="LOGO">
                        <div class="row">
                            <div class="col-md-4 pd-l-0">
                                <input class="form-control" type="text" name="cout" id="cout" placeholder="Budget">
                                {!! $errors->first('cout', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="col-md-8 col-md-offset-1 form-group input-img" data-img="cahier_charge">
                                <div class="text-center cdc img-preview">CAHIER DE CHARGE</div>
                                {!! $errors->first('cahier_charge', '<small class="help-block">:message</small>') !!}
                            </div>
                            <input class="form-control hidden cahier_charge" type="file" name="cahier_charge"
                                   id="cahier_charge" placeholder="cahier_charge">
                        </div>
                        <div class="form-group row">
                            <input class="form-control" type="text" name="telephone" id="telephone"
                                   placeholder="Telephone">
                            {!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea style="width: 102%" class="form-control" rows="10" cols="97" name="description"
                              id="description"
                              placeholder="Description du projet..."></textarea>
                    {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
                </div>

                <div class="float-right" style="margin-right: -14px;">
                    <button class="btn btn-lg text-white bord-white red">SOUMETTRE</button>
                </div>
            </form>
        </div>

        <div class="row mg-l-100v mg-b-50 hidden tab-box devis_non_traites" style="max-width: 76%;">
            <div class="" style="margin-left:50px">
                @if($devis_non_traites)
                    @foreach($devis_non_traites as $l=>$devis_non)
                        @if($l%2 == 0)
                            <div class="row position-relative mg-b-50">
                                <div class="col-md-6 height-600 devis-img"
                                     style="background-image: url({{asset('uploads/'.$devis_non->logo)}});
                                             background-repeat: no-repeat;background-size: 100% 100%;">
                                </div>
                                <img class="img-middle" src="{{asset('uploads/'.$devis_non->logo)}}"/>
                                <div class="col-md-6 box-right">
                                    <div class="text-brown small-title">{{$devis_non->nom_projet}}</div>
                                    <div class="row">
                                        <div class="col-md-5 mg-l-50">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 3
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 4
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-5 col-md-offset-2">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 2
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 3
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 4
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button style="margin-left:131px; padding-top: 3px; padding-bottom: 3px"
                                                class="btn btn-lg wd-50-p brown mg-t-50 pd-t-3 pd-b-3">
                                            <span class="fa fa-file-text-o mg-r-10"></span>Modifier
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row position-relative mg-b-50">

                                <div class="col-md-6 box-right">
                                    <div class="text-brown small-title">{{$devis_non->nom_projet}}</div>
                                    <div class="row">
                                        <div class="col-md-5 mg-l-50">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 3
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 4
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-5 col-md-offset-2">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 2
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 3
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 4
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button style="margin-left:131px; padding-top: 3px; padding-bottom: 3px"
                                                class="btn btn-lg wd-50-p brown mg-t-50 pd-t-3 pd-b-3">
                                            <span class="fa fa-file-text-o mg-r-10"></span>Modifier
                                        </button>
                                    </div>
                                </div>
                                <img class="img-middle" src="{{asset('uploads/'.$devis_non->logo)}}"/>
                                <div class="col-md-6 height-600 devis-img"
                                     style="background-image: url({{asset('uploads/'.$devis_non->logo)}});
                                             background-repeat: no-repeat;background-size: 100% 100%;">
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
                <div class="row position-relative mg-b-50">
                    <div class="col-md-6 height-600 devis-img"
                         style="background-image: url({{asset('images/click_on_tyler.jpeg')}});
                                 background-repeat: no-repeat;background-size: 100% 100%;">
                    </div>
                    <img class="img-middle" src="{{asset('images/images-1.png')}}"/>
                    <div class="col-md-6 box-right">
                        <div class="text-brown small-title">Flamimgo</div>
                        <div class="row">
                            <div class="col-md-5 mg-l-50">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 1
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 1
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 3
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 4
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-5 col-md-offset-2">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 1
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 2
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 3
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 4
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button style="margin-left:131px; padding-top: 3px; padding-bottom: 3px"
                                    class="btn btn-lg wd-50-p brown mg-t-50 pd-t-3 pd-b-3">
                                <span class="fa fa-file-text-o mg-r-10"></span>Modifier
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row position-relative mg-b-50">

                    <div class="col-md-6 box-right">
                        <div class="text-brown small-title">ROMA</div>
                        <div class="row">
                            <div class="col-md-5 mg-l-50">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 1
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 1
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 3
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 4
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-5 col-md-offset-2">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 1
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 2
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 3
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 4
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button style="margin-left:131px; padding-top: 3px; padding-bottom: 3px"
                                    class="btn btn-lg wd-50-p brown mg-t-50 pd-t-3 pd-b-3">
                                <span class="fa fa-file-text-o mg-r-10"></span>Modifier
                            </button>
                        </div>
                    </div>
                    <img class="img-middle" src="{{asset('images/images-1.jpeg')}}"/>
                    <div class="col-md-6 height-600 devis-img"
                         style="background-image: url({{asset('images/tablet-sea.jpeg')}});
                                 background-repeat: no-repeat;background-size: 100% 100%;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mg-l-100v mg-b-50 hidden tab-box devis_traites" style="max-width: 76%;">
            <div class="" style="margin-left:50px">
                @if($devis_traites)
                    @foreach($devis_traites as $l=>$devis_traite)
                        @if($l%2 == 0)
                            <div class="row position-relative mg-b-50">
                                <div class="medium-ball black"><span class="f-s-20 bold">{{$devis_traite->cout}}$</span></div>
                                <div class="col-md-6 box-right">
                                    <div class="text-brown small-title">{{$devis_traite->nom_projet}}</div>
                                    <div class="row">
                                        <div class="col-md-5 mg-l-50">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 3
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 4
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-5 col-md-offset-2">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 2
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 3
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 4
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button style="margin-left:131px; padding-top: 3px; padding-bottom: 3px"
                                                class="btn btn-lg wd-50-p brown mg-t-50 pd-t-3 pd-b-3">
                                            VALIDER
                                        </button>
                                    </div>
                                </div>
                                <img class="img-middle" src="{{asset('uploads/'.$devis_traite->logo)}}"/>
                                <div class="col-md-6 height-600 devis-img"
                                     style="background-image: url({{asset('uploads/'.$devis_traite->logo)}});
                                             background-repeat: no-repeat;background-size: 100% 100%;">
                                </div>
                            </div>
                        @else
                            <div class="row position-relative mg-b-50">
                                <div class="medium-ball black"><span class="f-s-20 bold">{{$devis_traite->cout}}$</span></div>
                                <div class="col-md-6 height-600 devis-img"
                                     style="background-image: url({{asset('uploads/'.$devis_traite->logo)}});
                                             background-repeat: no-repeat;background-size: 100% 100%;">
                                </div>
                                <img class="img-middle" src="{{asset('uploads/'.$devis_traite->logo)}}"/>
                                <div class="col-md-6 box-right">
                                    <div class="text-brown small-title">{{$devis_traite->nom_projet}}</div>
                                    <div class="row">
                                        <div class="col-md-5 mg-l-50">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 3
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Fonction 4
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-5 col-md-offset-2">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 1
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 2
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 3
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="puce"></div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-2">
                                                    Service 4
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button style="margin-left:131px; padding-top: 3px; padding-bottom: 3px"
                                                class="btn btn-lg wd-50-p brown mg-t-50 pd-t-3 pd-b-3">
                                            <span class="fa fa-file-text-o mg-r-10"></span>VALIDER
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
                <div class="row position-relative mg-b-50">
                    <div class="medium-ball black"><span class="f-s-20 bold">960 $</span></div>
                    <div class="col-md-6 box-right">
                        <div class="text-brown small-title">ROMA</div>
                        <div class="row">
                            <div class="col-md-5 mg-l-50">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 1
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 1
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 3
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 4
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-5 col-md-offset-2">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 1
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 2
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 3
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 4
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button style="margin-left:131px; padding-top: 3px; padding-bottom: 3px"
                                    class="btn btn-lg wd-50-p brown mg-t-50 pd-t-3 pd-b-3">
                                <span class="fa fa-file-text-o mg-r-10"></span>VALIDER
                            </button>
                        </div>
                    </div>
                    <img class="img-middle" src="{{asset('images/images-1.jpeg')}}"/>
                    <div class="col-md-6 height-600 devis-img"
                         style="background-image: url({{asset('images/tablet-sea.jpeg')}});
                                 background-repeat: no-repeat;background-size: 100% 100%;">
                    </div>
                </div>
                <div class="row position-relative mg-b-50">
                    <div class="medium-ball black"><span class="f-s-20 bold">750 $</span></div>
                    <div class="col-md-6 height-600 devis-img"
                         style="background-image: url({{asset('images/tablet_pen.jpeg')}});
                                 background-repeat: no-repeat;background-size: 100% 100%;">
                    </div>
                    <img class="img-middle" src="{{asset('images/logo-Icade-fond-gris-1024x765.png')}}"/>
                    <div class="col-md-6 box-right">
                        <div class="text-brown small-title">FLAMIMGO</div>
                        <div class="row">
                            <div class="col-md-5 mg-l-50">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 1
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 1
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 3
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Fonction 4
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-5 col-md-offset-2">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 1
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 2
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 3
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="puce"></div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        Service 4
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button style="margin-left:131px; padding-top: 3px; padding-bottom: 3px"
                                    class="btn btn-lg wd-50-p brown mg-t-50 pd-t-3 pd-b-3">
                                <span class="fa fa-file-text-o mg-r-10"></span>VALIDER
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script>
        $(document).ready(function () {
            $(".input-img>input:file").change(function () {
                var img = $(this).parent().attr('data-img');
                readURL(this, $('.' + img));
            });
            $('div.input-img').on('click', function (e) {
                e.preventDefault();
                $imgClass = $(this).attr('data-img');
                if (!$(event.target).is('input#' + $imgClass)) {
                    $("input#" + $imgClass).click();
                }

                $(this).find('.img-preview').parent().css('background', '#0080007a');
            });
            /*****      TAb script        ****/
            $('button.tab').on('click', function () {
                $('.active-tab').removeClass('active-tab');
                $(this).addClass('active-tab');
                var target = $(this).attr('data-target');
                $('div.tab-box').hide();
                $('div.' + target).fadeIn();
            })
        })
    </script>
@endsection
