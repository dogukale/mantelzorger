<article class="houseCard a-popup">
    <figure class="houseCard__figure">
        <img class="houseCard__image" src="{{$huis->image}}" alt="{{$huis->name}}"/>
    </figure>
    <header class="houseCard__header u-flex-h-center u-flex-v-center">
        <h2 class="houseCard__heading">{{$huis->name}}</h2>
    </header>
    <section class="houseCard__textSection u-flex-h-center u-flex-v-center">
        <p class="houseCard__text">{{$huis->street}} {{$huis->number}}, {{$huis->postal_code}} {{$huis->place}}</p>
    </section>
    <section class="houseCard__sensor-beveiliging">
        <section class="houseCard__sensor" data-sensor="{{$sensor->enabled}}">
            <h1 class="houseCard__heading">Sensoren</h1>
            @foreach($gas as $gas)
            <article class="houseCard__sensorFlex"">
                <p class="houseCard__paragraph">Gas level</p>
                <p class="houseCard__paragraph">{{$gas->btn_pressed}}</p>
            </article>
            @endforeach
            @foreach($water as $water)
            <article class="houseCard__sensorFlex">
                <p class="houseCard__paragraph">Water level</p>
                <p class="houseCard__paragraph">{{$water->btn_pressed}}</p>
            </article>
            @endforeach
            @foreach($temperatuur as $temperatuur)
            <article class="houseCard__sensorFlex">
                <p class="houseCard__paragraph">Temperatuur</p>
                <p class="houseCard__paragraph">{{$temperatuur->value}}</p>
            </article>
            @endforeach
            @foreach($vochtigheid as $vochtigheid)
            <article class="houseCard__sensorFlex">
                <p class="houseCard__paragraph">Vochtigheid</p>
                <p class="houseCard__paragraph">{{$vochtigheid->value}}</p>
            </article>
            @endforeach
            @foreach($paniek as $paniek)
            <article class="houseCard__sensorFlex">
                <p class="houseCard__paragraph">Paniek knop</p>
                <p class="houseCard__paragraph">{{$paniek->btn_pressed}}</p>
            </article>
            @endforeach
        </section>
        <section class="houseCard__beveiliging">
            <h1 class="houseCard__heading">Beveiliging</h1>
            @foreach($beveiliging as $beveiliging)
            <article class="houseCard__sensorFlex">
                <p class="houseCard__paragraph">Inbraaksensor</p>
                <p class="houseCard__paragraph">{{$beveiliging->triggered}}</p>
            </article>
            @endforeach
        </section>
    </section>
    <section class="houseCard__btnSection">
        <a class="houseCard__back_to_home" href="/">Ga terug naar home</a>
    </section>
</article>