@extends('admin.layouts.master')
@section('title')
    Resort Kalinaw | Dashboard
@endsection

@section('contents')
    <!-- Start::page-header -->
    <div class="items-center justify-between block my-6 md:flex page-header-breadcrumb">
        <div>
            <h4 class="mb-0 font-medium text-defaulttextcolor">Hi, {{ Auth::user()->name }} welcome back!</h4>
            <p class="-mt-[0.2rem] mb-0 text-textmuted">Sales monitoring dashboard.</p>
        </div>

    </div>
    <!-- End::page-header -->



    <!-- row -->
    <div class="grid grid-cols-12 gap-x-6">
        <div class="col-span-12 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12">
            <div class="box overflow-hidden sales-box bg-primary-gradient !rounded-sm">
                <div class="px-4 pt-4 pb-2">
                    <div>
                        <h6 class="mb-3 text-[.75rem] font-medium text-fixed-white">TODAY BOOK</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="flex">
                            <div>
                                <h4 class="font-bold text-[1.25rem] text-fixed-white">5</h4>
                                <p class="mb-0 text-[.75rem] text-fixed-white opacity-[0.7]">Compared to
                                    yesterday</p>
                            </div>
                            <span class="my-auto float-end ms-auto">
                                <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                <span class="text-fixed-white opacity-[0.7]"> +7</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="compositeline" class="!-mb-[2px]"></div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12">
            <div class="box  overflow-hidden sales-card bg-danger-gradient !rounded-sm">
                <div class="px-4 pt-4 pb-2">
                    <div>
                        <h6 class="mb-3 text-[.75rem] font-medium text-fixed-white">THIS WEEK BOOKINGS</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="flex">
                            <div>
                                <h4 class="text-[1.25rem] font-bold text-fixed-white">20</h4>
                                <p class="mb-0  text-[.75rem] text-fixed-white opacity-[0.7]">Compared to
                                    last week</p>
                            </div>
                            <span class="my-auto float-end ms-auto">
                                <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                <span class="text-fixed-white opacity-[0.7]"> -13</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="compositeline2" class="!-mb-[2px]"></div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12">
            <div class="box  overflow-hidden sales-card bg-success-gradient !rounded-sm">
                <div class="px-4 pt-4 pb-2">
                    <div>
                        <h6 class="mb-3 text-[.75rem] font-medium text-fixed-white">THIS MONTH BOOKINGS</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="flex">
                            <div>
                                <h4 class="text-[1.25rem] font-bold text-fixed-white">57</h4>
                                <p class="mb-0 text-[.75rem] text-fixed-white opacity-[0.7]">Compared to
                                    last month</p>
                            </div>
                            <span class="my-auto float-end ms-auto">
                                <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                <span class="text-fixed-white opacity-[0.7]"> +69</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="compositeline3" class="!-mb-[2px]"></div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12">
            <div class="box  overflow-hidden sales-card bg-warning-gradient !rounded-sm">
                <div class="px-4 pt-4 pb-2">
                    <div>
                        <h6 class="mb-3 text-[.75rem] font-medium text-fixed-white">THIS YEAR BOOKINGS</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="flex">
                            <div>
                                <h4 class="text-[1.25rem] font-bold text-fixed-white">639</h4>
                                <p class="mb-0 text-[.75rem] text-fixed-white opacity-[0.7]">Compared to
                                    last year</p>
                            </div>
                            <span class="my-auto float-end ms-auto">
                                <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                <span class="text-fixed-white opacity-[0.7]"> +789</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="compositeline4" class="!-mb-[2px]"></div>
            </div>
        </div>
    </div>
    <!-- row closed -->

    <!-- row opened -->
    <div class="grid grid-cols-12 gap-x-6">
        <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-7">
            <div class="box">
                <div class="box-header !border-b-0 !pb-0 flex justify-between">
                    <div>
                        <h4 class="mb-2 box-title">Order status</h4>
                        <div>
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Order Status and Tracking. Track your
                                order from ship date to arrival. To begin, enter your order number.</p>
                        </div>
                    </div>
                    <div class="hs-dropdown ti-dropdown">
                        <a aria-label="anchor" href="javascript:void(0);"
                            class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="fe fe-more-horizontal text-[0.8rem]"></i>
                        </a>
                        <ul class="hs-dropdown-menu z-[106] ti-dropdown-menu hidden">
                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Action</a></li>
                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Another action</a></li>
                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="box-body !pb-0">
                    <div class="total-revenue">
                        <div>
                            <h4>120,750</h4>
                            <label><span class="bg-primary"></span>success</label>
                        </div>
                        <div>
                            <h4>56,108</h4>
                            <label><span class="bg-danger"></span>Pending</label>
                        </div>
                        <div>
                            <h4>32,895</h4>
                            <label><span class="bg-warning"></span>Failed</label>
                        </div>
                    </div>
                    <div id="Sales-bar" class="sales-bar"></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-12 xl:col-span-5">
            <div class="box">
                <div class="box-header !border-b-0 !pb-0">
                    <h4 class="mb-2 box-title">Recent Orders</h4>
                    <p class="text-[.75rem] mb-0 text-textmuted font-normal">An order is an investor's instructions to a
                        broker or brokerage firm to purchase or sell</p>
                </div>
                <div class="box-body sales-info !pb-0 !pt-0 !mt-0">
                    <div id="chart" class="h-[150px]"></div>
                    <div class="grid w-full grid-cols-12 pb-0 mx-auto mb-0 gap-x-6 sales-infomation">
                        <div class="col-span-12 px-2 md:col-span-6">
                            <p class="flex mb-0"><span class="legend bg-primary !rounded-[0.13]"></span>Delivered</p>
                            <h3 class="mb-1 leading-none">5238</h3>
                            <div class="flex">
                                <p class="mb-3 text-textmuted">Last 6 months</p>
                            </div>
                        </div>
                        <div class="col-span-12 px-2 md:col-span-6">
                            <p class="flex mb-0"><span class="legend bg-info !rounded-[0.13]"></span>Cancelled</p>
                            <h3 class="mb-1 leading-none">3467</h3>
                            <div class="flex">
                                <p class="mb-3 text-textmuted">Last 6 months</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@push('scripts')
    <!-- Apex Charts JS -->
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- CRM-Dashboard -->
    <script src="{{ asset('backend/assets/js/index.js') }}"></script>
@endpush
