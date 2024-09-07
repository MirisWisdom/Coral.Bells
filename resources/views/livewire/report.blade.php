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
                   class="btn happy-sm"
                   wire:navigate>
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
                           class="form-control border-0"
                           value="Somewhere in Northern Territory">
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
            <textarea class="form-control text-dark border-0"
                      readonly>A crocodile is looking at me. Seems very docile, but probably might do something spooky.</textarea>
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
        <button class="btn btn-primary btn-lg text-uppercase text-light w-100 mt-4 py-3"
                data-bs-toggle="modal"
                data-bs-target="#bellModal">
            <div class="h3 mb-0">
                Raise the Bell
            </div>
        </button>
        <!-- Modal -->
        <div class="modal fade"
             id="bellModal"
             tabindex="-1"
             aria-labelledby="bellModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-info text-light">
                        <h5 class="modal-title text-center"
                            id="bellModalLabel">
                            Our corals' gratitude to you
                        </h5>
                    </div>
                    <div class="modal-body">
                        Thank you for raising the bell for other corals. Your contribution is invaluable to the safety
                        and wellbeing of the community.
                        <br><br>
                        When somebody plans their journey around this area, your bell will guide them towards a safer
                        path. We will let you know when this happens, to remind you that your voice has impact.
                        <br><br>
                        With contributions such as yours, we can bring insights to our policy-makers regarding our
                        community's wellbeing and needs.
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn btn-primary text-light w-100 p-2 text-uppercase"
                                data-bs-dismiss="modal">
                            No problem!
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
