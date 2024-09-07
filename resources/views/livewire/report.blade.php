<div>
    <div class="container-fluid px-4">
        <div class="row my-4">
            <div class="col-auto">
                <a href="{{ route('welcome') }}"
                   class="btn text-light"
                   style="font-size: 24pt"
                   wire:navigate>
                    &lt;
                </a>
            </div>
            <div class="col"></div>
            <div class="col-auto">
                <a href="{{ route('profile') }}"
                   class="btn text-light"
                   style="font-size: 24pt"
                   wire:navigate>
                    ^_^
                </a>
            </div>
        </div>
        <div class="card card-body">
            <div class="h6 text-center text-info">
                Location:
            </div>
            <div class="row g-1">
                <div class="col">
                    <input type="text"
                           class="form-control border-0">
                </div>
                <div class="col-auto">
                    <button class="btn btn-secondary text-uppercase px-3 w-100">
                        Edit
                    </button>
                </div>
            </div>
        </div>
        <div class="card card-body mt-4">
            <div class="h6 text-left text-dark">
                Describe the situation:
            </div>
            <textarea class="form-control text-dark border-0"></textarea>
            <div class="row g-1">
                <div class="col-auto">
                    <button class="btn">
                        <div class="h4 text-primary mb-0">
                            <i class="fa-solid fa-microphone"></i>
                        </div>
                    </button>
                </div>
                <div class="col"></div>
                <div class="col-auto">
                    <button class="btn btn-secondary text-uppercase px-3 w-100">
                        Context
                    </button>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-lg text-uppercase text-light w-100 mt-4 py-3">
            <div class="h3 mb-0">
                Raise the Bell
            </div>
        </button>
        <div class="px-4">
            <div class="row">
                <div class="col-3 col-md-1">
                    <div class="text-dark"
                         style="font-size: 48pt">
                        12
                    </div>
                </div>
                <div class="col-9 col-md-5">
                    <p class="py-4">
                        <span class="text-primary">
                            <b>Bells raised</b>
                        </span>
                        <span class="text-dark">
                            in your area in the past week.
                        </span>
                    </p>
                </div>
                <div class="col-3 col-md-1">
                    <div class="text-dark"
                         style="font-size: 48pt">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
                <div class="col-9 col-md-5">
                    <p class="py-4">
                        <span class="text-dark">
                            Your bells have so far helped
                            <span class="text-primary">
                                25 fellow corals
                            </span> :)
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-info py-4">
        <h5 class="text-light text-uppercase text-center">
            Latest Badges Earned
        </h5>
        <div class="container-fluid">
            <div class="row">
                <div class="col-auto">
                    :)
                </div>
                <div class="col">
                    <div class="text-dark">
                        Weakness: Kryptonite
                    </div>
                    <div class="text-light">
                        Helped 25 Corals with your Bells
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-auto">
                    :)
                </div>
                <div class="col">
                    <div class="text-dark">
                        Friendly Neighborhood Coral-Bell
                    </div>
                    <div class="text-light">
                        Helped 20 Corals with your Bells
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-auto">
                    :)
                </div>
                <div class="col">
                    <div class="text-dark">
                        I Need a Hero
                    </div>
                    <div class="text-light">
                        Helped your 1st Coral with a Bell!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
