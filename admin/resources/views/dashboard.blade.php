<x-app-layout>
    <x-slot name="header">
            {{ __('Dashboard') }}
    </x-slot>

    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
      <div
        class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5"
      >
        <!-- Card Item Start -->
        <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
          <div class="mt-4 text-center">
            <h1 class="block w-full font-semibold text-xl">
              Number of users  
            </h1>
            <p class="mt-3">
              {{ $users->count() }}
            </p>
          </div>
        </div>
        <!-- Card Item End -->

        <!-- Card Item Start -->
        <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
          <div class="mt-4 text-center">
            <h1 class="block w-full font-semibold text-xl">
              Number of Cattle  
            </h1>
            <p class="mt-3">
              {{ $cattles->count() }}
            </p>
          </div>
        </div>
        <!-- Card Item End -->

        <!-- Card Item Start -->
        <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
          <div class="mt-4 text-center">
            <h1 class="block w-full font-semibold text-xl">
              Amount of milk Produced
            </h1>
            <p class="mt-3">
              @php
                $amount = 0;
                foreach($milks as $milk){
                  $amount += $milk->quantity;
                }
              @endphp
              {{ $amount.' L' }}
            </p>
          </div>
        </div>
        <!-- Card Item End -->

        <!-- Card Item Start -->
        <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
          <div class="mt-4 text-center">
            <h1 class="block w-full font-semibold text-xl">
              Amount of cattle for sale  
            </h1>
            <p class="mt-3">
              {{ $markets->count() }}
            </p>
          </div>
        </div>
        <!-- Card Item End -->
      </div>

      <div
        class="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5"
      >
        <!-- ====== Chart One Start -->
        <div
class="col-span-12 rounded-sm border border-stroke bg-white px-5 pt-7.5 pb-5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-8"
>
      <canvas id=myChart></canvas>
</div>

        <!-- ====== Chart One End -->

        <!-- ====== Chart Two Start -->
        <div
class="col-span-12 rounded-sm border border-stroke bg-white p-7.5 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4"
>
<div class="mb-4 justify-between gap-4 sm:flex">
<div>
<h4 class="text-xl font-bold text-black dark:text-white">
  Profit this week
</h4>
</div>
<div>
<div class="relative z-20 inline-block">
  <select
    name="#"
    id="#"
    class="relative z-20 inline-flex appearance-none bg-transparent py-1 pl-3 pr-8 text-sm font-medium outline-none"
  >
    <option value="">This Week</option>
    <option value="">Last Week</option>
  </select>
  <span class="absolute top-1/2 right-3 z-10 -translate-y-1/2">
    <svg
      width="10"
      height="6"
      viewBox="0 0 10 6"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M0.47072 1.08816C0.47072 1.02932 0.500141 0.955772 0.54427 0.911642C0.647241 0.808672 0.809051 0.808672 0.912022 0.896932L4.85431 4.60386C4.92785 4.67741 5.06025 4.67741 5.14851 4.60386L9.09079 0.896932C9.19376 0.793962 9.35557 0.808672 9.45854 0.911642C9.56151 1.01461 9.5468 1.17642 9.44383 1.27939L5.50155 4.98632C5.22206 5.23639 4.78076 5.23639 4.51598 4.98632L0.558981 1.27939C0.50014 1.22055 0.47072 1.16171 0.47072 1.08816Z"
        fill="#637381"
      />
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M1.22659 0.546578L5.00141 4.09604L8.76422 0.557869C9.08459 0.244537 9.54201 0.329403 9.79139 0.578788C10.112 0.899434 10.0277 1.36122 9.77668 1.61224L9.76644 1.62248L5.81552 5.33722C5.36257 5.74249 4.6445 5.7544 4.19352 5.32924C4.19327 5.32901 4.19377 5.32948 4.19352 5.32924L0.225953 1.61241C0.102762 1.48922 -4.20186e-08 1.31674 -3.20269e-08 1.08816C-2.40601e-08 0.905899 0.0780105 0.712197 0.211421 0.578787C0.494701 0.295506 0.935574 0.297138 1.21836 0.539529L1.22659 0.546578ZM4.51598 4.98632C4.78076 5.23639 5.22206 5.23639 5.50155 4.98632L9.44383 1.27939C9.5468 1.17642 9.56151 1.01461 9.45854 0.911642C9.35557 0.808672 9.19376 0.793962 9.09079 0.896932L5.14851 4.60386C5.06025 4.67741 4.92785 4.67741 4.85431 4.60386L0.912022 0.896932C0.809051 0.808672 0.647241 0.808672 0.54427 0.911642C0.500141 0.955772 0.47072 1.02932 0.47072 1.08816C0.47072 1.16171 0.50014 1.22055 0.558981 1.27939L4.51598 4.98632Z"
        fill="#637381"
      />
    </svg>
  </span>
</div>
</div>
</div>

<div>
<div id="chartTwo" class="-ml-5 -mb-9"></div>
</div>
</div>

        <!-- ====== Chart Two End -->

        <!-- ====== Chart Three Start -->
        <div
class="col-span-12 rounded-sm border border-stroke bg-white px-5 pt-7.5 pb-5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-5"
>
<div class="mb-3 justify-between gap-4 sm:flex">
<div>
<h4 class="text-xl font-bold text-black dark:text-white">
  Visitors Analytics
</h4>
</div>
<div>
<div class="relative z-20 inline-block">
  <select
    name=""
    id=""
    class="relative z-20 inline-flex appearance-none bg-transparent py-1 pl-3 pr-8 text-sm font-medium outline-none"
  >
    <option value="">Monthly</option>
    <option value="">Yearly</option>
  </select>
  <span class="absolute top-1/2 right-3 z-10 -translate-y-1/2">
    <svg
      width="10"
      height="6"
      viewBox="0 0 10 6"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M0.47072 1.08816C0.47072 1.02932 0.500141 0.955772 0.54427 0.911642C0.647241 0.808672 0.809051 0.808672 0.912022 0.896932L4.85431 4.60386C4.92785 4.67741 5.06025 4.67741 5.14851 4.60386L9.09079 0.896932C9.19376 0.793962 9.35557 0.808672 9.45854 0.911642C9.56151 1.01461 9.5468 1.17642 9.44383 1.27939L5.50155 4.98632C5.22206 5.23639 4.78076 5.23639 4.51598 4.98632L0.558981 1.27939C0.50014 1.22055 0.47072 1.16171 0.47072 1.08816Z"
        fill="#637381"
      />
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M1.22659 0.546578L5.00141 4.09604L8.76422 0.557869C9.08459 0.244537 9.54201 0.329403 9.79139 0.578788C10.112 0.899434 10.0277 1.36122 9.77668 1.61224L9.76644 1.62248L5.81552 5.33722C5.36257 5.74249 4.6445 5.7544 4.19352 5.32924C4.19327 5.32901 4.19377 5.32948 4.19352 5.32924L0.225953 1.61241C0.102762 1.48922 -4.20186e-08 1.31674 -3.20269e-08 1.08816C-2.40601e-08 0.905899 0.0780105 0.712197 0.211421 0.578787C0.494701 0.295506 0.935574 0.297138 1.21836 0.539529L1.22659 0.546578ZM4.51598 4.98632C4.78076 5.23639 5.22206 5.23639 5.50155 4.98632L9.44383 1.27939C9.5468 1.17642 9.56151 1.01461 9.45854 0.911642C9.35557 0.808672 9.19376 0.793962 9.09079 0.896932L5.14851 4.60386C5.06025 4.67741 4.92785 4.67741 4.85431 4.60386L0.912022 0.896932C0.809051 0.808672 0.647241 0.808672 0.54427 0.911642C0.500141 0.955772 0.47072 1.02932 0.47072 1.08816C0.47072 1.16171 0.50014 1.22055 0.558981 1.27939L4.51598 4.98632Z"
        fill="#637381"
      />
    </svg>
  </span>
</div>
</div>
</div>
<div class="mb-2">
<div id="chartThree" class="mx-auto flex justify-center"></div>
</div>
<div class="-mx-8 flex flex-wrap items-center justify-center gap-y-3">
<div class="w-full px-8 sm:w-1/2">
<div class="flex w-full items-center">
  <span
    class="mr-2 block h-3 w-full max-w-3 rounded-full bg-primary"
  ></span>
  <p
    class="flex w-full justify-between text-sm font-medium text-black dark:text-white"
  >
    <span> Desktop </span>
    <span> 65% </span>
  </p>
</div>
</div>
<div class="w-full px-8 sm:w-1/2">
<div class="flex w-full items-center">
  <span
    class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#6577F3]"
  ></span>
  <p
    class="flex w-full justify-between text-sm font-medium text-black dark:text-white"
  >
    <span> Tablet </span>
    <span> 34% </span>
  </p>
</div>
</div>
<div class="w-full px-8 sm:w-1/2">
<div class="flex w-full items-center">
  <span
    class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#8FD0EF]"
  ></span>
  <p
    class="flex w-full justify-between text-sm font-medium text-black dark:text-white"
  >
    <span> Mobile </span>
    <span> 45% </span>
  </p>
</div>
</div>
<div class="w-full px-8 sm:w-1/2">
<div class="flex w-full items-center">
  <span
    class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#0FADCF]"
  ></span>
  <p
    class="flex w-full justify-between text-sm font-medium text-black dark:text-white"
  >
    <span> Unknown </span>
    <span> 12% </span>
  </p>
</div>
</div>
</div>
</div>

        <!-- ====== Chart Three End -->

        <!-- ====== Map One Start -->
        <div
class="col-span-12 rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-7"
>
<h4 class="mb-2 text-xl font-bold text-black dark:text-white">
Region labels
</h4>
<div id="mapOne" class="mapOne map-btn h-90"></div>
</div>

        <!-- ====== Map One End -->

        <!-- ====== Table One Start -->
        <div class="col-span-12 xl:col-span-8">
          <div
class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1"
>
<h4 class="mb-6 text-xl font-bold text-black dark:text-white">
Top Channels
</h4>

<div class="flex flex-col">
<div
class="grid grid-cols-3 rounded-sm bg-gray-2 dark:bg-meta-4 sm:grid-cols-5"
>
<div class="p-2.5 xl:p-5">
  <h5 class="text-sm font-medium uppercase xsm:text-base">Source</h5>
</div>
<div class="p-2.5 text-center xl:p-5">
  <h5 class="text-sm font-medium uppercase xsm:text-base">Visitors</h5>
</div>
<div class="p-2.5 text-center xl:p-5">
  <h5 class="text-sm font-medium uppercase xsm:text-base">Revenues</h5>
</div>
<div class="hidden p-2.5 text-center sm:block xl:p-5">
  <h5 class="text-sm font-medium uppercase xsm:text-base">Sales</h5>
</div>
<div class="hidden p-2.5 text-center sm:block xl:p-5">
  <h5 class="text-sm font-medium uppercase xsm:text-base">Conversion</h5>
</div>
</div>

<div
class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:grid-cols-5"
>
<div class="flex items-center gap-3 p-2.5 xl:p-5">
  <div class="flex-shrink-0">
    <img src="src/images/brand/brand-01.svg" alt="Brand" />
  </div>
  <p class="hidden font-medium text-black dark:text-white sm:block">
    Google
  </p>
</div>

<div class="flex items-center justify-center p-2.5 xl:p-5">
  <p class="font-medium text-black dark:text-white">3.5K</p>
</div>

<div class="flex items-center justify-center p-2.5 xl:p-5">
  <p class="font-medium text-meta-3">$5,768</p>
</div>

<div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
  <p class="font-medium text-black dark:text-white">590</p>
</div>

<div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
  <p class="font-medium text-meta-5">4.8%</p>
</div>
</div>

<div
class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:grid-cols-5"
>
<div class="flex items-center gap-3 p-2.5 xl:p-5">
  <div class="flex-shrink-0">
    <img src="src/images/brand/brand-02.svg" alt="Brand" />
  </div>
  <p class="hidden font-medium text-black dark:text-white sm:block">
    Twitter
  </p>
</div>

<div class="flex items-center justify-center p-2.5 xl:p-5">
  <p class="font-medium text-black dark:text-white">2.2K</p>
</div>

<div class="flex items-center justify-center p-2.5 xl:p-5">
  <p class="font-medium text-meta-3">$4,635</p>
</div>

<div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
  <p class="font-medium text-black dark:text-white">467</p>
</div>

<div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
  <p class="font-medium text-meta-5">4.3%</p>
</div>
</div>

<div
class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:grid-cols-5"
>
<div class="flex items-center gap-3 p-2.5 xl:p-5">
  <div class="flex-shrink-0">
    <img src="src/images/brand/brand-03.svg" alt="Brand" />
  </div>
  <p class="hidden font-medium text-black dark:text-white sm:block">
    Github
  </p>
</div>

<div class="flex items-center justify-center p-2.5 xl:p-5">
  <p class="font-medium text-black dark:text-white">2.1K</p>
</div>

<div class="flex items-center justify-center p-2.5 xl:p-5">
  <p class="font-medium text-meta-3">$4,290</p>
</div>

<div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
  <p class="font-medium text-black dark:text-white">420</p>
</div>

<div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
  <p class="font-medium text-meta-5">3.7%</p>
</div>
</div>

<div
class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:grid-cols-5"
>
<div class="flex items-center gap-3 p-2.5 xl:p-5">
  <div class="flex-shrink-0">
    <img src="src/images/brand/brand-04.svg" alt="Brand" />
  </div>
  <p class="hidden font-medium text-black dark:text-white sm:block">
    Vimeo
  </p>
</div>

<div class="flex items-center justify-center p-2.5 xl:p-5">
  <p class="font-medium text-black dark:text-white">1.5K</p>
</div>

<div class="flex items-center justify-center p-2.5 xl:p-5">
  <p class="font-medium text-meta-3">$3,580</p>
</div>

<div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
  <p class="font-medium text-black dark:text-white">389</p>
</div>

<div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
  <p class="font-medium text-meta-5">2.5%</p>
</div>
</div>

<div class="grid grid-cols-3 sm:grid-cols-5">
<div class="flex items-center gap-3 p-2.5 xl:p-5">
  <div class="flex-shrink-0">
    <img src="src/images/brand/brand-05.svg" alt="Brand" />
  </div>
  <p class="hidden font-medium text-black dark:text-white sm:block">
    Facebook
  </p>
</div>

<div class="flex items-center justify-center p-2.5 xl:p-5">
  <p class="font-medium text-black dark:text-white">1.2K</p>
</div>

<div class="flex items-center justify-center p-2.5 xl:p-5">
  <p class="font-medium text-meta-3">$2,740</p>
</div>

<div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
  <p class="font-medium text-black dark:text-white">230</p>
</div>

<div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
  <p class="font-medium text-meta-5">1.9%</p>
</div>
</div>
</div>
</div>

        </div>
        <!-- ====== Table One End -->

        <!-- ====== Chat Card Start -->
        <div
          class="col-span-12 rounded-sm border border-stroke bg-white py-6 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4"
        >
          <h4
            class="mb-6 px-7.5 text-xl font-bold text-black dark:text-white"
          >
            Chats
          </h4>

          <div>
            <a
              href="messages.html"
              class="flex items-center gap-5 py-3 px-7.5 hover:bg-gray-3 dark:hover:bg-meta-4"
            >
              <div class="relative h-14 w-14 rounded-full">
                <img src="src/images/user/user-03.png" alt="User" />
                <span
                  class="absolute right-0 bottom-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"
                ></span>
              </div>

              <div class="flex flex-1 items-center justify-between">
                <div>
                  <h5 class="font-medium text-black dark:text-white">
                    Devid Heilo
                  </h5>
                  <p>
                    <span
                      class="text-sm font-medium text-black dark:text-white"
                      >Hello, how are you?</span
                    >
                    <span class="text-xs"> . 12 min</span>
                  </p>
                </div>
                <div
                  class="flex h-6 w-6 items-center justify-center rounded-full bg-primary"
                >
                  <span class="text-sm font-medium text-white">3</span>
                </div>
              </div>
            </a>
            <a
              href="messages.html"
              class="flex items-center gap-5 py-3 px-7.5 hover:bg-gray-3 dark:hover:bg-meta-4"
            >
              <div class="relative h-14 w-14 rounded-full">
                <img src="src/images/user/user-04.png" alt="User" />
                <span
                  class="absolute right-0 bottom-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"
                ></span>
              </div>

              <div class="flex flex-1 items-center justify-between">
                <div>
                  <h5 class="font-medium">Henry Fisher</h5>
                  <p>
                    <span class="text-sm font-medium"
                      >I am waiting for you</span
                    >
                    <span class="text-xs"> . 5:54 PM</span>
                  </p>
                </div>
              </div>
            </a>
            <a
              href="messages.html"
              class="flex items-center gap-5 py-3 px-7.5 hover:bg-gray-3 dark:hover:bg-meta-4"
            >
              <div class="relative h-14 w-14 rounded-full">
                <img src="src/images/user/user-05.png" alt="User" />
                <span
                  class="absolute right-0 bottom-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-6"
                ></span>
              </div>

              <div class="flex flex-1 items-center justify-between">
                <div>
                  <h5 class="font-medium">Wilium Smith</h5>
                  <p>
                    <span class="text-sm font-medium"
                      >Where are you now?</span
                    >
                    <span class="text-xs"> . 10:12 PM</span>
                  </p>
                </div>
              </div>
            </a>
            <a
              href="messages.html"
              class="flex items-center gap-5 py-3 px-7.5 hover:bg-gray-3 dark:hover:bg-meta-4"
            >
              <div class="relative h-14 w-14 rounded-full">
                <img src="src/images/user/user-01.png" alt="User" />
                <span
                  class="absolute right-0 bottom-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"
                ></span>
              </div>

              <div class="flex flex-1 items-center justify-between">
                <div>
                  <h5 class="font-medium text-black dark:text-white">
                    Henry Deco
                  </h5>
                  <p>
                    <span
                      class="text-sm font-medium text-black dark:text-white"
                      >Thank you so much!</span
                    >
                    <span class="text-xs"> . Sun</span>
                  </p>
                </div>
                <div
                  class="flex h-6 w-6 items-center justify-center rounded-full bg-primary"
                >
                  <span class="text-sm font-medium text-white">2</span>
                </div>
              </div>
            </a>
            <a
              href="messages.html"
              class="flex items-center gap-5 py-3 px-7.5 hover:bg-gray-3 dark:hover:bg-meta-4"
            >
              <div class="relative h-14 w-14 rounded-full">
                <img src="src/images/user/user-02.png" alt="User" />
                <span
                  class="absolute right-0 bottom-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-7"
                ></span>
              </div>

              <div class="flex flex-1 items-center justify-between">
                <div>
                  <h5 class="font-medium">Jubin Jack</h5>
                  <p>
                    <span class="text-sm font-medium"
                      >I really love that!</span
                    >
                    <span class="text-xs"> . Oct 23</span>
                  </p>
                </div>
              </div>
            </a>
            <a
              href="messages.html"
              class="flex items-center gap-5 py-3 px-7.5 hover:bg-gray-3 dark:hover:bg-meta-4"
            >
              <div class="relative h-14 w-14 rounded-full">
                <img src="src/images/user/user-05.png" alt="User" />
                <span
                  class="absolute right-0 bottom-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-6"
                ></span>
              </div>

              <div class="flex flex-1 items-center justify-between">
                <div>
                  <h5 class="font-medium">Wilium Smith</h5>
                  <p>
                    <span class="text-sm font-medium"
                      >Where are you now?</span
                    >
                    <span class="text-xs"> . Sep 20</span>
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- ====== Chat Card End -->
      </div>
    </div>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <canvas id="myChart"></canvas>
        </div>
    </div>
    @push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    console.log("Heerree")
    const ctx = document.getElementById('myChart');
    console.log(ctx)
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

  </script>

@endpush

</x-app-layout>
