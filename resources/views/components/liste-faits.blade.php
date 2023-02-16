@props(["faits"])



@forelse ($faits as $fait)
<div style='width: 100%; display: flex; justify-content: space-between; margin-bottom: 20px; align-items: flex-start; border-bottom: 1px solid red'>
    <p>{{ $fait->fact }}</p>
    <a href="{{ url('/faits/supprimer/' . $fait->id) }}" class="btn btn-danger">Supprimer</a>
</div>

@empty
    <p>Aucun fait à afficher</p>
@endforelse
