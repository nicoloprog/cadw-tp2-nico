<x-layout>

    <main class="w-50 m-auto mt-5">
        @if(session('ajout-fait'))
            <p class="alert alert-success">{{ session('ajout-fait') }}</p>
        @endif

        <form action="{{ url('/faits/sauvegarder/') }}" method="post">
            @csrf


            <label>Fait:
                <input type="text" name="fact" value="{{ old('fact') }}">
            </label>
            @error('fact')
            <p class="alert alert-danger p-2">{{ $message }}</p>
            @enderror

            <div>
                <input type="submit" value="Ajouter">
            </div>
        </form>


    </main>
</x-layout>
