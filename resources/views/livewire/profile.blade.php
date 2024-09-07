<div class="container-fluid px-4">
    <div class="overlay-b">
    </div>
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
    <div class="row my-4">
        <div class="col"></div>
        <div class="col-auto">
            <div class="btn btn-outline-light"
                 style="font-size: 48pt; border-radius: 100%; width: 192px; height: 192px; line-height: 172px">
                ^_^
            </div>
        </div>
        <div class="col"></div>
    </div>
    <div class="h1 text-light text-center"
         style="font-size: 36pt">
        Alice Marisa
    </div>
    <div class="h5 text-light text-center">
        username: alice.m
    </div>
    <div class="card card-body bg-secondary mt-5"
         style="border-radius: 10px">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-auto">
                        <div class="text-info"
                             style="font-size: 36pt">
                            <i class="fa-regular fa-bell"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="h1 text-dark">50</div>
                        Bells raised
                    </div>
                </div>
            </div>
            <div class="col"
                 style="border-left: 1px solid #51BBC7">
                <div class="row">
                    <div class="col-auto">
                        <div class="text-info"
                             style="font-size: 36pt">
                            <i class="fa-solid fa-ear-listen"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="h1 text-dark">50</div>
                        Bells raised
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0 mt-4"
         style="box-shadow: 0px 2px 3px rgba(18, 46, 64, 0.20)">
        <div class="col-auto torn-paper p-2"
             style="border-top-left-radius: 10px; border-bottom-left-radius: 10px"></div>
        <div class="col">
            <div class="card card-body"
                 style="box-shadow: none; border-radius: 0; border: 0; border-end-end-radius: 10px; border-start-end-radius: 10px">
                <div>
                    <div class="text-info">
                        E-Mail Address:
                    </div>
                    <div class="text-dark">
                        alice.marisa@gmail.com
                    </div>
                </div>
                <div class="mt-3">
                    <div class="text-info">
                        Gender:
                    </div>
                    <div class="text-dark">
                        Female
                    </div>
                </div>
                <div class="mt-3">
                    <div class="text-info">
                        Age Range:
                    </div>
                    <div class="text-dark">
                        18 - 24
                    </div>
                </div>
                <div class="text-info">
                    Additional Details:
                </div>
                <div class="text-dark">
                    <ul>
                        <li>Student</li>
                        <li>Prefers populated areas</li>
                        <li>Doesn't like cold weather</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg text-uppercase text-light w-100 mt-4 py-3">
        <div class="h3 mb-0">
            Save Information
        </div>
    </button>
</div>
