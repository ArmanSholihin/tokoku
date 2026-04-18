<!DOCTYPE html>
<html>
<x-guest-layout>
    <div style="text-align:center; padding:50px;">
        <h1 class="text-3xl font-bold">403</h1>
        <p class="mt-4">Maaf, Anda tidak memiliki akses.</p>

        <a href="{{ route('dashboard') }}" class="mt-4 inline-block text-blue-500">
            Kembali ke Dashboard
        </a>
    </div>
</x-guest-layout>
</html>