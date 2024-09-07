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
        @if (request()->has('registered'))
            <div class="card card-body"
                 style="border-radius: 2px">
                <div class="alert alert-success text-center mb-0">
                    Done - have a safe and comfortable journey!
                </div>
            </div>
            <hr>
        @endif
        <div class="h1 text-secondary text-uppercase">
            <i class="fa-solid fa-calendar-week"></i>
            Journeys
        </div>
        <div class="card card-body  banner border-0">
            <div class="row">
                <div class="col-2"></div>
                <div class="col">
                    <div class="h6 text-light">
                        Alice's Profile
                    </div>
                    <div class="text-light">
                        Viewing: Upcming
                    </div>
                </div>
                <div class="col-auto">
                    <div class="text-light"
                         style="font-size: 26pt">
                        <i class="fa-solid fa-rotate"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="h1 text-light text-uppercase">
                    {{ $currentDate }}
                </div>
            </div>
            <div class="col-auto">
                <button type="button"
                        class="btn text-light"
                        style="font-size: 24pt; line-height: 0">
                    &gt;
                </button>
            </div>
        </div>
        <div class="card card-body mt-2">
            <div class="row">
                <div class="col">
                    <p class="h3 text-primary mb-0">
                        09:00 AM - Going to work
                    </p>
                    <p class="text-dark mb-0">
                        Place: University of Terra
                    </p>
                </div>
                <div class="col-auto">
                    <div class="text-info"
                         style="font-size: 26pt">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-body bg-primary text-light mt-4"
             style="border-radius: 25px 25px 0px 0px">
            <div class="row">
                <div class="col">
                    <p class="h3 text-light mb-0">
                        09:00 AM - Meeting with ...
                    </p>
                    <p class="text-light mb-0">
                        Place: The Underground Laboratory
                    </p>
                </div>
                <div class="col-auto">
                    <div class="text-light"
                         style="font-size: 26pt">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-body"
             style="border-radius: 0px 0px 25px 25px">
            <div class="text-primary">
                <p class="mb-0">
                    <i class="fa-solid fa-bell"></i>
                    Bells have been recently raised in this area!
                </p>
            </div>
        </div>
        <div class="card card-body bg-light mt-4">
            <div class="row">
                <div class="col">
                    <p class="h3 text-primary mb-0">
                        05:30 PM - Groceries
                    </p>
                    <p class="text-dark mb-0">
                        Place: University of Terra
                    </p>
                </div>
                <div class="col-auto">
                    <div class="text-info"
                         style="font-size: 26pt">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="torn-paper-90 mt-5"
         style="height: 32px"></div>
    <div class="p-4"
         style="background: white">
        <a href="{{ route('journey') }}"
           class="btn btn-info text-uppercase text-light p-3 w-100"
           wire:navigate>
            Add New Journey
        </a>
        <button class="btn btn-info text-uppercase text-light p-3 w-100 mt-2"
                data-bs-toggle="modal"
                data-bs-target="#profileModal">
            Add New Profile
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade"
         id="profileModal"
         tabindex="-1"
         aria-labelledby="profileModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-info text-light">
                    <h5 class="modal-title text-center"
                        id="profileModalLabel">
                        New Profile
                    </h5>
                </div>
                <div class="modal-body">
                    <label class="w-100">
                        Name:
                        <input type="text"
                               class="form-control"
                               placeholder="Eve, My Son, etc.">
                    </label>
                    <label class="w-100 mt-2">
                        Gender:
                        <input type="text"
                               class="form-control"
                               placeholder="Female, Non-Binary, Prefer not to say, etc.">
                    </label>
                    <label class="w-100 mt-2">
                        Age Range:
                        <input type="text"
                               class="form-control"
                               placeholder="e.g. 18 - 24">
                    </label>
                    <label class="w-100 mt-2">
                        Additional Details:
                        <input type="text"
                               class="form-control"
                               placeholder="Preferences, disabilities, priorities, etc.">
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-primary text-light w-100 p-2 text-uppercase"
                            data-bs-dismiss="modal">
                        Save
                    </button>
                    <button type="button"
                            class="btn btn-secondary w-100 mt-1 p-2 text-uppercase"
                            data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
