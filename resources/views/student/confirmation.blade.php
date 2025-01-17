@extends('layouts.app')

@section('content')
    <section class="bg-secondary text-white" id="pieteikties">
        <div class="container text-center">
            @if($student->confirmed_at)
                <h2 class="mb-4">{{ $student->name }}, paldies, apstiprināji dalību, tiekamies Sējienā!</h2>
            @else
                <h2 class="mb-4">{{ $student->name }}, apstiprini savu dalību Sējienā!</h2>
                <div class="offset-lg-2 col-lg-8">
                    {{ Form::model($student, ['method' => 'POST', 'route' => ['student.confirm'], 'class' => 'form-horizontal', 'id' => 'application-form']) }}
                    {{ Form::hidden('hash', $student->hash) }}
                    {{ Form::rowText('food', null, 'Ko tu (ne)ēd?', ['required'], 'Visēdājs, veģetārietis, vegāns u.c.') }}
                    {{ Form::rowText('allergies', null, 'Alerģijas?', ['required']) }}
                    {{ Form::rowText('health', null, 'Veselības stāvoklis?', ['required'], 'Traumas, ierobežojumi') }}
                    {{ Form::rowText('songs', null, '2 Dziesmas', [], 'Ieraksti 2 dziesmas, kas tev ļoti patīk un labprāt gribētu dzirdēt kopīgajā studentu playlistē') }}
                    {{ Form::rowTextarea('about', null, 'Īsumā par sevi', array('class' => 'form-control inputbox', 'rows' => '5'), 'Kas esi, ko dari dzīvē, kāpēc nāc uz datoriķiem, ko vēlies sasniegt?') }}
                    {{ Form::rowSelect('attending', ['both'=>'Visu pasākumu','first'=>'Pirmo daļu Raiņa bulvārī','second'=>'Otro daļu Garozā'], 'Kuru pasākuma daļu apmeklēsi?', ['required']) }}
                    {{ Form::rowCheckbox('warning', 'Ja plāni mainās, ziņošu orgiem', [['label' => 'Piekrītu', 'value' => 'yes']], ['required'], 'Ja man nebūs iespēja ierasties uz pasākumu, es to laicīgi ziņošu organizatoriem (vismaz dienu iepriekš), rakstot uz sejiens@datoriki.lv') }}
                    {{ Form::rowSubmit('Apstiprināt dalību', ['class' => 'form-control btn btn-primary col-lg-6']) }}
                    {{ Form::close() }}
                </div>
                <h4 class="text-white pt-2 mt-5">Mēs, Datorikas fakultātes Studentu pašpārvalde, apstrādāsim Tavus datus, lai informētu Tevi par pasākumu un jaunumiem, kas saistīti ar studiju uzsākšanu. Tavus datus mēs nenodosim trešajām personām. Ja Tev ir jautājumi, sazinies ar mums info@datoriki.lv.</h4>
            @endif
        </div>
    </section>
    <div class="bg-primary section-min">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-white pr-2 text-center mt-2 mb-2"><i class="fas fa-camera fa-6x"></i></div>
                <div class="col-lg-8 mx-auto text-center">
                    <h5 class="text-white">Informējam, ka pasākuma laikā tiks fotografēts un filmēts. Apmeklējot pasākumu, Jūs piekrītat pasākuma laikā veiktajai fotografēšanai un filmēšanai, kā arī fotoattēlu un videomateriālu publiskai izmantošanai sabiedrisko attiecību vai reklāmas nolūkos LU Datorikas fakultātes un Datorikas fakultātes Studentu pašpārvaldes sociālajos medijos, tīmekļa vietnē internetā un citviet.<br><br>Piedaloties pasākumā, Jūs piekrītat uzņemties atbildību paši par sevi. Ierodoties uz pasākumu, būs nepieciešams parakstīties, apliecinot to, ka piekrītat šiem nosacījumiem.
                    </h5>
                </div>
                <div class="col-lg-2 text-white text-center mt-2 mb-2"><i class="fas fa-video fa-6x"></i></div>
            </div>
        </div>
    </div>
@endsection