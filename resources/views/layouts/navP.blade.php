<div class="side-bar">
    <div id="close-btn">
        <i class="fas fa-times"></i>
    </div>
    <div class="profile">
        <img src="{{ asset('images/' . $etudiant->photo) }}" class="image" alt="">
        <h3 class="name"> {{ $etudiant->utilisateur->nom }} {{ $etudiant->utilisateur->prenom }}</h3>
        <p class="role">Etudiant</p>
        @php
            $hashids = new Hashids\Hashids('arti_form', 15);
            $encryptedId = $hashids->encode($etudiant->id_utilisateur);
        @endphp
        <a href="{{ route('etudiant.modules', ['id' => $encryptedId]) }}" class="btn">Mes cours</a>
    </div>
    <nav class="navbar">
        <a href="{{ route('etudiant.course', ['id' => $encryptedId]) }}"><i
                class="fa-solid fa-person-chalkboard"></i><span>Courses</span></a>
        <a href="{{ route('etudiant.contact', ['id' => $encryptedId]) }}"><i class="fas fa-headset"></i><span>contact us</span></a>
        <form action="{{ route('logout') }}" method="GET" id="logout-form">
            @csrf
            <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()">
                <i class="fa-solid fa-right-from-bracket"></i><span>Logout</span>
            </a>
        </form>
    </nav>
</div>
