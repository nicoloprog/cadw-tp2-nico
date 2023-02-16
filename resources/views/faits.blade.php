<x-layout>
    <main class="w-50 m-auto mt-5">
        @if(session('suppression-fait'))
          <p class="alert alert-success">{{ session('suppression-fait') }}</p>
        @endif

        <h1>Liste des faits</h1>

        <x-liste-faits :faits="$faits" />

         <a href="{{ route('accueil') }}" class="btn btn-secondary">Retour</a>
    </main>
</x-layout>
