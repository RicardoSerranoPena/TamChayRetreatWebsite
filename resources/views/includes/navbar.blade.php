<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Tâm Chay Retreat Homestay</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item">
                <a class="nav-link" href="/about">@lang('texts.about')
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/messages/create">@lang('texts.contact')
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/rooms">@lang('texts.rooms')
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownForTravelers" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('texts.for_travelers')</a>
                <div class="dropdown-menu" aria-labelledby="dropdownForTravelers">
                    <a class="dropdown-item" href="/guidelines">@lang('texts.guidelines')</a>
                    <a class="dropdown-item" href="/booking">@lang('texts.booking')</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownForGroups" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('texts.for_groups')</a>
                <div class="dropdown-menu" aria-labelledby="dropdownForGroups">
                    <a class="dropdown-item" href="/guidelines">@lang('texts.guidelines')</a>
                    <a class="dropdown-item" href="/groupBooking">@lang('texts.booking')</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
