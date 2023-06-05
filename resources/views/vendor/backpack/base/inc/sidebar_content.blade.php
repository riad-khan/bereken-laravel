{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
{{-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li> --}}



<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper"></i> News</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="nav-icon la la-pen"></i>
                Tags</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i
                    class="nav-icon la la-book-open"></i> Categories</a></li>
        <li class="nav-item"><a class="nav-link" href="/admin/news"><i class="nav-icon la la-newspaper"></i>All News</a>
        </li>

    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-question"></i> Knowledge</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('knowledge-category') }}"><i
                    class="nav-icon la la-book-open"></i>categories</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('knowledges') }}"><i
                    class="nav-icon la la-question"></i> Knowledges</a></li>
    </ul>
</li>


{{-- --}}

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-calculator"></i> BMI Calculator</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="/admin/bmi"><i class="nav-icon la la-cog"></i> <span>Calculator
                    Settings</span></a></li>
        <li class="nav-item"><a class="nav-link" href="/admin/bmi/results"><i class="nav-icon la la-link"></i>
                <span>Result Information</span></a></li>
        <li class="nav-item"><a class="nav-link" href="/admin/bmi/faq"><i class="nav-icon la la-question"></i>
                <span>FAQ</span></a></li>

    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-calculator"></i> VAT Calculator</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="/admin/vat"><i class="nav-icon la la-cog"></i> <span>Calculator
                    Settings</span></a></li>
        <li class="nav-item"><a class="nav-link" href="/admin/vat/faq"><i class="nav-icon la la-question"></i>
                <span>FAQ</span></a></li>


    </ul>
</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('contact') }}"><i class="nav-icon la la-question"></i> Contacts</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('seo-data-table') }}"><i class="nav-icon la la-edge"></i>
        Seo data tables</a></li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-cog"></i> Settings</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('social-link') }}"><i
                    class="nav-icon la la-link"></i> <span>Social Links</span></a></li>

        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-home"></i>Home Sections</a>
            <ul class="nav-dropdown-items">
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('accurates') }}"><i
                            class="nav-icon la la-question"></i>
                        Accurates</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{backpack_url('populer-calculators')}}"><i
                            class="nav-icon la la-question"></i>
                        Popular sections</a></li>

                <li class="nav-item"><a class="nav-link" href="{{backpack_url('dropdown-settings')}}"><i
                                class="nav-icon la la-question"></i>
                       Dropdown Menus</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('home-reviews') }}"><i
                            class="nav-icon la la-question"></i> Home reviews</a></li>
            </ul>
        </li>

    </ul>
</li>


<li class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-info') }}"><i class="nav-icon la la-th-list"></i> Contact infos</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('subscribe') }}"><i class="nav-icon la la-th-list"></i> Subscribes</a></li>