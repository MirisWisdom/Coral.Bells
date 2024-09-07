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
        <div class="card card-body mt-4">
            @if ($showGuide)
                <p>
                    {!! $currentGuide->description !!}
                </p>
                <hr>
                <div class="row">
                    <div class="col">
                        <button type="button"
                                class="btn btn-secondary text-dark"
                                wire:click="change">
                            Give me alternatives...
                        </button>
                    </div>
                    <div class="col-auto">
                        <a href="#"
                           class="btn btn-primary text-light text-uppercase">
                            Register my Journey!
                        </a>
                    </div>
                </div>
            @else
                <div class="h6 text-left text-dark">
                    Describe your journey:
                </div>
                <textarea class="form-control text-dark border-0"
                          style="min-height: 360px"
                          placeholder="Help us deeply understand your journey. For example, are you going to the office? Is your child going to school? Will you be walking at night? Is this a routine or recurring journey? We will use this information to guide you with safety and comfort to your destination."></textarea>
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
                            Manual Entry
                        </button>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg text-uppercase text-light w-100 mt-4 py-3"
                        wire:click="guide(true)">
                    <div class="h3 mb-0">
                        Safely Guide Me
                    </div>
                </button>
            @endif
        </div>
    </div>
</div>
