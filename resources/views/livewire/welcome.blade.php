<div class="container-fluid px-4">
    <div class="overlay">
    </div>
    <div class="row my-4">
        <div class="col"></div>
        <div class="col-auto">
            <a href="{{ route('profile') }}"
               class="btn happy-sm"
               wire:navigate>
            </a>
        </div>
    </div>
    <header>
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col-auto">
                <div class="logo"
                     style="width: 256px; height: 256px;">
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="h1 text-light text-center"
             style="font-size: 32pt">
            {{ config('app.name') }}
        </div>
    </header>
    <main class="row">
        <div class="col-md">
        </div>
        <div class="col-md">
            <div class="mt-5">
                <button class="btn w-100 btn-light py-3 mb-2">
                    <div class="h4 mb-0 text-uppercase text-info">
                        <i class="fa-regular fa-calendar"></i>
                        Plan a Journey
                    </div>
                </button>
                <a class="btn w-100 btn-light py-3 mt-2 mb-2"
                   href="{{ route('report') }}"
                   wire:navigate>
                    <div class="h4 mb-0 text-uppercase text-primary">
                        <i class="fa-regular fa-bell"></i>
                        Raise A New Bell
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md">
        </div>
    </main>
    <footer class="fixed-bottom text-primary text-center mb-4">
        {{ config('app.team') }}
    </footer>
</div>
