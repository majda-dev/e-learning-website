@extends('master2D')

@section('content')
    <section id="about-home">
        <div class="bounce">
        <h2 data-text="Domaines">Fields</h2>
        </div>
    </section>

    <section id="course" class="hidden">
        <h1>Our popular fields</h1>
        <p>Select the field you want to study</p>

        <div class="course-box objects">
            @foreach($domaines as $domaine)

                <div class="courses free show courses-home">
                    <a href="{{ route('domaine.show', $domaine->slug) }}">
                        <img class="img-fluid" src="{{ asset('module/'.$domaine->photo) }}" alt="{{ $domaine->nom }}">
                        <div class="details">
                            <h6>{{ $domaine->nom }}</h6>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection




