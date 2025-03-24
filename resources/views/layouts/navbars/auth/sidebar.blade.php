
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="align-items-center d-flex m-0 navbar-brand text-wrap" style="" href="{{ url('/dashboard') }}">
        <img src="{{asset('uploads/'.App\Models\Setting::getSetting('white_logo'))}}" class="navbar-brand-img h-100" alt="AIBOT">
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('dashboard') ? 'active' : '') }}" href="{{ url('/dashboard') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>shop </title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(0.000000, 148.000000)">
                      <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                      <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>

      <li class="nav-item pb-2">
        <a class="nav-link {{ (Request::is('dashboard/user*') &&  (Request::is('dashboard/user-list*')) && !Request::is('dashboard/user-profile') && !Request::is('dashboard/delete-user-request*')) ? 'active' : '' }}"   href="{{route('user.index')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i style="font-size: 1rem;" class="fa fa-users ps-2 pe-2 text-center text-dark {{ (Request::is('dashboard/user*') && !Request::is('dashboard/user-profile') && !Request::is('dashboard/delete-user-request*')) ? 'text-white' : 'text-dark' }} " aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">User List</span>
        </a>
      </li>


        <li class="nav-item pb-2">
            <a class="nav-link {{ (Request::is('dashboard/all-reports*') || Request::is('dashboard/today-generated-document') || Request::is('dashboard/today-generated-image')) ? 'active' : '' }}"
               href="{{url('dashboard/all-reports')}}">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i style="font-size: 1rem;" class="fa fa-recycle ps-2 pe-2 text-center text-dark {{ (Request::is('dashboard/all-reports*') || Request::is('dashboard/today-generated-document') || Request::is('dashboard/today-generated-image')) ? 'text-white' : 'text-dark' }} " aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">Status Report</span>
            </a>
        </li>




        <li class="nav-item pb-2">
            <a class="nav-link {{ (Request::is('dashboard/membership*')) ? 'active' : '' }}"
               href="{{route('membership.index')}}">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i style="font-size: 1rem;" class="fa fa-dollar ps-2 pe-2 text-center text-dark {{ (Request::is('dashboard/membership*')) ? 'text-white' : 'text-dark' }} " aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">Billing Subscriptions</span>
            </a>
        </li>



        <li class="nav-item pb-2">
            <a class="nav-link {{ (Request::is('dashboard/all-transaction*') || Request::is('dashboard/transaction*')) ? 'active' : '' }}"
               href="{{url('dashboard/all-transaction')}}">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i style="font-size: 1rem;" class="fa fa-list ps-2 pe-2 text-center text-dark {{ (Request::is('dashboard/all-transaction*') ||Request::is('dashboard/transaction*')) ? 'text-white' : 'text-dark' }} " aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">All Transactions</span>
            </a>
        </li>


        <li class="nav-item pb-2">
            <a class="nav-link {{ (Request::is('dashboard/template*')) ? 'active' : '' }}"
               href="{{url('dashboard/template')}}">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i style="font-size: 1rem;" class="fa fa-list-alt ps-2 pe-2 text-center text-dark {{ (Request::is('dashboard/template*')) ? 'text-white' : 'text-dark' }} " aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">Category List</span>
            </a>
        </li>


        <li class="nav-item pb-2">
            <a class="nav-link {{ (Request::is('dashboard/support-request*') || Request::is('dashboard/support-ticket*')) ? 'active' : '' }}"
               href="{{url('dashboard/support-ticket')}}">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i style="font-size: 1rem;" class="fa fa-yelp ps-2 pe-2 text-center text-dark {{ (Request::is('dashboard/support-requests*') || Request::is('dashboard/support-ticket*')) ? 'text-white' : 'text-dark' }} " aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">Support Requests</span>
            </a>
        </li>
        <li class="nav-item pb-2">
            <a class="nav-link {{ (Request::is('dashboard/delete-user-request*')) ? 'active' : '' }}"
               href="{{route('delete-user-request.index')}}">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i style="font-size: 1rem;" class="fa fa-user-times  ps-2 pe-2 text-center text-dark {{ (Request::is('dashboard/delete-user-request*')) ? 'text-white' : 'text-dark' }} " aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">User Delete Requests</span>
            </a>
        </li>


        <li class="nav-item pb-2">
            <a class="nav-link {{ (Request::is('dashboard/contact-list*')) ? 'active' : '' }}"
               href="{{url('dashboard/contact-list')}}">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i style="font-size: 1rem;" class="fa fa-envelope ps-2 pe-2 text-center text-dark {{ (Request::is('dashboard/inquiry*')) ? 'text-white' : 'text-dark' }} " aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">User Contact List</span>
            </a>
        </li>
        
        <li class="nav-item pb-2">
            <a class="nav-link {{ (Request::is('dashboard/language*')) ? 'active' : '' }}"
               href="{{route('language.index')}}">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i style="font-size: 1rem;" class="fa fa-language ps-2 pe-2 text-center text-dark {{ (Request::is('dashboard/language*')) ? 'text-white' : 'text-dark' }} " aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">Languages Setting</span>
            </a>
        </li>

        <li class="nav-item pb-2">
            <a class="nav-link {{ (Request::is('dashboard/setting*')) ? 'active' : '' }}"
               href="{{url('dashboard/setting')}}">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i style="font-size: 1rem;" class="fa fa-gear ps-2 pe-2 text-center text-dark {{ (Request::is('dashboard/setting*')) ? 'text-white' : 'text-dark' }} " aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">App & Ads Settings</span>
            </a>
        </li>


        <li class="nav-item pb-2">
            <a class="nav-link {{ (Request::is('dashboard/multi-setting*')) ? 'active' : '' }}"
               href="{{url('dashboard/multi-setting')}}">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i style="font-size: 1rem;" class="fa fa-gear ps-2 pe-2 text-center text-dark {{ (Request::is('dashboard/multi-setting*')) ? 'text-white' : 'text-dark' }} " aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">Multi Settings</span>
            </a>
        </li>


    </ul>
  </div>
{{--  <div class="sidenav-footer mx-3 ">--}}
{{--    <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">--}}
{{--      <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpeg')"></div>--}}
{{--      <div class="card-body text-start p-3 w-100">--}}
{{--        <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">--}}
{{--          <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>--}}
{{--        </div>--}}
{{--        <div class="docs-info">--}}
{{--          <h6 class="text-white up mb-0">Need help?</h6>--}}
{{--          <p class="text-xs font-weight-bold">Please check our docs</p>--}}
{{--          <a href="" target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
</aside>
