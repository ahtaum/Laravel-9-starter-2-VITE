@extends('layouts.app')
@section('title', 'Home')

@section('content')
<section id="row-1" class="container my-5">

    <h1 class="text-center text-light">Hallo Dunia</h1>

    <div class="row mt-5">
        <div class="col-lg text-light">
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas numquam, cumque perspiciatis facere quo atque recusandae, cum reiciendis magni cupiditate, earum provident. Fugiat, libero? Voluptate repellat error consequuntur soluta labore.</p>
        </div>

        <div class="col-lg">
            <div class="card border-0">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, nisi.</p>
                </div>
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
        console.log(`Home Page`)
    </script>
@endpush