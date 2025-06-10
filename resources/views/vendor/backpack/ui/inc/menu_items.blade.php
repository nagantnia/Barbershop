{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Collections" icon="la la-question" :link="backpack_url('collection')" />
<x-backpack::menu-item title="Services" icon="la la-question" :link="backpack_url('services')" />
<x-backpack::menu-item title="Posts" icon="la la-question" :link="backpack_url('post')" />
<x-backpack::menu-item title="Pricings" icon="la la-question" :link="backpack_url('pricing')" />
<x-backpack::menu-item title="Barbers" icon="la la-question" :link="backpack_url('barber')" />
<x-backpack::menu-item title="Bookings" icon="la la-question" :link="backpack_url('booking')" />