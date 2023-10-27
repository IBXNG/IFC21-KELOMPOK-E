<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css') <!-- daisyUI 3.9.4 -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin Kelompok E</title>
</head>

<!-- side -->
<div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform">
    <a class="flex items-center m-2 pb-2 border-b-2 border-b-gray-800">
        <span class="text-xl font-bold text-white ml-3">Kelompok E</span>
    </a>
    <a class="flex flex-col space-y-2">
        <button class="btn btn-active btn-ghost text-white py-2 px-20">Dashboard</button>
        <button class="btn btn-active btn-ghost text-white py-2 px-20">Service</button>
        <button class="btn btn-active btn-ghost text-white py-2 px-20">Settings</button>
    </a>
    
</div>
<!-- side-end -->

<!-- navbar -->
<body>
    <div class="navbar py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30 md:w-[calc(100%-256px)] md:ml-64">
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xl">Dashboard</a>
  </div>
  <div class="flex-none gap-2">
    <div>
        <ul class="menu bg-base-200 lg:menu-horizontal rounded-box cen">
            <li>
              <a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                Inbox
                <span class="badge badge-sm">99+</span>
              </a>
            </li>
            <li>
              <a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                Updates
                <span class="badge badge-sm badge-warning">NEW</span>
              </a>
            </li>
            <li>
              <a>
                Stats
                <span class="badge badge-xs badge-info"></span>
              </a>
            </li>
          </ul>  
    </div>
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img src="{{ URL('img/ridwan.jpg') }}" />
        </div>
      </label>
      <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
        <li>
          <a class="justify-between">
            Profile
            <span class="badge">New</span>
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
  </div>
</div>
</body>
<!-- navbar-end -->

<!-- content -->

<div class="overflow-x-auto w-full md:w-[calc(100%-256px)] md:ml-64">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <th>Name</th>
        <th>Job</th>
        <th>Favorite Color</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center space-x-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                <img src="{{ URL('img/ridwan.jpg') }}" />
              </div>
            </div>
            <div>
              <div class="font-bold">Hart Hagerty</div>
              <div class="text-sm opacity-50">United States</div>
            </div>
          </div>
        </td>
        <td>
          Zemlak, Daniel and Leannon
          <br/>
          <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
        </td>
        <td>Purple</td>
        <th>
          <button class="btn btn-ghost btn-xs">details</button>
        </th>
      </tr>
      <!-- row 2 -->
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center space-x-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                <img src="{{ URL('img/ridwan.jpg') }}" />
              </div>
            </div>
            <div>
              <div class="font-bold">Brice Swyre</div>
              <div class="text-sm opacity-50">China</div>
            </div>
          </div>
        </td>
        <td>
          Carroll Group
          <br/>
          <span class="badge badge-ghost badge-sm">Tax Accountant</span>
        </td>
        <td>Red</td>
        <th>
          <button class="btn btn-ghost btn-xs">details</button>
        </th>
      </tr>
      <!-- row 3 -->
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center space-x-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                <img src="{{ URL('img/ridwan.jpg') }}" />
              </div>
            </div>
            <div>
              <div class="font-bold">Marjy Ferencz</div>
              <div class="text-sm opacity-50">Russia</div>
            </div>
          </div>
        </td>
        <td>
          Rowe-Schoen
          <br/>
          <span class="badge badge-ghost badge-sm">Office Assistant I</span>
        </td>
        <td>Crimson</td>
        <th>
          <button class="btn btn-ghost btn-xs">details</button>
        </th>
      </tr>
      <!-- row 4 -->
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center space-x-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                <img src="{{ URL('img/ridwan.jpg') }}" />
              </div>
            </div>
            <div>
              <div class="font-bold">Yancy Tear</div>
              <div class="text-sm opacity-50">Brazil</div>
            </div>
          </div>
        </td>
        <td>
          Wyman-Ledner
          <br/>
          <span class="badge badge-ghost badge-sm">Community Outreach Specialist</span>
        </td>
        <td>Indigo</td>
        <th>
          <button class="btn btn-ghost btn-xs">details</button>
        </th>
      </tr>
    </tbody>
    <!-- foot -->
    <tfoot>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Job</th>
        <th>Favorite Color</th>
        <th></th>
      </tr>
    </tfoot>
    
  </table>
</div>

<!-- content-end -->

<!-- footer -->

<footer class="footer absolute inset-x-0 bottom-0 p-8 bg-base-200 text-base-content md:w-[calc(100%-256px)] md:ml-64">
    <aside>
      <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg>
      <p>KELOMPOK E.<br/>since 2023</p>
    </aside> 
    <nav>
      <header class="footer-title">Services</header> 
      <a class="link link-hover">Branding</a> 
      <a class="link link-hover">Design</a> 
      <a class="link link-hover">Marketing</a> 
      <a class="link link-hover">Advertisement</a>
    </nav> 
    <nav>
      <header class="footer-title">Company</header> 
      <a class="link link-hover">About us</a> 
      <a class="link link-hover">Contact</a> 
      <a class="link link-hover">Jobs</a> 
      <a class="link link-hover">Press kit</a>
    </nav> 
    <nav>
      <header class="footer-title">Legal</header> 
      <a class="link link-hover">Terms of use</a> 
      <a class="link link-hover">Privacy policy</a> 
      <a class="link link-hover">Cookie policy</a>
    </nav>
  </footer>

<!-- footer-end -->
</html>