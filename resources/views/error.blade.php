<x-app-layout>
    <div class="m-auto text-white text-center">
        
        <h1 class="text-3xl font-bold">LaraPay</h1>
        <h2 class="text-2xl">Reference ID: {{ $ref}}</h2>
        <h2 class="text-2xl">
            @if(isset(session('msg')))
                {{ session('msg') }}
            @else
                Payment Not Successful. Try again!
            @endif
        </h2>
        <a href="{{ route('payment') }}" class="btn flash-button text-white">Pay Again</a>
    </div>
    
</x-app-layout>