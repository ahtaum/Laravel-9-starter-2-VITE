@extends('layouts.app')
@section('title', 'Articles')

@section('content')
<section id="row-1" class="container my-5">

    <h1 class="text-center">List Data</h1>

    <div class="row mt-5">
        <div class="card border-0">
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, nisi.</p>
            </div>
        </div>
    </div>

</section>
@endsection

@push('styles')
<style>

    @media (max-width: 576px) {}
    @media (min-width: 720px) {}
    @media (min-width: 992px) {}
    @media (min-width: 1200px) {}
    @media (min-width: 1400px) {}
</style>
@endpush

@push('scripts')
    <script>
        console.log(`Articles Page`)
    </script>
@endpush